<?php
// Conexión a la base de datos (asumiendo que ya tienes la conexión configurada)
$conexion = new mysqli("127.0.0.1", "usuario", "contraseña", "inventario");

// Verificar la conexión
if ($conexion->connect_errno) {
    die("Error al conectar con la base de datos: " . $conexion->connect_error);
}

// Obtener la fecha y hora actual
$fecha_actual = date("Y-m-d");
$hora_actual = date("H:i:s");

// Consulta SQL para obtener los recordatorios pendientes
$query = "SELECT * FROM recordatorios WHERE fecha_inicio <= '$fecha_actual' AND hora_toma <= '$hora_actual'";
$resultado = $conexion->query($query);

// Variable para almacenar el HTML de los recordatorios
$html_recordatorios = '';

// Verificar si hay recordatorios pendientes
if ($resultado->num_rows > 0) {
    // Iterar sobre los recordatorios pendientes
    while ($row = $resultado->fetch_assoc()) {
        // Construir el HTML para cada recordatorio
        $html_recordatorios .= '
        <a href="#" class="Notification">
            <div class="Notification-icon"><i class="zmdi zmdi-mail-send bg-warning"></i></div>
            <div class="Notification-text">
                <p>
                    <i class="zmdi zmdi-circle"></i>
                    <strong>' . $row['nombre'] . '</strong> 
                    <br>
                    <small>' . $row['hora_toma'] . '</small>
                </p>
            </div>
            <div class="mdl-tooltip mdl-tooltip--left" for="notification-recordatorio-' . $row['id'] . '">Recordatorio de Toma</div>
        </a>';
    }
} else {
    $html_recordatorios = '<p>No hay recordatorios pendientes.</p>';
}

// Cerrar la conexión a la base de datos
$conexion->close();

// Mostrar los recordatorios en el área de notificaciones
echo '<section class="NotificationArea">' .
        '<div class="full-width text-center NotificationArea-title tittles">Recordatorios<i class="zmdi zmdi-close btn-Notification"></i></div>' .
        $html_recordatorios .
    '</section>';
?>
