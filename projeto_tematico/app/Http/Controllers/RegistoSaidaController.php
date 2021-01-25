<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
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
       //dd($embalagem->prateleira->armario->cliente);



       $operadores = Operadores::where('nome', $request->operador)->first();
       $solicitante = Operadores::where('nome', $request->solicitante)->first();
      /* $registoSaida = new Registo_Saidas();
       $registoSaida->id_embalagem = $embalagem->id;
       $registoSaida->data = $request->data;
       $registoSaida->id_solicitante = $solicitante->id;
       $registoSaida->id_cliente = $embalagem->prateleira->armario->cliente->id;
       $registoSaida->id_operador = $operadores->id;
       $registoSaida->observacao = $request->observacoes;
       $registoSaida->timestamps = false;
       $registoSaida->save();*/

       Registo_Saidas::insert([
        'id_embalagem' => $embalagem->id,
        'data' => $request->data,
        'id_solicitante' => $solicitante->id,
        'id_cliente' => $embalagem->prateleira->armario->cliente->id,
        'id_operador' => $operadores->id,
        'observacao' => $request->observacoes,

    ]);

       $movimento = Movimentos::where('embalagemid', $embalagem->id)->where('operadorid',$operadores->id)->first();
       //dd($embalagem->id, $operadores->id, $request->data,$movimento );
       $movimento->data_termino = $request->data;
       $movimento->timestamps = false;
       //dd($movimento);
       $movimento->save();

       //Movimentos::where('embalagemid', $embalagem->id)->where('operadorid',$operadores->id)->update(['data_termino' => $request->data]);

       return redirect('/saidas');
    }
    public function load()
    {
        $date = Carbon::now()->format('d-m-Y');
        return view('registo-saida', ['data'=> $date]);
    }
}
