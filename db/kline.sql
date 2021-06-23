-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2021 pada 06.51
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_auth_level`
--

CREATE TABLE `tb_auth_level` (
  `id` varchar(255) NOT NULL,
  `level_name` varchar(255) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bank`
--

CREATE TABLE `tb_bank` (
  `id_bank` int(10) NOT NULL,
  `nama_bank` varchar(255) DEFAULT NULL,
  `initial` varchar(15) DEFAULT NULL,
  `no_rek` varchar(255) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bank`
--

INSERT INTO `tb_bank` (`id_bank`, `nama_bank`, `initial`, `no_rek`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
(7, 'Mandiri', 'MDR', '12949578278', '2021-06-18 05:09:22', 'nurman', '2021-06-18 05:09:22', 'nurman'),
(8, 'Bank Central Asia', 'BCA', '1248718247912', '2021-06-18 05:09:41', 'nurman', '2021-06-18 05:09:41', 'nurman'),
(9, 'Bank Rakyat Indonesia', 'BRI', '773268753', '2021-06-18 05:09:54', 'nurman', '2021-06-18 05:09:54', 'nurman'),
(10, 'Bank Negara Indonesia', 'BNI', '92949832797', '2021-06-18 05:10:10', 'nurman', '2021-06-18 05:10:10', 'nurman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_company`
--

CREATE TABLE `tb_company` (
  `id_company` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `init` varchar(15) DEFAULT NULL,
  `is_holding` enum('0','1') DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_company`
--

INSERT INTO `tb_company` (`id_company`, `company_name`, `init`, `is_holding`, `address`, `telephone`, `fax`, `email`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
('1', 'IT Company', NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2', 'PT Karana Line Jakarta', 'JKT', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3', 'PT Karana Line Medan', 'MDN', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('4', 'PT Karana Line Batam', 'BTM', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5', 'PT Karana Line Surabaya', 'SBY', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('6', 'PT Karana Line Samarinda', 'SMD', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('7', 'PT Karana Line Banjarmasin', 'BJM', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_currency`
--

CREATE TABLE `tb_currency` (
  `id_currency` int(5) NOT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `init` varchar(10) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_currency`
--

INSERT INTO `tb_currency` (`id_currency`, `currency`, `init`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
(1, 'Hongkong', 'HKD', '2021-06-14 10:17:01', 'nurman', '2021-06-14 10:17:01', 'nurman'),
(2, 'Indonesia', 'RP', '2021-06-14 10:23:42', 'nurman', '2021-06-14 10:23:42', 'nurman'),
(3, 'Singapore', 'SGD', '2021-06-14 10:24:06', 'nurman', '2021-06-14 10:24:06', 'nurman'),
(4, 'United States Of America', 'USD', '2021-06-14 10:24:35', 'nurman', '2021-06-14 10:24:35', 'nurman'),
(5, 'Japan', 'YEN', '2021-06-14 10:24:47', 'nurman', '2021-06-14 10:24:47', 'nurman'),
(10, 'London', 'Pound', '2021-06-15 07:58:25', 'nurman', '2021-06-15 07:58:25', 'nurman'),
(11, 'Thailand', 'THD', '2021-06-16 11:18:47', 'nurman', '2021-06-16 11:18:47', 'nurman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_department`
--

CREATE TABLE `tb_department` (
  `id_department` int(5) NOT NULL,
  `department_name` varchar(255) DEFAULT NULL,
  `init` varchar(255) DEFAULT NULL,
  `id_company` varchar(255) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_department`
--

INSERT INTO `tb_department` (`id_department`, `department_name`, `init`, `id_company`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
(2, 'FINANCE & ADMIN', 'FADM', '2', '2021-06-15 08:51:16', 'nurman', '2021-06-15 08:51:16', 'nurman'),
(6, 'Agency 1', 'AGN 1', '5', '2021-06-16 14:13:09', 'nurman', '2021-06-16 14:13:09', 'nurman'),
(7, 'Agency 2', 'AGN 2', '5', '2021-06-16 14:17:44', 'nurman', '2021-06-16 14:17:44', 'nurman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_employee`
--

CREATE TABLE `tb_employee` (
  `id_employee` varchar(255) NOT NULL,
  `employee_name` varchar(255) DEFAULT NULL,
  `place_of_birth` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `marital_status` enum('single','married') DEFAULT NULL,
  `last_education` varchar(255) DEFAULT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `phone_number` int(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `npwp` varchar(255) DEFAULT NULL,
  `ptkp` varchar(255) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `out_date` date DEFAULT NULL,
  `id_department` varchar(255) DEFAULT NULL,
  `id_position` varchar(255) DEFAULT NULL,
  `id_company` varchar(255) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_employee`
--

INSERT INTO `tb_employee` (`id_employee`, `employee_name`, `place_of_birth`, `date_of_birth`, `gender`, `religion`, `marital_status`, `last_education`, `citizenship`, `nik`, `address`, `postal_code`, `phone_number`, `email`, `npwp`, `ptkp`, `join_date`, `out_date`, `id_department`, `id_position`, `id_company`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
('210614124636', 'WAHYU TRISNADI', NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_jurnal`
--

CREATE TABLE `tb_jenis_jurnal` (
  `id_jenis_jurnal` int(10) NOT NULL,
  `jenis_jurnal` varchar(255) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jenis_jurnal`
--

INSERT INTO `tb_jenis_jurnal` (`id_jenis_jurnal`, `jenis_jurnal`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
(1, 'Hutang', '2021-06-18 14:20:24', NULL, '2021-06-18 14:20:29', NULL),
(2, 'Kas', '2021-06-18 14:20:24', NULL, '2021-06-18 14:20:29', NULL),
(3, 'Bank', '2021-06-18 14:20:24', NULL, '2021-06-18 14:20:29', NULL),
(4, 'Piutang', '2021-06-18 14:20:24', NULL, '2021-06-18 14:20:29', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kapal`
--

CREATE TABLE `tb_kapal` (
  `id_kapal` varchar(255) NOT NULL,
  `nama_kapal` varchar(255) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kapal`
--

INSERT INTO `tb_kapal` (`id_kapal`, `nama_kapal`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
('KPL210706012218', 'GULF JASH', '2021-06-22 07:01:18', 'nurman', '2021-06-22 07:01:18', 'nurman'),
('KPL210706072239', 'LOK PRATAP', '2021-06-22 07:07:39', 'nurman', '2021-06-22 07:07:39', 'nurman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kas_bank`
--

CREATE TABLE `tb_kas_bank` (
  `id_kas_bank` int(10) NOT NULL,
  `no_acc` varchar(255) DEFAULT NULL,
  `kas_bank` varchar(255) DEFAULT NULL,
  `init_kas_bank` varchar(255) DEFAULT NULL,
  `no_rekening` varchar(255) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kas_bank`
--

INSERT INTO `tb_kas_bank` (`id_kas_bank`, `no_acc`, `kas_bank`, `init_kas_bank`, `no_rekening`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
(18, '1000.00', 'KAS', '', NULL, NULL, NULL, NULL, NULL),
(19, '1000.00', 'KAS', NULL, NULL, NULL, NULL, NULL, NULL),
(20, '1100.00', 'DEPOSITO', NULL, NULL, NULL, NULL, NULL, NULL),
(21, '1100.00', 'DEPOSITO', NULL, NULL, NULL, NULL, NULL, NULL),
(22, '1200.00', 'PIUTANG SHIPPER', NULL, NULL, NULL, NULL, NULL, NULL),
(23, '1200.00', 'PIUTANG SHIPPER', NULL, NULL, NULL, NULL, NULL, NULL),
(24, '1300.00', 'PIUTANG LAIN-LAIN', NULL, NULL, NULL, NULL, NULL, NULL),
(25, '1300.00', 'PIUTANG LAIN-LAIN', NULL, NULL, NULL, NULL, NULL, NULL),
(26, '1500.00', 'BIAYA DIBAYAR DIMUKA', NULL, NULL, NULL, NULL, NULL, NULL),
(27, '1500.00', 'BIAYA DIBAYAR DIMUKA', NULL, NULL, NULL, NULL, NULL, NULL),
(28, '1700.00', 'TANAH & BANGUNAN', NULL, NULL, NULL, NULL, NULL, NULL),
(29, '1700.00', 'TANAH & BANGUNAN', NULL, NULL, NULL, NULL, NULL, NULL),
(30, '1900.00', 'INVESTASI', NULL, NULL, NULL, NULL, NULL, NULL),
(31, '1900.00', 'INVESTASI', NULL, NULL, NULL, NULL, NULL, NULL),
(32, '2200.00', 'HUTANG USAHA', NULL, NULL, NULL, NULL, NULL, NULL),
(33, '2200.00', 'HUTANG USAHA', NULL, NULL, NULL, NULL, NULL, NULL),
(34, '2300.00', 'HUTANG PAJAK', NULL, NULL, NULL, NULL, NULL, NULL),
(35, '2300.00', 'HUTANG PAJAK', NULL, NULL, NULL, NULL, NULL, NULL),
(36, '2500.00', 'HUTANG AFILIASI', NULL, NULL, NULL, NULL, NULL, NULL),
(37, '2500.00', 'HUTANG AFILIASI', NULL, NULL, NULL, NULL, NULL, NULL),
(38, '2700.00', 'AKUMULASI PENYUSUTAN GEDUNG/BANGUNAN', NULL, NULL, NULL, NULL, NULL, NULL),
(39, '2700.00', 'AKUMULASI PENYUSUTAN GEDUNG/BANGUNAN', NULL, NULL, NULL, NULL, NULL, NULL),
(40, '2800.00', 'MODAL SAHAM DISETOR', NULL, NULL, NULL, NULL, NULL, NULL),
(41, '2800.00', 'MODAL SAHAM DISETOR', NULL, NULL, NULL, NULL, NULL, NULL),
(42, '3100.00', 'FREIGHT NORTH BOUND KAPAL MILIK', NULL, NULL, NULL, NULL, NULL, NULL),
(43, '3100.00', 'FREIGHT NORTH BOUND KAPAL MILIK', NULL, NULL, NULL, NULL, NULL, NULL),
(44, '3200.00', 'PENDAPATAN CHARTERING & BROKERING', NULL, NULL, NULL, NULL, NULL, NULL),
(45, '3200.00', 'PENDAPATAN CHARTERING & BROKERING', NULL, NULL, NULL, NULL, NULL, NULL),
(46, '3300.00', 'CHARTER KAPAL MILIK', NULL, NULL, NULL, NULL, NULL, NULL),
(47, '3300.00', 'CHARTER KAPAL MILIK', NULL, NULL, NULL, NULL, NULL, NULL),
(48, '3400.00', 'LAIN-LAIN KAPAL MILIK', NULL, NULL, NULL, NULL, NULL, NULL),
(49, '3400.00', 'LAIN-LAIN KAPAL MILIK', NULL, NULL, NULL, NULL, NULL, NULL),
(50, '3500.00', 'OPERATING COST / LCT. MUARA MEGAH', NULL, NULL, NULL, NULL, NULL, NULL),
(51, '3500.00', 'OPERATING COST / LCT. MUARA MEGAH', NULL, NULL, NULL, NULL, NULL, NULL),
(52, '3600.00', 'OPERATING COST / MV. PRITHA', NULL, NULL, NULL, NULL, NULL, NULL),
(53, '3600.00', 'OPERATING COST / MV. PRITHA', NULL, NULL, NULL, NULL, NULL, NULL),
(54, '4100.00', 'PENDAPATAN KEAGENAN I / STX PAN OCEAN', NULL, NULL, NULL, NULL, NULL, NULL),
(55, '4100.00', 'PENDAPATAN KEAGENAN I / STX PAN OCEAN', NULL, NULL, NULL, NULL, NULL, NULL),
(56, '4200.00', 'HASIL KEAGENAN II', NULL, NULL, NULL, NULL, NULL, NULL),
(57, '4200.00', 'HASIL KEAGENAN II', NULL, NULL, NULL, NULL, NULL, NULL),
(58, '4300.00', 'HASIL KEAGENAN LOKAL (AGCY & CALL FEE)', NULL, NULL, NULL, NULL, NULL, NULL),
(59, '4300.00', 'HASIL KEAGENAN LOKAL (AGCY & CALL FEE)', NULL, NULL, NULL, NULL, NULL, NULL),
(60, '4300.00A', 'HASIL KEAGENAN LOKAL (AGCY & CALL FEE) CAB.TG.PRIOK', NULL, NULL, NULL, NULL, NULL, NULL),
(61, '4300.00A', 'HASIL KEAGENAN LOKAL (AGCY & CALL FEE) CAB.TG.PRIOK', NULL, NULL, NULL, NULL, NULL, NULL),
(62, '4300.00B', 'HASIL KEAGENAN LOKAL (AGCY & CALL FEE) CAB.CIGADING', NULL, NULL, NULL, NULL, NULL, NULL),
(63, '4300.00B', 'HASIL KEAGENAN LOKAL (AGCY & CALL FEE) CAB.CIGADING', NULL, NULL, NULL, NULL, NULL, NULL),
(64, '4300.00C', 'HASIL KEAGENAN LOKAL (AGCY & CALL FEE) CAB.DUMAI', NULL, NULL, NULL, NULL, NULL, NULL),
(65, '4300.00C', 'HASIL KEAGENAN LOKAL (AGCY & CALL FEE) CAB.DUMAI', NULL, NULL, NULL, NULL, NULL, NULL),
(66, '4500.00', 'HASIL BUNGA DEPOSITO DAN JASA GIRO', NULL, NULL, NULL, NULL, NULL, NULL),
(67, '4500.00', 'HASIL BUNGA DEPOSITO DAN JASA GIRO', NULL, NULL, NULL, NULL, NULL, NULL),
(68, '4500.00A', 'HASIL BUNGA DEPOSITO DAN JASA GIRO CAB.TG.PRIOK', NULL, NULL, NULL, NULL, NULL, NULL),
(69, '4500.00A', 'HASIL BUNGA DEPOSITO DAN JASA GIRO CAB.TG.PRIOK', NULL, NULL, NULL, NULL, NULL, NULL),
(70, '4500.00B', 'HASIL BUNGA DEPOSITO DAN JASA GIRO CAB.CIGADING', NULL, NULL, NULL, NULL, NULL, NULL),
(71, '4500.00B', 'HASIL BUNGA DEPOSITO DAN JASA GIRO CAB.CIGADING', NULL, NULL, NULL, NULL, NULL, NULL),
(72, '5200.00', 'HUTANG USAHA', NULL, NULL, NULL, NULL, NULL, NULL),
(73, '5200.00', 'HUTANG USAHA', NULL, NULL, NULL, NULL, NULL, NULL),
(74, '5300.00', 'HUTANG PAJAK', NULL, NULL, NULL, NULL, NULL, NULL),
(75, '5300.00', 'HUTANG PAJAK', NULL, NULL, NULL, NULL, NULL, NULL),
(76, '5500.00', 'HUTANG AFILIASI', NULL, NULL, NULL, NULL, NULL, NULL),
(77, '5500.00', 'HUTANG AFILIASI', NULL, NULL, NULL, NULL, NULL, NULL),
(78, '5700.00', 'AKUMULASI PENYUSUTAN GEDUNG/BANGUNAN', NULL, NULL, NULL, NULL, NULL, NULL),
(79, '5700.00', 'AKUMULASI PENYUSUTAN GEDUNG/BANGUNAN', NULL, NULL, NULL, NULL, NULL, NULL),
(80, '5800.00', 'MODAL SAHAM DISETOR', NULL, NULL, NULL, NULL, NULL, NULL),
(81, '5800.00', 'MODAL SAHAM DISETOR', NULL, NULL, NULL, NULL, NULL, NULL),
(82, '6000.00', 'KAS', NULL, NULL, NULL, NULL, NULL, NULL),
(83, '6000.00', 'KAS', NULL, NULL, NULL, NULL, NULL, NULL),
(84, '6100.00', 'DEPOSITO', NULL, NULL, NULL, NULL, NULL, NULL),
(85, '6100.00', 'DEPOSITO', NULL, NULL, NULL, NULL, NULL, NULL),
(86, '6200.00', 'PIUTANG SHIPPER', NULL, NULL, NULL, NULL, NULL, NULL),
(87, '6200.00', 'PIUTANG SHIPPER', NULL, NULL, NULL, NULL, NULL, NULL),
(88, '6300.00', 'PIUTANG LAIN-LAIN', NULL, NULL, NULL, NULL, NULL, NULL),
(89, '6300.00', 'PIUTANG LAIN-LAIN', NULL, NULL, NULL, NULL, NULL, NULL),
(90, '6500.00', 'BIAYA DIBAYAR DIMUKA', NULL, NULL, NULL, NULL, NULL, NULL),
(91, '6500.00', 'BIAYA DIBAYAR DIMUKA', NULL, NULL, NULL, NULL, NULL, NULL),
(92, '6700.00', 'TANAH & BANGUNAN', NULL, NULL, NULL, NULL, NULL, NULL),
(93, '6700.00', 'TANAH & BANGUNAN', NULL, NULL, NULL, NULL, NULL, NULL),
(94, '6900.00', 'INVESTASI', NULL, NULL, NULL, NULL, NULL, NULL),
(95, '6900.00', 'INVESTASI', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kunjungan`
--

CREATE TABLE `tb_kunjungan` (
  `id_transaksi` varchar(255) NOT NULL,
  `id_company` varchar(255) DEFAULT NULL,
  `tgl_transaksi` varchar(255) DEFAULT NULL,
  `id_kapal` varchar(255) DEFAULT NULL,
  `id_pelabuhan` varchar(255) DEFAULT NULL,
  `voyage` varchar(255) DEFAULT NULL,
  `tgl_berangkat` varchar(255) DEFAULT NULL,
  `tgl_tiba` varchar(255) DEFAULT NULL,
  `no_acc` varchar(255) DEFAULT NULL,
  `id_currency` varchar(255) DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `debet` varchar(255) DEFAULT NULL,
  `kredit` varchar(255) DEFAULT NULL,
  `is_close` enum('YES','NO') DEFAULT NULL,
  `is_bayar` enum('YES','NO') DEFAULT NULL,
  `is_batal` enum('YES','NO') DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_modul`
--

CREATE TABLE `tb_modul` (
  `id_modul` int(5) NOT NULL,
  `modul_name` varchar(255) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_modul`
--

INSERT INTO `tb_modul` (`id_modul`, `modul_name`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
(1, 'auth', '2021-06-13 15:40:48', NULL, '2021-06-13 15:40:53', NULL),
(2, 'department', '2021-06-14 12:44:08', NULL, '2021-06-14 12:44:11', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_modul_action`
--

CREATE TABLE `tb_modul_action` (
  `id_modul_action` varchar(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `id_modul` int(5) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_modul_action`
--

INSERT INTO `tb_modul_action` (`id_modul_action`, `name`, `id_modul`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
('1', 'add', 1, '2021-06-13 15:41:31', NULL, '2021-06-13 15:41:40', NULL),
('2', 'edit', 1, '2021-06-13 15:41:34', NULL, '2021-06-13 15:41:43', NULL),
('3', 'delete', 1, '2021-06-13 15:41:37', NULL, '2021-06-13 15:41:46', NULL),
('4', 'add', 2, '2021-06-14 12:44:52', NULL, '2021-06-14 12:44:59', NULL),
('5', 'edit', 2, '2021-06-14 12:44:52', NULL, '2021-06-14 12:44:59', NULL),
('6', 'delete', 2, '2021-06-14 12:44:52', NULL, '2021-06-14 12:44:59', NULL),
('7', 'read', 2, '2021-06-14 12:44:52', NULL, '2021-06-14 12:44:59', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelabuhan`
--

CREATE TABLE `tb_pelabuhan` (
  `id_pelabuhan` varchar(255) NOT NULL,
  `nama_pelabuhan` varchar(255) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pelabuhan`
--

INSERT INTO `tb_pelabuhan` (`id_pelabuhan`, `nama_pelabuhan`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
('PLB210706392206', 'CILEGON FABRICATOR', '2021-06-22 07:39:06', 'nurman', '2021-06-22 07:39:06', 'nurman'),
('PLB210706392214', 'BITUNG', '2021-06-22 07:39:14', 'nurman', '2021-06-22 07:39:14', 'nurman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perkiraan`
--

CREATE TABLE `tb_perkiraan` (
  `no_acc` varchar(254) DEFAULT NULL,
  `nama_acc` varchar(254) DEFAULT NULL,
  `acc_induk` varchar(254) DEFAULT NULL,
  `level` varchar(254) DEFAULT NULL,
  `jenis_perkiraan` enum('AKTIVA','PASSIVA','AKTIVABY','PASSIVABY','BIAYA','PENDAPATAN') DEFAULT NULL,
  `is_jurnal` enum('YES','NO') DEFAULT NULL,
  `jenis_jurnal` enum('KAS','BANK','PIUTANG','HUTANG') DEFAULT NULL,
  `laporan_gl` varchar(254) DEFAULT NULL,
  `saldo_min` double DEFAULT NULL,
  `is_budget` enum('YES','NO') DEFAULT NULL,
  `is_disb` enum('YES','NO') DEFAULT NULL,
  `id_company` varchar(254) DEFAULT NULL,
  `init_kas_bank` varchar(255) DEFAULT NULL,
  `id_bank` varchar(254) DEFAULT NULL,
  `id_currency` varchar(254) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_perkiraan`
--

INSERT INTO `tb_perkiraan` (`no_acc`, `nama_acc`, `acc_induk`, `level`, `jenis_perkiraan`, `is_jurnal`, `jenis_jurnal`, `laporan_gl`, `saldo_min`, `is_budget`, `is_disb`, `id_company`, `init_kas_bank`, `id_bank`, `id_currency`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
('1', 'AKTIVA', '', '1', 'AKTIVA', 'NO', 'KAS', 'TES', NULL, '', NULL, '2', 'KAS-TES', '7', '2', '2021-06-20 13:14:38', 'nurman', '2021-06-20 13:14:38', 'nurman'),
('10', 'HUTANG JANGKA PENDEK', '1', '2', '', 'YES', '', '', NULL, '', NULL, '- Pilih Cabang -', '', '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:31:22', 'nurman', '2021-06-20 15:31:22', 'nurman'),
('100', 'KAS & SETARA KAS', '10', '3', '', 'YES', '', '', NULL, '', NULL, '- Pilih Cabang -', '', '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:31:41', 'nurman', '2021-06-20 15:31:41', 'nurman'),
('1000.00', 'KAS', '100', '4', '', 'YES', '', '', NULL, '', NULL, '- Pilih Cabang -', '', '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:32:07', 'nurman', '2021-06-20 15:32:07', 'nurman'),
('1000.01', 'KAS BESAR RUPIAH', '1000.00', '5', '', 'YES', '', '', NULL, '', NULL, '- Pilih Cabang -', '', '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:32:28', 'nurman', '2021-06-20 15:32:28', 'nurman'),
('1001.01', 'KAS BESAR RUPIAH SEMARANG', '1000.01', '6', 'AKTIVA', 'YES', '', '', NULL, '', NULL, '- Pilih Cabang -', '', '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:48:58', 'nurman', '2021-06-20 15:48:58', 'nurman'),
('1001.02', 'KAS BESAR', '1000.01', '6', 'PASSIVA', 'YES', '', '', NULL, '', NULL, '- Pilih Cabang -', '', '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:50:06', 'nurman', '2021-06-20 15:50:06', 'nurman'),
('1001.03', 'TES', '1000.01', '6', 'BIAYA', 'YES', '', '', NULL, '', NULL, '- Pilih Cabang -', '', '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:51:12', 'nurman', '2021-06-20 15:51:12', 'nurman'),
('1001.04', 'TES 2', '1000.01', '6', 'AKTIVA', 'YES', '', '', NULL, '', NULL, '- Pilih Cabang -', '', '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:51:42', 'nurman', '2021-06-20 15:51:42', 'nurman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perkiraan_bunglon`
--

CREATE TABLE `tb_perkiraan_bunglon` (
  `no_acc_bunglon` varchar(255) DEFAULT NULL,
  `no_acc` varchar(254) DEFAULT NULL,
  `nama_acc` varchar(254) DEFAULT NULL,
  `acc_induk` varchar(254) DEFAULT NULL,
  `level` varchar(254) DEFAULT NULL,
  `jenis_perkiraan` enum('AKTIVA','PASSIVA','AKTIVABY','PASSIVABY','BIAYA','PENDAPATAN') DEFAULT NULL,
  `is_jurnal` enum('YES','NO') DEFAULT NULL,
  `jenis_jurnal` enum('KAS','BANK','PIUTANG','HUTANG') DEFAULT NULL,
  `laporan_gl` varchar(254) DEFAULT NULL,
  `saldo_min` double DEFAULT NULL,
  `is_budget` enum('YES','NO') DEFAULT NULL,
  `is_disb` enum('YES','NO') DEFAULT NULL,
  `id_company` varchar(254) DEFAULT NULL,
  `init_kas_bank` varchar(255) DEFAULT NULL,
  `id_bank` varchar(254) DEFAULT NULL,
  `id_currency` varchar(254) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_perkiraan_bunglon`
--

INSERT INTO `tb_perkiraan_bunglon` (`no_acc_bunglon`, `no_acc`, `nama_acc`, `acc_induk`, `level`, `jenis_perkiraan`, `is_jurnal`, `jenis_jurnal`, `laporan_gl`, `saldo_min`, `is_budget`, `is_disb`, `id_company`, `init_kas_bank`, `id_bank`, `id_currency`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
('6001.01', '1001.01', 'KAS BESAR RUPIAH SEMARANG', '1000.01', '6', 'PASSIVABY', 'YES', '', '', NULL, '', NULL, '- Pilih Cabang -', '', '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:48:58', 'nurman', '2021-06-20 15:48:58', 'nurman'),
('5001.02', '1001.02', 'KAS BESAR', '1000.01', '6', 'AKTIVABY', 'YES', '', '', NULL, '', NULL, '- Pilih Cabang -', '', '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:50:06', 'nurman', '2021-06-20 15:50:06', 'nurman'),
('6001.04', '1001.04', 'TES 2', '1000.01', '6', 'PASSIVABY', 'YES', '', '', NULL, '', NULL, '- Pilih Cabang -', '', '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:51:42', 'nurman', '2021-06-20 15:51:42', 'nurman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_position`
--

CREATE TABLE `tb_position` (
  `id_position` int(5) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `init` varchar(255) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_position`
--

INSERT INTO `tb_position` (`id_position`, `position`, `init`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
(4, 'DIREKTUR', 'DIR', '2021-06-15 09:36:03', 'nurman', '2021-06-15 09:36:03', 'nurman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(20) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `is_active` enum('0','1') DEFAULT NULL,
  `id_department` varchar(255) DEFAULT NULL,
  `id_company` varchar(255) DEFAULT NULL,
  `id_employee` varchar(255) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `is_active`, `id_department`, `id_company`, `id_employee`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
('210613154321', 'nurman', '202cb962ac59075b964b07152d234b70', '1', '1', '1', '0', '2021-06-13 15:44:11', NULL, '2021-06-13 15:44:17', NULL),
('210614124944', 'wahyu', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_auth`
--

CREATE TABLE `tb_user_auth` (
  `id` varchar(20) NOT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `id_modul_action` varchar(255) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user_auth`
--

INSERT INTO `tb_user_auth` (`id`, `id_user`, `id_modul_action`, `created_time`, `updated_time`) VALUES
('210613155245', '1', '1', '2021-06-13 15:52:17', '2021-06-13 15:52:20'),
('210613155246', '1', '2', '2021-06-13 15:53:51', '2021-06-13 15:53:55'),
('210613155247', '1', '3', '2021-06-13 15:53:58', '2021-06-13 15:54:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_auth_level`
--
ALTER TABLE `tb_auth_level`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_bank`
--
ALTER TABLE `tb_bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indeks untuk tabel `tb_company`
--
ALTER TABLE `tb_company`
  ADD PRIMARY KEY (`id_company`);

--
-- Indeks untuk tabel `tb_currency`
--
ALTER TABLE `tb_currency`
  ADD PRIMARY KEY (`id_currency`);

--
-- Indeks untuk tabel `tb_department`
--
ALTER TABLE `tb_department`
  ADD PRIMARY KEY (`id_department`);

--
-- Indeks untuk tabel `tb_employee`
--
ALTER TABLE `tb_employee`
  ADD PRIMARY KEY (`id_employee`);

--
-- Indeks untuk tabel `tb_jenis_jurnal`
--
ALTER TABLE `tb_jenis_jurnal`
  ADD PRIMARY KEY (`id_jenis_jurnal`);

--
-- Indeks untuk tabel `tb_kapal`
--
ALTER TABLE `tb_kapal`
  ADD PRIMARY KEY (`id_kapal`);

--
-- Indeks untuk tabel `tb_kas_bank`
--
ALTER TABLE `tb_kas_bank`
  ADD PRIMARY KEY (`id_kas_bank`);

--
-- Indeks untuk tabel `tb_kunjungan`
--
ALTER TABLE `tb_kunjungan`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tb_modul`
--
ALTER TABLE `tb_modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indeks untuk tabel `tb_modul_action`
--
ALTER TABLE `tb_modul_action`
  ADD PRIMARY KEY (`id_modul_action`);

--
-- Indeks untuk tabel `tb_pelabuhan`
--
ALTER TABLE `tb_pelabuhan`
  ADD PRIMARY KEY (`id_pelabuhan`);

--
-- Indeks untuk tabel `tb_position`
--
ALTER TABLE `tb_position`
  ADD PRIMARY KEY (`id_position`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_user_auth`
--
ALTER TABLE `tb_user_auth`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_bank`
--
ALTER TABLE `tb_bank`
  MODIFY `id_bank` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_currency`
--
ALTER TABLE `tb_currency`
  MODIFY `id_currency` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_department`
--
ALTER TABLE `tb_department`
  MODIFY `id_department` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis_jurnal`
--
ALTER TABLE `tb_jenis_jurnal`
  MODIFY `id_jenis_jurnal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_kas_bank`
--
ALTER TABLE `tb_kas_bank`
  MODIFY `id_kas_bank` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT untuk tabel `tb_modul`
--
ALTER TABLE `tb_modul`
  MODIFY `id_modul` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_position`
--
ALTER TABLE `tb_position`
  MODIFY `id_position` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
