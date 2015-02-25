-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-03-2013 a las 15:36:06
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `area`) VALUES
(1, 'MINISTRO DE DESARROLLO SOCIAL'),
(2, 'SECRETARIA PRIVADA MINISTRO'),
(3, 'ASUNTOS JURIDICOS'),
(4, 'SECRETARIA DE DESARROLLO INSTITUCIONAL'),
(5, 'SECRETARIA DE INCLUSION Y PARTICIPACION POPULAR'),
(6, 'SECRETARIA DE ACCION SOCIAL'),
(7, 'SUBSECRETARIA DE PROTECCION Y DERECHOS SOCIALES'),
(8, 'SUBSECRETARIA DE GESTION Y ARTICULACION'),
(9, 'DIRECCION DE DESPACHO'),
(10, 'DIRECCION DE ADMINISTRACION'),
(11, 'DIRECCION DE SUMINISTROS Y SERVICIOS GENERALES'),
(12, 'DIRECCION DE INFRAESTRUCTURA'),
(13, 'DIRECCION DE HABITAT SOCIAL'),
(14, 'DIRECCION DE PROMOCION Y DESARROLLO DE POLITICAS DE DEPORTE, CULTURA Y TURISMO COMUNITARIO'),
(15, 'SUB DIRECCION DE PROMOCION Y DESARROLLO DE POLITICAS DE DEPORTE, CULTURA Y TURISMO COMUNITARIO'),
(16, 'DIRECCION DE COOPERATIVAS Y MUTUALES'),
(17, 'DIRECCION DE ECONOMIA POPULAR Y SOLIDARIA'),
(18, 'CAPACITACION'),
(19, 'FORMULACION Y EVALUACION DE PROYECTOS'),
(20, 'FERIAS Y MERCADOS ARTESANALES'),
(21, 'ESCUELA DE ARTES Y OFICIOS'),
(22, 'DIRECCION DE EMERGENCIA SOCIAL'),
(23, 'DIRECCION DE ADULTOS MAYORES'),
(24, 'DIRECCION DE DISCAPACIDAD'),
(25, 'DIRECCION DE POLITICAS NUTRICIONALES'),
(26, 'DIRECCION DE JUVENTUD'),
(27, 'SUBDIRECCION DE JUVENTUD'),
(28, 'COORDINACION TECNICA'),
(29, 'COORDINACION OPERATIVA'),
(30, 'DIRECCION DE PROTECCION INTEGRAL'),
(31, 'SUBDIRECCION DE JOVENES EN CONFLICTO'),
(32, 'DIRECCION DE NIÃ±EZ Y ADOLESCENCIA'),
(33, 'SUBDIRECCION DE NIÃ±EZ Y ADOLESCENCIA'),
(34, 'DIRECCION DE CONSEJO PROVINCIAL DE LA MUJER'),
(35, 'SUBDIRECCION DE GENERO FORTALECIMIENTO INSTITUCIONAL'),
(36, 'COORDINACION TECNICA Y ADMINISTARTIVA'),
(37, 'DIRECCION DE ARTICULACION INSTITUCIONAL'),
(38, 'DIRECCION DE RECURSOS HUMANOS'),
(39, 'SUBDIRECCION DE RECURSOS HUMANOS'),
(40, 'DIRECCION DE MONITOREO Y EVALUACION'),
(41, 'DIRECCION DE INFORMATICA Y COMUNICACIONES'),
(42, 'DIRECCION CAPACITACION Y OFICIOS POPULARES '),
(43, 'DIRECCIÃ³N PARA LA CAPACITACIÃ³N SOCIAL'),
(44, 'DIRECCION DE CAPACITACION'),
(45, 'COORDINACION INFORMATICA'),
(46, 'DEPARTAMENTO DE INTENDENCIA'),
(47, 'DEPARTAMENTO DE DESPACHO'),
(48, 'DEPARTAMENTO DE SUMINISTROS'),
(49, 'DEPARTAMENTO DE SUBSIDIOS'),
(50, 'DEPARTAMENTO DE BECAS Y TRANSPORTE'),
(51, 'SEGUROS'),
(52, 'DEPARTAMENTO DE RENDICION DE CUENTA'),
(53, 'DEPARTAMENTO DE CONTROL PREVIO'),
(54, 'DEPARTAMENTO DE PRESUPUESTO'),
(55, 'DEPARTAMENTO DE VIATICOS'),
(56, 'DEPARTAMENTO ADMINISTRATIVO'),
(57, 'DEPARTAMENTO DE FONDOS PERMANENTES'),
(58, 'DEPARTAMENTO DE PATRIMONIO'),
(59, 'D.P.F - MESA DE ENTRADA'),
(60, 'D.P.F. - DELEGADO'),
(61, 'D.P.F.  - UNIDAD EJECUTORA LOCAL'),
(62, 'D.P.F. - FORTALECIMIENTO FAMILIAR'),
(63, 'D.P.F. - SEC. PROMOCION DEBERES Y DERECHOS'),
(64, 'CONIAR'),
(65, 'D.P.F - LIBERTAD ASISTIDA'),
(66, 'D.P.F. - SUMINISTROS'),
(67, 'CONSEJO DISCAPACITADO - RECURSOS HUMANOS'),
(68, 'CONSEJO DISCAPACITADO - MESA DE ENTRADA'),
(69, 'CONSEJO DISCAPACITADO - BANCO DE ELEMENTOS'),
(70, 'CONSEJO DISCAPACITADO - SECRETARIA PRIVADA'),
(71, 'CONSEJO DISCAPACITADO - FORTALECIMIENTO INSTITUCIONAL'),
(72, 'CONSEJO DISCAPACITADO - CERTIFICACIONES'),
(73, 'CONSEJO DISCAPACITADO - TRANSPORTE'),
(74, 'CONSEJO DISCAPACITADO - ASESORIA LEGAL');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

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
(32, 10, 'CDDVDW SH-S223F '),
(33, 12, 'IHAS 122'),
(34, 13, 'SHW 16355'),
(35, 10, 'CDDVDW SH 222BB'),
(36, 5, 'S04R 5239V'),
(37, 3, '5230E'),
(38, 11, 'NO POSEE'),
(39, 4, 'DVDRAM GH24NS90'),
(40, 10, 'CDRCD RW WRITER SH R522C'),
(41, 4, 'HL DT ST DVDRAM GH22NS40'),
(42, 3, 'ATAPI IHAS 124 DVD RAM'),
(43, 10, 'DVDROM TS3538');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Volcado de datos para la tabla `cpu`
--

INSERT INTO `cpu` (`id`, `idmarcacpu`, `modelo`) VALUES
(13, 1, 'ATHLON XP, 1000 MHZ'),
(14, 1, 'ATHLON(TM) 64 X2 DUAL CORE PROCESSOR 3600+'),
(15, 1, 'ATHLON(TM) 64 X2 DUAL CORE PROCESSOR 4600+'),
(16, 1, 'ATHLON(TM) 64 X2 DUAL CORE PROCESSOR 5200+'),
(17, 1, 'ATHLON(TM) II X2 245 PROCESSOR'),
(18, 1, 'ATHLON(TM) II X2 250 PROCESSOR'),
(19, 1, 'ATHLON(TM) XP 1800+'),
(20, 1, 'SEMPRON, 1666 MHZ 2400+'),
(21, 1, 'DUALCORE  ATHLON 64 X2, 2400 MHZ 4600+'),
(22, 1, 'DUALCORE  ATHLON II X2 245, 2900 MHZ'),
(23, 1, 'DUALCORE  ATHLON II X2 250, 3000 MHZ'),
(24, 2, 'CELERON 430, 900 MHZ '),
(25, 2, 'CELERON D 325/326, 2533 MHZ'),
(26, 2, 'CELERON D, 2533 MHZ'),
(27, 2, 'CELERON 1800 MHZ '),
(28, 2, 'CELERON 900 MHZ'),
(29, 2, 'CELERON(R) CPU 1.80GHZ'),
(30, 2, 'CELERON(R) CPU 2.26GHZ'),
(31, 2, 'CELERON(R) CPU 2.53GHZ'),
(32, 2, 'CELERON(R) CPU 2.66GHZ'),
(33, 2, 'DUALCORE  CELERON E1600, 2400 MHZ'),
(34, 2, 'DUALCORE  PENTIUM E2140, 1600 MHZ'),
(35, 2, 'DUALCORE  PENTIUM E2160, 1800 MHZ'),
(36, 2, 'DUALCORE  PENTIUM E5200, 2500 MHZ'),
(37, 2, 'DUALCORE  PENTIUM E5300, 2615 MHZ'),
(38, 2, 'DUALCORE  PENTIUM E5500, 1500 MHZ'),
(39, 2, 'DUALCORE  PENTIUM, 1600 MHZ'),
(40, 2, 'DUALCORE  PENTIUM, 3000 MHZ'),
(41, 2, 'PENTIUM 4 530, 3000 MHZ'),
(42, 2, 'PENTIUM 4, 1600 MHZ'),
(43, 2, 'PENTIUM 4, 1800 MHZ'),
(44, 2, 'PENTIUM 4, 2266 MHZ'),
(45, 2, 'PENTIUM IIIE, 1000 MHZ'),
(46, 2, 'PENTIUM(R) 4 CPU 2.26GHZ'),
(47, 2, 'PENTIUM(R) 4 CPU 3.00GHZ'),
(48, 2, 'PENTIUM(R) DUAL  CPU  E2140  @ 1.60GHZ'),
(49, 2, 'PENTIUM(R) DUAL-CORE  CPU      E5400  @ 2.70GHZ'),
(50, 2, 'PENTIUM(R) DUAL-CORE  CPU      E5500  @ 2.80GHZ'),
(51, 1, 'A6 3500 APU'),
(52, 2, 'INTEL CORE IM2 DUO E7500 2.93'),
(53, 1, 'ATLHON II X8 250'),
(54, 2, 'PENTIUM MMX 233MHZ'),
(55, 2, 'INTEL CORE I3 3220 3,30'),
(56, 2, 'INTEL CORE I3 2120 CPU 3.30'),
(57, 1, 'DUAL CORE FX 4100'),
(58, 2, 'CELERON 430 1.80'),
(59, 2, 'DUAL CORE INTEL CELERON E3300 2500'),
(60, 1, 'SEMPROM LE 1150 2000'),
(61, 2, 'CELERON D315 2266'),
(62, 2, 'CELERON FAM 00005'),
(63, 2, 'PENTIUM DUAL CORE E5300 2.60'),
(64, 2, 'CELERON 2.80'),
(65, 2, 'INTEL CPU 2140 1.60');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

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
(23, 6, 'WD3200AVVS-00L2B0 320GB'),
(24, 6, 'WD5000AAKS-00UU3A0 465GB'),
(25, 6, 'WD5000AAKX-0'),
(26, 6, 'WD800AAJS-00 - 80.0 GB'),
(27, 6, 'WD800AAJS-00PSA0 - 74 GB'),
(28, 6, 'WD800BB-22DK -  80.0 GB'),
(29, 6, 'WD800BD-08MR - 80.0 GB'),
(30, 6, 'WD800JD-00MS - 80GB'),
(31, 6, 'WD800JD-75MS - 80GB'),
(32, 6, 'WD800BD 22MR 80GB'),
(34, 5, 'ST500DM002-1B14'),
(36, 6, 'WD3200AA1KS0 - 320GB'),
(37, 6, 'WD1600AABS0 - 160GB'),
(38, 4, 'HD 502HJ SCSI 500GB'),
(39, 6, 'WD800JD 08MS 80GB'),
(40, 7, 'IDE TYPE47'),
(41, 6, 'WMAYUM 574125 500GB'),
(42, 6, 'wd800 BD 00JH 80GB'),
(43, 6, 'WMAM9AX910  - 80GB'),
(44, 6, 'WD160000AAJB - 160GB'),
(45, 6, 'WD1600AJS 00YZA0 - 150GB'),
(46, 4, 'HD252 HL - 250GB');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=172 ;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id`, `sector`, `oficina`, `interno`, `rango`, `ip`, `usuario`, `sistemaoperativo`, `cpu`, `motherboard`, `memoria`, `discoduro`, `cd-dvd`, `monitor`, `serial-monitor`) VALUES
(1, 1, 'TERRAZA', '208', 1, 62, 'ACANOSA', 10, 14, 1, 9, 26, 9, 23, '605SPZK51901'),
(2, 1, 'TERRAZA', '208', 1, 184, 'MCASADO', 10, 34, 38, 9, 26, 19, 23, '605SPSP652382'),
(3, 1, 'TERRAZA', '208', 1, 94, 'VDELCASTILLO', 10, 31, 39, 7, 14, 25, 23, '605SPJP51892'),
(4, 1, 'TERRAZA', '208', 1, 190, 'JMOLINA', 11, 31, 39, 7, 14, 25, 23, '605SPGS52191'),
(5, 1, 'TERRAZA', '208', 1, 163, 'MCARRIQUEO', 4, 31, 39, 7, 14, 25, 23, '605SPFX51915'),
(6, 45, 'TERRAZA', '208', 1, 243, 'DGARCIA', 11, 18, 14, 10, 11, 29, 26, '010NSJD1L084'),
(7, 1, 'TERRAZA', '265', 1, 167, 'JACOSTA', 11, 18, 14, 10, 12, 31, 26, '010NSSW1L550'),
(8, 1, 'TERRAZA', '265', 1, 228, 'DMUNOZ', 11, 18, 14, 10, 11, 22, 26, '010NSTG1L505'),
(9, 1, 'TERRAZA', '265', 1, 46, 'FTOLEDO', 10, 31, 39, 7, 14, 25, 23, '605SPKN51645'),
(10, 3, '300', '178', 1, 33, 'GSACCO', 10, 48, 38, 9, 32, 19, 24, '711SPJPD2588'),
(11, 3, '300', '178', 1, 42, 'SRACCA', 10, 18, 14, 10, 11, 31, 25, '010NSUL1L126'),
(12, 3, '300', '78', 1, 149, 'SSOTO', 10, 24, 39, 7, 14, 25, 23, '605SPGS51615'),
(13, 7, '301', '118-207', 1, 182, 'LRIVERA', 4, 20, 34, 7, 14, 6, 38, 'AN15HXBX305080T'),
(14, 7, '301', '118-207', 1, 29, 'PMUNOZ', 4, 18, 14, 10, 10, 31, 25, '21085393'),
(15, 7, '301', '118-207', 1, 218, 'MBRUGUIERE', 4, 18, 14, 10, 11, 29, 25, '201024630'),
(16, 7, '301', '118-207', 1, 55, 'ECIDES', 4, 18, 14, 10, 11, 31, 25, '201024630'),
(17, 7, '301', '118-207', 1, 196, 'RVALLE', 11, 20, 14, 10, 34, 29, 25, '206NSLDOB044'),
(18, 22, '304', '184', 1, 148, 'LIFLORES', 10, 44, 42, 4, 3, 28, 23, '605SPBF52373'),
(19, 22, '304', '184', 1, 32, 'PRODRIGUEZ', 10, 14, 14, 7, 19, 20, 24, '711SPPBD1560'),
(20, 22, '305', '117', 1, 244, 'HCORREGIDOR', 11, 24, 1, 10, 19, 19, 40, 'Q95ASHA180142'),
(21, 1, '305', '117', 1, 19, 'DHERNANDEZ', 11, 18, 14, 10, 37, 31, 26, '010NSCX1L999'),
(22, 14, '306', '146', 1, 39, 'CTORRES', 11, 51, 2, 12, 34, 35, 42, '201NSFZOE667'),
(23, 42, '307', '138', 1, 126, 'ACASTRO', 10, 31, 39, 7, 14, 25, 23, '605SPBFS2589'),
(24, 42, '307', '138', 1, 18, 'AARIAS', 10, 18, 14, 10, 11, 8, 26, '010NSVY1L87'),
(25, 27, '308', '192', 1, 76, 'GPARRA', 10, 18, 14, 10, 11, 31, 26, '010NSHQ1L545'),
(26, 27, '308', '176', 1, 176, 'FNACCI', 10, 48, 38, 9, 32, 19, 24, '711SPCAD2523'),
(27, 27, '308', '192', 1, 191, 'LMONTENEGRO', 10, 16, 15, 9, 28, 32, 16, '411SPZK19949'),
(28, 26, '309', '192', 1, 81, 'JBERROS', 10, 31, 39, 7, 14, 25, 24, '704SPED73004'),
(29, 10, '310', '103', 1, 125, 'JESPERON', 10, 17, 4, 10, 10, 31, 33, '166938XZ619367L'),
(30, 13, '312', '172', 1, 171, 'JMORA', 4, 18, 16, 11, 38, 29, 33, '16938XZ401871X'),
(31, 13, '312', '172', 1, 164, 'LROMANIUK', 10, 31, 39, 7, 14, 25, 39, '6120500432'),
(32, 13, '314', '102', 1, 102, 'CCHAZARRETA', 10, 45, 28, 7, 4, 7, 43, '505SPVH10319'),
(33, 13, '314', '102', 1, 140, 'TSRODA', 10, 31, 39, 7, 14, 25, 23, '605SPG51639'),
(34, 43, '315', '91', 1, 160, 'MAMORA', 10, 31, 41, 7, 30, 16, 24, '704spgs56559'),
(35, 43, '315', '191', 1, 106, 'MSOSA', 12, 18, 14, 10, 11, 31, 26, '010NSF1L525'),
(36, 13, '316', '158', 1, 78, 'HVALIENTE', 10, 50, 27, 4, 12, 22, 43, '507SPNY58039'),
(37, 13, '316', '158', 1, 96, 'EHIDALGO', 4, 29, 30, 10, 32, 15, 23, '605SPTM51977'),
(38, 25, '317', '316', 1, 127, 'ASUAREZ', 4, 49, 2, 10, 1, 31, 23, '902SPWQ23233'),
(39, 25, '317', '316', 1, 53, 'MPORRO', 10, 18, 14, 10, 11, 29, 26, '010NSXT1L514'),
(40, 25, '317', '316', 1, 155, 'LTASSARA', 10, 24, 39, 7, 14, 25, 23, ''),
(42, 44, '318', '105', 1, 36, 'DBERON', 10, 18, 14, 10, 11, 31, 26, '010NSYV1L498'),
(43, 25, '319', '160', 1, 130, 'CDELL', 10, 18, 14, 10, 11, 31, 25, '010NSCX1L091'),
(44, 25, '318', '105', 1, 134, 'NFERNANDEZ', 10, 34, 38, 9, 32, 19, 24, '704SPJP73036'),
(45, 25, '319', '160', 1, 133, 'BLOBOS', 10, 18, 14, 10, 11, 31, 23, '701SPLC51208'),
(46, 25, '319', '160', 1, 132, 'MBELIU', 10, 49, 2, 10, 10, 31, 2, 'L1706LA13427'),
(47, 25, '320', '319', 1, 30, 'MMALPELI', 4, 34, 47, 10, 13, 31, 44, 'L1706LA0313391'),
(48, 25, '320', '319', 1, 197, 'GCALVO', 4, 37, 48, 10, 13, 31, 2, 'L1706LA013392'),
(49, 25, '320', '319', 1, 45, 'JSOLANO', 10, 24, 30, 9, 32, 15, 23, '605SPVV52318'),
(50, 7, '324', '187', 1, 68, 'ROTERO', 14, 55, 53, 12, 34, 38, 53, '2264467000306'),
(51, 7, '324', '187', 1, 158, 'OCATRILEO', 10, 34, 38, 9, 32, 19, 24, '711SPAED2512'),
(52, 44, 'PLANTA BAJA', '141', 1, 101, 'MZAMBRANO', 10, 36, 43, 7, 26, 32, 9, ''),
(53, 44, 'PLANTA BAJA', '141', 1, 44, 'DULLOA', 11, 18, 14, 10, 11, 31, 25, '010NSB1L133'),
(54, 44, 'PLANTA BAJA', '141', 1, 200, 'RFIGUEROA', 10, 24, 49, 10, 11, 31, 23, '605spkn52317'),
(55, 44, 'PLANTA BAJA', '141', 1, 173, 'CAGUIRRE', 10, 31, 39, 7, 14, 12, 23, ''),
(56, 8, '3', '154', 1, 156, 'AFERNANDEZ', 10, 27, 30, 9, 30, 15, 47, 'ETF5904777019'),
(57, 8, '3', '154', 1, 117, 'YJACOB', 11, 34, 38, 9, 32, 19, 24, '711SPYRD1562'),
(58, 37, '5', '212', 1, 187, 'MMORA', 10, 15, 15, 9, 39, 5, 48, '166938XZ70369B'),
(59, 37, '4', '212', 1, 49, 'ASANCHEZ', 10, 27, 30, 7, 32, 15, 49, '704SPHGC7145'),
(60, 40, '6', '212', 1, 91, 'GGRAZIANO', 10, 34, 38, 9, 32, 19, 24, '711SPZKD2525'),
(61, 45, '6', '185', 1, 52, 'LLEAL', 7, 18, 14, 10, 11, 22, 26, '201024259'),
(62, 45, '6', '185', 1, 166, 'RBERTOA', 10, 27, 30, 7, 32, 15, 23, '605SPQJ51900'),
(63, 40, '7', '154', 1, 92, 'LMALVINO', 4, 41, 35, 7, 16, 15, 12, 'CNNNSS13215'),
(64, 40, '7', '154', 1, 114, 'RMEZA', 10, 48, 38, 9, 32, 19, 23, '605SPXV52322'),
(65, 1, '', '', 1, 185, 'CMUNOZ', 10, 27, 30, 9, 32, 26, 38, 'LB15HXJY623107T'),
(66, 40, 'ENTRE PISO', '154', 1, 83, 'VGEUNA', 10, 18, 14, 10, 11, 22, 26, '010NSUL1L510'),
(67, 40, 'ENTRE PISO', '154', 1, 172, 'CSALAYA', 10, 31, 39, 7, 14, 36, 23, '605SPUV52630'),
(68, 9, 'MESA DE ENTRADA', '133', 1, 105, 'CMAZZEI', 4, 44, 12, 8, 18, 24, 24, '180116843009'),
(69, 9, 'MESA DE ENTRADA', '133', 1, 145, 'CLOPEZ', 10, 31, 39, 7, 14, 25, 23, '605SPCA1971'),
(70, 9, 'MESA DE ENTRADA', '133', 1, 82, 'PSOTO', 10, 18, 14, 10, 11, 22, 26, '010NSPQP1L524'),
(71, 38, 'PLANTA BAJA', '169', 1, 41, 'MTREPODE', 10, 27, 30, 7, 32, 15, 50, 'U1C844A123091'),
(72, 38, 'PLANTA BAJA', '169', 1, 119, 'SSANDOVAL', 10, 45, 46, 3, 18, 10, 16, '504SPUU58350'),
(73, 39, 'PLANTA BAJA', '169', 1, 129, 'CPEREZ', 4, 27, 12, 6, 14, 25, 5, ''),
(74, 38, 'PLANTA BAJA', '169', 1, 112, 'MBARBARA', 10, 53, 12, 10, 11, 22, 25, '010NSF1L549'),
(75, 38, 'PLANTA BAJA', '169', 1, 97, 'VROUSSIOT', 4, 17, 4, 10, 12, 31, 25, '201024640'),
(76, 39, 'PLANTA BAJA', '169', 1, 7, 'ICALDIROLI', 4, 39, 7, 9, 39, 19, 24, '711SPAED2584'),
(77, 39, 'PLANTA BAJA', '169', 1, 151, 'LMINOR', 10, 32, 40, 7, 31, 13, 24, '704SPKN73005'),
(78, 39, 'PLANTA BAJA', '49', 1, 79, 'ABARTOLO', 10, 18, 14, 10, 11, 31, 24, ''),
(79, 39, 'PLANTA BAJA', '149', 1, 61, 'MPELOZO', 4, 33, 45, 9, 9, 31, 25, '201024673'),
(80, 46, 'PLANTA BAJA', '120', 1, 118, 'ONUNEZ', 2, 45, 28, 2, 4, 7, 51, ''),
(81, 46, 'PLANTA BAJA', '120', 1, 34, 'SVICHICH', 1, 54, 50, 1, 40, 37, 7, '751AH29AL394'),
(82, 46, 'PLANTA BAJA', '120', 1, 71, 'JRODRIGUEZ', 10, 19, 22, 4, 21, 29, 28, 'CS15H9PL114004M'),
(83, 34, '3', '427894', 2, 161, 'MALICE', 12, 18, 14, 10, 11, 31, 26, '010NSDR1L554'),
(84, 3, '201', '112-173', 1, 153, 'MVERDINELLI', 10, 16, 19, 9, 7, 15, 7, '751AH29AJ185'),
(85, 3, '201', '112-173', 1, 139, 'CDONATE', 10, 18, 14, 10, 11, 31, 25, '010NSH91L497'),
(87, 2, '202', '261', 1, 90, 'AHERNANDEZ', 10, 18, 14, 10, 11, 31, 26, '010NSYU11090'),
(88, 2, '202', '127', 1, 121, 'EPAILLALEF', 4, 18, 16, 10, 10, 31, 25, '200616843009'),
(89, 2, '202', '261', 1, 136, 'AFREDES', 10, 18, 14, 10, 10, 22, 17, '103SPI2436'),
(90, 5, '203', '157', 1, 24, 'LOSTREJ', 14, 55, 51, 12, 36, 38, 25, '204NSVYOL935'),
(91, 5, '203', '157', 1, 27, 'AGIMENEZ', 13, 55, 51, 12, 36, 38, 25, '205NSMAOS987'),
(92, 47, '205', '124', 1, 186, 'ESCHUTT', 11, 17, 52, 10, 10, 31, 33, '166938XZS030089N'),
(93, 9, '206', '130', 1, 86, 'JDELICIA', 11, 17, 52, 10, 10, 31, 52, 'BRHKG02590'),
(94, 9, '206', '130', 1, 179, 'GGRANARA', 10, 34, 7, 9, 14, 15, 23, ''),
(95, 48, '207', '122', 1, 95, 'LSOTO', 10, 48, 38, 9, 32, 19, 24, '711SPFXK3755'),
(96, 49, '209', '159', 1, 177, 'CFERRERYA', 10, 18, 14, 10, 11, 31, 26, '010NSVY1L135'),
(97, 49, '209', '159', 1, 236, 'CBALUCZYNSKY', 10, 31, 39, 7, 14, 26, 23, '605SPZK52309'),
(98, 49, '209', '159', 1, 107, 'VSANHUEZA', 10, 46, 42, 7, 2, 25, 16, '411SPXV14962'),
(99, 50, '210', '186', 1, 157, 'GBARBALACE', 4, 17, 4, 10, 10, 31, 33, '166938XZ709386F'),
(100, 50, '210', '186', 1, 247, 'LFREDES', 7, 18, 14, 10, 11, 31, 26, '010NSPE1L496'),
(101, 51, '211', '165', 1, 48, 'MBELLINI', 13, 56, 51, 12, 41, 38, 34, '2088h8xb602915l'),
(102, 52, '217', '175', 1, 31, 'AVILLALBA', 12, 57, 54, 12, 36, 39, 42, '204NSEJOK820'),
(103, 53, '212', '161', 1, 223, 'JLENZA', 4, 25, 39, 7, 14, 25, 23, '605SPLC1904'),
(104, 53, '212', '161', 1, 180, 'MPOINSOT', 4, 46, 32, 6, 2, 11, 11, 'BR04249728'),
(105, 53, '212', '161', 1, 178, 'MLINARES', 4, 48, 7, 9, 32, 19, 23, '605SPVHS2375'),
(106, 53, '212', '161', 1, 245, 'JTROTTA', 4, 18, 14, 10, 11, 22, 26, '010NSF21L31'),
(107, 54, '213', '135', 1, 165, 'ROLO', 4, 34, 7, 9, 32, 19, 23, '605PVH'),
(108, 54, '213', '135', 1, 59, 'EGEOFFROY', 4, 25, 39, 7, 14, 25, 23, '605SPRW52614'),
(109, 55, '214', '137', 1, 124, 'LMORON', 10, 31, 39, 7, 14, 25, 16, '411SPWQ14961'),
(110, 55, '214', '137', 1, 144, 'SCALARCO', 11, 48, 55, 9, 39, 8, 23, '605SPPB525692'),
(111, 55, '214', '137', 1, 23, 'SMEDINA', 11, 48, 38, 9, 30, 19, 24, '711SPAED1552'),
(112, 55, '214', '137', 1, 25, 'DSALAT', 10, 48, 38, 9, 32, 19, 24, '711SPDEK3820'),
(113, 56, '215', '197', 1, 15, 'MZIBECCHI', 10, 18, 14, 10, 11, 31, 26, '010NSLB1L504'),
(114, 56, '215', '197', 1, 116, 'AEZCURRA', 10, 31, 39, 7, 14, 25, 23, '605SPTM52625'),
(115, 56, '215', '197', 1, 232, 'LMORENO', 10, 47, 56, 4, 42, 40, 28, 'SC15H9LLA01427Y'),
(116, 56, '215', '197', 1, 242, 'MIMAYA', 10, 48, 38, 9, 32, 19, 24, '711SPLCCD2768'),
(117, 57, '216', '128', 1, 246, 'JMAGALLANES', 7, 37, 26, 10, 23, 29, 23, '605SPNY51911'),
(118, 57, '216', '128', 1, 188, 'AFROILAN', 4, 25, 5, 7, 17, 12, 52, '612SPLP41988'),
(119, 52, '217', '175', 1, 141, 'LGUTIERREZ', 10, 31, 39, 7, 14, 25, 23, '605SOVH1895'),
(120, 52, '218', '168', 1, 99, 'CMANUEL', 10, 31, 39, 7, 14, 28, 23, '605SPYR1634'),
(121, 52, '218', '168', 1, 137, 'RENTRAIGAS', 4, 45, 28, 4, 20, 7, 24, '711SPAEK3224'),
(122, 58, '219', '166', 1, 147, 'MTINTA', 10, 31, 39, 7, 14, 25, 23, '605SPZK52189'),
(123, 58, '219', '166', 1, 241, 'APAREDES', 10, 29, 30, 7, 43, 27, 52, '504SPLC08496'),
(124, 48, '220', '199', 1, 69, 'NALMADA', 10, 18, 14, 10, 10, 31, 26, '010NSRV1L086'),
(125, 48, '220', '199', 1, 142, 'FROLON', 10, 31, 39, 7, 14, 25, 23, '605SPAES2320'),
(126, 48, '220', '199', 1, 159, 'MNUNEZ', 10, 46, 42, 7, 2, 11, 16, '411SPVH68367'),
(127, 48, '220', '199', 1, 37, 'AKEBERLEIN', 10, 18, 14, 10, 11, 22, 26, '010NSNS1L127'),
(128, 57, '221', '143', 1, 161, 'VSOSA', 4, 34, 7, 9, 32, 19, 25, '22055417'),
(129, 57, '221', '143', 1, 73, 'ARIVAS', 4, 34, 7, 9, 8, 19, 32, 'AR17H9LQ548056DAR'),
(130, 57, '221', '143', 1, 181, 'JLUCERO', 4, 37, 8, 10, 44, 41, 2, '190016843009'),
(131, 47, '222', '109', 1, 100, 'CGUTTMANN', 10, 48, 38, 9, 32, 19, 24, '711SPSLD2526'),
(132, 47, '222', '109', 1, 16, 'MDEVICENZI', 10, 18, 14, 10, 11, 31, 26, '010NSKK1L557'),
(133, 47, '222', '109', 1, 84, 'RMORENO', 10, 18, 14, 10, 11, 22, 26, '010NSGH1L551'),
(134, 49, '224', '177', 1, 152, 'HLOPEZ', 10, 31, 39, 4, 14, 25, 23, '605SPUH52183'),
(135, 49, '224', '177', 1, 174, 'CROCHE', 11, 24, 38, 9, 19, 19, 14, '711SPEAK3200'),
(136, 4, '225', '188', 1, 67, 'MRIAL', 12, 18, 14, 10, 11, 22, 23, '605SPFX52587'),
(137, 11, '226', '258', 1, 17, 'AGCORTES', 10, 18, 14, 10, 10, 22, 26, '010NSXT1L538'),
(138, 11, '226', '156', 1, 40, 'LNUNEZ', 10, 58, 30, 7, 32, 15, 24, '711SPLLCD1592'),
(139, 10, '227', '132', 1, 135, 'SMIGLIACCI', 10, 48, 38, 9, 32, 19, 33, '166938XZ709382D'),
(140, 10, '227', '132', 1, 85, 'PROSSIO', 10, 46, 42, 7, 2, 26, 16, '411SPSL68494'),
(141, 59, '1', '425383', 2, 179, 'TCHIESA', 7, 58, 30, 9, 8, 31, 54, 'JC017000000L6'),
(142, 60, '2', '425383', 2, 88, 'DELEGADO', 10, 31, 31, 7, 14, 16, 16, '411SPZ68877'),
(143, 61, '5', '425383', 2, 188, 'MPITTAU', 4, 25, 39, 7, 14, 25, 23, '605SPWQ51985'),
(144, 61, '5', '425383', 2, 164, 'KRODRIGUEZ', 4, 18, 14, 10, 11, 22, 26, '010NSFZ1L083'),
(145, 62, '6', '425383', 2, 170, 'GGIRONDE', 11, 18, 14, 10, 11, 31, 24, '704SPNY73007'),
(146, 62, '6', '425383', 2, 182, 'ADMINISTRATIVO', 7, 38, 3, 10, 25, 22, 34, 'H1AK500000'),
(147, 62, '6', '425383', 2, 199, 'VCARDOSO', 4, 14, 15, 9, 39, 21, 24, '712SPYR52274'),
(148, 64, '1', '427879', 1, 123, 'IEULOGIO', 10, 49, 2, 10, 12, 42, 33, '166938XZ507528L'),
(149, 64, '1', '427879', 1, 65, 'CBARRENO', 12, 15, 15, 9, 39, 8, 24, '605SPLC91304'),
(150, 64, '1', '427879', 1, 38, 'RTORRES', 11, 35, 57, 9, 9, 32, 24, '805PRW59646'),
(151, 65, '7', '425383', 2, 194, 'DDICARLI', 4, 21, 15, 9, 39, 7, 16, '406SPED19956'),
(152, 65, '7', '425383', 2, 190, 'S/USUARIO', 4, 26, 5, 7, 14, 7, 55, '11111'),
(153, 63, '8', '425383', 2, 195, 'SDELUCCHI', 11, 31, 39, 7, 14, 25, 32, 'AR1749LQ453544X'),
(154, 66, '2', '425383', 2, 193, 'ROTINANO', 4, 40, 8, 10, 31, 7, 26, '201024682'),
(155, 66, '3', '425383', 2, 191, 'GRAMOS', 4, 59, 8, 10, 45, 7, 56, 'V89GH9NZ529493K'),
(156, 17, '3', '428171', 1, 154, 'IHECHENLEITNER', 4, 23, 14, 10, 46, 31, 48, 'H1AK500000'),
(157, 17, '3', '428171', 1, 1000, 'LRIZZUTTI', 4, 60, 58, 7, 39, 43, 57, 'H9NQ415580'),
(158, 66, '3', '425383', 2, 99, 'S/U2', 4, 20, 10, 5, 14, 11, 3, '40A2034615ZA'),
(159, 23, '3', '423940', 2, 134, 'ELOPEZ', 10, 17, 4, 10, 22, 35, 25, '906PYR80106'),
(160, 23, 'OFICINA TECNICA', '423948', 2, 233, 'CMILLAGUAN', 10, 29, 39, 7, 31, 13, 24, '704SPDT73002'),
(161, 5, '3', '428171', 1, 110, 'KQUINTAS', 4, 61, 25, 7, 28, 17, 26, '010NSPE1L520'),
(162, 23, '2', '423948', 2, 135, 'SMORALES', 10, 48, 38, 9, 32, 19, 31, 'LB15HBY529809Y'),
(163, 17, '4', '152', 1, 54, 'MCIFUENTES', 10, 63, 2, 10, 10, 29, 48, '166938XZ401859Z'),
(164, 5, '4', '152', 1, 109, 'VMUNIZ', 4, 24, 30, 7, 29, 15, 50, 'U1C84A123151'),
(165, 17, '5', '152', 1, 128, 'DCASTRILLO', 10, 29, 25, 7, 15, 7, 23, '605SPTMS1953'),
(166, 17, '7', '170', 1, 143, 'NACUÃ‘A ', 4, 29, 59, 7, 29, 40, 52, '170116843009'),
(167, 17, '6', '428171', 1, 199, 'SANGELICCHI', 10, 64, 60, 10, 31, 13, 26, '105NSLBBO2424'),
(168, 17, '6', '428171', 1, 168, 'S/U3', 10, 31, 39, 7, 14, 25, 23, '605SPAE52368'),
(169, 17, '4', '152', 1, 80, 'S/U4', 11, 46, 42, 4, 14, 25, 58, '6740900636'),
(170, 17, '5', '152', 1, 5, 'ARUGGERI', 10, 64, 39, 7, 14, 25, 10, 'MX 9192G014'),
(171, 17, '7', '170', 1, 26, 'AMONTECINO', 4, 53, 17, 9, 46, 31, 26, '010NSPE1L544');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

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
(28, 5, 'PHASER 3600'),
(29, 2, 'P10SH'),
(30, 2, 'HP PHOTOSMART PLUS B210 SERIES');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `impresoralocal`
--

INSERT INTO `impresoralocal` (`id`, `area`, `oficina`, `queimpresora`, `serie`, `rango`, `ip`) VALUES
(1, 26, '309', 7, 'BRO6FG3TF0', 1, 81),
(2, 10, '310', 13, 'BRBS4BN626', 1, 125),
(3, 5, '203', 30, 'BR2A8FC03C', 1, 27),
(4, 53, '212', 13, 'BRBS73763M', 1, 223),
(5, 54, '213', 17, 'BRKJB21679', 1, 165),
(6, 64, '1', 7, 'BR86PGMOQ204TJ', 1, 123),
(7, 64, '1', 18, 'BRBSC1927T', 1, 65),
(8, 64, '1', 19, 'BRBS862G2W', 1, 38),
(9, 65, '7', 15, 'BRBS820G42', 2, 194);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `impresorared`
--

INSERT INTO `impresorared` (`id`, `area`, `oficina`, `queimpresora`, `serie`, `rango`, `ip`) VALUES
(1, 41, 'terraza', 28, '3849517340', 1, 210),
(2, 13, '314', 14, 'BRHS5670G26', 1, 208),
(3, 13, '316', 26, '3861893927', 1, 122),
(4, 25, '320', 27, 'NBF528826', 1, 239),
(5, 44, 'PLANTA BAJA', 29, 'BRBS81S4142', 1, 101),
(6, 9, 'MESA DE ENTRADA', 27, 'NBF528837', 1, 64),
(7, 46, 'PLANTA BAJA', 27, 'NBF528823', 1, 93);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

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
(11, 'NO POSEE'),
(12, 'IHAS'),
(13, 'SHW');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `marcadiscoduro`
--

INSERT INTO `marcadiscoduro` (`id`, `marcadiscoduro`) VALUES
(1, 'EXCELSTOR'),
(2, 'HITACHI'),
(3, 'MAXTOR'),
(4, 'SAMSUNG'),
(5, 'SEAGATE'),
(6, 'WESTERN DIGITAL'),
(7, 'GENERICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcaimpresora`
--

CREATE TABLE IF NOT EXISTS `marcaimpresora` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marcaimpresora` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `marcaimpresora`
--

INSERT INTO `marcaimpresora` (`id`, `marcaimpresora`) VALUES
(1, 'EPSON'),
(2, 'HP'),
(3, 'OKI'),
(4, 'SAMSUNG'),
(5, 'XEROX'),
(6, 'LEXMARK');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcamonitor`
--

CREATE TABLE IF NOT EXISTS `marcamonitor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marcamonitor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

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
(13, 'TWIN'),
(14, 'GENERICO'),
(15, 'DTK'),
(16, 'TATUNG'),
(17, 'MEGAT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcamotherboard`
--

CREATE TABLE IF NOT EXISTS `marcamotherboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marcamotherboard` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

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
(10, 'PCCHIPS'),
(11, 'ABILITY '),
(12, 'AMD'),
(13, 'PHILLIPS');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

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
(39, 13, 'AS65'),
(40, 2, 'DCR1000001'),
(42, 10, 'W1943SE'),
(43, 10, 'S006'),
(44, 11, '1619 SWA'),
(45, 3, '750CF'),
(46, 14, 'GENERICO'),
(47, 5, '6920HDA'),
(48, 12, 'SYNC MASTER B1930'),
(49, 10, '200:1'),
(50, 2, 'FT7520 Q'),
(51, 2, 'SPECTRIM 4V 4VLRA'),
(52, 10, '710E'),
(53, 3, 'EM1810W'),
(54, 3, '775V'),
(55, 15, 'MA1435'),
(56, 12, 'SYNC MASTER B1630'),
(57, 12, 'SYNC MASTER 632 NW/ PLUS'),
(58, 16, 'TM5ERDA '),
(59, 17, 'ME48');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

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
(46, 10, 'M748LMRT'),
(47, 2, 'P5641 M LX'),
(48, 2, 'PSKPL AM SE'),
(49, 1, 'INTEL G31 MS'),
(50, 11, 'MB586TXA'),
(51, 1, 'H61MDGS'),
(52, 1, 'N685 VCC'),
(53, 1, 'H61M DGS'),
(54, 1, 'N68VS3FX'),
(55, 8, 'P5 GC-MX/1333'),
(56, 8, '865G-M8'),
(57, 2, 'P5GC VM PRO'),
(58, 12, '690V HAMMER'),
(59, 2, 'PSV D2 MX SE'),
(60, 2, 'P5V VM ULTRA'),
(61, 13, 'M755L MRE');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `sistemaoperativo`
--

INSERT INTO `sistemaoperativo` (`id`, `sistemaoperativo`) VALUES
(1, 'WINDOWS 95'),
(2, 'WINDOWS 98'),
(3, 'WINDOWS 98'),
(4, 'WINDOWS 2000'),
(5, 'WINDOWS 2000'),
(6, 'WINDOWS XP'),
(7, 'WINDOWS VISTA'),
(8, 'WINDOWS 7'),
(9, 'WINDOWS 8'),
(10, 'KUBUNTU 6.04'),
(11, 'KUBUNTU 8.04'),
(12, 'UBUNTU 10.04'),
(13, 'UBUNTU 12.04'),
(14, 'UBUNTU 12.10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tracking`
--

CREATE TABLE IF NOT EXISTS `tracking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idequipo` int(11) NOT NULL,
  `idincidente` int(11) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `tecnico` varchar(50) NOT NULL,
  `solucion` varchar(350) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idincidente` (`idincidente`),
  KEY `idequipo` (`idequipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tracking`
--

INSERT INTO `tracking` (`id`, `idequipo`, `idincidente`, `fecha`, `tecnico`, `solucion`) VALUES
(1, 83, 3, '4/03/2013', 'dgarcia', 'Se migro el equipo a ubuntu 10.04                                    '),
(2, 50, 3, '6/03/2013', 'dgarcia', 'Se le instalo en ubuntu 12.10, aparte se configuro una maquina virtual con windows xp para poder ejecutar el sistema de retenciones de rentas (SIAPS).                                    ');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nombrecompleto`, `usuario`, `password`, `tipo`) VALUES
(1, 'Diego Garcia', 'pucho', 'pucho', 'root'),
(2, 'Administrador', 'admin', 'admin', 'root'),
(3, 'Jorge Molina', 'jmolina', 'jmolina', 'root'),
(4, 'Maria Gimena Casado', 'mcasado', 'mcasado', 'user1');

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
