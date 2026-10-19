<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home.index');
Route::view('/vehiculos', 'vehiculos.index');
Route::view('/servicios', 'servicios.index');
Route::view('/requisitos', 'requisitos.index');
Route::view('/nosotros', 'nosotros.index');
Route::view('/contacto', 'contacto.index');
