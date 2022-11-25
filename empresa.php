<?php

include_once 'conexion f3.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];

$sqlinsert = "INSERT INTO  values(0,'$nombre','$apellido','$telefono');";

echo $sqlinsert;

mysqli_query($mysqli, $sqlinsert);

header("location: formulario.php?insert=succes");

?>
