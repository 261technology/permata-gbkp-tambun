-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2019 at 04:19 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

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

--
-- Dumping data for table `anggotas`
--

INSERT INTO `anggotas` (`id`, `nama`, `marga`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `keluarga`, `telepon`, `email`, `alamat`, `domisili`, `dengan_orangtua`, `pekerjaan`, `pendidikan`, `jurusan`, `sekolah`, `kantor`, `hobi`, `tahun_ngawan`, `lokasi_ngawan`, `sektor`, `instagram`, `status`, `deleted`, `deleted_at`, `deleted_by`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Abel Asriel Bangun', 'Perangin-nangin', 'Bekasi', '2002-03-23', 'Laki-laki', NULL, '\'\'', 'abelasriel8@gmail.com', 'Perumahan Bumi Lestari Blok H1 / no. 11', 'Bekasi', b'1', 'Pelajar', 'SMA/K', 'IPA', 'SMA/K Yadika 13', NULL, 'Travelling,gym,game', '2018', 'Tambun', 'Bumi Lestari', '@abelasriel dan @pandarider99', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(2, 'Abel Ginting', 'Ginting', NULL, '1993-02-02', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Papan Mas', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(3, 'Abigail Natania', NULL, NULL, '1970-01-01', 'Perempuan', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(4, 'Aditya Caesar Babo', 'Ginting', 'Bekasi', '2002-05-24', 'Laki-laki', NULL, '\'81295888824\'', NULL, NULL, 'Bekasi', b'1', 'Mahasiswa', 'D3', 'Broadcast', 'STMIK Bina Sarana Informatika', NULL, NULL, '2011', 'Tambun', 'Graha Prima', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(5, 'Aditya Purba', 'Karo-karo', 'Jakarta', '1990-05-20', 'Laki-laki', NULL, '\'85817705772\'', 'adityapurba9@gmail.com', 'Graha prima blok ic no. 367', 'Bekasi', b'1', 'Pegawai Swasta', 'D3', 'Manajemen informatika', 'Universitas Jayabaya', 'Asuransi Artarindo', 'Motor', '2007', 'Tambun', 'Graha Prima', '@adityapurba', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(6, 'Adna Moria Oseta', 'Perangin-nangin', 'Bekasi', '2001-01-13', 'Perempuan', NULL, '\'\'', 'adnamoria13@gmail.com', 'Graha Prima Blok ID No 57', 'Bekasi', b'1', 'Pelajar', 'SMA/K', 'IPS', 'SMA Negeri 2 Tambun Utara', NULL, 'Renang', '2017', 'Tambun', 'Graha Prima', '@adnmriaax', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(7, 'Afnisya Fitri br Tarigan', 'Tarigan', NULL, '1970-01-01', 'Perempuan', NULL, '\'82298138516\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tambun', 'Graha Prima', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(8, 'Afrianti br Tarigan', 'Tarigan', NULL, '1970-01-01', 'Perempuan', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Graha Prima', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(9, 'Agatha Lamsari Noviani', 'Tarigan', 'Bekasi', '1997-01-10', 'Perempuan', NULL, '\'\'', 'kristianijoana18@gmail.com', 'Tridaya indah 1 blok C 23 no 6', 'Bekasi', b'1', 'Mahasiswa', 'SMA/K', 'Accounting', 'Santa Maria Monica', NULL, 'Hangout', '2013', 'Tambun', NULL, '@agatha_lamsari', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(10, 'Alexsander Octavianus S', 'Karo-karo', 'Kabanjahe', '1991-10-16', 'Laki-laki', NULL, '\'82165369553\'', 'alexsander42135@gmail.com', 'Perum villa bekasi indah 1', 'Bekasi', b'1', 'Wiraswasta', 'SMA/K', 'IPS', 'Rk 1', 'Photo copy group', 'Yg tidak merepotkan', '2008', 'Nanbelawan', 'Graha Prima', '@alexsander42135', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(11, 'Anathasia Silpani', 'Karo-karo', 'Jakarta', '2002-03-22', 'Perempuan', NULL, '\'85211157788\'', 'anathasiasilpani22@gmail.com', 'Kartika wanasari Jl Delimaraya blok d1 no 8B', 'Bekasi', b'1', 'Pelajar', 'SMA/K', 'IPA', NULL, NULL, 'Travelling', '2018', 'Tambun', 'Cibitung 1', '@thasia_s', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(12, 'Anderson Minamata Sembiring Pelawi', 'Sembiring', NULL, '1970-01-01', 'Laki-laki', NULL, '\'81318974152\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Papan Mas', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(13, 'Andre Brema Ginting', 'Ginting', 'Bekasi', '2002-08-06', 'Laki-laki', NULL, '\'\'', 'alvandre.ginting2110@gmail.com', 'Kartika wanasari blok b2 no 5', 'Bekasi', b'1', 'Mahasiswa', 'SMA/K', 'IPA', 'SMA/K Pusaka Nusantara 2 Bekasi', NULL, 'Badminton /olahraga', '2018', 'Tambun', 'Tridaya', '@lvandre ginting', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(14, 'Andre Karo-karo', 'Karo-karo', NULL, '1970-01-01', NULL, NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Papan Mas', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(15, 'Andrea Faldo Ginting', 'Ginting', NULL, '1970-01-01', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tambun', 'Cibitung 1', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(16, 'Andreas malem sebayang', 'Perangin-nangin', NULL, '2002-10-20', 'Laki-laki', NULL, '\'81317473743\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, 'SMA Ananda Bekasi', NULL, 'Basket', '2018', 'Tambun', 'Griya Asri', '@ndreasss_', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(17, 'Andro Tuahta Noryadi Tarigan', 'Tarigan', NULL, '1970-01-01', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tridaya', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(18, 'Angel Rose Br .Tarigan', 'Tarigan', NULL, '1970-01-01', 'Perempuan', NULL, '\'8983113170\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cibitung 2', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(19, 'Anggi Honestyan Tarigan', 'Tarigan', NULL, '1970-01-01', 'Laki-laki', NULL, '\'8980523089\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tambun', 'Griya Asri', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(20, 'Aprilia Fahulisa Br Sembiring', 'Sembiring', 'Bekasi', '1995-04-25', 'Perempuan', NULL, '\'82370383348\'', 'apriliafahulisa@gmail.com', 'Jl. Prapanca IV Blok A6/1 Taman Kebayoran', 'Bekasi', b'1', 'Pegawai Swasta', 'D3', 'Kebidanan', 'Poltekkes Kemenkes Jakarta 3', 'Puskesmas', 'Berenang', '2012', 'Tambun', 'Papan Mas', '@apriliapelawi', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(21, 'Ardiyanus Sembiring', 'Sembiring', 'Tangkahan', '1997-01-13', 'Laki-laki', NULL, '\'82366359431\'', 'ardiyanus13@gmail.com', 'Jalan Raya Haji Bosih Selang Tengah', 'Cibitung', b'1', 'Wiraswasta', 'SMA/K', 'IPA', 'Yapim namorambe', NULL, 'Futsal', '2013', 'Tangkahan', 'Cibitung 2', '@ardiyanus sembiring', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(22, 'Ary Rifaldy Surbakti', 'Karo-karo', 'Jakarta', '1995-06-21', 'Laki-laki', NULL, '\'\'', 'aryrifaldysurbakti@gmail.com', 'Perum puri cendana C12 No.3', 'Bekasi', b'1', 'Mahasiswa', 'D3', 'Manajemen Perusahaan', 'Universitas Diponegoro', NULL, 'Badminton', '2012', 'Tambun', 'Bumi Lestari', '@a_ry21', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(23, 'Asari Netania br Kaban', 'Karo-karo', 'Gurubenua', '2000-03-09', 'Perempuan', NULL, '\'81219583056\'', 'asarinetaniakaban@gmail.com', 'Graha prima baru blok s6 no 25', 'Bekasi', b'1', 'Pegawai Swasta', 'SMA/K', 'Administrasi Perkantoran', 'SMA/K Yadika 13', 'Pt digital commercial indonesia', 'Membaca', '2017', 'Tambun', 'Graha Prima', '@Asarikaban2', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(24, 'Ashelca cristine pepayhosana', 'Perangin-nangin', 'Bekasi', '2001-07-18', 'Perempuan', NULL, '\'\'', 'ashelca180701@gmail.com', 'Graha melasti blok ed 3a no 19', 'Bekasi', b'1', 'Pelajar', 'SMP', 'IPA', 'SMPN 5 Tambun Selatan', 'Tidak ada', 'Menyanyi/musik', '2018', 'Tambun', NULL, '@ashltne', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(25, 'Asrat Srykandi Ovita Barus', 'Karo-karo', 'medan', '1990-10-23', 'Perempuan', NULL, '\'81230439221\'', 'asratsrykandiasrat@gmail.com', 'perumahan metland cibitung blok n10 no 9', 'bekasi', b'1', 'Pegawai Swasta', 'S1', 'Farmasi', 'Universitas Airlangga', 'PT. KALBE GRUP', 'traveling, kuliner', '2017', 'Tambun', 'Cibitung 2', '@asratsrykandi', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(26, 'Bincha Armana', 'Sembiring', 'Jakarta', '2019-01-06', 'Laki-laki', NULL, '\'\'', 'bangbin@gmail.com', 'Gramapuri A8/24', 'Bekasi', b'1', 'Pelajar', 'SMA/K', 'IPA', NULL, '-', 'Main musik', '2018', 'Tambun', NULL, '@bangbinca', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(27, 'Birka Septy Meliany', 'Sembiring', 'Bekasi', '2000-09-16', 'Perempuan', NULL, '\'81384132184\'', 'septybirka@gmail.com', 'Kost Sinabung Jl. Perwira no 89', 'Bogor', b'1', 'Mahasiswa', 'SMA/K', 'Ekonomi Sumberdaya dan Lingkungan', 'SMAN 2 Tambun Selatan', '-', 'Bernyanyi, menari', '2017', 'Tambun', 'Cibitung 1', '@birkasepty_', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(28, 'Bobby Ginting', 'Ginting', NULL, '1970-01-01', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(29, 'Bryan Andrew Tarigan', 'Tarigan', 'Jakarta', '1995-07-15', 'Laki-laki', NULL, '\'81281647182\'', 'bryanandrew686@gmail.com', 'Griya Asri 2 Blok H2 No 94', 'Bekasi', b'1', 'Pegawai Swasta', 'SMA/K', 'Otomotif', 'SMK 10 November', 'PT DNP', 'Futsal', '2013', 'Tambun', 'Griya Asri', '@bryanandrewtarigan', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(30, 'Bryan Saputra Ginting', 'Ginting', 'Bekasi', '2000-02-16', 'Laki-laki', NULL, '\'85890880090\'', NULL, NULL, 'Bekasi', b'1', NULL, 'SMA/K', 'IPA', NULL, NULL, NULL, NULL, 'Tambun', 'Bumi Lestari', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(31, 'Carles Perangin angin', 'Perangin-nangin', 'Kabanjahe', '1970-01-01', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', 'Wiraswasta', NULL, NULL, NULL, NULL, NULL, NULL, 'Nanbelawan', 'Bumi Lestari', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(32, 'Cevin Ovris Sitepu', 'Karo-karo', 'Jakarta', '1997-07-19', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', 'Mahasiswa', NULL, NULL, NULL, NULL, NULL, '2015', 'Tambun', NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(33, 'Chris Santa Surbakti', 'Karo-karo', 'Jakarta', '1998-08-23', 'Laki-laki', NULL, '\'895358000000\'', 'crissantasurbakti3@gmail.com', 'Perum Puri Cendana Blok C 12 No 3', 'Bekasi', b'1', 'Pelajar', 'D3', 'Kearsipan', 'SMAN 2 Tambun Selatan', 'PMK SV UGM 2017', 'Badminton', '2016', 'Tambun', 'Bumi Lestari', '@surbakti0898', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(34, 'Christopher Evan Sembiring', 'Sembiring', NULL, '1970-01-01', 'Laki-laki', NULL, '\'81383318125\'', NULL, NULL, 'Bandung', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tambun', 'Tridaya', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(35, 'Dandi Egi Satria Ginting', 'Ginting', NULL, '1970-01-01', 'Laki-laki', NULL, '\'82362532057\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Griya Asri', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(36, 'Depana Kaban', 'Karo-karo', NULL, '2000-12-04', 'Laki-laki', NULL, '\'82162777848\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gurubenua', 'Griya Asri', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(37, 'Desla Natalia br Ginting', 'Ginting', 'Bekasi', '1995-09-12', 'Perempuan', NULL, '\'82213825829\'', 'deslanataliaginting2@yahoo.co.id', 'Perumahan bumi lestari blok H 27 no 12', 'Bekasi', b'1', 'Pegawai Swasta', 'D3', 'Keperawatan', 'Akper RS PGI Cikini', 'Rs siloam sentosa', 'Tidur', '2013', 'Tambun', 'Bumi Lestari', '@deslaginting', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(38, 'Desryna Nathasya', 'Sembiring', 'Jakarta', '1995-12-21', 'Perempuan', NULL, '\'\'', 'nathasyasembiring.dn@gmail.com', 'Perum. Taman Tridaya Indah Blok B3 No. 11 Jl. Raflesia Raya, RT.002 RW.09', 'Bekasi', b'1', 'Pegawai Swasta', 'S1', 'Business Administration', 'SMAN 2 Tambun Selatan', 'PT XFERS Tech Indonesia', '-', '2012', 'Tambun', 'Tridaya', '@dnthsys / @desnathasya', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(39, 'Destriani br Sembiring', 'Sembiring', 'Jakarta', '1994-12-30', 'Perempuan', NULL, '\'895320266744\'', 'destriani961@gmail.com', 'Villa bekasi indah 1', 'Bekasi', b'1', 'Mahasiswa', 'S1', 'Pendidikan kepelatihan olahraga', 'Universitas Negri Jakarta', NULL, 'Jalan jalan', '2009', 'Tambun', 'Graha Prima', '@destrianipelawi', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(40, 'Diana Aprianti br Tarigan', 'Tarigan', NULL, '1970-01-01', 'Perempuan', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(41, 'Dicky Ramona Kaban', 'Karo-karo', NULL, '1970-01-01', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cibitung 1', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(42, 'Divia Julia Carera br Ginting', 'Ginting', 'Jakarta', '1998-07-29', 'Perempuan', NULL, '\'\'', 'diviacarera@gmail.com', 'Satria Jaya Permai, Blok.A2 No.15', 'Bekasi', b'1', 'Pegawai Swasta', 'SMA/K', 'Administrasi Perkantoran', 'SMK Karya Guna 2 Bekasi', 'PT.SHINSUNG ELEKTRONIK INDONESIA', 'Makan, traveling', '2015', 'Tambun', 'Graha Prima', '@carera_ginting', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(43, 'Duta Christian Tarigan', 'Tarigan', 'Jakarta', '1997-06-20', 'Laki-laki', NULL, '\'\'', 'dutachristian99@gmail.com', 'Perumahan gramapuri tamanasari blok d2 no.9 rt 03/37 Cibitung, Bekasi', 'Bekasi', b'1', 'Pegawai Negri', 'SMA/K', 'IPA', 'SMAN 2 Tambun Selatan', 'Polda', 'Sepak Bola', '2013', 'Tambun', 'Cibitung 1', '@dutarigans_', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(44, 'Edwina Anadia Agitha br Tarigan', 'Tarigan', NULL, '1970-01-01', 'Perempuan', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Papan Mas', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(45, 'Efesus Ginting', 'Ginting', NULL, '1970-01-01', 'Laki-laki', NULL, '\'81285738938\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tridaya', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(46, 'Efraim Ryandi Tarigan', 'Tarigan', 'Jakarta', '1999-02-17', 'Laki-laki', NULL, '\'87786570865\'', NULL, 'Perum. Bumi Sani Permai B7/21', 'Bekasi', b'1', NULL, 'S1', NULL, NULL, NULL, NULL, NULL, 'Tambun', 'Papan Mas', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(47, 'Ega Adrian Surbakti', 'Karo-karo', 'Bekasi', '1988-08-03', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, 'SMA/K', NULL, NULL, NULL, NULL, NULL, 'Tambun', 'Papan Mas', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(48, 'Eka Junenty', 'Ginting', 'Medan', '1989-05-28', 'Perempuan', NULL, '\'\'', 'ekajunenty89@gmail.com', 'Perum. Tridaya Nuansa Indah Jl.Kelapa Gading 1 No. 10 Rt 006 Rw 010', 'Bekasi', b'1', 'Pegawai Swasta', 'D3', 'Management Informatika', 'Bina Sarana Informatika', '-', 'Badminton', '2007', 'Tambun', 'Tridaya', '@ekajunenty.ginting', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(49, 'Eky Kurniawan Pinem', 'Perangin-nangin', 'Kabanjahe', '1998-05-15', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tridaya', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(50, 'Eloponi Tarigan', 'Tarigan', 'Kacaribu', '1970-01-01', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Cililitan', b'1', NULL, 'SMA/K', 'Otomotif', 'SMA/K Yadika 13', NULL, NULL, '2012', 'Gurubenua', 'Griya Asri', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(51, 'Elsa br Tarigan', 'Tarigan', 'Bekasi', '2000-03-02', 'Perempuan', NULL, '\'82121532865\'', 'elsaxxx14@gmail.com', 'Griya Asri 2 Blok H2 No. 82 Tambun Selatan kab. Bekasi', 'Kab bekasi', b'1', 'Pelajar', 'SMA/K', 'IPA', 'SMAN 2 Tambun Selatan', NULL, 'Bulu tangkis', '2016', 'Tambun', 'Griya Asri', '@elsatrgn', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(52, 'Elsa Kristin Sebayang', 'Perangin-nangin', 'Bekasi', '1970-01-01', 'Perempuan', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Griya Asri', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(53, 'Elvira Erlikasna', 'Tarigan', 'Bekasi', '2003-04-15', 'Perempuan', NULL, '\'89601967461\'', 'elfira002@gmail.com', NULL, 'Bekasi', b'1', 'Pelajar', 'SMA/K', 'IPA', 'SMA/K Yadika 13', NULL, 'Bernyanyi', '2018', 'Tambun', 'Griya Asri', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(54, 'Elys Theresia Br. Tarigan', 'Tarigan', 'Bekasi', '1996-07-05', 'Perempuan', NULL, '\'\'', NULL, NULL, 'Tambun', b'1', NULL, 'D3', 'Manajemen Peternakan', NULL, NULL, NULL, '2012', 'Tambun', 'Papan Mas', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(55, 'Eme Pepayosha Gurusinga', 'Karo-karo', 'Cibitung', '1996-09-18', 'Perempuan', NULL, '\'Eme Pepayosha\'', 'emeocha96@gmail.com', 'Perumahan Bumi Lestari Jl Perkutut Raya I Blok H 39 No 1', 'Kabupaten Bekasi', b'1', 'Pegawai Swasta', 'S1', 'Ilmu Komunikasi', 'Telkom University', 'FAZZFINANCIAL', 'Tidur', '2012', 'Tambun', 'Bumi Lestari', '@emepepayosha', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(56, 'Emirela Refita Meliala', 'Sembiring', 'Bekasi', '1998-06-29', 'Perempuan', NULL, '\'\'', 'emirelarefita@gmail.com', 'Perum sku kompas blok b14 no 14 jl p bali', 'Kabupaten Bekasi', b'1', 'Mahasiswa', 'SMA/K', 'IPS', 'SMAN 1Tambun Selatan', NULL, 'Nonton film', '2015', 'Tambun', 'Griya Asri', '-', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(57, 'Emisa Viola', 'Karo-karo', 'Jakarta', '2001-04-03', 'Perempuan', NULL, '\'\'', 'emisaviola@gmail.com', 'Perumahan Bumi Lestari Blok H39 No.1', 'Kabupaten Bekasi', b'1', 'Pelajar', 'SMA/K', 'IPS', 'SMAN 3 Tambun Selatan', NULL, '-', '2017', 'Tambun', 'Bumi Lestari', '@emvio', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(58, 'Enda Amelia Maha Gurusinga', 'Karo-karo', 'Banjarbaru', '1999-02-18', 'Perempuan', NULL, '\'88210886164\'', 'endaame1870@gmail.com', 'Jl. Pendidikan no.122 desa mangunjaya', 'Bekasi', b'1', 'Mahasiswa', 'SMA/K', 'Ilmu Komunikasi', 'SMAN 3 Tambun Selatan', NULL, 'Baca Buku', '2015', 'Tambun', 'Graha Prima', '@end.am', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(59, 'Enina', 'Sembiring', 'Jakarta', '1988-07-04', 'Perempuan', NULL, '\'8999219731\'', 'nasembiring@yahoo.com', 'Permata regensi jalan durian 2 blok h 1 no 7', 'Bekasi', b'1', 'Pegawai Swasta', 'D3', 'Manajemen Informatika', 'Amik Mpu Tantular', 'Pt Ichikoh Indonesia', 'Musik, baca', '2005', 'Cililitan', 'Griya Asri', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(60, 'Eninta br Sembiring', 'Sembiring', 'Jakarta', '1988-07-04', 'Perempuan', NULL, '\'82154000873\'', NULL, 'Permata regensi jalan durian 2 blok h 1 no 7', 'Bekasi', b'1', 'Pegawai Swasta', 'D3', 'Perhotelan', NULL, NULL, NULL, '2005', 'Cililitan', 'Griya Asri', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(61, 'Esri Bastanta Sinurat', 'Perangin-nangin', 'Jakarta', '1996-05-20', 'Laki-laki', NULL, '\'\'', 'esribastanta7@gmail.con', 'Perum. Graha Prima Blok ID No.57 . Rt 04 Rw 09 , Kelurahan Satria Jaya , Kecamatan Tambun Utara', 'Tambun Utara , Kabupaten Bekasi', b'1', 'Mahasiswa', 'SMA/K', 'IPS', 'SMA Santa Mari Monica', 'Belum Bekerja', 'Olahraga (Badminton dan Futsal)', '2013', 'Tambun', 'Graha Prima', '@esribastanta7', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(62, 'Evandi Nata Gurusinga', 'Karo-karo', 'Bekasi', '1998-09-23', 'Laki-laki', NULL, '\'85692998640\'', NULL, NULL, 'Kalimantan', b'1', NULL, NULL, NULL, NULL, NULL, NULL, '2015', 'Tambun', 'Bumi Lestari', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(63, 'Evans Berpin Brahmana', 'Sembiring', 'Bekasi', '2000-10-29', 'Laki-laki', NULL, '\'81287764599\'', 'evansberpin@gmail.com', 'Perum Graha Melasti fb 9 no 23', 'Kabupaten Bekasi', b'1', 'Pelajar', 'SMA/K', 'IPS', 'SMAN 2 Tambun Selatan', NULL, 'Debat,bermain futsal', '2017', 'Tambun', 'Griya Asri', '@e7brahmana_', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(64, 'Fanso Giresemi Ginting', 'Ginting', 'Jakarta', '1992-05-23', 'Laki-laki', NULL, '\'\'', 'fansoginting@gmail.com', 'Tridaya Indah III', 'Bekasi', b'1', 'Pegawai Swasta', 'SMA/K', 'Otomotif', 'SMK Karya Guna 2 Bekasi', 'PT. DNPI', 'Futsal, begadang n ngopi', '2008', 'Tambun', 'Griya Asri', '@fansoginting', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(65, 'Febi Handayani Surbakti', 'Karo-karo', 'Diski', '1996-08-20', 'Perempuan', NULL, '\'\'', 'febyhs40@yahoo.com', 'Jl. Sei Mencirim Dusun 17 Desa Sempat Arih', 'Deli Serdang', b'1', 'Pegawai Swasta', 'D3', 'Kebidanan', 'Akbid Mitra Husada Medan', 'Klinik Tritama', 'Berenang', '2015', 'Sempat Arih', 'Graha Prima', '@febibakti20', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(66, 'Febri Shinta Br Ginting', 'Ginting', 'Jakarta', '1994-02-19', 'Perempuan', NULL, '\'\'', 'fansoginting@gmail.com', 'Perum Tridaya Indah III', 'Bekasi', b'1', 'Wiraswasta', 'SMA/K', 'IPS', 'SMAN 4 Tambun Selatan', 'Rumah', 'Bantu mamak', '2012', 'Tambun', NULL, '@fansoginting', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(67, 'Febrin Oceanta', 'Tarigan', 'Jakarta', '1996-02-04', 'Laki-laki', NULL, '\'\'', 'oceanofgame1996@gmail.com', 'Perum.griya asri 1 blok c4 no 27', 'Bekasi', b'1', 'Mahasiswa', 'D3', 'Teknik', 'Akademi Maritim Djadajat', NULL, 'Melakukan hal yang mendadak', '2012', 'Tambun', NULL, '@monsieurocean', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(68, 'Fernandez Pratama', 'Perangin-nangin', 'Kabanjahe', '1997-09-15', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', 'Pegawai Swasta', 'SMA/K', 'Otomotif', NULL, NULL, NULL, NULL, 'Selakar', 'Papan Mas', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(69, 'Fernando Adisyah Putra Tarigan', 'Tarigan', 'jakatra', '1993-02-17', 'Laki-laki', NULL, '\'81285732277\'', 'nandoadisyah@gmail.com', 'btp jln gatot kaca 1 blok f 1 no 1', 'Bekasi', b'1', 'Mahasiswa', 'S1', 'Olahraga', 'Universitas Islam 45', NULL, 'skateboard', '2010', 'Tambun', 'Papan Mas', '@nando_adisyah', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(70, 'Fran Osenta Sinulingga', 'Karo-karo', 'Bekasi', '1998-03-19', 'Laki-laki', NULL, '\'81324072470\'', 'franosentasinulingga2@gmail.com', 'Perum. Tridaya Indah 1 Blok C22 No 25 Tambun Selatan', 'Bekasi', b'1', 'Pegawai Swasta', 'SMA/K', 'Otomotif', 'SMK Bina Karya Mandiri 2', 'Pt. Amarcon Jaya Utama', 'Tidak Jelas', '2017', 'Tambun', 'Tridaya', '@fran sinulingga', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(71, 'Franciuz Ginting', 'Ginting', 'Bekasi', '1993-12-26', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Jakarta', b'1', NULL, 'S1', 'Hukum', NULL, NULL, NULL, '2010', 'Tambun', 'Cibitung 1', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(72, 'Frederico Haga Alloyson Tarigan', 'Tarigan', 'Bekasi', '1998-08-05', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', 'Mahasiswa', 'S1', NULL, NULL, NULL, NULL, '2014', 'Tambun', 'Tridaya', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(73, 'Frederik Sembiring', 'Sembiring', NULL, '1970-01-01', NULL, NULL, '\'\'', NULL, NULL, NULL, b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tridaya', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(74, 'Gabriella Bangun', 'Perangin-nangin', 'Bekasi', '2000-04-24', 'Perempuan', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', 'Pelajar', 'SMA/K', 'IPS', NULL, NULL, NULL, NULL, NULL, 'Griya Asri', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(75, 'Gael Hekafesus Tarigan', 'Tarigan', NULL, '1970-01-01', 'Laki-laki', NULL, '\'\'', NULL, NULL, NULL, b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cibitung 1', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(76, 'Giovanni bangun', 'Perangin-nangin', 'Jakarta', '1996-04-01', 'Laki-laki', NULL, '\'89639153092\'', 'gio40191@gmail.com', 'Regensi 1 blok j9 no.12 RT.03/RW.06', 'Bekasi', b'1', 'Pegawai Swasta', 'S1', 'Broadcasting', 'Universitas Mercu Buana', 'PT barewa tekno gemilang', 'Fotografi & videografi', '2012', 'Tambun', 'Griya Asri', '@giovaniii06', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(77, 'Gisela Milenie Erjorena', 'Karo-karo', 'Bekasi', '2000-01-25', 'Perempuan', NULL, '\'81283542836\'', 'giselamileni0@gmail.com', 'Villa bekasi indah 1 blok b 15 no 2', 'Bandung', b'1', 'Mahasiswa', 'SMA/K', 'Teknik Sipil', 'SMAN 7 Tambun Selatan', NULL, 'Baca novel. Nonton film.', '2017', 'Tambun', 'Bumi Lestari', '@giselaleni', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(78, 'Grace ivana michaela', 'Sembiring', 'Jakarta', '2002-05-07', 'Perempuan', NULL, '\'89506843915\'', 'graceimicel@gmail.com', 'Regensi 2 HH5/3', 'Bekasi', b'1', 'Pelajar', 'SMA/K', 'IPA', 'SMAN 1 Cibitung', NULL, 'Travelling', '2018', 'Tambun', 'Cibitung 1', '@grzmiscs', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(79, 'Gracia Medyate Sinulingga', 'Karo-karo', 'bekasi', '2002-09-23', 'Perempuan', NULL, '\'\'', 'medy.gracialingga@gmail.com', 'perumahan telaga harapan blok g2 no. 10', 'Bekasi', b'1', 'Pelajar', 'SMA/K', NULL, 'SMAN 1 Cikarang Barat', NULL, 'bernyanyi dan traveling', '2018', 'Tambun', NULL, '@graciamedh', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(80, 'Gresy Bebi Ananda', NULL, NULL, '1970-01-01', 'Perempuan', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(81, 'Haga Felicia', 'Karo-karo', 'Jakarta', '1998-06-07', 'Perempuan', NULL, '\'\'', 'feliciahafel@gmail.com', 'Graha prima jl mendut v blok ib no 55', 'Bekasi', b'1', 'Mahasiswa', 'SMA/K', 'Manajemen', 'SMA Santa Maria Monica', NULL, 'dengar musik', '2014', 'Tambun', 'Graha Prima', '@hgflca', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(82, 'Harisa Ginting', 'Ginting', 'Gurubenua', '1993-11-09', 'Laki-laki', NULL, '\'\'', 'harisaginting@gmail.com', 'Graha Prima Baru Blok S6.No.25', 'Bekasi', b'1', 'Pegawai Swasta', 'D3', 'Manajemen Informatika', 'Universitas Gunadarma', NULL, NULL, '2010', 'Tambun', 'Graha Prima', '@harisaginting', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(83, 'Hendi Paska Purba', 'Karo-karo', 'Jakarta', '1999-03-31', 'Laki-laki', NULL, '\'\'', 'hendipaskapurba@gmail.com', 'Tridaya Indah 4 Blok C 20 No.8', 'Bekasi', b'1', 'Pelajar', 'SMA/K', 'IPA', 'SMA NEGERI 3 TAMBUN SELATAN', NULL, 'Sepak Bola,Badminton', '8.1e6', 'Tambun', 'Tridaya', '@hendipaska', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(84, 'Hezkia Sembiring', 'Sembiring', 'Bekasi', '1995-10-18', 'Laki-laki', NULL, '\'\'', 'hezkia18@gmail.com', 'Villa bekasi indah 1 b1 no 18 tambun selatan', 'Bekasi', b'1', 'Pegawai Swasta', 'S1', 'Sistem informasi', 'Universitas Gunadarma', NULL, 'Berenang', '2012', 'Tambun', 'Graha Prima', '@hezkiasembiring', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(85, 'Immanuelta Lopiga Sebayang', 'Perangin-nangin', NULL, '1970-01-01', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(86, 'Irena Saragih', 'Ginting', NULL, '1970-01-01', 'Perempuan', NULL, '\'811931909\'', NULL, NULL, 'Jakarta', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tambun', 'Bumi Lestari', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(87, 'Jefri Tarigan', 'Tarigan', 'Kabanjahe', '1996-04-06', 'Laki-laki', NULL, '\'\'', 'jefritarsilz@gmail.com', 'Vila Bekasi Indah 1 Blok C', 'Bekasi', b'1', 'Wiraswasta', 'SMA/K', 'Otomotif', 'SMKN 1 Merdeka Berastagi', 'PERMATA', 'SPORT,CINEMAX,MUSIC,READ', '2013', 'Berastagi', 'Cibitung 1', '@jefritarigan.s', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(88, 'Jhon Amor Agustin Barus', 'Karo-karo', NULL, '1970-01-01', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bumi Lestari', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(89, 'Joli Kardi Karo-karo', 'Karo-karo', NULL, '1970-01-01', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(90, 'Joy Michael Sembiring Meliala', 'Sembiring', 'Jakarta', '1994-05-04', 'Laki-laki', NULL, '\'\'', 'joymichael920@gmail.com', 'Perumahan SKU kompas, jl. pulau bali blok B14/14, tambun selatan, bekasi.', 'Bekasi', b'1', 'Pegawai Swasta', 'S1', 'Manajemen', 'Universitas Gunadarma', 'PT Shopee Indonesia', 'Bersantai', '2012', 'Tambun', 'Griya Asri', '@joy_michael04', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(91, 'Julilois br Targian', 'Tarigan', NULL, '1970-01-01', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(92, 'Julius Yeskiel Sembiring', 'Sembiring', NULL, '1970-01-01', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(93, 'Junita br Brahmana', 'Sembiring', NULL, '1970-01-01', 'Perempuan', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(94, 'Karina Rehulina Tarigan', 'Tarigan', 'Jakarta', '1993-09-19', 'Perempuan', NULL, '\'8128289928\'', 'karinatarigan93.krt@gmail.com', 'Graha prima blok ic no.238', 'Bekasi', b'1', 'Pegawai Swasta', 'S1', 'Manajemen Bisnis Industri', 'STMI Kemenprin', 'PT. Talisman Insurance Broker', 'Nonton film', '2008', 'Tambun', 'Graha Prima', '@Karintarigan', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(95, 'Kartika Monalisa Br. Sembiring', 'Sembiring', NULL, '1970-01-01', 'Perempuan', NULL, '\'81218626238\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tridaya', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(96, 'Kornesia Yelma', 'Ginting', NULL, '1970-01-01', 'Perempuan', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(97, 'Kristo Fernanda Ginting', 'Ginting', 'Jakarta', '1998-03-11', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, 'Mahasiswa', NULL, NULL, NULL, NULL, '2014', 'Tambun', 'Bumi Lestari', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(98, 'Launa Deo Anggara', 'Karo-karo', 'Bekasi', '2019-06-19', 'Laki-laki', NULL, '\'82211364979\'', 'deolauna@yahoo.com', 'Graha Prima', 'Bekasi', b'1', 'Mahasiswa', 'SMA/K', 'IPS', 'SMA/K Yadika 13', NULL, 'NGABISIN UANG', '2015', 'Tambun', 'Graha Prima', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(99, 'Leo Pranata Tarigan', 'Tarigan', 'Jakarta', '1991-07-26', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', 'Wiraswasta', 'S1', 'Hukum', NULL, NULL, NULL, NULL, 'Pondol Gede', 'Griya Asri', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(100, 'Lhizet Anastasya Febyola Br. Sianipar', NULL, 'Jakarta', '2000-05-14', 'Perempuan', NULL, '\'89614743291\'', NULL, NULL, 'Bekasi', b'1', 'Mahasiswa', 'D3', 'Keperawatan', 'Akper RS PGI Cikini', NULL, NULL, NULL, 'Tambun', 'Bumi Lestari', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(101, 'Lili Martiani', 'Sembiring', 'kabanjahe', '1995-04-12', 'Perempuan', NULL, '\'\'', 'dedilili886@yahoo.co.id', 'Jl teratai 3 c blok d 21 no 21', 'Bekasi', b'1', 'Pegawai Swasta', 'D3', 'Kebidanan', 'Arta Kabanjahe', 'rs karya medika 2', 'Menghabiskan uang', '2012', 'Tambun', 'Cibitung 1', '@lili_martiani', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(102, 'Linia Br Sebayang', 'Perangin-nangin', 'Jakarta', '1996-07-08', 'Perempuan', NULL, '\'82260272931\'', 'liniasebayang@gmail.com', 'Griya Asri 2, Blok K 1 No 4', 'Bekasi', b'1', 'Pegawai Swasta', 'S1', 'Broadcasting', 'Universitas Persada Indonesia Y.A.I', NULL, 'Bulutangkis', '2013', 'Tambun', 'Griya Asri', '@liniasebayang', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(103, 'Litta Maranata', 'Karo-karo', 'Bekasi', '1991-05-01', 'Perempuan', NULL, '\'85694230555\'', 'tha.maranata91@gmail.com', 'Perumahan papan mas blok g 15 no.1 rt/rw 006/011', 'Bekasi', b'1', 'Pegawai Swasta', 'S1', 'Keperawatan', 'Stikes Pertamedika', 'RS.Premier Bintaro', 'Nonton,traveling', '2017', 'Tambun', 'Papan Mas', '@tha_maranatha91', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(104, 'Louis Lando Basana', 'Tarigan', 'Jakarta', '1996-05-03', 'Laki-laki', NULL, '\'\'', 'louis_screamoholic@rocketmail.com', 'Graha Prima Blok IC no 238', 'Bekasi', b'1', 'Pegawai Negri', 'SMA/K', 'IPS', 'Santa Maria Monica', 'Kepo', 'Kepo', '2014', 'Tambun', 'Graha Prima', '@gausahkepo', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(105, 'Maretta Eiodia br ginting', 'Ginting', 'Berastagi', '2019-03-15', 'Perempuan', NULL, '\'‭‭0 812 82466965‬‬\'', 'marettaeiodia@icloud.com', 'Pondok tanah mas jl.teratai 3b blokd21 no.14', 'Bekasi', b'1', 'Pelajar', 'SMA/K', 'IPA', 'SMA Jayasuti Abadi', NULL, 'Travelling', '2018', 'Tambun', 'Cibitung 1', '@marettoyy', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(106, 'Margantina Br. Tarigan', 'Tarigan', 'Buluhawar', '1993-08-14', 'Perempuan', NULL, '\'\'', NULL, NULL, 'Jakarta', b'1', NULL, 'S1', 'Teknik Informatika', NULL, NULL, NULL, NULL, 'Buluhawar', NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(107, 'Marsel', 'Sembiring', 'Jakarta', '1999-11-22', 'Laki-laki', NULL, '\'=+62 812-8397-208\'', 'marsel.jr88@gmail.com', 'Perum. Gramapuri Tamansari blok. E3/8', 'Bekasi', b'1', 'Mahasiswa', 'SMA/K', 'Olahraga', 'SMA Kristen Indonesia', '-', '*Edit Video **Bermain Basket', '2017', 'Tambun', 'Cibitung 1', '-', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(108, 'Mayang Angelina', 'Karo-karo', 'Bekasi', '2019-01-25', 'Perempuan', NULL, '\'\'', 'mayanglinaa@gmail.com', 'Jalan Batara Indra No.32-33', 'Bekasi', b'1', 'Mahasiswa', 'SMA/K', 'Hubungan Internasional', 'SMAN 3 Tambun Selatan', '-', 'Bernyanyi', '2016', 'Tambun', NULL, '@mayangalina', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(109, 'Meby Yosephani Bellaisa Br.Sembiring', 'Sembiring', 'Binjai', '2001-01-04', 'Perempuan', NULL, '\'895370905687\'', 'mebybella@gmail.com', 'Griya Asri2 blokC2 no49', 'Bekasi', b'1', 'Pelajar', 'SMA/K', 'IPS', 'SMAN 4 Tambun Selatan', NULL, 'Berenang, main gitar', '2017', 'Tambun', 'Griya Asri', '@meby04_', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(110, 'Merim Sumasuwari', 'Karo-karo', 'Bekasi', '1994-02-09', 'Perempuan', NULL, '\'82111755584\'', '1994merimsumasiwari@gmail.com', 'Graha prima blok ic no 367 jln gn lawu 2', 'Bekasi', b'1', 'Pegawai Swasta', 'S1', 'Akuntansi', 'Atma jaya', 'Prospect motor', 'Baca', '2007', 'Tambun', 'Graha Prima', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(111, 'Mikha Frinca Emeninta', 'Tarigan', 'Jakarta', '1997-05-19', 'Perempuan', NULL, '\'\'', 'mikhatarigan28@gmail.com', 'Perum. Griya Asri 2 Blok E2/84 RT. 002 RW.027', 'Bekasi', b'1', 'Mahasiswa', 'S1', 'Bimbingan dan Konseling', 'Universitas Sebelas Maret', NULL, 'Baca, Mendengar Musik, Bernyanyi', '2013', 'Tambun', 'Griya Asri', '@mikhafrinca', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(112, 'Mondan Nathanael Tarigan', 'Tarigan', NULL, '1970-01-01', 'Laki-laki', NULL, '\'85217965962\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tambun', 'Griya Asri', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(113, 'Nella aginta pinem', 'Perangin-nangin', 'Bekasi', '1996-09-09', 'Perempuan', NULL, '\'\'', 'Nellaaginta@gmail.com', 'Perum griya yasa blok c 3 no 5-6', 'Bekasi', b'1', 'Pegawai Swasta', 'D3', 'Teknik industri', 'Politeknik Manufaktur ASTRA', 'Kompas gramedia', 'Nyanyi', '2011', 'Tambun', 'Griya Asri', '@nellapinem', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(114, 'Netty Joanna Vedora', 'Tarigan', 'Jakarta', '1995-02-11', 'Perempuan', NULL, '\'\'', 'joannavedora@gmail.com', 'Griya Asri 2 blok f6 No. 35. RT 002 RW 025', 'Bekasi', b'1', 'Pegawai Swasta', 'S1', 'Akuntansi', 'Universitas Gunadarma', 'PT. INDORENT', 'Berenang', '2012', 'Tambun', 'Griya Asri', '@yoan_tarigan', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(115, 'Ninsa Natalina Pinem', 'Perangin-nangin', NULL, '1970-01-01', 'Perempuan', NULL, '\'81219893550\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tambun', 'Griya Asri', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(116, 'Novelia Sinalsalisa Br Sebayang', 'Perangin-nangin', 'Medan', '1998-12-11', 'Perempuan', NULL, '\'\'', 'sbrsnovelia@gmail.com', 'Tridaya Indah Estate 1 blok C3 no.1', 'Bekasi', b'1', 'Mahasiswa', 'SMA/K', 'IPA', 'SMAN 2 Tambun selatan', '-', 'Jalan-jalan', '2016', 'Tambun', NULL, '@noveliasbrs', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(117, 'Novi Tri Debora br Kacaribu', 'Karo-karo', 'Bekasi', '1999-11-03', 'Perempuan', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, 'SMA/K', 'IPA', NULL, NULL, NULL, '2015', NULL, 'Griya Asri', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(118, 'Noviantri Emia', 'Ginting', 'Bekasi', '1999-11-26', 'Perempuan', NULL, '\'85800212761\'', 'emianoviantry@gmail.com', 'Perumahan Taman Wanasari Indah \n Blok F1 nomor 4', 'Bekasi', b'1', 'Mahasiswa', 'SMA/K', 'Teknik industri', 'SMA Negeri 1 Cibitung', 'Institut Teknologi Sumatera', 'Memasak', '2016', 'Tambun', 'Cibitung 2', '@emianov', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(119, 'Novita Natalia', 'Ginting', 'Medan', '2000-11-24', 'Perempuan', NULL, '\'81289428499\'', 'novitaginting5@gmail.com', 'Perumahan telaga harapan blok i6 no 6 Cikarang barat', 'Bekasi', b'1', 'Pelajar', 'SMA/K', 'IPA', 'SMAN 1 Cikarang Barat', NULL, 'Dengerin musik', '2018', 'Tambun', 'Cibitung 2', '@novitanatalia5', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(120, 'Octa Brema Ginting', 'Ginting', NULL, '1970-01-01', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tridaya', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(121, 'Octanisesa Br Tarigan', 'Tarigan', 'Bekasi', '2001-10-26', 'Perempuan', NULL, '\'\'', 'sesatarigan@gmail.com', 'Bekasi Griya Asri 2 Blok E2 No.84 RT.02 RW.27', 'Bekasi', b'1', 'Pelajar', 'SMP', 'IPS', 'SMP NEGERI 5 TAMBUN SELATAN', NULL, 'Bernyanyi dan bermain musik', '2018', 'Tambun', NULL, '@octanisesa', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(122, 'Oky Yusura Ginting', 'Ginting', NULL, '1970-01-01', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Papan Mas', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(123, 'Oscar Diyanta Ketaren', 'Karo-karo', 'Bekasi', '1997-11-07', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bandung', b'1', 'Mahasiswa', 'S1', 'Hukum', NULL, NULL, NULL, '2013', 'Tambun', 'Papan Mas', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(124, 'Pascal Markus Sembiring brahmana', 'Sembiring', 'Jakarta', '1997-03-21', 'Laki-laki', NULL, '\'81398000550\'', 'pascalbrahmana@gmail.com', 'Perumahan unggul graha permai', 'Bekasi', b'1', 'Mahasiswa', 'S1', 'Hukum Bisnis Investasi', 'Universitas Kristen Maranatha', 'Dirjen KI kemenkumham', '-', '2013', 'Tambun', 'Tridaya', '-', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(125, 'Paulus Printista Ginting', 'Ginting', 'Jakarta', '1996-10-26', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Magelang', b'1', 'Mahasiswa', 'S1', 'Konseling', NULL, NULL, NULL, '2014', NULL, 'Cibitung 1', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(126, 'Pranata Meliala', 'Sembiring', 'Jakarta', '1991-04-16', 'Laki-laki', NULL, '\'\'', 'pranatameliala@yahoo.co.id', 'Papanmas blok G 33 no.11', 'Bekasi', b'1', 'Wiraswasta', 'D3', 'Manajemen', 'Gunadarma', NULL, 'Bikin puisi', '2007', 'GKO', 'Papan Mas', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(127, 'Rasita Christy', 'Ginting', 'jakarta', '1993-01-18', 'Perempuan', NULL, '\'89686762546\'', 'rasitamunte@yahoo.com', 'Perum pondok tanah mas jl cempaka 2 blok d 15 no 1', 'Bekasi', b'1', 'Pegawai Swasta', 'D3', 'Manajemen Informatika', 'Bina Sarana Informatika', 'Kantor GBKP Jakarta Pusat', 'nyanyi', '2011', 'Tambun', 'Cibitung 1', '@rasitamunte', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(128, 'Rehmalem br sembiring', 'Sembiring', 'Berastagi', '2019-11-29', 'Perempuan', NULL, '\'\'', 'rehmalemsembirng123@gmail.com', 'Perumahan kartikawanasari', 'Bekasi', b'1', 'Pegawai Swasta', 'SMA/K', 'IPS', 'Swa Swasta Masehi Berastagi', 'Alfamidi', 'Membaca', '2016', 'Sugihen', NULL, '@rehmalem29', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(129, 'Reinando Sihombing', NULL, 'Bekasi', '1997-07-05', 'Laki-laki', NULL, '\'81261079096\'', NULL, NULL, 'Bekasi', b'1', NULL, 'SMA/K', 'Teknologi Komputer & Jaringan', NULL, NULL, NULL, '2013', NULL, 'Graha Prima', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(130, 'Reky Aditianta Ginting', 'Ginting', 'Bekasi', '2000-07-11', 'Laki-laki', NULL, '\'82211375270\'', NULL, NULL, 'Bekasi', b'1', NULL, 'SMA/K', 'IPS', NULL, NULL, NULL, '2016', NULL, 'Cibitung 2', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(131, 'Ria Valentina Br. Tarigan', 'Tarigan', 'Bekasi', '1999-02-14', 'Perempuan', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, 'SMA/K', NULL, NULL, NULL, NULL, '2014', NULL, 'Papan Mas', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(132, 'Rica Arapenta', 'Karo-karo', 'jakarta', '2002-06-10', 'Perempuan', NULL, '\'\'', 'ricara0610@gmail.com', 'Jl pendidikan no 122 rt 05 rw 05 tambun selatan', 'Bekasi', b'1', 'Pelajar', 'SMA/K', 'IPA', 'SMAN 7 Tambun Selatan', NULL, 'Baca novel', '2018', 'Tambun', 'Graha Prima', '@rica_arapenta', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(133, 'Rio Agres Tarigan', 'Tarigan', 'Bekasi', '2002-05-16', 'Laki-laki', NULL, '\'\'', 'riogans2134@gmail.com', 'Perum. Pesona gading L2 no 22', 'Bekasi', b'1', 'Pelajar', 'SMA/K', 'Mesin', 'SMK 11 Maret', NULL, 'Olahraga', '2018', 'Tambun', NULL, '@Riows_28', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(134, 'Robet Tanta', 'Ginting', 'Kabanjahe', '1992-11-30', 'Laki-laki', NULL, '\'0878-2059-4599\'', 'robetginting676@gmail.com', 'Cluster Pesona Jepang Blok AG6 no 6, Metland Cibitung', 'Bekasi', b'1', 'Pegawai Swasta', 'S1', 'Akuntansi', 'Atmajaya Yogyakarta', 'Unipack Indosystems', 'Menatap Senja', '2004', 'Tigabaru', 'Cibitung 2', '@robertgves', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(135, 'Romario Kaban', 'Karo-karo', 'Jakarta', '2000-04-27', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, 'S1', 'Universitas Budi Luhur', NULL, NULL, NULL, '2016', NULL, 'Graha Prima', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(136, 'Ronald Julianto Sembiring', 'Sembiring', 'Bekasi', '1999-07-31', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, 'SMA/K', 'IPS', NULL, NULL, NULL, '2015', NULL, 'Graha Prima', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(137, 'Sanitha Vera B Sembiring', 'Sembiring', 'Bekasi', '2002-11-01', 'Perempuan', NULL, '\'85770594829\'', 'sanita.vera@gmail.com', 'Griya Asri 2 blok H1 No 17', 'Bekasi', b'1', 'Pelajar', 'SMP', 'IPS', 'SMAN 1 Tambun Selatan', NULL, 'Nonton film', '2018', 'Tambun', 'Griya Asri', '@sanithavera_b', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(138, 'Sarivita Loka', 'Sembiring', 'Jakarta', '2002-12-17', 'Perempuan', NULL, '\'\'', 'sarivitalokasembiring@gmail.com', 'Taman tridaya indah 1 jl melati vii blok E6 no 3 tridaya sakti tambun selatan', 'Bekasi', b'1', 'Pelajar', 'SMA/K', 'IPA', 'SMAN 2 Tambun Selatan', NULL, 'Makan :v', '2018', 'Tambun', NULL, '@sarivitaloka_', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(139, 'Selvina Tawanta Brahmana', 'Sembiring', 'Bekasi', '1995-07-28', 'Perempuan', NULL, '\'87770560786\'', 'tawantaselvina@yahoo.co.id', 'Perum Graha Melasti Blok FB9 No. 23', 'Bekasi', b'1', 'Pegawai Swasta', 'D3', 'Teknik Kimia', 'Universitas Diponegoro', 'PT Sayap Mas Utama (Wings Corp)', 'Landek dan Rende', '2012', 'Tambun', 'Griya Asri', '@tawantaselvina', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(140, 'Septa Ristiani br Sitepu', 'Karo-karo', 'Sukajulu', '1998-09-06', 'Perempuan', NULL, '\'82126133106\'', 'septaristiyani@gmail.com', 'Perumahan taman raya', 'Bekasi', b'1', 'Pegawai Swasta', 'SMP', NULL, 'SMPN 1 Barusjahe', 'Rumah', 'Rende', '2018', 'Tambun', 'Papan Mas', '@septaristianisitepu', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(141, 'Setianus Ginting', 'Ginting', 'Bekasi', '1995-08-26', 'Laki-laki', NULL, '\'85781509564\'', 'tianginting406@gmail.com', 'Perum twitt blok f1 no 10 rt 6 RW 8 cibitung - bekasi', 'Bekasi', b'1', 'Pegawai Swasta', 'SMA/K', 'Teknik kendaraan ringan', 'SMA/K Yadika 13', 'PT sinar sosro cibitung', 'Renang, badminton, main game', '2013', 'Tambun', 'Cibitung 2', '@tianginting', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(142, 'Sheyla Egiavany Anastaysa', 'Karo-karo', 'Bekasi', '2001-08-11', 'Perempuan', NULL, '\'\'', 'sheylaaurai14@gmail.com', 'Kp. Poncol Sawah', 'Bekasi', b'1', 'Pelajar', 'SMA/K', NULL, 'SMAN 1 Cikarang Barat', NULL, 'Menyanyi dan wisata kuliner', '2018', 'Tambun', NULL, '@sheyla.egiavany11', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(143, 'Simon Pradipta Karo karo', 'Karo-karo', 'Bogor', '2001-05-01', 'Laki-laki', NULL, '\'81288162029\'', 'simonmacharona01@gmail.com', 'Jln raya kali cbl', 'Bekasi', b'1', 'Pelajar', 'SMA/K', 'IPS', 'SMAN 4 Tambun Selatan', NULL, 'Bermain bola', '2017', 'Tambun', 'Papan Mas', '@simon_pradipta', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(144, 'Sinta Marcelina Br. Tarigan', 'Tarigan', 'Bekasi', '1996-06-15', 'Perempuan', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', 'Pegawai Swasta', 'SMA/K', NULL, NULL, NULL, NULL, '2012', NULL, 'Cibitung 2', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(145, 'Siska Trisna Dewi br Sembiring', 'Sembiring', 'Kaban Jahe', '2002-01-09', 'Perempuan', NULL, '\'\'', 'siskatrisnads@gmail.com', 'jl teratai 3 c no 21 blok d 21', 'Bekasi', b'1', 'Pelajar', 'SMA/K', 'IPA', 'SMAN 1 Tambun Selatan', NULL, 'olahraga', '2018', 'Tambun', 'Cibitung 1', '@siskatrisnad', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(146, 'Sovia Lamanca', NULL, NULL, '1970-01-01', 'Perempuan', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(147, 'Sri Dani Chiota', 'Sembiring', 'Jakarta', '1997-04-11', 'Perempuan', NULL, '\'81298702337\'', 'sridanichiota@gmail.com', 'Griya asri 2 blok c2 nomor 49', 'Bekasi', b'1', 'Pegawai Swasta', 'SMA/K', 'IPS', 'SMAN 3 Tambun Selatan', 'PT. KDS', 'Nyanyi & olahraga', '2014', 'Tambun', 'Griya Asri', '@sridanichiota', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(148, 'Sri Dewi Sembiring', 'Sembiring', 'Jakarta', '2001-01-09', 'Perempuan', NULL, '\'89662221977\'', 'sridewiimut@gmail.com', 'Griya asri 2 blok i', 'Bekasi', b'1', 'Pelajar', 'SMA/K', 'Akuntasi', 'SMK 10 November', NULL, 'Membaca', '2017', 'Tambun', 'Griya Asri', '@Sridewi0109', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(149, 'Sri Junianti Ginting', 'Ginting', NULL, '1970-01-01', 'Perempuan', NULL, '\'89673172180\'', NULL, NULL, 'Bekasi', b'1', NULL, 'SMA/K', 'Akuntasi', NULL, NULL, NULL, '2016', 'Tambun', 'Graha Prima', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(150, 'Tania Neguita br. Bangun', 'Perangin-nangin', 'Bekasi', '2000-12-02', 'Perempuan', NULL, '\'82258795699\'', 'tania.neguita@yahoo.com', NULL, 'Bekasi', b'1', NULL, 'SMA/K', 'IPA', 'SMAN 1 Tambun Selatan', NULL, NULL, '2017', 'Tambun', 'Papan Mas', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL);
INSERT INTO `anggotas` (`id`, `nama`, `marga`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `keluarga`, `telepon`, `email`, `alamat`, `domisili`, `dengan_orangtua`, `pekerjaan`, `pendidikan`, `jurusan`, `sekolah`, `kantor`, `hobi`, `tahun_ngawan`, `lokasi_ngawan`, `sektor`, `instagram`, `status`, `deleted`, `deleted_at`, `deleted_by`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(151, 'Teja Chornelius Bangun', 'Perangin-nangin', 'Bekasi', '1999-11-07', 'Laki-laki', NULL, '\'\'', 'tejajaya03@gmail.com', 'Prum telaga harapan blok G 1 no 16. Cikarang Barat', 'Bekasi', b'1', 'Mahasiswa', 'SMA/K', 'IPS', 'SMAN 1 Cikarang Barat', 'Logistik', 'Futsal , makan ,membaca', '2016', 'Tambun', NULL, '@tejachorneliusbangun', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(152, 'Thovans Putra Kelana', 'Ginting', 'Jakarta', '1995-06-08', 'Laki-laki', NULL, '\'\'', 'ginting5000@gmail.com', 'Satria jaya permai blok A2 No.15 RT.001 RW.012', 'Bekasi', b'1', 'Pegawai Swasta', 'SMA/K', 'IPA', 'SMA Athena', NULL, 'OLAHRAGA', '2012', 'Tambun', 'Graha Prima', '@thovanputra', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(153, 'Tia Monica Br Tarigan', 'Tarigan', 'Bekasi', '1997-07-17', 'Perempuan', NULL, '\'89675506146\'', 'monicatarigannn@gmail.com', 'Jl.Gatot kaca 1 blok f1 no 1&2 (BTP)', 'Bekasi', b'1', 'Mahasiswa', 'SMA/K', 'Akuntansi', 'Universitas Persada Indonesia Y.A.I', NULL, 'Nyanyi,menari', '2014', 'Tambun', 'Papan Mas', '@monicatarigann', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(154, 'Valentino Lucas', NULL, NULL, '1970-01-01', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, 'SMA/K', NULL, NULL, NULL, NULL, '2018', 'Tambun', 'Tridaya', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(155, 'Venna br Ginting', 'Ginting', NULL, '1970-01-01', 'Perempuan', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, '2018', 'Tambun', NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(156, 'Vineza br. Ginting', 'Ginting', 'Jakarta', '2001-03-26', 'Perempuan', NULL, '\'81286516286\'', 'gintingvineza@gmail.com', 'Perum Depsos blkC5 no 17 Telaga Asih Cikarang Barat', 'Bekasi', b'1', 'Pelajar', 'SMA/K', 'Administrasi Perkantoran', 'SMKN 2 Cikarang Barat', NULL, 'Bernyanyi, Basket', '2017', 'Tambun', 'Cibitung 2', '@vineza2y', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(157, 'Vito Bastanta Tarigan', 'Tarigan', NULL, '1970-01-01', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, '2018', 'Tambun', 'Tridaya', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(158, 'Welsher Asbeta', NULL, NULL, '1970-01-01', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, '2018', 'Tambun', NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(159, 'Willem Benasimus Perangin angin', 'Perangin-nangin', 'Bekasi', '1997-06-18', 'Laki-laki', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, '2016', 'Tambun', NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(160, 'Wina Natalia br. Ginting', 'Ginting', NULL, '1970-01-01', 'Perempuan', NULL, '\'85311942500\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tambun', 'Bumi Lestari', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(161, 'Winda hestiyana br tarigan', 'Tarigan', 'Bekasi', '2000-08-09', 'Perempuan', NULL, '\'81296259038\'', 'hestyanawinda@gmail.con', 'Perumahan hasta graha blok 25 no 22 cibitung wanasari', 'Bekasi', b'1', 'Mahasiswa', 'SMA/K', 'IPS', 'SMAN 1 CIKARANG BARAT', NULL, 'Berenang', '2017', NULL, 'Papan Mas', '@windatarigan_55', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(162, 'Yana Anggraeni Br. Sembiring', 'Sembiring', NULL, '1970-01-01', 'Perempuan', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cibitung 1', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(163, 'Yesaya Sembiring', 'Sembiring', NULL, '1970-01-01', 'Perempuan', NULL, '\'81218432685\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Griya Asri', NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(164, 'Yesi Vinola br Bangun', 'Perangin-nangin', NULL, '1970-01-01', 'Perempuan', NULL, '\'\'', NULL, NULL, 'Bekasi', b'1', NULL, NULL, NULL, NULL, NULL, NULL, '2018', 'Tambun', NULL, NULL, NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL),
(165, 'Yopy pranata ginting', 'Ginting', 'Bekasi', '1997-09-03', 'Laki-laki', NULL, '\'\'', 'yopipranata09@gmail.com', 'Perumahan pondok tanah mas, jalan cempaka raya blok D15 NO 18 RT 006 RW 027 cibitung', 'Bekasi', b'1', 'Mahasiswa', 'SMA/K', 'Akuntansi', 'SMAN 8 Bekasi', NULL, 'Futsal', '2013', 'Tambun', 'Cibitung 1', '@mr.ginting9', NULL, b'0', NULL, NULL, '2019-07-01', NULL, '2019-07-01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `iuran_kas`
--

CREATE TABLE `iuran_kas` (
  `id` int(11) NOT NULL,
  `id_anggota` int(10) DEFAULT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `nominal` int(10) NOT NULL,
  `tahun` int(5) NOT NULL,
  `keterangan` varchar(3000) DEFAULT NULL,
  `deleted` bit(1) DEFAULT b'0',
  `deleted_at` date DEFAULT NULL,
  `deleted_by` varchar(10) DEFAULT NULL,
  `created_at` date NOT NULL,
  `created_by` varchar(10) DEFAULT NULL,
  `updated_at` date NOT NULL,
  `updated_by` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iuran_kas`
--

INSERT INTO `iuran_kas` (`id`, `id_anggota`, `tanggal_pembayaran`, `nominal`, `tahun`, `keterangan`, `deleted`, `deleted_at`, `deleted_by`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 38, '2019-07-02', 120000, 2019, NULL, b'0', NULL, NULL, '2019-07-02', NULL, '2019-07-02', NULL),
(2, 82, '2019-07-02', 120000, 2019, NULL, b'0', NULL, NULL, '2019-07-02', NULL, '2019-07-02', NULL),
(3, 25, '2019-07-02', 100000, 2019, NULL, b'0', NULL, NULL, '2019-07-02', NULL, '2019-07-02', NULL),
(4, 14, '2019-07-02', 100000, 2019, NULL, b'0', NULL, NULL, '2019-07-02', NULL, '2019-07-02', NULL),
(5, 4, '2019-07-02', 60000, 2019, NULL, b'0', NULL, NULL, '2019-07-02', NULL, '2019-07-02', NULL),
(6, 46, '2019-07-02', 60000, 2019, NULL, b'0', NULL, NULL, '2019-07-02', NULL, '2019-07-02', NULL),
(7, 102, '2019-07-02', 40000, 2019, NULL, b'0', NULL, NULL, '2019-07-02', NULL, '2019-07-02', NULL),
(8, 21, '2019-07-02', 25000, 2019, NULL, b'0', NULL, NULL, '2019-07-02', NULL, '2019-07-02', NULL),
(9, 35, '2019-07-02', 20000, 2019, NULL, b'0', NULL, NULL, '2019-07-02', NULL, '2019-07-02', NULL),
(10, 9, '2019-07-02', 20000, 2019, NULL, b'0', NULL, NULL, '2019-07-02', NULL, '2019-07-02', NULL),
(11, 73, '2019-07-02', 20000, 2019, NULL, b'0', NULL, NULL, '2019-07-02', NULL, '2019-07-02', NULL),
(12, 139, '2019-07-02', 18000, 2019, NULL, b'0', NULL, NULL, '2019-07-02', NULL, '2019-07-02', NULL);

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

SELECT SUM(nominal) into total_lama from total_iuran_kas where id_anggota = NEW.id_anggota; 

SELECT count(*) INTO ada FROM total_iuran_kas where id_anggota = NEW.id_anggota and deleted = 0 AND tahun = NEW.tahun;

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
  `tanggal_operasional` date NOT NULL,
  `nominal` int(10) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `total_iuran_kas`
--

CREATE TABLE `total_iuran_kas` (
  `id` int(11) NOT NULL,
  `id_anggota` int(10) DEFAULT NULL,
  `nominal` int(10) NOT NULL,
  `tahun` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_iuran_kas`
--

INSERT INTO `total_iuran_kas` (`id`, `id_anggota`, `nominal`, `tahun`) VALUES
(1, 38, 120000, 2019),
(2, 82, 120000, 2019),
(3, 25, 100000, 2019),
(4, 14, 100000, 2019),
(5, 4, 60000, 2019),
(6, 46, 60000, 2019),
(7, 102, 40000, 2019),
(8, 21, 25000, 2019),
(9, 35, 20000, 2019),
(10, 9, 20000, 2019),
(11, 73, 20000, 2019),
(12, 139, 18000, 2019);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `total_iuran_kas`
--
ALTER TABLE `total_iuran_kas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;
--
-- AUTO_INCREMENT for table `iuran_kas`
--
ALTER TABLE `iuran_kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kantin`
--
ALTER TABLE `kantin`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `total_iuran_kas`
--
ALTER TABLE `total_iuran_kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
