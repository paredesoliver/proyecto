<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Facturas;
use Faker\Generator as Faker;

$factory->define(Facturas::class, function (Faker $faker) {

    return [
        'id_empr' => $faker->randomDigitNotNull,
        'id_nomi' => $faker->randomDigitNotNull,
        'id_procli' => $faker->randomDigitNotNull,
        'num_coti' => $faker->randomDigitNotNull
    ];
});
