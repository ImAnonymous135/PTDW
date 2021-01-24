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


}
