<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pokemons>
 */
class PokemonsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'extension' => $this->faker->text(10),
            'vie' => $this->faker->randomNumber(),
            'type' => $this->faker->randomElement($array = array('Feu', 'Eau', 'Terre', 'Air')),
            'faiblesse' => $this->faker->randomElement($array = array('Feu', 'Eau', 'Terre', 'Air')),
            'degat' => $this->faker->randomNumber()
        ];
    }
}
