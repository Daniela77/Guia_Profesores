-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-03-2017 a las 18:56:48
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
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `fk_id_profesor` int(11) NOT NULL,
  `fk_id_usuario` int(11) NOT NULL,
  `comentario` varchar(400) NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `fk_id_profesor`, `fk_id_usuario`, `comentario`, `puntaje`) VALUES
(30, 53, 2, 'hola', 3),
(36, 53, 2, 'dn', 2),
(39, 53, 2, 'afoijf', 2),
(40, 53, 2, 'holA', 2),
(41, 53, 2, 'ultimo', 4),
(42, 55, 17, 'chola', 3),
(43, 53, 2, 'anda=)', 2),
(64, 55, 20, 'kdkfd', 3),
(68, 53, 20, 'ojj', 3),
(69, 53, 20, 'con id usu', 2),
(70, 55, 21, 'puedo comentar', 2),
(71, 53, 20, 'PROBANDO', 2),
(72, 53, 20, 'FQF', 2),
(74, 53, 20, 'ultimo', 1),
(76, 60, 21, 'hsh', 2),
(77, 53, 0, 'hoy', 2),
(78, 53, 0, 'esdit', 2),
(79, 53, 21, 'gaf', 2),
(80, 53, 20, 'sgadg', 2),
(81, 53, 20, 'ahgh', 2),
(83, 53, 20, 'BABA', 2);

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
(50, 'images/5810d4277a65f_IMAGEN-13992173-0.jpg', 55),
(51, 'images/5813639c632d9_IMAGEN-13992173-0.jpg', 56),
(55, 'images/5890e75b84163_descarga.jpg', 60),
(56, 'images/58acc2bf28ab4_maxresdefault.jpg', 61),
(58, 'images/58ade237aca34_IMAGEN-13992295-2.jpg', 53),
(59, 'images/58ade2546ca13_google.com_.mx-profesor-jirafales3.jpg', 53),
(61, 'images/58ade9c078ccb_2202721.jpg', 62);

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
(62, 'musica'),
(63, 'web 2'),
(64, 'Matemática'),
(65, 'Ciencias');

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
(53, 'Profesor Jirafales', 'profesorjirafales@gmail.com', '154', 65, '123', 'Grupal'),
(55, 'Seymour Skinner', 'seymourskinner@gmail.com', '1234567', 62, '140', 'Domicilio'),
(56, 'fddd', 'zaafa@jojk', '22222222', 62, '222', 'Grupal'),
(60, 'Dani', 'dani@gmail.com', '123456', 64, '120', 'Grupal'),
(61, 'nuevo', 'nuevo@nuevo', '123456', 64, '123', 'Domicilio'),
(62, 'paenza', 'paenza@gmail.com', '1234567', 64, '180', 'Grupal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `rol_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `password`, `rol_usuario`) VALUES
(1, 'danielacolamai@gmail.com', '$2y$10$ZxjePrSdmsL6cOMhAWKRI.umyXm0tF4FkMKv/34vlSpYlL7/3sdUu', 'Administrador'),
(11, 'admin23@admin.com', '$2y$10$KXjGUA1FnM/FaXtiVzIT7e3My32fXuCOA4vZQ.XqmaQGs61/wE./G', 'Administrador'),
(12, 'usuario14@admin.com', '$2y$10$QLHJhT4x2F77/cKpo2juaOK2Ee/8hwEJX0O9aTsdUdXoZmAIOYqV.', 'Usuario'),
(16, 'admin@admin.com', '$2y$10$cuDt2eZOw6CBVvJM8QFzLeVEtiFaD9VyTxYfIhX4KPXGzaC49gOrK', 'Administrador'),
(17, 'usuario@usuario', '$2y$10$smGDLvlaaDEVkDJXAYBEhu/UolNw3xkCshMohVXnZ38QM.bT//xQK', 'Usuario'),
(18, 'eee@eee', '$2y$10$KKxL3Yq0BvMIDHRAvZMQROd8q.AJoh81sn7ZgGD1q31PgTUfUD.dq', 'Administrador'),
(19, 'ag@123', '$2y$10$jqGhy1wM2T72UJJ4brx7R.swjMd4o78N.FaIem0ObNIC3tAKQJKo2', 'Usuario'),
(20, 'dani@gmail.com', '$2y$10$DGCNU9V4jVcannoWDRAUnOQBRtoBIoPuibgjreN6QVEFdWtDgZB8.', 'Administrador'),
(21, 'usu@gmail.com', '$2y$10$afbONTFF5plhstbrpb6DAObdrENHhVGZ0YFvnBf6P7GpO1l2Sd3ym', 'Usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `fk_id_profesor` (`fk_id_profesor`),
  ADD KEY `fk_id_usuario` (`fk_id_usuario`),
  ADD KEY `fk_id_profesor_2` (`fk_id_profesor`);

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
  ADD PRIMARY KEY (`id_profesor`),
  ADD KEY `fk_id_materia` (`id_materia`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `fk_id_profesor` FOREIGN KEY (`fk_id_profesor`) REFERENCES `profesor` (`id_profesor`) ON DELETE CASCADE;

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `fk_id_materia` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
