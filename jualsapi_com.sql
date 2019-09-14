-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2019 at 05:59 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jualsapi.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataproduk_sapi`
--

CREATE TABLE `dataproduk_sapi` (
  `ID_USERS` int(100) NOT NULL,
  `ID_PRODUK` int(100) NOT NULL,
  `DESKRIPSI` text NOT NULL,
  `BERAT` double(255,0) NOT NULL,
  `WARNA` int(10) NOT NULL,
  `JENIS` int(10) NOT NULL,
  `KUANTITAS` int(255) NOT NULL,
  `UMUR` int(255) NOT NULL,
  `JENIS_KELAMIN` int(10) NOT NULL,
  `RAS` int(10) NOT NULL,
  `LOKASI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_users`
--

CREATE TABLE `data_users` (
  `id` int(100) UNSIGNED NOT NULL,
  `name` varchar(192) NOT NULL,
  `email` varchar(192) NOT NULL,
  `jeniskelamin` int(10) NOT NULL,
  `nomortelp` varchar(192) NOT NULL,
  `tanggallahir` date NOT NULL,
  `password` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_users`
--

INSERT INTO `data_users` (`id`, `name`, `email`, `jeniskelamin`, `nomortelp`, `tanggallahir`, `password`) VALUES
(10, 'Larry Dennis Lumban Toruan', 'larry@gmail.com', 0, '1234567890', '1999-08-06', '$2y$10$9xOFP.wWiWoN6R9QNGjwteBqz/LXQ6GUVmn4p05m3AjXXW4AIPESC'),
(16, 'Larry', 'larrydennis@gmail.com', 0, '12345', '1999-08-06', '$2y$10$TBLWcid5T.DJTU.vlKkDqO4f4.k110DPOqF9sZBGVZ9JaN2S/oenq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataproduk_sapi`
--
ALTER TABLE `dataproduk_sapi`
  ADD PRIMARY KEY (`ID_USERS`),
  ADD UNIQUE KEY `ID_PRODUK` (`ID_PRODUK`);

--
-- Indexes for table `data_users`
--
ALTER TABLE `data_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `EMAIL` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataproduk_sapi`
--
ALTER TABLE `dataproduk_sapi`
  MODIFY `ID_PRODUK` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_users`
--
ALTER TABLE `data_users`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
