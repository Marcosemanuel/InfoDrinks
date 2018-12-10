<?php

use Faker\Generator as Faker;

$factory->define(App\Petiscos::class, function (Faker $faker) {
    return [
        'description' => $faker->text,
    	'titulo' => $faker->jobTitle,
    	'image' => $faker->mimeType 

    ];
});
