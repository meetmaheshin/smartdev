<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $table = 'portfolio';
    protected $guarded = [];
    
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function portfolioSkill() {
        return $this->hasMany(PortfolioSkill::class);
    }

    public function attachment()
    {
        return $this->hasMany(PortfolioAttachment::class, 'portfolio_id');
    }


    public function portfolioData($userId){
        return  $this->where('user_id',$userId)->with(['user','attachment','portfolioSkill.skill'])->get();
    }

    public function portfolioRow($userId,$portfolioId){
        return $this->where('user_id',$userId)->where('id',$portfolioId)->with(['user','attachment','portfolioSkill.skill'])->first();

    }
}
