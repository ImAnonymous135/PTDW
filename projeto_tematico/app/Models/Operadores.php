<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operadores extends Model
{
    protected $table = 'operadores';

    public function cliente(){
        return $this->hasMany(Cliente::class,'id');
    }

    public function registoSaidas(){
        return $this->hasMany(Registo_Saidas::class,'id');
    }
}
