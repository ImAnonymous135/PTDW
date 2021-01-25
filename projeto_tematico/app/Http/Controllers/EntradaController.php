<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Produtos;

class EntradaController extends Controller
{
    public function show($id, Request $request)
    {
        App::setLocale($request->session()->get('lang'));
        $produto = Produtos::find($id);
        return view('registo-entrada',['produto' => $produto]);
    }
}