<?php

use Faker\Generator as Faker;

$factory->define(App\Vendor::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'category_id' => function(){
        	return factory('App\Category')->create()->id;
        },
        'description' => $faker->paragraph,
        'photo' => 'vendor/' . $faker->image('public/storage/vendor', 800, 600, 'nature', false),
        'price' => $faker->numberBetween(1000000, 10000000)
    ];
});
