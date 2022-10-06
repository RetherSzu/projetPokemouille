<!-- fichier master.blade.php -->
<html lang="fr">
<head>
    <title>App Name - @yield('title')</title>
    @vite(['resources/css/app.css'])
</head>
<body>
<div class="border-body top"></div>
<div class="border-body right"></div>
<div class="border-body bottom"></div>
<div class="border-body left"></div>
<x-header></x-header>
@section('sidebar')
@show

    <div class="container">
        @yield('content')
    </div>

<x-footer></x-footer>
</body>
</html>
