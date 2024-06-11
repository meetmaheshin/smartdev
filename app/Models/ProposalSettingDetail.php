<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProposalSettingDetail extends Model
{
    use HasFactory;
    protected $table  =  'proposal_settings_details';
    protected $guarded=[];

    public function proposalSetting()
    {
        return $this->belongsTo(ProposalSetting::class,'proposal_id');
    }
}
