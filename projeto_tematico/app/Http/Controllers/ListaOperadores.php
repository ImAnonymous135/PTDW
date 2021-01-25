<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operadores;
use App\Models\Perfil;

class ListaOperadores extends Controller{

    public function show(){
        $operadores = Operadores::all();
        $perfil = Perfil::all();

        return view('operadores',['operadores'=>$operadores,'perfil'=>$perfil]);
    }

    public function create(){
        $perfil = Perfil::all();
        return view('adicionar-operador',['perfil'=>$perfil]);
    }

    public function store(Request $request)
    {
        $this->validateOperadores();

        $operadores = new Operadores(request(['id_perfil','nome','email','observacoes']));
        $operadores->id_perfil=$request->perfil;
        //['solicitante_sala','id_perfil','nome','email','observacoes','data_criação','data_eliminação']
        $operadores->data_criação = date("d-m-Y");
        $operadores->timestamps=false;
        $operadores->save();

        $operadores->save();

        return redirect('/operadores')->with(['toast'=>'addSuccess']);
    }

    public function update($id){

        $operadores = Operadores::find($id);
        $operadores->id_perfil = request()->novoCargoOperador;
        $operadores->save();

        return redirect('/operadores')->with(['toast'=>'editSuccess']);
    }


    public function validateOperadores(){
        request()->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'perfil' => 'required',
        ]);
    }

    public function destroy($id){
        Operadores::find($id)->delete();
        return redirect('/operadores')->with(['toast'=>'deleteSuccess']);;
    }

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


}
