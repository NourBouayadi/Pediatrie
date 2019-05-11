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



    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/simplemde.min.css')}}">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    PédiatrieDZ
                </a>
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

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
             <ul class="nav navbar-nav navbar-right">

                                <li><a class="menu active" href="#home" >Acceuil</a></li>
                                <li  class="dropdown ">


                                    <a href="#service" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        Catégories
                                        <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li >
                                            <a href="#Gro">
                                                <strong>Grossesse</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#NV"> <strong>Nouveau-Né</strong></a>
                                        </li>
                                        <li>
                                            <a href="#Vet"><strong>Vêtements</strong></a>
                                        </li>
                                        <li>
                                            <a href="#J"><strong> Jouets</strong></a>
                                        </li>
                                        <li>
                                            <a href="#So"><strong>Sommeil</strong></a>
                                        </li>
                                        <li>
                                            <a href="#Sa"><strong>Santé</strong></a>
                                        </li>
                                        <li>
                                            <a href="#Be"><strong>Bien-être</strong></a>
                                        </li>
                                        <li>
                                            <a href="#Ps"><strong>Psychologie</strong></a>
                                        </li>
                                        <li>
                                            <a href="#Pm"><strong>Premières Marches</strong></a>
                                        </li>

                                    </ul>
                                </li>
                                <li><a class="menu" href="#Annuaire">Annuaire </a></li>
                                <li><a class="menu" href="#FAQ">FAQ</a></li>
                                <li><a class="menu" href="#forum"> Forum</a></li>
                                <li><a class="menu" href="#prédir">Prédir</a></li>
                            </ul>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <br>
    <footer class="footer">
        <div class="container">
            Copyright &copy; PediatrieDZ2019
            <span class="pull-right"><a href="/contact">Contact Us</a></span>
        </div>
    </footer>
</body>
<script src="{{asset('assets/js/scripts.js')}}"></script>

</html>
