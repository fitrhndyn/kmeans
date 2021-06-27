-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 05:27 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengelompokan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `id_pengisian_kuesioner` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `hasil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `npm` varchar(12) DEFAULT NULL,
  `nama_mahasiswa` varchar(60) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `angkatan` int(11) DEFAULT NULL,
  `matakuliah` varchar(35) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `npm`, `nama_mahasiswa`, `kelas`, `angkatan`, `matakuliah`, `level`, `password`) VALUES
(20, '5520117056', 'Fitri Handayani', 'IF B', 2017, 'Sistem Pendukung Keputusan', '2', '7e6c93f55fb34394963217e87fce92fa'),
(21, '5520117062', 'Nabila Sakinah', 'IF B', 2017, 'Pemodelan dan Simulasi', '2', '7e6c93f55fb34394963217e87fce92fa'),
(22, '5520117057', 'Rinda', 'IF B', 2017, 'Data Mining', '2', '7e6c93f55fb34394963217e87fce92fa'),
(23, '5520117099', 'Pujangga', 'IF C', 2017, 'Basis Data', '2', '7e6c93f55fb34394963217e87fce92fa'),
(24, '5520117055', 'Reza Suparman', 'IF B', 2017, 'Data Mining', '2', '7e6c93f55fb34394963217e87fce92fa'),
(25, '5520117023', 'Maldini', 'IF B', 2017, 'Sistem Pendukung Keputusan', '2', '7e6c93f55fb34394963217e87fce92fa'),
(26, '5520117037', 'Hisyam', 'IF B', 2017, 'Data Mining', '2', '7e6c93f55fb34394963217e87fce92fa'),
(27, '5520117038', 'Tedi', 'IF B', 2017, 'Data Mining', '2', '7e6c93f55fb34394963217e87fce92fa'),
(28, '5520117049', 'Diaz', 'IF B', 2017, 'Data Mining', '2', '7e6c93f55fb34394963217e87fce92fa'),
(29, '5520117052', 'Teguh', 'IF B', 2017, 'Data Mining', '2', '7e6c93f55fb34394963217e87fce92fa'),
(30, '5520117058', 'Martina', 'IF B', 2017, 'Data Mining', '2', '7e6c93f55fb34394963217e87fce92fa'),
(31, '5520117061', 'Ratna', 'IF B', 2017, 'Data Mining', '2', '7e6c93f55fb34394963217e87fce92fa'),
(32, '5520118016', 'Tiara Tsaniya', 'IF A', 2018, 'Sistem Pendukung Keputusan', '2', '7e6c93f55fb34394963217e87fce92fa'),
(33, '5520118041', 'Nabila Amiratu', 'IF A', 2018, 'Sistem Pendukung Keputusan', '2', '7e6c93f55fb34394963217e87fce92fa'),
(34, '5520118032', 'Anggun', 'IF A', 2018, 'Sistem Pendukung Keputusan', '2', '7e6c93f55fb34394963217e87fce92fa'),
(35, '5520118013', 'Ujang Setiawan', 'IF A', 2018, 'Sistem Pendukung Keputusan', '2', '7e6c93f55fb34394963217e87fce92fa'),
(36, '5520118002', 'Haikal Lutfi', 'IF A', 2018, 'Basis Data', '2', '7e6c93f55fb34394963217e87fce92fa'),
(37, '5520118015', 'Raihan Mohamad', 'IF A', 2018, 'Basis Data', '2', '7e6c93f55fb34394963217e87fce92fa'),
(38, '5520118044', 'Nisa Fauziah', 'IF A', 2018, 'Sistem Pendukung Keputusan', '2', '7e6c93f55fb34394963217e87fce92fa'),
(39, '5520118005', 'M Ridwan', 'IF A', 2018, 'Sistem Pendukung Keputusan', '2', '7e6c93f55fb34394963217e87fce92fa'),
(40, '5520118014', 'Susi Sulistiawati', 'IF A', 2018, 'Sistem Pendukung Keputusan', '2', '7e6c93f55fb34394963217e87fce92fa');

-- --------------------------------------------------------

--
-- Table structure for table `pengisian_kuesioner`
--

CREATE TABLE `pengisian_kuesioner` (
  `id_pengisian_kuesioner` int(4) NOT NULL,
  `id_mahasiswa` int(11) DEFAULT NULL,
  `jumlahVisual` int(3) NOT NULL,
  `jumlahAuditorial` int(3) DEFAULT NULL,
  `jumlahKinestetik` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengisian_kuesioner`
--

INSERT INTO `pengisian_kuesioner` (`id_pengisian_kuesioner`, `id_mahasiswa`, `jumlahVisual`, `jumlahAuditorial`, `jumlahKinestetik`) VALUES
(10, 20, 24, 12, 24),
(11, 21, 12, 24, 12),
(12, 22, 17, 15, 17),
(13, 23, 15, 17, 15),
(14, 24, 15, 13, 13),
(15, 25, 13, 16, 18),
(16, 26, 17, 12, 20),
(17, 27, 11, 12, 13),
(18, 28, 14, 18, 10),
(19, 29, 15, 14, 12),
(20, 30, 13, 18, 14),
(21, 31, 12, 12, 17),
(22, 32, 15, 17, 15),
(23, 33, 15, 13, 13),
(24, 34, 13, 16, 18),
(25, 35, 17, 12, 20),
(26, 36, 11, 12, 13),
(27, 37, 14, 18, 10),
(28, 38, 15, 14, 12),
(29, 39, 13, 18, 14),
(30, 40, 12, 12, 7);

-- --------------------------------------------------------

--
-- Table structure for table `perhitungan`
--

CREATE TABLE `perhitungan` (
  `id_perhitungan` int(11) NOT NULL,
  `id_pengisian_kuesioner` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `hitungVisual` float NOT NULL,
  `hitungAuditorial` float NOT NULL,
  `hitungKinestetik` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nidn` varchar(12) DEFAULT NULL,
  `nama_profil` varchar(60) DEFAULT NULL,
  `matakuliah` varchar(35) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL COMMENT 'Laki-laki\r\nPerempuan',
  `email` varchar(60) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `nidn`, `nama_profil`, `matakuliah`, `jenis_kelamin`, `email`, `alamat`, `password`, `level`) VALUES
(13, '0003127201', 'Sri Widaningsih, ST., M.Kom', 'Data Mining', 'Perempuan', 'sriwidaningsih@gmail.com', 'Bandung', 'e10adc3949ba59abbe56e057f20f883e', '1'),
(17, '12345678910', 'Admin', 'Data Mining', 'Perempuan', 'fitrhndyn@gmail.com', 'Cianjur', 'e10adc3949ba59abbe56e057f20f883e', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_centroid`
--

CREATE TABLE `tmp_centroid` (
  `jumlahVisual` int(11) NOT NULL,
  `jumlahAuditorial` int(11) NOT NULL,
  `jumlahKinestetik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_cluster`
--

CREATE TABLE `tmp_cluster` (
  `cluster` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `pengisian_kuesioner`
--
ALTER TABLE `pengisian_kuesioner`
  ADD PRIMARY KEY (`id_pengisian_kuesioner`);

--
-- Indexes for table `perhitungan`
--
ALTER TABLE `perhitungan`
  ADD PRIMARY KEY (`id_perhitungan`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pengisian_kuesioner`
--
ALTER TABLE `pengisian_kuesioner`
  MODIFY `id_pengisian_kuesioner` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `perhitungan`
--
ALTER TABLE `perhitungan`
  MODIFY `id_perhitungan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
