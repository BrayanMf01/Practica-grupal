<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h3>Editar estudiante </h3>
<?php

require("Conexion F3.php");
$ID_Empresa = $_POST['id'];

$sql = "SELECT * FROM empresas WHERE ID_Empresa = $ID_Empresa";
$result = mysqli_query($conexiones, $sql);
$resultcheck  = mysqli_num_rows($result);

  if($resultcheck > 0){
$row = $mysqli_fetch_assoc($result);
$nombre=$row['nombre'];
$RNC=$row['RNC'];
$conoce=$row['conoce'];
$formacion=$row['formacion'];
$alcance=$row['alcance'];
$dedica=$row['dedica'];
$industria=$row['industria'];
$empresa=$row['empresa'];
$direccion=$row['direccion'];
$sector=$row['sector'];
$Seccion=$row['Seccion'];
$Municipio=$row['Municipio'];
$Provincia=$row['Provincia'];
$Nacionalidad=$row['Nacionalidad'];
$telefonop=$row['telefonop'];
$telefonod=$row['telefonod'];
$email=$row['email'];
$clave=$row['clave'];
   
 }

?>
<form action="edit-reg.php" method="POST">
    <ul>
        <li>
            <label>ID_Empresa<br></label>
            <input name="ID_Empresa" VALUE="<?php echo $id; ?>">
 </li>

 <li>
        <label>Nombre de la Empresa:</label>
        <input  type="text" name="nombre" VALUE="<?php echo $nombre;?>">
      </li>
      <li>
        <label>RNC:</label>
        <input type="text" name="RNC">
      </li>
      <li>
        <label>¿Desea que se concozca su empresa?:</label>
        <input  type="text" name="conoce" VALUE="<?php echo $conoce;?>">
      </li>
      <li>
        <label>¿Dispone su empresa un departamento de Formación dentro de la empresa?:</label>
        <input  type="text" name="formacion" VALUE="<?php echo $formacion; ?>">
      </li>
      <li>
        <label>Alcance de la empresa:</label>
        <input  type="text" name="alcance" VALUE="<?php echo $alcanc; ?>">
      </li>
    <li>
        <label> Actividad económica a la que se dedica la empresa</label>
        <input  type="text" name="dedica" VALUE="<?php echo $dedica; ?>">
    </li>
      <li>
      <label> Industria</label>
        <input  type="text" name="industria" VALUE="<?php echo $industria; ?>">
      </li>
     <li>
      <label> Tamaño empresa</label>
        <input  type="text" name="empresa" VALUE="<?php echo $empresa;?>">
      </li>
      <li>
      <label> Direccion</label>
        <input  type="text" name="direccion" VALUE="<?php echo $direccion;?>">
      </li>
      <li>
      <label> Sector</label>
        <input  type="text" name="sector" VALUE="<?php echo $sector; ?>">
      </li>
      <li>
      <label> Seccion</label>
        <input  type="text" name="seccion" VALUE="<?php echo $Seccion; ?>">
      </li>
      <li>
      <label> Municipio</label>
        <input  type="text" name="Municipio" VALUE="<?php echo $Municipio;?>">
      </li>
       <li>
      <label> Provincia</label>
        <input  type="text" name="Provincia" VALUE="<?php echo $Provincia;?>">
      </li>
  <li>
      <label> Nacionalidad</label>
        <input  type="text" name="Nacionalidad" VALUE="<?php echo $Nacionalidad; ?>">
      </li>
      <li>
      <label> Telefono principal</label>
        <input  type="text" name="telefonop" VALUE="<?php echo $telefonop; ?>">
      </li>
  <li>
      <label>Telefono directo </label>
        <input  type="text" name="telefonod" VALUE="<?php echo $telefonod; ?>">
      </li>
  <li>
      <label>Email</label>
        <input  type="email" name="email" VALUE="<?php echo $email; ?>">
      </li>
      <li>
      <label>Contraseña</label>
        <input  type="password" name="clave" VALUE="<?php echo $clave; ?>">
      </li>

<button type="submit" name="editar">Editar</button>
</form>

 
 

 