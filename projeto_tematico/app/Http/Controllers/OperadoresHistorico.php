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

    //Este metodo tem como parametro a request
    //Devolve: Json com os dados necessarios para preencher a tabela do movimento dos operadores
    public function getOperadores(Request $request){

        $count = Operadores_Historico::select('count(*)')
        ->where($request->get('pesquisa'), 'ilike', '%' .  $request->get('search')['value'] . '%')
        ->count();
        
        $total = Operadores_Historico::select('count(*) as allcount')->count();

        $operadores = Operadores_Historico::orderBy($request->get('columns')[$request->get('order')[0]['column']]['data'], $request->get('order')[0]['dir'])
        ->where($request->get('pesquisa'), 'ilike', '%' .  $request->get('search')['value'] . '%')
        ->select('nome_administrador as administrador','operador','data','operacao','observacoes')
        ->skip($request->get("start"))
        ->take($request->get("length"))
        ->get();
        
        $response = array(
            "draw" => intval($request->get('draw')),
            "iTotalRecords" => $total,
            "iTotalDisplayRecords" => $count,
            "aaData" => $operadores
        );

        return json_encode($response);
    }
}
