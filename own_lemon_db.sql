-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2022 a las 07:53:46
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `own_lemon_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_empresa` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nombre_empresa`) VALUES
('AEX342HHK982', 'Las vinas'),
('AWRTS1246711', 'Limoncitos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `id_Envio` int(11) NOT NULL,
  `num_Pedido` int(11) NOT NULL,
  `paqueteria` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado_Env` tinyint(1) NOT NULL DEFAULT 0,
  `fecha_Env` date NOT NULL,
  `fecha_Entrega` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formularios`
--

CREATE TABLE `formularios` (
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asunto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `resolucion` tinyint(1) NOT NULL DEFAULT 0,
  `respuesta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_10_26_011747_create_empresa_table', 1),
(3, '2022_10_26_011747_create_envio_table', 1),
(4, '2022_10_26_011747_create_formularios_table', 1),
(5, '2022_10_26_011747_create_pago_table', 1),
(6, '2022_10_26_011747_create_pedido_table', 1),
(7, '2022_10_26_011747_create_producto_table', 1),
(8, '2022_10_26_011747_create_rol_table', 1),
(9, '2022_10_26_011747_create_usuario_table', 1),
(10, '2022_10_26_011748_add_foreign_keys_to_envio_table', 1),
(11, '2022_10_26_011748_add_foreign_keys_to_formularios_table', 1),
(12, '2022_10_26_011748_add_foreign_keys_to_pago_table', 1),
(13, '2022_10_26_011748_add_foreign_keys_to_pedido_table', 1),
(14, '2022_10_26_011748_add_foreign_keys_to_usuario_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id_Pago` int(11) NOT NULL,
  `num_Pedido` int(11) NOT NULL,
  `id_Cliente` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_Pago` timestamp NOT NULL DEFAULT current_timestamp(),
  `monto` double NOT NULL,
  `estado_Pago` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `num_Pedido` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `modalidad` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `col` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_Postal` int(11) NOT NULL,
  `rfc_Empresa` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_Pedido` timestamp NOT NULL DEFAULT current_timestamp(),
  `nota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aprobacion` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`num_Pedido`, `cantidad`, `modalidad`, `nombre`, `apellido`, `tel`, `calle`, `num`, `col`, `estado`, `cod_Postal`, `rfc_Empresa`, `fecha_Pedido`, `nota`, `aprobacion`) VALUES
(1, 1, 'red con 5 libras', 'Wendy', 'López', '3317589002', 'Ruben Rodriguez', '675', 'Insurgentes', 'Jalisco', 44820, 'AEX342HHK982', '2022-10-25 05:00:00', 'rwrt', 0),
(4, 1, 'caja con 40 libras', 'Aki', 'Lemus', '3378665433', 'Rosas', '567', 'Bosques', 'Jalisco', 44762, 'AWRTS1246711', '2022-10-26 05:00:00', 'Notita', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `nom_Empresa` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripción` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio_Libra` double NOT NULL,
  `stock` int(11) NOT NULL,
  `stock_visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `tipo` tinyint(1) NOT NULL DEFAULT 0,
  `rol` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`tipo`, `rol`) VALUES
(0, 'Usuario'),
(1, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ap_Paterno` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ap_Materno` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `ap_Paterno`, `ap_Materno`, `email`, `password`, `tel`, `tipo`) VALUES
('Wendy', 'López', 'Díaz', 'wendyjudit@gmail.com', 'wendy123', '3317589002', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`id_Envio`),
  ADD KEY `llave_foranea_envio` (`num_Pedido`);

--
-- Indices de la tabla `formularios`
--
ALTER TABLE `formularios`
  ADD PRIMARY KEY (`fecha`),
  ADD KEY `llave_foranea_formularios` (`usuario`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id_Pago`),
  ADD KEY `llave_foranea_pedido_pago` (`num_Pedido`),
  ADD KEY `llave_foranea_cliente_pago` (`id_Cliente`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`num_Pedido`),
  ADD KEY `llave_foranea_pedido` (`rfc_Empresa`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`tipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`),
  ADD KEY `llave_foranea_usuario` (`tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `envio`
--
ALTER TABLE `envio`
  MODIFY `id_Envio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id_Pago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `num_Pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `envio`
--
ALTER TABLE `envio`
  ADD CONSTRAINT `llave_foranea_envio` FOREIGN KEY (`num_Pedido`) REFERENCES `pedido` (`num_Pedido`);

--
-- Filtros para la tabla `formularios`
--
ALTER TABLE `formularios`
  ADD CONSTRAINT `llave_foranea_formularios` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`email`);

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `llave_foranea_cliente_pago` FOREIGN KEY (`id_Cliente`) REFERENCES `usuario` (`email`),
  ADD CONSTRAINT `llave_foranea_pedido_pago` FOREIGN KEY (`num_Pedido`) REFERENCES `pedido` (`num_Pedido`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `llave_foranea_pedido` FOREIGN KEY (`rfc_Empresa`) REFERENCES `empresa` (`id_empresa`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `llave_foranea_usuario` FOREIGN KEY (`tipo`) REFERENCES `rol` (`tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
