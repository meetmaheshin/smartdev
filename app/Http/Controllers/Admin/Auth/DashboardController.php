<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Models\Certification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{

    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index(Request $request){
      $data['project']=Project::where('job','new')->count();
      $data['client']=User::where('status',1)->where('is_admin','1')->count();
      $data['freelancer']=User::where('status',1)->where('is_admin','0')->count();
      return view('admin.dashboard',$data);
    }

    // Profile 

    public function profile(Request $request){
      return view('admin.profile');
    }

    public function saveProfile(Request $request){
      $user = User::whereId(auth()->user()->id)->update(array(
        'firstname'=>$request->firstname,
        'lastname'=>$request->lastname,
        'email'=>$request->email,
        'phone_no'=>$request->phone_no,
        'password'=>Hash::make($request->password)

      ));
      return redirect()->route('admin.profile')->with('success','Profile Updated');
    }
    // certification section

    public function certification(){
      $data['certification'] = Certification::get();
      return view('admin.certification.index',$data);
    }

    public function certificationAdd(Request $request){
      return view('admin.certification.edit',['certification' => new Certification()]);
    }
  

    public function certificationEdit(Request $request){
      $data['certification'] = Certification::whereId($request->id)->first();
      return view('admin.certification.edit',$data);
    }

    public function certificationUpdate(Request $request){
      $validate = Validator::make(
          $request->all(),
          [
              'title' => 'required',
          ]
      );
      if ($validate->fails()) {
          return Redirect::back()->withErrors($validate);
      }
      $certification = Certification::find( $request->certification_id);
      if (empty($certification)) {// you can do this condition to check if is empty
          $certification= new Certification;//then create new object
      }
      $certification->title = $request->title;
      $certification->save();
      return redirect()->route('admin.certification')->with('success', 'Certification Successfully Updated ');
  }

  public function certificationDelete(Request $request){
    $certification = Certification::whereId($request->id)->delete();
    return response()->json(['message' => 'Certification deleted successfully']);
}


}
