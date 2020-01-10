<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('APP_NAME', 'Agenda') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <style>
    html,body {
        font-family: 'Oswald', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
        font-size:1.1rem
    }

    </style>
    
</head>
<body class="bg-info">
    <div>
        <nav class="navbar navbar-expand-sm fixed-top bg-light">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand text-dark" href="{{ url('/') }}">
                        Página Inicial
                    </a>
                    <a class="navbar-brand text-dark" href="{{ url('/contatos/create') }}">
                        Adicionar Contato
                    </a>
                    <a class="navbar-brand text-dark" href="{{ url('/contatos/') }}">
                        Mostrar Contatos
                    </a>
                    <a class="navbar-brand text-dark" href="{{ url('/importacao') }}">
                        Importar Contatos
                    </a>
                </div>
                    <!-- Left Side Of Navbar -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                    &nbsp;
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Registrar</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Deslogar
                                        </a>
                                        <a href="{{ url('/home') }}">
                                            Painel
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    <!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
<!-- Rodapé -->
<footer>
    <div class="fixed-bottom bg-secondary">-</div>
</footer>
</html>
