<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chatting extends Model
{
    protected $fillable = ['message', 'user_id', 'paintings_id'];

    protected $dates = ['created_at'];

    protected $appends = ['messageSentDate'];

    public function getMessageSentDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function painting()
    {
        return $this->belongsTo(Paintings::class, 'paintings_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
