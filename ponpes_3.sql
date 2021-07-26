-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jul 2021 pada 06.54
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
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `status` enum('Masuk','Ijin','Sakit','Alasan') NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `id_santri`, `id_jadwal`, `status`, `tanggal`) VALUES
(24, 1, 17, 'Masuk', '2021-07-23'),
(25, 2, 17, 'Masuk', '2021-07-23'),
(26, 3, 17, 'Masuk', '2021-07-23'),
(27, 1, 18, 'Masuk', '2021-07-23'),
(28, 2, 18, 'Masuk', '2021-07-23'),
(29, 3, 18, 'Masuk', '2021-07-23'),
(30, 1, 27, 'Masuk', '2021-07-23'),
(31, 2, 27, 'Masuk', '2021-07-23'),
(32, 3, 27, 'Masuk', '2021-07-23');

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
(1, 'Ifa', '2021-05-29', '2021-05-28', 'Perempuan', 'Kudus', 23, 'SMA', 'JEKULO', 'Kudus', 'Jawa Tengah', '12323432', '11231232', 34, 'Islam', 'TOH', '  Kudus', 'DAH', '  Kudus', ' Kudus', 'm97824321@gmail.com', '62895415019043', 'ss.JPG', 'mapbl.pdf', 'bukti_bayar_201753117.pdf', 2),
(2, 'Ayuk', '2021-05-29', '2021-07-18', 'Perempuan', 'Kudus', 23, 'SMA', 'JEKULO', 'Kudus', 'Jawa Tengah', '12323432', '11231232', 34, 'Islam', 'TOH', ' Kudus  ', 'DAH', '   Kudus  ', ' Kudus  ', 'siapasaya065@gmail.com', '65776877', 'Kudus.png', 'bukti_bayar_201753041.pdf', 'bukti_bayar_201753117.pdf', 3),
(3, 'Sita', '2021-05-29', '2021-05-28', 'Perempuan', 'Kudus', 23, 'SMA', 'JEKULO', 'Kudus', 'Jawa Tengah', '12323432', '11231232', 34, 'Islam', 'TOH', ' Kudus', 'DAH', ' Kudus', ' Kudus', 'sandhikagalih@unpas.ac.id', '657768765', 'ss.JPG', 'cv.pdf', 'bukti_bayar_201753117.pdf', 2),
(4, 'Avita', '2021-05-29', '2021-05-28', 'Perempuan', 'Kudus', 22, 'SMA', 'JEKULO', 'Kudus', 'Jawa Tengah', '12323432', '11231232', 34, 'Islam', 'TOH', '  Kudus', 'DAH', '  Kudus', ' Kudus', 'dinaspmd@gmail.com', '657768761', 'ss.JPG', '201753117_Muhamad_Sholikhudin_C.pdf', '201753117_c.pdf', 0),
(5, 'Ajeng', '2021-05-29', '2021-05-29', 'Perempuan', 'Kudus', 23, 'SMA', 'JEKULO', 'Kudus', 'Jawa Tengah', '12323432', '11231232', 34, 'Islam', 'TOH', ' Kudus', 'DAH', ' Kudus', ' Kudus', 'muhammadsholihudin18@gmail.com', '6577687632', 'Capturep.PNG', 'mapbl.pdf', 'Data Aparatur Desa Per Januari 2020.xls', 3),
(6, 'dessy adelia', '1997-12-12', '2021-07-21', 'Laki-laki', 'Kudus', 23, 'SMA', 'BAE', 'Kudus', 'Jawa Tengah', '12323432', '2314324', 34, 'Islam', 'Tri', ' Panjang ', 'Tri', '  Panjang ', ' Kudus ', 'dessy@123.com', '62895415019043', 'ss.JPG', 'mapbl.pdf', '201753117_Muhamad_Sholikhudin_C.pdf', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `kode_jadwal` varchar(50) NOT NULL,
  `id_pelajaran` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `kode_jadwal`, `id_pelajaran`, `id_kelas`, `hari`, `waktu`, `status`) VALUES
(2, '', 3, 1, 'Senin', 'Subuh', 1),
(3, '', 4, 2, 'Senin', 'Pagi', 1),
(4, '', 5, 3, 'Senin', 'Siang', 1),
(5, '', 3, 2, 'Selasa', 'Subuh', 1),
(6, '3BG', 5, 1, 'Selasa', 'Pagi', 1),
(7, '3PG', 8, 1, 'Selasa', 'Siang', 1),
(8, '', 3, 1, 'Selasa', 'Malam', 1),
(9, '', 6, 2, 'Rabu', 'Pagi', 1),
(10, '', 5, 1, 'Rabu', 'Subuh', 1),
(11, '', 5, 2, 'Rabu', 'Siang', 1),
(12, '', 7, 1, 'Rabu', 'Malam', 1),
(13, '', 8, 2, 'Kamis', 'Subuh', 1),
(14, '', 7, 2, 'Kamis', 'Pagi', 1),
(15, '', 4, 2, 'Kamis', 'Siang', 1),
(16, '', 4, 1, 'Kamis', 'Malam', 1),
(17, '2JD', 14, 2, 'Jumat', 'Subuh', 0),
(18, '2JA', 11, 2, 'Jumat', 'Pagi', 1),
(19, '', 6, 4, 'Jumat', 'Siang', 1),
(20, '', 6, 4, 'Senin', 'Malam', 1),
(21, '', 8, 5, 'Sabtu', 'Subuh', 1),
(22, '', 5, 3, 'Sabtu', 'Pagi', 1),
(23, '', 7, 3, 'Sabtu', 'Malam', 1),
(24, '', 5, 3, 'Sabtu', 'Siang', 1),
(25, '', 10, 1, 'Selasa', 'Subuh', 1),
(26, '', 6, 2, 'Rabu', 'Siang', 1),
(27, '', 18, 2, 'Jumat', 'Siang', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`, `nama_kelas`) VALUES
(1, 'I /Bacaan(Qira’ah)', ''),
(2, 'II/ Pegon(Kitabah)', ''),
(3, 'III/Makna Lambat(Al-Taanni)', ''),
(4, 'IV/Makna Cepat (Al-Sarii’)', ''),
(5, 'V/Saringan (Al-Tadrib)', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_jadwal`, `id_santri`, `nilai`, `tanggal`) VALUES
(25, 17, 1, 90, '2021-07-23'),
(26, 17, 2, 80, '2021-07-23'),
(27, 17, 3, 70, '2021-07-23'),
(28, 27, 1, 80, '2021-07-23'),
(29, 27, 2, 70, '2021-07-23'),
(30, 27, 3, 70, '2021-07-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id_pelajaran` int(11) NOT NULL,
  `kode_pelajaran` varchar(100) NOT NULL,
  `nama_pelajaran` text NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `jenis` enum('Materi','Konsep dan Praktikum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelajaran`
--

INSERT INTO `pelajaran` (`id_pelajaran`, `kode_pelajaran`, `nama_pelajaran`, `id_pengguna`, `jenis`) VALUES
(3, '1A', 'Surat Al-Baqarah', 2, 'Materi'),
(4, '1B', 'Surat Al-Mulk s/d Al-Nas', 3, 'Materi'),
(5, '1C', 'Thaharah', 4, 'Materi'),
(6, '1D', 'Tajwid', 5, 'Materi'),
(7, '1E', 'Adab Pencari Ilmu', 6, 'Materi'),
(8, '1KA', 'Qira’ah Al-Qur’an', 7, 'Materi'),
(9, '1KB', 'Hafalan Surat-surat Pendek', 2, 'Konsep dan Praktikum'),
(10, '1KC', 'Hafalan Do’a', 2, 'Konsep dan Praktikum'),
(11, '2A', 'Huruf Hijaiyah', 3, 'Materi'),
(12, '2B', 'Khat wa Imla’', 3, 'Materi'),
(13, '23', 'Kitabah Pegon', 3, 'Materi'),
(14, '2C', 'Tuntunan Tata Krama', 3, 'Materi'),
(15, 'Kitabah', 'Kitabah', 3, 'Konsep dan Praktikum'),
(16, '2KB', 'Hafalan Surat-surat Pendek', 3, 'Konsep dan Praktikum'),
(17, '2KC', 'Hafalan Do’a', 3, 'Konsep dan Praktikum'),
(18, '2MD', 'Huruf Hijaiyah', 2, 'Materi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_daftar` int(11) NOT NULL,
  `status` enum('Bayar','Tidak Bayar','','') NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_daftar`, `status`, `tanggal`, `jumlah`) VALUES
(1, 2, 'Tidak Bayar', '2021-07-21', 12),
(3, 4, 'Bayar', '2021-07-17', 500000),
(4, 3, 'Bayar', '2021-07-17', 500000),
(5, 3, 'Bayar', '2021-07-18', 300000),
(6, 5, 'Bayar', '2021-07-20', 500000),
(7, 6, 'Bayar', '2021-07-21', 500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelajaran`
--

CREATE TABLE `pembelajaran` (
  `id_pembelajaran` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `materi_belajar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelajaran`
--

INSERT INTO `pembelajaran` (`id_pembelajaran`, `id_jadwal`, `materi_belajar`, `tanggal`) VALUES
(8, 17, 'tes', '2021-07-23'),
(9, 18, 'alif bak', '2021-07-23'),
(10, 27, 'tes pegon huruf hijaiyah', '2021-07-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hakakses` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `username`, `password`, `hakakses`, `status`) VALUES
(1, 'muhamad sakroni', 'sakroni', 'sakroni', 1, 1),
(2, 'dessy adelia', 'dessy', 'dessy', 2, 1),
(3, 'Bp. Anas S. ', 'anas', '123', 2, 1),
(4, 'Bp. Suwargi, S.E', 'suwardi', '123', 2, 1),
(5, 'Bp. M. Chiyaruddin, S. Kom. I', 'Chiyaruddin', '123', 2, 1),
(6, 'Bp. Johan', 'Johan', '123', 2, 1),
(7, 'Mbak Ayu', 'ayu', '123', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perkembangan_pembelajaran`
--

CREATE TABLE `perkembangan_pembelajaran` (
  `id_perkembangan` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perkembangan_pembelajaran`
--

INSERT INTO `perkembangan_pembelajaran` (`id_perkembangan`, `id_santri`, `id_jadwal`, `keterangan`, `tanggal`) VALUES
(22, 1, 17, 'Mampu memahami pelajaran dengan baik', '2021-07-23'),
(23, 2, 17, 'Mampu memahami pelajaran dengan baik', '2021-07-23'),
(24, 3, 17, 'Mampu memahami pelajaran dengan baik', '2021-07-23'),
(25, 1, 18, 'alif bak', '2021-07-23'),
(26, 2, 18, 'alif bak', '2021-07-23'),
(27, 3, 18, 'alif bak', '2021-07-23'),
(28, 1, 27, 'tes pegon huruf hijaiyah', '2021-07-23'),
(29, 2, 27, 'tes pegon huruf hijaiyah', '2021-07-23'),
(30, 3, 27, 'tes pegon huruf hijaiyah', '2021-07-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `santri`
--

CREATE TABLE `santri` (
  `id_santri` int(11) NOT NULL,
  `id_daftar` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hakakses` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `periodetahun` year(4) NOT NULL,
  `kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `santri`
--

INSERT INTO `santri` (`id_santri`, `id_daftar`, `username`, `password`, `hakakses`, `status`, `periodetahun`, `kelas`) VALUES
(1, 1, 'ifa', 'ifa', 3, 1, 2021, 2),
(2, 2, 'Ayuk123', 'ayuk', 3, 1, 2021, 2),
(3, 4, 'Avita4', 'Avita42021', 3, 1, 2021, 2),
(7, 3, 'Sita3', 'Sita32021', 3, 1, 2021, 1),
(8, 5, 'Ajeng5', 'Ajeng52021', 3, 1, 2021, 1),
(9, 6, 'dessy6', 'dessy62021', 3, 1, 2021, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sikap_dan_prilaku`
--

CREATE TABLE `sikap_dan_prilaku` (
  `id_sikap_dan_prilaku` int(11) NOT NULL,
  `ketaatan` int(11) NOT NULL,
  `ketakdiman` int(11) NOT NULL,
  `kedisiplinan` int(11) NOT NULL,
  `kerapian` int(11) NOT NULL,
  `kesemangatan` int(11) NOT NULL,
  `partisipasi` int(11) NOT NULL,
  `etika` int(11) NOT NULL,
  `kerjasama` int(11) NOT NULL,
  `kelengkapan_catatan` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `id_pelajaran` int(11) NOT NULL,
  `kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sikap_dan_prilaku`
--

INSERT INTO `sikap_dan_prilaku` (`id_sikap_dan_prilaku`, `ketaatan`, `ketakdiman`, `kedisiplinan`, `kerapian`, `kesemangatan`, `partisipasi`, `etika`, `kerjasama`, `kelengkapan_catatan`, `id_santri`, `id_pelajaran`, `kelas`) VALUES
(1, 90, 90, 90, 90, 90, 90, 90, 90, 90, 2, 4, 2),
(2, 90, 90, 90, 90, 90, 90, 90, 90, 90, 1, 11, 2),
(3, 80, 80, 80, 80, 80, 80, 80, 80, 80, 1, 4, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_santri` (`id_santri`);

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_pelajaran` (`id_pelajaran`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_santri` (`id_santri`);

--
-- Indeks untuk tabel `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id_pelajaran`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_daftar` (`id_daftar`);

--
-- Indeks untuk tabel `pembelajaran`
--
ALTER TABLE `pembelajaran`
  ADD PRIMARY KEY (`id_pembelajaran`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `perkembangan_pembelajaran`
--
ALTER TABLE `perkembangan_pembelajaran`
  ADD PRIMARY KEY (`id_perkembangan`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_santri` (`id_santri`);

--
-- Indeks untuk tabel `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id_santri`),
  ADD KEY `id_daftar` (`id_daftar`);

--
-- Indeks untuk tabel `sikap_dan_prilaku`
--
ALTER TABLE `sikap_dan_prilaku`
  ADD PRIMARY KEY (`id_sikap_dan_prilaku`),
  ADD KEY `id_santri` (`id_santri`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pembelajaran`
--
ALTER TABLE `pembelajaran`
  MODIFY `id_pembelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `perkembangan_pembelajaran`
--
ALTER TABLE `perkembangan_pembelajaran`
  MODIFY `id_perkembangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `santri`
--
ALTER TABLE `santri`
  MODIFY `id_santri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `sikap_dan_prilaku`
--
ALTER TABLE `sikap_dan_prilaku`
  MODIFY `id_sikap_dan_prilaku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`),
  ADD CONSTRAINT `absensi_ibfk_2` FOREIGN KEY (`id_santri`) REFERENCES `santri` (`id_santri`);

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_pelajaran`) REFERENCES `pelajaran` (`id_pelajaran`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_santri`) REFERENCES `santri` (`id_santri`);

--
-- Ketidakleluasaan untuk tabel `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD CONSTRAINT `pelajaran_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_daftar`) REFERENCES `daftar` (`id_daftar`);

--
-- Ketidakleluasaan untuk tabel `pembelajaran`
--
ALTER TABLE `pembelajaran`
  ADD CONSTRAINT `pembelajaran_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`);

--
-- Ketidakleluasaan untuk tabel `perkembangan_pembelajaran`
--
ALTER TABLE `perkembangan_pembelajaran`
  ADD CONSTRAINT `perkembangan_pembelajaran_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`),
  ADD CONSTRAINT `perkembangan_pembelajaran_ibfk_2` FOREIGN KEY (`id_santri`) REFERENCES `santri` (`id_santri`);

--
-- Ketidakleluasaan untuk tabel `santri`
--
ALTER TABLE `santri`
  ADD CONSTRAINT `santri_ibfk_1` FOREIGN KEY (`id_daftar`) REFERENCES `daftar` (`id_daftar`);

--
-- Ketidakleluasaan untuk tabel `sikap_dan_prilaku`
--
ALTER TABLE `sikap_dan_prilaku`
  ADD CONSTRAINT `sikap_dan_prilaku_ibfk_1` FOREIGN KEY (`id_santri`) REFERENCES `santri` (`id_santri`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
