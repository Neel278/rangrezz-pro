<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chatting extends Model
{
    protected $fillable = ['message', 'user_id', 'paintings_id'];

    public function painting()
    {
        return $this->belongsTo(Paintings::class, 'paintings_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
