@extends('layouts.contatos')

@section('content')
<div class="mt-5 pt-5 container">
    <div class="d-flex justify-content-center row">
        <div class="col-sm-8">
            <div class="border border-dark p-3 panel panel-default">
                <div class="panel-heading"><strong>{{$contato->nome}}</strong></div>
                    <div class="panel-body">
                        @include('partials.infos')
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <div class="mt-3 d-flex justify-content-center row">
        <div class="col col-sm-2">
            <a style="border-radius:25px" class="p-3 btn btn-warning" href="{{ route ('contatos.edit',$contato->id) }}">
                Editar ou Remover Contato
            </a>                       
        </div>
        <div class="col col-sm-2">
            <a style="border-radius:25px" class="p-3 btn btn-danger" href="{{ route('contatos.index') }}">
                Voltar para Contatos
            </a>
        </div>
    </div>
</div>
@endsection