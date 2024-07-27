<?php

namespace App\Http\Controllers\Stie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController2 extends Controller
{
    public function index() { // a visão que pede usuário e senha
        return view('login.index');
    }

    public function entrar(Request $req) {
        $dados = $req->all();
        if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']])) {
            // redireciona para a home, mas agora, logado !
            return redirect()->route('site.home');
        } else { // pede usuario e senha novamente
            return redirect()->route('login.index');
        }
    }

    public function sair() {
        Auth::logout();
        return redirect()->route('site.home');
    }
}