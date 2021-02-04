<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use DB;
use Illuminate\Http\Request;
use App\Models\Produtos;
use App\Models\Cliente;
use App\Models\Fornecedor;
use App\Models\Operadores;
use App\Models\Registo_Saidas;

class HomeController extends Controller
{
    public function show(Request $request) {
        
        App::setLocale($request->session()->get('lang'));
        return view('home', ['cards' => $this->getCards(), 'produtos' => $this->getLowStockProducts(), 'movimentos' => $this->getUserTransactions(1)]);
    }
    
    public function getCards()
    {
        return $cards = ['produtos' => Produtos::select('*')->count(),
        'clientes' => Cliente::select('*')->count(),
        'fornecedores' => Fornecedor::select('*')->count(),
        'operadores' => Operadores::select('*')->count()];
    }

    public function getLowStockProducts()
    {
        return $produtos = Produtos::whereColumn('stock_existente', '<', 'stock_minimo')->get();
    }

    public function getUserTransactions($id)
    {
        $movimentos = Registo_Saidas::select('registo_saidas.data','embalagem.capacidade_embalagem AS capacidade',
         'produtos.designacao AS produto', 'prateleiras.designacao AS prateleira', 'armario.designacao AS armario',
         'cliente.designacao as sala')
        ->join('embalagem', 'embalagemid', '=', 'embalagem.id')
        ->join('produtos', 'id_produtos', '=', 'produtos.id')
        ->join('prateleiras', 'embalagem.localizacao', '=', 'prateleiras.id')
        ->join('armario', 'prateleiras.id_armario', '=', 'armario.id')
        ->join('cliente', 'armario.id', '=', 'cliente.id')
        ->where('id_operador', '=', $id)
        ->get();

        
        return $movimentos;
    }

}