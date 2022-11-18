
<h3>búsqueda</h3>
<table border="2">
 <tr>
     <th>ID</th>
    <th>graduacion</th>
    <th>institucion educativa</th>
    <th>curso</th>
    <th>matricula</th>
    <th>cedula</th>
    <th>carrera tecnica</th>
    <th>tecnico basico</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>fecha nacimiento</th>
    <th>sexo</th>
    <th>direccion</th>
    <th>sector</th>
    <th>seccion</th>
    <th>municipio</th>
    <th>provincia</th>
    <th>nacionalidad</th>
    <th>telefono de residencia</th>
    <th>numero celular</th>
    <th>Licencia</th>
    <th>vehiculo</th>
    <th>email</th>
    <th>contraseña</th>
 </tr>
<?php
include_once 'Conexion F1.php';

$par = $_POST['par'];

$select = "SELECT * FROM alumnos where Nombres LIKE '%par%' or ID_Alumno='$par' or Nombres='$par'";
$result = mysqli_query($conexiones, $select);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
while ($row=mysqli_fetch_assoc($result)){
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
        </tr>";
}
}else { echo "
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
       ";
    }

 



?>