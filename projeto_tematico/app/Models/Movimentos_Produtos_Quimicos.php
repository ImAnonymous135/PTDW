<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movimentos;

class Movimentos_Produtos_Quimicos extends Model
{
    protected $table = 'movimentos_produtos_quimicos';
    
    use HasFactory;

    public function movimento(){
        return $this->belongsTo(Movimentos::class,'movimentos_n_ordem','n_ordem');
    }

    public function estado_fisico(){
        return $this->belongsTo(Estado_Fisico::class,'id_estado_fisico');
    }

    public function textura_viscosidade(){
        return $this->belongsTo(textura_viscosidade::class,'id_textura_viscosidade');
    }

}
