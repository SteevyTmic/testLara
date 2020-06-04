<?php

namespace App\Http\Controllers;
use App\Produit;

use Illuminate\Http\Request;

class TotoController extends Controller
{
    public function getToto()
    {
      return 'Une vie de toto 2222222 :)';
    }

    public function getMesProduits()
    {
    	return Produit::all();
    }
    public function getMesProduits2()
    {
        return Produit::where('categorie_id', '4')->get();
    }
    public function getMesProduits3()
    {
        return Produit::where('categorie_id', '4')->get();
    }
}
