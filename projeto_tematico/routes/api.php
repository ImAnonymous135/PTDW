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
Route::get('/saidas','App\Http\Controllers\APIController@registoSaida')->name("APISaidas");
Route::get('/entradaNaoQuimicos','App\Http\Controllers\EntradaNaoQuimicoHistorico@getEntNaoQuimico')->name("APIEntradaNaoQuimicos");
Route::get('/entradaQuimicos','App\Http\Controllers\EntradaQuimicoHistorico@getEntQuimico')->name("APIEntradaQuimicos");
Route::get('/operadores','App\Http\Controllers\OperadoresHistorico@getOperadores')->name("APIOperadores");

//operadores
Route::get('/operadores','App\Http\Controllers\APIController@listaOperadores')->name("APIlistaOperadores");
Route::get('/operadores/{id}','App\Http\Controllers\APIController@getOperador')->name("APIgetOperador");

//clientes
Route::get('/clientes','App\Http\Controllers\APIController@listaClientes')->name("APIlistaClientes");
Route::get('/clientes/{id}','App\Http\Controllers\APIController@getCliente')->name("APIgetCliente");

//fornecedores
Route::get('/fornecedores','App\Http\Controllers\Fornecedores@getFornecedores')->name("APIFornecedores");
Route::get('/fornecedor/{id}','App\Http\Controllers\Fornecedores@getFornecedor')->name("APIFornecedor");
