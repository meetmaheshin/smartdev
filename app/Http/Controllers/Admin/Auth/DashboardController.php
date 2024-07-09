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
    $data['client']=User::where('status',1)->where('is_admin',1)->count();
    $data['freelancer']=User::where('status',1)->where('is_admin',0)->count();

    return view('admin.dashboard',$data);
    
  }
}
