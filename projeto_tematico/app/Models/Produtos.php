<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    public function registoSaidas(){
        return $this->hasMany(Registo_Saidas::class,'id');
    }
}
