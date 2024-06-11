<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProposalSetting extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table    =  'proposal_settings';
    protected $guarded  =   [];

    public function projects() {
        return $this->belongsTo(Project::class,'project_id');
    }
    public function users() {
        return $this->belongsTo(User::class,'user_id');
    }

    public function getInvitedUser() {
        return $this->belongsTo(User::class,'receiver_id');
    }

    public function attachments() {
        return $this->hasMany(ProposalSettingDetail::class, 'proposal_id');
    }

    public function freelancerSkills() {
        return $this->hasMany(FreelancerSkill::class,'user_id','user_id',);
    }

    public function freelancerRate() {
        return $this->hasOne(FreelancerRate::class,'user_id','user_id',);
    }

    public function getInvitedfreelancerSkills() {
        return $this->hasMany(FreelancerSkill::class,'user_id','receiver_id');
    }

    public function getInvitedfreelancerRate() {
        return $this->hasOne(FreelancerRate::class,'user_id','receiver_id');
    }

    public function freelancerProfile() {
        return $this->belongsTo(FreelancerProfile::class,'user_id','user_id');
    }

    public function freelancerEducation() {
        return $this->hasMany(freelancerEducation::class,'user_id','user_id');
    }

    public function getInvitedfreelancerProfile() {
        return $this->belongsTo(FreelancerProfile::class,'receiver_id','user_id');
    }

    public function getInvitedfreelancerEducation() {
        return $this->hasMany(freelancerEducation::class,'user_id','receiver_id');
    }

    public function checkFreelancerHired() {
        return $this->hasOne(ClientHire::class ,'freelancer_id','user_id')->where('accept_offer','!=','2');
    }

    public function freelancerExperience() {
        return $this->hasMany(freelancerExperience::class,'user_id','user_id');
    }

    public function proposalData($projectId, $receiverId,$senderId, $status) {
        return $this->where(['project_id'=>$projectId,'receiver_id'=>$receiverId,'user_id'=>$senderId,'proposal_proposed_by'=>$status])->first();
    }

    public function getProposalSettingForProject($userId, $projectId) {
        return $this->where(['user_id'=>$userId,'project_id'=>$projectId])->first();
    }
    
    public function scopeSearch($query,$search) {
        $result = $query->where(function ($subQuery) use ($search) {

            $subQuery->whereHas('freelancerSkills.skill', function ($query) use ($search) {
                return $query->where('skills_sub', 'like', '%' . $search . '%');
            })
                ->orWhereHas('users', function ($query) use ($request) {
                    return $query->where('firstname', 'like', '%' . $search . '%')->orWhere('lastname', 'like', '%' . $search . '%');
                })
                ->orWhereHas('freelancerProfile', function ($query) use ($request) {
                    return $query->where('title', 'like', '%' . $search . '%');
                });
        });
        return $result ;
    }

}
