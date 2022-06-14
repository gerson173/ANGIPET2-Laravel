<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\productoController;
use App\Http\Controllers\productos_inventarioController;
use App\Http\Controllers\servicioController;
use App\Http\Controllers\servicios_inventarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/servicios', [servicioController::class, 'index']);
Route::get('/servicios/create', [servicioController::class, 'create']);
Route::post('/servicios/store', [servicioController::class, 'store']);
Route::get('/servicios/{id}/edit', [servicioController::class, 'edit']);
Route::put('/servicios/{id}', [servicioController::class, 'update']);
Route::delete('/servicios/{id}', [servicioController::class, 'destroy']);



Route::get('/productos', [productoController::class, 'index']);
Route::get('/productos/create', [productoController::class, 'create']);
Route::post('/productos/store', [productoController::class, 'store']);
Route::get('/productos/{id}/edit', [productoController::class, 'edit']);
Route::put('/productos/{id}', [productoController::class, 'update']);
Route::delete('/productos/{id}', [productoController::class, 'destroy']);


