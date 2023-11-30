<?php

include "../config/conexion.php";

$cantidad = $_POST['cantidad'];
$medida = $_POST['medida'];
$maximos = $_POST['maximos'];
$minimos = $_POST['minimos'];
$descripcion = $_POST['descripcion'];
$nombreA = $_POST['nombreA'];

$sql = "INSERT INTO stock(cantidad, medida, maximos, minimos, descripcion, nombreArticulo)
    VALUES ('$cantidad','$medida','$maximos','$minimos','$descripcion','$nombreA')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/stock/index.php");
} else {
    echo "Datos no insertados";
}
