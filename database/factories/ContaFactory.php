<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Conta;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Conta::class, function (Faker $faker) {
    return [
        'numero' => $faker->randomNumber,
        'valor' => $faker->randomFloat(2, 2, 100),
    ];
});
