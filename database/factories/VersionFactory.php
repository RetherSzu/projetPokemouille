<?php

namespace Database\Factories;

use App\Models\Jeu;
use App\Models\Pokemons;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VersionFactory extends Factory
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
            'data_sortie' => $this->faker->date,
        ];
    }
}
