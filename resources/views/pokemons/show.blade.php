@extends('layout.master')

@section('title', 'Présentation générale')

@section('content')

@if (!empty($pokemon))
    <div class="text-center" style="margin-top: 2rem">
        @if($action == 'delete')
            <h3>Suppression d'un pokemon</h3>
        @else
            <h3>Affichage d'un pokemon</h3>
        @endif
    </div>
    <div>
        <p><strong>Nom : </strong>{{$pokemon->nom}}</p>
    </div>
    <div>
        <p><strong>Type : </strong>{{$pokemon->type}}</p>
    </div>
    <div>
        <p><strong>Nombre de point de vie :</strong>{{ $pokemon->vie}}</p>
    </div>
    <div>
        <p><strong>Faiblesses :</strong>{{ $pokemon->faiblesse}}</p>
    </div>
    <div>
        <p><strong>Degat :</strong>{{ $pokemon->degat}}</p>
    </div>
    <div>
        <img src="storage/{{$pokemon['url_media']}}" style="width: 200px" alt="Pas d'image a affichée">
    </div>
    @if($action == 'delete')
        <form action="{{ route('pokemons.destroy',$pokemon->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="text-center">
                <button class="btn delete" type="submit" name="delete" value="valide">Valide</button>
                <button type="submit" name="delete" value="annule">Annule</button>
            </div>
        </form>
    @else
        <div style="margin: 1rem 0">
            <a href="{{ route('pokemons.index') }}">Retour à la liste</a>
        </div>
    @endif
@else
    <p>Aucun pokemon</p>
@endif
@endsection
