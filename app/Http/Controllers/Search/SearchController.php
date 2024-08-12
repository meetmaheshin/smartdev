<?php

namespace App\Http\Controllers\Search;

use Auth,Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\FreelancerSkill;
use App\Models\User;
use App\Models\UserBalanceHistory;


class SearchController extends Controller
{
   
    /**
     * Create a new controller instance.
     *
     * @return void
    */
    public function __construct()
    {
        $this->middleware(['auth','verified']);

    }

    public function searchProject(Request $request) {
        $request->session()->put('search_project', $request->search);
        return response()->json(['response' => 'true','url'=>url('search_project').'?search='.$request->search.'&searchType='.$request->searchType]);
    }

    // dashboard page search 
    public function searchProjectView(Request $request) {
        $data['searchVal']  = $searchString   = $request->get('search');
        $data['searchType'] = $request->get('searchType');
        $skillsMatch = FreelancerSkill::where('user_id',auth()->user()->id)->with('skill')->get();
        $skillArry = [];
        foreach($skillsMatch as $matches){
            $skillArry[] = $matches->skill->skills_sub;
        }

        //  Talent Search Data if Search type is 0 and if search type is 1 that means we search projects
        if($data['searchType'] == 0){
            $data['talentSearch'] = User::where('is_admin',User::ROLE_FREELANCER)
                                    ->where(function($query) use ($searchString) {
                                        $query->where('firstname','LIKE','%'.$searchString.'%')
                                        ->orWhere('lastname','LIKE','%'.$searchString.'%');
                                    })
                                    ->get(); 
            return view('search.search_talent',$data);
        }else if($data['searchType'] == 1){
            $projectSearch   = Project::where('job','new')->where('job_type', '0')->with('ProjectSkill.skill')
            ->where(function($query) use ($searchString){
                $query->where('title','LIKE','%'.$searchString.'%')
                ->orWhere('description','LIKE','%'.$searchString.'%')
                ->orWhereHas('ProjectSkill.skill',function($q) use ($searchString){
                    $q->where('skills_sub','LIKE','%'.$searchString.'%');
                });
            });
            $projectSearch->where(function ($query) use ($skillArry) {
                $query->orWhereHas('ProjectSkill.skill', function ($query) use ($skillArry) {
                    $query->whereIn('skills_sub', $skillArry);
                });
            });
            $data['projectSearch'] = $projectSearch->get();
            if(auth()->user()->is_admin==User::ROLE_FREELANCER){
                $array =[];
                foreach($data['projectSearch'] as $project){
                    foreach($project->ProjectSkill as $skills){
                        if(in_array($skills->skill->skills_sub,$skillArry)){
                            $getProjectId = $skills->project_id;
                            $array[$getProjectId] = Project::whereId($getProjectId)->first();
                            array_unique($array);
                        }
                    }
                }
                $data['projectSearch'] = $array;
            }

            return view('search.search_project',$data);
        }else{
            return abort(404);
        }
    }

    public function freelancerDetails(Request $request){
        $userDetail = User::whereId($request->id)->with('country','cities','freelancerRate','freelancerEducation','FreelancerProfile','freelancerSkills.skill','FreelancerExperience')->first();
        return response()->json(['status' => 'true','data'=>$userDetail]);
    }

    public function getDatahistory(Request $request){
        $history  = UserBalanceHistory::where('user_id', auth()->user()->id)->first();
        return response()->json(['success' => 'true']);
    }
}
