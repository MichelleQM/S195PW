<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;


class controladorVistas extends Controller
{
    public function formulario(){
        return view('formulario');
    }

    public function consulta(){
        return view('clientes');
    }

    public function procesarClientes(validadorCliente $peticion){
        //redireccion con mensaje en sesion 
        $usuario=$peticion->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);

        return to_route('rutaformulario');

        //redireccion usando la ruta 
        //return redirect('/');

        //redireccion con nombre d ela ruta 
        //return redirect()->route('rutaclientes');

        //redireccion con back
        //return back();

        //Redireccion con un parametro
        //id=[['usuario'=>1],['usuario'=>2]];

        //return view('formulario',compact('id'));

        //return 'Llego tu formulario al controlador';

        //imprimimos todo lo que viene en peticion 
        //return $peticion->all();

        //devuelve la ruta de la peticion 
        //return $peticion->path();

        //imprime la url completa de donde se hizo la peticion 
        //return $peticion->url();

        //muestra la ip origen de la peticion 
        //return $peticion->ip();

    }
}
