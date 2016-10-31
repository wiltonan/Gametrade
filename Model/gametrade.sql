-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2016 a las 16:08:56
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gametrade`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria_jue`
--

CREATE TABLE `tbl_categoria_jue` (
  `cat_cod` int(11) NOT NULL,
  `cat_nom` varchar(80) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_categoria_jue`
--

INSERT INTO `tbl_categoria_jue` (`cat_cod`, `cat_nom`) VALUES
(1, 'accion  pura'),
(2, 'aventura para mujeres'),
(3, 'aventura para hombres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ciudad`
--

CREATE TABLE `tbl_ciudad` (
  `ciu_cod` int(11) NOT NULL,
  `pais_cod` int(11) NOT NULL,
  `ciu_nom` varchar(70) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_ciudad`
--

INSERT INTO `tbl_ciudad` (`ciu_cod`, `pais_cod`, `ciu_nom`) VALUES
(1, 2, 'itagui dd'),
(2, 1, 'Medellin de manizale'),
(3, 2, 'w'),
(4, 1, 'w');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comentario`
--

CREATE TABLE `tbl_comentario` (
  `coment_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL,
  `jue_cod` int(11) NOT NULL,
  `comet_desc` blob NOT NULL,
  `coment_fech` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_consola`
--

CREATE TABLE `tbl_consola` (
  `cons_cod` int(11) NOT NULL,
  `cons_nom` varchar(20) COLLATE utf8_bin NOT NULL,
  `cons_refer` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_consola`
--

INSERT INTO `tbl_consola` (`cons_cod`, `cons_nom`, `cons_refer`) VALUES
(1, 'ps2', 'mini box'),
(2, 'ps3 ', 'el grande y ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_noticia`
--

CREATE TABLE `tbl_noticia` (
  `noti_cod` int(11) NOT NULL,
  `noti_nom` varchar(80) COLLATE utf8_bin NOT NULL,
  `noti_desc` blob NOT NULL,
  `noti_estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_noticia`
--

INSERT INTO `tbl_noticia` (`noti_cod`, `noti_nom`, `noti_desc`, `noti_estado`) VALUES
(1, '../Views/Imagen/3.png', '', 0),
(2, '../Views/Imagen/1.png', '', 0),
(3, '../Views/Imagen/1.png', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pack_punto`
--

CREATE TABLE `tbl_pack_punto` (
  `pto_cod` int(11) NOT NULL,
  `pto_cant` int(11) NOT NULL,
  `pto_moneda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_pack_punto`
--

INSERT INTO `tbl_pack_punto` (`pto_cod`, `pto_cant`, `pto_moneda`) VALUES
(1, 50, 2000),
(4, 770, 2000),
(5, 30000, 30000),
(6, 100, 10),
(7, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pais`
--

CREATE TABLE `tbl_pais` (
  `pais_cod` int(11) NOT NULL,
  `pais_nom` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_pais`
--

INSERT INTO `tbl_pais` (`pais_cod`, `pais_nom`) VALUES
(1, 'Colombia de itagui'),
(2, 'Estados unidos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ranking`
--

CREATE TABLE `tbl_ranking` (
  `rank_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL,
  `jue_cod` int(11) NOT NULL,
  `rank_vlr` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_rol`
--

CREATE TABLE `tbl_rol` (
  `cod_rol` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_rol`
--

INSERT INTO `tbl_rol` (`cod_rol`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipodocumento`
--

CREATE TABLE `tbl_tipodocumento` (
  `tipo_cod` int(11) NOT NULL,
  `tipo_documento` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `tbl_usuario` (
  `usu_cod` int(11) NOT NULL,
  `cod_rol` int(11) NOT NULL,
  `tipo_cod` int(11) NOT NULL,
  `usu_num_docum` varchar(20) COLLATE utf8_bin NOT NULL,
  `usu_nom` varchar(80) COLLATE utf8_bin NOT NULL,
  `usu_apell` varchar(80) COLLATE utf8_bin NOT NULL,
  `usu_nick` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_mail` varchar(100) COLLATE utf8_bin NOT NULL,
  `usu_pass` varchar(250) COLLATE utf8_bin NOT NULL,
  `usu_naci` varchar(10) COLLATE utf8_bin NOT NULL,
  `photo` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `usu_tel` int(11) NOT NULL,
  `usu_cel` int(11) NOT NULL,
  `ciu_cod` int(11) NOT NULL,
  `usu_dir` varchar(100) COLLATE utf8_bin NOT NULL,
  `usu_esp_vive` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `usu_fech` varchar(10) COLLATE utf8_bin NOT NULL,
  `usu_estado` varchar(10) COLLATE utf8_bin NOT NULL,
  `usu_keypass` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_newpass` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`usu_cod`, `cod_rol`, `tipo_cod`, `usu_num_docum`, `usu_nom`, `usu_apell`, `usu_nick`, `usu_mail`, `usu_pass`, `usu_naci`, `photo`, `usu_tel`, `usu_cel`, `ciu_cod`, `usu_dir`, `usu_esp_vive`, `usu_fech`, `usu_estado`, `usu_keypass`, `usu_newpass`) VALUES
(1, 1, 2, '1036660480', 'wilton', 'acuÃ±a requena', 'wilton', 'wilton.anre13@hotmail.com', '$2y$10$8M72rIZuBvIkHs.9B7k4b.vQMelOtMrTuL3O1Kejc90xVxVulXNPy', '2004-10-13', '', 0, 2147483647, 1, 'calle 00-#00-00', '', '29/10/2016', 'activo', '', ''),
(2, 2, 2, '1037770480', 'andres', 'requena', 'wil', 'wilton@wilton.com', '1234', '2001-10-17', NULL, 0, 2147483647, 2, 'calle falsa 123', '', '30/10/2016', 'activo', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario_x_pto`
--

CREATE TABLE `tbl_usuario_x_pto` (
  `usu_cod` int(11) NOT NULL,
  `pto_cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_usuario_x_pto`
--

INSERT INTO `tbl_usuario_x_pto` (`usu_cod`, `pto_cod`) VALUES
(1, 4),
(2, 1),
(2, 5),
(2, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_videojuego`
--

CREATE TABLE `tbl_videojuego` (
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
  `jue_estado` varchar(8) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_videojuego`
--

INSERT INTO `tbl_videojuego` (`jue_cod`, `usu_cod`, `jue_nom`, `cons_cod`, `cat_cod`, `jue_desc`, `jue_cant`, `jue_trailer`, `jue_fech_public`, `jue_imagen`, `jue_estado`) VALUES
(4, 2, 'intento1', 1, 1, '', 1, 'no ', '', 'no', 'activo'),
(5, 2, 'intenti2', 1, 1, '', 1, 'no', '', 'no', 'activo'),
(6, 1, 'intento 3', 1, 1, 0x6e696e67756e61, 1, '', '31/10/2016', 'IMG-20151213-WA0002.jpg', 'activo'),
(7, 1, 'intento 4', 1, 1, 0x6e696e67756e61, 1, '', '31/10/2016', 'IMG-20151213-WA0002.jpg', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_bono`
--

CREATE TABLE `tb_bono` (
  `bono_cod` int(11) NOT NULL,
  `pto_cod` int(11) NOT NULL,
  `bono_desc` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tb_bono`
--

INSERT INTO `tb_bono` (`bono_cod`, `pto_cod`, `bono_desc`) VALUES
(13, 5, 0x696e74656e74616e646f20),
(14, 5, 0x706f72206e616461);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_categoria_jue`
--
ALTER TABLE `tbl_categoria_jue`
  ADD PRIMARY KEY (`cat_cod`);

--
-- Indices de la tabla `tbl_ciudad`
--
ALTER TABLE `tbl_ciudad`
  ADD PRIMARY KEY (`ciu_cod`),
  ADD KEY `pais_cod` (`pais_cod`);

--
-- Indices de la tabla `tbl_comentario`
--
ALTER TABLE `tbl_comentario`
  ADD PRIMARY KEY (`coment_cod`),
  ADD KEY `usu_cod` (`usu_cod`),
  ADD KEY `jue_cod` (`jue_cod`),
  ADD KEY `usu_cod_2` (`usu_cod`),
  ADD KEY `jue_cod_2` (`jue_cod`),
  ADD KEY `jue_cod_3` (`jue_cod`);

--
-- Indices de la tabla `tbl_consola`
--
ALTER TABLE `tbl_consola`
  ADD PRIMARY KEY (`cons_cod`);

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
  ADD PRIMARY KEY (`rank_cod`),
  ADD KEY `usu_cod` (`usu_cod`),
  ADD KEY `jue_cod` (`jue_cod`);

--
-- Indices de la tabla `tbl_rol`
--
ALTER TABLE `tbl_rol`
  ADD PRIMARY KEY (`cod_rol`);

--
-- Indices de la tabla `tbl_tipodocumento`
--
ALTER TABLE `tbl_tipodocumento`
  ADD PRIMARY KEY (`tipo_cod`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`usu_cod`),
  ADD KEY `ciu_cod` (`ciu_cod`),
  ADD KEY `ciu_cod_2` (`ciu_cod`),
  ADD KEY `tipo_cod` (`tipo_cod`),
  ADD KEY `ciu_cod_3` (`ciu_cod`),
  ADD KEY `tipo_cod_2` (`tipo_cod`),
  ADD KEY `cod_rol` (`cod_rol`);

--
-- Indices de la tabla `tbl_usuario_x_pto`
--
ALTER TABLE `tbl_usuario_x_pto`
  ADD PRIMARY KEY (`usu_cod`,`pto_cod`),
  ADD KEY `pto_cod` (`pto_cod`);

--
-- Indices de la tabla `tbl_videojuego`
--
ALTER TABLE `tbl_videojuego`
  ADD PRIMARY KEY (`jue_cod`),
  ADD KEY `usu_cod` (`usu_cod`),
  ADD KEY `usu_cod_2` (`usu_cod`),
  ADD KEY `cons_cod` (`cons_cod`),
  ADD KEY `cat_cod` (`cat_cod`);

--
-- Indices de la tabla `tb_bono`
--
ALTER TABLE `tb_bono`
  ADD PRIMARY KEY (`bono_cod`),
  ADD KEY `pto_cod` (`pto_cod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_categoria_jue`
--
ALTER TABLE `tbl_categoria_jue`
  MODIFY `cat_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_ciudad`
--
ALTER TABLE `tbl_ciudad`
  MODIFY `ciu_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbl_comentario`
--
ALTER TABLE `tbl_comentario`
  MODIFY `coment_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_consola`
--
ALTER TABLE `tbl_consola`
  MODIFY `cons_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_noticia`
--
ALTER TABLE `tbl_noticia`
  MODIFY `noti_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_pack_punto`
--
ALTER TABLE `tbl_pack_punto`
  MODIFY `pto_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `tbl_pais`
--
ALTER TABLE `tbl_pais`
  MODIFY `pais_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_ranking`
--
ALTER TABLE `tbl_ranking`
  MODIFY `rank_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_rol`
--
ALTER TABLE `tbl_rol`
  MODIFY `cod_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_tipodocumento`
--
ALTER TABLE `tbl_tipodocumento`
  MODIFY `tipo_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `usu_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_videojuego`
--
ALTER TABLE `tbl_videojuego`
  MODIFY `jue_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `tb_bono`
--
ALTER TABLE `tb_bono`
  MODIFY `bono_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_ciudad`
--
ALTER TABLE `tbl_ciudad`
  ADD CONSTRAINT `tbl_ciudad_ibfk_1` FOREIGN KEY (`pais_cod`) REFERENCES `tbl_pais` (`pais_cod`);

--
-- Filtros para la tabla `tbl_comentario`
--
ALTER TABLE `tbl_comentario`
  ADD CONSTRAINT `tbl_comentario_ibfk_1` FOREIGN KEY (`usu_cod`) REFERENCES `tbl_usuario` (`usu_cod`),
  ADD CONSTRAINT `tbl_comentario_ibfk_2` FOREIGN KEY (`jue_cod`) REFERENCES `tbl_videojuego` (`jue_cod`);

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
  ADD CONSTRAINT `tbl_usuario_ibfk_2` FOREIGN KEY (`tipo_cod`) REFERENCES `tbl_tipodocumento` (`tipo_cod`),
  ADD CONSTRAINT `tbl_usuario_ibfk_3` FOREIGN KEY (`cod_rol`) REFERENCES `tbl_rol` (`cod_rol`);

--
-- Filtros para la tabla `tbl_usuario_x_pto`
--
ALTER TABLE `tbl_usuario_x_pto`
  ADD CONSTRAINT `tbl_usuario_x_pto_ibfk_1` FOREIGN KEY (`usu_cod`) REFERENCES `tbl_usuario` (`usu_cod`),
  ADD CONSTRAINT `tbl_usuario_x_pto_ibfk_2` FOREIGN KEY (`pto_cod`) REFERENCES `tbl_pack_punto` (`pto_cod`);

--
-- Filtros para la tabla `tbl_videojuego`
--
ALTER TABLE `tbl_videojuego`
  ADD CONSTRAINT `tbl_videojuego_ibfk_1` FOREIGN KEY (`usu_cod`) REFERENCES `tbl_usuario` (`usu_cod`),
  ADD CONSTRAINT `tbl_videojuego_ibfk_3` FOREIGN KEY (`cons_cod`) REFERENCES `tbl_consola` (`cons_cod`),
  ADD CONSTRAINT `tbl_videojuego_ibfk_4` FOREIGN KEY (`cat_cod`) REFERENCES `tbl_categoria_jue` (`cat_cod`);

--
-- Filtros para la tabla `tb_bono`
--
ALTER TABLE `tb_bono`
  ADD CONSTRAINT `tb_bono_ibfk_2` FOREIGN KEY (`pto_cod`) REFERENCES `tbl_pack_punto` (`pto_cod`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
