-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 02:52 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faktur`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nama`, `username`, `password`, `foto`, `id`) VALUES
('tazkia', 'tazkia', '8e9aa1f6e182a72b988bf69aabc0362a', 'tazkia.jpg', 1),
('pariyem', 'pariyem', 'fa98d13ebbf1f4d0a4e665b693fdfe7e', '', 2),
('ayuna', 'ayuna', '41ac64af15eb8fb9ac9b33334b25a9a0', 'ayu.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `pembeli` varchar(50) NOT NULL,
  `nm_brg` varchar(50) NOT NULL,
  `jml_brg` varchar(50) NOT NULL,
  `hrg_brg` varchar(50) NOT NULL,
  `hrg_satuan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `PPN` varchar(50) NOT NULL,
  `DP` varchar(50) NOT NULL,
  `NO_HP` varchar(50) NOT NULL,
  `id_faktur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `pembeli` varchar(50) NOT NULL,
  `nm_brg` varchar(500) NOT NULL,
  `jml_brg` varchar(100) NOT NULL,
  `hrg_satuan` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `PPN` varchar(100) NOT NULL,
  `DP` varchar(100) NOT NULL,
  `NO_HP` varchar(100) NOT NULL,
  `total_harga` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `nm_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`pembeli`, `nm_brg`, `jml_brg`, `hrg_satuan`, `alamat`, `PPN`, `DP`, `NO_HP`, `total_harga`, `id`, `nm_user`) VALUES
('PT ORACLE', 'PC Komputer', '1', '2500000', 'Jl. Bumi Manti 3, Way Halim', '10', '500000', '08978950547', '2250000', 8, 'Adi Yudayana');

-- --------------------------------------------------------

--
-- Table structure for table `penagihan`
--

CREATE TABLE `penagihan` (
  `pembeli` varchar(50) NOT NULL,
  `nm_brg` varchar(500) NOT NULL,
  `jml_brg` varchar(100) NOT NULL,
  `hrg_satuan` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `PPN` varchar(100) NOT NULL,
  `DP` varchar(100) NOT NULL,
  `NO_HP` varchar(100) NOT NULL,
  `total_harga` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `nm_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penagihan`
--

INSERT INTO `penagihan` (`pembeli`, `nm_brg`, `jml_brg`, `hrg_satuan`, `alamat`, `PPN`, `DP`, `NO_HP`, `total_harga`, `id`, `nm_user`) VALUES
('PT. Angkasa Pura I', 'Printer</br>laptop', '1', '1000000', 'Jl. Kota Baru Bandar Kemayoran Blok B12 ', '2', '200000', '098764765', '820000', 7, 'Adam Panji');

-- --------------------------------------------------------

--
-- Table structure for table `penawaran`
--

CREATE TABLE `penawaran` (
  `pembeli` varchar(50) NOT NULL,
  `nm_brg` varchar(500) NOT NULL,
  `jml_brg` varchar(100) NOT NULL,
  `hrg_satuan` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `PPN` varchar(100) NOT NULL,
  `DP` varchar(100) NOT NULL,
  `NO_HP` varchar(100) NOT NULL,
  `total_harga` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `nm_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penawaran`
--

INSERT INTO `penawaran` (`pembeli`, `nm_brg`, `jml_brg`, `hrg_satuan`, `alamat`, `PPN`, `DP`, `NO_HP`, `total_harga`, `id`, `nm_user`) VALUES
('PT YU-ONE', 'Laptop ASUS', '2', '2000000', 'Jl. Way Kandis, Bandar Lampung', '10', '1000000', '08767689876', '3400000', 25, 'Zaidan'),
('fgjagfjsa', 'cara kerja mpdf adalah men-convert html menjadi pdf, sehingga kita tidak perlu lagi membuat layout report yang ingin ditampilkan, karena report akan ditampilkan sesuai file html dan css yg kita buat.', '1', '123', '', '1', '100', '23112', '24.23', 28, 'sass');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `nama` varchar(50) NOT NULL,
  `serial_number` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`nama`, `serial_number`, `id`, `keterangan`) VALUES
('Laptop ASUS', '22', 4, 'Valid'),
('kamera', 'A3', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `srt_td_lunas`
--

CREATE TABLE `srt_td_lunas` (
  `pembeli` varchar(50) NOT NULL,
  `nm_brg` varchar(500) NOT NULL,
  `jml_brg` varchar(100) NOT NULL,
  `hrg_satuan` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `PPN` varchar(100) NOT NULL,
  `DP` varchar(100) NOT NULL,
  `NO_HP` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `total_harga` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `nm_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `srt_td_lunas`
--

INSERT INTO `srt_td_lunas` (`pembeli`, `nm_brg`, `jml_brg`, `hrg_satuan`, `alamat`, `PPN`, `DP`, `NO_HP`, `status`, `total_harga`, `id`, `nm_user`) VALUES
('PT. Angkasa Pura II', 'Komputer', '1', '1000000', 'JL Pajajaran, No. 156, Bandara Husein Sastranegara', '10', '100000', '0857868686', 'Lunas', '1000000', 2, 'Fahmi');

-- --------------------------------------------------------

--
-- Table structure for table `surat_jalan`
--

CREATE TABLE `surat_jalan` (
  `pembeli` varchar(50) NOT NULL,
  `jml_brg` varchar(100) NOT NULL,
  `NO_HP` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `total_harga` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `nm_brg` varchar(255) NOT NULL,
  `nm_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_jalan`
--

INSERT INTO `surat_jalan` (`pembeli`, `jml_brg`, `NO_HP`, `alamat`, `total_harga`, `id`, `nm_brg`, `nm_user`) VALUES
('PT NETWORK', '3', '08976574532', 'Jl. Teuku Umar No. 112 Tanjung Karang, Bandar Lampung', '8500000', 9, 'Printer Ink Jet', '');

-- --------------------------------------------------------

--
-- Table structure for table `surat_service`
--

CREATE TABLE `surat_service` (
  `pembeli` varchar(50) NOT NULL,
  `nm_brg` varchar(500) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hrg_satuan` varchar(100) NOT NULL,
  `jml_brg` varchar(100) NOT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `total_harga` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `nm_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_service`
--

INSERT INTO `surat_service` (`pembeli`, `nm_brg`, `alamat`, `hrg_satuan`, `jml_brg`, `keterangan`, `total_harga`, `id`, `no_hp`, `nm_user`) VALUES
('PT Warna ', 'Hay agan agan , biasanya di nativ saya pake MPDF b', 'Jl. Garuda No. 112 Denpasar', '3700000', '3', 'Baru', '11100000', 2, '08123434765', 'Sara Mariski');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nama`, `no_hp`, `alamat`, `email`, `keterangan`, `id`) VALUES
('Tazkia Karima', '08978950547', '', 'tatakia07@gmail.com', 'Kerja Praktik', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penagihan`
--
ALTER TABLE `penagihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penawaran`
--
ALTER TABLE `penawaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `srt_td_lunas`
--
ALTER TABLE `srt_td_lunas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_jalan`
--
ALTER TABLE `surat_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_service`
--
ALTER TABLE `surat_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penagihan`
--
ALTER TABLE `penagihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penawaran`
--
ALTER TABLE `penawaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `srt_td_lunas`
--
ALTER TABLE `srt_td_lunas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_jalan`
--
ALTER TABLE `surat_jalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `surat_service`
--
ALTER TABLE `surat_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
