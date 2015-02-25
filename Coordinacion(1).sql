-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-01-2013 a las 01:25:11
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Coordinacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `area`) VALUES
(1, 'Ministro de Desarrollo Social'),
(2, 'Secretaria Privada Ministro'),
(3, 'Asuntos Juridicos'),
(4, 'Secretaria De Desarrollo Institucional'),
(5, 'Secretaria De Inclusion y Participacion Popular'),
(6, 'Secretaria de Accion Social'),
(7, 'Subsecretaria de Proteccion y Derechos Sociales'),
(8, 'Subsecretaria de Gestion y Articulacion'),
(9, 'Direccion de Despacho'),
(10, 'Direccion de Administracion'),
(11, 'Direccion de Suministros y Servicios Generales'),
(12, 'Direccion de Infraestructura'),
(13, 'Direccion de Habitat Social'),
(14, 'Direccion de Promocion y Desarrollo de Politicas de Deporte, Cultura y Turismo Comunitario'),
(15, 'Sub Direccion de Promocion y Desarrollo de Politicas de Deporte, Cultura y Turismo Comunitario'),
(16, 'Direccion de Cooperativas y Mutuales'),
(17, 'Direccion de Economia Popular y Solidaria'),
(18, 'Capacitacion'),
(19, 'Formulacion y Evaluacion de Proyectos'),
(20, 'Ferias y Mercados Artesanales'),
(21, 'Escuela de Artes y Oficios'),
(22, 'Direccion de Emergencia Social'),
(23, 'Direccion de Adultos Mayores'),
(24, 'Direccion de Discapacidad'),
(25, 'Direccion de Politicas Nutricionales'),
(26, 'Direccion de Juventud'),
(27, 'SubDireccion de Juventud'),
(28, 'Coordinacion Tecnica'),
(29, 'Coordinacion Operativa'),
(30, 'Direccion de Proteccion Integral'),
(31, 'SubDireccion de Jovenes en Conflicto'),
(32, 'Direccion de NiÃ±ez y Adolescencia'),
(33, 'SubDireccion de NiÃ±ez y Adolescencia'),
(34, 'Direccion de Consejo Provincial de la Mujer'),
(35, 'SubDireccion de Genero Fortalecimiento Institucional'),
(36, 'Coordinacion Tecnica y Administartiva'),
(37, 'Direccion de Articulacion Institucional'),
(38, 'Direccion de Recursos Humanos'),
(39, 'SubDireccion de Recursos Humanos'),
(40, 'Direccion de Monitoreo y Evaluacion'),
(41, 'Direccion de Informatica y Comunicaciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cantmemoria`
--

CREATE TABLE IF NOT EXISTS `cantmemoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cantmemoria` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `cantmemoria`
--

INSERT INTO `cantmemoria` (`id`, `cantmemoria`) VALUES
(1, '64Mb'),
(2, '128Mb'),
(3, '192Mb'),
(4, '256Mb'),
(5, '320Mb'),
(6, '384Mb'),
(7, '512Mb'),
(8, '768Mb'),
(9, '1Gb'),
(10, '2Gb'),
(11, '3Gb'),
(12, '4Gb'),
(13, '6Gb'),
(14, '8Gb'),
(15, '16Gb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cd-dvd`
--

CREATE TABLE IF NOT EXISTS `cd-dvd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idmarcacd` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idmarcacd` (`idmarcacd`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `cd-dvd`
--

INSERT INTO `cd-dvd` (`id`, `idmarcacd`, `modelo`) VALUES
(4, 1, 'CRW5232/AAO PRO'),
(5, 2, 'DRW-1814BL  '),
(6, 2, 'CD-S520/A4  (52X)'),
(7, 3, '56X CD-ROM'),
(8, 3, 'ATAPI    Model: DVD A  DH20A4P  '),
(9, 3, 'ATAPI - CD-R/CD-RW writer'),
(10, 3, 'ATAPI CDROM 48X'),
(11, 3, 'ATAPI-CD -  ROM-DRIVE-56MAX'),
(12, 3, 'CD-ROM - Drive/F5E'),
(13, 4, 'HL-DT-ST -  RW/DVD GCC-H21N'),
(14, 4, 'HL-DT-ST - CD-ROM GCR-8523B'),
(15, 4, 'HL-DT-ST - DVDRAM GH20NS15'),
(16, 4, 'HL-DT-ST CD-ROM GCR-8525B  (52x CD-ROM)'),
(17, 4, 'HL-DT-ST DVD-RAM GSA-H55N  '),
(18, 4, 'HL-DT-ST DVDRAM GH22NS50'),
(19, 5, 'DVDRW LH-18A1P  '),
(20, 5, 'DVDRW SHW-1635S'),
(21, 6, 'DVD RW AD-7190A'),
(22, 6, 'DVD RW AD-7260S'),
(23, 6, 'DVD RW AD-7190A '),
(24, 7, 'CD-ROM SC-152A  (52x)'),
(25, 8, 'CD-ROM CDU5225'),
(26, 8, 'CD-RW  CRX230ED'),
(27, 8, 'CD-ROM CDU5215 (52x)'),
(28, 8, 'CD-RW CRX230EE (52x/32x/52x CD-RW)'),
(29, 8, 'DVD RW AD-7240S'),
(30, 9, 'CD-W540E  '),
(31, 10, 'CDDVDW SH-S223C'),
(32, 10, 'CDDVDW SH-S223F ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cpu`
--

CREATE TABLE IF NOT EXISTS `cpu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idmarcacpu` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idmarcacpu` (`idmarcacpu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `cpu`
--

INSERT INTO `cpu` (`id`, `idmarcacpu`, `modelo`) VALUES
(13, 1, 'Athlon XP, 1000 MHz'),
(14, 1, 'Athlon(tm) 64 X2 Dual Core Processor 3600+'),
(15, 1, 'Athlon(tm) 64 X2 Dual Core Processor 4600+'),
(16, 1, 'Athlon(tm) 64 X2 Dual Core Processor 5200+'),
(17, 1, 'Athlon(tm) II X2 245 Processor'),
(18, 1, 'Athlon(tm) II X2 250 Processor'),
(19, 1, 'Athlon(TM) XP 1800+'),
(20, 1, 'Sempron, 1666 MHz 2400+'),
(21, 1, 'DualCore  Athlon 64 X2, 2400 MHz 4600+'),
(22, 1, 'DualCore  Athlon II X2 245, 2900 MHz'),
(23, 1, 'DualCore  Athlon II X2 250, 3000 MHz'),
(24, 2, 'Celeron 430, 900 MHz '),
(25, 2, 'Celeron D 325/326, 2533 MHz'),
(26, 2, 'Celeron D, 2533 MHz'),
(27, 2, 'Celeron 1800 MHz '),
(28, 2, 'Celeron 900 MHz'),
(29, 2, 'Celeron(R) CPU 1.80GHz'),
(30, 2, 'Celeron(R) CPU 2.26GHz'),
(31, 2, 'Celeron(R) CPU 2.53GHz'),
(32, 2, 'Celeron(R) CPU 2.66GHz'),
(33, 2, 'DualCore  Celeron E1600, 2400 MHz'),
(34, 2, 'DualCore  Pentium E2140, 1600 MHz'),
(35, 2, 'DualCore  Pentium E2160, 1800 MHz'),
(36, 2, 'DualCore  Pentium E5200, 2500 MHz'),
(37, 2, 'DualCore  Pentium E5300, 2615 MHz'),
(38, 2, 'DualCore  Pentium E5500, 1500 MHz'),
(39, 2, 'DualCore  Pentium, 1600 MHz'),
(40, 2, 'DualCore  Pentium, 3000 MHz'),
(41, 2, 'Pentium 4 530, 3000 MHz'),
(42, 2, 'Pentium 4, 1600 Mhz'),
(43, 2, 'Pentium 4, 1800 MHz'),
(44, 2, 'Pentium 4, 2266 MHz'),
(45, 2, 'Pentium IIIE, 1000 MHz'),
(46, 2, 'Pentium(R) 4 CPU 2.26GHz'),
(47, 2, 'Pentium(R) 4 CPU 3.00GHz'),
(48, 2, 'Pentium(R) Dual  CPU  E2140  @ 1.60GHz'),
(49, 2, 'Pentium(R) Dual-Core  CPU      E5400  @ 2.70GHz'),
(50, 2, 'Pentium(R) Dual-Core  CPU      E5500  @ 2.80GHz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discoduro`
--

CREATE TABLE IF NOT EXISTS `discoduro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idmarcadiscoduro` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idmarcadiscoduro` (`idmarcadiscoduro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `discoduro`
--

INSERT INTO `discoduro` (`id`, `idmarcadiscoduro`, `modelo`) VALUES
(1, 1, 'ExcelStor Techno - 41GB'),
(2, 2, 'HDS722540VLAT20  - 40 GB'),
(3, 2, 'HDS728040PLAT20 - 41 GB'),
(4, 3, '2B020H1 - 20Gb'),
(5, 3, '6E040L0 - 40 GB'),
(6, 3, '6L040J2 - 40 GB'),
(7, 3, '6V160E0 - 160GB'),
(8, 4, 'HD081GJ - 80 GB'),
(9, 4, 'HD161GJ -160 GB'),
(10, 4, 'HD252HJ - 250GB'),
(11, 4, 'HD253GJ - 250GB'),
(12, 4, 'HD256GJ - 250GB'),
(13, 4, 'HD321HJ - 320GB'),
(14, 4, 'SP0401N  - 40 GB'),
(15, 4, 'SP0802N - 74Gb'),
(16, 4, 'SP0812C - 80 GB'),
(17, 4, 'SP0842N - 80 GB'),
(18, 5, 'ST310212A - 9768MB'),
(19, 6, 'WD1600AAJB-00WRA0 - 149 GB'),
(20, 6, 'WD200EB-75CSF0'),
(21, 6, 'WD300AB-00BV - 30Gb'),
(22, 6, 'WD3200AAJS-6 -  320.0 GB'),
(23, 6, 'WD3200AVVS-00L2B0 298GB'),
(24, 6, 'WD5000AAKS-00UU3A0 465GB'),
(25, 6, 'WD5000AAKX-0'),
(26, 6, 'WD800AAJS-00 - 80.0 GB'),
(27, 6, 'WD800AAJS-00PSA0 - 74 GB'),
(28, 6, 'WD800BB-22DK -  80.0 GB'),
(29, 6, 'WD800BD-08MR - 80.0 GB'),
(30, 6, 'WD800JD-00MS - 80GB'),
(31, 6, 'WD800JD-75MS - 80GB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE IF NOT EXISTS `equipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sector` int(11) NOT NULL,
  `oficina` varchar(200) NOT NULL,
  `interno` varchar(20) DEFAULT NULL,
  `rango` int(11) NOT NULL,
  `ip` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `sistemaoperativo` int(11) NOT NULL,
  `cpu` int(11) NOT NULL,
  `motherboard` int(11) NOT NULL,
  `memoria` int(11) NOT NULL,
  `discoduro` int(11) NOT NULL,
  `cd-dvd` int(11) NOT NULL,
  `monitor` int(11) NOT NULL,
  `serial-monitor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sector` (`sector`),
  KEY `sistemaoperativo` (`sistemaoperativo`),
  KEY `cpu` (`cpu`),
  KEY `motherboard` (`motherboard`),
  KEY `memoria` (`memoria`),
  KEY `discoduro` (`discoduro`),
  KEY `cd-dvd` (`cd-dvd`),
  KEY `monitor` (`monitor`),
  KEY `rango` (`rango`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id`, `sector`, `oficina`, `interno`, `rango`, `ip`, `usuario`, `sistemaoperativo`, `cpu`, `motherboard`, `memoria`, `discoduro`, `cd-dvd`, `monitor`, `serial-monitor`) VALUES
(1, 13, 'Prueba', '123', 2, 19, 'dgarcia21', 5, 14, 1, 2, 5, 6, 4, '123456789'),
(2, 3, 'a32', '3223', 2, 141, 'dgarcia2', 13, 13, 38, 10, 4, 21, 28, 'abc123'),
(3, 1, '201', '155', 1, 2, 'jperez', 13, 31, 41, 12, 28, 28, 1, 'acer123'),
(4, 18, 'PB', '125', 1, 45, 'cperez', 6, 13, 26, 14, 19, 30, 10, 'hp123'),
(5, 41, '3er piso', '265', 1, 243, 'dgarcia', 8, 23, 13, 10, 8, 22, 2, '123'),
(6, 6, '5', '122', 2, 14, 'pucho', 8, 13, 33, 12, 8, 25, 5, '1233');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impresora`
--

CREATE TABLE IF NOT EXISTS `impresora` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idmarcaimpresora` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idmarcaimpresora` (`idmarcaimpresora`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Volcado de datos para la tabla `impresora`
--

INSERT INTO `impresora` (`id`, `idmarcaimpresora`, `modelo`) VALUES
(1, 1, ' EPL-5700'),
(2, 1, ' STYLUS CX3800'),
(3, 1, 'STYLUS PHOTO T50'),
(4, 1, 'T1110'),
(5, 2, '695C'),
(6, 2, '9800'),
(7, 2, 'C4680'),
(8, 2, 'DESKJET 3420'),
(9, 2, 'DESKJET 640C'),
(10, 2, 'DESKJET 9800'),
(11, 2, 'DESKJET D1660'),
(12, 2, 'LASERJET 1020'),
(13, 2, 'LASERJET 1320'),
(14, 2, 'LASERJET 1320N'),
(15, 2, 'LASERJET 1505'),
(16, 2, 'LASERJET 2015DN'),
(17, 2, 'LASERJET 2410'),
(18, 2, 'LASERJET P1102W'),
(19, 2, 'LASERJET P1005'),
(20, 2, 'LASERJET P1505'),
(21, 2, 'LASERJET P2035N'),
(22, 2, 'LASERJET P3015'),
(23, 3, 'B410D'),
(24, 4, '6322DN'),
(25, 5, 'PHASER 8560'),
(26, 5, 'PHASER 3250'),
(27, 5, 'PHASER 3435'),
(28, 5, 'PHASER 3600');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impresoralocal`
--

CREATE TABLE IF NOT EXISTS `impresoralocal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area` int(11) NOT NULL,
  `oficina` varchar(200) NOT NULL,
  `queimpresora` int(11) NOT NULL,
  `serie` varchar(100) DEFAULT NULL,
  `rango` int(11) NOT NULL,
  `ip` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `queimpresora` (`queimpresora`),
  KEY `rango` (`rango`),
  KEY `area` (`area`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `impresoralocal`
--

INSERT INTO `impresoralocal` (`id`, `area`, `oficina`, `queimpresora`, `serie`, `rango`, `ip`) VALUES
(1, 24, '145', 1, '45', 1, 243);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impresorared`
--

CREATE TABLE IF NOT EXISTS `impresorared` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area` int(11) NOT NULL,
  `oficina` varchar(200) NOT NULL,
  `queimpresora` int(11) NOT NULL,
  `serie` varchar(100) DEFAULT NULL,
  `rango` int(11) NOT NULL,
  `ip` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `queimpresora` (`queimpresora`),
  KEY `rango` (`rango`),
  KEY `area` (`area`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `impresorared`
--

INSERT INTO `impresorared` (`id`, `area`, `oficina`, `queimpresora`, `serie`, `rango`, `ip`) VALUES
(1, 41, 'terraza', 28, 'serial xerox', 1, 243),
(2, 41, 'terraza', 6, 'hp9800', 1, 104);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidentes`
--

CREATE TABLE IF NOT EXISTS `incidentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `incidentes`
--

INSERT INTO `incidentes` (`id`, `categoria`) VALUES
(1, 'HARDWARE'),
(2, 'SOFTWARE'),
(3, 'MIGRACION'),
(4, 'FORMATEO'),
(5, 'LIMPIEZA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcacd`
--

CREATE TABLE IF NOT EXISTS `marcacd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marcacd` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `marcacd`
--

INSERT INTO `marcacd` (`id`, `marcacd`) VALUES
(1, 'AOPEN'),
(2, 'ASUS'),
(3, 'GENERICO'),
(4, 'LG'),
(5, 'LITE-ON'),
(6, 'OPTIARC'),
(7, 'SAMSUNG'),
(8, 'SONY'),
(9, 'TEAC'),
(10, 'TSST CORP'),
(11, 'NO POSEE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcacpu`
--

CREATE TABLE IF NOT EXISTS `marcacpu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marcacpu` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `marcacpu`
--

INSERT INTO `marcacpu` (`id`, `marcacpu`) VALUES
(1, 'AMD'),
(2, 'INTEL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcadiscoduro`
--

CREATE TABLE IF NOT EXISTS `marcadiscoduro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marcadiscoduro` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `marcadiscoduro`
--

INSERT INTO `marcadiscoduro` (`id`, `marcadiscoduro`) VALUES
(1, 'EXCELSTOR'),
(2, 'HITACHI'),
(3, 'MAXTOR'),
(4, 'SAMSUNG'),
(5, 'SEAGATE'),
(6, 'WESTERN DIGITAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcaimpresora`
--

CREATE TABLE IF NOT EXISTS `marcaimpresora` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marcaimpresora` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `marcaimpresora`
--

INSERT INTO `marcaimpresora` (`id`, `marcaimpresora`) VALUES
(1, 'EPSON'),
(2, 'HP'),
(3, 'OKI'),
(4, 'SAMSUNG'),
(5, 'XEROX');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcamonitor`
--

CREATE TABLE IF NOT EXISTS `marcamonitor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marcamonitor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `marcamonitor`
--

INSERT INTO `marcamonitor` (`id`, `marcamonitor`) VALUES
(1, 'ACER'),
(2, 'AOC'),
(3, 'BANGHO'),
(4, 'BELTRON'),
(5, 'BENQ'),
(6, 'COMPAQ'),
(7, 'GENERICO'),
(8, 'HP'),
(9, 'INVID'),
(10, 'LG'),
(11, 'NOC'),
(12, 'SAMSUNG'),
(13, 'TWIN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcamotherboard`
--

CREATE TABLE IF NOT EXISTS `marcamotherboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marcamotherboard` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `marcamotherboard`
--

INSERT INTO `marcamotherboard` (`id`, `marcamotherboard`) VALUES
(1, 'ASROCK'),
(2, 'ASUS'),
(3, 'BIOSTAR'),
(4, 'FOXCONN'),
(5, 'GIGABYTE'),
(6, 'HP'),
(7, 'IBM'),
(8, 'INTEL'),
(9, 'MSI'),
(10, 'PCCHIPS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitor`
--

CREATE TABLE IF NOT EXISTS `monitor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idmarcamonitor` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idmarcamonitor` (`idmarcamonitor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Volcado de datos para la tabla `monitor`
--

INSERT INTO `monitor` (`id`, `idmarcamonitor`, `modelo`) VALUES
(1, 1, 'JD144K'),
(2, 2, '1619W'),
(3, 2, '4VN'),
(4, 3, '756CF'),
(5, 4, 'JD144K'),
(6, 5, 'G610HALET'),
(7, 6, 'V40'),
(8, 7, 'NOCFT420G'),
(9, 7, 'SX775'),
(10, 8, 'D2827A'),
(11, 8, 'D8895'),
(12, 8, '7540'),
(13, 9, '775AL'),
(14, 10, 'C15LA-0'),
(15, 10, 'L17538Q'),
(16, 10, '500G'),
(17, 10, '560N'),
(18, 10, 'B1930N'),
(19, 10, 'C15LA-0'),
(20, 10, 'C15LCO'),
(21, 10, 'C15LR-0'),
(22, 10, 'C17LC-0'),
(23, 10, 'T710SH'),
(24, 10, 'T730SH'),
(25, 10, 'W1943'),
(26, 10, 'W1943TE'),
(27, 11, 'FT120G'),
(28, 12, '529V'),
(29, 12, '550V'),
(30, 12, '551V'),
(31, 12, '5915'),
(32, 12, '794V'),
(33, 12, 'B1930'),
(34, 12, 'BX1950'),
(35, 12, 'PN15V5'),
(36, 12, 'S1930N'),
(37, 12, 'SA380'),
(38, 12, 'SYNCMASTER 5915'),
(39, 13, 'AS65');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motherboard`
--

CREATE TABLE IF NOT EXISTS `motherboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idmarcamotherboard` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idmarcamotherboard` (`idmarcamotherboard`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Volcado de datos para la tabla `motherboard`
--

INSERT INTO `motherboard` (`id`, `idmarcamotherboard`, `modelo`) VALUES
(1, 1, 'N61P-S'),
(2, 1, 'G31M-VS'),
(3, 1, 'G41M-VS3'),
(4, 1, 'N68-S UCC'),
(5, 1, '775i65G'),
(6, 1, '945GCM-S'),
(7, 1, 'ConRoe1333-D667 '),
(8, 1, 'G31M-VS2'),
(9, 1, 'G41M-VS3'),
(10, 1, 'K7VM3'),
(11, 1, 'N68-S UCC'),
(12, 1, 'P4i45GL/GV/PE'),
(13, 1, 'Wolfdale1333-D667 '),
(14, 2, 'M4N68T-M-LE-V2'),
(15, 2, 'M2N-MX SE Plus'),
(16, 2, 'M2N68-AM SE2 '),
(17, 2, 'M4N68T-M LE V2'),
(18, 2, 'M2N-MX SE Plus'),
(19, 2, 'M2N68-AM SE'),
(20, 2, 'M4N68T-M-LE-V2'),
(21, 2, 'P5GC-MX/1333'),
(22, 2, 'A7V8X-X'),
(23, 2, 'M2N-MX SE Plus'),
(24, 2, 'P4V533-MX'),
(25, 2, 'P4V8X-MX'),
(26, 3, 'G31-M7 TE'),
(27, 3, 'G41D3B'),
(28, 3, 'M6VLR'),
(29, 3, 'N68S3B'),
(30, 3, 'P4M900-M7 FE'),
(31, 3, 'P4VM800'),
(32, 3, 'VIARAMA U8668 (Pro)'),
(33, 4, '661MX'),
(34, 5, 'GA-7VM400M-RZ '),
(35, 6, 'DC7100'),
(36, 7, '6269M1S'),
(37, 7, '634994S'),
(38, 8, 'ConRoe1333-D667'),
(39, 8, 'D915GAV'),
(40, 8, 'D915GUX'),
(41, 8, '775i65G'),
(42, 8, 'P4I45Gx_PE'),
(43, 8, 'D945GCNL'),
(44, 8, 'Wolfdale1333-D667'),
(45, 9, 'G31TM-P21 (MS-7529) '),
(46, 10, 'M748LMRT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `placavideo`
--

CREATE TABLE IF NOT EXISTS `placavideo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placavideo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rango`
--

CREATE TABLE IF NOT EXISTS `rango` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rango` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `rango`
--

INSERT INTO `rango` (`id`, `rango`) VALUES
(1, '10.11.19.'),
(2, '10.11.119.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemaoperativo`
--

CREATE TABLE IF NOT EXISTS `sistemaoperativo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sistemaoperativo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `sistemaoperativo`
--

INSERT INTO `sistemaoperativo` (`id`, `sistemaoperativo`) VALUES
(1, 'Windows 95'),
(2, 'Windows 98'),
(3, 'Windows 98'),
(4, 'Windows 2000'),
(5, 'Windows 2000'),
(6, 'Windows XP'),
(7, 'Windows Vista'),
(8, 'Windows 7'),
(9, 'Windows 8'),
(10, 'Kubuntu 6.04'),
(11, 'Kubuntu 8.04'),
(12, 'Ubuntu 10.04'),
(13, 'Ubuntu 12.04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tracking`
--

CREATE TABLE IF NOT EXISTS `tracking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idequipo` int(11) NOT NULL,
  `idincidente` int(11) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `tecnico` int(11) NOT NULL,
  `solucion` varchar(350) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idincidente` (`idincidente`),
  KEY `idequipo` (`idequipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombrecompleto` text NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `idusuario` (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nombrecompleto`, `usuario`, `password`, `tipo`) VALUES
(1, 'Diego Garcia', 'pucho', 'pucho', 'root'),
(2, 'Administrador', 'admin', 'admin', 'root');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cd-dvd`
--
ALTER TABLE `cd-dvd`
  ADD CONSTRAINT `cd@002ddvd_ibfk_1` FOREIGN KEY (`idmarcacd`) REFERENCES `marcacd` (`id`);

--
-- Filtros para la tabla `cpu`
--
ALTER TABLE `cpu`
  ADD CONSTRAINT `cpu_ibfk_1` FOREIGN KEY (`idmarcacpu`) REFERENCES `marcacpu` (`id`);

--
-- Filtros para la tabla `discoduro`
--
ALTER TABLE `discoduro`
  ADD CONSTRAINT `discoduro_ibfk_1` FOREIGN KEY (`idmarcadiscoduro`) REFERENCES `marcadiscoduro` (`id`);

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `equipo_ibfk_1` FOREIGN KEY (`sector`) REFERENCES `areas` (`id`),
  ADD CONSTRAINT `equipo_ibfk_10` FOREIGN KEY (`rango`) REFERENCES `rango` (`id`),
  ADD CONSTRAINT `equipo_ibfk_2` FOREIGN KEY (`sistemaoperativo`) REFERENCES `sistemaoperativo` (`id`),
  ADD CONSTRAINT `equipo_ibfk_3` FOREIGN KEY (`cpu`) REFERENCES `cpu` (`id`),
  ADD CONSTRAINT `equipo_ibfk_4` FOREIGN KEY (`motherboard`) REFERENCES `motherboard` (`id`),
  ADD CONSTRAINT `equipo_ibfk_5` FOREIGN KEY (`memoria`) REFERENCES `cantmemoria` (`id`),
  ADD CONSTRAINT `equipo_ibfk_7` FOREIGN KEY (`discoduro`) REFERENCES `discoduro` (`id`),
  ADD CONSTRAINT `equipo_ibfk_8` FOREIGN KEY (`cd-dvd`) REFERENCES `cd-dvd` (`id`),
  ADD CONSTRAINT `equipo_ibfk_9` FOREIGN KEY (`monitor`) REFERENCES `monitor` (`id`);

--
-- Filtros para la tabla `impresora`
--
ALTER TABLE `impresora`
  ADD CONSTRAINT `impresora_ibfk_1` FOREIGN KEY (`idmarcaimpresora`) REFERENCES `marcaimpresora` (`id`),
  ADD CONSTRAINT `impresora_ibfk_2` FOREIGN KEY (`idmarcaimpresora`) REFERENCES `marcaimpresora` (`id`);

--
-- Filtros para la tabla `impresoralocal`
--
ALTER TABLE `impresoralocal`
  ADD CONSTRAINT `impresoralocal_ibfk_1` FOREIGN KEY (`queimpresora`) REFERENCES `impresora` (`id`),
  ADD CONSTRAINT `impresoralocal_ibfk_2` FOREIGN KEY (`queimpresora`) REFERENCES `impresora` (`id`),
  ADD CONSTRAINT `impresoralocal_ibfk_3` FOREIGN KEY (`queimpresora`) REFERENCES `impresora` (`id`),
  ADD CONSTRAINT `impresoralocal_ibfk_4` FOREIGN KEY (`rango`) REFERENCES `rango` (`id`),
  ADD CONSTRAINT `impresoralocal_ibfk_5` FOREIGN KEY (`queimpresora`) REFERENCES `impresora` (`id`),
  ADD CONSTRAINT `impresoralocal_ibfk_6` FOREIGN KEY (`rango`) REFERENCES `rango` (`id`),
  ADD CONSTRAINT `impresoralocal_ibfk_7` FOREIGN KEY (`area`) REFERENCES `areas` (`id`);

--
-- Filtros para la tabla `impresorared`
--
ALTER TABLE `impresorared`
  ADD CONSTRAINT `impresorared_ibfk_1` FOREIGN KEY (`queimpresora`) REFERENCES `impresora` (`id`),
  ADD CONSTRAINT `impresorared_ibfk_2` FOREIGN KEY (`queimpresora`) REFERENCES `impresora` (`id`),
  ADD CONSTRAINT `impresorared_ibfk_3` FOREIGN KEY (`queimpresora`) REFERENCES `impresora` (`id`),
  ADD CONSTRAINT `impresorared_ibfk_4` FOREIGN KEY (`rango`) REFERENCES `rango` (`id`),
  ADD CONSTRAINT `impresorared_ibfk_5` FOREIGN KEY (`queimpresora`) REFERENCES `impresora` (`id`),
  ADD CONSTRAINT `impresorared_ibfk_6` FOREIGN KEY (`rango`) REFERENCES `rango` (`id`),
  ADD CONSTRAINT `impresorared_ibfk_7` FOREIGN KEY (`area`) REFERENCES `areas` (`id`);

--
-- Filtros para la tabla `monitor`
--
ALTER TABLE `monitor`
  ADD CONSTRAINT `monitor_ibfk_1` FOREIGN KEY (`idmarcamonitor`) REFERENCES `marcamonitor` (`id`);

--
-- Filtros para la tabla `motherboard`
--
ALTER TABLE `motherboard`
  ADD CONSTRAINT `motherboard_ibfk_1` FOREIGN KEY (`idmarcamotherboard`) REFERENCES `marcamotherboard` (`id`);

--
-- Filtros para la tabla `tracking`
--
ALTER TABLE `tracking`
  ADD CONSTRAINT `tracking_ibfk_1` FOREIGN KEY (`idincidente`) REFERENCES `incidentes` (`id`),
  ADD CONSTRAINT `tracking_ibfk_2` FOREIGN KEY (`idequipo`) REFERENCES `equipo` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
