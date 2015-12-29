-- MySQL dump 10.15  Distrib 10.0.21-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: db_board
-- ------------------------------------------------------
-- Server version	10.0.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `table_account`
--

DROP TABLE IF EXISTS `table_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_account` (
  `num` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `pw` varchar(50) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_account`
--

LOCK TABLES `table_account` WRITE;
/*!40000 ALTER TABLE `table_account` DISABLE KEYS */;
INSERT INTO `table_account` VALUES (1,'admin','*00A51F3F48415C7D4E8908980D443C29C69B60C9');
/*!40000 ALTER TABLE `table_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_board`
--

DROP TABLE IF EXISTS `table_board`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_board` (
  `num` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` varchar(22) NOT NULL,
  `content` varchar(500) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_board`
--

LOCK TABLES `table_board` WRITE;
/*!40000 ALTER TABLE `table_board` DISABLE KEYS */;
INSERT INTO `table_board` VALUES (11,'first','first article','2015. 10. 16. 09:17:','yeah'),(13,'131313','1313131','2015. 10. 16. 09:25:59','13th article'),(14,'131313','1313131','2015. 10. 16. 09:27:13','31313131313'),(15,'131313','1313131','2015. 10. 16. 09:30:02','31313131313'),(16,'131313','1313131','2015. 10. 16. 09:30:06','31313131313'),(17,'131313','1313131','2015. 10. 16. 09:33:08','31313131313'),(18,'131313','1313131','2015. 10. 16. 09:33:31','31313131313'),(19,'asdf','fdsa','2015. 10. 16. 09:40:33','asdfasdfasdfadfaf'),(20,'final','final test','2015. 10. 16. 12:08:39','hhhhhhhhhhhhhhh');
/*!40000 ALTER TABLE `table_board` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_comment`
--

DROP TABLE IF EXISTS `table_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_comment` (
  `num` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `date` varchar(22) NOT NULL,
  `comment` varchar(50) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_comment`
--

LOCK TABLES `table_comment` WRITE;
/*!40000 ALTER TABLE `table_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `table_comment` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-30  8:02:07
