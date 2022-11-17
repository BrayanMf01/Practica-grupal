-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: db_ipisa
-- ------------------------------------------------------
-- Server version	8.0.26

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
-- Table structure for table `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumnos` (
  `ID_Alumno` int NOT NULL AUTO_INCREMENT,
  `año_graduacion` date DEFAULT NULL,
  `institucion_educativa` varchar(45) DEFAULT NULL,
  `curso` varchar(45) DEFAULT NULL,
  `matricula` varchar(45) DEFAULT NULL,
  `cedula` varchar(16) DEFAULT NULL,
  `carrera_tecnica` varchar(45) DEFAULT NULL,
  `tecnico_basico` varchar(45) DEFAULT NULL,
  `Nombres` varchar(45) DEFAULT NULL,
  `Apellidos` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `sector` varchar(45) DEFAULT NULL,
  `seccion` varchar(45) DEFAULT NULL,
  `municipio` varchar(45) DEFAULT NULL,
  `provincia` varchar(45) DEFAULT NULL,
  `nacionalidad` varchar(45) DEFAULT NULL,
  `tel_res` varchar(14) DEFAULT NULL,
  `num_cel` varchar(14) DEFAULT NULL,
  `licencia` varchar(2) DEFAULT NULL,
  `vehiculo` varchar(2) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_Alumno`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos`
--

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES (1,'2022-11-10','IPISA','1ero','51950','402-1801518-5','Artes Aplicadas','N/A','Emil ','Paulino','2005-09-27','M','','Nose','A','Nose','La vega','2','809','8293559767','','','dskhfbskhdf@gmail.com','521581526'),(2,'2020-02-20','IPISA','1ero','3232','402-1801518-5','Artes Gráficas','N/A','Emil ','Paulino','2012-05-05','M','La Zurza','dsfsv','Nose','Nose','bahoruco','1','809','23432','Si','Si','dskhfbskhdf@gmail.com','123232'),(3,'2020-02-20','IPISA','1ero','3232','402-1801518-5','Artes Gráficas','N/A','Emil ','Paulino','2012-05-05','M','La Zurza','dsfsv','Nose','Nose','bahoruco','1','809','23432','Si','Si','dskhfbskhdf@gmail.com','123232'),(4,'2020-02-20','IPISA','1ero','3232','402-1801518-5','Artes Gráficas','N/A','Emil ','Paulino','2012-05-05','M','La Zurza','dsfsv','Nose','Nose','bahoruco','1','809','23432','Si','Si','dskhfbskhdf@gmail.com','123232'),(5,'2020-02-20','IPISA','1ero','3232','402-1801518-5','Artes Gráficas','N/A','Emil ','Paulino','2012-05-05','M','La Zurza','dsfsv','Nose','Nose','bahoruco','1','809','23432','Si','Si','dskhfbskhdf@gmail.com','123232'),(6,'2022-10-30','IPISA','1ero','51950','402-1801518-5','Artes Aplicadas','N/A','Emil ','Paulino','2022-11-22','M','Las Carreras','Nose','Nose','Nose','San Pedro de Macoris','2','809','8293559767','Si','Si','nose@gmail.com','5252500'),(7,'2022-10-30','IPISA','1ero','51950','402-1801518-5','Artes Aplicadas','N/A','Emil ','Paulino','2022-11-22','M','Las Carreras','Nose','Nose','Nose','San Pedro de Macoris','2','809','8293559767','Si','Si','nose@gmail.com','5252500'),(8,'2021-02-19','IPISA','1ero','51950','402-1801518-5','Artes Aplicadas','N/A','Emil ','Paulino','2022-11-30','M','La Zurza','dsfsv','A','Nose','La vega','2','8096122506','23432','Si','','fepaulino18@hotmail.com','+60265025'),(9,'2022-11-30','Institutos','Curso','','','Curso','N/A','mhvchg','jhgv','2022-11-03','M','klb','kihbj','',';kjiguligu','Provincia','','','','','','nose@gmail.com','54165165'),(10,'2022-11-30','Institutos','Curso','','','Curso','N/A','mhvchg','jhgv','2022-11-03','M','klb','kihbj','',';kjiguligu','Provincia','','','','','','nose@gmail.com','54165165'),(11,'2022-10-30','IPISA','1ero','51950','402-1801518-5','Artes Aplicadas','N/A','Emil','Paulino','2005-09-27','F','La Zurza','dsfsv','Nose',';kjiguligu','Maria Trinidad Sanchez','Albania','809','78987','','','dskhfbskhdf@gmail.com','32025000');
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empresas` (
  `ID_Empresa` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `RNC` int DEFAULT NULL,
  `identidad_empresa` varchar(2) DEFAULT NULL,
  `dep_form_lab` varchar(2) DEFAULT NULL,
  `alcance` varchar(45) DEFAULT NULL,
  `actividad_economica` text,
  `industria` varchar(45) DEFAULT NULL,
  `tamaño_empresa` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `sector` varchar(45) DEFAULT NULL,
  `seccion` varchar(45) DEFAULT NULL,
  `municipio` varchar(45) DEFAULT NULL,
  `provinica` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `tel_princip` varchar(14) DEFAULT NULL,
  `tel_direct` varchar(14) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL,
  `contacto` varchar(45) DEFAULT NULL,
  `tel_contacto` varchar(25) DEFAULT NULL,
  `correo_contacto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_Empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vacantes`
--

DROP TABLE IF EXISTS `vacantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vacantes` (
  `ID_Vacante` int NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(45) NOT NULL,
  `nombre_puesto` varchar(45) NOT NULL,
  `perfil_puesto` text NOT NULL,
  `sueldo` varchar(12) NOT NULL,
  `ubicacion` varchar(45) NOT NULL,
  `tipo_contrato` varchar(45) NOT NULL,
  `horario` varchar(45) NOT NULL,
  `correo_curriculum` varchar(45) NOT NULL,
  `persona_contacto` varchar(45) NOT NULL,
  `telefono_contacto` varchar(14) NOT NULL,
  PRIMARY KEY (`ID_Vacante`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vacantes`
--

LOCK TABLES `vacantes` WRITE;
/*!40000 ALTER TABLE `vacantes` DISABLE KEYS */;
INSERT INTO `vacantes` VALUES (1,'','Hola','fsvdsfv','20000','Las Palomas, Licey Al Medio, Santiago, RD','Fijo','8:30 - 6:30','nosex64','Alesa','8293559767'),(2,'Hola','','','','','Fijo','','','',''),(3,'Hola','','','','','Fijo','','','',''),(4,'Hola','','','','','Fijo','','','',''),(5,'','','','','','','','','','');
/*!40000 ALTER TABLE `vacantes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-17 11:08:58
