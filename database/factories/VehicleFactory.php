<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vehicle;
use Faker\Generator as Faker;

$factory->define(Vehicle::class, function (Faker $faker) {
    return [
        'model' => $faker->name,
        'make' => $faker->name,
        'year' => $faker->year
    ];
});
