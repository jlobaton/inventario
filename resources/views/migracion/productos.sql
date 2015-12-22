-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-12-2015 a las 18:14:57
-- Versión del servidor: 5.5.46-0ubuntu0.14.04.2-log
-- Versión de PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codpro` varchar(20) NOT NULL,
  `descr` varchar(1000) DEFAULT NULL,
  `descr2` varchar(1000) DEFAULT NULL,
  `video` varchar(30) DEFAULT NULL,
  `audio` varchar(30) DEFAULT NULL,
  `resolucion` varchar(30) DEFAULT NULL,
  `almacenamiento` varchar(100) DEFAULT NULL,
  `grabacion` varchar(30) DEFAULT NULL,
  `general` varchar(100) DEFAULT NULL,
  `exist` int(11) DEFAULT NULL,
  `oferta` varchar(1) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `msg` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codpro` (`codpro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `codpro`, `descr`, `descr2`, `video`, `audio`, `resolucion`, `almacenamiento`, `grabacion`, `general`, `exist`, `oferta`, `precio`, `msg`) VALUES
(1, 'CAM600-02', 'BULLET 600TVL CMOS 1/4 3.6mm 36LED (G:2)', ' ', '', '', '', '', '', '', 12, '0', 16660.00, ''),
(2, 'CAM600-03', 'BULLET 600TVL CMOS 1/4 3.6mm 36LED (G:2)', ' ', '', '', '', '', '', '', 16, '0', 15540.00, ''),
(3, 'CAM800-01-I', 'BULLET 800TVL HDIS 1/3 3.6MM 30LED (3M)', ' ', '', '', '', '', '', '', 64, '0', 18880.00, ''),
(4, 'CAM800-02-I', 'BULLET 800TVL CMOS 960h 48 LED (3M)', ' ', '', '', '', '', '', '', 21, '0', 26660.00, ''),
(5, 'CONDC-01-I', 'CONECTOR DC MACHO', ' ', '', '', '', '', '', '', 381, '1', 165.00, ''),
(6, 'CONDC-02', 'CONECTOR DC HEMBRA', ' ', '', '', '', '', '', '', 412, '1', 165.00, ''),
(7, 'DD250-01', 'DISCO DURO 250GB SATA', ' ', '', '', '', '', '', '', 1, '0', 8000.00, ''),
(8, 'DD500-01', 'DISCO DURO 500GB SATA', ' ', '', '', '', '', '', '', 1, '0', 8000.00, ''),
(9, 'DOMO1000-01-I', 'CAMARA DOMO 1/3 1000TVL 36LED 3.6MM CMOS', ' ', '', '', '962x504', '', '', '', 38, '0', 16650.00, ''),
(10, 'DOMO1000-02', 'CAMARA DOMO 1/3 1000TVL 36LED 3.6MM SONY', ' ', '', '', '962x504', '', '', '', 20, '1', 12715.00, ''),
(11, 'DOMO480-01', 'CAMARA DOMO 1/4 480TVL 3.6mm 24LED CMOS', ' ', '', '', '', '', '', '', 15, '0', 11100.00, ''),
(12, 'DOMO600-01', 'CAMARA DOMO 1/4 600TVL 24LED 3.6MM CMOS', ' ', '', '', '', '', '', '', 27, '0', 11670.00, ''),
(13, 'DOMO700-01-I', 'DOMO ANTIVANDALICA 700TVL HDIS 24LED G:3', ' ', '', '', '756x504', '', '', '', 61, '0', 15500.00, ''),
(14, 'DVR-16CH-01-I', 'DVR 16 CANALES 960hx16 (G:3M)', ' ', 'VGA/BNC', '16', '1024x768', 'H.264 Ethenet 100/1000mbps', 'Soporta HD 4TB (max 2tb HDx2)', '960hx16', 2, '0', 98500.00, ''),
(15, 'DVR-16CH-02-I', 'DVR 16 CANALES iCloud Graba en CIFx14', ' ', 'HDMI/VGA/BNC', '4', '1024x768', 'H.264', 'Soporta HD 1TB (max 2TB HD)', 'D1x2 - CIFx1', 6, '0', 78500.00, ''),
(16, 'DVR-4CH-03-I', 'DVR 4 CANALES iCloud Graba en D1 (G:3M)', ' ', 'HDMI/VGA/BNC', '1', '', 'H.264', 'Soporta HD 2TB (1TB/1TB)', 'D1x4', 2, '0', 47770.00, ''),
(17, 'DVR-8CH-02-I', 'DVR 8 CANALES HDL-960H Graba en HDL(G:3)', ' ', 'HDMI/VGA/BNC', '8', '1280x1024', 'H.264', 'Soporta DD 1TB (max 2TB)', '', 10, '0', 64500.00, ''),
(18, 'DVR-8CH-03', 'DVR 8 CANALES Graba en CIF (G:3m)', ' ', 'HDMI/VGA/BNC', '8', '', 'H.264 PUERTO 485', '', '', 3, '1', 58860.00, ''),
(19, 'FUENTE600', 'FUENTE DE PODER 600W', ' ', '', '', '', '', '', '', 3, '0', 9522.86, ''),
(20, 'RFID-01', 'TARJETA DE APROXIMIDAD RFID', ' ', '', '', '', '', '', '', 200, '0', 600.00, ''),
(21, 'SPLIT-01', 'SPLIT 4 A 1', ' ', '', '', '', '', '', '', 2, '0', 1100.00, ''),
(22, 'TRA12V05A-01', 'TRANSFORMADOR 12v 0,5ma (G:0)-G', ' ', '', '', '', '', '', '', 19, '0', 1400.00, ''),
(23, 'TRA12V15-01-I', 'TRANSFORMADORES 12v 1,5A (G:0)', ' ', '', '', '', '', '', '', 137, '1', 2020.00, ''),
(24, 'TRA12V1A-01', 'TRANSFORMADORES 12v 1A (G:0)', ' ', '', '', '', '', '', '', 70, '0', 1720.00, ''),
(25, 'TRA12V2A-01-I', 'TRANSFORMADORES 12v 2A (G:0)-G', ' ', '', '', '', '', '', '', 49, '1', 2920.00, ''),
(26, 'TRA12V2A-02', 'TRANSFORMADORES 12v 2A (G:0)-P', ' ', '', '', '', '', '', '', 49, '1', 3280.00, ''),
(27, 'UTC-01-I', 'CONECTOR UTC (G:0)', ' ', '', '', '', '', '', '', 2, '0', 500.00, ''),
(28, 'UTP-01', 'BOBINA DE CABLE UTP NIVEL 5E 305MTRS', ' ', '', '', '', '', '', '', 10, '0', 40500.00, ''),
(29, 'VB1CH-03', 'VIDEO BALUM 1CH CON CABLE (G:0)', ' ', '', '', '', '', '', '', 174, '0', 1620.00, ''),
(30, 'VB1CH-03-I', 'VIDEO BALUM 1CH (G:0)', ' ', '', '', '', '', '', '', 299, '0', 1620.00, '');

ALTER TABLE `inventario` ADD `updated_at` TIMESTAMP NOT NULL ,
ADD `created_at` TIMESTAMP NOT NULL ;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
