<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('versions', function (Blueprint $table) {
            $table->unsignedBigInteger('pokemons_id');
            $table->unsignedBigInteger('jeu_id');
            $table->foreign('jeu_id')->references('id')->on('jeus')
                ->onDelete('cascade');
            $table->foreign('pokemons_id')->references('id')->on('pokemons')
                ->onDelete('cascade');
            $table->string('numero', 50);
            $table->date('date_sortie');
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
        Schema::dropIfExists('versions');
    }
};
