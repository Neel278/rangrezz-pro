<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Follow extends Model
{
    use Notifiable;

    protected $fillable = ['followed_id', 'follower_id'];

    public function follower()
    {
        return $this->belongsTo(User::class, 'followed_id');
    }
}
