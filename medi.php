<?php

    $bd_host = "127.0.0.1";
    $bd_user = "root";
    $bd_pass = "";
    $bd_name = "inventario";

    // echo $nombre_completo;

    $nombre = htmlspecialchars($_POST["nombre"]);
    $direccion = htmlspecialchars($_POST["direccion"]);
    $telefono = (int)$_POST["telefono"];
    $especialidad = htmlspecialchars($_POST["especialidad"]);
    $cedula = htmlspecialchars($_POST["cedula"]);
    $correo = htmlspecialchars($_POST["correo"]);
    $usuario = htmlspecialchars($_POST["usuario"]);
    $password = htmlspecialchars($_POST["password"]);
    $password = hash('sha512', $password);
    
    $insertar = "INSERT INTO medicos (nombre, direccion, telefono, especialidad, cedula, correo, usuario, password)
    VALUES ('$nombre', '$direccion', '$telefono', '$correo','$cedula', '$usuario', '$password', '$especialidad')";
    
    $conectar = mysqli_connect($bd_host, $bd_user, $bd_pass, $bd_name, 3306);

    if (mysqli_connect_errno())
    {
        printf("ERROR: %u - %s", mysqli_connect_errno(), mysqli_connect_error());
        exit();
    }

    mysqli_set_charset($conectar, "utf8");
    $insertar = "INSERT INTO medicos (nombre, direccion, telefono, cedula, correo, usuario, password, especialidad)
    VALUES ('$nombre', '$direccion', '$telefono', '$correo','$cedula', '$usuario', '$password', '$especialidad')";
    if ($resultado = mysqli_query($conectar, $insertar))
    {
        header("location: listamedicos.php");
    }
    else
    {
        printf("ERROR - Al amacenar en la BD");
    }
    mysqli_close($conectar);
?>