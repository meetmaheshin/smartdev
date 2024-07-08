<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioAttachment extends Model
{
    use HasFactory;
    protected $table = 'portfolio_attachment';
    protected $guarded = [];
    
    public function getPortfolio(){
        return $this->belongsTo(Portfolio::class,'portfolio_id');
    }
}
