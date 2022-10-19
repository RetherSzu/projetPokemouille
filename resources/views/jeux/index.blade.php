@extends('layout.master')

@section('title', 'Liste des jeux pokemons')

@section('content')
    @if(!empty($jeux))
        <ul class="list-jeux">
            @foreach($jeux as $jeu)
                <li class="jeu-item">
                    <div class="item-content">
                        <div class="left">
                            <p><strong>Nom du jeu :</strong> {{ $jeu['nom'] }}</p>
                            <p><strong>Editeur :</strong> {{ $jeu['editeur'] }}</p>
                            <p><strong>Genre du jeu :</strong> {{ $jeu['genre'] }}</p>
                        </div>
                    </div>
                    <div style="margin: 1rem 0; bottom: 0">
                        <a href={{ '/pokemons?user=' . $jeu['id']}}>Liste des pokemons</a>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <h3>Aucun jeux</h3>
    @endif
@endsection
