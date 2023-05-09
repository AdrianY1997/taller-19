-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2023 a las 04:39:50
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `codigo_pro` varchar(45) DEFAULT NULL,
  `nombre_pro` varchar(45) DEFAULT NULL,
  `descripcion_pro` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `codigo_pro`, `nombre_pro`, `descripcion_pro`) VALUES
(5, 'alkjflkdsa2', 'adkfañldksfñ', 'fafkad'),
(6, 'alkjflkdsa2', 'adkfañldksfñ', 'fafkad'),
(7, 'alkjflkdsa', 'adkfañldksfñ', 'fafkad'),
(8, 'alkjflkdsa', 'adkfañldksfñ', 'fafkad'),
(9, '', '', ''),
(10, '', '', ''),
(11, 'alkjflkdsa2', 'adkfañldksfñ', 'fafkad'),
(12, 'alkjflkdsa', 'adkfañldksfñ', 'fafkad'),
(13, 'alkjflkdsa', 'adkfañldksfñ', 'fafkad'),
(14, 'alkjflkdsa', 'adkfañldksfñ', 'fafkad'),
(15, 'alkjflkdsa1', 'adkfañldksfñ', 'fafkad'),
(16, 'alkjflkdsa2', 'adkfañldksfñ', 'fafkad'),
(17, 'alkjflkdsa1', 'adkfañldksfñ', 'fafkad'),
(18, 'alkjflkdsa2', 'adkfañldksfñ', 'fafkad'),
(19, 'alkjflkdsa1', 'adkfañldksfñ', 'fafkad');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
