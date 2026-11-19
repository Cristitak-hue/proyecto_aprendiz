<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController; // Importamos tu controlador[cite: 16]

// Tus páginas iniciales
Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::view('/iniciar-sesion', 'iniciar-sesion')->name('iniciar-sesion');

// 1. Mostrar el formulario de asignar cita (tu vista asignar.blade.php)[cite: 16]
Route::view('/asignar-cita', 'asignar')->name('asignar-cita');

// 2. Guardar los datos del formulario en MySQL (Método POST)[cite: 16]
Route::post('/pacientes', [PacienteController::class, 'store'])->name('pacientes.store');

// 3. Consultar y listar todas las citas/pacientes registrados (Método GET)[cite: 16]
Route::get('/pacientes', [PacienteController::class, 'listar'])->name('pacientes.index');

// 4. Abrir el formulario para editar un registro específico por su ID[cite: 17]
Route::get('/pacientes/{id}/editar', [PacienteController::class, 'editar'])
    ->whereNumber('id')
    ->name('pacientes.editar');

// 5. Guardar los cambios actualizados de ese ID (Método PUT)
Route::put('/pacientes/{id}', [PacienteController::class, 'actualizar'])
    ->whereNumber('id')
    ->name('pacientes.actualizar');