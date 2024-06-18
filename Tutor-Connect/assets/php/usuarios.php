
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
    <link rel="stylesheet" href="../css/estilos_navbar.css">
    <link rel="stylesheet" href="../css/estilos_usuarios.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link rel="icon" type="x-icon" href="/Tutor-Connect/inicio/assets/images/favicon.ico">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <?php
        include 'conexion_bd.php';
        $filtro_materia = isset($_GET['filtro_materia']) ? $_GET['filtro_materia'] : '';
        $query = "SELECT * FROM usuarios WHERE tipo = 'asesor' AND materia LIKE '%$filtro_materia%'";
        $lista = mysqli_query($conexion, $query);
    ?>

    <div class = "buscar">
        <input type="text" id="searchBar" placeholder="Buscar por materia..." value="<?php echo htmlspecialchars($filtro_materia); ?>">
        <button id="searchButton">Buscar</button>
    </div>

    <div class="contenedor_perfiles">
    <?php
        while ($registro = mysqli_fetch_array($lista))
        {
            echo "
                <div class='contenedor_perfil'>
                    <div class='contenedor_foto'>
                        <img src='/Tutor-Connect/assets/images/usuario.png' alt='foto_perfil'>
                    </div>
                
                    <div class='informacion'>
                        <p> <b> Nombre: </b> " . htmlspecialchars($registro['nombre']) . " </p> 
                        <p> <b> Materia: </b> " . htmlspecialchars($registro['materia']) . " </p>
                        <p> <b> Unidad academica: </b> " . htmlspecialchars($registro['institucion']) . " </p>
                        <p> <b> Grado Escolar: </b> " . htmlspecialchars($registro['grado']) . "</p>
                        <a href='perfil_asesor.php?id=" . htmlspecialchars($registro['Id']) . "'>Seleccionar</a>
                    </div>
                </div>
            ";
        }
        mysqli_close($conexion);
    ?>
    </div>

    <script>
        $(document).ready(function(){
            $('#searchButton').click(function(){
                var searchQuery = $('#searchBar').val();
                window.location.href = '?filtro_materia=' + encodeURIComponent(searchQuery);
            });
        });
    </script>
</body>
</html>
