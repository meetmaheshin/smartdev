<?php

namespace App\Http\Controllers\Freelancer;

use App\Models\Category;
use App\Models\Specialty;
use App\Models\Country;
use App\Models\User;
use App\Models\State;
use App\Models\City;
use App\Models\UserBalanceHistory;
use App\Models\UserBalance;

use App\Models\Wallet;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


use App\Http\Controllers\Controller;
use App\Models\UserCategories;
use App\Models\UserProfiles;
use App\Models\UserSkills;
use App\Models\FreelancerService;
use App\Models\FreelancerProfile;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\PasswordChangeRequest;
use App\Http\Requests\FreelancerAccountRequest;
use App\Http\Requests\WalletRequest;

use App\Http\Traits\FileUploadTrait;

use File;


 
class SettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    */
    use FileUploadTrait;
    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->middleware(['check-profile']);
        $this->freelancerService = new FreelancerService;

        $this->pageCount = config('constants.pagination');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $data['title'] = 'Profile Setting - '.config('app.name');

        if(auth()->check() && auth()->user()->is_admin == 0){
            $data['category'] =array();
            $newCatArr=[];
            $newArr=[];
            $speciality_id_array = [];
            $responseData=[];
            $skillIdselected=[];
            $skill_id_array = [];

            $data['profile']= UserProfiles::where('user_id',auth()->user()->id)->first();
            $data['profile_freelancer']= FreelancerProfile::getByUserId(auth()->user()->id);
            $data['specialityData']  = Specialty::get();
            $category= Category::get();
            foreach($category as $spec){
                $data['category'][] = Category::with(['specialties' => function($q)  {
                    $q->groupBy('title'); 
                }])->where('id',$spec->id)->first();
            }

            $checkcat = UserCategories::where('user_id',auth()->user()->id)->get();
            $checkspeciality = $this->freelancerService->getServicesByUserId(auth()->user()->id);
            if(count($checkcat)>0){
                foreach($checkcat  as  $user){
                    if(!in_array($user->specialties[0]->id,$newCatArr)){
                        $newCatArr[$user->specialties[0]->id]=[$user->specialties[0]->title];
                    }
                }
            }else{
                foreach($checkspeciality as $categoryId){
                     $speciality = $categoryId->specialties;
                     if(!in_array($speciality[0]->id,$newCatArr)){
                         $newCatArr[ $speciality[0]->id] = [$speciality[0]->title];
                     }
                }
            }
            foreach($newCatArr  as $key=> $val){
                $spec =  Specialty::where('id',$key)->with('categories')->first();
                $newArr[$spec->categories[0]->title][] = $val ;
            }
            $data['newArr'] = $newArr;
            $data['newCatArr'] = $newCatArr;
            
            $data['userSkills']= $specChecked = UserSkills::with(['skills','specialties'])->where('user_id',auth()->user()->id)->get();
            foreach($data['userSkills'] as $key => $value){
                $responseData[$value->specialties[0]->title]['key']= $value->specialties[0]->id;
                $responseData[$value->specialties[0]->title]['value'][]= $value->skills->skills_sub;
                $skillIdselected[$value->skills->id][]= $value->skills->skills_sub;
            }
            
            $data['newSkillArr'] = $responseData;
            $data['skillIdselected'] = $skillIdselected;
            if(count($specChecked)>0){
                foreach($specChecked as $skillId){
                    $skill_id_array[] = $skillId->skill_id;
                }
            }
            if(count($checkcat)>0){
                foreach($checkcat as $categoryId){
                    $speciality_id_array[] = $categoryId->speciality_id;
                }
            }else{
                foreach($checkspeciality as $categoryId){
                     $speciality = $categoryId->specialties;
                     $specialities=Specialty::select('id')->whereId( $speciality[0]->id)->first();
                     $speciality_id_array[] = $specialities->id;
                }
            }
            $data['speciality_id_array'] =$speciality_id_array;
            $data['user_skills_two'] = UserSkills::where('user_id',auth()->user()->id)->groupBy('speciality_id')->get();
            return view('freelancer.profile_setting',$data);
        }else{
            return redirect()->back();
        }
    }   
  
    public function getSkillsByID(Request $request){
        $skill_id_array = [];
        $newSpeArr=[];
        $skillIdselected=[];
        $speId = $request->specialityId;
        $spe = Specialty::with('skills.categories')->where('id',$speId)->first();

        // Use groupBy to group the skills by title
        $skillsTitle = $spe->skills()->select('skills.*', DB::raw('group_concat(skills_sub) as skills_sub'))
                                        ->groupBy('title')
                                        ->get();  
        $data['userSkills'] = UserSkills::with(['skills','specialties'])->where('user_id',auth()->user()->id)->get();

        if(count($data['userSkills'])>0){
            foreach($data['userSkills'] as $skillId){
                $skill_id_array[] = $skillId->skill_id;
            }
        }
        foreach($data['userSkills'] as $key => $value){
            if(!in_array($value->specialties[0]->title,$newSpeArr)){
                $newSpeArr[]=[$value->specialties[0]->title];
            }
            $responseData[$value->specialties[0]->title][]= $value->skills->skills_sub;
            $skillIdselected[$value->skills->id][]= $value->skills->skills_sub;
            $skillIdselected[$value->skills->id][]= $value->specialties[0]->id;
        }
        $data['skillIdselected'] = $skillIdselected;
        $optionsSelected = view("freelancer.specializedProfileSelected",compact('skillIdselected','speId'))->render();
        $options = view("freelancer.specializedProfile",compact('skillsTitle','speId','skill_id_array'))->render();
        return response()->json(['response' => 'true','data'=>$options,'speId'=>$speId,'view'=>$optionsSelected]);
    }
 
    // 
    public function profileProjectPrefer(Request $req){
        
        $checkUser = UserProfiles::where('user_id',auth()->user()->id);
        $responseArray = [];
        if($checkUser->exists()){
            $checkUser->update([
                'user_id' => auth()->user()->id,
                'project_preference' => $req->project_preference,
                'experience_level' => $req->experience_level
            ]);
            return response()->json([
                'message' => 'successfully Updated',
                'data' => $checkUser->first()
            ],200);
        }
        $checkUser->create([
            'user_id' => auth()->user()->id,
            'project_preference' => $req->project_preference,
            'experience_level' => $req->experience_level
        ]);
        return response()->json([
            'message' => 'successfully created',
            'data' => $checkUser->first()
        ],200);
    }

    public function profileCategories(FreelancerAccountRequest $req){
        $checkUser = UserCategories::where('user_id',auth()->user()->id);
        if($checkUser->exists()){
            $checkUser->delete();
        }
        $userSpecialities = [];
        foreach($req->specialities as $key => $speciality){
            $userSpecialities[] = [
                'user_id' => auth()->user()->id,
                'speciality_id' => $speciality,
            ];
        }
        // Insert new user categories
        UserCategories::insert($userSpecialities);
        $data = $checkUser->get();
        return response()->json($data);
        
    }
    
    //specializedProfiles
    public function specializedProfiles(FreelancerAccountRequest $req){
        if($req->speciality_id_hidden != ''){
            $checkUser = UserSkills::where('user_id',auth()->user()->id)->where('speciality_id',$req->speciality_id_hidden);
            if($checkUser->exists()){
                $checkUser->delete();
            }
        }else{
            $checkUser = UserSkills::where('user_id',auth()->user()->id)->where('speciality_id',$req->specialityId);
        }
       
        foreach($req->skillIds as $value){
                $tempArr = array(
                    'user_id' =>  auth()->user()->id,
                    'skill_id' => $value,
                    'speciality_id' => $req->specialityId
                );
                $checkUser->create($tempArr);
        }
       
       
        return response()->json($checkUser->get());
    } 

    public function specializedProfilesDelete($specialty_id) {
        $checkUser = UserSkills::where('user_id',auth()->user()->id)->where('speciality_id',$specialty_id);
        if($checkUser->exists()){
            $checkUser->delete();
        }
        return back()->with("success", "Successfully Deleted");    

    }

    // title profile setting
    public function profileTitle(FreelancerAccountRequest $req){
        $userProfile = UserProfiles::updateOrCreate([
            'user_id'   => auth()->user()->id,
        ],[
            'title' => $req->title,
        ]);
         return response()->json([
                'message' => 'Freelancer Profile Updated',
                'data' => $userProfile->first()
        ],200);
    }

    // desc profile setting
    public function profileDesc(FreelancerAccountRequest $req){
        $userProfile = UserProfiles::updateOrCreate([
            'user_id'   => auth()->user()->id,
        ],[
            'description' => $req->desc,
        ]);
         return response()->json([
                'message' => 'Freelancer Profile Updated',
                'data' => $userProfile->first()
        ],200);
    }

    public function contactInfo(Request $request){
        $data['title'] = 'Contact info - '.config('app.name');

        $data['countries'] = Country::all();
        $data['timezone'] = Timezone();
        $data['freelancerInfo'] = User::with('country','states','cities')->where('id',auth()->user()->id)->first();
        $data['countryCode'] = Country::where('id',$data['freelancerInfo']->country_id)->first();
        return view('freelancer.contact_info_setting',$data);
    }

    public function updateContactInfo(FreelancerAccountRequest $request){
        $userData = User::where('id',auth()->user()->id)->with('country')->first();
        $fileName = $userData->profile_photo_path;

        if($request->freelancerInfo == 'locationInfo'){
            $userUpdate = User::updateOrCreate(
                [
                    'id'   => auth()->user()->id,
                ],
                [
                    'country_id' => $request->country,
                    'street_adresses' => $request->streeAddress,
                    'city_id' => $request->country_state_city,
                    'postal_code' => $request->postalCode,
                    'phone_no' => $request->phone,
                    'state_id' => $request->country_states,
                    'time_zone' => $request->timeZone
                ]
            );
        }else{
            $file = $request->file('filename'); 
            $fkey = rand(10,100);
            if($file != null){
                $image_path = public_path('/storage/images/client_profile/').$userData->profile_photo_path;
                $image_thumbnail_path = public_path('/storage/thumbnail/client_profile/').$userData->profile_photo_path;
                if(File::exists($image_path)) {
                    File::delete($image_path);
                    File::delete($image_thumbnail_path);
    
                }
                $fileName =   $this->UploadFunction($file,$fkey,'client_profile',$type=2);
            }
            $userUpdate = User::updateOrCreate(
                [
                    'id'   => auth()->user()->id,
                ],
                [
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'profile_photo_path'=>$fileName
                ]
            );
        }
        return response()->json(['data' => $userUpdate,'freelancerInfo' => $request->freelancerInfo]);
    }

    public function fetchState(Request $request){
        $state = State::where('country_id',$request->countryId)->get();
        return $state;
    }

    public function fetchCity(Request $request){
        $city = City::where('state_id',$request->stateId)->get();
        return $city;
    }

    public function changeUserPassword(Request $request){
        $data['title'] = 'Change Password - '.config('app.name');

        return view('freelancer.setting.changePassword',$data);
    }

    public function updateUserPassword(PasswordChangeRequest $request)
    {
            if(!Hash::check($request->oldPassword, auth()->user()->password)){
                return back()->with("error", "Old Password Doesn't match!")->withInput();
            }
            $updatePass = User::where('id',auth()->user()->id)->update([
                'password' => Hash::make($request->newPassword)
            ]);
            return back()->with("success", "Password changed successfully!");    
    }

    public function deleteAccount(Request $request){
        $user = User::where('id',$request->userId);
        if($user->exists()){
            $user->update(['status' => 2 , 'chat_status' => 0]);
            $user->delete();
            Session::flush();
            Auth::logout();
        }
        return redirect()->route('login');
    }

    // update profile title and description
    public function updateMyProfile(FreelancerAccountRequest $request){
        $userProfile = FreelancerProfile::updateOrCreate([
            'user_id'   => auth()->user()->id,
        ],[
            'title' => $request->title,
            'bio' => $request->description
        ]);
        if($userProfile){
            return back()->with("success", "My profile updation successfully!")->withInput();    
        }
        return back()->with("error", "failed to update!")->withInput();    
    }

    public function buyConnects(Request $request){
        $data['title'] = 'Welcome to MetaMask - '.config('app.name');

        $data['token']= $token = UserBalance::where('user_id',auth()->user()->id)->first();
        if ($request->ajax()) {
            return response()->json(['success'=>'true','data' => $token]);
        }
        return view('freelancer.setting.buyConnects',$data);
    }

   

    public function loadRoviToken(Request $request){
        $userBalanceHistory = new UserBalanceHistory([
            'user_id' => auth()->user()->id,
            'rovi_amount' => $request->rovi_amount,
            'dev3_amount' => $request->dev3_amount,
            'usdt_amount' => $request->usdt_amount,
            'transaction_action' => $request->transaction_action,
            'action' => $request->action,
            'from_wallet' => $request->from_wallet,
            'to_wallet' => $request->to_wallet,
            'transaction_hash' => $request->txHash,
            'status' => $request->status
        ]);
        $userBalanceHistory->save();
        return response()->json(['success' => true]);
    }

    public function loadRoviTokenTx(Request $request){
        $userbalanceupdate = UserBalanceHistory::updateOrCreate([
            'user_id'   => auth()->user()->id,
            'transaction_hash' => $request->hash,
        ],[
            'transaction_action'=>$request->transaction_action,
            'transaction_hash' => $request->hash,
            'status' => $request->status,
        ]);
       
        return response()->json(['success' => 'true']);
    }

    public function wallet(Request $request) {
        if ($request->isMethod('GET')) {
            $data['title'] = 'Wallet - '.config('app.name');

            $data['walletData'] = Wallet::where('user_id',auth()->user()->id)->orderBy('primary','desc')->orderBy('id','desc')->paginate($this->pageCount);
            return view('freelancer.setting.wallets',$data);
        }
    }

    public function addWallet(WalletRequest $request) {
        // Check if wallet name is unique
        $uniqueName = Wallet::where('name',$request->walletName)->where('network',$request->network)->first();
        if($uniqueName){
            return back()->with("error", "Wallet Name should be unique");  
        }
        // Check if wallet address is unique
        $uniqueAddress = Wallet::where('wallet_address',$request->wallet_address)->where('network',$request->network)->first();
        if($uniqueAddress){
            return back()->with("error", "Wallet Address should be unique");  
        }
        if ($request->isMethod('POST')) {
            if(isset($request->primary)){
                // Update existing primary wallet to not be primary
                 Wallet::where(['primary'=>'1','user_id'=>auth()->user()->id])->update(['primary'=>'0']); 
            }
            // Create and save new wallet
            $wallet = new Wallet();
            $wallet->user_id = auth()->user()->id;
            $wallet->name = $request->walletName;
            $wallet->network = $request->network;
            $wallet->wallet_address = $request->wallet_address;
            $wallet->primary = (isset($request->primary) ? $request->primary : '0');
            $wallet->save();
            return back()->with("success", "Wallet Saved Successfully");  
        }

    }

    public function deleteWallet(Request $request) {
        $walletData = Wallet::where('id',$request->id);
        if($walletData->exists()){
            $walletData->delete();
        }
        return response()->json(['success' => 'true']);
    }
}