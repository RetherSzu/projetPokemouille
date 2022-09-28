<?php

namespace App\Http\Controllers;

use App\Models\Pokemons;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index() {
        $pokemons = Pokemons::all();
        return view('pokemons', ['pokemons' => $pokemons]);
    }

}
