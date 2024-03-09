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
    return view('welcome');
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