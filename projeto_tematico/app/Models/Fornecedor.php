<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    public $timestamps=false;
    protected $fillable = ['designacao','morada','localidade','codigo_postal','telefone','nif','email','vendedor_1','telemovel_1','email_1','vendedor_2','telemovel_2','email_2','condicoes_especiais','observacoes'];
    
    protected $table = "fornecedor";

    use SoftDeletes;

    public function registoSaidas(){
        return $this->hasMany(Registo_Saidas::class,'id');
    }
}