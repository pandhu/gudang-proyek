-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2015 at 07:15 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gudang proyek`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`) VALUES
('leonardo.kevin');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `Username` varchar(30) NOT NULL,
  `No_Identitas` char(16) NOT NULL,
  `Nama` varchar(32) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Email` varchar(32) NOT NULL,
  `No_Telepon` varchar(12) NOT NULL,
  `Kota_Asal` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Username`, `No_Identitas`, `Nama`, `Tanggal_Lahir`, `Email`, `No_Telepon`, `Kota_Asal`) VALUES
('afi.nafiah', '1234567891011121', 'Afi Nafiah', '2015-04-09', 'afi.afi@ui.ac.id', '085671234567', 'Jakarta Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE IF NOT EXISTS `developer` (
  `Username` varchar(30) NOT NULL,
  `Npm` char(10) NOT NULL,
  `Nama` varchar(32) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `No_Telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`Username`, `Npm`, `Nama`, `Email`, `No_Telepon`) VALUES
('pandhu.hutomo', '1206209923', 'Pandhu Hutomo', 'pandhu.hutomo@ui.ac.id', '081234567891');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `Id` int(11) NOT NULL,
  `Id_Thread` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Isi_Komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`Id`, `Id_Thread`, `Username`, `Isi_Komentar`) VALUES
(1, 1, 'pandhu.hutomo', 'saya berminat mengerjakan project ini');

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

CREATE TABLE IF NOT EXISTS `moderator` (
  `Username` varchar(30) NOT NULL,
  `Nama` varchar(32) NOT NULL,
  `Email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moderator`
--

INSERT INTO `moderator` (`Username`, `Nama`, `Email`) VALUES
('citra.andina', 'Citra Andina', 'citraandinap@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `Id` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Tanggal_posting` date NOT NULL,
  `Isi_pengumuman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`Id`, `Username`, `Tanggal_posting`, `Isi_pengumuman`) VALUES
(1, 'citra.andina', '2015-03-29', 'PENGUMUMAN!!!');

-- --------------------------------------------------------

--
-- Table structure for table `super_user`
--

CREATE TABLE IF NOT EXISTS `super_user` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super_user`
--

INSERT INTO `super_user` (`Username`, `Password`, `Role`) VALUES
('afi.nafiah', 'afiNafiah', 'Client'),
('citra.andina', 'hahaha12345', 'Moderator'),
('leonardo.kevin', 'leogantengsekali', 'Admin'),
('pandhu.hutomo', 'pandhuuu', 'Developer');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE IF NOT EXISTS `testimoni` (
  `Id` int(11) NOT NULL,
  `Username_Developer` varchar(30) NOT NULL,
  `Username_Client` varchar(30) NOT NULL,
  `Id_Thread` int(11) NOT NULL,
  `KetepatanWaktu_Rating` int(1) NOT NULL,
  `Komunikasi_Rate` int(1) NOT NULL,
  `Keakuratan-Rate` int(1) NOT NULL,
  `Isi_Testimoni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`Id`, `Username_Developer`, `Username_Client`, `Id_Thread`, `KetepatanWaktu_Rating`, `Komunikasi_Rate`, `Keakuratan-Rate`, `Isi_Testimoni`) VALUES
(1, 'pandhu.hutomo', 'afi.nafiah', 1, 3, 2, 4, 'yaaa good ');

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE IF NOT EXISTS `thread` (
  `Id` int(11) NOT NULL,
  `Judul` varchar(32) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Tanggal_Deadline` date NOT NULL,
  `Tanggal_Posting` date NOT NULL,
  `Lokasi` varchar(32) NOT NULL,
  `Harga` varchar(9) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`Id`, `Judul`, `Username`, `Tanggal_Deadline`, `Tanggal_Posting`, `Lokasi`, `Harga`, `Deskripsi`, `Status`) VALUES
(1, 'Project Super', 'afi.nafiah', '2015-05-09', '2015-03-29', 'Bali', '65000000', 'lalala yeyeye akaka hahaha jadiadfbjf', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `developer`
--
ALTER TABLE `developer`
 ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`Id`,`Id_Thread`,`Username`), ADD KEY `idThread_Thread` (`Id_Thread`), ADD KEY `username_Thread` (`Username`);

--
-- Indexes for table `moderator`
--
ALTER TABLE `moderator`
 ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
 ADD PRIMARY KEY (`Id`), ADD KEY `username_Pengumuman` (`Username`);

--
-- Indexes for table `super_user`
--
ALTER TABLE `super_user`
 ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
 ADD PRIMARY KEY (`Id`,`Username_Developer`,`Username_Client`), ADD KEY `usernameDeveloper_Testimoni` (`Username_Developer`), ADD KEY `usernameClient_Testimoni` (`Username_Client`), ADD KEY `idThread_Testimoni` (`Id_Thread`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
 ADD PRIMARY KEY (`Id`), ADD KEY `thread_client` (`Username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
ADD CONSTRAINT `admin_super_user` FOREIGN KEY (`Username`) REFERENCES `super_user` (`Username`);

--
-- Constraints for table `client`
--
ALTER TABLE `client`
ADD CONSTRAINT `client_SuperUser` FOREIGN KEY (`Username`) REFERENCES `super_user` (`Username`);

--
-- Constraints for table `developer`
--
ALTER TABLE `developer`
ADD CONSTRAINT `developer_SuperUser` FOREIGN KEY (`Username`) REFERENCES `super_user` (`Username`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
ADD CONSTRAINT `idThread_Thread` FOREIGN KEY (`Id_Thread`) REFERENCES `thread` (`Id`),
ADD CONSTRAINT `username_Thread` FOREIGN KEY (`Username`) REFERENCES `super_user` (`Username`);

--
-- Constraints for table `moderator`
--
ALTER TABLE `moderator`
ADD CONSTRAINT `moderator_super_user` FOREIGN KEY (`Username`) REFERENCES `super_user` (`Username`);

--
-- Constraints for table `pengumuman`
--
ALTER TABLE `pengumuman`
ADD CONSTRAINT `username_Pengumuman` FOREIGN KEY (`Username`) REFERENCES `moderator` (`Username`);

--
-- Constraints for table `testimoni`
--
ALTER TABLE `testimoni`
ADD CONSTRAINT `idThread_Testimoni` FOREIGN KEY (`Id_Thread`) REFERENCES `thread` (`Id`),
ADD CONSTRAINT `usernameClient_Testimoni` FOREIGN KEY (`Username_Client`) REFERENCES `client` (`Username`),
ADD CONSTRAINT `usernameDeveloper_Testimoni` FOREIGN KEY (`Username_Developer`) REFERENCES `developer` (`Username`);

--
-- Constraints for table `thread`
--
ALTER TABLE `thread`
ADD CONSTRAINT `thread_client` FOREIGN KEY (`Username`) REFERENCES `client` (`Username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
