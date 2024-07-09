-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2017 a las 17:57:27
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `siffa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis`
--

CREATE TABLE IF NOT EXISTS `analisis` (
  `Idanalisis` bigint(20) NOT NULL COMMENT 'Llave primaria',
  `Numero_Muestreo` int(11) NOT NULL COMMENT 'Esta Columna Es para LLEvar orden segun el numero de muestras para asi tener una estadistica segun el tiempo y el numero de muestraeo (Analisis)',
  `Idlaboratorio` bigint(20) NOT NULL COMMENT 'Nombre del Laboratorio que Realizo el Analisis de Suelo',
  `Idlotecultivo` bigint(20) NOT NULL COMMENT 'Esta llave foranea es para traer el cultivo segun su lote y finca',
  `Clima` varchar(40) NOT NULL COMMENT 'Clima del suelo',
  `Densidad_Aparente` float NOT NULL,
  `PH` float NOT NULL,
  `Profundidad_Muestra` float NOT NULL COMMENT 'Profundidad dela muestra',
  `Materia_Organica` float NOT NULL COMMENT 'Materi Organica',
  `Fosforo` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Aluminio` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Calcio` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Magnesio` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Potasio` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Sodio` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `CICE` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Azufre` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Hierro` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Manganesio` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Cobre` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Zinc` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Boro` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Saturacion_Aluminio` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `Saturacion_Sodio` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `CE` float NOT NULL COMMENT 'Nutrientes del Suelo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aplicacion_fetilizante`
--

CREATE TABLE IF NOT EXISTS `aplicacion_fetilizante` (
  `Idaplicacion_fertilizante` bigint(20) NOT NULL COMMENT 'Llave primaria',
  `Numero_Kilogramos` float NOT NULL COMMENT 'Cantidad de Fertilizantes aplicados',
  `Idlotecultivo` bigint(20) NOT NULL COMMENT 'Cultivo con su respectivo lote y su finca',
  `Idfertilizante` bigint(20) NOT NULL COMMENT 'Fertilizante'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ayuda`
--

CREATE TABLE IF NOT EXISTS `ayuda` (
  `IdAyuda` bigint(20) NOT NULL,
  `Problema` varchar(500) NOT NULL,
  `archivo` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ayuda`
--

INSERT INTO `ayuda` (`IdAyuda`, `Problema`, `archivo`) VALUES
(1, 'COMO REGISTRAR FINCA', ''),
(2, 'COMO REGISTRAR LOTE', ''),
(3, 'COMO REGISTRAR CULTIVO', ''),
(4, 'COMO REGISTRAR TIPO DE CULTIVO', ''),
(5, 'COMO REGISTRAR FERTILIZANTE', ''),
(6, 'COMO REGISTRAR LOTECULTIVO', ''),
(7, 'COMO REGISTRAR LABORATORIO', ''),
(8, 'COMO REGISTRAR ANALISIS', ''),
(9, 'COMO CONSULTAR FINCA', ''),
(10, 'COMO CONSULTAR LOTE', ''),
(11, 'COMO CONSULTAR CULTIVO', ''),
(12, 'COMO CONSULTAR TIPO DE CULTIVO', ''),
(13, 'COMO CONSULTAR FERTILIZANTE', ''),
(14, 'COMO CONSULTAR LOTECULTIVO', ''),
(15, 'COMO CONSULTAR LABORATORIO', ''),
(16, 'COMO CONSULTAR ANALISIS', ''),
(17, 'COMO EXPORTAR FINCA', ''),
(18, 'COMO EXPORTAR LOTE', ''),
(19, 'COMO EXPORTAR CULTIVO', ''),
(20, 'COMO EXPORTAR FERTILIZANTE', ''),
(21, 'COMO INGRESAR LOTE CULTIVO', ''),
(22, 'COMO EXPORTAR LABORATORIO', ''),
(23, 'COMO INTERPRETAR ANALISIS DE SUELO', ''),
(24, 'COMO EXPORTAR ANALISIS', ''),
(25, 'COMO REALIZAR COPIA DE SEGURIDAD A LA BASE DE DATOS', ''),
(26, 'COMO CAMBIAR CLAVE DEL ADMINISTRADOR', ''),
(27, 'QUE ES MODULO CONSULTAS', ''),
(28, 'QUE ES MODULO  ACERCA DE ', ''),
(29, 'QUE ES MODULO CAPTURA DE DATOS', ''),
(30, 'QUE ES MODULO INTERPRETACION DEL SUELO', ''),
(31, 'QUE ES MODULO COPIA DE SEGURIDAD', ''),
(32, 'QUE ES MODULO CONFIGURACIONES', ''),
(33, 'COMO EXPORTAR LOTECULTIVO', ''),
(34, 'QUE ES EL MODULO CONSULTAR REQUERIMIENTOS', ''),
(35, 'COMO ELIMINAR UN TIPO DE CULTIVO', ''),
(36, 'COMO ELIMINAR UN CULTIVO', ''),
(37, 'COMO ELIMINAR UNA FINCA', ''),
(38, 'COMO ELIMINAR UN LOTE', ''),
(39, 'COMO ELIMINAR UN FERTILIZANTE', ''),
(40, 'COMO ELIMINAR UN LOTECULTIVO', ''),
(41, 'QUE ES LOTECULTIVO', ''),
(42, 'COMO ELIMINAR UN FERTILIZANTE', ''),
(43, 'COMO ACTUALIZAR UNA FINCA', ''),
(44, 'COMO ACTUALIZAR UN LOTE', ''),
(45, 'COMO ACTUALIZAR UN CULTIVO', ''),
(46, 'COMO ACTUALIZAR UN LABORATORIO', ''),
(47, 'COMO ACTUALIZAR LOTECULTIVO', ''),
(48, 'COMO RESTAURAR UN COPIA DE SEGURIDAD', ''),
(49, 'QUE ES ENCALAMIENTO', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clima`
--

CREATE TABLE IF NOT EXISTS `clima` (
  `Idclima` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clima`
--

INSERT INTO `clima` (`Idclima`, `Nombre`) VALUES
(1, 'Frio'),
(2, 'Medio'),
(3, 'Calido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivo`
--

CREATE TABLE IF NOT EXISTS `cultivo` (
  `idcultivo` bigint(20) NOT NULL COMMENT 'Llave primaria',
  `NombreCultivo` varchar(50) NOT NULL COMMENT 'Nombre Cultivo para la Idenificacion',
  `Idtipo_cultivo` bigint(20) NOT NULL COMMENT 'Tipo de Cultivo',
  `idrequerimiento` bigint(20) NOT NULL COMMENT 'Nutrientes de este Cultivo'
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cultivo`
--

INSERT INTO `cultivo` (`idcultivo`, `NombreCultivo`, `Idtipo_cultivo`, `idrequerimiento`) VALUES
(1, 'CEBADA', 1, 1),
(2, 'TRIGO', 1, 2),
(3, 'AVENA', 1, 3),
(4, 'MAIZ (HIBRIDO)', 1, 4),
(5, 'MAIZ (HIBRIDO-VAR)', 1, 5),
(6, 'SORGO', 1, 6),
(7, 'ARROZ RIEGO (LLANOS)', 1, 7),
(8, 'ARROZ RIEGO', 1, 8),
(9, 'ARROZ RIEGO (TOL)', 1, 9),
(10, 'ARROZ RIEGO (HUILA)', 1, 10),
(11, 'PAPA (VAR.)', 2, 11),
(12, 'PAPA (VAR. R-12)', 2, 12),
(13, 'YUCA', 2, 13),
(14, 'BATATA', 2, 14),
(15, 'NAME', 2, 15),
(16, 'REMOLACHA AZUCAR', 2, 16),
(17, 'PAPA CRIOLLA', 2, 17),
(18, 'TOMATE', 3, 18),
(19, 'ESPARRAGOS', 3, 19),
(20, 'ZANAHORIA', 3, 20),
(21, 'COLIFLOR', 3, 21),
(22, 'REPOLLO', 3, 22),
(23, 'APIO', 3, 23),
(24, 'LECHUGA', 3, 24),
(25, 'CEBOLLA CABEZONA', 3, 25),
(26, 'CEBOLLA', 3, 26),
(27, 'REMOLACHA', 3, 27),
(28, 'ESPINACAS', 3, 28),
(29, 'BERENJENA', 3, 29),
(30, 'PEPINO COHOMBRO', 3, 30),
(31, 'PEPINO COHOMBRO', 3, 30),
(32, 'FRIJOL VERDE', 3, 31),
(33, 'AJO', 3, 33),
(34, 'AJI (CAPSICUM)', 3, 34),
(35, 'PEPINILLO', 3, 35),
(36, 'HABICHUELA', 3, 36),
(37, 'PIMENTON (HIBRIDO)', 3, 37),
(38, 'HABA', 4, 38),
(39, 'FRIJOL', 4, 39),
(40, 'HABICHUELA', 4, 40),
(41, 'GUISANTE', 4, 41),
(42, 'ALFALFA', 4, 42),
(43, 'ALVERJON', 4, 43),
(44, 'ARVEJA', 4, 44),
(45, 'SOYA (VAR.)', 5, 45),
(46, 'PALMA AFRICANA.', 5, 46),
(47, 'GIRASOL', 5, 47),
(48, 'AJONJOLI', 5, 48),
(49, 'COCOTERO (COCO)', 5, 49),
(50, 'MANI', 5, 50),
(51, 'COLZA', 5, 51),
(52, 'JATROPHA CURCAS', 5, 52),
(53, 'CAFÃ‰ TECNIFICADO', 6, 53),
(54, 'CAFÃ‰(SEMI LIMP)', 6, 54),
(55, 'CACAO - VIVERO', 6, 55),
(56, 'SOYA', 4, 56),
(57, 'PALMA AFRICANA', 5, 57),
(58, 'COCO', 5, 58),
(59, 'CACAO VIVERO', 6, 59),
(60, 'CACAO PRODUCCION', 6, 60),
(61, 'TABACO', 6, 61),
(62, 'TÃ‰', 6, 62),
(63, 'PIMIENTA NG', 6, 63),
(64, 'ALGODÃ“N', 6, 64),
(65, 'CAÃ‘A PANELERA', 6, 65),
(66, 'CAÃ‘A AZUCAR', 6, 66),
(67, 'ALGODÃ“N HILO', 6, 67),
(68, 'CAUCHO', 6, 68),
(69, 'CAUCHO LATEX SEC', 6, 69),
(70, 'YUTE FIBRA SECA', 6, 70),
(71, 'AGUACATE', 7, 71),
(72, 'BADEA', 7, 72),
(73, 'BANANO', 7, 73),
(74, 'CIRUELO', 7, 74),
(75, 'CHULUPA', 7, 75),
(76, 'CITRICOS', 7, 76),
(77, 'DURAZNO', 7, 77),
(78, 'GUANABANA', 7, 78),
(79, 'GUAYABA', 7, 79),
(80, 'GULUPA', 7, 80),
(81, 'LULO', 7, 81),
(82, 'MANGO', 7, 82),
(83, 'MANZANO', 7, 83),
(84, 'MARACUYA', 7, 84),
(85, 'MELON HIBRIDO', 7, 85),
(86, 'MORA', 7, 86),
(87, 'MORA CASTILLA', 7, 87),
(88, 'PAPAYA', 7, 88),
(89, 'PERA', 7, 89),
(90, 'PLATANO HARTON', 7, 90),
(91, 'PIÃ‘A', 7, 91),
(92, 'SANDIA', 7, 92),
(93, 'TOMATE ARB', 7, 93),
(94, 'UVA', 7, 94);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `Iddepartamento` bigint(20) NOT NULL COMMENT 'Llave primaria',
  `NombreDepartamento` varchar(50) NOT NULL COMMENT 'Nombre del Departamento, Este Campo es para identificar la ubicacion'
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`Iddepartamento`, `NombreDepartamento`) VALUES
(1, 'Amazonas'),
(2, 'Antioquia'),
(3, ' Arauca'),
(4, 'Atlantico'),
(5, 'Bolivar'),
(6, 'Boyaca'),
(7, 'Caldas'),
(8, 'Caqueta'),
(9, 'Casanare'),
(10, 'Cauca'),
(11, 'Cesar'),
(12, 'Choco'),
(13, 'Cordoba'),
(14, 'Cundinamarca'),
(15, 'Guainia'),
(16, 'Guaviare'),
(17, 'Huila'),
(18, 'La Guajira'),
(19, 'Magdalena'),
(20, 'Meta'),
(21, 'Narino'),
(22, 'Norte de Santander'),
(23, 'Putumayo'),
(24, 'Quindio'),
(25, 'Risaralda'),
(26, 'San Andres y Providencia'),
(27, 'Santander'),
(28, 'Sucre'),
(29, 'Tolima'),
(30, 'Valle del Cauca'),
(31, 'Vaupes'),
(32, 'Vichada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disponibilidad_segun_ph`
--

CREATE TABLE IF NOT EXISTS `disponibilidad_segun_ph` (
  `Iddisponibilidad` int(11) NOT NULL,
  `Idph` int(11) NOT NULL,
  `N` float NOT NULL,
  `P` float NOT NULL,
  `K` float NOT NULL,
  `S` float NOT NULL,
  `Ca` float NOT NULL,
  `Mg` float NOT NULL,
  `Fe` float NOT NULL,
  `Mn` float NOT NULL,
  `B` float NOT NULL,
  `Zn` float NOT NULL,
  `Cu` float NOT NULL,
  `Mo` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `disponibilidad_segun_ph`
--

INSERT INTO `disponibilidad_segun_ph` (`Iddisponibilidad`, `Idph`, `N`, `P`, `K`, `S`, `Ca`, `Mg`, `Fe`, `Mn`, `B`, `Zn`, `Cu`, `Mo`) VALUES
(1, 1, 0.01, 0.1, 0.1, 0.1, 0.1, 0.1, 1, 0.3, 0.3, 0.3, 0.3, 0.1),
(2, 2, 0.25, 0.25, 0.25, 0.25, 0.25, 0.25, 1, 0.4, 0.4, 0.4, 0.4, 0.2),
(3, 3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 1, 0.6, 0.6, 0.6, 0.6, 0.3),
(4, 4, 0.45, 0.4, 0.43, 0.43, 0.43, 0.43, 1, 1, 1, 1, 1, 0.3),
(5, 5, 0.8, 0.45, 0.8, 0.8, 0.5, 0.5, 1, 1, 1, 1, 1, 0.4),
(6, 6, 1, 0.8, 1, 1, 0.8, 0.8, 1, 1, 1, 1, 1, 0.7),
(7, 7, 1, 1, 1, 1, 1, 1, 0.8, 1, 1, 1, 1, 0.9),
(8, 8, 1, 0.8, 1, 1, 1, 1, 0.5, 0.9, 0.5, 0.6, 0.6, 1),
(9, 9, 0.7, 0.4, 1, 1, 1, 1, 0.4, 0.7, 0.4, 0.3, 0.3, 1),
(10, 10, 0.4, 0.5, 1, 1, 0.8, 0.8, 0.3, 0.4, 0.7, 0.2, 0.2, 1),
(11, 11, 0.3, 1, 1, 1, 0.4, 0.4, 0.2, 0.2, 1, 0.1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fertilizantes`
--

CREATE TABLE IF NOT EXISTS `fertilizantes` (
  `Idfertilizante` bigint(20) NOT NULL COMMENT 'Llave primaria',
  `NombreFertilizante` varchar(50) NOT NULL COMMENT 'Nombre del Fertilizantes Con sus Propiedades',
  `Nitrogeno` float NOT NULL COMMENT 'Nutriente que ofrece el Fertilizante Para el Suelo',
  `Fosforo` float NOT NULL COMMENT 'Nutriente que ofrece el Fertilizante Para el Suelo',
  `Potasio` float NOT NULL COMMENT 'Nutriente que ofrece el Fertilizante Para el Suelo',
  `Calcio` float NOT NULL COMMENT 'Nutriente que ofrece el Fertilizante Para el Suelo',
  `Magnesio` float NOT NULL COMMENT 'Nutriente que ofrece el Fertilizante Para el Suelo',
  `Azufre` float NOT NULL COMMENT 'Nutriente que ofrece el Fertilizante Para el Suelo',
  `Zinc` float NOT NULL COMMENT 'Nutriente que ofrece el Fertilizante Para el Suelo',
  `Boro` float NOT NULL COMMENT 'Nutriente que ofrece el Fertilizante Para el Suelo',
  `Cobre` float NOT NULL COMMENT 'Nutriente que ofrece el Fertilizante Para el Suelo'
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fertilizantes`
--

INSERT INTO `fertilizantes` (`Idfertilizante`, `NombreFertilizante`, `Nitrogeno`, `Fosforo`, `Potasio`, `Calcio`, `Magnesio`, `Azufre`, `Zinc`, `Boro`, `Cobre`) VALUES
(1, 'ABOCOL 10-20-20', 10, 20, 20, 3, 0, 0, 0, 0, 0),
(2, 'ABOCOL 10-30-10', 10, 30, 10, 3, 0, 0, 0, 0, 0),
(3, 'ABOCOL 12-24-12', 12, 24, 12, 3, 0, 0, 0, 0, 0),
(4, 'ABOCOL 12-26-12', 12, 26, 12, 3.5, 0, 0, 0, 0, 0),
(5, 'ABOCOL 13-26-6', 13, 16, 6, 0, 0, 7, 0, 0, 0),
(6, 'RAFOS (12-24-12-2)', 12, 24, 12, 2, 2, 1, 0.2, 0.4, 0),
(7, 'PLAN-K (10-14-23-2)', 10, 15, 23, 2, 2, 1, 0.1, 0.1, 0),
(8, 'TRIPLE 14 (14-14-14)', 14, 14, 14, 3.5, 0, 0, 0, 0, 0),
(9, 'ABOCOL (14-14-14-2)', 14, 14, 14, 1.5, 2, 4.5, 0, 0, 0),
(10, 'TRIPLE 15 (15-15-15-2)', 15, 15, 15, 2.5, 0, 0, 0, 0, 0),
(11, 'ABOCOL (17-17-17)', 17, 17, 17, 0, 0, 0, 0, 0, 0),
(12, 'CONPLEX (27-6-3-2)', 27, 6, 3, 0, 2, 4, 0, 0, 0),
(13, 'ABOCOL-LECHERO(25-10-5-1)', 25, 10, 5, 0, 1, 1, 0, 0, 0),
(14, 'NIPOTK-6MGO (18-5-15-6)', 18, 5, 15, 1, 6, 1, 0, 0.6, 0),
(15, 'MINOX (10-5-5-5) MENORES', 10, 5, 5, 14, 5, 3, 3, 1, 0),
(16, 'ABOCOL (25-14-0-2)', 25, 14, 0, 0, 2, 0, 0, 0, 0),
(17, 'FERTIL-INDIA(24-14-3-2)', 23, 14, 3, 0, 2, 0, 0, 0, 0),
(18, 'REMITAL-M 17-6-18-2', 17, 6, 18, 2.5, 2, 1.6, 0.1, 0.2, 0),
(19, 'SUPER FOSFATO TRIPLE(0-46-0)TSP', 0, 46, 0, 0, 0, 0, 0, 0, 0),
(20, 'ABOCOL (80-0-0)', 80, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'AMONIACO ANHIDRO', 82, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'MAP GRANULADO (12-52-0)', 12, 52, 0, 0, 0, 0, 0, 0, 0),
(23, 'MAP STANDARD (10-50-0)', 10, 50, 0, 0, 0, 0, 0, 0, 0),
(24, 'MAP GRANULADO (11-52-0)', 11, 52, 0, 0, 0, 0, 0, 0, 0),
(25, 'DAP GRANULADO (18-46-0)', 18, 46, 0, 0, 0, 0, 0, 0, 0),
(26, 'DAP CRISTALES (21-53-0)', 21, 53, 0, 0, 0, 0, 0, 0, 0),
(27, 'ROCA FOSFORICA (30%)', 0, 30, 0, 46, 0, 0, 0, 0, 0),
(28, 'SULFATO DE POTASIO (0-0-50)', 0, 0, 50, 0, 0, 17, 0, 0, 0),
(29, 'CIPOMAG (0-0-22-18) SULPHOMAG', 0, 0, 50, 0, 22, 18, 0, 0, 0),
(30, 'BORATO 48%', 0, 0, 0, 0, 0, 0, 0, 15, 0),
(31, 'BORATO 15 B (BORAX)', 0, 0, 0, 0, 0, 0, 0, 21, 0),
(32, 'OXIMAG (MGO 90%) ', 0, 0, 0, 0, 90, 0, 0, 0, 0),
(33, 'ABOCOL KLESERITA (MGS04.H20)', 0, 0, 0, 0, 26, 20.68, 0, 0, 0),
(34, 'ABOCOL (17-6-18 -2 CAFETERO)', 17, 6, 18, 2.5, 2, 1.6, 0.1, 0.2, 0),
(35, 'ABOTEK (14-4-23 -4)', 14, 4, 23, 2.5, 4, 2, 0.1, 0.1, 0),
(36, 'AZUTEK (14-0-24 -5)', 14, 0, 24, 0, 5.5, 3, 0.44, 0.13, 0),
(37, 'KUMBA 25K (15-0-25 -3)', 15, 0, 25, 0, 3.5, 2.5, 1, 0.25, 0),
(38, 'PLANCTON (15-7-16 -3)', 15, 7, 16, 2.24, 5, 1.41, 0.08, 0.17, 0),
(39, 'NITRAX (22-0-0)', 22, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 'NITRAXX 21 (21-0-0)', 21, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 'NITRAX -M (22-0-0)', 22, 0, 0, 0, 0, 0, 0.27, 0.14, 0),
(42, 'NITRAX -S (22-0-0 -30)', 22, 0, 0, 0, 0, 3, 0, 0, 0),
(43, 'NITRAX -K (21-0-3)', 21, 0, 3, 0, 0, 0, 0, 0, 0),
(44, 'NITRA UAN (32-0-0)', 32, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 'NITROTER CALCIO (8-0-0-17)', 8, 0, 0, 17, 0, 0, 0, 0, 0),
(46, 'NITROTER MAGNESIO (7-0-0-10)', 7, 0, 0, 0, 10, 0, 0, 0, 0),
(47, 'NITROFER MANGANESIO (7-0-0 -10)', 7, 0, 0, 0, 10, 0, 0, 0, 0),
(48, 'ACUACID (10% NO3)', 12, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 'NITROFER CALCIO (15)', 15, 0, 0, 26, 0, 0, 0, 0, 0),
(50, 'NITROFER MAGNESIO (10-0-0-15 MGO)', 10, 0, 0, 0, 15, 0, 0, 0, 0),
(51, 'NITROFER MAGNESIO (10-0-0 -15MGO)', 10, 0, 0, 0, 15, 0, 0, 0, 0),
(52, 'NITROFER POTASIO (13-0-45)', 13, 0, 45, 0, 0, 0, 0, 0, 0),
(53, 'NITROFER POTASIO (13-0-44)', 13, 0, 44, 0, 0, 0, 0, 0, 0),
(54, 'NITROFER K-MG (13-43-0 -2MGO)', 13, 0, 43, 0, 2, 0, 0, 0, 0),
(55, 'NITROFER BORO (15-0-0 -26-CAO)', 15, 0, 0, 26, 0, 0, 0, 0.2, 0),
(56, 'SULKSOL (0-0-50 -17S)', 0, 0, 50, 0, 0, 17, 0, 0, 0),
(57, 'FOSKER (0-52-34)', 0, 52, 34, 0, 0, 0, 0, 0, 0),
(58, 'UREA 46% (46-0-0)', 46, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 'NITRA SUL (36-0-0)', 36, 0, 0, 0, 0, 17, 0, 0, 0),
(60, 'SAM (21-0-0 24-S)', 21, 0, 0, 0, 0, 14, 0, 0, 0),
(61, 'KCL (0-0-60)', 0, 0, 60, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hacienda`
--

CREATE TABLE IF NOT EXISTS `hacienda` (
  `Idhacienda` bigint(20) NOT NULL COMMENT 'Llave primaria',
  `Nombre` varchar(50) NOT NULL COMMENT 'Nombre de la finca para su identificacion',
  `Fax` varchar(50) NOT NULL COMMENT 'Fax para enviar su plan nutricional para que el cliente no salga de su hogar',
  `Telefono` int(11) NOT NULL,
  `Idvereda` bigint(20) NOT NULL COMMENT 'Vereda A la que pertenece esa finca',
  `Tamano` float NOT NULL COMMENT 'Tamaño En Hectareas'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE IF NOT EXISTS `laboratorio` (
  `Idlaboratorio` bigint(20) NOT NULL,
  `Nombre_Laboratorio` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Idmunicipio` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`Idlaboratorio`, `Nombre_Laboratorio`, `Direccion`, `Telefono`, `Idmunicipio`) VALUES
(1, 'ICA', 'CLL 9 NUMERO 28DNS', 32123132, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lote`
--

CREATE TABLE IF NOT EXISTS `lote` (
  `Idlote` bigint(20) NOT NULL COMMENT 'Llave primaria',
  `NumeroLote` int(50) NOT NULL COMMENT 'Numero del lote en la finca',
  `IdHacienda` bigint(20) NOT NULL COMMENT 'Hacienda A la Cual pertenece el lote',
  `latitud` varchar(50) NOT NULL COMMENT 'Coordenadas geograficas',
  `longitud` varchar(50) NOT NULL COMMENT 'Cordenadas Geograficas',
  `Ha` float NOT NULL COMMENT 'Tamaño En Hectareas'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lotecultivo`
--

CREATE TABLE IF NOT EXISTS `lotecultivo` (
  `Idlotecultivo` bigint(20) NOT NULL COMMENT 'Llave primaria',
  `Idlote` bigint(20) NOT NULL COMMENT 'Numero del lote en la finca',
  `idcultivo` bigint(20) NOT NULL COMMENT 'Cultivo que tiene el lote',
  `Extension` float NOT NULL COMMENT 'Extension del cultivo en el lote'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mineralizacion`
--

CREATE TABLE IF NOT EXISTS `mineralizacion` (
  `Idmineralizacion` int(11) NOT NULL,
  `Idclima` int(11) NOT NULL,
  `RM` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mineralizacion`
--

INSERT INTO `mineralizacion` (`Idmineralizacion`, `Idclima`, `RM`) VALUES
(1, 1, 0.015),
(2, 2, 0.02),
(3, 3, 0.027);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
  `Idmunicipio` bigint(20) NOT NULL COMMENT 'Llave primaria',
  `Nombre_Municipio` varchar(50) NOT NULL COMMENT 'Nombre del Municipio, Este Campo es para identificar la ubicacion',
  `Iddepartamento` bigint(20) NOT NULL COMMENT 'Nombre del Departamento al que pertenece el municipio'
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`Idmunicipio`, `Nombre_Municipio`, `Iddepartamento`) VALUES
(1, 'Alpujarra', 29),
(2, 'Alvarado', 29),
(3, 'Ambalema', 29),
(4, 'Anzoategui', 29),
(5, 'Armero Guayabal', 29),
(6, 'Ataco', 29),
(7, 'Cajamarca', 29),
(8, 'Carmen de Apicala', 29),
(9, 'Casabianca', 29),
(10, 'Chaparral', 29),
(11, 'Coello', 29),
(12, 'Coyaima', 29),
(13, 'Cunday', 29),
(14, 'Dolores', 29),
(15, 'Espinal', 29),
(16, 'Guamo', 29),
(17, 'Falan', 29),
(18, 'Flandes', 29),
(19, 'Fresno', 29),
(20, 'Herveo', 29),
(21, 'San Sebastián de Mariquita', 29),
(22, 'Honda', 29),
(23, 'Ibague', 29),
(24, 'Icononzo', 29),
(25, 'Lerida', 29),
(26, 'Libano', 29),
(27, 'Melgar', 29),
(28, 'Murillo', 29),
(29, 'Natagaima', 29),
(30, 'Ortega', 29),
(31, 'Palocabildo', 29),
(32, 'Piedras', 29),
(33, 'Planadas', 29),
(34, 'Prado', 29),
(35, 'Purificacion', 29),
(36, 'Rioblanco', 29),
(37, 'Roncesvalles', 29),
(38, 'Rovira', 29),
(39, 'San Antonio', 29),
(40, 'San Luis', 29),
(41, 'Sebastián de Mariquita', 29),
(42, 'Santa Isabel', 29),
(43, 'Suárez', 29),
(44, 'Valle de San Juan', 29),
(45, 'Venadillo', 29),
(46, 'Villahermosa', 29),
(47, 'Villarrica', 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros_encalamiento`
--

CREATE TABLE IF NOT EXISTS `parametros_encalamiento` (
  `Idparametros_encalamiento` int(11) NOT NULL,
  `Cantidad_ph` float NOT NULL,
  `Cantidad_Materia_Organica` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parametros_encalamiento`
--

INSERT INTO `parametros_encalamiento` (`Idparametros_encalamiento`, `Cantidad_ph`, `Cantidad_Materia_Organica`) VALUES
(1, 5.5, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros_nutrientes`
--

CREATE TABLE IF NOT EXISTS `parametros_nutrientes` (
  `Idparametro_nutriente` bigint(20) NOT NULL,
  `Nombre_nutriente` varchar(50) NOT NULL,
  `Numero_Bajo` float NOT NULL,
  `Numero_Alto` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parametros_nutrientes`
--

INSERT INTO `parametros_nutrientes` (`Idparametro_nutriente`, `Nombre_nutriente`, `Numero_Bajo`, `Numero_Alto`) VALUES
(1, 'P', 15, 40),
(2, 'K', 0.2, 0.4),
(3, 'Ca', 3, 6),
(4, 'Mg', 1.5, 2.5),
(5, 'Na', 0.1, 0.5),
(6, 'Al', 1, 2.5),
(7, 'S', 8, 12),
(8, 'Fe', 20, 100),
(9, 'Mn', 10, 25),
(10, 'Cu', 1, 3),
(11, 'B', 0.3, 0.6),
(12, 'Zn', 2, 4),
(13, 'CICE', 3, 6),
(14, 'porcentaje_Al', 15, 30),
(15, 'porcentaje_Na', 7, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametro_materia`
--

CREATE TABLE IF NOT EXISTS `parametro_materia` (
  `Idparametro_materia` bigint(20) NOT NULL,
  `Idclima` int(11) NOT NULL,
  `Nombre_Materia` varchar(50) NOT NULL,
  `numero_alto` float NOT NULL,
  `numero_bajo` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parametro_materia`
--

INSERT INTO `parametro_materia` (`Idparametro_materia`, `Idclima`, `Nombre_Materia`, `numero_alto`, `numero_bajo`) VALUES
(1, 2, 'MO', 3, 5),
(2, 3, 'MO', 2, 4),
(3, 1, 'MO', 5, 10),
(4, 2, 'CO', 1.7, 2.9),
(5, 3, 'CO', 1.1, 2.3),
(6, 1, 'CO', 2.9, 5.7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ph`
--

CREATE TABLE IF NOT EXISTS `ph` (
  `Idph` int(11) NOT NULL,
  `Calificacion` varchar(50) NOT NULL,
  `Numero_menor` float NOT NULL,
  `Numero_Mayor` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ph`
--

INSERT INTO `ph` (`Idph`, `Calificacion`, `Numero_menor`, `Numero_Mayor`) VALUES
(1, 'Ultra Acido', 0, 3.5),
(2, 'Extremadanamente Acido', 3.5, 4.5),
(3, 'Muy fuertemente acido', 4.6, 5),
(4, 'Fuertemente acido', 5.1, 5.5),
(5, 'Moderadamente acido', 5.6, 6),
(6, 'Ligeramente Acido', 6.1, 6.5),
(7, 'Neutro', 6.6, 7.3),
(8, 'Ligeramente alcalino', 7.4, 7.8),
(9, 'Moderadamente Alcalino', 7.9, 8.4),
(10, 'Fuertemente Alcalino', 8.5, 9),
(11, 'Extremadanamente Alcalino', 0, 9),
(12, 'NORMAL', 2, 0),
(13, 'SALINO', 4, 0),
(14, 'SODICO', 4, 0),
(15, 'SALINO-SODICO', 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requerimiento`
--

CREATE TABLE IF NOT EXISTS `requerimiento` (
  `idrequerimiento` bigint(20) NOT NULL COMMENT 'Llave primaria',
  `Nitrogeno` float NOT NULL COMMENT 'Nutrientes que Necesita el Cultivo para Crecer',
  `Fosforo` float NOT NULL COMMENT 'Nutrientes que Necesita el Cultivo para Crecer',
  `Potasio` float NOT NULL COMMENT 'Nutrientes que Necesita el Cultivo para Crecer',
  `Calcio` float NOT NULL COMMENT 'Nutrientes que Necesita el Cultivo para Crecer',
  `Magnesio` float NOT NULL COMMENT 'Nutrientes que Necesita el Cultivo para Crecer',
  `Azufre` float NOT NULL COMMENT 'Nutrientes que Necesita el Cultivo para Crecer',
  `Zinc` float NOT NULL COMMENT 'Nutrientes que Necesita el Cultivo para Crecer',
  `Boro` float NOT NULL COMMENT 'Nutrientes que Necesita el Cultivo para Crecer',
  `Cobre` float NOT NULL COMMENT 'Nutrientes que Necesita el Cultivo para Crecer'
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `requerimiento`
--

INSERT INTO `requerimiento` (`idrequerimiento`, `Nitrogeno`, `Fosforo`, `Potasio`, `Calcio`, `Magnesio`, `Azufre`, `Zinc`, `Boro`, `Cobre`) VALUES
(1, 150, 55, 150, 30, 25, 20, 0, 0, 0),
(2, 170, 75, 175, 40, 30, 30, 0, 0, 0),
(3, 150, 45, 160, 35, 15, 20, 0, 0, 0),
(4, 160, 65, 160, 40, 65, 30, 1.3, 1.2, 0.8),
(5, 120, 50, 120, 30, 50, 25, 1, 1, 0.5),
(6, 120, 40, 100, 25, 30, 15, 1, 0.5, 0.5),
(7, 120, 60, 125, 40, 41, 12, 3, 1, 0.3),
(8, 100, 50, 160, 25, 20, 10, 2.5, 0.2, 0.1),
(9, 180, 65, 112, 35, 30, 20, 3, 0.5, 0.2),
(10, 154, 25, 112, 30, 26, 25, 3.5, 0.4, 0.2),
(11, 150, 70, 280, 50, 45, 18, 0.5, 1.5, 0.1),
(12, 170, 80, 310, 60, 50, 20, 0.8, 2, 0.15),
(13, 150, 70, 350, 35, 40, 20, 0.5, 0.5, 0.05),
(14, 190, 75, 340, 15, 65, 19, 0.2, 0.15, 0.1),
(15, 140, 40, 190, 10, 20, 10, 0, 0, 0),
(16, 200, 39, 250, 50, 54, 35, 0.5, 0.15, 0.05),
(17, 120, 40, 210, 35, 30, 20, 0.5, 1.5, 0.15),
(18, 140, 65, 190, 60, 25, 30, 1, 1.5, 0.5),
(19, 120, 60, 150, 30, 20, 10, 0.5, 1.5, 0.15),
(20, 150, 50, 240, 100, 30, 30, 0.8, 0.8, 0.5),
(21, 250, 44, 292, 70, 20, 15, 0.15, 0.05, 0.02),
(22, 175, 69, 200, 5, 38, 18, 0.6, 0.02, 0.01),
(23, 200, 80, 300, 0, 25, 0, 0, 0, 0),
(24, 90, 90, 160, 5, 15, 12, 0.5, 0.05, 0.05),
(25, 120, 80, 150, 40, 10, 18, 0.25, 0.4, 0.2),
(26, 85, 50, 160, 20, 15, 20, 0.2, 0.4, 0.02),
(27, 150, 50, 220, 40, 50, 30, 0.3, 0.5, 0.1),
(28, 120, 45, 200, 5, 35, 0, 0, 0, 0),
(29, 175, 40, 300, 10, 30, 10, 0.5, 0.3, 0.1),
(30, 170, 50, 120, 30, 60, 10, 0.4, 0.3, 0.1),
(31, 170, 50, 120, 30, 60, 10, 0.4, 0.3, 0.1),
(32, 130, 40, 160, 15, 30, 5, 0.5, 0.1, 0.1),
(33, 15, 5, 15, 5, 12, 10, 0.1, 0.1, 0.05),
(34, 110, 50, 130, 40, 18, 20, 1, 1.5, 0.2),
(35, 70, 50, 120, 30, 60, 12, 1.5, 1, 0.3),
(36, 175, 20, 150, 50, 20, 20, 0.43, 0.32, 0.25),
(37, 160, 65, 180, 30, 60, 15, 1, 1.5, 0.2),
(38, 160, 45, 120, 15, 20, 5, 0, 0, 0),
(39, 105, 40, 120, 50, 15, 15, 0.3, 0.4, 0.2),
(40, 135, 24, 52, 40, 15, 15, 0.3, 0.4, 0.2),
(41, 125, 35, 80, 10, 15, 10, 0.2, 0.2, 0.2),
(42, 170, 46, 150, 5, 25, 12, 0, 0, 0),
(43, 70, 10, 55, 8, 10, 5, 0.3, 0.2, 0.15),
(44, 125, 30, 75, 50, 20, 20, 0.43, 0.32, 0.25),
(45, 220, 40, 170, 45, 40, 20, 2, 0.5, 0.15),
(46, 190, 25, 250, 40, 32, 25, 1.3, 1.3, 0.1),
(47, 120, 60, 240, 15, 55, 15, 1.5, 0.2, 0.1),
(48, 120, 40, 130, 20, 40, 15, 1.2, 1, 0),
(49, 130, 60, 200, 10, 50, 15, 1.8, 0.5, 0.1),
(50, 170, 30, 110, 15, 20, 15, 0.5, 0.1, 0),
(51, 165, 70, 220, 0, 30, 65, 0, 0, 0),
(52, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 90, 30, 120, 50, 30, 20, 0.2, 2, 0.08),
(54, 80, 25, 110, 30, 20, 15, 0.1, 1.5, 0.05),
(55, 136, 14, 151, 113, 47, 10, 0.5, 1, 0.02),
(56, 220, 40, 170, 45, 40, 2, 2, 0.5, 0.15),
(57, 190, 25, 250, 40, 32, 25, 1.3, 1.3, 0.1),
(58, 130, 60, 200, 10, 50, 15, 1.8, 0.5, 0.1),
(59, 136, 14, 151, 113, 47, 10, 0.5, 1, 0.02),
(60, 438, 48, 633, 373, 129, 30, 1.5, 1.8, 0.08),
(61, 130, 20, 200, 40, 15, 10, 0.5, 0.1, 0.25),
(62, 160, 22, 75, 5, 10, 5, 0, 0, 0),
(63, 240, 40, 210, 5, 30, 5, 0, 0, 0),
(64, 150, 50, 150, 50, 25, 20, 0.5, 0.5, 0.2),
(65, 165, 90, 250, 60, 80, 50, 1, 2, 0.2),
(66, 130, 45, 340, 25, 30, 30, 0.5, 0.5, 0.2),
(67, 120, 45, 90, 30, 40, 20, 0.4, 0.4, 0.2),
(68, 420, 26, 160, 15, 30, 40, 0.3, 0.2, 0.1),
(69, 60, 30, 65, 10, 10, 8, 0.3, 0.2, 0.1),
(70, 65, 30, 160, 20, 35, 10, 0, 0, 0),
(71, 40, 25, 80, 30, 10, 15, 0.2, 0.2, 0.1),
(72, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 250, 50, 700, 25, 50, 20, 2, 3.5, 1),
(74, 100, 80, 160, 10, 15, 20, 1, 0.3, 0.1),
(75, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 232, 46, 250, 40, 35, 30, 0.25, 0.3, 0.15),
(77, 205, 45, 236, 15, 42, 35, 1, 1, 0.05),
(78, 160, 60, 230, 25, 30, 20, 0.8, 0.3, 0.2),
(79, 180, 65, 220, 30, 40, 25, 1, 0.5, 0.2),
(80, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 140, 50, 150, 40, 20, 20, 0.3, 0.2, 0.15),
(82, 100, 25, 110, 30, 75, 25, 1.5, 0.5, 0.15),
(83, 100, 45, 180, 20, 40, 25, 1.5, 1, 0.05),
(84, 80, 15, 120, 15, 10, 20, 0.2, 0.2, 0.2),
(85, 85, 15, 97, 114, 24, 10, 0.12, 0.17, 0.05),
(86, 80, 40, 90, 12, 20, 20, 1.5, 0.3, 0.1),
(87, 80, 30, 75, 30, 20, 15, 0.8, 0.5, 0.2),
(88, 90, 25, 130, 20, 15, 10, 0.1, 0.1, 0.2),
(89, 155, 40, 200, 10, 20, 15, 1, 0.3, 0.1),
(90, 220, 30, 450, 60, 50, 20, 0.8, 2, 0.4),
(91, 205, 58, 393, 10, 42, 60, 0.3, 0.1, 0.2),
(92, 85, 15, 100, 100, 25, 10, 0.2, 0.3, 0.1),
(93, 120, 40, 140, 25, 20, 25, 0.25, 0.4, 0.15),
(94, 170, 60, 220, 15, 60, 30, 2, 1, 0.2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cultivo`
--

CREATE TABLE IF NOT EXISTS `tipo_cultivo` (
  `Idtipo_cultivo` bigint(20) NOT NULL COMMENT 'Llave primaria',
  `Nombre` varchar(50) NOT NULL COMMENT 'Nombre del Tipo de cultivo para identificarlo es decir Cereales,Hortalizas ETC..'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_cultivo`
--

INSERT INTO `tipo_cultivo` (`Idtipo_cultivo`, `Nombre`) VALUES
(1, 'CEREALES'),
(2, 'TUBERCULOS Y RAICES'),
(3, 'HORTALIZAS'),
(4, 'LEGUMINOSAS'),
(5, 'OLEAGINOSAS'),
(6, 'ESTIMULANTES E INDUSTRIALES'),
(7, 'FRUTALES'),
(8, 'PASTOS'),
(9, 'ENSILAJE'),
(10, 'FLORES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `Idusuario` bigint(20) NOT NULL COMMENT 'Llave primaria',
  `Usuario` varchar(50) NOT NULL COMMENT 'Usuario para utilizar en el login no debe ser igual al nombre',
  `Rol` varchar(50) NOT NULL COMMENT 'Rol para saber sus privilegios',
  `password` varchar(200) NOT NULL COMMENT 'contraseña utilizada en el login'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Idusuario`, `Usuario`, `Rol`, `password`) VALUES
(1, 'Administrador', 'Administrador', '$2y$12$8agwUIhljQMjgOP./FzAL.Uey8FqnviDMSRVqDg6SF3yugZnrOqO2'),
(2, 'Consulta', 'Consulta', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vereda`
--

CREATE TABLE IF NOT EXISTS `vereda` (
  `Idvereda` bigint(20) NOT NULL COMMENT 'Llave primaria',
  `NombreVereda` varchar(50) NOT NULL COMMENT 'Nombre de la Vereda para saber su ubicacion',
  `Idmunicipio` bigint(20) NOT NULL COMMENT 'Nombre del municipio en el cual se encuentra la vereda'
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vereda`
--

INSERT INTO `vereda` (`Idvereda`, `NombreVereda`, `Idmunicipio`) VALUES
(1, 'La Arenosa', 15),
(2, 'Coyarco', 15),
(3, 'La Trinidad', 15),
(4, 'Guadualejo', 15),
(5, 'San Francisco Centro', 15),
(6, 'La Caimanera', 15),
(7, 'Rincon De San Francisco', 15),
(8, 'Talura Pto. Peñon', 15),
(9, 'Agua Blanca Sector La Dulce', 15),
(10, 'Dindalito Sector Centro', 15),
(11, 'Aldana y Andagoya', 15),
(12, 'Dindalito Sector La Unión', 15),
(13, 'Montalvo', 15),
(14, 'Dindalito Sector Sena', 15),
(15, 'Patio Bonito', 15),
(16, 'Guasimal', 15),
(17, 'San Francisco Centro', 15),
(18, 'Rincón De San Francisco', 15),
(19, 'Agua Blanca Sector La Dulce', 15),
(20, 'Canastos', 15),
(21, 'Aldana y Andagoya', 15),
(22, 'Cardonal', 15),
(23, 'Guayabal', 15),
(24, 'Paso Ancho', 15),
(25, 'La Joya', 15),
(26, 'Sucre', 15),
(27, 'Las Delicias', 15);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `analisis`
--
ALTER TABLE `analisis`
  ADD PRIMARY KEY (`Idanalisis`), ADD KEY `Idlaboratorio` (`Idlaboratorio`), ADD KEY `Idlotecultivo` (`Idlotecultivo`);

--
-- Indices de la tabla `aplicacion_fetilizante`
--
ALTER TABLE `aplicacion_fetilizante`
  ADD PRIMARY KEY (`Idaplicacion_fertilizante`), ADD KEY `Idlotecultivo` (`Idlotecultivo`), ADD KEY `Idfertilizante` (`Idfertilizante`);

--
-- Indices de la tabla `ayuda`
--
ALTER TABLE `ayuda`
  ADD PRIMARY KEY (`IdAyuda`);

--
-- Indices de la tabla `clima`
--
ALTER TABLE `clima`
  ADD PRIMARY KEY (`Idclima`);

--
-- Indices de la tabla `cultivo`
--
ALTER TABLE `cultivo`
  ADD PRIMARY KEY (`idcultivo`), ADD KEY `idrequerimiento` (`idrequerimiento`), ADD KEY `Idtipo_cultivo` (`Idtipo_cultivo`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`Iddepartamento`);

--
-- Indices de la tabla `disponibilidad_segun_ph`
--
ALTER TABLE `disponibilidad_segun_ph`
  ADD PRIMARY KEY (`Iddisponibilidad`), ADD KEY `Idph` (`Idph`);

--
-- Indices de la tabla `fertilizantes`
--
ALTER TABLE `fertilizantes`
  ADD PRIMARY KEY (`Idfertilizante`);

--
-- Indices de la tabla `hacienda`
--
ALTER TABLE `hacienda`
  ADD PRIMARY KEY (`Idhacienda`), ADD KEY `Idvereda` (`Idvereda`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`Idlaboratorio`), ADD KEY `Idmunicipio` (`Idmunicipio`);

--
-- Indices de la tabla `lote`
--
ALTER TABLE `lote`
  ADD PRIMARY KEY (`Idlote`), ADD KEY `IdHacienda` (`IdHacienda`);

--
-- Indices de la tabla `lotecultivo`
--
ALTER TABLE `lotecultivo`
  ADD PRIMARY KEY (`Idlotecultivo`), ADD KEY `Idlote` (`Idlote`), ADD KEY `idcultivo` (`idcultivo`);

--
-- Indices de la tabla `mineralizacion`
--
ALTER TABLE `mineralizacion`
  ADD PRIMARY KEY (`Idmineralizacion`), ADD KEY `Idclima` (`Idclima`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`Idmunicipio`), ADD KEY `Iddepartamento` (`Iddepartamento`);

--
-- Indices de la tabla `parametros_encalamiento`
--
ALTER TABLE `parametros_encalamiento`
  ADD PRIMARY KEY (`Idparametros_encalamiento`);

--
-- Indices de la tabla `parametros_nutrientes`
--
ALTER TABLE `parametros_nutrientes`
  ADD PRIMARY KEY (`Idparametro_nutriente`);

--
-- Indices de la tabla `parametro_materia`
--
ALTER TABLE `parametro_materia`
  ADD PRIMARY KEY (`Idparametro_materia`), ADD KEY `Idclima` (`Idclima`);

--
-- Indices de la tabla `ph`
--
ALTER TABLE `ph`
  ADD PRIMARY KEY (`Idph`);

--
-- Indices de la tabla `requerimiento`
--
ALTER TABLE `requerimiento`
  ADD PRIMARY KEY (`idrequerimiento`);

--
-- Indices de la tabla `tipo_cultivo`
--
ALTER TABLE `tipo_cultivo`
  ADD PRIMARY KEY (`Idtipo_cultivo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Idusuario`);

--
-- Indices de la tabla `vereda`
--
ALTER TABLE `vereda`
  ADD PRIMARY KEY (`Idvereda`), ADD KEY `Idmunicipio` (`Idmunicipio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `analisis`
--
ALTER TABLE `analisis`
  MODIFY `Idanalisis` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria';
--
-- AUTO_INCREMENT de la tabla `aplicacion_fetilizante`
--
ALTER TABLE `aplicacion_fetilizante`
  MODIFY `Idaplicacion_fertilizante` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria';
--
-- AUTO_INCREMENT de la tabla `ayuda`
--
ALTER TABLE `ayuda`
  MODIFY `IdAyuda` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT de la tabla `clima`
--
ALTER TABLE `clima`
  MODIFY `Idclima` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cultivo`
--
ALTER TABLE `cultivo`
  MODIFY `idcultivo` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `Iddepartamento` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `disponibilidad_segun_ph`
--
ALTER TABLE `disponibilidad_segun_ph`
  MODIFY `Iddisponibilidad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `fertilizantes`
--
ALTER TABLE `fertilizantes`
  MODIFY `Idfertilizante` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT de la tabla `hacienda`
--
ALTER TABLE `hacienda`
  MODIFY `Idhacienda` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  MODIFY `Idlaboratorio` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `lote`
--
ALTER TABLE `lote`
  MODIFY `Idlote` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `lotecultivo`
--
ALTER TABLE `lotecultivo`
  MODIFY `Idlotecultivo` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `mineralizacion`
--
ALTER TABLE `mineralizacion`
  MODIFY `Idmineralizacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `Idmunicipio` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT de la tabla `parametros_encalamiento`
--
ALTER TABLE `parametros_encalamiento`
  MODIFY `Idparametros_encalamiento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `parametros_nutrientes`
--
ALTER TABLE `parametros_nutrientes`
  MODIFY `Idparametro_nutriente` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `parametro_materia`
--
ALTER TABLE `parametro_materia`
  MODIFY `Idparametro_materia` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `ph`
--
ALTER TABLE `ph`
  MODIFY `Idph` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `requerimiento`
--
ALTER TABLE `requerimiento`
  MODIFY `idrequerimiento` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT de la tabla `tipo_cultivo`
--
ALTER TABLE `tipo_cultivo`
  MODIFY `Idtipo_cultivo` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Idusuario` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `vereda`
--
ALTER TABLE `vereda`
  MODIFY `Idvereda` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria',AUTO_INCREMENT=28;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `analisis`
--
ALTER TABLE `analisis`
ADD CONSTRAINT `analisis_ibfk_1` FOREIGN KEY (`Idlaboratorio`) REFERENCES `laboratorio` (`Idlaboratorio`) ON UPDATE CASCADE,
ADD CONSTRAINT `analisis_ibfk_2` FOREIGN KEY (`Idlotecultivo`) REFERENCES `lotecultivo` (`Idlotecultivo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `aplicacion_fetilizante`
--
ALTER TABLE `aplicacion_fetilizante`
ADD CONSTRAINT `aplicacion_fetilizante_ibfk_1` FOREIGN KEY (`Idlotecultivo`) REFERENCES `lotecultivo` (`Idlotecultivo`) ON UPDATE CASCADE,
ADD CONSTRAINT `aplicacion_fetilizante_ibfk_2` FOREIGN KEY (`Idfertilizante`) REFERENCES `fertilizantes` (`Idfertilizante`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cultivo`
--
ALTER TABLE `cultivo`
ADD CONSTRAINT `cultivo_ibfk_1` FOREIGN KEY (`idrequerimiento`) REFERENCES `requerimiento` (`idrequerimiento`) ON UPDATE CASCADE,
ADD CONSTRAINT `cultivo_ibfk_2` FOREIGN KEY (`Idtipo_cultivo`) REFERENCES `tipo_cultivo` (`Idtipo_cultivo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `disponibilidad_segun_ph`
--
ALTER TABLE `disponibilidad_segun_ph`
ADD CONSTRAINT `disponibilidad_segun_ph_ibfk_1` FOREIGN KEY (`Idph`) REFERENCES `ph` (`Idph`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `hacienda`
--
ALTER TABLE `hacienda`
ADD CONSTRAINT `hacienda_ibfk_1` FOREIGN KEY (`Idvereda`) REFERENCES `vereda` (`Idvereda`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `lote`
--
ALTER TABLE `lote`
ADD CONSTRAINT `lote_ibfk_1` FOREIGN KEY (`IdHacienda`) REFERENCES `hacienda` (`Idhacienda`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `lotecultivo`
--
ALTER TABLE `lotecultivo`
ADD CONSTRAINT `lotecultivo_ibfk_1` FOREIGN KEY (`Idlote`) REFERENCES `lote` (`Idlote`) ON UPDATE CASCADE,
ADD CONSTRAINT `lotecultivo_ibfk_2` FOREIGN KEY (`idcultivo`) REFERENCES `cultivo` (`idcultivo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `mineralizacion`
--
ALTER TABLE `mineralizacion`
ADD CONSTRAINT `mineralizacion_ibfk_1` FOREIGN KEY (`Idclima`) REFERENCES `clima` (`Idclima`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
ADD CONSTRAINT `municipio_ibfk_1` FOREIGN KEY (`Iddepartamento`) REFERENCES `departamento` (`Iddepartamento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `parametro_materia`
--
ALTER TABLE `parametro_materia`
ADD CONSTRAINT `parametro_materia_ibfk_1` FOREIGN KEY (`Idclima`) REFERENCES `clima` (`Idclima`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `vereda`
--
ALTER TABLE `vereda`
ADD CONSTRAINT `vereda_ibfk_1` FOREIGN KEY (`Idmunicipio`) REFERENCES `municipio` (`Idmunicipio`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
