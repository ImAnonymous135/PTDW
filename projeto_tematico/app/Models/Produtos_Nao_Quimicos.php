<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos_Nao_Quimicos extends Produtos
{
    use HasFactory;

    protected $table = "produtos_nao_quimicos";
    //public $familia_nome = $this->familia->designacao;

    public function familia(){
        return $this->hasOne(Familia::class,'id', 'id_familia');
    }
}