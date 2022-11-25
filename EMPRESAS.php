<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/estilos_control_estudiantes.css">
    <title>Registros de los Estudiantes</title>
</head>

<body>

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a href="#" class="enlace">
            <img src="https://ipisa.edu.do/wp-content/uploads/2018/08/logo-1.png" alt="logo ipisa" class="logo">
        </a>
        <h1 class="headtxt">Instituto Politécnico Industrial de Santiago</h1>
        <h3 class="desctxt">Departamento de Vinculación Laboral</h3>
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="pasantia.html">Pasantía</a></li>
            <li><a href="colaboradores.html">Colaboradores</a></li>
            <li><a href="familia.html">Familia</a></li>
            <li><a class="active" href="Registros.html">Registros</a></li>
        </ul>
    </nav>
    <form action="buscar_empresa.php" method="POST">
    <input type="text" name="nombre"  placeholder="Nombre de la empresa">
    <button type="Submit" name="Busqueda">Buscar</button>

    </form>
     <table border="1" cellspacing="2" cellpadding="2">

     <tr>
     <th>ID empresa</th>
     <th>Nombre de la Empresa</th>
     <th>RNC</th>
     <th>¿Desea que se concozca su empresa?</th>
     <th>¿Dispone su empresa un departamento de Formación dentro de la empresa?</th>
     <th>alcance</th>
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
     <th>Borrar</th>
     <th>Editar</th>
</tr>

<?php
include_once 'Conexion F3.php';
$nombres=$_POST['nombres'] ?? null;
if($nombres == null or $nombres == ""){
    mostrar($conexiones);
}else{
    buscar($conexiones);
}
function mostrar($conexiones){
$select = "SELECT * FROM empresas";
$data = mysqli_query($conexiones, $select);
$total = mysqli_num_rows($data);

if($total>0){

   while($row=mysqli_fetch_assoc($data)) {

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
    <td> <a href= 'eliminarbren.php?id=$row[ID_Empresa]'>Borrar</td>
    <td> <a href= 'edit-reg.php?ID_Empresa=$row[ID_Empresa]'>Editar</td>
    </tr>";
 
   
        
    }


 }
}
function buscar($conexiones){
    $nombres = $_POST['nombres'];
    $select = "SELECT * FROM empresas WHERE nombre like '%nombre or ID_Empresa'";
    $data = mysqli_query($mysqli,$select);
    $total = mysqli_num_rows($data);
    
    if($total >0){
        while($row=$mysqli_fetch_assoc($data)){
            echo 
            "<tr>
            <td>" .$row['ID_Empresa']."</td>
            <td>" .$row['nombre']."</td>
            <td>" .$row['RCN']."</td>
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
            <td>" .$row['provincia']."</td>
            <td>" .$row['pais']."</td>
            <td>" .$row['tel_princip']."</td>
            <td>" .$row['tel_direct']."</td>
            <td>" .$row['email']."</td>
            <td>" .$row['contraseña']."</td>
            </tr>";
        }
    }
    
    
    
}
 ?>


}
 
 </body>
</html>