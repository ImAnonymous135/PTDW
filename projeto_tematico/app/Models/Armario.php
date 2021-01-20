<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armario extends Model
{
    protected $table = 'armario';
    
    public function cliente(){
        return $this->belongsTo(Produtos::class,'id_cliente');
    }
}
