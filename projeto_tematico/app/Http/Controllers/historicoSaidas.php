<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Registo_Saidas;

class historicoSaidas extends Controller{
    
    public function show(Request $request){
        App::setLocale($request->session()->get('lang'));
        $registo_saidas = Registo_Saidas::all();
        return view('saidas',['registo_saidas'=>$registo_saidas]);
    }
}