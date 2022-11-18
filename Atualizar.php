<?php
include_once 'Conexion F1.php';
$id = $_POST['id'];

if(isset($_POST['update'])){
     
    $id = $_POST['id'];

    $query = "UPDATE `alumnos` SET graduacion='$_POST[graduacion]', institucion_educativa='$_POST[institucion_educativa]',
    curso='$_POST[curso]', matricula='$_POST[Matricula]',cedula='$_POST[Cedula]', carrera_tecnica='$_POST[CarerraTecnica]', tecnico_basico='$_POST[TecnicoBasico]',
    Nombres='$_POST[Nombre]',Apellidos='$_POST[apellidos]',fecha_nacimiento='$_POST[fecha_nacimiento]',sexo='$_POST[sexo]', sector='$_POST[sector]',seccion='$_POST[seccion]', 
    municipio='$_POST[municipio]',provincia='$_POST[provincia]', nacionalidad='$_POST[Nacionalidad]', tel_res='$_POST[TelefonoResidencial]', num_cel='$_POST[TelefonoMovil]',
    licencia='$_POST[Licenciaconducir]', vehiculo='$_POST[Vehiculo]',email='$_POST[email]', contraseña='$_POST[clave]'

    
    ";
mysqli_query($conexiones, $query);

}

header("location: Estudiante.php?insert=success");

$conexiones->close();

?>