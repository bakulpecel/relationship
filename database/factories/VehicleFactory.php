<?php

use App\Vehicle;
use Faker\Generator as Faker;

$factory->define(Vehicle::class, function (Faker $faker) {
    return [
        'user_id' => User::inRandomOrder()->first()->id,
        'name' => $faker->word,
    ];
});
