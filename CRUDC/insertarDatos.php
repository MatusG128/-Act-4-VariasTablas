<?php

include "../config/conexion.php";

$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$nombreC = $_POST['nombreC'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$termino = $_POST['termino'];

$sql = "INSERT INTO proveedor(nombre, direccion, nombreContacto, email, telefono, terminopago)
    VALUES ('$nombre','$direccion','$nombreC','$email','$telefono','$termino')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/proveedores/index.php");
} else {
    echo "Datos no insertados";
}
