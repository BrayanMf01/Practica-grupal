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

$graduacion=$_POST['graduacion'] ;
$Institucion=$_POST['Institucion']; 
$Curso=$_POST['Curso'];
$Matricula=$_POST['Matricula']; 
$CarerraTecnica=$_POST['CarerraTecnica']; 
$Nombre=$_POST['Nombre'];
$fechaNacimiento=$_POST['fechaNacimiento'];
$Seccion=$_POST['Seccion'];
$Provincia=$_POST['Provincia'];
$TelefonoResidencial=$_POST['TelefonoResidencial'] ;
$Licenciaconducir=$_POST['Licenciaconducir'];
$Cedula=$_POST['Cedula'];
$TecnicoBasico=$_POST['TecnicoBasico'];
$apellidos=$_POST['apellidos'];
$sexoN=$_POST['sexoN'];
$sector=$_POST['sector'];
$Municipio=$_POST['Municipio'];
$Nacionalidad=$_POST['Nacionalidad'];
$Vehiculo=$_POST['Vehiculo'];
$TelefonoMovil=$_POST['TelefonoMovil'];
$email=$_POST['email'];
$clave=$_POST['clave'];


$query= "insert into alumnos values('0','$graduacion','$Institucion','$Curso','$Matricula','$Cedula','$CarerraTecnica','$TecnicoBasico','$Nombre','$apellidos','$fechaNacimiento','$sexoN','$sector','$Seccion','$Municipio','$Provincia','$Nacionalidad','$TelefonoResidencial','$TelefonoMovil','$Licenciaconducir','$Vehiculo','$email','$clave')";

echo $query;
if($result=mysqli_query($conexiones,$query)){
    printf("nuevos valores guardados",mysqli_insert_id($conexiones));
}
    ?>