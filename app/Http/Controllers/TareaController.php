<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea; 
use Carbon\Carbon;

class TareaController extends Controller
{
    public function guardar(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'fecha' => 'required|string'
        ]);

        // Crear una nueva instancia de la tarea
        $tarea = new Tarea();
        $tarea->titulo = $validatedData['titulo'];
        $tarea->fecha = new Carbon($validatedData['fecha']);

        // Guardar la tarea en la base de datos
        $tarea->save();

        // Devuelve una respuesta, mensaje JSON
        return response()->json(['mensaje' => 'Tarea guardada:' . $request->titulo], 200);
    }
    
    public function obtenerTareas()
    {
        $tareas = Tarea::all();
        return response()->json($tareas);
    }

    public function eliminar(Tarea $tarea) 
    {
        $tarea->delete();
        return response()->json(['mensaje' => 'Tarea eliminada con éxito'], 200);
    }
}
