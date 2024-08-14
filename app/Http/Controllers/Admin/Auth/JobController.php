<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Models\Specialty;
use App\Models\Skill;
use App\Models\Category;
use App\Models\ProjectDetail;
use App\Models\FreelancerProfile;
use App\Models\ProjectSkill;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\Models\Country;
use App\Models\Consultation;


class JobController extends Controller
{

    public function __construct() {
        $this->middleware(['auth']);
        $this->profile = new FreelancerProfile;
        $this->user = new User;
    }

    public function index(Request $request){
        $data['project']=Project::where('job','new')->get();
        return view('admin.jobs.index',$data);
        
    }

    public function edit(Request $request){
        $skills_sub_name = [];
        $data['all'] = [];
        $data['project']=Project::whereId($request->id)->first();
        $data['web3specialty'] = Specialty::where('type', 1)->get();
        $data['web3_category'] = Category::where('type', 1)->get();

        $data['popularSkills'] = Skill::where('title', 'Popular skills')->get();
        $projectSkill = ProjectSkill::with('skill')->where('project_id', $request->id)->get();

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

        return view('admin.jobs.edit',$data);
    }
    public function getSpeciality(Request $request)
    {
        $category = Category::with('specialties')->where('id', $request->catId)->first();
        $speciality = $category->specialties()
            ->groupBy('title')
            ->get();
        return response()->json(['data' => $speciality]);
    }

    public function project_review(Request $request, $id)
    {
                $validate = Validator::make(
                $request->all(),
                [
                    'title' => 'required',
                    'description' => 'required',
                    'budgets' => 'required',
                    'filename.*' => 'required|image|mimes:jpg,png,jpeg,JPG,PNG,JPEG,PDF,pdf|max:5000',
                    'hourly_from' => [
                        'required_if:budgets,hourly',
                        'numeric',
                        'min:2',
                        'nullable'
                    ],
                    'hourly_to' => [
                        'required_if:budgets,hourly',
                        'numeric', 
                        'nullable',
                        function ($attribute, $value, $fail) use($request) {
                            if ($request->input('budgets') === 'hourly' && $value < $request->input('hourly_from')) {
                                $fail('Hourly rate must be greater than starting charges when budget type is hourly.');
                            }
                        },
                    ],
                    'project_budget' => 'required_if:budgets,project|numeric|min:5|nullable'
                ],
                [
                    'skill_id.required' => 'Must be select at least one skill',
                    'duration.required' => 'Please select duration',
                    'filename.*.required' => 'Please attach at least one file',
                    'filename.*.mimes' => 'Only jpg, jpeg, png images are allowed',
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
        
        $project = Project::where('id', $id);
        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'budget' => $request->budgets,
            'hourly_from' => $request->hourly_from,
            'hourly_to' => $request->hourly_to,
            'project_budget' => $request->fixed,
            'type' => $request->type,
            'duration' => $request->duration,
            'level' => $request->level,
        ]);
        return redirect()->route('admin.jobs')->with('success', 'Post Successfully Updated ');
    }

    public function category(Request $request){
        $data['category']=Category::where('type',1)->orderby('id','desc')->get();
        return view('admin.category.index',$data);
    }

    public function categoryAdd(Request $request){
        return view('admin.category.edit',['category' => new Category()]);
    }

    public function categoryEdit(Request $request,$id){
        $data['category'] = Category::whereId($request->id)->first();
        return view('admin.category.edit',$data);
    }

    public function categoryUpdate(Request $request){
        $validate = Validator::make(
            $request->all(),
            [
                'title' => 'required',
            ]
        );
        if ($validate->fails()) {
            return Redirect::back()->withErrors($validate);
        }
        $cat = Category::find( $request->category_id);
        if (empty($cat)) {// you can do this condition to check if is empty
            $cat= new Category;//then create new object
        }
        $cat->title = $request->title;
        $cat->type = 1;
        $cat->save();
        return redirect()->route('admin.category')->with('success', 'Category Successfully Updated ');
    }

    public function categoryDelete(Request $request){
        $check = Project::where('category_id',$request->id)->first();
        if(empty($check)){
            DB::table('category_speciality_skill')->where('category_id', $request->id)->delete();
            $skill = Category::whereId($request->id)->delete();
            return response()->json(['status'=> true,'message' => 'Category deleted successfully']);
        }else{
            return response()->json(['status'=> false,'message' => 'we cannot delete this Category because this Category is added to any job']);
        }
    }

    public function speciality(Request $request){
        $data['speciality']=Specialty::where('type',1)->orderby('id','desc')->get();
        return view('admin.speciality.index',$data);
    }
    
    public function specialityAdd(Request $request){
    return view('admin.speciality.edit',['speciality' => new Specialty()]);
    }

    public function specialityEdit(Request $request,$id){
        $data['speciality'] = Specialty::whereId($request->id)->first();
    return view('admin.speciality.edit',$data);
    }
    
    public function specialityUpdate(Request $request){
        $validate = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'rank' => 'nullable|integer|between:1,3',
            ]
        );
        if ($validate->fails()) {
            return Redirect::back()->withErrors($validate);
        }
        // Check if rank is provided and if it's already used by another specialty
        if (!is_null($request->rank)) {
            // $existingSpecialty = Specialty::where('rank', $request->rank)
            //     ->where('id', '!=', $request->speciality_id)
            //     ->first();

            // if ($existingSpecialty) {
            //     return Redirect::back()->withErrors(['rank' => 'This rank is already assigned to another specialty.'])->withInput();
            // }

            // Find the specialty that currently has this rank
            $existingSpecialty = Specialty::where('rank', $request->rank)->first();

            // If another specialty has this rank, clear its rank
            if ($existingSpecialty && $existingSpecialty->id != $request->speciality_id) {
                $existingSpecialty->rank = null;
                $existingSpecialty->save();
            }
        }

        $cat = Specialty::find( $request->speciality_id);
        if (empty($cat)) {// you can do this condition to check if is empty
            $cat= new Specialty;//then create new object
        }
        $cat->title = $request->title;
        $cat->type = 1;
        // Assign the rank if provided
        if (!is_null($request->rank)) {
            $cat->rank = $request->rank;
        } else {
            $cat->rank = null; // Clear rank if no rank is selected
        }
        $cat->save();
        return redirect()->route('admin.speciality')->with('success', 'Speciality Successfully Updated ');
    }

    public function specialityDelete(Request $request){
        $check = Project::where('specialty_id',$request->id)->first();
        if(empty($check)){
            DB::table('category_speciality_skill')->where('Specialty_id', $request->id)->delete();
            $skill = Specialty::whereId($request->id)->delete();
            return response()->json(['status'=> true,'message' => 'Specialty deleted successfully']);
        }else{
            return response()->json(['status'=> false,'message' => 'we cannot delete this specialty because this specialty is added to any job']);
        }
    }



    public function skills(Request $request){
        $data['skills']=Skill::orderby('id','desc')->get();
        return view('admin.skills.index',$data);
    }
    
    public function skillsAdd(Request $request){
        $data['speciality']=Specialty::where('type',1)->get();
        $data['category']=Category::where('type',1)->get();
        $data['skills'] = new Skill();

        return view('admin.skills.edit',$data);
    }
    
    public function skillsEdit(Request $request,$id){
        $data['speciality']=Specialty::where('type',1)->get();
        $data['category']=Category::where('type',1)->get();
        $data['skills'] = Skill::whereId($request->id)->first();
        return view('admin.skills.edit',$data);
    }
    
    public function skillsUpdate(Request $request){
            
            $validate = Validator::make(
                $request->all(),
                [
                    'title' => 'required',
                    'skills_sub' => 'required',
                ]
            );
            if ($validate->fails()) {
                return Redirect::back()->withErrors($validate);
            }
            $skill = Skill::find( $request->skills_id);
            if (empty($skill)) {// you can do this condition to check if is empty
                $skill= new Skill;//then create new object
            }
            $skill->title = $request->title;
            $skill->skills_sub = $request->skills_sub;
            $skill->save();
            if($request->web3_category_id != ''){
                $cat = Category::find($request->web3_category_id);
                $cat->specialties()->attach($request->web3_speciality_id, ['skill_id' => $skill->id]);
            }

            return redirect()->route('admin.skills')->with('success', 'Skill Successfully Updated ');
    }

    public function skillsDelete(Request $request){
        $check = ProjectSkill::where('skill_id',$request->id)->first();
        if(empty($check)){
            DB::table('category_speciality_skill')->where('skill_id', $request->id)->delete();
            $skill = Skill::whereId($request->id)->delete();
            return response()->json(['status'=> true,'message' => 'Skill deleted successfully']);
        }else{
            return response()->json(['status'=> false,'message' => 'we cannot delete this skill because this skill is added to any job']);
        }
    }

    // Popular Skills
    public function popularSkills(Request $request){
        $data['popularSkills']=Skill::orderby('id','desc')->get();
        return view('admin.popular_skills.index',$data);
    }


    public function popularSkillsAdd(Request $request){
        $data['popularSkills'] = new Skill();
        return view('admin.popular_skills.edit',$data);
    }

    public function popularSkillsEdit(Request $request,$id){
        $data['popularSkills'] = Skill::whereId($request->id)->first();
        return view('admin.popular_skills.edit',$data);
    }

    public function popularSkillsUpdate(Request $request){
            
        $validate = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'skills_sub' => 'required',
            ]
        );
        if ($validate->fails()) {
            return Redirect::back()->withErrors($validate);
        }
        $skill = Skill::find( $request->skills_id);
        if (empty($skill)) {    // you can do this condition to check if is empty
            $skill= new Skill;  //then create new object
        }
        $skill->title = $request->title;
        $skill->skills_sub = $request->skills_sub;
        $skill->save();

        return redirect()->route('admin.popularSkills')->with('success', 'Popular Skill Successfully Updated ');
    }

    public function popularSkillsDelete(Request $request){
        $check = ProjectSkill::where('skill_id',$request->id)->first();
        if(empty($check)){
            $skill = Skill::whereId($request->id)->delete();
            return response()->json(['status'=> true,'message' => 'Popular Skill deleted successfully']);
        }else{
            return response()->json(['status'=> false,'message' => 'we cannot delete this skill because this skill is added to any job']);
        }
    }


    // contact us 
    public function contactUs(Request $request){
        $data['users'] = Consultation::orderby('id','desc')->get();
        return view('admin.contact_us.index',$data);
    }

    public function contactUsEdit(Request $request,$id){
        $data['user'] = Consultation::whereId($request->id)->first();
        return view('admin.contact_us.edit',$data);
    }


    public function contactUsUpdate(Request $request){
        $validate = Validator::make(
            $request->all(),
            [
                'first_name' => 'required|regex:/^[a-zA-Z ]*$/',
                'last_name' => 'required|regex:/^[a-zA-Z ]*$/',
                'email' => 'required|email|max:255',
                'telegram_id' => 'required|regex:/^@[a-zA-Z0-9_]{5,32}$/',
                'description' => 'required'
            ]
        );
        if ($validate->fails()) {
            return Redirect::back()->withErrors($validate)->withInput();
        }
        $user = Consultation::find($request->id);
        if (empty($user)) {// you can do this condition to check if is empty
            $user= new User;//then create new object
        }
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->telegram_id = $request->telegram_id;
        $user->description = $request->description;
        $user->save();
        return redirect()->route('admin.contactUs')->with('success', 'Contact-Us Data Updated Successfully');
    }

    public function contactUsDelete(Request $request){
        $user = Consultation::whereId($request->id)->delete();
        return response()->json(['status'=> true,'message' => 'Contact-US Data deleted successfully']);
    }


    // users
    public function user(Request $request){
        $data['user']=User::where('is_admin','!=','2')->orderby('id','desc')->get();
        return view('admin.user.index',$data);
    }
    
    public function userEdit(Request $request,$id){
        $data['user'] = User::with('FreelancerProfile')->whereId($request->id)->first();
        $data['countries'] = Country::all();
        $data['timezone'] = Timezone();
        $data['freelancerInfo'] = User::with('country','states','cities')->where('id',$request->id)->first();
        $data['countryCode'] = Country::where('id',$data['freelancerInfo']->country_id)->first();
        return view('admin.user.edit',$data);
    }
    
    public function userUpdate(Request $request){
            
            $validate = Validator::make(
                $request->all(),
                [
                    'firstname' => 'required|regex:/^[a-zA-Z ]*$/',
                    'lastname' => 'required|regex:/^[a-zA-Z ]*$/',
                    'phone_no' => 'required|numeric|digits:10',
                    'country_id' => 'required|exists:countries,id',
                    'state_id' => 'required|exists:states,id',
                    'city_id' => 'required|exists:cities,id',
                    'time_zone' => 'required'
                ]
            );
            if ($validate->fails()) {
                return Redirect::back()->withErrors($validate)->withInput();
            }
            $user = User::find($request->id);
            if (empty($user)) {// you can do this condition to check if is empty
                $user= new User;//then create new object
            }
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->phone_no = $request->phone_no;
            $user->country_id = $request->country_id;
            $user->state_id = $request->state_id;
            $user->city_id = $request->city_id;
            $user->time_zone = $request->time_zone;
            $user->save();

            $this->profile->updateOrCreateTitle($request->id, $request->title);
            $this->profile->updateOrCreateBio($request->id, $request->user_profile_bio);


            return redirect()->route('admin.user')->with('success', 'User Successfully Updated ');
    }

    public function userDelete(Request $request){
        $user = User::whereId($request->id)->update(['status'=>2]);

        $user = User::whereId($request->id)->delete();
        return response()->json(['status'=> true,'message' => 'USER Account Closed']);
    }
    


  
}


