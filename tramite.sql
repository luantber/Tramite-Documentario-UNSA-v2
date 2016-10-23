-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-10-2016 a las 14:54:19
-- Versión del servidor: 5.7.15-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tramite`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombreCargo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_persona` int(11) NOT NULL,
  `area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `created_at`, `updated_at`, `id_persona`, `area`, `cargo`, `activo`) VALUES
(2, '2016-10-22 03:06:58', '2016-10-22 03:06:58', 6, 'gerencia', 'gerente', 0),
(3, '2016-10-22 03:28:44', '2016-10-22 03:28:44', 2, 'asd', 'asdas', 1),
(4, '2016-10-22 03:29:25', '2016-10-22 03:29:25', 2, 'asdg', 'asdas', 0),
(5, '2016-10-22 03:34:24', '2016-10-22 03:34:24', 2, 'asdg', 'asdas', 0),
(6, '2016-10-22 03:35:57', '2016-10-22 03:35:57', 2, 'asasasasasasas', 'asdas', 0),
(7, '2016-10-22 03:36:45', '2016-10-22 03:36:45', 2, 'asasasasasasas', 'asdas', 0),
(8, '2016-10-22 03:40:25', '2016-10-22 03:40:25', 17, 'asasasasasasas', 'asdas', 0),
(9, '2016-10-22 03:55:50', '2016-10-22 03:55:50', 9, 'adaddaddd', 'ddddddddddddddddddd', 0),
(10, '2016-10-22 03:55:55', '2016-10-22 03:55:55', 9, 'adaddaddd', 'ddddddddddddddddddd', 0),
(11, '2016-10-22 03:56:18', '2016-10-22 03:56:18', 9, 'adaddaddd', 'ddddddddddddddddddd', 0),
(12, '2016-10-22 03:56:50', '2016-10-22 03:56:50', 9, 'adaddaddd', 'ddddddddddddddddddd', 0),
(13, '2016-10-22 05:01:25', '2016-10-22 05:01:25', 9, 'joiojljlj', 'kikhkjjhkjj', 0),
(14, '2016-10-22 05:15:41', '2016-10-22 05:15:41', 1, 'holi', 'holi', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2016_10_20_232823_create_personas_table', 1),
(14, '2016_10_20_233802_create_empleados_table', 1),
(15, '2016_10_20_233818_create_cargos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dni` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `dni` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `dni`, `nombre`, `apellido`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 76318698, 'Margarita', 'Lacuaña Apaza', 'margaret.23.12.18@gmail.com', '123', NULL, '2016-10-21 05:46:24', '2016-10-21 05:46:24'),
(2, 123456, 'Margarita', 'Lacuaña Apaza', 'margaret.18@gmail.com', '$2y$10$.wyTSc9J111b3OYZ4Q5Fk.bVeX7eRej5QQwQqsenYLriwhyeLCLdC', NULL, '2016-10-21 05:48:46', '2016-10-21 05:48:46'),
(3, 88888888, 'margaroita', 'jhkj', 'jkjkkkj@gmail.com', '$2y$10$z33p4INtBNA1cL44AabPaOK8KxhL7Vl5IY0eOjhdr9dj48XtU0lu.', NULL, '2016-10-21 21:10:08', '2016-10-21 21:10:08'),
(4, 11111111, 'Margarita', 'Lacuaña Apaza', 'margaret@gmail.com', '$2y$10$/Wm.JoP1/ATjUO7ZLnATQO4U7MgFDIS.YAfuTPsIeJZRksPQcj.ci', NULL, '2016-10-22 02:24:22', '2016-10-22 02:24:22'),
(5, 12345654, 'lal', 'lalal', 'lal@mail.com', '$2y$10$.Dhk2IuGrm7QVxLa9IGjyuE72R30ESSL1OiqVl5gPuEF4ySy5qb9G', NULL, '2016-10-22 02:31:27', '2016-10-22 02:31:27'),
(6, 12312312, 'rosa', 'lac', 'hola@mal.com', '$2y$10$KE6NTQchlR11UTpegxG.1uXYGbJBiZMUQENv6L9l7eWOvNvme9Ym2', NULL, '2016-10-22 03:05:24', '2016-10-22 03:05:24'),
(7, 12312310, 'rosa', 'lac', 'hola@mal.cop', '$2y$10$LQ2S333HWRsl6SDtR/flmuATEw3Mr2lusnh5PFvmIrwp24qu5.m7K', NULL, '2016-10-22 03:08:10', '2016-10-22 03:08:10'),
(8, 12312366, 'rosa', 'lac', 'tola@mal.cop', '$2y$10$28aD8gZwAearGKIWYkFSMe1qBSFt63vJYRQbHZurvFqux5pP4CKAC', NULL, '2016-10-22 03:21:48', '2016-10-22 03:21:48'),
(9, 12329423, 'ass', 'assa', 'adga@mail.com', '$2y$10$VxmBUgR59.EHaPTQEHBHPeRlG3IPvcD83mdnYGugil9TU9ulKhHOO', NULL, '2016-10-22 03:29:25', '2016-10-22 03:29:25'),
(10, 12333423, 'ass', 'assa', 'maga@mail.com', '$2y$10$/.HAN4bzJonyi7fHy2ZjOuJR4perCZAYco8QhkvujW5KM5ktdTgce', NULL, '2016-10-22 03:34:24', '2016-10-22 03:34:24'),
(11, 12333429, 'ass', 'assa', 'magarita@mail.com', '$2y$10$nXzpQkyszetFK79tAGRbm.XTzdOZZAw4qjKF1XZ3nkegHBpKfT5I.', NULL, '2016-10-22 03:35:57', '2016-10-22 03:35:57'),
(12, 2333429, 'ass', 'assa', 'magarita0@mail.com', '$2y$10$dvVim6m1IJsNUGKMg2dqMuCo5iyfXkAuueKUV41yXfy5a4RZLCYkK', NULL, '2016-10-22 03:36:45', '2016-10-22 03:36:45'),
(13, 2303429, 'ass', 'assa', 'magar6ta0@mail.com', '$2y$10$dsijUkDKn6.xqXv42jERDOZptHQx18s8q31tmRqkeZL8gdUxjUi5.', NULL, '2016-10-22 03:37:34', '2016-10-22 03:37:34'),
(16, 2303029, 'ass', 'assa', 'magar6999a0@mail.com', '$2y$10$g0MCgcWf5YL0ri6OL0GEMOprQ0Oa99mjoiMeOhlNNLMLiV0VyhYwm', NULL, '2016-10-22 03:39:35', '2016-10-22 03:39:35'),
(17, 2300029, 'ass', 'assa', '6999a0@mail.com', '$2y$10$qu7laSznSyjs1.2Rq47u5u2/mOdUPJKiBsZDntVlXx2jJpmFXeHCK', NULL, '2016-10-22 03:40:25', '2016-10-22 03:40:25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
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
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_dni_unique` (`dni`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
