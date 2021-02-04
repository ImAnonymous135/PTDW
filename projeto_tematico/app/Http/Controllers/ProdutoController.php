<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Produtos;
use App\Models\Embalagem;
use App\Models\Movimentos;

class ProdutoController extends Controller
{
    public function show($id, Request $request)
    {

        App::setLocale($request->session()->get('lang'));
        $produto = Produtos::find($id);
        $embalagens = $this->embalagens($id);

        //dd($embalagens);

        //dd('produto', $produto, 'embalagem', $embalagens);
        return view('info-produto', ['produto' => $produto, 'embalagens' => $embalagens]);
    }

    private function embalagens($id)
    {
        //dd($id);
        $movimentos = DB::table('embalagem')->select('movimentos.*', 'embalagem.capacidade_embalagem AS capacidade', 'embalagem.designacao AS embalagem', 'prateleiras.designacao AS prateleira', 'armario.designacao AS armario', 'cliente.designacao AS cliente')->where('id_produtos', $id)->join('movimentos', 'embalagem.id', '=', 'embalagemid')->join('prateleiras', 'embalagem.localizacao', '=', 'prateleiras.id')->join('armario', 'prateleiras.id_armario', '=', 'armario.id')->join('cliente', 'armario.id_cliente', '=', 'cliente.id')->get();

        return $movimentos;
    }

    public function update($id)
    {

        $movimento = Movimentos::where('embalagemid', '=', $id)->get();

        $movimento[0]->data_abertura = date("d-m-Y");
        $movimento[0]->timestamps = false;

        $movimento[0]->save();

        $embalagem = Embalagem::where('id', '=', $id)->get();

        return redirect('/produtos/' . $embalagem[0]->id_produtos);
    }
}