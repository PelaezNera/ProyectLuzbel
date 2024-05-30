-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2024 a las 22:11:40
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

--
-- COMMENT 'Base de datos que usaremos para nuestro proyecto de juego y pagina'
--
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `juego`
--
CREATE DATABASE IF NOT EXISTS `juego` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

-- SELECT DATABASE juego; -- Esta  es otra forma de seleccionar
USE juego;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
-- Creación: 19-05-2024 a las 19:56:39
-- Última actualización: 19-05-2024 a las 20:00:39
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE
    IF NOT EXISTS `usuarios` (
        `id_usuario` INT(5) NOT NULL AUTO_INCREMENT COMMENT 'El distintor e identificador irrepetible de cada usuario', -- PRIMARY KEY
        -- `nombre` VARCHAR(100) NOT NULL COMMENT 'El nombre real personal del usuario',
        `email` VARCHAR(100) NOT NULL COMMENT 'El correo electrónico de contacto del usuario',
        `usuario` VARCHAR(50) NOT NULL COMMENT 'El apodo y nombre cuenta del usuario',
        `pass` VARCHAR(20) NOT NULL COMMENT 'El verificador o código de ingreso de la cuenta del usuario',
        `tipo` VARCHAR(10) NOT NULL COMMENT 'El tipo de cuenta y Rol o Cargo del usuario dentro de la pagina, lo que definira su nivel de acceso',
        PRIMARY KEY (`id_usuario`),
        UNIQUE (`usuario`, `email`)
    ) ENGINE = InnoDB CHARSET = utf32 COLLATE utf32_spanish_ci COMMENT = 'Tabla para guardar los datos de los usuarios';

--
-- Importación de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `email`, `usuario`, `pass`, `tipo`) VALUES
(1, 'fernandezjosemanuel524@gmail.com', 'Jose Manuel', '1111', 'user');


--
-- Metadatos
--
USE phpmyadmin;

--
-- Metadatos para la tabla usuarios
--

--
-- Metadatos para la base de datos juego
--
COMMIT;