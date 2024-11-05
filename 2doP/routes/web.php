<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\friturasControlador;

// Route::get('/', function () { return view('form');});

Route::get('/',[friturasControlador::class,'formFrituras'])->name('rutaformFrituras');
Route::post('/registro',[friturasControlador::class,'registroFrituras'])->name('rutaregistroFrituras');

