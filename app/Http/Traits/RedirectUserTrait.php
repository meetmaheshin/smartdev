<?php
namespace App\Http\Traits;

use App\Models\FreelancerSkill;
use App\Models\FreelancerProfile;
use App\Models\FreelancerService;
use App\Models\Wallet;


trait RedirectUserTrait {
    
    public function redirectUser($userId){
        $user = 'dashboard';

        // check title
        $checkTitle = FreelancerProfile::where('user_id',$userId)->first();
        $checkSkills = FreelancerSkill::where('user_id',$userId)->count();
        $checkServices = FreelancerService::where('user_id',$userId)->count();
        $checkWallet = Wallet::where('user_id',$userId)->count();



        if(empty($checkTitle->title)){
            $user = 'create_profile.title';
        }elseif($checkSkills == 0){
            $user = 'create_skills';
        }elseif($checkServices == 0){
            $user = 'create_services';
        }elseif($checkWallet == 0){
            $user = 'add_wallet';
        }
        elseif(empty((auth()->user()->city_id))){
            $user = 'create_location';
        }
        return $user;
    }

}