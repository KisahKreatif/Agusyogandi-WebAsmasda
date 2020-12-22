-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2019 at 04:11 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dpd_ri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `asmasda`
--

CREATE TABLE IF NOT EXISTS `asmasda` (
  `tanggal` datetime NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nik` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `aspirasi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asmasda`
--

INSERT INTO `asmasda` (`tanggal`, `nama`, `nik`, `email`, `kota`, `aspirasi`) VALUES
('2019-07-20 19:18:45', 'aceng', 893748597, 'aceng@yahoo.com', 'bandung', 'ternate'),
('2019-07-20 19:19:33', 'gilang', 888888888, 'gilang@gmail.com', 'subang', 'kita bisa');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id_file` int(20) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `isi_singkat` varchar(300) NOT NULL,
  `isi_lengkap` longtext NOT NULL,
  `nama_file` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_file`, `judul`, `tanggal`, `isi_singkat`, `isi_lengkap`, `nama_file`) VALUES
(1, 'Kondisi Stadion GBLA', '21 Juli 2019', 'Tempat terbaik yang Terbengkalai', 'Sayang sekali stadion ini tidak terurus dan menjadi terbengkalai layaknya hati ini.', 'gbla.jpg'),
(2, 'berita kedua', '17 juli 2019', 'pengesahan', 'pengesahan rumah', 'pic3.png'),
(3, 'berita ketiga', '17 juli 2019', 'sosialisasi', 'persentasi', 'pic2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE IF NOT EXISTS `galery` (
`id_file` int(40) NOT NULL,
  `namakegiatan` varchar(50) NOT NULL,
  `caption` varchar(400) NOT NULL,
  `nama_file` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id_file`, `namakegiatan`, `caption`, `nama_file`) VALUES
(1, 'kegiatan 1', 'caption 1', 'logo5.png'),
(2, 'kegiatan 2', 'caption 2', 'LOGO DPD RI.png'),
(3, 'kegiatan 3', 'caption 3', 'LOGO DPD RI.png'),
(5, 'kegiatan 5', 'caption 5', 'LOGO DPD RI.png'),
(6, 'kegiatan 6', 'caption 6', 'LOGO DPD RI.png'),
(7, 'kegiatan 7', 'caption 7', 'LOGO DPD RI.png'),
(8, 'kegiatan 8', 'caption 8', 'LOGO DPD RI.png'),
(9, 'kegiatan 9', 'caption 9', 'LOGO DPD RI.png'),
(10, 'kegiatan 10', 'caption 10', 'LOGO DPD RI.png'),
(11, 'kegiatan 11', 'caption 11', 'LOGO DPD RI.png'),
(12, 'kegiatan 12', 'caption 12', 'LOGO DPD RI.png'),
(13, 'kegiatan 13', 'caption 13', 'LOGO DPD RI.png'),
(15, 'kegiatan 15', 'caption 15', 'LOGO DPD RI.png'),
(16, 'kegiatan 16', 'caption 16', 'LOGO DPD RI.png'),
(17, 'kegiatan 17', 'kegiatan 17', 'LOGO DPD RI.png'),
(18, 'kegiatan 18', 'caption 18', 'LOGO DPD RI.png'),
(19, 'kegiatan 19', 'caption 19', 'LOGO DPD RI.png'),
(20, 'kegiatan 20', 'caption 20', 'LOGO DPD RI.png');

-- --------------------------------------------------------

--
-- Table structure for table `slied_show`
--

CREATE TABLE IF NOT EXISTS `slied_show` (
`id_file` int(20) NOT NULL,
  `nama_file` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slied_show`
--

INSERT INTO `slied_show` (`id_file`, `nama_file`) VALUES
(1, 'pikiranrakyat.jpg'),
(2, 'gb1.jpeg'),
(3, 'gb3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `uploadbanner`
--

CREATE TABLE IF NOT EXISTS `uploadbanner` (
`id_file` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadbanner`
--

INSERT INTO `uploadbanner` (`id_file`, `nama_file`) VALUES
(5, 'bandung.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
 ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `slied_show`
--
ALTER TABLE `slied_show`
 ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `uploadbanner`
--
ALTER TABLE `uploadbanner`
 ADD PRIMARY KEY (`id_file`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id_file` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
MODIFY `id_file` int(40) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `slied_show`
--
ALTER TABLE `slied_show`
MODIFY `id_file` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `uploadbanner`
--
ALTER TABLE `uploadbanner`
MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
