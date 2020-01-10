@extends('layouts.contatos')

@section('content')
<!-- Título -->
<div class="mt-5 d-flex justify-content-center row">
    <h1 class="title text-dark">Cadastro de Contato</h1>
</div>
<!-- Erros -->
@if ($errors->any())
    <div class="alert alert-danger mt-3 col-sm-12" align="center">
            @foreach ($errors->all() as $error)
                <p><strong>{{ $error }}</p></strong>
            @endforeach
    </div>
@endif
@if ($message = Session::get('danger'))
    <div class="alert alert-danger mt-3 col-sm-12" align="center">
        <p><strong>{{ $message }}</p></strong>
    </div>
@endif
<!-- Form -->
<div class="text-dark container">
    <form action="{{ route ('contatos.store') }}" class="form-horizontal" method="POST">
    {{ csrf_field() }}  
    <div class="mt-5 d-flex justify-content-center row">
        <div class="col-sm-6">
            <label>Nome *</label>
            <input type="text" class="form-control" name="nome">
        </div>
    </div> 
    <div class="d-flex justify-content-center row">
        <div class="col-sm-6">
            <label>Telefone *</label>
                <input type="text" class="form-control" name="tel1">
        </div>
    </div>
    <div class="d-flex justify-content-center row">
        <div class="col-sm-6">
            <a class="mt-3 btn btn-dark btn-block" href="#" id="addInputEmail">
            Adicionar E-mail
            </a>
        </div>
    </div>
    <div class="d-flex justify-content-center row">
        <div id="inputEmail" style="display:none" class="col-sm-6">
                <label>E-mail</label>
                <input type="text" class="form-control" name="email"> 
        </div> 
    </div>          
    <div class="d-flex justify-content-center row">
        <div class="col-sm-6">
            <a class="mt-3 btn btn-dark btn-block" href="#" id="addInputTelefone">
            Adicionar Telefone Extra
            </a>
        </div>
    </div> 
    <div class="d-flex justify-content-center row">
        <div id="inputTelefone" style="display:none" class="col-sm-6">
            <label>Telefone 2</label>
            <input type="text" class="form-control" name="tel2">  
        </div>
    </div>   
@include('partials.enderecos')
<div align="center" class="mt-5 mb-5 d-flex justify-content-center row">
    <div class="col col-sm-3">
        <button style="border-radius:25px" type="submit" class="p-3 btn btn-success">
            Cadastrar Contato
        </button>
    </div>
    <div class="col col-sm-3">
        <button style="border-radius:25px" input type="reset" class="p-3 btn btn-warning">
            Limpar Campos
        </button>
    </div> 
</div>
    </form>
</div>

<!-- Inputs Jquery --> 
<script src="{{ asset('js/inputs.js') }}"></script>
<script src="{{ asset('js/cepAjax.js') }}"></script>
@endsection
