@extends('layouts.contatos')

@section('content')
<!-- Título -->
<div class="mt-5 d-flex justify-content-center row">
    <h1 class="title text-dark">Importação de Contatos</h1>
</div>
<!-- Opções -->
<div class="container">
        <div class="mt-5 row text-center">
                <div class="col-sm-12">
                        <a class="text-dark" href="/importacao/vexpenses">
                        <img class = "img-fluid" src="img/vex.png" alt="VExpenses" href="/importacao/vexpenses"><br>
                                Importar Usuários VExpenses
                        </a>  
                </div>
        </div>
</div>
@endsection