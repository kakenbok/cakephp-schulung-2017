-- --------------------------------------------------------
-- Host:                         10.0.3.131
-- Server version:               5.7.18-0ubuntu0.16.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for php_glossar
CREATE DATABASE IF NOT EXISTS `php_glossar` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `php_glossar`;

-- Dumping structure for table php_glossar.glossar
DROP TABLE IF EXISTS `glossar`;
CREATE TABLE IF NOT EXISTS `glossar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `term` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table php_glossar.glossar: ~0 rows (approximately)
/*!40000 ALTER TABLE `glossar` DISABLE KEYS */;
INSERT INTO `glossar` (`id`, `term`, `description`) VALUES
	(1, 'PHP', 'Scriptsprache für das Web');
/*!40000 ALTER TABLE `glossar` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
