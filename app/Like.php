<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';
    protected $fillable = ['user_id', 'painting_id', 'liked'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function painting()
    {
        return $this->belongsTo(Paintings::class);
    }
}
