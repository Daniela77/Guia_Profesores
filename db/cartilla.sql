-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2017 a las 23:33:31
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
(42, 55, 17, 'chola', 3),
(43, 53, 2, 'anda=)', 2),
(69, 53, 20, 'con id usu', 2),
(71, 53, 20, 'PROBANDO', 2),
(91, 53, 20, 'avvv', 2),
(96, 53, 20, 'dddd', 2),
(99, 57, 20, 'sff', 1),
(100, 53, 20, 'bgds', 3),
(102, 67, 20, 'excelente', 5),
(103, 68, 20, 'muy buena didáctica', 4),
(105, 53, 20, 'ojjjjjj', 1),
(106, 53, 29, 'hola', 4),
(107, 53, 29, 'hij', 2),
(108, 53, 29, 'gfvghj', 1),
(109, 53, 29, 'kkkkkkkk', 2),
(111, 68, 20, 'genial', 2),
(112, 68, 20, 'nuevo', 1),
(117, 70, 20, 'ee', 1),
(118, 68, 24, 'ohoho', 1),
(124, 69, 20, 'Excelente !', 5),
(125, 69, 20, 'muy recomendable!', 4),
(126, 73, 20, 'Clases muy divertidas', 4),
(127, 73, 20, 'Buen Trato con los alumnos', 3),
(128, 76, 20, 'Buena didáctica', 3),
(130, 77, 20, 'Excelente clase,utilizan material muy actualizado', 5);

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
(104, 'images/59025cd087b6c_geofrafia.jpg', 69),
(112, 'images/59025d8a3b5e5_Musica.jpg', 73),
(115, 'images/59025dd5907ce_Geografia.jpg', 76),
(116, 'images/59025f11668e0_informatica.jpg', 77);

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
(74, 'Geografia'),
(100, 'Música'),
(101, 'Ingles'),
(102, 'Informática');

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
(69, 'Camila Gonzalez', 'camilagonzalez@gmail.com', '154-595654', 74, '150', 'Individual'),
(73, 'Marcos Fernández', 'marcosfernandez@gmail.com', '154327896', 100, '120', 'Grupal'),
(76, 'María Paez', 'mariapaez@gmail.com', '154347654', 74, '100', 'Grupal'),
(77, 'Pablo Hernández', 'pablohernandez@gmail.com', '154789078', 102, '150', 'Individual');

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
(11, 'admin23@admin.com', '$2y$10$KXjGUA1FnM/FaXtiVzIT7e3My32fXuCOA4vZQ.XqmaQGs61/wE./G', 'Administrador'),
(20, 'dani@gmail.com', '$2y$10$DGCNU9V4jVcannoWDRAUnOQBRtoBIoPuibgjreN6QVEFdWtDgZB8.', 'Administrador'),
(21, 'usu@gmail.com', '$2y$10$afbONTFF5plhstbrpb6DAObdrENHhVGZ0YFvnBf6P7GpO1l2Sd3ym', 'Usuario'),
(25, 'camilagonzalez@gmail.com', '$2y$10$e.hGm3tZuZVGwNBjo427c.NxieOc21PyZsidEwHllkCoeNisjl5Xy', 'Usuario'),
(26, 'camilagonzalez@gmail.com', '$2y$10$CbMpuUFb.YRflZstILAuSO3HLl1D4xYZwpg1cAheCLR5HDGt2zG8a', 'Usuario'),
(27, 'marcosfernandez@gmail.com', '$2y$10$EYzTtggK0ng1fBTxtFyuT.QYPblW/8iH2X.bcJjbZI2dTwKC2BL9q', 'Administrador');

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
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
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
