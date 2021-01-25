<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos_Quimicos_Pictogramas extends Model
{
    use HasFactory;

    protected $table = 'produtos_quimicos_pictogramas';

    public function pictogramas(){
        return $this->hasOne(Pictogramas::class, 'id', 'id_pictogramas');
    }
}