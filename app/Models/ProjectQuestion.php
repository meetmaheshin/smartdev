<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'project_id',
        'client_id'
    ];
}
