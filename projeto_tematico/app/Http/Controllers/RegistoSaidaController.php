<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistoSaidaController extends Controller
{

    public function load()
    {
        return view('registo-saida');
    }
}
