
<?php

/* Este codigo se hizo para un ejercicio de implantacion, no tiene uso en la pagina */

function validarDatos($conexion, $dato) {
    return mysqli_real_escape_string($conexion, $dato);
}

function registrarUsuario($conexion, $nombre, $correo, $institucion, $grado, $contrasena, $tipo) {
    $nombre = validarDatos($conexion, $nombre);
    $correo = validarDatos($conexion, $correo);
    $institucion = validarDatos($conexion, $institucion);
    $grado = validarDatos($conexion, $grado);
    $contrasena = hash('sha512', $contrasena);
    
    $query = "INSERT INTO usuarios(nombre, correo, institucion, grado, contrasena, tipo) VALUES ('$nombre', '$correo', '$institucion', '$grado', '$contrasena', '$tipo')";
    
    return mysqli_query($conexion, $query);
}

if (registro_usuario($conexion, $_REQUEST['nombre'], $_REQUEST['correo'], $_REQUEST['institucion'], $_REQUEST['grado'], $_REQUEST['contrasena'], $_REQUEST['tipo'])) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . mysqli_error($conexion);
}

?>