<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operadores;
use App\Models\Perfil;

class ListaOperadores extends Controller{
    
    public function show(){
        $operadores = Operadores::all();
        return view('operadores',['operadores'=>$operadores]);
    }

    public function create(){
        return view('adicionar-operador');
    }

    public function store(Request $request)
    {
        $this->validateOperadores();
        
        $operadores = new Operadores(request(['id_perfil','nome','email','observacoes']));
        $operadores->id_perfil=$request->perfil;
        //['solicitante_sala','id_perfil','nome','email','observacoes','data_criação','data_eliminação']
        $perfil = new Perfil(request([$operadores->id_perfil,'perfil']));
        $operadores->data_criação = date("d-m-Y");
        $operadores->timestamps=false;
        $operadores->save();
        $perfil->save();
        
        return redirect('/operadores');    
    }


    public function validateOperadores(){
        request()->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'perfil' => 'required',
        ]);
    }

    public function edit(){ }

    public function update(){ }

}
