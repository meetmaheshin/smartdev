<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Message extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function get_conservation(){
        return $this->belongsTo(Conservation::class,'id');
    }

    public function conversation(){
        return $this->belongsTo(Conservation::class,'conservation_id','id');
    }
    public function get_sender(){
        return $this->belongsTo(User::class,'sender_id');
    }

    public function scopeLatestSendersMessages($query) {
         return $query->orderBy('created_at', 'desc')
             ->get(['sender_id', 'body', 'created_at'])
             ->unique('sender_id');
    }

    public function getUnreadMessages($conversations) 
    {
        $unreadMessageCount= Message::whereIn('conservation_id',$conversations)->where('sender_id','!=',auth()->user()->id)->where('is_read','0')->count();
         return $unreadMessageCount;
    }

    public function getIndividualUnreadMessages($conversations) 
    {
        $unreadMessageCount= Message::where('conservation_id',$conversations)->where('sender_id','!=',auth()->user()->id)->where('is_read','0')->count();
         return $unreadMessageCount;
    }
   
}
