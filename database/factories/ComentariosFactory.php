<?php

use Faker\Generator as Faker;

$factory->define(App\Comentarios::class, function (Faker $faker) {
    return [
      'coment' => $faker->text,
    	
    ];
});
