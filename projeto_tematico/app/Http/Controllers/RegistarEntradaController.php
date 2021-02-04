<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
use App\Models\Prateleira;
use App\Models\Cliente;
use App\Models\Armario;
use Carbon\Carbon;

class RegistarEntradaController extends Controller
{

    public function validateEntrada(){
        request()->validate([
            'state' => 'required',
            'dataEntrada' => 'required',
            'numeroEmbalagens' => 'required',
            'tipoEmbalagem' => 'required',
            'capacidadeEmbalagem' => 'required',
            'tipo' => 'required',
            'sala' => 'required',
            'prateleira' => 'required',
            'armario' => 'required',
            'pesoBruto' => 'required',
            'marca' => 'required',
            'referencia' => 'required',
            'preco' => 'required',
            'taxa' => 'required',
            'estadoFisico' => 'required',
            'texturaViscosidade' => 'required',
            'operador' => 'required',
            'fornecedor' => 'required',
        ]);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $this->validateEntrada();
        
        $tempArray = explode('.', $request->state);

        $produto = Produtos::where('designacao', $tempArray[1])->first();
        //dd($produto);
        $operadores = Operadores::where('nome', $request->operador)->first();

        $query = Embalagem::query();

        $fornecedor = Fornecedor::where('designacao', $request->fornecedor)->first();

        //////////////////////////////
        $room = Cliente::where('designacao', $request->sala)->first();

        if (!$room) {
            echo "<script type='text/javascript'>alert('Cliente não existe');</script>";
            exit();
        }

        $armario = Armario::where('designacao', $request->armario)->where('id_cliente', $room->id)->first();

        if (!$armario) {
            $armario = new Armario();
            $armario->designacao = $request->armario;
            $armario->id_cliente = $room->id;
            $armario->timestamps = false;
            $armario->save();
        }

        $prateleira = Prateleira::where('designacao', $request->prateleira)->where('id_armario', $armario->id)->first();
        // dd( $request->prateleira, $armario->id, $prateleira, !$prateleira);
        if (!$prateleira) {
            $prateleira = new Prateleira();
            $prateleira->designacao = $request->prateleira;
            $prateleira->id_armario = $armario->id;
            $prateleira->timestamps = false;
            $prateleira->save();
        }



        $embalagens = Embalagem::where('id_produtos', $produto->id)->latest('designacao')->first();
        if ($embalagens) {
            $e = ($embalagens->designacao);
            for ($i = 1; $i <= $request->numeroEmbalagens; $i++) {
                $novaEmbalagem = new Embalagem();
                $novaEmbalagem->designacao = ($e + $i);
                $novaEmbalagem->id_produtos = $produto->id;
                $novaEmbalagem->id_tipo_embalagem = $request->tipoEmbalagem;
                $novaEmbalagem->localizacao = $prateleira->id;
                $novaEmbalagem->capacidade_embalagem = $request->capacidadeEmbalagem . '.' . $request->tipo;
                $novaEmbalagem->timestamps = false;
                $novaEmbalagem->save();
                $embalagensFinais[$i - 1] = $novaEmbalagem;


                /* $embalagens[$i - 1] =  Embalagem::insert([
                    'designacao' => ($e + $i),
                    'id_produtos' => $produto->id,
                    'id_tipo_embalagem' => $request->tipoEmbalagem,
                    'localizacao' => $prateleira->id,
                    'capacidade_embalagem' => $request->capacidadeEmbalagem . '.' . $request->tipo,
                ]);*/
            }
        } else {
            for ($i = 1; $i <= $request->numeroEmbalagens; $i++) {
                $novaEmbalagem = new Embalagem();
                $novaEmbalagem->designacao = ($i);
                $novaEmbalagem->id_produtos = $produto->id;
                $novaEmbalagem->id_tipo_embalagem = $request->tipoEmbalagem;
                $novaEmbalagem->localizacao = $prateleira->id;
                $novaEmbalagem->capacidade_embalagem = $request->capacidadeEmbalagem;
                $novaEmbalagem->timestamps = false;
                $novaEmbalagem->save();
                $embalagensFinais[$i - 1] = $novaEmbalagem;

                /*$embalagens[$i - 1] =  Embalagem::insert([
                    'designacao' => $i,
                    'id_produtos' => $produto->id,
                    'id_tipo_embalagem' => $request->tipoEmbalagem,
                    'localizacao' => $prateleira->id,
                    'capacidade_embalagem' => $request->capacidadeEmbalagem . '.' . $request->tipo,
                ]);*/
            }
        }
        //dd($embalagensFinais, $embalagensFinais[0], $embalagensFinais[1]);

        //dd($fornecedor->id);
        //dd($embalagens[1]);
        //dd($operadores->id);

        //$isQuimico = Produtos::where('id', $tempArray[1])->first()->value('is_quimico');
        $isQuimico = $produto->is_quimico;
        //dd($isQuimico);




        //dd($movimentos);
        foreach ($embalagensFinais as $item) {
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
                    'id_textura_viscosidade' => $request->texturaViscosidade,
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

        return redirect('/entradas');
    }

    public function load($id, Request $request)
    {
        App::setLocale($request->session()->get('lang'));
        $produto[0] = Produtos::find($id);

        if (!isset($produto[0])) {
            abort(404);
            dd($produto);
        }

        $salas = Cliente::all();
        $operadores = Operadores::all();
        $fornecedores = Fornecedor::all();
        $embalagens = $this->embalagens($id);

        //dd('produto',$produto, 'id',$id, $id == 'null');
        $textura = Textura_viscosidade::all();
        $estadoFisico = Estado_Fisico::all();
        $tipoEmbalagem = Tipo_Embalagem::all();
        $unidades = Unidades::all();
        $date = Carbon::now();

        //dd($textura, $familia, $estadoFisico, $tipoEmbalagem);
        return view('registo-entrada', ['fornecedores' => $fornecedores,'operadores' => $operadores,'salas' => $salas, 'embalagens' => $embalagens, 'unidades' => $unidades, "date" => $date, "produto" => $produto, "estadoFisico" => $estadoFisico, "tipoEmbalagem" => $tipoEmbalagem, "textura" => $textura]);
    }

    public function show(Request $request)
    {
        App::setLocale($request->session()->get('lang'));
        //dd($id);
        //dd('is null');
        $produto = Produtos::select('*')->join('unidades', 'unidades.id', '=', 'produtos.id_unidades')->get();
        $embalagens = null;

        //dd('produto',$produto, 'id',$id, $id == 'null');
        $textura = Textura_viscosidade::all();
        $estadoFisico = Estado_Fisico::all();
        $tipoEmbalagem = Tipo_Embalagem::all();
        $unidades = Unidades::all();
        $date = Carbon::now();

        $salas = Cliente::all();
        $operadores = Operadores::all();
        $fornecedores = Fornecedor::all();

        //dd($textura, $familia, $estadoFisico, $tipoEmbalagem);
        //dd($date);

        return view('registo-entrada', ['fornecedores' => $fornecedores,'operadores' => $operadores,'salas' => $salas, 'embalagens' => $embalagens, 'unidades' => $unidades, "date" => $date, "produto" => $produto, "estadoFisico" => $estadoFisico, "tipoEmbalagem" => $tipoEmbalagem, "textura" => $textura]);
    }

    private function embalagens($id)
    {
        //dd($id);
        $movimentos = DB::table('embalagem')->select('movimentos.*', 'embalagem.capacidade_embalagem AS capacidade', 'prateleiras.designacao AS prateleira', 'armario.designacao AS armario', 'cliente.designacao AS cliente')->where('id_produtos', $id)->join('movimentos', 'embalagem.id', '=', 'embalagemid')->join('prateleiras', 'embalagem.localizacao', '=', 'prateleiras.id')->join('armario', 'prateleiras.id_armario', '=', 'armario.id')->join('cliente', 'armario.id_cliente', '=', 'cliente.id')->get();

        return $movimentos;
    }
}
