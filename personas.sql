-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2020 a las 03:41:09
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `directorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `identificacion` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `celular` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`identificacion`, `nombre`, `apellido`, `direccion`, `celular`, `telefono`, `correo`) VALUES
(14567833, 'Andres', 'Cepeda', 'Avenida 68', '727301349', '12348', 'andrescepedad@email.com'),
(75422929, 'Juan', 'Gomez', 'Calle 43 sur ', '273744', '27373222', 'juangomez@email.com'),
(83345677, 'Samuel', 'Moreno', 'Av 14(picota) :v', '239494797', '8283737', 'samuelmoreno@email.com'),
(339497499, 'Pedro', 'Gonzalez', 'Calle 10 sur', '8484848', '123456', 'pedrogonzalez@email.com'),
(345273773, 'Pepito', 'Perez', 'Calle 100', '7383849', '3747762', 'pepitoperez@email.com'),
(347548582, 'Luis', 'Perez', 'Calle 8', '3734784', '234567', 'luisperez@email.com'),
(2147483647, 'Jackeline', 'Pelaez', 'Calle 132', '839397373', '2367111', 'jackelinepelaez@email.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`identificacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
