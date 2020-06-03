<?php

use Illuminate\Database\Seeder;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $mesrubriques = [
        'Littérature',
        'Bd',
        'Mangas',
        'Sciences',
        'Histoire'
      ];
      foreach ($mesrubriques as $uneRubrique) {
        App\Categorie::create(['nom' => $uneRubrique]);
      }
    }
}
