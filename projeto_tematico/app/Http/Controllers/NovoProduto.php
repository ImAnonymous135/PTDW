<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;

class NovoProduto extends Controller
{
    public function store(Request $request) {

        $request->validate([
            'selectTipo' => 'required',
            'designacao' => 'required',
            'stock_minimo' => 'required',
        ]);
        
        $produto = new Produtos();
     
        $produto->timestamps=false;
        $produto->designacao = $request->selectTipo;
        $produto->stock_existente = 0;
        $produto->stock_minimo = $request->stock_minimo;

        dd($produto);

        //$produto->save();

        return redirect('/produtos');
        //return back();

    }
}
