<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProposalSetting;
use App\Models\Project;
use App\Models\User;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\ClientHire;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $pageCount = '';
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
        $this->project = new Project;
        $this->proposalSetting = new ProposalSetting;

        $this->pageCount = config('constants.pagination');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request) {
        $data['title'] = "Your Dashboard-SmartDev3";
        $data['project_draft'] = Project::where('job', 'draft')->whereNotNull('title')->where('user_id', auth()->user()->id)->get();
        $data['project'] = Project::withCount(['getProposalSetting', 'conversationRevertedCount', 'clientHire'])->where('job', 'new')->where('user_id', auth()->user()->id)
            ->orderBy('id', 'desc')->limit(4)->get();
        $data['contract'] = ClientHire::where(['client_id' => auth()->user()->id])->whereIn('finish_project',[0,1,4])->with('projects', 'freelancer', 'milestone')->orderBy('id', 'desc')->get();
        return view('client.dashboard', $data);
    }

    public function showAllJobs(Request $request) {
        $job = $request->statuses;
        if ($job == 'all') {
            $projects = Project::query();
        } else {
            $projects = Project::where('job', $request->statuses);
        }
        $projects = $projects->where(function ($query) use ($request) {
            return $query->whereLike('title', $request->gsearch);
        })->withCount('getProposalSetting', 'conversationRevertedCount', 'clientHire')->where(['user_id' => auth()->id()])->orderBy('id', 'desc')->paginate($this->pageCount);
        return view('client.project_all_job', compact('projects', 'job'));
    }

    public function fetchState(Request $request) {
        $state = State::where('country_id', $request->countryId)->get();
        return $state;
    }

    public function fetchCity(Request $request) {
        $city = City::where('state_id', $request->stateId)->get();
        return $city;
    }

    public function fetchCountry(Request $request) {
        $country = Country::where('id', $request->countryId)->get();
        return $country;
    }
    public function details(Request $request) {
        $projectDetail = $this->project->getProjectDetailsWithRelations($request->id);
        $proposalSetting = $this->proposalSetting->getProposalSettingForProject(auth()->user()->id,$request->id);
        $status = !empty($proposalSetting) ? 'true' : '';
        return response()->json(['response' => 'true', 'data' => $projectDetail, 'ProposalSetting' => $status]);
    }


    public function showAllContracts(Request $request) {
        $data['allContract'] = ClientHire::where(['client_id' => auth()->user()->id])
            ->whereHas('freelancer', function ($query) use ($request) {
                return  $query->where('firstname', 'like', '%' . $request->gsearch . '%')->orWhere('lastname', 'like', '%' . $request->gsearch . '%');
            })
            ->orWhereHas('projects', function ($query) use ($request) {
                return $query->where('title', 'like', '%' . $request->gsearch . '%');
            })
            ->paginate($this->pageCount);
        return view('client.project_all_contracts', $data);
    }

    public function showContractDetails(Request $request) {
        $projcetData = Project::where('id', $request->projectId)->with('categories', 'ProjectSkill.skill')->first();
        return response()->json(['status' => true, 'data' => $projcetData]);
    }

    public function contract_milestone(Request $request, $projectId,$freelancerId,) {
        $data['clientHire'] =  ClientHire::where(['client_id' => auth()->user()->id, 'project_id' => $projectId,'freelancer_id'=>$freelancerId])->with('projects', 'freelancer', 'milestone')->first();
        return view('client.contract_milestone',$data);
    }

    public function getNotification(Request $request) {
        $todayNotification= auth()->user()->notifications()->whereDate('created_at', now())->latest()->get();
        $notificationList = auth()->user()->notifications()->whereDate('created_at', '<',now())->latest()->paginate($this->pageCount);
        return view('notification.list',compact('todayNotification','notificationList'));
    }
    public function NotificationDestroy($id) {
        auth()->user()->notifications()->where('id', $id)->delete();
        return response()->json(['status'=>true,'message' => 'Notification deleted']);
    }

    public function NotificationRead($id) {
        $notification = auth()->user()->notifications()->find($id);
        if($notification) {
            $notification->markAsRead();
        }
        return response()->json(['status'=>true]);
    }
}
