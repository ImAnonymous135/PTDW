<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registo_Saidas extends Model
{
    protected $table = 'registo_saidas';

    public function cliente(){
        return $this->belongsTo(Cliente::class,'id_cliente');
    }
    public function solicitante(){
        return $this->belongsTo(Operadores::class,'id_solicitante');
    }
    public function operadores(){
        return $this->belongsTo(Operadores::class,'id_operador');
    }
    public function embalagem(){
        return $this->belongsTo(Embalagem::class,'id_embalagem');
    }

}
