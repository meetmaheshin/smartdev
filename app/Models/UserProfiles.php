<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfiles extends Model
{
    use HasFactory;

    protected $table = 'userprofiles';
    protected $fillable = ['user_id','project_preference','experience_level','title','description'];
}
