<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerJulia extends Controller
{
    public function index (){
        return view("receitas");
    }

    public function receitas(Request $request) {
        session(["salario" => $request->input("salario") ]);
        session(["outras" => $request->input("outras") ]);


        return view("despesas");
    }

    public function despesas(Request $request){

        $aluguel = $request->input ("aluguel");
        $mercado = $request->input ("mercado");
        $escola = $request->input ("escola");
        $imposto = $request->input ("imposto");
        $outras = $request->input ("outras");

        $salario = session("salario");
        $outrasdesp = session("outras");
        
        

        $dados = array();

        $dados["receitas"] =  ($salario + $outrasdesp);
        $dados["despesas"] =  ($aluguel + $mercado + $escola + $imposto +$outras);
        $receitas = ($dados["receitas"]);
        $despesas = ($dados["despesas"]);
        $dados["saldo"] = ( $receitas - $despesas);



        if($dados["saldo"] > 0){
                $dados["resultado"] = "Saldo Positivo :) ";
        }else if ($dados["saldo"] < 0 ){
                 $dados["resultado"] = "Saldo Negativo :( ";
        }else {
                 $dados["resultado"] = "Saldo Negativo :/ " ;
        }

        return view("resultado", compact ("dados"));

    }
}

