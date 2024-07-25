<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Project extends Model
{
    use HasFactory;
  
    protected $guarded=[];

    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function specialities() {
        return $this->belongsTo(Specialty::class,'specialty_id');
    }
    public function skills() {
        return $this->belongsTo(Skill::class);
    }

    public function ProjectSkill()
    {
        return $this->hasMany(ProjectSkill::class);
    }

    public function images()
    {
        return $this->hasMany(ProjectDetail::class, 'project_id');
    }

    public function saveJobs()
    {
        return $this->hasOne(SaveJob::class, 'project_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function getProposalSetting()
    {
        return $this->hasMany(ProposalSetting::class)->where('user_id','!=',auth()->user()->id);
    }
    public function messageCount(){
        return $this->hasMany(Conservation::class,'project_id');
    }
    public function conversationRevertedCount(){
        return $this->hasMany(Conservation::class,'project_id')->where('is_reverted','1');
    }
    public function scopeWhereLike($query, $column, $value)
    {
        return $query->where($column, 'like', '%'.$value.'%');
    }

    public function clientHire() {
        return $this->hasMany(ClientHire::class,'project_id')->where('finish_project','!=','0');
        // return $this->hasMany(ClientHire::class,'project_id');
    }

    public function projectData($projectId) {
        return  Project::whereId($projectId)->with(['user','images'])->first();
    }

    public function getProjectDetailsWithRelations($projectId) {
        return $this->whereId($projectId)
                    ->with('user.country', 'user.states', 'specialities', 'ProjectSkill.skill', 'images')
                    ->with(['saveJobs' => function ($q) {
                        $q->where('user_id', auth()->user()->id);
                    }])
                    ->first();
    }

    public function scopeRecent($query) {
        $date = \Carbon\Carbon::today()->subDays(5);
        return $query->where('updated_at', '>=', $date)
            ->orderBy('id', 'desc');
    }

    public function scopeMatchingSkills($query, $skills) {
        return $query->where(function($query) use ($skills) {
            foreach ($skills as $skill) {
                $query->orWhere('title', 'LIKE', "%$skill%");
                $query->orWhere('description', 'LIKE', "%$skill%");
                $query->orWhereHas('ProjectSkill.skill', function ($query) use ($skill) {
                    $query->where('skills_sub', 'LIKE', "%$skill%");
                });
            }
        });
    }


}