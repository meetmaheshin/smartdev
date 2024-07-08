<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioSkill extends Model
{
    use HasFactory;
    protected $table = 'portfolio_skills';
    protected $guarded = [];
    
    public function getPortfolio(){
        return $this->belongsTo(Portfolio::class,'portfolio_id');
    }
    
    public function skill(){
        return $this->belongsTo(Skill::class, 'skills_id');
    }
}
