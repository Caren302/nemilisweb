<?php
$bd_host = "127.0.0.1";
$bd_user = "root";
$bd_pass = "";
$bd_name = "inventario";

$nombre = htmlspecialchars($_POST["nombre"]);
$presentacion = htmlspecialchars($_POST["presentacion"]);
$categoria = htmlspecialchars($_POST["categoria"]);
$lote = htmlspecialchars($_POST["lote"]);
$fecha = htmlspecialchars($_POST["fecha"]);
$cantidad = htmlspecialchars($_POST["cantidad"]);

$conectar = mysqli_connect($bd_host, $bd_user, $bd_pass, $bd_name, 3306);

if (mysqli_connect_errno()) {
    printf("ERROR: %u - %s", mysqli_connect_errno(), mysqli_connect_error());
    exit();
}

mysqli_set_charset($conectar, "utf8");

// Verificar si hay suficientes registros disponibles
$consulta_disponibles = "SELECT COUNT(*) as total_registros FROM medicamentos";
$resultado_disponibles = mysqli_query($conectar, $consulta_disponibles);

if ($fila_disponibles = mysqli_fetch_assoc($resultado_disponibles)) {
    $total_registros = $fila_disponibles['total_registros'];

    if ($total_registros > 0) {
        // Hay registros disponibles, proceder con la inserción
        $consulta_existencia = "SELECT * FROM medicamentos WHERE nombre = '$nombre'";
        $resultado_existencia = mysqli_query($conectar, $consulta_existencia);

        if (mysqli_num_rows($resultado_existencia) > 0) {
            // Producto ya existe, actualizar la cantidad
            $fila_existencia = mysqli_fetch_assoc($resultado_existencia);
            $nueva_cantidad = $fila_existencia['cantidad'] + $cantidad;

            $actualizar = "UPDATE medicamentos SET cantidad = $nueva_cantidad WHERE nombre = '$nombre'";
            if ($resultado_actualizar = mysqli_query($conectar, $actualizar)) {
                echo "Registro actualizado exitosamente.";
                // Descuenta la cantidad de registros
                $descuento_registros = "DELETE FROM medicamentos ORDER BY id LIMIT 1";
                mysqli_query($conectar, $descuento_registros);
            } else {
                printf("ERROR - Al actualizar el registro: %s", mysqli_error($conectar));
            }
        } else {
            // Producto no existe, insertar un nuevo registro
            $insertar = "INSERT INTO medicamentos (nombre, presentacion, categoria, lote, fecha, cantidad)
            VALUES ('$nombre', '$presentacion', '$categoria', '$lote', '$fecha', '$cantidad')";

            if ($resultado_insertar = mysqli_query($conectar, $insertar)) {
                echo "Registro insertado exitosamente.";
                // Descuenta la cantidad de registros
                $descuento_registros = "DELETE FROM medicamentos ORDER BY id LIMIT 1";
                mysqli_query($conectar, $descuento_registros);
            } else {
                printf("ERROR - Al insertar el registro: %s", mysqli_error($conectar));
            }
        }
    } else {
        echo "No hay registros disponibles para descuento.";
    }
} else {
    echo "Error al obtener la cantidad de registros disponibles.";
}

mysqli_close($conectar);
?>
