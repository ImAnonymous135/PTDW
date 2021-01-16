<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ListaCliente extends Controller{

    public function show(){
        $cliente = Cliente::all();
        return view('clientes',['cliente'=>$cliente]);
    }

    public function create(){
        return view('adicionar-cliente');
    }

    public function store(Request $request){

        $this->validateCliente();
        $cliente = new Cliente(request(['designacao','nomeResponsavel','emailResponsavel','nomeSolicitante','emailSolicitante','observacoes']));
        $cliente->save();
        return redirect('/clientes');    
    }



    public function validateCliente(){
        request()->validate([
            'designacao' => 'required',
            'nomeResponsavel' => 'required',
            'emailResponsavel' => 'required|email',
            'emailSolicitante' => 'nullable|email',
        ]);
    }

    public function edit(){ }

    public function update(){ }
    



    
}
