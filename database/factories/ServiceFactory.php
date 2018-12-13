<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    return [
        'text' => $faker->paragraph
    ];
});
