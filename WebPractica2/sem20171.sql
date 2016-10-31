/*
SQLyog Community v12.2.4 (32 bit)
MySQL - 5.7.11 : Database - sem20171
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sem20171` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `sem20171`;

/*Table structure for table `estudiante` */

DROP TABLE IF EXISTS `estudiante`;

CREATE TABLE `estudiante` (
  `boleta` varchar(10) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `apellidos` varchar(64) NOT NULL,
  `correo` varchar(128) NOT NULL,
  `curp` varchar(18) NOT NULL,
  PRIMARY KEY (`boleta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `estudiante` */

insert  into `estudiante`(`boleta`,`nombre`,`apellidos`,`correo`,`curp`) values 
('2016630001','Juan Luis','Ortiz Pérez','juan@juan.com','ABCD123456HDFRMN00'),
('2016630002','Miguel Ángel','Méndez Méndez','miguel@miguel.com','ABCD123456HDFRMN01'),
('97630005','José Antonio','Ortiz Ramírez','jaor@jaor.com','ABCD123456HDFRMN03');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
