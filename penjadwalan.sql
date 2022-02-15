-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 01:45 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjadwalan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(25) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `satuan` int(1) NOT NULL,
  `stok_akhir` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `penggunaan_tahun` int(11) NOT NULL,
  `safety_stok` int(11) NOT NULL,
  `no_rak` varchar(25) DEFAULT NULL,
  `supplier` varchar(255) NOT NULL,
  `rop` int(11) NOT NULL,
  `eoq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `satuan`, `stok_akhir`, `harga`, `penggunaan_tahun`, `safety_stok`, `no_rak`, `supplier`, `rop`, `eoq`) VALUES
('B0001', 'Bola Futsal', 1, 196, 150000, 160, 40, '51', 'PT.Bola Murah', 56, 11),
('KD-0001', 'ASD', 1, 123, 12312, 23145, 21, 'we', 'PT.Sehat', 2494, 215);

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id` int(11) NOT NULL,
  `no_po` varchar(40) NOT NULL,
  `nama_barang` varchar(40) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status` varchar(40) NOT NULL,
  `tanggal` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id`, `no_po`, `nama_barang`, `jumlah`, `tujuan`, `keterangan`, `status`, `tanggal`, `user_id`) VALUES
(79, 'PO-C123', 'Sepatu Futsal', 1, 'Bagian Penjualan', '', 'Barang Sudah Dikirimkan', '2021-02-13 21:53:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(40) NOT NULL,
  `no_po` varchar(255) NOT NULL,
  `dipesan` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `status` varchar(40) NOT NULL,
  `tanggal` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id`, `nama_barang`, `no_po`, `dipesan`, `jumlah`, `asal`, `status`, `tanggal`, `user_id`) VALUES
(74, 'Cone Futsal', 'PO-S114', '50', 25, 'PT.Bola Murah', 'Retur', '2021-02-13 22:00:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `no_perjalanan` varchar(40) NOT NULL,
  `nama_rs` varchar(40) NOT NULL,
  `jarak` varchar(50) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `estimasi_beban` varchar(10) NOT NULL,
  `no_plat` varchar(255) NOT NULL,
  `nama_supir` varchar(40) NOT NULL,
  `urutan_tujuan` varchar(3) NOT NULL,
  `status` varchar(40) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `no_perjalanan`, `nama_rs`, `jarak`, `alamat`, `estimasi_beban`, `no_plat`, `nama_supir`, `urutan_tujuan`, `status`, `tanggal`) VALUES
(27, 'NP-210703001', 'RSU Bunda Aliyah Depok', '', 'Jl. Kartini No.2, Depok, Kec. Pancoran Mas, Kota Depok, Jawa', '500', 'B 1669 KXS', 'Lucky', '1', 'Selesai', '2021-07-03 12:36:11'),
(28, 'NP-210703002', 'RSU Bunda Aliyah Depok', '', 'Jl. Kartini No.2, Depok, Kec. Pancoran Mas, Kota Depok, Jawa', '500', 'B 1669 KXS', 'Lucky', '1', 'Selesai', '2021-07-03 12:43:30'),
(29, 'NP-210731001', 'RS OMNI Cikarang', '9 KM', 'Cibarusah Cikarang', '500 KG', 'B 1669 KXS', 'Lucky', '1', 'Selesai', '2021-07-31 21:55:36'),
(30, 'NP-210731002', 'RS OMNI Cikarang', '9 KM', 'Cibarusah Cikarang', '500 KG', 'B 1669 KXS', 'Lucky', '1', 'Selesai', '2021-07-31 22:05:08'),
(31, 'NP-210731003', 'RS OMNI Pekayon', '12 KM', 'Pekayon Bekasi', '200 KG', 'B 1669 KXS', 'Lucky', '2', 'Selesai', '2021-07-31 22:06:24'),
(32, 'NP-210731004', 'RS Premier', '8 KM', 'Jatinegara Jakarta', '500 KG', 'B 1567 KKS', 'Topan', '1', 'Selesai', '2021-07-31 23:14:00'),
(33, 'NP-210731005', 'RS Budi Asih', '19 KM', 'Cililitan Jakarta', '200 KG', 'B 1567 KKS', 'Topan', '2', 'Selesai', '2021-07-31 23:17:42'),
(34, 'NP-210731006', 'RS Otak', '30 KM', 'Cawang Jakarta', '200 KG', 'B 1567 KKS', 'Topan', '3', 'Selesai', '2021-07-31 23:18:20'),
(35, 'NP-210731007', 'Hermina Bekasi', '7 KM', 'Galaxy Bekasi', '300 KG', 'B 1669 KXS', 'Lucky', '1', 'Selesai', '2021-07-31 23:20:04'),
(36, 'NP-210731008', 'RS OMNI Pekayon', '12 KM', 'Pekayon Bekasi', '200 KG', 'B 1669 KXS', 'Lucky', '2', 'Selesai', '2021-07-31 23:20:28'),
(37, 'NP-210731009', 'RS Lemineral', '50 KM', 'Kalimalang Bekasi', '300 KG', 'B 1669 KXS', 'Lucky', '3', 'Selesai', '2021-07-31 23:21:04'),
(38, 'NP-210802001', 'TES VALIDASI', 'TES VALIDA', 'TES VALIDASI', 'TES VALIDA', 'B 1567 KKS', 'Topan', '1', 'Selesai', '2021-08-02 12:30:32'),
(39, 'NP-210803001', 'RS Budi Asih', '19 KM', 'Cililitan Jakarta', '200 KG', 'B 1630 KKS', 'Warsito', '2', 'Selesai', '2021-08-03 23:21:38'),
(40, 'NP-210804001', 'Rumah Sakit Langit', '36 KM', 'Jakarta Timur', '130 KG', 'B 1902 KKY', 'Muhammad Iqbal', '3', 'Selesai', '2021-08-04 00:06:44'),
(41, 'NP-210804002', 'Rumah Sakit Sehat Yahya Sentosa', '44 KM', 'Kedoya', '100 KG', 'B 1669 KXS', 'Lucky', '3', 'Selesai', '2021-08-04 16:34:27'),
(42, 'NP-210810001', 'RS OMNI Pekayon', '12 KM', 'Pekayon Bekasi', '200 KG', 'B 1630 KKS', 'Warsito', '2', 'Selesai', '2021-08-10 19:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(10) NOT NULL,
  `no_plat` varchar(255) NOT NULL,
  `nama_kendaraan` varchar(255) NOT NULL,
  `jenis_kendaraan` varchar(255) NOT NULL,
  `nama_supir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `no_plat`, `nama_kendaraan`, `jenis_kendaraan`, `nama_supir`) VALUES
(14, 'B 1669 KXS', 'Mitshubishi Fuso Engkel', 'Box Sedang', 'Lucky'),
(15, 'B 1963 KYX', 'Mitshubishi Fuso Engkel', 'Box Sedang', 'Gito'),
(16, 'B 1528 KYK', 'Mitshubishi Fuso Engkel', 'Box Sedang', 'Syarif'),
(17, 'B 1630 KKS', 'Mitshubishi Fuso Engkel Long', 'Box Besar', 'Warsito'),
(18, 'B 1695 KKS', 'Mitshubishi Fuso Engkel Long', 'Box Besar', 'Egi'),
(19, 'B 1694 KXS', 'Mitshubishi Fuso Engkel', 'Box Sedang', 'Sidik'),
(20, 'B 1567 KKS', 'Mitshubishi L300', 'Box Kecil', 'Topan'),
(21, 'B 1690 KXS', 'Mitshubishi Fuso Engkel', 'Box Sedang', 'Khalil'),
(22, 'B 1963 KXS', 'Mitshubishi Fuso Engkel', 'Box Sedang', 'Dimas'),
(23, 'B 1641 KKS', 'Isuzu Elf Engkel', 'Box Sedang', 'Arsono'),
(24, 'B 1603 KXS', 'Mitshubishi Fuso Engkel', 'Box Sedang', 'Andi'),
(25, 'B 1633 KXY', 'Isuzu Elf Engkell', 'Box Sedang', 'Edho'),
(26, 'B 1686 KXS', 'Mitshubishi Fuso Engkel', 'Box Sedang', 'Arifin '),
(27, 'B 1652 KXS', 'Mitshubishi L300', 'Box Sedang', 'Marno');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(10) NOT NULL,
  `no_perjalanan1` varchar(255) NOT NULL,
  `nama_rs` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_plat` varchar(255) NOT NULL,
  `nama_supir` varchar(255) NOT NULL,
  `beban_aktual` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `no_perjalanan1`, `nama_rs`, `alamat`, `no_plat`, `nama_supir`, `beban_aktual`, `status`, `tanggal`) VALUES
(25, 'NP-210703001', 'RSU Bunda Aliyah Depok', 'Jl. Kartini No.2, Depok, Kec. Pancoran Mas, Kota Depok, Jawa', 'B 1669 KXS', 'Lucky', '450 KG', 'Selesai', '2021-07-03 12:42:05'),
(26, 'NP-210703002', 'RSU Bunda Aliyah Depok', 'Jl. Kartini No.2, Depok, Kec. Pancoran Mas, Kota Depok, Jawa', 'B 1669 KXS', 'Lucky', '500', 'Selesai', '2021-07-15 17:23:59'),
(27, 'NP-210731001', 'RS OMNI Cikarang', 'Cibarusah Cikarang', 'B 1669 KXS', 'Lucky', '100', 'Selesai', '2021-07-31 21:57:51'),
(28, 'NP-210731002', 'RS OMNI Cikarang', 'Cibarusah Cikarang', 'B 1669 KXS', 'Lucky', '100', 'Selesai', '2021-07-31 22:16:25'),
(29, 'NP-210731003', 'RS OMNI Pekayon', 'Pekayon Bekasi', 'B 1669 KXS', 'Lucky', '100', 'Selesai', '2021-07-31 22:16:31'),
(30, 'NP-210731004', 'RS Premier', 'Jatinegara Jakarta', 'B 1567 KKS', 'Topan', '100', 'Selesai', '2021-07-31 23:39:55'),
(31, 'NP-210731005', 'RS Budi Asih', 'Cililitan Jakarta', 'B 1567 KKS', 'Topan', '200', 'Selesai', '2021-07-31 23:40:03'),
(32, 'NP-210731006', 'RS Otak', 'Cawang Jakarta', 'B 1567 KKS', 'Topan', '200', 'Selesai', '2021-07-31 23:40:16'),
(33, 'NP-210731007', 'Hermina Bekasi', 'Galaxy Bekasi', 'B 1669 KXS', 'Lucky', '100', 'Selesai', '2021-07-31 23:40:24'),
(34, 'NP-210731008', 'RS OMNI Pekayon', 'Pekayon Bekasi', 'B 1669 KXS', 'Lucky', '100', 'Selesai', '2021-07-31 23:40:32'),
(35, 'NP-210731009', 'RS Lemineral', 'Kalimalang Bekasi', 'B 1669 KXS', 'Lucky', '200', 'Selesai', '2021-07-31 23:40:40'),
(36, 'NP-210802001', 'TES VALIDASI', 'TES VALIDASI', 'B 1567 KKS', 'Topan', 'TES VALIDASI', 'Selesai', '2021-08-02 14:02:27'),
(37, 'NP-210803001', 'RS Budi Asih', 'Cililitan Jakarta', 'B 1630 KKS', 'Warsito', '150 KG', 'Selesai', '2021-08-03 23:21:56'),
(38, 'NP-210804001', 'Rumah Sakit Langit', 'Jakarta Timur', 'B 1902 KKY', 'Muhammad Iqbal', '150 KG', 'Selesai', '2021-08-04 00:07:09'),
(39, 'NP-210810001', 'RS OMNI Pekayon', 'Pekayon Bekasi', 'B 1630 KKS', 'Warsito', '33', 'Selesai', '2021-08-10 19:46:16'),
(40, 'NP-210804002', 'Rumah Sakit Sehat Yahya Sentosa', 'Kedoya', 'B 1669 KXS', 'Lucky', '500 KG', 'Selesai', '2021-08-12 18:03:49');

-- --------------------------------------------------------

--
-- Table structure for table `po_customer`
--

CREATE TABLE `po_customer` (
  `id` int(11) NOT NULL,
  `nomor_po` varchar(40) NOT NULL,
  `nama_barang` varchar(40) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(40) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po_customer`
--

INSERT INTO `po_customer` (`id`, `nomor_po`, `nama_barang`, `jumlah`, `status`, `tanggal`) VALUES
(9, 'PO-C123', 'Sepatu Futsal', 1, 'Barang Sudah Dikirimkan', '2021-02-11 21:04:41'),
(10, 'PO-C123123', 'Bola Futsal', 1, 'Barang Belum Dikirimkan', '2021-06-19 16:09:07');

-- --------------------------------------------------------

--
-- Table structure for table `po_supplier`
--

CREATE TABLE `po_supplier` (
  `id` int(11) NOT NULL,
  `nomor_po` varchar(40) NOT NULL,
  `nama_barang` varchar(40) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `supplier` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po_supplier`
--

INSERT INTO `po_supplier` (`id`, `nomor_po`, `nama_barang`, `jumlah`, `supplier`, `status`, `tanggal`) VALUES
(17, 'PO-S001', 'Bola Futsal', 100, 'PT.Bola Murah', 'Close', '2021-02-13 19:03:04');

-- --------------------------------------------------------

--
-- Table structure for table `retur`
--

CREATE TABLE `retur` (
  `id` int(11) NOT NULL,
  `no_po` varchar(40) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `dipesan` varchar(40) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` varchar(40) NOT NULL,
  `tanggal` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retur`
--

INSERT INTO `retur` (`id`, `no_po`, `nama_barang`, `dipesan`, `jumlah`, `tujuan`, `keterangan`, `status`, `tanggal`, `user_id`) VALUES
(25, 'PO-S001', 'Bola Futsal', '100', '20', 'PT.Bola Murah', 'Barang Cacat', 'Close', '2021-02-13 21:20:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` int(11) NOT NULL,
  `biaya_pemesanan` int(11) NOT NULL,
  `biaya_penyimpanan` int(11) NOT NULL,
  `lead_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `biaya_pemesanan`, `biaya_penyimpanan`, `lead_time`) VALUES
(1, 1, 1, 39);

-- --------------------------------------------------------

--
-- Table structure for table `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `nama_rs` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jangkau` varchar(50) NOT NULL,
  `jarak` varchar(10) NOT NULL,
  `area` varchar(50) NOT NULL,
  `beban` varchar(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `no_kontrak` varchar(60) NOT NULL,
  `status_kontrak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`id`, `nama_perusahaan`, `nama_rs`, `no_telp`, `alamat`, `jangkau`, `jarak`, `area`, `beban`, `hari`, `status`, `no_kontrak`, `status_kontrak`) VALUES
(55, 'PT. Sehat Abadi', 'Rumah Sakit Mulia', '0215670099', 'Bekasi', '2', '19 KM', 'Bekasi', '200 KG', 'Senin', 'Selesai', 'KJH/001/1042/2021', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(11) NOT NULL,
  `GROUP_ID` int(11) NOT NULL,
  `USER_NAME` varchar(10) NOT NULL,
  `USER_PASSWORD` varchar(30) NOT NULL,
  `USER_FULLNAME` varchar(50) NOT NULL,
  `USER_IS_ACTIVE` tinyint(4) NOT NULL,
  `USER_IMAGE` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `GROUP_ID`, `USER_NAME`, `USER_PASSWORD`, `USER_FULLNAME`, `USER_IS_ACTIVE`, `USER_IMAGE`) VALUES
(1, 1, 'admin', 'admin', 'Muhamad Alif Akbar', 1, 'admin.jpg'),
(48, 3, 'manajer', 'manajer', 'Muhamad Firdaus', 1, 'manajer.png'),
(49, 1, 'admin2', 'admin', 'Muhamad Thompson Putra Anugrah Sipahutar', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `GROUP_ID` int(11) NOT NULL,
  `GROUP_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`GROUP_ID`, `GROUP_NAME`) VALUES
(1, 'Admin'),
(3, 'Manajer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po_customer`
--
ALTER TABLE `po_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po_supplier`
--
ALTER TABLE `po_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retur`
--
ALTER TABLE `retur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`),
  ADD KEY `FK_RELATIONSHIP_2` (`GROUP_ID`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`GROUP_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `po_customer`
--
ALTER TABLE `po_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `po_supplier`
--
ALTER TABLE `po_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `retur`
--
ALTER TABLE `retur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `GROUP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`GROUP_ID`) REFERENCES `user_group` (`GROUP_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
