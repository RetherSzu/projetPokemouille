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

    <form action="{{ route('pokemons.update', $pokemons -> id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="text-center" style="margin-top: 2rem">
            <h2>Recherche par date de pokemons</h2>
        </div>
        <div>
            <label for="date"><strong>Degat : </strong></label>
            <input type="number" name="date" id="date">
        </div>
        <div>
            <button class="btn btn-success" type="submit">Valide</button>
        </div>
    </form>
    {{ Form::input('dateTime-local', 'game_date_time', ['id' => 'game-date-time-text', 'class' => 'form-control']) }}

@endsection