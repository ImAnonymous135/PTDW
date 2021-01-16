<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movimentos_Produtos_Nao_Quimicos;
use App\Models\Tipo_Embalagem;

class EntradaNaoQuimicoHistorico extends Controller
{
    public function show()
    {
        $produtos = Movimentos_Produtos_Nao_Quimicos::all();
        $tipos = Tipo_Embalagem::all();
        return view('entrada-nao-quimico',['produtos'=>$produtos],['tipos'=>$tipos]);
    }
}
