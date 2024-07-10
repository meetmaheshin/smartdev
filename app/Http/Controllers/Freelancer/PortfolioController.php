<?php

namespace App\Http\Controllers\Freelancer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioSkill;
use App\Models\Skill;
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
        $data['all'] = [];

    



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
        $portfolio = Portfolio::updateOrCreate([
            'id'   => $request->portfolio_id,
        ], [
            'title'  =>   $request->title,
            'description'  =>   $request->description,
            'role' => $request->role,
            'user_id' => auth()->user()->id
        ]);
        if (count($request->skill_id) > 0) {
            PortfolioSkill::where('portfolio_id', $portfolio->id)->delete();
            $skillData = [];
            foreach ($request->skill_id as $key => $skill_id) {
                $skillData[$key]['portfolio_id'] = $portfolio->id;
                $skillData[$key]['skills_id'] = $skill_id;
            }
            PortfolioSkill::insert($skillData);
        }
        return response()->json(['response' => 'true', 'url' => route('myprofile')]);

    }

    public function autocomplete(Request $request)
    {
        $selectedId = [];
        $selectedTest = [];
        // check if ajax request is coming or not
        if ($request->ajax()) {
            if ($request->selectedId != '') {
                $selectedId = $request->selectedId;
            }
            $data = Skill::whereNotIn('id', $selectedId)->where('skills_sub', 'LIKE', $request->term . '%');
            if ($request->selectedTest != '') {
                $selectedTest = $request->selectedTest;
                foreach ($selectedTest as $text) {
                    $data->where('skills_sub','!=',$text);
                }
            }
            $result = $data->groupBy('skills_sub')->get();
            $output = '';
            // if searched countries count is larager than zero
            if (count($result) > 0) {
                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
                foreach ($result as $row) {
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

    public function getPortfolioDetails(Request $request){
        $data['detail'] = $this->portfolio->portfolioRow(auth()->user()->id,$request->id);
        return response()->json(['response' => 'true', 'data' => $data]);

    }


}
