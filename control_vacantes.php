<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="Css/estilos_control_vacantes.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Vacantes</title>
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

<h1>Vacantes Existentes</h1>
    <table  border="2">
        <thead>
        <tr>

            <th>Nombre Empresa</th>
            <th>Puesto</th>
            <th>Perfil del Puesto</th>
            <th>Sueldo</th>
            <th>Ubicación</th>
            <th>Tipo de Contrato</th>
            <th>Horario</th>
            <th>Correo</th>
            <th>Persona de Contacto</th>
            <th>Teléfono</th>
            <th colspan="3">Acción</th>
        </tr>
        </thead>
        <center>
    <form action="control_vacantes.php" method="post">
        <input type="text" name="palabra" placeholder="Nombre empresa o puesto">
        <button type="submit">Buscar</button>
        </center>
        <?php 
    
    require ("conexion.php");

   
    $palabra=$_POST['palabra'] ?? null;
if($palabra == null or $palabra == " "){
    mostrar($mysqli);
} else{
    buscar($mysqli);
}

function mostrar($mysqli){
    $query = "SELECT * FROM vacantes";
    $data = mysqli_query($mysqli, $query);
    $total = mysqli_num_rows($data);
    $palabra=$_POST['palabra'] ?? null;
    if($total!=0){
        while($row=mysqli_fetch_assoc($data)){

            echo "<tr> <tbody>

            <td>" . $row['nombre_empresa'] . "</td>
             <td>" . $row['nombre_puesto'] . "</td> 
             <td>" . $row['perfil_puesto'] . "</td>              
             <td>" . $row['sueldo'] . "</td> 
             <td>" . $row['ubicacion'] . "</td> 
             <td>" . $row['tipo_contrato'] . "</td> 
             <td>" . $row['horario'] . "</td> 
             <td>" . $row['correo_curriculum'] . "</td> 
             <td>" . $row['persona_contacto'] . "</td> 
             <td>" . $row['telefono_contacto'] . "</td> 
             <td> <a href='eliminar_vacantes.php?id=$row[ID_Vacante]'>Borrar</td> 
             <td> <a href='editar_vacantes.php?id_vacante=$row[ID_Vacante]'>Editar</td> 
             </tbody>  </tr>";;
}}
}

function buscar($mysqli){
    $palabra=$_POST['palabra'] ?? null;

    $query = "SELECT * FROM vacantes WHERE nombre_puesto LIKE '%$palabra%' or nombre_empresa LIKE '%$palabra%'";
    $data = mysqli_query($mysqli, $query);
    $total = mysqli_num_rows($data);
    if($total!=0){
        while($row=mysqli_fetch_assoc($data)){

            echo "<tr> 
            <td>" . $row['nombre_empresa'] . "</td>
             <td>" . $row['nombre_puesto'] . "</td> 
             <td>" . $row['perfil_puesto'] . "</td>              
             <td>" . $row['sueldo'] . "</td> 
             <td>" . $row['ubicacion'] . "</td> 
             <td>" . $row['tipo_contrato'] . "</td> 
             <td>" . $row['horario'] . "</td> 
             <td>" . $row['correo_curriculum'] . "</td> 
             <td>" . $row['persona_contacto'] . "</td> 
             <td>" . $row['telefono_contacto'] . "</td> 
             <td> <a href='eliminar_vacantes.php?id=$row[ID_Vacante]'>Borrar</td> 
             <td> <a href='editar_vacantes.php?id=$row[ID_Vacante]'>Editar</td> 

                  </tr>";;

}}
}

    ?>
    </form>
    
    </table>
        </form>
</body>
</html>