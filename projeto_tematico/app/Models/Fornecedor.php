<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{

    protected $table = "fornecedor";
    public function registoSaidas(){
        return $this->hasMany(Registo_Saidas::class,'id');
    }
}
