<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Embalagem extends Model
{
    use HasFactory;
    
    protected $table = 'tipo_embalagems';
    
    public function movimentos()
    {
        return $this->hasMany(Movimentos_Produtos_Nao_Quimicos::class);
    }
}
