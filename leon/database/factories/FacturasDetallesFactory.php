<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\FacturasDetalles;
use Faker\Generator as Faker;

$factory->define(FacturasDetalles::class, function (Faker $faker) {

    return [
        'id_fac' => $faker->randomDigitNotNull,
        'id_prod' => $faker->randomDigitNotNull,
        'cantidad' => $faker->randomDigitNotNull,
        'descripcion' => $faker->word,
        'precio_unitario' => $faker->word,
        'descuento_producto' => $faker->word,
        'destino' => $faker->word
    ];
});
