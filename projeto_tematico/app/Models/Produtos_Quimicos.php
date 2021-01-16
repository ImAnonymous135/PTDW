<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos_Quimicos extends Produtos
{
    use HasFactory;

    protected $table = "produtos_quimicos";
}