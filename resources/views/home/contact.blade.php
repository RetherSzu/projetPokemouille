@extends('layout.master')

@section('title', 'Page contact')

@section('content')
    <h2>La page de contact</h2>
    <form>
        <label for="mail">Balance ton email</label>
        <input placeholder="email" id="mail" type="email">
        <label for="nom">Ton massage</label>
        <input placeholder="ne me touche pas" id="nom" type="text">

    </form>
@endsection
