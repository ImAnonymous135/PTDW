<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Operadores;
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
        
        $responsavel = Operadores::where("nome", $request->nomeResponsavel)->get();
        
        $cliente->timestamps=false;

        try{
            $cliente->id_responsavel=$responsavel[0]->id;
            $cliente->save();
        }catch(Exception $e){
            return redirect()->back()->with('msg', 'Responsável inexistente, adicione um que já exista!');
        }

        $operadores = Operadores::where("nome", $request->nomeSolicitante)->get();

        try{
            $operadores[0]->timestamps=false;
            $operadores[0]->update(['solicitante_sala' => $cliente->id]);
        }catch(Exception $e){
            return redirect()->back()->with('msg', 'Operador inexisten, adicione um que já exista!');
        }
            
        return redirect('/clientes');    
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

    public function update(){ }
    



    
}
