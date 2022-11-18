<?php 
require("conexion.php");

$id=$_REQUEST['id'];
$query = "DELETE FROM vacantes where ID_Vacante= $id";
mysqli_query($mysqli, $query);

header("location: control_vacantes.php?insert=success");
?>