<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentos extends Model
{
    use HasFactory;

    public function movimentos(){
        return $this->hasMany(Movimentos_Produtos_Nao_Quimicos::class,'n_ordem');
    }

    public function fornecedor(){
        return $this->belongsTo(Fornecedor::class,'fornecedorid');
    }

    public function operador(){
        return $this->belongsTo(Operador::class,'operadorid');
    }

    public function embalagem(){
        return $this->belongsTo(Embalagem::class,'embalagemid');
    }
}
