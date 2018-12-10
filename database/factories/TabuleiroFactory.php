<?php

use Faker\Generator as Faker;

$factory->define(App\Tabuleiros::class, function (Faker $faker) {
    return [
        'description' => $faker->name,
    	'titulo' => $faker->jobTitle,
    	'image' => $faker->mimeType 
    ];
});
