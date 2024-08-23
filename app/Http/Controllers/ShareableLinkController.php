<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Conservation;
use App\Models\ProposalSetting;
use App\Models\ProjectMilestone;
use App\Models\ProjectQuestion;
use Illuminate\Support\Carbon;
use App\Models\SaveJob;

class ShareableLinkController extends Controller
{


    public function __construct()
    {
        $this->conservation = new Conservation;
        $this->project = new Project;
        $this->proposal = new ProposalSetting ;
        $this->projectMilestone = new ProjectMilestone ;
        $this->pageCount = config('constants.pagination');
    }

    public function showShareableLink(Request $request, $slug)
    {
        $id = Project::where('slug', $slug)->first()->id;
        $request->session()->put('project_id', $id);       
        $data['project_id'] = $id;
        $data['projectDetail'] = $this->project->projectData($id);

        if (auth()->check()) {
            $data['saveJob'] = SaveJob::where('project_id', $id)
                                        ->where('user_id', auth()->user()->id)
                                        ->count();
        }
        $data['project_count'] = Project::where('user_id', $data['projectDetail']->user->clientDetails->user_id)->where('job', '!=', 'draft')->get()->count();
        $data['title'] = 'Review Proposal - '.config('app.name');
        $data['questions'] = ProjectQuestion::where('project_id', $id)->get();      


        $timezoneString = $data['projectDetail']->user->clientDetails->time_zone;
        $parts = explode('|', $timezoneString);
        $timezone = $parts[0]; // 'Asia/Kolkata'
        $data['timezone'] = '';
        if(!empty($timezone)){
            $currentTime = Carbon::now($timezone);
            $data['timezone']= $currentTime->format('g:i a');
        }

        return view('shareable_link_proposal', $data);
    }
}
