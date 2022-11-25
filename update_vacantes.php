<?php 
require("conexion.php");

$id= $_POST ['ID'];

$query = "UPDATE `vacantes` SET nombre_empresa= '$_POST[nombre]', nombre_puesto= '$_POST[Puesto]', perfil_puesto= '$_POST[Perfil]', sueldo= '$_POST[Sueldo]', ubicacion= '$_POST[Ubicacion]', tipo_contrato= '$_POST[Tipo_contrato]', horario= '$_POST[Horario]', tipo_contrato= '$_POST[Correo]', persona_contacto= '$_POST[Persona]', telefono_contacto= '$_POST[Telefono]'  where ID_Vacante= $id";
mysqli_query($mysqli, $query);

header("location: control_vacantes.php?insert=success");
?>