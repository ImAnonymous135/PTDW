<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
<<<<<<< Updated upstream
    protected $table = 'fornecedor';

    use HasFactory;
=======
    protected $table = "fornecedor";
    public function registoSaidas(){
        return $this->hasMany(Registo_Saidas::class,'id');
    }
>>>>>>> Stashed changes
}
