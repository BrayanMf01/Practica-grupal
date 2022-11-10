<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Formulario 1 </title>
</head>
<center><h1>Formulario 1</h1></center>
<body>
<div class="container">
<FORM  class="row" METHOD="POST" ACTION="">


        <label for="Año de graduacion">Año de graduacion</label>
        <input type="date" name="fecha"  class="form-input" placeholder="Año de la graduacion"/>
    
        <label for="Institución educativa a la que pertenece">Institución educativa a la que pertenece</label>
        <SELECT NAME="Institucion">
        <OPTION VALUE="Institutos" SELECTED>
        <OPTION VALUE="IPISA" >Ipisa
        <OPTION VALUE="DON Bosco">Don Bosco
        <OPTION VALUE="Politecnico de las mercedes">Politecnico de las mercerdes
        </SELECT>
    
          
        <label for="Curso">Curso</label>
        <SELECT NAME="Institucion">
        <OPTION VALUE="Curso" SELECTED>
        <OPTION VALUE="1ero" >1ero
        <OPTION VALUE="2do">2do
        <OPTION VALUE="3ero">3ro
        <OPTION VALUE="4to">4to  
        </SELECT>


        <label for="Matricula">Matricula</label>
        <input type ="text" name="Asunto" id="Asunto" placeholder=""/>
    
        <label for="Carrera tecnica">Carrera tecnica</label>
        <SELECT NAME="Institucion">
        <OPTION VALUE="Curso" SELECTED>
        <OPTION VALUE="Artes Aplicadas">Artes Aplicadas
        <OPTION VALUE="Artes Culinarias">Artes Culinarias
        <OPTION VALUE="Artes Gráficas">Artes Gráficas
        <OPTION VALUE="Artes Visuales">Artes Visuales
        <OPTION VALUE="Informática">Informática
        </SELECT>

        <label for="Nombre">Nombre</label>
        <input type ="text" name="Nombre" id="Nombre" placeholder=""/>

        <label for="fecha de nacimiento">fecha de nacimiento</label>
        <input type="date" name="fecha de nacimiento" id="fecha de nacimiento" placeholder="fecha de nacimiento"/>


        <label for="Seccion">Seccion</label>
        <input type ="text" name="Seccion" id="Seccion" placeholder=""/>

        <label for="Provincia">Provincia</label>
        <SELECT NAME="Pronvicias">
        <OPTION VALUE="Provincia" SELECTED>
        <OPTION VALUE="Azua">Azua
        <OPTION VALUE="bahoruco">bahoruco
        <OPTION VALUE="Dajabon">Dajabon
        <OPTION VALUE="Distrito Nacional">Distrito Nacional
        <OPTION VALUE="Duarte">Duarte
        <OPTION VALUE="El seibo">El seibo
        <OPTION VALUE="Elias Piña">Elias Piña
        <OPTION VALUE="Espaillat">Espaillat
        <OPTION VALUE="Hato Mayor">Hato Mayor
        <OPTION VALUE="Hermanas Mirabal">Hermanas Mirabal
        <OPTION VALUE="Independencia">Independencia
        <OPTION VALUE="La Altagracia">La Altagracia
        <OPTION VALUE="La Romana">La Romana
        <OPTION VALUE="La vega">La vega
        <OPTION VALUE="Maria Trinidad Sanchez">Maria Trinidad Sanchez
        <OPTION VALUE="Monseñor Nouel">Monseñor Nouel
        <OPTION VALUE="Monte Cristi">Monte Cristi
        <OPTION VALUE="Monte Plata">Monte Plata
        <OPTION VALUE="Pedernales">Pedernales
        <OPTION VALUE="Peravia">Peravia
        <OPTION VALUE="Puerto Plata">Puerto Plata
        <OPTION VALUE="Samana">Samana
        <OPTION VALUE="San cristobal">San cristobal
        <OPTION VALUE="San jose de Ocoa">San jose de Ocoa
        <OPTION VALUE="San juan">San juan
        <OPTION VALUE="San Pedro de Macoris">
        <OPTION VALUE="Sanchez Ramirez">
        <OPTION VALUE="Santiago">
        <OPTION VALUE="Santiago Rodriguez">
        <OPTION VALUE="Santo Domingo">
        <OPTION VALUE="Valverde">   
        </SELECT>
       
        <label for="Nombre">Telefono de Residencial</label>
        <input type ="text" name="TelefonoR"  placeholder=""/>

        <label for="Vivienda">Posee licencia de conducir?</label>
        <INPUT TYPE="checkbox" NAME="extras[]" VALUE="Licencia de conducir">

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="" required />

        <label for="email">Elija una Contraseña</label>
        <INPUT TYPE="password" NAME="clave" required/>

        <label for="Nombre">Cédula de Identidad</label>
        <input type ="text" name="Cedula" id="TCedula" placeholder="Ej.: 001-1234567-1"/>

        <label for="Nombre">Técnico Básico </label>
        <SELECT NAME="Institucion">
        <OPTION VALUE="N/A" SELECTED>N/A
        </SELECT>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" placeholder="Apellido" required />

        <label for="Curso">Sexo</label>
        <SELECT NAME="Genero de la persona">
        <OPTION VALUE="Masculino" SELECTED>Masculino
        <OPTION VALUE="Femenino" >Femenino
        </SELECT>

        <label for="email">Sector</label>
        <input type="text" name="sector" id="sector" placeholder="" required />

        <label for="email">Municipio</label>
        <input type="text" name="Municipio" id="Municipio" placeholder="" required />

        <label for="Pias">Pais de Nacionalidad</label>
        <SELECT NAME="Pais">
        <OPTION VALUE="" SELECTED>
        <option value="1">Afganistán</option>
        <option value="2">Albania</option>
        <option value="3">Alemania</option>
        <option value="4">Andorra</option>
        <option value="5">Angola</option>
        <option value="6">Estados unidos</option>
        <option value="7">Republica Dominicana</option>
        <option value="8">España</option>
        </SELECT>
        
        <label for="Vivienda">Posee vehiculo propio?</label>
        <INPUT TYPE="checkbox" NAME="mini" VALUE="Licencia de conducir">

        <label for="Nombre">Telefono Movil</label>
        <input type ="text" name="TelefonoM"  placeholder=""/>

        <label for="email">Confirmacion de Email</label>
        <input type="email" name="ema"  placeholder="" required />

        <label for="email">Confirme Contraseña</label>
        <INPUT TYPE="pass" NAME="clave" required/>

        <label for="Terminos">Termino y condiciones</label>
        <INPUT TYPE="checkbox" NAME="Condiciones" VALUE="Terminos y condiciones">

        <input type="submit" class="btn btn-primary" name="enviar" value="aceptar"/>
    </form>
    </div>
</body>
<?php