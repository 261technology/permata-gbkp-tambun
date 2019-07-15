-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 15, 2019 at 06:23 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.20-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `permata`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `deskripsi` varchar(2000) DEFAULT NULL,
  `mulai` datetime DEFAULT NULL,
  `selesai` datetime DEFAULT NULL,
  `tipe` varchar(100) NOT NULL,
  `skala` varchar(100) NOT NULL,
  `deleted` int(1) DEFAULT '0',
  `deleted_at` date DEFAULT NULL,
  `deleted_by` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(10) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id`, `nama`, `deskripsi`, `mulai`, `selesai`, `tipe`, `skala`, `deleted`, `deleted_at`, `deleted_by`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'test_acara', 'desktipsi', '2019-07-08 16:00:00', '2019-07-08 19:00:00', 'event', 'permata', 0, NULL, NULL, '2019-07-08 10:14:52', NULL, '2019-07-08 11:09:10', NULL),
(2, 'test_acara', 'desktipsi', '2019-07-08 16:00:00', '2019-07-08 19:00:00', 'rapat', 'runggun', 0, NULL, NULL, '2019-07-08 10:28:03', NULL, '2019-07-08 11:09:14', NULL),
(3, 'test 2', NULL, '2019-07-08 01:00:00', '2019-07-08 02:00:00', 'pa', 'runggun', 0, NULL, NULL, '2019-07-08 11:16:16', NULL, '2019-07-08 11:18:06', NULL),
(4, 'etesss', 'testtt', '2019-07-16 09:00:00', '2019-07-16 11:00:00', 'event', 'permata', 0, NULL, NULL, '2019-07-09 02:26:29', NULL, '2019-07-09 02:26:29', NULL),
(6, 'asdsa', 'asdasda', '2019-07-09 00:00:00', '2019-07-09 02:00:00', 'rapat', 'pengurus', 0, NULL, NULL, '2019-07-09 02:31:01', NULL, '2019-07-09 02:31:01', NULL),
(7, '123221', '12asdasd', '2019-07-09 02:30:00', '2019-07-09 03:30:00', 'event', 'permata', 0, NULL, NULL, '2019-07-09 02:31:51', NULL, '2019-07-09 02:31:51', NULL),
(8, 'wsasd', 'asdasda', '2019-07-09 03:30:00', '2019-07-09 04:30:00', 'event', 'permata', 0, NULL, NULL, '2019-07-09 02:34:04', NULL, '2019-07-09 02:34:04', NULL),
(9, 'asdadsads', 'sfsfs', '2019-07-09 05:00:00', '2019-07-09 09:00:00', 'event', 'permata', 0, NULL, NULL, '2019-07-09 02:34:43', NULL, '2019-07-09 09:47:15', NULL),
(10, 'add manual', '122121', '2019-07-23 08:00:00', '2019-08-03 12:00:00', 'pp', 'runggun', 0, NULL, NULL, '2019-07-09 02:46:11', NULL, '2019-07-09 02:46:11', NULL),
(11, 'zxzxz', 'zxzzx', '2019-07-09 01:00:00', '2019-07-09 02:30:00', 'event', 'permata', 0, NULL, NULL, '2019-07-09 03:31:14', NULL, '2019-07-09 03:31:14', NULL),
(12, '123', 'test', '2019-07-13 08:30:00', '2019-07-13 12:00:00', 'pendalaman_alkitab', 'permata', 0, NULL, NULL, '2019-07-11 09:25:29', NULL, '2019-07-11 09:26:29', NULL),
(13, 'PA pertama bulan juli', 'Test', '2019-07-20 13:00:00', '2019-07-25 16:00:00', 'pendalaman_alkitab', 'permata', 0, NULL, NULL, '2019-07-11 10:13:25', NULL, '2019-07-11 10:13:25', NULL),
(14, 'PA pertama bulan juli', 'Test', '2019-07-20 13:00:00', '2019-07-25 16:00:00', 'pendalaman_alkitab', 'permata', 0, NULL, NULL, '2019-07-11 10:15:07', NULL, '2019-07-11 10:15:07', NULL),
(15, 'PA pertama bulan juli', 'Test', '2019-07-20 13:00:00', '2019-07-25 16:00:00', 'pendalaman_alkitab', 'permata', 0, NULL, NULL, '2019-07-11 10:15:24', NULL, '2019-07-11 10:15:24', NULL),
(16, 'PA pertama bulan juli', 'Test', '2019-07-20 13:00:00', '2019-07-25 16:00:00', 'pendalaman_alkitab', 'permata', 0, NULL, NULL, '2019-07-11 10:16:23', NULL, '2019-07-11 10:16:23', NULL),
(17, '123456', 'testasas', '2019-07-13 10:30:00', '2019-07-13 12:00:00', 'pendalaman_alkitab', 'permata', 0, NULL, NULL, '2019-07-12 08:48:22', NULL, '2019-07-12 08:49:12', NULL),
(18, 'PA pertama bulan juli test peserta', 'Test', '2019-07-20 13:00:00', '2019-07-25 16:00:00', 'pendalaman_alkitab', 'permata', 0, NULL, NULL, '2019-07-12 11:06:44', NULL, '2019-07-12 11:06:44', NULL),
(19, 'aaaaa123', 'testxxx', '2019-07-13 09:31:00', '2019-07-13 12:23:00', 'pendalaman_alkitab', 'runggun', 0, NULL, NULL, '2019-07-12 11:15:03', NULL, '2019-07-15 08:45:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas_anggota`
--

CREATE TABLE `aktivitas_anggota` (
  `id` int(11) NOT NULL,
  `id_anggota` int(10) NOT NULL,
  `id_acara` int(10) NOT NULL,
  `peran` varchar(100) NOT NULL DEFAULT 'peserta'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktivitas_anggota`
--

INSERT INTO `aktivitas_anggota` (`id`, `id_anggota`, `id_acara`, `peran`) VALUES
(1, 3, 13, 'peserta'),
(2, 5, 13, 'peserta'),
(3, 4, 13, 'peserta'),
(4, 6, 13, 'peserta'),
(5, 1, 13, 'tuan_rumah'),
(6, 2, 13, 'tuan_rumah'),
(17, 6, 19, 'peserta'),
(18, 5, 19, 'peserta'),
(19, 4, 19, 'peserta'),
(20, 3, 19, 'tuan_rumah'),
(21, 1, 19, 'tuan_rumah');

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas_kantin`
--

CREATE TABLE `aktivitas_kantin` (
  `id` int(11) NOT NULL,
  `id_anggota` int(10) NOT NULL,
  `id_jadwal` int(10) NOT NULL,
  `peran` varchar(100) NOT NULL DEFAULT 'petugas'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktivitas_kantin`
--

INSERT INTO `aktivitas_kantin` (`id`, `id_anggota`, `id_jadwal`, `peran`) VALUES
(1, 3, 2, 'petugas'),
(2, 6, 2, 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `anggotas`
--

CREATE TABLE `anggotas` (
  `id` int(11) NOT NULL,
  `role` int(2) NOT NULL DEFAULT '3',
  `password` varchar(100) DEFAULT NULL,
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
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anggotas`
--

INSERT INTO `anggotas` (`id`, `role`, `password`, `nama`, `marga`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `keluarga`, `telepon`, `email`, `alamat`, `domisili`, `dengan_orangtua`, `pekerjaan`, `pendidikan`, `jurusan`, `sekolah`, `kantor`, `hobi`, `tahun_ngawan`, `lokasi_ngawan`, `sektor`, `instagram`, `status`, `deleted`, `deleted_at`, `deleted_by`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 3, '123456', 'Abel Asriel Bangun', '11', 'Bekasi', '2002-03-23', 'Laki-laki', NULL, '', 'abelasriel8@gmail.com', 'Perumahan Bumi Lestari Blok H1 / no. 11', 'Bekasi', b'1', NULL, '20', 'IPA', 'SMA/K Yadika 13', NULL, 'Travelling,gym,game', '2018', 'Tambun', '1', '@abelasriel dan @pandarider99', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(2, 3, '123456', 'Abel Ginting', '8', NULL, '1993-02-02', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(3, 3, '123456', 'Abigail Natania', NULL, NULL, '1970-01-01', 'Perempuan', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(4, 3, '123456', 'Aditya Caesar Babo', '8', 'Bekasi', '2002-05-24', 'Laki-laki', NULL, '81295888824', NULL, NULL, 'Bekasi', b'1', NULL, '22', 'Broadcast', 'STMIK Bina Sarana Informatika', NULL, NULL, '2011', 'Tambun', '2', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(5, 3, '123456', 'Aditya Purba', '9', 'Jakarta', '1990-05-20', 'Laki-laki', NULL, '85817705772', 'adityapurba9@gmail.com', 'Graha prima blok ic no. 367', 'Bekasi', b'1', '14', '22', 'Manajemen informatika', 'Universitas Jayabaya', 'Asuransi Artarindo', 'Motor', '2007', 'Tambun', '2', '@adityapurba', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(6, 3, '123456', 'Adna Moria Oseta', '11', 'Bekasi', '2001-01-13', 'Perempuan', NULL, '', 'adnamoria13@gmail.com', 'Graha Prima Blok ID No 57', 'Bekasi', b'1', NULL, '20', 'IPS', 'SMA Negeri 2 Tambun Utara', NULL, 'Renang', '2017', 'Tambun', '2', '@adnmriaax', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(7, 3, '123456', 'Afnisya Fitri br Tarigan', '10', NULL, '1970-01-01', 'Perempuan', NULL, '82298138516', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tambun', '2', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(8, 3, '123456', 'Afrianti br Tarigan', '10', NULL, '1970-01-01', 'Perempuan', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(9, 3, '123456', 'Agatha Lamsari Noviani', '10', 'Bekasi', '1997-01-10', 'Perempuan', NULL, '', 'kristianijoana18@gmail.com', 'Tridaya indah 1 blok C 23 no 6', 'Bekasi', b'1', NULL, '20', 'Accounting', 'Santa Maria Monica', NULL, 'Hangout', '2013', 'Tambun', NULL, '@agatha_lamsari', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(10, 3, '123456', 'Alexsander Octavianus S', '9', 'Kabanjahe', '1991-10-16', 'Laki-laki', NULL, '82165369553', 'alexsander42135@gmail.com', 'Perum villa bekasi indah 1', 'Bekasi', b'1', '15', '20', 'IPS', 'Rk 1', 'Photo copy group', 'Yg tidak merepotkan', '2008', 'Nanbelawan', '2', '@alexsander42135', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(11, 3, '123456', 'Anathasia Silpani', '9', 'Jakarta', '2002-03-22', 'Perempuan', NULL, '85211157788', 'anathasiasilpani22@gmail.com', 'Kartika wanasari Jl Delimaraya blok d1 no 8B', 'Bekasi', b'1', NULL, '20', 'IPA', NULL, NULL, 'Travelling', '2018', 'Tambun', '3', '@thasia_s', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(12, 3, '123456', 'Anderson Minamata Sembiring Pelawi', '12', NULL, '1970-01-01', 'Laki-laki', NULL, '81318974152', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(13, 3, '123456', 'Andre Brema Ginting', '8', 'Bekasi', '2002-08-06', 'Laki-laki', NULL, '', 'alvandre.ginting2110@gmail.com', 'Kartika wanasari blok b2 no 5', 'Bekasi', b'1', NULL, '20', 'IPA', 'SMA/K Pusaka Nusantara 2 Bekasi', NULL, 'Badminton /olahraga', '2018', 'Tambun', '6', '@lvandre ginting', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(14, 3, '123456', 'Andre Karo-karo', '9', NULL, '1970-01-01', NULL, NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(15, 3, '123456', 'Andrea Faldo Ginting', '8', NULL, '1970-01-01', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tambun', '3', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(16, 3, '123456', 'Andreas malem sebayang', '11', NULL, '2002-10-20', 'Laki-laki', NULL, '81317473743', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, 'SMA Ananda Bekasi', NULL, 'Basket', '2018', 'Tambun', '7', '@ndreasss_', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(17, 3, '123456', 'Andro Tuahta Noryadi Tarigan', '10', NULL, '1970-01-01', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(18, 3, '123456', 'Angel Rose Br .Tarigan', '10', NULL, '1970-01-01', 'Perempuan', NULL, '8983113170', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(19, 3, '123456', 'Anggi Honestyan Tarigan', '10', NULL, '1970-01-01', 'Laki-laki', NULL, '8980523089', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tambun', '7', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(20, 3, '123456', 'Aprilia Fahulisa Br Sembiring', '12', 'Bekasi', '1995-04-25', 'Perempuan', NULL, '82370383348', 'apriliafahulisa@gmail.com', 'Jl. Prapanca IV Blok A6/1 Taman Kebayoran', 'Bekasi', b'1', '14', '22', 'Kebidanan', 'Poltekkes Kemenkes Jakarta 3', 'Puskesmas', 'Berenang', '2012', 'Tambun', '5', '@apriliapelawi', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(21, 3, '123456', 'Ardiyanus Sembiring', '12', 'Tangkahan', '1997-01-13', 'Laki-laki', NULL, '82366359431', 'ardiyanus13@gmail.com', 'Jalan Raya Haji Bosih Selang Tengah', 'Cibitung', b'1', '15', '20', 'IPA', 'Yapim namorambe', NULL, 'Futsal', '2013', 'Tangkahan', '4', '@ardiyanus sembiring', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(22, 3, '123456', 'Ary Rifaldy Surbakti', '9', 'Jakarta', '1995-06-21', 'Laki-laki', NULL, '', 'aryrifaldysurbakti@gmail.com', 'Perum puri cendana C12 No.3', 'Bekasi', b'1', NULL, '22', 'Manajemen Perusahaan', 'Universitas Diponegoro', NULL, 'Badminton', '2012', 'Tambun', '1', '@a_ry21', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(23, 3, '123456', 'Asari Netania br Kaban', '9', 'Gurubenua', '2000-03-09', 'Perempuan', NULL, '81219583056', 'asarinetaniakaban@gmail.com', 'Graha prima baru blok s6 no 25', 'Bekasi', b'1', '14', '20', 'Administrasi Perkantoran', 'SMA/K Yadika 13', 'Pt digital commercial indonesia', 'Membaca', '2017', 'Tambun', '2', '@Asarikaban2', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(24, 3, '123456', 'Ashelca cristine pepayhosana', '11', 'Bekasi', '2001-07-18', 'Perempuan', NULL, '', 'ashelca180701@gmail.com', 'Graha melasti blok ed 3a no 19', 'Bekasi', b'1', NULL, '19', 'IPA', 'SMPN 5 Tambun Selatan', 'Tidak ada', 'Menyanyi/musik', '2018', 'Tambun', NULL, '@ashltne', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(25, 3, '123456', 'Asrat Srykandi Ovita Barus', '9', 'medan', '1990-10-23', 'Perempuan', NULL, '81230439221', 'asratsrykandiasrat@gmail.com', 'perumahan metland cibitung blok n10 no 9', 'bekasi', b'1', '14', '24', 'Farmasi', 'Universitas Airlangga', 'PT. KALBE GRUP', 'traveling, kuliner', '2017', 'Tambun', '4', '@asratsrykandi', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(26, 3, '123456', 'Bincha Armana', '12', 'Jakarta', '2019-01-06', 'Laki-laki', NULL, '', 'bangbin@gmail.com', 'Gramapuri A8/24', 'Bekasi', b'1', NULL, '20', 'IPA', NULL, '-', 'Main musik', '2018', 'Tambun', NULL, '@bangbinca', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(27, 3, '123456', 'Birka Septy Meliany', '12', 'Bekasi', '2000-09-16', 'Perempuan', NULL, '81384132184', 'septybirka@gmail.com', 'Kost Sinabung Jl. Perwira no 89', 'Bogor', b'1', NULL, '20', 'Ekonomi Sumberdaya dan Lingkungan', 'SMAN 2 Tambun Selatan', '-', 'Bernyanyi, menari', '2017', 'Tambun', '3', '@birkasepty_', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(28, 3, '123456', 'Bobby Ginting', '8', NULL, '1970-01-01', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(29, 3, '123456', 'Bryan Andrew Tarigan', '10', 'Jakarta', '1995-07-15', 'Laki-laki', NULL, '81281647182', 'bryanandrew686@gmail.com', 'Griya Asri 2 Blok H2 No 94', 'Bekasi', b'1', '14', '20', 'Otomotif', 'SMK 10 November', 'PT DNP', 'Futsal', '2013', 'Tambun', '7', '@bryanandrewtarigan', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(30, 3, '123456', 'Bryan Saputra Ginting', '8', 'Bekasi', '2000-02-16', 'Laki-laki', NULL, '85890880090', NULL, NULL, 'Bekasi', b'1', NULL, '20', 'IPA', NULL, NULL, NULL, NULL, 'Tambun', '1', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(31, 3, '123456', 'Carles Perangin angin', '11', 'Kabanjahe', '1970-01-01', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', '15', NULL, NULL, NULL, NULL, NULL, NULL, 'Nanbelawan', '1', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(32, 3, '123456', 'Cevin Ovris Sitepu', '9', 'Jakarta', '1997-07-19', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, '2015', 'Tambun', NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(33, 3, '123456', 'Chris Santa Surbakti', '9', 'Jakarta', '1998-08-23', 'Laki-laki', NULL, '895358000000', 'crissantasurbakti3@gmail.com', 'Perum Puri Cendana Blok C 12 No 3', 'Bekasi', b'1', NULL, '22', 'Kearsipan', 'SMAN 2 Tambun Selatan', 'PMK SV UGM 2017', 'Badminton', '2016', 'Tambun', '1', '@surbakti0898', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(34, 3, '123456', 'Christopher Evan Sembiring', '12', NULL, '1970-01-01', 'Laki-laki', NULL, '81383318125', NULL, NULL, 'Bandung', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tambun', '6', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(35, 3, '123456', 'Dandi Egi Satria Ginting', '8', NULL, '1970-01-01', 'Laki-laki', NULL, '82362532057', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(36, 3, '123456', 'Depana Kaban', '9', NULL, '2000-12-04', 'Laki-laki', NULL, '82162777848', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gurubenua', '7', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(37, 3, '123456', 'Desla Natalia br Ginting', '8', 'Bekasi', '1995-09-12', 'Perempuan', NULL, '82213825829', 'deslanataliaginting2@yahoo.co.id', 'Perumahan bumi lestari blok H 27 no 12', 'Bekasi', b'1', '14', '22', 'Keperawatan', 'Akper RS PGI Cikini', 'Rs siloam sentosa', 'Tidur', '2013', 'Tambun', '1', '@deslaginting', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(38, 3, '123456', 'Desryna Nathasya', '12', 'Jakarta', '1995-12-21', 'Perempuan', NULL, '', 'nathasyasembiring.dn@gmail.com', 'Perum. Taman Tridaya Indah Blok B3 No. 11 Jl. Raflesia Raya, RT.002 RW.09', 'Bekasi', b'1', '14', '24', 'Business Administration', 'SMAN 2 Tambun Selatan', 'PT XFERS Tech Indonesia', '-', '2012', 'Tambun', '6', '@dnthsys / @desnathasya', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(39, 3, '123456', 'Destriani br Sembiring', '12', 'Jakarta', '1994-12-30', 'Perempuan', NULL, '895320266744', 'destriani961@gmail.com', 'Villa bekasi indah 1', 'Bekasi', b'1', NULL, '24', 'Pendidikan kepelatihan olahraga', 'Universitas Negri Jakarta', NULL, 'Jalan jalan', '2009', 'Tambun', '2', '@destrianipelawi', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(40, 3, '123456', 'Diana Aprianti br Tarigan', '10', NULL, '1970-01-01', 'Perempuan', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(41, 3, '123456', 'Dicky Ramona Kaban', '9', NULL, '1970-01-01', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(42, 3, '123456', 'Divia Julia Carera br Ginting', '8', 'Jakarta', '1998-07-29', 'Perempuan', NULL, '', 'diviacarera@gmail.com', 'Satria Jaya Permai, Blok.A2 No.15', 'Bekasi', b'1', '14', '20', 'Administrasi Perkantoran', 'SMK Karya Guna 2 Bekasi', 'PT.SHINSUNG ELEKTRONIK INDONESIA', 'Makan, traveling', '2015', 'Tambun', '2', '@carera_ginting', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(43, 3, '123456', 'Duta Christian Tarigan', '10', 'Jakarta', '1997-06-20', 'Laki-laki', NULL, '', 'dutachristian99@gmail.com', 'Perumahan gramapuri tamanasari blok d2 no.9 rt 03/37 Cibitung, Bekasi', 'Bekasi', b'1', '13', '20', 'IPA', 'SMAN 2 Tambun Selatan', 'Polda', 'Sepak Bola', '2013', 'Tambun', '3', '@dutarigans_', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(44, 3, '123456', 'Edwina Anadia Agitha br Tarigan', '10', NULL, '1970-01-01', 'Perempuan', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(45, 3, '123456', 'Efesus Ginting', '8', NULL, '1970-01-01', 'Laki-laki', NULL, '81285738938', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(46, 3, '123456', 'Efraim Ryandi Tarigan', '10', 'Jakarta', '1999-02-17', 'Laki-laki', NULL, '87786570865', NULL, 'Perum. Bumi Sani Permai B7/21', 'Bekasi', b'1', NULL, '24', NULL, NULL, NULL, NULL, NULL, 'Tambun', '5', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(47, 3, '123456', 'Ega Adrian Surbakti', '9', 'Bekasi', '1988-08-03', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, '20', NULL, NULL, NULL, NULL, NULL, 'Tambun', '5', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(48, 3, '123456', 'Eka Junenty', '8', 'Medan', '1989-05-28', 'Perempuan', NULL, '', 'ekajunenty89@gmail.com', 'Perum. Tridaya Nuansa Indah Jl.Kelapa Gading 1 No. 10 Rt 006 Rw 010', 'Bekasi', b'1', '14', '22', 'Management Informatika', 'Bina Sarana Informatika', '-', 'Badminton', '2007', 'Tambun', '6', '@ekajunenty.ginting', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(49, 3, '123456', 'Eky Kurniawan Pinem', '11', 'Kabanjahe', '1998-05-15', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(50, 3, '123456', 'Eloponi Tarigan', '10', 'Kacaribu', '1970-01-01', 'Laki-laki', NULL, '', NULL, NULL, 'Cililitan', b'1', NULL, '20', 'Otomotif', 'SMA/K Yadika 13', NULL, NULL, '2012', 'Gurubenua', '7', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(51, 3, '123456', 'Elsa br Tarigan', '10', 'Bekasi', '2000-03-02', 'Perempuan', NULL, '82121532865', 'elsaxxx14@gmail.com', 'Griya Asri 2 Blok H2 No. 82 Tambun Selatan kab. Bekasi', 'Kab bekasi', b'1', NULL, '20', 'IPA', 'SMAN 2 Tambun Selatan', NULL, 'Bulu tangkis', '2016', 'Tambun', '7', '@elsatrgn', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(52, 3, '123456', 'Elsa Kristin Sebayang', '11', 'Bekasi', '1970-01-01', 'Perempuan', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(53, 3, '123456', 'Elvira Erlikasna', '10', 'Bekasi', '2003-04-15', 'Perempuan', NULL, '89601967461', 'elfira002@gmail.com', NULL, 'Bekasi', b'1', NULL, '20', 'IPA', 'SMA/K Yadika 13', NULL, 'Bernyanyi', '2018', 'Tambun', '7', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(54, 3, '123456', 'Elys Theresia Br. Tarigan', '10', 'Bekasi', '1996-07-05', 'Perempuan', NULL, '', NULL, NULL, 'Tambun', b'1', NULL, '22', 'Manajemen Peternakan', NULL, NULL, NULL, '2012', 'Tambun', '5', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(55, 3, '123456', 'Eme Pepayosha Gurusinga', '9', 'Cibitung', '1996-09-18', 'Perempuan', NULL, 'Eme Pepayosha', 'emeocha96@gmail.com', 'Perumahan Bumi Lestari Jl Perkutut Raya I Blok H 39 No 1', 'Kabupaten Bekasi', b'1', '14', '24', 'Ilmu Komunikasi', 'Telkom University', 'FAZZFINANCIAL', 'Tidur', '2012', 'Tambun', '1', '@emepepayosha', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(56, 3, '123456', 'Emirela Refita Meliala', '12', 'Bekasi', '1998-06-29', 'Perempuan', NULL, '', 'emirelarefita@gmail.com', 'Perum sku kompas blok b14 no 14 jl p bali', 'Kabupaten Bekasi', b'1', NULL, '20', 'IPS', 'SMAN 1Tambun Selatan', NULL, 'Nonton film', '2015', 'Tambun', '7', '-', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(57, 3, '123456', 'Emisa Viola', '9', 'Jakarta', '2001-04-03', 'Perempuan', NULL, '', 'emisaviola@gmail.com', 'Perumahan Bumi Lestari Blok H39 No.1', 'Kabupaten Bekasi', b'1', NULL, '20', 'IPS', 'SMAN 3 Tambun Selatan', NULL, '-', '2017', 'Tambun', '1', '@emvio', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(58, 3, '123456', 'Enda Amelia Maha Gurusinga', '9', 'Banjarbaru', '1999-02-18', 'Perempuan', NULL, '88210886164', 'endaame1870@gmail.com', 'Jl. Pendidikan no.122 desa mangunjaya', 'Bekasi', b'1', NULL, '20', 'Ilmu Komunikasi', 'SMAN 3 Tambun Selatan', NULL, 'Baca Buku', '2015', 'Tambun', '2', '@end.am', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(59, 3, '123456', 'Enina', '12', 'Jakarta', '1988-07-04', 'Perempuan', NULL, '8999219731', 'nasembiring@yahoo.com', 'Permata regensi jalan durian 2 blok h 1 no 7', 'Bekasi', b'1', '14', '22', 'Manajemen Informatika', 'Amik Mpu Tantular', 'Pt Ichikoh Indonesia', 'Musik, baca', '2005', 'Cililitan', '7', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(60, 3, '123456', 'Eninta br Sembiring', '12', 'Jakarta', '1988-07-04', 'Perempuan', NULL, '82154000873', NULL, 'Permata regensi jalan durian 2 blok h 1 no 7', 'Bekasi', b'1', '14', '22', 'Perhotelan', NULL, NULL, NULL, '2005', 'Cililitan', '7', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(61, 3, '123456', 'Esri Bastanta Sinurat', '11', 'Jakarta', '1996-05-20', 'Laki-laki', NULL, '', 'esribastanta7@gmail.con', 'Perum. Graha Prima Blok ID No.57 . Rt 04 Rw 09 , Kelurahan Satria Jaya , Kecamatan Tambun Utara', 'Tambun Utara , Kabupaten Bekasi', b'1', NULL, '20', 'IPS', 'SMA Santa Mari Monica', 'Belum Bekerja', 'Olahraga (Badminton dan Futsal)', '2013', 'Tambun', '2', '@esribastanta7', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(62, 3, '123456', 'Evandi Nata Gurusinga', '9', 'Bekasi', '1998-09-23', 'Laki-laki', NULL, '85692998640', NULL, NULL, 'Kalimantan', b'1', NULL, NULL, NULL, NULL, NULL, NULL, '2015', 'Tambun', '1', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(63, 3, '123456', 'Evans Berpin Brahmana', '12', 'Bekasi', '2000-10-29', 'Laki-laki', NULL, '81287764599', 'evansberpin@gmail.com', 'Perum Graha Melasti fb 9 no 23', 'Kabupaten Bekasi', b'1', NULL, '20', 'IPS', 'SMAN 2 Tambun Selatan', NULL, 'Debat,bermain futsal', '2017', 'Tambun', '7', '@e7brahmana_', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(64, 3, '123456', 'Fanso Giresemi Ginting', '8', 'Jakarta', '1992-05-23', 'Laki-laki', NULL, '', 'fansoginting@gmail.com', 'Tridaya Indah III', 'Bekasi', b'1', '14', '20', 'Otomotif', 'SMK Karya Guna 2 Bekasi', 'PT. DNPI', 'Futsal, begadang n ngopi', '2008', 'Tambun', '7', '@fansoginting', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(65, 3, '123456', 'Febi Handayani Surbakti', '9', 'Diski', '1996-08-20', 'Perempuan', NULL, '', 'febyhs40@yahoo.com', 'Jl. Sei Mencirim Dusun 17 Desa Sempat Arih', 'Deli Serdang', b'1', '14', '22', 'Kebidanan', 'Akbid Mitra Husada Medan', 'Klinik Tritama', 'Berenang', '2015', 'Sempat Arih', '2', '@febibakti20', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(66, 3, '123456', 'Febri Shinta Br Ginting', '8', 'Jakarta', '1994-02-19', 'Perempuan', NULL, '', NULL, 'Perum Tridaya Indah III', 'Bekasi', b'1', '15', '20', 'IPS', 'SMAN 4 Tambun Selatan', 'Rumah', 'Bantu mamak', '2012', 'Tambun', NULL, '@fansoginting', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(67, 3, '123456', 'Febrin Oceanta', '10', 'Jakarta', '1996-02-04', 'Laki-laki', NULL, '', 'oceanofgame1996@gmail.com', 'Perum.griya asri 1 blok c4 no 27', 'Bekasi', b'1', NULL, '22', 'Teknik', 'Akademi Maritim Djadajat', NULL, 'Melakukan hal yang mendadak', '2012', 'Tambun', NULL, '@monsieurocean', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(68, 3, '123456', 'Fernandez Pratama', '11', 'Kabanjahe', '1997-09-15', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', '14', '20', 'Otomotif', NULL, NULL, NULL, NULL, 'Selakar', '5', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(69, 3, '123456', 'Fernando Adisyah Putra Tarigan', '10', 'jakatra', '1993-02-17', 'Laki-laki', NULL, '81285732277', 'nandoadisyah@gmail.com', 'btp jln gatot kaca 1 blok f 1 no 1', 'Bekasi', b'1', NULL, '24', 'Olahraga', 'Universitas Islam 45', NULL, 'skateboard', '2010', 'Tambun', '5', '@nando_adisyah', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(70, 3, '123456', 'Fran Osenta Sinulingga', '9', 'Bekasi', '1998-03-19', 'Laki-laki', NULL, '81324072470', 'franosentasinulingga2@gmail.com', 'Perum. Tridaya Indah 1 Blok C22 No 25 Tambun Selatan', 'Bekasi', b'1', '14', '20', 'Otomotif', 'SMK Bina Karya Mandiri 2', 'Pt. Amarcon Jaya Utama', 'Tidak Jelas', '2017', 'Tambun', '6', '@fran sinulingga', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(71, 3, '123456', 'Franciuz Ginting', '8', 'Bekasi', '1993-12-26', 'Laki-laki', NULL, '', NULL, NULL, 'Jakarta', b'1', NULL, '24', 'Hukum', NULL, NULL, NULL, '2010', 'Tambun', '3', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(72, 3, '123456', 'Frederico Haga Alloyson Tarigan', '10', 'Bekasi', '1998-08-05', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, '24', NULL, NULL, NULL, NULL, '2014', 'Tambun', '6', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(73, 3, '123456', 'Frederik Sembiring', '12', NULL, '1970-01-01', NULL, NULL, '', NULL, NULL, NULL, b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(74, 3, '123456', 'Gabriella Bangun', '11', 'Bekasi', '2000-04-24', 'Perempuan', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, '20', 'IPS', NULL, NULL, NULL, NULL, NULL, '7', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(75, 3, '123456', 'Gael Hekafesus Tarigan', '10', NULL, '1970-01-01', 'Laki-laki', NULL, '', NULL, NULL, NULL, b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(76, 3, '123456', 'Giovanni bangun', '11', 'Jakarta', '1996-04-01', 'Laki-laki', NULL, '89639153092', 'gio40191@gmail.com', 'Regensi 1 blok j9 no.12 RT.03/RW.06', 'Bekasi', b'1', '14', '24', 'Broadcasting', 'Universitas Mercu Buana', 'PT barewa tekno gemilang', 'Fotografi & videografi', '2012', 'Tambun', '7', '@giovaniii06', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(77, 3, '123456', 'Gisela Milenie Erjorena', '9', 'Bekasi', '2000-01-25', 'Perempuan', NULL, '81283542836', 'giselamileni0@gmail.com', 'Villa bekasi indah 1 blok b 15 no 2', 'Bandung', b'1', NULL, '20', 'Teknik Sipil', 'SMAN 7 Tambun Selatan', NULL, 'Baca novel. Nonton film.', '2017', 'Tambun', '1', '@giselaleni', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(78, 3, '123456', 'Grace ivana michaela', '12', 'Jakarta', '2002-05-07', 'Perempuan', NULL, '89506843915', 'graceimicel@gmail.com', 'Regensi 2 HH5/3', 'Bekasi', b'1', NULL, '20', 'IPA', 'SMAN 1 Cibitung', NULL, 'Travelling', '2018', 'Tambun', '3', '@grzmiscs', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(79, 3, '123456', 'Gracia Medyate Sinulingga', '9', 'bekasi', '2002-09-23', 'Perempuan', NULL, '', 'medy.gracialingga@gmail.com', 'perumahan telaga harapan blok g2 no. 10', 'Bekasi', b'1', NULL, '20', NULL, 'SMAN 1 Cikarang Barat', NULL, 'bernyanyi dan traveling', '2018', 'Tambun', NULL, '@graciamedh', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(80, 3, '123456', 'Gresy Bebi Ananda', NULL, NULL, '1970-01-01', 'Perempuan', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(81, 3, '123456', 'Haga Felicia', '9', 'Jakarta', '1998-06-07', 'Perempuan', NULL, '', 'feliciahafel@gmail.com', 'Graha prima jl mendut v blok ib no 55', 'Bekasi', b'1', NULL, '20', 'Manajemen', 'SMA Santa Maria Monica', NULL, 'dengar musik', '2014', 'Tambun', '2', '@hgflca', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(82, 3, '$2y$10$AFtGh3OG4zVCAZ0H.mfgfuPi6hy3/yRhyppCmAQ//dWm7pMdXQPiG', 'Harisa Ginting', '8', 'Gurubenua', '1993-11-09', 'Laki-laki', NULL, '', 'harisaginting@gmail.com', 'Graha Prima Baru Blok S6.No.25', 'Bekasi', b'1', '14', '22', 'Manajemen Informatika', 'Universitas Gunadarma', NULL, NULL, '2010', 'Tambun', '2', '@harisaginting', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 06:45:02', NULL),
(83, 3, '123456', 'Hendi Paska Purba', '9', 'Jakarta', '1999-03-31', 'Laki-laki', NULL, '', 'hendipaskapurba@gmail.com', 'Tridaya Indah 4 Blok C 20 No.8', 'Bekasi', b'1', NULL, '20', 'IPA', 'SMA NEGERI 3 TAMBUN SELATAN', NULL, 'Sepak Bola,Badminton', '8.1e6', 'Tambun', '6', '@hendipaska', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(84, 3, '123456', 'Hezkia Sembiring', '12', 'Bekasi', '1995-10-18', 'Laki-laki', NULL, '', 'hezkia18@gmail.com', 'Villa bekasi indah 1 b1 no 18 tambun selatan', 'Bekasi', b'1', '14', '24', 'Sistem informasi', 'Universitas Gunadarma', NULL, 'Berenang', '2012', 'Tambun', '2', '@hezkiasembiring', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(85, 3, '123456', 'Immanuelta Lopiga Sebayang', '11', NULL, '1970-01-01', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(86, 3, '123456', 'Irena Saragih', '8', NULL, '1970-01-01', 'Perempuan', NULL, '811931909', NULL, NULL, 'Jakarta', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tambun', '1', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(87, 3, '123456', 'Jefri Tarigan', '10', 'Kabanjahe', '1996-04-06', 'Laki-laki', NULL, '', 'jefritarsilz@gmail.com', 'Vila Bekasi Indah 1 Blok C', 'Bekasi', b'1', '15', '20', 'Otomotif', 'SMKN 1 Merdeka Berastagi', 'PERMATA', 'SPORT,CINEMAX,MUSIC,READ', '2013', 'Berastagi', '3', '@jefritarigan.s', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(88, 3, '123456', 'Jhon Amor Agustin Barus', '9', NULL, '1970-01-01', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(89, 3, '123456', 'Joli Kardi Karo-karo', '9', NULL, '1970-01-01', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(90, 3, '123456', 'Joy Michael Sembiring Meliala', '12', 'Jakarta', '1994-05-04', 'Laki-laki', NULL, '', 'joymichael920@gmail.com', 'Perumahan SKU kompas, jl. pulau bali blok B14/14, tambun selatan, bekasi.', 'Bekasi', b'1', '14', '24', 'Manajemen', 'Universitas Gunadarma', 'PT Shopee Indonesia', 'Bersantai', '2012', 'Tambun', '7', '@joy_michael04', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(91, 3, '123456', 'Julilois br Targian', '10', NULL, '1970-01-01', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(92, 3, '123456', 'Julius Yeskiel Sembiring', '12', NULL, '1970-01-01', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(93, 3, '123456', 'Junita br Brahmana', '12', NULL, '1970-01-01', 'Perempuan', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(94, 3, '123456', 'Karina Rehulina Tarigan', '10', 'Jakarta', '1993-09-19', 'Perempuan', NULL, '8128289928', 'karinatarigan93.krt@gmail.com', 'Graha prima blok ic no.238', 'Bekasi', b'1', '14', '24', 'Manajemen Bisnis Industri', 'STMI Kemenprin', 'PT. Talisman Insurance Broker', 'Nonton film', '2008', 'Tambun', '2', '@Karintarigan', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(95, 3, '123456', 'Kartika Monalisa Br. Sembiring', '12', NULL, '1970-01-01', 'Perempuan', NULL, '81218626238', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(96, 3, '123456', 'Kornesia Yelma', '8', NULL, '1970-01-01', 'Perempuan', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(97, 3, '123456', 'Kristo Fernanda Ginting', '8', 'Jakarta', '1998-03-11', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, '2014', 'Tambun', '1', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(98, 3, '123456', 'Launa Deo Anggara', '9', 'Bekasi', '2019-06-19', 'Laki-laki', NULL, '82211364979', 'deolauna@yahoo.com', 'Graha Prima', 'Bekasi', b'1', NULL, '20', 'IPS', 'SMA/K Yadika 13', NULL, 'NGABISIN UANG', '2015', 'Tambun', '2', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(99, 3, '123456', 'Leo Pranata Tarigan', '10', 'Jakarta', '1991-07-26', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', '15', '24', 'Hukum', NULL, NULL, NULL, NULL, 'Pondol Gede', '7', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(100, 3, '123456', 'Lhizet Anastasya Febyola Br. Sianipar', NULL, 'Jakarta', '2000-05-14', 'Perempuan', NULL, '89614743291', NULL, NULL, 'Bekasi', b'1', NULL, '22', 'Keperawatan', 'Akper RS PGI Cikini', NULL, NULL, NULL, 'Tambun', '1', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(101, 3, '123456', 'Lili Martiani', '12', 'kabanjahe', '1995-04-12', 'Perempuan', NULL, '', 'dedilili886@yahoo.co.id', 'Jl teratai 3 c blok d 21 no 21', 'Bekasi', b'1', '14', '22', 'Kebidanan', 'Arta Kabanjahe', 'rs karya medika 2', 'Menghabiskan uang', '2012', 'Tambun', '3', '@lili_martiani', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(102, 3, '123456', 'Linia Br Sebayang', '11', 'Jakarta', '1996-07-08', 'Perempuan', NULL, '82260272931', 'liniasebayang@gmail.com', 'Griya Asri 2, Blok K 1 No 4', 'Bekasi', b'1', '14', '24', 'Broadcasting', 'Universitas Persada Indonesia Y.A.I', NULL, 'Bulutangkis', '2013', 'Tambun', '7', '@liniasebayang', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(103, 3, '123456', 'Litta Maranata', '9', 'Bekasi', '1991-05-01', 'Perempuan', NULL, '85694230555', 'tha.maranata91@gmail.com', 'Perumahan papan mas blok g 15 no.1 rt/rw 006/011', 'Bekasi', b'1', '14', '24', 'Keperawatan', 'Stikes Pertamedika', 'RS.Premier Bintaro', 'Nonton,traveling', '2017', 'Tambun', '5', '@tha_maranatha91', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(104, 3, '123456', 'Louis Lando Basana', '10', 'Jakarta', '1996-05-03', 'Laki-laki', NULL, '', 'louis_screamoholic@rocketmail.com', 'Graha Prima Blok IC no 238', 'Bekasi', b'1', '13', '20', 'IPS', 'Santa Maria Monica', 'Kepo', 'Kepo', '2014', 'Tambun', '2', '@gausahkepo', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(105, 3, '123456', 'Maretta Eiodia br ginting', '8', 'Berastagi', '2019-03-15', 'Perempuan', NULL, '‭‭0 812 82466965‬‬', 'marettaeiodia@icloud.com', 'Pondok tanah mas jl.teratai 3b blokd21 no.14', 'Bekasi', b'1', NULL, '20', 'IPA', 'SMA Jayasuti Abadi', NULL, 'Travelling', '2018', 'Tambun', '3', '@marettoyy', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(106, 3, '123456', 'Margantina Br. Tarigan', '10', 'Buluhawar', '1993-08-14', 'Perempuan', NULL, '', NULL, NULL, 'Jakarta', b'1', NULL, '24', 'Teknik Informatika', NULL, NULL, NULL, NULL, 'Buluhawar', NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(107, 3, '123456', 'Marsel', '12', 'Jakarta', '1999-11-22', 'Laki-laki', NULL, '812-8397-208', 'marsel.jr88@gmail.com', 'Perum. Gramapuri Tamansari blok. E3/8', 'Bekasi', b'1', NULL, '20', 'Olahraga', 'SMA Kristen Indonesia', '-', '*Edit Video **Bermain Basket', '2017', 'Tambun', '3', '-', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(108, 3, '123456', 'Mayang Angelina', '9', 'Bekasi', '2019-01-25', 'Perempuan', NULL, '', 'mayanglinaa@gmail.com', 'Jalan Batara Indra No.32-33', 'Bekasi', b'1', NULL, '20', 'Hubungan Internasional', 'SMAN 3 Tambun Selatan', '-', 'Bernyanyi', '2016', 'Tambun', NULL, '@mayangalina', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(109, 3, '123456', 'Meby Yosephani Bellaisa Br.Sembiring', '12', 'Binjai', '2001-01-04', 'Perempuan', NULL, '895370905687', 'mebybella@gmail.com', 'Griya Asri2 blokC2 no49', 'Bekasi', b'1', NULL, '20', 'IPS', 'SMAN 4 Tambun Selatan', NULL, 'Berenang, main gitar', '2017', 'Tambun', '7', '@meby04_', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(110, 3, '123456', 'Merim Sumasuwari', '9', 'Bekasi', '1994-02-09', 'Perempuan', NULL, '82111755584', '1994merimsumasiwari@gmail.com', 'Graha prima blok ic no 367 jln gn lawu 2', 'Bekasi', b'1', '14', '24', 'Akuntansi', 'Atma jaya', 'Prospect motor', 'Baca', '2007', 'Tambun', '2', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(111, 3, '123456', 'Mikha Frinca Emeninta', '10', 'Jakarta', '1997-05-19', 'Perempuan', NULL, '', 'mikhatarigan28@gmail.com', 'Perum. Griya Asri 2 Blok E2/84 RT. 002 RW.027', 'Bekasi', b'1', NULL, '24', 'Bimbingan dan Konseling', 'Universitas Sebelas Maret', NULL, 'Baca, Mendengar Musik, Bernyanyi', '2013', 'Tambun', '7', '@mikhafrinca', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(112, 3, '123456', 'Mondan Nathanael Tarigan', '10', NULL, '1970-01-01', 'Laki-laki', NULL, '85217965962', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tambun', '7', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(113, 3, '123456', 'Nella aginta pinem', '11', 'Bekasi', '1996-09-09', 'Perempuan', NULL, '', 'Nellaaginta@gmail.com', 'Perum griya yasa blok c 3 no 5-6', 'Bekasi', b'1', '14', '22', 'Teknik industri', 'Politeknik Manufaktur ASTRA', 'Kompas gramedia', 'Nyanyi', '2011', 'Tambun', '7', '@nellapinem', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(114, 3, '123456', 'Netty Joanna Vedora', '10', 'Jakarta', '1995-02-11', 'Perempuan', NULL, '', 'joannavedora@gmail.com', 'Griya Asri 2 blok f6 No. 35. RT 002 RW 025', 'Bekasi', b'1', '14', '24', 'Akuntansi', 'Universitas Gunadarma', 'PT. INDORENT', 'Berenang', '2012', 'Tambun', '7', '@yoan_tarigan', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(115, 3, '123456', 'Ninsa Natalina Pinem', '11', NULL, '1970-01-01', 'Perempuan', NULL, '81219893550', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tambun', '7', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(116, 3, '123456', 'Novelia Sinalsalisa Br Sebayang', '11', 'Medan', '1998-12-11', 'Perempuan', NULL, '', 'sbrsnovelia@gmail.com', 'Tridaya Indah Estate 1 blok C3 no.1', 'Bekasi', b'1', NULL, '20', 'IPA', 'SMAN 2 Tambun selatan', '-', 'Jalan-jalan', '2016', 'Tambun', NULL, '@noveliasbrs', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(117, 3, '123456', 'Novi Tri Debora br Kacaribu', '9', 'Bekasi', '1999-11-03', 'Perempuan', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, '20', 'IPA', NULL, NULL, NULL, '2015', NULL, '7', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(118, 3, '123456', 'Noviantri Emia', '8', 'Bekasi', '1999-11-26', 'Perempuan', NULL, '85800212761', 'emianoviantry@gmail.com', 'Perumahan Taman Wanasari Indah \n Blok F1 nomor 4', 'Bekasi', b'1', NULL, '20', 'Teknik industri', 'SMA Negeri 1 Cibitung', 'Institut Teknologi Sumatera', 'Memasak', '2016', 'Tambun', '4', '@emianov', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(119, 3, '123456', 'Novita Natalia', '8', 'Medan', '2000-11-24', 'Perempuan', NULL, '81289428499', 'novitaginting5@gmail.com', 'Perumahan telaga harapan blok i6 no 6 Cikarang barat', 'Bekasi', b'1', NULL, '20', 'IPA', 'SMAN 1 Cikarang Barat', NULL, 'Dengerin musik', '2018', 'Tambun', '4', '@novitanatalia5', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(120, 3, '123456', 'Octa Brema Ginting', '8', NULL, '1970-01-01', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(121, 3, '123456', 'Octanisesa Br Tarigan', '10', 'Bekasi', '2001-10-26', 'Perempuan', NULL, '', 'sesatarigan@gmail.com', 'Bekasi Griya Asri 2 Blok E2 No.84 RT.02 RW.27', 'Bekasi', b'1', NULL, '19', 'IPS', 'SMP NEGERI 5 TAMBUN SELATAN', NULL, 'Bernyanyi dan bermain musik', '2018', 'Tambun', NULL, '@octanisesa', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(122, 3, '123456', 'Oky Yusura Ginting', '8', NULL, '1970-01-01', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(123, 3, '123456', 'Oscar Diyanta Ketaren', '9', 'Bekasi', '1997-11-07', 'Laki-laki', NULL, '', NULL, NULL, 'Bandung', b'1', NULL, '24', 'Hukum', NULL, NULL, NULL, '2013', 'Tambun', '5', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(124, 3, '123456', 'Pascal Markus Sembiring brahmana', '12', 'Jakarta', '1997-03-21', 'Laki-laki', NULL, '81398000550', 'pascalbrahmana@gmail.com', 'Perumahan unggul graha permai', 'Bekasi', b'1', NULL, '24', 'Hukum Bisnis Investasi', 'Universitas Kristen Maranatha', 'Dirjen KI kemenkumham', '-', '2013', 'Tambun', '6', '-', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(125, 3, '123456', 'Paulus Printista Ginting', '8', 'Jakarta', '1996-10-26', 'Laki-laki', NULL, '', NULL, NULL, 'Magelang', b'1', NULL, '24', 'Konseling', NULL, NULL, NULL, '2014', NULL, '3', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(126, 3, '123456', 'Pranata Meliala', '12', 'Jakarta', '1991-04-16', 'Laki-laki', NULL, '', 'pranatameliala@yahoo.co.id', 'Papanmas blok G 33 no.11', 'Bekasi', b'1', '15', '22', 'Manajemen', 'Gunadarma', NULL, 'Bikin puisi', '2007', 'GKO', '5', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(127, 3, '123456', 'Rasita Christy', '8', 'jakarta', '1993-01-18', 'Perempuan', NULL, '89686762546', 'rasitamunte@yahoo.com', 'Perum pondok tanah mas jl cempaka 2 blok d 15 no 1', 'Bekasi', b'1', '14', '22', 'Manajemen Informatika', 'Bina Sarana Informatika', 'Kantor GBKP Jakarta Pusat', 'nyanyi', '2011', 'Tambun', '3', '@rasitamunte', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(128, 3, '123456', 'Rehmalem br sembiring', '12', 'Berastagi', '2019-11-29', 'Perempuan', NULL, '', 'rehmalemsembirng123@gmail.com', 'Perumahan kartikawanasari', 'Bekasi', b'1', '14', '20', 'IPS', 'Swa Swasta Masehi Berastagi', 'Alfamidi', 'Membaca', '2016', 'Sugihen', NULL, '@rehmalem29', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(129, 3, '123456', 'Reinando Sihombing', NULL, 'Bekasi', '1997-07-05', 'Laki-laki', NULL, '81261079096', NULL, NULL, 'Bekasi', b'1', NULL, '20', 'Teknologi Komputer & Jaringan', NULL, NULL, NULL, '2013', NULL, '2', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(130, 3, '123456', 'Reky Aditianta Ginting', '8', 'Bekasi', '2000-07-11', 'Laki-laki', NULL, '82211375270', NULL, NULL, 'Bekasi', b'1', NULL, '20', 'IPS', NULL, NULL, NULL, '2016', NULL, '4', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(131, 3, '123456', 'Ria Valentina Br. Tarigan', '10', 'Bekasi', '1999-02-14', 'Perempuan', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, '20', NULL, NULL, NULL, NULL, '2014', NULL, '5', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(132, 3, '123456', 'Rica Arapenta', '9', 'jakarta', '2002-06-10', 'Perempuan', NULL, '', 'ricara0610@gmail.com', 'Jl pendidikan no 122 rt 05 rw 05 tambun selatan', 'Bekasi', b'1', NULL, '20', 'IPA', 'SMAN 7 Tambun Selatan', NULL, 'Baca novel', '2018', 'Tambun', '2', '@rica_arapenta', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(133, 3, '123456', 'Rio Agres Tarigan', '10', 'Bekasi', '2002-05-16', 'Laki-laki', NULL, '', 'riogans2134@gmail.com', 'Perum. Pesona gading L2 no 22', 'Bekasi', b'1', NULL, '20', 'Mesin', 'SMK 11 Maret', NULL, 'Olahraga', '2018', 'Tambun', NULL, '@Riows_28', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(134, 3, '123456', 'Robet Tanta', '8', 'Kabanjahe', '1992-11-30', 'Laki-laki', NULL, '0878-2059-4599', 'robetginting676@gmail.com', 'Cluster Pesona Jepang Blok AG6 no 6, Metland Cibitung', 'Bekasi', b'1', '14', '24', 'Akuntansi', 'Atmajaya Yogyakarta', 'Unipack Indosystems', 'Menatap Senja', '2004', 'Tigabaru', '4', '@robertgves', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(135, 3, '123456', 'Romario Kaban', '9', 'Jakarta', '2000-04-27', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, '24', 'Universitas Budi Luhur', NULL, NULL, NULL, '2016', NULL, '2', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(136, 3, '123456', 'Ronald Julianto Sembiring', '12', 'Bekasi', '1999-07-31', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, '20', 'IPS', NULL, NULL, NULL, '2015', NULL, '2', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(137, 3, '123456', 'Sanitha Vera B Sembiring', '12', 'Bekasi', '2002-11-01', 'Perempuan', NULL, '85770594829', 'sanita.vera@gmail.com', 'Griya Asri 2 blok H1 No 17', 'Bekasi', b'1', NULL, '19', 'IPS', 'SMAN 1 Tambun Selatan', NULL, 'Nonton film', '2018', 'Tambun', '7', '@sanithavera_b', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(138, 3, '123456', 'Sarivita Loka', '12', 'Jakarta', '2002-12-17', 'Perempuan', NULL, '', 'sarivitalokasembiring@gmail.com', 'Taman tridaya indah 1 jl melati vii blok E6 no 3 tridaya sakti tambun selatan', 'Bekasi', b'1', NULL, '20', 'IPA', 'SMAN 2 Tambun Selatan', NULL, 'Makan :v', '2018', 'Tambun', NULL, '@sarivitaloka_', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(139, 3, '123456', 'Selvina Tawanta Brahmana', '12', 'Bekasi', '1995-07-28', 'Perempuan', NULL, '87770560786', 'tawantaselvina@yahoo.co.id', 'Perum Graha Melasti Blok FB9 No. 23', 'Bekasi', b'1', '14', '22', 'Teknik Kimia', 'Universitas Diponegoro', 'PT Sayap Mas Utama (Wings Corp)', 'Landek dan Rende', '2012', 'Tambun', '7', '@tawantaselvina', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(140, 3, '123456', 'Septa Ristiani br Sitepu', '9', 'Sukajulu', '1998-09-06', 'Perempuan', NULL, '82126133106', 'septaristiyani@gmail.com', 'Perumahan taman raya', 'Bekasi', b'1', '14', '19', NULL, 'SMPN 1 Barusjahe', 'Rumah', 'Rende', '2018', 'Tambun', '5', '@septaristianisitepu', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(141, 3, '123456', 'Setianus Ginting', '8', 'Bekasi', '1995-08-26', 'Laki-laki', NULL, '85781509564', 'tianginting406@gmail.com', 'Perum twitt blok f1 no 10 rt 6 RW 8 cibitung - bekasi', 'Bekasi', b'1', '14', '20', 'Teknik kendaraan ringan', 'SMA/K Yadika 13', 'PT sinar sosro cibitung', 'Renang, badminton, main game', '2013', 'Tambun', '4', '@tianginting', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(142, 3, '123456', 'Sheyla Egiavany Anastaysa', '9', 'Bekasi', '2001-08-11', 'Perempuan', NULL, '', 'sheylaaurai14@gmail.com', 'Kp. Poncol Sawah', 'Bekasi', b'1', NULL, '20', NULL, 'SMAN 1 Cikarang Barat', NULL, 'Menyanyi dan wisata kuliner', '2018', 'Tambun', NULL, '@sheyla.egiavany11', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(143, 3, '123456', 'Simon Pradipta Karo karo', '9', 'Bogor', '2001-05-01', 'Laki-laki', NULL, '81288162029', 'simonmacharona01@gmail.com', 'Jln raya kali cbl', 'Bekasi', b'1', NULL, '20', 'IPS', 'SMAN 4 Tambun Selatan', NULL, 'Bermain bola', '2017', 'Tambun', '5', '@simon_pradipta', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(144, 3, '123456', 'Sinta Marcelina Br. Tarigan', '10', 'Bekasi', '1996-06-15', 'Perempuan', NULL, '', NULL, NULL, 'Bekasi', b'1', '14', '20', NULL, NULL, NULL, NULL, '2012', NULL, '4', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(145, 3, '123456', 'Siska Trisna Dewi br Sembiring', '12', 'Kaban Jahe', '2002-01-09', 'Perempuan', NULL, '', 'siskatrisnads@gmail.com', 'jl teratai 3 c no 21 blok d 21', 'Bekasi', b'1', NULL, '20', 'IPA', 'SMAN 1 Tambun Selatan', NULL, 'olahraga', '2018', 'Tambun', '3', '@siskatrisnad', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(146, 3, '123456', 'Sovia Lamanca', NULL, NULL, '1970-01-01', 'Perempuan', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(147, 3, '123456', 'Sri Dani Chiota', '12', 'Jakarta', '1997-04-11', 'Perempuan', NULL, '81298702337', 'sridanichiota@gmail.com', 'Griya asri 2 blok c2 nomor 49', 'Bekasi', b'1', '14', '20', 'IPS', 'SMAN 3 Tambun Selatan', 'PT. KDS', 'Nyanyi & olahraga', '2014', 'Tambun', '7', '@sridanichiota', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL);
INSERT INTO `anggotas` (`id`, `role`, `password`, `nama`, `marga`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `keluarga`, `telepon`, `email`, `alamat`, `domisili`, `dengan_orangtua`, `pekerjaan`, `pendidikan`, `jurusan`, `sekolah`, `kantor`, `hobi`, `tahun_ngawan`, `lokasi_ngawan`, `sektor`, `instagram`, `status`, `deleted`, `deleted_at`, `deleted_by`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(148, 3, '123456', 'Sri Dewi Sembiring', '12', 'Jakarta', '2001-01-09', 'Perempuan', NULL, '89662221977', 'sridewiimut@gmail.com', 'Griya asri 2 blok i', 'Bekasi', b'1', NULL, '20', 'Akuntasi', 'SMK 10 November', NULL, 'Membaca', '2017', 'Tambun', '7', '@Sridewi0109', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(149, 3, '123456', 'Sri Junianti Ginting', '8', NULL, '1970-01-01', 'Perempuan', NULL, '89673172180', NULL, NULL, 'Bekasi', b'1', NULL, '20', 'Akuntasi', NULL, NULL, NULL, '2016', 'Tambun', '2', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(150, 3, '123456', 'Tania Neguita br. Bangun', '11', 'Bekasi', '2000-12-02', 'Perempuan', NULL, '82258795699', 'tania.neguita@yahoo.com', NULL, 'Bekasi', b'1', NULL, '20', 'IPA', 'SMAN 1 Tambun Selatan', NULL, NULL, '2017', 'Tambun', '5', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(151, 3, '123456', 'Teja Chornelius Bangun', '11', 'Bekasi', '1999-11-07', 'Laki-laki', NULL, '', 'tejajaya03@gmail.com', 'Prum telaga harapan blok G 1 no 16. Cikarang Barat', 'Bekasi', b'1', NULL, '20', 'IPS', 'SMAN 1 Cikarang Barat', 'Logistik', 'Futsal , makan ,membaca', '2016', 'Tambun', NULL, '@tejachorneliusbangun', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(152, 3, '123456', 'Thovans Putra Kelana', '8', 'Jakarta', '1995-06-08', 'Laki-laki', NULL, '', 'ginting5000@gmail.com', 'Satria jaya permai blok A2 No.15 RT.001 RW.012', 'Bekasi', b'1', '14', '20', 'IPA', 'SMA Athena', NULL, 'OLAHRAGA', '2012', 'Tambun', '2', '@thovanputra', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(153, 3, '123456', 'Tia Monica Br Tarigan', '10', 'Bekasi', '1997-07-17', 'Perempuan', NULL, '89675506146', 'monicatarigannn@gmail.com', 'Jl.Gatot kaca 1 blok f1 no 1&2 (BTP)', 'Bekasi', b'1', NULL, '20', 'Akuntansi', 'Universitas Persada Indonesia Y.A.I', NULL, 'Nyanyi,menari', '2014', 'Tambun', '5', '@monicatarigann', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(154, 3, '123456', 'Valentino Lucas', NULL, NULL, '1970-01-01', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, '20', NULL, NULL, NULL, NULL, '2018', 'Tambun', '6', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(155, 3, '123456', 'Venna br Ginting', '8', NULL, '1970-01-01', 'Perempuan', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, '2018', 'Tambun', NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(156, 3, '123456', 'Vineza br. Ginting', '8', 'Jakarta', '2001-03-26', 'Perempuan', NULL, '81286516286', 'gintingvineza@gmail.com', 'Perum Depsos blkC5 no 17 Telaga Asih Cikarang Barat', 'Bekasi', b'1', NULL, '20', 'Administrasi Perkantoran', 'SMKN 2 Cikarang Barat', NULL, 'Bernyanyi, Basket', '2017', 'Tambun', '4', '@vineza2y', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(157, 3, '123456', 'Vito Bastanta Tarigan', '10', NULL, '1970-01-01', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, '2018', 'Tambun', '6', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(158, 3, '123456', 'Welsher Asbeta', NULL, NULL, '1970-01-01', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, '2018', 'Tambun', NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(159, 3, '123456', 'Willem Benasimus Perangin angin', '11', 'Bekasi', '1997-06-18', 'Laki-laki', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, '2016', 'Tambun', NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(160, 3, '123456', 'Wina Natalia br. Ginting', '8', NULL, '1970-01-01', 'Perempuan', NULL, '85311942500', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tambun', '1', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(161, 3, '123456', 'Winda hestiyana br tarigan', '10', 'Bekasi', '2000-08-09', 'Perempuan', NULL, '81296259038', 'hestyanawinda@gmail.con', 'Perumahan hasta graha blok 25 no 22 cibitung wanasari', 'Bekasi', b'1', NULL, '20', 'IPS', 'SMAN 1 CIKARANG BARAT', NULL, 'Berenang', '2017', NULL, '5', '@windatarigan_55', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(162, 3, '123456', 'Yana Anggraeni Br. Sembiring', '12', NULL, '1970-01-01', 'Perempuan', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(163, 3, '123456', 'Yesaya Sembiring', '12', NULL, '1970-01-01', 'Perempuan', NULL, '81218432685', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(164, 3, '123456', 'Yesi Vinola br Bangun', '11', NULL, '1970-01-01', 'Perempuan', NULL, '', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, '2018', 'Tambun', NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(165, 3, '123456', 'Yopy pranata ginting', '8', 'Bekasi', '1997-09-03', 'Laki-laki', NULL, '', 'yopipranata09@gmail.com', 'Perumahan pondok tanah mas, jalan cempaka raya blok D15 NO 18 RT 006 RW 027 cibitung', 'Bekasi', b'1', NULL, '20', 'Akuntansi', 'SMAN 8 Bekasi', NULL, 'Futsal', '2013', 'Tambun', '3', '@mr.ginting9', NULL, b'0', NULL, NULL, '2019-07-03 01:38:52', NULL, '2019-07-11 02:30:12', NULL),
(166, 3, '123456', 'Harisa Ginting 2', '8', 'Kabanjahe', '2019-08-01', 'Laki-laki', NULL, '81210938203', 'test@gmail.com', 'Tambun Selatan', 'Bekasi', b'1', '14', '19', 'MI', 'Universitas Gunadarm', 'Erajaya', 'Jogging', '2011', 'GBKP Tambun', '2', '@harisaginting', NULL, b'0', NULL, NULL, '2019-07-10 11:31:53', NULL, '2019-07-11 06:47:09', NULL),
(167, 3, '$2y$10$ZSIIPqd1gh8yWrsxC7SlxORm2qLn2o9.Y91ycHJkmsKqUd3lerHX2', 'Nita Corinta Tarigan', '10', 'bekasi', '1995-07-06', 'Perempuan', NULL, '81286460765', 'corinta95@gmail.com', 'Papan mas blok G 32 no 5, Bekasi.', 'bekasi', b'1', '14', '23', 'akuntansi', 'Politeknik negeri jakarta', 'KAP Darmawan Hendang Kaslim & Rekan', 'mendengarkan musik', '2012', 'GBKP Tambun', '5', 'corinta95', NULL, b'0', NULL, NULL, '2019-07-13 12:58:37', NULL, '2019-07-13 12:58:37', NULL);

--
-- Triggers `anggotas`
--
DELIMITER $$
CREATE TRIGGER `delete_total_kas` BEFORE DELETE ON `anggotas` FOR EACH ROW BEGIN 
DECLARE tagihan int ;
DECLARE kategori varchar(50) ;

DELETE from total_iuran_kas where id_anggota = OLD.id;
DELETE FROM iuran_kas where id_anggota = OLD.id;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambah_tagihan_kas_anggota` AFTER INSERT ON `anggotas` FOR EACH ROW BEGIN 
DECLARE tagihan int ;
DECLARE kategori varchar(50) ;

IF(NEW.pekerjaan IN ('Pelajar','Mahasiswa')) THEN 
	SET kategori = 'Pelajar';
ELSE 
	SET kategori = 'Pekerja';
END IF;

IF(kategori = 'Pelajar') THEN 
	SELECT nama into tagihan from m_parameter where type = 'iuran_kas_pelajar' AND tahun = YEAR(CURDATE());
ELSE 
	SELECT nama into tagihan from m_parameter where type = 'iuran_kas_pekerja' AND tahun = YEAR(CURDATE());
END IF;

IF(tagihan IS NOT NULL) THEN
INSERT INTO total_iuran_kas(id_anggota,nominal,tagihan,tahun) VALUES(NEW.id, 0,tagihan, YEAR(CURDATE()));
END IF;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `iuran_kas`
--

CREATE TABLE `iuran_kas` (
  `id` int(11) NOT NULL,
  `id_anggota` int(10) DEFAULT NULL,
  `nama_anggota` varchar(100) DEFAULT NULL,
  `tanggal_pembayaran` date DEFAULT NULL,
  `nominal` int(10) NOT NULL,
  `tahun` int(5) NOT NULL,
  `keterangan` varchar(3000) DEFAULT NULL,
  `deleted` int(1) DEFAULT '0',
  `deleted_at` date DEFAULT NULL,
  `deleted_by` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(10) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iuran_kas`
--

INSERT INTO `iuran_kas` (`id`, `id_anggota`, `nama_anggota`, `tanggal_pembayaran`, `nominal`, `tahun`, `keterangan`, `deleted`, `deleted_at`, `deleted_by`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 38, 'Desryna Nathasya', '2019-07-03', 120000, 2019, NULL, 0, NULL, NULL, '2019-07-02 17:00:00', NULL, '2019-07-03 08:55:59', NULL),
(2, 82, 'Harisa Ginting', '2019-07-03', 120000, 2019, NULL, 0, NULL, NULL, '2019-07-02 17:00:00', NULL, '2019-07-03 08:55:59', NULL),
(3, 25, 'Asrat Srykandi Ovita Barus', '2019-07-03', 100000, 2019, NULL, 0, NULL, NULL, '2019-07-02 17:00:00', NULL, '2019-07-03 08:55:59', NULL),
(4, 14, 'Andre Karo-karo', '2019-07-03', 100000, 2019, NULL, 0, NULL, NULL, '2019-07-02 17:00:00', NULL, '2019-07-03 08:58:51', NULL),
(5, 4, 'Aditya Caesar Babo\n8', '2019-07-03', 60000, 2019, NULL, 0, NULL, NULL, '2019-07-02 17:00:00', NULL, '2019-07-03 08:59:09', NULL),
(6, 46, 'Efraim Ryandi Tarigan', '2019-07-03', 60000, 2019, NULL, 0, NULL, NULL, '2019-07-02 17:00:00', NULL, '2019-07-03 08:55:59', NULL),
(7, 102, 'Linia Br Sebayang', '2019-07-03', 40000, 2019, NULL, 0, NULL, NULL, '2019-07-02 17:00:00', NULL, '2019-07-03 08:55:59', NULL),
(8, 21, 'Ardiyanus Sembiring', '2019-07-03', 25000, 2019, NULL, 0, NULL, NULL, '2019-07-02 17:00:00', NULL, '2019-07-03 08:55:59', NULL),
(9, 35, 'Dandi Egi Satria Ginting', '2019-07-03', 20000, 2019, NULL, 0, NULL, NULL, '2019-07-02 17:00:00', NULL, '2019-07-03 08:55:59', NULL),
(10, 9, 'Agatha Lamsari Noviani', '2019-07-03', 20000, 2019, NULL, 0, NULL, NULL, '2019-07-02 17:00:00', NULL, '2019-07-03 08:55:59', NULL),
(11, 73, 'Frederik Sembiring', '2019-07-03', 20000, 2019, NULL, 0, NULL, NULL, '2019-07-02 17:00:00', NULL, '2019-07-03 09:00:09', NULL),
(12, 139, 'Selvina Tawanta Brahmana', '2019-07-03', 18000, 2019, NULL, 0, NULL, NULL, '2019-07-02 17:00:00', NULL, '2019-07-03 08:55:59', NULL);

--
-- Triggers `iuran_kas`
--
DELIMITER $$
CREATE TRIGGER `kurang_iuran_kas` AFTER DELETE ON `iuran_kas` FOR EACH ROW BEGIN 
DECLARE total_lama int ;

SELECT nominal into total_lama from total_iuran_kas where id_anggota = OLD.id_anggota; 

UPDATE total_iuran_kas set nominal = (total_lama - OLD.nominal) where id_anggota = OLD.id_anggota AND tahun = OLD.tahun; 

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `kurang_iuran_kas2` AFTER UPDATE ON `iuran_kas` FOR EACH ROW BEGIN 
DECLARE total_lama int ;

SELECT SUM(nominal) into total_lama from total_iuran_kas where id_anggota = NEW.id_anggota; 

IF(NEW.deleted = 1) THEN 
	UPDATE total_iuran_kas set nominal = (total_lama - NEW.nominal) where id_anggota = NEW.id_anggota AND tahun = NEW.tahun; 
ELSE 
	UPDATE total_iuran_kas set nominal = (total_lama + NEW.nominal) where id_anggota = NEW.id_anggota AND tahun = NEW.tahun; 
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambah_iuran_kas` AFTER INSERT ON `iuran_kas` FOR EACH ROW BEGIN 
DECLARE total_lama int ;
DECLARE ada integer;

SELECT nominal into total_lama from total_iuran_kas where id_anggota = NEW.id_anggota and tahun = NEW.tahun; 

SELECT count(*) INTO ada FROM total_iuran_kas where id_anggota = NEW.id_anggota AND tahun = NEW.tahun;

IF(ada <> 0) THEN 
	UPDATE total_iuran_kas set nominal = (total_lama + NEW.nominal) where id_anggota = NEW.id_anggota 	  AND tahun = NEW.tahun; 
ELSE 
	INSERT INTO total_iuran_kas (id_anggota,nominal,tahun) VALUES (NEW.id_anggota, NEW.nominal, NEW.tahun); 
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kantin`
--

CREATE TABLE `kantin` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pemasukan` int(10) NOT NULL DEFAULT '0',
  `tujuan` varchar(20) NOT NULL DEFAULT 'kas',
  `keterangan` varchar(3000) DEFAULT NULL,
  `deleted` int(1) DEFAULT '0',
  `deleted_at` date DEFAULT NULL,
  `deleted_by` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(10) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kantin`
--

INSERT INTO `kantin` (`id`, `tanggal`, `pemasukan`, `tujuan`, `keterangan`, `deleted`, `deleted_at`, `deleted_by`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, '2019-08-01', 90000, 'kas', 'saxxcczcx', 0, NULL, NULL, '2019-07-15 10:54:09', NULL, '2019-07-15 10:54:09', NULL),
(2, '2019-08-01', 90000, 'kas', 'saxxcczcx', 0, NULL, NULL, '2019-07-15 10:54:31', NULL, '2019-07-15 10:54:31', NULL);

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
  `nama` varchar(50) NOT NULL,
  `tahun` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_parameter`
--

INSERT INTO `m_parameter` (`id`, `type`, `nama`, `tahun`) VALUES
(1, 'sektor', 'Bumi Lestari', NULL),
(2, 'sektor', 'Graha Prima', NULL),
(3, 'sektor', 'Cibitung 1', NULL),
(4, 'sektor', 'Cibitung 2', NULL),
(5, 'sektor', 'Papan Mas', NULL),
(6, 'sektor', 'Tridaya', NULL),
(7, 'sektor', 'Griya Asri', NULL),
(8, 'marga', 'Ginting', NULL),
(9, 'marga', 'Karo-karo', NULL),
(10, 'marga', 'Tarigan', NULL),
(11, 'marga', 'Perangin-nangin', NULL),
(12, 'marga', 'Sembiring', NULL),
(13, 'pekerjaan', 'Pegawai Negri', NULL),
(14, 'pekerjaan', 'Pegawai Swasta', NULL),
(15, 'pekerjaan', 'Wiraswasta', NULL),
(16, 'pekerjaan', 'Pelajar/Mahasiswa', NULL),
(17, 'pekerjaan', '-', NULL),
(18, 'pendidikan', 'SD', NULL),
(19, 'pendidikan', 'SMP', NULL),
(20, 'pendidikan', 'SMA/K', NULL),
(21, 'pendidikan', 'D1', NULL),
(22, 'pendidikan', 'D3', NULL),
(23, 'pendidikan', 'DIV', NULL),
(24, 'pendidikan', 'S1', NULL),
(25, 'pendidikan', 'S2', NULL),
(26, 'pendidikan', 'S3', NULL),
(27, 'pendidikan', '-', NULL),
(28, 'iuran_kas_pelajar', '60000', '2019'),
(29, 'iuran_kas_pekerja', '120000', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `m_role`
--

CREATE TABLE `m_role` (
  `id` int(2) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_role`
--

INSERT INTO `m_role` (`id`, `nama`) VALUES
(1, 'super-admin'),
(2, 'admin'),
(3, 'anggota'),
(4, 'tamu');

-- --------------------------------------------------------

--
-- Table structure for table `pa`
--

CREATE TABLE `pa` (
  `id` int(11) NOT NULL,
  `id_acara` int(10) NOT NULL,
  `tema` varchar(200) NOT NULL,
  `ayat` varchar(200) NOT NULL,
  `pendamping` varchar(100) NOT NULL,
  `lokasi` varchar(150) NOT NULL,
  `persembahan` int(10) NOT NULL DEFAULT '0',
  `deleted` bit(1) NOT NULL DEFAULT b'0',
  `deleted_at` date DEFAULT NULL,
  `deleted_by` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(100) NOT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pa`
--

INSERT INTO `pa` (`id`, `id_acara`, `tema`, `ayat`, `pendamping`, `lokasi`, `persembahan`, `deleted`, `deleted_at`, `deleted_by`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 16, 'Yoo Ayoo', '1 Kejadian 1', 'pt blablabla', 'KA//KR', 0, b'0', NULL, NULL, '2019-07-11 17:16:23', 'Harisa Ginting', NULL, NULL),
(2, 17, 'test tema', '12121', 'sdhjsdfhjsd', 'ahwejahjtambun', 0, b'0', NULL, NULL, '2019-07-12 15:48:22', 'Harisa Ginting', NULL, NULL),
(3, 18, 'sadasda', 'assdasd', 'asda', 'asdasda', 0, b'0', NULL, NULL, '2019-07-12 18:06:44', 'Harisa Ginting', NULL, NULL),
(4, 19, '1231231asxzxxzczxczxczxczxc', 'zzxxxzzxxxx', 'xzxzxzxxx', 'xzzxzxxzxxx', 2000000, b'0', NULL, NULL, '2019-07-12 18:15:03', 'Harisa Ginting', '2019-07-15 15:45:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `total_iuran_kas`
--

CREATE TABLE `total_iuran_kas` (
  `id` int(11) NOT NULL,
  `id_anggota` int(10) DEFAULT NULL,
  `nominal` int(10) DEFAULT '0',
  `tagihan` int(10) DEFAULT '0',
  `tahun` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_iuran_kas`
--

INSERT INTO `total_iuran_kas` (`id`, `id_anggota`, `nominal`, `tagihan`, `tahun`) VALUES
(1, 1, 0, 60000, 2019),
(2, 2, 0, 120000, 2019),
(3, 3, 0, 120000, 2019),
(4, 4, 60000, 60000, 2019),
(5, 5, 0, 120000, 2019),
(6, 6, 0, 60000, 2019),
(7, 7, 0, 120000, 2019),
(8, 8, 0, 120000, 2019),
(9, 9, 20000, 60000, 2019),
(10, 10, 0, 120000, 2019),
(11, 11, 0, 60000, 2019),
(12, 12, 0, 120000, 2019),
(13, 13, 0, 60000, 2019),
(14, 14, 100000, 120000, 2019),
(15, 15, 0, 120000, 2019),
(16, 16, 0, 120000, 2019),
(17, 17, 0, 120000, 2019),
(18, 18, 0, 120000, 2019),
(19, 19, 0, 120000, 2019),
(20, 20, 0, 120000, 2019),
(21, 21, 25000, 120000, 2019),
(22, 22, 0, 60000, 2019),
(23, 23, 0, 120000, 2019),
(24, 24, 0, 60000, 2019),
(25, 25, 100000, 120000, 2019),
(26, 26, 0, 60000, 2019),
(27, 27, 0, 60000, 2019),
(28, 28, 0, 120000, 2019),
(29, 29, 0, 120000, 2019),
(30, 30, 0, 120000, 2019),
(31, 31, 0, 120000, 2019),
(32, 32, 0, 60000, 2019),
(33, 33, 0, 60000, 2019),
(34, 34, 0, 120000, 2019),
(35, 35, 20000, 120000, 2019),
(36, 36, 0, 120000, 2019),
(37, 37, 0, 120000, 2019),
(38, 38, 120000, 120000, 2019),
(39, 39, 0, 60000, 2019),
(40, 40, 0, 120000, 2019),
(41, 41, 0, 120000, 2019),
(42, 42, 0, 120000, 2019),
(43, 43, 0, 120000, 2019),
(44, 44, 0, 120000, 2019),
(45, 45, 0, 120000, 2019),
(46, 46, 60000, 120000, 2019),
(47, 47, 0, 120000, 2019),
(48, 48, 0, 120000, 2019),
(49, 49, 0, 120000, 2019),
(50, 50, 0, 120000, 2019),
(51, 51, 0, 60000, 2019),
(52, 52, 0, 120000, 2019),
(53, 53, 0, 60000, 2019),
(54, 54, 0, 120000, 2019),
(55, 55, 0, 120000, 2019),
(56, 56, 0, 60000, 2019),
(57, 57, 0, 60000, 2019),
(58, 58, 0, 60000, 2019),
(59, 59, 0, 120000, 2019),
(60, 60, 0, 120000, 2019),
(61, 61, 0, 60000, 2019),
(62, 62, 0, 120000, 2019),
(63, 63, 0, 60000, 2019),
(64, 64, 0, 120000, 2019),
(65, 65, 0, 120000, 2019),
(66, 66, 0, 120000, 2019),
(67, 67, 0, 60000, 2019),
(68, 68, 0, 120000, 2019),
(69, 69, 0, 60000, 2019),
(70, 70, 0, 120000, 2019),
(71, 71, 0, 120000, 2019),
(72, 72, 0, 60000, 2019),
(73, 73, 20000, 120000, 2019),
(74, 74, 0, 60000, 2019),
(75, 75, 0, 120000, 2019),
(76, 76, 0, 120000, 2019),
(77, 77, 0, 60000, 2019),
(78, 78, 0, 60000, 2019),
(79, 79, 0, 60000, 2019),
(80, 80, 0, 120000, 2019),
(81, 81, 0, 60000, 2019),
(82, 82, 120000, 120000, 2019),
(83, 83, 0, 60000, 2019),
(84, 84, 0, 120000, 2019),
(85, 85, 0, 120000, 2019),
(86, 86, 0, 120000, 2019),
(87, 87, 0, 120000, 2019),
(88, 88, 0, 120000, 2019),
(89, 89, 0, 120000, 2019),
(90, 90, 0, 120000, 2019),
(91, 91, 0, 120000, 2019),
(92, 92, 0, 120000, 2019),
(93, 93, 0, 120000, 2019),
(94, 94, 0, 120000, 2019),
(95, 95, 0, 120000, 2019),
(96, 96, 0, 120000, 2019),
(97, 97, 0, 120000, 2019),
(98, 98, 0, 60000, 2019),
(99, 99, 0, 120000, 2019),
(100, 100, 0, 60000, 2019),
(101, 101, 0, 120000, 2019),
(102, 102, 40000, 120000, 2019),
(103, 103, 0, 120000, 2019),
(104, 104, 0, 120000, 2019),
(105, 105, 0, 60000, 2019),
(106, 106, 0, 120000, 2019),
(107, 107, 0, 60000, 2019),
(108, 108, 0, 60000, 2019),
(109, 109, 0, 60000, 2019),
(110, 110, 0, 120000, 2019),
(111, 111, 0, 60000, 2019),
(112, 112, 0, 120000, 2019),
(113, 113, 0, 120000, 2019),
(114, 114, 0, 120000, 2019),
(115, 115, 0, 120000, 2019),
(116, 116, 0, 60000, 2019),
(117, 117, 0, 120000, 2019),
(118, 118, 0, 60000, 2019),
(119, 119, 0, 60000, 2019),
(120, 120, 0, 120000, 2019),
(121, 121, 0, 60000, 2019),
(122, 122, 0, 120000, 2019),
(123, 123, 0, 60000, 2019),
(124, 124, 0, 60000, 2019),
(125, 125, 0, 60000, 2019),
(126, 126, 0, 120000, 2019),
(127, 127, 0, 120000, 2019),
(128, 128, 0, 120000, 2019),
(129, 129, 0, 120000, 2019),
(130, 130, 0, 120000, 2019),
(131, 131, 0, 120000, 2019),
(132, 132, 0, 60000, 2019),
(133, 133, 0, 60000, 2019),
(134, 134, 0, 120000, 2019),
(135, 135, 0, 120000, 2019),
(136, 136, 0, 120000, 2019),
(137, 137, 0, 60000, 2019),
(138, 138, 0, 60000, 2019),
(139, 139, 18000, 120000, 2019),
(140, 140, 0, 120000, 2019),
(141, 141, 0, 120000, 2019),
(142, 142, 0, 60000, 2019),
(143, 143, 0, 60000, 2019),
(144, 144, 0, 120000, 2019),
(145, 145, 0, 60000, 2019),
(146, 146, 0, 120000, 2019),
(147, 147, 0, 120000, 2019),
(148, 148, 0, 60000, 2019),
(149, 149, 0, 120000, 2019),
(150, 150, 0, 120000, 2019),
(151, 151, 0, 60000, 2019),
(152, 152, 0, 120000, 2019),
(153, 153, 0, 60000, 2019),
(154, 154, 0, 120000, 2019),
(155, 155, 0, 120000, 2019),
(156, 156, 0, 60000, 2019),
(157, 157, 0, 120000, 2019),
(158, 158, 0, 120000, 2019),
(159, 159, 0, 120000, 2019),
(160, 160, 0, 120000, 2019),
(161, 161, 0, 60000, 2019),
(162, 162, 0, 120000, 2019),
(163, 163, 0, 120000, 2019),
(164, 164, 0, 120000, 2019),
(165, 165, 0, 60000, 2019),
(166, 166, 0, 120000, 2019),
(167, 166, 0, 120000, 2019),
(168, 167, 0, 120000, 2019);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aktivitas_anggota`
--
ALTER TABLE `aktivitas_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aktivitas_kantin`
--
ALTER TABLE `aktivitas_kantin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `iuran_kas`
--
ALTER TABLE `iuran_kas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kantin`
--
ALTER TABLE `kantin`
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
-- Indexes for table `pa`
--
ALTER TABLE `pa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_iuran_kas`
--
ALTER TABLE `total_iuran_kas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `aktivitas_anggota`
--
ALTER TABLE `aktivitas_anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `aktivitas_kantin`
--
ALTER TABLE `aktivitas_kantin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
--
-- AUTO_INCREMENT for table `iuran_kas`
--
ALTER TABLE `iuran_kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kantin`
--
ALTER TABLE `kantin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `m_keluarga`
--
ALTER TABLE `m_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_parameter`
--
ALTER TABLE `m_parameter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `m_role`
--
ALTER TABLE `m_role`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pa`
--
ALTER TABLE `pa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `total_iuran_kas`
--
ALTER TABLE `total_iuran_kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
