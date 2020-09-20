<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function user_messages(){
        return $this->hasMany(UserMessage::class);
    }

    public function user(){
        return $this->belongsToMany(User::class, 'user_messages', 'messages_id', 'sender_id')
                    ->withTimestamps();
    }
}
