<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class Fornecedores extends Controller
{
    public function show()
    {
        
        
        $fornecedores = Fornecedor::all();
        return view('fornecedores',['fornecedores'=>$fornecedores],['fornecedorInfo'=>[]]);
    }

    public function create()
    {
        
        return view('adicionar-fornecedor');
    }

    public function store(Request $request)
    {
        $this->validateFornecedor();
        $fornecedor = new Fornecedor(request(['designacao','morada','localidade','codigo_postal','telefone','nif','email','vendedor_1','telemovel_1','email_1','vendedor_2','telemovel_2','email_2','condicoes_especiais','observacoes']));
        $fornecedor->timestamps=false;
        $fornecedor->save();

        return redirect('/fornecedores');    
    }

    public function update($id)
    {
        $this->validateFornecedor();
        $fornecedor = Fornecedor::find($id);
        $fornecedor->designacao = request()->designacao;
        $fornecedor->morada = request()->morada;
        $fornecedor->localidade = request()->localidade;
        $fornecedor->codigo_postal = request()->codigo_postal;
        $fornecedor->telefone = request()->telefone;
        $fornecedor->nif = request()->nif;
        $fornecedor->email = request()->email;
        $fornecedor->vendedor_1 = request()->vendedor_1;
        $fornecedor->telemovel_1 = request()->telemovel_1;
        $fornecedor->email_1 = request()->email_1;
        $fornecedor->vendedor_2 = request()->vendedor_2;
        $fornecedor->telemovel_2 = request()->telemovel_2;
        $fornecedor->email_2 = request()->email_2;
        $fornecedor->condicoes_especiais = request()->condicoes_especiais;
        $fornecedor->observacoes = request()->observacoes;
        $fornecedor->save();

        return redirect('/fornecedores'); 
    }

    public function destroy($id)
    {
        Fornecedor::find($id)->delete();
        return redirect('/fornecedores');
    }

    public function validateFornecedor(){
        request()->validate([
            'designacao' => 'required',
            'morada' => 'required',
            'localidade' => 'required',
            'codigo_postal' => 'required',
            'telefone' => 'required',
            'nif' => 'required',
            'email' => 'nullable|email',
            'email_1' => 'nullable|email',
            'email_2' => 'nullable|email'
        ]);
        
    }
}
