<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sold extends Model
{
    protected $fillable = ['owner_id', 'painting_id', 'customer_id'];

    // public function painting()
    // {
    //     return $this->belongsTo(Paintings::class);
    // }
}
