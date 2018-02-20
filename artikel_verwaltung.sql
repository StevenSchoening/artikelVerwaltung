# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.6.35)
# Database: artikel_verwaltung
# Generation Time: 2018-02-20 12:00:05 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table artikel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `artikel`;

CREATE TABLE `artikel` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `artikelnummer` int(11) unsigned NOT NULL,
  `bezeichnung` varchar(200) DEFAULT NULL,
  `einkaufspreis` float DEFAULT NULL,
  `verkaufspreis` float DEFAULT NULL,
  `beschreibung` text,
  `erstellungsdatum` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

LOCK TABLES `artikel` WRITE;
/*!40000 ALTER TABLE `artikel` DISABLE KEYS */;

INSERT INTO `artikel` (`id`, `artikelnummer`, `bezeichnung`, `einkaufspreis`, `verkaufspreis`, `beschreibung`, `erstellungsdatum`)
VALUES
	(1,1,'Schuh',25.23,75.95,'Ein Schuh zum Anziehen.','2018-02-20 12:50:07'),
	(2,2,'Hose',12.32,95.95,'Jeanshose. Slim Fit. Rot.','2018-02-20 12:50:55'),
	(3,3,'Jacke',25.97,249.95,'Grüne Jacke. Wasserdicht.','2018-02-20 12:52:07'),
	(4,4,'Sandalen',12.12,89.95,'Luftige Sandalen. Besonders gut im Sommer.\n','2018-02-20 12:52:45'),
	(5,5,'Handschuhe',5.69,24.95,'Winterhandschuhe. Für die kalten Tage.','2018-02-20 12:53:04'),
	(6,6,'Armbanduhr',19.29,114.25,'Armbanduhr. Grünes Leder.','2018-02-20 12:53:36');

/*!40000 ALTER TABLE `artikel` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
