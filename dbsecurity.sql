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
-- Database: `dbsecurity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `pass`) VALUES
('admin', 'password'),
('admin01@gmail.com', '846ba2bc8d4ca34a80ee8cf0acb77b0f'),
('admin0@gmail.com', '846ba2bc8d4ca34a80ee8cf0acb77b0f'),
('admin2@example.com', '846ba2bc8d4ca34a80ee8cf0acb77b0f'),
('admin@example.com', '846ba2bc8d4ca34a80ee8cf0acb77b0f'),
('adminku@admin.com', '$2y$10$V/RQG49Q3/P2ZRc364VO2uwwrJIICqJRdHVSjDRktDENOc7o7f9tW'),
('anditambunan1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `dbadmin`
--

CREATE TABLE `dbadmin` (
  `id` int(11) NOT NULL,
  `userid` text NOT NULL,
  `pass` text NOT NULL,
  `nama` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbadmin`
--

INSERT INTO `dbadmin` (`id`, `userid`, `pass`, `nama`, `foto`) VALUES
(2, 'admin2@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Developer', '21012020102730avatar-01.jpg'),
(3, 'coba@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Coba', '22012020085314download.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `rootkita`
--

CREATE TABLE `rootkita` (
  `id` int(11) NOT NULL,
  `namauser` text NOT NULL,
  `userid` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `dbadmin`
--
ALTER TABLE `dbadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rootkita`
--
ALTER TABLE `rootkita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id_file`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbadmin`
--
ALTER TABLE `dbadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rootkita`
--
ALTER TABLE `rootkita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
