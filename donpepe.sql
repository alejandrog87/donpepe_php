-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2018 a las 18:50:53
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `donpepe`
--
CREATE DATABASE IF NOT EXISTS `donpepe` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `donpepe`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(5) NOT NULL,
  `titulo` varchar(90) NOT NULL,
  `autor` varchar(80) NOT NULL,
  `precio` int(5) NOT NULL,
  `cover` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `titulo`, `autor`, `precio`, `cover`) VALUES
(1, 'Memorias de una Geisha', 'Golden', 4569, NULL),
(2, 'How to tell if your cat is plotting to kill you', 'Oatmeal', 238, NULL),
(3, 'Men explain things to me', 'Solnit', 9845, NULL),
(4, 'Fantastic Beasts', 'Rowling', 3475, NULL),
(5, 'What happened', 'Clinton', 723, NULL),
(6, 'Sleeping Beauties', 'King', 983, NULL),
(7, 'How to be successful without hurting menÂ´s feelings', 'Cooper', 894, NULL),
(8, 'The branded mind', 'Du Plessis', 124, NULL),
(9, 'Cats are weird', 'Brown', 756, NULL),
(10, 'La Niebla', 'King', 357, NULL),
(11, 'Harry Potter 1', 'Rowling', 4823, NULL),
(12, 'Harry Potter 2', 'Rowling', 9563, NULL),
(13, 'Harry Potter 6', 'Rowling', 326, NULL),
(14, 'Priceless', 'Poundstone', 348, NULL),
(15, 'The Great Gatsby', 'Fitzgerald', 835, NULL),
(16, 'The Vampire Lestat', 'Rice', 1285, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ratings`
--

CREATE TABLE `ratings` (
  `id_rating` int(5) NOT NULL,
  `id_usuario` int(5) NOT NULL,
  `id_libro` int(5) NOT NULL,
  `fecha` date NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(5) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `clave`, `nombre`, `email`) VALUES
(1, 'eva', '81dc9bdb52d04dc20036dbd8313ed055', 'Eva Ferreira', 'adsf@sdf.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id_rating` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
