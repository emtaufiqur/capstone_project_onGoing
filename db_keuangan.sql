-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2023 pada 07.56
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_keuangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `kode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori`, `kode`) VALUES
(1, '01. HRD', 'HRD'),
(2, '02. GAD', 'GAD'),
(3, '03. TAISHO', 'TSO'),
(4, '04. DELTOMED', 'DLT'),
(5, '05. MORTAR UTAMA', 'MU'),
(6, '06. POCARI', 'AIO'),
(7, '07. JAHE KERATON', 'JAM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p2d`
--

CREATE TABLE `p2d` (
  `p2d_id` int(11) NOT NULL,
  `p2d_tanggal` date NOT NULL,
  `p2d_nominal` int(11) NOT NULL,
  `p2d_keterangan` text NOT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `p2d`
--

INSERT INTO `p2d` (`p2d_id`, `p2d_tanggal`, `p2d_nominal`, `p2d_keterangan`, `kategori_id`) VALUES
(25, '2023-01-10', 2000000, 'Beli Kebutuhan Kantor', 7),
(26, '2023-01-04', 5000000, 'Beli Spanduk Untuk Event', 4),
(27, '2023-01-14', 2000000, 'Event Keperluan Kantor', 1),
(28, '2023-01-17', 900000, 'Event Futsal', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_pjum`
--

CREATE TABLE `transaksi_pjum` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_id_pjum` int(11) NOT NULL,
  `transaksi_tanggal` date NOT NULL,
  `transaksi_tanggal_pjum` date NOT NULL,
  `transaksi_kategori` int(11) NOT NULL,
  `transaksi_nominal` int(11) NOT NULL,
  `nominal_pjum` int(11) NOT NULL,
  `transaksi_keterangan` text NOT NULL,
  `transaksi_tanggal_kebutuhan` date NOT NULL,
  `transaksi_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `transaksi_pjum`
--

INSERT INTO `transaksi_pjum` (`transaksi_id`, `transaksi_id_pjum`, `transaksi_tanggal`, `transaksi_tanggal_pjum`, `transaksi_kategori`, `transaksi_nominal`, `nominal_pjum`, `transaksi_keterangan`, `transaksi_tanggal_kebutuhan`, `transaksi_foto`) VALUES
(23, 0, '2023-01-01', '0000-00-00', 6, 80000, 79000, 'Event Makan', '2023-01-15', '1528773944_559000016_contoh nota.jpg'),
(25, 9, '2023-01-05', '2023-01-05', 1, 2500000, 1999, 'Petty Cash Urgent', '2023-01-09', '921433184_261520357_SWOT-Analysis01.jpg'),
(34, 0, '2023-01-14', '0000-00-00', 1, 1000000, 0, 'Event Beli Marchendise', '2023-01-20', '1763594941_56028949_WhatsApp Image 2022-11-21 at 20.52.27.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_foto` varchar(100) DEFAULT NULL,
  `user_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_foto`, `user_level`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1293879237_NBLSTORELOGO.jpg', 'administrator'),
(2, 'manajemen', 'manajemen', '19b51f1cbb6146adcacbce46d5bdc3f2', '1215276191_NBLSTORELOGO.jpg', 'manajemen');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `p2d`
--
ALTER TABLE `p2d`
  ADD PRIMARY KEY (`p2d_id`);

--
-- Indeks untuk tabel `transaksi_pjum`
--
ALTER TABLE `transaksi_pjum`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `transaksi_id_pjum` (`transaksi_id_pjum`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `p2d`
--
ALTER TABLE `p2d`
  MODIFY `p2d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `transaksi_pjum`
--
ALTER TABLE `transaksi_pjum`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
