-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 30, 2021 at 06:45 PM
-- Server version: 10.3.30-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nokenstore_sip_lingkungan`
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
  `luas_lahan` double DEFAULT NULL,
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
(5, 4, 'pT PLN WILAYAH PAPUA DAN PAPUA BARAT', 'JOHANIS AVILLA ARI DARTOMO', 'KAMPUNG ISIM DISTRIK DATARAN ISIM', '133.866450', '-1.635197 ', 0, 0, 'pembangunan PLTD', 0, 0000, 'IZIN LINGKUNGAN', '28 TAHUN 2018', '2018-04-13', 'BUPATI MANOKWARI SELATAN', 'Nonaktif', '-', NULL, NULL),
(6, 4, 'PT PLN WILAYAH PAPUA DAN PAPUA BARAT', 'JOHANIS AVILLA ARI DARMOTO', 'KAMPUNG YARMATUM DISTRIK TAHOTA', '134.010786', '-1.797238 ', 0, 0, 'Pembangunan PLTD', 0, 0000, 'IZIN LINGKUNGAN', '29 TAHUN 2018', '2018-04-13', 'BUPATI MANOKWARI SELATAN', 'Nonaktif', '-', NULL, NULL),
(7, 4, 'WARMARE JAYA MANDIRI', 'SAPRI M BANI', 'KAMPUNG TOUBUU', '134.142406', '-1.494536 ', 0, 0, 'penambangan batu kali dan sirtu, pembangunan stone crusher dan asphait mixing plant', 0, 0000, 'IZIN LINGKUNGAN', 'TAHUN 2017', '2017-08-08', 'BUPATI MANOKWARI SELATAN', 'Nonaktif', '-', NULL, NULL),
(8, 4, 'DINAS PERINDAKOP DAN UKM', 'Drs. SYAHRIAL', 'KAMPUNG ABRESO', '134.197458', '-1.519217 ', 0, 0, 'Pembangunan Pasar sentral kenangan', 0, 0000, 'IZIN LINGKUNGAN', '66 TAHUN 2019', '2021-07-24', 'BUPATI MANOKWARI SELATAN', 'Nonaktif', '-', NULL, NULL),
(9, 4, 'PT. ALFA PUTRA JAYA KARYA', 'ASRI PAHALA SIHOMBING', 'KAMPUNG MUARI', '134.214212', '-1.346419 ', 0, 0, 'pembangunan pasar sentral kenangan', 0, 0000, 'REKOMENDASI UKL-UPL', '660/06/2018', '2018-08-27', 'kEPALA DINAS LINGKUNGAN HIDUP', 'Nonaktif', '-', NULL, NULL),
(10, 4, 'PT. AQSA JAYA PAPUA', 'ABDUL SYUKUR SALEH', 'KAMPUNG MUARI - DISTRIK ORANSBARI', '134.221736', '-1.345267 ', 0, 0, 'Stasiun Pengisian bahan bakar umum (SPBU)', 0, 0000, 'iZIN LINGKUNGAN', '-', '2018-03-12', 'bUPATI MANOKWARI SELATAN', 'Aktif', '-', '016cdd01b75bebacf76f74eb8d066182.pdf', NULL),
(11, 1, '-', 'dWI PURWANTO', 'SINDANG JAYA', '134.232583', '-1.313833 ', 36, 0, '-', 1, 2021, '-', '-', '2001-01-01', '-', 'Nonaktif', '-', NULL, NULL),
(12, 1, '-', 'MUJIATI', 'SINDANG JAYA', '134.232528', '-1.311861 ', 36, 0, '-', 0, 0000, '-', '-', '2001-01-01', '-', 'Nonaktif', '-', NULL, NULL),
(13, 1, '-', 'TRIWIBOWO', 'SINDANG JAYA', '134.232667', '-1.313028 ', 32, 0, '-', 0, 0000, 'SIU', '169/094/DPMPTSP/IX/2019', '2019-09-23', 'DPM PTSP', 'Nonaktif', '-', NULL, NULL),
(15, 1, 'GRIYO ALIT', 'SUKIMAN', 'SIDOMULYO\r\n', '134.06567924039328', '-0.8604903754355254', 0, 0, '-', 0, 0000, '-', '-', '2001-01-01', '-', 'Nonaktif', '-', NULL, NULL),
(16, 1, 'CAHAYA MOTOR', 'SUKATNO', 'MARGOMULYO', '134.223806', '-1.334778 ', 225, 0, '-', 0, 0000, 'sIU', '094/DY/219/DPMPTSP/III/2019', '2019-03-27', 'DPM PTSP', 'Nonaktif', '-', NULL, NULL),
(17, 1, 'SAWO MOTOR', 'IRFAN', 'MARGOMULYO', '134.221142', '-1.332028 ', 25, 0, '-', 0, 0000, 'SIU', '125/094/DPMPTSP/VII/2019', '2019-07-30', 'DPM STSP', 'Nonaktif', '-', NULL, NULL),
(18, 1, 'ASEP BENGKEL', 'ASEP', 'SINDANG JAYA', '134.227806', '-1.315917 ', 8, 0, '-', 0, 0000, '-', '-', '2001-01-01', '-', 'Nonaktif', '-', NULL, NULL),
(19, 1, 'BAHAR BENGKEL', 'BAHARUDIN LUTIF', 'SINDANG JAYA', '134.228806', '-1.315722 ', 8, 0, '-', 0, 0000, 'SIU', '106/094/DPMPTSP/VIII/2020', '2021-08-26', 'DPM PTSP', 'Nonaktif', '-', NULL, NULL),
(20, 1, 'SETIA KAWAN', 'JUMADI', 'SINDANG JAYA', '134.238250', '-1.312917 ', 64, 0, '-', 0, 0000, '-', '-', '2001-01-01', '-', 'Nonaktif', '-', NULL, NULL),
(21, 1, 'PANGLIN', 'IMAM SYAFI\'I', 'SIDOMULYO', '134.217611', '-1.320778 ', 48, 0, '-', 0, 0000, '-', '-', '2001-01-01', '-', 'Nonaktif', '-', NULL, NULL),
(22, 1, 'PUTRI KEMBAR', 'SUNYAMIN', 'MARGORUKUN', '134.221944', '-1.327222 ', 0, 0, '-', 0, 0000, 'IZIN GANGGUAN', 'S 11.3/133/2017', '2017-01-01', 'DISTRIK ORANSBARI', 'Nonaktif', '-', NULL, NULL),
(23, 1, 'ERIJA MOTOR', 'SLAMET', 'SIDOMULYO', '134.223750', '-1.316667 ', 48, 0, '-', 0, 0000, 'SIU', '094/DU/287/DPMPTSP/VI/2021', '2021-06-15', 'DPM PTSP', 'Nonaktif', '-', NULL, NULL),
(24, 1, 'RAJAWALI', 'ABDUL NAIM', 'SIDOMULYO', '134.217750', '-1.318556 ', 25, 0, '-', 0, 2021, 'SIU', '094/DU/339DPMPTSP/II/2019', '2019-02-15', 'DPM PTSP', 'Nonaktif', '-', NULL, NULL),
(25, 1, 'AGANIS MOTOR', 'SUPRIYADI', 'SIDOMULYO', '134.217833', '-1.322917 ', 30, 0, '-', 0, 0000, '-', '-', '2001-01-01', '-', 'Nonaktif', '-', NULL, NULL),
(26, 1, 'HARI ', 'HARI PURWANTO', 'AKEJU\r\n', '134.217694', '-1.324556 ', 15, 0, '-', 0, 2000, '-', '-', '2001-01-01', '-', 'Nonaktif', '-', NULL, NULL),
(27, 1, 'MANSEL JAYA', 'OKTOVIANUS SAPU', 'SABRI\r\n', '134.147697', '-1.491392 ', 48, 0, '-', 3, 2018, 'SIU', '094/DU/334/DPMPTSP/IX/2020', '2020-09-14', 'DPM PTSP', 'Nonaktif', '-', NULL, NULL),
(28, 1, 'KHASANAH', 'AGUS', 'sABRI', '134.148983', '-1.495144 ', 16, 0, '-', 0, 0000, '-', '-', '2001-01-01', '-', 'Nonaktif', '-', NULL, NULL),
(29, 1, 'RANSIKI KOTA', 'ARIF AHMADI', 'RANSIKI KOTA', '134.173281', '-1.507717 ', 20, 0, '-', 0, 2016, '-', '-', '2001-01-01', '-', 'Nonaktif', '-', NULL, NULL),
(30, 1, 'RAIPAWI', 'SURIPTO', 'ABRESO\r\n', '134.204931', '-1.511736 ', 20, 0, '-', 6, 2016, 'SIU', '131/094/DPMPTSP/X/2020', '2020-10-19', 'DPM PTSP', 'Nonaktif', '-', NULL, NULL),
(31, 1, 'AGAPE', 'SUHARTO', 'ABRESO\r\n', '134.203542', '-1.513917 ', 16, 0, '-', 3, 2019, 'SIU', '58/094/DPMPTSP/II/2019', '2019-02-26', 'DPM PTSP', 'Nonaktif', '-', NULL, NULL),
(32, 1, 'SJM', 'HERFIN', 'ABRESO\r\n', '134.202083', '-1.513603 ', 16, 0, '-', 3, 2019, 'SIU', '106/094/DPMPTSP/V/2021', '2021-05-27', 'DPM PTSP', 'Nonaktif', '-', NULL, NULL),
(33, 1, 'ATIRA', 'KAHARUDDIN', 'RANSIKI\r\n', '134.170206', '-1.506019 ', 16, 0, '-', 4, 2016, 'SIU', '094/DU/81/DPMPTSP/II/2021', '2021-02-04', 'DPM PTSP', 'Nonaktif', '-', NULL, NULL),
(34, 1, 'HUSNA', 'USMAN', 'ABRESO\r\n', '134.197594', '-1.508189 ', 16, 0, '-', 1, 2020, 'SIU', '094/DU/56/DPMPTSP/I/2021', '2021-01-26', 'DPM PTSP', 'Nonaktif', '-', NULL, NULL),
(35, 1, 'ILMAN', 'ISMAIL JAMA', 'SABRI\r\n', '134.157325', '-1.500417 ', 30, 0, '-', 1, 2017, 'IZIN GANGGUAN', '970/RIG/88/2018', '2018-05-22', 'BUPATI', 'Nonaktif', '-', NULL, NULL),
(36, 1, 'VIO', 'ARDI MARLINAH', 'SABRI\r\n', '134.160839', '-1.503297 ', 30, 0, '-', 2, 2019, '-', '-', '2001-01-01', '-', 'Nonaktif', '-', NULL, NULL),
(37, 1, 'CAHAYA ROME', 'RISWANDI', 'SABRI\r\n', '134.223806', '-1.334778 ', 16, 0, '-', 1, 2020, '-', '-', '2001-01-01', '-', 'Nonaktif', '-', NULL, NULL),
(38, 1, 'SODIQ', 'SODIQ SUPRAYITNO', 'SABRI\r\n\r\n', '134.192975', '-1.510892 ', 16, 0, '-', 1, 2013, 'SIU', '094/DU/466/DPMPTSP/XI/2019', '2019-10-17', 'DPM PTSP', 'Nonaktif', '-', NULL, NULL),
(39, 4, 'SRIKANDI', 'UCI SANUSI', 'RANSIKI\r\n', '134.170393', '-1.504897 ', 300, 0, '-', 6, 2016, 'iMB', '012.6/04/IMB/DPMPTSP/2021', '2021-03-20', 'DPM PTSP', 'Nonaktif', '-', NULL, NULL),
(40, 4, 'OTAWAR', 'ASMI', 'MAIBUKI\r\n', '134.217500', '-1.346333 ', 0, 0, '-', 0, 0000, '-', '-', '2001-01-01', '-', 'Nonaktif', '-', NULL, NULL),
(41, 1, 'DOPIZ', 'DOPIZ', 'MUARI\r\n', '134.218417', '-1.346111 ', 36, 0, '-', 0, 2021, '-', '-', '2001-01-01', '-', 'Nonaktif', '-', NULL, NULL),
(42, 1, 'JATI MOTOR', 'IMAM', 'SIDOMULYO\r\n', '134.217750', '-1.319750 ', 32, 0, '-', 0, 0000, 'SIU', '094/DU/339DPMPTSP/VII/2019', '2019-07-29', 'DPM PTSP', 'Nonaktif', '-', NULL, NULL),
(43, 4, 'PT. IRMA TIARA PUTRA', 'H. NURJAYA ', 'KAMPUNG HAMOR-DISTRIK RANSIKI\r\n', '134.119581', '-1.464019', 5, 0, 'Penambangan Batu  Kali dan Sirtu, Pembangunan Stone Crusher dan Asphalt Mixing Plant', 0, 0000, 'IZN LINGKUNGAN', '6 TAHUN 2017', '2017-03-20', 'BUPATI MANOKWARI SELATAN', 'Nonaktif', '-', NULL, NULL),
(44, 4, 'PENGINAPAN GRIYO ALIT', 'SUKIMAN', 'JL MERDEKA - SIDOMULYO ORANSBARI', '134.181611', '-1.306802', 1, 7, 'PENGINAPAN', 2, 2017, '-', '-', '2021-08-01', '-', 'Nonaktif', '-', NULL, NULL);

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
(1, 'sppl'),
(4, 'ukl-upl'),
(8, 'amdal');

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
  MODIFY `iddata_usaha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `jenis_usaha`
--
ALTER TABLE `jenis_usaha`
  MODIFY `idjenis_usaha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
