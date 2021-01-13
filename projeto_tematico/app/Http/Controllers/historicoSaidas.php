<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registo_Saidas;

class historicoSaidas extends Controller{
    
    public function show(){
        $registo_saidas = Registo_Saidas::all();
        return view('saidas',['registo_saidas'=>$registo_saidas]);
    }


}
