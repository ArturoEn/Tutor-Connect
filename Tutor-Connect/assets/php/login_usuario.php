<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<?php
    session_start();
    include 'conexion_bd.php';
    
    $validar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$_REQUEST[correo]' and contrasena = '$_REQUEST[contrasena]' ");
    
    if(mysqli_num_rows($validar) > 0){
        $_SESSION['usuario'] = $_REQUEST['correo'];
        echo "
            <script>
                window.location = '../../inicio/views/inicio.php';
            </script>
        ";

    }else{
        echo "
            <script>
                alert('El correo o la contraseña son incorrectos');
                window.location = '/Tutor-Connect/index.php';
            </script>
        ";
    }

    mysqli_close($conexion);
?>
</body>
</html>