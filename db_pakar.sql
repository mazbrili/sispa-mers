-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 10:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `tingkat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `email`, `nohp`, `tingkat`) VALUES
(1, 'Admin', 'admin', 'root', 'admin@sp.com', '0812344423', 'admin'),
(7, 'Buntas Nugrohadi', 'buntas', 'kucing,123', 'buntas@yahoo.com', 'nohp', 'teknisi');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id_diagnosa` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `gejala` text NOT NULL,
  `penyakit` varchar(250) NOT NULL,
  `nilai` varchar(50) NOT NULL,
  `persentase` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ds_aturan`
--

CREATE TABLE `ds_aturan` (
  `id` int(11) NOT NULL,
  `id_kerusakan` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `ds` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ds_aturan`
--

INSERT INTO `ds_aturan` (`id`, `id_kerusakan`, `id_gejala`, `ds`) VALUES
(1, 4, 1, 0.9),
(2, 4, 7, 0.8);

-- --------------------------------------------------------

--
-- Table structure for table `ds_gejala`
--

CREATE TABLE `ds_gejala` (
  `id` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ds_gejala`
--

INSERT INTO `ds_gejala` (`id`, `kode`, `nama`) VALUES
(1, '', 'Komputer tidak bisa menyala'),
(2, '', 'Komputer sering hang atau crash'),
(3, '', 'Blue screen of death (BSOD)'),
(4, '', 'Perangkat keras tidak terdeteksi'),
(5, '', 'Penurunan performa komputer, terasa lambat'),
(6, '', 'Komputer terasa melambat, terutama saat membuka file'),
(7, '', 'Komputer sering mati sendiri'),
(8, '', 'Waktu boot lama'),
(9, '', 'Muncul bunyi aneh mendenting atau tek-tek'),
(10, '', 'File/folder tidak bisa dibuka'),
(11, '', 'File tidak bisa dibuka atau isinya kacau'),
(12, '', 'File hilang dan tidak ada di recycle bin'),
(13, '', 'Drive C/D hilang/tidak terbaca'),
(14, '', 'Komputer restart sendiri'),
(15, '', 'Terjadi kerusakan komponen secara bergantian'),
(16, '', 'Suhu PC/Notebook panas'),
(17, '', 'Tombol keyboard tidak respon'),
(18, '', 'Selalu salah dalam memasukkan password'),
(19, '', 'Lampu indikator layar menyala, layar gelap'),
(20, '', 'Ada garis vertikal/horizontal di layar yang tetap posisinya'),
(21, '', 'Layar menampilkan warna abnormal');

-- --------------------------------------------------------

--
-- Table structure for table `ds_kerusakan`
--

CREATE TABLE `ds_kerusakan` (
  `id` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kett` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ds_kerusakan`
--

INSERT INTO `ds_kerusakan` (`id`, `kode`, `nama`, `kett`) VALUES
(1, '', 'Prosesor Bermasalah', 'Prosesor mengalami kerusakan'),
(2, '', 'Motherboard rusak', 'Motherboard mengalami kerusakan'),
(3, '', 'Monitor Rusak', 'Layar monitor Rusak'),
(4, '', 'Power supply rusak', 'Power Suppy  rusak'),
(5, '', 'Harddisk rusak', 'Hardisk Rusak'),
(6, '', 'RAM/Memory Rusak', 'Memory rusak'),
(7, '', 'USB Port rusak', 'USB port mengalami kerusakan'),
(8, '', 'Display port/Kabel bermasalah', 'Port display/kabel mengalami kerusakan'),
(9, '', 'Keyboard rusak', 'Keyboard mengalami kerusakan'),
(10, '', 'Mouse Rusak', 'Mouse mengalami kerusakan'),
(11, '', 'Kipas casing rusak', 'Kipas casing tidak berputar');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `id_admin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `nama`, `tgl_lahir`, `id_admin`) VALUES
(19, 'mas jokp', '2024-02-05', 7);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `gejala` text NOT NULL,
  `penyakit` varchar(200) NOT NULL,
  `nilai` varchar(20) NOT NULL,
  `persentase` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indexes for table `ds_aturan`
--
ALTER TABLE `ds_aturan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penyakit` (`id_kerusakan`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- Indexes for table `ds_gejala`
--
ALTER TABLE `ds_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ds_kerusakan`
--
ALTER TABLE `ds_kerusakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `id_client` (`id_client`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ds_aturan`
--
ALTER TABLE `ds_aturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ds_gejala`
--
ALTER TABLE `ds_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ds_kerusakan`
--
ALTER TABLE `ds_kerusakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ds_aturan`
--
ALTER TABLE `ds_aturan`
  ADD CONSTRAINT `ds_aturan_ibfk_1` FOREIGN KEY (`id_kerusakan`) REFERENCES `ds_kerusakan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ds_aturan_ibfk_2` FOREIGN KEY (`id_gejala`) REFERENCES `ds_gejala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `riwayat_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
