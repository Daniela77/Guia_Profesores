-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2016 a las 04:34:31
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cartilla`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `fk_id_profesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `ruta`, `fk_id_profesor`) VALUES
(28, 'images/58082728b90a9_profesor jirafales.jpg', 34),
(29, 'images/5808282b24b7a_docbrownchile.jpg', 35),
(30, 'images/5808282b2fb56_maxresdefault.jpg', 35),
(31, 'images/58082982e7686_IMAGEN-13992173-0.jpg', 36),
(32, 'images/58082a4ecb694_IMAGEN-13992295-2.jpg', 37),
(33, 'images/58082ae805c24_IMAGEN-13992139-2.jpg', 38),
(34, 'images/58082c1bd1c5d_2202721.jpg', 39);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id_materia` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `nombre`) VALUES
(15, 'literatura'),
(55, 'pedagogia'),
(56, 'ciencias'),
(57, 'nivel primario'),
(58, 'música'),
(59, 'matemática');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id_profesor` int(11) NOT NULL,
  `nombreCompleto` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `precio` decimal(18,0) NOT NULL,
  `tipoDeClase` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id_profesor`, `nombreCompleto`, `email`, `telefono`, `id_materia`, `precio`, `tipoDeClase`) VALUES
(34, 'Profesor Jirafales', 'profesorjirafales@gmail.com', '1234567', 55, '150', 'Grupal'),
(35, 'Dr. Emmett Brown', 'emmettbrown@gmail.com', '123455', 54, '400', 'Domicilio'),
(36, 'Seymour Skinner', 'seymourskinner@gmail.com', '77777777', 57, '300', 'Grupal'),
(37, 'Dewey Finn', 'deweyfinn@gmail.com', '1200000', 58, '280', 'Grupal'),
(38, 'María Jimena', 'mariajimena@gmail.com', '22222222', 57, '190', 'Grupal'),
(39, 'Adrian Paenza', 'adrianpaenza@gmail.com', '55443321', 59, '500', 'Grupal');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `fk_id_profesor` (`fk_id_profesor`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_profesor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `fk_id_profesor` FOREIGN KEY (`fk_id_profesor`) REFERENCES `profesor` (`id_profesor`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
