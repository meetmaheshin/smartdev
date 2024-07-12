<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCertification extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','issue_date','certification_id','expiry_date','certification_url','certificationId'];

    public function certification() {
        return $this->belongsTo(Certification::class,'certification_id','id');
    }

    public function certificationData(){
        return $this->where('user_id',auth()->user()->id)->get();
    }
}
