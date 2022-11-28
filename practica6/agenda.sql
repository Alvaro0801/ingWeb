-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2022 a las 19:16:32
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `idcita` int(11) NOT NULL,
  `horacita` time NOT NULL,
  `diacita` date NOT NULL,
  `asuntocita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`idcita`, `horacita`, `diacita`, `asuntocita`) VALUES
(1, '22:42:00', '2022-11-24', 'Visita al médico'),
(2, '12:34:00', '2022-11-21', 'Visita al médico'),
(3, '10:40:00', '2022-11-21', 'Visita al Pediatra'),
(4, '20:34:00', '2022-11-21', 'Visita al dentista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas_contacto`
--

CREATE TABLE `citas_contacto` (
  `idcita` int(11) NOT NULL,
  `idcontacto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas_contacto`
--

INSERT INTO `citas_contacto` (`idcita`, `idcontacto`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre_apellido` varchar(255) NOT NULL,
  `genero` varchar(6) NOT NULL,
  `telefono` varchar(75) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `pais` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre_apellido`, `genero`, `telefono`, `email`, `ciudad`, `pais`) VALUES
(1, 'Samuel Lopez', 'hombre', '052883377', 'sm@mt.co', 'Rosario', 'Argentina'),
(2, 'Ana Gabriel', 'mujer', '988344433', 'ag@mt.co', 'Barranquilla', 'Colombia'),
(3, 'Juan Vera', 'hombre', '945003783', 'jv@pt.co', 'Santa Marta', 'Colombia'),
(4, 'Veronica Lopez', 'mujer', '987256432', 'vl@pt.co', 'Parana', 'Argentina'),
(5, 'Alvaro Rivera', 'hombre', '986431354', 'alvaro@gmail.com', '', 'Perú');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`idcita`);

--
-- Indices de la tabla `citas_contacto`
--
ALTER TABLE `citas_contacto`
  ADD UNIQUE KEY `idcita` (`idcita`),
  ADD KEY `idcontacto` (`idcontacto`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `idcita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas_contacto`
--
ALTER TABLE `citas_contacto`
  ADD CONSTRAINT `citas_contacto_ibfk_1` FOREIGN KEY (`idcita`) REFERENCES `citas` (`idcita`),
  ADD CONSTRAINT `citas_contacto_ibfk_2` FOREIGN KEY (`idcontacto`) REFERENCES `contacto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
