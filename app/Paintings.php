<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Paintings extends Model
{
    protected $fillable = ['title', 'subtitle', 'description', 'painting_pic', 'starting_price', 'bidding_price', 'bidder_id', 'status', 'ending_date', 'owner_id'];

    public function path()
    {
        return "/paintings/{$this->id}";
    }
    public function owner()
    {
        return $this->belongsTo(User::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class, 'painting_id');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
