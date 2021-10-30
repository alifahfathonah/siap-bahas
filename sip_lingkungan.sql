-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 24, 2021 at 08:28 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sip_lingkungan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_usaha`
--

CREATE TABLE `data_usaha` (
  `iddata_usaha` int(11) NOT NULL,
  `jenis_usaha_id` int(11) NOT NULL,
  `nama_tempat` varchar(128) DEFAULT NULL,
  `nama_pemilik` varchar(128) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `longitude` varchar(45) DEFAULT NULL,
  `latitude` varchar(45) DEFAULT NULL,
  `luas_lahan` int(4) DEFAULT NULL,
  `jml_kamar` int(4) DEFAULT NULL,
  `jenis_kegiatan` varchar(128) DEFAULT NULL,
  `jml_karyawan` int(4) DEFAULT NULL,
  `tahun_operasi` year(4) DEFAULT NULL,
  `jenis_izin_dimiliki` varchar(32) DEFAULT NULL,
  `nomor_izin` varchar(32) DEFAULT NULL,
  `tgl_izin` date DEFAULT NULL,
  `instansi_penerbit_izin` varchar(128) DEFAULT NULL,
  `status_izin` enum('Aktif','Nonaktif') DEFAULT NULL,
  `status_kewajiban` varchar(45) DEFAULT NULL,
  `file_izin` varchar(128) DEFAULT NULL,
  `file_lokasi` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_usaha`
--

INSERT INTO `data_usaha` (`iddata_usaha`, `jenis_usaha_id`, `nama_tempat`, `nama_pemilik`, `alamat`, `longitude`, `latitude`, `luas_lahan`, `jml_kamar`, `jenis_kegiatan`, `jml_karyawan`, `tahun_operasi`, `jenis_izin_dimiliki`, `nomor_izin`, `tgl_izin`, `instansi_penerbit_izin`, `status_izin`, `status_kewajiban`, `file_izin`, `file_lokasi`) VALUES
(1, 1, 'srikandi', 'uci sanusi', 'ransiki', '013019.24', '1341012.33', 300, 0, '-', 6, 2016, 'IMB', '012.6/04/IMB/DPMPTSP/2021', '2021-03-02', 'dPM PTSP', 'Aktif', '-', '4c1269d886eedd66692a5804d8b5ca9e.png', NULL),
(2, 2, 'dopiz', 'dopiz', 'muari', '0120460', '1341306.3', 36, 0, '-', 0, 2021, '-', '-', '2021-07-24', '-', 'Aktif', '-', NULL, 'bb7ca5d01e2baf5f39272eba6bc7f685.png');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_usaha`
--

CREATE TABLE `jenis_usaha` (
  `idjenis_usaha` int(11) NOT NULL,
  `jenis_usaha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_usaha`
--

INSERT INTO `jenis_usaha` (`idjenis_usaha`, `jenis_usaha`) VALUES
(1, 'hotel'),
(2, 'bengkel'),
(3, 'industri tahu'),
(4, 'ukl-upl');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idpengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(128) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `level` enum('Administrator') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idpengguna`, `nama_lengkap`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', '$2y$10$M514AKRQOTIpASqe2IQyH.lR.dfF5qx4hgUfLrfncx0Xl3dIzb.ZK', 'Administrator'),
(2, 'Eka Saputra', 'user', '$2y$10$Y6DmrseFXnB2sxr6XlfQyuN.BJDq2a5C16fcYp4RVGk6pZ3pbZB.e', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_usaha`
--
ALTER TABLE `data_usaha`
  ADD PRIMARY KEY (`iddata_usaha`),
  ADD KEY `fk_data_usaha_jenis_usaha_idx` (`jenis_usaha_id`);

--
-- Indexes for table `jenis_usaha`
--
ALTER TABLE `jenis_usaha`
  ADD PRIMARY KEY (`idjenis_usaha`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idpengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_usaha`
--
ALTER TABLE `data_usaha`
  MODIFY `iddata_usaha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_usaha`
--
ALTER TABLE `jenis_usaha`
  MODIFY `idjenis_usaha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `idpengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_usaha`
--
ALTER TABLE `data_usaha`
  ADD CONSTRAINT `fk_data_usaha_jenis_usaha` FOREIGN KEY (`jenis_usaha_id`) REFERENCES `jenis_usaha` (`idjenis_usaha`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
