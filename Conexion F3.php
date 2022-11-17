<?php
    $servidor="localhost";
    $nombreusuario="root";
    $password="Mauricio2021";
    $basedatos="db_ipisa";

$conexiones = new mysqli($servidor, $nombreusuario, $password,$basedatos);

if($conexiones-> connect_error){
    die("conexion fallida:".$conexiones-> connect_error);
}
echo "conexion exitosa...";

$nombre=$_POST['nombre'];
$rnc=$_POST['rnc'];
$conoce=$_POST['conoce'];
$formacion=$_POST['formacion'];
$alcance=$_POST['alcance'];
$dedica=$_POST['dedica'];
$industria=$_POST['industria'];
$empresa=$_POST['empresa'];
$direccion=$_POST['direccion'];
$sector=$_POST['sector'];
$Seccion=$_POST['Seccion'];
$Municipio=$_POST['Municipio'];
$Provincia=$_POST['Provincia'];
$Nacionalidad=$_POST['Nacionalidad'];
$telefonop=$_POST['telefonop'];
$telefonod=$_POST['telefonod'];
$email=$_POST['email'];
$clave=$_POST['clave'];

$query= "insert into empresas values('0','$nombre','$rnc','$conoce','$formacion','$alcance','$dedica','$industria','$empresa','$direccion','$sector','$Seccion','$Municipio','$Provincia','$Nacionalidad','$telefonop','$telefonod','$email','$clave')";

echo $query;
if($result=mysqli_query($conexiones,$query)){
    printf("nuevos valores guardados",mysqli_insert_id($conexiones));
}
    ?>