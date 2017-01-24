-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2016 a las 15:59:13
-- Versión del servidor: 5.5.47-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistema2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) DEFAULT NULL,
  `apellido` varchar(64) DEFAULT NULL,
  `direccion` varchar(64) DEFAULT NULL,
  `telefono` varchar(64) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `email`, `usuario_id`, `created`, `modified`, `activo`) VALUES
(1, 'Fernando', 'Angelino', 'Ascasubi 58', '0343 154 573189', 'nanoangelino@hotmail.com', 0, '2016-04-17 22:22:55', '2016-04-17 22:35:34', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comercios`
--

CREATE TABLE IF NOT EXISTS `comercios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `razon_social` varchar(64) DEFAULT NULL,
  `nombre_titular` varchar(64) DEFAULT NULL,
  `apellido_titular` varchar(64) DEFAULT NULL,
  `direccion` varchar(64) DEFAULT NULL,
  `telefono` varchar(64) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `logo` varchar(64) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `activo` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `comercios`
--

INSERT INTO `comercios` (`id`, `razon_social`, `nombre_titular`, `apellido_titular`, `direccion`, `telefono`, `email`, `logo`, `usuario_id`, `activo`, `created`, `modified`) VALUES
(1, 'Bazar Yers', 'Alfredo', 'Casero', 'Alem 102', '4323232', 'bazar@yers.com.ar', '?', 0, 1, '2016-04-17 23:27:39', '2016-08-02 01:18:29'),
(2, 'razon 2', 'nombre  2', 'apellido 2', 'direccion2', 'telefono 2', 'email2@gmail.com', NULL, 0, 0, '2016-08-01 13:33:19', '2016-09-10 18:31:07'),
(3, 'razon 1', 'nombre  1 ', 'apellido 1 ', 'direccion1', 'telefono 1', 'email1@gmail.com', NULL, 0, 1, '2016-08-01 13:39:48', '2016-08-02 01:20:10'),
(4, 'asdf', 'asdf', 'asdf', 'direccion 3', 'asdf', 'asdf@gmail.com', NULL, 0, 1, '2016-08-01 13:49:36', '2016-08-02 01:20:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuotas`
--

CREATE TABLE IF NOT EXISTS `cuotas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `monto_fijo` float(6,2) DEFAULT NULL,
  `forma_pago_id` int(11) DEFAULT NULL,
  `vencimiento` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `socio_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `forma_pago_id_idx` (`forma_pago_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `cuotas`
--

INSERT INTO `cuotas` (`id`, `monto_fijo`, `forma_pago_id`, `vencimiento`, `created`, `modified`, `socio_id`) VALUES
(1, 50.00, 1, '2016-05-17', '2016-04-17 23:35:47', '2016-04-17 23:35:47', 1),
(2, 100.00, 2, '2016-05-17', '2016-04-17 23:36:06', '2016-04-17 23:36:06', 2),
(3, 80.00, 2, '2006-09-07', '2016-08-02 13:43:51', '2016-08-02 13:43:51', 2),
(4, 780.00, 1, '2016-08-02', '2016-08-02 13:49:10', '2016-08-02 13:49:10', 2),
(5, 800.00, 1, '2016-08-04', '2016-08-02 13:49:31', '2016-08-02 13:49:31', 2),
(6, 80.00, 2, '2006-09-07', '2016-08-02 14:45:09', '2016-08-02 14:45:09', 2),
(7, 80.00, 2, '2006-09-07', '2016-08-02 14:45:28', '2016-08-02 14:45:28', 2),
(8, 80.00, 2, '2016-08-11', '2016-08-02 14:45:46', '2016-08-02 14:45:46', 2),
(10, 50.00, 1, '2016-05-17', '2016-08-02 14:53:37', '2016-08-02 14:53:37', 1),
(11, 80.00, 2, '2016-08-11', '2016-08-02 20:09:05', '2016-08-02 20:09:05', 1),
(12, 55.00, 1, '2016-05-17', '2016-09-10 18:12:55', '2016-09-10 18:12:55', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pagos`
--

CREATE TABLE IF NOT EXISTS `forma_pagos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(64) DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `forma_pagos`
--

INSERT INTO `forma_pagos` (`id`, `descripcion`, `activo`) VALUES
(1, 'Efectiv', 1),
(2, 'Tarjeta de crÃ©dito', 1),
(3, 'Rapi Pago', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'administrador', '2015-08-01 00:00:00', '2015-08-04 02:06:11'),
(2, 'cliente', '2015-08-01 03:06:54', '2015-08-01 03:06:54'),
(3, 'vendedor', '2015-08-01 03:07:06', '2015-08-01 03:07:06'),
(4, 'visitante', '2015-08-01 03:07:14', '2015-08-01 03:07:14'),
(5, 'otros', '2015-08-02 01:50:41', '2015-08-02 01:50:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulogroups`
--

CREATE TABLE IF NOT EXISTS `modulogroups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modulo_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=1295 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE IF NOT EXISTS `modulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `controller` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `action` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `nrotransaccion` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=149 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_pago` date DEFAULT NULL,
  `monto` float(6,2) NOT NULL,
  `pago_anterior` date DEFAULT NULL,
  `socio_id` int(11) DEFAULT NULL,
  `cuota_id` int(11) NOT NULL,
  `vencido` tinyint(1) DEFAULT NULL,
  `activo` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `socio_id_idx` (`socio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `fecha_pago`, `monto`, `pago_anterior`, `socio_id`, `cuota_id`, `vencido`, `activo`, `created`, `modified`) VALUES
(1, '2016-04-17', 50.00, '2016-03-17', 1, 1, 0, 1, '2016-04-17 23:38:38', '2016-04-17 23:38:38'),
(2, '2016-05-17', 50.00, '2016-04-17', 1, 1, 1, 1, '2016-04-17 23:39:12', '2016-04-17 23:39:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promos`
--

CREATE TABLE IF NOT EXISTS `promos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) DEFAULT NULL,
  `condiciones` varchar(255) DEFAULT NULL,
  `valido_desde` date DEFAULT NULL,
  `valido_hasta` date DEFAULT NULL,
  `logo_promo` varchar(32) DEFAULT NULL,
  `comercio_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comercio_id_idx` (`comercio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `promos`
--

INSERT INTO `promos` (`id`, `descripcion`, `condiciones`, `valido_desde`, `valido_hasta`, `logo_promo`, `comercio_id`, `created`, `modified`, `activo`) VALUES
(1, '10 % de descuento en el total de la compra', 'tope de reintegro $100', '2016-04-17', '2016-12-31', '?', 1, '2016-04-17 23:31:40', '2016-04-17 23:31:40', 1),
(2, '2x1 en cotillÃ³n', 'n/a', '2016-04-17', '2016-07-15', '?', 1, '2016-04-17 23:33:24', '2016-04-17 23:33:24', 1),
(6, '10 % de descuento en el total de la compra', 'tope de reintegro $100', '2016-04-19', '2016-09-13', NULL, 1, '2016-08-02 16:53:42', '2016-08-02 16:53:42', 1),
(7, 'asdf', 'asdf', '2016-08-01', '2016-08-11', 'logo.jpg', 1, '2016-08-02 19:54:34', '2016-08-02 19:54:34', 1),
(8, 'aaa', 'aaa', '2016-08-01', '2016-08-02', 'gym8.jpg', 1, '2016-08-02 20:04:36', '2016-08-02 20:04:36', 1),
(9, 'bbb', 'bbb', '2016-08-01', '2016-08-11', 'user.jpg', 1, '2016-08-02 20:06:18', '2016-08-02 20:06:18', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE IF NOT EXISTS `socios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dni` (`dni`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`id`, `dni`, `nombre`, `apellido`, `direccion`, `telefono`, `email`, `usuario_id`, `created`, `modified`, `activo`) VALUES
(1, '29736371', 'Socio', 'Uno', 'Alameda de la federaciÃ³n 541', '4323232', 'socio1@hotmail.com', 1, '2016-04-17 23:29:16', '2016-07-31 23:40:26', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuarios`
--

CREATE TABLE IF NOT EXISTS `tipo_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipo_usuarios`
--

INSERT INTO `tipo_usuarios` (`id`, `tipo`, `nivel`, `created`, `modified`) VALUES
(1, 'administrador', 1, '2016-04-12 03:54:23', '2016-04-12 03:54:23'),
(2, 'comerciante', 2, '2016-04-17 20:39:16', '2016-04-17 20:39:16'),
(3, 'socio', 3, '2016-04-17 20:39:26', '2016-04-17 20:39:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `tipo_usuario_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `activo` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `tipo_usuario_id`, `created`, `updated`, `activo`, `nivel`, `group_id`) VALUES
(1, 'desarrollo', '601f1889667efaebb33b8c12572835da3f027f78', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `tipo_usuario_id` int(11) DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `tipo_usuario_id_idx` (`tipo_usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nivel`, `created`, `modified`, `tipo_usuario_id`, `activo`) VALUES
(1, 'nanosk', '12345678', 1, '2016-04-17 22:34:58', '2016-04-17 23:34:06', 1, 1),
(2, 'bazaryers', '12345678', 2, '2016-04-17 23:22:39', '2016-04-17 23:25:21', 2, 1),
(4, 'socio1', '12345678', 3, '2016-04-17 23:25:58', '2016-04-18 18:30:15', 3, 1),
(6, 'hola', '123456789', 1, '2016-04-20 00:57:37', '2016-04-20 00:57:37', 1, 1),
(7, 'nanoangelino', 'nanosk456789', 1, '2016-04-21 03:00:24', '2016-04-21 04:16:24', 1, 1),
(9, 'nanoangelino2', '', 1, '2016-04-21 03:01:51', '2016-04-21 03:01:51', 1, 1),
(10, 'dfgdsfgdfggs', 'gfgfdsgfsgg', 1, '2016-04-21 03:02:04', '2016-04-21 03:02:04', 1, 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuotas`
--
ALTER TABLE `cuotas`
  ADD CONSTRAINT `forma_pago_id` FOREIGN KEY (`forma_pago_id`) REFERENCES `forma_pagos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `socio_id` FOREIGN KEY (`socio_id`) REFERENCES `socios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `promos`
--
ALTER TABLE `promos`
  ADD CONSTRAINT `comercio_id` FOREIGN KEY (`comercio_id`) REFERENCES `comercios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `tipo_usuario_id` FOREIGN KEY (`tipo_usuario_id`) REFERENCES `tipo_usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
