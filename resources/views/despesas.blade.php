@extends('layout')

@section('content')

<div class="card border">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-center">
                <p class="texto">
                    <h4><strong>Informe suas despesas </strong> </h4>
                </p>
            </div>
        </div>
        <form action="  /resultado  " method="POST">
            @csrf
            <div class="form-group py-4">
                <div class="form-group">
                    <label for="formGroupExampleInput">Aluguel: R$</label>
                    <input type="number" class="form-control" name="aluguel" min="0.00">
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Supermercado: R$</label>
                    <input type="number" class="form-control" name="mercado" min="0.00">
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Escola: R$</label>
                    <input type="number" class="form-control" name="escola" min="0.00">
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Impostos: R$</label>
                    <input type="number" class="form-control" name="imposto" min="0.00">
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Outras despesas: R$</label>
                    <input type="number" class="form-control" name="outras" min="0.00">
                  </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Calcular</button>
            <button onclick="window.location.href='/';" type="button" 
                    class="btn btn-danger btn-sm">Cancelar</button>

                  
        </form>
    </div> 
</div> 

    
@endsection
