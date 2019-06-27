-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2019 at 07:11 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `permata_empty`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggotas`
--

CREATE TABLE `anggotas` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `marga` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `keluarga` varchar(50) DEFAULT NULL,
  `telepon` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `domisili` varchar(255) DEFAULT NULL,
  `dengan_orangtua` bit(1) NOT NULL DEFAULT b'1',
  `pekerjaan` varchar(50) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `sekolah` varchar(50) DEFAULT NULL,
  `kantor` varchar(50) DEFAULT NULL,
  `hobi` varchar(200) DEFAULT NULL,
  `tahun_ngawan` varchar(5) DEFAULT NULL,
  `lokasi_ngawan` varchar(20) DEFAULT NULL,
  `sektor` varchar(20) DEFAULT NULL,
  `instagram` varchar(30) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `deleted` bit(1) NOT NULL DEFAULT b'0',
  `deleted_at` date DEFAULT NULL,
  `deleted_by` varchar(10) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `created_by` varchar(10) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `updated_by` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kas`
--

CREATE TABLE `kas` (
  `id` int(11) NOT NULL,
  `id_anggota` int(10) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `nominal` int(10) NOT NULL,
  `tahun` int(5) NOT NULL,
  `deleted` bit(1) DEFAULT b'0',
  `deleted_at` date DEFAULT NULL,
  `deleted_by` varchar(10) DEFAULT NULL,
  `created_at` date NOT NULL,
  `created_by` varchar(10) NOT NULL,
  `updated_at` date NOT NULL,
  `updated_by` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_keluarga`
--

CREATE TABLE `m_keluarga` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deleted` bit(1) NOT NULL DEFAULT b'0',
  `deleted_at` date DEFAULT NULL,
  `deleted_by` varchar(10) DEFAULT NULL,
  `created_at` date NOT NULL,
  `created_by` varchar(10) NOT NULL,
  `updated_at` date NOT NULL,
  `updated_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_parameter`
--

CREATE TABLE `m_parameter` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_role`
--

CREATE TABLE `m_role` (
  `id` int(2) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_keluarga`
--
ALTER TABLE `m_keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_parameter`
--
ALTER TABLE `m_parameter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_role`
--
ALTER TABLE `m_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;
--
-- AUTO_INCREMENT for table `kas`
--
ALTER TABLE `kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_keluarga`
--
ALTER TABLE `m_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_parameter`
--
ALTER TABLE `m_parameter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
