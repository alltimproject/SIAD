-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 10, 2018 at 04:07 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siad`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_kelahiran`
--

CREATE TABLE `t_kelahiran` (
  `no_surat` varchar(20) NOT NULL,
  `id_penduduk` bigint(20) NOT NULL,
  `tgl_surat` datetime NOT NULL,
  `anak_ke` int(2) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `pukul` varchar(5) NOT NULL,
  `id_ibu` bigint(20) NOT NULL,
  `id_ayah` bigint(20) NOT NULL,
  `input_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kelahiran`
--

INSERT INTO `t_kelahiran` (`no_surat`, `id_penduduk`, `tgl_surat`, `anak_ke`, `hari`, `pukul`, `id_ibu`, `id_ayah`, `input_by`) VALUES
('009-2018-001', 3171020803940002, '2018-08-10 00:00:00', 3, 'Senin', '10', 3173041010920016, 3301051307970004, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `t_keterangan`
--

CREATE TABLE `t_keterangan` (
  `no_surat` varchar(20) NOT NULL,
  `id_penduduk` bigint(20) NOT NULL,
  `tgl_surat` date NOT NULL,
  `perihal` text NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `input_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_penduduk`
--

CREATE TABLE `t_penduduk` (
  `id_penduduk` bigint(20) NOT NULL,
  `nama_penduduk` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_penduduk`
--

INSERT INTO `t_penduduk` (`id_penduduk`, `nama_penduduk`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `alamat`, `kelurahan`, `kecamatan`, `status`, `pekerjaan`, `kewarganegaraan`) VALUES
(3171020803940002, 'Muhammad Zacky Ramadhan', 'Jakarta', '1994-03-08', 'Laki - Laki', 'Belum Menikah', 'Jl. Pisangan Batu', 'Mangga Dua Selatan', 'Sawah Besar', 'Islam', 'Pelajar', 'WNI'),
(3173041010920016, 'Haviz Indra Maulana', 'Jakarta', '1992-10-10', 'Laki - Laki', 'Islam', 'GG.Vanilly No.19F', 'Tanah Sereal', 'Tambora', 'Menikah', 'Mahasiswa', 'WNI'),
(3174010310970002, 'Muhamad Rizky', 'Jakarta', '1997-10-03', 'Laki - Laki', 'Islam', 'Jl. Kp Melayu Kecil 1 No 85', 'Bukit Duri', 'Tebet', 'Belum Menikah', 'PNS', 'WNI'),
(3301051307970004, 'Yugi Setiawan', 'Cilacap', '1997-07-13', 'Laki - Laki', 'Islam', 'Jl. Pejompongan Dalam No.2A', 'Bendungan Hilir', 'Tanah Abang', 'Belum Menikah', 'Karywan Swasta', 'WNI');

-- --------------------------------------------------------

--
-- Table structure for table `t_staff`
--

CREATE TABLE `t_staff` (
  `nip` varchar(20) NOT NULL,
  `nama_staff` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_staff`
--

INSERT INTO `t_staff` (`nip`, `nama_staff`, `tempat_lahir`, `tgl_lahir`, `alamat`, `jenis_kelamin`, `no_tlp`, `jabatan`, `status`) VALUES
('001', 'Muhamad Rizky', 'Jakarta', '1997-10-03', 'Jl. MElayu Kecil 1 No. 85', 'Laki-Laki', '081807135596', 'Staff', 'Aktif'),
('002', 'Indra Brawijaya', 'Bogor', '1980-10-10', 'Bojong Gede', 'Laki-laki', '08123412512', 'Kades', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `username` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`username`, `nip`, `level`, `password`, `last_login`) VALUES
('admin', '001', 'Admin', '704b037a97fa9b25522b7c014c300f8a', '2018-08-09 19:45:09'),
('kades', '002', 'Kades', '568288a732d239213912fafd35f49abd', '2018-08-09 22:16:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_kelahiran`
--
ALTER TABLE `t_kelahiran`
  ADD PRIMARY KEY (`no_surat`),
  ADD KEY `id_penduduk` (`id_penduduk`),
  ADD KEY `id_ibu` (`id_ibu`),
  ADD KEY `id_ayah` (`id_ayah`),
  ADD KEY `input_by` (`input_by`);

--
-- Indexes for table `t_keterangan`
--
ALTER TABLE `t_keterangan`
  ADD PRIMARY KEY (`no_surat`),
  ADD KEY `id_penduduk` (`id_penduduk`),
  ADD KEY `input_by` (`input_by`);

--
-- Indexes for table `t_penduduk`
--
ALTER TABLE `t_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indexes for table `t_staff`
--
ALTER TABLE `t_staff`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `nip` (`nip`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_kelahiran`
--
ALTER TABLE `t_kelahiran`
  ADD CONSTRAINT `t_kelahiran_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `t_penduduk` (`id_penduduk`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_kelahiran_ibfk_2` FOREIGN KEY (`id_ibu`) REFERENCES `t_penduduk` (`id_penduduk`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_kelahiran_ibfk_3` FOREIGN KEY (`id_ayah`) REFERENCES `t_penduduk` (`id_penduduk`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_kelahiran_ibfk_4` FOREIGN KEY (`input_by`) REFERENCES `t_user` (`username`) ON UPDATE CASCADE;

--
-- Constraints for table `t_keterangan`
--
ALTER TABLE `t_keterangan`
  ADD CONSTRAINT `t_keterangan_ibfk_1` FOREIGN KEY (`id_penduduk`) REFERENCES `t_penduduk` (`id_penduduk`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_keterangan_ibfk_2` FOREIGN KEY (`input_by`) REFERENCES `t_user` (`username`) ON UPDATE CASCADE;

--
-- Constraints for table `t_user`
--
ALTER TABLE `t_user`
  ADD CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `t_staff` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
