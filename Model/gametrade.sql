-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2016 a las 19:41:21
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gametrade`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_auditoria`
--

CREATE TABLE IF NOT EXISTS `tbl_auditoria` (
  `audi_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL,
  `audi_accion` varchar(200) COLLATE utf8_bin NOT NULL,
  `audi_fech` date NOT NULL,
  `audi_estado` int(1) NOT NULL,
  `audi_desc` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria_bono`
--

CREATE TABLE IF NOT EXISTS `tbl_categoria_bono` (
  `cat_bono_cod` int(11) NOT NULL,
  `cat_bono_nom` varchar(80) COLLATE utf8_bin NOT NULL,
  `cat_bono_fech` varchar(10) COLLATE utf8_bin NOT NULL,
  `cat_estado` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_categoria_bono`
--

INSERT INTO `tbl_categoria_bono` (`cat_bono_cod`, `cat_bono_nom`, `cat_bono_fech`, `cat_estado`) VALUES
(10, 'wedwf', '14/09/2016', 'activo'),
(13, 'sff', '14/09/2016', ''),
(14, 'deeeas', '14/09/2016', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria_jue`
--

CREATE TABLE IF NOT EXISTS `tbl_categoria_jue` (
  `cat_cod` int(11) NOT NULL,
  `cat_nom` varchar(80) COLLATE utf8_bin NOT NULL,
  `cat_desc` blob NOT NULL,
  `cat_fech` varchar(10) COLLATE utf8_bin NOT NULL,
  `cat_estado` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_categoria_jue`
--

INSERT INTO `tbl_categoria_jue` (`cat_cod`, `cat_nom`, `cat_desc`, `cat_fech`, `cat_estado`) VALUES
(2, 'si ', 0x706f7271, '13/09/2016', 0),
(3, 'accion', 0x646520706c616d6f, '13/09/2016', 0),
(4, 'aventura', 0x686973746f726961, '13/09/2016', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ciudad`
--

CREATE TABLE IF NOT EXISTS `tbl_ciudad` (
  `ciu_cod` int(11) NOT NULL,
  `ciu_nom` varchar(70) COLLATE utf8_bin NOT NULL,
  `depar_cod` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_ciudad`
--

INSERT INTO `tbl_ciudad` (`ciu_cod`, `ciu_nom`, `depar_cod`) VALUES
(2, 'medellin', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comentario`
--

CREATE TABLE IF NOT EXISTS `tbl_comentario` (
  `coment_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL,
  `jue_cod` int(11) NOT NULL,
  `coment_asunt` varchar(255) COLLATE utf8_bin NOT NULL,
  `comet_desc` blob NOT NULL,
  `coment_fech` date NOT NULL,
  `coment_estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_consola`
--

CREATE TABLE IF NOT EXISTS `tbl_consola` (
  `cons_cod` int(11) NOT NULL,
  `cons_nom` varchar(20) COLLATE utf8_bin NOT NULL,
  `cons_refer` int(11) NOT NULL,
  `cons_imagen` varchar(50) COLLATE utf8_bin NOT NULL,
  `cons_estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_consola`
--

INSERT INTO `tbl_consola` (`cons_cod`, `cons_nom`, `cons_refer`, `cons_imagen`, `cons_estado`) VALUES
(1, 'ps2', 123, '', 0),
(2, 'ps3', 456, '', 0),
(3, 'hola', 345, 'nque', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_consola_x_juego`
--

CREATE TABLE IF NOT EXISTS `tbl_consola_x_juego` (
  `cons_jue` int(11) NOT NULL,
  `jue_cod` int(11) NOT NULL,
  `cons_cod` int(11) NOT NULL,
  `desc` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_departamento`
--

CREATE TABLE IF NOT EXISTS `tbl_departamento` (
  `depar_cod` int(11) NOT NULL,
  `depar_nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `pais_cod` int(11) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_departamento`
--

INSERT INTO `tbl_departamento` (`depar_cod`, `depar_nom`, `pais_cod`, `estado`) VALUES
(2, 'antioquia de itagui', 5, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_encuesta`
--

CREATE TABLE IF NOT EXISTS `tbl_encuesta` (
  `enc_cod` int(11) NOT NULL,
  `enc_nom` varchar(80) COLLATE utf8_bin NOT NULL,
  `enc_calif` int(11) NOT NULL,
  `enc_fech` date NOT NULL,
  `enc_estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_noticia`
--

CREATE TABLE IF NOT EXISTS `tbl_noticia` (
  `noti_cod` int(11) NOT NULL,
  `noti_nom` varchar(80) COLLATE utf8_bin NOT NULL,
  `noti_desc` blob NOT NULL,
  `noti_estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pack_punto`
--

CREATE TABLE IF NOT EXISTS `tbl_pack_punto` (
  `pto_cod` int(11) NOT NULL,
  `pto_cant` int(11) NOT NULL,
  `pto_moneda` int(11) NOT NULL,
  `pto_desc` blob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_pack_punto`
--

INSERT INTO `tbl_pack_punto` (`pto_cod`, `pto_cant`, `pto_moneda`, `pto_desc`) VALUES
(1, 30, 1000, 0x696e74656e74616e646f);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pais`
--

CREATE TABLE IF NOT EXISTS `tbl_pais` (
  `pais_cod` int(11) NOT NULL,
  `pais_nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_pais`
--

INSERT INTO `tbl_pais` (`pais_cod`, `pais_nom`, `estado`) VALUES
(4, '', 0),
(5, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ranking`
--

CREATE TABLE IF NOT EXISTS `tbl_ranking` (
  `rank_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL,
  `jue_cod` int(11) NOT NULL,
  `rank_vlr` float NOT NULL,
  `rank_estado` int(1) NOT NULL,
  `rank_fech` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipodocumento`
--

CREATE TABLE IF NOT EXISTS `tbl_tipodocumento` (
  `tipo_cod` int(11) NOT NULL,
  `tipo_documento` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_tipodocumento`
--

INSERT INTO `tbl_tipodocumento` (`tipo_cod`, `tipo_documento`) VALUES
(1, 'Tarjeta de identidad'),
(2, 'Cedula de ciudadania'),
(3, 'Cedula de extranjero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `usu_cod` int(11) NOT NULL,
  `tipo_cod` int(11) NOT NULL,
  `usu_num_docum` varchar(20) COLLATE utf8_bin NOT NULL,
  `usu_nom` varchar(80) COLLATE utf8_bin NOT NULL,
  `usu_apell` varchar(80) COLLATE utf8_bin NOT NULL,
  `usu_nick` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_mail` varchar(100) COLLATE utf8_bin NOT NULL,
  `usu_pass` varchar(250) COLLATE utf8_bin NOT NULL,
  `usu_naci` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_bin NOT NULL,
  `usu_tel` int(11) NOT NULL,
  `usu_cel` int(11) NOT NULL,
  `ciu_cod` int(11) NOT NULL,
  `usu_dir` varchar(100) COLLATE utf8_bin NOT NULL,
  `usu_fech` varchar(10) COLLATE utf8_bin NOT NULL,
  `usu_estado` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`usu_cod`, `tipo_cod`, `usu_num_docum`, `usu_nom`, `usu_apell`, `usu_nick`, `usu_mail`, `usu_pass`, `usu_naci`, `photo`, `usu_tel`, `usu_cel`, `ciu_cod`, `usu_dir`, `usu_fech`, `usu_estado`) VALUES
(20, 2, '1036660480', 'wilton', 'acuña', 'wilton', 'wilton@wilton', 'wilton', 19, '', 0, 0, 2, '', '', '0'),
(21, 1, '11111', '11111', '11111', '1111', 'wilt@hotmail.com', '123', 2016, '', 1234, 1234, 2, '123', '14/09/2016', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario_x_encuesta`
--

CREATE TABLE IF NOT EXISTS `tbl_usuario_x_encuesta` (
  `usu_enc` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL,
  `enc_cod` int(11) NOT NULL,
  `enc_desc` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario_x_pto`
--

CREATE TABLE IF NOT EXISTS `tbl_usuario_x_pto` (
  `usu_pto` int(11) NOT NULL,
  `pto_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario_x_viedojuego`
--

CREATE TABLE IF NOT EXISTS `tbl_usuario_x_viedojuego` (
  `usu_jue` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL,
  `jue_cod` int(11) NOT NULL,
  `desc` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_videojuego`
--

CREATE TABLE IF NOT EXISTS `tbl_videojuego` (
  `jue_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL,
  `jue_nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `cons_cod` int(11) NOT NULL,
  `cat_cod` int(11) NOT NULL,
  `jue_desc` blob NOT NULL,
  `jue_cant` int(11) NOT NULL,
  `jue_trailer` text COLLATE utf8_bin NOT NULL,
  `jue_fech_public` varchar(10) COLLATE utf8_bin NOT NULL,
  `jue_imagen` varchar(100) COLLATE utf8_bin NOT NULL,
  `jue_pal_clave` varchar(50) COLLATE utf8_bin NOT NULL,
  `jue_estado` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_videojuego`
--

INSERT INTO `tbl_videojuego` (`jue_cod`, `usu_cod`, `jue_nom`, `cons_cod`, `cat_cod`, `jue_desc`, `jue_cant`, `jue_trailer`, `jue_fech_public`, `jue_imagen`, `jue_pal_clave`, `jue_estado`) VALUES
(1, 20, 'yo que sezvbzgz', 2, 2, 0x6b6b686779746768626d6a6e, 2, '222', '14/09/2016', '2222', '233', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_bono`
--

CREATE TABLE IF NOT EXISTS `tb_bono` (
  `bono_cod` int(11) NOT NULL,
  `cat_bono_cod` int(11) NOT NULL,
  `pto_cod` int(11) NOT NULL,
  `bono_desc` blob NOT NULL,
  `bono_cant` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tb_bono`
--

INSERT INTO `tb_bono` (`bono_cod`, `cat_bono_cod`, `pto_cod`, `bono_desc`, `bono_cant`) VALUES
(2, 10, 1, 0x667277726672776677, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_auditoria`
--
ALTER TABLE `tbl_auditoria`
  ADD PRIMARY KEY (`audi_cod`), ADD KEY `usu_cod` (`usu_cod`), ADD KEY `usu_cod_2` (`usu_cod`);

--
-- Indices de la tabla `tbl_categoria_bono`
--
ALTER TABLE `tbl_categoria_bono`
  ADD PRIMARY KEY (`cat_bono_cod`);

--
-- Indices de la tabla `tbl_categoria_jue`
--
ALTER TABLE `tbl_categoria_jue`
  ADD PRIMARY KEY (`cat_cod`);

--
-- Indices de la tabla `tbl_ciudad`
--
ALTER TABLE `tbl_ciudad`
  ADD PRIMARY KEY (`ciu_cod`), ADD KEY `depar_cod` (`depar_cod`);

--
-- Indices de la tabla `tbl_comentario`
--
ALTER TABLE `tbl_comentario`
  ADD PRIMARY KEY (`coment_cod`), ADD KEY `usu_cod` (`usu_cod`), ADD KEY `jue_cod` (`jue_cod`), ADD KEY `usu_cod_2` (`usu_cod`), ADD KEY `jue_cod_2` (`jue_cod`), ADD KEY `jue_cod_3` (`jue_cod`);

--
-- Indices de la tabla `tbl_consola`
--
ALTER TABLE `tbl_consola`
  ADD PRIMARY KEY (`cons_cod`);

--
-- Indices de la tabla `tbl_consola_x_juego`
--
ALTER TABLE `tbl_consola_x_juego`
  ADD PRIMARY KEY (`cons_jue`), ADD KEY `jue_cod` (`jue_cod`), ADD KEY `cons_cod` (`cons_cod`);

--
-- Indices de la tabla `tbl_departamento`
--
ALTER TABLE `tbl_departamento`
  ADD PRIMARY KEY (`depar_cod`), ADD KEY `pais_cod` (`pais_cod`);

--
-- Indices de la tabla `tbl_encuesta`
--
ALTER TABLE `tbl_encuesta`
  ADD PRIMARY KEY (`enc_cod`);

--
-- Indices de la tabla `tbl_noticia`
--
ALTER TABLE `tbl_noticia`
  ADD PRIMARY KEY (`noti_cod`);

--
-- Indices de la tabla `tbl_pack_punto`
--
ALTER TABLE `tbl_pack_punto`
  ADD PRIMARY KEY (`pto_cod`);

--
-- Indices de la tabla `tbl_pais`
--
ALTER TABLE `tbl_pais`
  ADD PRIMARY KEY (`pais_cod`);

--
-- Indices de la tabla `tbl_ranking`
--
ALTER TABLE `tbl_ranking`
  ADD PRIMARY KEY (`rank_cod`), ADD KEY `usu_cod` (`usu_cod`), ADD KEY `jue_cod` (`jue_cod`);

--
-- Indices de la tabla `tbl_tipodocumento`
--
ALTER TABLE `tbl_tipodocumento`
  ADD PRIMARY KEY (`tipo_cod`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`usu_cod`), ADD KEY `ciu_cod` (`ciu_cod`), ADD KEY `ciu_cod_2` (`ciu_cod`), ADD KEY `tipo_cod` (`tipo_cod`);

--
-- Indices de la tabla `tbl_usuario_x_encuesta`
--
ALTER TABLE `tbl_usuario_x_encuesta`
  ADD PRIMARY KEY (`usu_enc`), ADD KEY `usu_cod` (`usu_cod`), ADD KEY `enc_cod` (`enc_cod`);

--
-- Indices de la tabla `tbl_usuario_x_pto`
--
ALTER TABLE `tbl_usuario_x_pto`
  ADD PRIMARY KEY (`usu_pto`), ADD KEY `pto_cod` (`pto_cod`), ADD KEY `usu_cod` (`usu_cod`);

--
-- Indices de la tabla `tbl_usuario_x_viedojuego`
--
ALTER TABLE `tbl_usuario_x_viedojuego`
  ADD PRIMARY KEY (`usu_jue`), ADD KEY `usu_cod` (`usu_cod`), ADD KEY `jue_cod` (`jue_cod`);

--
-- Indices de la tabla `tbl_videojuego`
--
ALTER TABLE `tbl_videojuego`
  ADD PRIMARY KEY (`jue_cod`), ADD UNIQUE KEY `cat_cod` (`cat_cod`), ADD KEY `usu_cod` (`usu_cod`), ADD KEY `usu_cod_2` (`usu_cod`), ADD KEY `cat_cod_2` (`cat_cod`), ADD KEY `cat_cod_3` (`cat_cod`), ADD KEY `cat_cod_4` (`cat_cod`), ADD KEY `cons_cod` (`cons_cod`);

--
-- Indices de la tabla `tb_bono`
--
ALTER TABLE `tb_bono`
  ADD PRIMARY KEY (`bono_cod`), ADD KEY `cat_bono_cod` (`cat_bono_cod`), ADD KEY `cat_bono_cod_2` (`cat_bono_cod`), ADD KEY `pto_cod` (`pto_cod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_auditoria`
--
ALTER TABLE `tbl_auditoria`
  MODIFY `audi_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_categoria_bono`
--
ALTER TABLE `tbl_categoria_bono`
  MODIFY `cat_bono_cod` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `tbl_categoria_jue`
--
ALTER TABLE `tbl_categoria_jue`
  MODIFY `cat_cod` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbl_ciudad`
--
ALTER TABLE `tbl_ciudad`
  MODIFY `ciu_cod` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_comentario`
--
ALTER TABLE `tbl_comentario`
  MODIFY `coment_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_consola_x_juego`
--
ALTER TABLE `tbl_consola_x_juego`
  MODIFY `cons_jue` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_departamento`
--
ALTER TABLE `tbl_departamento`
  MODIFY `depar_cod` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_encuesta`
--
ALTER TABLE `tbl_encuesta`
  MODIFY `enc_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_noticia`
--
ALTER TABLE `tbl_noticia`
  MODIFY `noti_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_pack_punto`
--
ALTER TABLE `tbl_pack_punto`
  MODIFY `pto_cod` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbl_pais`
--
ALTER TABLE `tbl_pais`
  MODIFY `pais_cod` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbl_ranking`
--
ALTER TABLE `tbl_ranking`
  MODIFY `rank_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_tipodocumento`
--
ALTER TABLE `tbl_tipodocumento`
  MODIFY `tipo_cod` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `usu_cod` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario_x_encuesta`
--
ALTER TABLE `tbl_usuario_x_encuesta`
  MODIFY `usu_enc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario_x_pto`
--
ALTER TABLE `tbl_usuario_x_pto`
  MODIFY `usu_pto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario_x_viedojuego`
--
ALTER TABLE `tbl_usuario_x_viedojuego`
  MODIFY `usu_jue` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_videojuego`
--
ALTER TABLE `tbl_videojuego`
  MODIFY `jue_cod` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tb_bono`
--
ALTER TABLE `tb_bono`
  MODIFY `bono_cod` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_auditoria`
--
ALTER TABLE `tbl_auditoria`
ADD CONSTRAINT `tbl_auditoria_ibfk_1` FOREIGN KEY (`usu_cod`) REFERENCES `tbl_usuario` (`usu_cod`);

--
-- Filtros para la tabla `tbl_ciudad`
--
ALTER TABLE `tbl_ciudad`
ADD CONSTRAINT `tbl_ciudad_ibfk_1` FOREIGN KEY (`depar_cod`) REFERENCES `tbl_departamento` (`depar_cod`);

--
-- Filtros para la tabla `tbl_comentario`
--
ALTER TABLE `tbl_comentario`
ADD CONSTRAINT `tbl_comentario_ibfk_1` FOREIGN KEY (`usu_cod`) REFERENCES `tbl_usuario` (`usu_cod`),
ADD CONSTRAINT `tbl_comentario_ibfk_2` FOREIGN KEY (`jue_cod`) REFERENCES `tbl_videojuego` (`jue_cod`);

--
-- Filtros para la tabla `tbl_consola_x_juego`
--
ALTER TABLE `tbl_consola_x_juego`
ADD CONSTRAINT `tbl_consola_x_juego_ibfk_1` FOREIGN KEY (`jue_cod`) REFERENCES `tbl_videojuego` (`jue_cod`),
ADD CONSTRAINT `tbl_consola_x_juego_ibfk_2` FOREIGN KEY (`cons_cod`) REFERENCES `tbl_consola` (`cons_cod`);

--
-- Filtros para la tabla `tbl_departamento`
--
ALTER TABLE `tbl_departamento`
ADD CONSTRAINT `tbl_departamento_ibfk_1` FOREIGN KEY (`pais_cod`) REFERENCES `tbl_pais` (`pais_cod`);

--
-- Filtros para la tabla `tbl_ranking`
--
ALTER TABLE `tbl_ranking`
ADD CONSTRAINT `tbl_ranking_ibfk_1` FOREIGN KEY (`jue_cod`) REFERENCES `tbl_videojuego` (`jue_cod`),
ADD CONSTRAINT `tbl_ranking_ibfk_2` FOREIGN KEY (`usu_cod`) REFERENCES `tbl_usuario` (`usu_cod`);

--
-- Filtros para la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
ADD CONSTRAINT `tbl_usuario_ibfk_1` FOREIGN KEY (`ciu_cod`) REFERENCES `tbl_ciudad` (`ciu_cod`),
ADD CONSTRAINT `tbl_usuario_ibfk_2` FOREIGN KEY (`tipo_cod`) REFERENCES `tbl_tipodocumento` (`tipo_cod`);

--
-- Filtros para la tabla `tbl_usuario_x_encuesta`
--
ALTER TABLE `tbl_usuario_x_encuesta`
ADD CONSTRAINT `tbl_usuario_x_encuesta_ibfk_1` FOREIGN KEY (`usu_cod`) REFERENCES `tbl_usuario` (`usu_cod`),
ADD CONSTRAINT `tbl_usuario_x_encuesta_ibfk_2` FOREIGN KEY (`enc_cod`) REFERENCES `tbl_encuesta` (`enc_cod`);

--
-- Filtros para la tabla `tbl_usuario_x_pto`
--
ALTER TABLE `tbl_usuario_x_pto`
ADD CONSTRAINT `tbl_usuario_x_pto_ibfk_1` FOREIGN KEY (`usu_cod`) REFERENCES `tbl_usuario` (`usu_cod`),
ADD CONSTRAINT `tbl_usuario_x_pto_ibfk_2` FOREIGN KEY (`pto_cod`) REFERENCES `tbl_pack_punto` (`pto_cod`);

--
-- Filtros para la tabla `tbl_usuario_x_viedojuego`
--
ALTER TABLE `tbl_usuario_x_viedojuego`
ADD CONSTRAINT `tbl_usuario_x_viedojuego_ibfk_1` FOREIGN KEY (`jue_cod`) REFERENCES `tbl_videojuego` (`jue_cod`),
ADD CONSTRAINT `tbl_usuario_x_viedojuego_ibfk_2` FOREIGN KEY (`usu_cod`) REFERENCES `tbl_usuario` (`usu_cod`);

--
-- Filtros para la tabla `tbl_videojuego`
--
ALTER TABLE `tbl_videojuego`
ADD CONSTRAINT `tbl_videojuego_ibfk_1` FOREIGN KEY (`usu_cod`) REFERENCES `tbl_usuario` (`usu_cod`),
ADD CONSTRAINT `tbl_videojuego_ibfk_2` FOREIGN KEY (`cat_cod`) REFERENCES `tbl_categoria_jue` (`cat_cod`),
ADD CONSTRAINT `tbl_videojuego_ibfk_3` FOREIGN KEY (`cons_cod`) REFERENCES `tbl_consola` (`cons_cod`);

--
-- Filtros para la tabla `tb_bono`
--
ALTER TABLE `tb_bono`
ADD CONSTRAINT `tb_bono_ibfk_1` FOREIGN KEY (`cat_bono_cod`) REFERENCES `tbl_categoria_bono` (`cat_bono_cod`),
ADD CONSTRAINT `tb_bono_ibfk_2` FOREIGN KEY (`pto_cod`) REFERENCES `tbl_pack_punto` (`pto_cod`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
