-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 03:59 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepuasan_pasien`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `no_p` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `ivf` varchar(20) NOT NULL,
  `kby` varchar(20) NOT NULL,
  `poli_gigi` varchar(20) NOT NULL,
  `poli_umum` varchar(20) NOT NULL,
  `igd` varchar(20) NOT NULL,
  `ok` varchar(30) NOT NULL,
  `hcu` varchar(20) NOT NULL,
  `vk` varchar(20) NOT NULL,
  `tppri` varchar(20) NOT NULL,
  `laborat` varchar(20) NOT NULL,
  `rm` varchar(20) NOT NULL,
  `reps` varchar(20) NOT NULL,
  `farmasi` varchar(20) NOT NULL,
  `bangsal_Astina` varchar(30) NOT NULL,
  `bangsal_Ayodya` varchar(30) NOT NULL,
  `bangsal_Alengka` varchar(30) NOT NULL,
  `bangsal_Amarta` varchar(30) NOT NULL,
  `dokter` varchar(30) NOT NULL,
  `perawat` varchar(30) NOT NULL,
  `gizi` varchar(30) NOT NULL,
  `saran_kritik` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`no_p`, `tgl`, `ivf`, `kby`, `poli_gigi`, `poli_umum`, `igd`, `ok`, `hcu`, `vk`, `tppri`, `laborat`, `rm`, `reps`, `farmasi`, `bangsal_Astina`, `bangsal_Ayodya`, `bangsal_Alengka`, `bangsal_Amarta`, `dokter`, `perawat`, `gizi`, `saran_kritik`) VALUES
(1, '2020-05-15', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', '-'),
(2, '2020-04-16', 'Puas', 'Puas', 'Puas', 'Tidak Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Tidak Puas', 'Puas', 'Puas', 'Tidak Puas', 'Puas', 'Tidak Puas', 'Puas', 'Puas', 'Puas', 'Tidak Puas', '-'),
(3, '2020-03-13', 'Puas', 'Puas', 'Puas', 'Tidak Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Tidak Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', '-'),
(4, '2020-03-23', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', '-'),
(5, '2020-03-23', 'Puas', 'Puas', 'Puas', 'Puas', 'Tidak Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Tidak Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', '-');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'sadewa', 'sadewa', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`no_p`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `no_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
