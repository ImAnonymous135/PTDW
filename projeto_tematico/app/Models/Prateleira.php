<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prateleira extends Model
{
    protected $table = "prateleiras";

    public function armario(){
        return $this->belongsTo(Armario::class,'id_armario');
    }

    

}
