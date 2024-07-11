<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;

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

      ));
      return redirect()->route('admin.profile')->with('success','Profile Updated');
    }

}
