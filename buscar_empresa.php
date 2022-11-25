<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Empresas</title>
</head>
<body>
    <h2>Empresas</h2>

     <table border="4">
     <tr>
     <th>Nombre de la Empresa</th>
     <th>RNC</th>
     <th>¿Desea que se concozca su empresa?</th>
     <th>¿Dispone su empresa un departamento de Formación dentro de la empresa?</th>
     <th>Actividad económica a la que se dedica la empresa</th>
     <th>Industria</th>
     <th>Tamaño empresa</th>
     <th>Direccion</th>
     <th>Sector</th>
     <th>Seccion</th>
     <th>Municipio</th>
     <th>Provincia</th>
     <th>Pais de Nacionalidad</th>
     <th>Telefono Principal</th>
     <th>Telefono directo</th>
     <th>Email</th>
     <th>Contraseña</th>
</tr>

<?php

include_once 'Conexion F3.php';
$nombre=$_POST['nombre'];
$query = "SELECT * FROM empresas WHERE nombre like '%nombre%' or nombre='$nombre'";
$data = mysqli_query($conexiones,$query);
$total = mysqli_num_rows($data);

if($total >0){
    while($row= mysqli_fetch_assoc($data)){
        echo 
        "<tr>
        <td>" .$row['ID_Empresa']."</td>
        <td>" .$row['nombre']."</td>
        <td>" .$row['RNC']."</td>
        <td>" .$row['identidad_empresa']."</td>
        <td>" .$row['dep_form_lab']."</td>
        <td>" .$row['alcance']."</td>
        <td>" .$row['actividad_economica']."</td>
        <td>" .$row['industria']."</td>
        <td>" .$row['tamaño_empresa']."</td>
        <td>" .$row['direccion']."</td>
        <td>" .$row['sector']."</td>
        <td>" .$row['seccion']."</td>
        <td>" .$row['municipio']."</td>
        <td>" .$row['provinica']."</td>
        <td>" .$row['pais']."</td>
        <td>" .$row['tel_princip']."</td>
        <td>" .$row['tel_direct']."</td>
        <td>" .$row['email']."</td>
        <td>" .$row['contraseña']."</td>
        </tr>";
    }
}



?>

</body>
</html>