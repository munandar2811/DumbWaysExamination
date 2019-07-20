-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Jul 2019 pada 12.54
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE IF NOT EXISTS `biodata` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_birth_id` varchar(10) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `last_education` enum('SMA','D3','S1') NOT NULL,
  `religion` enum('Islam','Kristen','Katolik') NOT NULL,
  `hobby` enum('Renang','Mancing','Game','Gibah','Programing') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id`, `full_name`, `date_of_birth`, `place_of_birth_id`, `phone_number`, `address`, `last_education`, `religion`, `hobby`) VALUES
(1, 'Lucinta Lu', '1992-07-12', '1', '08111111', 'Jl. jalanan', 'S1', 'Kristen', 'Renang'),
(2, 'Satrio', '2001-07-21', '1', '08222222', 'Jl. mantan sejahtera', 'SMA', 'Islam', 'Gibah'),
(3, 'Syahrini', '1989-01-01', '1', '08333333', 'Jl. melayani setia', 'S1', 'Islam', 'Programing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
(1, 'Jakarta'),
(2, 'Bandung'),
(3, 'Medan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
