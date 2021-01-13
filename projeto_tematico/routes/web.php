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

Route::get('/e', function () {
    return view('estilos');
});

Route::get('/produtos', function () {
    return view('lista-produtos');
});

Route::get('/produtos/adicionar', function () {
    return view('adicionar-produto');
});

Route::get('/produtos/info-produto', function () {
    return view('info-produto');
});

Route::get('/produtos/entradas', function () {
    return view('registo-entrada');
});

Route::get('/produtos/saidas', function () {
    return view('registo-saida');
});

Route::get('/fornecedores', function () {
    return view('fornecedores');
});

Route::get('/fornecedores/adicionar', function () {
    return view('adicionar-fornecedor');
});

Route::get('/operadores', function () {
    return view('operadores');
});

Route::get('/operadores/adicionar', function () {
    return view('adicionar-operador');
});

Route::get('/clientes', function () {
    return view('clientes');
});

Route::get('/clientes/adicionar', function () {
    return view('adicionar-cliente');
});

//Movimentos

Route::get('/movimentos/entrada-quimico','App\Http\Controllers\EntradaQuimicoHistorico@show');

Route::get('/movimentos/entrada-nao-quimico','App\Http\Controllers\EntradaNaoQuimicoHistorico@show');

Route::get('/movimentos/saidas','App\Http\Controllers\SaidaHistorico@show');

Route::get('/movimentos/operadores','App\Http\Controllers\OperadoresHistorico@show');
