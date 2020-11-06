<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\recipe;
use Faker\Generator as Faker;

$factory->define(recipe::class, function (Faker $faker) {
    return [
        'recipe_name' => $faker->company,
        'rating' => ($faker->randomDigit+1)/2
    ];
});
