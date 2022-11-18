<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="Css/Estilos_estudiantes">
    <link rel="Shortcut icon" type="image/x-icon" href="img/Logo.jpg">
    <title>Estudiantes</title>
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
<center><h1>Estudiantes</h1></center>
<body>
<div class="container">
<FORM  class="row" METHOD="POST" ACTION="almacen.php">
<ul>
        <li>
        <label for="Año de graduacion">Año de graduación<br></label>
        <input type="date" name="graduacion"  class="form-input" placeholder="Año de la graduacion"/>
        </li>
        <li>
        <label for="Institución educativa a la que pertenece">Institución Educativa  a la que pertenece<br></label>
        <SELECT NAME="Institucion">
        <OPTION VALUE="Institutos" SELECTED>
        <OPTION VALUE="IPISA" >IPISA
        <OPTION VALUE="Don Bosco">Don Bosco
        <OPTION VALUE="Politécnico Las Mercedes">Politécnico Las Mercerdes
        </SELECT>
        </li>
        <li>
        <label for="Curso">Curso<br></label>
        <SELECT NAME="Curso">
        <OPTION VALUE="Curso" SELECTED>
        <OPTION VALUE="1ero" >1ero
        <OPTION VALUE="2do">2do
        <OPTION VALUE="3ero">3ro
        <OPTION VALUE="4to">4to  
        </SELECT>
        </li>

        <li>
        <label for="Matrícula">Matrícula<br></label>
        <input type ="text" name="Matricula" id="Asunto" placeholder=""/>
        </li>
        <li>
        <label for="Carrera tecnica">Carrera técnica<br></label>
        <SELECT NAME="CarerraTecnica">
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
        <input type ="text" name="Nombre" id="Nombre" placeholder=""/>
        </li>
        <li>
        <label for="fecha de nacimiento">Fecha de Nacimiento<br></label>
        <input type="date" name="fechaNacimiento" id="fechaN" placeholder="fecha de nacimiento"/>
        </li>
        <li>
        <label for="Seccion">Sección<br></label>
        <input type ="text" name="Seccion" id="Seccion" placeholder=""/>
        </li>
        <li>
        <label for="Provincia">Provincia<br></label>
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
        </li>
        <label for="Nombre">Teléfono de Residencial<br></label>
        <input type ="text" name="TelefonoResidencial"  placeholder=""/>
        <li>
        <label for="Vivienda">Posee licencia de conducir?<br></label>
        <INPUT TYPE="checkbox" NAME="licencia" VALUE="Si pose licencia de conducir">
        </li>
        <li>
        <label for="Nombre">Cédula de Identidad<br></label>
        <input type ="text" name="Cedula" id="TCedula" placeholder="Ej.: 001-1234567-1"/>
        </li>
        <li>
        <label for="Tbasico">Técnico Básico<br></label>
        <SELECT NAME="TecnicoBasico">
        <OPTION VALUE="N/A" SELECTED>N/A
        </SELECT>
        </li>
        <li>
        <label for="apellidos">Apellidos<br></label>
        <input type="text" name="apellidos" id="apellidos" placeholder="Apellido" required />
        </li>
        <li>
        <label for="sexo">Sexo<br></label>
        <SELECT NAME="sexoN">
        <OPTION VALUE="Masculino" SELECTED>Masculino
        <OPTION VALUE="Femenino" >Femenino
        </SELECT>
        </li>
        <li>
        <label for="sector">Sector<br></label>
        <input type="text" name="sector" id="sector" placeholder="" required />
        </li>
        <li>
        <label for="Municipio">Municipio<br></label>
        <input type="text" name="Municipio" id="Municipio" placeholder="" required />
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
        <INPUT TYPE="checkbox" NAME="Vehiculo" VALUE="Si pose vehiculo">
        </li>
        <li>
        <label for="Nombre">Telefono Móvil<br></label>
        <input type ="text" name="TelefonoMovil"  placeholder=""/>
        </li>
        <li>
        <label for="email">Email<br></label>
        <input type="email" name="email" placeholder="" required />
        </li>
        <label for="email">Elíja una Contraseña<br></label>
        <INPUT TYPE="password" NAME="clave" required/>
        <li>
        <label for="Terminos">Términos y condiciones<br></label>
        <INPUT TYPE="checkbox" NAME="Condiciones" VALUE="Terminos y condiciones">
        </li>
        <li>
        <input type="submit" class="btn btn-primary" name="enviar" value="aceptar"/>
        </li>
        </ul>
    </form>
    <form action="Estudiante.php">
    <input type="submit" class="btn btn-primary" name="enviar" value="Admin"/>
    </form>

    </div>
</body>
