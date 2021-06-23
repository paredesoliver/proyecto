<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Empresas;
use Faker\Generator as Faker;

$factory->define(Empresas::class, function (Faker $faker) {

    return [
        'razon_social' => $faker->word,
        'ruc' => $faker->word,
        'nombre_comercial' => $faker->word,
        'telefono_convencional' => $faker->word,
        'telefono_movil' => $faker->word,
        'correo' => $faker->word,
        'direccion' => $faker->word,
        'sitio_web' => $faker->word
    ];
});
