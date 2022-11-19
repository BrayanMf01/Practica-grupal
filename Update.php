<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Atualizar</title>
</head>
<body>
        
</body>
</html>
<?php
include_once 'Conexion F1.php';
$id = $_POST['id'];

$sql = "SELECT * FROM alumnos where ID_Alumno=$id;";

$result = mysqli_query($conexiones, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    $row = mysqli_fetch_assoc($result);
    $graduacion=$row['año_graduacion'];
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
else{ 
    ?>
    <script>
          Swal.fire({
            icon: 'warning',
            title: 'Nombre o id Invalido',
            text: 'Registro no encontrado, revise el nombre o id'
        }).then(function () {
            window.location.href = '../index.php';
        })  
    </script>
       <?php
       
    }
       ?>
    


?>
        <form action="Atualizar.php" method="POST">
                
        <input type="text" name="id"  class="form-control" placeholder="ID" value="<?php echo $id?>">
<br>
        <input type="date" name="graduacion"  class="form-input" placeholder="Año de la graduacion" value="<?php echo $graduacion?>">
<br>
        <input type="text" name="institucion_educativa"  class="form-input" placeholder="Instituto" value="<?php echo $institucion_educativa?>">
<br>
        <input type="text" name="curso" class="form-control" placeholder="curso" value="<?php echo $curso?>">
<br>
        <input type ="text" name="Matricula" class="form-control" id="Asunto" placeholder="" value="<?php echo $matricula?>">
<br>
        <input type="text" name="CarerraTecnica"  class="form-control" placeholder="CarerraTecnica" value="<?php  echo $carrera_tecnica ?>">
<br>
        <input type ="text" name="Nombre" id="Nombre" class="form-control" placeholder=""  value="<?php  echo $Nombres ?>">
<br>
        <input type="date" name="fecha_nacimiento"  class="form-control"id="fechaN" placeholder="fecha de nacimiento" value="<?php  echo $fecha_nacimiento ?>" >
<br>
        <input type ="text" name="seccion" id="Seccion"  class="form-control"placeholder="" value="<?php  echo $seccion ?>">
<br>
        <input type ="text" name="provincia" id="Provincia"  class="form-control" placeholder="" value="<?php  echo $provincia ?>">
<br>
        <input type ="text" name="TelefonoResidencial"class="form-control"  placeholder="" value="<?php  echo $tel_res ?>">
<br>
        <INPUT TYPE="checkbox" NAME="licencia"  class="form-control" value="<?php  echo $licencia ?>">
<br>
        <input type ="text" name="Cedula" class="form-control" id="TCedula" placeholder="Ej.: 001-1234567-1" value="<?php  echo $cedula ?>">
<br>
        <input type ="text" name="TecnicoBasico"  class="form-control" id="TecnicoBasico" placeholder="" value="<?php  echo $tecnico_basico ?>">
<br>
        <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Apellido"  value="<?php  echo $Apellidos ?>">
<br>
        <input type="text" name="sexo" id="sexoN"  class="form-control" placeholder="" value="<?php  echo $sexo ?>">
<br>
        <input type="text" name="sector" id="sector"  class="form-control"placeholder="" value="<?php  echo $sector ?>" >
<br>
        <input type="text" name="municipio" id="Municipio" class="form-control" placeholder="" value="<?php  echo $municipio ?>">
<br>
        <input type="text" name="Nacionalidad" id="Nacionalidad" class="form-control" placeholder="" value="<?php  echo $nacionalidad ?>">
<br>
        <INPUT TYPE="text" NAME="Vehiculo" class="form-control"value="<?php  echo $vehiculo ?>">
<br>
        <input type ="text" name="TelefonoMovil" class="form-control" placeholder="" value="<?php  echo $num_cel ?>">
<br>
        <input type="email" name="email" class="form-control"placeholder="" value="<?php  echo $email ?>">
<br>
        <INPUT TYPE="password" NAME="clave"  class="form-control"value="<?php  echo $contraseña ?>">
<br>

<button type="submit" class="btn btn-lg btn-primary"  name="update">Editar</button>
</form>