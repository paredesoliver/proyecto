<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProveedoresClientes;
use Faker\Generator as Faker;

$factory->define(ProveedoresClientes::class, function (Faker $faker) {

    return [
        'id_nomi' => $faker->randomDigitNotNull,
        'tipo_identificacion' => $faker->word,
        'actividad' => $faker->randomDigitNotNull,
        'tipo_provedor' => $faker->randomDigitNotNull,
        'razon_social' => $faker->word,
        'nombre_comercial' => $faker->word,
        'fec_nac' => $faker->word,
        'telefono_movil' => $faker->word,
        'telefono_convencional' => $faker->word,
        'correo' => $faker->word,
        'direccion' => $faker->word,
        'forma_pago' => $faker->randomDigitNotNull,
        'asesor' => $faker->word,
        'observaciones' => $faker->word
    ];
});
