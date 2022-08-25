-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2022 a las 23:21:35
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
-- Base de datos: `tiendamarcaribecenter`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nom_categoria` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nom_categoria`, `estado`) VALUES
(1, 'Alimentos', 1),
(2, 'Limpieza', 1),
(3, 'Refrescos', 1),
(4, 'Chucherias', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contador`
--

CREATE TABLE `contador` (
  `pageview_id` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contador`
--

INSERT INTO `contador` (`pageview_id`, `ip`, `created`) VALUES
(1, '::1', '2022-05-08 09:44:04'),
(2, '::1', '2022-05-08 09:44:16'),
(3, '::1', '2022-05-08 14:35:51'),
(4, '::1', '2022-05-08 17:41:12'),
(5, '::1', '2022-05-08 17:41:44'),
(6, '::1', '2022-05-08 17:41:47'),
(7, '::1', '2022-05-08 17:42:05'),
(8, '::1', '2022-05-08 20:10:30'),
(9, '::1', '2022-05-10 15:46:13'),
(10, '::1', '2022-05-10 18:16:19'),
(11, '::1', '2022-05-10 18:50:28'),
(12, '::1', '2022-05-10 23:12:29'),
(13, '::1', '2022-05-10 23:12:32'),
(14, '::1', '2022-05-14 16:17:13'),
(15, '::1', '2022-05-14 20:54:25'),
(16, '::1', '2022-05-14 20:54:30'),
(17, '::1', '2022-05-14 21:09:52'),
(18, '::1', '2022-05-15 11:50:15'),
(19, '::1', '2022-05-15 11:56:07'),
(20, '::1', '2022-05-15 14:36:46'),
(21, '::1', '2022-05-16 21:59:44'),
(22, '127.0.0.1', '2022-05-17 15:16:44'),
(23, '::1', '2022-05-17 20:17:20'),
(24, '::1', '2022-05-17 22:29:48'),
(25, '::1', '2022-05-18 14:56:15'),
(26, '::1', '2022-05-18 15:22:05'),
(27, '::1', '2022-05-18 15:23:46'),
(28, '::1', '2022-05-19 23:34:39'),
(29, '::1', '2022-05-22 13:48:36'),
(30, '::1', '2022-05-22 13:51:37'),
(31, '::1', '2022-05-22 14:32:14'),
(32, '::1', '2022-05-23 19:19:37'),
(33, '::1', '2022-05-23 19:19:43'),
(34, '::1', '2022-05-25 17:34:16'),
(35, '::1', '2022-05-25 17:44:36'),
(36, '::1', '2022-05-25 21:15:43'),
(37, '::1', '2022-05-25 21:15:56'),
(38, '::1', '2022-05-25 21:51:31'),
(39, '::1', '2022-05-25 21:53:47'),
(40, '::1', '2022-05-25 21:54:37'),
(41, '::1', '2022-05-25 21:57:45'),
(42, '::1', '2022-05-25 21:58:02'),
(43, '::1', '2022-05-25 21:58:19'),
(44, '::1', '2022-05-25 21:58:37'),
(45, '::1', '2022-05-25 21:58:42'),
(46, '::1', '2022-05-25 21:58:46'),
(47, '::1', '2022-05-25 21:58:55'),
(48, '::1', '2022-05-25 21:58:58'),
(49, '::1', '2022-05-26 17:40:48'),
(50, '::1', '2022-05-27 17:12:07'),
(51, '::1', '2022-05-27 18:31:18'),
(52, '::1', '2022-05-27 18:37:23'),
(53, '::1', '2022-05-27 18:37:43'),
(54, '::1', '2022-05-27 18:38:01'),
(55, '::1', '2022-05-27 18:38:17'),
(56, '::1', '2022-05-27 18:39:16'),
(57, '::1', '2022-05-28 19:54:08'),
(58, '::1', '2022-05-28 19:56:37'),
(59, '::1', '2022-05-29 12:11:31'),
(60, '::1', '2022-05-29 17:18:30'),
(61, '::1', '2022-05-29 17:40:38'),
(62, '::1', '2022-05-29 17:40:44'),
(63, '::1', '2022-05-29 18:09:57'),
(64, '::1', '2022-05-30 15:16:07'),
(65, '::1', '2022-06-01 13:17:00'),
(66, '::1', '2022-06-01 14:55:24'),
(67, '::1', '2022-06-01 16:35:54'),
(68, '::1', '2022-06-01 23:25:41'),
(69, '::1', '2022-06-01 23:49:13'),
(70, '::1', '2022-06-02 15:02:31'),
(71, '::1', '2022-06-02 21:16:53'),
(72, '::1', '2022-06-02 21:40:05'),
(73, '::1', '2022-06-06 19:52:50'),
(74, '::1', '2022-06-06 20:41:37'),
(75, '::1', '2022-06-10 14:16:50'),
(76, '::1', '2022-06-11 14:57:51'),
(77, '::1', '2022-06-20 11:58:05'),
(78, '::1', '2022-06-20 15:21:32'),
(79, '::1', '2022-06-23 18:08:50'),
(80, '::1', '2022-07-01 20:38:01'),
(81, '::1', '2022-07-01 20:53:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correo`
--

CREATE TABLE `correo` (
  `id_correo` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `correo`
--

INSERT INTO `correo` (`id_correo`, `id_personal`, `correo`, `estado`) VALUES
(3, 5, 'josemagiboo@gmail.com', 1),
(4, 6, 'Xxchris33xX@gmail.com', 0),
(5, 7, 'josemagibo3o@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `id_entrada` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad_entrada` varchar(50) NOT NULL,
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`id_entrada`, `id_producto`, `cantidad_entrada`, `creado_en`) VALUES
(1, 1, '10', '2022-05-02 20:30:33'),
(2, 2, '22', '2022-05-08 14:55:47'),
(3, 1, '3', '2022-05-08 16:50:27'),
(4, 1, '1', '2022-05-08 16:54:25'),
(5, 1, '1', '2022-05-08 16:55:28'),
(6, 1, '1', '2022-05-08 16:56:47'),
(7, 1, '1', '2022-05-08 16:59:47'),
(8, 1, '1', '2022-05-08 17:01:05'),
(9, 1, '1', '2022-05-08 17:02:21'),
(10, 1, '1', '2022-05-08 17:07:37'),
(11, 1, '1', '2022-05-08 17:08:30'),
(12, 1, '1', '2022-05-08 17:10:07'),
(13, 3, '1', '2022-05-08 17:10:52'),
(14, 1, '1', '2022-05-08 21:00:17'),
(15, 2, '2', '2022-05-08 21:00:25'),
(16, 2, '2', '2022-05-08 21:01:38'),
(17, 2, '2', '2022-05-08 21:02:01'),
(18, 2, '5', '2022-05-08 21:02:23'),
(19, 3, '3', '2022-05-08 21:05:05'),
(20, 1, '10', '2022-05-10 00:05:35'),
(21, 1, '10', '2022-05-10 00:05:48'),
(22, 1, '10', '2022-05-10 00:05:55'),
(23, 2, '10', '2022-05-10 00:06:15'),
(24, 3, '10', '2022-05-11 03:44:53'),
(25, 3, '33', '2022-05-11 03:56:52'),
(26, 1, '5', '2022-05-11 03:58:43'),
(27, 2, '10', '2022-05-17 02:20:26'),
(28, 2, '2', '2022-05-17 02:20:44'),
(29, 1, '10', '2022-05-17 19:30:36'),
(30, 1, '1', '2022-06-13 15:35:55'),
(31, 3, '1', '2022-06-13 15:35:55'),
(32, 1, '1', '2022-06-13 15:36:38'),
(33, 3, '1', '2022-06-13 15:36:38'),
(34, 1, '1', '2022-06-13 15:36:51'),
(35, 3, '1', '2022-06-13 15:36:51'),
(36, 1, '1', '2022-06-13 15:37:10'),
(37, 3, '1', '2022-06-13 15:37:10'),
(38, 1, '1', '2022-06-13 15:38:01'),
(39, 3, '1', '2022-06-13 15:38:01'),
(40, 1, '1', '2022-06-13 15:38:31'),
(41, 5, '2', '2022-06-13 15:38:31'),
(42, 6, '3', '2022-06-13 15:38:31'),
(43, 1, '2', '2022-06-13 19:17:12'),
(44, 1, '2', '2022-06-13 19:18:17'),
(45, 1, '2', '2022-06-13 19:20:29'),
(46, 1, '1', '2022-06-13 19:20:37'),
(47, 1, '1', '2022-06-13 19:26:33'),
(48, 1, '2', '2022-06-13 19:27:01'),
(49, 1, '2', '2022-06-13 19:28:05'),
(50, 1, '2', '2022-06-13 19:28:41'),
(51, 1, '2', '2022-06-13 19:31:28'),
(52, 1, '2', '2022-06-13 19:33:08'),
(53, 3, '2', '2022-06-13 19:33:58'),
(54, 3, '2', '2022-06-13 19:34:48'),
(55, 3, '2', '2022-06-13 19:37:24'),
(56, 1, '2', '2022-06-13 19:37:35'),
(57, 4, '2', '2022-06-13 19:37:48'),
(58, 1, '2', '2022-06-13 19:38:09'),
(59, 1, '2', '2022-06-13 19:40:08'),
(60, 3, '2', '2022-06-13 19:41:13'),
(61, 1, '2', '2022-06-13 19:41:28'),
(62, 1, '1', '2022-06-13 19:44:00'),
(63, 1, '1', '2022-06-13 19:46:03'),
(64, 1, '2', '2022-06-13 19:51:04'),
(65, 1, '2', '2022-06-13 19:56:56'),
(66, 1, '2', '2022-06-13 19:57:58'),
(67, 1, '2', '2022-06-13 19:59:10'),
(68, 1, '1', '2022-06-13 20:05:20'),
(69, 3, '1', '2022-06-13 20:05:26'),
(70, 1, '2', '2022-06-13 20:07:14'),
(71, 1, '', '2022-06-13 20:08:38'),
(72, 1, '', '2022-06-13 20:08:39'),
(73, 3, '', '2022-06-13 20:10:15'),
(74, 1, '1', '2022-06-13 20:14:45'),
(75, 1, '', '2022-06-13 20:15:44'),
(76, 1, '', '2022-06-13 20:17:08'),
(77, 1, '', '2022-06-13 20:18:50'),
(78, 1, '1', '2022-06-13 20:24:16'),
(79, 1, '', '2022-06-13 20:25:51'),
(80, 1, '', '2022-06-13 20:26:00'),
(81, 1, '1', '2022-06-13 20:26:57'),
(82, 1, '1', '2022-06-13 20:30:43'),
(83, 1, '1', '2022-06-13 20:34:35'),
(84, 1, '2', '2022-06-13 20:36:27'),
(85, 1, '1', '2022-06-13 20:38:38'),
(86, 1, '', '2022-06-13 20:44:43'),
(87, 1, '', '2022-06-13 20:44:50'),
(88, 1, '', '2022-06-13 20:45:15'),
(89, 1, '1', '2022-06-13 20:45:52'),
(90, 1, '1', '2022-06-13 20:45:55'),
(91, 1, '1', '2022-06-13 20:45:56'),
(92, 1, '1', '2022-06-13 20:57:11'),
(93, 1, '1', '2022-06-13 20:57:12'),
(94, 1, '1', '2022-06-13 20:57:55'),
(95, 1, '1', '2022-06-13 21:00:14'),
(96, 1, '1', '2022-06-13 21:00:47'),
(97, 1, '1', '2022-06-13 21:01:11'),
(98, 1, '1', '2022-06-13 21:04:09'),
(99, 1, '1', '2022-06-13 21:04:22'),
(100, 1, '1', '2022-06-13 21:05:01'),
(101, 1, '1', '2022-06-13 21:08:12'),
(102, 1, '1', '2022-06-13 21:09:15'),
(103, 1, '1', '2022-06-13 21:09:44'),
(104, 1, '1', '2022-06-13 21:10:50'),
(105, 1, '1', '2022-06-13 21:11:28'),
(106, 1, '1', '2022-06-13 21:14:18'),
(107, 1, '5', '2022-06-14 01:21:37'),
(108, 1, '1', '2022-06-14 19:54:20'),
(109, 3, '1', '2022-06-14 19:54:20'),
(110, 4, '1', '2022-06-14 19:54:20'),
(111, 1, '1', '2022-06-14 20:39:05'),
(112, 3, '1', '2022-06-14 20:39:05'),
(113, 4, '1', '2022-06-14 20:39:05'),
(114, 5, '1', '2022-06-14 20:39:05'),
(115, 13, '1', '2022-06-14 20:43:53'),
(116, 1, '1', '2022-06-14 20:44:07'),
(117, 1, '1', '2022-06-14 20:45:15'),
(118, 1, '1', '2022-06-14 20:52:45'),
(119, 3, '1', '2022-06-14 20:52:45'),
(120, 1, '1', '2022-06-14 20:53:09'),
(121, 3, '1', '2022-06-14 20:53:09'),
(122, 1, '1', '2022-06-15 00:22:35'),
(123, 1, '1', '2022-06-15 00:22:52'),
(124, 1, '1', '2022-06-15 00:23:17'),
(125, 1, '1', '2022-06-15 00:24:28'),
(126, 1, '1', '2022-06-15 00:25:34'),
(127, 1, '1', '2022-06-15 00:35:40'),
(128, 1, '1', '2022-06-15 00:36:15'),
(129, 1, '1', '2022-06-15 00:37:10'),
(130, 1, '1', '2022-06-15 00:41:11'),
(131, 1, '1', '2022-06-15 00:41:56'),
(132, 1, '1', '2022-06-15 00:47:30'),
(133, 1, '1', '2022-06-15 00:47:47'),
(134, 1, '1', '2022-06-15 00:48:04'),
(135, 1, '1', '2022-06-15 00:49:14'),
(136, 1, '1', '2022-06-15 00:49:50'),
(137, 1, '1', '2022-06-15 00:50:00'),
(138, 1, '1', '2022-06-15 00:50:27'),
(139, 1, '1', '2022-06-15 00:50:53'),
(140, 1, '1', '2022-06-15 00:52:57'),
(141, 1, '5', '2022-06-20 16:41:36'),
(142, 1, '1', '2022-06-20 16:42:56'),
(143, 3, '1', '2022-06-20 16:42:56'),
(144, 5, '1', '2022-06-20 16:42:56'),
(145, 1, '1', '2022-06-20 16:44:10'),
(146, 3, '1', '2022-06-20 16:44:10'),
(147, 4, '1', '2022-06-20 16:44:10'),
(148, 1, '1', '2022-06-20 16:47:54'),
(149, 3, '1', '2022-06-20 16:47:54'),
(150, 4, '1', '2022-06-20 16:47:54'),
(151, 1, '1', '2022-06-20 16:50:32'),
(152, 3, '2', '2022-06-20 16:50:32'),
(153, 4, '3', '2022-06-20 16:50:32'),
(154, 1, '1', '2022-06-20 16:50:41'),
(155, 1, '1', '2022-06-20 17:04:58'),
(156, 3, '1', '2022-06-20 17:04:58'),
(157, 4, '1', '2022-06-20 17:04:58'),
(158, 1, '1', '2022-06-20 18:01:38'),
(159, 3, '1', '2022-06-20 18:01:38'),
(160, 4, '1', '2022-06-20 18:01:38'),
(161, 5, '1', '2022-06-20 18:01:38'),
(162, 6, '1', '2022-06-20 18:01:38'),
(163, 19, '1', '2022-06-20 20:28:40'),
(164, 4, '1', '2022-06-20 22:19:21'),
(165, 7, '1', '2022-06-20 22:19:21'),
(166, 12, '1', '2022-06-20 22:19:21'),
(167, 14, '1', '2022-06-20 22:19:21'),
(168, 19, '1', '2022-06-20 22:19:21'),
(169, 1, '6', '2022-06-21 17:39:21'),
(170, 3, '1', '2022-06-21 17:39:22'),
(171, 5, '2', '2022-06-21 17:39:22'),
(172, 11, '2', '2022-06-21 17:39:22'),
(173, 13, '1', '2022-06-21 17:39:22'),
(174, 15, '1', '2022-06-21 17:39:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id_historial` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `mensaje` varchar(50) NOT NULL,
  `nombre_entidad` varchar(50) NOT NULL,
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id_historial`, `id_usuario`, `mensaje`, `nombre_entidad`, `creado_en`) VALUES
(2, 1, 'Se registró el producto', 'Frescolita', '2022-05-02 19:24:24'),
(3, 1, 'Se editó un producto', 'Frescolita', '2022-05-02 19:35:37'),
(4, 1, 'Se editó un producto', 'Mistilon 828ml', '2022-05-02 19:38:36'),
(5, 1, 'Se editó un producto', 'Mistilon 828', '2022-05-02 19:42:02'),
(6, 1, 'Se editó un producto', 'Mistilon 828ml', '2022-05-02 19:42:37'),
(7, 1, 'Se editó un producto', 'Mistilon 828ml', '2022-05-02 19:42:48'),
(8, 1, 'Se editó un producto', 'Mistilon 828ml', '2022-05-02 19:44:43'),
(9, 1, 'Se editó un producto', 'Mistilon 828', '2022-05-02 19:44:54'),
(10, 1, 'Se editó un producto', 'Mistilon 828ml', '2022-05-02 19:45:03'),
(11, 1, 'Se editó un producto', 'Mistilon 828', '2022-05-02 19:47:26'),
(12, 1, 'Se editó un producto', 'Mistilon 828ml', '2022-05-02 19:47:36'),
(16, 1, 'Se registró el producto', 'Coca Cola 1L', '2022-05-02 20:26:56'),
(17, 1, 'Se editó una categoria', 'Refrescos', '2022-05-02 20:28:09'),
(18, 1, 'Se registró una categoria', 'Chucherias', '2022-05-02 20:28:18'),
(19, 2, 'Se registró el producto', 'Doritos', '2022-05-02 20:48:12'),
(23, 1, 'Se editó un producto', 'Agua Minalba', '2022-05-08 16:03:05'),
(24, 1, 'Se editó un producto', 'Agua Minalva', '2022-05-08 16:03:21'),
(28, 1, 'Se borro un producto', 'Mistilon 828ml', '2022-05-08 16:20:01'),
(29, 1, 'Se registró un usuario', 'JMartinez904', '2022-05-08 17:47:21'),
(32, 1, 'Se editó un usuario', 'JMartinez', '2022-05-08 18:53:24'),
(34, 1, 'Se eliminó un usuario', 'admin', '2022-05-08 19:36:41'),
(35, 1, 'Se editó un producto', 'Mistilon 828ml', '2022-05-08 20:09:14'),
(36, 1, 'Se editó un producto', 'Mistilon 828ml', '2022-05-08 20:29:02'),
(37, 1, 'Se editó un producto', 'Mistilon 828ml', '2022-05-08 20:29:09'),
(39, 1, 'Se registró una entrada', 'Agua Minalva', '2022-05-08 21:05:05'),
(41, 1, 'Se editó un usuario', 'JMartinez', '2022-05-08 23:04:39'),
(43, 1, 'Se eliminó un producto', 'Mistilon 828ml', '2022-05-08 23:16:34'),
(45, 1, 'Se eliminó una categoria', 'prueba4', '2022-05-08 23:24:55'),
(46, 1, 'Se editaron los contactos', 'Ubicación', '2022-05-08 23:34:43'),
(48, 1, 'Se editaron los contactos', 'Teléfono', '2022-05-08 23:35:32'),
(49, 1, 'Se registró el producto', 'Pepsi 1L', '2022-05-11 01:23:02'),
(50, 1, 'Se registró el producto', 'Pan', '2022-05-11 01:24:04'),
(51, 1, 'Se editó un producto', 'Mistilon 828ml', '2022-05-11 02:28:19'),
(52, 1, 'Se eliminó un producto', 'Pan', '2022-05-11 03:12:52'),
(53, 1, 'Se eliminó un producto', 'Pan', '2022-05-11 03:29:22'),
(54, 1, 'Se registró el producto', 'Prueba', '2022-05-11 03:35:51'),
(55, 1, 'Se editó un producto', 'Mistilon 828ml', '2022-05-11 03:44:06'),
(56, 1, 'Se registró una entrada', '', '2022-05-11 03:44:54'),
(57, 1, 'Se registró una salida', '', '2022-05-11 03:45:01'),
(58, 1, 'Se registró el producto', 'adkadfk', '2022-05-11 03:53:11'),
(59, 1, 'Se eliminó un producto', 'adkadfk', '2022-05-11 03:53:59'),
(60, 1, 'Se editó un producto', 'Mistilon 828ml', '2022-05-11 03:55:53'),
(61, 1, 'Se editaron los contactos', 'Ubicación', '2022-05-11 03:56:34'),
(64, 1, 'Se registró una categoria', 'Herramientas', '2022-05-11 04:07:21'),
(65, 1, 'Se editó una categoria', 'Regalos', '2022-05-11 04:08:26'),
(66, 1, 'Se editó una categoria', 'Prueba', '2022-05-11 04:08:37'),
(67, 1, 'Se eliminó una categoria', 'Prueba', '2022-05-11 04:08:42'),
(68, 1, 'Se editó un usuario', 'JMartinez', '2022-05-11 04:12:40'),
(69, 1, 'Se registró un usuario', 'Cristhian123', '2022-05-11 04:14:36'),
(70, 1, 'Se eliminó un usuario', 'Cristhian123', '2022-05-11 04:14:46'),
(71, 1, 'Se eliminó una categoria', 'Regalos', '2022-05-14 20:18:09'),
(72, 1, 'Se editó una categoria', 'Chucherias', '2022-05-14 20:18:21'),
(73, 1, 'Se editó una categoria', 'Bebidas', '2022-05-14 20:18:59'),
(74, 1, 'Se eliminó una categoria', 'Bebidas', '2022-05-14 20:31:48'),
(75, 1, 'Se editó una categoria', 'Chucheria', '2022-05-17 02:12:22'),
(76, 1, 'Se editó una categoria', 'Chucherias', '2022-05-17 02:12:26'),
(77, 1, 'Se editó una categoria', 'Chucheria', '2022-05-17 02:12:36'),
(78, 1, 'Se editó una categoria', 'Chucherias', '2022-05-17 02:12:40'),
(79, 1, 'Se editó un producto', 'Mistilon 828mla', '2022-05-18 01:00:44'),
(80, 1, 'Se editó un producto', 'Mistilon 828ml', '2022-05-18 01:00:48'),
(81, 1, 'Se editó un producto', 'Mistilon 828mla', '2022-05-18 01:01:34'),
(82, 1, 'Se editó un producto', 'Mistilon 828ml', '2022-05-18 01:01:41'),
(83, 1, 'Se editó un producto', 'Mistilon 828ml', '2022-05-18 01:03:51'),
(84, 1, 'Se editó un producto', 'Mistolin 828ml', '2022-05-18 01:04:17'),
(85, 1, 'Se editó un producto', 'Chinotto 1L', '2022-05-18 01:04:21'),
(86, 1, 'Se editó un usuario', 'JMartinez', '2022-05-18 01:07:24'),
(87, 1, 'Se editó una categoria', 'Chucherias', '2022-05-18 01:07:59'),
(88, 1, 'Se editó un usuario', 'admin', '2022-05-18 01:26:58'),
(89, 1, 'Se editó un usuario', 'admin2', '2022-05-18 01:27:15'),
(90, 1, 'Se editó un usuario', 'JMartinez', '2022-05-18 01:46:59'),
(91, 1, 'Se eliminó un usuario', 'JMartinez', '2022-05-18 01:47:34'),
(92, 1, 'Se registró un usuario', 'JMartinez', '2022-05-18 01:50:13'),
(93, 1, 'Se editó un usuario', 'JMartinez', '2022-05-18 01:52:41'),
(94, 1, 'Se editó un usuario', 'JMartinez', '2022-05-18 01:52:51'),
(95, 1, 'Se editó un usuario', 'JMartinez', '2022-05-18 01:55:15'),
(96, 1, 'Se editó un usuario', 'JMartinez', '2022-05-18 01:55:24'),
(97, 1, 'Se registró un usuario', 'Cristhian123', '2022-05-18 01:56:21'),
(98, 1, 'Se editó un usuario', 'Cristhian123', '2022-05-18 01:56:30'),
(99, 1, 'Se editó un usuario', 'Cristhian123', '2022-05-18 01:56:38'),
(100, 1, 'Se eliminó un producto', 'Pepsi 1L', '2022-05-18 01:59:11'),
(101, 1, 'Se activó un producto', 'Pepsi 1L', '2022-05-18 01:59:18'),
(102, 1, 'Se editaron los contactos', 'Teléfono', '2022-05-18 02:06:08'),
(103, 1, 'Se editaron los contactos', 'Teléfono', '2022-05-18 02:06:10'),
(104, 1, 'Se eliminó un usuario', 'JMartinez', '2022-05-18 02:06:21'),
(105, 1, 'Se activó un usuario', 'JMartinez', '2022-05-18 02:06:27'),
(106, 1, 'Se eliminó un usuario', 'JMartinez', '2022-05-18 02:16:33'),
(107, 1, 'Se activó un usuario', 'JMartinez', '2022-05-18 02:16:52'),
(108, 1, 'Se editó un usuario', 'JMartinez', '2022-05-20 03:06:44'),
(109, 1, 'Se editó un usuario', 'JMartinez', '2022-05-20 03:07:05'),
(110, 1, 'Se editó un usuario', 'JMartinez', '2022-05-20 03:07:12'),
(111, 1, 'Se editó un usuario', 'JMartinez', '2022-05-20 03:07:21'),
(112, 1, 'Se eliminó un usuario', 'JMartinez', '2022-05-20 03:07:55'),
(113, 1, 'Se activó un usuario', 'JMartinez', '2022-05-20 03:07:58'),
(114, 1, 'Se editó un producto', 'Chinotto 1L', '2022-05-20 03:27:46'),
(115, 1, 'Se editó un producto', 'Chinotto 1L', '2022-05-20 03:29:51'),
(116, 1, 'Se editó un producto', 'Chinotto 1L', '2022-05-20 03:31:02'),
(117, 1, 'Se editó un producto', 'Chinotto 1L', '2022-05-20 03:31:40'),
(118, 1, 'Se editó un producto', 'Chinotto 1L', '2022-05-20 03:31:49'),
(119, 1, 'Se editó un producto', 'Mistolin 828ml', '2022-05-22 19:35:14'),
(120, 1, 'Se registró el producto', 'Sardinas enlatadas en salsa de tomate 170g', '2022-05-23 23:21:08'),
(121, 1, 'Se editó un producto', 'Sardinas enlatadas en salsa de tomate 170g', '2022-05-23 23:24:39'),
(122, 1, 'Se editó un producto', 'Mistolin 828ml', '2022-05-28 01:48:09'),
(123, 1, 'Se editó un usuario', 'JMartinez', '2022-05-28 02:34:06'),
(124, 1, 'Se editó un usuario', 'JMartinez', '2022-05-28 02:34:16'),
(125, 1, 'Se editó un usuario', 'JMartinez', '2022-05-28 02:45:00'),
(126, 1, 'Se editó un producto', 'Mistolin 828ml', '2022-05-28 03:05:40'),
(127, 1, 'Se editó un producto', 'Mistolin 828ml', '2022-05-28 03:05:48'),
(128, 1, 'Se registró el producto', 'Chupeta', '2022-05-28 03:16:18'),
(129, 1, 'Se editaron los contactos', 'Ubicación', '2022-05-28 23:57:29'),
(130, 1, 'Se registró el producto', 'Pasta', '2022-05-29 00:34:10'),
(131, 1, 'Se editó un producto', 'Pasta 500 gramos', '2022-05-29 00:34:43'),
(132, 1, 'Se editó un producto', 'Pasta 500 gramos', '2022-05-29 00:39:49'),
(133, 1, 'Se editó un producto', 'Pasta 500 gramos', '2022-05-29 00:40:47'),
(134, 1, 'Se editó un producto', 'Pasta 500 gramos', '2022-05-29 00:43:16'),
(135, 1, 'Se editó un producto', 'Chinotto 1L', '2022-05-29 00:44:13'),
(136, 1, 'Se editó un producto', 'Chinotto 1L', '2022-05-29 00:44:18'),
(137, 1, 'Se editó un producto', 'Chinotto 1L', '2022-05-29 00:45:39'),
(138, 1, 'Se editó un producto', 'Chinotto 1L', '2022-05-29 00:45:50'),
(139, 1, 'Se editó un producto', 'Mistolin 828ml', '2022-05-29 00:47:00'),
(140, 1, 'Se editó un producto', 'Mistolin 828ml', '2022-05-29 00:47:04'),
(141, 1, 'Se editó un producto', 'Mistolin 828ml', '2022-05-29 00:47:12'),
(142, 1, 'Se editó un producto', 'Mistolin 828ml', '2022-05-29 00:55:22'),
(143, 1, 'Se editó un producto', 'Mistolin 828ml', '2022-05-29 00:55:41'),
(144, 1, 'Se editó un producto', 'Mistolin 828ml', '2022-05-29 00:55:48'),
(145, 1, 'Se editó un producto', 'Mistolin 828ml', '2022-05-29 00:55:56'),
(146, 1, 'Se editó un producto', 'Mistolin 828ml', '2022-05-29 00:58:20'),
(147, 1, 'Se editó un producto', 'Mistolin 828ml', '2022-05-29 00:58:23'),
(148, 1, 'Se registró el producto', 'Jabon Las llaves', '2022-05-29 01:13:17'),
(149, 1, 'Se editó un producto', 'Mistolin 828ml', '2022-05-29 01:14:51'),
(150, 1, 'Se registró el producto', 'Gaytorade', '2022-05-29 01:19:17'),
(151, 1, 'Se eliminó un producto', 'Chinotto 1L', '2022-05-31 17:54:53'),
(152, 1, 'Se registró un usuario', 'JMartinez111', '2022-05-31 19:37:14'),
(153, 1, 'Se eliminó un usuario', 'Cristhian123', '2022-05-31 19:37:21'),
(154, 1, 'Se modificó la contraseña', 'admin', '2022-06-02 19:10:36'),
(155, 1, 'Se modificó un usuario', 'admin', '2022-06-02 19:11:35'),
(156, 1, 'Se modificó un usuario', 'admin', '2022-06-02 19:15:02'),
(157, 1, 'Se registró un usuario', 'Marquito12', '2022-06-02 19:16:03'),
(158, 8, 'Se modificó la contraseña', 'Marquito12', '2022-06-02 19:16:26'),
(159, 8, 'Se modificó la contraseña', 'Marquito12', '2022-06-02 19:17:42'),
(160, 1, 'Se registró el producto', 'Oreo', '2022-06-02 19:21:49'),
(161, 1, 'Se registró el producto', 'Galletas Renata', '2022-06-02 19:22:25'),
(162, 1, 'Se editó un producto', 'Galletas Renata', '2022-06-02 19:27:51'),
(163, 1, 'Se editó un producto', 'Mistolin 828ml', '2022-06-02 19:34:35'),
(164, 1, 'Se editó un producto', 'Sardinas enlatadas', '2022-06-02 19:36:04'),
(165, 1, 'Se registró el producto', 'Jabon', '2022-06-07 02:19:08'),
(166, 1, 'Se eliminó un producto', 'Jabon', '2022-06-07 02:19:22'),
(167, 1, 'Se editó un producto', 'Galletas Renata', '2022-06-07 17:12:51'),
(168, 1, 'Se editó un producto', 'Galletas Renata', '2022-06-07 17:12:57'),
(169, 1, 'Se registró el producto', 'Diablitos', '2022-06-11 22:14:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_sesion`
--

CREATE TABLE `historial_sesion` (
  `id_sesion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial_sesion`
--

INSERT INTO `historial_sesion` (`id_sesion`, `id_usuario`, `creado_en`) VALUES
(1, 1, '2022-05-08 19:20:37'),
(2, 1, '2022-05-08 19:20:59'),
(3, 1, '2022-05-08 20:46:39'),
(4, 1, '2022-05-08 23:22:59'),
(5, 1, '2022-05-09 00:12:49'),
(6, 1, '2022-05-09 22:17:47'),
(7, 1, '2022-05-09 22:34:28'),
(8, 1, '2022-05-09 22:34:38'),
(9, 1, '2022-05-09 22:36:09'),
(10, 1, '2022-05-17 02:03:24'),
(11, 1, '2022-05-17 02:03:28'),
(12, 1, '2022-05-17 02:03:52'),
(13, 1, '2022-05-17 02:07:34'),
(14, 1, '2022-05-18 00:17:23'),
(15, 1, '2022-05-20 03:02:03'),
(16, 1, '2022-05-20 16:45:25'),
(17, 1, '2022-05-22 18:32:25'),
(18, 1, '2022-05-23 23:20:10'),
(19, 1, '2022-05-25 21:35:34'),
(20, 1, '2022-05-26 02:00:32'),
(21, 1, '2022-05-26 21:41:00'),
(22, 1, '2022-05-28 23:57:05'),
(23, 1, '2022-05-29 16:11:43'),
(24, 1, '2022-05-29 21:18:37'),
(25, 1, '2022-05-29 22:10:06'),
(26, 1, '2022-05-30 19:16:17'),
(27, 1, '2022-06-01 18:55:34'),
(28, 1, '2022-06-02 19:07:53'),
(29, 8, '2022-06-02 19:16:10'),
(30, 8, '2022-06-02 19:17:53'),
(31, 1, '2022-06-02 19:20:23'),
(32, 1, '2022-06-07 00:42:47'),
(33, 1, '2022-06-11 18:58:52'),
(34, 1, '2022-06-14 19:38:41'),
(35, 1, '2022-06-20 15:58:16'),
(36, 1, '2022-06-20 19:22:49'),
(37, 1, '2022-06-23 22:08:57'),
(38, 1, '2022-07-02 00:55:40'),
(39, 1, '2022-07-02 02:21:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `id_informacion` int(11) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`id_informacion`, `telefono`, `ubicacion`) VALUES
(1, '+58 111 222 333', 'Av. Perimetral, Carúpano 6150, Sucre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_personal`, `id_usuario`, `nombre`, `apellido`, `cedula`, `direccion`, `estado`) VALUES
(1, 1, 'John', 'Doe', '11222333', 'John Doe 123 Main St Anytown, USA', 1),
(2, 2, 'Jane', 'Doe', '12345678', 'Jane Doe 123 Main St Anytown, USA', 1),
(5, 5, 'José', 'Martínez ', '61621612', 'Sol del Caribe', 1),
(6, 6, 'Cristhian', 'Flores', '28201199', 'San Martin', 0),
(7, 7, 'José', 'Martínez ', '18180282', 'El Muco', 1),
(8, 8, 'Mark', 'Zuckerberg', '21021210', 'Sol del Caribe', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `nom_producto` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `imagen` text NOT NULL,
  `precio` varchar(50) NOT NULL,
  `cantidad` varchar(50) NOT NULL DEFAULT '0',
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `categoria`, `nom_producto`, `descripcion`, `imagen`, `precio`, `cantidad`, `estado`) VALUES
(1, 2, 'Mistolin 828ml', 'Producto de limpieza para cualquier tipo de superficie', 'mistolin.webp', '1', '112', 1),
(2, 3, 'Chinotto 1L', '', 'chinotto.jpg', '3', '60', 0),
(3, 3, 'Frescolita', 'Producto de Mar Caribe Center', 'Frescolita.jpg', '5', '100', 1),
(4, 3, 'Coca Cola 1L', 'Producto de Mar Caribe Center', 'cocacola.jpg', '1', '26', 1),
(5, 4, 'Doritos', 'Producto de Mar Caribe Center', 'doritos.jpg', '4', '40', 1),
(6, 1, 'Agua Minalva', 'Producto de Mar Caribe Center', 'Minalva.png', '3', '103', 1),
(7, 3, 'Pepsi 1L', 'Producto de Mar Caribe Center', 'pepsi.jpg', '2', '11', 1),
(11, 4, 'Sardinas enlatadas', 'Sardinas enlatadas en salsa de tomate con un contenido de 180 gramos.', 'sardinas-salsa-tomate-margarita-170g.jpg', '3', '35', 1),
(12, 4, 'Chupeta', 'Producto de Mar Caribe Center', 'chupeta-big-bom-mora.jpg', '1.5', '2', 1),
(13, 1, 'Pasta 500 gramos', '', 'spaghetti.webp', '1.5', '3', 1),
(14, 2, 'Jabon Las llaves', 'Producto de Mar Caribe Center', 'jabonlasllaves.jpg', '1', '2', 1),
(15, 4, 'Gaytorade', 'Producto de Mar Caribe Center', '100691355.jpg', '1.5', '2', 1),
(16, 4, 'Oreo', 'Producto de Mar Caribe Center', 'descarga (1).jpg', '0.5', '1', 1),
(17, 4, 'Galletas Renata', 'Producto de Mar Caribe Center', 'descarga (2).jpg', '0.3', '1', 1),
(18, 2, 'Jabon', 'Producto de Mar Caribe Center', 'descarga (2).jpg', '0.5', '1', 0),
(19, 1, 'Diablitos', 'Producto de Mar Caribe Center', 'descarga.jfif', '0.3', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nom_rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nom_rol`) VALUES
(1, 'Administrador'),
(2, 'Operador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salida`
--

CREATE TABLE `salida` (
  `id_salida` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad_salida` varchar(50) NOT NULL,
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `salida`
--

INSERT INTO `salida` (`id_salida`, `id_producto`, `cantidad_salida`, `creado_en`) VALUES
(1, 2, '5', '2022-05-02 20:30:38'),
(2, 1, '10', '2022-05-08 21:10:57'),
(3, 1, '10', '2022-05-11 03:45:01'),
(4, 1, '5', '2022-05-11 03:58:50'),
(5, 1, '3', '2022-05-17 02:27:29'),
(6, 1, '11', '2022-05-18 02:02:21'),
(7, 1, '20', '2022-05-18 02:02:27'),
(8, 4, '5', '2022-06-13 02:36:17'),
(9, 19, '1', '2022-06-20 20:54:52'),
(10, 1, '1', '2022-06-20 22:11:01'),
(11, 3, '1', '2022-06-20 22:11:01'),
(12, 4, '1', '2022-06-20 22:11:02'),
(13, 1, '1', '2022-06-20 22:11:23'),
(14, 1, '1', '2022-06-20 22:11:58'),
(15, 1, '1', '2022-06-20 22:12:38'),
(16, 1, '1', '2022-06-20 22:12:45'),
(17, 3, '1', '2022-06-20 22:13:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `id_telefono` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `telefono`
--

INSERT INTO `telefono` (`id_telefono`, `id_personal`, `telefono`, `estado`) VALUES
(5, 5, '0424868613', 1),
(7, 6, '0412757237', 0),
(9, 7, '041269201', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `rol_usuario` int(11) NOT NULL DEFAULT 2,
  `nom_usuario` varchar(50) NOT NULL,
  `contrasenia` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `rol_usuario`, `nom_usuario`, `contrasenia`, `estado`) VALUES
(1, 1, 'admin', 'Administrador2', 1),
(2, 1, 'admin2', 'Administrador2', 1),
(5, 2, 'JMartinez', 'Martinez123', 1),
(6, 2, 'Cristhian123', 'password1', 0),
(7, 2, 'JMartinez111', 'TEST1234', 1),
(8, 2, 'Marquito12', 'Marquito13', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `contador`
--
ALTER TABLE `contador`
  ADD PRIMARY KEY (`pageview_id`);

--
-- Indices de la tabla `correo`
--
ALTER TABLE `correo`
  ADD PRIMARY KEY (`id_correo`),
  ADD KEY `correo_personal` (`id_personal`);

--
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`id_entrada`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id_historial`),
  ADD KEY `historial_usuario` (`id_usuario`);

--
-- Indices de la tabla `historial_sesion`
--
ALTER TABLE `historial_sesion`
  ADD PRIMARY KEY (`id_sesion`),
  ADD KEY `sesion_usuario` (`id_usuario`);

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD PRIMARY KEY (`id_informacion`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`),
  ADD KEY `personal_usuario` (`id_usuario`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `nom_producto` (`nom_producto`,`estado`) USING BTREE,
  ADD KEY `categoria` (`categoria`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `salida`
--
ALTER TABLE `salida`
  ADD PRIMARY KEY (`id_salida`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`id_telefono`),
  ADD KEY `telefono_personal` (`id_personal`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `rol_usuario` (`rol_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `contador`
--
ALTER TABLE `contador`
  MODIFY `pageview_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `correo`
--
ALTER TABLE `correo`
  MODIFY `id_correo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id_entrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id_historial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT de la tabla `historial_sesion`
--
ALTER TABLE `historial_sesion`
  MODIFY `id_sesion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `id_informacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `salida`
--
ALTER TABLE `salida`
  MODIFY `id_salida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `telefono`
--
ALTER TABLE `telefono`
  MODIFY `id_telefono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `correo`
--
ALTER TABLE `correo`
  ADD CONSTRAINT `correo_ibfk_1` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`);

--
-- Filtros para la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `entrada_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `historial_sesion`
--
ALTER TABLE `historial_sesion`
  ADD CONSTRAINT `historial_sesion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `salida`
--
ALTER TABLE `salida`
  ADD CONSTRAINT `salida_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `telefono_ibfk_1` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol_usuario`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
