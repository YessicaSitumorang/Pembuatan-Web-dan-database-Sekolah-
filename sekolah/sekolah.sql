-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2022 pada 16.08
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `crud`
--

CREATE TABLE `crud` (
  `id` int(20) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nohp` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `crud`
--

INSERT INTO `crud` (`id`, `nik`, `nama`, `jenis_kelamin`, `alamat`, `nohp`) VALUES
(6, 211401001, 'Sea Dewi Karina Br. Ginting', 'Perempuan', 'Stabat', 123456789),
(7, 211401007, 'Sutriyaningsih', 'Perempuan', 'Tebing tinggi', 123456789),
(8, 211401010, 'Zaki Afwanul Hilmi Lubis', 'Laki-Laki', 'Jalan jermal 12', 123456789),
(9, 211401016, 'Fransisca Haliem', 'Perempuan', 'Sei Mencirim', 123456789),
(10, 211401053, 'Iqbal Purba', 'Laki-Laki', 'Kabanjahe', 123456789),
(11, 211401050, 'Elin Betsey Br Ginting', 'Perempuan', 'Tuntungan', 123456789),
(15, 211401127, 'Ahmad Faiz Amru', 'Laki-Laki', 'Kelumpang', 123456789),
(16, 211401120, 'Cristento Siregar', 'Laki-Laki', 'Siantar', 123456789),
(17, 211401110, 'Adi Teguh Pramono', 'Laki-Laki', 'Binje', 123456789),
(18, 1234567889, 'Coba', 'Laki-Laki', 'mencirim', 2112312);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `nama_lengkap` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`nama_lengkap`, `username`, `password`) VALUES
('kel1', 'kel1', 'kel1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
