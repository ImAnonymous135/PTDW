<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cliente extends Model
{   public $timestamps=false;
    protected $table = 'cliente';
    protected $fillable = ['designacao','id_responsavel','observacoes'];

    use SoftDeletes;

    public function operador(){
        return $this->belongsTo(Operadores::class,'id_responsavel');
    }
    public function registoSaidas(){
        return $this->hasMany(Registo_Saidas::class,'id');
    }
    public function solicitantes(){
        return $this->hasMany(Operadores::class,'solicitante_sala');
    }
}
