-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servior: 127.0.0.1
-- Tiempo de generación: 28-10-2019 a las 17:16:56
-- Versión del servior: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
DROP SCHEMA IF EXISTS `usuarios_gym`;
CREATE SCHEMA IF NOT EXISTS `usuarios_gym` DEFAULT CHARACTER SET  utf8 COLLATE utf8_spanish2_ci;
USE `usuarios_gym`;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios_gym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
    `id` int PRIMARY KEY auto_increment NOT NULL,
    `nombre_usuario` text NOT NULL,
    `email` text NOT NULL,
    `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- engine el tiepo de motor de base de datos 
--
-- Volcado de datos para la tabla `usuario`
--
INSERT INTO `usuario`(`nombre_usuario`, `email`, `password`) VALUES
('Maria Perla Juarez', 'prueba3@gmail.com', '123456'),
('Juana De Jesus', 'prueba4@gmail.com', '123456');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
