-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-12-2017 a las 17:58:34
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `api`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fabricantes`
--

CREATE TABLE `fabricantes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `fabricantes`
--

INSERT INTO `fabricantes` (`id`, `nombre`, `telefono`, `created_at`, `updated_at`) VALUES
(1, 'et', '8899083', '2017-12-20 00:57:50', '2017-12-20 00:57:50'),
(2, 'ut', '5136609', '2017-12-20 00:57:51', '2017-12-20 00:57:51'),
(3, 'inventore', '1407536', '2017-12-20 00:57:51', '2017-12-20 00:57:51'),
(4, 'vero', '4994963', '2017-12-26 20:20:27', '2017-12-26 20:20:27'),
(5, 'corrupti', '1157420', '2017-12-26 20:20:27', '2017-12-26 20:20:27'),
(6, 'illum', '5655405', '2017-12-26 20:20:27', '2017-12-26 20:20:27'),
(7, 'facilis', '8024343', '2017-12-26 20:20:54', '2017-12-26 20:20:54'),
(8, 'nobis', '6548925', '2017-12-26 20:20:55', '2017-12-26 20:20:55'),
(9, 'voluptate', '8962714', '2017-12-26 20:20:55', '2017-12-26 20:20:55'),
(10, 'fugiat', '5703774', '2017-12-26 20:21:58', '2017-12-26 20:21:58'),
(11, 'esse', '9494014', '2017-12-26 20:21:58', '2017-12-26 20:21:58'),
(12, 'sunt', '7190123', '2017-12-26 20:21:58', '2017-12-26 20:21:58'),
(13, 'ipsum', '6830930', '2017-12-26 20:22:17', '2017-12-26 20:22:17'),
(14, 'temporibus', '9500667', '2017-12-26 20:22:18', '2017-12-26 20:22:18'),
(15, 'eum', '722573', '2017-12-26 20:22:18', '2017-12-26 20:22:18'),
(16, 'qui', '7430852', '2017-12-26 20:22:55', '2017-12-26 20:22:55'),
(17, 'a', '724767', '2017-12-26 20:22:55', '2017-12-26 20:22:55'),
(18, 'eaque', '1331790', '2017-12-26 20:22:55', '2017-12-26 20:22:55'),
(19, 'tenetur', '6630949', '2017-12-26 20:23:00', '2017-12-26 20:23:00'),
(20, 'in', '5837830', '2017-12-26 20:23:00', '2017-12-26 20:23:00'),
(21, 'est', '4560271', '2017-12-26 20:23:00', '2017-12-26 20:23:00'),
(22, 'minus', '1594385', '2017-12-26 20:23:22', '2017-12-26 20:23:22'),
(23, 'voluptatum', '3339366', '2017-12-26 20:23:22', '2017-12-26 20:23:22'),
(24, 'qui', '3023774', '2017-12-26 20:23:22', '2017-12-26 20:23:22'),
(25, 'et', '5432743', '2017-12-26 20:23:31', '2017-12-26 20:23:31'),
(26, 'nisi', '9188025', '2017-12-26 20:23:31', '2017-12-26 20:23:31'),
(27, 'dolore', '7164910', '2017-12-26 20:23:32', '2017-12-26 20:23:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_12_19_202054_fabricante_migration', 1),
(2, '2017_12_19_202159_vehiculo_migration', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'mrondon72@gmail.com', '$2y$10$.2ueW7g6RcLab3Jsp6VmXOvYg8MQNICsmDBiYTuCgMrBTiZW.hZXO', '2017-12-26 20:29:09', '2017-12-26 20:29:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `serie` int(10) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cilindraje` double(8,2) NOT NULL,
  `potencia` int(11) NOT NULL,
  `peso` double(8,2) NOT NULL,
  `fabricante_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`serie`, `color`, `cilindraje`, `potencia`, `peso`, `fabricante_id`, `created_at`, `updated_at`) VALUES
(1, 'fuchsia', 1.00, 668, 33.93, 2, '2017-12-20 00:57:51', '2017-12-20 00:57:51'),
(2, 'purple', 4089.11, 125042449, 4172.54, 1, '2017-12-20 00:57:51', '2017-12-20 00:57:51'),
(3, 'silver', 0.86, 20772674, 0.72, 3, '2017-12-20 00:57:51', '2017-12-20 00:57:51'),
(4, 'fuchsia', 197341.75, 6004842, 16615.29, 5, '2017-12-26 20:20:27', '2017-12-26 20:20:27'),
(5, 'navy', 511418.06, 635165, 639.84, 4, '2017-12-26 20:20:28', '2017-12-26 20:20:28'),
(6, 'yellow', 136.00, 5179, 99.09, 7, '2017-12-26 20:20:55', '2017-12-26 20:20:55'),
(7, 'white', 1131.94, 489, 60.00, 9, '2017-12-26 20:20:55', '2017-12-26 20:20:55'),
(8, 'blue', 0.57, 682434439, 133530.33, 9, '2017-12-26 20:20:55', '2017-12-26 20:20:55'),
(9, 'teal', 2.71, 1003, 338.01, 11, '2017-12-26 20:23:00', '2017-12-26 20:23:00'),
(10, 'lime', 0.48, 37, 373314.68, 25, '2017-12-26 20:23:32', '2017-12-26 20:23:32'),
(11, 'white', 1.00, 361572, 661.20, 13, '2017-12-26 20:23:32', '2017-12-26 20:23:32');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fabricantes`
--
ALTER TABLE `fabricantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`serie`),
  ADD KEY `vehiculos_fabricante_id_foreign` (`fabricante_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fabricantes`
--
ALTER TABLE `fabricantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `serie` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_fabricante_id_foreign` FOREIGN KEY (`fabricante_id`) REFERENCES `fabricantes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
