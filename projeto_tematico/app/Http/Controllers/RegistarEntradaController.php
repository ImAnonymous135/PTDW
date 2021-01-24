<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movimentos;
use App\Models\Operadores;
use App\Models\Embalagem;
use App\Models\Fornecedor;
use App\Models\Textura_viscosidade;
use App\Models\Familia;
use App\Models\Estado_Fisico;
use App\Models\Tipo_Embalagem;
use Carbon\Carbon;

class RegistarEntradaController extends Controller
{

    public function store(Request $request)
    {

        $guardar = new Movimentos();
        $operadores = Operadores::where('nome', $request->operador)->first();
        //dd($operadores->id);
    }

    public function load()
    {
        $textura = Textura_viscosidade::all();
        $familia = Familia::all();
        $estadoFisico = Estado_Fisico::all();
        $tipoEmbalagem = Tipo_Embalagem::all();

        $date = Carbon::now();

        //dd($textura, $familia, $estadoFisico, $tipoEmbalagem);
        //dd($date);

        return view('registo-entrada', ["date" => $date, "familia" => $familia, "estadoFisico" => $estadoFisico, "tipoEmbalagem" => $tipoEmbalagem, "textura" => $textura]);
    }
}
