<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movimentos_Produtos_Nao_Quimicos;
use App\Models\Familia;

class EntradaNaoQuimicoHistorico extends Controller
{

    public function show()
    {
        $familias = Familia::all();
        return view('entrada-nao-quimico',['familias'=>$familias]);
    }

    //Este metodo tem como parametro a request
    //Devolve: Json com os dados necessarios para preencher a tabela do movimento de entrada de nao quimicos
    public function getEntNaoQuimico(Request $request){
    
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
        ->join('cor', 'movimentos_produtos_nao_quimicos.id_cor', '=', 'cor.id')
        ->join('fornecedor', 'movimentos.fornecedorid', '=', 'fornecedor.id')
        ->join('embalagem', 'movimentos.embalagemid', '=', 'embalagem.id')
        ->join('tipo_embalagem', 'embalagem.id_tipo_embalagem', '=', 'tipo_embalagem.id')
        ->join('produtos', 'embalagem.id_produtos', '=', 'produtos.id')
        ->join('produtos_nao_quimicos', 'produtos.id', '=', 'produtos_nao_quimicos.id_produto')
        ->join('familia', 'produtos_nao_quimicos.id_familia', '=', 'familia.id')
        ->where(function ($query) use ($request){
            if($request->get("tipo")==null){  
                $query->where('familia.designacao','ilike', '%');
            }else{
                $query->whereIn('familia.designacao', $request->get("tipo"));
            }
        })
        ->where($table, 'ilike', '%' . $request->get('search')['value'] . '%')
        ->where("movimentos.data_entrada",'>', $startDate)
        ->where("movimentos.data_entrada",'<', $endDate)
        ->count();

        $total = Movimentos_Produtos_Nao_Quimicos::select('count(*) as allcount')->count();

        $produtos = Movimentos_Produtos_Nao_Quimicos::orderBy($request->get('columns')[$request->get('order')[0]['column']]['data'], $request->get('order')[0]['dir'])
        ->join('movimentos', 'movimentos_produtos_nao_quimicos.movimentos_n_ordem', '=', 'movimentos.n_ordem')  
        ->join('cor', 'movimentos_produtos_nao_quimicos.id_cor', '=', 'cor.id')
        ->join('fornecedor', 'movimentos.fornecedorid', '=', 'fornecedor.id')
        ->join('embalagem', 'movimentos.embalagemid', '=', 'embalagem.id')
        ->join('tipo_embalagem', 'embalagem.id_tipo_embalagem', '=', 'tipo_embalagem.id')
        ->join('produtos', 'embalagem.id_produtos', '=', 'produtos.id')
        ->join('produtos_nao_quimicos', 'produtos.id', '=', 'produtos_nao_quimicos.id_produto')
        ->join('familia', 'produtos_nao_quimicos.id_familia', '=', 'familia.id')
        ->where(function ($query) use ($request){
            if($request->get("tipo")==null){  
                $query->where('familia.designacao','ilike', '%');
            }else{
                $query->whereIn('familia.designacao', $request->get("tipo"));
            }
        })
        ->where($table, 'ilike', '%' . $request->get('search')['value'] . '%')
        ->where("movimentos.data_entrada",'>', $startDate)
        ->where("movimentos.data_entrada",'<', $endDate)
        ->select('produtos.designacao as designacao','embalagem.localizacao as localizacao','fornecedor.designacao as fornecedor' ,'movimentos.marca as marca','familia.designacao as familia','tipo_embalagem.tipo_embalagem as tipo_embalagem', 'cor.cor', 'movimentos.peso_bruto as peso','movimentos.data_entrada as data_entrada','movimentos.data_validade as data_validade')
        ->skip($request->get("start"))
        ->take($request->get("length"))
        ->get();

        $response = array(
            "draw" => intval($request->get('draw')),
            "iTotalRecords" => $total,
            "iTotalDisplayRecords" => $count,
            "aaData" => $produtos
        );

        return json_encode($response);
    }

}
