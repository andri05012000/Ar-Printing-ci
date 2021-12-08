-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Feb 2020 pada 14.20
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `id_detail` int(10) UNSIGNED NOT NULL,
  `id_produk` int(10) UNSIGNED NOT NULL,
  `id_transaksi` int(10) UNSIGNED NOT NULL,
  `jumlah` varchar(20) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL,
  `sub_total` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail`
--

INSERT INTO `detail` (`id_detail`, `id_produk`, `id_transaksi`, `jumlah`, `harga`, `sub_total`) VALUES
(24, 4, 17, '5', '10000', '50000'),
(25, 4, 18, '12', '10000', '120000'),
(26, 4, 18, '12', '10000', '120000'),
(27, 5, 18, '4', '20000', '80000'),
(29, 4, 19, '3', '10000', '30000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_produk`
--

CREATE TABLE `ms_produk` (
  `id_produk` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(20) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ms_produk`
--

INSERT INTO `ms_produk` (`id_produk`, `id_user`, `nama_produk`, `satuan`, `harga`) VALUES
(2, 1, 'buku', 'pics', '65000'),
(4, 1, 'pulpen 2b', 'Buah', '2500'),
(5, 1, 'sovenir', 'Buah', '20000'),
(6, 1, 'mug', 'Buah', '7000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_user`
--

CREATE TABLE `ms_user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `level` varchar(15) DEFAULT NULL,
  `status_user` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ms_user`
--

INSERT INTO `ms_user` (`id_user`, `username`, `password`, `level`, `status_user`) VALUES
(1, 'andri', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin', 'Aktif'),
(4, 'arprinting', '9327e8ed91293ff2ae6b4ac13e70dacf', 'Admin', 'Aktif'),
(5, 'kasir1', '827ccb0eea8a706c4c34a16891f84e7b', 'Kasir', 'Aktif'),
(7, 'aldi', '202cb962ac59075b964b07152d234b70', 'Kasir', 'Aktif'),
(8, 'evita', '25d55ad283aa400af464c76d713c07ad', 'Kasir', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `tanggal` date DEFAULT NULL,
  `pelanggan` varchar(20) DEFAULT NULL,
  `bayar` varchar(20) DEFAULT NULL,
  `total` varchar(20) DEFAULT NULL,
  `kembali` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `tanggal`, `pelanggan`, `bayar`, `total`, `kembali`) VALUES
(17, 1, '2019-12-02', 'andri', '100000', '50000', '50000'),
(18, 1, '2019-12-25', 'putri', '400000', '320000', '80000'),
(19, 1, '2019-12-11', 'aldi', '1000000', '30000', '970000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `ms_detail_FKIndex1` (`id_transaksi`),
  ADD KEY `ms_detail_FKIndex2` (`id_produk`);

--
-- Indeks untuk tabel `ms_produk`
--
ALTER TABLE `ms_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `ms_produk_FKIndex1` (`id_user`);

--
-- Indeks untuk tabel `ms_user`
--
ALTER TABLE `ms_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `ms_transaksi_FKIndex1` (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail`
--
ALTER TABLE `detail`
  MODIFY `id_detail` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `ms_produk`
--
ALTER TABLE `ms_produk`
  MODIFY `id_produk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `ms_user`
--
ALTER TABLE `ms_user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `ms_produk` (`id_produk`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ms_produk`
--
ALTER TABLE `ms_produk`
  ADD CONSTRAINT `ms_produk_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `ms_user` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `ms_user` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
