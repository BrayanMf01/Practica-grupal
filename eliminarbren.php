<?php
require("conexion F3.php");

$id=$_REQUEST['id'];

$query = "DELETE FROM empresas where ID_Empresa =$id";
mysqli_query($conexiones, $query);

header("location: EMPRESAS.php?insert=success");

?>