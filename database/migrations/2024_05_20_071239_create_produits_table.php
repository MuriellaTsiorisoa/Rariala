<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_categorie')->nullable();
            $table->unsignedBigInteger('id_modele')->nullable();
            $table->string('nom')->nullable();
            $table->text('paragraphe')->nullable();
            $table->integer('quantite')->nullable(false)->default(0);
            $table->string('hauteur')->nullable();
            $table->string('largeur')->nullable();
            $table->decimal('prix_unitaire', 20,5)->nullable();
            $table->enum('taille', ['PM', 'MM', 'GM'])->nullable();
            $table->enum('type', ['forme', 'modele_existant', 'produit'])->default('produit')->nullable();
            $table->jsonb('image_urls')->nullable();
            $table->timestamps();
            $table->foreign('id_categorie')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('id_modele')->references('id')->on('modeles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
