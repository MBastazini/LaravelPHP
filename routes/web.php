<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/contato', function () {
    return "O mais gay da cidade: GCS!";
});

Route::get('/contato/{nome}', function (string $nome = 'NAP') {
    return ('contato do ' . $nome);
});

Route::post('/contato', ['uses' => 'App\Http\Controllers\ContatoController@index']);

Route::get('/paginas/{id}', function (int $id = 1) {    
    if($id == 1){
        return view('paginas.pagina1');
    } else if($id == 2){
        return view('paginas.pagina2');
    } else if($id == 3){
        return view('paginas.pagina3');
    } else {
        return view('paginas.pagina404');
    }

});

Route::post('/calcular', ['uses' => 'App\Http\Controllers\ImcController@calcular']);

Route::group(['middleware' => 'auth'], function() {
Route::get('/admin/cursos',
['as' =>'admin.cursos',
'uses'=>'App\Http\Controllers\Admin\CursoController@index']);

Route::get('/admin/cursos/adicionar',
['as' =>'admin.cursos.adicionar',
'uses'=>'App\Http\Controllers\Admin\CursoController@adicionar']);

Route::post('/admin/cursos/salvar',
['as' =>'admin.cursos.salvar',
'uses'=>'App\Http\Controllers\Admin\CursoController@salvar']);

Route::get('/admin/cursos/editar/{id}',
['as' =>'admin.cursos.editar',
'uses'=>'App\Http\Controllers\Admin\CursoController@editar']);

Route::put('/admin/cursos/atualizar/{id}',
['as' =>'admin.cursos.atualizar',
'uses'=>'App\Http\Controllers\Admin\CursoController@atualizar']);

Route::get('/admin/cursos/excluir/{id}',
['as' =>'admin.cursos.excluir',
'uses'=>'App\Http\Controllers\Admin\CursoController@excluir']);
});

//Login
Route::get('/login', ['as' => 'site.login',
'uses'=>'App\Http\Controllers\Site\JorgeAmado@index']);

Route::post('/login/entrar',['as'=>'site.login.entrar',
'uses'=>'App\Http\Controllers\Site\JorgeAmado@entrar']);

Route::get('/login/sair',['as'=>'site.login.sair',
'uses'=>'App\Http\Controllers\Site\JorgeAmado@sair']);