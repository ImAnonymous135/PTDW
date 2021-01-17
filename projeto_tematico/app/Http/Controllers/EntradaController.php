<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;

class EntradaController extends Controller
{
    public function show($id)
    {
        $produto = Produtos::find($id);
        return view('registo-entrada',['produto' => $produto]);
    }
}