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
        Schema::create('version', function (Blueprint $table) {
            $table->unsignedBigInteger('idPokemon');
            $table->unsignedBigInteger('idJeu');
            $table->foreign('idJeu')->references('id')->on('jeu')
                ->onDelete('cascade');
            $table->foreign('idPokemon')->references('id')->on('pokemons')
                ->onDelete('cascade');
            $table->string('numero', 50);
            $table->date('date_sortie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('version');
    }
};
