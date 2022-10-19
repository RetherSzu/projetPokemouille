@extends('layout.master')

@section('title', 'Liste des jeux pokemons')

@section('content')
    @if(!empty($jeux))
        <ul>
            @foreach($jeux as $jeu)
                <li class="jeu-item">
                    <div class="item-content">
                        <div class="left">
                            <p><strong>Nom :</strong> {{ $jeu['nom'] }}</p>
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
        <h3>Aucun jeux</h3>
    @endif
@endsection
