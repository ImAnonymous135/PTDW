<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Operadores;
use Illuminate\Support\Facades\DB;
use Exception;

class ListaCliente extends Controller{

    public function show(){
        $cliente = Cliente::all();
        $operadores = Operadores::all();

        return view('clientes',['cliente'=>$cliente/*,'operadores'=>$operadores*/]);
    }

    public function create(){
        return view('adicionar-cliente');
    }

    public function store(Request $request){

        $this->validateCliente();
        $cliente = new Cliente(request(['designacao','id_responsavel','observacoes']));
        
        $responsavel = DB::table('operadores')
        ->where('nome', '=', $request->nomeResponsavel)
        ->where('email', '=', $request->emailResponsavel)
        ->get();
        
        $cliente->timestamps=false;

        if(sizeof($responsavel) >= 1){
            $cliente->id_responsavel=$responsavel[0]->id;
            $cliente->save();
        }else{
            return redirect('/clientes')->with(['toast'=>'error']); 
        }

        $operadores = DB::table('operadores')
        ->where('nome', '=', $request->nomeSolicitante)
        ->where('email', '=', $request->emailSolicitante)
        ->get();

        if(sizeof($operadores) >= 1){
            $operadores[0]->timestamps=false;
            $operadores[0]->solicitante_sala = $cliente->id;
        }else{
            return redirect('/clientes')->with(['toast'=>'error']); 
        }
            
        return redirect('/clientes')->with(['toast'=>'addSuccess']);    
    }



    public function validateCliente(){
        request()->validate([
            'designacao' => 'required',
            'nomeResponsavel' => 'required',
            'emailResponsavel' => 'required|email',
            'emailSolicitante' => 'nullable|email',
            'nomeSolicitante' => 'nullable',
        ]);
    }

    public function edit(){ }
    
    public function destroy($id)
    {
        Cliente::find($id)->delete();
        return redirect('/clientes')->with(['toast'=>'deleteSuccess']);;
    }

    public function update($id,Request $request){
        $this->validateCliente();

        $cliente = Cliente::find($id);
        $cliente->designacao = request()->designacao;
        $cliente->observacoes = request()->observacoes;

        $responsavel = DB::table('operadores')
        ->where('nome', '=', $request->nomeResponsavel)
        ->where('email', '=', $request->emailResponsavel)
        ->get();

        
        if(sizeof($responsavel) >= 1){
            $cliente->id_responsavel=$responsavel[0]->id;
        }

        $operadores = Operadores::where('nome', '=', $request->nomeSolicitante)
        ->where('email', '=', $request->emailSolicitante)
        ->get();

        if(sizeof($operadores) >= 1){
            $operadores[0]->solicitante_sala = $cliente->id;
            $operador = $operadores[0];
            $operador->save();
        }

        $cliente->save();

        return redirect('/clientes')->with(['toast'=>'editSuccess']); 
    }

    //API CONTROLLER
    
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
        ->orWhere("operadores.nome", 'ilike', '%' . $request->get('search')['value'] . '%')
        ->orWhere("operadores.email", 'ilike', '%' . $request->get('search')['value'] . '%')
        ->orWhere("operadores.email", 'ilike', '%' . $request->get('search')['value'] . '%')
        ->orWhere("cliente.observacoes", 'ilike', '%' . $request->get('search')['value'] . '%')
        ->count();
        
        $total = Cliente::select('count(*) as allcount')->count();

        $result = Cliente::orderBy('operadores.nome', $data["order"])
        ->join('operadores', 'cliente.id_responsavel', '=', 'operadores.id')
        ->where("cliente.designacao", 'ilike', '%' . $data["search"] . '%')
        ->orWhere("operadores.nome", 'ilike', '%' . $request->get('search')['value'] . '%')
        ->orWhere("operadores.email", 'ilike', '%' . $request->get('search')['value'] . '%')
        ->orWhere("operadores.email", 'ilike', '%' . $request->get('search')['value'] . '%')
        ->orWhere("cliente.observacoes", 'ilike', '%' . $request->get('search')['value'] . '%')
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
