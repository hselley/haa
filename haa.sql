-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-07-2017 a las 18:19:32
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `haa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `identrada` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `literatura` int(11) DEFAULT NULL,
  `tema` varchar(90) NOT NULL,
  `paginas` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`identrada`, `fecha`, `literatura`, `tema`, `paginas`) VALUES
(1, '2017-07-15', 1, 'Cómo comprenderse a si mismo', '15'),
(2, '2017-07-16', 3, 'Primer Paso', '7'),
(3, '2017-07-19', 2, 'Al-Anon es para hombres', NULL),
(4, '2017-07-22', 4, 'Historia de Lois', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `literatura`
--

CREATE TABLE `literatura` (
  `idliteratura` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `literatura`
--

INSERT INTO `literatura` (`idliteratura`, `nombre`, `tipo`) VALUES
(1, 'Grupos de Familia Al-Anon', 'Libro'),
(2, 'Al-Anon es para hombres', 'Folleto'),
(3, 'Los Doce Pasos y las Doce Tradiciones de Al-Anon', 'Libro'),
(4, 'Historia de Lois', 'Folleto'),
(5, 'De la Supervivencia a la Recuperación', 'Libro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`identrada`),
  ADD KEY `fk_entrada_1_idx` (`literatura`);

--
-- Indices de la tabla `literatura`
--
ALTER TABLE `literatura`
  ADD PRIMARY KEY (`idliteratura`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entrada`
--
ALTER TABLE `entrada`
  MODIFY `identrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `literatura`
--
ALTER TABLE `literatura`
  MODIFY `idliteratura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `fk_entrada_1` FOREIGN KEY (`literatura`) REFERENCES `literatura` (`idliteratura`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
