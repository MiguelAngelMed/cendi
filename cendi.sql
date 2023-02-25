-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 14-06-2022 a las 11:02:10
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cendi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `nombredh` varchar(50) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `dia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_conyuge`
--

CREATE TABLE `datos_conyuge` (
  `papellidoCY` varchar(50) NOT NULL,
  `sapellidoCY` varchar(50) NOT NULL,
  `nombrecy` varchar(50) NOT NULL,
  `telcy` int(10) NOT NULL,
  `telfcy` int(10) NOT NULL,
  `lugart` varchar(50) NOT NULL,
  `domiciliot` varchar(50) NOT NULL,
  `telefonot` int(10) NOT NULL,
  `extension` int(5) NOT NULL,
  `id` int(11) NOT NULL,
  `curp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_dh`
--

CREATE TABLE `datos_dh` (
  `nombredh` varchar(50) NOT NULL,
  `papellidodh` varchar(50) NOT NULL,
  `sapellidosh` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `numext` int(4) NOT NULL,
  `numint` int(4) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `alcaldia` varchar(50) NOT NULL,
  `cp` varchar(20) NOT NULL,
  `telc` int(10) NOT NULL,
  `telf` int(10) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `ocupacion` varchar(50) NOT NULL,
  `curpdh` varchar(18) NOT NULL,
  `nplaza` varchar(50) NOT NULL,
  `sueldo` int(4) NOT NULL,
  `nempleado` int(4) NOT NULL,
  `adcrips` varchar(50) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `extension` int(11) NOT NULL,
  `tienecy` varchar(11) NOT NULL,
  `curp` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_ninoss`
--

CREATE TABLE `datos_ninoss` (
  `nombre` varchar(50) NOT NULL,
  `papellido` varchar(50) NOT NULL,
  `sapellido` varchar(50) NOT NULL,
  `fechacac` date NOT NULL,
  `edad` int(4) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `cita` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `ciclo` varchar(10) NOT NULL,
  `ncendi` varchar(50) NOT NULL,
  `nboleta` varchar(10) NOT NULL,
  `grupo` varchar(10) NOT NULL,
  `curp` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('jijikoko', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_conyuge`
--
ALTER TABLE `datos_conyuge`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_dh`
--
ALTER TABLE `datos_dh`
  ADD PRIMARY KEY (`nempleado`);

--
-- Indices de la tabla `datos_ninoss`
--
ALTER TABLE `datos_ninoss`
  ADD PRIMARY KEY (`curp`);

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`nboleta`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_conyuge`
--
ALTER TABLE `datos_conyuge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
