<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/estilos_index.css">
    <title>Document</title>
</head>
<body>
<Center><h1>Lista de Alumnos</h1></Center>
    <table class="table table-dark table-striped-columns" border="1">
<tr>
    <th scope="col">ID</th>
    <th scope="col">graduacion</th>
    <th scope="col">institucion educativa</th>
    <th scope="col">curso</th>
    <th scope="col">matricula</th>
    <th scope="col">cedula</th>
    <th scope="col">carrera tecnica</th>
    <th scope="col">tecnico basico</th>
    <th scope="col">Nombres</th>
    <th scope="col">Apellidos</th>
    <th scope="col">fecha nacimiento</th>
    <th scope="col">sexo</th>
    <th scope="col">direccion</th>
    <th scope="col">sector</th>
    <th scope="col">seccion</th>
    <th scope="col">municipio</th>
    <th scope="col">provincia</th>
    <th scope="col">nacionalidad</th>
    <th scope="col">telefono de residencia</th>
    <th scope="col">numero celular</th>
    <th scope="col">Licencia</th>
    <th scope="col">vehiculo</th>
    <th scope="col">email</th>
    <th scope="col">contraseña</th>
</tr>
<?php
include_once 'Conexion F1.php';
$select = "SELECT * FROM alumnos";
$data = mysqli_query($conexiones, $select);
$total = mysqli_num_rows($data);

if($total>0){
  while ($row=mysqli_fetch_assoc($data)){
    echo
    "<tr>
    <td>". $row['ID_Alumno'] ."</td>
    <td>". $row['graduacion'] ."</td>
    <td>". $row['institucion_educativa'] ."</td>
    <td>". $row['curso'] ."</td>
    <td>". $row['matricula'] ."</td>
    <td>". $row['cedula'] ."</td>
    <td>". $row['carrera_tecnica'] ."</td>
    <td>". $row['tecnico_basico'] ."</td>
    <td>". $row['Nombres'] ."</td>
    <td>". $row['Apellidos'] ."</td>
    <td>". $row['fecha_nacimiento'] ."</td>
    <td>". $row['sexo'] ."</td>
    <td>". $row['direccion'] ."</td>
    <td>". $row['sector'] ."</td>
    <td>". $row['seccion'] ."</td>
    <td>". $row['municipio'] ."</td>
    <td>". $row['provincia'] ."</td>
    <td>". $row['nacionalidad'] ."</td>
    <td>". $row['tel_res'] ."</td>
    <td>". $row['num_cel'] ."</td>
    <td>". $row['licencia'] ."</td>
    <td>". $row['vehiculo'] ."</td>
    <td>". $row['email'] ."</td>
    <td>". $row['contraseña'] ."</td>
    <td><a href='delete.php?id=$row[ID_Alumno]'>Borrar</td>
    </tr>";
  
}
}
?>
    </table>
    <center>
    <h3>Editar Estudiante</h3>
<form action="Update.php" method="POST">
<input type="text" class="form-control" name="id" placeholder="ID">
<Button type="Submit" class="btn btn-lg btn-primary" name="update">Editar</Button>

    </form>
    </center>
    <center>
    <h3>búsqueda de Estudiantes</h3>
    <form action="busqueda.php" method="POST">
    <input type="text" class="form-control" name="par" placeholder="par">
    <Button type="Submit" class="btn btn-lg btn-primary" name="Busqueda">Buscar</Button>
     </form>
    </center>
    <center>
    <h3>Atras</h3>
    <form action="Registros.html" method="POST">
    <Button type="Submit" class="btn btn-lg btn-primary" name="Atras">Atras</Button>
    </form>
    </center>
</body>
</html>