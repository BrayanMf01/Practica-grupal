<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/estilos_vacantes.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
    <link rel="Shortcut icon" type="image/x-icon" href="img/Logo.jpg">
    <title>Registro de Empresa</title>
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
            <li><a class="active" href="familia.html">Familia</a></li>
            <li><a href="Registros.html">Registros</a></li>
        </ul>
    </nav>

</header>
<body>
<h1>Formulario de Registro de Empresas</h1>
   <form class="row" METHOD="POST" ACTION="guardar.php">
    <ul>
      <li>
        <label>Nombre de la Empresa:</label>
        <input  type="text" name="nombre">
      </li>
      <li>
        <label>RNC:</label>
        <input type="text" name="RNC">
      </li>
      <li>
        <label>¿Desea que se concozca su empresa?:</label>
        <input type="radio" name="conoce" value="Si" CHECKED> Si
        <input type="radio" name="conoce" value="No" CHECKED> No
      </li>
      <li>
        <label>¿Dispone su empresa un departamento de Formación dentro de la empresa?:</label>
        <input type="radio" name="formacion" value="Si" CHECKED> Si
        <input type="radio" name="formacion" value="No" CHECKED> No
      </li>
      <li>
        <label>Alcance de la empresa:</label>
        <input type="radio" name="alcance" value="Nacional/Local" CHECKED> Nacional/Local
        <input type="radio" name="alcance" value="Multinacional" CHECKED> Multinacional
      </li>
      <li>
        <label> Actividad económica a la que se dedica la empresa</label>
        <textarea name="dedica"></textarea>
      </li>
      <li>
        <label>Industria:</label>
        <select name="industria">
            <option value="Agrícola" SELECTED>Agrícola
            <option value="Comercio" SELECTED>Comercio
            <option value="Ganadería" SELECTED>Ganadería
            <option value="Industria de Extracción" SELECTED>Industria de Extracción
            <option value="Industria de Manufactura" SELECTED>Industria de Manufactura
            <option value="Otra" SELECTED>Otra
            <option value="Servicio" SELECTED>Servicio


        </select>
        </li>
        <label>Tamaño empresa:</label>
        <select name="empresa">
            <option value="grande" SELECTED>Grande
            <option value="Mediana" SELECTED>Mediana
            <option value="pequeña" SELECTED>Pequeñas
        </select>
        <label for="Direccion">Direccion</label>
        <input type ="text" name="direccion" id="direccion" placeholder="direccion"/>

        <label for="Sector">Sector</label>
        <input type ="text" name="sector" id="sector" placeholder="sector"/>
      
        <label for="Seccion">Seccion</label>
        <input type ="text" name="Seccion" id="Seccion" placeholder="seccion"/>

        <label for="">Municipio</label>
        <input type ="text" name="Municipio" id="Municipio" placeholder="Municipio"/>

      

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

     
        <label for="">Pais de Nacionalidad</label>
        <select name="Nacionalidad">
        <OPTION VALUE="Pais" SELECTED>
        <option value="Afganistán">Afganistán</option>
        <option value="Albania">Albania</option>
        <option value="Alemania">Alemania</option>
        <option value="Andorra">Andorra</option>
        <option value="Angola">Angola</option>
        <option value="Estados unidos">Estados unidos</option>
        <option value="Republica Dominicana">Republica Dominicana</option>
        <option value="España">España</option>
        </select>



        <label for="Telefono Principal">Telefono Principal</label>
        <input type ="text" name="telefonop" id="Telefonop" placeholder="Telefono principal"/>

        <label for="Telefono directo">Telefono directo</label>
        <input type ="text" name="telefonod" id="Telefonod" placeholder="Telefono directo"/>

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="" required />

        <label>Contraseña:</label>
        <input type="password" name="clave" required>
        <button type="submit">Procesar</button>
    </ul>

    </form> 
    <form action="EMPRESAS.php">
    <button>Editar</button>
    </form>


</body>
</html>