<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVista extends Controller
{
    public function portada(){
        return view('portada');
    }
}
