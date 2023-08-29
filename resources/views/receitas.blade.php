@extends('layout')

@section('content')

<div class="card border">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-center">
                <p class="texto">
                    <h4><strong>Informe suas receitas </strong> </h4>
                </p>
            </div>
        </div>
        <form action="  /despesas " method="POST">
            @csrf
            <div class="form-group py-4">
                <div class="form-group">
                    <label for="formGroupExampleInput">Salário líquido: R$</label>
                    <input type="number" class="form-control" name="salario" id="salario" min="1.00" placeholder="1.00">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Outras receitas: R$</label>
                    <input type="number" class="form-control" name="outras" id="outras" min="0.00" placeholder="0.00">
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Próxima página</button>
            <button onclick="window.location.href='/';" type="button" 
                    class="btn btn-danger btn-sm">Cancelar</button>


        </form>
    </div> 
</div> 

    
@endsection
