<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\ClientCompanyDetail;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Industry;
use App\Models\ClientHire;
use App\Http\Requests\ClientCompanyDetailsRequest;
use App\Http\Requests\ClientCompanyContactRequest;
use App\Http\Requests\ClientAccountInfoRequest;
use App\Http\Requests\PasswordChangeRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Traits\FileUploadTrait;
use Auth, Session ,Image,File;


class ClientSettingController extends Controller
{

    use FileUploadTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
        $this->pageCount = config('constants.pagination');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request)
    {
        $data['clientInfo'] = User::with('clientDetails.industry','clientDetails.getCountry','clientDetails.getState')->where('id', auth()->user()->id)->first();
        $data['countries'] = Country::all();
        $data['industries'] = Industry::all();
        if($data['clientInfo']->clientDetails){
            $data['states'] = State::where('country_id',$data['clientInfo']->clientDetails->country)->get();
            $data['cities'] = City::where('state_id',$data['clientInfo']->clientDetails->state_id)->get();
        }
        $data['timezone'] = Timezone();
        return view('client.settings.my_info', $data);
    }

    // store Account info
    public function storeAccountInfo(ClientAccountInfoRequest $request)
    {
        $file = $request->file('filename'); 
        $data = User::where('id', auth()->user()->id)->first();
        $fileName = $data->profile_photo_path;
        $fkey = rand(10,100);
        if($file != null){
            $image_path = public_path('/storage/images/client_profile/').$data->profile_photo_path;
            $image_thumbnail_path = public_path('/storage/thumbnail/client_profile/').$data->profile_photo_path;
            if(File::exists($image_path)) {
                File::delete($image_path);
                File::delete($image_thumbnail_path);

            }
            $fileName =   $this->UploadFunction($file,$fkey,'client_profile',$type=2);
        }
        $userDetail = User::updateOrCreate([
            'id'   => auth()->user()->id,
        ], [
            'firstname' => $request->firstName,
            'lastname' => $request->lastName,
            'email' => $request->email,
            'profile_photo_path'=>$fileName
        ]);
        return response()->json(['status' => 'true']);

    }

    // store client company info
    public function storeCompanyDetails(ClientCompanyDetailsRequest $request)
    {
        $path = '';
        $clientCompanyDetail = ClientCompanyDetail::where('user_id', auth()->user()->id)->first();
        if(!empty($clientCompanyDetail)){
            $path = $clientCompanyDetail->profile_photo_path;
        }

        if($request->hasFile('client-company-file-upload')){
            $image_path = public_path($path);
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            $file = $request->file('client-company-file-upload');
            $path = $file->store('/storage/clientCompanyImg', ['disk' => 'my_files']);
        }
        $companyDetails = ClientCompanyDetail::updateOrCreate(
            [
                'user_id'   => auth()->user()->id,
            ],
            [
                'company_name' => $request->companyName,
                'website' => $request->website,
                'people' => $request->people,
                'tagline' => $request->tagline,
                'description' => $request->description,
                'industry_id' => $request->addYourIndustry,
                'profile_photo_path' => $path
            ]
        );
        return $clientCompanyDetail;
    }

    // store client company contact
    public function storeCompanyContact(ClientCompanyContactRequest $request)
    {

        $companyDetails = ClientCompanyDetail::updateOrCreate(
            [
                'user_id'   => auth()->user()->id,
            ],
            [
                'firstname' => $request->firstNameContact,
                'phone' =>  $request->phone,
                'time_zone' =>  $request->timeZone,
                'country' =>  $request->country,
                'state_id' =>  $request->state,
                'city_id' =>  $request->city,
                'address' =>  $request->address,
                'zip_code' =>  $request->zip,
            ]
        );
        $userDetails = User::updateOrCreate(
            [
                'id'   => auth()->user()->id,
            ],
            [
                'country_id' => $request->country,
                'city_id' => $request->city,
                'time_zone' => $request->timeZone,
                'street_adresses' => $request->address,
                'state_id' => $request->state,
                'phone_no' => $request->phone,
            ]
        );
        return $companyDetails;
    }

    public function changePassword(Request $request)
    {
        return view('client.settings.changePassword');
    }

    public function updatePassword(PasswordChangeRequest $request)
    {
            if(!Hash::check($request->oldPassword, auth()->user()->password)){
                return back()->with("error", "Old Password Doesn't match!");
            }
            $updatePass = User::where('id',auth()->user()->id)->update([
                'password' => Hash::make($request->newPassword)
            ]);
            return back()->with("success", "Password changed successfully!");    
    }

    public function deleteAccount(Request $request){
        $user = User::where('id',$request->clientId);
        if($user->exists()){
            $user->update(['status' => 2 , 'chat_status' => 0]);
            $user->delete();
            Session::flush();
            Auth::logout();
            return redirect()->route('login');
        }
        return redirect()->back();
    }

    public function deployContract(Request $request){
        $token = $request->session()->get('jwttoken');
        $deployContract = DeployContract($token,$request->client_address,$request->freelancer_address);
        $contractAddress = ClientHire::updateOrCreate(
            [
                'client_id' => auth()->user()->id,
                'freelancer_id' => $request->freelancer_id,
                'project_id' => $request->project_id,
            ],
            [
                'contract_address' => $deployContract['data']['contractAddress'], 
            ]
        );
        $request->session()->put('client_hire_details',[
            'client_id' => auth()->user()->id,
            'freelancer_id' => $request->freelancer_id,
            'project_id' => $request->project_id,
            'contractAddress'=>$deployContract['data']['contractAddress'],'clientAddress'=>$request->client_address
        ]);
        $request->session()->put('clientAddress',$request->client_address);
        return response()->json(['status' => true,'deployContract'=>$deployContract['data']['contractAddress']]);
    }
}
