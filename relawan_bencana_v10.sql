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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

insert  into `barang`(`id_barang`,`nama_barang`) values (1,'Mie Instan'),(2,'Selimut'),(3,'Pakaian Dewasa'),(4,'Pakaian Anak'),(5,'Pembalut'),(6,'Popok Bayi'),(7,'Celana Dalam'),(8,'Susu'),(9,'Biskuit'),(10,'Makanan Ringan'),(11,'Beras'),(12,'Obat-obatan');

/*Table structure for table `dana` */

DROP TABLE IF EXISTS `dana`;

CREATE TABLE `dana` (
  `id_dana` int(11) NOT NULL AUTO_INCREMENT,
  `nominal` int(11) DEFAULT NULL,
  `nama_donatur` varchar(75) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id_dana`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `dana` */

insert  into `dana`(`id_dana`,`nominal`,`nama_donatur`,`tanggal`) values (1,700000,'Imam Zarqoni','2016-12-18'),(2,5000000,'Ade Ilham','2016-12-18'),(3,100000,'Divi Jaya','2016-12-18'),(4,80000,'Luqman Ahmad','2016-12-18');

/*Table structure for table `donasi` */

DROP TABLE IF EXISTS `donasi`;

CREATE TABLE `donasi` (
  `id_donasi` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang` int(11) DEFAULT NULL,
  `jumlah_donasi` int(11) DEFAULT NULL,
  `nama_donatur` varchar(75) DEFAULT NULL,
  `tanggal_donasi` date DEFAULT NULL,
  PRIMARY KEY (`id_donasi`),
  KEY `FK_donasi_barang` (`id_barang`),
  CONSTRAINT `FK_donasi_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `donasi` */

insert  into `donasi`(`id_donasi`,`id_barang`,`jumlah_donasi`,`nama_donatur`,`tanggal_donasi`) values (1,1,10,'Divi Jaya','2016-12-18'),(2,2,5,'Imam Zarqoni','2016-12-18'),(3,6,7,'Ade Ilham','2016-12-18'),(4,12,2,'Luqman Ahmad','2016-12-18');

/*Table structure for table `gambar` */

DROP TABLE IF EXISTS `gambar`;

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL AUTO_INCREMENT,
  `nama_gambar` varchar(50) NOT NULL,
  `deskripsi_gambar` varchar(500) NOT NULL,
  `tanggal_gambar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_gambar`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `gambar` */

insert  into `gambar`(`id_gambar`,`nama_gambar`,`deskripsi_gambar`,`tanggal_gambar`) values (6,'cepet.jpg','qwqwqw','2016-12-20 00:00:00'),(7,'Untitled design.png','cvcvcv','2016-12-20 00:00:00'),(8,'Untitled design.png','ccvcvcvcv','2016-12-20 00:00:00'),(9,'29.jpg','wqwqwqwqwqasas','2016-12-20 04:57:28'),(10,'Gempa7.jpg','Evakuasi korban gempa di Aceh sedang dilakukan oleh tim gabungan SAR dan TNI.','2016-12-20 05:38:00'),(11,'longsor-b.jpg','Evakuasi korban tanah longsor di Bondowoso sedang dilakukan oleh tim gabungan SAR dan TNI.','2016-12-20 05:44:50'),(12,'banjir.jpg','Kondisi terkini di lokasi banjir bandang di daerah Sukabumi','2016-12-20 05:53:50'),(13,'36672747_303.jpg','Keadaan terkini di lokasi gempa daerah Aceh','2016-12-20 05:55:22');

/*Table structure for table `kebutuhan` */

DROP TABLE IF EXISTS `kebutuhan`;

CREATE TABLE `kebutuhan` (
  `id_kebutuhan` int(11) NOT NULL AUTO_INCREMENT,
  `id_lokasi` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `jumlah_kebutuhan` int(11) DEFAULT NULL,
  `jumlah_terpenuhi` int(11) DEFAULT '0',
  `status` varchar(50) DEFAULT NULL,
  `tanggal_permintaan` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kebutuhan`),
  KEY `FK_kebutuhan_barang` (`id_barang`),
  KEY `FK_lokasi_kebutuhan` (`id_lokasi`),
  CONSTRAINT `FK_kebutuhan_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  CONSTRAINT `FK_lokasi_kebutuhan` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`id_lokasi`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `kebutuhan` */

insert  into `kebutuhan`(`id_kebutuhan`,`id_lokasi`,`id_barang`,`jumlah_kebutuhan`,`jumlah_terpenuhi`,`status`,`tanggal_permintaan`) values (1,1,4,57,0,NULL,'2016-12-18 23:22:46'),(2,1,2,13,0,NULL,'2016-12-18 23:23:09'),(3,2,11,4,0,NULL,'2016-12-18 23:23:20'),(4,2,3,5,0,NULL,'2016-12-18 23:23:32'),(5,3,9,10,0,NULL,'2016-12-18 23:23:43'),(6,3,7,4,0,NULL,'2016-12-18 23:23:50');

/*Table structure for table `kondisi` */

DROP TABLE IF EXISTS `kondisi`;

CREATE TABLE `kondisi` (
  `id_kondisi` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` text,
  `filepath` varchar(255) DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_lokasi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kondisi`),
  KEY `FK_kondisi` (`id_lokasi`),
  CONSTRAINT `FK_kondisi` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`id_lokasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kondisi` */

/*Table structure for table `log` */

DROP TABLE IF EXISTS `log`;

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jumlah` int(75) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_log`),
  KEY `FK_log` (`id_barang`),
  CONSTRAINT `FK_log` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `log` */

insert  into `log`(`id_log`,`tanggal`,`jumlah`,`id_barang`,`harga`) values (1,'2016-12-20 11:25:59',10,1,20000);

/*Table structure for table `lokasi` */

DROP TABLE IF EXISTS `lokasi`;

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lokasi` varchar(75) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `deskripsi` tinytext,
  PRIMARY KEY (`id_lokasi`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `lokasi` */

insert  into `lokasi`(`id_lokasi`,`nama_lokasi`,`latitude`,`longitude`,`deskripsi`) values (1,'Aceh','4.724616','96.525879','Gempa bumi merusak ratusan rumah warga'),(2,'Bondowoso','-7.925229','113.837585','Tanah longsor terjadi secara tiba-tiba seusai hujan deras yang menerjang perbatasan Sukabumi'),(3,'Sukabumi','-6.933880','106.932678','Banjir setinggi pinggang menerjang saat warga tengah tertidur lelap');

/*Table structure for table `relawan` */

DROP TABLE IF EXISTS `relawan`;

CREATE TABLE `relawan` (
  `id_relawan` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(75) DEFAULT NULL,
  `password` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id_relawan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `relawan` */

insert  into `relawan`(`id_relawan`,`username`,`password`) values (1,'admin','admin');

/*Table structure for table `total_dana` */

DROP TABLE IF EXISTS `total_dana`;

CREATE TABLE `total_dana` (
  `total_dana` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `total_dana` */

insert  into `total_dana`(`total_dana`) values (5860000);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
