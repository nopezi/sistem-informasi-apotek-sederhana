-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 Mei 2018 pada 15.21
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `habibi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_obat`
--

CREATE TABLE `data_obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(225) NOT NULL,
  `harga_obat` decimal(15,0) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_obat`
--

INSERT INTO `data_obat` (`id_obat`, `nama_obat`, `harga_obat`, `keterangan`) VALUES
(5, 'A-B VASK TABLET 10 MG', '363000', 'TABLET 10 MG X 30 BIJI.'),
(6, 'A-B VASK TABLET 5 MG', '208725', 'TABLET 5 MG X 30 BIJI.'),
(7, 'A-D PLEX ORAL DROPS', '10286', 'TETES 15 ML.	'),
(9, 'ABAJOS CAPSULE', '110286', 'KAPSUL 10 X 10 S	'),
(10, 'ABBOTIC DRY SYRUP 125 MG/5 ML 30 ML', '124630', 'DRY SIRUP 125 MG/5 ML X 30 ML'),
(11, 'ABBOTIC DRY SYRUP 125 MG/5 ML 60 ML', '199529', 'DRY SIRUP 125 MG/5 ML X 60 ML.'),
(12, 'ABBOTIC GRANULES 250MG', '260513', '50 ML\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(225) NOT NULL,
  `jk` char(10) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `tgl_lhr` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nama_pegawai`, `jk`, `alamat`, `tgl_lhr`) VALUES
(1, 'habibi', 'lelaki', 'gunung kidul', '1994-12-01'),
(2, 'putra', 'Laki-laki', 'bantul. jogjakarta', '1994-10-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `harga_obat` int(11) NOT NULL,
  `jumlah_obat` int(11) NOT NULL,
  `alamat` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_transaksi`
--

INSERT INTO `data_transaksi` (`id_transaksi`, `nama_pelanggan`, `nama_obat`, `harga_obat`, `jumlah_obat`, `alamat`) VALUES
(1, 'kholid', 'betadin', 10000, 5, 'jogjakarta'),
(2, 'sugiono', 'oralit', 15000, 2, 'sleman, yogyakarta'),
(22, 'paijo', 'A-B VASK TABLET 10 MG', 363000, 15, 'bantul, yogyakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_obat`
--
ALTER TABLE `data_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_obat`
--
ALTER TABLE `data_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
