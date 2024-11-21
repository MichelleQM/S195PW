<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteControlador;

//RUTAS PARA TRABAJAR CON CONTROALDOR CLIENTECONTROLADOR
Route::get('/cliente/create',[clienteControlador::class, 'create'])->name('rutaformulario');
Route::post('/cliente',[clienteControlador::class,'store'])->name('procesarclientes');
Route::get('/clientes',[clienteControlador::class,'index'])->name('rutaclientes');
Route::get('/',[clienteControlador::class,'home'])->name('rutainicio');

//RUTAS PARA UPDATE Y DELETE
Route::get('/cliente/{id}/edit', [clienteControlador::class, 'edit'])->name('rutaeditar');
Route::put('/cliente/{id}', [clienteControlador::class, 'update'])->name('rutaactualizar');
Route::delete('/cliente/{id}', [clienteControlador::class, 'destroy'])->name('rutaeliminar');



Route::view('/componentes', 'componentes')->name('rutacomponentes'); 