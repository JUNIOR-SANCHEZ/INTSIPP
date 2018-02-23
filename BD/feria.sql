-- MySQL dump 10.16  Distrib 10.1.29-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: feria
-- ------------------------------------------------------
-- Server version	10.1.29-MariaDB

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
-- Current Database: `feria`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `feria` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */;

USE `feria`;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_usu` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usu` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `nick_usu` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `password_usu` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `correo_usu` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `role` enum('admin','especial','usuario') COLLATE utf8_spanish2_ci NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `fecha_usu` date NOT NULL,
  PRIMARY KEY (`id_usu`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Junior Sanchez','Junior','710f9d5d43fb39fb06facf99d677841a2e19c07b','junior@hot.com','admin',1,'0000-00-00'),(2,'Marta Suarez','MarSu','cfcd6ab6586aded82e507c1d2666e86af7801223','marta@gmail.com','usuario',1,'2018-02-11'),(3,'Monica Sanchez','MoSan','6c14cd833e5c7d436e7e17e8e8f2b8ba25f40075','monica@gmail.com','usuario',1,'2018-02-11'),(4,'Maria Perez','MaPe','e5a0628f6fdf2ae16c8f533b8bf3777f1cf7ae23','maria@gmail.com','usuario',1,'2018-02-11'),(5,'kerly apolo','KeAp','93e86a2698d5486f33053d457d5a0af0909b2d28','kerly@gmail.com','usuario',1,'2018-02-11'),(6,'Carla Castillo','Carla','16009a85174663868ba0baf2f34675e4327f3cd6','carla@gmail.com','usuario',1,'2018-02-11');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-16 16:03:07
