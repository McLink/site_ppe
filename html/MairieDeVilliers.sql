DROP Database MairieDeVilliers;
CREATE Database MairieDeVilliers;
use MairieDeVilliers;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: ppe
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `cantine`
--

DROP TABLE IF EXISTS `cantine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cantine` (
  `IDINSCRIT` char(4) NOT NULL,
  `CODEPERIODE` char(32) NOT NULL,
  `ETABLISSEMENT` varchar(32) DEFAULT NULL,
  `DATEINSCRIPTION` date DEFAULT NULL,
  `CAPACITE` char(32) DEFAULT NULL,
  `NBENFANT` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDINSCRIT`),
  KEY `I_FK_CANTINE_PERIODE_CANTINE` (`CODEPERIODE`),
  CONSTRAINT `cantine_ibfk_1` FOREIGN KEY (`CODEPERIODE`) REFERENCES `periode_cantine` (`CODEPERIODE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cantine`
--

LOCK TABLES `cantine` WRITE;
/*!40000 ALTER TABLE `cantine` DISABLE KEYS */;
/*!40000 ALTER TABLE `cantine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoriepro`
--

DROP TABLE IF EXISTS `categoriepro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoriepro` (
  `CODECAT` char(32) NOT NULL,
  `LIBELLECAT` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`CODECAT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoriepro`
--

LOCK TABLES `categoriepro` WRITE;
/*!40000 ALTER TABLE `categoriepro` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoriepro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `centre_de_loisirs`
--

DROP TABLE IF EXISTS `centre_de_loisirs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `centre_de_loisirs` (
  `IDINSCRIT` char(32) NOT NULL,
  `ECOLE` char(32) DEFAULT NULL,
  `DATEINSCRIPTIONS` date DEFAULT NULL,
  `REGION` char(32) DEFAULT NULL,
  `CAPACITE` char(32) DEFAULT NULL,
  PRIMARY KEY (`IDINSCRIT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `centre_de_loisirs`
--

LOCK TABLES `centre_de_loisirs` WRITE;
/*!40000 ALTER TABLE `centre_de_loisirs` DISABLE KEYS */;
/*!40000 ALTER TABLE `centre_de_loisirs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employe`
--

DROP TABLE IF EXISTS `employe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employe` (
  `IDEMPLOYE` char(6) NOT NULL,
  `CIVILITE` varchar(4) DEFAULT NULL,
  `NOM` varchar(35) DEFAULT NULL,
  `PRENOM` varchar(35) DEFAULT NULL,
  `DATENAISS` date DEFAULT NULL,
  `ADRESSE` varchar(60) DEFAULT NULL,
  `CP` varchar(6) DEFAULT NULL,
  `TEL` varchar(10) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IDEMPLOYE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employe`
--

LOCK TABLES `employe` WRITE;
/*!40000 ALTER TABLE `employe` DISABLE KEYS */;
/*!40000 ALTER TABLE `employe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enfants`
--

DROP TABLE IF EXISTS `enfants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enfants` (
  `IDENF` varchar(4) NOT NULL,
  `IDCLIENT` int(11) NOT NULL,
  `IDINSCRIT` varchar(4) NOT NULL,
  `IDCLIENT_1` char(6) NOT NULL,
  `IDEMPLOYE` char(6) NOT NULL,
  `NOM` varchar(40) DEFAULT NULL,
  `PRENOM` varchar(40) DEFAULT NULL,
  `DATEN` date DEFAULT NULL,
  `SEXE` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`IDENF`),
  KEY `I_FK_ENFANTS_PERSONNE` (`IDCLIENT`),
  KEY `I_FK_ENFANTS_CANTINE` (`IDINSCRIT`),
  KEY `I_FK_ENFANTS_PERSONNE_2` (`IDCLIENT_1`),
  KEY `I_FK_ENFANTS_EMPLOYE` (`IDEMPLOYE`),
  CONSTRAINT `enfants_ibfk_3` FOREIGN KEY (`IDEMPLOYE`) REFERENCES `employe` (`IDEMPLOYE`),
  CONSTRAINT `enfants_ibfk_1` FOREIGN KEY (`IDCLIENT`) REFERENCES `personne` (`IDCLIENT`),
  CONSTRAINT `enfants_ibfk_2` FOREIGN KEY (`IDINSCRIT`) REFERENCES `cantine` (`IDINSCRIT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enfants`
--

LOCK TABLES `enfants` WRITE;
/*!40000 ALTER TABLE `enfants` DISABLE KEYS */;
/*!40000 ALTER TABLE `enfants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formulaire`
--

DROP TABLE IF EXISTS `formulaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formulaire` (
  `IDFORM` char(32) NOT NULL,
  `IDEMPLOYE` char(6) NOT NULL,
  `IDCLIENT` int(11) NOT NULL,
  `CATEGORIE` char(32) DEFAULT NULL,
  `ADRESSERESIDENCE` varchar(32) DEFAULT NULL,
  `MOTIF` char(32) DEFAULT NULL,
  PRIMARY KEY (`IDFORM`),
  UNIQUE KEY `I_FK_FORMULAIRE_PERSONNE` (`IDCLIENT`),
  KEY `I_FK_FORMULAIRE_EMPLOYE` (`IDEMPLOYE`),
  CONSTRAINT `formulaire_ibfk_2` FOREIGN KEY (`IDCLIENT`) REFERENCES `personne` (`IDCLIENT`),
  CONSTRAINT `formulaire_ibfk_1` FOREIGN KEY (`IDEMPLOYE`) REFERENCES `employe` (`IDEMPLOYE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formulaire`
--

LOCK TABLES `formulaire` WRITE;
/*!40000 ALTER TABLE `formulaire` DISABLE KEYS */;
/*!40000 ALTER TABLE `formulaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inscrire2`
--

DROP TABLE IF EXISTS `inscrire2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inscrire2` (
  `IDINSCRIT` char(32) NOT NULL,
  `IDCLIENT` int(11) NOT NULL,
  `DATEINSCRIPTION` date DEFAULT NULL,
  `DATEFINABONNEMENT` date DEFAULT NULL,
  `TARIF` char(32) DEFAULT NULL,
  PRIMARY KEY (`IDINSCRIT`,`IDCLIENT`),
  KEY `I_FK_INSCRIRE2_CENTRE_DE_LOISIRS` (`IDINSCRIT`),
  KEY `I_FK_INSCRIRE2_PERSONNE` (`IDCLIENT`),
  CONSTRAINT `inscrire2_ibfk_2` FOREIGN KEY (`IDCLIENT`) REFERENCES `personne` (`IDCLIENT`),
  CONSTRAINT `inscrire2_ibfk_1` FOREIGN KEY (`IDINSCRIT`) REFERENCES `centre_de_loisirs` (`IDINSCRIT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscrire2`
--

LOCK TABLES `inscrire2` WRITE;
/*!40000 ALTER TABLE `inscrire2` DISABLE KEYS */;
/*!40000 ALTER TABLE `inscrire2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periode_cantine`
--

DROP TABLE IF EXISTS `periode_cantine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periode_cantine` (
  `CODEPERIODE` char(32) NOT NULL,
  `DATEDEBUT` date DEFAULT NULL,
  `DATEFIN` date DEFAULT NULL,
  `TARIF` char(32) DEFAULT NULL,
  PRIMARY KEY (`CODEPERIODE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periode_cantine`
--

LOCK TABLES `periode_cantine` WRITE;
/*!40000 ALTER TABLE `periode_cantine` DISABLE KEYS */;
/*!40000 ALTER TABLE `periode_cantine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personne`
--

DROP TABLE IF EXISTS `personne`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personne` (
  `IDCLIENT` int(11) NOT NULL AUTO_INCREMENT,
  `CODECAT` char(32) NOT NULL,
  `SEXE` varchar(15) DEFAULT NULL,
  `NOM` varchar(35) DEFAULT NULL,
  `PRENOM` varchar(35) DEFAULT NULL,
  `DATENAISS` date DEFAULT NULL,
  `ADRESSE` varchar(60) DEFAULT NULL,
  `CP` varchar(6) DEFAULT NULL,
  `TEL` varchar(10) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IDCLIENT`),
  KEY `I_FK_PERSONNE_CATEGORIEPRO` (`CODECAT`),
  CONSTRAINT `personne_ibfk_1` FOREIGN KEY (`CODECAT`) REFERENCES `categoriepro` (`CODECAT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personne`
--

LOCK TABLES `personne` WRITE;
/*!40000 ALTER TABLE `personne` DISABLE KEYS */;
/*!40000 ALTER TABLE `personne` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-19 13:36:04
