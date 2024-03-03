<?php
// Función para obtener los recordatorios de la toma de medicamentos
function obtenerRecordatorios()
{
    // Conexión a la base de datos
    $bd_host = "127.0.0.1";
    $bd_user = "root";
    $bd_pass = "";
    $bd_name = "inventario";
    $conexion = new mysqli($bd_host, $bd_user, $bd_pass, $bd_name);
    if ($conexion->connect_errno) {
        die("Fallo:(" . $conexion->mysqli_connect_errno() . ")" . $conexion->mysqli_connect_errno());
    }

    // Array para almacenar los recordatorios
    $recordatorios = array();

    // Consulta SQL para obtener los recordatorios
    $query = "SELECT nombre, fecha_inicio, hora_toma, frecuencia, notas FROM recordatorios";

    // Ejecutar la consulta
    $result = $conexion->query($query);

    // Verificar si hay resultados
    if ($result->num_rows > 0) {
        // Iterar sobre los resultados
        while ($row = $result->fetch_assoc()) {
            // Agregar el recordatorio al array de recordatorios
            $recordatorios[] = $row;
        }
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();

    // Devolver el array de recordatorios
    return $recordatorios;
}

// Ejecutar la función y obtener los recordatorios
$recordatorios = obtenerRecordatorios();
?>

<!-- Estilo para la tabla -->
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>

<!-- Mostrar los recordatorios en una tabla -->
<h3>Recordatorios de Toma de Medicamentos:</h3>

<?php if (empty($recordatorios)): ?>
    <p>No hay recordatorios de toma de medicamentos.</p>
<?php else: ?>
    <table>
        <tr>
            <th>Nombre del Medicamento</th>
            <th>Fecha de Inicio</th>
            <th>Hora de Toma</th>
            <th>Frecuencia</th>
            <th>Notas</th>
        </tr>
        <?php foreach ($recordatorios as $recordatorio): ?>
            <tr>
                <td><?php echo $recordatorio['nombre']; ?></td>
                <td><?php echo $recordatorio['fecha_inicio']; ?></td>
                <td><?php echo $recordatorio['hora_toma']; ?></td>
                <td><?php echo $recordatorio['frecuencia']; ?></td>
                <td><?php echo $recordatorio['notas']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
