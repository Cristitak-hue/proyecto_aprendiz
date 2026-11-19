<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Citas</title>
</head>
<body>
    <h1>Citas Odontológicas Registradas</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Documento</th>
                <th>Paciente</th>
                <th>Fecha y Hora</th>
                <th>Odontólogo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pacientes as $paciente)
                <tr>
                    <td>{{ $paciente->id }}</td>
                    <td>{{ $paciente->documento }}</td>
                    <td>{{ $paciente->nombre_completo }}</td>
                    <td>{{ $paciente->fecha_cita }} - {{ $paciente->hora_cita }}</td>
                    <td>{{ $paciente->odontologo }}</td>
                    <td>
                        <!-- Enlace para editar usando el ID del paciente -->
                        <a href="{{ route('pacientes.editar', $paciente->id) }}">Editar</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Aún no hay citas registradas en el sistema.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <p><a href="{{ route('asignar-cita') }}">Registrar nueva cita</a></p>
</body>
</html>