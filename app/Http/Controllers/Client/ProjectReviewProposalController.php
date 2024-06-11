<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\Project;
use App\Models\User;
use App\Models\ProposalSetting;
use App\Models\Conservation;
use App\Models\Message;
use App\Models\Wallet;
use App\Models\ClientHire;
use App\Models\ProjectMilestone;
use App\Http\Requests\SendHireRequest;
use App\Notifications\SendInvitation;
use App\Notifications\PaymentReceived;
use Illuminate\Support\Facades\Notification;
use Auth, Session, URL,DB;


class ProjectReviewProposalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
        $this->conservation = new Conservation;
        $this->project = new Project;
        $this->proposal = new ProposalSetting ;
        $this->projectMilestone = new ProjectMilestone ;
        $this->pageCount = config('constants.pagination');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request, $id)
    {
        $request->session()->put('project_id', $id);       
        $data['project_id'] = $id;
        $data['projectDetail'] = $this->project->projectData($id);
        $data['proposals_sent'] = ProposalSetting::where(['user_id' => auth()->user()->id, 'project_id' => $id])->get();
        $data['proposals_Byfreelancer'] = ProposalSetting::where('user_id', '!=', auth()->user()->id)->where(['project_id' => $id])->get();
        $data['project_count'] = Project::where('user_id', auth()->user()->id)->where('job', '!=', 'draft')->get()->count();
        $sender = auth()->user()->id;

        // invite freelance tab
        $data['inviteFreelancer'] = User::where('is_admin', User::ROLE_FREELANCER)
            ->where('street_adresses', '!=', '')
            ->when($request->has("searchProposalInvite"),function($q)use($request){
                return $q->where("firstname","like","%".$request->get("searchProposalInvite")."%")->orWhere("lastname","like","%".$request->get("searchProposalInvite")."%");
            })
            ->where(function ($subQuery) use ($request) {
                $subQuery->whereHas('freelancerSkills.skill', function ($query) use ($request) {
                    return $query->where('firstname', 'like', '%' . $request->searchProposalInvite . '%')->orWhere('skills_sub', 'like', '%' . $request->searchProposalInvite . '%')->orWhere('lastname', 'like', '%' . $request->searchProposalInvite . '%');
                })
                    ->orWhereHas('freelancerProfile', function ($query) use ($request) {
                        return $query->where('title', 'like', '%' . $request->searchProposalInvite . '%');
                    });
            })->with(['freelancerRate', 'country', 'freelancerSkills.skill'])->paginate($this->pageCount, ['*'], 'nav-search-tab');
        foreach ($data['inviteFreelancer'] as $key => $users) {
            $converstaion = $this->conservation->conservationByProject($id, $sender,$users->id);
            $data['inviteFreelancer'][$key]->conv_status = $this->proposal->proposalData($id,$users->id, $sender, 1); 
            $data['inviteFreelancer'][$key]->new_conv_status = $this->proposal->proposalData($id,$sender,$users->id,0); 
           
            if ($converstaion) {
                $checkUserRole = User::whereId($converstaion->sender_id)->first();
                if($checkUserRole->is_admin == User::ROLE_CLIENT){
                     $data['inviteFreelancer'][$key]->proposalStatus = ProposalSetting::where(['project_id'=>$id,'receiver_id'=>$converstaion->receiver_id,'user_id'=>$converstaion->sender_id])->first();
                }else{
                  
                    $data['inviteFreelancer'][$key]->proposalStatus = ProposalSetting::where(['project_id'=>$id,'receiver_id'=>$converstaion->sender_id,'user_id'=>$converstaion->receiver_id])->first();
                }
            } else {
                $data['inviteFreelancer'][$key]->proposalStatus =  $this->proposal->proposalData($id,auth()->user()->id ,$users->id,1);
            }
            
        }  
        
        
        $data['invitedFreelancerList'] = ProposalSetting::where('receiver_id','!=', auth()->user()->id)->whereIn('status', [0,1,2,3])->where(['proposal_proposed_by'=>'1'])
        ->where(function ($subQuery) use ($request) {

            $subQuery->whereHas('getInvitedfreelancerSkills.skill', function ($query) use ($request) {
                    return $query->where('skills_sub', 'like', '%' . $request->searchProposalInvited . '%');
                })
                ->orWhereHas('getInvitedUser', function ($query) use ($request) {
                    return $query->where('firstname', 'like', '%' . $request->searchProposalInvited . '%')->orWhere('lastname', 'like', '%' . $request->searchProposalInvited . '%');
                })
                ->orWhereHas('getInvitedfreelancerProfile', function ($query) use ($request) {
                    return $query->where('title', 'like', '%' . $request->searchProposalInvited . '%');
                });
        })
        ->with(['getInvitedUser.country', 'getInvitedfreelancerSkills.skill', 'getInvitedfreelancerRate', 'getInvitedfreelancerProfile'])
        ->where('project_id', $id)
        ->paginate($this->pageCount);       

       
        // Review Proposal Tab
        $data['proposals'] = ProposalSetting::with(['users.country', 'freelancerSkills.skill', 'freelancerRate', 'freelancerProfile', 'checkFreelancerHired'])
        ->where('project_id', $id)
        ->where('user_id', '!=', auth()->user()->id)
        ->where('proposal_proposed_by',0)
        ->where(function ($subQuery) use ($request) {

            $subQuery->whereHas('freelancerSkills.skill', function ($query) use ($request) {
                return $query->where('skills_sub', 'like', '%' . $request->searchProposalReview . '%');
            })
                ->orWhereHas('users', function ($query) use ($request) {
                    return $query->where('firstname', 'like', '%' . $request->searchProposalReview . '%')->orWhere('lastname', 'like', '%' . $request->searchProposalReview . '%');
                })
                ->orWhereHas('freelancerProfile', function ($query) use ($request) {
                    return $query->where('title', 'like', '%' . $request->searchProposalReview . '%');
                });
        })
        ->paginate($this->pageCount);

        $data['shortListed'] = ProposalSetting::with(['users.country', 'freelancerSkills.skill', 'freelancerRate', 'freelancerProfile', 'checkFreelancerHired'])
        ->where('project_id', $id)
        ->where('user_id', '!=', auth()->user()->id)
        ->where(['status'=>'3','proposal_proposed_by'=>0])
        ->where(function ($subQuery) use ($request) {

            $subQuery->whereHas('freelancerSkills.skill', function ($query) use ($request) {
                return $query->where('skills_sub', 'like', '%' . $request->shortListed . '%');
            })
                ->orWhereHas('users', function ($query) use ($request) {
                    return $query->where('firstname', 'like', '%' . $request->shortListed . '%')->orWhere('lastname', 'like', '%' . $request->shortListed . '%');
                })
                ->orWhereHas('freelancerProfile', function ($query) use ($request) {
                    return $query->where('title', 'like', '%' . $request->shortListed . '%');
                });
        })
       
        ->paginate($this->pageCount);

        return view('client.project_review_proposal', $data);
    }

    public function showViewByajax(Request $request)
    {
        return response()->json(['response' => 'true', 'url' => route('project.proposal.view', ['proposalId' => $request->id])]);
    }

    public function showFreelancerData(Request $request) {
        $status = 'false';
        $projectProposal = ProposalSetting::with(['users.country', 'projects', 'freelancerSkills.skill', 'freelancerRate', 'freelancerProfile', 'freelancerEducation','freelancerExperience'])->where('id', $request->proposalId)->first();
        $status = $projectProposal ? 'true' :'false';
        return response()->json(['data' => $projectProposal, 'status' => $status]);
    }

    public function inviteToJob(Request $request)
    {
        $userDetail = User::whereId($request->userId)->with('freelancerSkills.skill')->first();
        $projectDetail = $this->project->projectData($request->projectId);
        return response()->json(['status' => 'true', 'data' => $userDetail, 'project' => $projectDetail->user]);
    }

    public function sendInvitation(Request $request) {
        $sender = auth()->user()->id;
        $receiver = $request->user_id;
        $projectId = $request->project_id;
        $proposalSetting = ProposalSetting::create([
            'cover_letter' => $request->message,
            'project_id'   => $projectId,
            'user_id'      => $sender,
            'receiver_id'  => $receiver,
            'proposal_proposed_by'=>'1',
        ]);


        $conversationData = $this->conservation->conservationByProject($projectId, $sender, $receiver);
        if (empty($conversationData)) {
            $conservation = new Conservation;
            $conservation->sender_id = $sender;
            $conservation->receiver_id = $receiver;
            $conservation->project_id = $projectId;
            $conservation->save();
            $message = Message::create(['sender_id' => auth()->user()->id, 'conservation_id' => $conservation->id, 'message' => $request->message]);
        }

        $userReciverData  = User::where('id',$receiver)->first();

        $projectData  = $this->project->projectData($projectId);
        Notification::send($userReciverData, new SendInvitation($projectData));
        return response()->json(['status' => true, 'url'=>route('project.proposal.view', ['proposalId' => $projectId, 'view=nav-invite-freelancers']),'notification'=>$userReciverData->notifications->first()]);
    }

    public function sendOffer(Request $request, $userId, $projectId) {
        $request->session()->put('typeHire', '');
        $project = $this->project->projectData($projectId);
        $user = User::where('id', $userId)->with(['country', 'freelancerSkills.skill', 'states','wallets' => function($query) { 
            $query->where('primary', '1');
        }
        ])->first();
        if($user->wallets != ''){
            $freelancer_wallet_address = $user->wallets[0]->wallet_address;
        }
        $hireFreelancers = ClientHire::with('milestone')->where('client_id', auth()->user()->id)->where(['freelancer_id'=>$userId,'project_id'=>$projectId])->first();
        $jwtoken = JwtToken();
        $request->session()->put('jwttoken', $jwtoken['data']);
        return view('client.project_send_offer', compact('project', 'user', 'hireFreelancers','freelancer_wallet_address'));
    }


    public function sendOfferByReview(Request $request, $userId, $projectId) {
        $request->session()->put('typeHire', 'reviewFreelancer');
        $project = $this->project->projectData($projectId);
        $user = User::where('id', $userId)->with(['country', 'freelancerSkills.skill', 'states','wallets' => function($query) { 
            $query->where('primary', '1');
        }
        ])->first();
        if($user->wallets != ''){
            $freelancer_wallet_address = $user->wallets[0]->wallet_address;
        }

        $hireFreelancers = ClientHire::with('milestone')->where(['client_id'=>auth()->user()->id,'freelancer_id'=>$userId,'project_id'=>$projectId])->first();
        $jwtoken = JwtToken();
        $request->session()->put('jwttoken', $jwtoken['data']);
        return view('client.project_send_offer', compact('project', 'user', 'hireFreelancers','freelancer_wallet_address'));
    }

    public function hireFreelancer(SendHireRequest $request)
    {
        $token = $request->session()->get('jwttoken');
        $createOffer = ClientHire::updateOrCreate(
            [
                'client_id' => auth()->user()->id,
                'freelancer_id' => $request->freelancerId,
                'project_id' => $request->projectId,
            ],
            [
                'contract_title' => $request->contractTitle,
                'contract_description' => $request->workDescription,
                'payment_option'=>1,
                'hourly_price'=>$request->payByHourPrice,
                'fixed_price'=>$request->fixed_price,
                'fixedType'=>$request->fixedType,
                'total_price'=>$request->fixed_price, //after change according to hourly and milestone

            ]
        );
        
        // fixed price
        if($request->payment_option == 1){
            $milestoneExist =  ProjectMilestone::where('offer_id',$createOffer->id)->first();
            if ($milestoneExist) {
                ProjectMilestone::where('offer_id',$createOffer->id)->delete();
            }
            $milestone_array=[];
            if (isset($request->milestone_description[0])) {
                for($i=0;$i<count($request->milestone_description);$i++){
                    $milestone_description = $request->milestone_description[$i];
                    $due_date = $request->due_date[$i];
                    $deposit_amount = $request->deposit_amount[$i];
                    $amountdep = (($deposit_amount * 5) / 100 + $deposit_amount) * 1000000;
                    $milestone = new ProjectMilestone([
                        'offer_id'=>$createOffer->id,
                        'description' => $milestone_description,
                        'due_date' => $due_date,
                        'deposit_amount' => $deposit_amount
                    ]);
                    $milestone->save();
                    $milestone_array[] =  ['milestoneId' => $milestone->id, 'amount' => $amountdep];
                }
            }else{
                $milestone = new ProjectMilestone([
                    'offer_id'=>$createOffer->id,
                    'description' => 'Whole Project amount funded',
                    'due_date' => '',
                    'deposit_amount' =>  $request->fixed_price
                ]);
                $milestone->save();
                $amountdep = ((($request->fixed_price * 5)/100)+$request->fixed_pricet) * 1000000;
                $milestone_array[] =  ['milestoneId' => $milestone->id, 'amount' => $amountdep];
            }

            // data to be send 
            $milestoneData = json_encode($milestone_array);
            // add milestone on https://pgapi.smartdev3.com/rest/smart-dev3/add-milestone
            $add_milestone = addMilestone($token,$createOffer->contract_address,$milestoneData);            
        }
        return response()->json(['status' => true,'url'=>route('payments.checkout.view',['projectId'=>$request->projectId,'userId'=>$request->freelancerId])]);
    }

    public function checkout($projectId,$freelancerId) {
        $data['wallet'] = Wallet::where(['user_id'=>$freelancerId,'primary'=>'1'])->first();
        $data['hireFreelancer'] = ClientHire::where(['project_id'=>$projectId,'client_id'=>auth()->user()->id,'freelancer_id'=>$freelancerId])->with('milestone','freelancer')->first();
        return view('client.checkout_offer',$data);
    }

    public function approveTokens(Request $request) {
        $previousUrl = url()->previous();
        $segments = explode('/', str_replace(''.url('').'', '', $previousUrl));
        $projectId = $segments[4];
        $freelancerId = $segments[5];


        if($request->session()->get('typeHire')==''){
            $chk = ProposalSetting::where(['project_id'=>$projectId,'user_id' => auth()->user()->id,'proposal_proposed_by'=>'1'])->first();
            if(isset($chk)){
                $createOffer = ProposalSetting::where([
                    'user_id' => auth()->user()->id,
                    'project_id' => $projectId,
                    'receiver_id' => $freelancerId,
                    'proposal_proposed_by' => '1'
                ])->update(['status' => 3]);
            }else{
                $createOffer  = ProposalSetting::updateOrCreate(
                    [
                        'user_id' =>  $freelancerId,
                        'project_id' => $projectId,
                        'receiver_id' => auth()->user()->id,
                        'proposal_proposed_by'=>0
                    ],
                    [
                        'status' =>3,
                    ]
                );
            }
        }else{
            $chktypeHire = ProposalSetting::where(['project_id'=>$projectId,'receiver_id' => auth()->user()->id,'proposal_proposed_by'=>'0'])->first();
            $createOffer = ProposalSetting::updateOrCreate(
                [
                    'user_id' => $freelancerId,
                    'project_id' => $projectId,
                    'receiver_id' => auth()->user()->id,
                    'proposal_proposed_by'=>0
                ],
                [
                    'status' => 3,
                ]
            );
            $sender = auth()->user()->id;
            $receiver = $freelancerId;
            $conversationData = $this->conservation->conservationByProject($projectId,auth()->user()->id, $freelancerId);
            if(!empty($conversationData)){
                $sendMessage = 'Dear '.auth()->user()->firstname.','.'</br>'.'I am waiting to accept the offer. I am excited to work with you and have full confidence that you will deliver the highest quality work';
                $message = Message::create(['sender_id'=>auth()->user()->id,'conservation_id'=>$conversationData->id,'message'=>$sendMessage]);
            }
        }


        // Update multiple rows in ClientHire table
        ClientHire::whereIn('payment_option', [0, 1])
        ->where('client_id', auth()->user()->id)
        ->where('freelancer_id', $freelancerId)
        ->where('project_id', $projectId)
        ->update([
            'finish_project' => \DB::raw("CASE 
                WHEN payment_option = 0 THEN {$request->finish_project} 
                WHEN payment_option = 1 AND fixedType = 2 THEN 4 
                WHEN payment_option = 1 AND fixedType = 1 THEN 1 
                ELSE finish_project 
                END")
        ]);
        // Update ProjectMilestone table
        ProjectMilestone::updateOrCreate(
            ['id' => $request->milestoneId],['status' => 1]
        );
        return response()->json(['status' => true]);
    }

    public function paymentDone(Request $request) {
        $milestoneUpdate =  ProjectMilestone::updateOrCreate(
            ['id' =>$request->milestoneId],
            ['status' => $request->status]
        );
        if($request->status == 3){
            $milestone = ProjectMilestone::with('clientHire')->find($request->milestoneId);
            $userSchema = $milestone->clientHire->freelancer;
            Notification::send($userSchema, new PaymentReceived($milestone));
        }
        return response()->json(['status' => true,'notification'=>$userSchema->notifications->first()]);
    }

    public function updateMilestone(Request $request) {
        // Update ProjectMilestone table
        ProjectMilestone::whereId($request->milestoneId)->update(['deposit_amount' => $request->milestoneAmount]);
        // Retrieve updated milestone with related clientHire data
        $milestone = ProjectMilestone::with('clientHire')->find($request->milestoneId);
        // Get contract address from related clientHire data
        $contract_address = $milestone->clientHire->contract_address;
        $update_milestone = updateMilestone($request->session()->get('jwttoken'),$contract_address,$request->milestoneId,$request->milestoneAmount);
        return response()->json(['status' => true]);
    }
    
    public function deleteMilestone(Request $request) {
        $token = $request->session()->get('jwttoken');
        $milestoneDelete =  ProjectMilestone::whereId($request->milestoneId)->delete();
        return response()->json(['status' => true]);
    }
}
