CREATE DATABASE  IF NOT EXISTS `jthscpd` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `jthscpd`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win32 (AMD64)
--
-- Host: localhost    Database: jthscpd
-- ------------------------------------------------------
-- Server version	5.7.10-log

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
-- Table structure for table `tblcentres`
--

DROP TABLE IF EXISTS `tblcentres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcentres` (
  `centrecode` varchar(4) NOT NULL,
  `centrename` varchar(45) DEFAULT NULL,
  `default` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`centrecode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcentres`
--

LOCK TABLES `tblcentres` WRITE;
/*!40000 ALTER TABLE `tblcentres` DISABLE KEYS */;
INSERT INTO `tblcentres` VALUES ('ABBO','Abbot Beyne',0),('ALLS','All Saints Alrewas',0),('CHAS','Chase Terrace',0),('DEFE','de Ferrers Academy',0),('ERAS','Erasmus Darwin Academy',0),('JTHS','John Taylor High School',1),('KEVI','King Edward VI Lichfield',0),('KING','Kingsmead School',0),('LAND','Landsdowne Infants',0),('OLDF','Oldfields Hall Middle School',0),('PAGE','Paget High School',0),('PAUL','Paulet High School',0),('REDB','Redbrook Hayes',0),('RIVE','River View Primary School',0),('STPE','St Peter\'s Marchington',0),('TAHS','Thomas Alleyne\'s High School',0),('WALT','Walton on Trent Primary',0),('WILL','William Shrewsbury',0),('WOOD','Woodlands Primary',0);
/*!40000 ALTER TABLE `tblcentres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcourses`
--

DROP TABLE IF EXISTS `tblcourses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcourses` (
  `courseid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` longtext,
  `centrecode` varchar(4) DEFAULT NULL,
  `leader` varchar(20) DEFAULT NULL,
  `NFTSprice` decimal(10,0) DEFAULT NULL,
  `externalprice` decimal(10,0) DEFAULT NULL,
  `notes` longtext,
  PRIMARY KEY (`courseid`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcourses`
--

LOCK TABLES `tblcourses` WRITE;
/*!40000 ALTER TABLE `tblcourses` DISABLE KEYS */;
INSERT INTO `tblcourses` VALUES (1,'Intro to programming ',' prr3r3',NULL,NULL,NULL,NULL,NULL),(3,'PHP coding',NULL,NULL,NULL,NULL,NULL,NULL),(4,'MYSQL databases',NULL,NULL,NULL,NULL,NULL,NULL),(6,'Introduction to Python','A fast paced into to this first high level language','PAUL','N.Gallagher',99,125,'Make sure that tea is ready for 5pm.'),(7,'Introduction to Python new \'one\'','A fast paced into to this first high level language','PAUL','N.Gallagher',99,125,'Make sure that tea is ready for 5pm.'),(8,'Introduction to Python new \'one\'','A fast paced into\'\' to this first high level language/','PAUL','N.Gallagher',99,125,'Make sure that tea is ready for 5pm / parking isn\'t blocked'),(9,'vdsv','vdsvds','WALT','N.Gallagher',0,0,'acsac'),(10,'vdsv22','vdsvds22','WALT','N.Gallagher',0,0,'acsac'),(11,'vdsv22','vdsvds22','WALT','N.Gallagher',0,0,'acsac'),(12,'vdsv22','vdsvds22','WALT','N.Gallagher',0,0,'acsac'),(13,'vdsv22','vdsvds22','WALT','N.Gallagher',0,0,'acsac'),(14,'vdsv22','vdsvds22','WALT','N.Gallagher',0,0,'acsac'),(15,'vdsv22','vdsvds22','WALT','N.Gallagher',0,0,'acsac'),(16,'vdsv22','vdsvds22','WALT','N.Gallagher',0,0,'acsac'),(17,'vdsv22','vdsvds22','WALT','N.Gallagher',0,0,'acsac'),(18,'Test course','dwqdwq','VARX','',0,0,''),(19,'Test course','','VARX','',0,0,''),(20,'','','VARX','',0,0,''),(21,'','','VARX','',0,0,''),(22,'','','VARX','',0,0,''),(23,'','','VARX','',0,0,''),(24,'','','VARX','',0,0,''),(25,'Sheep farming','farming sheep in the countryside','TAHS','N.Gallagher',123,120,'This course is not suitable if you are allergic to sheep.'),(26,'Sheep farming','farming sheep in the countryside','TAHS','N.Gallagher',123,120,'This course is not suitable if you are allergic to sheep.'),(27,'Sheep farming','farming sheep in the countryside','TAHS','N.Gallagher',123,120,'This course is not suitable if you are allergic to sheep.'),(28,'Sheep farming','farming sheep in the countryside','TAHS','N.Gallagher',123,120,'This course is not suitable if you are allergic to sheep.'),(29,'Sheep farming','farming sheep in the countryside','TAHS','N.Gallagher',123,120,'This course is not suitable if you are allergic to sheep.'),(30,'Sheep farming','farming sheep in the countryside','TAHS','N.Gallagher',123,120,'This course is not suitable if you are allergic to sheep.'),(31,'Sheep farming','farming sheep in the countryside','TAHS','N.Gallagher',123,120,'This course is not suitable if you are allergic to sheep.'),(32,'Sheep farming','farming sheep in the countryside','TAHS','N.Gallagher',123,120,'This course is not suitable if you are allergic to sheep.'),(33,'Sheep farming','farming sheep in the countryside','TAHS','N.Gallagher',123,120,'This course is not suitable if you are allergic to sheep.'),(34,'Sheep farming','farming sheep in the countryside','TAHS','N.Gallagher',123,120,'This course is not suitable if you are allergic to sheep.'),(35,'Sheep farming','farming sheep in the countryside','TAHS','N.Gallagher',123,120,'This course is not suitable if you are allergic to sheep.'),(36,'Sheep farming','farming sheep in the countryside','TAHS','N.Gallagher',123,120,'This course is not suitable if you are allergic to sheep.'),(37,'Sheep farming','farming sheep in the countryside','TAHS','N.Gallagher',123,120,'This course is not suitable if you are allergic to sheep.'),(38,'Sheep farming','farming sheep in the countryside','TAHS','N.Gallagher',123,120,'This course is not suitable if you are allergic to sheep.'),(39,'Sheep farming','farming sheep in the countryside','TAHS','N.Gallagher',123,120,'This course is not suitable if you are allergic to sheep.'),(40,'Sheep farming','farming sheep in the countryside','TAHS','N.Gallagher',123,120,'This course is not suitable if you are allergic to sheep.'),(41,'Sheep farming','farming sheep in the countryside','TAHS','N.Gallagher',123,120,'This course is not suitable if you are allergic to sheep.'),(42,'Sheep farming','farming sheep in the countryside','TAHS','N.Gallagher',123,120,'This course is not suitable if you are allergic to sheep.'),(43,'Sheep farming','farming sheep in the countryside','TAHS','N.Gallagher',123,120,'This course is not suitable if you are allergic to sheep.'),(44,'Sheep farming','farming sheep in the countryside','TAHS','N.Gallagher',123,120,'This course is not suitable if you are allergic to sheep.'),(45,'Intro to C++','New course for C++','OLDF','g.craddock',0,123,'notes'),(46,'Test','new one','ABBO','N.Gallagher',0,0,'');
/*!40000 ALTER TABLE `tblcourses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblsessions`
--

DROP TABLE IF EXISTS `tblsessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblsessions` (
  `sessionID` int(11) NOT NULL AUTO_INCREMENT,
  `sessiontitle` varchar(50) DEFAULT NULL,
  `sessionvenue` varchar(4) DEFAULT NULL,
  `sessionroom` varchar(45) DEFAULT NULL,
  `sessionfacilitator` varchar(20) DEFAULT NULL,
  `sessiondate` varchar(10) DEFAULT NULL,
  `sessionstarttime` varchar(10) DEFAULT NULL,
  `sessionendtime` varchar(10) DEFAULT NULL,
  `sessionnotes` longtext,
  `courseID` int(11) NOT NULL,
  PRIMARY KEY (`sessionID`),
  KEY `courseID_idx` (`courseID`),
  CONSTRAINT `courseID` FOREIGN KEY (`courseID`) REFERENCES `tblcourses` (`courseid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblsessions`
--

LOCK TABLES `tblsessions` WRITE;
/*!40000 ALTER TABLE `tblsessions` DISABLE KEYS */;
INSERT INTO `tblsessions` VALUES (7,'','JTHS','','','','','','',18),(8,'','JTHS','','','','','','',19),(9,'','JTHS','','','','','','',20),(10,'','JTHS','','','','','','',21),(11,'','JTHS','','','','','','',22),(12,'','JTHS','','','','','','',23),(13,'','JTHS','','','','','','',24),(14,'Intro to sheep','JTHS','U11','F.Craddock','27/09/2016','12pm','3pm','sds',25),(15,'Second sheep session','JTHS','U11','','17/11/2016','3pm','4.40','dsad',25),(16,'Last one','WILL','U10','bobbobsson','17/02/2017','3pm','5pm','ddwedew',25),(17,'Intro to sheep','JTHS','U11','F.Craddock','27/09/2016','12pm','3pm','sds',26),(18,'Second sheep session','JTHS','U11','','17/11/2016','3pm','4.40','dsad',26),(19,'Last one','WILL','U10','bobbobsson','17/02/2017','3pm','5pm','ddwedew',26),(20,'Intro to sheep','JTHS','U11','F.Craddock','27/09/2016','12pm','3pm','sds',27),(21,'Second sheep session','JTHS','U11','','17/11/2016','3pm','4.40','dsad',27),(22,'Last one','WILL','U10','bobbobsson','17/02/2017','3pm','5pm','ddwedew',27),(23,'Intro to sheep','JTHS','U11','F.Craddock','27/09/2016','12pm','3pm','sds',28),(24,'Second sheep session','JTHS','U11','','17/11/2016','3pm','4.40','dsad',28),(25,'Last one','WILL','U10','bobbobsson','17/02/2017','3pm','5pm','ddwedew',28),(26,'Intro to sheep','JTHS','U11','F.Craddock','27/09/2016','12pm','3pm','sds',29),(27,'Second sheep session','JTHS','U11','','17/11/2016','3pm','4.40','dsad',29),(28,'Last one','WILL','U10','bobbobsson','17/02/2017','3pm','5pm','ddwedew',29),(29,'Intro to sheep','JTHS','U11','F.Craddock','27/09/2016','12pm','3pm','sds',30),(30,'Second sheep session','JTHS','U11','','17/11/2016','3pm','4.40','dsad',30),(31,'Last one','WILL','U10','bobbobsson','17/02/2017','3pm','5pm','ddwedew',30),(32,'Intro to sheep','JTHS','U11','F.Craddock','27/09/2016','12pm','3pm','sds',31),(33,'Second sheep session','JTHS','U11','','17/11/2016','3pm','4.40','dsad',31),(34,'Last one','WILL','U10','bobbobsson','17/02/2017','3pm','5pm','ddwedew',31),(35,'Intro to sheep','JTHS','U11','F.Craddock','27/09/2016','12pm','3pm','sds',32),(36,'Second sheep session','JTHS','U11','','17/11/2016','3pm','4.40','dsad',32),(37,'Last one','WILL','U10','bobbobsson','17/02/2017','3pm','5pm','ddwedew',32),(38,'Intro to sheep','JTHS','U11','F.Craddock','27/09/2016','12pm','3pm','sds',33),(39,'Second sheep session','JTHS','U11','','17/11/2016','3pm','4.40','dsad',33),(40,'Last one','WILL','U10','bobbobsson','17/02/2017','3pm','5pm','ddwedew',33),(41,'Intro to sheep','JTHS','U11','F.Craddock','27/09/2016','12pm','3pm','sds',34),(42,'Second sheep session','JTHS','U11','','17/11/2016','3pm','4.40','dsad',34),(43,'Last one','WILL','U10','bobbobsson','17/02/2017','3pm','5pm','ddwedew',34),(44,'Intro to sheep','JTHS','U11','F.Craddock','27/09/2016','12pm','3pm','sds',35),(45,'Second sheep session','JTHS','U11','','17/11/2016','3pm','4.40','dsad',35),(46,'Last one','WILL','U10','bobbobsson','17/02/2017','3pm','5pm','ddwedew',35),(47,'Intro to sheep','JTHS','U11','F.Craddock','27/09/2016','12pm','3pm','sds',36),(48,'Second sheep session','JTHS','U11','','17/11/2016','3pm','4.40','dsad',36),(49,'Last one','WILL','U10','bobbobsson','17/02/2017','3pm','5pm','ddwedew',36),(50,'Intro to sheep','JTHS','U11','F.Craddock','27/09/2016','12pm','3pm','sds',37),(51,'Second sheep session','JTHS','U11','','17/11/2016','3pm','4.40','dsad',37),(52,'Last one','WILL','U10','bobbobsson','17/02/2017','3pm','5pm','ddwedew',37),(53,'Intro to sheep','JTHS','U11','F.Craddock','27/09/2016','12pm','3pm','sds',38),(54,'Second sheep session','JTHS','U11','','17/11/2016','3pm','4.40','dsad',38),(55,'Last one','WILL','U10','bobbobsson','17/02/2017','3pm','5pm','ddwedew',38),(56,'Intro to sheep','JTHS','U11','F.Craddock','27/09/2016','12pm','3pm','sds',39),(57,'Second sheep session','JTHS','U11','','17/11/2016','3pm','4.40','dsad',39),(58,'Last one','WILL','U10','bobbobsson','17/02/2017','3pm','5pm','ddwedew',39),(59,'Intro to sheep','JTHS','U11','F.Craddock','27/09/2016','12pm','3pm','sds',40),(60,'Second sheep session','JTHS','U11','','17/11/2016','3pm','4.40','dsad',40),(61,'Last one','WILL','U10','bobbobsson','17/02/2017','3pm','5pm','ddwedew',40),(62,'Intro to sheep','JTHS','U11','F.Craddock','27/09/2016','12pm','3pm','sds',41),(63,'Second sheep session','JTHS','U11','bobbobsson','17/11/2016','3pm','4.40','dsad',41),(64,'Last one','WILL','U10','bobbobsson','17/02/2017','3pm','5pm','ddwedew',41),(65,'Intro to sheep','JTHS','U11','F.Craddock','27/09/2016','12pm','3pm','sds',42),(66,'Second sheep session','JTHS','U11','bobbobsson','17/11/2016','3pm','4.40','dsad',42),(67,'Last one','WILL','U10','bobbobsson','17/02/2017','3pm','5pm','ddwedew',42),(68,'Intro to sheep','JTHS','U11','F.Craddock','27/09/2016','12pm','3pm','sds',43),(69,'Second sheep session','JTHS','U11','bobbobsson','17/11/2016','3pm','4.40','dsad',43),(70,'Last one','WILL','U10','bobbobsson','17/02/2017','3pm','5pm','ddwedew',43),(71,'Intro to sheep','JTHS','U11','F.Craddock','27/09/2016','12pm','3pm','sds',44),(72,'Second sheep session','JTHS','U11','bobbobsson','17/11/2016','3pm','4.40','dsad',44),(73,'Last one','WILL','U10','bobbobsson','17/02/2017','3pm','5pm','ddwedew',44),(74,'New C++','JTHS','wqd','ff','27/09/2016','dwqdqw','dqdwq','dwqdqw',45),(75,'dwqdwq','JTHS','dwqdwq','G.Andresson','17/09/2016','dqwd','dwqdqw','dwqdwqdw',45),(76,'','JTHS','','','','','','',46);
/*!40000 ALTER TABLE `tblsessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblusers`
--

DROP TABLE IF EXISTS `tblusers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblusers` (
  `username` varchar(20) NOT NULL,
  `pwhash` varchar(64) DEFAULT NULL,
  `accesslevel` varchar(5) DEFAULT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `centrecode` varchar(4) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblusers`
--

LOCK TABLES `tblusers` WRITE;
/*!40000 ALTER TABLE `tblusers` DISABLE KEYS */;
INSERT INTO `tblusers` VALUES ('','$2a$09$cMc6sERe76k4$$$$$$$$$.VeTvqAi9M9a6YnXsMEag74jGYfSmO7q','USER','Robson2','dennis','KING','dasdsa@ggk.com'),('.','$2a$09$cMc6sERe76k4$$$$$$$$$.Ym0O/EIntnqNYHWgmezxnsmgbz.FUie','','','','',''),('.1','$2a$09$cMc6sERe76k4$$$$$$$$$.HlOTeTw50rVSpnvlzxcasnIXjPwCJYi','','','','JTHS',''),('.2','$2a$09$cMc6sERe76k4$$$$$$$$$..ZtqHx3LuTifhYPEHZaxoI0KJuw85Y2','','','','JTHS',''),('.3','$2a$09$cMc6sERe76k4$$$$$$$$$.87IP6Rq/ORlky.n4WYEgml6mlBPdmDi','','','','JTHS',''),('.4','$2a$09$cMc6sERe76k4$$$$$$$$$.bvDt4dKiV9T67.NP2ebdPlqaaCAbHxK','','','','JTHS',''),('33221','$2a$09$cMc6sERe76k4$$$$$$$$$.nP1D0UUsOVV0mPJM.VZ6W8fDy5TKaaW','USER','Andreas','Andressonsssoon','KING','gg.cedw@dqwd.com'),('a.spencer','$2a$09$cMc6sERe76k4$$$$$$$$$.3Oxd.q6HOEmGU7Q9DHu/ZwtnLihGn5W','USER','Alison','Spencer','JTHS','a.spencer@jths.co.uk'),('b.saewre','$2a$09$cMc6sERe76k4$$$$$$$$$.DBY73NVDVA6Tn3kwNBWHcVo5SLwr3Ga','USER','bobby','saewre','JTHS','gavincraddock@gmail.com'),('b.saewre1','$2a$09$cMc6sERe76k4$$$$$$$$$.a7pn8hxu1h86xNZF5yaB4efSpzdQoPC','USER','bobby','saewre','JTHS','gavincraddock@gmail.com'),('b.saewre2','$2a$09$cMc6sERe76k4$$$$$$$$$.uF4AzlhTrPH44pYAWaYIWjfBZX5im3y','USER','bobby','saewre','JTHS','gavincraddock@gmail.com'),('b.saewre3','$2a$09$cMc6sERe76k4$$$$$$$$$..7yzr5iW1q2tj2bo022V8IvCn7WucDy','USER','bobby','saewre','JTHS','gavincraddock@gmail.com'),('B.Shears','$2a$09$cMc6sERe76k4$$$$$$$$$.Q/tTnGv1MIIm.mQvaPs/YqScjqMqiS6','USER','Billy','Shears','JTHS','ewfew@fewf.com'),('bobbobsson','$2a$09$cMc6sERe76k4$$$$$$$$$.q64O68WBqifHw.THAVMT8w42oyUhl7.','USER','Bob','Bobsson','CHAS','dsadsa@gdsg,con'),('c.macdonald','$2a$09$cMc6sERe76k4$$$$$$$$$.3Oxd.q6HOEmGU7Q9DHu/ZwtnLihGn5W','ADMIN','Claire','Macdonald','JTHS','c.macdonald@jths.co.uk'),('d.','$2a$09$cMc6sERe76k4$$$$$$$$$.jvDNiRbO.LVh4ryPeSD34hEERQpVhWq','USER','dwqdw','','JTHS',''),('d.Cdqdqw','$2a$09$cMc6sERe76k4$$$$$$$$$.MVDBvg2zObz6TU4mW10FnllV.eUoxPi','USER','dwqdwqd d','Cdq dqw','PAGE','wef@wf.om'),('dwq','$2a$09$cMc6sERe76k4$$$$$$$$$.VeTvqAi9M9a6YnXsMEag74jGYfSmO7q','USER','dwqdwq','dqwdqw','JTHS','dwqdqwdwq'),('F.Craddock','$2a$09$cMc6sERe76k4$$$$$$$$$.xSGW7UVEyLf8xyuSgFri0vk7XlcpA/e','USER','Fletcher','Cheeseman','REDB','g.craddock@jths.co.uk'),('fewfw','$2a$09$cMc6sERe76k4$$$$$$$$$./qsIJMFLm6cA8PiTpllxDLxyF3X9lwC','USER','ewfe','fewfw','JTHS','ewfew@fewf.com'),('ff','$2a$09$cMc6sERe76k4$$$$$$$$$.VeTvqAi9M9a6YnXsMEag74jGYfSmO7q','USER','vdsv','ds','JTHS','test@test.com'),('firstlastusername','$2a$09$cMc6sERe76k4$$$$$$$$$.VeTvqAi9M9a6YnXsMEag74jGYfSmO7q','USER','First','Last','JTHS','first.last@gmail.com'),('g.','$2a$09$cMc6sERe76k4$$$$$$$$$.EaGNa8T15rZDMKCTJSVBSnD80DW/S22','','gavin','','',''),('G.1','$2a$09$cMc6sERe76k4$$$$$$$$$.6BsWzH4lRtyfqu/OR/3L6RTOkarYijW','','Gavin','','','gavincraddock@gmail.com'),('G.Andresson','$2a$09$cMc6sERe76k4$$$$$$$$$.k5o4n5GNvxnxOK/4o8mrBnkOv0KMEVy','USER','Gardon','Andresson','KEVI','andrethegiant@gmail.com'),('g.craddock','$2a$09$cMc6sERe76k4$$$$$$$$$.XCb9fXG7XncUPAGL5PkWqAa1lVdro6y','ADMIN','Gavin','Craddock','JTHS','g.craddock@jths.co.uk'),('g.howell','$2a$09$cMc6sERe76k4$$$$$$$$$.3Oxd.q6HOEmGU7Q9DHu/ZwtnLihGn5W','USER','Graham','Howell','JTHS','g.howell@jths.co.uk'),('garygordon','$2a$09$cMc6sERe76k4$$$$$$$$$.q64O68WBqifHw.THAVMT8w42oyUhl7.','USER','Garydfff','Gordon','JTHS','dsad@dasdsa.com'),('gavcradd','$2a$09$cMc6sERe76k4$$$$$$$$$.yQb42Fmx7glkFSE.QE8EKkuE6S7hmKS','USER','Gavin','Testuser','JTHS','gavincraddock@gmail.com'),('gavcradd2','$2a$09$cMc6sERe76k4$$$$$$$$$.q64O68WBqifHw.THAVMT8w42oyUhl7.','USER','Gavin','Testuser','JTHS','gavincraddock@gmail.com'),('gerge','$2a$09$cMc6sERe76k4$$$$$$$$$.VeTvqAi9M9a6YnXsMEag74jGYfSmO7q','USER','rgeg','grege','JTHS',''),('h.hollyson','$2a$09$cMc6sERe76k4$$$$$$$$$.hBV7vRy6Z4xfsQXqak3z5T6GWR2WE6G','ADMIN','holly','hollyson','JTHS','dwqdq@dqwwcom.com'),('h.hollyson1','$2a$09$cMc6sERe76k4$$$$$$$$$.7KvJ/1QIAGry/HeOjQYHdh30Zt.t4eO','USER','helen','hollyson','JTHS','dewdew@dewdew.com'),('J.','$2a$09$cMc6sERe76k4$$$$$$$$$.IPHpKDefH8eIRaFDiU0G.YKNy3JrHtq','USER','John','','JTHS',''),('J.Smith','$2a$09$cMc6sERe76k4$$$$$$$$$.d6FhJyUkCK/UEsImbuklZklmAedxt1K','USER','John','Smith','JTHS',''),('J.Smith1','$2a$09$cMc6sERe76k4$$$$$$$$$.FAQWqhVS.pftyWq24XqT8tXZym4e5Fu','USER','John','Smith','OLDF','c.macdonald@jths.co.uk'),('j.twynham','$2a$09$cMc6sERe76k4$$$$$$$$$.3Oxd.q6HOEmGU7Q9DHu/ZwtnLihGn5W','ADMIN','James','Twynham','JTHS','j.twynham@jths.co.uk'),('k.craddock','$2a$09$cMc6sERe76k4$$$$$$$$$.09j5cFI2Hsbc1UQD/Kihm82aIj8ReZi','USER','Kirstie','Craddock2','JTHS','k.craddock@jths.co.uk'),('K.Craddock1','$2a$09$cMc6sERe76k4$$$$$$$$$.Wq02x9Zu4iULsMinysG1U3f4GjOcspG','USER','Kirstie','Craddock','JTHS','k.craddock@jths.co.uk'),('m.Malloney','$2a$09$cMc6sERe76k4$$$$$$$$$.O7N.2czIsEUzKPP9HGSz/txLH18a7IG','USER','molly','Malloney','CHAS','gavincraddock@gmail.com'),('N.Gallagher','$2a$09$cMc6sERe76k4$$$$$$$$$.0WFoQyerCT6/nnJjifUXmzpCLIr9uZ2','USER','Noel Frank DAvid','Gallagher','WOOD','dqwd@dwqdwq.co.uk'),('n.gallagher2','$2a$09$cMc6sERe76k4$$$$$$$$$.hzNV7Fo5323BDM4oTdYdJRi1s3GXsyO','USER','neil','gallagher','JTHS','33@ewew.com'),('n.gallagher3','$2a$09$cMc6sERe76k4$$$$$$$$$.JPzQAsDVQeJeepjN4lFlFrWKDmnTcSK','ADMIN','nigel','gallagher','JTHS','qdewq@EWQewq.com'),('p.thompson','$2a$09$cMc6sERe76k4$$$$$$$$$.3Oxd.q6HOEmGU7Q9DHu/ZwtnLihGn5W','USER','Paul','Thompson','JTHS','p.thompson@jths.co.uk'),('s.moss','$2a$09$cMc6sERe76k4$$$$$$$$$.3Oxd.q6HOEmGU7Q9DHu/ZwtnLihGn5W','USER','Susan','Moss','JTHS','s.moss@jths.co.uk'),('S.Moss1','$2a$09$cMc6sERe76k4$$$$$$$$$.zCgpqmcbPx/Fl4Ar1uCXOj76QC3CjGG','USER','Sue','Moss','JTHS','s.moss@jths.co.uk'),('S.Moss2','$2a$09$cMc6sERe76k4$$$$$$$$$.7N.XxMJUj9XeWGsHwy9pcArHINvKZ5y','USER','Sue','Moss','KEVI','s.moss@gmail.com'),('t.tester','$2a$09$cMc6sERe76k4$$$$$$$$$.3Oxd.q6HOEmGU7Q9DHu/ZwtnLihGn5W','USER','Test','Tester','DEFE','t.test@deferrers.com'),('test1eer','$2a$09$cMc6sERe76k4$$$$$$$$$.b9mvas/qQNfytVZVWJ0KfE4LJ2tZUF2','USER','Billy','Shears','JTHS','ewfew@fewf.com'),('teststst','$2a$09$cMc6sERe76k4$$$$$$$$$.VeTvqAi9M9a6YnXsMEag74jGYfSmO7q','ADMIN','Gavin','vdsvd','JTHS','gavincraddock@gmail.com'),('tewgtfw','$2a$09$cMc6sERe76k4$$$$$$$$$.pXAVsuGvyf..2kdwB6r8xRvRmF7qgP.','USER','wdw','dqwdqw','JTHS','gavincraddock@gmail.com');
/*!40000 ALTER TABLE `tblusers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-13 19:33:09
