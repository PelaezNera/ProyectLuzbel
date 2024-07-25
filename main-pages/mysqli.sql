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
-- Base de datos: `juego`
--
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
  `id_noticia` int(10) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `informacion` mediumtext NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

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
  `id_noticia` int(5) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `informacion` mediumtext NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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
  `id_usuarios` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  PRIMARY KEY (`id_usuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `email`, `usuario`, `pass`, `tipo`) VALUES
(1, 'juan@gmail.com', 'Rik', '123456', 'admin'),
(2, 'juan1@gmail.com', 'rik1', '123456', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
