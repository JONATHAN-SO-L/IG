-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2020 a las 04:20:44
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

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
-- Estructura de tabla para la tabla `mes1`
--

CREATE TABLE `mes1` (
  `mes` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mes2`
--

CREATE TABLE `mes2` (
  `mes` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mes3`
--

CREATE TABLE `mes3` (
  `mes` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mes4`
--

CREATE TABLE `mes4` (
  `mes` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mes5`
--

CREATE TABLE `mes5` (
  `mes` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mes6`
--

CREATE TABLE `mes6` (
  `mes` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador1`
--

CREATE TABLE `publicador1` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador2`
--

CREATE TABLE `publicador2` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador3`
--

CREATE TABLE `publicador3` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador4`
--

CREATE TABLE `publicador4` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador5`
--

CREATE TABLE `publicador5` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador6`
--

CREATE TABLE `publicador6` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador7`
--

CREATE TABLE `publicador7` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador8`
--

CREATE TABLE `publicador8` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador9`
--

CREATE TABLE `publicador9` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador10`
--

CREATE TABLE `publicador10` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador11`
--

CREATE TABLE `publicador11` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador12`
--

CREATE TABLE `publicador12` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador13`
--

CREATE TABLE `publicador13` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador14`
--

CREATE TABLE `publicador14` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador15`
--

CREATE TABLE `publicador15` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador16`
--

CREATE TABLE `publicador16` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador17`
--

CREATE TABLE `publicador17` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador18`
--

CREATE TABLE `publicador18` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador19`
--

CREATE TABLE `publicador19` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador20`
--

CREATE TABLE `publicador20` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador21`
--

CREATE TABLE `publicador21` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador22`
--

CREATE TABLE `publicador22` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador23`
--

CREATE TABLE `publicador23` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador24`
--

CREATE TABLE `publicador24` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador25`
--

CREATE TABLE `publicador25` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador26`
--

CREATE TABLE `publicador26` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador27`
--

CREATE TABLE `publicador27` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador28`
--

CREATE TABLE `publicador28` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador29`
--

CREATE TABLE `publicador29` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador30`
--

CREATE TABLE `publicador30` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador31`
--

CREATE TABLE `publicador31` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador32`
--

CREATE TABLE `publicador32` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador33`
--

CREATE TABLE `publicador33` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador34`
--

CREATE TABLE `publicador34` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador35`
--

CREATE TABLE `publicador35` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador36`
--

CREATE TABLE `publicador36` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador37`
--

CREATE TABLE `publicador37` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador38`
--

CREATE TABLE `publicador38` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador39`
--

CREATE TABLE `publicador39` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador40`
--

CREATE TABLE `publicador40` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador41`
--

CREATE TABLE `publicador41` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador42`
--

CREATE TABLE `publicador42` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador43`
--

CREATE TABLE `publicador43` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador44`
--

CREATE TABLE `publicador44` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador45`
--

CREATE TABLE `publicador45` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador46`
--

CREATE TABLE `publicador46` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador47`
--

CREATE TABLE `publicador47` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador48`
--

CREATE TABLE `publicador48` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador49`
--

CREATE TABLE `publicador49` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador50`
--

CREATE TABLE `publicador50` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador51`
--

CREATE TABLE `publicador51` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador52`
--

CREATE TABLE `publicador52` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador53`
--

CREATE TABLE `publicador53` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador54`
--

CREATE TABLE `publicador54` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador55`
--

CREATE TABLE `publicador55` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador56`
--

CREATE TABLE `publicador56` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador57`
--

CREATE TABLE `publicador57` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador58`
--

CREATE TABLE `publicador58` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador59`
--

CREATE TABLE `publicador59` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador60`
--

CREATE TABLE `publicador60` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador61`
--

CREATE TABLE `publicador61` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador62`
--

CREATE TABLE `publicador62` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador63`
--

CREATE TABLE `publicador63` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador64`
--

CREATE TABLE `publicador64` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador65`
--

CREATE TABLE `publicador65` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador66`
--

CREATE TABLE `publicador66` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador67`
--

CREATE TABLE `publicador67` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador68`
--

CREATE TABLE `publicador68` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador69`
--

CREATE TABLE `publicador69` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador70`
--

CREATE TABLE `publicador70` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador71`
--

CREATE TABLE `publicador71` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador72`
--

CREATE TABLE `publicador72` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador73`
--

CREATE TABLE `publicador73` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador74`
--

CREATE TABLE `publicador74` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador75`
--

CREATE TABLE `publicador75` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador76`
--

CREATE TABLE `publicador76` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador77`
--

CREATE TABLE `publicador77` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador78`
--

CREATE TABLE `publicador78` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador79`
--

CREATE TABLE `publicador79` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador80`
--

CREATE TABLE `publicador80` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador81`
--

CREATE TABLE `publicador81` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador82`
--

CREATE TABLE `publicador82` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador83`
--

CREATE TABLE `publicador83` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador84`
--

CREATE TABLE `publicador84` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador85`
--

CREATE TABLE `publicador85` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador86`
--

CREATE TABLE `publicador86` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador87`
--

CREATE TABLE `publicador87` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador88`
--

CREATE TABLE `publicador88` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador89`
--

CREATE TABLE `publicador89` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador90`
--

CREATE TABLE `publicador90` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador91`
--

CREATE TABLE `publicador91` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador92`
--

CREATE TABLE `publicador92` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador93`
--

CREATE TABLE `publicador93` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador94`
--

CREATE TABLE `publicador94` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador95`
--

CREATE TABLE `publicador95` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador96`
--

CREATE TABLE `publicador96` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador97`
--

CREATE TABLE `publicador97` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador98`
--

CREATE TABLE `publicador98` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador99`
--

CREATE TABLE `publicador99` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador100`
--

CREATE TABLE `publicador100` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador101`
--

CREATE TABLE `publicador101` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador102`
--

CREATE TABLE `publicador102` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador103`
--

CREATE TABLE `publicador103` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador104`
--

CREATE TABLE `publicador104` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador105`
--

CREATE TABLE `publicador105` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador106`
--

CREATE TABLE `publicador106` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador107`
--

CREATE TABLE `publicador107` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador108`
--

CREATE TABLE `publicador108` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador109`
--

CREATE TABLE `publicador109` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador110`
--

CREATE TABLE `publicador110` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador111`
--

CREATE TABLE `publicador111` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador112`
--

CREATE TABLE `publicador112` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador113`
--

CREATE TABLE `publicador113` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador114`
--

CREATE TABLE `publicador114` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador115`
--

CREATE TABLE `publicador115` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador116`
--

CREATE TABLE `publicador116` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador117`
--

CREATE TABLE `publicador117` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador118`
--

CREATE TABLE `publicador118` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador119`
--

CREATE TABLE `publicador119` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicador120`
--

CREATE TABLE `publicador120` (
  `id_pub` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `publicaciones` int(10) UNSIGNED DEFAULT NULL,
  `videos` int(10) UNSIGNED DEFAULT NULL,
  `horas` int(10) UNSIGNED DEFAULT NULL,
  `revisitas` int(10) UNSIGNED DEFAULT NULL,
  `cursos` int(10) UNSIGNED DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `q_n_s`
--

CREATE TABLE `q_n_s` (
  `id_qns` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `q_or_s` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `tipo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `usuario`, `contrasena`, `tipo`) VALUES
(1, 'admin', 'adminig2000', 'A'),
(2, 'super', 'superig2000', 'S'),
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
-- Indices de la tabla `publicador1`
--
ALTER TABLE `publicador1`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador2`
--
ALTER TABLE `publicador2`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador3`
--
ALTER TABLE `publicador3`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador4`
--
ALTER TABLE `publicador4`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador5`
--
ALTER TABLE `publicador5`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador6`
--
ALTER TABLE `publicador6`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador7`
--
ALTER TABLE `publicador7`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador8`
--
ALTER TABLE `publicador8`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador9`
--
ALTER TABLE `publicador9`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador10`
--
ALTER TABLE `publicador10`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador11`
--
ALTER TABLE `publicador11`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador12`
--
ALTER TABLE `publicador12`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador13`
--
ALTER TABLE `publicador13`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador14`
--
ALTER TABLE `publicador14`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador15`
--
ALTER TABLE `publicador15`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador16`
--
ALTER TABLE `publicador16`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador17`
--
ALTER TABLE `publicador17`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador18`
--
ALTER TABLE `publicador18`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador19`
--
ALTER TABLE `publicador19`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador20`
--
ALTER TABLE `publicador20`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador21`
--
ALTER TABLE `publicador21`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador22`
--
ALTER TABLE `publicador22`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador23`
--
ALTER TABLE `publicador23`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador24`
--
ALTER TABLE `publicador24`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador25`
--
ALTER TABLE `publicador25`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador26`
--
ALTER TABLE `publicador26`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador27`
--
ALTER TABLE `publicador27`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador28`
--
ALTER TABLE `publicador28`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador29`
--
ALTER TABLE `publicador29`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador30`
--
ALTER TABLE `publicador30`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador31`
--
ALTER TABLE `publicador31`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador32`
--
ALTER TABLE `publicador32`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador33`
--
ALTER TABLE `publicador33`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador34`
--
ALTER TABLE `publicador34`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador35`
--
ALTER TABLE `publicador35`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador36`
--
ALTER TABLE `publicador36`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador37`
--
ALTER TABLE `publicador37`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador38`
--
ALTER TABLE `publicador38`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador39`
--
ALTER TABLE `publicador39`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador40`
--
ALTER TABLE `publicador40`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador41`
--
ALTER TABLE `publicador41`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador42`
--
ALTER TABLE `publicador42`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador43`
--
ALTER TABLE `publicador43`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador44`
--
ALTER TABLE `publicador44`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador45`
--
ALTER TABLE `publicador45`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador46`
--
ALTER TABLE `publicador46`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador47`
--
ALTER TABLE `publicador47`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador48`
--
ALTER TABLE `publicador48`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador49`
--
ALTER TABLE `publicador49`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador50`
--
ALTER TABLE `publicador50`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador51`
--
ALTER TABLE `publicador51`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador52`
--
ALTER TABLE `publicador52`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador53`
--
ALTER TABLE `publicador53`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador54`
--
ALTER TABLE `publicador54`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador55`
--
ALTER TABLE `publicador55`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador56`
--
ALTER TABLE `publicador56`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador57`
--
ALTER TABLE `publicador57`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador58`
--
ALTER TABLE `publicador58`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador59`
--
ALTER TABLE `publicador59`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador60`
--
ALTER TABLE `publicador60`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador61`
--
ALTER TABLE `publicador61`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador62`
--
ALTER TABLE `publicador62`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador63`
--
ALTER TABLE `publicador63`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador64`
--
ALTER TABLE `publicador64`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador65`
--
ALTER TABLE `publicador65`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador66`
--
ALTER TABLE `publicador66`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador67`
--
ALTER TABLE `publicador67`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador68`
--
ALTER TABLE `publicador68`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador69`
--
ALTER TABLE `publicador69`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador70`
--
ALTER TABLE `publicador70`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador71`
--
ALTER TABLE `publicador71`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador72`
--
ALTER TABLE `publicador72`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador73`
--
ALTER TABLE `publicador73`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador74`
--
ALTER TABLE `publicador74`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador75`
--
ALTER TABLE `publicador75`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador76`
--
ALTER TABLE `publicador76`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador77`
--
ALTER TABLE `publicador77`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador78`
--
ALTER TABLE `publicador78`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador79`
--
ALTER TABLE `publicador79`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador80`
--
ALTER TABLE `publicador80`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador81`
--
ALTER TABLE `publicador81`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador82`
--
ALTER TABLE `publicador82`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador83`
--
ALTER TABLE `publicador83`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador84`
--
ALTER TABLE `publicador84`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador85`
--
ALTER TABLE `publicador85`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador86`
--
ALTER TABLE `publicador86`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador87`
--
ALTER TABLE `publicador87`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador88`
--
ALTER TABLE `publicador88`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador89`
--
ALTER TABLE `publicador89`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador90`
--
ALTER TABLE `publicador90`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador91`
--
ALTER TABLE `publicador91`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador92`
--
ALTER TABLE `publicador92`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador93`
--
ALTER TABLE `publicador93`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador94`
--
ALTER TABLE `publicador94`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador95`
--
ALTER TABLE `publicador95`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador96`
--
ALTER TABLE `publicador96`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador97`
--
ALTER TABLE `publicador97`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador98`
--
ALTER TABLE `publicador98`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador99`
--
ALTER TABLE `publicador99`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador100`
--
ALTER TABLE `publicador100`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador101`
--
ALTER TABLE `publicador101`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador102`
--
ALTER TABLE `publicador102`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador103`
--
ALTER TABLE `publicador103`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador104`
--
ALTER TABLE `publicador104`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador105`
--
ALTER TABLE `publicador105`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador106`
--
ALTER TABLE `publicador106`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador107`
--
ALTER TABLE `publicador107`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador108`
--
ALTER TABLE `publicador108`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador109`
--
ALTER TABLE `publicador109`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador110`
--
ALTER TABLE `publicador110`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador111`
--
ALTER TABLE `publicador111`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador112`
--
ALTER TABLE `publicador112`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador113`
--
ALTER TABLE `publicador113`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador114`
--
ALTER TABLE `publicador114`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador115`
--
ALTER TABLE `publicador115`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador116`
--
ALTER TABLE `publicador116`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador117`
--
ALTER TABLE `publicador117`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador118`
--
ALTER TABLE `publicador118`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador119`
--
ALTER TABLE `publicador119`
  ADD PRIMARY KEY (`id_pub`);

--
-- Indices de la tabla `publicador120`
--
ALTER TABLE `publicador120`
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
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `publicador1`
--
ALTER TABLE `publicador1`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador2`
--
ALTER TABLE `publicador2`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador3`
--
ALTER TABLE `publicador3`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador4`
--
ALTER TABLE `publicador4`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador5`
--
ALTER TABLE `publicador5`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador6`
--
ALTER TABLE `publicador6`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador7`
--
ALTER TABLE `publicador7`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador8`
--
ALTER TABLE `publicador8`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador9`
--
ALTER TABLE `publicador9`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador10`
--
ALTER TABLE `publicador10`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador11`
--
ALTER TABLE `publicador11`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador12`
--
ALTER TABLE `publicador12`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador13`
--
ALTER TABLE `publicador13`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador14`
--
ALTER TABLE `publicador14`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador15`
--
ALTER TABLE `publicador15`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador16`
--
ALTER TABLE `publicador16`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador17`
--
ALTER TABLE `publicador17`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador18`
--
ALTER TABLE `publicador18`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador19`
--
ALTER TABLE `publicador19`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador20`
--
ALTER TABLE `publicador20`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador21`
--
ALTER TABLE `publicador21`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador22`
--
ALTER TABLE `publicador22`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador23`
--
ALTER TABLE `publicador23`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador24`
--
ALTER TABLE `publicador24`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador25`
--
ALTER TABLE `publicador25`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador26`
--
ALTER TABLE `publicador26`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador27`
--
ALTER TABLE `publicador27`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador28`
--
ALTER TABLE `publicador28`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador29`
--
ALTER TABLE `publicador29`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador30`
--
ALTER TABLE `publicador30`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador31`
--
ALTER TABLE `publicador31`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador32`
--
ALTER TABLE `publicador32`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador33`
--
ALTER TABLE `publicador33`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador34`
--
ALTER TABLE `publicador34`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador35`
--
ALTER TABLE `publicador35`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador36`
--
ALTER TABLE `publicador36`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador37`
--
ALTER TABLE `publicador37`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador38`
--
ALTER TABLE `publicador38`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador39`
--
ALTER TABLE `publicador39`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador40`
--
ALTER TABLE `publicador40`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador41`
--
ALTER TABLE `publicador41`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador42`
--
ALTER TABLE `publicador42`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador43`
--
ALTER TABLE `publicador43`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador44`
--
ALTER TABLE `publicador44`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador45`
--
ALTER TABLE `publicador45`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador46`
--
ALTER TABLE `publicador46`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador47`
--
ALTER TABLE `publicador47`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador48`
--
ALTER TABLE `publicador48`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador49`
--
ALTER TABLE `publicador49`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador50`
--
ALTER TABLE `publicador50`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador51`
--
ALTER TABLE `publicador51`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador52`
--
ALTER TABLE `publicador52`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador53`
--
ALTER TABLE `publicador53`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador54`
--
ALTER TABLE `publicador54`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador55`
--
ALTER TABLE `publicador55`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador56`
--
ALTER TABLE `publicador56`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador57`
--
ALTER TABLE `publicador57`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador58`
--
ALTER TABLE `publicador58`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador59`
--
ALTER TABLE `publicador59`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador60`
--
ALTER TABLE `publicador60`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador61`
--
ALTER TABLE `publicador61`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador62`
--
ALTER TABLE `publicador62`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador63`
--
ALTER TABLE `publicador63`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador64`
--
ALTER TABLE `publicador64`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador65`
--
ALTER TABLE `publicador65`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador66`
--
ALTER TABLE `publicador66`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador67`
--
ALTER TABLE `publicador67`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador68`
--
ALTER TABLE `publicador68`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador69`
--
ALTER TABLE `publicador69`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador70`
--
ALTER TABLE `publicador70`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador71`
--
ALTER TABLE `publicador71`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador72`
--
ALTER TABLE `publicador72`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador73`
--
ALTER TABLE `publicador73`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador74`
--
ALTER TABLE `publicador74`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador75`
--
ALTER TABLE `publicador75`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador76`
--
ALTER TABLE `publicador76`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador77`
--
ALTER TABLE `publicador77`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador78`
--
ALTER TABLE `publicador78`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador79`
--
ALTER TABLE `publicador79`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador80`
--
ALTER TABLE `publicador80`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador81`
--
ALTER TABLE `publicador81`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador82`
--
ALTER TABLE `publicador82`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador83`
--
ALTER TABLE `publicador83`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador84`
--
ALTER TABLE `publicador84`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador85`
--
ALTER TABLE `publicador85`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador86`
--
ALTER TABLE `publicador86`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador87`
--
ALTER TABLE `publicador87`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador88`
--
ALTER TABLE `publicador88`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador89`
--
ALTER TABLE `publicador89`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador90`
--
ALTER TABLE `publicador90`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador91`
--
ALTER TABLE `publicador91`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador92`
--
ALTER TABLE `publicador92`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador93`
--
ALTER TABLE `publicador93`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador94`
--
ALTER TABLE `publicador94`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador95`
--
ALTER TABLE `publicador95`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador96`
--
ALTER TABLE `publicador96`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador97`
--
ALTER TABLE `publicador97`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador98`
--
ALTER TABLE `publicador98`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador99`
--
ALTER TABLE `publicador99`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador100`
--
ALTER TABLE `publicador100`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador101`
--
ALTER TABLE `publicador101`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador102`
--
ALTER TABLE `publicador102`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador103`
--
ALTER TABLE `publicador103`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador104`
--
ALTER TABLE `publicador104`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador105`
--
ALTER TABLE `publicador105`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador106`
--
ALTER TABLE `publicador106`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador107`
--
ALTER TABLE `publicador107`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador108`
--
ALTER TABLE `publicador108`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador109`
--
ALTER TABLE `publicador109`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador110`
--
ALTER TABLE `publicador110`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador111`
--
ALTER TABLE `publicador111`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador112`
--
ALTER TABLE `publicador112`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador113`
--
ALTER TABLE `publicador113`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador114`
--
ALTER TABLE `publicador114`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador115`
--
ALTER TABLE `publicador115`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador116`
--
ALTER TABLE `publicador116`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador117`
--
ALTER TABLE `publicador117`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador118`
--
ALTER TABLE `publicador118`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador119`
--
ALTER TABLE `publicador119`
  MODIFY `id_pub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicador120`
--
ALTER TABLE `publicador120`
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
