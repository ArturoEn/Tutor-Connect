<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Connect</title>
    <link href="/Tutor-Connect/inicio/assets/bootstrap-5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Tutor-Connect/inicio/assets/css/estilos.css" rel="stylesheet">
    <link rel="icon" type="x-icon" href="/Tutor-Connect/inicio/assets/images/favicon.ico">

    <!-- Header -->
    <?php include '../../assets/php/navbar.php'; ?>

</head>
<body>

	<div class="frase">
        <p>¡Explora nuestras asesorías y lleva tu aprendizaje al siguiente nivel!</p>
    </div>

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicadores -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="slider/sliderProgramacion.jpg" alt="Programación" class="img">
                <div class="carousel-caption">
                    <h3>Programación</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="slider/sliderAlgebra.jpg" alt="Álgebra" class="img">
                <div class="carousel-caption">
                    <h3>Álgebra</h3>
                </div> 
            </div>
            <div class="carousel-item">
                <img src="slider/sliderContabilidad.jpg" alt="Contabilidad" class="img">
                <div class="carousel-caption">
                    <h3>Contabilidad</h3>
                </div>  
            </div>
        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>


    <!-- Descripción de la página -->
    <div class="descripcionPagina">
        <div class="container">
            <div class="row">
                <div class="tituloDescripcion">
                    <h2>Sobre Nosotros</h2>
                </div>
                <p class="textoDescripcion">
                    Nuestra plataforma de asesorías nació de la visión de un grupo de estudiantes 
                    universitarios que experimentaron de primera mano las dificultades para encontrar
                    apoyo académico cuando más lo necesitaban. Impulsados por la idea de crear una solución
                    que facilitara el acceso a la tutoría personalizada y flexible, comenzamos a desarrollar
                    la plataforma, con el objetivo de brindar a estudiantes la oportunidad de alcanzar su
                    máximo potencial.
                </p>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer>
        <?php include 'footer.html' ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>