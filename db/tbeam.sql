-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-03-2022 a las 17:38:42
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tbeam`
--
CREATE DATABASE IF NOT EXISTS `tbeam` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tbeam`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numeral` bigint(20) UNSIGNED NOT NULL,
  `modulo` bigint(20) UNSIGNED NOT NULL,
  `detalle` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id`, `numeral`, `modulo`, `detalle`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '¿Qué es Gmail?', NULL, NULL),
(2, 2, 1, '¿En que equipos se puede utilizar Gmail?', NULL, NULL),
(3, 3, 1, '¿que funciones ofrece Gmail?', NULL, NULL),
(4, 4, 1, '¿En Gmail, como se puede deshacer un correo?', NULL, NULL),
(5, 5, 1, '¿Es necesario tener una cuenta e Gmail para los servicios de Google y demás aplicaciones?', NULL, NULL),
(6, 1, 2, '¿cuántos tipos de cuenta de Gmail se pueden crear?', NULL, NULL),
(7, 2, 2, '¿al crear una cuenta de Gmail es necesario proporcionar datos precisos? por qué?', NULL, NULL),
(8, 3, 2, 'según la manera correcta de crear una cuenta de Gmail. <br/> cual es orden correcto :<br/>\r\n1. Ve a la página de acceso de la Cuenta de Google. <br/> \r\n2.Ingresa tu nombre. <br/> \r\n3. En el campo \"Nombre de usuario\", ingresa un nombre de usuario. <br/> \r\n4. Haz clic en Crear cuenta. <br/>\r\n5.Agrega y verifica un número de teléfono para la cuenta. <br/>\r\n6. Ingresa y confirma tu contraseña. <br/>\r\n7. Haz clic en Siguiente <br/>\r\n', NULL, NULL),
(9, 4, 2, 'conteste falso a verdadero según sea el caso: Si olvidas la contraseña o alguien usa tu cuenta sin permiso, la puedes recuperar si tienes la información de recuperación actualizada', NULL, NULL),
(10, 5, 2, '¿se puede administrar tu información y direcciones de correo electrónico?', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pregunta` bigint(20) UNSIGNED NOT NULL,
  `numeral` varchar(32) NOT NULL,
  `detalle` text NOT NULL,
  `valor` enum('verdadero','falso') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

CREATE TABLE `resultado` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `id_pregunta` bigint(20) UNSIGNED NOT NULL,
  `id_respuesta` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombres` varchar(150) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `documento` varchar(32) NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` varchar(32) NOT NULL,
  `contrasena` varchar(150) NOT NULL,
  `rol` varchar(150) NOT NULL,
  `genero` enum('mujer','hombre') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombres`, `apellidos`, `documento`, `edad`, `telefono`, `contrasena`, `rol`, `genero`, `created_at`, `updated_at`) VALUES
(1, 'Jhony Ananias', 'Boyaca Nova', '100100100', 22, '318250250', 'user', 'usuario', 'mujer', NULL, NULL),
(2, 'Javier', 'Ruiz Heredia', '200200200', 38, '3222942073', 'admin', 'administrador', 'mujer', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pregunta` (`id_pregunta`);

--
-- Indices de la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_pregunta` (`id_pregunta`),
  ADD KEY `id_respuesta` (`id_respuesta`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `documento` (`documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `resultado`
--
ALTER TABLE `resultado`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `respuesta_ibfk_1` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta` (`id`);

--
-- Filtros para la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD CONSTRAINT `resultado_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `resultado_ibfk_2` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta` (`id`),
  ADD CONSTRAINT `resultado_ibfk_3` FOREIGN KEY (`id_respuesta`) REFERENCES `respuesta` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
