-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2019 a las 14:07:09
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `url_image` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `id_usuarios` int(10) NOT NULL,
  `estado` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `orden` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `titulo`, `descripcion`, `url_image`, `id_usuarios`, `estado`, `orden`) VALUES
(175, 'E.E.S.T  NÂ°3', 'aulas de construcciones', '1.JPG', 5, '1', '0'),
(177, 'E.E.S.T NÂ°3', 'Aulas de herreria', 'aulaherre.JPG', 5, '1', '0'),
(178, 'E.E.S.T NÂ°3', 'Laboratorios de Quimica', '3.JPG', 5, '1', '0'),
(179, 'E.E.S.T NÂ°3', 'aula de Automotores', '2auto.JPG', 5, '1', '0'),
(180, 'E.E.S.T NÂ°3', 'cartin', '3cartin.JPG', 5, '1', '0'),
(181, 'E.E.S.T NÂ°3', 'aula de carpinteria', 'carpinteria.jpg', 5, '1', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(10) NOT NULL,
  `curso` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_especialidad` int(10) NOT NULL,
  `id_prof` int(10) NOT NULL,
  `id_turno` int(10) NOT NULL,
  `create_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_curso`
--

CREATE TABLE `detalle_curso` (
  `id_det_curso` int(10) NOT NULL,
  `id_prof` int(10) NOT NULL,
  `id_curso` int(10) NOT NULL,
  `create_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalle_curso`
--

INSERT INTO `detalle_curso` (`id_det_curso`, `id_prof`, `id_curso`, `create_at`, `update_at`) VALUES
(1, 1, 1, '2019-07-17 13:37:52', '2019-07-17 13:37:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `id_especialidad` int(10) NOT NULL,
  `especialidad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `create_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) NOT NULL,
  `title` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `body` text COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `class` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `start` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `end` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `inicio_normal` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `final_normal` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `title`, `body`, `url`, `class`, `start`, `end`, `inicio_normal`, `final_normal`) VALUES
(1, 'asd', 'asd', 'http://localhost/Proyecto Escuela/BACK/ADMIN/sadmin/eventos/descripcion_evento.php?id=1', 'event-warning', '1567145100000', '1567231500000', '30/08/2019 2:05', '31/08/2019 2:05'),
(2, 'quimica', 'lauti', 'http://localhost/Proyecto Escuela/BACK/ADMIN/sadmin/eventos/descripcion_evento.php?id=2', 'event-important', '1567526400000', '1572448320000', '03/09/2019 12:00', '30/10/2019 12:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id_turno` int(11) NOT NULL,
  `horarios` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `create_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `image`
--

CREATE TABLE `image` (
  `id` int(10) NOT NULL,
  `title` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `folder` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `src` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `image`
--

INSERT INTO `image` (`id`, `title`, `folder`, `src`, `id_usuario`, `created_at`) VALUES
(23, 'Biblioteca Escolar', '../../../sadmin/Pprincipal/admin/uploads/', '2.jpg', 1, '2019-09-18 11:25:38'),
(24, 'Herreria ', '../../../sadmin/Pprincipal/admin/uploads/', '1.jpg', 1, '2019-09-18 11:26:07'),
(25, 'Laboratorios de Quimica', '../../../sadmin/Pprincipal/admin/uploads/', '4.jpg', 1, '2019-09-18 11:26:42'),
(26, 'Aulas del Tercer piso', '../../../sadmin/Pprincipal/admin/uploads/', '22.jpg', 5, '2019-09-23 21:06:48'),
(27, 'Aulas de Construcciones', '../../../sadmin/Pprincipal/admin/uploads/', '1_1.jpg', 5, '2019-09-23 21:07:19'),
(28, '', '../../../sadmin/Pprincipal/admin/uploads/', 'info3.jpg', 1064, '2019-10-03 17:34:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logros`
--

CREATE TABLE `logros` (
  `id_logro` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL,
  `logro` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `create_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `logros`
--

INSERT INTO `logros` (`id_logro`, `id_usuarios`, `logro`, `descripcion`, `color`, `fecha`, `create_at`, `update_at`) VALUES
(9, 5, 'lal', 'sas', '#0000ff', '2019-09-26', '2019-09-26 11:25:48', '2019-09-26 11:25:48'),
(11, 5, 'Premio al primer lugar Quimica', 'los estudiantes      		 ', '#b8bcc7', '2019-09-26', '2019-09-26 22:53:53', '2019-09-26 22:53:53'),
(12, 5, 'prueba de logro', 'descripcion de logro\r\n      		 ', '#008000', '2019-09-19', '2019-09-27 11:21:07', '2019-09-27 11:21:07'),
(13, 5, 'adssssssssssssssssssssssssssasdasdasdsaddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '      		 asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdsdssdaaaaaaaaaaa', '#00ff00', '2019-09-27', '2019-09-27 11:42:36', '2019-09-27 11:42:36'),
(14, 5, 'logro numero 2', 'prueba del logro\r\n      		 ', '#ff8000', '2019-09-27', '2019-09-27 11:44:26', '2019-09-27 11:44:26'),
(15, 5, 'logro numero 3', 'logro      		 ', '#00ff00', '2019-09-27', '2019-09-27 11:44:44', '2019-09-27 11:44:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

CREATE TABLE `mesas` (
  `id` int(10) NOT NULL,
  `materia` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `anio` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `inicio` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `final` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `profesores` varchar(350) COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `create_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mesas`
--

INSERT INTO `mesas` (`id`, `materia`, `tipo`, `anio`, `fecha`, `inicio`, `final`, `profesores`, `id_usuario`, `create_at`, `update_at`) VALUES
(17, 'matematica', 'Regular', 'Primer AÃ±o', '2019-09-26', '10:00', '12:00', 'Aqui se inserta la lista de los profesores', 5, '2019-09-26 12:10:04', '2019-09-26 12:10:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticias` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL,
  `titulos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `comentario` varchar(3000) COLLATE utf8_spanish_ci NOT NULL,
  `create_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticias`, `id_usuarios`, `titulos`, `imagen`, `comentario`, `create_at`, `update_at`) VALUES
(201, 5, 'prueba de noticias numero 1', '', 'noticia 1 ', '2019-09-27 11:50:49', '2019-09-27 11:50:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `rol` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripciones` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `create_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_roles`, `rol`, `descripciones`, `create_at`, `update_at`) VALUES
(1, 'Super Administrador', 'direccion', '2019-07-17 13:36:26', '2019-07-17 13:36:26'),
(2, 'Adminisistrador', 'administracion ', '2019-07-17 13:36:50', '2019-07-17 13:36:50'),
(3, 'Usuarios', 'Todo el mundo', '2019-07-17 13:37:11', '2019-07-17 13:37:11'),
(4, 'deshabilitado', 'deshabilitado', '2019-08-11 00:09:35', '2019-08-11 00:09:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_det_curso` int(50) NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `emails` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contra` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `roles` int(10) NOT NULL,
  `codigo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `activacion` int(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `id_det_curso`, `apellidos`, `emails`, `contra`, `roles`, `codigo`, `activacion`, `created_at`, `update_at`) VALUES
(1, 'Francisco', 1, 'Medina', 'fran@hotmail.com', 'jodeer', 3, 'ninguno xD', 1, '2019-08-27 19:51:00', '2019-08-27 19:51:00'),
(2, '4', 1, '4', '4@hotmail.com', '4', 3, '4', 1, '2019-09-07 14:38:17', '2019-09-07 14:38:17'),
(4, 'axel', 1, 'castro', 'castroaxel@gmail.com', 'axel', 2, 'ninguno xD', 1, '2019-09-06 13:15:31', '2019-09-06 13:15:31'),
(5, 'nombre', 1, 'apellido', 'sadmin@hotmail.com', '123456789', 1, 'ninguno', 1, '2019-09-23 20:55:34', '2019-09-23 20:55:34'),
(6, 'nombre', 1, 'apellido', 'admin@hotmail.com', '123456789', 2, 'ninguno', 1, '2019-09-23 20:56:08', '2019-09-23 20:56:08'),
(7, 'nombre', 1, 'apellido', 'usuario@hotmail.com', '123456789', 3, '0', 1, '2019-09-23 21:35:25', '2019-09-23 21:35:25'),
(1063, 'francisco', 1, 'joel', 'ewfsdfmdp@hotmail.com', '123', 4, '468534146464617', 1, '2019-09-06 14:42:04', '2019-09-06 14:42:04'),
(1064, 'axel', 1, 'castro', 'castroaxel34@gmail.com', 'axel', 1, '437094268071042', 1, '2019-09-06 14:43:28', '2019-09-06 14:43:28'),
(1068, 'Viviana', 1, 'Barnes Castilla', 'vivianabarnes@hotmail.com', 'vivibarnes', 3, '358976706252061', 1, '2019-09-09 13:06:56', '2019-09-09 13:06:56'),
(1069, 'Vivianabis', 1, 'Barnes Castilla', 'vivianabarnes@gmail.com', 'vivibarnes', 1, '456208044661597', 1, '2019-09-09 13:12:12', '2019-09-09 13:12:12'),
(1071, 'francisco', 1, 'medina', 'franmedi_mdp@hotmail.com', '123', 3, '202789541618523', 1, '2019-10-03 15:08:18', '2019-10-03 15:08:18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_usuarios`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `id_especialidad` (`id_especialidad`),
  ADD KEY `id_turno` (`id_turno`),
  ADD KEY `id_prof` (`id_prof`);

--
-- Indices de la tabla `detalle_curso`
--
ALTER TABLE `detalle_curso`
  ADD PRIMARY KEY (`id_det_curso`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id_especialidad`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_turno`);

--
-- Indices de la tabla `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `logros`
--
ALTER TABLE `logros`
  ADD PRIMARY KEY (`id_logro`),
  ADD KEY `id_usuarios` (`id_usuarios`);

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticias`),
  ADD KEY `id_usuarios` (`id_usuarios`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles` (`roles`),
  ADD KEY `id_det_curso` (`id_det_curso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detalle_curso`
--
ALTER TABLE `detalle_curso`
  MODIFY `id_det_curso` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id_especialidad` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id_turno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `logros`
--
ALTER TABLE `logros`
  MODIFY `id_logro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `mesas`
--
ALTER TABLE `mesas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1072;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidades` (`id_especialidad`),
  ADD CONSTRAINT `cursos_ibfk_2` FOREIGN KEY (`id_turno`) REFERENCES `horarios` (`id_turno`),
  ADD CONSTRAINT `cursos_ibfk_3` FOREIGN KEY (`id_prof`) REFERENCES `detalle_curso` (`id_det_curso`);

--
-- Filtros para la tabla `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `logros`
--
ALTER TABLE `logros`
  ADD CONSTRAINT `logros_ibfk_1` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD CONSTRAINT `mesas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`roles`) REFERENCES `roles` (`id_roles`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_det_curso`) REFERENCES `detalle_curso` (`id_det_curso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
