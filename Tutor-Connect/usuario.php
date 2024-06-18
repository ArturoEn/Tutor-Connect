
<?php
    
    session_start();
    if (!isset($_SESSION['usuario'])){
        echo "
            <script>
                alert('Debes iniciar sesión para ver tu perfil');
                window.location = '/Tutor-Connect/index.php';
            </script>
        ";
        
        session_destroy();
        die();
    }
    include 'assets/php/conexion_bd.php';

    $datos = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$_SESSION[usuario]'");
    $dato = mysqli_fetch_array($datos);
    
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href = "assets/css/estilos_navbar.css">
    <link rel="stylesheet" href = "assets/css/estilos_usuario.css">
	<link rel="icon" type="x-icon" href="/Tutor-Connect/inicio/assets/images/favicon.ico">
    <script>
        function confirmar() {
            return confirm('¿Estás seguro de que deseas eliminar tu perfil?.');
        }
    </script>
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
        <div class='navbar-de'>
            <a href='/Tutor-Connect/assets/php/logout.php'> Cerrar sesion </a>
        </div>
    </nav>

    <div class = "contenedor">
        <div class = "contenedor_foto">
            <img src="/Tutor-Connect/assets/images/usuario.png" alt="foto_perfil">
        </div>
        
        <div class = "informacion">
            <p> <b> Nombre: </b> <?php echo $dato['nombre']; ?>  </p> 
            <p> <b> Correo: </b> <?php echo $dato['correo']; ?> </p>
            <p> <b> Unidad academica: </b> <?php echo $dato['institucion']; ?> </p>
            <p> <b> Grado Escolar: </b> <?php echo $dato['grado']; ?> </p>
            <?php
            if ($dato['tipo'] == "asesor"){

                echo "
                    <p><b> Materia: </b> " . $dato['materia'] . " </p>
                    <p><b> Informacion: </b><br> " . $dato['info'] . " </p>
                ";
                
            }
            ?>
            <p> <b> Tipo de usuario: </b> <?php echo $dato['tipo']; ?> </p>
            <div class="crud-container">
                <a href="assets/php/crud.php" class="crud-link">Editar datos</a>
                <a href="assets/php/eliminar.php" class="crud-link" onclick="return confirmar();">Eliminar Perfil</a>
            </div>
        </div>
    </div>
    <?php mysqli_close($conexion); ?>
</body>
</html>