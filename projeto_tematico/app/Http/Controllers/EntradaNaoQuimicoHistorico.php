<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movimentos_Produtos_Nao_Quimicos;

class EntradaNaoQuimicoHistorico extends Controller
{
    public function show()
    {
        $produtos = Movimentos_Produtos_Nao_Quimicos::all();
        
        return view('entrada-nao-quimico',['produtos'=>$produtos]);
    }
}
