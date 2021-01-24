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

class APIController extends Controller
{ 
    //esta funcao retorna um json para preencher a tabela registoSaida
    public function registoSaida(Request $request){
        $data = $this->dadosRequest($request);

        $count = Registo_Saidas::select('count(*)')
        ->join('embalagem', 'registo_saidas.id_embalagem', '=', 'embalagem.id')
        ->join('produtos', 'embalagem.id_produtos', '=', 'produtos.id')
        ->join('cliente', 'registo_saidas.id_cliente', '=', 'cliente.id')
        ->join('operadores as solicitantes', 'registo_saidas.id_solicitante', '=', 'solicitantes.solicitante_sala')
        ->join('operadores', 'registo_saidas.id_operador', '=', 'operadores.id')
        ->join('prateleiras', 'embalagem.localizacao', '=', 'prateleiras.id')
        ->join('armario', 'prateleiras.id_armario', '=', 'armario.id')
        ->where("produtos.designacao", 'ilike', '%' . $data["search"] . '%')
        ->count();
        
        $total = Registo_Saidas::select('count(*) as allcount')->count();

        $result = Registo_Saidas::orderBy($data["column"], $data["order"])
        ->join('embalagem', 'registo_saidas.id_embalagem', '=', 'embalagem.id')
        ->join('produtos', 'embalagem.id_produtos', '=', 'produtos.id')
        ->join('cliente', 'registo_saidas.id_cliente', '=', 'cliente.id')
        ->join('operadores as solicitantes', 'registo_saidas.id_solicitante', '=', 'solicitantes.solicitante_sala')
        ->join('operadores', 'registo_saidas.id_operador', '=', 'operadores.id')
        ->join('prateleiras', 'embalagem.localizacao', '=', 'prateleiras.id')
        ->join('armario', 'prateleiras.id_armario', '=', 'armario.id')
        ->where("produtos.designacao", 'ilike', '%' . $data["search"] . '%')
        ->select('produtos.designacao as designacao','prateleiras.designacao as prateleira','embalagem.designacao as embalagem','solicitantes.nome as solicitante','operadores.nome as operador','registo_saidas.data as data')
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

    public function listaOperadores(Request $request){
        $data = $this->dadosRequest($request);

        $count = Operadores::select('count(*)')
        ->join('perfil', 'operadores.id_perfil', '=', 'perfil.id')

        ->where("operadores.nome", 'ilike', '%' . $data["search"] . '%')
        ->skip($data["start"])
        ->take($data["length"])
        ->count();
        
        $total = Operadores::select('count(*) as allcount')->count();

        $result = Operadores::orderBy($data["column"], $data["order"])
        ->join('perfil', 'operadores.id_perfil', '=', 'perfil.id')
        ->where("operadores.nome", 'ilike', '%' . $data["search"] . '%')
        ->select('operadores.nome as nome',
        'operadores.email as email',
        'perfil.perfil as perfil',
        'operadores.data_criação as data_criação',
        'operadores.deleted_at as data_eliminação',
        'operadores.id as id')
        ->skip($data["start"])
        ->take($data["length"])
        ->get();

        if(count($result)>0){
            foreach($result as $operador){
                $arrayS[] = array(
                    "nome" => $operador->nome,
                    "email" => $operador->email,
                    "perfil" => $operador->perfil,
                    "data_criação" => $operador->data_criação,
                    "data_eliminação" => $operador->data_eliminação,
                    "buttons" => '<div class="btn-group"><button type="button" class="btn btn-primary" data-toggle="tooltip" onclick="info('.$operador->id.',true)"><i class="fas fa-eye"></i></button>  <button data-toggle="tooltip" type="button" onclick="info('.$operador->id.',false)" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>  <button data-toggle="tooltip" type="button" onclick="elim('.$operador->id.')"  class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></div>'
                );
            }
        }else{
            $arrayS=[];
        }

        $response = array(
            "draw" => intval($request->get('draw')),
            "iTotalRecords" => $total,
            "iTotalDisplayRecords" => $count,
            "aaData" => $arrayS
        );

        return json_encode($response);
    }

    public function getOperador($id){
        $operador = Operadores::find($id);

        $arrayS[] = array("nome" => $operador->nome,
            "email" => $operador->email,
            "perfil" => $operador->perfil->perfil,
            "data_criação" => $operador->data_criação,
            "data_eliminação" => $operador->data_eliminação,
            "observacoes" => $operador->observacoes
        );

        return json_encode($arrayS);
    }



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

    //esta funcao retorna um json para preencher a tabela registoSaida
    public function listaClientes(Request $request){
        $data = $this->dadosRequest($request);

        $count = Cliente::select('count(*)')
        ->join('operadores', 'cliente.id_responsavel', '=', 'operadores.id')
        ->where("cliente.designacao", 'ilike', '%' . $data["search"] . '%')
        ->count();
        
        $total = Cliente::select('count(*) as allcount')->count();

        $result = Cliente::orderBy('operadores.nome', $data["order"])
        ->join('operadores', 'cliente.id_responsavel', '=', 'operadores.id')
        ->select('cliente.designacao as designacao',
            'operadores.nome as nomeOperadores',
            'operadores.email as emailOperadores',
            'cliente.observacoes as observacoes',
            'cliente.id as id')
        ->skip($data["start"])
        ->take($data["length"])
        ->get();

        if(count($result)>0){
                       
            foreach($result as $cliente){
                $email="";
                $nome="";
                $operador = Operadores::where('solicitante_sala',$cliente->id)->get(); 
                foreach($operador as $todos){
                    $nome =$nome.$todos->nome.", ";
                    $email = $email.$todos->email.", ";
                }
                if(sizeof($operador) > 0){
                    $nome = substr($nome, 0, -2);
                    $email = substr($email, 0, -2);
                }
                $arrayS[] = array(
                    "designacao" => $cliente->designacao,
                    "nomeOperadores" => $cliente->nomeOperadores,
                    "emailOperadores" => $cliente->emailOperadores,
                    "nomeSolicitante" => $nome,
                    "emailSolicitante" => $email,
                    "observacoes" => $cliente->observacoes,
                    "buttons" => '<div class="btn-group"><button type="button" class="btn btn-primary" data-toggle="tooltip" onclick="info('.$cliente->id.',true)"><i class="fas fa-eye"></i></button>  <button data-toggle="tooltip" type="button" onclick="info('.$cliente->id.',false)" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>  <button data-toggle="tooltip" type="button" onclick="elim('.$cliente->id.')"  class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></div>'
                );

            }
        }else{
            $arrayS=[];
        }

        $response = array(
            "draw" => intval($request->get('draw')),
            "iTotalRecords" => $total,
            "iTotalDisplayRecords" => $count,
            "aaData" => $arrayS
        );

        return json_encode($response);
    }

    //esta funcao retorna um json para preencher a tabela clientes
    public function getCliente($id){
        $cliente = Cliente::find($id);
        $cliente->operador;

        $email="";
        $nome="";
        $operador = Operadores::where('solicitante_sala',$cliente->id)->get(); 
        foreach($operador as $todos){
            $nome =$nome.$todos->nome.", ";
            $email = $email.$todos->email.", ";
        }
        if(sizeof($operador) > 0){
            $nome = substr($nome, 0, -2);
            $email = substr($email, 0, -2);
        }

        if(sizeOf($operador) === 0){
            $arrayS[] = array(
                "designacao" => $cliente->designacao,
                "nomeOperadores" => $cliente->operador->nome,
                "emailOperadores" => $cliente->operador->email,
                "nomeSolicitante" => "",
                "emailSolicitante" => "",
                "observacoes" => $cliente->observacoes
            );
        }else{
            $arrayS[] = array(
                "designacao" => $cliente->designacao,
                "nomeOperadores" => $cliente->operador->nome,
                "emailOperadores" => $cliente->operador->email,
                "nomeSolicitante" => $nome,
                "emailSolicitante" => $email,
                "observacoes" => $cliente->observacoes
            );
            
        }
        
        return json_encode($arrayS);
    }

}
