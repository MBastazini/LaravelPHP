<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){
        $rows = Curso::all();
        return view('admin.cursos.index', compact('rows'));
    }

    public function adicionar(){
        return view('addmin.cursos.adicionar');
    }

    public function salvar(Request $req){

        return "Salvar";
    }

    public function editar($id){
        $linha = Curso::find($id);

        return view('admin.cursos.editar', compact('linha'));
    }

    public function excluir($id) {
        
        Curso::find($id)->delete();
        // apos selecionar o registro, é chamado o
        // método DELETE do OBJETO registro
        // é mapeado internamente como um 'delete from'
        // interno que rodara no BD
        return redirect()->route('admin.cursos');
        // abre a visão da lista de cursos
    }
}
