<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Message extends Model
{
    public function user_messages() {
        return $this->hasMany(User_Message::class);
    }

    public function users() {
        return $this->belongsToMany(User::class, 'user_messages',
        'message_id', 'sender_id')
        ->withTimestamps();
    }

    public function markAsRead() 
    {
        $this->status = '0';
        $this->save();
    }
    /*public function userTo()
    {
        return $this->belongsTo('App\Models\User', 'recipient_to', 'id');
    } */
}