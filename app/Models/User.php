<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use SoftDeletes;


    const ROLE_CLIENT = '1';
    const ROLE_FREELANCER = '0';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'email','profile_photo_path', 'password', 'is_admin','firstname','lastname','country_id','terms','state_id','time_zone','street_adresses','city_id','postal_code','phone_no'
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public const TYPE = [
        'client'  => '1',
        'freelancer' => '0',
    ];
    protected array $enumStatuses = self::TYPE;
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
       $this->attributes['password'] = bcrypt($value);
    }

    public function savejobs()
    {
        return $this->hasMany(SaveJob::class, 'user_id');
    }

    public function country() {
        return $this->belongsTo(Country::class,'country_id');
    }

    public function proposalsettings()
    {
        return $this->hasMany(ProposalSetting::class, 'user_id');
    }

    public function FreelancerProfile()
    {
        return $this->hasOne(FreelancerProfile::class,'user_id');
    }

    public function FreelancerExperience()
    {
        return $this->hasMany(freelancerExperience::class,'user_id');
    }
    public function FreelancerEducation()
    {
        return $this->hasMany(freelancerEducation::class,'user_id');
    }

    public function messages() {
        return $this->hasMany(Message::class, 'sender_id');
    }
    
    public function clientDetails(){
        return $this->hasOne(ClientCompanyDetail::class,'user_id')->withDefault([
            'company_name' => ''
        ]);
    }

    public function freelancerSkills(){
        return $this->hasMany(FreelancerSkill::class,'user_id');
    }

    public function freelancerRate(){
        return $this->hasOne(FreelancerRate::class,'user_id');
    }  
    
    public function getFullNameAttribute()
    {
        return ucfirst($this->firstname) . ' ' . ucfirst($this->lastname);
    }
    public function states(){
        return $this->belongsTo(State::class,'state_id');
    }
    public function cities(){
        return $this->belongsTo(City::class,'city_id');
    }
    public function getUserIDAttribute()
    {
        return ucfirst($this->firstname) . '_' . ucfirst($this->lastname);
    }
    public function wallets() {
        return $this->hasMany(Wallet::class, 'user_id');
    }

    public function getUserDetails($userId) {
        return $this->where('id', $userId)->first();
    }
}
