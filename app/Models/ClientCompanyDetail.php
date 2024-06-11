<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientCompanyDetail extends Model
{
    use HasFactory;
    protected $table = 'client_company_details';
    protected $guarded=[];

    public function industry(){
        return $this->hasOne(Industry::class,'id','industry_id');
    }
    public function getCountry() {
        return $this->belongsTo(Country::class,'country');
    }
    public function getState() {
        return $this->belongsTo(State::class,'state_id');
    }
    public function getCity() {
        return $this->belongsTo(City::class,'city_id');
    }
}
