-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.45-community-nt-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema db_proyecto
--

CREATE DATABASE IF NOT EXISTS db_proyecto;
USE db_proyecto;

--
-- Definition of table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE `alumno` (
  `matricula` int(10) unsigned NOT NULL auto_increment,
  `nombre` varchar(45) character set utf8 collate utf8_bin NOT NULL,
  `grado` varchar(10) character set utf8 collate utf8_bin NOT NULL,
  `grupo` varchar(10) character set utf8 collate utf8_bin NOT NULL,
  PRIMARY KEY  (`matricula`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alumno`
--

/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` (`matricula`,`nombre`,`grado`,`grupo`) VALUES 
 (20,0x526F6D616E2043616D6163686F,0x32,0x41),
 (19,0x4C6F72656E6120457370696E6F7A61,0x32,0x41),
 (18,0x5061747269636961204D6F72616C6573,0x32,0x41),
 (17,0x4573746562616E20476F6E7A616C657A,0x32,0x41),
 (16,0x4A6F7267652041726D656E7461,0x32,0x41),
 (15,0x4D6572636564657A2053616E6368657A,0x32,0x41),
 (14,0x456469746820416E6472616465,0x32,0x41),
 (13,0x506174726963696F2052616D6F73,0x32,0x41),
 (12,0x526F7361204C6F70657A,0x32,0x41),
 (11,0x416E6120476172636961,0x32,0x41),
 (21,0x4D61726961205275697A,0x32,0x41),
 (22,0x49736162656C204E61766172726F,0x32,0x41),
 (23,0x4D616E75656C20476F6D657A,0x32,0x41),
 (24,0x4A6F7365204A696D656E657A,0x32,0x41),
 (25,0x416E61204D617274696E657A,0x32,0x41);
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;


--
-- Definition of table `evaluacion`
--

DROP TABLE IF EXISTS `evaluacion`;
CREATE TABLE `evaluacion` (
  `mat_alumno` int(10) unsigned NOT NULL auto_increment,
  `grado` varchar(5) character set utf8 collate utf8_bin NOT NULL,
  `esp` bigint(20) unsigned NOT NULL,
  `mate` bigint(20) unsigned NOT NULL,
  `hist` bigint(20) unsigned NOT NULL,
  `geo` bigint(20) unsigned NOT NULL,
  `arte` bigint(20) unsigned NOT NULL,
  `promedio` bigint(20) unsigned NOT NULL,
  PRIMARY KEY  (`mat_alumno`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `evaluacion`
--

/*!40000 ALTER TABLE `evaluacion` DISABLE KEYS */;
INSERT INTO `evaluacion` (`mat_alumno`,`grado`,`esp`,`mate`,`hist`,`geo`,`arte`,`promedio`) VALUES 
 (11,0x32,7,7,8,7,9,7),
 (12,0x32,8,7,7,7,8,7),
 (13,0x32,10,10,10,10,10,10),
 (14,0x32,9,9,9,9,10,9),
 (15,0x32,7,7,8,7,9,7),
 (16,0x32,8,8,8,8,8,8),
 (17,0x32,10,10,10,10,10,10),
 (18,0x32,9,9,9,9,10,9),
 (19,0x32,10,10,10,10,10,10),
 (20,0x32,7,7,8,7,9,7),
 (21,0x32,9,9,9,9,10,9),
 (22,0x32,10,10,10,10,10,10),
 (23,0x32,9,9,9,9,10,9),
 (24,0x32,9,9,9,9,10,9),
 (25,0x32,10,10,10,10,10,10);
/*!40000 ALTER TABLE `evaluacion` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
