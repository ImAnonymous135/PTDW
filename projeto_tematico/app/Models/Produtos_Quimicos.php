<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos_Quimicos extends Produtos
{
    use HasFactory;

    protected $table = "produtos_quimicos";

    public function quimico_pictogramas(){
        return $this->hasMany(Produtos_Quimicos_Pictogramas::class, 'id_produtos_quimicos','id_produto');
    }
}