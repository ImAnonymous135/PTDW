<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{   
    protected $table = 'cliente';
    //protected $fillable = ['designacao','nomeResponsavel','emailResponsavel','nomeSolicitante','emailSolicitante','observacoes'];

    public function operador(){
        return $this->belongsTo(Operadores::class,'id_responsavel');
    }
    public function registoSaidas(){
        return $this->hasMany(Registo_Saidas::class,'id');
    }
}
