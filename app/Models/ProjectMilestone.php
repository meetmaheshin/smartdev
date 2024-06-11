<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectMilestone extends Model
{
    use HasFactory;
    protected $guarded=[];
    public $timestamps = true;
    public function clientHire(){
        return $this->belongsTo(ClientHire::class,'offer_id','id');
    }

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public static function getMilestoneById($id,$offerId)
    {
        $data =  ProjectMilestone::whereId($id)->where('offer_id',$offerId)->first();
        return $data;
        
    }
}
