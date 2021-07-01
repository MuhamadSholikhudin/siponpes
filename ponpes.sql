-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2021 pada 06.45
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ponpes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id_daftar` int(11) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `jekel` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `umur` int(11) NOT NULL,
  `asal_sekolah` text NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `nomor_sttb` varchar(100) NOT NULL,
  `nomor_skhu` varchar(100) NOT NULL,
  `jumlah_skhu` int(11) NOT NULL,
  `agama` varchar(11) NOT NULL,
  `nama_orang_tua` varchar(100) NOT NULL,
  `alamat_orang_tua` text NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `alamat_wali` text NOT NULL,
  `alamat_tinggal` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `nomor_wa` varchar(20) NOT NULL,
  `foto` text NOT NULL,
  `file_kk` text NOT NULL,
  `file_ket_ijin` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id_daftar`, `nama_lengkap`, `tanggal_lahir`, `tanggal_daftar`, `jekel`, `tempat_lahir`, `umur`, `asal_sekolah`, `kecamatan`, `kabupaten`, `provinsi`, `nomor_sttb`, `nomor_skhu`, `jumlah_skhu`, `agama`, `nama_orang_tua`, `alamat_orang_tua`, `nama_wali`, `alamat_wali`, `alamat_tinggal`, `email`, `nomor_wa`, `foto`, `file_kk`, `file_ket_ijin`, `status`) VALUES
(1, 'dessy adelia', '2021-05-29', '2021-05-28', 'Laki-laki', 'Kudus', 23, 'SMA', 'JEKULO', 'Kudus', 'Jawa Tengah', '12323432', '11231232', 34, 'Islam', 'TOH', '  Kudus', 'DAH', '  Kudus', ' Kudus', 'm97824321@gmail.com', '65776876', 'ss.JPG', 'mapbl.pdf', 'bukti_bayar_201753117.pdf', 2),
(2, 'dessy adelia', '2021-05-29', '2021-05-28', 'Laki-laki', 'Kudus', 23, 'SMA', 'JEKULO', 'Kudus', 'Jawa Tengah', '12323432', '11231232', 34, 'Islam', 'TOH', ' Kudus', 'DAH', ' Kudus', ' Kudus', 'siapasaya065@gmail.com', '65776877', 'Kudus.png', 'bukti_bayar_201753041.pdf', 'bukti_bayar_201753117.pdf', 2),
(3, 'dessy adelia1', '2021-05-29', '2021-05-28', 'Laki-laki', 'Kudus', 23, 'SMA', 'JEKULO', 'Kudus', 'Jawa Tengah', '12323432', '11231232', 34, 'Islam', 'TOH', ' Kudus', 'DAH', ' Kudus', ' Kudus', 'sandhikagalih@unpas.ac.id', '657768765', 'ss.JPG', 'cv.pdf', 'bukti_bayar_201753117.pdf', 2),
(4, 'Muhammad Sholikhudin', '2021-05-29', '2021-05-28', 'Laki-laki', 'Kudus', 22, 'SMA', 'JEKULO', 'Kudus', 'Jawa Tengah', '12323432', '11231232', 34, 'Islam', 'TOH', '  Kudus', 'DAH', '  Kudus', ' Kudus', 'dinaspmd@gmail.com', '657768761', 'ss.JPG', '201753117_Muhamad_Sholikhudin_C.pdf', '201753117_c.pdf', 2),
(5, 'dessy adelia', '2021-05-29', '2021-05-29', 'Laki-laki', 'Kudus', 23, 'SMA', 'JEKULO', 'Kudus', 'Jawa Tengah', '12323432', '11231232', 34, 'Islam', 'TOH', ' Kudus', 'DAH', ' Kudus', ' Kudus', 'muhammadsholihudin18@gmail.com', '6577687632', 'Capturep.PNG', 'mapbl.pdf', 'Data Aparatur Desa Per Januari 2020.xls', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_daftar` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hakakses` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `periodetahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
