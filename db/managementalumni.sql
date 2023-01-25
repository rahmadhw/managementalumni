-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 12:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `managementalumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `idakun` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `namapengguna` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`idakun`, `username`, `password`, `namapengguna`, `level`) VALUES
(1, 'bambang', '$2y$10$AitKiBCaKjHkFzZTz535r.BHpuxxcL65.cWSkRofKvNWa4zMVYu9.', 'bambang sugiono', 'Alumni'),
(2, 'admin', 'admin', 'administrator', 'admin'),
(3, 'afdhal', '$2y$10$lWeSipSY/IPOngjwU4a/SuY1.rP8oi8FB6zOF1wvy15BbjpXA5.By', 'afdhal hayun', 'Alumni'),
(4, 'teguh', '$2y$10$.UEBYLe1j6C.aOJH08o7xeEahBcUK3.JDnAFXLJOpTCueNbL1dYri', 'Teguh indrawan', 'Alumni');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `idalumni` int(11) NOT NULL,
  `idakun` int(11) NOT NULL,
  `idstatus` int(11) NOT NULL,
  `namaalumni` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomortelepon` varchar(255) NOT NULL,
  `tahunmasuk` varchar(255) NOT NULL,
  `tahuntamat` varchar(255) NOT NULL,
  `hobi` varchar(255) NOT NULL,
  `programkeahlian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`idalumni`, `idakun`, `idstatus`, `namaalumni`, `jurusan`, `alamat`, `nomortelepon`, `tahunmasuk`, `tahuntamat`, `hobi`, `programkeahlian`) VALUES
(6, 1, 1, 'bambang sugiono', 'Teknik komputer jaringan', 'jl kenanga indah', '0879876374', '2016', '2019', 'photograpy', 'programmer'),
(7, 3, 2, 'afdhal hayyun', 'Teknik Multimedia', 'Jl Mawal Sejati', '08765734984', '2016', '2017', 'editing', 'video editing'),
(8, 4, 3, 'Teguh Indrawan', 'Teknik Elektronika', 'Jl Garuda Sakti', '08765765788', '2016', '2019', 'Nonton', 'Editing Video'),
(9, 0, 1, 'bambang sugiono', 'Teknik komputer jaringan', 'jl kenanga indah', '0879876374', '2015', '2019', 'photograpy', 'programmer'),
(10, 0, 1, 'bambang sugiono', 'Teknik komputer jaringan', 'jl kenanga indah', '0879876374', '2016', '2019', 'photograpy', 'programmer');

-- --------------------------------------------------------

--
-- Table structure for table `catatanpelamaran`
--

CREATE TABLE `catatanpelamaran` (
  `idcatatan` int(11) NOT NULL,
  `idloker` int(11) NOT NULL,
  `Namacatatan` varchar(255) NOT NULL,
  `keterangancatatan` varchar(255) NOT NULL,
  `syarat` text NOT NULL,
  `alamatemail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catatanpelamaran`
--

INSERT INTO `catatanpelamaran` (`idcatatan`, `idloker`, `Namacatatan`, `keterangancatatan`, `syarat`, `alamatemail`) VALUES
(1, 1, 'Catatan Pelamaran', 'Harap melamar dengan ketentuan syarat sebagai berikut', 'pas photo 3x4 (2lembar)\r\nIjazah\r\nNilai', 'loker@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `idgambar` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `idloker` int(11) NOT NULL,
  `namaperusaan` varchar(255) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `waktubataspelamaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`idloker`, `namaperusaan`, `posisi`, `keterangan`, `waktubataspelamaran`) VALUES
(1, 'PT Graha Cinta', 'Developer', 'Dibutuh keahlian yang dapat mengembagkan sistem informasi', '2023-04-20'),
(2, 'PT Graha Pena', 'Kameramen', 'dibutuhkan keahlian yang dapat mengoperasikan komputer dan kamera', '2023-07-17'),
(3, 'PT Toyota Citra', 'Mekanik', 'dibutuhkan keahlian untuk memperbaiki mesin motor dan mobil', '2023-02-14'),
(8, 'PT PESONA ABADI', 'Teknik sipil', 'dibutuhkan tenga ahli teknik sipil min ipk 3.5', '2023-01-26');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `idstatus` int(11) NOT NULL,
  `namastatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`idstatus`, `namastatus`) VALUES
(1, 'sudah bekerja'),
(2, 'Belum Bekerja'),
(3, 'Bekerja dan kuliah'),
(4, 'Kuliah');

-- --------------------------------------------------------

--
-- Table structure for table `tblijazah`
--

CREATE TABLE `tblijazah` (
  `idijazah` int(11) NOT NULL,
  `idalumni` int(11) NOT NULL,
  `statuspengambilan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblijazah`
--

INSERT INTO `tblijazah` (`idijazah`, `idalumni`, `statuspengambilan`) VALUES
(1, 6, 'Belum mengambil'),
(2, 7, 'Sudah mengambil'),
(4, 8, 'Belum mengambil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`idakun`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`idalumni`);

--
-- Indexes for table `catatanpelamaran`
--
ALTER TABLE `catatanpelamaran`
  ADD PRIMARY KEY (`idcatatan`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`idgambar`);

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`idloker`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idstatus`);

--
-- Indexes for table `tblijazah`
--
ALTER TABLE `tblijazah`
  ADD PRIMARY KEY (`idijazah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `idakun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `idalumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `catatanpelamaran`
--
ALTER TABLE `catatanpelamaran`
  MODIFY `idcatatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `idgambar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
  MODIFY `idloker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `idstatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblijazah`
--
ALTER TABLE `tblijazah`
  MODIFY `idijazah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
