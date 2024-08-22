-- ADVERTENCIA!‼️❕❗: SI LAS LINEAS DE "DROP TABLE" VAN A QUITAR LO QUE TENGAN ANTERIORMENTE EN LA TABLA AL MOMENTO DE PEGAR Y EJECUTAR EL CODIGO. SI NO QUIERES QUE PASE ESTO ANTES DE EJECUTAR QUITALAS O COMENTALAS.
-- Gracias por su atencion.
-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-07-2024 a las 00:06:30
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos para el juego
-- COMMENT='Base de datos que contiene la información relacionada con el juego.'
CREATE DATABASE IF NOT EXISTS `juego` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `juego`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--
-- Creación: 11-07-2024 a las 21:03:27
--

DROP TABLE IF EXISTS `informacion`;
CREATE TABLE IF NOT EXISTS `informacion` (
  `id_noticia` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Identificador único y irrepetible para cada noticia.',
  `titulo` varchar(100) NOT NULL COMMENT 'El título de la noticia.',
  `informacion` mediumtext NOT NULL COMMENT 'El contenido o descripción de la noticia.',
  `imagen` varchar(100) NOT NULL COMMENT 'El nombre del archivo de la imagen asociada a la noticia.',
  PRIMARY KEY (`id_noticia`) COMMENT 'Clave primaria de digitos que incrementan con cada noticia.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 COMMENT='Tabla para guardar la información de las noticias que se muestran en el juego.';

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`id_noticia`, `titulo`, `informacion`, `imagen`) VALUES
(1, 'santiagodasda', 'Hola buenassadasd', '7.jpg'),
(2, 'El Divisor', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor accumsan.', '5.jpg'),
(3, 'El Suplente', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor accumsan.', '2.jpg'),
(4, 'Common Protector', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor accumsan.', '3.jpg'),
(5, 'Gate Protector', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor accumsan.', '4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--
-- Creación: 18-07-2024 a las 18:48:31
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id_noticia` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Identificador único para cada noticia sobre el desarrollo del juego.',
  `titulo` varchar(100) NOT NULL COMMENT 'Título de la noticia relacionada con el desarrollo.',
  `informacion` mediumtext NOT NULL COMMENT 'Descripción o contenido de la noticia.',
  `imagen` varchar(100) NOT NULL COMMENT 'Nombre del archivo de la imagen asociada a la noticia.',
  PRIMARY KEY (`id_noticia`) COMMENT 'Clave primaria de digitos que incrementan con cada noticia del juego.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 COMMENT='Tabla para almacenar las noticias sobre el progreso y desarrollo del juego.';

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo`, `informacion`, `imagen`) VALUES
(1, 'Proyecto Luzbel', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero corporis harum corrupt voluptatem perferendis architecto sed itaque? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore quisquam repellat blanditiis veniam illo aliquam? Quaerat cum facere exercitationem minus sint ea atque illum vero delectus ratione neque beatae est obcaecati eaque ex repellat fugiat consequuntur, ipsam sit harum. Iusto!', '4.jpg'),
(2, 'gereref', 'dlasdlflÃ±sdfjsdklÃ±fmsdlcvsdc', 'cielo2.jpeg'),
(3, 'Progreso...', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero corporis harum corrupt voluptatem perferendis architecto sed itaque? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore quisquam repellat blanditiis veniam illo aliquam? Quaerat cum facere exercitationem minus sint ea atque illum vero delectus ratione neque beatae est obcaecati eaque ex repellat fugiat consequuntur, ipsam sit harum. Iusto!', 'cielo1.jpeg'),
(4, 'Progreso...', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero corporis harum corrupt voluptatem perferendis architecto sed itaque? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore quisquam repellat blanditiis veniam illo aliquam? Quaerat cum facere exercitationem minus sint ea atque illum vero delectus ratione neque beatae est obcaecati eaque ex repellat fugiat consequuntur, ipsam sit harum. Iusto!', 'idea-arma5.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
-- Creación: 17-05-2024 a las 19:04:25
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuarios` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Identificador único para cada usuario registrado.',
  `email` varchar(100) NOT NULL COMMENT 'Correo electrónico del usuario, utilizado para contacto y autenticación.',
  `usuario` varchar(50) NOT NULL COMMENT 'Nombre de usuario o apodo que utiliza el usuario para iniciar sesión.',
  `pass` varchar(20) NOT NULL COMMENT 'Contraseña asociada a la cuenta del usuario para autenticación.',
  `tipo` varchar(10) NOT NULL COMMENT 'Tipo de cuenta o rol del usuario (por ejemplo, admin o user), que determina su nivel de acceso en el sistema.',
  PRIMARY KEY (`id_usuarios`) COMMENT 'Clave primaria de digitos que incrementan con cada usuario.',
  UNIQUE KEY `unique_email` (`email`) COMMENT 'Asegura que el correo electrónico sea único entre los usuarios.',
  UNIQUE KEY `unique_usuario` (`usuario`) COMMENT 'Asegura que el nombre de usuario sea único entre los usuarios.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 COMMENT='Tabla para guardar la información de los usuarios registrados en el sistema.';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `email`, `usuario`, `pass`, `tipo`) VALUES
(1, 'juan@gmail.com', 'Rik', '123456', 'admin'),
(2, 'juan1@gmail.com', 'rik1', '123456', 'user'),
(3, 'lujanmusic@gmail.com', 'Lujan M', '111111', 'admin'),
(4, 'lujanmusic@hotmail.com', 'Alejandro', '111111', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;