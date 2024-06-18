<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel = "stylesheet" href = "../css/estilos_registro_usuario.css">
</head>
<body>
    <?php
        include 'conexion_bd.php';

        $verificar_correo = mysqli_query($conexion, "SELECT correo FROM usuarios WHERE correo = '$_REQUEST[correo]'");

        if(mysqli_num_rows($verificar_correo) > 0){

            echo "
            <div class = 'contenedor__registro'>
            
                <div class = 'contenedor__mensaje'>
            
                    <div class = 'mensaje'>
                        <p> El correo ingresado ya existe </p>
                        <a href = '/Tutor-Connect/index.php'> Regresar </a>
                    </div>
                </div>
            </div>
            ";

        }else{

            /* Para encriptar
            $contrasena = $_REQUEST['contrasena'];
            $contrasena = hash('sha512', $contrasena);
            */

            mysqli_query($conexion, "INSERT INTO usuarios(nombre, correo, institucion, grado, contrasena, tipo) VALUES
                        ('$_REQUEST[nombre]', 
                        '$_REQUEST[correo]', 
                        '$_REQUEST[institucion]', 
                        '$_REQUEST[grado]',
                        '$_REQUEST[contrasena]', 
                        '$_REQUEST[tipo]')");
            
            if ($_REQUEST['tipo'] == 'asesor'){
                session_start();
                $_SESSION['usuario'] = $_REQUEST['correo'];
                echo "
                    <div class = 'contenedor__registro'>
                        <div class = 'contenedor__mensaje'>
                            <div class = 'mensaje'>
                                <p> Te has registrado como asesor </p>
                                <p> Presiona abajo para continuar con tu registro </p>
                                <a href = 'registro_usuario_e.php'> Continuar </a>
                            </div>
                        </div>
                    </div>

                ";
            }else{
                session_start();
                $_SESSION['usuario'] = $_REQUEST['correo'];
                echo "

                    <div class = 'contenedor__registro'>
                        <div class = 'contenedor__mensaje'>
                            <div class = 'mensaje'>
                                <p> Los datos fueron registados ;) </p>
                                <a href = '../../inicio/views/inicio.php'> ir al inicio </a>
                            </div>
                        </div>
                    </div>

                ";
            }
        }
    mysqli_close($conexion);
    ?>
</body>
</html>

