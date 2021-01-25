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
    
}
