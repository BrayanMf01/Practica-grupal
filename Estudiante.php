<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/estilos_control_vacantes.css">
    <link rel="stylesheet" href="Css/estilos_index.css">
    <title>Registros de los Estudiantes</title>
</head>
<header>
  <img src="https://ipisa.edu.do/wp-content/uploads/2018/08/logo-1.png" alt="logo ipisa">
  <h1 class="headtxt">Instituto Politécnico Industrial de Santiago</h1>
  <h3 class="desctxt">Departamento de Vinculación Laboral</h3>
  <nav class="navegacion">
      <ul class="menu">
          <li><a href="index.html">Inicio</a></li>
          <li><a href="pasantia.html">Pasantía</a></li>
          <li><a href="colaboradores.html">Colaboradores</a></li>
          <li><a href="familia.html">Familia</a></li>
          <li><a href="Registros.html">Registros</a></li>
      </ul>
  </nav>
</header>
<body>

<Center><h1>Registros de Usuarios</h1></Center>
    <table class="table table-dark table-striped-columns" border="2">
    <Center><h1>Lista de Alumnos</h1></Center>
<tr>
    <th scope="col">ID</th>
    <th scope="col">Año de Graduacion</th>
    <th scope="col">Institución Educativa</th>
    <th scope="col">Curso</th>
    <th scope="col">Matrícula</th>
    <th scope="col">Cédula</th>
    <th scope="col">Carrera Técnica</th>
    <th scope="col">Técnico Básico</th>
    <th scope="col">Nombres</th>
    <th scope="col">Apellidos</th>
    <th scope="col">Fecha de Nacimiento</th>
    <th scope="col">Sexo</th>
    <th scope="col">Dirección</th>
    <th scope="col">Sector</th>
    <th scope="col">Sección</th>
    <th scope="col">Municipio</th>
    <th scope="col">Provincia</th>
    <th scope="col">Nacionalidad</th>
    <th scope="col">Teléfono de Residencia</th>
    <th scope="col">Número de Celular</th>
    <th scope="col">Licencia</th>
    <th scope="col">Vehículo</th>
    <th scope="col">E-mail</th>
    <th scope="col">Contraseña</th>
    <th scope="col">Eliminar</th>
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
    <td>". $row['año_graduacion'] ."</td>
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
</body>
</html>