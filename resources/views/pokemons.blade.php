<html>
<head>
    <title>Liste des Pokemons</title>
</head>
<body>
<h2>La liste des Pokemons</h2>
@if(!empty($pokemons))
    <ul>
        @foreach($pokemons as $pokemon)
            <li>
                <p>Nom : {{ $pokemon['nom'] }}</p>
                <p>Extension : {{ $pokemon['extension'] }}</p>
                <p>Vie : {{ $pokemon['vie'] }}</p>
                <p>Type : {{ $pokemon['type'] }}</p>
                <p>Faiblesse : {{ $pokemon['faiblesse'] }}</p>
                <p>Degat : {{ $pokemon['degat'] }}</p>
            </li>
        @endforeach
    </ul>
@else
    <h3>aucun pokemons</h3>
@endif

</body>
</html>
