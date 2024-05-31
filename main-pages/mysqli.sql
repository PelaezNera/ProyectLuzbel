-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2024 a las 01:09:03
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

--
-- COMMENT 'Base de datos que usaremos para nuestro proyecto de juego y pagina'
--
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `juego`
--
CREATE DATABASE IF NOT EXISTS `juego` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `juego`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
-- Creación: 19-05-2024 a las 20:33:56
-- Última actualización: 30-05-2024 a las 22:15:38
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(5) NOT NULL AUTO_INCREMENT COMMENT 'El distintor e identificador irrepetible de cada usuario',
  `email` varchar(100) NOT NULL COMMENT 'El correo electrónico de contacto del usuario',
  `usuario` varchar(50) NOT NULL COMMENT 'El apodo y nombre cuenta del usuario',
  `pass` varchar(20) NOT NULL COMMENT 'El verificador o código de ingreso de la cuenta del usuario',
  `tipo` varchar(10) NOT NULL COMMENT 'El tipo de cuenta y Rol o Cargo del usuario dentro de la pagina, lo que definira su nivel de acceso',
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `usuario` (`usuario`,`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci COMMENT='Tabla para guardar los datos de los usuarios';

--
-- RELACIONES PARA LA TABLA `usuarios`:
--

--
-- Truncar tablas antes de insertar `usuarios`
--

TRUNCATE TABLE `usuarios`;
--
-- Volcado de datos para la tabla `usuarios`
--

INSERT DELAYED IGNORE INTO `usuarios` (`id_usuario`, `email`, `usuario`, `pass`, `tipo`) VALUES
(1, 'fernandezjosemanuel524@gmail.com', 'Jose Manuel', '11111', 'user'),
(2, 'marina@Basquetball.com', 'marina Grande ', '12345', 'user');


--
-- Metadatos
--
USE `phpmyadmin`;

--
-- Metadatos para la tabla usuarios
--

--
-- Truncar tablas antes de insertar `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Truncar tablas antes de insertar `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Truncar tablas antes de insertar `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Metadatos para la base de datos juego
--

--
-- Truncar tablas antes de insertar `pma__bookmark`
--

TRUNCATE TABLE `pma__bookmark`;
--
-- Truncar tablas antes de insertar `pma__relation`
--

TRUNCATE TABLE `pma__relation`;
--
-- Truncar tablas antes de insertar `pma__savedsearches`
--

TRUNCATE TABLE `pma__savedsearches`;
--
-- Truncar tablas antes de insertar `pma__central_columns`
--

TRUNCATE TABLE `pma__central_columns`;
COMMIT;