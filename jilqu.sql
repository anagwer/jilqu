-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 04:14 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jilqu`
--

-- --------------------------------------------------------

--
-- Table structure for table `aksesoris`
--

CREATE TABLE `aksesoris` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `stok` varchar(50) NOT NULL,
  `harga` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aksesoris`
--

INSERT INTO `aksesoris` (`id`, `nama`, `stok`, `harga`) VALUES
(1, 'Giwang', '5', 6000),
(2, 'ring', '8', 9000),
(3, 'pin', '50', 3000),
(4, 'jarum', '9', 2500),
(5, 'Sticker', '5', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `id_ktlg` int(10) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `bahan` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `id_bonus` int(10) NOT NULL,
  `bonus` varchar(50) NOT NULL,
  `stok` int(10) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id_ktlg`, `jenis`, `bahan`, `warna`, `merek`, `id_bonus`, `bonus`, `stok`, `harga`) VALUES
(1, 'ceruti', 'babydoll', 'hijau', 'wangteam', 3, 'pin', 3, 40000),
(23, 'Bergo', 'Diamond', 'Moca', 'Umma', 4, 'jarum', 0, 22000),
(24, 'Syari', 'Wolfis', 'Maroon', 'Zoya', 1, 'Giwang', 3, 75000),
(25, 'Segi Empat', 'Babydoll', 'Army', 'Elzatta', 3, 'pin', 5, 55000),
(26, 'Bergo', 'Voal', 'cream', 'zara', 2, 'ring', 6, 40500),
(27, 'pasmina', 'Polycotton', 'Broken white', 'Sylmi Basic', 3, 'pin', 3, 62000),
(28, 'Syari', 'Voal', 'Lilac', 'Elzatta', 5, 'Sticker', 11, 80000),
(29, 'pasmina', 'makka', 'Dusty Pink', 'officialdein', 3, 'pin', 5, 50000),
(30, 'Syari', 'Wolpeach', 'kunyit', 'Wangteam', 5, 'Sticker', 0, 41000),
(31, 'bella square', 'babydoll', 'cream', 'zara', 2, 'Pin', 1, 40000),
(32, 'ceruti', 'babydoll', 'hijau', 'wangteam', 1, 'Pin', 3, 40000),
(33, 'rawis', 'katun', 'hitam', 'saudia', 4, 'firaq', 2, 17000),
(34, 'segi empat', 'sifon', 'oreo', 'saudia', 3, 'pin', 3, 25000),
(35, 'pasmina', 'rawis', 'merah', 'saudia', 3, 'pin', 3, 27000),
(36, 'bella square', 'diamond', 'latte', 'elzatta', 1, 'Giwang', 1, 25000),
(37, 'bella square', 'diamond', 'choffie', 'elzatta', 1, 'Giwang', 1, 25000),
(38, 'pasmina', 'babdyoll', 'hijau army', 'elzatta', 2, 'ring', 4, 30000),
(39, 'segi empat', 'sifon', 'kuning ', 'saudia', 4, 'firaq', 3, 27000),
(40, 'pasmina', 'diamond', 'hitam', 'zara', 2, 'ring', 3, 35000),
(41, 'Bergo', 'Katun', 'Hijau neon', 'Zoya', 5, 'Sticker', 4, 12000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'giwang', '$2y$10$7C4YO083wMD.IqA00VZJGuEqdCK0ueoUy/tqh1/0Gv0eHsC9VN17e', '2020-12-31 16:01:52'),
(2, 'bismillah', '$2y$10$muz37PTvS63tbXCLaudoS.Qg6554JKzyW31NIzeB0LOLPCMfBhfS6', '2020-12-31 16:02:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aksesoris`
--
ALTER TABLE `aksesoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id_ktlg`),
  ADD KEY `id_bonus` (`id_bonus`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aksesoris`
--
ALTER TABLE `aksesoris`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id_ktlg` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `katalog`
--
ALTER TABLE `katalog`
  ADD CONSTRAINT `katalog_ibfk_1` FOREIGN KEY (`id_bonus`) REFERENCES `aksesoris` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
