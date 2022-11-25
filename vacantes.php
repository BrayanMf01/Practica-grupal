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
    <title>Registrar una vacante</title>
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
    <h1>Formulario para registro de una vacante</h1>
        <form action="insertar_vacantes.php" method="POST">

                    <label>ID Único de la Empresa:<br></label>
                    <input type="number" name="id" REQUIRED>

                </li>
                <li>
                    <label>Nombre de la Empresa:<br></label>
                    <input name="nombre" REQUIRED>
                </li>
                <li>
                    <label>Nombre del puesto:<br></label>
                    <input name="nombre_puesto" REQUIRED>
                </li>
                <li>
                <label>Funciones o perfil del puesto:<br></label>
                <textarea name="perfil_puesto" REQUIRED></textarea>
                </li>
                <li>
                <label>Sueldo:<br></label>
                <input name="sueldo" REQUIRED>
                </li>
                <li>
                <label>Ubicacion:<br></label>
                <input name="ubicacion" REQUIRED>
                </li>
                <li>
                <label>Tipo de contrato:<br></label>
                <select name="tipo_contrato" REQUIRED>
                    <option value="Temporal" SELECTED>Temporal
                    <option value="Fijo" SELECTED>Fijo
                </select>
                </li>
                <li>
                <label>Horario:<br></label>
                <input name="horario" REQUIRED>  
                </li>
                <li>
                <label>Correo para fines de curriculum:<br></label>
                <input type="email" name="correo_curriculum" REQUIRED>  
                </li>
                <li>
                <label>Persona de Contacto:<br></label>
                <input name="persona_contacto" REQUIRED>  
                </li>
                <li>
                <label>Teléfono:<br></label>
                <input name="telefono_contacto" REQUIRED>  
                </li>
                <button type="submit">Enviar Datos</button>
            </ul>
       

<button onclick="location.href='control_vacantes.php'">Control Vacantes</button>
</body>
</html>