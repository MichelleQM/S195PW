<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorRepaso;

Route::get('/', [controladorRepaso::class, 'inicio'])->name('rutainicio');
Route::get('/registroLibros', [controladorRepaso::class, 'registro'])->name('rutaregistro');

Route::post('/guardarLibros', [controladorRepaso::class, 'guardarLibros'])->name('rutaguardarLibros');