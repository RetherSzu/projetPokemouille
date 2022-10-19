<?php

namespace Database\Factories;

use App\Models\Jeu;
use App\Models\User;
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
        $users_id = User::all()->pluck('id');
        $jeux_id = Jeu::all()->pluck('id');
        return [
            'nom' => $this->faker->name(),
            'user_id' => $this->faker->randomElement($users_id),
            'jeu_id' => $this->faker->randomElement($jeux_id),
            'extension' => $this->faker->text(10),
            'vie' => $this->faker->randomNumber(),
            'type' => $this->faker->randomElement($array = array('Feu', 'Eau', 'Terre', 'Vol')),
            'faiblesse' => $this->faker->randomElement($array = array('Feu', 'Eau', 'Terre', 'Vol')),
            'degat' => $this->faker->randomNumber(),
            'url_media' => $this->faker->imageUrl()
        ];
    }
}
