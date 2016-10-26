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
 (9,'Studi Banding','1997-03-15','Fakultas Hukum Universitas Pelita Harapan Medan telah menyelenggarakan sebuah seminar yang mengangkat tema Sengketa di Laut Cina Selatan, pada hari Sabtu 20 Mei 2016 di Kampus Lippo UPH Medan.\r\n\r\nPada seminar kali ini FakultasHukum UPH Medan turut mengundang Dr. Ius.Damos Dumoli Agusman (Sekretaris Dirjen Hukum dan Perjanjian Internasional) sebagai pembicara dan turut mengundang beberapa Fakultas Hukum yang ada di Medan seperti Universitas Amir Hamzah, Universitas Sumatra Utara, dll.\r\n\r\nDalam seminar ini juga terdapat penandatanganan Nota Kesepemahaman (MoU) antara FakultasHukum UPH Medan dan Kementrian Luar Negeri RI.\r\n\r\nKeesokan harinya pada hari Sabtu, tanggal 21 Mei 2016 diadakan kelas Joint Communique yang dibawakan oleh pihak Kemenlu yang dihadiri oleh mahasiswa Fakultas Hukum UPH Medan. ','Studi Banding.jpeg'),
 (10,'This is testing 2','2016-05-16','jnewkcwmckwcmwcmwlcmwcmlwk','This is testing 2.jpg'),
 (11,'tesitnf','1997-05-16','jwbfhwbjcbjwbck','tesitnf.jpg'),
 (12,'Studi Banding 2','1997-03-12','blac;akodaodkqkdokqwdqkd;lqd','Studi Banding 2.jpg');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;


--
-- Definition of table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `category` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`,`name`,`username`,`password`,`category`) VALUES 
 (1,'Budiman','admin','admin',1),
 (4,'Stanley','stanley','stanley',1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
