<?php

namespace Database\Seeders;

use App\Models\Jeu;
use App\Models\Pokemons;
use App\Models\Versions;
use Database\Factories\VersionsFactory;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\Exceptions\PostTooLargeException;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('fr_FR');
        $pokemons = Pokemons::all();
        $jeux_id = Jeu::all()->pluck('id');
        foreach ($pokemons as $pokemon) {
            $nbPersonnes = $faker->numberBetween(2, 5);
            $pokemons_jeu_ids = $faker->randomElements($jeux_id, $nbPersonnes, false);
            $first = true;
            foreach ($pokemons_jeu_ids as $id) {
                $pokemon->personnes()->attach($id, ['numero' => $faker->randomFloat(10),
                    'date_sortie' => $faker->dateTimeInInterval(
                        $startDate = '-3 months',
                        $interval = '+ 90 days',
                        $timezone = date_default_timezone_get())
                ]);
            }
        }

    }
}
