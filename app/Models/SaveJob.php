<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaveJob extends Model
{
    use HasFactory;
    protected $tables=  'save_jobs';
    protected $guarded=[];

    public function projects()
    {
        return $this->belongsTo(Project::class,'project_id');
    }


    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
