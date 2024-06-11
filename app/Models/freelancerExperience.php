<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class freelancerExperience extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table =  'freelancer_experience';

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function getByUserId($userId) {
        return $this->where('user_id', $userId)->get();
    }

    public function updateOrCreateExperience($data) {
        $end_date = $data['end_date_check'] == 'on' ? '' : $data['end_date'];
        return $this->updateOrCreate(
            ['id' => $data['hiddenId']],
            [
                'user_id' => auth()->user()->id,
                'company' => $data['company'],
                'title' => $data['title'],
                'description' => $data['description'],
                'location' => $data['location'],
                'start_date' => $data['start_date'],
                'end_date' => $end_date,
                'country_id' => $data['country_id'],
            ]
        );
    }

}
