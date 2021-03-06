<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Operadores extends Model
{
    public $timestamps=false;
    protected $table = 'operadores';
    protected $fillable = ['solicitante_sala','id_perfil','nome','email','observacoes','data_criação','data_eliminação'];

    use SoftDeletes;

    public function cliente(){
        return $this->hasMany(Cliente::class,'id');
    }

    public function registoSaidas(){
        return $this->hasMany(Registo_Saidas::class,'id');
    }

    public function perfil(){
        return $this->hasOne(Perfil::class,'id','id_perfil');
    }

    
}
