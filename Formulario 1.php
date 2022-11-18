<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/estilos_index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="Shortcut icon" type="image/x-icon" href="img/Logo.jpg">
    <title>Formulario 1 </title>
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
<center><h1>Formulario de Registro de Estudiantes</h1></center>
<body>
<div class="container">
<FORM  class="row" METHOD="POST" ACTION="Conexion F1.php">


        <label for="Año de graduacion">Año de graduación</label>
        <input type="date" name="graduacion"  class="form-input" placeholder="Año de la graduacion"/>
    
        <label for="Institución educativa a la que pertenece">Institución Educativa  a la que pertenece</label>
        <SELECT NAME="Institucion">
        <OPTION VALUE="Institutos" SELECTED>
        <OPTION VALUE="IPISA" >IPISA
        <OPTION VALUE="Don Bosco">Don Bosco
        <OPTION VALUE="Politécnico Las Mercedes">Politécnico Las Mercerdes
        </SELECT>
    
          
        <label for="Curso">Curso</label>
        <SELECT NAME="Curso">
        <OPTION VALUE="Curso" SELECTED>
        <OPTION VALUE="1ero" >1ero
        <OPTION VALUE="2do">2do
        <OPTION VALUE="3ero">3ro
        <OPTION VALUE="4to">4to  
        </SELECT>


        <label for="Matrícula">Matrícula</label>
        <input type ="text" name="Matricula" id="Asunto" placeholder=""/>
    
        <label for="Carrera tecnica">Carrera técnica</label>
        <SELECT NAME="CarerraTecnica">
        <OPTION VALUE="Curso" SELECTED>
        <OPTION VALUE="Artes Aplicadas">Artes Aplicadas
        <OPTION VALUE="Artes Culinarias">Artes Culinarias
        <OPTION VALUE="Artes Gráficas">Artes Gráficas
        <OPTION VALUE="Artes Visuales">Artes Visuales
        <OPTION VALUE="Informática">Informática
        </SELECT>

        <label for="Nombre">Nombre</label>
        <input type ="text" name="Nombre" id="Nombre" placeholder=""/>

        <label for="fecha de nacimiento">Fecha de Nacimiento</label>
        <input type="date" name="fechaNacimiento" id="fechaN" placeholder="fecha de nacimiento"/>


        <label for="Seccion">Sección</label>
        <input type ="text" name="Seccion" id="Seccion" placeholder=""/>

        <label for="Provincia">Provincia</label>
        <SELECT NAME="Provincia">
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
        <OPTION VALUE="San juan">San juan
        <OPTION VALUE="San Pedro de Macoris">San Pedro de Macorís
        <OPTION VALUE="Sanchez Ramirez">Sánchez Ramírez
        <OPTION VALUE="Santiago">Santiago
        <OPTION VALUE="Santiago Rodriguez">Santiago Rodríguez
        <OPTION VALUE="Santo Domingo">Santo Domingo
        <OPTION VALUE="Valverde">Valverde   
        </SELECT>
       
        <label for="Nombre">Teléfono de Residencial</label>
        <input type ="text" name="TelefonoResidencial"  placeholder=""/>

        <label for="Vivienda">Posee licencia de conducir?</label>
        <INPUT TYPE="checkbox" NAME="Licenciaconducir" VALUE="Si pose licencia de conducir">


        <label for="Nombre">Cédula de Identidad</label>
        <input type ="text" name="Cedula" id="TCedula" placeholder="Ej.: 001-1234567-1"/>

        <label for="Tbasico">Técnico Básico </label>
        <SELECT NAME="TecnicoBasico">
        <OPTION VALUE="N/A" SELECTED>N/A
        </SELECT>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" placeholder="Apellido" required />

        <label for="sexo">Sexo</label>
        <SELECT NAME="sexoN">
        <OPTION VALUE="Masculino" SELECTED>Masculino
        <OPTION VALUE="Femenino" >Femenino
        </SELECT>

        <label for="sector">Sector</label>
        <input type="text" name="sector" id="sector" placeholder="" required />

        <label for="Municipio">Municipio</label>
        <input type="text" name="Municipio" id="Municipio" placeholder="" required />

        <label for="País">Pais de Nacionalidad</label>
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
        
        <label for="Vivienda">Posee vehículo propio?</label>
        <INPUT TYPE="checkbox" NAME="Vehiculo" VALUE="Si pose vehiculo">

        <label for="Nombre">Telefono  Móvil</label>
        <input type ="text" name="TelefonoMovil"  placeholder=""/>

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="" required />

        <label for="email">Elíja una Contraseña</label>
        <INPUT TYPE="password" NAME="clave" required/>

        <label for="Terminos">Términos y condiciones</label>
        <INPUT TYPE="checkbox" NAME="Condiciones" VALUE="Terminos y condiciones">

        <input type="submit" class="btn btn-primary" name="enviar" value="aceptar"/>
    </form>
    <?php 

require("conexion F1.php");
insertar($mysqli);
function insertar ($mysqli){
    $graduacion=$_POST['graduacion'] ?? null;
    $Institucion=$_POST['Institucion'] ?? null; 
    $Curso=$_POST['Curso'] ?? null;
    $Matricula=$_POST['Matricula'] ?? null; 
    $Cedula=$_POST['Cedula'] ?? null;
    $CarerraTecnica=$_POST['CarerraTecnica'] ?? null; 
    $TecnicoBasico=$_POST['TecnicoBasico'] ?? null;
    $Nombre=$_POST['Nombre'] ?? null;
    $apellidos=$_POST['apellidos'] ?? null;
    $fechaNacimiento=$_POST['fechaNacimiento'] ?? null;
    $sexoN=$_POST['sexoN'] ?? null;
    $direccion = $_POST['direccion']?? null;
    $sector=$_POST['sector'] ?? null;
    $Seccion=$_POST['Seccion'] ?? null;
    $Municipio=$_POST['Municipio'] ?? null;
    $Provincia=$_POST['Provincia'] ?? null;
    $Nacionalidad=$_POST['Nacionalidad'] ?? null;
    $TelefonoResidencial=$_POST['TelefonoResidencial'] ?? null;
    $TelefonoMovil=$_POST['TelefonoMovil'] ?? null;
    $Licenciaconducir=$_POST['Licenciaconducir'] ?? null;
    $Vehiculo=$_POST['Vehiculo'] ?? null;
    $email=$_POST['email'] ?? null;
    $clave=$_POST['clave'] ?? null;


    $query= "insert into alumnos values(default,'$graduacion','$Institucion','$Curso','$Matricula','$Cedula','$CarerraTecnica','$TecnicoBasico','$Nombre','$apellidos','$fechaNacimiento','$sexoN','$direccion','$sector','$Seccion','$Municipio','$Provincia','$Nacionalidad','$TelefonoResidencial','$TelefonoMovil','$Licenciaconducir','$Vehiculo','$email','$clave')";

    $result=mysqli_query($mysqli,$query);
}
mysqli_close($mysqli);

?>
    </div>
</body>
