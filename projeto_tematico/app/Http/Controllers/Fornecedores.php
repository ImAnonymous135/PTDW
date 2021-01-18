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
        request()->validateFornecedor();
        $fornecedor = Fornecedor::find($id);
        $fornecedor = new Fornecedor(request(['designacao','morada','localidade','codigo_postal','telefone','nif','email','vendedor_1','telemovel_1','email_1','vendedor_2','telemovel_2','email_2','condicoes_especiais','observacoes']));
        $fornecedor->timestamps=false;
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
