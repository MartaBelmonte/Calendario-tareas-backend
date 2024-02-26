<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/tareas', [TareaController::class, 'guardar']);

Route::get('/tareas', [TareaController::class, 'obtenerTareas']);

Route::delete('/tareas/{tarea}', [TareaController::class, 'eliminar']);
