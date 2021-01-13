<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentos_Produtos_Nao_Quimicos extends Model
{
    protected $table = 'movimentos_produtos_nao_quimicos';
 
    use HasFactory;
    
    public function movimento(){
        return $this->belongsTo(Movimentos::class,'movimentos_n_ordem','n_ordem');
    }

    public function tipo_embalagem(){
        return $this->belongsTo(Tipo_Embalagem::class,'id_tipo_embalagem');
    }

    public function cor(){
        return $this->belongsTo(Cor::class,'id_cor');
    }
}
