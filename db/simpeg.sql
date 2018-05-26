/*
SQLyog Ultimate v11.2 (64 bit)
MySQL - 5.7.19 : Database - simpeg
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`simpeg` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `simpeg`;

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rolename` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `role` */

insert  into `role`(`id`,`rolename`) values (1,'Admin');

/*Table structure for table `staff` */

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) NOT NULL,
  `nip` char(18) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `placeofbirth` varchar(100) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `bloodtype` enum('O','A','B','AB') NOT NULL,
  `religion` enum('Islam','Kristen Protestan','Kristen Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `status` varchar(100) NOT NULL,
  `stafftype` varchar(100) NOT NULL,
  `maritalstatus` enum('Belum Menikah','Menikah','Janda','Duda','Bercerai') NOT NULL,
  `staffstatus` enum('Aktif','Tidak Aktif') NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cardno` varchar(50) NOT NULL,
  `jkn` varchar(50) NOT NULL,
  `taspen` varchar(50) NOT NULL,
  `kariskarsu` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `tmtjabatan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `eselon` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `staff` */

/*Table structure for table `subsubunitkerja` */

DROP TABLE IF EXISTS `subsubunitkerja`;

CREATE TABLE `subsubunitkerja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subsubunitkerja` varchar(100) NOT NULL,
  `subunitkerjaid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `subsubunitkerja` */

/*Table structure for table `subunitkerja` */

DROP TABLE IF EXISTS `subunitkerja`;

CREATE TABLE `subunitkerja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subunitkerja` varchar(100) DEFAULT NULL,
  `unitkerjaid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `subunitkerja` */

/*Table structure for table `unitkerja` */

DROP TABLE IF EXISTS `unitkerja`;

CREATE TABLE `unitkerja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unitname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `unitkerja` */

insert  into `unitkerja`(`id`,`unitname`) values (1,'asdfasdfasdf'),(2,'adsfasdfasdfasdfasd'),(3,'asdfasdfasdfadsfasdfasdfadsfadsfasdfasdf'),(4,'doremie');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roleid` int(11) NOT NULL,
  `createddate` datetime NOT NULL,
  `createdby` int(11) NOT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`,`roleid`,`createddate`,`createdby`,`modifieddate`,`modifiedby`) values (1,'admin','ee10c315eba2c75b403ea99136f5b48d',1,'2018-05-13 13:03:58',0,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
