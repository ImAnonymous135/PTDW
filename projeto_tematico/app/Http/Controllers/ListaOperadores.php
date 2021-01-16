<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operadores;
use App\Models\Operadores_Perfil;

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
        $operadores = new Operadores(request(['nome','perfil','email','observacoes']));
        dd($operadoresPerfil);
        $operadores->data_criação = date("d-m-Y");
        $operadores->timestamps=false;
        $operadores->save();
        $operadoresPerfil->save();
        
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
