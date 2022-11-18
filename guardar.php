<?php
  include_once ('Conexion F3.php');
function insertar ($conexiones){

$nombre=$_POST['nombre'] ?? null;
$RNC=$_POST['RNC'] ?? null;
$conoce=$_POST['conoce'] ?? null;
$formacion=$_POST['formacion'] ?? null;
$alcance=$_POST['alcance'] ?? null;
$dedica=$_POST['dedica'] ?? null;
$industria=$_POST['industria'] ?? null;
$empresa=$_POST['empresa'] ?? null;
$direccion=$_POST['direccion'] ?? null;
$sector=$_POST['sector'] ?? null;
$Seccion=$_POST['Seccion'] ?? null;
$Municipio=$_POST['Municipio'] ?? null;
$Provincia=$_POST['Provincia'] ?? null;
$Nacionalidad=$_POST['Nacionalidad'] ?? null;
$telefonop=$_POST['telefonop'] ?? null;
$telefonod=$_POST['telefonod'] ?? null;
$email=$_POST['email'] ?? null;
$clave=$_POST['clave'] ?? null;

$query= "insert into empresas values('0','$nombre','$RNC','$conoce','$formacion','$alcance','$dedica','$industria','$empresa','$direccion','$sector','$Seccion','$Municipio','$Provincia','$Nacionalidad','$telefonop','$telefonod','$email','$clave')";
echo $query;
$result=mysqli_query($conexiones,$query);
}
insertar($conexiones);
mysqli_close($conexiones);

?>