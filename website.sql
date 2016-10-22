-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2016 at 11:42 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `content` varchar(3000) NOT NULL,
  `image` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `content`, `image`) VALUES
(9, 'Studi Banding', '1997-03-15', 'Fakultas Hukum Universitas Pelita Harapan Medan telah menyelenggarakan sebuah seminar yang mengangkat tema Sengketa di Laut Cina Selatan, pada hari Sabtu 20 Mei 2016 di Kampus Lippo UPH Medan.\r\n\r\nPada seminar kali ini FakultasHukum UPH Medan turut mengundang Dr. Ius.Damos Dumoli Agusman (Sekretaris Dirjen Hukum dan Perjanjian Internasional) sebagai pembicara dan turut mengundang beberapa Fakultas Hukum yang ada di Medan seperti Universitas Amir Hamzah, Universitas Sumatra Utara, dll.\r\n\r\nDalam seminar ini juga terdapat penandatanganan Nota Kesepemahaman (MoU) antara FakultasHukum UPH Medan dan Kementrian Luar Negeri RI.\r\n\r\nKeesokan harinya pada hari Sabtu, tanggal 21 Mei 2016 diadakan kelas Joint Communique yang dibawakan oleh pihak Kemenlu yang dihadiri oleh mahasiswa Fakultas Hukum UPH Medan. ', 'Studi Banding.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `category` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `category`) VALUES
(1, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
