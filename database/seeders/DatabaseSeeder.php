<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Versions;
use Database\Factories\PokemonsFactory;
use Database\Factories\VersionsFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::Factory(10)->create();
        $this -> call(JeuSeeder::class);
        $this -> call(PokemonSeeder::class);
        $this -> call(VersionSeeder::class);
    }
}
