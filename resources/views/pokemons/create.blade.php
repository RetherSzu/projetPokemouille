@extends('layout.master')

@section('title', 'Présentation générale')

@section('content')

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('pokemons.store') }}" method="POST">
    {!! csrf_field() !!}
    <div class="text-center" style="margin-top: 2rem">
        <h2>Création d'un pokemon</h2>
    </div>
    <div>
        <label for="name"><strong>Nom du pokemon : </strong></label>
        <input type="text" name="name" id="name" value="{{ old('nom') }}" placeholder="Non du pokemon">
    </div>
    <div>
        <label for="extension"><strong>Extension : </strong></label>
        <input type="text" id="extension" name="extension"
               value="{{ old('extension') }}" placeholder="De quelle extension viens ton pokemouille">
    </div>
    <div>
        <label for="vie"><strong>Vie : </strong></label>
        <input type="number" name="vie" id="vie" placeholder="Nombre de points de vie">
    </div>
    <div>
        <label for="type"><strong>Type du pokemon : </strong></label>
        <select name="type" id="type">
            <option value="">-- Please choose an option --</option>
            <option value="terre">Terre</option>
            <option value="feu">Feu</option>
            <option value="eau">Eau</option>
            <option value="air">Vol</option>
        </select>
    </div>
    <div>
        <label for="faiblesse"><strong>Faiblesses du pokemon : </strong></label>
        <input type="text" name="faiblesse" id="faiblesse" placeholder="Faiblesses du pokemon">
    </div>
    <div>
        <label for="degat"><strong>Degat : </strong></label>
        <input type="number" name="degat" id="degat">
    </div>

    <div>
        <input type="file" name="document"> Saisir un nom de fichier
    </div>
    <div>
        <button class="btn btn-success" type="submit">Valide</button>
    </div>
</form>

@endsection
