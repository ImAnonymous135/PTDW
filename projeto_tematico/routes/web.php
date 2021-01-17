<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/e', function () {
    return view('estilos');
});

Route::get('/produtos','App\Http\Controllers\ProdutosController@show');

Route::get('/movimentos/entrada-quimico', function () {
    return view('entrada-quimico');
});

Route::get('/movimentos/entrada-nao-quimico', function () {
    return view('entrada-nao-quimico');
});

Route::get('/produtos/adicionar', function () {
    return view('adicionar-produto');
});

Route::get('/produtos/{id}','App\Http\Controllers\ProdutoController@show');

//Registo de entradas
Route::get('/entradas', function () {
    return view('registo-entrada');
});
Route::get('/entradas/{id}','App\Http\Controllers\EntradaController@show');

Route::get('/produtos/saidas', function () {
    return view('registo-saida');
});

//operadores
Route::get('/operadores','App\Http\Controllers\ListaOperadores@show');
Route::get('/operadores/adicionar','App\Http\Controllers\ListaOperadores@create');
Route::post('/operadores/adicionar','App\Http\Controllers\ListaOperadores@store');


//clientes
Route::get('/clientes','App\Http\Controllers\ListaCliente@show');
Route::get('/clientes/adicionar','App\Http\Controllers\ListaCliente@create');
Route::post('/clientes/adicionar','App\Http\Controllers\ListaCliente@store');

Route::get('/clientes/adicionar', function () {
    return view('adicionar-cliente');
});

//fornecedores
Route::get('/fornecedores','App\Http\Controllers\Fornecedores@show');
Route::get('/fornecedores/adicionar','App\Http\Controllers\Fornecedores@create');
Route::post('/fornecedores/adicionar','App\Http\Controllers\Fornecedores@store');
Route::get('/fornecedores/{id}','App\Http\Controllers\Fornecedores@index');
Route::put('/fornecedores/{id}','App\Http\Controllers\Fornecedores@update');


//movimentos
Route::get('/movimentos/entrada-quimico','App\Http\Controllers\EntradaQuimicoHistorico@show');
Route::get('/movimentos/entrada-nao-quimico','App\Http\Controllers\EntradaNaoQuimicoHistorico@show');
Route::get('/movimentos/saidas','App\Http\Controllers\historicoSaidas@show');
Route::get('/movimentos/operadores','App\Http\Controllers\OperadoresHistorico@show');