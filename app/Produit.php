<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produit extends Model
{
    use Sluggable;

    protected $table = 'produit';

   /**
    * Return the sluggable configuration array for this model.
    *
    * @return array
    */
   public function sluggable()
   {
       return [
           'slug' => [
               'source' => 'nom'
           ]
       ];
   }

   public function categorie() : BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
