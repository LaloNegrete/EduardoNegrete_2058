-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2019 a las 17:16:56
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
DROP SCHEMA IF EXISTS `alumnos_ICO`;
CREATE SCHEMA IF NOT EXISTS `alumnos_ICO` DEFAULT CHARACTER SET  utf8 COLLATE utf8_spanish2_ci;
USE `alumnos_ICO`;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alumnos_ICO`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `alumnos` (
  `nombre_alumno` text NOT NULL,
  `carrera` text NOT NULL,
  `numerocuenta` int(10) NOT NULL,
  `direcion` text NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(8) NOT NULL,
  `FechaRegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Permisos` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- engine el tiepo de motor de base de datos 
--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `alumnos` (`nombre_alumno`, `carrera`, `numerocuenta`, `direcion`, `telefono`, `email`, `password`, `FechaRegistro`, `Permisos`) VALUES
('Geoffrey Towne', 'ICO', 125678965, 'Bednar Burg Kovacekberg 20513', '5929489230', 'Geoffrey@gmail.com', '123456', '2018-10-30 20:22:01', 2),
('Nicolette Conn', 'ICO', 561710836, 'South Odell 59551', '8864866974', 'fernandoberistain2@hotmail.com', '123456', '2018-10-30 20:05:40', 2),
('Olaf Hyatt', 'ICO', 098112576, 'Halvorsonview Jessie Inlet 57757', '473119316', 'Nicolette@gmail.com', '123456', '2018-10-30 20:05:26', 1),
('Skye Kreiger', 'ICO', 573856789, 'New Lillamouth 03848', '5647044365', 'Skye50@hotmail.com', 'citlali', '2018-10-26 15:25:33', 2),
('Jamaica Cazares Mendoza', 'ICO', 546789347, 'Port Desiree Olin Mountain 19799-3319', '5544556677', 'jamaica@gmail.com', '123456', '2018-10-30 20:05:26', 2);
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`numerocuenta`);
COMMIT;

-- COMMIT confirma la transacción actual, haciendo que sus cambios sean permanentes.

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
