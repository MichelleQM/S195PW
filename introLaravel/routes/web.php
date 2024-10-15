<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

//RUTAS PARA TRABAJAR CON CONTROLADOR 
Route::get('/', [controladorVistas::class, 'home'])->name('rutainicio');
Route::get('/formulario', [controladorVistas::class, 'formulario'])->name('rutaformulario');
Route::get('/clientes', [controladorVistas::class, 'consulta'])->name('rutaclientes');

Route :: post ('/enviar', [controladorVistas::class,'procesarClientes'])->name('procesarclientes');

// Route::get('/', function () {
//     return view('welcome');
// });

/* Route::view('/', 'inicio')->name('rutainicio');

Route::view('/formulario', 'formulario')->name('rutaformulario');

Route::view('/clientes', 'clientes')->name('rutaclientes');*/

Route::view('/componentes', 'componentes')->name('rutacomponentes'); 