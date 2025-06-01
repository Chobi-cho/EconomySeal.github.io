<?php

  $host = "localhost";
  $user = "root";
  $password = "";
  $baseDeDatos = "registro";

    // Conexión a la base de datos
    $host = "localhost";
    
    $conexion = mysqli_connect($host, $user, $password, $baseDeDatos);
?>
if (!$conexion) {
    echo "Error de conexión: ";
}