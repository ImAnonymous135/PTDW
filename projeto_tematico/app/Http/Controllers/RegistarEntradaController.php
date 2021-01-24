<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movimentos;
use App\Models\Movimentos_Produtos_Quimicos;
use App\Models\Movimentos_Produtos_Nao_Quimicos;
use App\Models\Operadores;
use App\Models\Embalagem;
use App\Models\Fornecedor;
use App\Models\Textura_viscosidade;
use App\Models\Produtos;
use App\Models\Estado_Fisico;
use App\Models\Tipo_Embalagem;
use Carbon\Carbon;

class RegistarEntradaController extends Controller
{

    public function store(Request $request)
    {

        $guardar = new Movimentos();
        $operadores = Operadores::where('nome', $request->operador)->first();

        $query = Embalagem::query();
        $myArray = explode(',', $request->identificacaoEmbalagens);
        foreach ($myArray as $item) {
            $query->orWhere('designacao',$item);
        }
        $embalagens = $query->get();

        $fornecedor = Fornecedor::where('designacao', $request->fornecedor)->first();

        //dd($fornecedor->id);
        //dd($embalagens[2]->id);
        //dd($operadores->id);

        $isQuimico = Produtos::where('id', $request->state)->first()->value('is_quimico');
        //dd($isQuimico);


        $movimentos = new Movimentos();

        $movimentos->operadorid = $operadores->id;
        $movimentos->fornecedorid = $fornecedor->id;
        $movimentos->marca = $request->marca;
        $movimentos->referencia = $request->referencia;
        $movimentos->preço = $request->preco;
        $movimentos->taxa_IVA = $request->taxa;
        $movimentos->peso_bruto = $request->pesoBruto;
        $movimentos->data_entrada = $request->dataEntrada;
        $movimentos->data_abertura = null;
        $movimentos->data_validade = $request->dataValidade;
        $movimentos->data_termino = null;
        $movimentos->observacoes = $request->observacoes;

        foreach ($embalagens as $item) {
            $movimentos->embalagemid = $item;
            //dd($movimentos);
            $movimentos->save();

            if($isQuimico)
            {
                $movimentoQuimico = new Movimentos_Produtos_Quimicos();
                $movimentoQuimico->movimentos_n_ordem = $movimentos->id;
                $movimentoQuimico->id_estado_fisico = $request->estadoFisico;
                $movimentoQuimico->id_textura_viscosidade = $movimentos->texturaViscosidade;
                $movimentoQuimico->id_cor =1;
                dd($movimentoQuimico);
                $movimentoQuimico->save();
            }
            else{
                $movimentoNaoQuimico = new Movimentos_Produtos_Nao_Quimicos();
                $movimentoNaoQuimico->movimentos_n_ordem = $movimentos->id;
                $movimentoNaoQuimico->id_tipo_embalagem = $request->tipoEmbalagem;
                $movimentoNaoQuimico->id_cor = 1;
                $movimentoNaoQuimico->save();
                dd($movimentoNaoQuimico);
            }
        }



        //$produto->save();
    }

    public function load()
    {
        $textura = Textura_viscosidade::all();
        $familia = Produtos::all();
        $estadoFisico = Estado_Fisico::all();
        $tipoEmbalagem = Tipo_Embalagem::all();

        $date = Carbon::now();

        //dd($textura, $familia, $estadoFisico, $tipoEmbalagem);
        //dd($date);

        return view('registo-entrada', ["date" => $date, "familia" => $familia, "estadoFisico" => $estadoFisico, "tipoEmbalagem" => $tipoEmbalagem, "textura" => $textura]);
    }
}
