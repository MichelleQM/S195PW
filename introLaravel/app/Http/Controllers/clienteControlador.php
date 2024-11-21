<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class clienteControlador extends Controller
{
    public function home(){
        return view('inicio');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultaClientes=DB::table('clientes')->get();
        return view('clientes',[
            'clientes'=>$consultaClientes
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Se usa para ejecutar el insert en la base de datos
     */
    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            'nombre'=>$request->input('txtnombre'),
            'apellido'=>$request->input('txtapellido'),
            'correo'=>$request->input('txtcorreo'),
            'telefono'=>$request->input('txttelefono'),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        $usuario=$request->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaformulario');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    $consultaClientes = DB::table('clientes')->where('id', $id)->first();
    return view('rutaclientes', compact('consultaClientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorCliente $request, string $id)
    {
        DB::table('clientes')->where('id',$id)->update([
            'nombre'=>$request->input('txtnombre'),
            'apellido'=>$request->input('txtapellido'),
            'correo'=>$request->input('txtcorreo'),
            'telefono'=>$request->input('txttelefono'),
            'updated_at'=> Carbon::now(),
        ]);

        session()->flash('actualizado','Los datos se actualizaron correctamente');
        return to_route('rutaclientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('clientes')->where('id',$id)->delete();
        session()->flash('eliminar','Se elimino correctamente al cliente');
        return to_route('rutaclientes');
    }
}
