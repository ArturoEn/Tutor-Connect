<?php
    session_start();
    include 'conexion_bd.php';
    
    $datos = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$_SESSION[usuario]' ");
    $dato = mysqli_fetch_array($datos);
    
    mysqli_query($conexion,"DELETE FROM usuarios WHERE correo = '$_SESSION[usuario]' ");

    session_destroy();
    echo "
            <script>
                alert('Usuario eliminado correctamente');
                window.location = '../../inicio/views/inicio.php';
            </script>
    ";

    mysqli_close($conexion);
?>