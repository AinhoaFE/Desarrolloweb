-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-01-2020 a las 16:08:13
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `akarayoga`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `idClase` int(11) NOT NULL,
  `nombreClase` varchar(45) DEFAULT NULL,
  `Tipo` varchar(45) DEFAULT NULL,
  `duracionMinutos` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `ubicacion` varchar(45) DEFAULT NULL,
  `aforo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`idClase`, `nombreClase`, `Tipo`, `duracionMinutos`, `fecha`, `ubicacion`, `aforo`) VALUES
(1, 'Yoga en el parque', 'Yoga', 60, '2020-01-01', 'Parque del retiro', '10'),
(2, 'Yoga en el parque', 'Pilates', 60, '2020-01-01', 'Madrid Rio', '8'),
(3, 'Skype Yoga', 'Yoga', 45, '2020-01-01', 'Online - Desde tu casa', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `idMensaje` int(10) NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `fechaMensaje` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mensaje` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`idMensaje`, `nombre`, `apellidos`, `email`, `telefono`, `fechaMensaje`, `mensaje`) VALUES
(1, 'Sergio', 'Moreno', 'benaventemoreno@gmail.com', 650755048, '2020-01-11 13:38:03', 'M;e gusta el vuino uyn monton'),
(2, 'Sergio', 'Moreno', 'benaventemoreno@gmail.com', 650755048, '2020-01-11 14:08:03', 'Pues eso... Que me gusta el vino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(10) NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrasena` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechaUltimoAcceso` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fechaNacimiento` date NOT NULL DEFAULT '0000-00-00',
  `ipUsuario` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellidos`, `contrasena`, `email`, `telefono`, `fechaRegistro`, `fechaUltimoAcceso`, `fechaNacimiento`, `ipUsuario`, `mensaje`) VALUES
(1, 'Sergio', 'Moreno', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'benaventemoreno@gmail.com', 650755048, '2020-01-11 14:07:08', '2020-01-11 15:05:41', '1988-09-25', '::1', 'Me gusta el vino.. El yoga tambiÃ©n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`idClase`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`idMensaje`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `idClase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `idMensaje` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
