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
            $produtoQ = new Produtos_Quimicos();
            $produtoQ->timestamps=false;
            $produtoQ->id = $produto->id;
            $produtoQ->formula = $request->formula;
            $produtoQ->pMolecular = $request->pesoMolecular;
            $produtoQ->casN = $request->nCas;
            $produtoQ->condicaoArmazenamento = $request->condicoesArmazenamento;
            if(isset($request->ventilado)){
                $ventilado = true;
            }else{
                $ventilado = false;
            }
            Produtos_Quimicos()::insert([
                
            ])
        }else {
            $produtoNQ = new Produtos_Nao_Quimicos();
            $produtoNQ->timestamps=false;
            $produtoNQ->id = $produto->id; 

            $familias = Familia::where('designacao', '=', $request->familia)->get();

            if(sizeof($familias) > 0){
                $produtoNQ->id_familia = $familias[0]->id;
            } else {
                $familia = new Familia();
                $familia->timestamps=false;
                $familia->designacao = $request->familia;
                $familia->save();

                $produtoNQ->id_familia = $familia->id;
            }

            $produtoNQ->save();
        }

        return redirect('/produtos');
        //return back();

    }
}
