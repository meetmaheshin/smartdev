<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    use HasFactory;
    public function skills() {
        return $this->belongsToMany(Skill::class, 'category_speciality_skill');
    }
    
    public function specialties() {
        return $this->belongsToMany(Specialty::class, 'category_speciality_skill');
    }

    public function projects() {
        return $this->hasMany(Project::class, 'category_id');
    }
}
