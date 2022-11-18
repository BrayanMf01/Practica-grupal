<?php
    $servidor="localhost";
    $nombreusuario="root";
    $password="brendita0805";
    $basedatos="db_ipisa";

$conexiones = new mysqli($servidor, $nombreusuario, $password,$basedatos);

if($conexiones-> connect_error){
    die("conexion fallida:".$conexiones-> connect_error);
}
echo "conexion exitosa...";

    ?>