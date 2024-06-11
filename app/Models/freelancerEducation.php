<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class freelancerEducation extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table =  'freelancer_education';

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function getEducationByUserId($user_id){
        return $this->where('user_id', $user_id)->get();
    }
}
 