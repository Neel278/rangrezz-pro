<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body', 'user_id', 'paintings_id'];

    public function painting()
    {
        return $this->belongsTo('App\Paintings', 'paintings_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
