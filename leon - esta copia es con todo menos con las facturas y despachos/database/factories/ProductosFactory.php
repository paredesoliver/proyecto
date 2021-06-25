<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Productos;
use Faker\Generator as Faker;

$factory->define(Productos::class, function (Faker $faker) {

    return [
        'id_procli' => $faker->randomDigitNotNull,
        'id_nomi' => $faker->randomDigitNotNull,
        'codigo' => $faker->word,
        'pvp' => $faker->word,
        'nombre_descripcion' => $faker->word,
        'marca' => $faker->word,
        'modelo' => $faker->word,
        'material' => $faker->word,
        'nivel_proteccion' => $faker->word,
        'tamano' => $faker->word,
        'capacidad' => $faker->word,
        'accesos' => $faker->word,
        'aplicacion' => $faker->word,
        'tipo_conector' => $faker->word,
        'estandar' => $faker->word,
        'numero_hilos' => $faker->word,
        'vanos_span' => $faker->word,
        'unidad_medida' => $faker->word,
        'cantidad' => $faker->randomDigitNotNull
    ];
});
