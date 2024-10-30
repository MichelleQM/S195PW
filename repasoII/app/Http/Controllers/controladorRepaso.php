<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validacionLibros;

class controladorRepaso extends Controller
{
    public function inicio(){
        return view('portada');
    }

    public function registro(){
        return view('registroLibros');
    }

    public function guardarLibros(validacionLibros $peticion){
        $libro=$peticion->input('txttitulo');
        session()->flash('mensaje', 'El libro'.$libro.' ha sido registrado');
        return redirect()->route('rutaregistro');
    }
}
