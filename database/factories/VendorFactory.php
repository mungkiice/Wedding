<?php

use Faker\Generator as Faker;

$factory->define(App\Vendor::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'category_id' => function(){
        	return factory('App\Category')->create()->id;
        },
        // 'kategori' => $faker->randomElement(['mc', 'venue', 'photography', 'catering']),
        'photo' => 'vendor/' . $faker->image('public/storage/vendor', 800, 600, 'nature', false),
        'price' => 10000000
    ];
});
