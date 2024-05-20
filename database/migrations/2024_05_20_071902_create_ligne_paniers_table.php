<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateLignePaniersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligne_paniers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_personnalisation')->nullable();
            $table->unsignedBigInteger('id_produit')->nullable();
            $table->integer('quantite')->nullable(false)->default(0);
            $table->timestamps();
            $table->foreign('id_personnalisation')->references('id')->on('personnalisations')->onDelete('cascade');
            $table->foreign('id_produit')->references('id')->on('produits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ligne_paniers');
    }
}
