<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/estilos_vacantes.css">
    <title>Registrar una vacante</title>
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
      </ul>
  </nav>
</header>
<body>
    <h1>Formulario para registro de una vacante</h1>
        <form action="vacantes.php" method="POST">
            <ul>
                <li>
                    <label>Nombre de la Empresa:<br></label>
                    <input name="nombre" required>
                </li>
                <li>
                    <label>Nombre del puesto:<br></label>
                    <input name="nombre_puesto" required>
                </li>
                <li>
                <label>Funciones o perfil del puesto:<br></label>
                <textarea name="perfil_puesto"  required></textarea>
                </li>
                <li>
                <label>Sueldo:<br></label>
                <input name="sueldo" required>
                </li>
                <li>
                <label>Ubicacion:<br></label>
                <input name="ubicacion" required>
                </li>
                <li>
                <label>Tipo de contrato:<br></label>
                <select name="tipo_contrato">
                    <option value="Temporal" SELECTED>Temporal
                    <option value="Fijo" SELECTED>Fijo
                </select>
                </li>
                <li>
                <label>Horario:<br></label>
                <input name="horario" required>  
                </li>
                <li>
                <label>Correo para fines de curriculum:<br></label>
                <input type="email" name="correo_curriculum" required>  
                </li>
                <li>
                <label>Persona de Contacto:<br></label>
                <input name="persona_contacto" required>  
                </li>
                <li>
                <label>Teléfono:<br></label>
                <input name="telefono_contacto" required>  
                </li>
                <button type="submit">Enviar Datos</button>
            </ul>
        </form>

        
        <?php 

require ("conexion.php");

insertar($mysqli);
function insertar ($mysqli){
    $nombre = $_POST['nombre'] ?? null;
    $puesto = $_POST['nombre_puesto'] ?? null;
    $perfil = $_POST['perfil_puesto'] ?? null;
    $sueldo = $_POST['sueldo'] ?? null;
    $ubicacion = $_POST['ubicacion'] ?? null;
    $tipo_contrato = $_POST['tipo_contrato'] ?? null;
    $horario = $_POST['horario'] ?? null;
    $correo = $_POST['correo_curriculum'] ?? null;
    $nombre_persona = $_POST['persona_contacto'] ?? null;
    $telefono = $_POST['telefono_contacto'] ?? null;

$consulta = "INSERT INTO vacantes(nombre_empresa, nombre_puesto, perfil_puesto, sueldo, ubicacion, tipo_contrato, horario, correo_curriculum, persona_contacto, telefono_contacto) VALUES ('$nombre','$puesto','$perfil', '$sueldo','$ubicacion','$tipo_contrato','$horario','$correo','$nombre_persona','$telefono')";
mysqli_query($mysqli, $consulta);
}

mysqli_close($mysqli);

?>

</body>
</html>