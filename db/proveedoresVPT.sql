-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db:3306
-- Tiempo de generación: 08-05-2024 a las 23:12:51
-- Versión del servidor: 8.4.0
-- Versión de PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_docker`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int NOT NULL,
  `Nombre` varchar(35) COLLATE utf8mb4_general_ci NOT NULL,
  `Correo electrónico` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Teléfono` varchar(9) COLLATE utf8mb4_general_ci NOT NULL,
  `Tipo de proveedor` enum('hotel','pista','complemento') COLLATE utf8mb4_general_ci NOT NULL,
  `Activo` tinyint(1) NOT NULL,
  `Fecha introducción` datetime NOT NULL,
  `Fecha última modificación` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `Nombre`, `Correo electrónico`, `Teléfono`, `Tipo de proveedor`, `Activo`, `Fecha introducción`, `Fecha última modificación`) VALUES
(106, 'Gonzalo Gabriel', 'gonzalogabriel@gmail.com', '611493747', 'complemento', 1, '2024-05-08 21:33:36', '2024-05-08 21:33:36'),
(107, 'John Doe', 'sucorreo@hotmail.com', '111223344', 'hotel', 1, '2024-05-08 21:35:32', '2024-05-08 21:36:49'),
(108, 'Lorem', 'ejemplo@proyecto.es', '002380992', 'complemento', 0, '2024-05-08 21:36:35', '2024-05-08 21:36:45');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
