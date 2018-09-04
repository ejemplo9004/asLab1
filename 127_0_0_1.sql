-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-09-2018 a las 03:25:03
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `concesionarios`
--
CREATE DATABASE IF NOT EXISTS `concesionarios` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `concesionarios`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Cedula` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Cedula`, `Nombre`, `Telefono`) VALUES
(1017146093, 'QUINTERO CALLE WEIMAR DARÍO', '4264567546'),
(1017174170, 'VÁSQUEZ RAMÍREZ ANDRÉS FELIPE', '1111111111'),
(1122140270, 'NAVAS MURIEL DEIRY SOFIA', '6666666666'),
(1152207831, 'CARVAJAL DÍAZ DIEGO ALEJANDRO', '2222222222'),
(1152220165, 'HILER RICARDO JORGE ANDRES', '5555555555'),
(1128454517, 'Morion V O', '2869004');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cedula` varchar(20) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cedula`, `usuario`, `password`, `nombre`) VALUES
('1128454517', 'Morion', '123', 'AndrÃ©s AdriÃ¡n MartÃ­nez Carmona'),
('222', 'Morion2', '1234', 'Andrna'),
('1234', 'morion', 'morion', 'Morion Vastago');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `Matricula` varchar(10) NOT NULL,
  `Modelo` varchar(30) DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`Matricula`, `Modelo`, `Precio`, `foto`) VALUES
('gsd-588', 'Ford Fusion 2018    ', 94990000, 'WVE.jpg'),
('hgf-456', 'Volkswagen Escarabajo 1959', 9000000, 'WVE.jpg'),
('jdg-445', 'Volkswagen Bora ', 31800000, 'WVE.jpg'),
('nhg-145', 'Honda Accord 2017', 124490000, 'foto.jpg'),
('vdf-458', 'RENAULT Logan 2018', 42150000, 'foto.jpg'),
('WVE', '2011', 129301, 'WVE.jpg'),
('KOG-88A', 'Honda', 1600000, 'foto.jpg'),
('kog', 'Hondeira', 2903, 'WVE.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventasgenerales`
--

CREATE TABLE `ventasgenerales` (
  `Id` int(11) NOT NULL,
  `CodigoC` int(11) NOT NULL,
  `CodigoV` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventasgenerales`
--

INSERT INTO `ventasgenerales` (`Id`, `CodigoC`, `CodigoV`) VALUES
(646, 1017174170, 'jdg-445'),
(5454, 1122140270, 'nhg-145'),
(58465, 1017146093, 'hgf-456'),
(95565, 71219161, 'gsd-588'),
(546464, 1152207831, 'vdf-458'),
(1234, 1122140270, 'jdg-445'),
(131, 1128454517, 'hgf-456'),
(543, 1128454517, 'KOG-88A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Cedula`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`Matricula`);

--
-- Indices de la tabla `ventasgenerales`
--
ALTER TABLE `ventasgenerales`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CodigoC` (`CodigoC`),
  ADD KEY `CodigoV` (`CodigoV`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
