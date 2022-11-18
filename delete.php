<?php
include_once 'Conexion F1.php';

$id = $_REQUEST['id'];

$delete="DELETE FROM alumnos where ID_Alumno=$id";

mysqli_query($conexiones, $delete);

header("location: Estudiante.php?insert=success");

$conexiones->close();




?>