<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $nombreC = $_POST['nombreC'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $termino = $_POST['termino'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE proveedor SET nombre = '$nombre',direccion = '$direccion', nombreContacto = '$nombreC', email= '$email', telefono = '$telefono', terminopago = '$termino' WHERE idProveedor = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/proveedores/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
