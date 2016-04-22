/*
SQLyog Enterprise - MySQL GUI v8.12 
MySQL - 5.6.14 : Database - db_perpustakaan
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_perpustakaan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_perpustakaan`;

/*Table structure for table `anggota` */

DROP TABLE IF EXISTS `anggota`;

CREATE TABLE `anggota` (
  `nis` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(2) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `anggota` */

insert  into `anggota`(`nis`,`nama`,`jk`,`ttl`,`kelas`,`image`) values ('04212142','Indarti L.','P','1945-08-17','SI','perpus-iin.jpg'),('04212143','Tyas Kartika','P','1945-08-17','SI','perpus-tyas1.jpg'),('04213072','Intan Mandiri','P','1945-08-17','SI','perpus-intan1.jpg'),('04213125','Ineke Anggraeni','P','1945-08-17','SI','12219349_1025733990810326_8716362803926557701_copy1.jpg');

/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `kode_buku` varchar(5) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `pengarang` varchar(50) DEFAULT NULL,
  `klasifikasi` varchar(25) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `buku` */

insert  into `buku`(`kode_buku`,`judul`,`pengarang`,`klasifikasi`,`image`) values ('EK001','Prosedur Operasional Audit Bank','Mohamad Irianto','<p>Ekonomi</p>','book-2.JPG'),('IT001','Database Systems','Thomas Connolli','<p>IT</p>','book-11.jpg'),('IT002','Buku Pintar Webmaster','Adhi Prasetyo','<p>IT</p>','book-3.jpg'),('IT003','Pasti Bisa Belajar Sendiri Coreldraw X7','Sukriman','<p>IT</p>','book-4.jpg');

/*Table structure for table `pengembalian` */

DROP TABLE IF EXISTS `pengembalian`;

CREATE TABLE `pengembalian` (
  `id_transaksi` varchar(12) DEFAULT NULL,
  `tgl_pengembalian` date DEFAULT NULL,
  `denda` varchar(2) DEFAULT NULL,
  `nominal` double DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `pengembalian` */

/*Table structure for table `petugas` */

DROP TABLE IF EXISTS `petugas`;

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(45) DEFAULT NULL,
  `password` text,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `petugas` */

insert  into `petugas`(`id_petugas`,`user`,`password`) values (3,'admin','21232f297a57a5a743894a0e4a801fc3');

/*Table structure for table `tmp` */

DROP TABLE IF EXISTS `tmp`;

CREATE TABLE `tmp` (
  `kode_buku` varchar(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tmp` */

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(12) DEFAULT NULL,
  `nis` varchar(10) DEFAULT NULL,
  `kode_buku` varchar(5) DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id_transaksi`,`nis`,`kode_buku`,`tanggal_pinjam`,`tanggal_kembali`,`status`,`id_petugas`) values ('20150212001','MM035','MM001','2015-02-12','2015-02-19','N',NULL),('20150212002','MM035','MM001','2015-02-12','2015-02-19','N',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
