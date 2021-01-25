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
use App\Models\Unidades;
use Carbon\Carbon;

class RegistarEntradaController extends Controller
{

    public function store(Request $request)
    {

        //dd($request);
        $operadores = Operadores::where('nome', $request->operador)->first();

        $query = Embalagem::query();
        $myArray = explode(',', $request->identificacaoEmbalagens);
        foreach ($myArray as $item) {
            $query->orWhere('designacao', $item);
        }
        $embalagens = $query->get();

        if($request->numeroEmbalagens !=count($myArray))
        {
            echo "<script>alert('Number of Packages must be the same as values in Package Identification!');</script>";
            exit();
        }

        $fornecedor = Fornecedor::where('designacao', $request->fornecedor)->first();

        //dd($fornecedor->id);
        //dd($embalagens[1]);
        //dd($operadores->id);

        $isQuimico = Produtos::where('id', $request->state)->first()->value('is_quimico');
        //dd($isQuimico);




        //dd($movimentos);
        foreach ($embalagens as $item) {
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
            $movimentos->observacoes = $request->observacao;
            $movimentos->timestamps = false;
            $movimentos->embalagemid = $item->id;
            //dd($movimentos);
            $movimentos->save();

            if ($isQuimico) {
                /*$movimentoQuimico = new Movimentos_Produtos_Quimicos();
                $movimentoQuimico->movimentos_n_ordem = $movimentos->n_ordem;
                $movimentoQuimico->id_estado_fisico = $request->estadoFisico;
                $movimentoQuimico->id_textura_viscosidade = $movimentos->texturaViscosidade;
                $$movimentoQuimico->timestamps=false;*/
                Movimentos_Produtos_Quimicos::insert([
                    'movimentos_n_ordem' => $movimentos->n_ordem,
                    'id_estado_fisico' => $request->estadoFisico,
                    'id_textura_viscosidade' => $movimentos->texturaViscosidade,
                    'id_cor' => 1,
                ]);

                /*$movimentoQuimico->id_cor =1;
                dd($movimentoQuimico);
                $movimentoQuimico->save();*/
            } else {
                //dd($request);
                /*$movimentoNaoQuimico = new Movimentos_Produtos_Nao_Quimicos();
                $movimentoNaoQuimico->movimentos_n_ordem = $movimentos->n_ordem;
                $movimentoNaoQuimico->id_tipo_embalagem = $request->tipoEmbalagem;
                $movimentoNaoQuimico->timestamps=false;
                $movimentoNaoQuimico->id_cor = 1;
                $movimentoNaoQuimico->save();
                dd($movimentoNaoQuimico);*/

                Movimentos_Produtos_Nao_Quimicos::insert([
                    'movimentos_n_ordem' => $movimentos->n_ordem,
                    'id_tipo_embalagem' => $request->tipoEmbalagem,
                    'id_cor' => 1,
                ]);
            }
        }

        //dd($movimentos);

        //$produto->save();
        return redirect('/entradas');
    }

    public function load()
    {
        $textura = Textura_viscosidade::all();
        $produto = Produtos::select('*')->join('unidades', 'unidades.id', '=', 'produtos.id_unidades' )->get();
        $estadoFisico = Estado_Fisico::all();
        $tipoEmbalagem = Tipo_Embalagem::all();
        $unidades = Unidades::all();
        //dd($produto);
        //dd($unidades);


        $date = Carbon::now();

        //dd($textura, $familia, $estadoFisico, $tipoEmbalagem);
        //dd($date);

        return view('registo-entrada', ['unidades' => $unidades, "date" => $date, "familia" => $produto, "estadoFisico" => $estadoFisico, "tipoEmbalagem" => $tipoEmbalagem, "textura" => $textura]);
    }
}
