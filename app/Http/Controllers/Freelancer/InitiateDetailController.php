<?php

namespace App\Http\Controllers\Freelancer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Country;
use App\Models\Category;
use App\Models\FreelancerSkill;
use App\Models\FreelancerProfile;
use App\Models\freelancerEducation;
use App\Models\freelancerExperience;
use App\Models\FreelancerRate;
use App\Models\FreelancerService;
use App\Models\Wallet;
use App\Models\User;
use App\Models\State;
use App\Models\City;
use App\Http\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\FreelancerEducationRequest;
use App\Http\Requests\FreelancerExperienceRequest;
use App\Http\Requests\FreelancerTitleRequest;
use App\Http\Requests\FreelancerSkillRequest;
use App\Http\Requests\FreelancerBioRequest;
use App\Http\Requests\FreelancerServiceRequest;
use App\Http\Requests\WalletRequest;
use File,Auth;

class InitiateDetailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    use FileUploadTrait;

    public function __construct() {
        $this->middleware(['auth', 'verified']);
        $this->all_categories = Category::all();
        $this->all_country = new Country ;
        $this->profile = new FreelancerProfile;
        $this->experience = new freelancerExperience;
        $this->education = new FreelancerEducation;
        $this->freelancerService = new FreelancerService;
        $this->wallet = new Wallet;
        $this->user = new User;
    }

    public function freelancerWelcome(Request $request) {
        $data['title'] = 'Welcome - '.config('app.name');

        return view('freelancer.freelancer_welcome',$data);
    }
    public function createProfileTitle(Request $request) {
        $data['title'] = 'Profile Title - '.config('app.name');

        $data['profile'] = FreelancerProfile::getByUserId(auth()->user()->id);
        return view('freelancer.create_profile_title', $data);
    }

    public function storeTitle(FreelancerTitleRequest $request) {
        $this->profile->updateOrCreateTitle(Auth::user()->id, $request->title);
        return redirect()->route('create_experience');
    }

    public function experience(Request $request) {
        $data['title'] = 'Experience - '.config('app.name');

        $data['countries'] = $this->all_country->get(["name", "id"]);
        $data['show_exp'] = $this->experience->getByUserId(auth()->user()->id);
        return view('freelancer.freelance_experience', $data);
    }

    public function storeExperience(FreelancerExperienceRequest $request) {
        $experience = $this->experience->updateOrCreateExperience($request->all());
        $options = view("freelancer.showExperience", compact('experience'))->render();
        return response()->json(['status' => 'true', 'view' => $options, 'data' => $experience]);
    }

    public function getexperienceDataAjax(int $id) {
        $entries = new freelancerExperience();
        $entry = $entries->where('id', $id)->get();
        echo json_encode($entry);
    }

    public function deleteExperience(Request $request) {
        $exp = freelancerExperience::findOrFail($request->id);
        $exp->delete();
        return response(['msg' => 'Experience deleted', 'status' => 'Success']);
    }

    public function geteducationDataAjax(int $id) {
        $entries = new freelancerEducation();
        $entry = $entries->where('id', $id)->get();
        echo json_encode($entry);
    }

    public function education(Request $request) {
        $title = 'Education - '.config('app.name');

        $show_edu = $this->education->getEducationByUserId(auth()->user()->id);
        return view('freelancer.freelance_education', compact('show_edu','title'));
    }

    public function storeEducation(FreelancerEducationRequest $request)
    {
        $education = freelancerEducation::updateOrCreate([
            'id'   => $request->hiddenId,
        ], [
            'user_id'  =>   auth()->user()->id,
            'school' => $request->school,
            'degree' =>  $request->degree,
            'fieldOfStudy' =>  $request->fieldOfStudy,
            'start_date' =>  $request->start_year,
            'end_date' =>  $request->end_year,
            'description' =>  $request->description,
        ]);
        $options = view("freelancer.showEducation", compact('education'))->render();
        return response()->json(['status' => 'true', 'view' => $options, 'data' => $education]);
    }

    public function deleteEducation(Request $request)
    {
        $education = freelancerEducation::findOrFail($request->id);
        $education->delete();
        return response(['msg' => 'Education deleted', 'status' => 'Success']);
    }

    public function skills(Request $request)
    {
        $data['title'] = 'Skills - '.config('app.name');

        $data['skill'] = Skill::groupBy('skills_sub')->get();
        $data['selectedSkills'] = FreelancerSkill::with('skill')->where('user_id', auth()->user()->id)->get();
        return view('freelancer.freelance_skills', $data);
    }

    public function storeSkills(FreelancerSkillRequest $request)
    {
        $data = [];
        $userCheck = FreelancerSkill::where('user_id', auth()->user()->id);
        if ($userCheck->exists()) {
            $userCheck->delete();
        }
        foreach ($request->skills as $skill) {
            $data[] = [
                'user_id'  => auth()->user()->id,
                'skill_id' => $skill
            ];
        }
        FreelancerSkill::insert($data);
        return redirect()->route('create_bio');
    }

    public function bio(Request $request) {
        $title = 'Bio - '.config('app.name');
        $profileBio = FreelancerProfile::getByUserId(auth()->user()->id);
        return view('freelancer.freelance_bio', compact('profileBio','title'));
    }

    public function rate(Request $request) {
        $title = 'Rate - '.config('app.name');

        $freelancerRate = FreelancerRate::where('user_id', auth()->user()->id)->first();
        return view('freelancer.freelance_rate', compact('freelancerRate','title'));
    }
    public function services(Request $request) {
        $title = 'Services - '.config('app.name');
        $services = array();
        $selectedServices = array();
        $category =  $this->all_categories ;
        foreach ($category as $spec) {
            $services[] = Category::with(['specialties' => function ($q) {
                $q->groupBy('title');
            }])->where('id', $spec->id)->first();
        }
        $selectedServices = $this->freelancerService->getServicesByUserId(auth()->user()->id);
        return view('freelancer.freelance_services', compact('title','services', 'selectedServices'));
    }

    // store bio 
    public function storeBio(FreelancerBioRequest $request) {
        $this->profile->updateOrCreateBio(Auth::user()->id, $request->user_profile_bio);
        return redirect()->route('create_services');
    }

    // store services
    public function storeServices(FreelancerServiceRequest $request) {
        $data = [];
        $serviceCheck = FreelancerService::where('user_id', auth()->user()->id);
        if ($serviceCheck->exists()) {
            $serviceCheck->delete();
        }
        foreach ($request->services as $service) {
            $data[] = [
                'user_id'  => auth()->user()->id,
                'speciality_id' => $service
            ];
        }
        FreelancerService::insert($data);
        return redirect()->route('create_rate');
    }

    public function location(Request $request) {
        $data['title'] = 'Location - '.config('app.name');
        $data['countries'] = $this->all_country->get() ;
        $data['userDetails'] =  $this->user->getUserDetails(auth()->user()->id);
        $data['states'] = State::where('country_id', $data['userDetails']->country_id)->get();
        $data['cities'] = City::where('state_id', $data['userDetails']->state_id)->get();
        return view('freelancer.freelance_location', $data);
    }

    // store rate
    public function storeRate(FreelancerTitleRequest $request) {
        $freelancerRate = FreelancerRate::updateOrCreate([
            'user_id'   => auth()->user()->id,
        ], [
            'hourly_rate' => $request->hourly_rate,
            'service_fee' => $request->service_fee,
            'receive_fee' => $request->receive_fee
        ]);
        return redirect()->route('add_wallet');
    }

    public function storeLocation(FreelancerTitleRequest $request) {
        $user = auth()->user();
        $fileName = $user->profile_photo_path;
        if ($request->hasFile('filename')) {
            $file = $request->file('filename');
            $fkey = rand(10, 100);
            $image_path = public_path('/storage/images/client_profile/') . $fileName;
            $image_thumbnail_path = public_path('/storage/thumbnail/client_profile/') . $fileName;
            if (File::exists($image_path)) {
                File::delete($image_path);
                File::delete($image_thumbnail_path);
            }
            $fileName =   $this->UploadFunction($file, $fkey, 'client_profile', $type = 2);
        }
        $user->update([
            'country_id' => $request->country,
            'state_id' => $request->country_states,
            'city_id' => $request->country_state_city,
            'street_adresses' => $request->street_address,
            'postal_code' => $request->postal_code,
            'phone_no' => $request->phone,
            'profile_photo_path' => $fileName
        ]);
        return redirect()->route('dashboard')->with('success', 'Welcome to Dashboard');
    }

    public function primaryWallet() {
        $data['title'] = 'Wallet - '.config('app.name');
        $data['walletData'] = Wallet::where(['user_id' => auth()->user()->id, 'primary' => '1'])->first();
        return view('freelancer.freelance_primary_wallet', $data);
    }

    public function primaryStoreWallet(WalletRequest $request) {
        $error = $this->wallet->checkUniqueness($request->walletName, $request->wallet_address, $request->network, auth()->user()->id);
        if ($error) {
            return redirect()->back()->with("error", $error);
        }
        $wallet = Wallet::updateOrCreate([
            'user_id'   => auth()->user()->id,
        ], [
            'name' => $request->walletName,
            'network' => $request->network,
            'wallet_address' => $request->wallet_address,
            'primary'=>'1'
        ]);

        return redirect()->route('create_location');
    }
}
