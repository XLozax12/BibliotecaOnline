-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2024 a las 19:34:05
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `editorial` varchar(255) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `autor`, `editorial`, `cantidad`) VALUES
(1, 'El Quijote', 'Miguel de Cervantes', 'Librería de Garnier Hermanos', 12),
(2, 'Los juegos del hambre', 'Suzanne Collins', 'RBA Molino', 90),
(3, 'El niño con el pijama de rayas', 'John Boyne', 'Salamandra', 50),
(4, 'Cómics Spiderman', 'Stan Lee', 'Editorial Planeta S. A.', 0),
(5, 'Cómics Batman', 'Bob Kane', 'SM', 0),
(7, 'Comic hulk', 'Bob Kane', 'SM', 2),
(8, 'El Castillo de Zampachicha Miaumiau', 'Elisabetta Dami', 'SM', 5),
(11, 'Lazarillo', ' Diego Hurtado de Mendoza', 'SM', 4),
(16, 'El Despertar', 'Miguel Mestal', 'Amarante', 20),
(17, 'Leyendas de Herbozonia', 'Alberto Prieto Riquelme', 'Amarante', 20),
(18, 'Sinsajo', 'Suzanne Collins', ' RBA', 20),
(19, 'Viaje al corazon del hambre', 'Xavier Aldekoa', 'Ebooks de Vanguardia', 20),
(20, 'Fantasmas', 'Joe Hill', 'SM', 20),
(21, 'Cry Wolf', 'Patricia Briggs', 'Versatil', 20),
(22, ' Fair Game', 'Patricia Briggs', 'Plataforma', 20),
(23, 'Onyx', 'Jennifer Armentrout', 'Plataforma', 20),
(24, 'Plataforma', 'Jennifer Armentrout', 'Plataforma', 20),
(25, 'Yo Robot', 'Isaac Asimov', ' Edhasa', 20),
(26, ' El asesinato de Roger Ackroyd', 'Agatha Christie', 'RBA', 20),
(27, ' El asesinato de Roger Ackroyd', 'Agatha Christie', 'RBA', 20),
(28, 'Un cadaver en la biblioteca', 'Agatha', 'RBA', 20),
(29, 'Fuan no Tane Plus', 'Masaaki Nakayama', 'Revista Weekly', 20),
(30, 'El tren', 'Agatha Christie', ' RBA', 20),
(31, 'Harry Potter y el caliz de fuego', 'Rowling', 'Salamandra', 20),
(32, 'Un elefante ocupa mucho espacio', 'Elsa Bornemann', 'Alfaguara', 20),
(33, 'Historia oculta de los Papas', 'Javier Garcia Blanco', ' Akasico', 20),
(34, 'camino de pepito', 'pablo Lozano', 'Plataforma', 3),
(35, 'El cuento de la criada', 'Margaret Atwood', 'Salamandra', 30),
(36, 'La biblioteca de los libros rechazados', 'David Foenkinos', 'Alfaguara', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `devolucion` int(11) NOT NULL,
  `reservado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `id_usuario`, `id_libro`, `fecha`, `devolucion`, `reservado`) VALUES
(141, 46, 1, '2024-06-08', 1, 0),
(142, 47, 3, '2024-06-08', 0, 2),
(143, 2, 1, '2024-06-08', 1, 0),
(144, 46, 33, '2024-06-08', 1, 0),
(145, 47, 19, '2024-06-08', 0, 2),
(146, 47, 20, '2024-06-08', 0, 2),
(147, 47, 17, '2024-06-08', 0, 2),
(148, 47, 4, '2024-06-08', 1, 0),
(149, 47, 30, '2024-06-08', 1, 0),
(150, 47, 28, '2024-06-08', 1, 0),
(151, 46, 20, '2024-06-08', 1, 0),
(152, 46, 31, '2024-06-08', 1, 0),
(153, 46, 32, '2024-06-08', 0, 2),
(154, 46, 21, '2024-06-08', 0, 2),
(155, 1, 1, '2024-06-13', 1, 0),
(156, 48, 11, '2024-06-13', 0, 2),
(157, 50, 1, '2024-06-13', 1, 0),
(158, 50, 2, '2024-06-13', 1, 0),
(159, 46, 23, '2024-06-13', 1, 0),
(160, 46, 28, '2024-06-13', 1, 0),
(161, 46, 30, '2024-06-13', 1, 0),
(162, 46, 7, '2024-06-13', 1, 0),
(163, 49, 20, '2024-06-14', 1, 0),
(164, 46, 18, '2024-06-14', 1, 0),
(165, 51, 4, '2024-06-14', 1, 0),
(166, 51, 18, '2024-06-14', 1, 0),
(167, 46, 2, '2024-06-14', 1, 0),
(168, 46, 8, '2024-06-15', 1, 0),
(169, 46, 4, '2024-06-15', 1, 0),
(170, 46, 3, '2024-06-15', 1, 0),
(171, 46, 11, '2024-06-15', 1, 0),
(172, 81, 11, '2024-06-16', 1, 0),
(173, 81, 16, '2024-06-16', 1, 0),
(174, 81, 3, '2024-06-16', 1, 0),
(175, 81, 1, '2024-06-16', 1, 0),
(176, 81, 2, '2024-06-16', 1, 0),
(177, 81, 4, '2024-06-16', 1, 0),
(178, 81, 28, '2024-06-16', 1, 0),
(179, 81, 20, '2024-06-16', 1, 0),
(180, 81, 18, '2024-06-16', 1, 0),
(181, 50, 17, '2024-06-16', 1, 0),
(182, 82, 1, '2024-06-16', 0, 2),
(183, 83, 2, '2024-06-16', 0, 1),
(184, 83, 29, '2024-06-16', 0, 2),
(185, 83, 33, '2024-06-16', 0, 2),
(186, 83, 1, '2024-06-16', 1, 0),
(187, 83, 34, '2024-06-16', 0, 1),
(188, 83, 16, '2024-06-16', 0, 2),
(189, 83, 21, '2024-06-16', 0, 2),
(190, 68, 23, '2024-06-16', 1, 0),
(191, 82, 23, '2024-06-16', 1, 0),
(192, 79, 35, '2024-06-16', 0, 2),
(193, 84, 3, '2024-06-16', 0, 2),
(194, 84, 8, '2024-06-16', 0, 2),
(195, 84, 11, '2024-06-16', 1, 0),
(196, 84, 17, '2024-06-16', 0, 1),
(197, 84, 23, '2024-06-16', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sanciones`
--

CREATE TABLE `sanciones` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sanciones`
--

INSERT INTO `sanciones` (`id`, `id_usuario`, `fecha_inicio`, `fecha_fin`) VALUES
(58, 2, '2024-06-16', '2024-06-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `socio` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `socio`, `nombre`, `apellidos`, `email`, `password`, `rol`) VALUES
(1, 0, 'Pablo', 'Lozano', 'pablo.lozano12.ml@gmail.com', '$2y$10$NcOB0ikXF1Xr5fQzpR/CnuMEom/w3sjQYktYVkxrzV/4UOz6pYEju', 'bibliotecario'),
(2, 1, 'Carlos', 'Molina Espinosa', 'carlos@gmail.com', '$2y$10$f4gYUm6UZu53IT19DICYu.jxks3J6mapLypduk6l02osEJbcN4g4u', 'lectores'),
(46, 0, 'Pedro', 'Rodriguez Billalva', 'pedro12@gmail.com', '$2y$10$rF6epiPkoQkgbfEJytqBVeaRE.Mh96S4foTes1dhbA9HdxxEqi41C', 'lectores'),
(47, 0, 'Pablo', 'Lozano Olvera', 'pablolector@gmail.com', '$2y$10$6czkNs7Tdwb5nFZOcgJVGOwi.wgWxRxqsD5pBUjCvzRIggq1.ktmW', 'lectores'),
(48, 0, 'Carlos', 'Molina Espinosa ', 'carlosaldeire@gmail.com', '$2y$10$KMNhaFQpMhwN3SBjNtsdqe0HWO6DCdLhVBfxzT5o9fqsSr9uK0Fie', 'lectores'),
(49, 0, 'Lucia', 'Fernandez', 'lucia@gmail.com', '$2y$10$plLeuLgqytuETo8CbgSSauCdIy5GDB3hezlCxirvwEtt0z5lG6/uG', 'lectores'),
(50, 0, 'Prueba', 'Prueba', 'prueba@gmail.com', '$2y$10$80QrKyg1jA00DnTiuQk1guRPpT40QzbS6QbPD92.Ow.Uu316BGBbi', 'lectores'),
(51, 0, 'Censi', 'Olvera raya', 'censiolvera77@gmail.com', '$2y$10$A1abE8uj/BLLWHJOzSV2beH3MGeNVLOmVN0MQGbztkO82a5HfuWo6', 'lectores'),
(68, 0, 'censi', 'Olvera Raya', 'censi77@gmail.com', '$2y$10$KB0vs5/H1h8B.sT5JL5iau9Gqqs6m4.bAUo8ixgMJC7Y//WwZlJhy', 'lectores'),
(79, 0, 'Marisa', 'Lopez', 'marisa.montalban.lopez.240872@gmail.com', '$2y$10$HcDlyknOJeoYCR//OXolQOIUvFMZDDsw0MuEeZ6fYCemhp96IsPb2', 'lectores'),
(81, 0, 'Misko', 'Jones', 'amartingdaw@gmail.com', '$2y$10$MQ0Sxt0OHPcTykToqzpvKOZwMjl1cH3L8n3oG3TZwe2SaYdHfPuqi', 'lectores'),
(82, 0, 'Antonio', 'Requena ', 'antoniorequejimo20@gmail.com', '$2y$10$HRphBCH92CzuY.v37502Uujt31TPvIKGLdQR0fGduN65.TTWOrr0O', 'lectores'),
(83, 0, 'Adela', 'Moreno Perez', 'AdelaMoreno12@gmail.com', '$2y$10$QcJWMbMqwHw7I7llRiBvVuNjqc1wf93xZxIZxbZb7Bk831Mh5uwFe', 'lectores'),
(84, 0, 'Baldomero', 'Lopez Gutierrez', 'Baldomero.lopez@gmail.com', '$2y$10$IHPoRfDPMyijTL3zMO8OW.BQThA1NxvI0bf8GiTSaRBPGJSK8BOVa', 'lectores');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_libro` (`id_libro`);

--
-- Indices de la tabla `sanciones`
--
ALTER TABLE `sanciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT de la tabla `sanciones`
--
ALTER TABLE `sanciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id`);

--
-- Filtros para la tabla `sanciones`
--
ALTER TABLE `sanciones`
  ADD CONSTRAINT `sanciones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
