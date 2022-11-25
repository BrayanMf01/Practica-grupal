<?php
 
 include_once 'Conexion F3.php';
 $id = $_POST['id'];

 if(isset($_POST['update'])){

    $id = $_POST['id'];

    $query = "UPDATE Empresas SET nombre='$_POST[nombre]', RCN = '$_POST[RCN]',conoce= '$_POST[conoce], formacion= '$_POST[formacion], alcance= '$_POST[alcance],dedica= '$_POST[dedica],industria= '$_POST[industria],empresa= '$_POST[empresa],direccion= '$_POST[direccion], sector= '$_POST[sector],  Seccion= '$_POST[Seccion],
    Municipio= '$_POST[Municipio], Provincia= '$_POST[Nacionalidad],
    telefonop= '$_POST[telefonop],telefonop= '$_POST[telefonop],
    email= '$_POST[email],clave= '$_POST[clave]';";
    mysqli_query($mysqli,$query);
 }
 header("location:edit-reg.php?insert=success");

?>