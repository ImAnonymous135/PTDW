<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;

class ProdutoController extends Controller
{
    public function show($id)
    {
        $produto = Produtos::find($id);

        if ($produto->is_quimico) {

            return view('info-produto',['produto' => $produto]);
        } else {
            
            return view('info-produto',['produto' => $produto]);
        }
    }
}