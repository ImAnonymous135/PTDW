<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//movimentos
Route::get('/saidas','App\Http\Controllers\RegistoSaidaController@registoSaida')->name("APISaidas");
Route::get('/entradaNaoQuimicos','App\Http\Controllers\EntradaNaoQuimicoHistorico@getEntNaoQuimico')->name("APIEntradaNaoQuimicos");
Route::get('/entradaQuimicos','App\Http\Controllers\EntradaQuimicoHistorico@getEntQuimico')->name("APIEntradaQuimicos");
Route::get('/operadoresHistorico','App\Http\Controllers\OperadoresHistorico@getOperadores')->name("APIOperadoresHistorico");

//operadores
Route::get('/operadores','App\Http\Controllers\ListaOperadores@listaOperadores')->name("APIlistaOperadores");
Route::get('/operadores/{id}','App\Http\Controllers\ListaOperadores@getOperador')->name("APIgetOperador");

//clientes
Route::get('/clientes','App\Http\Controllers\ListaCliente@listaClientes')->name("APIlistaClientes");
Route::get('/clientes/{id}','App\Http\Controllers\ListaCliente@getCliente')->name("APIgetCliente");

//fornecedores
Route::get('/fornecedores','App\Http\Controllers\Fornecedores@getFornecedores')->name("APIFornecedores");
Route::get('/fornecedor/{id}','App\Http\Controllers\Fornecedores@getFornecedor')->name("APIFornecedor");

//embalagens de um produto
Route::get('/embalagens/{name}','App\Http\Controllers\RegistoSaidaController@getEmbalagens');
