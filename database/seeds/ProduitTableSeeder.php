<?php

use Illuminate\Database\Seeder;
use App\Categorie;

class ProduitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$produits = factory(App\Produit::class, 10)->create();
    		$categories = Categorie::all();
    		foreach ($produits as $unProduit) {
    			$cat = $categories->random();
    			$unProduit->categorie()->associate($cat);
    			$unProduit->save();
    		}
    }
}
