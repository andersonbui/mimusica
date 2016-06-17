-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-06-2016 a las 01:10:08
-- Versión del servidor: 5.5.49-0+deb8u1
-- Versión de PHP: 5.6.20-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dbyii`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` int(11) NOT NULL DEFAULT '1',
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `password_hash`, `username`, `apellidos`, `nombres`, `foto`, `tipo`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`, `flags`) VALUES
(1, 'andersonbuitron@unicauca.edu.co', '$2y$12$IMysC0ghikNJXYMbf7SFK.AKqLy5NecqJ0Q9L4.DNQOuE3roe4g6K', 'andersonb', '', 'anderson', NULL, 0, 'SeRSnDE9dz7YcWCjrYCYUFsksV2kIfX4', 1, NULL, NULL, '::1', 1463078216, 1463078216, 0),
(2, 'andersonbuitron@unicauca.edu', '$2y$12$4pQARZ/CUUSoKSl01qsC7.Xp5O7.yzMwL/A7NFXjOj4kwXZgvLU86', 'andersonbui', '', 'andersonbui', NULL, 0, 'qi1ifNKG8itWXC30xBw61-R35xcFE_Q9', NULL, NULL, NULL, '::1', 1463957974, 1463957974, 0),
(3, '574280e0e8b88@mailbox80.biz', '$2y$12$ycTQjI43WPjvCRs7ftAd.e0DWs/aYsHYZPYZ0HlXdG/5q/ayb6FSy', 'panchita', '', 'panchita', NULL, 0, 'XJ4p8p53Vdz_u6eH-NzKdONuzhastugt', 1463958168, NULL, NULL, '::1', 1463958146, 1463958146, 0),
(4, 'pancho1234@fleckens.hu', '$2y$12$F1WFcJ061Jb8nFI/I/Lzq.l8YEods4K9u14k0qsT5WCvcVms4Mqda', 'pancho', '', 'pancho', NULL, 0, '4xJcczxLMV4PUAYFND0xUF4FA5fP3FAz', 1463961872, NULL, NULL, '::1', 1463961775, 1463961775, 0),
(5, 'pancho123456@fleckens.hu', '$2y$12$wYviIDem1P4ZK9Nv2AnGcuKzup7XQCEwiwmJsCTiQHGx..JN.1CGO', 'pancho123456', '', 'pancho123456', NULL, 0, 'ddPJfJMQy1FDKkncfsBMUvnTN_m6RIrV', 1463963877, NULL, NULL, '::1', 1463963411, 1463963411, 0),
(6, 'Suce1992@armyspy.com', '$2y$12$TL0CIVTIqhoGgRJqg8Yr8O1X6UlAmu99Yyc2UTc7dMk/ChjrxQDD.', 'Suce1992', '', 'Suce', NULL, 0, 'cSO11VdCFIyXRjKSSeKAypImxx2u7rXa', 1463963985, NULL, NULL, '::1', 1463963967, 1463963967, 0),
(10, 'eloisa@mohmal.com', '$2y$12$JIY3hoL39CYOmoJHbviP0elhXKjeVvIDXjCI4.B3JrxPcDEPyhOmu', 'eloisa', '', 'eloisa', NULL, 0, 'ParzyCb8yksx1mVp3XmbdyDql-BBG2CI', 1463965925, NULL, NULL, '::1', 1463965909, 1463965909, 0),
(29, 'andersonadmin@mailbox80.biz', '$2y$12$9Xyz2Zkw.aF0FsnWLNN4ke2XPOdAp0A.k9BXizUXDfsyYfFhye9vK', 'anderson', 'buitron', 'andersonadmin1', NULL, 1, 'XbNN1zk2gSfdo7j4oSU7KnRnLfPhbecS', 1464449105, NULL, NULL, '::1', 1464448550, 1464448550, 0),
(30, 'yesmirocio222@mailbox80.biz', '$2y$12$9czyBCu8Cju8h9aXwEZojuP3gz.tWt70cRfTw.zuajFiPNw1SToiy', 'yesrocio', '', '', NULL, 1, 'STw1rZnKb-a9F2PTMfwWfryy6FPHNMaX', 1464653462, NULL, NULL, '::1', 1464653379, 1464939387, 0),
(32, 'yesmirocio225@mailbox80.biz', '$2y$12$EHrDqq/XkPinm6UQfOqJVeKVg2TRW9ro562Mq2TBq66F.i6gMBy/W', 'yesro', '', '', NULL, 1, 'stXjfUqjbtZSWmrX5klMyyqSqTqshal-', 1464921104, NULL, NULL, '::1', 1464921090, 1464944047, 0),
(33, 'ealvear@unicauca.edu.co', '$2y$12$mi/YQuNuBh2Es9zd/TiImehF4xHQtU.b97BxAU7dYXlLQD7kuXuoG', 'alvear', '', '', NULL, 1, 'r-nfoWHjzWJTxzGk2HkiEIQG_8G_4Vvw', 1464942266, NULL, NULL, '10.131.0.3', 1464942189, 1464942189, 0),
(35, 'yesmirocio226@mailbox80.biz', '$2y$12$vx.OkTlhkKb40nkDn3mDvOnsWLG70Mw6UbNg1FvUI5GDYKarQETB2', 'yesmi', '', '', NULL, 1, 'xHh2oPDKsYnpLOPhvqPQQxSar75if43F', 1465005746, NULL, NULL, '192.168.0.15', 1465005708, 1465005708, 0),
(36, 'yesmirocio123@mailbox80.biz', '$2y$12$EIvDKafRKBmbLPRKimk6HO57E8/15MRzvZjVJxEdlSth/sbzdyLIW', 'yesmi123', '', '', NULL, 1, '4kERUkSkETvc_BLLJZWa8Wyj4CKHX1R4', 1465371835, NULL, NULL, '::1', 1465367921, 1465367921, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `user_unique_email` (`email`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
