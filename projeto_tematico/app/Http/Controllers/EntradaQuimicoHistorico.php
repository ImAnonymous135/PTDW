<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Movimentos_Produtos_Quimicos;
use App\Models\Pictogramas;
use DB;

class EntradaQuimicoHistorico extends Controller
{
    public function show(Request $request)
    {
        App::setLocale($request->session()->get('lang'));

        $pictogramas = Pictogramas::all();
        return view('entrada-quimico',['pictogramas'=>$pictogramas]);
    }

    //Este metodo tem como parametro a request
    //Devolve: Json com os dados necessarios para preencher a tabela do movimento de entrada de quimicos
    public function getEntQuimico(Request $request){

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
        }else if($request->get("pesquisa")== "prateleira"){
            $table = "prateleiras.designacao";
        }else if($request->get("pesquisa")== "armario"){
            $table = "armario.designacao";
        }else if($request->get("pesquisa")== "cliente"){
            $table = "cliente.designacao";
        }

        if($request->get("start_date") == $request->get("end_date")){
            $startDate = "1970/01/01";
            $endDate = "9999/12/31";
        }else{
            $startDate = $request->get("start_date");
            $endDate = $request->get("end_date");
        }

        $count = Movimentos_Produtos_Quimicos::select(DB::raw('count(distinct(movimentos_produtos_quimicos.movimentos_n_ordem))'))
        ->join('movimentos', 'movimentos_produtos_quimicos.movimentos_n_ordem', '=', 'movimentos.n_ordem')
        ->join('textura_viscosidade', 'movimentos_produtos_quimicos.id_textura_viscosidade', '=', 'textura_viscosidade.id')
        ->join('estado_fisico', 'movimentos_produtos_quimicos.id_estado_fisico', '=', 'estado_fisico.id')
        ->join('fornecedor', 'movimentos.fornecedorid', '=', 'fornecedor.id')
        ->join('embalagem', 'movimentos.embalagemid', '=', 'embalagem.id')
        ->join('produtos', 'embalagem.id_produtos', '=', 'produtos.id')
        ->join('tipo_embalagem', 'embalagem.id_tipo_embalagem', '=', 'tipo_embalagem.id')
        ->join('cor', 'movimentos_produtos_quimicos.id_cor', '=', 'cor.id')
        ->join('prateleiras', 'embalagem.localizacao', '=', 'prateleiras.id')
        ->join('armario', 'prateleiras.id_armario', '=', 'armario.id')
        ->join('cliente', 'armario.id_cliente', '=', 'cliente.id')
        ->join('produtos_quimicos', 'produtos.id', '=', 'produtos_quimicos.id_produto')
        ->join('produtos_quimicos_pictogramas', 'produtos_quimicos.id_produto','=','produtos_quimicos_pictogramas.id_produtos_quimicos')
        ->join('pictogramas', 'produtos_quimicos_pictogramas.id_pictogramas','=','pictogramas.id')
        ->where(function ($query) use ($request){
            if($request->get("pictogramas")==null){  
                $query->where('pictogramas.id','ilike', '%');
            }else{
                $query->whereIn('pictogramas.id', $request->get("pictogramas"));
            }
        })
        ->where($table, 'ilike', '%' . $request->get('search')['value'] . '%')
        ->where("movimentos.data_entrada",'>', $startDate)
        ->where("movimentos.data_entrada",'<', $endDate)
        ->get();
        
        $total = Movimentos_Produtos_Quimicos::select('count(*) as allcount')->count();

        $movements = Movimentos_Produtos_Quimicos::orderBy($request->get('columns')[$request->get('order')[0]['column']]['data'], $request->get('order')[0]['dir'])
        ->join('movimentos', 'movimentos_produtos_quimicos.movimentos_n_ordem', '=', 'movimentos.n_ordem')
        ->join('textura_viscosidade', 'movimentos_produtos_quimicos.id_textura_viscosidade', '=', 'textura_viscosidade.id')
        ->join('estado_fisico', 'movimentos_produtos_quimicos.id_estado_fisico', '=', 'estado_fisico.id')
        ->join('fornecedor', 'movimentos.fornecedorid', '=', 'fornecedor.id')
        ->join('embalagem', 'movimentos.embalagemid', '=', 'embalagem.id')
        ->join('produtos', 'embalagem.id_produtos', '=', 'produtos.id')
        ->join('tipo_embalagem', 'embalagem.id_tipo_embalagem', '=', 'tipo_embalagem.id')
        ->join('cor', 'movimentos_produtos_quimicos.id_cor', '=', 'cor.id')
        ->join('prateleiras', 'embalagem.localizacao', '=', 'prateleiras.id')
        ->join('armario', 'prateleiras.id_armario', '=', 'armario.id')
        ->join('cliente', 'armario.id_cliente', '=', 'cliente.id')
        ->join('produtos_quimicos', 'produtos.id', '=', 'produtos_quimicos.id_produto')
        ->join('produtos_quimicos_pictogramas', 'produtos_quimicos.id_produto','=','produtos_quimicos_pictogramas.id_produtos_quimicos')
        ->join('pictogramas', 'produtos_quimicos_pictogramas.id_pictogramas','=','pictogramas.id')
        ->where(function ($query) use ($request){
            if($request->get("pictogramas")==null){  
                $query->where('pictogramas.id','ilike', '%');
            }else{
                $query->whereIn('pictogramas.id', $request->get("pictogramas"));
            }
        })
        ->where($table, 'ilike', '%' . $request->get('search')['value'] . '%')
        ->where("movimentos.data_entrada",'>', $startDate)
        ->where("movimentos.data_entrada",'<', $endDate)
        ->select(DB::raw('distinct(movimentos_produtos_quimicos.movimentos_n_ordem)'),'produtos.designacao as designacao',
        'fornecedor.designacao as fornecedor' ,'movimentos.marca as marca',
        'tipo_embalagem.tipo_embalagem as tipo_embalagem', 'cor.cor', 
        'estado_fisico.estado_fisico','textura_viscosidade.textura_viscosidade',
        'movimentos.peso_bruto as peso','movimentos.data_entrada as data_entrada',
        'movimentos.data_validade as data_validade','prateleiras.designacao as prateleria',
        'armario.designacao as armario','cliente.designacao as cliente',
        DB::raw("array_agg( pictogramas.imagem ) as pictogramas"))
        ->groupBy('movimentos_produtos_quimicos.movimentos_n_ordem','produtos.designacao','fornecedor.designacao','movimentos.marca','tipo_embalagem.tipo_embalagem', 'cor.cor', 
        'estado_fisico.estado_fisico','textura_viscosidade.textura_viscosidade',
        'movimentos.peso_bruto','movimentos.data_entrada',
        'movimentos.data_validade','prateleiras.designacao',
        'armario.designacao','cliente.designacao')
        ->skip($request->get("start"))
        ->take($request->get("length"))
        ->get();
        
        if(count($movements)>0){
            foreach($movements as $movement){
                $pictogramas = substr($movement->pictogramas, 1, -1);
                $pictogramas = explode(",", $pictogramas);
                $pict=" ";
                for($i=0;$i<count($pictogramas);$i++){
                    $pict .='<img src="'.$pictogramas[$i].'" width="50" height="50">';
                }
                $result[] = array(
                    "designacao" => $movement->designacao,
                    "fornecedor" => $movement->fornecedor,
                    "marca" => $movement->marca,
                    "estado_fisico" => $movement->estado_fisico,
                    "tipo_embalagem" => $movement->tipo_embalagem,
                    "textura_viscosidade" => $movement->textura_viscosidade,
                    "cor" => $movement->cor,
                    "peso" => $movement->peso,
                    "data_entrada" => $movement->data_entrada,
                    "data_validade" => $movement->data_validade,
                    "localizacao" => $movement->cliente."-".$movement->armario."-".$movement->prateleria,
                    "pictogramas" => $pict
                );
            }
        }else{
            $result=[];
        }

        $response = array(
            "draw" => intval($request->get('draw')),
            "iTotalRecords" => $total,
            "iTotalDisplayRecords" => $count[0]->count,
            "aaData" => $result
        );

        return json_encode($response);
    }
}