-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2015 a las 23:42:33
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyectos`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getline`(IN `line_selected` INT)
BEGIN
 SELECT codigo_proyecto, titulo FROM proyecto where proyecto_linea = line_selected;
  END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `nombre` char(25) NOT NULL,
  `apellido` char(25) DEFAULT NULL,
  `pass` char(40) NOT NULL,
  `correo` char(80) NOT NULL,
  `nivel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`nombre`, `apellido`, `pass`, `correo`, `nivel`) VALUES
('diego', 'franco', 'b674a43d6710dc308bfd53404d88d0b5f46edf15', 'diego.fc.1@hotmail.com', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE IF NOT EXISTS `facultad` (
  `cod_facultad` char(9) NOT NULL,
  `nombre` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`cod_facultad`, `nombre`) VALUES
('1', 'ingenieria'),
('2', 'administracion_empresas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_investigacion`
--

CREATE TABLE IF NOT EXISTS `linea_investigacion` (
  `codigo_linea` char(9) NOT NULL,
  `nombre` char(25) NOT NULL,
  `linea_programa` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `linea_investigacion`
--

INSERT INTO `linea_investigacion` (`codigo_linea`, `nombre`, `linea_programa`) VALUES
('1', 'software', '1'),
('2', 'redes', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `codigo_persona` char(9) NOT NULL,
  `nombre` char(30) NOT NULL,
  `apellido` char(30) NOT NULL,
  `tipo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`codigo_persona`, `nombre`, `apellido`, `tipo`) VALUES
('121212444', 'Jorge', 'Reyes', 'D'),
('124', 'juan', 'forero', 'E'),
('1612051', 'Andres  Guillermo', 'Caviedes Campos', 'E'),
('1612082', 'Luis Javier', 'Peña  Ortiz', 'E'),
('1612091', 'Hugo Jeisson', 'Bohorquez  Barrera', 'E'),
('161209179', 'Clara Ines', 'Vargas', 'E'),
('1612092', 'Giovanny  Andres', 'Cifuentes  Blanco', 'E'),
('161212111', 'Oscar', 'Bachiller', 'D'),
('161212116', 'diego', 'franco', 'E'),
('161212122', 'Wilson', 'Gordillo', 'D'),
('161212222', 'Gustavo', 'Castillo', 'D'),
('161212333', 'Jose Fernano', 'Sotelo', 'D'),
('161212555', 'Alfonso', 'Botero', 'D'),
('161212666', 'Miguel', 'Ojeda', 'D'),
('161212777', 'Angela Patricia', 'Arenas', 'D'),
('161212888', 'Duban', 'Ordoñez', 'D'),
('161212999', 'Esau', 'Paloma', 'D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_email`
--

CREATE TABLE IF NOT EXISTS `persona_email` (
  `codigo_persona` char(9) NOT NULL,
  `email` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona_email`
--

INSERT INTO `persona_email` (`codigo_persona`, `email`) VALUES
('161212116', 'diego.fc.1@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_telefono`
--

CREATE TABLE IF NOT EXISTS `persona_telefono` (
  `codigo_persona` char(9) NOT NULL,
  `telefono` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona_telefono`
--

INSERT INTO `persona_telefono` (`codigo_persona`, `telefono`) VALUES
('161212116', '3204599793');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE IF NOT EXISTS `programa` (
  `codigo_programa` char(9) NOT NULL,
  `nombre` char(25) DEFAULT NULL,
  `programa_facultad` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`codigo_programa`, `nombre`, `programa_facultad`) VALUES
('1', 'ingenieria de sistemas', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `codigo_proyecto` char(9) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `titulo` char(150) NOT NULL,
  `resumen` char(255) NOT NULL,
  `link` char(255) DEFAULT NULL,
  `proyecto_linea` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`codigo_proyecto`, `fecha_inicio`, `fecha_final`, `titulo`, `resumen`, `link`, `proyecto_linea`) VALUES
('1', NULL, NULL, 'weqwe', 'qweqwe', 'qweqwe', '2'),
('20140201', '2014-09-09', '2014-11-24', 'Diseño  e  implementación \r\nde  una  plataforma  Web \r\npara la Geolocalización de \r\nproductos  bienes  y \r\nservicios  en  la  región  de \r\nFusagasugá', 'Diseño  e  implementación \r\nde  una  plataforma  Web \r\npara la Geolocalización de \r\nproductos  bienes  y \r\nservicios  en  la  región  de \r\nFusagasugá', 'mega/1245', '1'),
('20140202', '2014-09-15', '2014-11-24', 'Desarrollo  de  un  material \r\ndidáctico  multimedia \r\n(MDM) como apoyo al club \r\nequino  de  la  universidad \r\nde  Cundinamarca', 'Desarrollo  de  un  material \r\ndidáctico  multimedia \r\n(MDM) como apoyo al club \r\nequino  de  la  universidad \r\nde  Cundinamarca  y  a  la \r\nasignatura  de  sistemas  de \r\nproducción  equina  del \r\nprograma de Zootecnia en \r\nla temática del caballo', 'mega/uuqooquy', '1'),
('20140203', '2014-07-14', '2014-11-24', 'Sistema  de  observación \r\nsocioeconómica  de  la \r\nregión  del  Sumapáz  para \r\nla  facultad  de  ciencias \r\nadministrativas, \r\neconómicas', 'Sistema  de  observación \r\nsocioeconómica  de  la \r\nregión  del  Sumapáz  para \r\nla  facultad  de  ciencias \r\nadministrativas, \r\neconómicas y contables de \r\nla  Universidad  de \r\nCundinamarca  sede \r\nFusagasugá', 'mega/00qjj1', '1'),
('20140204', '2014-07-16', '2014-11-24', 'Análisis  y  propuesta  de diseño de una red de área amplia  metropolitana inalámbrica  para  la  E.S.E. Hospital  San  Rafael', 'Análisis  y  propuesta  de \r\ndiseño de una red de área \r\namplia  metropolitana \r\ninalámbrica  para  la  E.S.E. \r\nHospital  San  Rafael  de \r\nFusagasugá,  que \r\nconectara  a  las  10  redes \r\nrepartidas por la región del \r\nSumapaz  con  el  hospit', 'mega/0anjai', '1'),
('20150101', '2015-05-13', '2015-05-06', 'reco', 'recom', NULL, '2'),
('2015012', '2015-06-01', '2015-05-17', 'sdasda', 'sas', '/mega', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_persona`
--

CREATE TABLE IF NOT EXISTS `proyecto_persona` (
  `codigo_proyecto` char(8) NOT NULL,
  `codigo_persona` char(9) NOT NULL,
  `estado` char(1) NOT NULL,
  `tipo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto_persona`
--

INSERT INTO `proyecto_persona` (`codigo_proyecto`, `codigo_persona`, `estado`, `tipo`) VALUES
('1', '161212555', 'A', 'J'),
('20140201', '1612091', 'A', 'E'),
('20140201', '1612092', 'A', 'E'),
('20140201', '161212111', 'A', 'D'),
('20140201', '161212555', 'A', 'J'),
('20140201', '161212666', 'A', 'J'),
('20140202', '1612082', 'A', 'E'),
('20140202', '161212111', 'A', 'J'),
('20140202', '161212222', 'A', 'D'),
('20140202', '161212777', 'A', 'J'),
('20140203', '1612051', 'A', 'E'),
('20140203', '161212333', 'A', 'D'),
('20140203', '161212888', 'A', 'J'),
('20140203', '161212999', 'A', 'J'),
('20140204', '121212444', 'A', 'D'),
('20140204', '161209179', 'A', 'E'),
('20140204', '161212122', 'A', 'J'),
('20140204', '161212333', 'A', 'J'),
('2015012', '124', 'A', 'E'),
('2015012', '161212116', 'A', 'E'),
('2015012', '161212222', 'A', 'D'),
('2015012', '161212666', 'A', 'J'),
('2015012', '161212999', 'A', 'J');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`correo`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
 ADD PRIMARY KEY (`cod_facultad`);

--
-- Indices de la tabla `linea_investigacion`
--
ALTER TABLE `linea_investigacion`
 ADD PRIMARY KEY (`codigo_linea`), ADD KEY `linea_programa` (`linea_programa`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
 ADD PRIMARY KEY (`codigo_persona`);

--
-- Indices de la tabla `persona_email`
--
ALTER TABLE `persona_email`
 ADD PRIMARY KEY (`codigo_persona`,`email`);

--
-- Indices de la tabla `persona_telefono`
--
ALTER TABLE `persona_telefono`
 ADD PRIMARY KEY (`codigo_persona`,`telefono`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
 ADD PRIMARY KEY (`codigo_programa`), ADD KEY `programa_facultad` (`programa_facultad`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
 ADD PRIMARY KEY (`codigo_proyecto`), ADD KEY `proyecto_linea` (`proyecto_linea`);

--
-- Indices de la tabla `proyecto_persona`
--
ALTER TABLE `proyecto_persona`
 ADD PRIMARY KEY (`codigo_proyecto`,`codigo_persona`), ADD KEY `codigo_persona` (`codigo_persona`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `linea_investigacion`
--
ALTER TABLE `linea_investigacion`
ADD CONSTRAINT `linea_investigacion_ibfk_1` FOREIGN KEY (`linea_programa`) REFERENCES `programa` (`codigo_programa`);

--
-- Filtros para la tabla `persona_email`
--
ALTER TABLE `persona_email`
ADD CONSTRAINT `persona_email_ibfk_1` FOREIGN KEY (`codigo_persona`) REFERENCES `persona` (`codigo_persona`);

--
-- Filtros para la tabla `persona_telefono`
--
ALTER TABLE `persona_telefono`
ADD CONSTRAINT `persona_telefono_ibfk_1` FOREIGN KEY (`codigo_persona`) REFERENCES `persona` (`codigo_persona`);

--
-- Filtros para la tabla `programa`
--
ALTER TABLE `programa`
ADD CONSTRAINT `programa_ibfk_1` FOREIGN KEY (`programa_facultad`) REFERENCES `facultad` (`cod_facultad`);

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
ADD CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`proyecto_linea`) REFERENCES `linea_investigacion` (`codigo_linea`);

--
-- Filtros para la tabla `proyecto_persona`
--
ALTER TABLE `proyecto_persona`
ADD CONSTRAINT `proyecto_persona_ibfk_1` FOREIGN KEY (`codigo_persona`) REFERENCES `persona` (`codigo_persona`),
ADD CONSTRAINT `proyecto_persona_ibfk_2` FOREIGN KEY (`codigo_proyecto`) REFERENCES `proyecto` (`codigo_proyecto`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
