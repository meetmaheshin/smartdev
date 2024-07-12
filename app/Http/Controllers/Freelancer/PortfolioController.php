<?php

namespace App\Http\Controllers\Freelancer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioSkill;
use App\Models\PortfolioAttachment;
use App\Models\FreelancerProfile;
use App\Models\Certification;
use App\Models\UserCertification;

use Illuminate\Support\Facades\Storage;

use App\Models\Skill;
use Carbon\Carbon;
use DB;

class PortfolioController extends Controller
{
    public function __construct() {
        $this->middleware(['auth','verified']);
        $this->portfolio = new Portfolio;
        $this->certification = new Certification;
        $this->userCertification = new UserCertification;

    }
 
    public function index(Request $request) {
        $data['title'] = 'My Profile - '.config('app.name');
        $timezoneString = auth()->user()->time_zone;
        $parts = explode('|', $timezoneString);
        $timezone = $parts[0]; // 'Asia/Kolkata'
        if(!empty($timezone)){
            $currentTime = Carbon::now($timezone);
            $data['timezone']= $currentTime->format('g:i a');
        }
        $data['detail'] = $this->portfolio->portfolioData(auth()->user()->id);
        $data['certification']= $this->certification->certificationData();
        $data['userCertification']= $this->userCertification->certificationData();

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

                        $path = $file->store('/storage/portfolio', ['disk' =>   'my_files']);
                        $new_picture_array[] = array('portfolio_id' => $portfolio->id, 'filename' => $path, 'type' => 'image');
                    } else {
                        return response()->json(['response' => 'false', 'errors' => 'Sorry Only Upload png , jpg,jpeg , doc']);
                    }
                }
                PortfolioAttachment::insert($new_picture_array);
            }
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

    // delete Image
    public function deleteAttachment(Request $request)
    {
        $avatar = PortfolioAttachment::findOrFail($request->id);
        if (Storage::disk('my_files')->delete($avatar->filename)) {
            $avatar->delete();
        }
        return response()->json(['status' => 'true']);
    }

    public function deletePortfolio(Request $request)
    {
          // Start a transaction to ensure data integrity
        DB::beginTransaction();
        try {
                $attachment = PortfolioAttachment::where('portfolio_id',$request->id)->get();
                if(count($attachment)>0){
                    foreach($attachment as $attachments){
                        $avatar = PortfolioAttachment::findOrFail($attachments->id);
                        if (Storage::disk('my_files')->delete($avatar->filename)) {
                            $avatar->delete();
                        }
                    }

                }
                PortfolioSkill::where('portfolio_id', $request->id)->delete();
            
                Portfolio::whereId($request->id)->delete();
                // Commit the transaction
                DB::commit();
                return response()->json(['status' => 'true']);
            }catch (\Exception $e) {
                // Rollback the transaction in case of an error
                DB::rollBack();
                return response()->json(['status' => 'false', 'message' => $e->getMessage()]);
            }
    }

    public function updateTitle(Request $request){
        $update = FreelancerProfile:: where('user_id',auth()->user()->id)->update(['title'=>$request->title]);
        return redirect()->route('myprofile')->with('success','Title Updated');
    }

    public function updateDescription(Request $request){
        $update = FreelancerProfile:: where('user_id',auth()->user()->id)->update(['bio'=>$request->description]);
        return redirect()->route('myprofile')->with('success','Description Updated');
    }

    public function certification(Request $request){
        $request->validate(
            [
                'issue_date' => 'required|date',
                'certification_url'=>'nullable|url'
            ]
        );
        $portfolio = UserCertification::updateOrCreate([
            'id'   => $request->user_certification_id,
        ], [
            'issue_date'  =>   $request->issue_date,
            'expiry_date'  =>   $request->expiry_date,
            'certification_id'=>$request->certification_id,
            'certificationId' => $request->certificationId,
            'certification_url' => $request->certification_url,
            'user_id'=>auth()->user()->id
        ]);
        
   
        return response()->json(['response' => 'true', 'url' => route('myprofile')]);

    }

    public function deleteCertification(Request $request)
    {
        $avatar = UserCertification::findOrFail($request->id);
        $avatar->delete();
        return response()->json(['status' => 'true']);
    }

}
