<?php

namespace App\Http\Controllers\Freelancer;

use Auth,Session;
use App\Models\Project;
use App\Models\Conservation;
use App\Models\SaveJob;
use Illuminate\Http\Request;
use App\Models\ProposalSetting;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Traits\RedirectUserTrait;
use App\Models\FreelancerSkill;
use App\Models\ClientHire;
use App\Models\UserBalance;
use App\Models\ProjectDetail;
use App\Models\ProjectMilestone;
use App\Notifications\FinishedWork;
use Illuminate\Support\Facades\Notification;


class DashboardController extends Controller
{
    use RedirectUserTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
    */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->middleware(['check-profile']);
        $this->conservation = new Conservation;
        $this->project = new Project;
        $this->proposalSetting = new ProposalSetting;
        $this->pageCount = config('constants.pagination');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $skillArry = [];
        $skillsMatch = FreelancerSkill::where('user_id',auth()->user()->id)->with('skill')->get();
        foreach($skillsMatch as $matches){
            $skillArry[] = $matches->skill->skills_sub;
        }
        // best matches 
        $data['project_best']  = Project::withCount('getProposalSetting')
                                        ->where('job','new')
                                        ->with('ProjectSkill.skill')->with(['saveJobs' => function($q) {
                                                $q->where('user_id', auth()->user()->id);
                                            }])
                                        ->matchingSkills($skillArry)
                                        ->orderBy('created_at','desc')->get();

        // most recent
        $data['project_recent']  = Project::withCount('getProposalSetting')->where('job','new')
                                            ->with('ProjectSkill.skill')
                                            ->matchingSkills($skillArry)
                                            ->recent()
                                            ->get();
        return view('freelancer.dashboard',$data);
    
    } 

    public function details(Request $request){
        $projectDetail = $this->project->getProjectDetailsWithRelations($request->id);
        $converstaion = $this->conservation->getSenderId($request->id, auth()->user()->id);
        // $proposalSetting = $this->proposalSetting->getProposalSettingForProject($converstaion ? $converstaion->sender_id : auth()->user()->id, $request->id);  
        $proposalSetting = $this->proposalSetting->getProposalSettingForProject( auth()->user()->id, $request->id);  

        $status = !empty($proposalSetting) ? 'true' : '';
        $userBalance = UserBalance::where('user_id',auth()->user()->id)->first();
        return response()->json(['response' => 'true','data'=>$projectDetail,'status'=>$status,'userBalance'=>$userBalance]);
    }
 
    public function saveProject(Request $request) {
        // Retrieve project details with relationships
        $projectDetail = Project::with('ProjectSkill.skill')->find($request->id);
         // Use ternary operator to add or delete SaveJob
        $type = SaveJob::where(['project_id' => $request->id, 'user_id' => Auth::user()->id])->exists() ? 'Delete' : 'Add';
        $type === 'Add' ? $projectDetail->saveJobs()->create(['user_id' => Auth::user()->id]) : $projectDetail->saveJobs()->where(['project_id' => $request->id, 'user_id' => Auth::user()->id])->delete();
        return response()->json(['response' => 'true', 'data' => $projectDetail, 'type' => $type]);
    }

    public function projectProposal(Request $request,$id) {
        $data['id'] = $id;
        $data['projectDetail'] = $this->project->getProjectDetailsWithRelations($id);
        return view('freelancer.proposal',$data);
    }

    public function removeSavedJobs(Request $request) {
        $checkData = SaveJob::where('id',$request->savedId)->where('user_id',Auth::user()->id);
        $deleted = $checkData->delete();
        $message = $deleted ? 'Remove successfully' : 'Data not found';
        $countJobs = SaveJob::where('user_id',auth()->user()->id)->count();
        return response()->json(['data' => $checkData->first(),'message' => $message,'countJobs' => $countJobs]);
    }

    public function home(Request $request) {
        // Load projects, clients, and clientDetails relationships with eager loading
        $pendingContract = ClientHire::where(['freelancer_id' => auth()->user()->id, 'accept_offer' => '0'])
            ->whereIn('finish_project', ['1', '4'])
            ->with('projects', 'clients.clientDetails')
            ->get();        
        $activeContract = ClientHire::where('freelancer_id',auth()->user()->id)->where(['accept_offer'=>'1'])->whereIn('finish_project',['1','2','4'])->with('projects','clients.clientDetails','milestone')->orderBy('id','desc')->paginate($this->pageCount);
        return view('freelancer.home',compact('pendingContract','activeContract'));
    }

    public function acceptOfferDetail(Request $request) {
        $projcetData = Project::with(['categories','ProjectSkill.skill','clientHire.milestone',
        'clientHire' => function($q) {
                $q->where('freelancer_id', '=', auth()->user()->id); 
            }])->where('id',$request->projectId)
         ->first();
        return response()->json(['status' => true , 'data' => $projcetData,'hire'=>$projcetData->clientHire]);
    }

    public function offerAccepted(Request $request) {
        $pendingContract = ClientHire::whereId($request->hireId)->update(['accept_offer'=>$request->status]);
        return response()->json(['status' => true ]);
    }

    public function contractFinshed(Request $request) {
        $pendingContract = ProjectMilestone::whereId($request->id)->update(['status'=>2]);
        $milestoneClientId =  ProjectMilestone::whereId($request->id)->with('clientHire')->first();
        $userSchema = $milestoneClientId->clientHire->clients;
        Notification::send($userSchema, new FinishedWork($milestoneClientId));
        return response()->json(['status' => true ,'notification'=>$userSchema->notifications->first()]);
    }
}
