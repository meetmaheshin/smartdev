<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSkills extends Model
{
    use HasFactory;
    protected $table = 'user_skills';
    protected $fillable = ['user_id','skill_id','speciality_id'];

    public function skills() {
        return $this->belongsTo(Skill::class,'skill_id','id');
    }
    public function specialties() {
        return $this->hasMany('App\Models\Specialty','id', 'speciality_id');
    }
}
