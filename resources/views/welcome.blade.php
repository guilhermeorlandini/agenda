<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agenda</title>

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}"></link>

    </head>
    <body  class="bg-info"> 
            <div class="content">
                <div class="title m-b-md text-light">
                    Agenda de Contatos
                </div>

                <div class="links">
            @if (Route::has('login'))
                @auth
                    <h2>Usuário Logado : {{ Auth::user()->name }}</h2><br>
                    <a href="{{ url('/home') }}">Painel</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Registrar</a>
                @endauth
                @endif
                </div>
            </div>
        </div>
    </body>
</html>
