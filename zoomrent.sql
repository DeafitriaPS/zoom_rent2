-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 06:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoomrent`
--

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `jenis_paket` varchar(40) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `jenis_paket`, `harga`) VALUES
(1, '100', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `tanggal` date NOT NULL,
  `id_paket` int(11) NOT NULL,
  `pkt_stock` int(11) NOT NULL,
  `stock_status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`tanggal`, `id_paket`, `pkt_stock`, `stock_status`) VALUES
('2021-09-04', 1, 1, 'tersedia'),
('2021-09-05', 1, 1, 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_formpesan`
--

CREATE TABLE `tbl_formpesan` (
  `id_pesan` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `instansi` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `tanggalpeminjaman` varchar(50) NOT NULL,
  `no_pembayaran` varchar(20) DEFAULT NULL,
  `bukti` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0 = belum di bayar\r\n1 = bukti terkirim\r\n2 = lunas'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_formpesan`
--

INSERT INTO `tbl_formpesan` (`id_pesan`, `email`, `nama`, `instansi`, `alamat`, `telp`, `tanggalpeminjaman`, `no_pembayaran`, `bukti`, `status`) VALUES
(1, 'aku@gmail.com', 'aku', 'unesa', 'ketintang', '0987654321', '2021-08-17', NULL, NULL, 0),
(2, 'atikashima70@gmail.com', 'Atika Shima Firdausi', 'unesajaya', 'krembangan', '08978187784', '2021-08-18', NULL, NULL, 0),
(3, 'yuppy@mail.com', 'yup', 'sipil', 'bjn', '0895377243585', '2021-08-17', NULL, NULL, 0),
(4, 'admin@mail.com', 'Atika Shima Firdausi', 'unesa', 'ketintang', '0987654321', '2021-08-18', NULL, NULL, 0),
(5, 'adminjtif@mail.com', 'Sulistya Ernawati', 'unesajaya', 'krembangan', '0895377243585', '2021-08-18', NULL, NULL, 0),
(6, 'atikashima70@gmail.com', 'Atika Shima Firdausi', 'unesa', 'krembangan jaya selatan 2d no 15', '0895377243585', '2021-08-19', NULL, NULL, 0),
(7, 'unesa@ac.id', 'Deafitria Putri Susanto', 'unesa', 'kett', '0895377243585', '0000-00-00', NULL, NULL, 0),
(8, 'ya@ya.com', 'yaa', 'unesa', 'jombang', '08978187784', '0000-00-00', NULL, NULL, 0),
(9, 'cobayuk@gmail.com', 'coba', 'unesajaya', 'krembangan jaya selatan 2d no 15', '08978187784', '0000-00-00', NULL, NULL, 0),
(10, 'ayuksari89@yahoo.com', 'yyyyyyyyyyyyyyyy', 'unesajaya', 'krembangan jaya selatan 2d no 15', '0895377243585', '0000-00-00', NULL, NULL, 0),
(11, 'sadfgh@mail.com', 'sdfgh', 'fxcghgj', 'sdfdghjk', '123456', '14-09-2021', NULL, NULL, 0),
(12, 'kekasihtaeyong@gmail.com', 'Putri Amelia Agustin', 'sipil', 'krembangan jaya selatan 2d no 15', '123456', '21-09-2021', NULL, NULL, 0),
(13, 'dea@ic.id', 'dea', 'unesa', 'fsgdhgjkh', '1627138249093', '15-09-2021', NULL, NULL, NULL),
(14, '', '', '', '', '', '', 'P14', NULL, NULL),
(15, 'qwe@mail.com', 'qwe', 'qwe', 'qwe', '012', '14-09-2021', 'P14', NULL, NULL),
(16, '', '', '', '', '', '', 'P16', NULL, NULL),
(17, 'iop@mail.com', 'iop', 'iop', 'iop', '1029', '20-09-2021', 'P16', NULL, NULL),
(18, '', '', '', '', '', '', 'P18', NULL, NULL),
(19, 'gfh@mail.c', 'gfh', 'gfh', 'gfh', '768', '21-09-2021', 'P18', NULL, NULL),
(20, '', '', '', '', '', '', 'P20', NULL, NULL),
(21, 'tika@gmail.com', 'tika', 'gfh', 'asdasd', '012', '30-09-2021', 'P20', NULL, NULL),
(22, '', '', '', '', '', '', 'P22', NULL, NULL),
(23, 'dea@mail.com', 'qwe', 'iop', 'iop', '1029', '20-09-2021', 'P22', NULL, NULL),
(24, '', '', '', '', '', '', 'P24', NULL, NULL),
(25, 'gfh@mail.c', 'qwe', 'gfh', 'fsgdhgjkh', '768', '22-09-2021', 'P24', NULL, NULL),
(26, '', '', '', '', '', '', 'P26', NULL, NULL),
(27, 'gfh@mail.c', 'tika', 'gfh', 'fsgdhgjkh', '012', '22-09-2021', 'P26', NULL, NULL),
(28, 'dea@mail.com', 'tika', 'unesa', 'qwe', '1627138249093', '22-09-2021', 'P28', NULL, NULL),
(29, 'deafitriaps@gmail.com', 'Deafitria Putri Susanto', 'iop', 'fsgdhgjkh', '1029', '24-09-2021', 'P29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`tanggal`);

--
-- Indexes for table `tbl_formpesan`
--
ALTER TABLE `tbl_formpesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_formpesan`
--
ALTER TABLE `tbl_formpesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
