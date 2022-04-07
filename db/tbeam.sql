-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-04-2022 a las 21:25:20
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
(10, 5, 2, '¿se puede administrar tu información y direcciones de correo electrónico?', NULL, NULL),
(11, 1, 3, '¿cuáles son las opciones de pestaña con las que podemos separar nuestro correo electrónico?', NULL, NULL),
(12, 2, 3, '¿en que opción de ajustes podremos cambiar la apariencia de nuestro Gmail en cuanto a fondo, colores o temáticas?', NULL, NULL),
(13, 3, 3, '¿según lo aprendido en contenido, se puede agregar una firma automática en Gmail sea propia o logo?', NULL, NULL),
(14, 4, 3, 'conteste falso a verdadero según sea el caso <br/> En Gmail existen extensiones para programar mensajes que serán enviados en una fecha especificada y también el autoenvío de mensajes para volverlos a leer en un horario determinado', NULL, NULL),
(15, 5, 3, 'esta configuración se hace abriendo Gmail, buscando el mensaje seleccionado, y presionando los tres puntos dentro del mensaje, luego dentro del calendario se añadirán una serie de datos y se guardara en la parte superior dándole aceptar', NULL, NULL);

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

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`id`, `id_pregunta`, `numeral`, `detalle`, `valor`, `created_at`, `updated_at`) VALUES
(1, 1, 'A', 'Una librería virtual', 'falso', NULL, NULL),
(2, 1, 'B', 'Un servicio de correo electrónico', 'verdadero', NULL, NULL),
(3, 1, 'C', 'Una red social', 'falso', NULL, NULL),
(4, 1, 'D', 'Una aplicación móvil', 'falso', NULL, NULL),
(5, 2, 'A', 'En un smartphone (los Android', 'falso', NULL, NULL),
(6, 2, 'B', 'En equipos de cómputo de escritorio', 'falso', NULL, NULL),
(7, 2, 'C', 'En tabletas', 'falso', NULL, NULL),
(8, 2, 'D', 'Todas las anteriores', 'verdadero', NULL, NULL),
(9, 3, 'A', 'Funciones de enviar y recibir correos', 'falso', NULL, NULL),
(10, 3, 'B', 'Funciones de chat', 'falso', NULL, NULL),
(11, 3, 'C', 'Funciones de videoconferencias', 'falso', NULL, NULL),
(12, 3, 'D', 'La respuesta A y B son correctas', 'verdadero', NULL, NULL),
(13, 3, 'E', 'Las respuestas B y C son correctas', 'falso', NULL, NULL),
(14, 4, 'A', 'Se envía un correo y en los tres segundos se da en la opción deshacer envío', 'verdadero', NULL, NULL),
(15, 4, 'B', 'Se busca en mensajes enviados y se elimina el correo electrónico que acabamos de enviar', 'falso', NULL, NULL),
(16, 4, 'C', 'No se puede deshacer el envío de un correo', 'falso', NULL, NULL),
(17, 4, 'D', 'Se configura el tiempo de cancelación del envío para poder deshacer él envió', 'falso', NULL, NULL),
(18, 5, 'A', 'No', 'falso', NULL, NULL),
(19, 5, 'B', 'Si', 'verdadero', NULL, NULL),
(20, 5, 'C', 'A veces', 'falso', NULL, NULL),
(21, 6, 'A', 'Una cuenta: personal', 'falso', NULL, NULL),
(22, 6, 'B', 'Dos cuentas: personal y de empresa', 'verdadero', NULL, NULL),
(23, 6, 'C', 'Tres cuentas: personal, comercial y de seguridad', 'falso', NULL, NULL),
(24, 6, 'D', 'Todas las anteriores', 'falso', NULL, NULL),
(25, 7, 'A', 'Sí, porque así se podrá proteger aún más la cuenta de posibles plagios', 'verdadero', NULL, NULL),
(26, 7, 'B', 'No, porque solo se necesita para enviar correo', 'falso', NULL, NULL),
(27, 7, 'C', 'Sí, porque al momento de plagio, necesitaran ', 'falso', NULL, NULL),
(28, 7, 'D', 'Depende para que usemos nuestra cuenta', 'falso', NULL, NULL),
(29, 8, 'A', '1,2,3,4,5,6,7', 'falso', NULL, NULL),
(30, 8, 'B', '1,4,2,3,6,5,7 ', 'verdadero', NULL, NULL),
(31, 8, 'C', '1,3,2,4,6,5,7', 'falso', NULL, NULL),
(32, 8, 'D', '2,3,4,1,6,5,7', 'falso', NULL, NULL),
(33, 9, 'A', 'Falso', 'falso', NULL, NULL),
(34, 9, 'B', 'Verdadero', 'verdadero', NULL, NULL),
(35, 10, 'A', 'No', 'falso', NULL, NULL),
(36, 10, 'B', 'Si', 'verdadero', NULL, NULL),
(37, 11, 'A', 'Social, seguridad, promociones', 'falso', NULL, NULL),
(38, 11, 'B', 'Bandeja de entrada, seguridad, notificaciones', 'falso', NULL, NULL),
(39, 11, 'C', 'Principal, social, promociones, notificaciones y foros', 'verdadero', NULL, NULL),
(40, 11, 'D', 'Principal, social, bandeja de entrada y foros', 'falso', NULL, NULL),
(41, 12, 'A', 'En la opción de ajustes llamada temas', 'verdadero', NULL, NULL),
(42, 12, 'B', 'En la opción de ajustes llamada confirmación de ', 'falso', NULL, NULL),
(43, 12, 'C', 'En la opción de ajustes llamada acción de ', 'falso', NULL, NULL),
(44, 12, 'D', 'En la opción de ajustes llamado ajustes automáticos', 'falso', NULL, NULL),
(45, 13, 'A', 'Si', 'verdadero', NULL, NULL),
(46, 13, 'B', 'No', 'falso', NULL, NULL),
(47, 14, 'A', 'Falso', 'falso', NULL, NULL),
(48, 14, 'B', 'Verdadero', 'verdadero', NULL, NULL),
(49, 15, 'A', 'Silenciar mensajes', 'falso', NULL, NULL),
(50, 15, 'B', 'Destacar mensajes', 'falso', NULL, NULL),
(51, 15, 'C', 'Filtrar mensajes', 'falso', NULL, NULL),
(52, 15, 'D', 'Crear eventos', 'verdadero', NULL, NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

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
