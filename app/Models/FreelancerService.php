<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreelancerService extends Model
{
    use HasFactory;
    protected $table = 'freelancer_services';
    protected $guarded = [];

    public function specialties() {
        return $this->hasMany('App\Models\Specialty','id', 'speciality_id');
    }
    public function getServicesByUserId($user_id) {
        return $this->with(['specialties'])->where('user_id', $user_id)->get();
    }


}
