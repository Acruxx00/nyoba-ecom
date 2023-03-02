-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Mar 2023 pada 17.04
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `idbarang` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `stok` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`idbarang`, `nama`, `harga`, `stok`) VALUES
(7, 'abc', 1012, 'habis'),
(9, 'asd', 1131, 'tersedia'),
(10, 'ajg', 10000, 'tersedia'),
(11, 'babi', 100000, 'tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `stok` int(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kodepos` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pengiriman` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id`, `iduser`, `idbarang`, `nama`, `harga`, `stok`, `alamat`, `kodepos`, `status`, `pengiriman`) VALUES
(15, 2, 7, 'abc', 1012, 12, 'sdjasdlkajsdsalk;j', 1239013, '1', 'J&T'),
(16, 2, 7, 'abc', 1012, 12, 'sdjasdlkajsdsalk;j', 1239013, '2', 'J&T'),
(17, 2, 7, 'abc', 1012, 10, 'lsklasjdkl', 12260, '2', 'J&T'),
(18, 2, 7, 'abc', 2024, 2, 'Surara', 12245, '1', 'SiCepat'),
(19, 4, 10, 'ajg', 20000, 2, 'bdff', 2123, '2', 'J&T'),
(20, 8, 11, 'babi', 400000, 4, 'asdfgh', 123456, '1', 'SiCepat'),
(21, 4, 7, 'abc', 4048, 4, 'ksnfklajsf', 2124, '0', 'J&T'),
(22, 10, 9, 'asd', 14703, 13, 'bdff', 1234, '1', 'J&T');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `username`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(2, 'user', 'user@gmail.com', 'user', 'user\r\n'),
(3, 'qwe', 'qwe', 'qwe', ''),
(4, 'asd', 'asd@gmail.com', 'asd', 'user'),
(5, 'abc', 'abc@gmail.com', 'abc', 'user'),
(6, 'zxc', 'zxc@gmail.com', '5fa72358f0b4fb4f2c5d7de8c9a41846', 'user'),
(7, 'admin', 'qwe@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(8, 'ea', 'ea@gmail.com', '5b344ac52a0192941b46a8bf252c859c', 'user'),
(9, 'karasu', 'karasu@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(10, 'acrux', 'acrux@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(13, 'woi', 'woi@gmail.com', '3d8cf6bf0f86c00fb2031bdef989bf91', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
