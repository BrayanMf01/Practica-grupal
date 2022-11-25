<?php 

include_once("conexion F1.php");
function insertar ($conexiones){
    $graduacion=$_POST['graduacion'] ?? null;
    $Institucion=$_POST['Institucion'] ?? null; 
    $Curso=$_POST['Curso'] ?? null;
    $Matricula=$_POST['Matricula'] ?? null; 
    $Cedula=$_POST['Cedula'] ?? null;
    $CarerraTecnica=$_POST['CarerraTecnica'] ?? null; 
    $TecnicoBasico=$_POST['TecnicoBasico'] ?? null;
    $Nombre=$_POST['Nombre'] ?? null;
    $apellidos=$_POST['apellidos'] ?? null;
    $fechaNacimiento=$_POST['fechaNacimiento'] ?? null;
    $sexoN=$_POST['sexo'] ?? null;
    $direccion = $_POST['direccion']?? null;
    $sector=$_POST['sector'] ?? null;
    $Seccion=$_POST['Seccion'] ?? null;
    $Municipio=$_POST['Municipio'] ?? null;
    $Provincia=$_POST['Provincia'] ?? null;
    $Nacionalidad=$_POST['Nacionalidad'] ?? null;
    $TelefonoResidencial=$_POST['TelefonoResidencial'] ?? null;
    $TelefonoMovil=$_POST['TelefonoMovil'] ?? null;
    $Licenciaconducir=$_POST['licencia'] ?? null;
    $Vehiculo=$_POST['vehiculo'] ?? null;
    $email=$_POST['email'] ?? null;
    $clave=$_POST['clave'] ?? null;


    $query= "insert into alumnos values(default,'$graduacion','$Institucion','$Curso','$Matricula','$Cedula','$CarerraTecnica','$TecnicoBasico','$Nombre','$apellidos','$fechaNacimiento','$sexoN','$direccion','$sector','$Seccion','$Municipio','$Provincia','$Nacionalidad','$TelefonoResidencial','$TelefonoMovil','$Licenciaconducir','$Vehiculo','$email','$clave')";
    $result=mysqli_query($conexiones,$query);
}
    insertar($conexiones);
    mysqli_close($conexiones);

  header("location: Formulario 1.php?insert=success");


?>