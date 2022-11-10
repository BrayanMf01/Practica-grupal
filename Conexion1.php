<?php
    $servidor="localhost";
    $nombreusuario="root";
    $password="Mauricio2021";
    $basedatos="db_ipisa";

$reg = new mysqli($servidor, $nombreusuario, $password,$basedatos);

if($reg-> connect_error){
    die("conexion fallida:".$reg-> connect_error);
}
echo "conexion exitosa...";
$fecha=$_POST['fecha'];
$Institucion=$_POST['Institucion'];
$Curso=$_POST['Curso'];
$Asunto=$_POST['Asunto'];
$Tecnica=$_POST['Tecnica'];
$Nombre=$_POST['Nombre'];
$fechaN=$_POST['fechaN'];
$Seccion=$_POST['Seccion'];
$Pronvicias=$_POST['Pronvicias'];
$TelefonoR=$_POST['TelefonoR'];
$extras=$_POST['extras'];
$email=$_POST['email'];
$clave=$_POST['clave'];
$Cedula=$_POST['Cedula'];
$Basico=$_POST['Basico'];
$apellidos=$_POST['apellidos'];
$sexoN=$_POST['sexoN'];
$sector=$_POST['sector'];
$Municipio=$_POST['Municipio'];
$Pais=$_POST['Pais'];
$mini=$_POST['mini'];
$TelefonoM=$_POST['TelefonoM'];
$ema=$_POST['ema'];
$clave=$_POST['clave'];
$Condiciones=$_POST['Condiciones'];

$query= "insert into registro values('0','$fecha','$Institucion','$Curso','$Asunto','$Tecnica','$Nombre','$fechaN','$Seccion','$Pronvicias','$TelefonoR','$extras','$email','$clave','$Cedula','$Basico','$apellidos','$sexoN','$sector','$Municipio','$Pais','$mini','$TelefonoM','$ema','$clave','$Condiciones')";

echo $query;
if($result=mysqli_query($reg,$query)){
    printf("nuevos valores guardados",mysqli_insert_id($reg));
}
    ?>