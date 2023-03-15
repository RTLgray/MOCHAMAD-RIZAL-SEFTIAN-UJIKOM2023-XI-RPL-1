-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220914.c51b5fa437
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Mar 2023 pada 07.20
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan_masyarakat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES
('31234455657', 'Sasaki Kojiro', 'Kojiro', '2e95314d9d3bed0d7cd58fa3aa485a61', 89533352),
('312436656745', 'Jack The Ripper', 'Jack', 'd119259e69e420bc069dc8da8d4b74d3', 89686668),
('3266788963', 'Kasim Saepuloh', 'Kasim', 'f344ac61e3e9c1c94523506e83491f1f', 8945345),
('3445679064354545', 'Jira', 'Jira', '89f846f264788bfaf58c4efbf05de4eb', 898775344),
('38466564578', 'Dede Sopandi', 'Dede', 'b4dfef97679c350c1b3dacd20bb9920c', 86987667),
('5353245325', 'Usep1', 'Usep1', '8a6eba66e306b0de53bfe47f33032652', 6346646),
('646564789789', 'Casemiro Emir', 'Emir', 'b3083c5cef6f48d8e2511104b0dc848a', 89),
('7547574575', 'Usep Sumpena', 'Usep', 'e6c0f6c91cd148a7a2bf052bd7245754', 8087445),
('9679060563463463', 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(5) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` char(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES
(31, '2023-03-13', '', 'Sampah kotor', '130320234217Cuplikan layar 2023-03-13 091417.jpg', 'proses'),
(32, '2023-03-13', '', 'Sampah kotor', '130320234257register.jpg', 'proses'),
(35, '2023-03-15', '', 'Kebakaran', '150320235925ytyty.jpg', 'proses'),
(36, '2023-03-15', '312436656745', 'Got tersumbat', '1503202303533.jpg', 'selesai'),
(37, '2023-03-15', '', 'Sampah jarang diangkut', '150320233127sdfdsfdsf.jpg', 'proses'),
(38, '2023-03-15', '38466564578', 'Kenakaran terjadi', '150320232258fad.jpg', 'selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(5) NOT NULL,
  `nama_petugas` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telp_petugas` int(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp_petugas`, `level`) VALUES
(1, 'M Rizal Seftian', 'admin', '21232f297a57a5a743894a0e4a801fc3', 2147483647, 'admin'),
(2, 'zal', 'zal', '55043786413e72364161942d1bf9e836', 2147483647, 'admin'),
(3, 'Gofar Samsih', 'Gofar', 'eb979d80f2f4ca563336094f75b42588', 897661324, 'admin'),
(4, 'Alif Komar', 'Alif', 'dc1c90437f3cbdac3c4492e700cfa44e', 2147483647, 'admin'),
(5, 'Leonidas', 'Leo', '834e2acc2c027db4ff599f413a2e3183', 95345345, 'petugas'),
(6, 'Kratos', 'Kratos', 'a17ff84970e3a721f24c8d3be404711d', 54656655, 'petugas'),
(7, 'Hades', 'Hades', 'ca1ccf556a52617c38fe421493404a9c', 34234567, 'petugas'),
(18, 'petugas', 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 453545, 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(5) NOT NULL,
  `id_pengaduan` int(5) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(18, 28, '2023-03-13', 'Baik akan diproses \r\n', 5),
(20, 36, '2023-03-15', 'akan kami lakukan', 18),
(21, 38, '2023-03-15', 'dasdasd', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_pengaduan` (`id_pengaduan`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
