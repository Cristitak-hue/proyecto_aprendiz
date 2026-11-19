<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar Cita - Gestión Odontológica</title>
    <!-- Si usas Vite en Laravel -->
    @vite(['resources/css/estilos-asignar.css'])
    <!-- Si usas CSS tradicional en public/css/, descomenta la siguiente línea: -->
    <!-- <link rel="stylesheet" href="{{ asset('css/estilos.css') }}"> -->
</head>
<body>

    <div class="contenedor-principal">
        <div class="tarjeta-formulario">
            <h2>Asignar Nueva Cita</h2>
            <p class="subtitulo">Complete los datos del paciente para agendar su consulta odontológica.</p>

            <form action="{{ route('pacientes.store') }}" method="POST">
                @csrf

                <div class="grupo-campo">
                    <label for="documento">Número de Documento del Paciente:</label>
                    <input type="text" id="documento" name="documento" placeholder="Ej. 1020304050" required>
                </div>

                <div class="grupo-campo">
                    <label for="nombre">Nombre Completo del Paciente:</label>
                    <input type="text" id="nombre" name="nombre_completo" placeholder="Ej. Juan Pérez" required>
                </div>

                <div class="fila-doble">
                    <div class="grupo-campo">
                        <label for="fecha">Fecha de la Cita:</label>
                        <input type="date" id="fecha" name="fecha_cita" required>
                    </div>

                    <div class="grupo-campo">
                        <label for="hora">Hora:</label>
                        <input type="time" id="hora" name="hora_cita" required>
                    </div>
                </div>

                <div class="grupo-campo">
                    <label for="odontologo">Odontólogo Especialista:</label>
                    <select id="odontologo" name="odontologo" required>
                        <option value="" disabled selected>Seleccione un profesional...</option>
                        <option value="Dr. Carlos Mendoza">Dr. Carlos Mendoza - Odontología General</option>
                        <option value="Dra. Laura Gómez">Dra. Laura Gómez - Ortodoncia</option>
                        <option value="Dr. Andrés Ruiz">Dr. Andrés Ruiz - Endodoncia</option>
                    </select>
                </div>

                <div class="grupo-campo">
                    <label for="motivo">Motivo / Observaciones:</label>
                    <textarea id="motivo" name="motivo" rows="3" placeholder="Ej. Valoración general, limpieza dental, dolor en molar..."></textarea>
                </div>

                <div class="botones-accion">
                    <button type="submit" class="btn-guardar">Asignar Cita</button>
                    <a href="{{ url('/') }}" class="btn-cancelar">Volver al Inicio</a>
                </div>
            </form>
            <p><a href="{{ route('pacientes.index') }}">Ver citas registradas</a></p>
        </div>
    </div>

</body>
</html>