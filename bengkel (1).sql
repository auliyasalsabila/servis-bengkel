-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 03:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkel`
--

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `namaservice` varchar(100) NOT NULL,
  `jumlah` int(12) NOT NULL,
  `harga` int(12) NOT NULL,
  `subtotal` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pekerja`
--

CREATE TABLE `pekerja` (
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pekerja`
--

INSERT INTO `pekerja` (`username`, `password`) VALUES
('auliya', 'aul7712'),
('sarly', 'sar8153'),
('sopiyan', 'sop7956'),
('fariz', 'far7924');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `namapelanggan` varchar(50) NOT NULL,
  `jumlahpesanan` int(10) NOT NULL,
  `pesanan` varchar(1000) NOT NULL,
  `totalharga` int(12) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `jenisproduk` varchar(100) NOT NULL,
  `hargaproduk` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`jenisproduk`, `hargaproduk`) VALUES
('baut 5inc', 5000),
('baut 5inc', 5000),
('baut 5inc', 5000),
('gear', 150000),
('oli', 50000),
('spion', 37000),
('rantai', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `pservice`
--

CREATE TABLE `pservice` (
  `namapelanggan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlahpesanan` int(12) NOT NULL,
  `jenisservice` varchar(100) NOT NULL,
  `hargaservice` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pservice`
--

INSERT INTO `pservice` (`namapelanggan`, `tanggal`, `jumlahpesanan`, `jenisservice`, `hargaservice`) VALUES
('', '2021-05-26', 0, 'ganti oli', 50000),
('', '2021-05-26', 0, 'ganti ban', 100000),
('', '2021-05-26', 0, 'service rutin', 250000);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `jenisservice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`jenisservice`) VALUES
('ganti oli'),
('ganti ban'),
('service rutin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
