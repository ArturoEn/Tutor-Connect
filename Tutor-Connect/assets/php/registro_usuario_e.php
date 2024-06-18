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
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel = "stylesheet" href = "../css/estilos_registro_usuario_e.css">
</head>
<body>

    <div class = "contenedor">
        <div class = "info">
            <form action = "registro_asesor.php" class = "registro">
                <p> <b> En qué materia te especializas </b> </p>
                <input type ="text" class = "forma_ma" name = "materia">
                <p> <b> Háblanos un poco sobre ti </b> </p>
                <input type="text" class = "forma_info" placeholder = "En donde estudias, cual es tu especialidad, Etc." name = "info">
                <br>
                <button> <b> Listo </b> </button>
            </form>
        </div>
    </div>

</body>
</html>