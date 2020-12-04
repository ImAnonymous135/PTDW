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

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/saidas', function () {
    return view('saidas');
});

Route::get('/produtos/adicionar', function () {
    return view('adicionar-produto');
});

Route::get('/produtos/info-produto', function () {
    return view('info-produto');
});