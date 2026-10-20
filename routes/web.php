<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/vehiculos', [VehicleController::class, 'index']);
Route::get('/contacto', [ContactController::class, 'create']);
Route::post('/contacto', [ContactController::class, 'store']);

Route::view('/servicios', 'servicios.index');
Route::view('/requisitos', 'requisitos.index');
Route::view('/nosotros', 'nosotros.index');
