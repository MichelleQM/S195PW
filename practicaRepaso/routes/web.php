<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVista;


Route::get('/', [controladorVista::class, 'portada'])->name('rutaportada');



