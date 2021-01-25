<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Produtos;

class ProdutosController extends Controller
{
    
    public function show(Request $request)
    {
        App::setLocale($request->session()->get('lang'));
        $produtos = Produtos::all();

        return view('lista-produtos', ['produtos' => $produtos]);
    }
}