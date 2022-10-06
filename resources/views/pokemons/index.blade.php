@extends('layout.master')

@section('title', 'Page contact')

@section('content')
    <div class="btn-list" style="margin: 1rem 0">
        <div class="btn-type">
            <a href={{ "pokemons?type=Eau" }}>Eau</a>
            <a href={{ "pokemons?type=Terre" }}>Terre</a>
            <a href={{ "pokemons?type=Feu" }}>Feu</a>
            <a href={{ "pokemons?type=Vol" }}>Vol</a>
        </div>
        <div class="btn-add">
            <a href={{ "pokemons/create" }}>Ajouter un pokemon</a>
        </div>
    </div>
    @if(!empty($pokemons))
        <ul>
            @foreach($pokemons as $pokemon)
                <li class="pokemon-item">
                    <p>Nom : {{ $pokemon['nom'] }}</p>
                    <p>Extension : {{ $pokemon['extension'] }}</p>
                    <p>Vie : {{ $pokemon['vie'] }}</p>
                    <p>Type : {{ $pokemon['type'] }}</p>
                    <p>Faiblesse : {{ $pokemon['faiblesse'] }}</p>
                    <p>Degat : {{ $pokemon['degat'] }}</p>
                    <img src="storage/{{$pokemon['url_media']}}" style="width: 200px" alt="Pas d'image a affichée">
                    <div style="margin: 1rem 0">
                        <a href={{ 'pokemons/' . $pokemon['id'] . "/edit" }}>Modifier</a>
                        <a href={{ 'pokemons/' . $pokemon['id'] . "?action=delete" }}>Delete</a>
                        <a href={{ 'pokemons/' . $pokemon['id'] . "?action=show" }}>Afficher</a>
                    </div
                </li>
            @endforeach
        </ul>
    @else
        <h3>aucun pokemons</h3>
    @endif
@endsection
