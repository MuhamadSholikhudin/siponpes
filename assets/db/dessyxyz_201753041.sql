-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 25 Agu 2021 pada 10.36
-- Versi server: 10.3.30-MariaDB-log-cll-lve
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dessyxyz_201753041`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `absensi` enum('MASUK','IJIN','SAKIT','ALASAN') NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `id_santri`, `id_jadwal`, `id_kelas`, `absensi`, `tanggal`, `status`) VALUES
(1, 1, 2, 1, 'MASUK', '2019-07-22', 1),
(2, 2, 2, 1, 'MASUK', '2019-07-22', 1),
(3, 3, 2, 1, 'MASUK', '2019-07-22', 1),
(4, 4, 2, 1, 'MASUK', '2019-07-22', 1),
(5, 5, 2, 1, 'MASUK', '2019-07-22', 1),
(6, 6, 2, 1, 'MASUK', '2019-07-22', 1),
(7, 7, 2, 1, 'MASUK', '2019-07-22', 1),
(8, 8, 2, 1, 'MASUK', '2019-07-22', 1),
(9, 9, 2, 1, 'MASUK', '2019-07-22', 1),
(10, 1, 2, 1, 'MASUK', '2019-07-29', 1),
(11, 2, 2, 1, 'MASUK', '2019-07-29', 1),
(12, 3, 2, 1, 'MASUK', '2019-07-29', 1),
(13, 4, 2, 1, 'MASUK', '2019-07-29', 1),
(14, 5, 2, 1, 'MASUK', '2019-07-29', 1),
(15, 6, 2, 1, 'MASUK', '2019-07-29', 1),
(16, 7, 2, 1, 'MASUK', '2019-07-29', 1),
(17, 8, 2, 1, 'MASUK', '2019-07-29', 1),
(18, 9, 2, 1, 'MASUK', '2019-07-29', 1),
(19, 1, 2, 1, 'MASUK', '2019-08-05', 1),
(20, 2, 2, 1, 'MASUK', '2019-08-05', 1),
(21, 3, 2, 1, 'MASUK', '2019-08-05', 1),
(22, 4, 2, 1, 'MASUK', '2019-08-05', 1),
(23, 5, 2, 1, 'MASUK', '2019-08-05', 1),
(24, 6, 2, 1, 'MASUK', '2019-08-05', 1),
(25, 7, 2, 1, 'MASUK', '2019-08-05', 1),
(26, 8, 2, 1, 'MASUK', '2019-08-05', 1),
(27, 9, 2, 1, 'MASUK', '2019-08-05', 1),
(28, 1, 2, 1, 'MASUK', '2019-08-12', 1),
(29, 2, 2, 1, 'MASUK', '2019-08-12', 1),
(30, 3, 2, 1, 'MASUK', '2019-08-12', 1),
(31, 4, 2, 1, 'MASUK', '2019-08-12', 1),
(32, 5, 2, 1, 'MASUK', '2019-08-12', 1),
(33, 6, 2, 1, 'MASUK', '2019-08-12', 1),
(34, 7, 2, 1, 'MASUK', '2019-08-12', 1),
(35, 8, 2, 1, 'MASUK', '2019-08-12', 1),
(36, 9, 2, 1, 'MASUK', '2019-08-12', 1),
(37, 1, 2, 1, 'MASUK', '2019-08-19', 1),
(38, 2, 2, 1, 'MASUK', '2019-08-19', 1),
(39, 3, 2, 1, 'MASUK', '2019-08-19', 1),
(40, 4, 2, 1, 'MASUK', '2019-08-19', 1),
(41, 5, 2, 1, 'MASUK', '2019-08-19', 1),
(42, 6, 2, 1, 'MASUK', '2019-08-19', 1),
(43, 7, 2, 1, 'MASUK', '2019-08-19', 1),
(44, 8, 2, 1, 'MASUK', '2019-08-19', 1),
(45, 9, 2, 1, 'MASUK', '2019-08-19', 1),
(46, 1, 2, 1, 'MASUK', '2019-08-26', 1),
(47, 2, 2, 1, 'MASUK', '2019-08-26', 1),
(48, 3, 2, 1, 'MASUK', '2019-08-26', 1),
(49, 4, 2, 1, 'MASUK', '2019-08-26', 1),
(50, 5, 2, 1, 'MASUK', '2019-08-26', 1),
(51, 6, 2, 1, 'MASUK', '2019-08-26', 1),
(52, 7, 2, 1, 'MASUK', '2019-08-26', 1),
(53, 8, 2, 1, 'MASUK', '2019-08-26', 1),
(54, 9, 2, 1, 'MASUK', '2019-08-26', 1),
(55, 1, 2, 1, 'MASUK', '2019-09-02', 1),
(56, 2, 2, 1, 'MASUK', '2019-09-02', 1),
(57, 3, 2, 1, 'MASUK', '2019-09-02', 1),
(58, 4, 2, 1, 'MASUK', '2019-09-02', 1),
(59, 5, 2, 1, 'MASUK', '2019-09-02', 1),
(60, 6, 2, 1, 'MASUK', '2019-09-02', 1),
(61, 7, 2, 1, 'MASUK', '2019-09-02', 1),
(62, 8, 2, 1, 'MASUK', '2019-09-02', 1),
(63, 9, 2, 1, 'MASUK', '2019-09-02', 1),
(64, 1, 2, 1, 'MASUK', '2019-09-09', 1),
(65, 2, 2, 1, 'MASUK', '2019-09-09', 1),
(66, 3, 2, 1, 'MASUK', '2019-09-09', 1),
(67, 4, 2, 1, 'MASUK', '2019-09-09', 1),
(68, 5, 2, 1, 'MASUK', '2019-09-09', 1),
(69, 6, 2, 1, 'MASUK', '2019-09-09', 1),
(70, 7, 2, 1, 'MASUK', '2019-09-09', 1),
(71, 8, 2, 1, 'MASUK', '2019-09-09', 1),
(72, 9, 2, 1, 'MASUK', '2019-09-09', 1),
(73, 1, 2, 1, 'MASUK', '2019-09-16', 1),
(74, 2, 2, 1, 'MASUK', '2019-09-16', 1),
(75, 3, 2, 1, 'MASUK', '2019-09-16', 1),
(76, 4, 2, 1, 'MASUK', '2019-09-16', 1),
(77, 5, 2, 1, 'MASUK', '2019-09-16', 1),
(78, 6, 2, 1, 'MASUK', '2019-09-16', 1),
(79, 7, 2, 1, 'MASUK', '2019-09-16', 1),
(80, 8, 2, 1, 'MASUK', '2019-09-16', 1),
(81, 9, 2, 1, 'MASUK', '2019-09-16', 1),
(82, 1, 2, 1, 'MASUK', '2019-09-23', 1),
(83, 2, 2, 1, 'MASUK', '2019-09-23', 1),
(84, 3, 2, 1, 'MASUK', '2019-09-23', 1),
(85, 4, 2, 1, 'MASUK', '2019-09-23', 1),
(86, 5, 2, 1, 'MASUK', '2019-09-23', 1),
(87, 6, 2, 1, 'MASUK', '2019-09-23', 1),
(88, 7, 2, 1, 'MASUK', '2019-09-23', 1),
(89, 8, 2, 1, 'MASUK', '2019-09-23', 1),
(90, 9, 2, 1, 'MASUK', '2019-09-23', 1),
(91, 1, 2, 1, 'MASUK', '2019-09-30', 1),
(92, 2, 2, 1, 'MASUK', '2019-09-30', 1),
(93, 3, 2, 1, 'MASUK', '2019-09-30', 1),
(94, 4, 2, 1, 'MASUK', '2019-09-30', 1),
(95, 5, 2, 1, 'MASUK', '2019-09-30', 1),
(96, 6, 2, 1, 'MASUK', '2019-09-30', 1),
(97, 7, 2, 1, 'MASUK', '2019-09-30', 1),
(98, 8, 2, 1, 'MASUK', '2019-09-30', 1),
(99, 9, 2, 1, 'MASUK', '2019-09-30', 1),
(100, 1, 2, 1, 'MASUK', '2019-10-07', 1),
(101, 2, 2, 1, 'MASUK', '2019-10-07', 1),
(102, 3, 2, 1, 'MASUK', '2019-10-07', 1),
(103, 4, 2, 1, 'MASUK', '2019-10-07', 1),
(104, 5, 2, 1, 'MASUK', '2019-10-07', 1),
(105, 6, 2, 1, 'MASUK', '2019-10-07', 1),
(106, 7, 2, 1, 'MASUK', '2019-10-07', 1),
(107, 8, 2, 1, 'MASUK', '2019-10-07', 1),
(108, 9, 2, 1, 'MASUK', '2019-10-07', 1),
(109, 1, 25, 1, 'MASUK', '2019-07-23', 1),
(110, 2, 25, 1, 'MASUK', '2019-07-23', 1),
(111, 3, 25, 1, 'MASUK', '2019-07-23', 1),
(112, 4, 25, 1, 'MASUK', '2019-07-23', 1),
(113, 5, 25, 1, 'MASUK', '2019-07-23', 1),
(114, 6, 25, 1, 'MASUK', '2019-07-23', 1),
(115, 7, 25, 1, 'MASUK', '2019-07-23', 1),
(116, 8, 25, 1, 'MASUK', '2019-07-23', 1),
(117, 9, 25, 1, 'MASUK', '2019-07-23', 1),
(118, 1, 25, 1, 'MASUK', '2019-07-30', 1),
(119, 2, 25, 1, 'MASUK', '2019-07-30', 1),
(120, 3, 25, 1, 'MASUK', '2019-07-30', 1),
(121, 4, 25, 1, 'MASUK', '2019-07-30', 1),
(122, 5, 25, 1, 'MASUK', '2019-07-30', 1),
(123, 6, 25, 1, 'MASUK', '2019-07-30', 1),
(124, 7, 25, 1, 'MASUK', '2019-07-30', 1),
(125, 8, 25, 1, 'MASUK', '2019-07-30', 1),
(126, 9, 25, 1, 'MASUK', '2019-07-30', 1),
(127, 1, 25, 1, 'MASUK', '2019-08-06', 1),
(128, 2, 25, 1, 'MASUK', '2019-08-06', 1),
(129, 3, 25, 1, 'MASUK', '2019-08-06', 1),
(130, 4, 25, 1, 'MASUK', '2019-08-06', 1),
(131, 5, 25, 1, 'MASUK', '2019-08-06', 1),
(132, 6, 25, 1, 'MASUK', '2019-08-06', 1),
(133, 7, 25, 1, 'MASUK', '2019-08-06', 1),
(134, 8, 25, 1, 'MASUK', '2019-08-06', 1),
(135, 9, 25, 1, 'MASUK', '2019-08-06', 1),
(136, 1, 25, 1, 'MASUK', '2019-08-13', 1),
(137, 2, 25, 1, 'MASUK', '2019-08-13', 1),
(138, 3, 25, 1, 'MASUK', '2019-08-13', 1),
(139, 4, 25, 1, 'MASUK', '2019-08-13', 1),
(140, 5, 25, 1, 'MASUK', '2019-08-13', 1),
(141, 6, 25, 1, 'MASUK', '2019-08-13', 1),
(142, 7, 25, 1, 'MASUK', '2019-08-13', 1),
(143, 8, 25, 1, 'MASUK', '2019-08-13', 1),
(144, 9, 25, 1, 'MASUK', '2019-08-13', 1),
(145, 1, 25, 1, 'MASUK', '2019-08-20', 1),
(146, 2, 25, 1, 'MASUK', '2019-08-20', 1),
(147, 3, 25, 1, 'MASUK', '2019-08-20', 1),
(148, 4, 25, 1, 'MASUK', '2019-08-20', 1),
(149, 5, 25, 1, 'MASUK', '2019-08-20', 1),
(150, 6, 25, 1, 'MASUK', '2019-08-20', 1),
(151, 7, 25, 1, 'MASUK', '2019-08-20', 1),
(152, 8, 25, 1, 'MASUK', '2019-08-20', 1),
(153, 9, 25, 1, 'MASUK', '2019-08-20', 1),
(154, 1, 25, 1, 'MASUK', '2019-08-27', 1),
(155, 2, 25, 1, 'MASUK', '2019-08-27', 1),
(156, 3, 25, 1, 'MASUK', '2019-08-27', 1),
(157, 4, 25, 1, 'MASUK', '2019-08-27', 1),
(158, 5, 25, 1, 'MASUK', '2019-08-27', 1),
(159, 6, 25, 1, 'MASUK', '2019-08-27', 1),
(160, 7, 25, 1, 'MASUK', '2019-08-27', 1),
(161, 8, 25, 1, 'MASUK', '2019-08-27', 1),
(162, 9, 25, 1, 'MASUK', '2019-08-27', 1),
(163, 1, 25, 1, 'MASUK', '2019-09-03', 1),
(164, 2, 25, 1, 'MASUK', '2019-09-03', 1),
(165, 3, 25, 1, 'MASUK', '2019-09-03', 1),
(166, 4, 25, 1, 'MASUK', '2019-09-03', 1),
(167, 5, 25, 1, 'MASUK', '2019-09-03', 1),
(168, 6, 25, 1, 'MASUK', '2019-09-03', 1),
(169, 7, 25, 1, 'MASUK', '2019-09-03', 1),
(170, 8, 25, 1, 'MASUK', '2019-09-03', 1),
(171, 9, 25, 1, 'MASUK', '2019-09-03', 1),
(172, 1, 25, 1, 'MASUK', '2019-09-10', 1),
(173, 2, 25, 1, 'MASUK', '2019-09-10', 1),
(174, 3, 25, 1, 'MASUK', '2019-09-10', 1),
(175, 4, 25, 1, 'MASUK', '2019-09-10', 1),
(176, 5, 25, 1, 'MASUK', '2019-09-10', 1),
(177, 6, 25, 1, 'MASUK', '2019-09-10', 1),
(178, 7, 25, 1, 'MASUK', '2019-09-10', 1),
(179, 8, 25, 1, 'MASUK', '2019-09-10', 1),
(180, 9, 25, 1, 'MASUK', '2019-09-10', 1),
(181, 1, 25, 1, 'MASUK', '2019-09-17', 1),
(182, 2, 25, 1, 'MASUK', '2019-09-17', 1),
(183, 3, 25, 1, 'MASUK', '2019-09-17', 1),
(184, 4, 25, 1, 'MASUK', '2019-09-17', 1),
(185, 5, 25, 1, 'MASUK', '2019-09-17', 1),
(186, 6, 25, 1, 'MASUK', '2019-09-17', 1),
(187, 7, 25, 1, 'MASUK', '2019-09-17', 1),
(188, 8, 25, 1, 'MASUK', '2019-09-17', 1),
(189, 9, 25, 1, 'MASUK', '2019-09-17', 1),
(190, 1, 25, 1, 'MASUK', '2019-09-24', 1),
(191, 2, 25, 1, 'MASUK', '2019-09-24', 1),
(192, 3, 25, 1, 'MASUK', '2019-09-24', 1),
(193, 4, 25, 1, 'MASUK', '2019-09-24', 1),
(194, 5, 25, 1, 'MASUK', '2019-09-24', 1),
(195, 6, 25, 1, 'MASUK', '2019-09-24', 1),
(196, 7, 25, 1, 'MASUK', '2019-09-24', 1),
(197, 8, 25, 1, 'MASUK', '2019-09-24', 1),
(198, 9, 25, 1, 'MASUK', '2019-09-24', 1),
(199, 1, 25, 1, 'MASUK', '2019-10-01', 1),
(200, 2, 25, 1, 'MASUK', '2019-07-23', 1),
(201, 3, 25, 1, 'MASUK', '2019-07-23', 1),
(202, 4, 25, 1, 'MASUK', '2019-10-01', 1),
(203, 5, 25, 1, 'MASUK', '2019-10-01', 1),
(204, 6, 25, 1, 'MASUK', '2019-10-01', 1),
(205, 7, 25, 1, 'MASUK', '2019-10-01', 1),
(206, 8, 25, 1, 'MASUK', '2019-10-01', 1),
(207, 9, 25, 1, 'MASUK', '2019-10-01', 1),
(208, 1, 25, 1, 'MASUK', '2019-10-08', 1),
(209, 2, 25, 1, 'MASUK', '2019-10-08', 1),
(210, 3, 25, 1, 'MASUK', '2019-10-08', 1),
(211, 4, 25, 1, 'MASUK', '2019-10-08', 1),
(212, 5, 25, 1, 'MASUK', '2019-10-08', 1),
(213, 6, 25, 1, 'MASUK', '2019-10-08', 1),
(214, 7, 25, 1, 'MASUK', '2019-10-08', 1),
(215, 8, 25, 1, 'MASUK', '2019-10-08', 1),
(216, 9, 25, 1, 'MASUK', '2019-10-08', 1),
(217, 1, 6, 1, 'MASUK', '2019-07-22', 1),
(218, 2, 6, 1, 'MASUK', '2019-07-22', 1),
(219, 3, 6, 1, 'MASUK', '2019-07-22', 1),
(220, 4, 6, 1, 'MASUK', '2019-07-22', 1),
(221, 5, 6, 1, 'MASUK', '2019-07-22', 1),
(222, 6, 6, 1, 'MASUK', '2019-07-22', 1),
(223, 7, 6, 1, 'MASUK', '2019-07-22', 1),
(224, 8, 6, 1, 'MASUK', '2019-07-22', 1),
(225, 9, 6, 1, 'MASUK', '2019-07-22', 1),
(226, 1, 6, 1, 'MASUK', '2019-07-29', 1),
(227, 2, 6, 1, 'MASUK', '2019-07-29', 1),
(228, 3, 6, 1, 'MASUK', '2019-07-29', 1),
(229, 4, 6, 1, 'MASUK', '2019-07-29', 1),
(230, 5, 6, 1, 'MASUK', '2019-07-29', 1),
(231, 6, 6, 1, 'MASUK', '2019-07-29', 1),
(232, 7, 6, 1, 'MASUK', '2019-07-29', 1),
(233, 8, 6, 1, 'MASUK', '2019-07-29', 1),
(234, 9, 6, 1, 'MASUK', '2019-07-29', 1),
(235, 1, 6, 1, 'MASUK', '2019-08-05', 1),
(236, 2, 6, 1, 'MASUK', '2019-08-05', 1),
(237, 3, 6, 1, 'MASUK', '2019-08-05', 1),
(238, 4, 6, 1, 'MASUK', '2019-08-05', 1),
(239, 5, 6, 1, 'MASUK', '2019-08-05', 1),
(240, 6, 6, 1, 'MASUK', '2019-08-05', 1),
(241, 7, 6, 1, 'MASUK', '2019-08-05', 1),
(242, 8, 6, 1, 'MASUK', '2019-08-05', 1),
(243, 9, 6, 1, 'MASUK', '2019-08-05', 1),
(244, 1, 6, 1, 'MASUK', '2019-08-12', 1),
(245, 2, 6, 1, 'MASUK', '2019-08-12', 1),
(246, 3, 6, 1, 'MASUK', '2019-08-12', 1),
(247, 4, 6, 1, 'MASUK', '2019-08-12', 1),
(248, 5, 6, 1, 'MASUK', '2019-08-12', 1),
(249, 6, 6, 1, 'MASUK', '2019-08-12', 1),
(250, 7, 6, 1, 'MASUK', '2019-08-12', 1),
(251, 8, 6, 1, 'MASUK', '2019-08-12', 1),
(252, 9, 6, 1, 'MASUK', '2019-08-12', 1),
(253, 1, 6, 1, 'MASUK', '2019-08-19', 1),
(254, 2, 6, 1, 'MASUK', '2019-08-19', 1),
(255, 3, 6, 1, 'MASUK', '2019-08-19', 1),
(256, 4, 6, 1, 'MASUK', '2019-08-19', 1),
(257, 5, 6, 1, 'MASUK', '2019-08-19', 1),
(258, 6, 6, 1, 'MASUK', '2019-08-19', 1),
(259, 7, 6, 1, 'MASUK', '2019-08-19', 1),
(260, 8, 6, 1, 'MASUK', '2019-08-19', 1),
(261, 9, 6, 1, 'MASUK', '2019-08-19', 1),
(262, 1, 7, 1, 'MASUK', '2019-07-23', 1),
(263, 2, 7, 1, 'MASUK', '2019-07-23', 1),
(264, 3, 7, 1, 'MASUK', '2019-07-23', 1),
(265, 4, 7, 1, 'MASUK', '2019-07-23', 1),
(266, 5, 7, 1, 'MASUK', '2019-07-23', 1),
(267, 6, 7, 1, 'MASUK', '2019-07-23', 1),
(268, 7, 7, 1, 'MASUK', '2019-07-23', 1),
(269, 8, 7, 1, 'MASUK', '2019-07-23', 1),
(270, 9, 7, 1, 'MASUK', '2019-07-23', 1),
(271, 1, 7, 1, 'MASUK', '2019-08-06', 1),
(272, 2, 7, 1, 'MASUK', '2019-08-06', 1),
(273, 3, 7, 1, 'MASUK', '2019-08-06', 1),
(274, 4, 7, 1, 'MASUK', '2019-08-06', 1),
(275, 5, 7, 1, 'MASUK', '2019-08-06', 1),
(276, 6, 7, 1, 'MASUK', '2019-08-06', 1),
(277, 7, 7, 1, 'MASUK', '2019-08-06', 1),
(278, 8, 7, 1, 'MASUK', '2019-08-06', 1),
(279, 9, 7, 1, 'MASUK', '2019-08-06', 1),
(280, 1, 7, 1, 'MASUK', '2019-09-03', 1),
(281, 2, 7, 1, 'MASUK', '2019-09-03', 1),
(282, 3, 7, 1, 'MASUK', '2019-09-03', 1),
(283, 4, 7, 1, 'MASUK', '2019-09-03', 1),
(284, 5, 7, 1, 'MASUK', '2019-09-03', 1),
(285, 6, 7, 1, 'MASUK', '2019-09-03', 1),
(286, 7, 7, 1, 'MASUK', '2019-09-03', 1),
(287, 8, 7, 1, 'MASUK', '2019-09-03', 1),
(288, 9, 7, 1, 'MASUK', '2019-09-03', 1),
(289, 1, 7, 1, 'MASUK', '2019-09-24', 1),
(290, 2, 7, 1, 'MASUK', '2019-09-24', 1),
(291, 3, 7, 1, 'MASUK', '2019-09-24', 1),
(292, 4, 7, 1, 'MASUK', '2019-09-24', 1),
(293, 5, 7, 1, 'MASUK', '2019-09-24', 1),
(294, 6, 7, 1, 'MASUK', '2019-09-24', 1),
(295, 7, 7, 1, 'MASUK', '2019-09-24', 1),
(296, 8, 7, 1, 'MASUK', '2019-09-24', 1),
(297, 9, 7, 1, 'MASUK', '2019-09-24', 1),
(298, 1, 7, 1, 'MASUK', '2019-09-15', 1),
(299, 2, 7, 1, 'MASUK', '2019-09-15', 1),
(300, 3, 7, 1, 'MASUK', '2019-09-15', 1),
(301, 4, 7, 1, 'MASUK', '2019-09-15', 1),
(302, 5, 7, 1, 'MASUK', '2019-09-15', 1),
(303, 6, 7, 1, 'MASUK', '2019-09-15', 1),
(304, 7, 7, 1, 'MASUK', '2019-09-15', 1),
(305, 8, 7, 1, 'MASUK', '2019-09-15', 1),
(306, 9, 7, 1, 'MASUK', '2019-09-15', 1),
(307, 1, 12, 1, 'MASUK', '2019-07-24', 1),
(308, 2, 12, 1, 'MASUK', '2019-07-24', 1),
(309, 3, 12, 1, 'MASUK', '2019-07-24', 1),
(310, 4, 12, 1, 'MASUK', '2019-07-24', 1),
(311, 5, 12, 1, 'MASUK', '2019-07-24', 1),
(312, 6, 12, 1, 'MASUK', '2019-07-24', 1),
(313, 7, 12, 1, 'MASUK', '2019-07-24', 1),
(314, 8, 12, 1, 'MASUK', '2019-07-24', 1),
(315, 9, 12, 1, 'MASUK', '2019-07-24', 1),
(316, 1, 12, 1, 'MASUK', '2019-07-31', 1),
(317, 2, 12, 1, 'MASUK', '2019-07-31', 1),
(318, 3, 12, 1, 'MASUK', '2019-07-31', 1),
(319, 4, 12, 1, 'MASUK', '2019-07-31', 1),
(320, 5, 12, 1, 'MASUK', '2019-07-31', 1),
(321, 6, 12, 1, 'MASUK', '2019-07-31', 1),
(322, 7, 12, 1, 'MASUK', '2019-07-31', 1),
(323, 8, 12, 1, 'MASUK', '2019-07-31', 1),
(324, 9, 12, 1, 'MASUK', '2019-07-31', 1),
(325, 1, 12, 1, 'MASUK', '2019-08-07', 1),
(326, 2, 12, 1, 'MASUK', '2019-08-07', 1),
(327, 3, 12, 1, 'MASUK', '2019-08-07', 1),
(328, 4, 12, 1, 'MASUK', '2019-08-07', 1),
(329, 5, 12, 1, 'MASUK', '2019-08-07', 1),
(330, 6, 12, 1, 'MASUK', '2019-08-07', 1),
(331, 7, 12, 1, 'MASUK', '2019-08-07', 1),
(332, 8, 12, 1, 'MASUK', '2019-08-07', 1),
(333, 9, 12, 1, 'MASUK', '2019-08-07', 1),
(334, 1, 16, 1, 'MASUK', '2019-07-25', 1),
(335, 2, 16, 1, 'MASUK', '2019-07-25', 1),
(336, 3, 16, 1, 'MASUK', '2019-07-25', 1),
(337, 4, 16, 1, 'MASUK', '2019-07-25', 1),
(338, 5, 16, 1, 'MASUK', '2019-07-25', 1),
(339, 6, 16, 1, 'MASUK', '2019-07-25', 1),
(340, 7, 16, 1, 'MASUK', '2019-07-25', 1),
(341, 8, 16, 1, 'MASUK', '2019-07-25', 1),
(342, 9, 16, 1, 'MASUK', '2019-07-25', 1),
(343, 1, 16, 1, 'MASUK', '2019-08-01', 1),
(344, 2, 16, 1, 'MASUK', '2019-08-01', 1),
(345, 3, 16, 1, 'MASUK', '2019-08-01', 1),
(346, 4, 16, 1, 'MASUK', '2019-08-01', 1),
(347, 5, 16, 1, 'MASUK', '2019-08-01', 1),
(348, 6, 16, 1, 'MASUK', '2019-08-01', 1),
(349, 7, 16, 1, 'MASUK', '2019-08-01', 1),
(350, 8, 16, 1, 'MASUK', '2019-08-01', 1),
(351, 9, 16, 1, 'MASUK', '2019-08-01', 1),
(352, 1, 16, 1, 'MASUK', '2019-08-08', 1),
(353, 2, 16, 1, 'MASUK', '2019-08-08', 1),
(354, 3, 16, 1, 'MASUK', '2019-08-08', 1),
(355, 4, 16, 1, 'MASUK', '2019-08-08', 1),
(356, 5, 16, 1, 'MASUK', '2019-08-08', 1),
(357, 6, 16, 1, 'MASUK', '2019-08-08', 1),
(358, 7, 16, 1, 'MASUK', '2019-08-08', 1),
(359, 8, 16, 1, 'MASUK', '2019-08-08', 1),
(360, 9, 16, 1, 'MASUK', '2019-08-08', 1),
(361, 1, 28, 1, 'MASUK', '2019-07-27', 1),
(362, 2, 28, 1, 'MASUK', '2019-07-27', 1),
(363, 3, 28, 1, 'MASUK', '2019-07-27', 1),
(364, 4, 28, 1, 'MASUK', '2019-07-27', 1),
(365, 5, 28, 1, 'MASUK', '2019-07-27', 1),
(366, 6, 28, 1, 'MASUK', '2019-07-27', 1),
(367, 7, 28, 1, 'MASUK', '2019-07-27', 1),
(368, 8, 28, 1, 'MASUK', '2019-07-27', 1),
(369, 9, 28, 1, 'MASUK', '2019-07-27', 1),
(370, 1, 28, 1, 'MASUK', '2019-08-03', 1),
(371, 2, 28, 1, 'MASUK', '2019-08-03', 1),
(372, 3, 28, 1, 'MASUK', '2019-08-03', 1),
(373, 4, 28, 1, 'MASUK', '2019-08-03', 1),
(374, 5, 28, 1, 'MASUK', '2019-08-03', 1),
(375, 6, 28, 1, 'MASUK', '2019-08-03', 1),
(376, 7, 28, 1, 'MASUK', '2019-08-03', 1),
(377, 8, 28, 1, 'MASUK', '2019-08-03', 1),
(378, 9, 28, 1, 'MASUK', '2019-08-03', 1),
(379, 1, 28, 1, 'MASUK', '2019-08-10', 1),
(380, 2, 28, 1, 'MASUK', '2019-08-10', 1),
(381, 3, 28, 1, 'MASUK', '2019-08-10', 1),
(382, 4, 28, 1, 'MASUK', '2019-08-10', 1),
(383, 5, 28, 1, 'MASUK', '2019-08-10', 1),
(384, 6, 28, 1, 'MASUK', '2019-08-10', 1),
(385, 7, 28, 1, 'MASUK', '2019-08-10', 1),
(386, 8, 28, 1, 'MASUK', '2019-08-10', 1),
(387, 9, 28, 1, 'MASUK', '2019-08-10', 1),
(388, 1, 29, 1, 'MASUK', '2019-07-27', 1),
(389, 2, 29, 1, 'MASUK', '2019-07-27', 1),
(390, 3, 29, 1, 'MASUK', '2019-07-27', 1),
(391, 4, 29, 1, 'MASUK', '2019-07-27', 1),
(392, 5, 29, 1, 'MASUK', '2019-07-27', 1),
(393, 6, 29, 1, 'MASUK', '2019-07-27', 1),
(394, 7, 29, 1, 'MASUK', '2019-07-27', 1),
(395, 8, 29, 1, 'MASUK', '2019-07-27', 1),
(396, 9, 29, 1, 'MASUK', '2019-07-27', 1),
(397, 1, 29, 1, 'MASUK', '2019-08-03', 1),
(398, 2, 29, 1, 'MASUK', '2019-08-03', 1),
(399, 3, 29, 1, 'MASUK', '2019-08-03', 1),
(400, 4, 29, 1, 'MASUK', '2019-08-03', 1),
(401, 5, 29, 1, 'MASUK', '2019-08-03', 1),
(402, 6, 29, 1, 'MASUK', '2019-08-03', 1),
(403, 7, 29, 1, 'MASUK', '2019-08-03', 1),
(404, 8, 29, 1, 'MASUK', '2019-08-03', 1),
(405, 9, 29, 1, 'MASUK', '2019-08-03', 1),
(406, 1, 29, 1, 'MASUK', '2019-08-10', 1),
(407, 2, 29, 1, 'MASUK', '2019-08-10', 1),
(408, 3, 29, 1, 'MASUK', '2019-08-10', 1),
(409, 4, 29, 1, 'MASUK', '2019-08-10', 1),
(410, 5, 29, 1, 'MASUK', '2019-08-10', 1),
(411, 6, 29, 1, 'MASUK', '2019-08-10', 1),
(412, 7, 29, 1, 'MASUK', '2019-08-10', 1),
(413, 8, 29, 1, 'MASUK', '2019-08-10', 1),
(414, 9, 29, 1, 'MASUK', '2019-08-10', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `kode_jadwal` varchar(50) NOT NULL,
  `id_pelajaran` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `periode_ajaran` varchar(100) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `kode_jadwal`, `id_pelajaran`, `id_kelas`, `periode_ajaran`, `hari`, `waktu`, `status`) VALUES
(2, 'senin', 3, 1, '2019', 'Senin', 'Subuh', 0),
(3, '', 4, 1, '2020', 'Senin', 'Pagi', 0),
(4, '', 5, 1, '2019', 'Senin', 'Siang', 0),
(5, '1SP', 3, 1, '2020', 'Selasa', 'Pagi', 0),
(6, '3BG', 5, 1, '2019', 'Senin', 'Malam', 0),
(7, '3PG', 8, 1, '2019', 'Selasa', 'Siang', 0),
(8, '1MSB', 3, 1, '2019', 'Selasa', 'Malam', 0),
(9, '', 6, 1, '2020', 'Rabu', 'Pagi', 0),
(10, 'rabu subuh', 5, 1, '2019', 'Rabu', 'Subuh', 0),
(11, '', 5, 1, '2020', 'Rabu', 'Siang', 0),
(12, '1ADBP', 7, 1, '2019', 'Rabu', 'Malam', 0),
(13, '', 8, 1, '2020', 'Kamis', 'Subuh', 0),
(14, '', 7, 1, '2020', 'Kamis', 'Pagi', 0),
(15, '', 4, 1, '2020', 'Kamis', 'Siang', 0),
(16, '1ALMK', 4, 1, '2019', 'Kamis', 'Malam', 0),
(17, '2JD', 14, 1, '2020', 'Jumat', 'Subuh', 0),
(18, '2JA', 11, 1, '2020', 'Jumat', 'Pagi', 0),
(19, 'K1T2020', 6, 1, '2020', 'Jumat', 'Siang', 0),
(20, 'tajwid', 6, 1, '2020', 'Senin', 'Malam', 0),
(21, 'T2021K5', 8, 1, '2020', 'Sabtu', 'Subuh', 0),
(23, '', 7, 1, '2020', 'Sabtu', 'Malam', 0),
(24, '', 5, 1, '2020', 'Sabtu', 'Siang', 0),
(25, '1HD', 10, 1, '2019', 'Selasa', 'Subuh', 0),
(26, '', 6, 1, '2020', 'Rabu', 'Siang', 0),
(27, '', 18, 1, '2020', 'Jumat', 'Siang', 0),
(28, '1TJW', 19, 1, '2019', 'Jumat', 'Subuh', 0),
(29, '1HFLAN', 16, 1, '2019', 'Sabtu', 'Subuh', 0),
(31, '1SA', 3, 1, '2021', 'Senin', 'Subuh', 1),
(32, '1HD', 10, 1, '2021', 'Selasa', 'Subuh', 1),
(37, '1SURATALMULK', 4, 1, '2021', 'Kamis', 'Malam', 1),
(38, '1TJW', 19, 1, '2021', 'Jumat', 'Subuh', 1),
(39, '1HFLAN', 4, 1, '2021', 'Sabtu', 'Subuh', 1),
(40, '1HFLD', 10, 1, '2021', 'Rabu', 'Subuh', 1),
(41, '1TJW', 19, 1, '2021', 'Rabu', 'Pagi', 1);

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
(1, 'I', 'Bacaan(Qira’ah)'),
(2, 'II', 'Pegon(Kitabah)'),
(3, 'III', 'Makna Lambat(Al-Taanni)'),
(4, 'IV', 'Makna Cepat (Al-Sarii’)'),
(5, 'V', 'Saringan (Al-Tadrib)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_jadwal`, `id_santri`, `id_kelas`, `nilai`, `tanggal`, `status`) VALUES
(1, 25, 1, 1, 80, '2019-10-08', 1),
(2, 25, 2, 1, 80, '2019-10-08', 1),
(3, 25, 3, 1, 80, '2019-10-08', 1),
(4, 25, 4, 1, 80, '2019-10-08', 1),
(5, 25, 5, 1, 80, '2019-10-08', 1),
(6, 25, 6, 1, 80, '2019-10-08', 1),
(7, 25, 7, 1, 80, '2019-10-08', 1),
(8, 25, 8, 1, 80, '2019-10-08', 1),
(9, 25, 9, 1, 80, '2019-10-08', 1),
(10, 2, 1, 1, 80, '2019-10-07', 1),
(11, 2, 2, 1, 80, '2019-10-07', 1),
(12, 2, 3, 1, 80, '2019-10-07', 1),
(13, 2, 4, 1, 80, '2019-10-07', 1),
(14, 2, 5, 1, 80, '2019-10-07', 1),
(15, 2, 6, 1, 80, '2019-10-07', 1),
(16, 2, 7, 1, 80, '2019-10-07', 1),
(17, 2, 8, 1, 80, '2019-10-07', 1),
(18, 2, 9, 1, 80, '2019-10-07', 1),
(19, 6, 1, 1, 80, '2019-08-19', 1),
(20, 6, 2, 1, 80, '2019-08-19', 1),
(21, 6, 3, 1, 80, '2019-08-19', 1),
(22, 6, 4, 1, 80, '2019-08-19', 1),
(23, 6, 5, 1, 80, '2019-08-19', 1),
(24, 6, 6, 1, 80, '2019-08-19', 1),
(25, 6, 7, 1, 80, '2019-08-19', 1),
(26, 6, 8, 1, 80, '2019-08-19', 1),
(27, 6, 9, 1, 80, '2019-08-19', 1),
(28, 7, 1, 1, 80, '2019-09-15', 1),
(29, 7, 2, 1, 80, '2019-09-15', 1),
(30, 7, 3, 1, 80, '2019-09-15', 1),
(31, 7, 4, 1, 80, '2019-09-15', 1),
(32, 7, 5, 1, 80, '2019-09-15', 1),
(33, 7, 6, 1, 80, '2019-09-15', 1),
(34, 7, 7, 1, 80, '2019-09-15', 1),
(35, 7, 8, 1, 80, '2019-09-15', 1),
(36, 7, 9, 1, 80, '2019-09-15', 1),
(37, 12, 1, 1, 80, '2019-08-07', 1),
(38, 12, 2, 1, 80, '2019-08-07', 1),
(39, 12, 3, 1, 80, '2019-08-07', 1),
(40, 12, 4, 1, 80, '2019-08-07', 1),
(41, 12, 5, 1, 80, '2019-08-07', 1),
(42, 12, 6, 1, 80, '2019-08-07', 1),
(43, 12, 7, 1, 80, '2019-08-07', 1),
(44, 12, 8, 1, 80, '2019-08-07', 1),
(45, 12, 9, 1, 80, '2019-08-07', 1),
(46, 16, 1, 1, 80, '2019-08-08', 1),
(47, 16, 2, 1, 80, '2019-08-08', 1),
(48, 16, 3, 1, 80, '2019-08-08', 1),
(49, 16, 4, 1, 80, '2019-08-08', 1),
(50, 16, 5, 1, 80, '2019-08-08', 1),
(51, 16, 6, 1, 80, '2019-08-08', 1),
(52, 16, 7, 1, 80, '2019-08-08', 1),
(53, 16, 8, 1, 80, '2019-08-08', 1),
(54, 16, 9, 1, 80, '2019-08-08', 1),
(55, 28, 1, 1, 80, '2019-08-09', 1),
(56, 28, 2, 1, 80, '2019-08-09', 1),
(57, 28, 3, 1, 80, '2019-08-09', 1),
(58, 28, 4, 1, 80, '2019-08-09', 1),
(59, 28, 5, 1, 80, '2019-08-09', 1),
(60, 28, 6, 1, 80, '2019-08-09', 1),
(61, 28, 7, 1, 80, '2019-08-09', 1),
(62, 28, 8, 1, 80, '2019-08-09', 1),
(63, 28, 9, 1, 80, '2019-08-09', 1),
(64, 29, 1, 1, 80, '2019-08-10', 1),
(65, 29, 2, 1, 80, '2019-08-10', 1),
(66, 29, 3, 1, 80, '2019-08-10', 1),
(67, 29, 4, 1, 80, '2019-08-10', 1),
(68, 29, 5, 1, 80, '2019-08-10', 1),
(69, 29, 6, 1, 80, '2019-08-10', 1),
(70, 29, 7, 1, 80, '2019-08-10', 1),
(71, 29, 8, 1, 80, '2019-08-10', 1),
(72, 29, 9, 1, 80, '2019-08-10', 1),
(92, 25, 1, 1, 90, '2021-08-24', 1),
(93, 25, 2, 1, 80, '2021-08-24', 1),
(94, 25, 3, 1, 70, '2021-08-24', 1),
(95, 25, 4, 1, 70, '2021-08-24', 1),
(96, 25, 5, 1, 80, '2021-08-24', 1),
(97, 25, 6, 1, 75, '2021-08-24', 1),
(98, 25, 7, 1, 80, '2021-08-24', 1),
(99, 25, 8, 1, 90, '2021-08-24', 1),
(100, 25, 9, 1, 85, '2021-08-24', 1),
(101, 25, 11, 1, 95, '2021-08-24', 1),
(102, 32, 1, 1, 80, '2021-08-24', 1),
(103, 32, 2, 1, 80, '2021-08-24', 1),
(104, 32, 3, 1, 80, '2021-08-24', 1),
(105, 32, 4, 1, 80, '2021-08-24', 1),
(106, 32, 5, 1, 80, '2021-08-24', 1),
(107, 32, 6, 1, 80, '2021-08-24', 1),
(108, 32, 7, 1, 80, '2021-08-24', 1),
(109, 32, 8, 1, 80, '2021-08-24', 1),
(110, 32, 9, 1, 80, '2021-08-24', 1),
(111, 32, 11, 1, 80, '2021-08-24', 1);

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
(16, '1KA', 'Hafalan Surat-surat Pendek', 3, 'Konsep dan Praktikum'),
(17, 'Hafalan Do’a', 'Hafalan Do’a', 6, 'Konsep dan Praktikum'),
(18, '2MD', 'Huruf Hijaiyah', 2, 'Materi'),
(19, '1DT', 'TAJWID', 2, 'Materi'),
(20, 'Khat wa Imla', 'Khat wa Imla', 7, 'Materi'),
(21, '2KS', 'Hafalan Surat-surat Pendek', 4, 'Konsep dan Praktikum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_daftar` int(11) NOT NULL,
  `status` enum('LUNAS','BELUM LUNAS','KIRIM','TIDAK SESUAI') NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `bukti_pembayaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_daftar`, `status`, `tanggal`, `jumlah`, `bukti_pembayaran`) VALUES
(1, 17, 'LUNAS', '2019-07-21', 500000, ''),
(2, 16, 'LUNAS', '2019-07-23', 500000, ''),
(3, 18, 'LUNAS', '2019-07-23', 500000, ''),
(4, 19, 'LUNAS', '2019-07-23', 500000, ''),
(5, 20, 'LUNAS', '2019-07-23', 500000, ''),
(6, 21, 'LUNAS', '2019-07-23', 500000, ''),
(7, 23, 'LUNAS', '2019-07-23', 500000, ''),
(8, 22, 'LUNAS', '2019-07-23', 500000, ''),
(9, 24, 'LUNAS', '2019-07-23', 500000, ''),
(11, 26, 'LUNAS', '2021-08-23', 500000, 'unnamed.png'),
(123, 16, 'LUNAS', '2019-08-03', 500000, 'foto.img'),
(345, 16, 'LUNAS', '2021-08-04', 50000, 'foto.jpg'),
(346, 235, 'LUNAS', '2021-08-25', 500000, 'Kudus.png');

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
(1, 2, 'Bacaan Surat Al-Baqarah 1-24', '2019-07-22'),
(2, 2, 'Bacaan Surat Al-Baqarah 25-48', '2019-07-29'),
(3, 2, 'Bacaan Surat Al-Baqarah 49-72', '2019-08-05'),
(4, 2, 'Bacaan Surat Al-Baqarah 73-96', '2019-08-12'),
(5, 2, 'Bacaan Surat Al-Baqarah 97-120', '2019-08-19'),
(6, 2, 'Bacaan Surat Al-Baqarah 121-144', '2019-08-26'),
(7, 2, 'Bacaan Surat Al-Baqarah 145-168', '2019-09-02'),
(8, 2, 'Bacaan Surat Al-Baqarah 169-192', '2019-09-09'),
(9, 2, 'Bacaan Surat Al-Baqarah 193-216', '2019-09-16'),
(10, 2, 'Bacaan Surat Al-Baqarah 217-240', '2019-09-23'),
(11, 2, 'Bacaan Surat Al-Baqarah 241-264', '2019-09-30'),
(12, 2, 'Bacaan Surat Al-Baqarah 265-286 dan penilaian', '2019-10-07'),
(13, 25, 'Hafalan Doa Mau Makan ', '2019-07-23'),
(14, 25, 'Hafalan Doa Setelah Makan', '2019-07-30'),
(15, 25, 'Hafalan Doa Mau Tidur', '2019-08-06'),
(16, 25, 'Hafalan Doa Setelah Tidur', '2019-08-13'),
(17, 25, 'Hafalan Doa Sebelum Wudhu', '2019-08-20'),
(18, 25, 'Hafalan Doa Sesudah Wudhu', '2019-08-27'),
(19, 25, 'Hafalan Doa Berbuka Puasa', '2019-09-03'),
(20, 25, 'Hafalan Doa Setelah Mendengar Adzan ', '2019-09-10'),
(21, 25, 'Hafalan Doa Masuk WC', '2019-09-17'),
(22, 25, 'Hafalan Doa Keluar WC', '2019-09-24'),
(23, 25, 'Praktek Hafalan Doa', '2019-10-01'),
(24, 25, ' penilaian ', '2019-10-08'),
(25, 6, 'Pembelajaran Toharah ', '2019-07-22'),
(26, 6, 'Pengertian Toharah ', '2019-07-29'),
(27, 6, 'Macam-Macam Toharah', '2019-08-05'),
(28, 6, 'Jenis-Jenis Toharah', '2019-08-12'),
(29, 6, 'Penilaian Toharah', '2019-08-19'),
(30, 7, 'pengenalan qiroah', '2019-07-23'),
(31, 7, 'sejarah qiroah', '2019-08-06'),
(32, 7, 'tteknik teknik qiroah', '2019-09-03'),
(33, 7, 'contoh dan praktek qiroah dasar', '2019-09-24'),
(34, 7, 'penilaian qiroah dasar', '2019-09-15'),
(35, 12, 'Materi Adab Prilaku', '2019-07-24'),
(36, 12, 'Materi Adab Prilaku', '2019-07-31'),
(37, 12, 'Penilaian Materi Lanjutan Toharah', '2019-08-07'),
(38, 16, 'Bacaan Surat Al-Mulk-An-Nas', '2019-07-25'),
(39, 16, 'Bacaan Surat Al-Mulk-An-Nas', '2019-08-01'),
(40, 16, 'Penilaian Bacaan Surat Al-Mulk-An-Nas', '2019-08-08'),
(41, 28, 'Materi Hukum-Hukum Tajwid', '2019-07-26'),
(42, 28, 'Materi Hukum-Hukum Tajwid', '2019-08-02'),
(43, 28, 'Penilaian Hukum-Hukum Tajwid', '2019-08-09'),
(44, 29, 'Hafalan Surat-Surat Pendek', '2019-07-27'),
(45, 29, 'Hafalan Surat-Surat Pendek', '2019-08-03'),
(46, 29, 'Penilaian Hafalan Surat-Surat Pendek', '2019-08-10'),
(50, 40, 'Hafalan doa tidur', '2021-08-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_daftar` int(11) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `jekel` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `umur` int(11) NOT NULL,
  `agama` varchar(11) NOT NULL,
  `alamat_tinggal` text NOT NULL,
  `nama_orang_tua` varchar(100) NOT NULL,
  `alamat_orang_tua` text NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `alamat_wali` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `nomor_wa` varchar(20) NOT NULL,
  `foto` text NOT NULL,
  `file_kk` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_daftar`, `nama_lengkap`, `tanggal_lahir`, `tanggal_daftar`, `jekel`, `tempat_lahir`, `umur`, `agama`, `alamat_tinggal`, `nama_orang_tua`, `alamat_orang_tua`, `nama_wali`, `alamat_wali`, `email`, `nomor_wa`, `foto`, `file_kk`, `status`) VALUES
(16, 'Agung Wahyudi ', '2003-05-25', '2019-07-15', 'Laki-laki', ' Tulung Agung ', 18, ' ISLAM ', ' Sambijajar, Sumbergempol, Tulung Agung ', ' Slamet Riadi ', ' Sambijajar, Sumbergempol, Tulung Agung ', ' - ', ' - ', ' AgungWahyudi123@gmail ', ' 62896556761 ', 'Wahyu.png', 'WAHYU_SETYO_BUDI_UTOMO_KK.pdf', 3),
(17, 'Dhian Nata Mahendra ', '2000-01-12', '2019-07-15', 'Perempuan', ' M. Bungo ', 21, ' ISLAM ', ' Mulya Jaya RT 06-RW 02 Pelepat, Bungo Jambi  ', ' Ali Akbar T ', ' Mulya Jaya RT 06-RW 02 Pelepat, Bungo Jambi  ', ' - ', '  -  ', 'DhianNataMahendra123@gmail', ' 62896556762 ', 'Jordan.png', 'LULUK_NURARIFAH_KK.pdf', 3),
(18, 'Fauziah Putri Indriana ', '2004-05-25', '2019-07-15', 'Laki-laki', ' Kudus ', 17, ' ISLAM ', ' Galiran - Sukolilo, Pati ', ' Heru Purwanto ', ' Galiran - Sukolilo, Pati ', ' - ', ' - ', ' FauziahPutriIndriana123@gmail ', ' 62896556763 ', '', '', 3),
(19, 'Fetty Zira Agnesia ', '2004-08-11', '0000-00-00', 'Laki-laki', ' Jepara ', 17, ' ISLAM ', ' Pendem RT 2 RW 2 Kec Kembang, Jepara ', ' Thoyyib Usman ', ' Pendem RT 2 RW 2 Kec Kembang, Jepara ', ' - ', ' - ', ' FettyZiraAgnesia123@gmail ', ' 62896556764 ', '', '', 3),
(20, 'Heni Nurul Aini ', '2004-02-24', '2019-07-15', 'Laki-laki', ' Banjarmasin ', 17, ' ISLAM ', ' Gayamsari, Semarang ', ' Hermanto ', ' Gayamsari, Semarang ', ' - ', ' - ', ' HeniNurulAini123@gmail ', ' 62896556765 ', '', '', 3),
(21, 'Ichsanuddin Al Bukhori ', '2007-07-24', '2019-07-15', 'Laki-laki', ' Kudus ', 14, ' ISLAM ', ' Panjang Baru RT 06 RW 02, Bae Kudus ', ' Abdul Rahman ', ' Panjang Baru RT 06 RW 02, Bae Kudus ', ' - ', ' - ', ' IchsanuddinAlBukhori123@gmail ', ' 62896556766 ', '', '', 3),
(22, 'Maya Fauziah ', '2004-09-24', '2019-07-15', 'Laki-laki', ' Kudus ', 16, ' ISLAM ', ' Gondosari RT 04-RW 09 Gebog Kudus ', ' Teguh Bunaim ', ' Gondosari RT 04-RW 09 Gebog Kudus ', ' - ', ' - ', ' MayaFauziah123@gmail ', ' 62896556767 ', '', '', 3),
(23, 'Muhammad Khoiru Mahfuth ', '2000-07-05', '2019-07-15', 'Laki-laki', ' Kudus ', 21, ' ISLAM ', ' Panjang Baru RT 06 RW 02, Bae Kudus ', ' Joko Darmadi ', ' Panjang Baru RT 06 RW 02, Bae Kudus ', ' - ', ' - ', ' MuhammadKhoiruMahfuth123@gmail ', ' 62896556768 ', '', '', 3),
(24, 'Reta Noor Arya aeni ', '2000-10-06', '2019-07-15', 'Laki-laki', ' Kudus ', 20, ' ISLAM ', ' Panjang Baru RT 06 RW 02, Bae Kudus ', ' Sutiyono ', ' Panjang Baru RT 06 RW 02, Bae Kudus ', ' - ', ' - ', ' RetaNoorAryaaeni123@gmail ', ' 62896556769 ', '', '', 3),
(26, 'Adelia syaqila', '2005-10-27', '2021-08-23', 'Laki-laki', 'Kudus', 15, 'Islam', ' Panjang ', 'Sujiwo', 'Panjang  ', '-', ' -  ', 'adeliasya123@gmail.com', '6282327591195', 'IMG_20200917_095739.jpg', 'part1.pdf', 2),
(234, 'eka', '2006-08-03', '2021-08-24', 'Perempuan', 'kudus', 16, 'islam', 'kudus', 'sujino', 'kudus', '-', '-', 'eka123@gmai.com', '081228029425', 'foto.img', 'foto.img', 1),
(235, 'Yusuf Nur HIdayat', '1999-01-02', '2021-08-25', 'Laki-laki', 'Demak', 22, 'ISLAM', ' DEMAK  ', 'SAYUTI', 'DEMAK   ', '-', '  -   ', 'yusuf321@gmail.com', '6282327591195', 'Abin.png', 'CANDRA_KK.pdf', 2);

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
(1, 'H. Marjono, S. Pd', 'marjono', '123', 1, 1),
(2, 'dessy adelia', 'dessy', '123', 2, 1),
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
  `id_kelas` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perkembangan_pembelajaran`
--

INSERT INTO `perkembangan_pembelajaran` (`id_perkembangan`, `id_santri`, `id_jadwal`, `id_kelas`, `keterangan`, `tanggal`, `status`) VALUES
(1, 1, 25, 1, 'Hafalan doa mau makan', '2019-07-23', 1),
(2, 2, 25, 1, 'Hafalan doa mau makan', '2019-07-23', 1),
(3, 3, 25, 1, 'Hafalan doa mau makan', '2019-07-23', 1),
(4, 4, 25, 1, 'Hafalan doa mau makan', '2019-07-23', 1),
(5, 5, 25, 1, 'Hafalan doa mau makan', '2019-07-23', 1),
(6, 6, 25, 1, 'Hafalan doa mau makan', '2019-07-23', 1),
(7, 7, 25, 1, 'Hafalan doa mau makan', '2019-07-23', 1),
(8, 8, 25, 1, 'Hafalan doa mau makan', '2019-07-23', 1),
(9, 9, 25, 1, 'Hafalan doa mau makan', '2019-07-23', 1),
(10, 1, 25, 1, 'Hafalan doa setelah makan', '2019-07-30', 1),
(11, 2, 25, 1, 'Hafalan doa setelah makan', '2019-07-30', 1),
(12, 3, 25, 1, 'Hafalan doa setelah makan', '2019-07-30', 1),
(13, 4, 25, 1, 'Hafalan doa setelah makan', '2019-07-30', 1),
(14, 5, 25, 1, 'Hafalan doa setelah makan', '2019-07-30', 1),
(15, 6, 25, 1, 'Hafalan doa setelah makan', '2019-07-30', 1),
(16, 7, 25, 1, 'Hafalan doa setelah makan', '2019-07-30', 1),
(17, 8, 25, 1, 'Hafalan doa setelah makan', '2019-07-30', 1),
(18, 9, 25, 1, 'Hafalan doa setelah makan', '2019-07-30', 1),
(19, 1, 25, 1, 'Hafalan doa mau tidur', '2019-08-06', 1),
(20, 2, 25, 1, 'Hafalan doa mau tidur', '2019-08-06', 1),
(21, 3, 25, 1, 'Hafalan doa mau tidur', '2019-08-06', 1),
(22, 4, 25, 1, 'Hafalan doa mau tidur', '2019-08-06', 1),
(23, 5, 25, 1, 'Hafalan doa mau tidur', '2019-08-06', 1),
(24, 6, 25, 1, 'Hafalan doa mau tidur', '2019-08-06', 1),
(25, 7, 25, 1, 'Hafalan doa mau tidur', '2019-08-06', 1),
(26, 8, 25, 1, 'Hafalan doa mau tidur', '2019-08-06', 1),
(27, 9, 25, 1, 'Hafalan doa mau tidur', '2019-08-06', 1),
(28, 1, 25, 1, 'Hafalan doa setelah tidur', '2019-08-13', 1),
(29, 2, 25, 1, 'Hafalan doa setelah tidur', '2019-08-13', 1),
(30, 3, 25, 1, 'Hafalan doa setelah tidur', '2019-08-13', 1),
(31, 4, 25, 1, 'Hafalan doa setelah tidur', '2019-08-13', 1),
(32, 5, 25, 1, 'Hafalan doa setelah tidur', '2019-08-13', 1),
(33, 6, 25, 1, 'Hafalan doa setelah tidur', '2019-08-13', 1),
(34, 7, 25, 1, 'Hafalan doa setelah tidur', '2019-08-13', 1),
(35, 8, 25, 1, 'Hafalan doa setelah tidur', '2019-08-13', 1),
(36, 9, 25, 1, 'Hafalan doa setelah tidur', '2019-08-13', 1),
(37, 1, 25, 1, 'Hafalan Doa sebelum wudlu', '2019-08-20', 1),
(38, 2, 25, 1, 'Hafalan Doa sebelum wudlu', '2019-08-20', 1),
(39, 3, 25, 1, 'Hafalan Doa sebelum wudlu', '2019-08-20', 1),
(40, 4, 25, 1, 'Hafalan Doa sebelum wudlu', '2019-08-20', 1),
(41, 5, 25, 1, 'Hafalan Doa sebelum wudlu', '2019-08-20', 1),
(42, 6, 25, 1, 'Hafalan Doa sebelum wudlu', '2019-08-20', 1),
(43, 7, 25, 1, 'Hafalan Doa sebelum wudlu', '2019-08-20', 1),
(44, 8, 25, 1, 'Hafalan Doa sebelum wudlu', '2019-08-20', 1),
(45, 9, 25, 1, 'Hafalan Doa sebelum wudlu', '2019-08-20', 1),
(46, 1, 25, 1, 'Hafalan Doa sesuasah Wudhlu', '2019-08-27', 1),
(47, 2, 25, 1, 'Hafalan Doa sesuasah Wudhlu', '2019-08-27', 1),
(48, 3, 25, 1, 'Hafalan Doa sesuasah Wudhlu', '2019-08-27', 1),
(49, 4, 25, 1, 'Hafalan Doa sesuasah Wudhlu', '2019-08-27', 1),
(50, 5, 25, 1, 'Hafalan Doa sesuasah Wudhlu', '2019-08-27', 1),
(51, 6, 25, 1, 'Hafalan Doa sesuasah Wudhlu', '2019-08-27', 1),
(52, 7, 25, 1, 'Hafalan Doa sesuasah Wudhlu', '2019-08-27', 1),
(53, 8, 25, 1, 'Hafalan Doa sesuasah Wudhlu', '2019-08-27', 1),
(54, 9, 25, 1, 'Hafalan Doa sesuasah Wudhlu', '2019-08-27', 1),
(55, 1, 25, 1, 'Hafalan Doa Berbuka puasa', '2019-09-03', 1),
(56, 2, 25, 1, 'Hafalan Doa Berbuka puasa', '2019-09-03', 1),
(57, 3, 25, 1, 'Hafalan Doa Berbuka puasa', '2019-09-03', 1),
(58, 4, 25, 1, 'Hafalan Doa Berbuka puasa', '2019-09-03', 1),
(59, 5, 25, 1, 'Hafalan Doa Berbuka puasa', '2019-09-03', 1),
(60, 6, 25, 1, 'Hafalan Doa Berbuka puasa', '2019-09-03', 1),
(61, 7, 25, 1, 'Hafalan Doa Berbuka puasa', '2019-09-03', 1),
(62, 8, 25, 1, 'Hafalan Doa Berbuka puasa', '2019-09-03', 1),
(63, 9, 25, 1, 'Hafalan Doa Berbuka puasa', '2019-09-03', 1),
(64, 1, 25, 1, 'Hafalan Doa Setelah mendengar adzan', '2019-09-10', 1),
(65, 2, 25, 1, 'Hafalan Doa Setelah mendengar adzan', '2019-09-10', 1),
(66, 3, 25, 1, 'Hafalan Doa Setelah mendengar adzan', '2019-09-10', 1),
(67, 4, 25, 1, 'Hafalan Doa Setelah mendengar adzan', '2019-09-10', 1),
(68, 5, 25, 1, 'Hafalan Doa Setelah mendengar adzan', '2019-09-10', 1),
(69, 6, 25, 1, 'Hafalan Doa Setelah mendengar adzan', '2019-09-10', 1),
(70, 7, 25, 1, 'Hafalan Doa Setelah mendengar adzan', '2019-09-10', 1),
(71, 8, 25, 1, 'Hafalan Doa Setelah mendengar adzan', '2019-09-10', 1),
(72, 9, 25, 1, 'Hafalan Doa Setelah mendengar adzan', '2019-09-10', 1),
(73, 1, 25, 1, 'Hafalan Doa masuk Wc', '2019-09-17', 1),
(74, 2, 25, 1, 'Hafalan Doa masuk Wc', '2019-09-17', 1),
(75, 3, 25, 1, 'Hafalan Doa masuk Wc', '2019-09-17', 1),
(76, 4, 25, 1, 'Hafalan Doa masuk Wc', '2019-09-17', 1),
(77, 5, 25, 1, 'Hafalan Doa masuk Wc', '2019-09-17', 1),
(78, 6, 25, 1, 'Hafalan Doa masuk Wc', '2019-09-17', 1),
(79, 7, 25, 1, 'Hafalan Doa masuk Wc', '2019-09-17', 1),
(80, 8, 25, 1, 'Hafalan Doa masuk Wc', '2019-09-17', 1),
(81, 9, 25, 1, 'Hafalan Doa masuk Wc', '2019-09-17', 1),
(82, 1, 25, 1, 'Hafalan Doa keluar WC', '2019-09-24', 1),
(83, 2, 25, 1, 'Hafalan Doa keluar WC', '2019-09-24', 1),
(84, 3, 25, 1, 'Hafalan Doa keluar WC', '2019-09-24', 1),
(85, 4, 25, 1, 'Hafalan Doa keluar WC', '2019-09-24', 1),
(86, 5, 25, 1, 'Hafalan Doa keluar WC', '2019-09-24', 1),
(87, 6, 25, 1, 'Hafalan Doa keluar WC', '2019-09-24', 1),
(88, 7, 25, 1, 'Hafalan Doa keluar WC', '2019-09-24', 1),
(89, 8, 25, 1, 'Hafalan Doa keluar WC', '2019-09-24', 1),
(90, 9, 25, 1, 'Hafalan Doa keluar WC', '2019-09-24', 1),
(91, 1, 25, 1, ' praktek bersuci ', '2019-10-01', 1),
(92, 2, 25, 1, ' praktek bersuci ', '2019-10-01', 1),
(93, 3, 25, 1, ' praktek bersuci ', '2019-10-01', 1),
(94, 4, 25, 1, ' praktek bersuci ', '2019-10-01', 1),
(95, 5, 25, 1, ' praktek bersuci ', '2019-10-01', 1),
(96, 6, 25, 1, ' praktek bersuci ', '2019-10-01', 1),
(97, 7, 25, 1, ' praktek bersuci ', '2019-10-01', 1),
(98, 8, 25, 1, ' praktek bersuci ', '2019-10-01', 1),
(99, 9, 25, 1, ' praktek bersuci ', '2019-10-01', 1),
(100, 1, 25, 1, ' penilaian ', '2019-10-08', 1),
(101, 2, 25, 1, ' penilaian ', '2019-10-08', 1),
(102, 3, 25, 1, ' penilaian ', '2019-10-08', 1),
(103, 4, 25, 1, ' penilaian ', '2019-10-08', 1),
(104, 5, 25, 1, ' penilaian ', '2019-10-08', 1),
(105, 6, 25, 1, ' penilaian ', '2019-10-08', 1),
(106, 7, 25, 1, ' penilaian ', '2019-10-08', 1),
(107, 8, 25, 1, ' penilaian ', '2019-10-08', 1),
(108, 9, 25, 1, ' penilaian ', '2019-10-08', 1),
(109, 1, 2, 1, 'Bacaan Surat Al-Baqarah 1-24', '2019-07-22', 1),
(110, 2, 2, 1, 'Bacaan Surat Al-Baqarah 1-24', '2019-07-22', 1),
(111, 3, 2, 1, 'Bacaan Surat Al-Baqarah 1-24', '2019-07-22', 1),
(112, 4, 2, 1, 'Bacaan Surat Al-Baqarah 1-24', '2019-07-22', 1),
(113, 5, 2, 1, 'Bacaan Surat Al-Baqarah 1-24', '2019-07-22', 1),
(114, 6, 2, 1, 'Bacaan Surat Al-Baqarah 1-24', '2019-07-22', 1),
(115, 7, 2, 1, 'Bacaan Surat Al-Baqarah 1-24', '2019-07-22', 1),
(116, 8, 2, 1, 'Bacaan Surat Al-Baqarah 1-24', '2019-07-22', 1),
(117, 9, 2, 1, 'Bacaan Surat Al-Baqarah 1-24', '2019-07-22', 1),
(118, 1, 2, 1, 'Bacaan Surat Al-Baqarah 25-48', '2019-07-29', 1),
(119, 2, 2, 1, 'Bacaan Surat Al-Baqarah 25-48', '2019-07-29', 1),
(120, 3, 2, 1, 'Bacaan Surat Al-Baqarah 25-48', '2019-07-29', 1),
(121, 4, 2, 1, 'Bacaan Surat Al-Baqarah 25-48', '2019-07-29', 1),
(122, 5, 2, 1, 'Bacaan Surat Al-Baqarah 25-48', '2019-07-29', 1),
(123, 6, 2, 1, 'Bacaan Surat Al-Baqarah 25-48', '2019-07-29', 1),
(124, 7, 2, 1, 'Bacaan Surat Al-Baqarah 25-48', '2019-07-29', 1),
(125, 8, 2, 1, 'Bacaan Surat Al-Baqarah 25-48', '2019-07-29', 1),
(126, 9, 2, 1, 'Bacaan Surat Al-Baqarah 25-48', '2019-07-29', 1),
(127, 1, 2, 1, 'Bacaan Surat Al-Baqarah 49-72', '2019-08-05', 1),
(128, 2, 2, 1, 'Bacaan Surat Al-Baqarah 49-72', '2019-08-05', 1),
(129, 3, 2, 1, 'Bacaan Surat Al-Baqarah 49-72', '2019-08-05', 1),
(130, 4, 2, 1, 'Bacaan Surat Al-Baqarah 49-72', '2019-08-05', 1),
(131, 5, 2, 1, 'Bacaan Surat Al-Baqarah 49-72', '2019-08-05', 1),
(132, 6, 2, 1, 'Bacaan Surat Al-Baqarah 49-72', '2019-08-05', 1),
(133, 7, 2, 1, 'Bacaan Surat Al-Baqarah 49-72', '2019-08-05', 1),
(134, 8, 2, 1, 'Bacaan Surat Al-Baqarah 49-72', '2019-08-05', 1),
(135, 9, 2, 1, 'Bacaan Surat Al-Baqarah 49-72', '2019-08-05', 1),
(136, 1, 2, 1, 'Bacaan Surat Al-Baqarah 73-96', '2019-08-12', 1),
(137, 2, 2, 1, 'Bacaan Surat Al-Baqarah 73-96', '2019-08-12', 1),
(138, 3, 2, 1, 'Bacaan Surat Al-Baqarah 73-96', '2019-08-12', 1),
(139, 4, 2, 1, 'Bacaan Surat Al-Baqarah 73-96', '2019-08-12', 1),
(140, 5, 2, 1, 'Bacaan Surat Al-Baqarah 73-96', '2019-08-12', 1),
(141, 6, 2, 1, 'Bacaan Surat Al-Baqarah 73-96', '2019-08-12', 1),
(142, 7, 2, 1, 'Bacaan Surat Al-Baqarah 73-96', '2019-08-12', 1),
(143, 8, 2, 1, 'Bacaan Surat Al-Baqarah 73-96', '2019-08-12', 1),
(144, 9, 2, 1, 'Bacaan Surat Al-Baqarah 73-96', '2019-08-12', 1),
(145, 1, 2, 1, 'Bacaan Surat Al-Baqarah 97-120', '2019-08-19', 1),
(146, 2, 2, 1, 'Bacaan Surat Al-Baqarah 97-120', '2019-08-19', 1),
(147, 3, 2, 1, 'Bacaan Surat Al-Baqarah 97-120', '2019-08-19', 1),
(148, 4, 2, 1, 'Bacaan Surat Al-Baqarah 97-120', '2019-08-19', 1),
(149, 5, 2, 1, 'Bacaan Surat Al-Baqarah 97-120', '2019-08-19', 1),
(150, 6, 2, 1, 'Bacaan Surat Al-Baqarah 97-120', '2019-08-19', 1),
(151, 7, 2, 1, 'Bacaan Surat Al-Baqarah 97-120', '2019-08-19', 1),
(152, 8, 2, 1, 'Bacaan Surat Al-Baqarah 97-120', '2019-08-19', 1),
(153, 9, 2, 1, 'Bacaan Surat Al-Baqarah 97-120', '2019-08-19', 1),
(154, 1, 2, 1, 'Bacaan Surat Al-Baqarah 121-144', '2019-08-26', 1),
(155, 2, 2, 1, 'Bacaan Surat Al-Baqarah 121-144', '2019-08-26', 1),
(156, 3, 2, 1, 'Bacaan Surat Al-Baqarah 121-144', '2019-08-26', 1),
(157, 4, 2, 1, 'Bacaan Surat Al-Baqarah 121-144', '2019-08-26', 1),
(158, 5, 2, 1, 'Bacaan Surat Al-Baqarah 121-144', '2019-08-26', 1),
(159, 6, 2, 1, 'Bacaan Surat Al-Baqarah 121-144', '2019-08-26', 1),
(160, 7, 2, 1, 'Bacaan Surat Al-Baqarah 121-144', '2019-08-26', 1),
(161, 8, 2, 1, 'Bacaan Surat Al-Baqarah 121-144', '2019-08-26', 1),
(162, 9, 2, 1, 'Bacaan Surat Al-Baqarah 121-144', '2019-08-26', 1),
(163, 1, 2, 1, 'Bacaan Surat Al-Baqarah 145-168', '2019-09-02', 1),
(164, 2, 2, 1, 'Bacaan Surat Al-Baqarah 145-168', '2019-09-02', 1),
(165, 3, 2, 1, 'Bacaan Surat Al-Baqarah 145-168', '2019-09-02', 1),
(166, 4, 2, 1, 'Bacaan Surat Al-Baqarah 145-168', '2019-09-02', 1),
(167, 5, 2, 1, 'Bacaan Surat Al-Baqarah 145-168', '2019-09-02', 1),
(168, 6, 2, 1, 'Bacaan Surat Al-Baqarah 145-168', '2019-09-02', 1),
(169, 7, 2, 1, 'Bacaan Surat Al-Baqarah 145-168', '2019-09-02', 1),
(170, 8, 2, 1, 'Bacaan Surat Al-Baqarah 145-168', '2019-09-02', 1),
(171, 9, 2, 1, 'Bacaan Surat Al-Baqarah 145-168', '2019-09-02', 1),
(172, 1, 2, 1, 'Bacaan Surat Al-Baqarah 169-192', '2019-09-09', 1),
(173, 2, 2, 1, 'Bacaan Surat Al-Baqarah 169-192', '2019-09-09', 1),
(174, 3, 2, 1, 'Bacaan Surat Al-Baqarah 169-192', '2019-09-09', 1),
(175, 4, 2, 1, 'Bacaan Surat Al-Baqarah 169-192', '2019-09-09', 1),
(176, 5, 2, 1, 'Bacaan Surat Al-Baqarah 169-192', '2019-09-09', 1),
(177, 6, 2, 1, 'Bacaan Surat Al-Baqarah 169-192', '2019-09-09', 1),
(178, 7, 2, 1, 'Bacaan Surat Al-Baqarah 169-192', '2019-09-09', 1),
(179, 8, 2, 1, 'Bacaan Surat Al-Baqarah 169-192', '2019-09-09', 1),
(180, 9, 2, 1, 'Bacaan Surat Al-Baqarah 169-192', '2019-09-09', 1),
(181, 1, 2, 1, 'Bacaan Surat Al-Baqarah 193-216', '2019-09-16', 1),
(182, 2, 2, 1, 'Bacaan Surat Al-Baqarah 193-216', '2019-09-16', 1),
(183, 3, 2, 1, 'Bacaan Surat Al-Baqarah 193-216', '2019-09-16', 1),
(184, 4, 2, 1, 'Bacaan Surat Al-Baqarah 193-216', '2019-09-16', 1),
(185, 5, 2, 1, 'Bacaan Surat Al-Baqarah 193-216', '2019-09-16', 1),
(186, 6, 2, 1, 'Bacaan Surat Al-Baqarah 193-216', '2019-09-16', 1),
(187, 7, 2, 1, 'Bacaan Surat Al-Baqarah 193-216', '2019-09-16', 1),
(188, 8, 2, 1, 'Bacaan Surat Al-Baqarah 193-216', '2019-09-16', 1),
(189, 9, 2, 1, 'Bacaan Surat Al-Baqarah 193-216', '2019-09-16', 1),
(190, 1, 2, 1, 'Bacaan Surat Al-Baqarah 217-240', '2019-09-23', 1),
(191, 2, 2, 1, 'Bacaan Surat Al-Baqarah 217-240', '2019-09-23', 1),
(192, 3, 2, 1, 'Bacaan Surat Al-Baqarah 217-240', '2019-09-23', 1),
(193, 4, 2, 1, 'Bacaan Surat Al-Baqarah 217-240', '2019-09-23', 1),
(194, 5, 2, 1, 'Bacaan Surat Al-Baqarah 217-240', '2019-09-23', 1),
(195, 6, 2, 1, 'Bacaan Surat Al-Baqarah 217-240', '2019-09-23', 1),
(196, 7, 2, 1, 'Bacaan Surat Al-Baqarah 217-240', '2019-09-23', 1),
(197, 8, 2, 1, 'Bacaan Surat Al-Baqarah 217-240', '2019-09-23', 1),
(198, 9, 2, 1, 'Bacaan Surat Al-Baqarah 217-240', '2019-09-23', 1),
(199, 1, 2, 1, 'Bacaan Surat Al-Baqarah 241-264', '2019-09-30', 1),
(200, 2, 2, 1, 'Bacaan Surat Al-Baqarah 241-264', '2019-09-30', 1),
(201, 3, 2, 1, 'Bacaan Surat Al-Baqarah 241-264', '2019-09-30', 1),
(202, 4, 2, 1, 'Bacaan Surat Al-Baqarah 241-264', '2019-09-30', 1),
(203, 5, 2, 1, 'Bacaan Surat Al-Baqarah 241-264', '2019-09-30', 1),
(204, 6, 2, 1, 'Bacaan Surat Al-Baqarah 241-264', '2019-09-30', 1),
(205, 7, 2, 1, 'Bacaan Surat Al-Baqarah 241-264', '2019-09-30', 1),
(206, 8, 2, 1, 'Bacaan Surat Al-Baqarah 241-264', '2019-09-30', 1),
(207, 9, 2, 1, 'Bacaan Surat Al-Baqarah 241-264', '2019-09-30', 1),
(208, 1, 2, 1, 'Bacaan Surat Al-Baqarah 265-286 dan penilaian', '2019-10-07', 1),
(209, 2, 2, 1, 'Bacaan Surat Al-Baqarah 265-286 dan penilaian', '2019-10-07', 1),
(210, 3, 2, 1, 'Bacaan Surat Al-Baqarah 265-286 dan penilaian', '2019-10-07', 1),
(211, 4, 2, 1, 'Bacaan Surat Al-Baqarah 265-286 dan penilaian', '2019-10-07', 1),
(212, 5, 2, 1, 'Bacaan Surat Al-Baqarah 265-286 dan penilaian', '2019-10-07', 1),
(213, 6, 2, 1, 'Bacaan Surat Al-Baqarah 265-286 dan penilaian', '2019-10-07', 1),
(214, 7, 2, 1, 'Bacaan Surat Al-Baqarah 265-286 dan penilaian', '2019-10-07', 1),
(215, 8, 2, 1, 'Bacaan Surat Al-Baqarah 265-286 dan penilaian', '2019-10-07', 1),
(216, 9, 2, 1, 'Bacaan Surat Al-Baqarah 265-286 dan penilaian', '2019-10-07', 1),
(217, 1, 6, 1, 'Pembelajaran Toharah ', '2019-07-22', 1),
(218, 2, 6, 1, 'Pembelajaran Toharah ', '2019-07-22', 1),
(219, 3, 6, 1, 'Pembelajaran Toharah ', '2019-07-22', 1),
(220, 4, 6, 1, 'Pembelajaran Toharah ', '2019-07-22', 1),
(221, 5, 6, 1, 'Pembelajaran Toharah ', '2019-07-22', 1),
(222, 6, 6, 1, 'Pembelajaran Toharah ', '2019-07-22', 1),
(223, 7, 6, 1, 'Pembelajaran Toharah ', '2019-07-22', 1),
(224, 8, 6, 1, 'Pembelajaran Toharah ', '2019-07-22', 1),
(225, 9, 6, 1, 'Pembelajaran Toharah ', '2019-07-22', 1),
(226, 1, 6, 1, 'Pengertian Toharah ', '2019-07-29', 1),
(227, 2, 6, 1, 'Pengertian Toharah ', '2019-07-29', 1),
(228, 3, 6, 1, 'Pengertian Toharah ', '2019-07-29', 1),
(229, 4, 6, 1, 'Pengertian Toharah ', '2019-07-29', 1),
(230, 5, 6, 1, 'Pengertian Toharah ', '2019-07-29', 1),
(231, 6, 6, 1, 'Pengertian Toharah ', '2019-07-29', 1),
(232, 7, 6, 1, 'Pengertian Toharah ', '2019-07-29', 1),
(233, 8, 6, 1, 'Pengertian Toharah ', '2019-07-29', 1),
(234, 9, 6, 1, 'Pengertian Toharah ', '2019-07-29', 1),
(235, 1, 6, 1, 'Macam-Macam Toharah', '2019-08-05', 1),
(236, 2, 6, 1, 'Macam-Macam Toharah', '2019-08-05', 1),
(237, 3, 6, 1, 'Macam-Macam Toharah', '2019-08-05', 1),
(238, 4, 6, 1, 'Macam-Macam Toharah', '2019-08-05', 1),
(239, 5, 6, 1, 'Macam-Macam Toharah', '2019-08-05', 1),
(240, 6, 6, 1, 'Macam-Macam Toharah', '2019-08-05', 1),
(241, 7, 6, 1, 'Macam-Macam Toharah', '2019-08-05', 1),
(242, 8, 6, 1, 'Macam-Macam Toharah', '2019-08-05', 1),
(243, 9, 6, 1, 'Macam-Macam Toharah', '2019-08-05', 1),
(244, 1, 6, 1, 'Jenis-Jenis Toharah', '2019-08-12', 1),
(245, 2, 6, 1, 'Jenis-Jenis Toharah', '2019-08-12', 1),
(246, 3, 6, 1, 'Jenis-Jenis Toharah', '2019-08-12', 1),
(247, 4, 6, 1, 'Jenis-Jenis Toharah', '2019-08-12', 1),
(248, 5, 6, 1, 'Jenis-Jenis Toharah', '2019-08-12', 1),
(249, 6, 6, 1, 'Jenis-Jenis Toharah', '2019-08-12', 1),
(250, 7, 6, 1, 'Jenis-Jenis Toharah', '2019-08-12', 1),
(251, 8, 6, 1, 'Jenis-Jenis Toharah', '2019-08-12', 1),
(252, 9, 6, 1, 'Jenis-Jenis Toharah', '2019-08-12', 1),
(253, 1, 6, 1, 'Penilaian Toharah', '2019-08-19', 1),
(254, 2, 6, 1, 'Penilaian Toharah', '2019-08-19', 1),
(255, 3, 6, 1, 'Penilaian Toharah', '2019-08-19', 1),
(256, 4, 6, 1, 'Penilaian Toharah', '2019-08-19', 1),
(257, 5, 6, 1, 'Penilaian Toharah', '2019-08-19', 1),
(258, 6, 6, 1, 'Penilaian Toharah', '2019-08-19', 1),
(259, 7, 6, 1, 'Penilaian Toharah', '2019-08-19', 1),
(260, 8, 6, 1, 'Penilaian Toharah', '2019-08-19', 1),
(261, 9, 6, 1, 'Penilaian Toharah', '2019-08-19', 1),
(262, 1, 7, 1, 'pengenalan qiroah', '2019-07-23', 1),
(263, 2, 7, 1, 'pengenalan qiroah', '2019-07-23', 1),
(264, 3, 7, 1, 'pengenalan qiroah', '2019-07-23', 1),
(265, 4, 7, 1, 'pengenalan qiroah', '2019-07-23', 1),
(266, 5, 7, 1, 'pengenalan qiroah', '2019-07-23', 1),
(267, 6, 7, 1, 'pengenalan qiroah', '2019-07-23', 1),
(268, 7, 7, 1, 'pengenalan qiroah', '2019-07-23', 1),
(269, 8, 7, 1, 'pengenalan qiroah', '2019-07-23', 1),
(270, 9, 7, 1, 'pengenalan qiroah', '2019-07-23', 1),
(271, 1, 7, 1, 'materi qiroah', '2019-08-06', 1),
(272, 2, 7, 1, 'materi qiroah', '2019-08-06', 1),
(273, 3, 7, 1, 'materi qiroah', '2019-08-06', 1),
(274, 4, 7, 1, 'materi qiroah', '2019-08-06', 1),
(275, 5, 7, 1, 'materi qiroah', '2019-08-06', 1),
(276, 6, 7, 1, 'materi qiroah', '2019-08-06', 1),
(277, 7, 7, 1, 'materi qiroah', '2019-08-06', 1),
(278, 8, 7, 1, 'materi qiroah', '2019-08-06', 1),
(279, 9, 7, 1, 'materi qiroah', '2019-08-06', 1),
(280, 1, 7, 1, 'tteknik teknik qiroah', '2019-09-03', 1),
(281, 2, 7, 1, 'tteknik teknik qiroah', '2019-09-03', 1),
(282, 3, 7, 1, 'teknik-teknik qiroah', '2019-09-03', 1),
(283, 4, 7, 1, 'teknik-teknik qiroah', '2019-09-03', 1),
(284, 5, 7, 1, 'teknik-teknik qiroah', '2019-09-03', 1),
(285, 6, 7, 1, 'teknik-teknik qiroah', '2019-09-03', 1),
(286, 7, 7, 1, 'teknik-teknik qiroah', '2019-09-03', 1),
(287, 8, 7, 1, 'teknik-teknik qiroah', '2019-09-03', 1),
(288, 9, 7, 1, 'teknik-teknik qiroah', '2019-09-03', 1),
(289, 1, 7, 1, 'contoh dan praktek qiroah dasar', '2019-09-24', 1),
(290, 2, 7, 1, 'contoh dan praktek qiroah dasar', '2019-09-24', 1),
(291, 3, 7, 1, 'contoh dan praktek qiroah dasar', '2019-09-24', 1),
(292, 4, 7, 1, 'contoh dan praktek qiroah dasar', '2019-09-24', 1),
(293, 5, 7, 1, 'contoh dan praktek qiroah dasar', '2019-09-24', 1),
(294, 6, 7, 1, 'contoh dan praktek qiroah dasar', '2019-09-24', 1),
(295, 7, 7, 1, 'contoh dan praktek qiroah dasar', '2019-09-24', 1),
(296, 8, 7, 1, 'contoh dan praktek qiroah dasar', '2019-09-24', 1),
(297, 9, 7, 1, 'contoh dan praktek qiroah dasar', '2019-09-24', 1),
(298, 1, 7, 1, 'penilaian qiroah dasar', '2019-09-15', 1),
(299, 2, 7, 1, 'penilaian qiroah dasar', '2019-09-15', 1),
(300, 3, 7, 1, 'penilaian qiroah dasar', '2019-09-15', 1),
(301, 4, 7, 1, 'penilaian qiroah dasar', '2019-09-15', 1),
(302, 5, 7, 1, 'penilaian qiroah dasar', '2019-09-15', 1),
(303, 6, 7, 1, 'penilaian qiroah dasar', '2019-09-15', 1),
(304, 7, 7, 1, 'penilaian qiroah dasar', '2019-09-15', 1),
(305, 8, 7, 1, 'penilaian qiroah dasar', '2019-09-15', 1),
(306, 9, 7, 1, 'penilaian qiroah dasar', '2019-09-15', 1),
(307, 1, 12, 1, 'Materi Adab Prilaku', '2019-07-24', 1),
(308, 2, 12, 1, 'Materi Adab Prilaku', '2019-07-24', 1),
(309, 3, 12, 1, 'Materi Adab Prilaku', '2019-07-24', 1),
(310, 4, 12, 1, 'Materi Adab Prilaku', '2019-07-24', 1),
(311, 5, 12, 1, 'Materi Adab Prilaku', '2019-07-24', 1),
(312, 6, 12, 1, 'Materi Adab Prilaku', '2019-07-24', 1),
(313, 7, 12, 1, 'Materi Adab Prilaku', '2019-07-24', 1),
(314, 8, 12, 1, 'Materi Adab Prilaku', '2019-07-24', 1),
(315, 9, 12, 1, 'Materi Adab Prilaku', '2019-07-24', 1),
(316, 1, 12, 1, 'Materi Adab Prilaku', '2019-07-31', 1),
(317, 2, 12, 1, 'Materi Adab Prilaku', '2019-07-31', 1),
(318, 3, 12, 1, 'Materi Adab Prilaku', '2019-07-31', 1),
(319, 4, 12, 1, 'Materi Adab Prilaku', '2019-07-31', 1),
(320, 5, 12, 1, 'Materi Adab Prilaku', '2019-07-31', 1),
(321, 6, 12, 1, 'Materi Adab Prilaku', '2019-07-31', 1),
(322, 7, 12, 1, 'Materi Adab Prilaku', '2019-07-31', 1),
(323, 8, 12, 1, 'Materi Adab Prilaku', '2019-07-31', 1),
(324, 9, 12, 1, 'Materi Adab Prilaku', '2019-07-31', 1),
(325, 1, 12, 1, 'Penilaian Adab Prilaku', '2019-08-07', 1),
(326, 2, 12, 1, 'Penilaian Adab Prilaku', '2019-08-07', 1),
(327, 3, 12, 1, 'Penilaian Adab Prilaku', '2019-08-07', 1),
(328, 4, 12, 1, 'Penilaian Adab Prilaku', '2019-08-07', 1),
(329, 5, 12, 1, 'Penilaian Adab Prilaku', '2019-08-07', 1),
(330, 6, 12, 1, 'Penilaian Adab Prilaku', '2019-08-07', 1),
(331, 7, 12, 1, 'Penilaian Adab Prilaku', '2019-08-07', 1),
(332, 8, 12, 1, 'Penilaian Adab Prilaku', '2019-08-07', 1),
(333, 9, 12, 1, 'Penilaian Adab Prilaku', '2019-08-07', 1),
(334, 1, 16, 1, 'Bacaan Surat Al-Mulk-An-Nas', '2019-07-25', 1),
(335, 2, 16, 1, 'Bacaan Surat Al-Mulk-An-Nas', '2019-07-25', 1),
(336, 3, 16, 1, 'Bacaan Surat Al-Mulk-An-Nas', '2019-07-25', 1),
(337, 4, 16, 1, 'Bacaan Surat Al-Mulk-An-Nas', '2019-07-25', 1),
(338, 5, 16, 1, 'Bacaan Surat Al-Mulk-An-Nas', '2019-07-25', 1),
(339, 6, 16, 1, 'Bacaan Surat Al-Mulk-An-Nas', '2019-07-25', 1),
(340, 7, 16, 1, 'Bacaan Surat Al-Mulk-An-Nas', '2019-07-25', 1),
(341, 8, 16, 1, 'Bacaan Surat Al-Mulk-An-Nas', '2019-07-25', 1),
(342, 9, 16, 1, 'Bacaan Surat Al-Mulk-An-Nas', '2019-07-25', 1),
(343, 1, 16, 1, 'Bacaan Surat Al-Mulk-An-Nas', '2019-08-01', 1),
(344, 2, 16, 1, 'Bacaan Surat Al-Mulk-An-Nas', '2019-08-01', 1),
(345, 3, 16, 1, 'Bacaan Surat Al-Mulk-An-Nas', '2019-08-01', 1),
(346, 4, 16, 1, 'Bacaan Surat Al-Mulk-An-Nas', '2019-08-01', 1),
(347, 5, 16, 1, 'Bacaan Surat Al-Mulk-An-Nas', '2019-08-01', 1),
(348, 6, 16, 1, 'Bacaan Surat Al-Mulk-An-Nas', '2019-08-01', 1),
(349, 7, 16, 1, 'Bacaan Surat Al-Mulk-An-Nas', '2019-08-01', 1),
(350, 8, 16, 1, 'Bacaan Surat Al-Mulk-An-Nas', '2019-08-01', 1),
(351, 9, 16, 1, 'Bacaan Surat Al-Mulk-An-Nas', '2019-08-01', 1),
(352, 1, 16, 1, ' Penilaian Bacaan Surat Al-Mulk-An-Nas', '2019-08-08', 1),
(353, 2, 16, 1, ' Penilaian Bacaan Surat Al-Mulk-An-Nas', '2019-08-08', 1),
(354, 3, 16, 1, ' Penilaian Bacaan Surat Al-Mulk-An-Nas', '2019-08-08', 1),
(355, 4, 16, 1, ' Penilaian Bacaan Surat Al-Mulk-An-Nas', '2019-08-08', 1),
(356, 5, 16, 1, ' Penilaian Bacaan Surat Al-Mulk-An-Nas', '2019-08-08', 1),
(357, 6, 16, 1, ' Penilaian Bacaan Surat Al-Mulk-An-Nas', '2019-08-08', 1),
(358, 7, 16, 1, ' Penilaian Bacaan Surat Al-Mulk-An-Nas', '2019-08-08', 1),
(359, 8, 16, 1, ' Penilaian Bacaan Surat Al-Mulk-An-Nas', '2019-08-08', 1),
(360, 9, 16, 1, ' Penilaian Bacaan Surat Al-Mulk-An-Nas', '2019-08-08', 1),
(361, 1, 28, 1, 'Materi Hukum-Hukum Tajwid', '2019-07-26', 1),
(362, 2, 28, 1, 'Materi Hukum-Hukum Tajwid', '2019-07-26', 1),
(363, 3, 28, 1, 'Materi Hukum-Hukum Tajwid', '2019-07-26', 1),
(364, 4, 28, 1, 'Materi Hukum-Hukum Tajwid', '2019-07-26', 1),
(365, 5, 28, 1, 'Materi Hukum-Hukum Tajwid', '2019-07-26', 1),
(366, 6, 28, 1, 'Materi Hukum-Hukum Tajwid', '2019-07-26', 1),
(367, 7, 28, 1, 'Materi Hukum-Hukum Tajwid', '2019-07-26', 1),
(368, 8, 28, 1, 'Materi Hukum-Hukum Tajwid', '2019-07-26', 1),
(369, 9, 28, 1, 'Materi Hukum-Hukum Tajwid', '2019-07-26', 1),
(370, 1, 28, 1, 'Materi Hukum-Hukum Tajwid', '2019-08-03', 1),
(371, 2, 28, 1, 'Materi Hukum-Hukum Tajwid', '2019-08-02', 1),
(372, 3, 28, 1, 'Materi Hukum-Hukum Tajwid', '2019-08-02', 1),
(373, 4, 28, 1, 'Materi Hukum-Hukum Tajwid', '2019-08-02', 1),
(374, 5, 28, 1, 'Materi Hukum-Hukum Tajwid', '2019-08-02', 1),
(375, 6, 28, 1, 'Materi Hukum-Hukum Tajwid', '2019-08-02', 1),
(376, 7, 28, 1, 'Materi Hukum-Hukum Tajwid', '2019-08-02', 1),
(377, 8, 28, 1, 'Materi Hukum-Hukum Tajwid', '2019-08-02', 1),
(378, 9, 28, 1, 'Materi Hukum-Hukum Tajwid', '2019-08-03', 1),
(379, 1, 28, 0, 'Penilaian Hukum-Hukum Tajwid', '2019-08-10', 1),
(380, 2, 28, 0, 'Penilaian Hukum-Hukum Tajwid', '2019-08-10', 1),
(381, 3, 28, 0, 'Penilaian Hukum-Hukum Tajwid', '2019-08-10', 1),
(382, 4, 28, 0, 'Penilaian Hukum-Hukum Tajwid', '2019-08-10', 1),
(383, 5, 28, 0, 'Penilaian Hukum-Hukum Tajwid', '2019-08-10', 1),
(384, 6, 28, 0, 'Penilaian Hukum-Hukum Tajwid', '2019-08-09', 1),
(385, 7, 28, 1, 'Penilaian Hukum-Hukum Tajwid', '2019-08-09', 1),
(386, 8, 28, 1, 'Penilaian Hukum-Hukum Tajwid', '2019-08-09', 1),
(387, 9, 28, 1, 'Penilaian Hukum-Hukum Tajwid', '2019-08-09', 1),
(388, 1, 29, 1, 'Hafalan Surat-Surat Pendek', '2019-07-27', 1),
(389, 2, 29, 1, 'Hafalan Surat-Surat Pendek', '2019-07-27', 1),
(390, 3, 29, 1, 'Hafalan Surat-Surat Pendek', '2019-07-27', 1),
(391, 4, 29, 1, 'Hafalan Surat-Surat Pendek', '2019-07-27', 1),
(392, 5, 29, 1, 'Hafalan Surat-Surat Pendek', '2019-07-27', 1),
(393, 6, 29, 1, 'Hafalan Surat-Surat Pendek', '2019-07-27', 1),
(394, 7, 29, 1, 'Hafalan Surat-Surat Pendek', '2019-07-27', 1),
(395, 8, 29, 1, 'Hafalan Surat-Surat Pendek', '2019-07-27', 1),
(396, 9, 29, 1, 'Hafalan Surat-Surat Pendek', '2019-07-27', 1),
(397, 1, 29, 1, 'Hafalan Surat-Surat Pendek', '2019-08-03', 1),
(398, 2, 29, 1, 'Hafalan Surat-Surat Pendek', '2019-08-03', 1),
(399, 3, 29, 1, 'Hafalan Surat-Surat Pendek', '2019-08-03', 1),
(400, 4, 29, 1, 'Hafalan Surat-Surat Pendek', '2019-08-03', 1),
(401, 5, 29, 1, 'Hafalan Surat-Surat Pendek', '2019-08-03', 1),
(402, 6, 29, 1, 'Hafalan Surat-Surat Pendek', '2019-08-03', 1),
(403, 7, 29, 1, 'Hafalan Surat-Surat Pendek', '2019-08-03', 1),
(404, 8, 29, 1, 'Hafalan Surat-Surat Pendek', '2019-08-03', 1),
(405, 9, 29, 1, 'Hafalan Surat-Surat Pendek', '2019-08-03', 1),
(406, 1, 29, 1, 'Penilaian Hafalan Surat-Surat Pendek', '2019-08-10', 1),
(407, 2, 29, 1, 'Penilaian Hafalan Surat-Surat Pendek', '2019-08-10', 1),
(408, 3, 29, 1, 'Penilaian Hafalan Surat-Surat Pendek', '2019-08-10', 1),
(409, 4, 29, 1, 'Penilaian Hafalan Surat-Surat Pendek', '2019-08-10', 1),
(410, 5, 29, 1, 'Penilaian Hafalan Surat-Surat Pendek', '2019-08-10', 1),
(411, 6, 29, 1, 'Penilaian Hafalan Surat-Surat Pendek', '2019-08-10', 1),
(412, 7, 29, 1, 'Penilaian Hafalan Surat-Surat Pendek', '2019-08-10', 1),
(413, 8, 29, 1, 'Penilaian Hafalan Surat-Surat Pendek', '2019-08-10', 1),
(414, 9, 29, 1, 'Penilaian Hafalan Surat-Surat Pendek', '2019-08-10', 1);

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
(1, 17, 'Dhian17', 'Dhian172021', 3, 1, 2019, 1),
(2, 16, 'Agung16', 'Agung162021', 3, 1, 2019, 1),
(3, 18, 'Fauziah18', 'Fauziah182021', 3, 1, 2019, 1),
(4, 19, 'Fetty19', 'Fetty192021', 3, 1, 2019, 1),
(5, 20, 'Heni20', 'Heni202021', 3, 1, 2019, 1),
(6, 21, 'Ichsanuddin21', 'Ichsanuddin212021', 3, 1, 2019, 1),
(7, 23, 'Muhammad23', 'Muhammad232021', 3, 1, 2019, 1),
(8, 22, 'Maya22', 'Maya222021', 3, 1, 2019, 1),
(9, 24, '24', '242021', 3, 1, 2019, 1),
(11, 26, 'Adelia2615', 'Adelia262021', 3, 1, 2021, 1),
(123, 16, 'bagong1', 'bagong1', 3, 1, 2019, 1),
(321, 16, 'ayuk21', 'ayuk21', 3, 1, 2019, 1),
(322, 235, 'Yusuf23506', 'Yusuf2352021', 3, 1, 2021, 1);

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
  `id_kelas` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sikap_dan_prilaku`
--

INSERT INTO `sikap_dan_prilaku` (`id_sikap_dan_prilaku`, `ketaatan`, `ketakdiman`, `kedisiplinan`, `kerapian`, `kesemangatan`, `partisipasi`, `etika`, `kerjasama`, `kelengkapan_catatan`, `id_santri`, `id_pelajaran`, `id_kelas`, `status`) VALUES
(81, 80, 80, 80, 90, 85, 85, 85, 85, 85, 1, 3, 1, 1),
(82, 80, 80, 80, 90, 85, 85, 85, 85, 85, 2, 3, 1, 1),
(83, 80, 80, 80, 90, 85, 85, 85, 85, 85, 3, 3, 1, 1),
(84, 80, 80, 80, 90, 85, 85, 85, 85, 85, 4, 3, 1, 1),
(85, 80, 80, 80, 90, 85, 85, 85, 85, 85, 5, 3, 1, 1),
(86, 80, 80, 80, 90, 85, 85, 85, 85, 85, 6, 3, 1, 1),
(87, 80, 80, 80, 90, 85, 85, 85, 85, 85, 7, 3, 1, 1),
(88, 80, 80, 80, 90, 85, 85, 85, 85, 85, 8, 3, 1, 1),
(89, 80, 80, 80, 90, 85, 85, 85, 85, 85, 9, 3, 1, 1),
(90, 80, 80, 80, 90, 85, 85, 85, 85, 85, 1, 10, 1, 1),
(91, 80, 80, 80, 90, 85, 85, 85, 85, 85, 2, 10, 1, 1),
(92, 80, 80, 80, 90, 85, 85, 85, 85, 85, 3, 10, 1, 1),
(93, 80, 80, 80, 90, 85, 85, 85, 85, 85, 4, 10, 1, 1),
(94, 80, 80, 80, 90, 85, 85, 85, 85, 85, 5, 10, 1, 1),
(95, 80, 80, 80, 90, 85, 85, 85, 85, 85, 6, 10, 1, 1),
(96, 80, 80, 80, 90, 85, 85, 85, 85, 85, 7, 10, 1, 1),
(97, 80, 80, 80, 90, 85, 85, 85, 85, 85, 8, 10, 1, 1),
(98, 80, 80, 80, 90, 85, 85, 85, 85, 85, 9, 10, 1, 1),
(99, 80, 80, 80, 90, 85, 85, 85, 85, 85, 1, 5, 1, 1),
(100, 80, 80, 80, 90, 85, 85, 85, 85, 85, 2, 5, 1, 1),
(101, 80, 80, 80, 90, 85, 85, 85, 85, 85, 3, 5, 1, 1),
(102, 80, 80, 80, 90, 85, 85, 85, 85, 85, 4, 5, 1, 1),
(103, 80, 80, 80, 90, 85, 85, 85, 85, 85, 5, 5, 1, 1),
(104, 80, 80, 80, 90, 85, 85, 85, 85, 85, 6, 5, 1, 1),
(105, 80, 80, 80, 90, 85, 85, 85, 85, 85, 7, 5, 1, 1),
(106, 80, 80, 80, 90, 85, 85, 85, 85, 85, 8, 5, 1, 1),
(107, 80, 80, 80, 90, 85, 85, 85, 85, 85, 9, 5, 1, 1),
(108, 80, 80, 80, 90, 85, 85, 85, 85, 85, 1, 8, 1, 1),
(109, 80, 80, 80, 90, 85, 85, 85, 85, 85, 2, 8, 1, 1),
(110, 80, 80, 80, 90, 85, 85, 85, 85, 85, 3, 8, 1, 1),
(111, 80, 80, 80, 90, 85, 85, 85, 85, 85, 4, 8, 1, 1),
(112, 80, 80, 80, 90, 85, 85, 85, 85, 85, 5, 8, 1, 1),
(113, 80, 80, 80, 90, 85, 85, 85, 85, 85, 6, 8, 1, 1),
(114, 80, 80, 80, 90, 85, 85, 85, 85, 85, 7, 8, 1, 1),
(115, 80, 80, 80, 90, 85, 85, 85, 85, 85, 8, 8, 1, 1),
(116, 80, 80, 80, 90, 85, 85, 85, 85, 85, 9, 8, 1, 1),
(117, 80, 80, 80, 90, 85, 85, 85, 85, 85, 1, 7, 1, 0),
(118, 80, 80, 80, 90, 85, 85, 85, 85, 85, 2, 7, 1, 0),
(119, 80, 80, 80, 90, 85, 85, 85, 85, 85, 3, 7, 1, 0),
(120, 80, 80, 80, 90, 85, 85, 85, 85, 85, 4, 7, 1, 0),
(121, 80, 80, 80, 90, 85, 85, 85, 85, 85, 5, 7, 1, 0),
(122, 80, 80, 80, 90, 85, 85, 85, 85, 85, 6, 7, 1, 0),
(123, 80, 80, 80, 90, 85, 85, 85, 85, 85, 7, 7, 1, 0),
(124, 80, 80, 80, 90, 85, 85, 85, 85, 85, 8, 7, 1, 0),
(125, 80, 80, 80, 90, 85, 85, 85, 85, 85, 9, 7, 1, 0),
(126, 80, 80, 80, 90, 85, 85, 85, 85, 85, 1, 4, 1, 0),
(127, 80, 80, 80, 90, 85, 85, 85, 85, 85, 2, 4, 1, 0),
(128, 80, 80, 80, 90, 85, 85, 85, 85, 85, 3, 4, 1, 0),
(129, 80, 80, 80, 90, 85, 85, 85, 85, 85, 4, 4, 1, 0),
(130, 80, 80, 80, 90, 85, 85, 85, 85, 85, 5, 4, 1, 0),
(131, 80, 80, 80, 90, 85, 85, 85, 85, 85, 6, 4, 1, 0),
(132, 80, 80, 80, 90, 85, 85, 85, 85, 85, 7, 4, 1, 0),
(133, 80, 80, 80, 90, 85, 85, 85, 85, 85, 8, 4, 1, 0),
(134, 80, 80, 80, 90, 85, 85, 85, 85, 85, 9, 4, 1, 0),
(135, 80, 80, 80, 90, 85, 85, 85, 85, 85, 1, 19, 1, 0),
(136, 80, 80, 80, 90, 85, 85, 85, 85, 85, 2, 19, 1, 0),
(137, 80, 80, 80, 90, 85, 85, 85, 85, 85, 3, 19, 1, 0),
(138, 80, 80, 80, 90, 85, 85, 85, 85, 85, 4, 19, 1, 0),
(139, 80, 80, 80, 90, 85, 85, 85, 85, 85, 5, 19, 1, 0),
(140, 80, 80, 80, 90, 85, 85, 85, 85, 85, 6, 19, 1, 0),
(141, 80, 80, 80, 90, 85, 85, 85, 85, 85, 7, 19, 1, 0),
(142, 80, 80, 80, 90, 85, 85, 85, 85, 85, 8, 19, 1, 0),
(143, 80, 80, 80, 90, 85, 85, 85, 85, 85, 9, 19, 1, 0),
(144, 80, 80, 80, 90, 85, 85, 85, 85, 85, 1, 16, 1, 0),
(145, 80, 80, 80, 90, 85, 85, 85, 85, 85, 2, 16, 1, 0),
(146, 80, 80, 80, 90, 85, 85, 85, 85, 85, 3, 16, 1, 0),
(147, 80, 80, 80, 90, 85, 85, 85, 85, 85, 4, 16, 1, 0),
(148, 80, 80, 80, 90, 85, 85, 85, 85, 85, 5, 16, 1, 0),
(149, 80, 80, 80, 90, 85, 85, 85, 85, 85, 6, 16, 1, 0),
(150, 80, 80, 80, 90, 85, 85, 85, 85, 85, 7, 16, 1, 0),
(151, 80, 80, 80, 90, 85, 85, 85, 85, 85, 8, 16, 1, 0),
(152, 80, 80, 80, 90, 85, 85, 85, 85, 85, 9, 16, 1, 0),
(153, 90, 80, 90, 90, 90, 90, 90, 90, 90, 11, 3, 1, 0);

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
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_daftar`);

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
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=472;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT untuk tabel `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=348;

--
-- AUTO_INCREMENT untuk tabel `pembelajaran`
--
ALTER TABLE `pembelajaran`
  MODIFY `id_pembelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `perkembangan_pembelajaran`
--
ALTER TABLE `perkembangan_pembelajaran`
  MODIFY `id_perkembangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=472;

--
-- AUTO_INCREMENT untuk tabel `santri`
--
ALTER TABLE `santri`
  MODIFY `id_santri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- AUTO_INCREMENT untuk tabel `sikap_dan_prilaku`
--
ALTER TABLE `sikap_dan_prilaku`
  MODIFY `id_sikap_dan_prilaku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

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
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_daftar`) REFERENCES `pendaftaran` (`id_daftar`);

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
  ADD CONSTRAINT `santri_ibfk_1` FOREIGN KEY (`id_daftar`) REFERENCES `pendaftaran` (`id_daftar`);

--
-- Ketidakleluasaan untuk tabel `sikap_dan_prilaku`
--
ALTER TABLE `sikap_dan_prilaku`
  ADD CONSTRAINT `sikap_dan_prilaku_ibfk_1` FOREIGN KEY (`id_santri`) REFERENCES `santri` (`id_santri`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
