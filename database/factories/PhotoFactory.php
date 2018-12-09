<?php

use Faker\Generator as Faker;

$factory->define(App\Photo::class, function (Faker $faker) {
    return [
    	'gallery_id' => function(){
    		return factory('App\Gallery')->create()->id;
    	},
        'path' => 'gallery/' . $faker->image('public/storage/gallery', 800, 600, 'people', false),
    ];
});
