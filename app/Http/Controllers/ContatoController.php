<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            (object)[ "tema" =>"Interface acessivel", "titulo" =>
            "App mobile com direitos da pessoa deficiente"],
            (object)["tema"=>"Pedofilia", "titulo" => "App mobile
            com orientações gerais aos pais" ]
        ];
        return view("contato.index", compact("contatos"));
    }
}
