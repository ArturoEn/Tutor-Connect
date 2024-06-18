
<?php
    
    session_start();
    if (!isset($_SESSION['usuario'])){
        echo "
            <script>
                window.location = '/Tutor-Connect/index.php';
            </script>
        ";
        
        session_destroy();
        die();
    }
    include 'conexion_bd.php';
    //$conexion = mysqli_connect("localhost:3307", "root", "", "tutor_connect");

    $datos = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$_SESSION[usuario]'");
    $dato = mysqli_fetch_array($datos);
    
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href = "../css/estilos_crud.css">
</head>
<body>
    <div class = "contenedor">
        <div class = "contenedor_foto">
            <img src="/Tutor-Connect/assets/images/usuario.png" alt="foto_perfil">
        </div>
        
        <form class = "informacion" action = "login_usuario_e.php" >
            <input type="text" placeholder = "Nombre completo" name = "nombre"> <br>
            <input type="text" placeholder = "Correo" name = "correo"> <br>
            <input type="text" placeholder = "Unidad academica" name = "institucion"> <br>
            <input type="text" placeholder = "Grado escolar" name = "grado"> <br>
            <?php
            if ($dato['tipo'] == "asesor"){

                echo "
                    <input type = 'text' placeholder = 'Materia' name = 'materia'> <br>
                    <input type = 'text' placeholder = 'Sobre ti' name = 'info'> <br>
                ";
                
            }
            ?>
            <br>
            <a class = "boton" href="../../usuario.php"> Cancelar </a>
            <button class = "boton" type = "submit"> Guardar Cambios </button>
        </form>
    </div>
    <?php mysqli_close($conexion); ?>
</body>
</html>