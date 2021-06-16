-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2021 pada 14.36
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
('5', 'PT Karana Line Surabaya', 'SBY', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Struktur dari tabel `tb_perkiraan`
--

CREATE TABLE `tb_perkiraan` (
  `id_perkiraan` varchar(14) DEFAULT NULL,
  `no_acc` varchar(255) DEFAULT NULL,
  `nama_acc` varchar(255) DEFAULT NULL,
  `acc_induk` varchar(255) DEFAULT NULL,
  `level` enum('1','2','3','4','5','6') DEFAULT NULL,
  `kategori` enum('AKTIVA','PASSIVA','AKTIVABY','PASSIVABY') DEFAULT NULL,
  `jenis_perkiraan` varchar(255) DEFAULT NULL,
  `is_jurnal` varchar(255) DEFAULT NULL,
  `jenis_jurnal` varchar(255) DEFAULT NULL,
  `laporan_gl` varchar(255) DEFAULT NULL,
  `init_kas_bank` varchar(255) DEFAULT NULL,
  `saldo_min` double(255,0) DEFAULT NULL,
  `is_budget` enum('YES','NO') DEFAULT NULL,
  `is_disb` enum('YES','NO') DEFAULT NULL,
  `nama_bank` varchar(255) DEFAULT NULL,
  `no_rekening_bank` varchar(255) DEFAULT NULL,
  `id_company` varchar(255) DEFAULT NULL,
  `id_currency` int(5) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_perkiraan`
--

INSERT INTO `tb_perkiraan` (`id_perkiraan`, `no_acc`, `nama_acc`, `acc_induk`, `level`, `kategori`, `jenis_perkiraan`, `is_jurnal`, `jenis_jurnal`, `laporan_gl`, `init_kas_bank`, `saldo_min`, `is_budget`, `is_disb`, `nama_bank`, `no_rekening_bank`, `id_company`, `id_currency`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
('1', '1', 'AKTIVA', NULL, '1', 'AKTIVA', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL);

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
