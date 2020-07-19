<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sold;
use Faker\Generator as Faker;

$factory->define(Sold::class, function (Faker $faker) {
    return [
        'owner_id' => function () {
            return factory('App\User')->create()->id;
        },
        'painting_id' => function () {
            return factory('App\Paintings')->create()->id;
        },
        'customer_id' => function () {
            return factory('App\User')->create()->id;
        }
    ];
});
