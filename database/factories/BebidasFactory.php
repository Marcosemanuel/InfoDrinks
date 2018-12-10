<?php

use Faker\Generator as Faker;


// factory é usado para definir como fabricar um objeto
// para inserir no banco de dados.

$factory->define(App\Bebidas::class, function (Faker $faker) {
    return [
        
    	///pares de chave-valor considerando cada atributo da tabela do banco de dados

    	//checar API Faker - pedir o link a Romerito(EU)

    	'description' => $faker->text,
    	'titulo' => $faker->jobTitle,
    	'image' => $faker->mimeType 
    ];
});
