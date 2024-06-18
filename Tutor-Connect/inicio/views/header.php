<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Connect</title>
    <link href="/Tutor-Connect/inicio/assets/bootstrap-5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Tutor-Connect/inicio/assets/css/estilos.css" rel="stylesheet">
    <link rel="icon" type="x-icon" href="/Tutor-Connect/inicio/assets/images/favicon.ico">
</head>

<!-- header -->
<body>
    <header>
        <div class="header">
            <div class="container">
                <div class="row">
                    <nav class="navigation navbar navbar-expand-md navbar-dark fixed">
                        <a class="navbar-brand" href="inicio.php">
                            <img src="/Tutor-Connect/inicio/assets/images/logo3.png" alt="Tutor Connect" 
                            class="logo" style="width:100px;">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" 
                        data-target="#navBars" aria-controls="navbarsExample04" aria-expanded="false" 
                        aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item 
                                    <?php if($_SERVER['SCRIPT_NAME'] == "/inicio.php")
                                    { echo 'active'; } ?>">
                                    <a class="nav-link" href="/Tutor-Connect/inicio/views/inicio.php">Inicio</a>
                                </li>
                                <li class="nav-item
                                    <?php if($_SERVER['SCRIPT_NAME'] == "/buscar.html")
                                    { echo 'active'; } ?>">
                                    <a class="nav-link" href="../../assets/php/usuarios.php">Materias</a>
                                </li>
                                <li class="nav-item
                                    <?php if($_SERVER['SCRIPT_NAME'] == "/miperfil.html")
                                    { echo 'active'; } ?>">
                                    <a class="nav-link" href="../../usuario.php">Mi perfil</a>
                                </li>
                                <li class="nav-item
                                    <?php if($_SERVER['SCRIPT_NAME'] == "/ayuda.html")
                                    { echo 'active'; } ?>">
                                    <a class="nav-link" href="../../ayuda/ayuda.html">Ayuda</a>
                                </li>
                            </ul>
                            
                            <?php 
                            session_start();
                            if(!isset($_SESSION['usuario'])){

                                echo "
                                <div class='inicioSesion'>
                                <a class='sign_btn' href='../../index.php'>Iniciar sesión</a>
                                </div>
                                ";

                            }else{

                                echo "
                                <div class='inicioSesion'>
                                <a class='sign_btn' href='../../assets/php/logout.php'>Cerrar sesion</a>
                                </div>
                                ";
                            }

                            ?>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html> 