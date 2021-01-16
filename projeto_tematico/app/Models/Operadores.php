<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operadores extends Model
{
    protected $table = 'operadores';
    protected $fillable = ['solicitante_sala','nome','email','observacoes','data_criação','data_eliminação'];


    public function cliente(){
        return $this->hasOney(Cliente::class,'id');
    }

    public function registoSaidas(){
        return $this->hasMany(Registo_Saidas::class,'id');
    }

    public function perfil(){
        return $this->hasOne(Perfil::class,'id','id_perfil');
    }
    
}
