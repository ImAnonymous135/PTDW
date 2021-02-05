<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Operadores_Historico;

class OperadoresHistorico extends Controller
{

    public function show(Request $request)
    {
        App::setLocale($request->session()->get('lang'));
        $operadores = Operadores_Historico::all();
        return view('historico-operadores', ['operadores' => $operadores]);
    }

    //Este metodo tem como parametro a request
    //Devolve: Json com os dados necessarios para preencher a tabela do movimento dos operadores
    public function getOperadores(Request $request)
    {

        if ($request->get('pesquisa') == 'operacao') {
            $table = 'operacao';
        } elseif ($request->get('pesquisa') == 'operador') {
            $table = 'operador';
        } elseif ($request->get('pesquisa') == 'nome_administrador') {
            $table = 'nome_administrador';
        } else {
            $table = 'nome_administrador';
        }

        if($request->get("start_date") == $request->get("end_date")){
            $startDate = "1970/01/01";
            $endDate = "9999/12/31";
        }else{
            $startDate = $request->get("start_date");
            $endDate = $request->get("end_date");
        }

        $count = Operadores_Historico::select('count(*)')
            ->where($table, 'ilike', '%' .  $request->get('search')['value'] . '%')
            ->where("data",'>', $startDate)
            ->where("data",'<', $endDate)
            ->orWhere("data",'=', $startDate)
            ->orWhere("data",'=', $endDate)
            ->count();

        $total = Operadores_Historico::select('count(*) as allcount')->count();

        $operadores = Operadores_Historico::orderBy($request->get('columns')[$request->get('order')[0]['column']]['data'], $request->get('order')[0]['dir'])
            ->where($table, 'ilike', '%' .  $request->get('search')['value'] . '%')
            ->where("data",'>', $startDate)
            ->where("data",'<', $endDate)
            ->orWhere("data",'=', $startDate)
            ->orWhere("data",'=', $endDate)
            ->select('nome_administrador as administrador', 'operador', 'data', 'operacao', 'observacoes')
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