<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $cantidad = $_POST['cantidad'];
    $medida = $_POST['medida'];
    $maximos = $_POST['maximos'];
    $minimos = $_POST['minimos'];
    $descripcion = $_POST['descripcion'];
    $nombreA = $_POST['nombreA'];


    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE stock SET cantidad = '$cantidad',medida = '$medida',maximos='$maximos',minimos='$minimos',descripcion='$descripcion',nombreArticulo='$nombreA' WHERE idStock = $id";

    if (mysqli_query($conexion, $consulta)) {
        header("location:../Formularios/stock/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
