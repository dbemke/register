-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: register
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classes`
--

LOCK TABLES `classes` WRITE;
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
INSERT INTO `classes` VALUES (1,'1a'),(2,'1b'),(3,'1c'),(4,'2a'),(5,'2b'),(6,'2c');
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classes_users`
--

DROP TABLE IF EXISTS `classes_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classes_users` (
  `classes_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`classes_user_id`),
  KEY `class_id` (`class_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `classes_users_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`),
  CONSTRAINT `classes_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classes_users`
--

LOCK TABLES `classes_users` WRITE;
/*!40000 ALTER TABLE `classes_users` DISABLE KEYS */;
INSERT INTO `classes_users` VALUES (1,1,3),(2,2,9),(3,1,10),(4,1,11),(5,1,12);
/*!40000 ALTER TABLE `classes_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject_mark`
--

DROP TABLE IF EXISTS `subject_mark`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subject_mark` (
  `mark_id` int(11) NOT NULL AUTO_INCREMENT,
  `mark` float DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`mark_id`),
  KEY `subject_id` (`subject_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `subject_mark_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`),
  CONSTRAINT `subject_mark_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject_mark`
--

LOCK TABLES `subject_mark` WRITE;
/*!40000 ALTER TABLE `subject_mark` DISABLE KEYS */;
INSERT INTO `subject_mark` VALUES (1,1,1,10),(2,1,1,10),(3,1,1,10),(4,1,1,10),(5,5,1,10),(6,5.5,1,10),(7,5,3,11),(8,3,3,11),(9,6,3,11),(10,3.5,3,11),(11,4.5,2,11),(12,5,2,11),(13,2.5,2,11),(14,3.5,4,9),(15,4,4,9),(16,5.5,4,9),(17,3,4,9),(18,2.5,4,10),(19,3,4,10),(20,4.5,4,10),(21,4,4,10),(22,5,5,12),(23,4,5,12),(24,3,5,12),(25,5,3,9),(26,4.5,3,9),(27,3,3,3),(28,4.5,3,3),(29,5,2,9),(30,4.5,2,9),(31,4.5,6,12),(32,3,6,12);
/*!40000 ALTER TABLE `subject_mark` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES (1,'Biologia'),(2,'Matematyka'),(3,'Wychowanie fizyczne'),(4,'Chemia'),(5,'Fizyka'),(6,'Historia');
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `login` varchar(45) NOT NULL,
  `password` varchar(70) DEFAULT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Jan','Kowalski','admin','admin','admin'),(2,'Adam','Nowakowski','adamnowakowski','1234','nauczyciel'),(3,'Karolina','Top','karolinatop','1234','uczen'),(6,'Monika','Kaczykowska','monikakaczykowska','$2y$10$ScOLXkrvxXzwsmnoutr0gOOYIBGm2pacBvlRlohBvpMhdH8yub3Om','nauczyciel'),(7,'Kamila','Zborowska','kamilazborowska','$2y$10$jX2FxuaSDMMadNgdbQ3Wv.U.n/VsJPJ2E7L7VZ80GG79NCziEY.Fe','nauczyciel'),(8,'Zenon','Mintaj','zenonmintaj','$2y$10$fKWmOxBquK5oXr6k3/SPdufp5pV4WmJ9iWjaHrEAImXYqh70rqPXa','nauczyciel'),(9,'Lena','Kowalczyk','lenakowalczyk','$2y$10$K.9vvqxFeZ5C5OawlvCgfutzqJ55igt0eq/4rEhtdzpGbl9Qmapwy','uczen'),(10,'Tomasz','Wojciechowski','tomaszwojciechowski','$2y$10$peQ4Ip/8T7IJRp.p9JVlr.OYh5/n9AKWWkbYpFBG9LOBfiVZNIN3O','uczen'),(11,'Karol','Kaczmarek','karolkaczmarek','$2y$10$Z8iPwvLlTRKQbnyvmwuWZesyLSJ9KpZSaKaEWsOq0GN2R7RF6ge3.','uczen'),(12,'Zuzanna','Majewska','zuzannamajewska','$2y$10$sN837CU71JDxGaRrdv1AU.WkJL4PL8B6nLdkajwO5YUaidfCkjrDu','uczen'),(13,'admin','admin','admin','$2y$10$GDc.kzLfJqJhST/C.tY3/.slhzvGePacUVZHMjK4hUcxWz4oBWjL.','admin'),(14,'Anna','Dymna','annadymna','$2y$10$b8zQUAiBBaI.cu8l6Isod.h9vKuxO3weIfFw9SM19pNCuu42q5VNi','nauczyciel');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-09 18:40:59
