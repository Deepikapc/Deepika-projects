-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'PHP','PHP'),(5,'DBMS','DBMS'),(6,'java','java'),(10,'C++','C++');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_questions`
--

DROP TABLE IF EXISTS `category_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `correct` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `category_questions_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_questions`
--

LOCK TABLES `category_questions` WRITE;
/*!40000 ALTER TABLE `category_questions` DISABLE KEYS */;
INSERT INTO `category_questions` VALUES (10,5,'create table employee(name,varchar,id,integer) what type of statement is this?','DML','DDL','View','Integrity Constraint','option2'),(11,5,'To remove a relation from an SQL database, we use the ----------command.','Delete','Purge','Remove','Drop table','option4'),(12,5,'UPdate that violate--------- are disallowed?','Integrity constraints','Transaction control','Authorization','DDL constaints','option1'),(13,1,'what is php?','hypertxt preprocessor','text','preprocessor','php hypertext preprocessor','option4'),(14,6,'what is java?','procedure oriented ','object oriented','computer programming language','none of the above','option3'),(15,1,'Variables always start with a ........ in PHP','Pond-sign','Yen-sign','Dollar-sign  ',' Euro-sign','option3'),(16,1,'Which of the following is not valid PHP code?',' $_10 ','${â€œMyVarâ€}','&$something','$10_somethings','option4'),(17,1,'Which array function checks if the specified key exists in the array','array_key_exist() ','array_key_exists() ',' array_keys_exists() ',' arrays_key_exists()','option2'),(18,1,'Assume you would like to sort an array in ascending order by value while preserving key associations. Which of the following PHP sorting functions would you use?',' ksort()',' asort()','krsort()','sort()','option2'),(19,1,'What function computes the difference of arrays?',' array_diff  ','diff_array','arrays_diff','diff_arrays','option1'),(20,1,'What functions count elements in an array?',' count  ','Sizeof',' Array_Count ','Count_array','option1'),(21,1,'What array will you get if you convert an object to an array?','An array with properties of that object as the array\'s elements.','An array with properties of that array as the object\'s elements.',' An array with properties of that object as the Key elements.',' An array with keys of that object as the array\'s elements.','option1'),(22,1,'Array values are keyed by ______ values (called indexed arrays) or using ______ values (called associative arrays). Of course, these key methods can be combined as well.','Float, string','Positive number, negative number','Even number, string',' Integer, string','option4'),(24,1,'There are three different kind of arrays:','Numeric array, String array, Multidimensional array',' Numeric array, Associative array, Dimensional array',' Numeric array, Associative array, Multidimensional array','Const array, Associative array, Multidimensional array','option3'),(25,6,'single line comment starts with --------- in java?','//','/*','/**','none of these','option1'),(26,6,'which of the following is used to see the details of the compilation?','javac -debug TestExample.java','javac -verbose TestExample.java','javac -detail TestExample.java','none of these','option2'),(27,6,'which of the following is not a keyword  in java?','abstract','asserts','finalize','boolean','option3'),(28,6,'which of the following is not a method of the thread class?','public void run()','public void start()','public void exit()','public final int getPriority()','option3'),(29,5,'The raw facts and figures are: ','Data','Information ','Snapshot',' Reports','option1'),(30,5,'The feature that database allows to access only certain records in database is: ','Forms ','Reports','Queries',' Tables','option3'),(31,5,'You can find Sort & Filter group of commands in','Home ribbon ','Create ribbon ','Database tools ribbon','Fields ribbon  ','option1'),(32,5,' Which of the following filter method is not available in Access?  ','Filter by selection',' Filter by form ','Advanced filter',' None of above','option3'),(33,5,'What is the size of Data & Time field type?','1','8','255','50','option2'),(34,5,' Identify the relationship between a Movie table and Stars table:',' One to one',' One to many','Many to many','None of above','option1'),(35,5,' What type of relationship exists between a Student table and Fees table?','One to one b.  c. Many to many d. One to many and many to many','One to many','One to many','One to many and many to many','option3'),(36,6,'A java program is compiled to get the following code','Machine code','Object code','low levelcode','Byte code','option4'),(37,6,'\"The concept of destructor is present in java\"The above statement is ?','True ','False','Both','None','option2'),(38,6,'The concept of multiple inheritance in java is achieved by the use of ?','class','Abstract class','Interface','none','option3'),(39,6,'A method cannot be over-rided when it is declared?','private','final','static','none','option2'),(40,6,'A collection of various interfaces and classes is called','collection','package','class','vector','option2'),(41,10,'A basic run time entity in an object oriented system is called','class','data','structure','object','option4'),(42,10,'The process of binding together the data and functions within a single unit is called ','Polymorphism','Abstraction','Inheritance','Encapsulation','option4'),(43,10,'Creating new class from already exsting class is called','Polymorphism','Inheritance','Abstraction','Encapsulation','option2'),(44,10,'The ability of an unit to take more than one form is called','Polymorphism','Inheritance','Abstraction','Encapsulation','option1'),(45,10,'The memory management operator of c++ are','new & delete','new & old','first & final','none','option1'),(46,10,'The members of a class are by default','Protected','Private','Public','none','option2'),(47,10,'A pointer that always points to the current object is','that','this','friend','new','option2'),(48,10,'A special function that can also access the private data members of a class is called','friend function','friendly function','friendship function ','none','option1'),(49,10,'A virtual function can always be present in','Friend class','Base class','Derived class','none','option2'),(50,10,'The function that can be used to open a file in C++ is','fopen()','open()','fileopen()','none','option1');
/*!40000 ALTER TABLE `category_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test_results`
--

DROP TABLE IF EXISTS `test_results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test_results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `date_time` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `test_results_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `test_results_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test_results`
--

LOCK TABLES `test_results` WRITE;
/*!40000 ALTER TABLE `test_results` DISABLE KEYS */;
INSERT INTO `test_results` VALUES (1,5,7,4,'2014-09-18'),(3,6,7,3,'2014-09-18'),(4,6,8,3,'2014-09-18'),(7,6,13,4,'2014-09-18'),(8,6,14,3,'2014-09-19'),(9,6,7,0,'2014-09-19'),(10,6,7,0,'2014-09-19'),(14,6,7,0,'2014-09-19'),(16,6,7,0,'2014-09-19'),(18,6,7,0,'2014-09-19'),(19,6,7,0,'2014-09-19'),(22,1,7,6,'2014-09-19'),(23,1,9,1,'2014-09-19'),(25,6,16,3,'2014-09-20'),(26,6,16,3,'2014-09-20'),(27,6,7,4,'2014-09-20'),(28,6,17,3,'2014-09-20'),(29,6,7,5,'2014-09-20'),(30,6,7,3,'2014-09-20'),(31,6,18,3,'2014-09-20'),(32,6,7,2,'2014-09-20'),(33,6,19,4,'2014-09-20'),(34,6,7,7,'2014-09-21'),(35,10,18,10,'2014-09-21'),(36,5,7,0,'2014-09-22'),(37,10,13,0,'2014-09-22');
/*!40000 ALTER TABLE `test_results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_profiles`
--

DROP TABLE IF EXISTS `user_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_profiles`
--

LOCK TABLES `user_profiles` WRITE;
/*!40000 ALTER TABLE `user_profiles` DISABLE KEYS */;
INSERT INTO `user_profiles` VALUES (1,'bhavya','bhavya',5),(2,'deepika','deepika',7),(3,'kavya','kavya',8),(4,'jasil',' jasil',9),(5,'rashmi','rashmi',10),(6,'hari','hari',11),(7,'amitha','amitha',12),(8,'pavani','pavani',13),(9,'madhu','madhu',14),(10,'jasil','mohamed',15),(11,'divya','divya',16),(12,'girija','girija',17),(13,'chethan','chethan',18),(14,'susim','susim',19);
/*!40000 ALTER TABLE `user_profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `login_type` enum('admin','user') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (5,'bhavya','0b741033132c72a1a2c3710961536af76d017fd5','admin'),(7,'deepika','a27ef290d34e4cef605bb2ff188e59b6b0258184','user'),(8,'kavya','b46640fac8aabdfb2c59690723249d4507dd1147','user'),(9,'jasil','5421562400b52a1bed81db4280826a23c3ae7d8b','user'),(10,'rashmi','9bee992d03627671bdee00e9a3c733f0ebaedb03','user'),(11,'hari','629d2805220188fc9150f1eb0b16ac53612dc808','user'),(12,'amitha','4e940d525e7e5c4266c418634de306a329a21d66','user'),(13,'pavani','c0baeee5b5a38eeb44ad884b3d4e8f1c477ffdf3','user'),(14,'madhu','9cac79abe17efc74edceb9ae0e6e437fe3374339','user'),(15,'jasil','5421562400b52a1bed81db4280826a23c3ae7d8b','user'),(16,'divya','cdc1622727c9ecca6070e171a060047f1023242e','user'),(17,'girija','8cc3a03e45094b4d3267d30707812719cf49d488','user'),(18,'chethan','5d0bdfac966395157ac22ab8122818004cb22f53','user'),(19,'susim','24507238ce0a1d3765ddffcaf3466c5abb604cf5','user');
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

-- Dump completed on 2014-09-22 10:01:51
