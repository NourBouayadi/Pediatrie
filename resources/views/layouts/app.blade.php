<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PediatrieDZ</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/fonts/web-icons/web-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome/font-awesome.css')}}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/simplemde.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    PédiatrieDZ
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto col-md-10">
                        <li class="nav-item"><a class="nav-link" href="/">Accueil</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link"class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Catégories <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/forum/categorie/1">Grossesse</a>
                                <a class="dropdown-item" href="/forum/categorie/2">Nouveau-Né</a>
                                <a class="dropdown-item" href="/forum/categorie/3">Vêtements</a>
                                <a class="dropdown-item" href="/forum/categorie/4">Jouets</a>
                                <a class="dropdown-item" href="/forum/categorie/5">Sommeil</a>
                                <a class="dropdown-item" href="/forum/categorie/6">Santé</a>
                                <a class="dropdown-item" href="/forum/categorie/7">Bien-Etre</a>
                                <a class="dropdown-item" href="/forum/categorie/8">Psychologie</a>
                                <a class="dropdown-item" href="/forum/categorie/9">Premières-Marches</a>

                            </div>
                        </li>
                        <li class="nav-item"><a href="/annuaire" class="nav-link">Annuaire</a></li>
                        <li class="nav-item"><a href="/forum" class="nav-link">FAQ</a></li>
                        <li class="nav-item"><a href="/forum" class="nav-link">Forum</a></li>
                        <li class="nav-item"><a href="/ficheMaladie" class="nav-link">Prédire</a></li>


                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto col-md-2">

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <!--<span class="caret"></span>-->
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <br>
 <!--   <footer class="footer">
        <div class="container">
            Copyright &copy; PediatrieDZ2019
            <span class="pull-right"><a href="/contact">Contact Us</a></span>
        </div>
    </footer>-->
</body>
<script src="{{asset('assets/js/scripts.js')}}"></script>
<script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap-select.js')}}"></script>
<script src="{{asset('assets/js/defaults-fr_FR.min.js')}}"></script>
<script src="{{asset('assets/js/select2.min.js')}}"></script>



</html>
