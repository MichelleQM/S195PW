<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function formulario(){
        return view('formulario');
    }

    public function consulta(){
        return view('clientes');
    }

    public function procesarClientes(Request $peticion){
        //return 'Llego tu formulario al controlador';

        //imprimimos todo lo que viene en peticion 
        //return $peticion->all();

        //devuelve la ruta de la peticion 
        //return $peticion->path();

        //imprime la url completa de donde se hizo la peticion 
        return $peticion->url();

        //muestra la ip origen de la peticion 
        //return $peticion->ip();

    }
}
