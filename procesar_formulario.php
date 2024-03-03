<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombre = $_POST['nombre'];
    $fechaInicio = $_POST['fecha_inicio'];
    $horaToma = $_POST['hora_toma'];
    $frecuencia = $_POST['frecuencia'];
    $notas = $_POST['notas'];

    // Conexión a la base de datos
    $bd_host = "127.0.0.1";
    $bd_user = "root";
    $bd_pass = "";
    $bd_name = "inventario";
    $conexion = new mysqli($bd_host, $bd_user, $bd_pass, $bd_name);
    if ($conexion->connect_errno) {
        die("Fallo en la conexión a la base de datos: (" . $conexion->connect_errno . ") " . $conexion->connect_error);
    }

    // Preparar la consulta SQL para insertar los datos en la tabla de recordatorios
    $query = "INSERT INTO recordatorios (nombre, fecha_inicio, hora_toma, frecuencia, notas) VALUES (?, ?, ?, ?, ?)";
    if ($stmt = $conexion->prepare($query)) {
        // Vincular parámetros
        $stmt->bind_param("sssss", $nombre, $fechaInicio, $horaToma, $frecuencia, $notas);
        
        // Ejecutar la consulta
        if ($stmt->execute()) {
            header("location: verrece.html");
        } else {
            echo "Error al guardar el recordatorio: " . $conexion->error;
        }

        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conexion->error;
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
}
?>
