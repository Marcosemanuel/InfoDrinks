<?php

use Faker\Generator as Faker;

$factory->define(App\Musicas::class, function (Faker $faker) {
    return [
        'titulo' => $faker->title,
        'link' => $faker->url,
        'genero' => $faker->jobTitle

    ];
});
