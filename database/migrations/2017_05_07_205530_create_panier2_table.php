<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanier2Table extends Migration
{
   public function up()
    {

        Schema::create('panier2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emailClient');
            $table->string('nomProduit');
            $table->string('categorieProduit');
            $table->string('description');
            $table->string('prixProduit');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('panier2');
    }
}
