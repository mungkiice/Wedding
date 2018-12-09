<?php

use Faker\Generator as Faker;

$factory->define(App\Packet::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'price' => $faker->numberBetween(1000000, 5000000)
    ];
});
