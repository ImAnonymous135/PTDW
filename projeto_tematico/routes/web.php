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

//Home
Route::get('/','App\Http\Controllers\HomeController@show');

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/e', function () {
    return view('estilos');
});

Route::get('/movimentos/entrada-quimico', function () {
    return view('entrada-quimico');
});

Route::get('/movimentos/entrada-nao-quimico', function () {
    return view('entrada-nao-quimico');
});

//Adicionar produtos
Route::get('/produtos/adicionar', function () {
    return view('adicionar-produto');
});

Route::post('/produtos/adicionar', 'App\Http\Controllers\NovoProduto@store');
//FIM

//Produtos
Route::get('/produtos','App\Http\Controllers\ProdutosController@show');
//Info Produto
Route::get('/produtos/{id}','App\Http\Controllers\ProdutoController@show');

//Registo de entradas
Route::get('/entradas','App\Http\Controllers\RegistarEntradaController@load');

Route::get('/entradas/{id}','App\Http\Controllers\RegistarEntradaController@load');

Route::get('/produtos/saidas', function () {
    return view('registo-saida');
});

Route::post('/entradas/adicionar','App\Http\Controllers\RegistarEntradaController@store');

//Registo Saida
Route::get('/saidas/{produto}/{embalagem}','App\Http\Controllers\RegistoSaidaController@load');
Route::post('/saidas/adicionar', 'App\Http\Controllers\RegistoSaidaController@store');

//operadores
Route::put('/operadores/{id}','App\Http\Controllers\ListaOperadores@update');
Route::delete('/operadores/{id}','App\Http\Controllers\ListaOperadores@destroy');
Route::get('/operadores','App\Http\Controllers\ListaOperadores@show');
Route::get('/operadores/adicionar','App\Http\Controllers\ListaOperadores@create');
Route::post('/operadores/adicionar','App\Http\Controllers\ListaOperadores@store');


//clientes
Route::put('/clientes/{id}','App\Http\Controllers\ListaCliente@update');
Route::delete('/clientes/{id}','App\Http\Controllers\ListaCliente@destroy');
Route::get('/clientes','App\Http\Controllers\ListaCliente@show');
Route::get('/clientes/adicionar','App\Http\Controllers\ListaCliente@create');
Route::post('/clientes/adicionar','App\Http\Controllers\ListaCliente@store');

Route::get('/clientes/adicionar', function () {
    return view('adicionar-cliente');
});

//fornecedores
Route::put('/fornecedores/{id}','App\Http\Controllers\Fornecedores@update');
Route::delete('/fornecedores/{id}','App\Http\Controllers\Fornecedores@destroy');
Route::get('/fornecedores',function () {
        return view('fornecedores');
});
Route::get('/fornecedores/adicionar',function () {
    return view('adicionar-fornecedor');
});
Route::post('/fornecedores/adicionar','App\Http\Controllers\Fornecedores@store');



//movimentos
Route::get('/movimentos/entrada-quimico','App\Http\Controllers\EntradaQuimicoHistorico@show');
Route::get('/movimentos/entrada-nao-quimico','App\Http\Controllers\EntradaNaoQuimicoHistorico@show');
Route::get('/movimentos/saidas','App\Http\Controllers\historicoSaidas@show');
Route::get('/movimentos/operadores','App\Http\Controllers\OperadoresHistorico@show');
