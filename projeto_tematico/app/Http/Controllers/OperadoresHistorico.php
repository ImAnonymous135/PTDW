<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operadores_Historico;

class OperadoresHistorico extends Controller
{
    public function show()
    {
        $operadores = Operadores_Historico::all();
        return view('historico-operadores',['operadores'=>$operadores]);
    }
}
