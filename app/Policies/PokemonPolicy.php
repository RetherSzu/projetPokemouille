<?php

namespace App\Policies;

use App\Models\Pokemons;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PokemonPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    function update(User $user, Pokemons $pokemon) {
        return $user->id == $pokemon->user_id || $user -> isAdmin;
    }

    function delete(User $user, Pokemons $pokemon) {
        return $user->id == $pokemon->user_id || $user -> isAdmin;
    }

    function create(User $user) {
        return true;
    }
}
