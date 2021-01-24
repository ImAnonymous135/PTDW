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

//fornecedores
Route::get('/fornecedores','App\Http\Controllers\Fornecedores@getFornecedores')->name("APIFornecedores");
Route::get('/fornecedor/{id}','App\Http\Controllers\Fornecedores@getFornecedor')->name("APIFornecedor");
