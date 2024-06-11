<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSkill extends Model
{
    use HasFactory;
    protected $guarded=[];
    public $timestamps = false;

    public function skill(){
        return $this->belongsTo(Skill::class);
    }

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
