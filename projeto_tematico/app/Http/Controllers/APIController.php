<?php

namespace App\Http\Controllers;
use App\Models\Movimentos_Produtos_Nao_Quimicos;
use App\Models\Movimentos_Produtos_Quimicos;
use App\Models\Operadores_Historico;
use App\Models\Fornecedor;
use App\Models\Registo_Saidas;
use Illuminate\Http\Request;

class APIController extends Controller
{ 
    //esta funcao retorna um json para preencher a tabela registoSaida
    public function registoSaida(Request $request){
        $data = $this->dadosRequest($request);

        $count = Registo_Saidas::select('count(*)')
        ->join('embalagem', 'registo_saidas.id_embalagem', '=', 'embalagem.id')
        ->join('produtos', 'embalagem.id_produtos', '=', 'produtos.id')
        ->join('cliente', 'registo_saidas.id_cliente', '=', 'cliente.id')
        //->join('operadores as solicitante', 'registo_saidas.id_solicitante', '=', 'operadores.solicitante_sala')
        ->join('operadores', 'registo_saidas.id_operador', '=', 'operadores.id')
        ->join('prateleiras', 'embalagem.localizacao', '=', 'prateleiras.id')
        ->join('armario', 'prateleiras.id_armario', '=', 'armario.id')
        //->join('cliente', 'armario.id_cliente', '=', 'cliente.id')

        ->where("produtos.designacao", 'ilike', '%' . $data["search"] . '%')
        
        ->skip($data["start"])
        ->take($data["length"])
        ->count();
        
        $total = Registo_Saidas::select('count(*) as allcount')->count();

        $result = Registo_Saidas::orderBy($data["column"], $data["order"])
        ->join('embalagem', 'registo_saidas.id_embalagem', '=', 'embalagem.id')
        ->join('produtos', 'embalagem.id_produtos', '=', 'produtos.id')
        ->join('cliente', 'registo_saidas.id_cliente', '=', 'cliente.id')
        //->join('operadores as solicitante', 'registo_saidas.id_solicitante', '=', 'operadores.solicitante_sala')
        ->join('operadores', 'registo_saidas.id_operador', '=', 'operadores.id')
        ->join('prateleiras', 'embalagem.localizacao', '=', 'prateleiras.id')
        ->join('armario', 'prateleiras.id_armario', '=', 'armario.id')
        //->join('cliente', 'armario.id_cliente', '=', 'cliente.id')
        ->where("produtos.designacao", 'ilike', '%' . $data["search"] . '%')
        ->select('produtos.designacao as designacao','prateleiras.designacao as prateleira','embalagem.designacao as embalagem','operadores.nome as solicitante','operadores.nome as operador','registo_saidas.data as data')
        /*{$registo_saidas->embalagem->produto->designacao}}
        "{{$registo_saidas->embalagem->prateleira->designacao}}"
        "{{$registo_saidas->embalagem->prateleira->armario->designacao}}",
     "{{$registo_saidas->embalagem->prateleira->armario->cliente->designacao}}",
     "{{$registo_saidas->embalagem->designacao}}",
     "{{$registo_saidas->solicitante->nome}}",
     "{{$registo_saidas->operadores->nome}}",
     "{{$registo_saidas->data}}"]);*/
        ->skip($data["start"])
        ->take($data["length"])
        ->get();


        $response = array(
            "draw" => intval($request->get('draw')),
            "iTotalRecords" => $total,
            "iTotalDisplayRecords" => $count,
            "aaData" => $result
        );

        return json_encode($response);
    }
}