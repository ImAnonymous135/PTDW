<?php

namespace App\Http\Controllers;
use App\Models\Movimentos_Produtos_Nao_Quimicos;
use App\Models\Movimentos_Produtos_Quimicos;
use App\Models\Operadores_Historico;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class APIController extends Controller
{
    //esta funcao retorna um json para preencher a tabela movimento de entrada nao quimicos
    public function entradaNaoQuimico(Request $request){
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rows = $request->get("length"); 
        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $search_arr = $request->get('search');
        $columnIndex = $columnIndex_arr[0]['column'];
        $columnName = $columnName_arr[$columnIndex]['data']; 
        $columnSortOrder = $columnIndex_arr[0]['dir'];
        $searchValue = $search_arr['value'];

        if($request->get("tipo") == null){
            $family = "%";
        }else if(count($request->get("tipo")) > 1){
            foreach($request->get("tipo") as $d){
                $family = $type.$d." or ";
            }
            $type = substr($type, 0, -4);
        }else if(count($request->get("tipo")) == 1){
            $family = $request->get("tipo")[0];
        }
    
        if($request->get("pesquisa") == "produto"){
            $table = "produtos.designacao";
        }else if($request->get("pesquisa")== "fornecedor"){
            $table = "fornecedor.designacao";
        }else if($request->get("pesquisa")== "marca"){ 
            $table = "movimentos.marca";
        }else if($request->get("pesquisa")== "tipo"){ 
            $table = "tipo_embalagems.tipo_embalagem";
        }else if($request->get("pesquisa")== "cor"){
            $table = "cor.cor";
        }else if($request->get("pesquisa")== "peso"){
            $table = "movimentos.peso_bruto";
        }

        if($request->get("start_date") == $request->get("end_date")){
            $startDate = "1970/01/01";
            $endDate = "9999/12/31";
        }else{
            $startDate = $request->get("start_date");
            $endDate = $request->get("end_date");
        }
        
        

        $count = Movimentos_Produtos_Nao_Quimicos::select('count(*)')
        ->join('movimentos', 'movimentos_produtos_nao_quimicos.movimentos_n_ordem', '=', 'movimentos.n_ordem')
        ->join('tipo_embalagems', 'movimentos_produtos_nao_quimicos.id_tipo_embalagem', '=', 'tipo_embalagems.id')
        ->join('cor', 'movimentos_produtos_nao_quimicos.id_cor', '=', 'cor.id')
        ->join('fornecedor', 'movimentos.fornecedorid', '=', 'fornecedor.id')
        ->join('embalagem', 'movimentos.embalagemid', '=', 'embalagem.id')
        ->join('produtos', 'embalagem.id_produtos', '=', 'produtos.id')
        ->join('produtos_nao_quimicos', 'produtos.id', '=', 'produtos_nao_quimicos.id_produto')
        ->join('familias', 'produtos_nao_quimicos.id_familia', '=', 'familias.id')
        ->where('familias.designacao', 'ilike', $family)
        ->where($table, 'ilike', '%' . $searchValue . '%')
        ->where("movimentos.data_entrada",'>', $startDate)
        ->where("movimentos.data_entrada",'<', $endDate)
        ->select('produtos.designacao as designacao','embalagem.localizacao as localizacao','fornecedor.designacao as fornecedor' ,'movimentos.marca as marca','familias.designacao as familia','tipo_embalagems.tipo_embalagem as tipo_embalagem', 'cor.cor', 'movimentos.peso_bruto as peso','movimentos.data_entrada as data_entrada','movimentos.data_validade as data_validade')
        ->skip($start)
        ->take($rows)
        ->count();
        
        $total = Movimentos_Produtos_Nao_Quimicos::select('count(*) as allcount')->count();

        $produtos = Movimentos_Produtos_Nao_Quimicos::orderBy($columnName, $columnSortOrder)
        ->join('movimentos', 'movimentos_produtos_nao_quimicos.movimentos_n_ordem', '=', 'movimentos.n_ordem')
        ->join('tipo_embalagems', 'movimentos_produtos_nao_quimicos.id_tipo_embalagem', '=', 'tipo_embalagems.id')
        ->join('cor', 'movimentos_produtos_nao_quimicos.id_cor', '=', 'cor.id')
        ->join('fornecedor', 'movimentos.fornecedorid', '=', 'fornecedor.id')
        ->join('embalagem', 'movimentos.embalagemid', '=', 'embalagem.id')
        ->join('produtos', 'embalagem.id_produtos', '=', 'produtos.id')
        ->join('produtos_nao_quimicos', 'produtos.id', '=', 'produtos_nao_quimicos.id_produto')
        ->join('familias', 'produtos_nao_quimicos.id_familia', '=', 'familias.id')
        ->where('familias.designacao', 'ilike', $family)
        ->where($table, 'ilike', '%' . $searchValue . '%')
        ->where("movimentos.data_entrada",'>', $startDate)
        ->where("movimentos.data_entrada",'<', $endDate)
        ->select('produtos.designacao as designacao','embalagem.localizacao as localizacao','fornecedor.designacao as fornecedor' ,'movimentos.marca as marca','familias.designacao as familia','tipo_embalagems.tipo_embalagem as tipo_embalagem', 'cor.cor', 'movimentos.peso_bruto as peso','movimentos.data_entrada as data_entrada','movimentos.data_validade as data_validade')
        ->skip($start)
        ->take($rows)
        ->get();

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $total,
            "iTotalDisplayRecords" => $count,
            "aaData" => $produtos
        );

        return json_encode($response);
    }
    
    //esta funcao retorna um json para preencher a tabela movimento de entrada quimicos
    public function entradaQuimico(Request $request){
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rows = $request->get("length"); 
        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $search_arr = $request->get('search');
        $columnIndex = $columnIndex_arr[0]['column'];
        $columnName = $columnName_arr[$columnIndex]['data']; 
        $columnSortOrder = $columnIndex_arr[0]['dir'];
        $searchValue = $search_arr['value'];

        

        if($request->get("pesquisa") == "produto"){
            $table = "produtos.designacao";
        }else if($request->get("pesquisa")== "fornecedor"){
            $table = "fornecedor.designacao";
        }else if($request->get("pesquisa")== "marca"){ 
            $table = "movimentos.marca";
        }else if($request->get("pesquisa")== "cor"){
            $table = "cor.cor";
        }else if($request->get("pesquisa")== "tipo"){
            $table = "tipo_embalagems.tipo_embalagem";
        }else if($request->get("pesquisa")== "estado"){
            $table = "estado_fisico.estado_fisico";
        }else if($request->get("pesquisa")== "textura"){
            $table = "textura_viscosidade.textura_viscosidade";
        }else if($request->get("pesquisa")== "peso"){
            $table = "movimentos.peso_bruto";
        }

        if($request->get("start_date") == $request->get("end_date")){
            $startDate = "1970/01/01";
            $endDate = "9999/12/31";
        }else{
            $startDate = $request->get("start_date");
            $endDate = $request->get("end_date");
        }

        $count = Movimentos_Produtos_Quimicos::select('count(*)')
        ->join('movimentos', 'movimentos_produtos_quimicos.movimentos_n_ordem', '=', 'movimentos.n_ordem')
        ->join('textura_viscosidade', 'movimentos_produtos_quimicos.id_textura_viscosidade', '=', 'textura_viscosidade.id')
        ->join('estado_fisico', 'movimentos_produtos_quimicos.id_estado_fisico', '=', 'estado_fisico.id')
        ->join('fornecedor', 'movimentos.fornecedorid', '=', 'fornecedor.id')
        ->join('embalagem', 'movimentos.embalagemid', '=', 'embalagem.id')
        ->join('produtos', 'embalagem.id_produtos', '=', 'produtos.id')
        ->join('tipo_embalagems', 'movimentos_produtos_quimicos.id_tipo_embalagem', '=', 'tipo_embalagems.id')
        ->join('cor', 'movimentos_produtos_quimicos.id_cor', '=', 'cor.id')
        ->where($table, 'ilike', '%' . $searchValue . '%')
        ->where("movimentos.data_entrada",'>', $startDate)
        ->where("movimentos.data_entrada",'<', $endDate)
        ->select('produtos.designacao as designacao','embalagem.localizacao as localizacao','fornecedor.designacao as fornecedor' ,'movimentos.marca as marca','tipo_embalagems.tipo_embalagem as tipo_embalagem', 'cor.cor', 'estado_fisico.estado_fisico','textura_viscosidade.textura_viscosidade','movimentos.peso_bruto as peso','movimentos.data_entrada as data_entrada','movimentos.data_validade as data_validade')
        ->skip($start)
        ->take($rows)
        ->count();
        
        $total = Movimentos_Produtos_Quimicos::select('count(*) as allcount')->count();

        $produtos = Movimentos_Produtos_Quimicos::orderBy($columnName, $columnSortOrder)
        ->join('movimentos', 'movimentos_produtos_quimicos.movimentos_n_ordem', '=', 'movimentos.n_ordem')
        ->join('textura_viscosidade', 'movimentos_produtos_quimicos.id_textura_viscosidade', '=', 'textura_viscosidade.id')
        ->join('estado_fisico', 'movimentos_produtos_quimicos.id_estado_fisico', '=', 'estado_fisico.id')
        ->join('fornecedor', 'movimentos.fornecedorid', '=', 'fornecedor.id')
        ->join('embalagem', 'movimentos.embalagemid', '=', 'embalagem.id')
        ->join('produtos', 'embalagem.id_produtos', '=', 'produtos.id')
        ->join('tipo_embalagems', 'movimentos_produtos_quimicos.id_tipo_embalagem', '=', 'tipo_embalagems.id')
        ->join('cor', 'movimentos_produtos_quimicos.id_cor', '=', 'cor.id')
        ->where($table, 'ilike', '%' . $searchValue . '%')
        ->where("movimentos.data_entrada",'>', $startDate)
        ->where("movimentos.data_entrada",'<', $endDate)
        ->select('produtos.designacao as designacao','embalagem.localizacao as localizacao','fornecedor.designacao as fornecedor' ,'movimentos.marca as marca','tipo_embalagems.tipo_embalagem as tipo_embalagem', 'cor.cor', 'estado_fisico.estado_fisico','textura_viscosidade.textura_viscosidade','movimentos.peso_bruto as peso','movimentos.data_entrada as data_entrada','movimentos.data_validade as data_validade')
        ->skip($start)
        ->take($rows)
        ->get();
        
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $total,
            "iTotalDisplayRecords" => $count,
            "aaData" => $produtos
        );

        return json_encode($response);
    }

    //esta funcao retorna um json para preencher a tabela movimento operadores
    public function operadores(Request $request){
        $data = $this->dadosRequest($request);
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rows = $request->get("length"); 
        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $search_arr = $request->get('search');
        $columnIndex = $columnIndex_arr[0]['column'];
        $columnName = $columnName_arr[$columnIndex]['data']; 
        $columnSortOrder = $columnIndex_arr[0]['dir'];
        $searchValue = $search_arr['value'];

        $data = $this->dadosRequest($request);

        $count = Operadores_Historico::select('count(*)')
        ->where($request->get('pesquisa'), 'ilike', '%' . $searchValue . '%')
        ->select('nome_administrador as administrador','operador','data','operacao','observacoes')
        ->skip($start)
        ->take($rows)
        ->count();
        
        $total = Operadores_Historico::select('count(*) as allcount')->count();

        $operadores = Operadores_Historico::orderBy($columnName, $columnSortOrder)
        ->where($request->get('pesquisa'), 'ilike', '%' . $searchValue . '%')
        ->select('nome_administrador as administrador','operador','data','operacao','observacoes')
        ->skip($start)
        ->take($rows)
        ->get();
        
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $total,
            "iTotalDisplayRecords" => $count,
            "aaData" => $operadores
        );

        return json_encode($response);
    }

    //esta funcao retorna um json para preencher a tabela fornecedores
    public function fornecedores(Request $request){
        $data = $this->dadosRequest($request);

        $count = Fornecedor::select('count(*)')
        ->where("designacao", 'ilike', '%' . $data["search"] . '%')
        ->skip($data["start"])
        ->take($data["length"])
        ->count();
        
        $total = Fornecedor::select('count(*) as allcount')->count();

        $fornecedores = Fornecedor::orderBy($data["column"], $data["order"])
        ->where("designacao", 'ilike', '%' . $data["search"] . '%')
        ->select("*")
        ->skip($data["start"])
        ->take($data["length"])
        ->get();

        foreach($fornecedores as $fornecedor){
            $result[] = array(
                "designacao" => $fornecedor->designacao,
                "morada" => $fornecedor->morada,
                "localidade" => $fornecedor->localidade,
                "codigo_postal" => $fornecedor->codigo_postal,
                "telefone" => $fornecedor->telefone,
                "nif" => $fornecedor->nif,
                "buttons" => '<div class="btn-group"><button type="button" class="btn btn-primary" data-toggle="tooltip" onclick="info('.$fornecedor->id.',true)"><i class="fas fa-eye"></i></button>  <button data-toggle="tooltip" type="button" onclick="info('.$fornecedor->id.',false)" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>  <button data-toggle="tooltip" type="button" onclick="elim('.$fornecedor->id.')"  class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></div>'
            );
        }
        $response = array(
            "draw" => intval($request->get('draw')),
            "iTotalRecords" => $total,
            "iTotalDisplayRecords" => $count,
            "aaData" => $result
        );

        return json_encode($response);
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
}
