-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 06:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujikom`
--

-- --------------------------------------------------------

--
-- Table structure for table `berobat`
--

CREATE TABLE `berobat` (
  `no_transaksi` varchar(5) NOT NULL,
  `pasienklinik_id` varchar(5) NOT NULL,
  `tanggal_berobat` date NOT NULL,
  `dokter_id` varchar(5) NOT NULL,
  `keluhan_pasien` varchar(50) NOT NULL,
  `biaya_adm` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berobat`
--

INSERT INTO `berobat` (`no_transaksi`, `pasienklinik_id`, `tanggal_berobat`, `dokter_id`, `keluhan_pasien`, `biaya_adm`) VALUES
('TR001', 'PS001', '2017-07-29', 'DR001', 'Sakit Gigi', '125.000'),
('TR002', 'PS002', '2017-08-15', 'DR002', 'Demam', '75.000'),
('TR003', 'PS003', '2017-08-19', 'DR003', 'Telinga', '90.000');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `dokter_id` varchar(5) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `poli_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`dokter_id`, `nama_dokter`, `poli_id`) VALUES
('DR001', 'Dr. Ratna', '1'),
('DR002', 'Dr. Rudy', '2'),
('DR003', 'Dr. Joko', '3');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `pasienklinik_id` varchar(5) NOT NULL,
  `nama_pasienklinik` varchar(50) NOT NULL,
  `tanggal_lahirpasien` date NOT NULL,
  `jenis_kelaminpasien` varchar(15) NOT NULL,
  `alamat_pasien` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`pasienklinik_id`, `nama_pasienklinik`, `tanggal_lahirpasien`, `jenis_kelaminpasien`, `alamat_pasien`) VALUES
('PS001', 'Barata Yuda', '1972-07-29', 'Laki-Laki', 'Tegal'),
('PS002', 'Indah Susanti', '2000-08-15', 'Perempuan', 'Tegal'),
('PS003', 'Kurniawan', '2007-08-19', 'Laki - Laki', 'Tegal');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `poli_id` varchar(5) NOT NULL,
  `nama_poli` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`poli_id`, `nama_poli`) VALUES
('1', 'Gigi'),
('2', 'Umum'),
('3', 'THT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berobat`
--
ALTER TABLE `berobat`
  ADD PRIMARY KEY (`no_transaksi`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`dokter_id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`pasienklinik_id`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`poli_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
