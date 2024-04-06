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