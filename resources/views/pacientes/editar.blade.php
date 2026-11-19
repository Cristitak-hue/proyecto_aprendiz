<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Cita</title>
</head>
<body>
    <h1>Editar Cita #{{ $paciente->id }}</h1>

    <form action="{{ route('pacientes.actualizar', $paciente->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Indica a Laravel que es una actualización -->

        <label>Número de Documento:</label>
        <input type="text" name="documento" value="{{ old('documento', $paciente->documento) }}" required>

        <label>Nombre Completo:</label>
        <input type="text" name="nombre_completo" value="{{ old('nombre_completo', $paciente->nombre_completo) }}" required>

        <label>Fecha de la Cita:</label>
        <input type="date" name="fecha_cita" value="{{ old('fecha_cita', $paciente->fecha_cita) }}" required>

        <label>Hora:</label>
        <input type="time" name="hora_cita" value="{{ old('hora_cita', $paciente->hora_cita) }}" required>

        <label>Odontólogo:</label>
        <input type="text" name="odontologo" value="{{ old('odontologo', $paciente->odontologo) }}" required>

        <label>Motivo:</label>
        <textarea name="motivo">{{ old('motivo', $paciente->motivo) }}</textarea>

        <button type="submit">Guardar Cambios</button>
    </form>

    <p><a href="{{ route('pacientes.index') }}">Volver al listado</a></p>
</body>
</html>