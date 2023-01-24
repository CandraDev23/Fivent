-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2022 pada 17.18
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fivent_database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_event`
--

CREATE TABLE `data_event` (
  `id_event` int(25) NOT NULL,
  `id_user` int(11) NOT NULL,
  `event_name` varchar(25) NOT NULL,
  `location` varchar(50) NOT NULL,
  `location_city` varchar(20) NOT NULL,
  `event_date` date NOT NULL,
  `event_desc` text NOT NULL,
  `event_terms` text NOT NULL,
  `price_ticket` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_event`
--

INSERT INTO `data_event` (`id_event`, `id_user`, `event_name`, `location`, `location_city`, `event_date`, `event_desc`, `event_terms`, `price_ticket`) VALUES
(36, 68, 'Purwokerto Hitz', 'Alun-alun Purwokerto, Kecamatan Purwokerto Barat', 'Purwokerto', '2023-01-01', 'Berisi pameran karya seni dan cosplay anime yang menarik dan meriah.\r\n\r\nJangan lupa datang!!!', 'Patuhi protokol kesehatan yang berlaku.', 20000),
(37, 69, 'Pop Art Teluk', 'Alun-alun Purwokerto, Kecamatan Purwokerto Barat', 'Teluk', '2022-12-01', 'Berisi pameran karya seni dan cosplay anime yang menarik dan meriah.\r\n\r\nJangan lupa datang!!!', 'Tetap tertib ya.', 10000),
(38, 70, 'Pop Art Cilacap', 'Kecamatan Sidanegara, Cilacap', 'Cilacap Tengah', '2022-12-31', 'Berisi kegiatan bersih-bersih pentai agar tidak bau amis dan memborong ikan di laut dengan master nelayan. \r\n\r\nJangan lupa datang!!!\r\nDapatkan ikan laut yang segar dan amis.', 'Berisi kegiatan bersih-bersih pentai agar tidak bau amis dan memborong ikan di laut dengan master nelayan. \r\n\r\nJangan lupa datang!!!\r\nDapatkan ikan laut yang segar dan amis.', 5000),
(39, 70, 'Telkom Arts', 'SMK Telkom Purwokerto', 'Purwokerto', '2022-12-12', 'Berisi pertunjukan dan karya seni yang menarik dan yang pastinya tidak biasa alias luar biasa. Serta turnamen Game Mobile Legends yang berhadiah 7 jt rupiah.\r\n\r\nAyo datang dan bergabung!!!', 'Tetap patuhi protokol kesehatan.\r\nDan datang tertib.', 12000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_event`
--

CREATE TABLE `history_event` (
  `id_event_his` int(25) NOT NULL,
  `id_event_fk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `event_name` varchar(25) NOT NULL,
  `location` varchar(50) NOT NULL,
  `location_city` varchar(20) NOT NULL,
  `event_date` date NOT NULL,
  `event_desc` text NOT NULL,
  `event_terms` text NOT NULL,
  `price_ticket` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `history_event`
--

INSERT INTO `history_event` (`id_event_his`, `id_event_fk`, `id_user`, `event_name`, `location`, `location_city`, `event_date`, `event_desc`, `event_terms`, `price_ticket`) VALUES
(6, 39, 70, 'Telkom Arts', 'SMK Telkom Purwokerto', 'Purwokerto', '2022-12-12', 'Berisi pertunjukan dan karya seni yang menarik dan yang pastinya tidak biasa alias luar biasa. Serta turnamen Game Mobile Legends yang berhadiah 7 jt rupiah.\r\n\r\nAyo datang dan bergabung!!!', 'Tetap patuhi protokol kesehatan.\r\nDan datang tertib.', 12000),
(7, 39, 70, 'Telkom Arts', 'SMK Telkom Purwokerto', 'Purwokerto', '2022-12-12', 'Berisi pertunjukan dan karya seni yang menarik dan yang pastinya tidak biasa alias luar biasa. Serta turnamen Game Mobile Legends yang berhadiah 7 jt rupiah.\r\n\r\nAyo datang dan bergabung!!!', 'Tetap patuhi protokol kesehatan.\r\nDan datang tertib.', 12000),
(8, 36, 68, 'Purwokerto Hitz', 'Alun-alun Purwokerto, Kecamatan Purwokerto Barat', 'Purwokerto', '2023-01-01', 'Berisi pameran karya seni dan cosplay anime yang menarik dan meriah.\r\n\r\nJangan lupa datang!!!', 'Patuhi protokol kesehatan yang berlaku.', 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `nama_depan` varchar(25) NOT NULL,
  `nama_belakang` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `message`
--

INSERT INTO `message` (`id_message`, `nama_depan`, `nama_belakang`, `email`, `message`) VALUES
(24, 'Faiz', 'Azzahra', 'faiz.winanti25@gmail.com', 'Hola broo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_fivent`
--

CREATE TABLE `user_fivent` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_fivent`
--

INSERT INTO `user_fivent` (`id_user`, `username`, `email`, `password`, `bio`) VALUES
(68, 'Candra Setiawan', 'chan.setiawan42@gmail.com', '2305candra', 'This is my bio!!!'),
(69, 'Abyan Rahman', 'abyan.rahman76@gmail.com', '7676abyan', ''),
(70, 'Faiz Az', 'faiz.az2356@gmail.com', '1234faiz', 'Hai ini bio');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_event`
--
ALTER TABLE `data_event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `history_event`
--
ALTER TABLE `history_event`
  ADD PRIMARY KEY (`id_event_his`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_event_fk` (`id_event_fk`);

--
-- Indeks untuk tabel `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indeks untuk tabel `user_fivent`
--
ALTER TABLE `user_fivent`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_event`
--
ALTER TABLE `data_event`
  MODIFY `id_event` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `history_event`
--
ALTER TABLE `history_event`
  MODIFY `id_event_his` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `user_fivent`
--
ALTER TABLE `user_fivent`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_event`
--
ALTER TABLE `data_event`
  ADD CONSTRAINT `data_event_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user_fivent` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `history_event`
--
ALTER TABLE `history_event`
  ADD CONSTRAINT `id_event_FK` FOREIGN KEY (`id_event_fk`) REFERENCES `data_event` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user_fivent` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
