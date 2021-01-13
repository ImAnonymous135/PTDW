<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registo_Saidas extends Model
{
    protected $table = 'registo_saidas';

    public function produto(){
        return $this->belongsTo(Produtos::class,'id_produto');
    }
    public function cliente(){
        return $this->belongsTo(Cliente::class,'id_cliente');
    }
    public function fornecedor(){
        return $this->belongsTo(Fornecedor::class,'id_solicitante');
    }
    public function operadores(){
        return $this->belongsTo(Operadores::class,'id_operador');
    }

}
