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
mysqli_close($mysqli);

}

header("location: vacantes.php?insert=success");

?>