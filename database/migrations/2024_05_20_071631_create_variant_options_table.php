<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateVariantOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variant_options', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_variant')->nullable();
            $table->string('variant_option')->nullable();
            $table->decimal('prix_unitaire', 20,5)->nullable();
            $table->jsonb('image_urls')->nullable();
            $table->timestamps();
            $table->foreign('id_variant')->references('id')->on('variants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variant_options');
    }
}
