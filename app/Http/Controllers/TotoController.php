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
    	return Produit::where('categorie_id', '4')->get();
    }
}
