<?php

use Faker\Generator as Faker;

$factory->define(App\AboutUs::class, function (Faker $faker) {
    return [
        'text' => $faker->paragraph
    ];
});
