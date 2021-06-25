-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para leon
CREATE DATABASE IF NOT EXISTS `leon` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `leon`;

-- Volcando estructura para tabla leon.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empr` int(11) NOT NULL AUTO_INCREMENT,
  `razon_social` varchar(200) DEFAULT NULL,
  `ruc` varchar(15) DEFAULT NULL,
  `nombre_comercial` varchar(200) DEFAULT NULL,
  `telefono_convencional` varchar(20) DEFAULT NULL,
  `telefono_movil` varchar(20) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `sitio_web` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_empr`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla leon.empresa: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` (`id_empr`, `razon_social`, `ruc`, `nombre_comercial`, `telefono_convencional`, `telefono_movil`, `correo`, `direccion`, `sitio_web`) VALUES
	(1, 'leon', '1753702313001', 'leon', '3003581', '0962120100', 'correoempresarial@gmail.com', 'Guamani', 'Matriz');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;

-- Volcando estructura para tabla leon.factura
CREATE TABLE IF NOT EXISTS `factura` (
  `id_fac` int(11) NOT NULL AUTO_INCREMENT,
  `id_empr` int(11) NOT NULL,
  `id_nomi` int(11) NOT NULL,
  `id_procli` int(11) NOT NULL,
  `numfac` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `iva` float NOT NULL DEFAULT '0',
  `descuento` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_fac`),
  KEY `fk_reference_4` (`id_empr`),
  KEY `fk_reference_5` (`id_nomi`),
  KEY `fk_reference_6` (`id_procli`),
  CONSTRAINT `fk_reference_4` FOREIGN KEY (`id_empr`) REFERENCES `empresa` (`id_empr`),
  CONSTRAINT `fk_reference_5` FOREIGN KEY (`id_nomi`) REFERENCES `nomina` (`id_nomi`),
  CONSTRAINT `fk_reference_6` FOREIGN KEY (`id_procli`) REFERENCES `proveedores_clientes` (`id_procli`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla leon.factura: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `factura` DISABLE KEYS */;
INSERT INTO `factura` (`id_fac`, `id_empr`, `id_nomi`, `id_procli`, `numfac`, `fecha`, `iva`, `descuento`) VALUES
	(53, 1, 1, 1, 1, '2021-06-01', 0, 0),
	(54, 1, 1, 1, 2, '2021-06-01', 0, 0),
	(55, 1, 1, 1, 3, '2021-06-01', 0, 0),
	(56, 1, 1, 1, 4, '2021-06-01', 0, 1),
	(57, 1, 1, 1, 5, '2021-06-02', 1, 3),
	(58, 1, 1, 7, 6, '2021-06-11', 1, 1);
/*!40000 ALTER TABLE `factura` ENABLE KEYS */;

-- Volcando estructura para tabla leon.factura_detalle
CREATE TABLE IF NOT EXISTS `factura_detalle` (
  `id_facde` int(11) NOT NULL AUTO_INCREMENT,
  `id_fac` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio_unitario` varchar(10) NOT NULL,
  `destino` varchar(200) NOT NULL,
  PRIMARY KEY (`id_facde`),
  KEY `fk_reference_11` (`id_prod`),
  KEY `fk_reference_8` (`id_fac`),
  CONSTRAINT `fk_reference_11` FOREIGN KEY (`id_prod`) REFERENCES `producto` (`id_prod`),
  CONSTRAINT `fk_reference_8` FOREIGN KEY (`id_fac`) REFERENCES `factura` (`id_fac`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla leon.factura_detalle: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `factura_detalle` DISABLE KEYS */;
INSERT INTO `factura_detalle` (`id_facde`, `id_fac`, `id_prod`, `cantidad`, `descripcion`, `precio_unitario`, `destino`) VALUES
	(3, 53, 1, 1, '1', '1', 'Loja'),
	(4, 54, 1, 1, '1', '1', 'Loja'),
	(5, 53, 1, 1, '1', '1', 'Loja'),
	(6, 53, 1, 1, '1', '1', 'Loja'),
	(13, 53, 4, 10, '4', '10', 'Loja'),
	(18, 57, 1, 1, '1', '21', 'Loja'),
	(19, 57, 4, 1, '4', '21', 'AmbatoCITY'),
	(20, 53, 1, 12, '1', '12', 'Loja'),
	(21, 57, 1, 12, '1', '22', 'Loja'),
	(22, 56, 1, 12, '1', '21', 'AmbatoCITY'),
	(24, 58, 6, 1, '6', '50', 'Quito'),
	(25, 58, 7, 1, '7', '25', 'Quito');
/*!40000 ALTER TABLE `factura_detalle` ENABLE KEYS */;

-- Volcando estructura para tabla leon.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla leon.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla leon.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla leon.migrations: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla leon.nomina
CREATE TABLE IF NOT EXISTS `nomina` (
  `id_nomi` int(11) NOT NULL DEFAULT '0',
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_movil` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cargo` varchar(100) COLLATE utf8mb4_unicode_ci,
  `usuario` varchar(50) COLLATE utf8mb4_unicode_ci,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_nomi`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla leon.nomina: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `nomina` DISABLE KEYS */;
INSERT INTO `nomina` (`id_nomi`, `apellidos`, `nombre`, `telefono_movil`, `email`, `cargo`, `usuario`, `password`, `estado`, `created_at`, `updated_at`) VALUES
	(1, 'Paredes', 'Oliver', '0962120100', 'oliverparedes22@gmail.com', 'A', 'oliver', '$2y$10$CJwE9mcq3sYXpwvToC3Y5.8vvOdcntdwbJpxFYdak5kjAHoLRm28K', '1', '2021-05-10 13:15:06', '2021-05-10 13:15:06'),
	(2, 'Lamelcocha', 'Rodolfo', '0962120100', 'rodolfo@gmail.com', 'C', 'rodolfo', '$2y$10$CJwE9mcq3sYXpwvToC3Y5.8vvOdcntdwbJpxFYdak5kjAHoLRm28K', '1', '2021-05-10 13:15:06', '2021-05-10 13:15:06'),
	(3, 'Guatuso', 'Andres', '0962120100', 'andres@gmail.com', 'C', 'andres', '$2y$10$CJwE9mcq3sYXpwvToC3Y5.8vvOdcntdwbJpxFYdak5kjAHoLRm28K', '1', '2021-05-10 13:15:06', '2021-05-10 13:15:06'),
	(4, 'Castro', 'kevin', '0962120100', 'kevin@gmail.com', 'V', 'kevin', '$2y$10$CJwE9mcq3sYXpwvToC3Y5.8vvOdcntdwbJpxFYdak5kjAHoLRm28K', '1', '2021-05-10 13:15:06', '2021-05-10 13:15:06'),
	(5, 'Gonzales', 'Tifanyta', '0962120100', 'tifa@gmail.com', 'A', 'tifa', '$2y$10$CJwE9mcq3sYXpwvToC3Y5.8vvOdcntdwbJpxFYdak5kjAHoLRm28K', '1', NULL, NULL),
	(6, 'Gonzales', 'Esteban', '0962120100', 'esteban@gmail.com', 'A', 'esteban', '$2y$10$Z47Xgs8YUEYX7.V5tr60qeJiKKKBoRYPriY8uajsaWJRCNjYYSZKq', '1', '2021-06-17 04:51:47', '2021-06-17 04:51:47');
/*!40000 ALTER TABLE `nomina` ENABLE KEYS */;

-- Volcando estructura para tabla leon.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla leon.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla leon.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `id_prod` int(11) NOT NULL AUTO_INCREMENT,
  `id_procli` int(11) NOT NULL,
  `id_nomi` int(11) NOT NULL,
  `codigo` varchar(20) DEFAULT NULL,
  `pvp` varchar(20) DEFAULT NULL,
  `nombre_descripcion` varchar(100) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `material` varchar(50) DEFAULT NULL,
  `nivel_proteccion` varchar(50) DEFAULT NULL,
  `tamano` varchar(50) DEFAULT NULL,
  `capacidad` varchar(50) DEFAULT NULL,
  `accesos` varchar(50) DEFAULT NULL,
  `aplicacion` varchar(50) DEFAULT NULL,
  `tipo_conector` varchar(50) DEFAULT NULL,
  `estandar` varchar(50) DEFAULT NULL,
  `numero_hilos` varchar(50) DEFAULT NULL,
  `vanos_span` varchar(50) DEFAULT NULL,
  `unidad_medida` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_prod`),
  KEY `fk_reference_1` (`id_procli`),
  KEY `fk_reference_16` (`id_nomi`),
  CONSTRAINT `fk_reference_1` FOREIGN KEY (`id_procli`) REFERENCES `proveedores_clientes` (`id_procli`),
  CONSTRAINT `fk_reference_16` FOREIGN KEY (`id_nomi`) REFERENCES `nomina` (`id_nomi`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla leon.producto: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` (`id_prod`, `id_procli`, `id_nomi`, `codigo`, `pvp`, `nombre_descripcion`, `marca`, `modelo`, `material`, `nivel_proteccion`, `tamano`, `capacidad`, `accesos`, `aplicacion`, `tipo_conector`, `estandar`, `numero_hilos`, `vanos_span`, `unidad_medida`) VALUES
	(1, 1, 1, 'CCTU-CMDR-2H2KM', '50', 'Cajas Nap', 'CNT', 'GFS-16G', 'Plastico', 'IP65', '300*200', '16 adaptadores', '15', 'Derivacion', 'RJ45', 'G.457A2', '2', '80 mtrs', 'Metros'),
	(4, 1, 1, 'CCTU-CMDR-2H2KM', '50', 'Cajas OPticas', 'CNT', 'GFS-16G', 'Plastico', 'IP65', '300*200', '16 adaptadores', '15', 'Derivacion', 'RJ45', 'G.457A2', '2', '90 mtrs', 'Metros'),
	(5, 5, 1, 'CCTU-CMDR-2H2KM', '50', 'Cajas de Distribucion', 'CNT', 'GFS-16G', 'Plastico', 'IP65', '300*200', '16 adaptadores', '15', 'Derivacion', 'RJ45', 'G.457A2', '2', '90 mtrs', 'Metros'),
	(6, 1, 1, 'CCTU-CMDR-2H2KM', '50', 'Router', 'CNT', 'GFS-16G', 'Plastico', 'IP65', '300*200', NULL, '15', 'Derivacion', 'RJ45', 'G.457A2', '2', '90 mtrs', 'Metros'),
	(7, 1, 1, 'CCTU-CMDR-2H2KM', '50', 'switch', 'CNT', 'GFS-16G', 'Plastico', 'IP65', '300*200', NULL, '15', 'Derivacion', 'RJ45', 'G.457A2', '2', '90 mtrs', 'Metros');
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Volcando estructura para tabla leon.proveedores_clientes
CREATE TABLE IF NOT EXISTS `proveedores_clientes` (
  `id_procli` int(11) NOT NULL AUTO_INCREMENT,
  `id_nomi` int(11) NOT NULL,
  `tipo_identificacion` varchar(15) DEFAULT NULL,
  `actividad` int(11) DEFAULT NULL,
  `tipo_provedor` int(11) DEFAULT NULL,
  `razon_social` varchar(100) DEFAULT NULL,
  `nombre_comercial` varchar(100) DEFAULT NULL,
  `fec_nac` date DEFAULT NULL,
  `telefono_movil` varchar(20) DEFAULT NULL,
  `telefono_convencional` varchar(20) DEFAULT NULL,
  `correo` varchar(100) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `forma_pago` int(11) DEFAULT NULL,
  `observaciones` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_procli`),
  KEY `fk_reference_3` (`id_nomi`),
  CONSTRAINT `fk_reference_3` FOREIGN KEY (`id_nomi`) REFERENCES `nomina` (`id_nomi`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla leon.proveedores_clientes: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `proveedores_clientes` DISABLE KEYS */;
INSERT INTO `proveedores_clientes` (`id_procli`, `id_nomi`, `tipo_identificacion`, `actividad`, `tipo_provedor`, `razon_social`, `nombre_comercial`, `fec_nac`, `telefono_movil`, `telefono_convencional`, `correo`, `direccion`, `forma_pago`, `observaciones`) VALUES
	(1, 1, 'Ruc', 1, 1, 'CNT', 'Rodolfito', '2021-05-20', '0962120100', '3003581', 'cliente@gmail.com', 'Guamani', 2, 'ninguna'),
	(5, 1, 'Ruc', 1, 1, 'CNT', 'CNT', '2021-05-24', '0962120100', '3003581', 'cliente@gmail.com', 'Guamani', 1, 'ninguna'),
	(6, 1, 'Ruc', 1, 1, 'Anonimo', 'Anonimo', '2021-05-30', '0962120100', '3003581', 'cliente@gmail.com', 'Guamani', 1, 'ninguna'),
	(7, 1, 'Ruc', 1, 1, 'Chicher', 'Porfe', '2021-05-24', '0962120100', '3003581', 'profe@gmail.com', 'Guamani', 1, 'ninguna');
/*!40000 ALTER TABLE `proveedores_clientes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
