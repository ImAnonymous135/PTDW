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

Route::get('/produtos', function () {
    return view('lista-produtos');
});

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

Route::get('/produtos/entradas', function () {
    return view('registo-entrada');
});


Route::get('/produtos/saidas', function () {
    return view('registo-saida');
});


Route::get('/operadores', function () {
    return view('operadores');
});

Route::get('/operadores/adicionar', function () {
    return view('adicionar-operador');
});

Route::get('/clientes','App\Http\Controllers\ListaCliente@show');


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