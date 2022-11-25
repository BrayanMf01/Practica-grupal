<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
</head>
<body>
    
<h3>Editar estudiante </h3>
<?php

include_once 'Conexion F3.php';
$id= $_REQUEST['ID_Empresa']; 

$sql = "SELECT * FROM empresas WHERE ID_Empresa = $id;";
$result = mysqli_query($conexiones, $sql);
$resultcheck  = mysqli_num_rows($result);

  if($resultcheck > 0){

$row = mysqli_fetch_assoc($result);
$nombre=$row['nombre'];
$RNC=$row['RNC'];
$conoce=$row['identidad_empresa'];
$formacion=$row['dep_form_lab'];
$alcance=$row['alcance'];
$dedica=$row['actividad_economica'];
$industria=$row['industria'];
$empresa=$row['tamaño_empresa'];
$direccion=$row['direccion'];
$sector=$row['sector'];
$Seccion=$row['seccion'];
$Municipio=$row['municipio'];
$Provincia=$row['provinica'];
$Nacionalidad=$row['pais'];
$telefonop=$row['tel_princip'];
$telefonod=$row['tel_direct'];
$email=$row['email'];
$clave=$row['contraseña'];
   
 }

?>
<form action="actualizarESTUDIANTES.php" method="POST">
    <ul>
        <li>
            <label>ID_Empresa</label>
            <input name="id" VALUE="<?php echo $id?>" ><br></br>
 </li>

 <li>
        <label>Nombre de la Empresa:</label>
        <input  type="text" name="nombre" VALUE="<?php echo $nombre;?>" ><br></br>
      </li>
      <li>
        <label>RNC:</label> 
        <input type="text" name="RNC" VALUE="<?php echo $RNC;?>" ><br></br> 
      </li>
      <li>
        <label>¿Desea que se concozca su empresa?:</label> 
        <input  type="text" name="conoce" VALUE="<?php echo $conoce;?>" ><br></br>
      </li>
      <li>
        <label>¿Dispone su empresa un departamento de Formación dentro de la empresa?:</label>
        <input  type="text" name="formacion" VALUE="<?php echo $formacion; ?>" ><br></br>
      </li>
      <li>
        <label>Alcance de la empresa:</label>
        <input  type="text" name="alcance" VALUE="<?php echo $alcance; ?>" ><br></br>
      </li>
    <li>
        <label> Actividad económica a la que se dedica la empresa</label>
        <input  type="text" name="dedica" VALUE="<?php echo $dedica; ?>" ><br></br>
    </li>
      <li>
      <label> Industria</label>
        <input  type="text" name="industria" VALUE="<?php echo $industria; ?>" ><br></br>
      </li>
     <li>
      <label> Tamaño empresa</label>
        <input  type="text" name="empresa" VALUE="<?php echo $empresa;?>"><br></br>
      </li>
      <li>
      <label> Direccion</label>
        <input  type="text" name="direccion" VALUE="<?php echo $direccion;?>" ><br></br>
      </li>
      <li>
      <label> Sector</label>
        <input  type="text" name="sector" VALUE="<?php echo $sector; ?>" ><br></br>
      </li>
      <li>
      <label> Seccion</label>
        <input  type="text" name="seccion" VALUE="<?php echo $Seccion; ?>" ><br></br>
      </li>
      <li>
      <label> Municipio</label>
        <input  type="text" name="Municipio" VALUE="<?php echo $Municipio;?>" ><br></br>
      </li>
       <li>
      <label> Provincia</label>
        <input  type="text" name="Provincia" VALUE="<?php echo $Provincia;?>" ><br></br>
      </li>
  <li>
      <label> Nacionalidad</label>
        <input  type="text" name="Nacionalidad" VALUE="<?php echo $Nacionalidad; ?>" ><br></br>
      </li>
      <li>
      <label> Telefono principal</label>
        <input  type="text" name="telefonop" VALUE="<?php echo $telefonop; ?>" ><br></br>
      </li>
  <li>
      <label>Telefono directo </label>
        <input  type="text" name="telefonod" VALUE="<?php echo $telefonod; ?>" ><br></br>
      </li>
  <li>
      <label>Email</label>
        <input  type="email" name="email" VALUE="<?php echo $email; ?>" ><br></br>
      </li>
      <li>
      <label>Contraseña</label>
        <input  type="password" name="clave" VALUE="<?php echo $clave; ?>" ><br></br>
      </li>

<button type="submit" name="editar">Editar</button>
</form>

 
 

</body>