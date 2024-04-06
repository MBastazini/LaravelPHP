<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImcController extends Controller
{
    public function calcular(Request $req)
    {
        $peso = $req->input('peso');
        $altura = $req->input('altura');
        $altura /= 100;
        $imc = $peso / ($altura * $altura);

        $classificacao = "";
        if ($imc < 18.5) {
            $classificacao = "Abaixo do peso";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            $classificacao = "Peso normal";
        } elseif ($imc >= 24.9 && $imc < 29.9) {
            $classificacao = "Sobrepeso";
        } elseif ($imc >= 29.9 && $imc < 34.9) {
            $classificacao = "Obesidade Grau I";
        } elseif ($imc >= 34.9 && $imc < 39.9) {
            $classificacao = "Obesidade Grau II";
        } else {
            $classificacao = "Obesidade Grau III";
        }

        $resultado = [
            (object)[ "peso" => $peso, 
            "altura" => $altura,
            "imc" => $imc,
            "classificacao" => $classificacao],
        ];
        return view("calculo.index", compact("resultado"));
    }

}
