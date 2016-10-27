-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.24


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema website
--

CREATE DATABASE IF NOT EXISTS website;
USE website;

--
-- Definition of table `kegiatan`
--

DROP TABLE IF EXISTS `kegiatan`;
CREATE TABLE `kegiatan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `faculty` varchar(45) NOT NULL,
  `speaker` varchar(45) NOT NULL,
  `location` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL,
  `conclusion` varchar(45) NOT NULL,
  `poster` varchar(2048) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

/*!40000 ALTER TABLE `kegiatan` DISABLE KEYS */;
/*!40000 ALTER TABLE `kegiatan` ENABLE KEYS */;


--
-- Definition of table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `content` varchar(3000) NOT NULL,
  `image` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`,`title`,`date`,`content`,`image`) VALUES 
 (9,'Studi Banding','1997-03-15','Fakultas Hukum Universitas Pelita Harapan Medan telah menyelenggarakan sebuah seminar yang mengangkat tema Sengketa di Laut Cina Selatan, pada hari Sabtu 20 Mei 2016 di Kampus Lippo UPH Medan.\r\n\r\nPada seminar kali ini FakultasHukum UPH Medan turut mengundang Dr. Ius.Damos Dumoli Agusman (Sekretaris Dirjen Hukum dan Perjanjian Internasional) sebagai pembicara dan turut mengundang beberapa Fakultas Hukum yang ada di Medan seperti Universitas Amir Hamzah, Universitas Sumatra Utara, dll.\r\n\r\nDalam seminar ini juga terdapat penandatanganan Nota Kesepemahaman (MoU) antara FakultasHukum UPH Medan dan Kementrian Luar Negeri RI.\r\n\r\nKeesokan harinya pada hari Sabtu, tanggal 21 Mei 2016 diadakan kelas Joint Communique yang dibawakan oleh pihak Kemenlu yang dihadiri oleh mahasiswa Fakultas Hukum UPH Medan. ','Studi Banding.jpeg');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;


--
-- Definition of table `tentang`
--

DROP TABLE IF EXISTS `tentang`;
CREATE TABLE `tentang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cover` varchar(2048) NOT NULL,
  `visi` varchar(2048) NOT NULL,
  `misi` varchar(2048) NOT NULL,
  `deskripsi` varchar(2048) NOT NULL,
  `struktur` varchar(2048) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang`
--

/*!40000 ALTER TABLE `tentang` DISABLE KEYS */;
/*!40000 ALTER TABLE `tentang` ENABLE KEYS */;


--
-- Definition of table `ukm`
--

DROP TABLE IF EXISTS `ukm`;
CREATE TABLE `ukm` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `faculty` varchar(45) NOT NULL,
  `leader` varchar(45) NOT NULL,
  `location` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `join` varchar(200) NOT NULL,
  `logo` varchar(2048) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukm`
--

/*!40000 ALTER TABLE `ukm` DISABLE KEYS */;
/*!40000 ALTER TABLE `ukm` ENABLE KEYS */;


--
-- Definition of table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `category` int(3) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`name`,`username`,`password`,`category`) VALUES 
 ('Budiman','admin','admin',1),
 ('Stanley','stanley','stanley',3),
 ('Sutandi','sutandi','sutandi',2),
 ('James','James','james',4),
 ('Mario','Mario','mario',5),
 ('Sony','Sony','sony',6);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;


--
-- Definition of table `uu`
--

DROP TABLE IF EXISTS `uu`;
CREATE TABLE `uu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) NOT NULL,
  `uu` varchar(20480) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uu`
--

/*!40000 ALTER TABLE `uu` DISABLE KEYS */;
/*!40000 ALTER TABLE `uu` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
