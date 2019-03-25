<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    return [
    	'category' => $faker->randomElement(['PL Malang', 'PL Jawa Tengah', 'PL Bali']),
        'photo' => 'service/' . $faker->image('public/storage/service', 800, 600, 'nature', false),
    ];
});
