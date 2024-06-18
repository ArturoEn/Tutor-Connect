<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel = "stylesheet" href = "assets/css/estilos.css">
	<link rel="icon" type="x-icon" href="/Tutor-Connect/inicio/assets/images/favicon.ico">
    
</head>
<body>

    <!--Contenedor de toda la estructura-->
    <div class="contenedor__todo">

        <!--Cajas traseras-->
        <div class="caja__trasera">

            <!--Parte del login-->
            <div class="caja__trasera__login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para acceder a la página</p>
                <button id = "btn__iniciar__sesion">Presiona aquí</button>
            </div>

            <!--Parte del Register-->
            <div class="caja__trasera__register">
                <h3>¿Aún no estas registrado?</h3>
                <p>Regístrate para iniciar sesión</p>
                <button id = "btn__register">Presiona aquí</button>
            </div>

        </div>

        <!--Caja delantera-->
        <div class="contenedor__login__register">

            <!--Caja delantera Login-->
            <form action="assets/php/login_usuario.php" class="formulario__login">
                <h2>Iniciar sesión</h2>
                <input type="text" placeholder="Correo electrónico" name = "correo">
                <input type="password" placeholder="Contraseña" name = "contrasena">
                <button> Entrar </button>
                <a href="inicio/views/inicio.php"> <img src = "assets/images/logo.png" alt="logo" width="100"> </a>
            </form>

            <!--Caja delantera Register-->
            <form action="assets/php/registro_usuario.php" class="formulario__register">
                <h2>Crea una cuenta</h2>
                <input type="text" placeholder="Nombre completo" name = "nombre">
                <input type="email" placeholder="Correo electrónico" name = "correo">
                <input type="text" placeholder="Institución académica" name = "institucion">
                <input type="text" placeholder="Nivel académico" name = "grado">
                <input type="password" placeholder="Contraseña" name = "contrasena">
                <select name = "tipo">
                    <option value = ""> - Tipo de usuario - </option>
                    <option value = "alumno"> Alumno </option>
                    <option value = "asesor"> Asesor </option>
                </select>
                <br>
                <button> Registrarse </button>
                <a href="inicio/views/inicio.php"> <img src = "assets/images/logo.png" alt="logo" width="100"> </a>
            </form>

        </div>

    </div>

    <script src = "assets/js/script.js"> </script>

</body>
</html>