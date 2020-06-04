<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit', function (Blueprint $table) {
            $table->id();
            $table->string('ean');
            $table->string('nom');
            $table->string('auteur');
            $table->string('editeur');
            $table->string('collection');
            $table->text('description');
            $table->decimal('prix', 10, 2);
            $table->date('dateparution');
            $table->integer('codedispo');
            $table->integer('stock');
            $table->integer('poids');
            $table->string('slug');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produit');
    }
}
