-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.19 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.5.0.5327
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para bdm
CREATE DATABASE IF NOT EXISTS `bdm` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `bdm`;

-- Volcando estructura para tabla bdm.md
DROP TABLE IF EXISTS `md`;
CREATE TABLE IF NOT EXISTS `md` (
  `idDo` int(11) DEFAULT NULL,
  `MDolar` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla bdm.md: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `md` DISABLE KEYS */;
REPLACE INTO `md` (`idDo`, `MDolar`) VALUES
	(1, 37.50);
/*!40000 ALTER TABLE `md` ENABLE KEYS */;

-- Volcando estructura para tabla bdm.t_duenio
DROP TABLE IF EXISTS `t_duenio`;
CREATE TABLE IF NOT EXISTS `t_duenio` (
  `iddu` int(11) NOT NULL AUTO_INCREMENT,
  `contacto` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `domicio` varchar(120) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`iddu`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla bdm.t_duenio: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `t_duenio` DISABLE KEYS */;
REPLACE INTO `t_duenio` (`iddu`, `contacto`, `tel`, `domicio`) VALUES
	(2, 'DUEÑO AA', '454545', 'CALLE 3422'),
	(3, 'DUEÑO 2', '454545', 'C5555');
/*!40000 ALTER TABLE `t_duenio` ENABLE KEYS */;

-- Volcando estructura para tabla bdm.t_gale
DROP TABLE IF EXISTS `t_gale`;
CREATE TABLE IF NOT EXISTS `t_gale` (
  `idg` int(11) NOT NULL AUTO_INCREMENT,
  `Galeria` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Proid` int(11) NOT NULL,
  PRIMARY KEY (`idg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla bdm.t_gale: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `t_gale` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_gale` ENABLE KEYS */;

-- Volcando estructura para tabla bdm.t_notas
DROP TABLE IF EXISTS `t_notas`;
CREATE TABLE IF NOT EXISTS `t_notas` (
  `idNota` int(11) NOT NULL AUTO_INCREMENT,
  `Imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Titulo` varchar(160) COLLATE utf8_spanish_ci NOT NULL,
  `Nota` text COLLATE utf8_spanish_ci NOT NULL,
  `Tag` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idNota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla bdm.t_notas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `t_notas` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_notas` ENABLE KEYS */;

-- Volcando estructura para tabla bdm.t_otros
DROP TABLE IF EXISTS `t_otros`;
CREATE TABLE IF NOT EXISTS `t_otros` (
  `ido` int(11) NOT NULL AUTO_INCREMENT,
  `otros` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ido`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla bdm.t_otros: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `t_otros` DISABLE KEYS */;
REPLACE INTO `t_otros` (`ido`, `otros`) VALUES
	(1, 'CON CABLE'),
	(2, 'CON QUINCHO'),
	(3, 'AMOBLADO');
/*!40000 ALTER TABLE `t_otros` ENABLE KEYS */;

-- Volcando estructura para tabla bdm.t_pro
DROP TABLE IF EXISTS `t_pro`;
CREATE TABLE IF NOT EXISTS `t_pro` (
  `idPro` int(11) NOT NULL AUTO_INCREMENT,
  `Alqui` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `Banios` tinyint(4) NOT NULL,
  `CodPro` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Comodidades` varchar(350) COLLATE utf8_spanish_ci NOT NULL,
  `Cocheras` tinyint(4) NOT NULL,
  `Credi` tinyint(1) NOT NULL,
  `Destacar` tinyint(1) NOT NULL,
  `Dolar` tinyint(1) NOT NULL,
  `Domicilio` varchar(210) COLLATE utf8_spanish_ci NOT NULL,
  `DuenioID` int(11) unsigned DEFAULT NULL,
  `Estado` tinyint(4) NOT NULL,
  `FAlta` varchar(10) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'now()',
  `Gmap` varchar(350) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Galeria` varchar(180) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Habita` tinyint(4) NOT NULL,
  `M2` int(11) NOT NULL,
  `MC2` int(11) NOT NULL,
  `MT` int(11) NOT NULL,
  `Mascotas` tinyint(1) NOT NULL,
  `Plano` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Portada` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Descript` text COLLATE utf8_spanish_ci NOT NULL,
  `TipoID` int(11) NOT NULL,
  `Valor` int(11) NOT NULL,
  `ZonaID` int(11) NOT NULL,
  PRIMARY KEY (`idPro`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla bdm.t_pro: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `t_pro` DISABLE KEYS */;
REPLACE INTO `t_pro` (`idPro`, `Alqui`, `Banios`, `CodPro`, `Comodidades`, `Cocheras`, `Credi`, `Destacar`, `Dolar`, `Domicilio`, `DuenioID`, `Estado`, `FAlta`, `Gmap`, `Galeria`, `Habita`, `M2`, `MC2`, `MT`, `Mascotas`, `Plano`, `Portada`, `Descript`, `TipoID`, `Valor`, `ZonaID`) VALUES
	(1, 'V', 1, 'VIL-00001', '2|1|3|', 1, 0, 1, 2, 'E DE BURZACO 250', 3, 1, '20181116', 'https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d13108.56703266938!2d-58.33176544999999!3d-34.77720645!3m2!1i1024!2i768!4f13.1!3m2!1m1!2sE+de+burzaco+250%2Cburzaco!5e0!3m2!1sen!2sar!4v1542256743490', 'galery/1542283409.png|galery/1542283412.png|galery/1542283415.png|galery/1542283418.png|', 10, 498, 50, 498, 0, 'galery/1542256841.png', 'galery/1542400866.png', '<p>Casa muy bonita</p>', 7, 4005500, 4),
	(4, 'V', 2, 'XDB-00004', '2|1|', 2, 0, 1, 1, ' GALERIAS  123 456', 2, 1, '20181116', '', 'galery/1542047093.png|galery/1542047088.png|galery/1542049593.png|', 9, 70, 1, 70, 0, 'galery/1542047077.png', 'galery/1542146044.png', '<p>mucha casa para una sola persona</p>', 4, 5600000, 2),
	(5, 'V', 3, 'VDB-00005', '2|1|', 2, 0, 1, 1, ' GALERIAS  123 456', 2, 1, '20181116', 'zz', 'galery/1542047093.png|galery/1542047088.png|galery/1542049593.png|', 9, 255, 1, 255, 0, 'galery/1542047077.png', 'galery/1542400856.png', '<p>mucha casa para una sola persona</p>', 4, 5000000, 2),
	(6, 'V', 4, 'VIL-00006', '2|1|3|', 1, 0, 1, 2, 'E DE BURZACO 650', 3, 1, '20181116', 'https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d13108.56703266938!2d-58.33176544999999!3d-34.77720645!3m2!1i1024!2i768!4f13.1!3m2!1m1!2sE+de+burzaco+250%2Cburzaco!5e0!3m2!1sen!2sar!4v1542256743490', 'galery/1542283418.png|galery/1542283415.png|galery/1542283412.png|galery/1542283409.png|', 10, 288, 50, 288, 0, 'galery/1542256841.png', 'galery/1542400877.png', '<p>Casa muy bonita</p>', 7, 6000500, 4);
/*!40000 ALTER TABLE `t_pro` ENABLE KEYS */;

-- Volcando estructura para tabla bdm.t_tipo
DROP TABLE IF EXISTS `t_tipo`;
CREATE TABLE IF NOT EXISTS `t_tipo` (
  `idt` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idt`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla bdm.t_tipo: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `t_tipo` DISABLE KEYS */;
REPLACE INTO `t_tipo` (`idt`, `tipo`) VALUES
	(2, 'TERRENO'),
	(3, 'CASA'),
	(4, 'DEPARTAMENTO'),
	(5, 'LOCAL'),
	(6, 'GALPON'),
	(7, 'IMU PRUEBAS');
/*!40000 ALTER TABLE `t_tipo` ENABLE KEYS */;

-- Volcando estructura para tabla bdm.t_zonas
DROP TABLE IF EXISTS `t_zonas`;
CREATE TABLE IF NOT EXISTS `t_zonas` (
  `idz` int(11) NOT NULL AUTO_INCREMENT,
  `zona` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idz`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla bdm.t_zonas: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `t_zonas` DISABLE KEYS */;
REPLACE INTO `t_zonas` (`idz`, `zona`) VALUES
	(1, 'ADROGUE'),
	(2, 'BURZACO'),
	(3, 'RAFAEL CALZADA'),
	(4, 'LOMAS DE ZAMORA'),
	(5, 'TEMPERLEY');
/*!40000 ALTER TABLE `t_zonas` ENABLE KEYS */;

-- Volcando estructura para tabla bdm.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_bin NOT NULL,
  `password` varchar(30) COLLATE utf8_bin NOT NULL,
  `cookie` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla bdm.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
