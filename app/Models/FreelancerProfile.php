<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreelancerProfile extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public static function getByUserId($user_id) {
        return self::where('user_id', $user_id)->first();
    }

    public function updateOrCreateTitle($userId, $title) {
        return $this->updateOrCreate(
            ['user_id' => $userId],
            ['title' => $title, 'user_id' => $userId]
        );
    }

    public function updateOrCreateBio($userId, $bio) {
        return $this->updateOrCreate(['user_id' => $userId], ['bio' => $bio]);
    }


}
