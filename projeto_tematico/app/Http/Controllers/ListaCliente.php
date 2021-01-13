<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ListaCliente extends Controller{

    public function show(){
        $cliente = Cliente::all();
        return view('clientes',['cliente'=>$cliente]);
    }

    



    
}
