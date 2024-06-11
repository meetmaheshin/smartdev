<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;
    // protected $fillable=['title'];


    public function categories() {
        return $this->belongsToMany(Category::class, 'category_speciality_skill');
    }
    
    public function skills() {
        return $this->belongsToMany(Skill::class, 'category_speciality_skill');
    }

    // public function category()
    // {
    //     return $this->belongsTo('App\Models\Category');
    // }
}
