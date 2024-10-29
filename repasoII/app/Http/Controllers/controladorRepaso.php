<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorRepaso extends Controller
{
    public function inicio(){
        return view('portada');
    }

    public function registro(){
        return view('registroLibros');
    }
}
