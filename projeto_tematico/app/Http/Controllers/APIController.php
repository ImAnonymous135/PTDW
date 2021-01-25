<?php

namespace App\Http\Controllers;
use App\Models\Movimentos_Produtos_Nao_Quimicos;
use App\Models\Movimentos_Produtos_Quimicos;
use App\Models\Operadores_Historico;
use App\Models\Fornecedor;
use App\Models\Operadores;
use App\Models\Cliente;
use App\Models\Registo_Saidas;
use Illuminate\Http\Request;

class APIController extends Controller{ 
    
    //esta funcao retorna um json para preencher a tabela fornecedores
    public function fornecedor($id){
        $fornecedor = Fornecedor::find($id);

        return json_encode($fornecedor);
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

    
}
