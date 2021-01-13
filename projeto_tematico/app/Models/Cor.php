<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cor extends Model
{
    use HasFactory;

    protected $table = 'cor';

    public function movimento()
    {
        return $this->hasMany('App\Model\Movimentos_Produtos_Nao_Quimicos');
    }
}
