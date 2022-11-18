<?php
include_once 'Conexion F1.php';
$id = $_POST['id'];

$sql = "SELECT * FROM alumnos where ID_Alumno=$id;";

$result = mysqli_query($conexiones, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    $row = mysqli_fetch_assoc($result);
    $graduacion=$row['graduacion'];
    $institucion_educativa=$row['institucion_educativa']; 
    $curso=$row['curso'];
    $matricula=$row['matricula']; 
    $cedula=$row['cedula'];
    $carrera_tecnica=$row['carrera_tecnica']; 
    $tecnico_basico=$row['tecnico_basico'];
    $Nombres=$row['Nombres'];
    $Apellidos=$row['Apellidos'];
    $fecha_nacimiento=$row['fecha_nacimiento'];
    $sexo=$row['sexo'];
    $direccion = $row['direccion'];
    $sector=$row['sector'];
    $seccion=$row['seccion'];
    $municipio=$row['municipio'];
    $provincia=$row['provincia'];
    $nacionalidad=$row['nacionalidad'];
    $tel_res=$row['tel_res'];
    $num_cel=$row['num_cel'];
    $licencia=$row['licencia'];
    $vehiculo=$row['vehiculo'];
    $email=$row['email'];
    $contraseña=$row['contraseña'];

}


?>
        <form action="Atualizar.php" method="POST">
                
        <input type="text" name="id" placeholder="ID" value="<?php echo $id?>">
<br>
        <input type="date" name="graduacion"  class="form-input" placeholder="Año de la graduacion" value="<?php echo $graduacion?>">
<br>
        <input type="text" name="institucion_educativa"  class="form-input" placeholder="Instituto" value="<?php echo $institucion_educativa?>">
<br>
        <input type="text" name="curso" placeholder="curso" value="<?php echo $curso?>">
<br>
        <input type ="text" name="Matricula" id="Asunto" placeholder="" value="<?php echo $matricula?>">
<br>
        <input type="text" name="CarerraTecnica" placeholder="CarerraTecnica" value="<?php  echo $carrera_tecnica ?>">
<br>
        <input type ="text" name="Nombre" id="Nombre" placeholder=""  value="<?php  echo $Nombres ?>">
<br>
        <input type="date" name="fecha_nacimiento" id="fechaN" placeholder="fecha de nacimiento" value="<?php  echo $fecha_nacimiento ?>" >
<br>
        <input type ="text" name="seccion" id="Seccion" placeholder="" value="<?php  echo $seccion ?>">
<br>
        <input type ="text" name="provincia" id="Provincia" placeholder="" value="<?php  echo $provincia ?>">
<br>
        <input type ="text" name="TelefonoResidencial"  placeholder="" value="<?php  echo $tel_res ?>">
<br>
        <INPUT TYPE="checkbox" NAME="licencia"  value="<?php  echo $licencia ?>">
<br>
        <input type ="text" name="Cedula" id="TCedula" placeholder="Ej.: 001-1234567-1" value="<?php  echo $cedula ?>">
<br>
        <input type ="text" name="TecnicoBasico" id="TecnicoBasico" placeholder="" value="<?php  echo $tecnico_basico ?>">
<br>
        <input type="text" name="apellidos" id="apellidos" placeholder="Apellido"  value="<?php  echo $Apellidos ?>">
<br>
        <input type="text" name="sexo" id="sexoN" placeholder="" value="<?php  echo $sexo ?>">
<br>
        <input type="text" name="sector" id="sector" placeholder="" value="<?php  echo $sector ?>" >
<br>
        <input type="text" name="municipio" id="Municipio" placeholder="" value="<?php  echo $municipio ?>">
<br>
        <input type="text" name="Nacionalidad" id="Nacionalidad" placeholder="" value="<?php  echo $nacionalidad ?>">
<br>
        <INPUT TYPE="text" NAME="Vehiculo" value="<?php  echo $vehiculo ?>">
<br>
        <input type ="text" name="TelefonoMovil"  placeholder="" value="<?php  echo $num_cel ?>">
<br>
        <input type="email" name="email" placeholder="" value="<?php  echo $email ?>">
<br>
        <INPUT TYPE="password" NAME="clave" value="<?php  echo $contraseña ?>">
<br>

<button type="submit" name="update">Editar</button>
</form>