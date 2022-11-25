<?php
require ("Conexion F1.php");
$id= $_REQUEST['id'];

     

    $query = "UPDATE `alumnos` SET año_graduacion='$_POST[graduacion]', institucion_educativa='$_POST[Institucion]', curso='$_POST[Curso]', matricula='$_POST[Matricula]',cedula='$_POST[Cedula]', carrera_tecnica='$_POST[CarerraTecnica]', tecnico_basico='$_POST[TecnicoBasico]', Nombres='$_POST[Nombre]',Apellidos='$_POST[apellidos]',fecha_nacimiento='$_POST[fechaNacimiento]',sexo='$_POST[sexo]', sector='$_POST[sector]',seccion='$_POST[Seccion]', municipio='$_POST[Municipio]',provincia='$_POST[Provincia]', nacionalidad='$_POST[Nacionalidad]', tel_res='$_POST[TelefonoResidencial]', num_cel='$_POST[TelefonoMovil]', licencia='$_POST[licencia]', vehiculo='$_POST[vehiculo]',email='$_POST[email]', contraseña='$_POST[clave]' where ID_Alumno=$id";
    mysqli_query($conexiones, $query);



header("location: Estudiante.php?insert=success");

//$conexiones->close();

?>