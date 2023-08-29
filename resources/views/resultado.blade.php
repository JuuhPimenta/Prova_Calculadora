@extends('layout')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal">Orçamento Mensal</h1>
            <p class="text-center">Resultado obtido</p>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="result mb-4">

            <h2 class="result-title text-center">{{$dados["resultado"]}}</h2>
            <hr>
            <span>Total de receitas: R$ {{$dados["receitas"]}}</span><br><hr>
            <span>Total de despesas: R$ {{$dados["despesas"]}}</span><br><hr>
            <span>Saldo do mês: R$ {{$dados["saldo"]}}</span><br><hr>
        </div>
    </div>
</div>        

<button onclick="window.location.href='/';" type="button" class="btn btn-lg btn-primary btn-block">Voltar ao início</button>
@endsection