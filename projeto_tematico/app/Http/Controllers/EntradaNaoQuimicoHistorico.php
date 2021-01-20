<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movimentos_Produtos_Nao_Quimicos;
use App\Models\Familia;

class EntradaNaoQuimicoHistorico extends Controller
{
    public function show()
    {
        $familias = Familia::all();
        return view('entrada-nao-quimico',['familias'=>$familias]);
    }
}
