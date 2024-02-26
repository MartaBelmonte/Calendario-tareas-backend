<?php

use App\Http\Controllers\TareaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/tareas', [TareaController::class, 'guardar']);
Route::get('/tareas', [TareaController::class, 'obtenerTareas']);
Route::delete('/tareas/{tarea}', [TareaController::class, 'eliminar']);

