<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Proposal;
use Faker\Generator as Faker;

$factory->define(Proposal::class, function (Faker $faker) {
    return [
        'status' => $faker->randomElement(['created', 'sended', 'approved', 'rejected', 'canceled']),
        'notes' => $faker->text,
        'price' => $faker->randomFloat(2),
        'haveRecurrence' => $faker->boolean(),
        'discount' => $faker->numberBetween(1, 100),
        'validity' => $faker->biasedNumberBetween()
    ];
});
