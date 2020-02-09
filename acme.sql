-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2020 a las 02:26:02
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `acme`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductors`
--

CREATE TABLE `conductors` (
  `id` int(11) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `conductors`
--

INSERT INTO `conductors` (`id`, `cedula`, `nombre`, `apellido`, `direccion`, `telefono`, `created_at`, `updated_at`) VALUES
(1, '1049641844', 'Cristian Camilo', 'Rodriguez', 'Calle 2B 9 57', '3118263057', '2020-02-08 01:18:40', '2020-02-08 01:18:40'),
(2, '983787879', 'Omar Julian', 'Sisa Alvarez', 'Calle 3 # 1-12', '763276', '2020-02-08 01:52:38', '2020-02-08 16:36:46'),
(3, '9505090888', 'Daniel Julian', 'Neisa', 'Cra 23 #12-11', '31323422', '2020-02-08 16:31:26', '2020-02-08 16:31:26'),
(4, '433332223', 'Nelson David', 'Sierra', 'Calle 2A 11 57', '76399230', '2020-02-08 16:32:35', '2020-02-08 16:32:35'),
(5, '74017673', 'Yeison Camilo', 'Alvarez', 'Av 54', '+573118263057', '2020-02-08 16:37:27', '2020-02-08 16:37:27'),
(6, '72894999', 'Fabian Leonardo', 'Neisa', 'Calle 2C # 9 57', '7377781', '2020-02-08 16:38:07', '2020-02-08 16:38:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `id` int(11) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `propietarios`
--

INSERT INTO `propietarios` (`id`, `cedula`, `nombre`, `apellido`, `direccion`, `telefono`, `updated_at`, `created_at`) VALUES
(1, '1049641844', 'Camilo Andres', 'Rodriguez', 'Calle 2B', '3118263057', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '872398392', 'Julio Andres', 'Barrera', 'Cra 23', '8743748', '2020-02-07 20:45:10', '2020-02-07 20:45:10'),
(4, '98378787', 'Rafael Julian', 'Lopez', 'Av 34', '656325', '2020-02-07 20:46:33', '2020-02-07 20:46:33'),
(5, '2203094', 'Nestor Fabian', 'Rodriguez', 'Av 11', '76726736', '2020-02-08 16:29:53', '2020-02-08 16:22:31'),
(6, '1002001', 'Julian Antonio', 'Barrera', 'Cra 23 # 15-11', '761762767', '2020-02-08 16:38:49', '2020-02-08 16:38:49'),
(7, '7738388', 'William Alexander', 'Forero', 'Calle 2B # 11- 57', '6637749', '2020-02-08 16:39:26', '2020-02-08 16:39:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Camilo Rodriguez', 'camilo@gmail.com', NULL, '$2y$10$Vd6Qs9nbaxmyyKVp7Vm.ee3g7EqvYOzSVty0ZTvlsi3uovAEP0xT2', NULL, '2020-02-08 00:20:42', '2020-02-08 06:51:04'),
(5, 'Mariela Contreras', 'cristian.rodriguez1317@gmail.com', NULL, '$2y$10$7AgYPGQgnlb9.ucfbhY8sOZZiAB0ebaDqId24RScE1ie8FlX089BO', NULL, '2020-02-08 00:39:16', '2020-02-08 00:39:16'),
(6, 'Ivan Andres', 'ivanR@gmail.com', NULL, '$2y$10$gi2Msh8W6R01JdD9llLx1u/uS5GJrNiIjuNE.iZxRDY75LqZ4yLKS', NULL, '2020-02-08 00:40:47', '2020-02-08 04:27:38'),
(7, 'Carlos Aponte', 'aponte@gmail.com', NULL, '$2y$10$nMbdRIkqaaRFhesx14EHuO9xfE.33LDFCerl/M5dI3ivGRIAFm9Si', NULL, '2020-02-08 00:41:30', '2020-02-08 00:41:30'),
(9, 'Oscar Sierra', 'oscar@gmail.com', NULL, '$2y$10$v8oi9yBRZdmNGrsr552rsuW2T1M.4lIdWzZy.VePBh.JoKgWhjM.G', NULL, '2020-02-08 00:45:16', '2020-02-08 00:45:16'),
(10, 'Victor Fonseca', 'victor@gmail.com', NULL, '$2y$10$FS8PRdGM2/9pFtrYrH.zr.3bgjbuFYSIluTHMSeOVajSLjQGxYwK2', NULL, '2020-02-08 00:48:06', '2020-02-08 00:48:06'),
(11, 'Nelson Ramos', 'nramos@gmail.com', NULL, '$2y$10$KI8tEviXe56QMcywc7ltweJKf8gPL89v/m7d.gujkueplpftV0nVG', NULL, '2020-02-08 06:51:33', '2020-02-08 06:51:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` int(11) NOT NULL,
  `placa` varchar(7) NOT NULL,
  `color` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `conductor` int(11) NOT NULL,
  `propietario` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `placa`, `color`, `marca`, `tipo`, `conductor`, `propietario`, `created_at`, `updated_at`) VALUES
(1, 'XGJ-723', 'Rojo', 'RENAULT', 'Publico', 2, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'ASD-455', 'Azul', 'Mazda', 'publico', 2, 4, '2020-02-08 16:04:53', '2020-02-08 16:04:53'),
(3, 'FDJ-122', 'Negro', 'Mazda', 'particular', 6, 7, '2020-02-08 16:40:29', '2020-02-08 16:40:29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conductors`
--
ALTER TABLE `conductors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `propietario` (`propietario`),
  ADD KEY `conductor` (`conductor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conductors`
--
ALTER TABLE `conductors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`propietario`) REFERENCES `propietarios` (`id`),
  ADD CONSTRAINT `vehiculos_ibfk_2` FOREIGN KEY (`conductor`) REFERENCES `conductors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
