<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

<<<<<<< HEAD
    public function registoSaidas(){
        return $this->hasMany(Registo_Saidas::class,'id');
    }

    public function unidades(){
        return $this->hasOne(Unidades::class, 'id', 'id_unidades');
    }

    public function quimico(){
        return $this->hasOne(Produtos_Quimicos::class,'id_produto');
    }

    public function nao_quimico(){
        return $this->hasOne(Produtos_Nao_Quimicos::class,'id_produto');
    }
}
=======
    
}
>>>>>>> main
