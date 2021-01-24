<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movimentos;
use App\Models\Operadores;
use App\Models\Embalagem;
use App\Models\Fornecedor;

class RegistarEntradaController extends Controller
{

    public function store(Request $request){

        $guardar = new Movimentos();
    $operadores = Operadores::find(/*nome*/);
        dd($request);
    }

    public function load()
    {
        $users = DB::table('users')->get();

        return view('user.index', ['users' => $users]);
    }
}
