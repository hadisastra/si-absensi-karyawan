-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 12:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abs_04`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi_karyawan`
--

CREATE TABLE `absensi_karyawan` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `hadir` varchar(10) NOT NULL,
  `tidak_hadir` varchar(100) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `jam_datang` varchar(20) NOT NULL,
  `jam_pulang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi_karyawan`
--

INSERT INTO `absensi_karyawan` (`nik`, `nama`, `jenis_kelamin`, `hadir`, `tidak_hadir`, `jabatan`, `jam_datang`, `jam_pulang`) VALUES
('17678299', 'Hinata', 'Perempuan', 'YA', 'No', 'Staf Admin', '08.00', '17.00'),
('17997778', 'Gojou', 'Laki-Laki', 'YA', 'No', 'Pergudangan', '08.00', '17.00'),
('232567643543', 'Hinata', 'Perempuan', 'Tidak', 'Sakit Hati', 'Staf Admin', '-', '-'),
('45323676576', 'Hadi Sastra', 'Laki-Laki', 'YA', 'No', 'Manajer', '08.00', '17.00'),
('89674678', 'IKA', 'Laki-Laki', 'Tidak', 'Izin Acara Keluarga', 'Pergudangan', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `masuk` varchar(20) NOT NULL,
  `keluar` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`hari`, `tanggal`, `kelas`, `masuk`, `keluar`, `status`) VALUES
('Senin', '2022-01-05', 'Reguler', '08.00', '17-00', 'Aktif'),
('Selasa', '2022-01-05', 'Reguler', '08.00', '17-00', 'Aktif'),
('Rabu', '2022-01-05', 'Reguler', '08.00', '17-00', 'Aktif'),
('Kamis', '2022-01-05', 'Reguler', '08.00', '17-00', 'Aktif'),
('Jumat', '2022-01-05', 'Reguler', '08.00', '16.00', 'Aktif'),
('Sabtu', '2022-01-05', 'Reguler', '08.00', '16.00', 'Aktif'),
('Minggu', '2022-01-05', 'Khusus', '08.00', '12.00', 'Libur');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nik` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `agama` varchar(11) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nik`, `nama`, `pendidikan`, `jabatan`, `status`, `agama`, `jenis_kelamin`, `alamat`, `no_telepon`) VALUES
('17678299', 'Hinata', 'S1', 'Staf Admin', 'Aktif', 'Islam', 'Laki-Laki', 'Tokyo', '021757899000'),
('17997778', 'Gojou', 'S1', 'Pergudangan', 'Aktif', 'Islam', 'Laki-Laki', 'Tokyo', '82176688000'),
('18220689', 'IKA', 'S1', 'Pergudangan', 'Aktif', 'Islam', 'Perempuan', 'California', '324325354666'),
('917891', 'Hadi Sastra', 'S1', 'Manajer', 'Aktif', 'Islam', 'Laki-Laki', 'California', '082127819');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'devk@gmail.com', 'Developer AMC', 1, 'Staff Kepaniteraan Hukum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi_karyawan`
--
ALTER TABLE `absensi_karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
