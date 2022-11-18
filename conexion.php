<?php 
$mysqli = new mysqli("localhost", "root", "27092005Emil", "db_ipisa");
if ($mysqli ->connect_errno) {
    echo "Fallo al conectar a MySQL: (" .$mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>

