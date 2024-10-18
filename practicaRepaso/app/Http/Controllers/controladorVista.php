<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVista extends Controller
{
    public function portada(){
        return view('portada');
    }

    public function convertidor(){
        return view('convertidor');
    }

    public function convertir(Request $request){
        $cantidad = $request->input('cantidad');
        $inicial = $request->input('inicial');
        $final = $request->input('final');

        $conversion = $this->uConvertidas($cantidad, $inicial, $final);
        return view('convertidor',['cantidad'=>$cantidad,'inicial'=>$inicial,'final'=>$final,'conversion'=>$conversion]);
    }

    private function uConvertidas($cantidad, $inicial, $final){
    $resultado = 0;

    //para mb a gb
    if ($inicial == 'MB' && $final == 'GB') {
        $resultado = $cantidad / 1024;
    }
    //para gb a mb
    elseif ($inicial == 'GB' && $final == 'MB') {
        $resultado = $cantidad * 1024;
    }
    //para gb a tb
    elseif ($inicial == 'GB' && $final == 'TB') {
        $resultado = $cantidad / 1024;
    }
    //para tb a gb
    elseif ($inicial == 'TB' && $final == 'GB') {
        $resultado = $cantidad * 1024;
    }
    //para mb a tb
    elseif ($inicial == 'MB' && $final == 'TB') {
        $resultado = $cantidad / (1024 * 1024);
    }
    //para tb a mb
    elseif ($inicial == 'TB' && $final == 'MB') {
        $resultado = $cantidad * (1024 * 1024);
    }
    else{
        return "No se puede realizar la conversión";
    }
    return $resultado;
}
}
