-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2021 a las 23:09:18
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ig`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meses`
--

CREATE TABLE `meses` (
  `id_mes` int(11) NOT NULL,
  `mes1` varchar(15) DEFAULT NULL,
  `mes2` varchar(15) DEFAULT NULL,
  `mes3` varchar(15) DEFAULT NULL,
  `mes4` varchar(15) DEFAULT NULL,
  `mes5` varchar(15) DEFAULT NULL,
  `mes6` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicadores`
--

CREATE TABLE `publicadores` (
  `id_pub` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `q_n_s`
--

CREATE TABLE `q_n_s` (
  `id_qns` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `q_or_s` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `contraseña` varchar(15) NOT NULL,
  `tipo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `usuario`, `contraseña`, `tipo`) VALUES
(1, 'admin', 'adminig', 'A'),
(2, 'secretario', 'secretario', 'S'),
(3, 'grupo1', 'grupo1', 'U'),
(4, 'grupo2', 'grupo2', 'U'),
(5, 'grupo3', 'grupo3', 'U'),
(6, 'grupo4', 'grupo4', 'U'),
(7, 'grupo5', 'grupo5', 'U'),
(8, 'grupo6', 'grupo6', 'U');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `meses`
--
ALTER TABLE `meses`
  ADD PRIMARY KEY (`id_mes`);

--
-- Indices de la tabla `publicadores`
--
ALTER TABLE `publicadores`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `q_n_s`
--
ALTER TABLE `q_n_s`
  ADD PRIMARY KEY (`id_qns`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `meses`
--
ALTER TABLE `meses`
  MODIFY `id_mes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicadores`
--
ALTER TABLE `publicadores`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `q_n_s`
--
ALTER TABLE `q_n_s`
  MODIFY `id_qns` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
