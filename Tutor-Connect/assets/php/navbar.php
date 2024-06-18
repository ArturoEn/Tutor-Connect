
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="/Tutor-Connect/assets/css/estilos_navbar.css">
</head>
<body>
    <nav class="navbar_main">
        <div class="navbar-iz">
            <img src="/Tutor-Connect/assets/images/logo.png" alt="logo">
            <a href="/Tutor-Connect/inicio/views/inicio.php">Inicio</a>
            <a href="/Tutor-Connect/assets/php/usuarios.php">Asesores</a>
            <a href="/Tutor-Connect/usuario.php">Perfil</a>
            <a href="/Tutor-Connect/ayuda/ayuda.html">Soporte</a>
        </div>
        <?php
            session_start();
            if (!isset($_SESSION['usuario'])){
                echo"
                    <div class='navbar-de'>
                        <a href='/Tutor-Connect/index.php'> Iniciar sesion</a>
                    </div>
                ";
            }else{
                echo"
                    <div class='navbar-de'>
                        <a href='/Tutor-Connect/assets/php/logout.php'> Cerrar sesion </a>
                    </div>
                ";
            }
        ?>
    </nav>
</body>
</html>