-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Mar 2018 pada 02.39
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel161`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `kd_kamar` varchar(15) NOT NULL,
  `kd_kategori` varchar(50) DEFAULT NULL,
  `nama_kamar` varchar(20) DEFAULT NULL,
  `lokasi_lantai` varchar(2) DEFAULT NULL,
  `keterangan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`kd_kamar`, `kd_kategori`, `nama_kamar`, `lokasi_lantai`, `keterangan`) VALUES
('001', 'ST', 'Amarilis', '3', 'Single'),
('002', 'ST', 'Amarilis', '3', 'Double'),
('003', 'DE', 'Anyelir', '2', 'Twin'),
('004', 'SU', 'Asoka', '2', 'Family'),
('005', 'PR', 'Aster', '1', 'Family');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`kd_kamar`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
