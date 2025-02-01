CREATE DATABASE  IF NOT EXISTS `82hospital` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `82hospital`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: 82hospital
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `appointment` (
  `pname` varchar(45) NOT NULL,
  `pcontact` varchar(45) DEFAULT NULL,
  `pdoc` varchar(45) DEFAULT NULL,
  `preason` varchar(200) DEFAULT NULL,
  `ptime` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`pname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointment`
--

LOCK TABLES `appointment` WRITE;
/*!40000 ALTER TABLE `appointment` DISABLE KEYS */;
INSERT INTO `appointment` VALUES ('','','','',''),('Althaf','0765890765','Jack','I have Painful Headaches','11am'),('Ammar','0766456789','Fred','Pain In Front Tooth','10am'),('Arkam','0755467898','Chael','Cant Feel My Toes','5pm'),('Fahad','0755653456','Jack','Need A Checkup','5.30pm');
/*!40000 ALTER TABLE `appointment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctors` (
  `d_id` int NOT NULL,
  `d_name` varchar(255) DEFAULT NULL,
  `d_spec` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctors`
--

LOCK TABLES `doctors` WRITE;
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;
INSERT INTO `doctors` VALUES (1,'Frank','Cardiologist'),(2,'Mike','Orthopedics'),(3,'Jones','Surgeon'),(4,'Daniel','Urology'),(5,'Chael','Neurology'),(6,'Dustin','Radiology'),(7,'Alex','Anesthesiology'),(8,'Charles','Pediatrics'),(9,'Travis','Immunology');
/*!40000 ALTER TABLE `doctors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','doctor','receptionist') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'admin','admin123','admin'),(2,'doc','doc123','doctor'),(3,'rec','rec123','receptionist');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `p_appointment`
--

DROP TABLE IF EXISTS `p_appointment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `p_appointment` (
  `pname` varchar(255) NOT NULL,
  `pcontact` varchar(45) DEFAULT NULL,
  `pdoc` varchar(45) DEFAULT NULL,
  `preason` varchar(255) DEFAULT NULL,
  `ptime` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`pname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `p_appointment`
--

LOCK TABLES `p_appointment` WRITE;
/*!40000 ALTER TABLE `p_appointment` DISABLE KEYS */;
/*!40000 ALTER TABLE `p_appointment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patients` (
  `pid` int NOT NULL,
  `pname` varchar(45) DEFAULT NULL,
  `paddress` varchar(45) DEFAULT NULL,
  `page` varchar(45) DEFAULT NULL,
  `pdisease` varchar(45) DEFAULT NULL,
  `pguardian` varchar(45) DEFAULT NULL,
  `pgender` varchar(45) DEFAULT NULL,
  `pcontact` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patients`
--

LOCK TABLES `patients` WRITE;
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
INSERT INTO `patients` VALUES (2,'Moishe','Room 141','33','Cholera','grandmother','Male','6375430607'),(3,'Fitz','Apt 770','55','Smallpox','grandmother','Male','2612672044'),(4,'Nert','Suite 29','46','Dengue','father','Female','4510549210'),(5,'Harley','Room 1682','100','Flu','mother','Female','1653787511'),(6,'Ryan','Apt 891','12','migraine','grandfather','Male','0807564486'),(7,'Arty','7th Floor','84','Chickenpox','grandmother','Male','8977938589'),(8,'Trixi','PO Box 8374','86','arthritis','grandmother','Female','0798037970'),(9,'Lexine','PO Box 33443','95','migraine','grandmother','Female','4995399259'),(10,'Andeee','Apt 1726','79','Measles','father','Female','8384176574'),(11,'Dorisa','Room 1964','17','Yellow fever','mother','Female','1314961209'),(12,'Abramo','Room 1612','18','flu','father','Male','5975141729'),(13,'Pierson','Suite 20','24','arthritis','mother','Male','6184145525');
/*!40000 ALTER TABLE `patients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `receptionists`
--

DROP TABLE IF EXISTS `receptionists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `receptionists` (
  `r_id` int NOT NULL,
  `r_name` varchar(45) DEFAULT NULL,
  `r_contact` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `receptionists`
--

LOCK TABLES `receptionists` WRITE;
/*!40000 ALTER TABLE `receptionists` DISABLE KEYS */;
INSERT INTO `receptionists` VALUES (1,'Safiya','0755624544'),(2,'Aysha','0766485257'),(3,'Farha','0722985654');
/*!40000 ALTER TABLE `receptionists` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-19 21:58:14
