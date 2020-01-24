/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.38-MariaDB : Database - db_products
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_products` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_products`;

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `total_price` varchar(100) DEFAULT NULL,
  `product_code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

/*Data for the table `cart` */

insert  into `cart`(`id`,`product_name`,`price`,`image`,`qty`,`total_price`,`product_code`) values (1,'QK One Open Top Range','12400','QKproductimg2.jpg',2,'24800','p1002');

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `pmode` varchar(50) DEFAULT NULL,
  `products` varchar(255) DEFAULT NULL,
  `paid_amount` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `orders` */

/*Table structure for table `qk_products` */

DROP TABLE IF EXISTS `qk_products`;

CREATE TABLE `qk_products` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) DEFAULT NULL,
  `price` int(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `product_code` varchar(10) DEFAULT NULL,
  `product_type` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `keywords` varchar(100) DEFAULT NULL,
  `product_title` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `qk_products` */

insert  into `qk_products`(`id`,`product_name`,`price`,`image`,`product_code`,`product_type`,`description`,`keywords`,`product_title`) values (1,'QK Deep Fat Fryer and Griddle',35000,'QKproductimg.jpg','p1001','Cooking Equipment','Lorem ipsum dolor sit amet, consectetur adipiscing elit,\r\n\r\nsed do eiusmod tempor incididunt ut labo',NULL,NULL),(2,'QK One Open Top Range',12400,'QKproductimg2.jpg','p1002','Cooking Equipment','Lorem ipsum dolor sit amet, consectetur adipiscing elit,\r\n\r\nsed do eiusmod tempor incididunt ut labo',NULL,NULL),(3,'QK Deep Fryer',12000,'QKproductimg3.jpg','p1003','Cooking Equipment','Lorem ipsum dolor sit amet, consectetur adipiscing elit,\r\n\r\nsed do eiusmod tempor incididunt ut labo',NULL,NULL),(4,'QK Four Open Top Range',8000,'QKproductimg4.jpg','p1004','Cooking Equipment','Lorem ipsum dolor sit amet, consectetur adipiscing elit,\r\n\r\nsed do eiusmod tempor incididunt ut labo',NULL,NULL),(5,'QK Deep Fat Fryer and Griddle',35000,'QKproductimg.jpg','p2001','Food Service Equipment','Lorem ipsum dolor sit amet, consectetur adipiscing elit,',NULL,NULL),(6,'QK One Open Top Range',12400,'QKproductimg2.jpg','p2002','Food Service Equipment','Lorem ipsum dolor sit amet, consectetur adipiscing elit,',NULL,NULL),(7,'QK Deep Fryer',12000,'QKproductimg3.jpg','p2003','Food Service Equipment','Lorem ipsum dolor sit amet, consectetur adipiscing elit,',NULL,NULL),(8,'QK Four Open Top Range',8000,'QKproductimg4.jpg','p2004','Food Service Equipment','Lorem ipsum dolor sit amet, consectetur adipiscing elit,',NULL,NULL),(9,'QK Deep Fat Fryer and Griddle',35000,'QKproductimg.jpg','p3001','Preparation Equipment','Lorem ipsum dolor sit amet, consectetur adipiscing elit,',NULL,NULL),(10,'QK One Open Top Range',12400,'QKproductimg2.jpg','p3002','Preparation Equipment','Lorem ipsum dolor sit amet, consectetur adipiscing elit,',NULL,NULL),(11,'QK Deep Fryer',12000,'QKproductimg3.jpg','p3003','Preparation Equipment','Lorem ipsum dolor sit amet, consectetur adipiscing elit,',NULL,NULL),(12,'QK Four Open Top Range',8000,'QKproductimg4.jpg','p3004','Preparation Equipment','Lorem ipsum dolor sit amet, consectetur adipiscing elit,',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
