<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produit;
use Faker\Generator as Faker;

$factory->define(Produit::class, function (Faker $faker) {
    return [
        'ean' => $faker->ean13,
        'nom' => $faker->realText(rand(10,20)),
        'auteur' => $faker->name,
        'editeur' => $faker->company,
        'collection' => $faker->companySuffix,
        'description' => $faker->text(50),
        'prix' => $faker->randomFloat(5,0,9999),
        'dateparution' => $faker->date('Y-m-d', 'now'),
        'codedispo' => $faker->randomDigit,
        'stock' => $faker->randomDigit,
        'poids' => $faker->randomNumber(4),
    ];
});
