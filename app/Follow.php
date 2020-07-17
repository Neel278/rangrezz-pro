<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable = ['followed_id', 'follower_id'];

    public function follower()
    {
        return $this->belongsTo(User::class, 'followed_id');
    }
}
