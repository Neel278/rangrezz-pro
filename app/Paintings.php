<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paintings extends Model
{
    protected $fillable = ['title', 'subtitle', 'description', 'painting_pic', 'starting_price', 'ending_date', 'owner_id'];

    public function path()
    {
        return "/paintings/{$this->id}";
    }
}
