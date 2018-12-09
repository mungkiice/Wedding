<?php

use Faker\Generator as Faker;

$factory->define(App\Gallery::class, function (Faker $faker) {
    return [
        'celeb' => $faker->firstName . ' & ' . $faker->firstName
    ];
});
