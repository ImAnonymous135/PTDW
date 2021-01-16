<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Embalagem extends Model
{
    protected $table = 'embalagem';
    use HasFactory;

    public function produto(){
        return $this->belongsTo(Produtos::class,'id_produtos');
    }
    public function prateleira(){
        return $this->belongsTo(Prateleira::class,'localizacao');
    }
    
}