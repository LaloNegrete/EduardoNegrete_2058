
DROP SCHEMA IF EXISTS `people`;
CREATE SCHEMA IF NOT EXISTS `people` default character set utf8 collate utf8_spanish2_ci;
USE `people`;

CREATE TABLE `alumno` (
 `Id` int(10) NOT NULL,
 `nombre_usuario` varchar(30) not null COLLATE utf8mb4_spanish2_ci NOT NULL,
 `carrera` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
 `no_cuenta` int(10) NOT NULL, 
 `direccion` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
 `telefono` varchar(8) NOT NULL,
 `email` varchar(40) COLLATE utf8mb4_spanish2_ci NOT NULL,
 `password` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
 `fecha_registro` datetime NOT NULL default current_timestamp,
 `permisos` int(11) NOT NULL default '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

INSERT INTO `alumno` (`Id`, `nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`, `fecha_registro`) VALUES
(1,'lalon45', 'ICO', '314315021', 'San Ignacio Iztapalapa', '12345678', 'enano.3455@gmail.com', '12345', '2021-03-25 22:34:35');

ALTER TABLE `alumno`
  ADD PRIMARY KEY (`Id`);
 
ALTER TABLE `alumno`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
