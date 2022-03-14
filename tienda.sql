-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2021 a las 03:06:19
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

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
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'Coca Cola 1.5 lts.', '180.00', '', 'assets/img/portfolio/bebidas/cocacola.jpg'),
(2, 'Fanta 1.5 lts.', '180.00', '', 'assets/img/portfolio/bebidas/fanta.jpg'),
(3, 'Sprite 1.5 lts.', '180.00', '', 'assets/img/portfolio/bebidas/sprite.jpg'),
(4, 'Paso de los Toros tónica 1.5 lts.', '150.00', '', 'assets/img/portfolio/bebidas/tonica.jpg'),
(5, 'Paso de los Toros pomelo 1.5 lts.', '150.00', '', 'assets/img/portfolio/bebidas/pomelo.jpg'),
(6, 'Cerveza Stella Artois 710 cm3', '400.00', '', 'assets/img/portfolio/bebidas/stella.jpg'),
(7, 'Cerveza Schneider Lata 473 cm3', '100.00', '', 'assets/img/portfolio/bebidas/schneider.jpg'),
(8, 'Cerveza Quilmes Clásica 1000 cc', '280.00', '', 'assets/img/portfolio/bebidas/quilmes.jpg'),
(9, 'Cerveza Patagonica Amber Larger 700 cm3', '350.00', '', 'assets/img/portfolio/bebidas/patagonica.jpg'),
(10, 'Cerveza Miller Lata 473 cm3', '135.00', '', 'assets/img/portfolio/bebidas/miller.jpg'),
(11, 'Cerveza Imperial Lata 473 cm3', '115.00', '', 'assets/img/portfolio/bebidas/imperial.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunes`
--

CREATE TABLE `comunes` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comunes`
--

INSERT INTO `comunes` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'Pizza Muzzarella', '480.00', '', 'assets/img/portfolio/comunes/pizzamuzzarella.jpg'),
(2, 'Pizza con jamón', '520.00', '', 'assets/img/portfolio/comunes/pizzaconjamon.jpg'),
(3, 'Pizza Fugazzeta', '520.00', '', 'assets/img/portfolio/comunes/pizzafugazzeta.jpg'),
(4, 'Pizza con jamón y morrón', '550.00', '', 'assets/img/portfolio/comunes/pizzaconjamonymorron.jpg'),
(5, 'Pizza con jamón y tomate', '550.00', '', 'assets/img/portfolio/comunes/pizzaconjamonytomate.jpg'),
(6, 'Pizza con jamón y huevo', '550.00', '', 'assets/img/portfolio/comunes/pizzaconjamonyhuevo.jpg'),
(7, 'Pizza con jamón, huevo y tomate', '600.00', '', 'assets/img/portfolio/comunes/pizzaconjamonhuevoytomate.jpg'),
(9, 'Pizza Calabresa', '550.00', '', 'assets/img/portfolio/comunes/pizzacalabresa.jpg'),
(11, 'Pizza con jamón crudo', '550.00', '', 'assets/img/portfolio/comunes/pizzaconjamoncrudo.jpg'),
(12, 'Pizza Fugazzeta', '520.00', '', 'assets/img/portfolio/comunes/pizzafugazzeta.jpg'),
(13, 'Pizza Napolitana', '520.00', '', 'assets/img/portfolio/comunes/pizzanapolitana.jpg'),
(14, 'Pizza con jamón, huevo y tomate', '600.00', '', 'assets/img/portfolio/comunes/pizzaconjamonhuevoytomate.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especiales`
--

CREATE TABLE `especiales` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especiales`
--

INSERT INTO `especiales` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'Pizza Cuatro Quesos', '550.00', '', 'assets/img/portfolio/especiales/pizzacuatroquesos.jpg'),
(2, 'Pizza Muzzarella Doble', '600.00', '', 'assets/img/portfolio/especiales/pizzamuzzarelladoble.jpg'),
(3, 'Pizza Provolone', '520.00', '', 'assets/img/portfolio/especiales/pizzaprovolone.jpg'),
(4, 'Pizza Roquefort', '600.00', '', 'assets/img/portfolio/especiales/pizzaroquefort.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `extras`
--

CREATE TABLE `extras` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `extras`
--

INSERT INTO `extras` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'Faina', '150.00', '', 'assets/img/portfolio/extras/faina.jpg'),
(2, 'Fugafaina', '180.00', '', 'assets/img/portfolio/extras/fugafaina.jpg'),
(3, 'Faina rellena', '180.00', '', 'assets/img/portfolio/extras/fainarellena.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `comunes`
--
ALTER TABLE `comunes`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `especiales`
--
ALTER TABLE `especiales`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `extras`
--
ALTER TABLE `extras`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `comunes`
--
ALTER TABLE `comunes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `especiales`
--
ALTER TABLE `especiales`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `extras`
--
ALTER TABLE `extras`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
