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
-- Definition of table `gambar`
--

DROP TABLE IF EXISTS `gambar`;
CREATE TABLE `gambar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_kegiatan` varchar(100) NOT NULL,
  `image` varchar(2048) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

/*!40000 ALTER TABLE `gambar` DISABLE KEYS */;
INSERT INTO `gambar` (`id`,`id_kegiatan`,`image`) VALUES 
 (1,'20',''),
 (2,'23',''),
 (3,'24',''),
 (4,'25','img/4.jpg'),
 (5,'25','img/5.jpg'),
 (6,'25','img/6.jpg');
/*!40000 ALTER TABLE `gambar` ENABLE KEYS */;


--
-- Definition of table `kegiatan`
--

DROP TABLE IF EXISTS `kegiatan`;
CREATE TABLE `kegiatan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `speaker` varchar(500) NOT NULL,
  `location` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `conclusion` varchar(2000) NOT NULL,
  `poster` varchar(2048) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

/*!40000 ALTER TABLE `kegiatan` DISABLE KEYS */;
INSERT INTO `kegiatan` (`id`,`title`,`faculty`,`speaker`,`location`,`date`,`conclusion`,`poster`) VALUES 
 (25,'fwejfj','jojewfjw','jfpwejpfjwp','jfpwejfwjf','1997-03-12','fwkfwnkwld','fwejfj.jpg');
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
  `preview` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`,`title`,`date`,`content`,`image`,`preview`) VALUES 
 (9,'Studi Banding','2016-05-16','Fakultas Hukum Universitas Pelita Harapan Medan telah menyelenggarakan sebuah seminar yang mengangkat tema Sengketa di Laut Cina Selatan, pada hari Sabtu 20 Mei 2016 di Kampus Lippo UPH Medan.\r\n\r\nPada seminar kali ini FakultasHukum UPH Medan turut mengundang Dr. Ius.Damos Dumoli Agusman (Sekretaris Dirjen Hukum dan Perjanjian Internasional) sebagai pembicara dan turut mengundang beberapa Fakultas Hukum yang ada di Medan seperti Universitas Amir Hamzah, Universitas Sumatra Utara, dll.\r\n\r\nDalam seminar ini juga terdapat penandatanganan Nota Kesepemahaman (MoU) antara FakultasHukum UPH Medan dan Kementrian Luar Negeri RI.\r\n\r\nKeesokan harinya pada hari Sabtu, tanggal 21 Mei 2016 diadakan kelas Joint Communique yang dibawakan oleh pihak Kemenlu yang dihadiri oleh mahasiswa Fakultas Hukum UPH Medan. \r\n\r\nTesting','Studi Banding.jpg',''),
 (16,'MEMAHAMI SENGKETA TERITORIAL DI LAUT CINA SELATAN','2016-05-26','Fakultas Hukum Universitas Pelita Harapan Medan telah menyelenggarakan sebuah seminar yang mengangkat tema Sengketa di Laut Cina Selatan, pada hari Sabtu 20 Mei 2016 di Kampus Lippo UPH Medan.\r\n\r\nPada seminar kali ini FakultasHukum UPH Medan turut mengundang Dr. Ius.Damos Dumoli Agusman (Sekretaris Dirjen Hukum dan Perjanjian Internasional) sebagai pembicara dan turut mengundang beberapa Fakultas Hukum yang ada di Medan seperti Universitas Amir Hamzah, Universitas Sumatra Utara, dll.\r\n\r\nDalam seminar ini juga terdapat penandatanganan Nota Kesepemahaman (MoU) antara FakultasHukum UPH Medan dan Kementrian Luar Negeri RI.\r\n\r\nKeesokan harinya pada hari Sabtu, tanggal 21 Mei 2016 diadakan kelas Joint Communique yang dibawakan oleh pihak Kemenlu yang dihadiri oleh mahasiswa Fakultas Hukum UPH Medan. ','MEMAHAMI SENGKETA TERITORIAL DI LAUT CINA SELATAN.jpg','');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;


--
-- Definition of table `tentang`
--

DROP TABLE IF EXISTS `tentang`;
CREATE TABLE `tentang` (
  `id` int(10) unsigned NOT NULL,
  `cover` varchar(2048) DEFAULT NULL,
  `visi` varchar(2048) DEFAULT NULL,
  `misi` varchar(2048) DEFAULT NULL,
  `deskripsi` varchar(2048) DEFAULT NULL,
  `struktur` varchar(2048) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang`
--

/*!40000 ALTER TABLE `tentang` DISABLE KEYS */;
INSERT INTO `tentang` (`id`,`cover`,`visi`,`misi`,`deskripsi`,`struktur`) VALUES 
 (1,'cover.jpg','Himpunan Mahasiswa Fakultas Hukum, adalah lembaga kemahasiswaan di lingkungan Universitas Pelita Harapan Medan yang diselenggarakan, oleh, dan untuk mahasiswa di bawah bimbingan dan arahan Dekan guna melaksanakan kegiatan ekstra-kurikuler di bidang pemberdayaan mahasiswa, informasi dan komunikasi, bakat, minat dan sosial kemasyarakatan khususnya Fakultas Hukum. HMFH UPH Medan disahkan pada tanggal 2 April 2016. Himpunan Mahasiswa Fakultas Hukum Universitas Pelita Harapan Medan berasaskan Pancasila dan berlandaskan UUD 1945. Membentuk manusia yang bertaqwa kepada Tuhan Yang Maha Esa, berwawasan luas dan ilmiah, cendekia, memiliki integritas kepribadian, kepedulian sosial dan keadilan. HMFH ini bertujuan untuk mencapai tujuan pengabdian kepada Masyarakat dan Negara.\r\ntesitingggg','<ol>\r\n<li>Himpunan Mahasiswa Fakultas Hukum, adalah lembaga kemahasiswaan di lingkungan Universitas Pelita Harapan Medan yang diselenggarakan, oleh, dan untuk mahasiswa di bawah bimbingan dan arahan Dekan guna melaksanakan kegiatan ekstra-kurikuler di bidang pemberdayaan mahasiswa, informasi dan komunikasi, bakat, minat dan sosial kemasyarakatan khususnya Fakultas Hukum. HMFH UPH Medan disahkan pada tanggal 2 April 2016. Himpunan Mahasiswa Fakultas Hukum Universitas Pelita Harapan Medan berasaskan Pancasila dan berlandaskan UUD 1945. Membentuk manusia yang bertaqwa kepada Tuhan Yang Maha Esa, berwawasan luas dan ilmiah, cendekia, memiliki integritas kepribadian, kepedulian sosial dan keadilan. HMFH ini bertujuan untuk mencapai tujuan pengabdian kepada Masyarakat dan Negara.</li>\r\n</ol>','Himpunan Mahasiswa Fakultas Hukum, adalah lembaga kemahasiswaan di lingkungan Universitas Pelita Harapan Medan yang diselenggarakan, oleh, dan untuk mahasiswa di bawah bimbingan dan arahan Dekan guna melaksanakan kegiatan ekstra-kurikuler di bidang pemberdayaan mahasiswa, informasi dan komunikasi, bakat, minat dan sosial kemasyarakatan khususnya Fakultas Hukum. HMFH UPH Medan disahkan pada tanggal 2 April 2016. Himpunan Mahasiswa Fakultas Hukum Universitas Pelita Harapan Medan berasaskan Pancasila dan berlandaskan UUD 1945. Membentuk manusia yang bertaqwa kepada Tuhan Yang Maha Esa, berwawasan luas dan ilmiah, cendekia, memiliki integritas kepribadian, kepedulian sosial dan keadilan. HMFH ini bertujuan untuk mencapai tujuan pengabdian kepada Masyarakat dan Negara.\r\n','struktur.jpg');
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
  `howtojoin` varchar(200) NOT NULL,
  `logo` varchar(2048) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukm`
--

/*!40000 ALTER TABLE `ukm` DISABLE KEYS */;
INSERT INTO `ukm` (`id`,`title`,`faculty`,`leader`,`location`,`time`,`description`,`howtojoin`,`logo`) VALUES 
 (5,'Moot Court','Law','Budiman','Lippo Campus lantai 7','Saturday 1.30-5.00','Moot Court merupakan salah satu Unit Kegiatan Mahasiswa (UKM) yang bertujuan untuk memberikan tambahan pengetahuan bagi mahasiswa Fakultas Hukum agar dapat mengembangkan diri terutama dalam perwujudan konkrit dari mata kuliah hukum acara. Moot court ini akan menambah pengetahuan mahasiswa mengenai tugas hakim, jaksa, penasehat hukum serta kedudukan terdakwa   dan saksi-saksi. Moot court juga bertujuan agar mahasiswa hukum akrab dengan situasi persidangan\r\ntets.','Bagi yang berminat untuk mendaftar, silahkan menghubungi : Louis Fernando (15L2) / ID Line : louis_f ','Moot Court.png');
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
