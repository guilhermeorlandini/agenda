@extends('layouts.contatos')

@section('content')
    <!-- Título -->
<div class="mt-5 d-flex justify-content-center row">
    <h1 class="title text-dark">VEXPENSES</h1>
</div>
    <!-- Selecionar Membros -->
<div class="select container" style="display:none">
    @include('partials.selectVex') 
</div>
<!-- Inserir Token -->
<div class="token container">
    <div class="mt-5 row">    
        <div class="col-sm-12">
            <h2 class="text-dark text-center">
                Insira o Token de sua empresa no VExpenses para obter seus membros de equipe :
            </h2>
        </div>
    </div>   
    <div class="mt-5 d-flex justify-content-center row">
        <div class="col-sm-6">
            <input type="text" class="form-control" name="token" 
                placeholder="Token VExpenses">
        </div>       
    </div>
    <div class="mt-3 row">
        <div class="col-sm-12" align="center">
            <button id="busca" class="btn btn-success">Buscar membros</button>
        </div>            
    </div>
</div>
    <!-- Mensagem -->
@if ($message = Session::get('warning'))
    <div class="mt-5 alert alert-warning alert-block text-center" id="alert">
        <button type="button" class="close" data-dismiss="alert">X</button>	
        <strong>{{ $message }}</strong>
    </div>
@endif
@if ($message = Session::get('danger'))
    <div class="mt-5 alert alert-danger alert-block text-center" id="alert">
        <button type="button" class="close" data-dismiss="alert">X</button>	
        <strong>{{ $message }}</strong>
    </div>
@endif
    <div class="mt-5 alert alert-success alert-block text-center" id="aguarde" style="display:none">
        <button type="button" class="close" data-dismiss="alert">X</button>	
        <strong>Carregando as informações, aguarde...</strong>
    </div>
    <!-- Tabela de Membros -->
    <form action="{{ route ('importacao.postContatos') }}" method="POST">
        {{ csrf_field() }} 
        <div class="mt-3 mb-5 container" id="tableVex" style="display:none">
            <div class="table-responsive">
                <table class="mt-3 table table-dark table-hover">
                    <thead class="bg-secondary">
                        <tr>
                            <th></th>
                            <th>Membro</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                        </tr>
                    </thead>
                        <tbody id="tableVexRow">
                            <!-- Tabela Membros de Equipe VEX -->
                        </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center row">
                <button class="btn btn-success btn-block" type="submit">
                    Importar Usuarios
                </button>
            </div>
        </div>
    </form>
    <script src="{{ asset('js/vexpenses.js') }}"></script>
@endsection