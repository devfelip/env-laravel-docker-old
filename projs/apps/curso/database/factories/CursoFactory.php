<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Curso;
use Faker\Generator as Faker;

$factory->define(Curso::class, function (Faker $faker) {
    return [
        'titulo' => $faker->title,
        'descricao' => $faker->text(20),
        'valor' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 15),
        'imagem' => $faker->imageUrl($width = 640, $height = 480),
        'publicado' => $faker->randomElement(['sim', 'nao'])
    ];
});