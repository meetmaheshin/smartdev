<?php

namespace App\Http\Controllers\Freelancer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Models\ProposalSetting;
use App\Models\Project;
use App\Models\ProposalSettingDetail;
use App\Models\Conservation;
use App\Models\Message;
use App\Models\Wallet;
use App\Models\UserBalance;
use App\Models\UserBalanceHistory;
use App\Models\WithdrawProposal;
use App\Models\User;
use App\Notifications\AcceptInterview;
use App\Notifications\SendProposal;
use Auth,DB,socket;


class ProposalSettingController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','verified','check-profile']);
        $this->conservation = new Conservation;
    }


    public function index(Request $request,$id){
        $data['id'] = $id;
        $data['projectDetail'] = Project::whereId($id)->with('specialities')->with('saveJobs')->first();
        $data['ProposalSetting'] = ProposalSetting::where('project_id',$id)->where('user_id',Auth::user()->id)->first();
        $data['userbalance'] = UserBalance::where('user_id',auth()->user()->id)->first();
        $data['user_rate'] = User::with('freelancerRate')->where('id',auth()->user()->id)->first();
        return view('freelancer.proposal',$data);
    }

    public function proposalSubmit(Request $request){
        $budgetCheck = Project::select('budget','user_id')->with('user')->whereId($request->project_id)->first();
        $request->validate([
            'cover_letter'=>'required|min:50|max:5000',
            'attachment.*' => 'mimes:jpg,png,jpeg|max:5000'
        ],
        [
            'cover_letter.required' => 'A cover letter is required',
        ]);

        if($budgetCheck->budget =='project'){
            $request->validate([
                'duration_dropdown'=>'required',
            ],
            [
                'duration_dropdown.required' => 'Duration is required',
            ]);
        }
        $attributes = [
            'project_id' => $request->project_id,
            'user_id' => auth()->user()->id,
            'receiver_id' => $request->project_user_id,
            'duration_dropdown' => $request->duration_dropdown,
            'cover_letter' => $request->cover_letter
        ];
        $proposalSetting = ProposalSetting::updateOrCreate([
            'project_id'   => $request->project_id,
            'user_id'   => auth()->user()->id,
            'receiver_id'   => $request->project_user_id,
        ],[
            'milestoneMode' => $budgetCheck->budget,
            'duration_dropdown' => $request->duration_dropdown,
            'cover_letter' =>$request->cover_letter,
            'earned_amount' =>  ($request->earned_amount-(($request->earned_amount*20)/100)) ,
            'charged_amount' =>  $request->earned_amount 
        ]);
        $new_picture_array =[];
        
        if($request->hasFile('attachment'))
        {
            $allowedfileExtension=['pdf','jpg','png','jpeg','PDF','PNG','JPEG','JPG'];
            $files = $request->file('attachment');
            if($request->TotalImages > 0){
                foreach($files as $file){
                    $filename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $check=in_array($extension,$allowedfileExtension);
                    if($check){
                        
                        $path = $file->store('/storage/proposalAttchment', ['disk' =>   'my_files']);
                        $new_picture_array[]=array('proposal_id'=>$proposalSetting->id,'attachment'=>$path);
                        
                    }else{
                        return response()->json(['response' => 'false','errors'=>'Sorry Only Upload png , jpg , doc']);
                    }
                }
                ProposalSettingDetail::insert($new_picture_array);
            }
        }
        $sender = auth()->user()->id;
        $receiver = $request->project_user_id;
        $conversationData = $this->conservation->conservationByProject($request->project_id,auth()->user()->id, $request->project_user_id);
        
        $freelancerWallet = Wallet::where('user_id',auth()->user()->id)->where('primary','1')->first();
        if(empty($conversationData)){
            $conservation = new Conservation;
            $conservation->sender_id = auth()->user()->id;
            $conservation->receiver_id = $request->project_user_id;   
            $conservation->project_id = $request->project_id;
            $conservation->save();
            $LastInsertId = $conservation->id;
            $message = Message::create(['sender_id'=>auth()->user()->id,'conservation_id'=>$conservation->id,'message'=>$request->cover_letter]);
        }
        if($request->choose_token =='rovi'){
            $transaction_action = 4;
            $deductRoviAmount = 0.3;
            $deductDevAmount = 0;
            $deductUsdtAmount = 0;

        }else if($request->choose_token =='dev3'){
            $transaction_action = 5;
            $deductRoviAmount = 0;
            $deductUsdtAmount = 0;
            $deductDevAmount = 0.10;
        }else {
            $transaction_action = 6;
            $deductRoviAmount = 0;
            $deductUsdtAmount = 0.10;
            $deductDevAmount = 0;
        }
        $userBalanceHistory  = new UserBalanceHistory(); 
        $userBalanceHistory->user_id = auth()->user()->id;
        $userBalanceHistory->project_id = $request->project_id;
        $userBalanceHistory->rovi_amount = $deductRoviAmount;
        $userBalanceHistory->dev3_amount = $deductDevAmount;
        $userBalanceHistory->usdt_amount = $deductUsdtAmount;
        $userBalanceHistory->transaction_action = $transaction_action;
        $userBalanceHistory->action = 'debit';
        $userBalanceHistory->from_wallet = $freelancerWallet->wallet_address;
        $userBalanceHistory->to_wallet   = env('To_Address');
        $userBalanceHistory->transaction_hash = '';
        $userBalanceHistory->status = 0;
        $userBalanceHistory->save();       

        $userBalance = new UserBalance();
        $userBalanceHistory->user_id = auth()->user()->id;
        $userBalanceHistory->project_id = $request->project_id;
        $userBalanceHistory->rovi_amount = $deductRoviAmount;
        $userBalanceHistory->dev3_amount = $deductDevAmount;
        $userBalanceHistory->usdt_amount = $deductUsdtAmount;
        $userBalance =UserBalance::where('user_id',auth()->user()->id)->first();
        $userBalance = UserBalance::updateOrCreate(
            [
                'user_id' => auth()->user()->id,
            ],
            [
                'rovi_balance' => $userBalance->rovi_balance -$deductRoviAmount,
                'dev3_balance' => $userBalance->dev3_balance -$deductDevAmount,
                'usdt_balance' => $userBalance->usdt_balance -$deductUsdtAmount,

            ]
        );
        $receiver = User::find($request->project_user_id);
        $receiver->notify(new SendProposal($sender, $proposalSetting, $new_picture_array));
        return response()->json(['success'=>'true','message' => 'Proposal Successfully Sent.'], 201);
    }

    // list of proposals

    public function proposals(Request $request){
        $data['submit_proposal_list'] = ProposalSetting::where(['user_id'=>auth()->user()->id,'proposal_proposed_by'=>'0'])->with('projects')->orderBy('id','desc')->paginate(5);
        $array_proposal = ProposalSetting::where(['receiver_id'=>auth()->user()->id,'status'=>'0',])->with('projects')->orderBy('id','desc')->get();
        $active_proposal = ProposalSetting::where(['receiver_id'=>auth()->user()->id,'status'=>'1'])->with('projects')->orderBy('id','desc')->get();
        $cancelled_proposal = ProposalSetting::where(['receiver_id'=>auth()->user()->id,'status'=>'2'])->with('projects')->orderBy('id','desc')->get();
        
        $data['active_proposal_list'] = $array_proposal;
        $data['active_proposal'] = $active_proposal;
        $data['cancelled_proposal'] = $cancelled_proposal;


        return view('freelancer.proposal_list',$data);
    }

    public function proposalDetail(Request $request,$id){
        $data['proposal_list'] = ProposalSetting::whereId($id)->with('projects.skills')->first();
        $data['proposal_count'] = ProposalSetting::where('project_id', '=', $data['proposal_list']->project_id)
                     ->count();
        return view('freelancer.freelance_job_proposal',$data);
    }

    // withdraw proposal
    public function withdrawProposal(Request $request){
        $withdrawProposal = WithdrawProposal::updateOrCreate(
            [
                'user_id' => $request->userId,
                'project_id' => $request->projectId,
            ],
            [
                'reason' => $request->withdrawReason,
                'message' => $request->withdrawMessage,
            ]
        );
        $deleteProposal = ProposalSetting::whereId($request->proposalId)->delete();
        if($deleteProposal){
            return redirect()->route('proposals.list')->with('success','Proposal withdraw successfully');
        }
        return redirect()->route('proposals.list')->with('error','Failed to withdraw proposal');
    }
    // invitaion interview
    public function invitationInterview(Request $request, $id) {
        $data['project'] = Project::with(['categories', 'specialities'])->findOrFail($id);
        $data['allProject'] = Project::where('user_id',$data['project']->user_id )->count();
        $data['proposalSettings'] = ProposalSetting::withTrashed()->where('project_id', $id)
        ->where('receiver_id', auth()->user()->id)->orderBy('id','desc')
        ->first();
       
        return view('freelancer.freelance_job_proposal_interview',$data);
    }

    // submit invitation interview
    public function interviewProposalSubmit(Request $request) {
        $request->validate([
            'cover_letter'=>'required|min:1|max:5000',
        ],
        [
            'cover_letter.required' => 'A cover letter is required',
        ]);
      $conversation = Conservation::select('sender_id')->where(['project_id'=> $request->project_id,'receiver_id'=>auth()->user()->id])->first();

       $proposalSetting = ProposalSetting::updateOrCreate([
                'project_id'   => $request->project_id,
                'user_id'      => $conversation->sender_id,
                'receiver_id'   => auth()->user()->id,
                'proposal_proposed_by'=> 1,
            ],[
                'duration_dropdown' => $request->duration,
                'earned_amount' => ($request->charged_amount-(($request->charged_amount*20)/100)),
                'charged_amount' => $request->charged_amount,
                'status'=>'1'
            ]);
        if($request->hasFile('attachment'))
        {
            $allowedfileExtension=['jpeg','jpg','png','JPEG','JPG','PNG'];
            $files = $request->file('attachment');
            if($request->TotalImages > 0){
                foreach($files as $file){
                    $filename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $check=in_array($extension,$allowedfileExtension);
                    if($check){
                        
                        $path = $file->store('/storage/proposalAttchment', ['disk' =>   'my_files']);
                        $new_picture_array[]=array('proposal_id'=>$proposalSetting->id,'attachment'=>$path);
                        
                    }else{
                        return response()->json(['response' => 'false','errors'=>'Sorry Only Upload png , jpg , doc']);
                    }
                }
                ProposalSettingDetail::insert($new_picture_array);
            }
        }
        $conversationData = $this->conservation->conservationByProject($request->project_id,auth()->user()->id, $request->receiver_id);
        if(empty($conversationData)){
            $conservation = new Conservation;
            $conservation->sender_id = auth()->user()->id;
            $conservation->receiver_id = $request->receiver_id;   
            $conservation->project_id = $request->project_id;
            $conservation->save();
            $LastInsertId = $conservation->id;
            $message = Message::create(['sender_id'=>auth()->user()->id,'conservation_id'=>$conservation->id,'message'=>$request->cover_letter]);
        }else{
            $message = Message::create(['sender_id'=>auth()->user()->id,'conservation_id'=>$conversationData->id,'message'=>$request->cover_letter]);
        }
        $userSchema = $proposalSetting->users;
        Notification::send($userSchema, new AcceptInterview($proposalSetting));
        return redirect()->route('proposal.interview',['id'=>$request->project_id])->with('success','Proposal submitted successfully');
    }

    // decline invitation interview
    public function interviewProposalDecline(Request $request) {
        $conversation = Conservation::select('sender_id')->where(['project_id'=>$request->segment(4),'receiver_id'=>auth()->user()->id])->first();
        $proposalSetting = ProposalSetting::updateOrCreate([
            'project_id'   =>$request->segment(4),
            'user_id'      => $conversation->sender_id,
            'receiver_id'   => auth()->user()->id,
            'proposal_proposed_by'=> 1,
        ],[
            'status'=>'2'
        ]);
        $userSchema = $proposalSetting->users;
        Notification::send($userSchema, new AcceptInterview($proposalSetting));
        return redirect()->route('proposal.interview',['id'=>$request->segment(4)])->with('success','Proposal Declined');
    }

}
