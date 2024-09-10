<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Conservation extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function message()
    {
        return $this->hasMany(Message::class, 'conversation_id')->withTrashed();
    }

    

    public function last_messages()
    {
        return $this->hasMany(Message::class, 'conservation_id')->latest()->limit(1);
    }


    public function conservationByProject($projectId, $sender, $receiver)
    {       
        
        $conversationData = Conservation::where(function($q) use ($sender, $receiver) {
            $q->where(function($query) use ($receiver, $sender){
                    $query->where('sender_id', $sender)
                          ->where('receiver_id', $receiver);
                })
              ->orWhere(function($query) use ($receiver, $sender) {
                    $query->where('receiver_id', $sender)
                          ->where('sender_id', $receiver);
                });
            })->where('project_id', $projectId)->first();

        return $conversationData;
    }

    public function getSenderId($projectId,$receiverId) {
        $conversation = Conservation::select('sender_id')->where(['project_id'=>$projectId,'receiver_id'=>$receiverId])->first();
        return $conversation;
    }
}
