<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operadores_Historico extends Model
{
    protected $table = 'operadores_historico';
    protected $fillable = ['nome_administrador','operador','data','operacao','observacoes'];
}
