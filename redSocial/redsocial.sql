-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2020 a las 20:44:48
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `redsocial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE `foto` (
  `id` int(12) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `foto`
--

INSERT INTO `foto` (`id`, `nombre`, `descripcion`, `url`) VALUES
(1, 'goku', 'aaa', 'thumb2-son-goku-4k-artwork-dbs-characters-dragon-ball-fan-art.jpg'),
(2, 'goku', 'aaa', 'thumb2-son-goku-4k-artwork-dbs-characters-dragon-ball-fan-art.jpg'),
(3, 'goku2', 'ss', 'thumb2-son-goku-4k-artwork-dbs-characters-dragon-ball-fan-art.jpg'),
(4, 'Kanao', 'aa', '2f85151da30f401f0793d72f8112108f.jpg'),
(5, 'giyu', 'sss', '9f1b04d3e0e7f0035fbc6124da790e72.jpg'),
(6, 'luna s 1', 'xx', 'tumblr_44df90e3dccb877cfcd03780c74e3659_fcb73c2b_640.jpg'),
(7, 'primero', 'ddd', 'ddlvn54-0c5ebde0-0803-4e4b-99f1-1b9a901112dd.jpg'),
(8, 'aaa', 'aaa', '9f1b04d3e0e7f0035fbc6124da790e72.jpg'),
(9, 'zzzz', 'zz', 'ddlvn54-0c5ebde0-0803-4e4b-99f1-1b9a901112dd.jpg'),
(10, 'mi_Akino', 'aaa', '2f85151da30f401f0793d72f8112108f.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `usuario` varchar(120) NOT NULL,
  `nombre` varchar(120) DEFAULT NULL,
  `correo` varchar(120) DEFAULT NULL,
  `contrasenia` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`usuario`, `nombre`, `correo`, `contrasenia`) VALUES
('arturo23', 'arturo', 'ddd@nm.com', '12'),
('arturo23e', 'arturo', 'ddd@nm.com2', '12'),
('garci12', 'jose garcia', 'mari@gg.comeeee22', 'q'),
('mariana23', 'mariana julieth', 'mariana@gmail.com', '12'),
('quintero23', 'quintero', 'ella@mm.com', '12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_foto`
--

CREATE TABLE `persona_foto` (
  `userPersona` varchar(120) NOT NULL,
  `foto` int(12) NOT NULL,
  `perfil` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona_foto`
--

INSERT INTO `persona_foto` (`userPersona`, `foto`, `perfil`) VALUES
('arturo23', 3, '0'),
('arturo23', 4, '0'),
('arturo23', 5, '0'),
('arturo23', 6, '1'),
('arturo23', 7, '0'),
('garci12', 8, '0'),
('garci12', 9, '1'),
('quintero23', 10, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person_sigue`
--

CREATE TABLE `person_sigue` (
  `usuario` varchar(120) NOT NULL,
  `userSeguido` varchar(120) NOT NULL,
  `reaccion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `persona_foto`
--
ALTER TABLE `persona_foto`
  ADD PRIMARY KEY (`userPersona`,`foto`),
  ADD KEY `persona_foto_foto_fk` (`foto`);

--
-- Indices de la tabla `person_sigue`
--
ALTER TABLE `person_sigue`
  ADD PRIMARY KEY (`usuario`,`userSeguido`),
  ADD KEY `person_sigue_fk` (`userSeguido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `persona_foto`
--
ALTER TABLE `persona_foto`
  ADD CONSTRAINT `persona_foto_foto_fk` FOREIGN KEY (`foto`) REFERENCES `foto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `persona_foto_userPersona_fk` FOREIGN KEY (`userPersona`) REFERENCES `persona` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `person_sigue`
--
ALTER TABLE `person_sigue`
  ADD CONSTRAINT `person_fk` FOREIGN KEY (`usuario`) REFERENCES `persona` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `person_sigue_fk` FOREIGN KEY (`userSeguido`) REFERENCES `persona` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
