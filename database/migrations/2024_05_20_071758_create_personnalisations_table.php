<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreatePersonnalisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnalisations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produit')->nullable();
            $table->unsignedBigInteger('id_variant_option')->nullable();
            $table->timestamps();
            $table->foreign('id_produit')->references('id')->on('produits')->onDelete('cascade');
            $table->foreign('id_variant_option')->references('id')->on('variant_options')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnalisations');
    }
}
