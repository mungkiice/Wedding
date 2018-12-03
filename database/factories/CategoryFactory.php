<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'image' => 'categories/' . $faker->image('public/storage/categories', 800, 600, 'cats', false)
    ];
});
