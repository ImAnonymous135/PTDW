<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Produtos;
use App\Models\Embalagem;
use App\Models\Movimentos;

class ProdutoController extends Controller
{
    public function show($id)
    {
        $produto = Produtos::find($id);

        $embalagens = $this->embalagens($id);
        
        return view('info-produto',['produto' => $produto, 'embalagens' => $embalagens]);
    }

    private function embalagens($id)
    {
        $movimentos = DB::table('embalagem')->
        select('movimentos.*','embalagem.capacidade_embalagem AS capacidade', 'prateleiras.designacao AS prateleira', 'armario.designacao AS armario', 'cliente.designacao AS cliente')->
        where('id_produtos', $id)->
        join('movimentos', 'embalagem.id', '=', 'embalagemid')->
        join('prateleiras', 'embalagem.localizacao', '=', 'prateleiras.id')->
        join('armario', 'prateleiras.id_armario', '=', 'armario.id')->
        join('cliente', 'armario.id_cliente', '=', 'cliente.id')->
        get();

        return $movimentos;
    }
}