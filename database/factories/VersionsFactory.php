<?php

namespace Database\Factories;

use App\Models\Jeu;
use App\Models\Model;
use App\Models\Pokemons;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class VersionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $pokemonsId = Pokemons::all();
        $jeuxId = Jeu::all();
        return [
            'idPokemon' => $this->faker->randomElement($pokemonsId),
            'idJeu' => $this->faker->randomElement($jeuxId),
            'numero' => $this->faker->randomFloat(10),
            'date_sortie' => $this->faker->date,
        ];
    }
}
