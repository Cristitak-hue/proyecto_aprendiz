<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';

    protected $fillable = [
        'documento',
        'nombre_completo',
        'fecha_cita',
        'hora_cita',
        'odontologo',
        'motivo'
    ];
}
