-- MariaDB dump 10.19  Distrib 10.6.15-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: assessment
-- ------------------------------------------------------
-- Server version	10.6.15-MariaDB-1:10.6.15+maria~ubu2204

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `destinations`
--

DROP TABLE IF EXISTS `destinations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `destinations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `body_text` varchar(200) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `distance` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destinations`
--

LOCK TABLES `destinations` WRITE;
/*!40000 ALTER TABLE `destinations` DISABLE KEYS */;
INSERT INTO `destinations` VALUES (1,'singapore.webp','Singapore','Singapore, officially the Republic of Singapore, is a sovereign island city-state in maritime Southeast.',10000,1000),(2,'london.webp','London','London, the capital of England and the United Kingdom,\nis a 21st-century citywith history',10000,1000),(3,'newzealand.jpg','Newzealand','New Zealand is an island country in the southwestern Pacific Ocean. It consists oftwo',38000,2000),(4,'thailand.webp','Thailand','Thailand is a SoutheastAsian country. It\'s known fortropicalbeaches, opulent royalpalaces',10000,1000),(5,'borabora.webp','Bora Bora','Bora Bora is a smallSouth Pacific island northwest ofTahiti in French Polynesia. Surrounded by sand',23000,1200),(6,'paris.jpg','Paris','Paris, France\'s capital, is a major European city and a global centerfor art, fashion, gastronomy and',12000,2000);
/*!40000 ALTER TABLE `destinations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-30 17:15:25
