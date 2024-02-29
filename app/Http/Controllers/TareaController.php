<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea; 
use Carbon\Carbon;

class TareaController extends Controller
{
    public function guardar(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'fecha' => 'required|string'
        ]);

        $tarea = new Tarea();
        $tarea->titulo = $validatedData['titulo'];
        $tarea->fecha = new Carbon($validatedData['fecha']);

        $tarea->save();

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
