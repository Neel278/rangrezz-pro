<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    // you can also add an trait and shift this methods in that trait and use it here so complexity gets lower
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lastname', 'firstname', 'address', 'birthdate', 'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function paintings()
    {
        return $this->hasMany(Paintings::class, 'owner_id');
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function followed()
    {
        return $this->hasMany(Follow::class, 'follower_id');
    }
    public function follower()
    {
        return $this->hasMany(Follow::class, 'followed_id');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function profile_path()
    {
        return "/profile/{$this->username}";
    }
    public function purchased_paintings()
    {
        return $this->hasMany(Paintings::class, 'bidder_id');
    }
}
