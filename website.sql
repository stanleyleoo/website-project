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
  `image` longblob NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `gambar`
--

/*!40000 ALTER TABLE `gambar` DISABLE KEYS */;
INSERT INTO `gambar` (`id`,`id_kegiatan`,`image`) VALUES 
 (1,'20',''),
 (2,'23',''),
 (3,'24',''),
 (4,'25',0x696D672F342E6A7067),
 (5,'25',0x696D672F352E6A7067),
 (6,'25',0x696D672F362E6A7067);
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
  `poster` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kegiatan`
--

/*!40000 ALTER TABLE `kegiatan` DISABLE KEYS */;
INSERT INTO `kegiatan` (`id`,`title`,`faculty`,`speaker`,`location`,`date`,`conclusion`,`poster`) VALUES 
 (25,'fwejfj','jojewfjw','jfpwejpfjwp','jfpwejfwjf','1997-03-12','fwkfwnkwld',0x6677656A666A2E6A7067);
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
  `image` longblob NOT NULL,
  `preview` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`,`title`,`date`,`content`,`image`,`preview`) VALUES 
 (9,'Studi Banding FH UPH Medan','2016-05-12','<p>STUDI BANDING FH UPH MEDAN</p>\r\n\r\n<p>UPH Karawaci, Tangerang, 27-30 April 2016</p>\r\n\r\n<p>Fakultas Hukum Universitas Pelita Harapan Medan telah mengadakan studi banding ke UPH Karawaci, Tangerang dari tanggal 27-30 April 2016. Studi banding ini diikuti oleh 12 mahasiswa Fakultas Hukum UPH Medan dengan di dampingi oleh Dekan Fakultas Hukum UPH Medan, Dr. Alum Simbolon,SH,Mhum.</p>\r\n\r\n<p>Studi banding ini tidak hanya sekedar untuk berkunjung tetapi juga bertujuan untuk menambah wawasan dan pengetahuan para peserta studi banding termasuk dalam hal keorganisasian. Studi banding ini juga sebagai wujud terjalinnya relasi yang baik antara Fakultas Hukum UPH Medan dengan Fakultas Hukum UPH Karawaci.</p>',0x53747564692042616E64696E6720464820555048204D6564616E2E6A7067,'Fakultas Hukum Universitas Pelita Harapan Medan telah mengadakan studi banding ke UPH Karawaci, Tangerang dari tanggal 27-30 April 2016. Studi banding ini diikuti oleh 12 mahasiswa Fakultas Hukum UPH Medan dengan di dampingi oleh Dekan Fakultas Hukum UPH Medan, Dr. Alum Simbolon,SH,Mhum.'),
 (16,'Memahami Sengketa di Laut Cina Selatan','2016-05-26','<p>Fakultas Hukum Universitas Pelita Harapan Medan telah menyelenggarakan sebuah seminar yang mengangkat tema Sengketa di Laut Cina Selatan, pada hari Sabtu 20 Mei 2016 di Kampus Lippo UPH Medan.</p>\r\n\r\n<p>Pada seminar kali ini FakultasHukum UPH Medan turut mengundang Dr. Ius.Damos Dumoli Agusman (Sekretaris Dirjen Hukum dan Perjanjian Internasional) sebagai pembicara dan turut mengundang beberapa Fakultas Hukum yang ada di Medan seperti Universitas Amir Hamzah, Universitas Sumatra Utara, dll.</p>\r\n\r\n<p>Dalam seminar ini juga terdapat penandatanganan Nota Kesepemahaman (MoU) antara FakultasHukum UPH Medan dan Kementrian Luar Negeri RI.</p>\r\n\r\n<p>Keesokan harinya pada hari Sabtu, tanggal 21 Mei 2016 diadakan kelas Joint Communique yang dibawakan oleh pihak Kemenlu yang dihadiri oleh mahasiswa Fakultas Hukum UPH Medan. </p>',0x4D454D4148414D492053454E474B4554412054455249544F5249414C204449204C4155542043494E412053454C4154414E2E6A7067,'Fakultas Hukum Universitas Pelita Harapan Medan telah menyelenggarakan sebuah seminar yang mengangkat tema Sengketa di Laut Cina Selatan, pada hari Sabtu 20 Mei 2016 di Kampus Lippo UPH Medan.'),
 (19,'Kesiapan Hukum Indonesia Dalam Menghadapi MEA','2016-04-04','<p>SEMINAR NASIONAL: KESIAPAN HUKUM INDONESIA DALAM MENGHADAPI MEA</p>\r\n<p>SABTU, 2 APRIL 2016</p>\r\n\r\n<p>Seminar yang diadakan oleh Fakultas Hukum UPH Medan ini mengangkat topik tentang Masyarakat Ekonomi ASEAN (MEA) yang saat ini tengah hangat diperbincangkan.</p>\r\n\r\n<p>Seminar ini dibawakan oleh Prof. Maidin Gultom, SH, MH. Selaku moderator dan Dr. V. Henry Soelistiyo Budi, SH., LL.M selaku keynot speaker dan turut mengundang beberapa narasumber :</p>\r\n<ol>\r\n    <li>Dr. Alum Simbolon SH, M.Hum.</li>\r\n    <li>Dr. Susi Susantijo, SH., LL.M</li>\r\n    <li>Prof. Suhaidi, SH., MH</li>\r\n    <li>Dr. R.H. Wiwoho, M.Sc</li>\r\n    <li>Prof. Dr. BintanR.Saragih, SH., M.Hum</li>\r\n    <li>Dan Yenny A.S, SH., MH</li>\r\n    <li>Yudo DiharjoLantanea, SH., B.EBF., M.Kn</li>\r\n</ol>\r\n<p>\r\nSeminar ini juga turut mengundang beberapa Universitas yang ada di Medan seperti UNIKA, Universitas HKBP Nommensen, dll. Pada seminar yang mengangkat topic MEA ini, juga dilakukan penandatanganan nota kesepemahaman (MoU) anara FakultasHukum UPH Medan dan Universitas Panca Bhakti Pontianak.</p>',0x4B6573696170616E2048756B756D20496E646F6E657369612044616C616D204D656E67686164617069204D45412E6A7067,'Seminar yang diadakan oleh Fakultas Hukum UPH Medan ini mengangkat topik tentang Masyarakat Ekonomi ASEAN (MEA) yang saat ini tengah hangat diperbincangkan.');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;


--
-- Definition of table `tentang`
--

DROP TABLE IF EXISTS `tentang`;
CREATE TABLE `tentang` (
  `id` int(10) unsigned NOT NULL,
  `cover` longblob,
  `visi` varchar(2048) DEFAULT NULL,
  `misi` varchar(2048) DEFAULT NULL,
  `deskripsi` varchar(2048) DEFAULT NULL,
  `struktur` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tentang`
--

/*!40000 ALTER TABLE `tentang` DISABLE KEYS */;
INSERT INTO `tentang` (`id`,`cover`,`visi`,`misi`,`deskripsi`,`struktur`) VALUES 
 (1,0x636F7665722E6A7067,'Mengembangkan sumber daya manusia yang beriman dan bertaqwa kepada Tuhan Yang Maha ESA dan berbudi pekerti luhur, Memiliki pengetahuan dan keterampilan, kesehatan jasmani dan rohani yang mantap dan mandiri serta rasa tanggung jawab kemasyarakatan dan kebangsaan.','<ol>\r\n\r\n    <li>Membangun organisasi jurusan yang berorientasi akademik dengan pengembangan diri yang optimal.</li>\r\n    <li>Membangun organisasi jurusan dengan dilatarbelakangi oleh pola pengkaderan yang jelas dan berkesinambungan.</li>\r\n    <li>Memberikan pelayanan kemahasiswaan yang baik.</li.\r\n    <li>Mengadakan pelatihan-pelatihan praktik kemahiran di dalam bidang hukum, politik, social dan ekonomi untuk membentuk mahasiswa jurusan yang yang berkualitas.</li>\r\n    <li>Membangun hubungan dan kerja-sama yang baik dengan pihak birokrasi.<li>\r\n</ol>','Himpunan Mahasiswa Fakultas Hukum, adalah lembaga kemahasiswaan di lingkungan Universitas Pelita Harapan Medan yang diselenggarakan, oleh, dan untuk mahasiswa di bawah bimbingan dan arahan Dekan guna melaksanakan kegiatan ekstra-kurikuler di bidang pemberdayaan mahasiswa, informasi dan komunikasi, bakat, minat dan sosial kemasyarakatan khususnya Fakultas Hukum. HMFH UPH Medan disahkan pada tanggal 2 April 2016. Himpunan Mahasiswa Fakultas Hukum Universitas Pelita Harapan Medan berasaskan Pancasila dan berlandaskan UUD 1945. Membentuk manusia yang bertaqwa kepada Tuhan Yang Maha Esa, berwawasan luas dan ilmiah, cendekia, memiliki integritas kepribadian, kepedulian sosial dan keadilan. HMFH ini bertujuan untuk mencapai tujuan pengabdian kepada Masyarakat dan Negara.',0x737472756B7475722E6A7067);
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
  `logo` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `ukm`
--

/*!40000 ALTER TABLE `ukm` DISABLE KEYS */;
INSERT INTO `ukm` (`id`,`title`,`faculty`,`leader`,`location`,`time`,`description`,`howtojoin`,`logo`) VALUES 
 (5,'Moot Court','Law',' Immanuel Banjarnahor','6th floor Lippo Campus','Saturday 1.30-5.00','Moot Court merupakan salah satu Unit Kegiatan Mahasiswa (UKM) yang bertujuan untuk memberikan tambahan pengetahuan bagi mahasiswa Fakultas Hukum agar dapat mengembangkan diri terutama dalam perwujudan konkrit dari mata kuliah hukum acara. Moot court ini akan menambah pengetahuan mahasiswa mengenai tugas hakim, jaksa, penasehat hukum serta kedudukan terdakwa   dan saksi-saksi. Moot court juga bertujuan agar mahasiswa hukum akrab dengan situasi persidangan','Bagi yang berminat untuk mendaftar, silahkan menghubungi : Louis Fernando (15L2) / ID Line : louis_f ',0x4D6F6F7420436F7572742E706E67),
 (6,'Debate Club','Law','Ramoti Taori Menauli Putri Joi Silalahi','Kampus Lippo Plaza UPH Medan lantai 5','Pukul 15.00, Setiap 2 minggu sekali','Debate Club merupakan salah satu Unit Kegiatan Mahasiswa (UKM) yang bertujuan agar mahasiswa Fakultas Hukum dapat mengembangkan diri terutama dalam hal berpikir kritis dalam menyikapi suatu kasus, melatih mahasiswa agar dapat menyampaikan argumen mereka dengan baik dan benar serta melatih mahasiswa untuk selalu mencari fakta dan data suatu kasus sebelum menanggapi kasus tersebut','Bagi yang berminat untuk mendaftar, silahkan menghubungi : Ramoti Menauli (15L1) 0853 7318 5056 / ID Line : menauli ',0x44656261746520436C75622E706E67);
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
  `uu` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `uu`
--

/*!40000 ALTER TABLE `uu` DISABLE KEYS */;
INSERT INTO `uu` (`id`,`nama`,`uu`) VALUES 
 (2,'tst',0x7473742E706466);
/*!40000 ALTER TABLE `uu` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
