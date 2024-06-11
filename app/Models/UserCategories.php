<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCategories extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function specialties() {
        return $this->hasMany(Specialty::class,'id', 'speciality_id');
    }
    public function categories() {
        return $this->hasMany(Category::class,'id', 'category_id')->orderBy('id');
    }
}
 