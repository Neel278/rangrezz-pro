<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Paintings;
use Faker\Generator as Faker;

$factory->define(Paintings::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'subtitle' => $faker->sentence,
        'description' => $faker->paragraph,
        'painting_pic' => $faker->imageUrl(),
        'starting_price' => $faker->randomDigitNotNull,
        'ending_date' => $faker->date(),
    ];
});
