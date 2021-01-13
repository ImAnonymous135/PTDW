<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movimentos_Produtos_Quimicos;

class EntradaQuimicoHistorico extends Controller
{
    public function show()
    {
        $produtos = Movimentos_Produtos_Quimicos::all();
        return view('entrada-quimico',['produtos'=>$produtos]);
    }
}
