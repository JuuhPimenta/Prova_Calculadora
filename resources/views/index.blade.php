@extends('layout')
@section('content')
<div class="jumbotron">
    <p class="h3 text-center py-4">ORÇAMENTO FAMILIAR</p>
</div>
<div class="row">
    <div class="col-md-6 col-sm-6 text-center">
        <a href="#" class="img-thumbnail logo">
            <img class="img-fluid" src="{{asset('storage/imagem/logo.jpg')}}" />
        </a>
    </div>
    <div class="col-md-6 col-sm-6 text-center py-4">
        <p class="texto">
            <h4>Você informará o quanto recebe e quais seus gastos recorrentes,
                e o sistema irá calcular quanto você consegue poupar mensalmente.  </h4>
        </p>
        <div class="card-footer py-4 text-center">
            
                <a href="/receitas"    class="btn btn-primary" role="button">Preencher dados</a>
            
        </div>
    </div>
</div>

@endsection
