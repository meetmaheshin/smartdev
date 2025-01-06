<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Industry;

class ClientDetailController extends Controller
{

    public function __construct() {
        $this->middleware(['auth', 'verified']);
        $this->all_country = new Country ;
        $this->user = new User;
    }
    public function createCompanyDetails()
    {
        $data['title'] = 'company detail - '.config('app.name');
        $data['clientInfo'] = User::with('clientDetails.industry','clientDetails.getCountry','clientDetails.getState')->where('id', auth()->user()->id)->first();
        $data['industries'] = Industry::all();
        $data['timezone'] = Timezone();
        return view('client.create_company_details', $data);
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function createLocation()
    {
        $data['title'] = 'Location - '.config('app.name');
        $data['clientInfo'] = User::with('clientDetails.industry','clientDetails.getCountry','clientDetails.getState')->where('id', auth()->user()->id)->first();
        $data['countries'] = Country::all();
        $data['industries'] = Industry::all();
        if($data['clientInfo']->clientDetails){
            $data['states'] = State::where('country_id',$data['clientInfo']->clientDetails->country)->get();
            $data['cities'] = City::where('state_id',$data['clientInfo']->clientDetails->state_id)->get();
        }
        $data['timezone'] = Timezone();
        return view('client.create_location', $data);
    }

    public function createProfile(){
        $data['title'] = 'Profile - '.config('app.name');
        $data['clientInfo'] = User::with('clientDetails.industry','clientDetails.getCountry','clientDetails.getState')->where('id', auth()->user()->id)->first();
        return view('client.create_profile', $data);
    }
}
