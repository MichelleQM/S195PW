<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class friturasControlador extends Controller
{
    public function formFrituras(){
        return view('formFrituras');
    }

    public function registroFrituras(Request $request){
        $fritura = $request->input('nombre');
        $sabor = $request->input('sabor');
        $peso = $request->input('peso');

        session()->flash('exito', 'Se registro con exito en BD la fritura: '.$fritura);
        return view('formFrituras');
    }
}
