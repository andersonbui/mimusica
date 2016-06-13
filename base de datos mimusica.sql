-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-06-2016 a las 16:01:40
-- Versión del servidor: 5.5.46-0+deb8u1
-- Versión de PHP: 5.6.19-0+deb8u1

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
-- Estructura de tabla para la tabla `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancion`
--

CREATE TABLE IF NOT EXISTS `cancion` (
  `id_cancion` int(11) NOT NULL,
  `autor` char(100) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `titulo` char(50) NOT NULL,
  `genero` char(50) NOT NULL,
  `album` char(50) DEFAULT NULL,
  `anioCreacion` int(11) NOT NULL,
  `video` char(100) DEFAULT NULL,
  `audio` char(100) DEFAULT NULL,
  `fecha_subida` date DEFAULT NULL,
  `letra` text NOT NULL,
  `total_reproduciones` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cancion`
--

INSERT INTO `cancion` (`id_cancion`, `autor`, `email`, `titulo`, `genero`, `album`, `anioCreacion`, `video`, `audio`, `fecha_subida`, `letra`, `total_reproduciones`) VALUES
(1, 'Luis Fonsi', 'luisfonsi@hotmail.es', 'No Me Doy Por Vencido', 'romantica', NULL, 2002, 'https://www.youtube.com/embed/8hRGBcr_gJc', NULL, '2016-06-01', 'Me quedo callado\r\nSoy como un niño dormido\r\nQue puede despertarse\r\nCon apenas sólo un ruido\r\nCuando menos te lo esperas\r\nCuando menos lo imagino\r\nSé que un día no me aguanto y voy y te miro\r\n\r\nY te lo digo a los gritos\r\nY te ríes y me tomas por un loco atrevido\r\nPues no sabes cuanto tiempo en mis sueños has vivido\r\nNi sospechas cuando te nombré\r\n\r\nNo, yo no me doy por vencido\r\nYo quiero un mundo contigo\r\nJuro que vale la pena esperar, y esperar y esperar un suspiro\r\nUna señal del destino\r\nNo me canso, no me rindo, no me doy por vencido\r\n\r\nTengo una flor de bolsillo,\r\nMarchita de buscar a una mujer que me quiera\r\nY reciba su perfume hasta traer la primavera\r\nY me enseñe lo que no aprendí de la vida\r\nQue brilla más cada día,\r\nPorque estoy tan sólo a un paso de ganarme la alegría\r\nPorque el corazón levanta una tormenta enfurecida\r\nDesde aquel momento en que te ví?\r\n\r\nNo, yo no me doy por vencido\r\nYo quiero un mundo contigo\r\nJuro que vale la pena esperar, y esperar y esperar un suspiro\r\nUna señal del destino\r\nNo me canso, no me rindo, no me doy por vencido\r\nEste silencio esconde demasiadas palabras\r\nNo me detengo, pase lo que pase seguiré\r\n\r\nNo, yo no me doy por vencido\r\nYo quiero un mundo contigo\r\nJuro que vale la pena esperar, y esperar y esperar un suspiro\r\nUna señal del destino\r\nNo me canso, no me rindo, no me doy por vencido.', '2'),
(2, 'Luis Fonsi, Juan Luis Guerra', 'luisfonsi@hotmail.es', 'Llegaste Tu ___', 'romantica', NULL, 2002, 'https://www.youtube.com/embed/weKJWqw8-3g', NULL, '2016-06-09', 'Desde que llegaste, vida\r\nMe susurran los silencios\r\nLas flores renacen\r\nApenas sube el sol\r\nSe ríen del invierno\r\n\r\nDesde que llegaste, vida\r\nLe hemos hecho trampa al tiempo\r\nMi cura es tu abrazo\r\nTu suspiro una canción\r\nQue me arrulla como el viento\r\nYo soy el hombre más afortunado\r\nMe ha tocado ser\r\nEl que conoce cada línea de tu mano\r\nEl que te cuida y camina a tu lado\r\n\r\nTodo cambió por ti\r\nTodo es amor por ti\r\nMi corazón te abrí\r\nDesde entonces llevo el cielo dentro de mí\r\nNunca jamás sentí\r\nUna alegría así\r\nQue bendición hallarte\r\nAl instante en que se fue la luz\r\nLlegaste tú\r\n\r\nMe despierto agradecido\r\nCon tu aire yo respiro\r\nTu sueño y el mío\r\nSe mezclan en las noches\r\nComo mares en los ríos\r\n\r\nYo soy el hombre más afortunado\r\nMe ha tocado ser\r\nEl que conoce cada línea de tu mano\r\nEl que te cuida y camina a tu lado\r\nTodo cambió por ti\r\nTodo es amor por ti\r\nMi corazón te abrí\r\nDesde entonces llevo el cielo dentro de mí\r\n\r\nNunca jamás sentí\r\nUna alegría así\r\nQue bendición hallarte\r\nAl instante en que se fue la luz\r\nLlegaste tú\r\nQue bendición hallarte\r\nAl instante en que se fue la luz\r\nLlegaste tú', '2'),
(3, 'Juan Luis Guerra', 'luisguerra@hotmail.es', 'Frío, Frío', 'merengue', NULL, 2002, 'https://www.youtube.com/embed/zHhza3EgHe8', NULL, '2016-04-14', 'Tu amor es tan\r\nCompletamente tierno\r\nForjado de recuerdos\r\nY sin saber es cielo en la ventana\r\nQue me abre la mañana\r\n\r\nTu amor me parte en dos el occidente\r\nMe clava de repente\r\nY me convierte en masa que se amolda\r\nA una ilusión ardiente\r\n\r\nDime si mastico el verde menta de tu voz\r\nO le pego un parcho a mi alma\r\nÁtame al pulgar derecho de tu corazón\r\nY dime como esta mi amor en tu amor\r\n\r\nFrío, frío (frío) como el agua del rio (frío)\r\nO caliente como agua de la fuente\r\nTibio, tibio (tibio) como un beso que calla\r\nY se enciende si es que acaso le quieres\r\n\r\nTu amor despierta y lava su carita\r\nDe rosas me salpica\r\nY sin saber es una vía láctea\r\nQue vira y me da vida\r\n\r\nTu amor lo guardo dentro de mis ojos\r\nComo una lagrimita\r\nY no los lloro para que no salgan\r\nTus besos de mi vista\r\n\r\nDime si mastico el verde menta de tu voz\r\nO le pego un parcho a mi alma\r\nÁtame al pulgar derecho de tu corazón\r\nY dime como esta mi amor en tu amor\r\n\r\nFrío, frío (frío) como el agua del rio (frío)\r\nO caliente como agua de la fuente\r\nTibio, tibio (tibio) como un beso que calla\r\nY se enciende si es que acaso le quieres\r\n\r\nPudiera ser un farolito\r\nY encender tu luz\r\nHasta que quieras tu\r\n\r\nFrío, frío (frío) como el agua del rio (frío)\r\nO caliente como agua de la fuente\r\nTibio, tibio (tibio) como un beso que calla\r\nY se enciende si es que acaso le quieres\r\n\r\nFrío, frío (frío) como el agua del rio (frío)\r\nO caliente como agua de la fuente\r\nTibio, tibio (tibio) como un beso que calla\r\nY se enciende si es que acaso le quieres', '2'),
(4, 'Luan Santana', 'luisguerra@hotmail.es', 'Tudo Que Você Quiser', 'sertanejo', NULL, 2002, 'https://www.youtube.com/embed/-YzDsDMYqdw', NULL, '2016-03-09', 'Tem dias que eu acordo pensando em você\r\nEm fração de segundos vejo o mundo desabar\r\nAí que cai a ficha que eu não vou te ver\r\nSerá que esse vazio um dia vai me abandonar?\r\n\r\nTem gente que tem cheiro de rosa, de avelã\r\nTem o perfume doce de toda manhã\r\nVocê tem tudo, você tem muito\r\n\r\nMuito mais que um dia eu sonhei pra mim\r\nTem a pureza de um anjo querubim\r\nEu trocaria tudo pra te ter aqui\r\n\r\nEu troco minha paz por um beijo seu\r\nEu troco meu destino pra viver o seu\r\nEu troco minha cama pra dormir na sua\r\nEu troco mil estrelas pra te dar a lua\r\nE tudo que você quiser\r\nE se você quiser te dou meu sobrenome\r\n\r\nTem gente que tem cheiro de rosa, de avelã\r\nTem o perfume doce de toda manhã\r\nVocê tem tudo, você tem muito\r\n\r\nMuito mais que um dia eu sonhei pra mim\r\nTem a pureza de um anjo querubim\r\nEu trocaria tudo pra te ter aqui\r\n\r\nEu troco minha paz por um beijo seu\r\nEu troco meu destino pra viver o seu\r\nEu troco minha cama pra dormir na sua\r\nEu troco mil estrelas pra te dar a lua\r\nE tudo que você quiser\r\nE se você quiser, te dou meu sobrenome\r\n\r\nEu troco minha paz por um beijo seu\r\nEu troco meu destino pra viver o seu\r\nEu troco minha cama pra dormir na sua\r\nEu troco mil estrelas pra te dar a lua\r\nE tudo que você quiser\r\nE se você quiser te dou meu sobrenome', '2'),
(5, 'Paula Fernandez', 'luisfonsi@hotmail.es', 'Não Fui Eu', 'romantica', NULL, 2002, 'https://www.youtube.com/embed/-DZxdR2FB00', NULL, '2016-06-13', 'Ei, escuta, para de agir feito criança\r\nEscuta, sinto em te dizer, mas foi você quem procurou\r\nQuem partiu um coração, não fui eu\r\n\r\nEi, escuta, tudo nesse vida tem seu preço\r\nEscuta, se chegou a hora de colher o que plantou\r\nVocê mesmo quem regou, não fui eu\r\nNão fui eu\r\n\r\nEu sei o que dirá\r\nVai me culpar\r\nPor um erro seu\r\nSe alguém me perguntar\r\nIrei dizer que não fui eu\r\nNão fui eu\r\n\r\nEi, escuta, para de agir feito criança\r\nEscuta, sinto em te dizer, mas foi você quem procurou\r\nQuem partiu um coração, não fui eu\r\n\r\nEi, escuta, tudo nesse vida tem seu preço\r\nEscuta, se chegou a hora de colher o que plantou\r\nVocê mesmo quem regou, não fui eu\r\nNão fui eu\r\n\r\nEu sei o que dirá\r\nVai me culpar\r\nPor um erro seu\r\nSe alguém me perguntar\r\nIrei dizer que não fui eu\r\nNão fui eu\r\n\r\nNão fui eu quem desistiu dos nossos sonhos\r\nNão fui eu quem destruiu nossa esperança\r\nNão fui eu quem fez meus olhos mergulhados por mentiras\r\nVai dizer que era isso que eu queria\r\n\r\nEu sei o que dirá\r\nVai me culpar\r\nPor um erro seu\r\n\r\nEu sei o que dirá\r\nVai me culpar\r\nPor um erro seu\r\nSe alguém me perguntar\r\nIrei dizer que não fui eu\r\n\r\nEu sei o que dirá\r\nVai me culpar\r\nPor um erro seu\r\nSe alguém me perguntar\r\nIrei dizer que não fui eu\r\nNão fui eu\r\nNão fui eu\r\nNão fui eu\r\nNão fui eu\r\nNão fui eu\r\nNão fui eu\r\nNão fui eu', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comento_cancion`
--

CREATE TABLE IF NOT EXISTS `comento_cancion` (
  `email` char(50) NOT NULL,
  `id_cancion` int(11) NOT NULL,
  `comentario` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluo_cancion`
--

CREATE TABLE IF NOT EXISTS `evaluo_cancion` (
  `email` char(50) NOT NULL,
  `id_cancion` int(11) NOT NULL,
  `calificacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje_a_admin`
--

CREATE TABLE IF NOT EXISTS `mensaje_a_admin` (
  `leido` tinyint(1) NOT NULL,
  `fecha_envio` date NOT NULL,
  `id_mensaje` int(11) NOT NULL,
  `email` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1463074977),
('m140209_132017_init', 1463074983),
('m140403_174025_create_account_table', 1463074984),
('m140504_113157_update_tables', 1463074986),
('m140504_130429_create_token_table', 1463074986),
('m140506_102106_rbac_init', 1465084456),
('m140830_171933_fix_ip_field', 1463074987),
('m140830_172703_change_account_table_name', 1463074987),
('m141222_110026_update_ip_field', 1463074987),
('m141222_135246_alter_username_length', 1463074988),
('m150614_103145_update_social_account_table', 1463074989),
('m150623_212711_fix_username_notnull', 1463074989);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `user_id` int(11) NOT NULL,
  `nombres` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidos` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo_crop` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo_cropped` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`user_id`, `nombres`, `apellidos`, `foto`, `photo_crop`, `photo_cropped`) VALUES
(29, 'yesmia', '', 'upload/imagenes/yesmi123.jpg', '', ''),
(30, NULL, NULL, NULL, '', ''),
(31, NULL, NULL, NULL, '', ''),
(32, 'yesmi rocio', 'Melendez', 'upload/imagenes/yesro.jpg', '', ''),
(33, NULL, NULL, NULL, '', ''),
(35, '', '', '', '', ''),
(36, 'yesmia', '', 'upload/imagenes/yesmi123.jpg', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_id` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `profile`
--

INSERT INTO `profile` (`user_id`, `name`, `public_email`, `gravatar_email`, `gravatar_id`, `location`, `website`, `bio`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `social_account`
--

CREATE TABLE IF NOT EXISTS `social_account` (
`id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `code` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `token`
--

CREATE TABLE IF NOT EXISTS `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `token`
--

INSERT INTO `token` (`user_id`, `code`, `created_at`, `type`) VALUES
(1, 'bRMkobhvp2L7QWlONczBzlrdRumsp3xm', 1463078217, 0),
(1, 'CxFbjOc2TSy5joJtj5sClnmpn0_sbRsY', 1464333809, 1),
(2, 'pK6WOwR_ZLRU94p9dP1Af8z6m1NCfYlI', 1463957974, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_artista`
--

CREATE TABLE IF NOT EXISTS `t_artista` (
  `nombre_autor` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_estado_usuario`
--

CREATE TABLE IF NOT EXISTS `t_estado_usuario` (
  `estado` int(11) NOT NULL,
  `nombre_estado` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_estado_usuario`
--

INSERT INTO `t_estado_usuario` (`estado`, `nombre_estado`) VALUES
(0, 'INACTIVO'),
(1, 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `t_tipo_usuario` (
  `tipo_usuario` int(11) NOT NULL DEFAULT '1',
  `nombre_tipo` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `t_tipo_usuario`
--

INSERT INTO `t_tipo_usuario` (`tipo_usuario`, `nombre_tipo`) VALUES
(1, 'Usuario'),
(2, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE IF NOT EXISTS `t_usuarios` (
`id_tusuario` int(11) NOT NULL,
  `email` char(50) CHARACTER SET latin1 NOT NULL,
  `password` char(30) CHARACTER SET latin1 NOT NULL,
  `nombres` char(50) CHARACTER SET latin1 NOT NULL,
  `apellidos` char(50) CHARACTER SET latin1 DEFAULT NULL,
  `apodo` char(30) CHARACTER SET latin1 NOT NULL,
  `foto` char(255) CHARACTER SET latin1 DEFAULT NULL,
  `tipo` int(11) NOT NULL DEFAULT '1',
  `estado` int(11) NOT NULL DEFAULT '0',
  `codigo_verificacion` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `accessToken` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `authKey` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1721 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`id_tusuario`, `email`, `password`, `nombres`, `apellidos`, `apodo`, `foto`, `tipo`, `estado`, `codigo_verificacion`, `accessToken`, `authKey`) VALUES
(1710, 'vpolitisc@hotmail.com', '12345', 'VERONICA', 'POLITIS', 'VERONICA', 'foto', 1, 1, '12345', '12345', '12345'),
(1711, 'vseyler@pedrodevaldivia.cl', '12345', 'VIRGINIA', 'SEYLER', 'VIRGINIA', 'foto', 1, 1, '12345', '12345', '12345'),
(1712, 'x.josegonzalez@gmail.com', '12345', 'JOSE', 'GONZALEZ', 'JOSE', 'foto', 1, 1, '12345', '12345', '12345'),
(1713, 'x.the.paula.x@hotmail.com', '12345', 'PAULA', 'VILLALON', 'PAULA', 'foto', 1, 1, '12345', '12345', '12345'),
(1714, 'xfreitte@gmail.com', '12345', 'XIMENA', 'FREITE', 'XIMENA', 'foto', 1, 1, '12345', '12345', '12345'),
(1715, 'xicagogo@yahoo.es', '12345', 'XIMENA', 'GOMARA', 'XIMENA', 'foto', 1, 1, '12345', '12345', '12345'),
(1716, 'xpashii@hotmail.com', '12345', 'MARCELA', 'ZANDOVAL', 'MARCELA', 'foto', 1, 1, '12345', '12345', '12345'),
(1717, 'xroca@bancochile.cl', '12345', 'XIMENA', 'ROCA', 'XIMENA', 'foto', 1, 1, '12345', '12345', '12345'),
(1718, 'yaz_antu@yahoo.com', '12345', 'YASMIN', 'CABBADA', 'YASMIN', 'foto', 1, 1, '12345', '12345', '12345'),
(1719, 'ana@gmail.com', '123456789', 'ana', 'tobar', 'ana', NULL, 1, 0, NULL, NULL, NULL),
(1720, 'luisaben@hotmail.es', '123456789', 'luisa', 'benites', 'luisa', NULL, 1, 0, NULL, NULL, NULL);

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
(2, 'andersonbuitron@unicauca.edu', '$2y$12$4pQARZ/CUUSoKSl01qsC7.Xp5O7.yzMwL/A7NFXjOj4kwXZgvLU86', 'andersonbui', '', 'andersonbui', NULL, 0, 'pK0tFUy4ZUks06F-cJuoA65hrl4zJbSI', NULL, NULL, NULL, '::1', 1463957974, 1463957974, 0),
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
-- Indices de la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
 ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indices de la tabla `auth_item`
--
ALTER TABLE `auth_item`
 ADD PRIMARY KEY (`name`), ADD KEY `rule_name` (`rule_name`), ADD KEY `idx-auth_item-type` (`type`);

--
-- Indices de la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
 ADD PRIMARY KEY (`parent`,`child`), ADD KEY `child` (`child`);

--
-- Indices de la tabla `auth_rule`
--
ALTER TABLE `auth_rule`
 ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `cancion`
--
ALTER TABLE `cancion`
 ADD PRIMARY KEY (`id_cancion`), ADD KEY `FK_es_autor_de` (`autor`), ADD KEY `FK_subio_cancion` (`email`);

--
-- Indices de la tabla `comento_cancion`
--
ALTER TABLE `comento_cancion`
 ADD PRIMARY KEY (`email`,`id_cancion`), ADD KEY `FK_comento_cancion2` (`id_cancion`);

--
-- Indices de la tabla `evaluo_cancion`
--
ALTER TABLE `evaluo_cancion`
 ADD PRIMARY KEY (`email`,`id_cancion`), ADD KEY `FK_evaluo_cancion2` (`id_cancion`);

--
-- Indices de la tabla `mensaje_a_admin`
--
ALTER TABLE `mensaje_a_admin`
 ADD PRIMARY KEY (`id_mensaje`), ADD KEY `FK_relationship_2` (`email`);

--
-- Indices de la tabla `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
 ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `profile`
--
ALTER TABLE `profile`
 ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `social_account`
--
ALTER TABLE `social_account`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `account_unique` (`provider`,`client_id`), ADD UNIQUE KEY `account_unique_code` (`code`), ADD KEY `fk_user_account` (`user_id`);

--
-- Indices de la tabla `token`
--
ALTER TABLE `token`
 ADD UNIQUE KEY `token_unique` (`user_id`,`code`,`type`);

--
-- Indices de la tabla `t_artista`
--
ALTER TABLE `t_artista`
 ADD PRIMARY KEY (`nombre_autor`);

--
-- Indices de la tabla `t_estado_usuario`
--
ALTER TABLE `t_estado_usuario`
 ADD PRIMARY KEY (`estado`);

--
-- Indices de la tabla `t_tipo_usuario`
--
ALTER TABLE `t_tipo_usuario`
 ADD PRIMARY KEY (`tipo_usuario`);

--
-- Indices de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
 ADD PRIMARY KEY (`id_tusuario`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `id_tusuario` (`id_tusuario`), ADD KEY `FK_esta_en_un` (`estado`), ADD KEY `FK_pertenece_a` (`tipo`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `user_unique_email` (`email`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `social_account`
--
ALTER TABLE `social_account`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
MODIFY `id_tusuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1721;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item`
--
ALTER TABLE `auth_item`
ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
