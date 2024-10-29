<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVista;

Route::get('/', [controladorVista::class, 'portada'])->name('rutaportada');
Route::get('/convertidor', [controladorVista::class, 'convertidor'])->name('rutaconvertidor');
Route::post('/convertir', [controladorVista::class, 'convertir'])->name('rutaconvertir');

