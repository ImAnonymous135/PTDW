<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armario extends Model
{
    protected $table = 'armario';
<<<<<<< Updated upstream
    
=======
>>>>>>> Stashed changes
    public function cliente(){
        return $this->belongsTo(Cliente::class,'id_cliente');
    }
}