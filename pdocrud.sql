-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 03:12 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdocrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `alamat` text NOT NULL,
  `notelepon` text NOT NULL,
  `keperluan` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `nama`, `jenis_kelamin`, `alamat`, `notelepon`, `keperluan`, `created`) VALUES
(1, 'Andi ', 'Laki-Laki', 'pekalongan', '083169047968', 'Akta Pernikahan', '2020-01-24 15:17:44'),
(2, 'Nilam', 'Perempuan', 'Malang', '087277711166', 'Akta Kelahiran', '2020-01-24 15:35:26'),
(3, 'Nilam', 'Perempuan', 'Malang', '087277711166', 'Akta Kelahiran', '2020-01-24 15:36:19'),
(4, 'Testing', 'Laki-Laki', 'Kamboja', '083169047968', 'Akta Perceraian', '2020-01-24 15:36:45'),
(5, 'Tejo', 'Laki-Laki', 'Kaan', '087277711166', 'Akta Kematian', '2020-01-24 15:38:31'),
(6, 'Kamu', 'Laki-Laki', 'Kamboka', '083169047968', 'E-KTP', '2020-02-01 13:28:35'),
(7, 'Kuaj', 'Perempuan', 'Lamongan', '089502100002', 'Pengaduan', '2020-02-01 13:28:55'),
(8, 'Lola', 'Perempuan', 'Lampung', '089502100003', 'Akta Perkawinan', '2020-02-01 13:29:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
