@extends('layouts.contatos')

@section('content')
<!-- Título -->
<div class="d-flex justify-content-center row">
    <h1 class="title text-dark">{{$contato->nome}}</h1>
</div>
<!-- Mensagem de Erro -->
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
<!-- Editar -->
<div class="text-dark container">
    <form action="{{ route ('contatos.update' , $contato->id) }}" 
    class="form-horizontal" method="POST">
        {{ csrf_field() }}  
        {{ method_field('PUT') }}
        <div class="mt-5 d-flex justify-content-center row">
            <div class="col-sm-6">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome" 
                value="{{$contato->nome}}">
            </div>
        </div> 
        <div class="d-flex justify-content-center row">
            <div class="col-sm-6">
                <label>Telefone</label>
                    <input type="text" class="form-control" name="tel1" value="{{$contato->tel1}}">
            </div>
        </div>
@if ($contato->email)
    <div class="d-flex justify-content-center row">
        <div class="col-sm-6">
            <label>E-mail</label>
                <input type="text" class="form-control" name="email" value="{{$contato->email}}">
        </div>
    </div>
@else
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
@endif  
@if ($contato->tel2)  
    <div class="d-flex justify-content-center row">
        <div class="col-sm-6">
            <label>Telefone 2</label>
                <input type="text" class="form-control" name="tel1" value="{{$contato->tel2}}">
        </div>
    </div> 
@else  
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
@endif
@if ($contato->endereco1)
    <div class="mt-3 d-flex justify-content-center row">
        <h1 class="mt-3 p-3 text-dark">Endereços</h1>
    </div>
    <div class="d-flex justify-content-center row">
        <div class="col-sm-3">
            <label>CEP</label>
            <input type="text" class="form-control" name="cep1" value="{{$contato->cep1}}">     
            <a class="cep btn btn-secondary">Buscar Endereço</a>  
        </div>
        <div class="col-sm-3">
            <label>Endereço</label>
            <input type="text" class="form-control" name="endereco1" value="{{$contato->endereco1}}">
    </div>
        <div class="col-sm-3">
            <label>Cidade</label>
            <input type="text" class="form-control" name="cidade1" value="{{$contato->cidade1}}">     
        </div>
    </div>
    <div class="mt-3 d-flex justify-content-center row">
        <div class="col-sm-3">
            <label>CEP</label>
            <input type="text" class="form-control" name="cep2" value="{{$contato->cep2}}">
            <a class="cep2 btn btn-secondary">Buscar Endereço</a>      
        </div>
        <div class="col-sm-3">
            <label>Endereço 2</label>
            <input type="text" class="form-control" name="endereco2" value="{{$contato->endereco2}}"> 
        </div>
        <div class="col-sm-3">
            <label>Cidade</label>
            <input type="text" class="form-control" name="cidade2" 
            value="{{$contato->cidade2}}">      
        </div> 
    </div> 
@else
@include('partials.enderecos')
@endif
    <div align="center" class="mt-3 mb-5 d-flex justify-content-center row">
        <div class="col col-sm-3">
            <button style="border-radius:25px" type="submit" class="p-3 btn btn-warning">
                Editar Contato
            </button>             
        </div>
        </form>
        <div class="col col-sm-3">           
            <form class="deletarContato" action="{{route ('contatos.destroy' , $contato->id) }}" method="POST">
            {{ csrf_field() }}
                <input name="_method" type="hidden" value="DELETE">
                <button style="border-radius:25px" class="p-3 btn btn-danger" type="submit">
                    Excluir Contato
                </button>
    </form>
        </div>
    </div>     
</div>
<script>
    $(".deletarContato").submit(function(){
    return confirm("Tem certeza que deseja deletar o contato?");
    });
</script>
<script src="{{ asset('js/inputs.js') }}"></script>
<script src="{{ asset('js/cepAjax.js') }}"></script>
@endsection