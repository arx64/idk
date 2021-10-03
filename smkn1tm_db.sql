-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Okt 2021 pada 19.31
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkn1tm_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_index`
--

CREATE TABLE IF NOT EXISTS `db_index` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `konten` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `db_index`
--

INSERT INTO `db_index` (`id`, `url`, `judul`, `kategori`, `user`, `konten`, `tanggal`) VALUES
(12, 'https://i.ibb.co/WFPMt6f/as.jpg', 'KESEMBUHAN COVID-19 TERUS MENINGKAT MENCAPAI 4.044.235 ORANG', 'berita', 'admin', 'Perkembangan penanganan pandemi COVID-19 per 3 Oktober 2021 secara nasional, angka kesembuhan harian bertambah mencapai 2.020 orang sembuh per hari.', '03 Okt 2021'),
(13, 'https://i.ibb.co/wQQ9v90/aa.jpg', 'Data Vaksinasi COVID-19 (Update per 3 Oktober 2021)', 'berita', 'admin', 'Data Vaksinasi COVID-19 (Update per 3 Oktober 2021)', '03 Oct 2021\r\n'),
(14, 'https://i.ibb.co/Gp071rg/ws.jpg', 'Tahap ke-84, Indonesia Kedatangan 800 Ribu Dosis Vaksin Pfizer', 'berita', 'admin', 'Indonesia kembali kedatangan vaksin bantuan dari pemerintah Amerika Serikat melalui COVAX Facility berupa vaksin Pfizer. Vaksin tahap ke-84 yang tiba hari ini berjumlah 800.280 dosis vaksin jadi.', '04 Oct 21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_index`
--
ALTER TABLE `db_index`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_index`
--
ALTER TABLE `db_index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
