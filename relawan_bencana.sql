/*
SQLyog Ultimate v9.02 
MySQL - 5.5.5-10.0.17-MariaDB : Database - relawan_bencana
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`relawan_bencana` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `relawan_bencana`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

/*Table structure for table `dana` */

DROP TABLE IF EXISTS `dana`;

CREATE TABLE `dana` (
  `id_dana` int(11) NOT NULL,
  `nominal` int(11) DEFAULT NULL,
  `nama_donatur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_dana`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dana` */

/*Table structure for table `donasi` */

DROP TABLE IF EXISTS `donasi`;

CREATE TABLE `donasi` (
  `id_donasi` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang` int(11) DEFAULT NULL,
  `jumlah_donasi` int(11) DEFAULT NULL,
  `nama_donatur` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id_donasi`),
  KEY `FK_donasi_barang` (`id_barang`),
  CONSTRAINT `FK_donasi_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `donasi` */

/*Table structure for table `kebutuhan` */

DROP TABLE IF EXISTS `kebutuhan`;

CREATE TABLE `kebutuhan` (
  `id_kebutuhan` int(11) NOT NULL AUTO_INCREMENT,
  `id_lokasi` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `jumlah_kebutuhan` int(11) DEFAULT NULL,
  `jumlah terpenuhi` int(11) DEFAULT '0',
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kebutuhan`),
  KEY `FK_kebutuhan_barang` (`id_barang`),
  KEY `FK_lokasi_kebutuhan` (`id_lokasi`),
  CONSTRAINT `FK_kebutuhan_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  CONSTRAINT `FK_lokasi_kebutuhan` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`id_lokasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kebutuhan` */

/*Table structure for table `log` */

DROP TABLE IF EXISTS `log`;

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(75) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_log`),
  KEY `FK_log` (`id_barang`),
  CONSTRAINT `FK_log` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `log` */

/*Table structure for table `lokasi` */

DROP TABLE IF EXISTS `lokasi`;

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lokasi` varchar(75) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_lokasi`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `lokasi` */

insert  into `lokasi`(`id_lokasi`,`nama_lokasi`,`latitude`,`longitude`,`deskripsi`) values (1,'Aceh','4.724616','96.525879','Banjir setinggi pinggang'),(2,'Bondowoso','-7.925229','113.837585','Gempa bumi merusak puluhan rumah warga'),(3,'Sukabumi','-6.933880','106.932678','Banjir bandang');

/*Table structure for table `relawan` */

DROP TABLE IF EXISTS `relawan`;

CREATE TABLE `relawan` (
  `id_relawan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_relawan` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id_relawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `relawan` */

/*Table structure for table `total_dana` */

DROP TABLE IF EXISTS `total_dana`;

CREATE TABLE `total_dana` (
  `total_dana` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `total_dana` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
