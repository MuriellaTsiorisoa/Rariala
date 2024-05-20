<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_panier')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->string('nom')->nullable();
            $table->string('email')->nullable();
            $table->string('adresse_livraison');
            $table->string('reperage_livraison')->nullable();
            $table->string('ville')->nullable();
            $table->string('province')->nullable();
            $table->string('code_postal')->nullable();
            $table->string('telephone')->unique();
            $table->string('reference_transfert')->unique();
            $table->timestamp('date_commande')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();

            $table->foreign('id_panier')->references('id')->on('paniers')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
