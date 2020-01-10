@extends('layouts.contatos')

@section('content')
<!-- Título -->
<div class="d-flex justify-content-center">
    <h1 class="title text-dark">Seus Contatos</h1>
</div>
<!-- Mensagens de Sucesso -->
@if ($message = Session::get('success'))
<div class="mt-5 alert alert-success alert-block" id="alert">
	<button type="button" class="close" data-dismiss="alert">X</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('warning'))
<div class="mt-5 alert alert-warning alert-block" id="alert">
	<button type="button" class="close" data-dismiss="alert">X</button>	
	<strong>{{ $message }}</strong>
</div>
@endif
<!-- -->

<!-- Pesquisar + Botão Criar + Contatos -->
<div class="mt-5 container">
    <div class="mt-3 row">
        <div class="col-sm-8">
            <input class="form-control-lg" 
            placeholder="Pesquise um contato..."
            type="text" name="search" id="search"/>
        </div>
        <div class="col-sm-4">
            <a class="btn btn-lg btn-block btn-secondary" href="{{ route('contatos.create') }}"> 
                Adicionar Contato 
            </a>    
        </div>  
    </div> 
</div>
<div class="container">
    <div class="table-responsive">
      <h2 class = "text-dark">Resultados : 
        <span class="bg-secondary"id="total_records"></span></h2>
      <h2 class = "d-inline text-dark">Ordernar por : </h2>
        <select class="order d-inline mdb-select md-form colorful-select dropdown-dark">
            <option value="1">Ordem Alfabética A-Z</option>
            <option value="2">Ordem Alfabética Z-A</option>
            <option value="3">Contatos mais antigos</option>
            <option value="4">Contatos mais recentes</option>
        </select>
      <table class="mt-3 table table-dark table-hover">
       <thead class="bg-secondary">
        <tr>
         <th>Contato</th>
         <th>E-mail</th>
         <th>Telefone</th>
        </tr>
       </thead>
       <tbody>
       </tbody>
      </table>
    </div><br>
</div>
<script src="{{ asset('js/searchAjax.js') }}"></script>
@endsection