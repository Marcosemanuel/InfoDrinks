<?php

use Faker\Generator as Faker;

$factory->define(App\Jogos::class, function (Faker $faker) {
    return [
        'perguntas' => $faker->text,
    ];
});
