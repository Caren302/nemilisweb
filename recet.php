<?php

    $bd_host = "127.0.0.1";
    $bd_user = "root";
    $bd_pass = "";
    $bd_name = "inventario";

    // echo $nombre_completo;

    $nss = htmlspecialchars($_POST["nss"]);
    $nombre = htmlspecialchars($_POST["nombre"]);
    $direccion = htmlspecialchars($_POST["direccion"]);
    $telefono = (int)$_POST["telefono"];
    $peso = htmlspecialchars($_POST["peso"]);
    $estatura = htmlspecialchars($_POST["estatura"]);
    $temperatura = htmlspecialchars($_POST["temperatura"]);
    $medico = htmlspecialchars($_POST["medico"]);
    
    

    $insertar = "INSERT INTO recetamedico (nss, nombre, direccion, telefono, peso, estatura, temperatura, medico)
    VALUES ('$nss', '$nombre', '$direccion', '$telefono', '$peso','$estatura', '$temperatura', '$medico')";
    
    $conectar = mysqli_connect($bd_host, $bd_user, $bd_pass, $bd_name, 3306);

    if (mysqli_connect_errno())
    {
        printf("ERROR: %u - %s", mysqli_connect_errno(), mysqli_connect_error());
        exit();
    }

    mysqli_set_charset($conectar, "utf8");
    $insertar = "INSERT INTO recetamedico (nss, nombre, direccion, telefono, peso, estatura, temperatura, medico)
    VALUES ('$nss', '$nombre', '$direccion', '$telefono', '$peso','$estatura', '$temperatura', '$medico')";
    if ($resultado = mysqli_query($conectar, $insertar))
    {
        header("location: resultadoreceta.php");
    }
    else
    {
        printf("ERROR - Al amacenar en la BD");
    }
    mysqli_close($conectar);
?>