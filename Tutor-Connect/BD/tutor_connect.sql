-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2024 a las 07:01:22
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tutor_connect`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `institucion` varchar(50) NOT NULL,
  `grado` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `materia` varchar(50) NOT NULL,
  `info` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `nombre`, `correo`, `institucion`, `grado`, `contrasena`, `tipo`, `materia`, `info`) VALUES
(1, 'Arturo', 'artu@gmail.com', 'UABC', '7mo', '12345', 'asesor', 'programacion', ''),
(8, 'Edgar', 'edgar@gmail.com', 'no estudia', 'sin grado', '12345', 'alumno', '', ''),
(12, 'javier', 'javi@gmail.com', 'UABC', '4to', '123456', 'alumno', '', ''),
(23, 'rene', 'rene@gmail.com', 'ITE', '4to', '123456', 'asesor', 'matematicas', ''),
(30, 'lola', 'lola@gmail.com', 'ITE', '3ro', '1423', 'asesor', 'matematicas', ''),
(32, 'salma', 'salma@gmail.com', 'UABC', '7mo', '4321', 'asesor', 'programacion', ''),
(37, 'arturo', 'arturo@gmail.com', 'UABC', '7mo', '12345', 'alumno', 'matematicas', ''),
(38, 'alexita', 'alexita@gmail.com', 'ITE', '4to', '12345', 'alumno', '', ''),
(39, 'isac', 'isac@gmail.com', 'uabc', 'docente', '12345', 'asesor', 'quimica', ''),
(40, 'shepe', 'shepe@gmail.com', 'uabc', '7mo', '12345', 'alumno', '', ''),
(41, 'Tere', 'tere@gmail.com', 'TEC', '5to', '12345', 'asesor', 'matematicas', 'hola a todos'),
(43, 'Adrian', 'adrian@gmail.com', 'UABC', '7mo', '12345', 'asesor', 'quimica', ''),
(94, 'Pepe', 'pepe@gmail.com', 'ITE', '8vo', '12345', 'asesor', 'ingles', ''),
(95, 'Arturo', 'arturodos@gmail.com', 'UABC', '5to', '12345', 'alumno', '', ''),
(101, '', '', '', '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
