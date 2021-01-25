<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;
use App\Models\Unidades;
use App\Models\Produtos_Nao_Quimicos;
use App\Models\Produtos_Quimicos;
use App\Models\Familia;

class NovoProduto extends Controller
{
    public function store(Request $request) {
        
        $request->validate([
            'selectTipo' => 'required',
            'designacao' => 'required',
            'stockMinimo' => 'required',
            'unidades' => 'required',
            'pesoMolecular' => 'required',
            'condicoesArmazenamento' => 'required',
            'formula' => 'required',
            'nCas' => 'required',
            'familia' => 'required',
        ]);
        
        $produto = new Produtos();
     
        $produto->timestamps=false;
        $produto->designacao = $request->designacao;
        $produto->stock_existente = 0;
        $produto->stock_minimo = $request->stockMinimo;
        if($request->selectTipo == 0){
            $produto->is_quimico = true;
        } else {
            $produto->is_quimico = false;
        }

        $unidades = Unidades::where('desginacao', '=', $request->unidades)->get();

        if(sizeof($unidades) > 0){
            $produto->id_unidades = $unidades[0]->id;
        } else {
            $unidade = new Unidades();
            $unidade->timestamps=false;
            $unidade->desginacao = $request->unidades;
            $unidade->save();

            $produto->id_unidades = $unidade->id;
        }

        $produto->save();

        if($produto->is_quimico){
            if(isset($request->ventilado)){
                $ventilado = true;
            }else{
                $ventilado = false;
            }
            Produtos_Quimicos::insert([
                'id_produto' => $produto->id,
                'formula' => $request->formula,
                'pMolecular' => $request->pesoMolecular,
                'casN' => $request->nCas,
                'condicaoArmazenamento' => $request->condicoesArmazenamento,
                'ventilado' => $ventilado,
            ]);
        }else { 

            $familias = Familia::where('designacao', '=', $request->familia)->get();

            if(sizeof($familias) > 0){
                Produtos_Nao_Quimicos::insert([
                    'id_produto' => $produto->id,
                    'id_familia' => $familias[0]->id
                ]);
            } else {
                $familia = new Familia();
                $familia->timestamps=false;
                $familia->designacao = $request->familia;
                $familia->save();

                Produtos_Nao_Quimicos::insert([
                    'id_produto' => $produto->id,
                    'id_familia' => $familia->id
                ]);
            }
        }

        return redirect('/produtos');
        //return back();

    }
}
