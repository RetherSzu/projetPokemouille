<?php

namespace App\Http\Controllers;

use App\Models\Pokemons;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $type = $request->get("type", '');
        if (empty($type)) {
            $pokemons = Pokemons::all();
        } else {
            $pokemons = Pokemons::where('type', '=', $type) -> get();
        }
        return view('pokemons.index', ['pokemons' => $pokemons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('pokemons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'extension' => 'required',
                'vie' => 'required',
                'type' => 'required',
                'faiblesse' => 'required',
                'degat' => 'required',
            ]
        );

        $pokemon = new Pokemons;

        $pokemon->nom = $request->name;
        $pokemon->extension = $request->extension;
        $pokemon->vie = $request->vie;
        $pokemon->type = $request->type;
        $pokemon->faiblesse = $request->faiblesse;
        $pokemon->degat = $request->degat;

        $pokemon->save();

        return redirect()->route('pokemons.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(Request $request, $id) {
        $action = $request->query('action', 'show');
        $pokemon = Pokemons::find($id);

        return view('pokemons.show', ['pokemon' => $pokemon, 'action' => $action]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function edit($id): View|Factory|Application
    {
        $pokemons = Pokemons::find($id);
        return view('pokemons.edit', ['pokemons' => $pokemons]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'extension' => 'required',
                'vie' => 'required',
                'type' => 'required',
                'faiblesse' => 'required',
                'degat' => 'required',
            ]
        );

        $pokemon = Pokemons::find($id);

        $pokemon->nom = $request->name;
        $pokemon->extension = $request->extension;
        $pokemon->vie = $request->vie;
        $pokemon->type = $request->type;
        $pokemon->faiblesse = $request->faiblesse;
        $pokemon->degat = $request->degat;

        $pokemon -> save();

        return redirect()->route('pokemons.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy(Request $request, $id): RedirectResponse
    {
        if ($request->delete == 'valide') {
            $pokemon = Pokemons::find($id);
            $pokemon->delete();
        }
        return redirect()->route('pokemons.index');
    }

    public function upload(Request $request, $id) {
        $pokemon = Pokemons::findOrFail($id);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
        } else {
            $msg = "Aucun fichier téléchargé";
            return redirect()->route('pokemons.show', [$pokemon->id])
                ->with('type', 'primary')
                ->with('msg', 'Smartphone non modifié ('. $msg . ')');
        }
        $nom = 'image';
        $now = time();
        $nom = sprintf("%s_%d.%s", $nom, $now, $file->extension());

        $file->storeAs('images', $nom);
        if (isset($pokemon->url_media)) {
            Log::info("Image supprimée : ". $pokemon->url_media);
            Storage::delete($pokemon->url_media);
        }
        $pokemon->url_media = 'images/'.$nom;
        $pokemon->save();
        //$file->store('docs');
        return redirect()->route('pokemons.update', [$pokemon->id])
            ->with('type', 'primary')
            ->with('msg', 'Pokemon modifiée avec succès');
    }
}
