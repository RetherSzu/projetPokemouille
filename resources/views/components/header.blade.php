<header class="main-header">
    <h1>Gestion de pokemon</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home.index') }}">Home</a></li>
            <li><a href="{{ route('home.apropos') }}">A Propos</a></li>
            <li><a href="{{ route('home.contact') }}">Contact</a></li>
            @guest
            <li>
                <li><a href="{{ route('register') }}">Enregistrement</a></li>
                <a href="{{route('login')}}">😎 Connexion</a>
            </li>
            @endguest
            @auth
                <li><a href="{{ route('pokemons.index') }}">Liste des pokemons</a></li>
                <li><p>{{Auth::user()->name}}</p></li>
                <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                    <form method="POST" style="display: none;" id="logout-form" action="{{ route('logout') }}">
                        @csrf
                    </form>
                </a>
            @endauth
        </ul>
    </nav>
</header>
