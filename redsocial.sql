-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-12-2015 a las 11:41:16
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `amigo`
--

CREATE TABLE `amigo` (
  `id` int(11) NOT NULL,
  `id_amigo_origen` int(11) NOT NULL,
  `id_amigo_destino` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `texto` text NOT NULL,
  `privacidad` int(11) NOT NULL,
  `fecha_publicacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`id`, `id_usuario`, `texto`, `privacidad`, `fecha_publicacion`) VALUES
(30, 5, 'holaa', 1, '2015-11-25 23:07:55'),
(32, 5, 'buenas noches a todos, voy a escribir una publicacion to guay', 1, '2015-11-25 23:41:45'),
(33, 6, 'heeeeeey', 1, '2015-11-26 08:15:00'),
(34, 5, 'pene', 1, '2015-11-27 08:15:13'),
(35, 5, 'pene', 1, '2015-11-27 08:21:29'),
(36, 5, 'pene', 1, '2015-11-27 08:22:00'),
(37, 5, 'pene', 1, '2015-11-27 08:23:41'),
(38, 6, 'hola que taaaal', 1, '2015-11-27 09:27:14'),
(39, 6, 'pene', 1, '2015-11-28 01:06:24'),
(40, 6, 'hola', 1, '2015-12-01 11:27:53'),
(41, 6, 'oooooooo', 2, '2015-12-01 11:28:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL COMMENT 'id del usuario',
  `email` varchar(64) NOT NULL COMMENT 'email del usuario',
  `password` text NOT NULL COMMENT 'contraseña del usuario',
  `nombre_usuario` varchar(128) NOT NULL COMMENT 'nombre usuario al publico',
  `fecha_alta` date NOT NULL,
  `rol` int(11) NOT NULL COMMENT '1 -> usuario, 2 -> tienda, 3 -> asociacion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`, `nombre_usuario`, `fecha_alta`, `rol`) VALUES
(5, 'usuario@usuario.com', '$2y$10$ge7MvL2qARdp/8rsYQnCdOId70UGeYOF3s8slT1HLtwDMm5GeVfTS', 'usuario', '2015-11-24', 1),
(6, 'onemore@usuario.com', '$2y$10$SKAJVeNunp7DjPK8UAraLOuM1zG2J.OtN/fxpg3Z82Tf8eGaC/Us6', 'onemore', '2015-11-25', 1),
(7, '', '$2y$10$6H5MNbkYiDtvvJHJhnFRkei.LF4uG6iRVS1QmX5ha4qXTSKmPK54C', '', '2015-11-28', 1),
(8, '', '$2y$10$xZvLM66WZo34NQW5SgwKdev9fnrGNLGrhIq90eDUyy/aVr19NHeN6', '', '2015-12-01', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `amigo`
--
ALTER TABLE `amigo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `amigo`
--
ALTER TABLE `amigo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del usuario', AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
