-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2020 a las 04:00:27
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdpersona`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_persona`
--

CREATE TABLE `tabla_persona` (
  `id_persona` bigint(20) UNSIGNED NOT NULL COMMENT 'En el editor mysql de phpmyadmin aparecera de tipo serial',
  `nom_persona` text NOT NULL COMMENT 'nombre_persona',
  `apell_persona` text NOT NULL COMMENT 'apellido_persona',
  `dni_persona` int(11) NOT NULL COMMENT 'dni_persona',
  `tel_persona` text NOT NULL COMMENT 'telefono_persona. Si bien es un numero no puede ser del tipo numerico ejemplo 0800video',
  `email_persona` text NOT NULL COMMENT 'correoelectronico_persona',
  `cp_persona` text NOT NULL COMMENT 'codigopostal_persona',
  `foto_persona` text NOT NULL COMMENT 'sera un campo de tipo texto ya que en el mismo guardaremos la ubicacion del archivo imagen',
  `dir_persona` text NOT NULL COMMENT 'direccion_persona'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_persona`
--
ALTER TABLE `tabla_persona`
  ADD PRIMARY KEY (`id_persona`),
  ADD UNIQUE KEY `id_persona` (`id_persona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla_persona`
--
ALTER TABLE `tabla_persona`
  MODIFY `id_persona` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'En el editor mysql de phpmyadmin aparecera de tipo serial';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
