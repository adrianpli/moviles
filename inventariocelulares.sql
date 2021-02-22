-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2021 a las 00:06:55
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventariocelulares`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `ID_ADMIN` int(5) NOT NULL,
  `USUARIO` varchar(30) NOT NULL,
  `CONTRA` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`ID_ADMIN`, `USUARIO`, `CONTRA`) VALUES
(1, 'AdrianAdmin', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celulares`
--

CREATE TABLE `celulares` (
  `ID` int(5) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `MARCA` varchar(30) NOT NULL,
  `MODELO` varchar(30) NOT NULL,
  `RAM` varchar(30) NOT NULL,
  `PROCESADOR` varchar(30) NOT NULL,
  `FECHA_REG` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `celulares`
--

INSERT INTO `celulares` (`ID`, `NOMBRE`, `MARCA`, `MODELO`, `RAM`, `PROCESADOR`, `FECHA_REG`) VALUES
(1, 'actualizado', 'actualizado', 'actualizado', 'actualizado', 'actualizado', '2021-02-22'),
(2, 'ejemplo2', 'marcaejemplo2', 'modeloejemplo2', '52', 'ie2', '2021-02-22'),
(3, 'ejemplo3', 'marca3', 'modelo3', '8', '7', '2021-02-22'),
(4, 'asd', 'motorola', '1', '6', '6', '2021-02-22'),
(5, 'asd', 'motorola', '2', '6', '6', '2021-02-22'),
(6, 'asd', 'motorola', '3', '6', '6', '2021-02-22'),
(7, 'asd', 'motorola', '4', '6', '6', '2021-02-22'),
(8, 'asd', 'motorola', '5', '6', '6', '2021-02-22'),
(9, 'asd', 'motorola', '6', '6', '6', '2021-02-22'),
(10, 'asd', 'motorola', '7', '6', '6', '2021-02-22'),
(11, 'asd', 'motorola', '8', '6', '6', '2021-02-22'),
(12, 'asd', 'motorola', '9', '6', '6', '2021-02-15'),
(13, 'asd', 'motorola', '10', '6', '6', '2021-02-15'),
(14, 'dsa', 'samsumg', '123', '123', '123', '2021-02-15'),
(15, 'dsa', 'samsumg', '123', '123', '123', '2021-02-15'),
(16, 'actualizar', 'actualizar', 'actualizar', 'actualizar', 'desdeactualizar', '2021-02-15'),
(17, 'sdfsd', 'apple', 'mac', '5', 'weq', '0000-00-00'),
(19, 'sdfsd', 'apple', 'mac', '5', 'weq', '2021-02-22'),
(20, 'dfg', 'fghj', 'g', '8', '15', '2021-02-10'),
(21, 'dfgdfg', 'motorola', '11', '5', '7', '2021-02-22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indices de la tabla `celulares`
--
ALTER TABLE `celulares`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `ID_ADMIN` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `celulares`
--
ALTER TABLE `celulares`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
