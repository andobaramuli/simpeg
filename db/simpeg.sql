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

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `nip` char(18) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` enum('L','P') NOT NULL,
  `golongandarah` enum('O','A','B','AB') NOT NULL,
  `agama` enum('Islam','Kristen Protestan','Kristen Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `statuspegawai` varchar(100) NOT NULL,
  `jeniskepegawaian` varchar(100) NOT NULL,
  `statuspernikahan` enum('Belum Menikah','Menikah','Janda','Duda','Bercerai') NOT NULL,
  `kedudukanpegawai` enum('Aktif','Tidak Aktif') NOT NULL,
  `alamatrumah` varchar(200) NOT NULL,
  `suratelektronik` varchar(100) NOT NULL,
  `nokarpeg` varchar(50) NOT NULL,
  `nojkn` varchar(50) NOT NULL,
  `notaspen` varchar(50) NOT NULL,
  `nokariskarsu` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `tmtjabatan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `eselon` varchar(50) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `pegawai` */

/*Table structure for table `pengguna` */

DROP TABLE IF EXISTS `pengguna`;

CREATE TABLE `pengguna` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `namapengguna` varchar(100) NOT NULL,
  `katakunci` varchar(100) NOT NULL,
  `kodeperan` int(11) NOT NULL,
  `tanggalbuat` datetime NOT NULL,
  `dibuatoleh` int(11) NOT NULL,
  `tanggalubah` datetime DEFAULT NULL,
  `diubaholeh` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `pengguna` */

insert  into `pengguna`(`kode`,`namapengguna`,`katakunci`,`kodeperan`,`tanggalbuat`,`dibuatoleh`,`tanggalubah`,`diubaholeh`) values (1,'admin','ee10c315eba2c75b403ea99136f5b48d',1,'2018-05-13 13:03:58',0,NULL,NULL);

/*Table structure for table `peran` */

DROP TABLE IF EXISTS `peran`;

CREATE TABLE `peran` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `namaperan` varchar(100) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `peran` */

insert  into `peran`(`kode`,`namaperan`) values (1,'Admin');

/*Table structure for table `subsubunitkerja` */

DROP TABLE IF EXISTS `subsubunitkerja`;

CREATE TABLE `subsubunitkerja` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `subsubunitkerja` varchar(100) NOT NULL,
  `kodesubunitkerja` int(11) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `subsubunitkerja` */

/*Table structure for table `subunitkerja` */

DROP TABLE IF EXISTS `subunitkerja`;

CREATE TABLE `subunitkerja` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `subunitkerja` varchar(100) DEFAULT NULL,
  `kodeunitkerja` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `subunitkerja` */

/*Table structure for table `unitkerja` */

DROP TABLE IF EXISTS `unitkerja`;

CREATE TABLE `unitkerja` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `namaunit` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `unitkerja` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
