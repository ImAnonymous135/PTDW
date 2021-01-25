<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Operadores;
use App\Models\Embalagem;
use App\Models\Produtos;
use App\Models\Movimentos;
use App\Models\Registo_Saidas;

class RegistoSaidaController extends Controller
{

    public function store(Request $request)
    {
        $produto = Produtos::where('designacao', $request->produto)->first();
       $embalagem = Embalagem::where('designacao', $request->embalagem)->where('id_produtos', $produto->id)->first();
       dd($embalagem);

       $operadores = Operadores::where('nome', $request->operador)->first();
       $solicitante = Operadores::where('nome', $request->solicitante)->first();
       $registoSaida = new Registo_Saidas();
       $registoSaida->id_embalagem = $embalagem->id;
       $registoSaida->data = $request->data;
       $registoSaida->id_solicitante = $solicitante->id;
       //$registoSaida->id_cliente = ?;
       $registoSaida->id_operador = $operadores->id;
       $registoSaida->observacao = $request->observacoes;
       $registoSaida->save();

       $movimento = Movimentos::where('embalagemid', $embalagem->id)->where('operadorid',$operadores->id);
       $movimento->data_termino = $request->data->format('Y-m-d');
       $movimento->save();

    }
    public function load()
    {
        $date = Carbon::now()->format('d-m-Y');
        return view('registo-saida', ['data'=> $date]);
    }
}
