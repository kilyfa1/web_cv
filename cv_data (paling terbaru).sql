-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Nov 2023 pada 05.18
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
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cv_data`
--

CREATE TABLE `cv_data` (
  `id` bigint(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `web` varchar(255) NOT NULL,
  `pendidikan` text NOT NULL,
  `pengalaman_kerja` text NOT NULL,
  `keterampilan` text NOT NULL,
  `foto_path` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cv_data`
--

INSERT INTO `cv_data` (`id`, `nama`, `alamat`, `telepon`, `email`, `web`, `pendidikan`, `pengalaman_kerja`, `keterampilan`, `foto_path`, `date`) VALUES
(3337220000, 'Mencoba Saja', 'Jalan Coba Coba', '081210884044', '3337220000@untirta.ac.id', 'mencoba.com', 'S1 - Universitas Sultan Ageng Tirtayasa', 'Tidak ada', 'Menguasai Bumi', 'https://iili.io/JCqK5la.png', '2023-11-12 10:41:03'),
(3337220051, 'Abdul Aziz', 'Jalan H Jasirin No 24 ', '085156087162', '3337220051@untirta.ac.id', 'kistore.id', 'Universitas Sultan Ageng Tirtayasa', 'PT Coding Indonesia', 'Bermain Game', 'https://iili.io/JCqK5la.png', '2023-11-12 10:38:57'),
(3337220100, 'Mutiara Sandi', 'Jalan Serang Blok C7', '088801285389', 'mtrsnd01@gmail.com', 'kistore.xyz', 'Untirta', 'Tidak ada', 'Tidak ada', 'https://awsimages.detik.net.id/community/media/visual/2023/04/14/oshi-no-ko_43.jpeg?w=1200', '2023-11-12 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cv_data`
--
ALTER TABLE `cv_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cv_data`
--
ALTER TABLE `cv_data`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3337220101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
