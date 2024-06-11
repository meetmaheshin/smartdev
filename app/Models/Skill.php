<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    public function categories() {
        return $this->belongsToMany(Category::class, 'category_speciality_skill');
    }
    
    public function specialties() {
        return $this->belongsToMany(Specialty::class, 'category_speciality_skill');
    }

    public function ProjectSkill()
    {
        return $this->hasOne(ProjectSkill::class);
    }
}
