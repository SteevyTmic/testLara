<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categorie;
use Faker\Generator as Faker;

$mesrubriques = collect(['Littérature','Bd',
  'Mangas',
  'Sciences',
  'Histoire'
]);

$factory->define(Categorie::class, function (Faker $faker) use ($mesrubriques) {
    return [
        'nom' => $mesrubriques->random(),
    ];
});
