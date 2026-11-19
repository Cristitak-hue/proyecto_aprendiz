<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;//Se importa el modelo

class PacienteController extends Controller
{
    //1. mostrar listado del mas nuevo al mas viejo
    public function listar()
    {
        $pacientes = Paciente::orderByDesc('id')->get();
        return view('pacientes.index', compact('pacientes'));
    }
    //2. recibir y guardar los datos del formulario
    public function store(Request $request)
    {
        $datos = $request->validate([
            'documento' => ['required', 'string', 'max:20'],
            'nombre_completo' => ['required', 'string', 'max:100'],
            'fecha_cita' => ['required', 'date'],
            'hora_cita' => ['required'],
            'odontologo' => ['required', 'string'],
            'motivo' => ['nullable', 'string'],
        ]);

        Paciente::create($datos);
        return redirect()->route('pacientes.index');
    }
    public function editar($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('pacientes.editar', compact('paciente'));
    }

    public function actualizar(Request $request, $id)
    {
        $datos = $request->validate([
            'documento' => ['required', 'string', 'max:20'],
            'nombre_completo' => ['required', 'string', 'max:100'],
            'fecha_cita' => ['required', 'date'],
            'hora_cita' => ['required'],
            'odontologo' => ['required', 'string'],
            'motivo' => ['nullable', 'string'],
        ]);

        $paciente = Paciente::findOrFail($id);
        $paciente->update($datos);

        return redirect()->route('pacientes.index');
    }
}
