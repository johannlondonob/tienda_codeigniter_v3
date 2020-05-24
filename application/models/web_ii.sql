-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-05-2020 a las 00:26:16
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web_ii`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(100) NOT NULL,
  `item_description` varchar(500) DEFAULT NULL,
  `item_value` float NOT NULL,
  `id_category` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_item`),
  KEY `id_category` (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `article`
--

INSERT INTO `article` (`id_item`, `item_name`, `item_description`, `item_value`, `id_category`, `creation_date`, `is_active`) VALUES
(1, 'CARRO DE JUGUETE', ' JUGUE DE DIMENSIONES 10*4*$*4*4', 7500, 1, '2020-05-21 18:19:11', 1),
(2, 'SALCHICHÓN FAISÁN 250 GR', '', 7500, 7, '2020-05-21 18:27:44', 1),
(3, 'SPIDERMAN LEGO', 'SUPER HÉROE SPIDERMAN FABRICADO POR LEGO', 18000, 1, '2020-05-21 18:32:59', 1),
(5, 'MICROONDAS HUAWEI', 'ESTE NOVEDOSO MICROONDAS ES DE LAS ÚLTIMAS TECNOLO´GIAS TRAÍDAS EN ESTA DÉCADA', 145000, 4, '2020-05-21 18:32:59', 1),
(6, 'JUEGO DE CUCHARAS CORONA', 'FABRICADOS EN PLATA', 560000, 3, '2020-05-21 18:32:59', 1),
(7, 'CAMISA POLO GEF', 'COLOR NEGRO', 75000, 6, '2020-05-21 18:32:59', 1),
(8, 'CELULAR SAMSUNG S25', '', 670000, 5, '2020-05-21 18:32:59', 1),
(9, 'RELOJ GOOGLE SLIM BLACK', '', 445000, 5, '2020-05-21 18:32:59', 1),
(10, 'SALCIHCHÓN ZENÚ 1000 GR', '', 10900, 7, '2020-05-21 18:32:59', 1),
(11, 'GODINEZ', 'MUÑECO DE LA SERIE EL CHAVO DEL OCHO, GODINEZ', 90000, 1, '2020-05-23 23:47:16', 1),
(12, 'MOUSE INALÁMBRICO LOGITECH M170', 'MOUSE INALÁMBRICO MUY BUENO', 40000, 5, '2020-05-23 23:48:58', 1),
(13, 'MOUSE INALÁMBRICO LOGITECH M200', 'MOUSE INALÁMBRICO REGULAR', 25000, 5, '2020-05-23 23:50:17', 1),
(15, 'PISTOLA DE AGUA A PRESIÓN', ' ', 670000, 4, '2020-05-23 23:56:24', 1),
(16, 'BLAZER BLANCO BEIGES', '', 345000, 6, '2020-05-23 23:56:32', 1),
(17, 'MORTADELA POR UNA LIBRA', '', 8900, 7, '2020-05-23 23:56:52', 1),
(18, 'COCINITA', 'DFDSFDSSAFAS', 110000, 2, '2020-05-23 23:58:53', 1),
(19, 'JUEGO DE CUBIERTOS EN BRONCEE', 'OOOAPDPODAPDOA', 135000, 3, '2020-05-23 23:59:08', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name_category` varchar(100) NOT NULL,
  `description_category` varchar(500) DEFAULT NULL,
  `creation_date` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id_category`, `name_category`, `description_category`, `creation_date`, `is_active`) VALUES
(1, 'JUGUETERIA INFANTIL NIÑO', NULL, '2020-05-21 18:18:57', 1),
(2, 'JUGUETERÍA INFANTIL NIÑA', NULL, '2020-05-21 18:25:24', 1),
(3, 'COCINAS', NULL, '2020-05-21 18:25:24', 1),
(4, 'ELECTRODOMÉSTICOS', NULL, '2020-05-21 18:25:24', 1),
(5, 'TECNOLOGÍA', NULL, '2020-05-21 18:25:24', 1),
(6, 'VESTIER', NULL, '2020-05-21 18:25:24', 1),
(7, 'CARNES-EMBUTIDOS', NULL, '2020-05-21 18:25:24', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) NOT NULL,
  `customer_address` varchar(50) NOT NULL,
  `customer_mobile` varchar(15) NOT NULL,
  `customer_identification` varchar(15) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT current_timestamp(),
  `customer_email` varchar(100) NOT NULL,
  `customer_password` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `customer`
--

INSERT INTO `customer` (`id_customer`, `customer_name`, `customer_address`, `customer_mobile`, `customer_identification`, `creation_date`, `customer_email`, `customer_password`, `is_active`) VALUES
(1, 'JOHAN ALEXANDER LONDOÑO BEDOYA', 'CR 54 CLL 136 SUR 113 APTO 54', '3195893669', '1026154301', '2020-05-22 09:18:16', 'johannlondonob@gmail.com', '1026154301', 1),
(2, 'PATRICIA MARIA BEDOYA ARENAS', 'CR 53 CLL 156 SUR 89', '3006405943', '43687912', '2020-05-22 09:18:16', 'patri@gmail.com', '12345', 1),
(3, 'KARL MARX', 'CLL 78 CRE 57 SUR', '75432', '63467875642', '2020-05-23 20:41:31', 'karlmarx@gmail.com', '1111', 1),
(4, 'MARLON ALEXIS LONDOÑO BEDOYA', 'CR 45 CLL 8 SUR 2', '9000002', '19999999999', '2020-05-23 20:45:53', 'marlon@gmail.com', '12345', 1),
(5, 'CESAR AUGUSTO LONDOÑO MONCADA', 'CR 45 CLL 8 SUR 2', '3002319211', '782102013', '2020-05-23 20:47:12', 'cesar@gmail.com', '12345', 1),
(6, 'DAVE JHONSON', 'ST 67 54', '9002131232', '1999343234', '2020-05-23 20:48:30', 'marn@gmail.com', '12345', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movement`
--

DROP TABLE IF EXISTS `movement`;
CREATE TABLE IF NOT EXISTS `movement` (
  `id_movement` int(11) NOT NULL AUTO_INCREMENT,
  `document_name` varchar(50) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT current_timestamp(),
  `id_customer` int(11) NOT NULL,
  PRIMARY KEY (`id_movement`),
  KEY `id_customer` (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `movement`
--

INSERT INTO `movement` (`id_movement`, `document_name`, `creation_date`, `id_customer`) VALUES
(1, 'VENTA', '2020-05-21 18:22:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movement_value`
--

DROP TABLE IF EXISTS `movement_value`;
CREATE TABLE IF NOT EXISTS `movement_value` (
  `id_movement_value` int(11) NOT NULL AUTO_INCREMENT,
  `id_movement` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `value` float NOT NULL,
  PRIMARY KEY (`id_movement_value`),
  KEY `id_movement` (`id_movement`),
  KEY `id_item` (`id_item`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `movement_value`
--

INSERT INTO `movement_value` (`id_movement_value`, `id_movement`, `id_item`, `value`) VALUES
(1, 1, 1, 7500),
(2, 1, 1, 7500);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `movement`
--
ALTER TABLE `movement`
  ADD CONSTRAINT `movement_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `movement_value`
--
ALTER TABLE `movement_value`
  ADD CONSTRAINT `movement_value_ibfk_1` FOREIGN KEY (`id_movement`) REFERENCES `movement` (`id_movement`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movement_value_ibfk_2` FOREIGN KEY (`id_item`) REFERENCES `article` (`id_item`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
