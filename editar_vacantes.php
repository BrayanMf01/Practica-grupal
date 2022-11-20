<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/estilos_vacantes.css">
    <title>Editar Vacantes</title>
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
<h1>Formulario para registro de una vacante</h1>

<?php 
    require("conexion.php");

    $id = $_REQUEST['id_vacante'];
    
    
        $sql = "SELECT * FROM vacantes WHERE ID_Vacante = $id;";

        $result = mysqli_query($mysqli, $sql);
        $resultcheck = mysqli_num_rows($result);

        if($resultcheck > 0){
            $row = mysqli_fetch_assoc($result);
            $id_empresa= $row['ID_Empresa'];
            $nombre = $row['nombre_empresa'];
            $puesto = $row['nombre_puesto'];
            $perfil = $row['perfil_puesto'];
            $sueldo = $row['sueldo'];
            $ubicacion = $row['ubicacion'];
            $tipo_contrato = $row['tipo_contrato'];
            $horario = $row['horario'];
            $correo = $row['correo_curriculum'];
            $persona = $row['persona_contacto'];
            $telefono = $row['telefono_contacto'];
        }
    ?>

<form action="update_vacantes.php" method="POST">
    <ul>
                <li>
                    <label>ID Vacante:<br></label>
                    <input name="ID" value="<?php echo $id?>" disabled>
                </li>
                <li>
                    <label>ID Vacante:<br></label>
                    <input name="ID" value="<?php echo $id_empresa?>">
                </li>
                <li>
                    <label>Nombre Empresa:<br></label>
                    <input name="nombre" value="<?php echo $nombre?>">
                </li>
                <li>
                    <label>Nombre Puesto:<br></label>
                    <input name="Puesto" value="<?php echo $puesto?>">
                </li>
                <li>
                    <label>Perfil:<br></label>
                    <input name="Perfil" value="<?php echo $perfil?>">
                </li>
                <li>
                    <label>Sueldo:<br></label>
                    <input name="Sueldo" value="<?php echo $sueldo?>">
                </li>                
                <li>
                    <label>Ubicacion:<br></label>
                    <input name="Ubicacion" value="<?php echo $ubicacion?>">
                </li>                
                <li>
                    <label>Tipo Contrato:<br></label>
                    <input name="Tipo_contrato" value="<?php echo $tipo_contrato?>">
                </li>                
                <li>
                    <label>Horario:<br></label>
                    <input name="Horario" value="<?php echo $horario?>">
                </li>                
                <li>
                    <label>Correo:<br></label>
                    <input type="email" name="Correo" value="<?php echo $correo?>">
                </li>                
                <li>
                    <label>Persona:<br></label>
                    <input name="Persona" value="<?php echo $persona?>">
                </li>                <li>
                    <label>Teléfono:<br></label>
                    <input name="Telefono" value="<?php echo $telefono?>">
                </li>
                <li>
                    <button type="submit">Editar</button>
                </li>
    </ul>
</body>
</html>

    