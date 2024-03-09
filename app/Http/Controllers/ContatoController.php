<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            ["nome" => "Maria", "cel" => "123456789"],
            ["nome" => "Pedro", "cel" => "987654321"],
        ];
        return view("contato.index", compact("contatos"));
    }
}
