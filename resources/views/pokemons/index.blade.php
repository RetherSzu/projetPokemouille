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
                    <div class="item-content">
                        <div class="left">
                            <p><strong>Nom :</strong> {{ $pokemon['nom'] }}</p>
                            <p><strong>Extension :</strong> {{ $pokemon['extension'] }}</p>
                            <p><strong>Vie :</strong> {{ $pokemon['vie'] }}</p>
                            <p><strong>Type :</strong> {{ $pokemon['type'] }}</p>
                            <p><strong>Faiblesse :</strong> {{ $pokemon['faiblesse'] }}</p>
                            <p><strong>Degat :</strong> {{ $pokemon['degat'] }}</p>
                        </div>
                        <div class="right">
                            <img src="storage/{{$pokemon['url_media']}}" style="width: 200px" alt="Pas d'image a affichée">
                        </div>
                    </div>
                    <div style="margin: 1rem 0">
                        @can('update', $pokemon)
                        <a href={{ 'pokemons/' . $pokemon['id'] . "/edit" }}>Modifier</a>
                        @endcan
                        @can('delete', $pokemon)
                        <a href={{ 'pokemons/' . $pokemon['id'] . "?action=delete" }}>Delete</a>
                        @endcan
                        <a href={{ 'pokemons/' . $pokemon['id'] . "?action=show" }}>Afficher</a>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <h3>aucun pokemons</h3>
    @endif
@endsection
