<?php

namespace App\Providers;

use App\Models\Pokemons;
use App\Policies\PokemonPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Pokemons::class => PokemonPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Setup pokemon delete
        Gate::define('delete-pokemon', function ($user, $pokemon) {
            return $user->id === $pokemon->user_id;
        });
    }
}
