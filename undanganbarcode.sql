-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2015 at 05:54 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `undanganbarcode`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_about_us`
--

CREATE TABLE IF NOT EXISTS `tb_about_us` (
  `id_about` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `publish` int(1) NOT NULL,
  PRIMARY KEY (`id_about`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_about_us`
--

INSERT INTO `tb_about_us` (`id_about`, `description`, `publish`) VALUES
(3, '<p>Tes</p>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_city`
--

CREATE TABLE IF NOT EXISTS `tb_city` (
  `id_city` int(20) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id_city`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `tb_city`
--

INSERT INTO `tb_city` (`id_city`, `city_name`) VALUES
(1, 'Banda Aceh'),
(2, 'Medan'),
(3, 'Padang'),
(4, 'Pekanbaru'),
(5, 'Jambi'),
(6, 'Palembang'),
(7, 'Bengkulu'),
(8, 'Bandar Lampung'),
(9, 'Pangkal Pinang'),
(10, 'Tanjung Pinang'),
(11, 'Jakarta'),
(12, 'Yogyakarta'),
(13, 'Bandung'),
(14, 'Semarang'),
(15, 'Surabaya'),
(16, 'Serang'),
(17, 'Denpasar'),
(18, 'Kupang'),
(19, 'Mataram'),
(20, 'Pontianak'),
(21, 'Palangka Raya'),
(22, 'Banjarmasin'),
(23, 'Samarinda'),
(24, 'Tanjung Selor'),
(25, 'Manado'),
(26, 'Palu'),
(27, 'Makassar'),
(28, 'Kendari'),
(29, 'Mamuju'),
(30, 'Gorontalo'),
(31, 'Ambon'),
(32, 'Sofifi'),
(33, 'Jayapura'),
(34, 'Manokwari');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE IF NOT EXISTS `tb_product` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` int(13) NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `product`, `description`, `price`) VALUES
(1, 'Coba', 'Baru', 100000000),
(2, 'Tes', 'Antik', 250000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_services`
--

CREATE TABLE IF NOT EXISTS `tb_services` (
  `id_services` int(11) NOT NULL AUTO_INCREMENT,
  `name_services` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_services`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_services`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_solusi`
--

CREATE TABLE IF NOT EXISTS `tb_solusi` (
  `id_solusi` int(11) NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(50) NOT NULL,
  `jumlah_hari` int(1) NOT NULL,
  `tanggal_acara` date NOT NULL,
  `jenis_acara` varchar(30) NOT NULL,
  `jumlah_undangan` int(4) NOT NULL,
  `jenis_undangan` varchar(20) NOT NULL,
  `jumlah_personil_tamu` int(8) NOT NULL,
  `jumlah_personil_regis_baru` int(8) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`id_solusi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tb_solusi`
--

INSERT INTO `tb_solusi` (`id_solusi`, `lokasi`, `jumlah_hari`, `tanggal_acara`, `jenis_acara`, `jumlah_undangan`, `jenis_undangan`, `jumlah_personil_tamu`, `jumlah_personil_regis_baru`, `email`, `telp`, `note`) VALUES
(1, 'Banda Aceh', 2, '2015-06-10', 'Pernikahan', 2000, 'Kartu', 12, 12, 'coba@cobca.cc', '9876543', 'T'),
(2, 'Banda Aceh', 2, '2015-06-18', 'Pernikahan', 1221, 'Kartu', 1212, 2312, 'qwqw@assa.com', '9876', ''),
(3, 'Banda Aceh', 2, '2015-06-12', 'Pernikahan', 1233, 'Kartu', 123, 321, 'qwqw@asa.com', '987654', ''),
(4, 'Banda Aceh', 2, '2015-06-11', 'Pernikahan', 221, 'Kartu', 12, 21, 'wqwq@wawa.com', '8765432', ''),
(5, 'Banda Aceh', 3, '2015-06-11', 'Pernikahan', 3434, 'Kartu', 434, 43, 'fs@ds.e', '4342', ''),
(6, 'Banda Aceh', 4, '2015-06-10', 'Pernikahan', 32, 'Cetak', 3232, 3232, 'eww@ds', '4598765', ''),
(7, 'Medan', 3, '2015-06-11', 'Pernikahan', 2323, 'Kartu', 131221, 122121, 'aa@asasa.com', '233232', ''),
(8, 'Bandar Lampung', 3, '2015-06-17', 'Rapat', 32, 'Kartu', 2, 2, 'ewewew@dsds.com', '09876543', ''),
(9, 'Tanjung Pinang', 5, '2015-06-17', 'Rapat', 150, 'Kartu', 120, 10, 'rek@re.com', '098765432', ''),
(10, 'Surabaya', 3, '2015-06-17', 'Pernikahan', 12, 'Kartu', 132, 12, 'ewew@ww.com', '0987654321', ''),
(11, 'Yogyakarta', 4, '2015-06-17', 'Seminar/Simposium', 234, 'Kartu', 221, 13, 'asd@as.com', '0987654321', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` enum('A','D') NOT NULL DEFAULT 'A',
  `email` varchar(60) NOT NULL,
  `user_position_id` int(11) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `password`, `name`, `status`, `email`, `user_position_id`, `date_created`, `date_modified`) VALUES
(1, 'ricko', 'fc4919e69e6194fcaa6793c90b782c4d', 'Ricko Sapto Prihartanto', 'A', 'ricko@gmail.com', 1, '2015-02-27 15:59:30', '2015-03-25 16:11:07'),
(3, 'riky', '0dded33fcb3dff8dab664cef68f309fc', 'Riky Dwi Yulianto', 'A', 'riky@coba.co.id', 1, '2015-06-11 11:14:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_position`
--

CREATE TABLE IF NOT EXISTS `tb_user_position` (
  `up_id` int(11) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(40) NOT NULL,
  `status` enum('A','D') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`up_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_user_position`
--

INSERT INTO `tb_user_position` (`up_id`, `position_name`, `status`) VALUES
(1, 'Super Administrator', 'A'),
(2, 'Sales Administrator', 'D');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
