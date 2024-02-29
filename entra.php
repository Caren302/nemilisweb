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

// Verificar si el producto ya existe
$consulta_existencia = "SELECT * FROM medicamentos WHERE nombre = '$nombre'";
$resultado_existencia = mysqli_query($conectar, $consulta_existencia);

if (mysqli_num_rows($resultado_existencia) > 0) {
    // Producto ya existe, actualizar la cantidad
    $fila_existencia = mysqli_fetch_assoc($resultado_existencia);
    $nueva_cantidad = $fila_existencia['cantidad'] + $cantidad;

    $actualizar = "UPDATE medicamentos SET cantidad = $nueva_cantidad WHERE nombre = '$nombre'";
    if ($resultado_actualizar = mysqli_query($conectar, $actualizar)) {
        header("location: actualinventario.php");
    } else {
        printf("ERROR - Al actualizar el registro: %s", mysqli_error($conectar));
    }
    } else {
    // Producto no existe, insertar un nuevo registro
    $insertar = "INSERT INTO medicamentos (nombre, presentacion, categoria, lote, fecha, cantidad)
    VALUES ('$nombre', '$presentacion', '$categoria', '$lote', '$sector', '$fecha', '$cantidad')";

   if ($resultado = mysqli_query($conectar, $insertar))
    {
        header("location: actualinventario.php");
    }
    else
    {
        printf("ERROR - Al amacenar en la BD");
    }
}
mysqli_close($conectar);
?>
