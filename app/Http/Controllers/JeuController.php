<?php

namespace App\Http\Controllers;

use App\Models\Jeu;
use App\Models\Pokemons;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class JeuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('jeux.index', ["jeux" => Jeu::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Jeu $jeu
     * @return Application|Factory|View
     */
    public function show(Jeu $jeu)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Jeu $jeu
     * @return Response
     */
    public function edit(Jeu $jeu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Jeu $jeu
     * @return Response
     */
    public function update(Request $request, Jeu $jeu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Jeu $jeu
     * @return Response
     */
    public function destroy(Jeu $jeu)
    {
        //
    }
}
