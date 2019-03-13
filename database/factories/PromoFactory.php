<?php

use Faker\Generator as Faker;

$factory->define(App\Promo::class, function (Faker $faker) {
    return [
        'image' => 'promo/'.$faker->image('public/storage/promo', 240, 300, 'people', false),
    ];
});
