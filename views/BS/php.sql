-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2022 a las 14:43:51
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `classalumno`
--

CREATE TABLE `classalumno` (
  `Nombre` varchar(20) NOT NULL,
  `ID` int(20) NOT NULL,
  `Correo` varchar(20) NOT NULL,
  `Telefono` int(20) NOT NULL,
  `Programa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `classalumno`
--

INSERT INTO `classalumno` (`Nombre`, `ID`, `Correo`, `Telefono`, `Programa`) VALUES
('Ferdinando', 23, 'santi@gmail.com', 9888, 'ADSO'),
('Ferdinando', 887756, 'Losea@gmail.com', 5135, 'Actriz'),
('Simon', 200036987, 'loquetuquieras@gmail', 295644, 'Analisis y desarrrol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `classinstructor`
--

CREATE TABLE `classinstructor` (
  `Nombre` varchar(20) NOT NULL,
  `ID` int(20) NOT NULL,
  `Correo` varchar(20) NOT NULL,
  `Telefono` int(20) NOT NULL,
  `Ficha` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `classinstructor`
--

INSERT INTO `classinstructor` (`Nombre`, `ID`, `Correo`, `Telefono`, `Ficha`) VALUES
('Luis', 196478234, 'pepe152@gmail.com', 2147483647, 2877941);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `classalumno`
--
ALTER TABLE `classalumno`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
