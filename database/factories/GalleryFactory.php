<?php

use Faker\Generator as Faker;

$factory->define(App\Gallery::class, function (Faker $faker) {
    return [
        'photo' => 'gallery/' . $faker->image('public/storage/gallery', 800, 600, 'people', false),
        'celeb' => $faker->firstName . ' & ' . $faker->firstName
    ];
});
