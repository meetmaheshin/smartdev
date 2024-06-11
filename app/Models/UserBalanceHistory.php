<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBalanceHistory extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function getUser()
    {
        return $this->belongsTo(User::class, 'user_id')->withTrashed();
    }
    public function getProject()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
