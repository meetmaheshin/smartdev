<?php

namespace App\Http\Controllers\Freelancer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Carbon\Carbon;

class PortfolioController extends Controller
{
    public function __construct() {
        $this->middleware(['auth','verified']);
        $this->portfolio = new Portfolio;
    }
 
    public function index(Request $request) {
        $timezoneString = auth()->user()->time_zone;
        $parts = explode('|', $timezoneString);
        $timezone = $parts[0]; // 'Asia/Kolkata'
        $currentTime = Carbon::now($timezone);
        $data['timezone']= $currentTime->format('g:i a');
        $data['detail'] = $this->portfolio->portfolioData(auth()->user()->id);
        return view('freelancer.setting.myprofile',$data);
    }

    public function create(Request $request) {
        $request->validate(
            [
                'skill_id' => 'required',
                'title' => 'required|min:3|max:100',
                'description' => 'required',
                'filename.*' => 'mimes:jpg,png,jpeg,JPEG,JPG,PNG|max:5000'
            ]
        );
    }
}
