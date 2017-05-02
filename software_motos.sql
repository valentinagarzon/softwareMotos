-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-05-2017 a las 17:53:00
-- Versión del servidor: 5.6.33
-- Versión de PHP: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `software_motos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE `ingreso` (
  `id` int(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ingreso`
--

INSERT INTO `ingreso` (`id`, `usuario`, `contra`) VALUES
(1, 'si', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_clientes`
--

CREATE TABLE `registro_clientes` (
  `id` bigint(30) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `identificacion` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_clientes`
--

INSERT INTO `registro_clientes` (`id`, `nombre`, `identificacion`, `telefono`, `direccion`) VALUES
(11, 'Migue', '1225088382', '3128535960', 'Gamma'),
(13, '1', '2', '4', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_motos`
--

CREATE TABLE `registro_motos` (
  `id` bigint(30) UNSIGNED NOT NULL,
  `placa` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `numero_chasis` varchar(50) NOT NULL,
  `cilindraje` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_motos`
--

INSERT INTO `registro_motos` (`id`, `placa`, `color`, `modelo`, `numero_chasis`, `cilindraje`) VALUES
(6, '90', '2', '3', '4', '5'),
(7, '8', '7', '9', '5', '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_usuario`
--

CREATE TABLE `registro_usuario` (
  `id` int(30) UNSIGNED NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_usuario`
--

INSERT INTO `registro_usuario` (`id`, `usuario`, `clave`) VALUES
(1, 'Valentina', '222'),
(2, 'prueba', '789'),
(3, 'miguel ', '999'),
(6, 'hola', '000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `registro_clientes`
--
ALTER TABLE `registro_clientes`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `registro_motos`
--
ALTER TABLE `registro_motos`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `registro_usuario`
--
ALTER TABLE `registro_usuario`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `registro_clientes`
--
ALTER TABLE `registro_clientes`
  MODIFY `id` bigint(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `registro_motos`
--
ALTER TABLE `registro_motos`
  MODIFY `id` bigint(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `registro_usuario`
--
ALTER TABLE `registro_usuario`
  MODIFY `id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;