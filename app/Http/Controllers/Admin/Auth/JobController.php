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
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


class JobController extends Controller
{

  public function index(Request $request){
    $data['project']=Project::where('job','new')->get();
    return view('admin.jobs.index',$data);
    
  }

  public function edit(Request $request){
    $data['project']=Project::whereId($request->id)->first();
    $data['web3specialty'] = Specialty::where('type', 1)->get();
    $data['web3_category'] = Category::where('type', 1)->get();
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
                ]
            );
            if ($validate->fails()) {
                return Redirect::back()->withErrors($validate);
            }
            $cat = Specialty::find( $request->speciality_id);
            if (empty($cat)) {// you can do this condition to check if is empty
                $cat= new Specialty;//then create new object
            }
            $cat->title = $request->title;
            $cat->type = 1;
            $cat->save();
            return redirect()->route('admin.speciality')->with('success', 'Speciality Successfully Updated ');
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


  
}


