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

       return redirect('/produtos/'.$produto->id);
    }
    public function load($produto_designacao, $embalagem)
    {
        //dd('cheguei');
        if($produto_designacao == 'null')
        {
            $produto_designacao = "";
            $embalagem = "";
        }

        $date = Carbon::now()->format('d-m-Y');
        return view('registo-saida', ['data'=> $date, 'produtoDesignacao'=>$produto_designacao, 'embalagemDesignacao' => $embalagem]);
    }

    //le a request e devolve os dados relevantes
    public function dadosRequest(Request $request){
        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $search_arr = $request->get('search');
        $columnIndex = $columnIndex_arr[0]['column'];

        $data = array (
            "start" => $request->get("start"),
            "length" => $request->get("length"),
            "search" => $search_arr['value'],
            "column" => $columnName_arr[$columnIndex]['data'],
            "order" => $columnIndex_arr[0]['dir']
        );
        return $data;
    }

    //esta funcao retorna um json para preencher a tabela registoSaida
    public function registoSaida(Request $request){
        $data = $this->dadosRequest($request);

        if($request->get("pesquisa") == "produto"){
            $table = "produtos.designacao";
        }else if($request->get("pesquisa")== "embalagem"){
            $table = "embalagem.designacao";
        }else if($request->get("pesquisa")== "solicitante"){
            $table = "solicitantes.nome";
        }else if($request->get("pesquisa")== "operador"){
            $table = "operadores.nome";
        }else if($request->get("pesquisa")== "prateleira"){
            $table = "prateleiras.designacao";
        }else if($request->get("pesquisa")== "armario"){
            $table = "armario.designacao";
        }else if($request->get("pesquisa")== "cliente"){
            $table = "cliente.designacao";
        }

        $count = Registo_Saidas::select('count(*)')
        ->join('embalagem', 'registo_saidas.id_embalagem', '=', 'embalagem.id')
        ->join('produtos', 'embalagem.id_produtos', '=', 'produtos.id')
        ->join('cliente', 'registo_saidas.id_cliente', '=', 'cliente.id')
        ->join('operadores as solicitantes', 'registo_saidas.id_solicitante', '=', 'solicitantes.solicitante_sala')
        ->join('operadores', 'registo_saidas.id_operador', '=', 'operadores.id')
        ->join('prateleiras', 'embalagem.localizacao', '=', 'prateleiras.id')
        ->join('armario', 'prateleiras.id_armario', '=', 'armario.id')
        ->where($table, 'ilike', '%' . $data["search"] . '%')
        ->count();

        $total = Registo_Saidas::select('count(*) as allcount')->count();

        $movements = Registo_Saidas::orderBy($data["column"], $data["order"])
        ->join('embalagem', 'registo_saidas.id_embalagem', '=', 'embalagem.id')
        ->join('produtos', 'embalagem.id_produtos', '=', 'produtos.id')
        ->join('cliente', 'registo_saidas.id_cliente', '=', 'cliente.id')
        ->join('operadores as solicitantes', 'registo_saidas.id_solicitante', '=', 'solicitantes.solicitante_sala')
        ->join('operadores', 'registo_saidas.id_operador', '=', 'operadores.id')
        ->join('prateleiras', 'embalagem.localizacao', '=', 'prateleiras.id')
        ->join('armario', 'prateleiras.id_armario', '=', 'armario.id')
        ->where($table, 'ilike', '%' . $data["search"] . '%')
        ->select('produtos.designacao as designacao',
            'prateleiras.designacao as prateleira',
            'embalagem.designacao as embalagem',
            'solicitantes.nome as solicitante',
            'operadores.nome as operador',
            'registo_saidas.data as data',
            'armario.designacao as armario',
            'cliente.designacao as cliente')
        ->skip($data["start"])
        ->take($data["length"])
        ->get();

        if(count($movements)>0){
            foreach($movements as $movement){
                $result[] = array(
                    "designacao" => $movement->designacao,
                    "localizacao" => $movement->cliente."-".$movement->armario."-".$movement->prateleira,
                    "embalagem" => $movement->embalagem,
                    "solicitante" => $movement->solicitante,
                    "operador" => $movement->operador,
                    "data" => $movement->data
                );
            }
        }else{
            $result=[];
        }

        $response = array(
            "draw" => intval($request->get('draw')),
            "iTotalRecords" => $total,
            "iTotalDisplayRecords" => $count,
            "aaData" => $result
        );

        return json_encode($response);
    }


}
