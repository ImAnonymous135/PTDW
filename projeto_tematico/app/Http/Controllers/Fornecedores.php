<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class Fornecedores extends Controller
{

    public function store(Request $request)
    {
        dd(request());
        $this->validateFornecedor();
        $fornecedor = new Fornecedor(request(['designacao','morada','localidade','codigo_postal','telefone','nif','email','vendedor_1','telemovel_1','email_1','vendedor_2','telemovel_2','email_2','condicoes_especiais','observacoes']));
        $fornecedor->timestamps=false;
        $fornecedor->save();
        return redirect('/fornecedores');    
    }

    public function update($id)
    {
        $data = $this->validateFornecedor();

        $fornecedor = Fornecedor::find($id);
        $fornecedor->designacao = request()->designacao;
        $fornecedor->morada = request()->morada;
        $fornecedor->localidade = request()->localidade;
        $fornecedor->codigo_postal = request()->codigo_postal;
        $fornecedor->telefone = request()->telefone;
        $fornecedor->nif = request()->nif;
        $fornecedor->email = request()->email;
        $fornecedor->vendedor_1 = request()->vendedor_1;
        $fornecedor->telemovel_1 = request()->telemovel_1;
        $fornecedor->email_1 = request()->email_1;
        $fornecedor->vendedor_2 = request()->vendedor_2;
        $fornecedor->telemovel_2 = request()->telemovel_2;
        $fornecedor->email_2 = request()->email_2;
        $fornecedor->condicoes_especiais = request()->condicoes_especiais;
        $fornecedor->observacoes = request()->observacoes;
        $fornecedor->save();

        return redirect('/fornecedores')->with(['toast'=>'editSuccess']);
    }

    public function destroy($id)
    {
        Fornecedor::find($id)->delete();
        return redirect('/fornecedores')->with(['toast'=>'deleteSuccess']);
    }

    public function validateFornecedor(){
        request()->validate([
            'designacao' => 'required',
            'morada' => 'required',
            'localidade' => 'required',
            'codigo_postal' => 'required',
            'telefone' => 'required',
            'nif' => 'required',
            'email' => 'nullable|email',
            'email_1' => 'nullable|email',
            'email_2' => 'nullable|email'
        ]);
    }

    //Este metodo tem como parametro a request
    //Devolve: Json com os dados necessarios para preencher a tabela dos fornecedores
    //O Json contém draw, numero de registos total, numero de registo mostrados e a informação a mostrar
    public function getFornecedores(Request $request){

        $count = Fornecedor::select('count(*)')
        ->where("designacao", 'ilike', '%' . $request->get('search')['value'] . '%')
        ->orWhere("morada", 'ilike', '%' . $request->get('search')['value'] . '%')
        ->orWhere("localidade", 'ilike', '%' . $request->get('search')['value'] . '%')
        ->orWhere("codigo_postal", 'ilike', '%' . $request->get('search')['value'] . '%')
        ->orWhere("telefone", 'ilike', '%' . $request->get('search')['value'] . '%')
        ->orWhere("nif", 'ilike', '%' . $request->get('search')['value'] . '%')
        ->count();
        
        $total = Fornecedor::select('count(*) as allcount')->count();

        $fornecedores = Fornecedor::orderBy($request->get('columns')[$request->get('order')[0]['column']]['data'], $request->get('order')[0]['dir'])
        ->where("designacao", 'ilike', '%' . $request->get('search')['value'] . '%')
        ->orWhere("morada", 'ilike', '%' . $request->get('search')['value'] . '%')
        ->orWhere("localidade", 'ilike', '%' . $request->get('search')['value'] . '%')
        ->orWhere("codigo_postal", 'ilike', '%' . $request->get('search')['value'] . '%')
        ->orWhere("telefone", 'ilike', '%' . $request->get('search')['value'] . '%')
        ->orWhere("nif", 'ilike', '%' . $request->get('search')['value'] . '%')
        ->select("*")
        ->skip($request->get("start"))
        ->take($request->get("length"))
        ->get();

        if(count($fornecedores)>0){
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

    //Este metodo tem como parametro o id de um fornecedor
    //Devolve: fornecedor com id do parametro
    public function getFornecedor($id){
        $fornecedor = Fornecedor::find($id);

        return json_encode($fornecedor);
    }
}
