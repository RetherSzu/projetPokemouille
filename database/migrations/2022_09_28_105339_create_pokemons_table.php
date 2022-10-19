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
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->unique();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('jeu_id');
            $table->foreign('jeu_id')->references('id')->on('jeus')->onDelete('cascade');
            $table->string('extension');
            $table->integer('vie')->nullable(false);
            $table->string('type')->nullable(false);
            $table->string('faiblesse')->nullable(false);
            $table->integer('degat')->nullable(false);
            $table->string('url_media')->nullable(true);
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
        Schema::dropIfExists('pokemons');
    }
};
