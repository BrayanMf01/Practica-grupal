<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Css/estilos_vacantes.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
        
        <title>Actualizar</title>
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
<center><h1>Editar Información de Estudiantes</h1></center>

<?php
include_once 'Conexion F1.php';
$id = $_REQUEST['id_alumno'];

$sql = "SELECT * FROM alumnos where ID_Alumno=$id;";

$result = mysqli_query($conexiones, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    $row = mysqli_fetch_assoc($result);
    $graduacion=$row['año_graduacion'];
    $institucion_educativa=$row['institucion_educativa']; 
    $curso=$row['curso'];
    $matricula=$row['matricula']; 
    $cedula=$row['cedula'];
    $carrera_tecnica=$row['carrera_tecnica']; 
    $tecnico_basico=$row['tecnico_basico'];
    $Nombres=$row['Nombres'];
    $Apellidos=$row['Apellidos'];
    $fecha_nacimiento=$row['fecha_nacimiento'];
    $sexo=$row['sexo'];
    $direccion = $row['direccion'];
    $sector=$row['sector'];
    $seccion=$row['seccion'];
    $municipio=$row['municipio'];
    $provincia=$row['provincia'];
    $nacionalidad=$row['nacionalidad'];
    $tel_res=$row['tel_res'];
    $num_cel=$row['num_cel'];
    $licencia=$row['licencia'];
    $vehiculo=$row['vehiculo'];
    $email=$row['email'];
    $contraseña=$row['contraseña'];
}
?>
    

    <form method="POST" action="Atualizar.php">
<ul>
        <li>
        <label>ID Estudiante<br></label>
        <input name="id" value="<?php echo $id?>" >
        </li>
        <li>
        <label for="Año de graduacion">Año de graduación<br></label>
        <input type="date" name="graduacion"  value="<?php echo $graduacion?>" required>
        </li>
        <li>
        <label for="Institución educativa a la que pertenece">Institución Educativa  a la que pertenece<br></label>
        <SELECT NAME="Institucion" required>
        <OPTION VALUE="Institutos">
        <OPTION VALUE="IPISA" >IPISA
        <OPTION VALUE="Don Bosco">Don Bosco
        <OPTION VALUE="Politécnico Las Mercedes">Politécnico Las Mercerdes
        </SELECT>
        </li>
        <li>
        <label for="Curso">Curso<br></label>
        <SELECT NAME="Curso" required>
        <OPTION VALUE="Curso">
        <OPTION VALUE="1ero" >1ero
        <OPTION VALUE="2do">2do
        <OPTION VALUE="3ero">3ro
        <OPTION VALUE="4to">4to  
        </SELECT>
        </li>

        <li>
        <label for="Matrícula">Matrícula<br></label>
        <input type ="text" name="Matricula" value="<?php echo $matricula?>" required>
        </li>
        <li>
        <label for="Carrera tecnica">Carrera técnica<br></label>
        <SELECT NAME="CarerraTecnica" required>
        <OPTION VALUE="Curso" SELECTED>
        <OPTION VALUE="Artes Aplicadas">Artes Aplicadas
        <OPTION VALUE="Artes Culinarias">Artes Culinarias
        <OPTION VALUE="Artes Gráficas">Artes Gráficas
        <OPTION VALUE="Artes Visuales">Artes Visuales
        <OPTION VALUE="Informática">Informática
        </SELECT>
        </li>
        <li>
        <label for="Nombre">Nombre<br></label>
        <input type ="text" name="Nombre" value="<?php  echo $Nombres ?>" required>
        </li>
        <li>
        <label for="apellidos">Apellidos<br></label>
        <input type="text" name="apellidos" value="<?php  echo $Apellidos ?>" required >
        </li>
        <li>
        <label for="fecha de nacimiento">Fecha de Nacimiento<br></label>
        <input type="date" name="fechaNacimiento" value="<?php  echo $fecha_nacimiento ?>" required>
        </li>
        <li>
        <label for="Seccion">Sección<br></label>
        <input type ="text" name="Seccion" value="<?php  echo $seccion ?>" required>
        </li>
        <li>
        <label for="Provincia">Provincia<br></label>
        <SELECT NAME="Provincia" required>
        <OPTION VALUE="Provincia" SELECTED>
        <OPTION VALUE="Azua">Azua
        <OPTION VALUE="Bahoruco">Bahoruco
        <OPTION VALUE="Dajabon">Dajabon
        <OPTION VALUE="Distrito Nacional">Distrito Nacional
        <OPTION VALUE="Duarte">Duarte
        <OPTION VALUE="El seibo">El seibo
        <OPTION VALUE="Elias Piña">Elías Piña
        <OPTION VALUE="Espaillat">Espaillat
        <OPTION VALUE="Hato Mayor">Hato Mayor
        <OPTION VALUE="Hermanas Mirabal">Hermanas Mirabal
        <OPTION VALUE="Independencia">Independencia
        <OPTION VALUE="La Altagracia">La Altagracia
        <OPTION VALUE="La Romana">La Romana
        <OPTION VALUE="La vega">La Vega
        <OPTION VALUE="Maria Trinidad Sanchez">Maria Trinidad Sánchez
        <OPTION VALUE="Monseñor Nouel">Monseñor Nouel
        <OPTION VALUE="Monte Cristi">Monte Cristi
        <OPTION VALUE="Monte Plata">Monte Plata
        <OPTION VALUE="Pedernales">Pedernales
        <OPTION VALUE="Peravia">Peravia
        <OPTION VALUE="Puerto Plata">Puerto Plata
        <OPTION VALUE="Samana">Samaná
        <OPTION VALUE="San cristobal">San Cristóbal
        <OPTION VALUE="San jose de Ocoa">San José  de Ocoa
        <OPTION VALUE="San juan">San Juan
        <OPTION VALUE="San Pedro de Macoris">San Pedro de Macorís
        <OPTION VALUE="Sanchez Ramirez">Sánchez Ramírez
        <OPTION VALUE="Santiago">Santiago
        <OPTION VALUE="Santiago Rodriguez">Santiago Rodríguez
        <OPTION VALUE="Santo Domingo">Santo Domingo
        <OPTION VALUE="Valverde">Valverde   
        </SELECT>
        </li>
        <label for="Nombre">Teléfono de Residencial<br></label>
        <input type ="text" name="TelefonoResidencial"  value="<?php  echo $tel_res ?>" required>
        <li>   
        <label for="Vivienda">Posee licencia de conducir?<br></label>
        <INPUT TYPE="radio" NAME="licencia" VALUE="Si">Si
        <INPUT TYPE="radio" NAME="licencia" VALUE="No">No

        </li>
        <li>
        <label for="Nombre">Cédula de Identidad<br></label>
        <input type ="text" name="Cedula" value="<?php  echo $cedula ?>" required>
        </li>
        <li>
        <label for="Tbasico">Técnico Básico<br></label>
        <SELECT NAME="TecnicoBasico">
        <OPTION VALUE="N/A" SELECTED>N/A
        </SELECT>
        </li>
        <li>
        <label for="sexo">Sexo<br></label>
        <SELECT NAME="sexo">
        <OPTION VALUE="M">Masculino
        <OPTION VALUE="F">Femenino
        </SELECT>
        </li>
        <li>
        <label for="sector">Dirección<br></label>
        <input type="text" name="direccion" value="<?php  echo $direccion ?>" >
        </li>
        <li>
        <label for="sector">Sector<br></label>
        <input type="text" name="sector" value="<?php  echo $sector ?>" >
        </li>
        <li>
        <label for="Municipio">Municipio<br></label>
        <input type="text" name="Municipio" value="<?php  echo $municipio ?>">
        </li>
        <li>
        <label for="País">Pais de Nacionalidad<br></label>
        <SELECT NAME="Nacionalidad">
        <OPTION VALUE="" SELECTED>
        <option value="Afganistán">Afganistán</option>
        <option value="Albania">Albania</option>
        <option value="Alemania">Alemania</option>
        <option value="Andorra">Andorra</option>
        <option value="5">Angola</option>
        <option value="Angola">Estados unidos</option>
        <option value="Republica Dominicana">Republica Dominicana</option>
        <option value="España">España</option>
        </SELECT>
        </li>
        <li>
        <label for="Vivienda">Posee vehículo propio?<br></label>
        <input TYPE="radio" NAME="vehiculo" VALUE="Si">Si
        <input TYPE="radio" NAME="vehiculo" VALUE="No">No
        </li>
        <li>
        <label for="Nombre">Telefono Móvil<br></label>
        <input type ="text" name="TelefonoMovil" value="<?php echo $num_cel ?>" required>
        </li>
        <li>
        <label for="email">Email<br></label>
        <input type="email" name="email"  value="<?php echo $email ?>" required>
        </li>
        <label for="email">Elíja una Contraseña<br></label>
        <INPUT TYPE="password" NAME="clave" value="<?php  echo $contraseña ?>" required/>
        <li>
        <input type="submit" name="enviar" value="Editar" >
        </li>
        </ul>
    </form>
    </body>
</html>