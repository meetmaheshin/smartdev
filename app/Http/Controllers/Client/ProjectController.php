<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Category;
use App\Models\Specialty;
use App\Models\ProjectSkill;
use App\Models\ProjectDetail;
use App\Notifications\NewJobPosted;
use App\Http\Requests\JobPostedRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
use File;

class ProjectController extends Controller
{

    public $all_categories;
    public $all_speciality;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
        $this->project = new Project;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['title'] = 'Post a Job - Smartdev3';
        $data['existingProjects'] = Project::where('user_id', Auth::user()->id)->whereNotNull('title')->get();
        $data['project'] = Project::with('user')->find(session('project_id'));
        session()->forget(['project_id']);
        return view('client.project_started', $data);
    }


    public function project_started(Request $request)
    {
        $projectId = $request->project_id;
        if ($projectId == 0 || $projectId == 'null' || $projectId == '') {
            $newProject = Project::updateOrCreate([
                'id'   => $projectId,
            ], [
                'job'  =>   'draft',
                'status' => $request->status,
                'user_id' => Auth::user()->id
            ]);
            $request->session()->put('project_id', $newProject->id);
            return response()->json(['response' => 'true', 'url' => route('project.title.view')]);
        } else {
            $projectSkill = ProjectSkill::where('project_id', $projectId)->first();
            $request->session()->put('project_id', $projectId);
            if (!empty($projectSkill)) {
                $projectType = Project::whereId($projectId)->whereNotNull('type')->first();
                if (!empty($projectType)) {
                    return response()->json(['response' => 'true', 'url' => route('project.budget.view')]);
                } else {
                    return response()->json(['response' => 'true', 'url' => route('project.scope.view')]);
                }
            } else {
                return response()->json(['response' => 'true', 'url' => route('project.skill.view')]);
            }
        }
    }
    // title 1st page 
    public function project_title_view(Request $request)
    {
        if ($request->session()->get('project_id') != '') {
            $data['title'] = 'Title - Smartdev3';
            $data['project'] = Project::with('specialities')->find($request->session()->get('project_id'));
            // dd($request->session()->get('project_id'));
            $data['specialty'] = Specialty::where('type', 0)->limit(3)->get();
            $data['category'] = Category::where('type', 0)->get();
            $data['web3_category'] = Category::where('type', 1)->get();
            $data['catgeory_id'] = 1;
            $data['projectDetail'] = ProjectDetail::where('project_id', $request->session()->get('project_id'))->get();
            $data['web3specialty'] = Specialty::where('type', 1)->limit(3)->get();

            return view('client.project_title', $data);
        } else {
            return redirect()->back();
        }
    }

    public function project_title(Request $request)
    {

        if ($request->session()->get('project_id') == '') {
            return redirect()->route('project_started');
        }
        $request->validate(
            [
                'specialty_id' => 'required',
                'title' => 'required|min:3|max:100',
                'description' => 'required',
                'filename.*' => 'mimes:jpg,png,jpeg,JPEG,JPG,PNG|max:5000'
            ],
            [
                'specialty_id.required' => 'You have to choose the Job Category!',
            ]
        );
        $specialty = Specialty::with('categories')->findOrFail($request->specialty_id);
        $category_id = $specialty->categories[0]->pivot->category_id;
        $newProduct = Project::updateOrCreate([
            'id'   => $request->project_id,
        ], [
            'title' => $request->title,
            'description' => $request->description,
            'projectType' => $request->project_type,

            'specialty_id' => $request->specialty_id,
            'category_id' => $category_id,
        ]);


        if ($request->hasFile('filename')) {
            $allowedfileExtension = ['jpg', 'png', 'jpeg', 'JPEG', "PNG", 'JPG'];
            $files = $request->file('filename');
            $new_picture_array = [];
            if ($request->TotalImages > 0) {
                foreach ($files as $file) {
                    $filename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $check = in_array($extension, $allowedfileExtension);
                    if ($check) {

                        $path = $file->store('/storage/filename', ['disk' =>   'my_files']);
                        $new_picture_array[] = array('project_id' => $newProduct->id, 'filename' => $path, 'attachment' => $filename);
                    } else {
                        return response()->json(['response' => 'false', 'errors' => 'Sorry Only Upload png , jpg,jpeg , doc']);
                    }
                }
                ProjectDetail::insert($new_picture_array);
            }
        }
        $request->session()->put('project_id', $newProduct->id);
        return response()->json(['response' => 'true', 'url' => route('project.skill.view')]);
    }

    // delete project Image
    public function destroyProjectImage(Request $request)
    {
        $avatar = ProjectDetail::findOrFail($request->id);
        if (Storage::disk('my_files')->delete($avatar->filename)) {
            $avatar->delete();
        }
        return response()->json(['status' => 'true']);
    }

    // skills  2ndpage
    public function project_skill_view(Request $request)
    {
        if ($request->session()->has('project_id')) {
            $data['title'] = 'Skills';
            $projectId     = $request->session()->get('project_id');
            $projectSkill = ProjectSkill::with('skill')->where('project_id', $projectId)->get();
            $data['popularSkills'] = Skill::where('title', 'Popular skills')->get();
            $data['project'] = Project::find($projectId);
            $data['all'] = [];
            $skills_sub_name = [];

            foreach ($projectSkill as $key => $projectSkills) {
                $skill_id = $projectSkills->skill_id;
                $getParentskillTitle = Skill::select('title')->whereId($skill_id)->first();
                $parentTitle = $getParentskillTitle->title;
                $getParentskillData = Skill::select('id')->where('title', $parentTitle)->first();
                $data_skill = array('skill_id' => $projectSkills->skill_id, 'skill_name' => $projectSkills->skill->skills_sub, 'parent_id' => $getParentskillData->id);
                $data_skill_name = array($projectSkills->skill->skills_sub);
                array_push($data['all'], $data_skill);
                $skills_sub_name[$key] = $data_skill_name;
            }

            $data['single'] = array_reduce($skills_sub_name, 'array_merge', array());
            $spe = Specialty::with('skills.categories')->where('id', $data['project']->specialty_id)->first();


            $data['skillsTitle'] = $spe->skills()
                ->select('skills.*', DB::raw('group_concat(skills_sub) as skills_sub'))
                ->groupBy('title')
                ->get();

            return view('client.project_skill', $data);
        } else {
            return redirect()->route('project_started');
        }
    }

    public function project_skill(Request $request)
    {
        if ($request->session()->get('project_id') != '') {
            $request->validate([
                'skill_id' => 'required'
            ]);

            if (count($request->skill_id) > 0) {
                ProjectSkill::where('project_id', $request->project_id)->delete();
                $skillData = [];
                foreach ($request->skill_id as $key => $skill_id) {
                    $skillData[$key]['project_id'] = $request->project_id;
                    $skillData[$key]['skill_id'] = $skill_id;
                }
                ProjectSkill::insert($skillData);
            }

            return response()->json(['response' => 'true', 'url' => route('project.scope.view')]);
        } else {
            return redirect()->route('project_started');
        }
    }

    public function getSpeciality(Request $request)
    {
        $category = Category::with('specialties')->where('id', $request->catId)->first();
        $speciality = $category->specialties()
            ->groupBy('title')
            ->get();
        return response()->json(['data' => $speciality]);
    }

    public function getSpecialityName(Request $request)
    {
        $category = Specialty::where('id', $request->specId)->first();
        return response()->json(['data' => $category->title]);
    }

    public function autocomplete(Request $request)
    {
        $selectedId = [];
        // check if ajax request is coming or not
        if ($request->ajax()) {
            if ($request->selectedId != '') {
                $selectedId = $request->selectedId;
            }
            $data = Skill::whereNotIn('id', $selectedId)->where('skills_sub', 'LIKE', $request->term . '%')->groupBy('skills_sub')->get();
            $output = '';
            // if searched countries count is larager than zero
            if (count($data) > 0) {
                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
                foreach ($data as $row) {
                    $getParentskillTitle = Skill::select('title')->whereId($row->id)->first();
                    $parentTitle = $getParentskillTitle->title;
                    $getParentskillData = Skill::select('id')->where('title', $parentTitle)->first();
                    $output .= '<li class="list-group-item" data-skill="' . $getParentskillData->id . '" value="' . $row->id . '">' . $row->skills_sub . '</li>';
                }
                $output .= '</ul>';
            } else {
                $output .= '<li class="list-group-item no_skill">' . 'No results' . '</li>';
            }
            // return output result array
            return $output;
        }
    }


    public function project_scope_view(Request $request)
    {
        if ($request->session()->get('project_id') != '') {
            $data['title'] = 'Job Details';
            $data['project'] = Project::where('id', $request->session()->get('project_id'))->first();
            return view('client.project_scope', $data);
        }
        return redirect()->route('project_started');
    }

    public function project_scope(Request $request)
    {
        if ($request->session()->get('project_id') != '') {
            $projectScope = Project::updateOrCreate([
                'id'   => $request->project_id,
            ], [
                'type' => $request->type,
                'duration' => $request->duration,
                'level' => $request->level,
            ]);
            return response()->json(['response' => 'true', 'url' => route('project.budget.view')]);
        } else {
            return redirect()->route('project_started');
        }
    }

    public function project_budget_view(Request $request)
    {
        if ($request->session()->get('project_id') != '') {
            $data['title'] = 'Job Details';
            $data['project'] = Project::where('id', $request->session()->get('project_id'))->first();

            return view('client.project_budget', $data);
        } else {
            return redirect()->route('project_started');
        }
    }

    public function project_budget(JobPostedRequest $request)
    {
        if ($request->session()->get('project_id') != '') {
            $projectScope = Project::updateOrCreate([
                'id'   => $request->project_id,
            ], [
                'budget' => $request->budget,
                'job' => 'new',
                'hourly_from' => $request->hourly_from,
                'hourly_to' => $request->hourly_to,
                'project_budget' => $request->project_budget,
            ]);
            $userSchema = auth()->user();
             Notification::send($userSchema, new NewJobPosted($projectScope));
            return response()->json(['response' => 'true', 'url' => route('clientdashboard'),'notification'=>$userSchema->notifications->first()]);
        } else {
            return redirect()->route('project_started');
        }
    }

    public function project_review_view_ajax(Request $request)
    {
        $projectId = $request->id;
        $project = Project::whereId($projectId)->first();
        $projectSkill = ProjectSkill::where('project_id', $projectId)->first();
        $request->session()->put('project_id', $projectId);
        if (!empty($project->title)) {
            if (!empty($projectSkill)) {
                $projectType = Project::whereId($projectId)->where('type', '!=', 'NULL')->first();
                if (!empty($projectType)) {
                    $projectBudget = Project::whereId($projectId)->where('budget', '!=', 'NULL')->first();
                    if (!empty($projectBudget)) {
                        return response()->json(['response' => 'true', 'url' => route('project.review.view', ['id' => $projectId])]);
                    } else {
                        return response()->json(['response' => 'true', 'url' => route('project.budget.view')]);
                    }
                } else {
                    return response()->json(['response' => 'true', 'url' => route('project.scope.view')]);
                }
            } else {
                return response()->json(['response' => 'true', 'url' => route('project.skill.view')]);
            }
        } else {
            return response()->json(['response' => 'true', 'url' => route('project.title.view')]);
        }
    }


    public function project_review_view(Request $request, $id)
    {

        $data['title'] = 'Project Review';
        $data['all'] = [];
        $skills_sub_name = [];
        $project = Project::where('id', $id)->with(['categories', 'ProjectSkill', 'specialities'])->first();
        if ($project->projectType == 1) {
            $all_categories = Category::where(['type' => '1'])->get();
            $all_speciality = Specialty::where(['type' => '1'])->get();
        } else {
            $all_categories = Category::where(['type' => '0'])->get();
            $all_speciality = Specialty::where(['type' => '0'])->get();
        }
        $projectSkill = ProjectSkill::with('skill')->where('project_id', $id)->get();
        $data['popularSkills'] = Skill::where('title', 'Popular skills')->get();
        $data['projectDetail'] = ProjectDetail::where('project_id', $id)->get();

        foreach ($projectSkill as $key => $projectSkills) {
            $skill_id = $projectSkills->skill_id;
            $getParentskillTitle = Skill::select('title')->whereId($skill_id)->first();
            $parentTitle = $getParentskillTitle->title;
            $getParentskillData = Skill::select('id')->where('title', $parentTitle)->first();
            $data_skill = array('skill_id' => $projectSkills->skill_id, 'skill_name' => $projectSkills->skill->skills_sub, 'parent_id' => $getParentskillData->id);
            $data_skill_name = array($projectSkills->skill->skills_sub);
            array_push($data['all'], $data_skill);
            $skills_sub_name[$key] = $data_skill_name;
        }

        $single = array_reduce($skills_sub_name, 'array_merge', array());



        return view('client.project_review', $data)->with([
            'project' => $project,
            'single' => $single,
            'categories' => $all_categories,
            'specialties' => $all_speciality,
            'catgeory_id' => $project->category_id
        ]);
    }

    public function project_review(Request $request, $id)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'description' => 'required',
                'modal_category_id' => 'required',
                'project_term' => 'required',
                'budget_check' => 'required',
                'skill_id' => 'required',
                'duration' => 'required',
                'level' => 'required',
                'filename.*' => 'required|image|mimes:jpg,png,jpeg,JPG,PNG,JPEG,PDF,pdf|max:5000'
            ],
            [
                'skill_id.required' => 'Must be select at least on skill',
                'duration.required' => 'Please select duration',
                'level.required' => 'Please select experience level',
                'filename.*.required' => 'Please attach at least on file',
                'filename.*.mimes' => 'Only jpg,jpeg,png images are allowed',
                'filename.*.max' => 'Sorry! Maximum allowed size for an image is 5MB',
            ]
        );

        if ($validate->fails()) {

            return Redirect::back()->withErrors($validate);
        }

        if ($request->hasFile('filename')) {
            $allowedfileExtension = ['jpg', 'png', 'PNG', 'JPG', 'PNG', 'jpeg', 'JPEG'];
            $files = $request->file('filename');
            if (count($request->filename) > 0) {
                foreach ($files as $file) {
                    $filename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $check = in_array($extension, $allowedfileExtension);
                    if ($check) {
                        $path = $file->store('/storage/filename', ['disk' =>   'my_files']);
                        $new_picture_array[] = array('project_id' => $id, 'filename' => $path, 'attachment' => $filename);
                    } else {
                        return Redirect::back()->with('error', 'Sorry Only Upload png ,jpg ,jpeg');
                    }
                }
                ProjectDetail::insert($new_picture_array);
            }
        }
        if (count($request->skill_id) > 0) {

            $project_skill = ProjectSkill::where('project_id', $id);
            if ($project_skill->exists()) {
                $project_skill->delete();
            }
            $project_skills = [];
            foreach ($request->skill_id as $key => $skills) {
                $project_skills[] = [
                    'project_id' => $id,
                    'skill_id' => $skills
                ];
            }
            ProjectSkill::insert($project_skills);
        }
        $project = Project::where('id', $id);
        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->modal_category_id,
            'specialty_id' => $request->modal_speciality_id,
            'type' => $request->project_term,
            'budget' => $request->budget_check,
            'hourly_from' => $request->hourly_from,
            'hourly_to' => $request->hourly_to,
            'project_budget' => $request->fixed,
            'duration' => $request->duration,
            'level' => $request->level,
        ]);
        return redirect()->route('project.all_jobs', ['statuses' => 'all'])->with('success', 'Post Successfully Updated ');
    }

    public function projectDraftDelete(Request $request)
    {
        // Delete project skills
        $deleteProjectSkill = ProjectSkill::where('project_id', $request->id)->delete();
        // Delete project details and associated images
        $projectDetails = ProjectDetail::where('project_id', $request->id)->get();
        foreach ($projectDetails as $projectDetail) {
            $image_path = public_path('/') . $projectDetail->filename;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        $deleteProjectDetail = ProjectDetail::where('project_id', $request->id)->delete();
        $deleteProject = Project::whereId($request->id)->delete();

        return response()->json(['response' => 'true']);
    }

    public function categoryUpdate(Request $request)
    {
        $category = Specialty::where('id', $request->specialty_id)->first();

        return response()->json(['response' => 'true', 'category' => $category->title]);
    }

    public function scopeUpdate(Request $request)
    {
       $reviewproject = Project::where('id',$request->projectId)->first();
       $level = !empty($request->level) ? $request->level : $reviewproject->level;
       $duration = !empty($request->duration) ? $request->duration : $reviewproject->duration;
       $scope = !empty($request->scope) ? $request->scope : $reviewproject->scope;

        $duration = $this->capitalLetter($duration,$level);
       
        return response()->json([
            'response' => 'true',
            'scope' => ucfirst($scope),
            'duration' => $duration,
            'level' =>  ucfirst($level)
        ]);
    }

    public function editBudget(JobPostedRequest $req)
    {
        return response()->json(['response' => $req->all()]);
    }

    public function editSkillListing(Request $request)
    {
        $projectSkill = ProjectSkill::with('skill')->where('project_id', $request->projectId)->get();
        $data['project'] = $this->project->projectData($request->projectId);
        $data['all'] = [];
        $skills_sub_name = [];

        foreach ($projectSkill as $key => $projectSkills) {
            $skill_id = $projectSkills->skill_id;
            $getParentskillTitle = Skill::select('title')->whereId($skill_id)->first();
            $parentTitle = $getParentskillTitle->title;
            $getParentskillData = Skill::select('id')->where('title', $parentTitle)->first();
            $data_skill = array('skill_id' => $projectSkills->skill_id, 'skill_name' => $projectSkills->skill->skills_sub, 'parent_id' => $getParentskillData->id);
            $data_skill_name = array($projectSkills->skill->skills_sub);
            array_push($data['all'], $data_skill);
            $skills_sub_name[$key] = $data_skill_name;
        }

        $data['single'] = array_reduce($skills_sub_name, 'array_merge', array());


        $spe = Specialty::with('skills.categories')->where('id', $request->specialityId)->first();

        $skillsTitle = $spe->skills()
            ->select('skills.*', DB::raw('group_concat(skills_sub) as skills_sub'))
            ->groupBy('title')
            ->get();

        $single = $data['single'];
        $options = view("client.skillsTitle", compact('skillsTitle', 'single'))->render();
        return response()->json(['response' => 'true', 'data' => $options]);
    }

    // status chnage of project
    public function projectStatusChange(Request $request)
    {
        $statusChange = Project::whereId($request->id)->update(['job' => $request->status]);
        return response()->json(['response' => 'true']);
    }

    public function capitalLetter($duration){
        // $reviewproject = Project::where('id',$request->projectId)->first();
        // $level = !empty($request->level) ? $request->level : $reviewproject->level;
        // $duration = !empty($request->duration) ? $request->duration : $reviewproject->duration;
        // $scope = !empty($request->scope) ? $request->scope : $reviewproject->scope;


        if($duration == "month_3_to_6" ){
            $duration = "Month 3 to 6";
        }
        if($duration == "month_1_to_3"){
            $duration = "Month 1 to 3";
        }
        if($duration == "more_than_6"){
            $duration = "More than 6";
        }        

   
        return $duration;
    }
}
