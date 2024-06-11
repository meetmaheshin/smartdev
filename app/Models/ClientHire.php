<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientHire extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function freelancer(){
        return $this->hasOne(User::class,'id','freelancer_id');
    }

    public function proposalSetting(){
        return $this->hasMany(ProposalSetting::class,'user_id','freelancer_id');
    }

    public function projects(){
        return $this->hasOne(Project::class,'id','project_id')->withDefault([
            'title' => '',
        ]);
    }

    public function clients() {
        return $this->hasOne(User::class,'id','client_id')->withDefault([
            'firstname' => '',
            'lastname' => '',
        ]);
    }

    public function milestone() {
        return $this->hasMany(ProjectMilestone::class, 'offer_id');
    }
}
