-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2018 a las 16:03:21
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `siffa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis_solo`
--

CREATE TABLE `analisis_solo` (
  `Idanalisis` bigint(20) NOT NULL COMMENT 'Llave primaria',
  `Numero_Muestreo` int(11) NOT NULL COMMENT 'Esta Columna Es para LLEvar orden segun el numero de muestras para asi tener una estadistica segun el tiempo y el numero de muestraeo (Analisis)',
  `Idlaboratorio` bigint(20) NOT NULL COMMENT 'Nombre del Laboratorio que Realizo el Analisis de Suelo',
  `Id_Lote` bigint(20) NOT NULL COMMENT 'Esta llave foranea es para traer el cultivo segun su lote y finca',
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
  `CE` float NOT NULL COMMENT 'Nutrientes del Suelo',
  `fecha_realizacion` date NOT NULL,
  `fecha_registr` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `analisis_solo`
--

INSERT INTO `analisis_solo` (`Idanalisis`, `Numero_Muestreo`, `Idlaboratorio`, `Id_Lote`, `Clima`, `Densidad_Aparente`, `PH`, `Profundidad_Muestra`, `Materia_Organica`, `Fosforo`, `Aluminio`, `Calcio`, `Magnesio`, `Potasio`, `Sodio`, `CICE`, `Azufre`, `Hierro`, `Manganesio`, `Cobre`, `Zinc`, `Boro`, `Saturacion_Aluminio`, `Saturacion_Sodio`, `CE`, `fecha_realizacion`, `fecha_registr`) VALUES
(8, 1, 2, 14, 'calido', 3, 5, 0.04, 5, 3, 3, 3, 3, 3, 3, 15, 3, 3, 3, 3, 3, 3, 20, 20, 3, '2017-11-20', '2018-11-20 09:31:55');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `analisis_solo`
--
ALTER TABLE `analisis_solo`
  ADD PRIMARY KEY (`Idanalisis`),
  ADD KEY `Id_Lote` (`Id_Lote`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `analisis_solo`
--
ALTER TABLE `analisis_solo`
  MODIFY `Idanalisis` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria', AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
