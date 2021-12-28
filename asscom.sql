-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 02:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asscom`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `usernamemhs` varchar(100) NOT NULL,
  `emailmhs` varchar(60) NOT NULL,
  `passwordmhs` varchar(60) NOT NULL,
  `nim` varchar(60) NOT NULL,
  `namamhs` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`usernamemhs`, `emailmhs`, `passwordmhs`, `nim`, `namamhs`) VALUES
('90', 'ihariosyahputra12@gmail.com', '12345', '028', 'hariorio'),
('rahulganteng', 'rahul123@gmail.com', '1234', '043', 'rahul'),
('rio', 'ihariosyahputra@gmail.com', '1234', '029', 'iqbal hario');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` int(11) NOT NULL,
  `nama_tugas` varchar(60) NOT NULL,
  `nama_matkul` varchar(60) NOT NULL,
  `deskripsi` text NOT NULL,
  `deadline` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id_tugas`, `nama_tugas`, `nama_matkul`, `deskripsi`, `deadline`) VALUES
(1, 'rio', 'rio', 'ndang mari', '2021-12-30'),
(13, 'robin', 'raul', 'ayok bisa', '2021-12-08'),
(78, 'ewtw', 'hhehhndfnd', 'jdzjsj', '2021-12-17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kodeakses` varchar(60) NOT NULL,
  `emailuser` varchar(60) NOT NULL,
  `passworduser` varchar(60) NOT NULL,
  `namauser` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kodeakses`, `emailuser`, `passworduser`, `namauser`) VALUES
('fagafafs', 'agaega', '132523', 'aafgia'),
('muna123', 'muna', '123', 'muna'),
('rahul12', 'rahul_jayker@gmail.com', '1234', 'rahul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`usernamemhs`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kodeakses`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
