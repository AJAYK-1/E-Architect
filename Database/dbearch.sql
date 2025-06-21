/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - earchitect
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`earchitect` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `earchitect`;

/*Table structure for table `customer_reg` */

DROP TABLE IF EXISTS `customer_reg`;

CREATE TABLE `customer_reg` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `customer_reg` */

insert  into `customer_reg`(`cid`,`cname`,`address`,`district`,`location`,`mobile`,`email`,`password`) values 
(13,'Vishnu','viena','7','kochi','9897654321','vishnu@gmail.com','vishnu@123'),
(14,'Abhijith','abc villa','3','ranchi','9087667890','abhi@gmail.com','abhi@123'),
(15,'Jithin Johnson','ksnjc','7','kochi','9087667898','jithin@gmail.com','jithin123');

/*Table structure for table `customizedplan` */

DROP TABLE IF EXISTS `customizedplan`;

CREATE TABLE `customizedplan` (
  `customid` int(11) NOT NULL AUTO_INCREMENT,
  `plotsize` int(11) NOT NULL,
  `query` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `aid` varchar(11) NOT NULL,
  `budget` varchar(100) NOT NULL,
  `dt` varchar(100) NOT NULL,
  PRIMARY KEY (`customid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `customizedplan` */

insert  into `customizedplan`(`customid`,`plotsize`,`query`,`cid`,`status`,`aid`,`budget`,`dt`) values 
(15,50,'its a place with around of water with re soil ',13,'approved','13','',''),
(16,30,'ajkhdxjasnbjdxhnjsadhcjszbchdgbhdsgcbhydsgfc',15,'rejected','16','',''),
(17,30,'jbcsjbndsjkbcjksncjkndsjcndsjkncjkdsnjkcbn',15,'approved','15','',''),
(18,30,'hhhdsghhsjhjshdbjhbsadjbjsabhdcbvhdcghvhfc',15,'approved','16','',''),
(19,30,'sxyagxAHCXHJSVACHSahvcHGVCSH',15,'Requested','20','100000','2023-01-31');

/*Table structure for table `district` */

DROP TABLE IF EXISTS `district`;

CREATE TABLE `district` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `dname` varchar(15) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `district` */

insert  into `district`(`did`,`dname`) values 
(1,'Trivandrum'),
(2,'Kollam'),
(3,'Pathanamthitta'),
(4,'Alappuzha'),
(5,'Kottayam'),
(6,'Idukki'),
(7,'Ernakulam'),
(8,'Thrissur'),
(9,'Palakkadu'),
(10,'Malappuram'),
(11,'Kozhikkode'),
(12,'Wayanadu'),
(13,'Kannur'),
(14,'Kasargode');

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `uemail` varchar(100) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `utype` varchar(15) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

insert  into `feedback`(`fid`,`uemail`,`feedback`,`utype`) values 
(3,'remya@gmail.com','nice service','customer'),
(4,'amalesh@gmail.com','asxhbsajxbbkjxz','Architect');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `utype` varchar(10) NOT NULL,
  `status` varchar(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`uname`,`pass`,`utype`,`status`) values 
('admin@gmail.com','admin','Admin','1'),
('remya@gmail.com','remya@123','Architect','0'),
('ash@gmail.com','ash@123','Architect','0'),
('rijoy@gmail.com','rijoy@123','Architect','-1'),
('vishnu@gmail.com','vishnu@123','Customer','1'),
('abhi@gmail.com','abhi@123','Customer','0'),
('jithin@gmail.com','jithin123','Customer','-1'),
('amalesh@gmail.com','amalu1234','Architect','1'),
('aysha@gmail.com','12345','Architect','1');

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customid` int(11) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `payment` */

insert  into `payment`(`id`,`customid`,`amount`,`status`) values 
(1,15,'6000','paid'),
(2,17,'3000','paid'),
(3,18,'12000','paid');

/*Table structure for table `requests` */

DROP TABLE IF EXISTS `requests`;

CREATE TABLE `requests` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `request` varchar(100) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `requests` */

/*Table structure for table `staff_allot` */

DROP TABLE IF EXISTS `staff_allot`;

CREATE TABLE `staff_allot` (
  `allot_id` int(11) NOT NULL AUTO_INCREMENT,
  `bid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`allot_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `staff_allot` */

/*Table structure for table `staff_custom_plan` */

DROP TABLE IF EXISTS `staff_custom_plan`;

CREATE TABLE `staff_custom_plan` (
  `scustid` int(11) NOT NULL AUTO_INCREMENT,
  `customid` int(11) NOT NULL,
  `plan` varchar(100) NOT NULL,
  `sid` int(11) NOT NULL,
  `des` varchar(100) NOT NULL,
  PRIMARY KEY (`scustid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `staff_custom_plan` */

insert  into `staff_custom_plan`(`scustid`,`customid`,`plan`,`sid`,`des`) values 
(11,15,'images/c1.jpg',13,'jsjdnajnd'),
(12,16,'images/Arabian-jasmine.webp',16,'icjfwioejfijeivjnevjk berhivuqjveokmqcknejwqkvbijudwjn'),
(13,17,'images/Arabian-jasmine.webp',15,'nujhgthdrsfrdsgfcjhbmnkjl'),
(14,18,'images/bmshoplogo.png',16,'icjfwioejfijeivjnevjk berhivuqjveokmqcknejwqkvbijudwjn');

/*Table structure for table `staff_reg` */

DROP TABLE IF EXISTS `staff_reg`;

CREATE TABLE `staff_reg` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `staff_reg` */

insert  into `staff_reg`(`sid`,`sname`,`email`,`phone`,`password`,`photo`) values 
(13,'Remya','remya@gmail.com','9087678910','remya@123','images/advocate.png'),
(14,'Ashwin','ash@gmail.com','9897677890','ash@123','images/advocate.png'),
(15,'Rijoy','rijoy@gmail.com','9876789089','rijoy@123','images/advocate.png'),
(16,'Amalesh','amalesh@gmail.com','9076545675','amalu1234','images/advocate.png'),
(20,'Aysha','aysha@gmail.com','8976564543','12345','images/vibeimage.png');

/*Table structure for table `works` */

DROP TABLE IF EXISTS `works`;

CREATE TABLE `works` (
  `wid` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(11) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `works` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
