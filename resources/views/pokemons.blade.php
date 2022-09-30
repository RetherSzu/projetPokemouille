<html>
<head>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>Liste des Pokemons</title>
</head>
<body>
<h2>La liste des Pokemons</h2>
<div class="border-body top"></div>
<div class="border-body right"></div>
<div class="border-body bottom"></div>
<div class="border-body left"></div>

<div class="section">
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
</div>


</body>
</html>
