-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2018 at 05:16 PM
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
  `tgl_surat` date NOT NULL,
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
('002/XI/2018', 1367318650115691, '2018-08-11', 2, 'Selasa', '08:50', 31257815618365913, 3173041010920016, 'admin'),
('009-2018-001', 3171020803940002, '2018-08-10', 3, 'Senin', '10', 3173041010920016, 3301051307970004, 'admin'),
('009/VII/2018', 32153151932679247, '2018-08-10', 1, 'Senin', '18:00', 3171635981365891, 3173041010920016, 'admin');

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

--
-- Dumping data for table `t_keterangan`
--

INSERT INTO `t_keterangan` (`no_surat`, `id_penduduk`, `tgl_surat`, `perihal`, `keterangan`, `input_by`) VALUES
('009/VII/2018', 3171635981365891, '2018-08-10', 'Test', 'Test', 'admin'),
('12312321', 3173040705000006, '2018-08-10', 'Coba', 'Coba', 'admin'),
('12756031671', 3173041010920016, '2018-08-10', 'Coba', 'Coba', 'admin'),
('Test', 31257815618365913, '2018-08-10', 'Test', 'Test', 'admin');

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
(1367318650115691, 'Kalyssa Innara Putri', 'Jakarta', '2018-08-07', 'Perempuan', 'Islam', 'Jakarta', 'Tanah Sereal', 'Tambora', 'Belum Menikah', 'Karyawan', 'WNI'),
(3171020803940002, 'Muhammad Zacky Ramadhan', 'Jakarta', '1994-03-08', 'Laki-laki', 'Belum Menikah', 'Jl. Pisangan Batu', 'Mangga Dua Selatan', 'Sawah Besar', 'Islam', 'Pelajar', 'WNI'),
(3171635981365891, 'Tiara', 'Jakarta', '2018-08-15', 'Perempuan', 'Islam', 'Jakarta', 'Tanah Sereal', 'Tambora', 'Menikah', 'Ibu Rumah Tangga', 'WNI'),
(3173040705000006, 'Tezar Tri Handika', 'Jakarta', '2000-05-07', 'Laki-laki', 'Islam', 'Jl. Gg. Vanilli No.19f Rt.010 Rw.05', 'Tanah Sereal', 'Tambora', 'Belum Menikah', 'Pelajar', 'WNI'),
(3173041010920016, 'Haviz Indra Maulana', 'Jakarta', '1992-10-10', 'Laki-laki', 'Islam', 'GG.Vanilly No.19F', 'Tanah Sereal', 'Tambora', 'Menikah', 'Mahasiswa', 'WNI'),
(3174010310970002, 'Muhamad Rizky', 'Jakarta', '1997-10-03', 'Laki-laki', 'Islam', 'Jl. Kp Melayu Kecil 1 No 85', 'Bukit Duri', 'Tebet', 'Belum Menikah', 'PNS', 'WNI'),
(3301051307970004, 'Yugi Setiawan', 'Cilacap', '1997-07-13', 'Laki-laki', 'Islam', 'Jl. Pejompongan Dalam No.2A', 'Bendungan Hilir', 'Tanah Abang', 'Belum Menikah', 'Karywan Swasta', 'WNI'),
(31257815618365913, 'Dian Ratna Sari', 'Jakarta', '1995-11-27', 'Perempuan', 'Islam', 'Jakarta', 'Tanah Sereal', 'Tambora', 'Menikah', 'Karyawan Swasta', 'WNI'),
(32153151932679247, 'Devan Dirgantara Putra', 'Jakarta', '2018-08-07', 'Laki-laki', 'Islam', 'Jakarta', 'Tanah Sereal', 'Tambora', 'Belum Menikah', 'Belum Bekerja', 'WNI');

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
('002', 'Indra Brawijaya', 'Bogor', '1980-10-10', 'Bojong Gede', 'Laki-laki', '08123412512', 'Kades', 'Aktif'),
('003', 'Dian Ratna Sari', 'Jakarta', '2018-08-10', 'Jakarta', 'Perempuan', '081355754092', 'Staff', 'Aktif'),
('123123', 'Haviz Indra Maulana', 'Jakarta', '2018-08-10', 'Jakarta', 'Laki-laki', '081355754092', 'Analyst', 'Aktif'),
('1513513513', 'Tezar Tri Handika', 'Jakarta', '2018-08-10', 'Jakarta', 'Laki-laki', '081355754092', 'Staff', 'Aktif');

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
