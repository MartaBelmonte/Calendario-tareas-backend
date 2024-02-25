<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    // Nombre de la tabla en la base de datos 
    protected $table = 'tareas';

    // Nombre de los campos 
    protected $fillable = ['titulo', 'fecha'];
}

