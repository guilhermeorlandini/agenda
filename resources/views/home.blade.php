@extends('layouts.inicio')

@section('content')
<div class="mt-5 pt-5 container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="p-3 panel panel-default">
                <div class="panel-heading">Bem vindo {{ Auth::user()->name }}!</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você está logado e pronto para usar sua agenda.
                </div>
            </div>
        </div>
    </div>
</div>
@guest
@else
<div class="mt-3 container">
    <div class="col-md-8 col-md-offset-2">
                <!-- Deslogar Usuário -->
                    <a  href="{{ route('logout') }}"
                        class="mt-2 p-3 btn btn-secondary btn-block"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            Sair da minha conta
                    </a>
                    <a class="mt-2 p-3 btn btn-secondary btn-block" href="{{ url('/changePassword') }}" role="button">
                        Mudar senha   
                    </a>
                    <a class="mt-2 p-3 btn btn-secondary btn-block" href="{{ route('contatos.index') }}" role="button">
                        Ir para Agenda
                    </a>
                <!--      -------        -->
    </div>    
</div>
@endguest
@endsection
