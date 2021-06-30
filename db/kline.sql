-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2021 pada 10.57
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
-- Struktur dari tabel `tb_country`
--

CREATE TABLE `tb_country` (
  `iso_code` varchar(255) NOT NULL,
  `country_code` varchar(255) DEFAULT NULL,
  `country_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_country`
--

INSERT INTO `tb_country` (`iso_code`, `country_code`, `country_name`) VALUES
('AD / AND', '376', 'Andorra'),
('AE / ARE', '971', 'United Arab Emirates'),
('AF / AFG', '93', 'Afghanistan'),
('AG / ATG', '1-268', 'Antigua and Barbuda'),
('AI / AIA', '1-264', 'Anguilla'),
('AL / ALB', '355', 'Albania'),
('AM / ARM', '374', 'Armenia'),
('AN / ANT', '599', 'Netherlands Antilles'),
('AO / AGO', '244', 'Angola'),
('AQ / ATA', '672', 'Antarctica'),
('AR / ARG', '54', 'Argentina'),
('AS / ASM', '1-684', 'American Samoa'),
('AT / AUT', '43', 'Austria'),
('AU / AUS', '61', 'Australia'),
('AW / ABW', '297', 'Aruba'),
('AZ / AZE', '994', 'Azerbaijan'),
('BA / BIH', '387', 'Bosnia and Herzegovina'),
('BB / BRB', '1-246', 'Barbados'),
('BD / BGD', '880', 'Bangladesh'),
('BE / BEL', '32', 'Belgium'),
('BF / BFA', '226', 'Burkina Faso'),
('BG / BGR', '359', 'Bulgaria'),
('BH / BHR', '973', 'Bahrain'),
('BI / BDI', '257', 'Burundi'),
('BJ / BEN', '229', 'Benin'),
('BL / BLM', '590', 'Saint Barthelemy'),
('BM / BMU', '1-441', 'Bermuda'),
('BN / BRN', '673', 'Brunei'),
('BO / BOL', '591', 'Bolivia'),
('BR / BRA', '55', 'Brazil'),
('BS / BHS', '1-242', 'Bahamas'),
('BT / BTN', '975', 'Bhutan'),
('BW / BWA', '267', 'Botswana'),
('BY / BLR', '375', 'Belarus'),
('BZ / BLZ', '501', 'Belize'),
('CA / CAN', '1', 'Canada'),
('CC / CCK', '61', 'Cocos Islands'),
('CD / COD', '243', 'Democratic Republic of the Congo'),
('CF / CAF', '236', 'Central African Republic'),
('CG / COG', '242', 'Republic of the Congo'),
('CH / CHE', '41', 'Switzerland'),
('CI / CIV', '225', 'Ivory Coast'),
('CK / COK', '682', 'Cook Islands'),
('CL / CHL', '56', 'Chile'),
('CM / CMR', '237', 'Cameroon'),
('CN / CHN', '86', 'China'),
('CO / COL', '57', 'Colombia'),
('CR / CRI', '506', 'Costa Rica'),
('CU / CUB', '53', 'Cuba'),
('CV / CPV', '238', 'Cape Verde'),
('CW / CUW', '599', 'Curacao'),
('CX / CXR', '61', 'Christmas Island'),
('CY / CYP', '357', 'Cyprus'),
('CZ / CZE', '420', 'Czech Republic'),
('DE / DEU', '49', 'Germany'),
('DJ / DJI', '253', 'Djibouti'),
('DK / DNK', '45', 'Denmark'),
('DM / DMA', '1-767', 'Dominica'),
('DO / DOM', '1-809, 1-829, 1-849', 'Dominican Republic'),
('DZ / DZA', '213', 'Algeria'),
('EC / ECU', '593', 'Ecuador'),
('EE / EST', '372', 'Estonia'),
('EG / EGY', '20', 'Egypt'),
('EH / ESH', '212', 'Western Sahara'),
('ER / ERI', '291', 'Eritrea'),
('ES / ESP', '34', 'Spain'),
('ET / ETH', '251', 'Ethiopia'),
('FI / FIN', '358', 'Finland'),
('FJ / FJI', '679', 'Fiji'),
('FK / FLK', '500', 'Falkland Islands'),
('FM / FSM', '691', 'Micronesia'),
('FO / FRO', '298', 'Faroe Islands'),
('FR / FRA', '33', 'France'),
('GA / GAB', '241', 'Gabon'),
('GB / GBR', '44', 'United Kingdom'),
('GD / GRD', '1-473', 'Grenada'),
('GE / GEO', '995', 'Georgia'),
('GG / GGY', '44-1481', 'Guernsey'),
('GH / GHA', '233', 'Ghana'),
('GI / GIB', '350', 'Gibraltar'),
('GL / GRL', '299', 'Greenland'),
('GM / GMB', '220', 'Gambia'),
('GN / GIN', '224', 'Guinea'),
('GQ / GNQ', '240', 'Equatorial Guinea'),
('GR / GRC', '30', 'Greece'),
('GT / GTM', '502', 'Guatemala'),
('GU / GUM', '1-671', 'Guam'),
('GW / GNB', '245', 'Guinea-Bissau'),
('GY / GUY', '592', 'Guyana'),
('HK / HKG', '852', 'Hong Kong'),
('HN / HND', '504', 'Honduras'),
('HR / HRV', '385', 'Croatia'),
('HT / HTI', '509', 'Haiti'),
('HU / HUN', '36', 'Hungary'),
('ID / IDN', '62', 'Indonesia'),
('IE / IRL', '353', 'Ireland'),
('IL / ISR', '972', 'Israel'),
('IM / IMN', '44-1624', 'Isle of Man'),
('IN / IND', '91', 'India'),
('IO / IOT', '246', 'British Indian Ocean Territory'),
('IQ / IRQ', '964', 'Iraq'),
('IR / IRN', '98', 'Iran'),
('IS / ISL', '354', 'Iceland'),
('IT / ITA', '39', 'Italy'),
('JE / JEY', '44-1534', 'Jersey'),
('JM / JAM', '1-876', 'Jamaica'),
('JO / JOR', '962', 'Jordan'),
('JP / JPN', '81', 'Japan'),
('KE / KEN', '254', 'Kenya'),
('KG / KGZ', '996', 'Kyrgyzstan'),
('KH / KHM', '855', 'Cambodia'),
('KI / KIR', '686', 'Kiribati'),
('KM / COM', '269', 'Comoros'),
('KN / KNA', '1-869', 'Saint Kitts and Nevis'),
('KP / PRK', '850', 'North Korea'),
('KR / KOR', '82', 'South Korea'),
('KW / KWT', '965', 'Kuwait'),
('KY / CYM', '1-345', 'Cayman Islands'),
('KZ / KAZ', '7', 'Kazakhstan'),
('LA / LAO', '856', 'Laos'),
('LB / LBN', '961', 'Lebanon'),
('LC / LCA', '1-758', 'Saint Lucia'),
('LI / LIE', '423', 'Liechtenstein'),
('LK / LKA', '94', 'Sri Lanka'),
('LR / LBR', '231', 'Liberia'),
('LS / LSO', '266', 'Lesotho'),
('LT / LTU', '370', 'Lithuania'),
('LU / LUX', '352', 'Luxembourg'),
('LV / LVA', '371', 'Latvia'),
('LY / LBY', '218', 'Libya'),
('MA / MAR', '212', 'Morocco'),
('MC / MCO', '377', 'Monaco'),
('MD / MDA', '373', 'Moldova'),
('ME / MNE', '382', 'Montenegro'),
('MF / MAF', '590', 'Saint Martin'),
('MG / MDG', '261', 'Madagascar'),
('MH / MHL', '692', 'Marshall Islands'),
('MK / MKD', '389', 'Macedonia'),
('ML / MLI', '223', 'Mali'),
('MM / MMR', '95', 'Myanmar'),
('MN / MNG', '976', 'Mongolia'),
('MO / MAC', '853', 'Macau'),
('MP / MNP', '1-670', 'Northern Mariana Islands'),
('MR / MRT', '222', 'Mauritania'),
('MS / MSR', '1-664', 'Montserrat'),
('MT / MLT', '356', 'Malta'),
('MU / MUS', '230', 'Mauritius'),
('MV / MDV', '960', 'Maldives'),
('MW / MWI', '265', 'Malawi'),
('MX / MEX', '52', 'Mexico'),
('MY / MYS', '60', 'Malaysia'),
('MZ / MOZ', '258', 'Mozambique'),
('NA / NAM', '264', 'Namibia'),
('NC / NCL', '687', 'New Caledonia'),
('NE / NER', '227', 'Niger'),
('NG / NGA', '234', 'Nigeria'),
('NI / NIC', '505', 'Nicaragua'),
('NL / NLD', '31', 'Netherlands'),
('NO / NOR', '47', 'Norway'),
('NP / NPL', '977', 'Nepal'),
('NR / NRU', '674', 'Nauru'),
('NU / NIU', '683', 'Niue'),
('NZ / NZL', '64', 'New Zealand'),
('OM / OMN', '968', 'Oman'),
('PA / PAN', '507', 'Panama'),
('PE / PER', '51', 'Peru'),
('PF / PYF', '689', 'French Polynesia'),
('PG / PNG', '675', 'Papua New Guinea'),
('PH / PHL', '63', 'Philippines'),
('PK / PAK', '92', 'Pakistan'),
('PL / POL', '48', 'Poland'),
('PM / SPM', '508', 'Saint Pierre and Miquelon'),
('PN / PCN', '64', 'Pitcairn'),
('PR / PRI', '1-787, 1-939', 'Puerto Rico'),
('PS / PSE', '970', 'Palestine'),
('PT / PRT', '351', 'Portugal'),
('PW / PLW', '680', 'Palau'),
('PY / PRY', '595', 'Paraguay'),
('QA / QAT', '974', 'Qatar'),
('RE / REU', '262', 'Reunion'),
('RO / ROU', '40', 'Romania'),
('RS / SRB', '381', 'Serbia'),
('RU / RUS', '7', 'Russia'),
('RW / RWA', '250', 'Rwanda'),
('SA / SAU', '966', 'Saudi Arabia'),
('SB / SLB', '677', 'Solomon Islands'),
('SC / SYC', '248', 'Seychelles'),
('SD / SDN', '249', 'Sudan'),
('SE / SWE', '46', 'Sweden'),
('SG / SGP', '65', 'Singapore'),
('SH / SHN', '290', 'Saint Helena'),
('SI / SVN', '386', 'Slovenia'),
('SJ / SJM', '47', 'Svalbard and Jan Mayen'),
('SK / SVK', '421', 'Slovakia'),
('SL / SLE', '232', 'Sierra Leone'),
('SM / SMR', '378', 'San Marino'),
('SN / SEN', '221', 'Senegal'),
('SO / SOM', '252', 'Somalia'),
('SR / SUR', '597', 'Suriname'),
('SS / SSD', '211', 'South Sudan'),
('ST / STP', '239', 'Sao Tome and Principe'),
('SV / SLV', '503', 'El Salvador'),
('SX / SXM', '1-721', 'Sint Maarten'),
('SY / SYR', '963', 'Syria'),
('SZ / SWZ', '268', 'Swaziland'),
('TC / TCA', '1-649', 'Turks and Caicos Islands'),
('TD / TCD', '235', 'Chad'),
('TG / TGO', '228', 'Togo'),
('TH / THA', '66', 'Thailand'),
('TJ / TJK', '992', 'Tajikistan'),
('TK / TKL', '690', 'Tokelau'),
('TL / TLS', '670', 'East Timor'),
('TM / TKM', '993', 'Turkmenistan'),
('TN / TUN', '216', 'Tunisia'),
('TO / TON', '676', 'Tonga'),
('TR / TUR', '90', 'Turkey'),
('TT / TTO', '1-868', 'Trinidad and Tobago'),
('TV / TUV', '688', 'Tuvalu'),
('TW / TWN', '886', 'Taiwan'),
('TZ / TZA', '255', 'Tanzania'),
('UA / UKR', '380', 'Ukraine'),
('UG / UGA', '256', 'Uganda'),
('US / USA', '1', 'United States'),
('UY / URY', '598', 'Uruguay'),
('UZ / UZB', '998', 'Uzbekistan'),
('VA / VAT', '379', 'Vatican'),
('VC / VCT', '1-784', 'Saint Vincent and the Grenadines'),
('VE / VEN', '58', 'Venezuela'),
('VG / VGB', '1-284', 'British Virgin Islands'),
('VI / VIR', '1-340', 'U.S. Virgin Islands'),
('VN / VNM', '84', 'Vietnam'),
('VU / VUT', '678', 'Vanuatu'),
('WF / WLF', '681', 'Wallis and Futuna'),
('WS / WSM', '685', 'Samoa'),
('XK / XKX', '383', 'Kosovo'),
('YE / YEM', '967', 'Yemen'),
('YT / MYT', '262', 'Mayotte'),
('ZA / ZAF', '27', 'South Africa'),
('ZM / ZMB', '260', 'Zambia'),
('ZW / ZWE', '263', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_currency`
--

CREATE TABLE `tb_currency` (
  `id_currency` int(5) NOT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `init` varchar(10) DEFAULT NULL,
  `rate` varchar(20) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_currency`
--

INSERT INTO `tb_currency` (`id_currency`, `currency`, `init`, `rate`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
(1, 'Hongkong', 'Yuan', '0,00045', '2021-06-14 10:17:01', 'nurman', '2021-06-24 11:35:35', 'admin'),
(2, 'Indonesia', 'RP', NULL, '2021-06-14 10:23:42', 'nurman', '2021-06-14 10:23:42', 'nurman'),
(3, 'Singapore', 'SGD', NULL, '2021-06-14 10:24:06', 'nurman', '2021-06-14 10:24:06', 'nurman'),
(4, 'United States Of America', 'USD', NULL, '2021-06-14 10:24:35', 'nurman', '2021-06-14 10:24:35', 'nurman'),
(5, 'Japan', 'YEN', NULL, '2021-06-14 10:24:47', 'nurman', '2021-06-14 10:24:47', 'nurman'),
(10, 'London', 'Pound', '0,00005', '2021-06-15 07:58:25', 'nurman', '2021-06-24 11:35:12', 'admin'),
(11, 'Thailand', 'THD', NULL, '2021-06-16 11:18:47', 'nurman', '2021-06-16 11:18:47', 'nurman'),
(12, 'Ringgit Malaysia', 'RM', '0,00029', '2021-06-24 11:36:35', 'admin', '2021-06-24 11:36:35', 'admin');

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
(2, 'FINANCE', 'FIN', '2', '2021-06-15 08:51:16', 'nurman', '2021-06-15 08:51:16', 'nurman'),
(6, 'Agency 1', 'AGN 1', '5', '2021-06-16 14:13:09', 'nurman', '2021-06-16 14:13:09', 'nurman'),
(7, 'Agency 2', 'AGN 2', '5', '2021-06-16 14:17:44', 'nurman', '2021-06-16 14:17:44', 'nurman'),
(8, 'OPERATIONAL', 'OPR', '2', '2021-06-29 06:22:03', 'AINA SOPHIA', '2021-06-29 06:22:03', 'AINA SOPHIA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_estimasi`
--

CREATE TABLE `tb_estimasi` (
  `kd_estimasi` varchar(255) DEFAULT NULL,
  `id_company` varchar(255) DEFAULT NULL,
  `no_acc` varchar(255) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `status` enum('MASUK','KELUAR') DEFAULT NULL,
  `debit_kredit` enum('DEBIT','KREDIT') DEFAULT NULL,
  `amount_rate` varchar(255) DEFAULT NULL,
  `amount_dbfc` varchar(255) DEFAULT NULL,
  `amount_crfc` varchar(255) DEFAULT NULL,
  `debit` varchar(255) DEFAULT NULL,
  `kredit` varchar(255) DEFAULT NULL,
  `uraian` varchar(255) DEFAULT NULL,
  `jumlah_fc` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `id_kunjungan` varchar(255) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_employee` varchar(255) NOT NULL,
  `employee_name` varchar(255) DEFAULT NULL,
  `place_of_birth` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('PRIA','WANITA') DEFAULT NULL,
  `religion` enum('ISLAM','PROTESTAN','KATOLIK','HINDU','BUDHA','KONG HU CHU') DEFAULT NULL,
  `marital_status` enum('KAWIN','BELUM KAWIN','CERAI') DEFAULT NULL,
  `last_education` varchar(255) DEFAULT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `home_phone_number` varchar(15) DEFAULT NULL,
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
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_employee`, `employee_name`, `place_of_birth`, `date_of_birth`, `gender`, `religion`, `marital_status`, `last_education`, `citizenship`, `nik`, `address`, `postal_code`, `phone_number`, `home_phone_number`, `email`, `npwp`, `ptkp`, `join_date`, `out_date`, `id_department`, `id_position`, `id_company`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
('210614124636', 'WAHYU TRISNADI', NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('210627030527', 'Aina Sophia ', 'Jakarta', '1995-05-18', 'WANITA', 'PROTESTAN', 'CERAI', 'S2', 'Indonesia', '3201251293184', 'Tanjung Priook', '82818', '082188877710', '021849271', 'sophia.aina@gmail.com', '1298104810000', '1000000921', '2020-05-19', '2021-06-25', '2', '4', '2', '2021-06-28 05:45:28', 'admin', '2021-06-28 05:45:28', 'admin'),
('210627122805', 'Nurmansyah', 'Bogor', '1995-09-12', 'PRIA', 'ISLAM', '', 'SMA - SETARA SMA', 'Indonesia', '3201230888216419', 'Jalan Kampung Jogjogan RT. 003 / RW. 001 Desa Jogjogan Kecamatan Cisarua Kabupaten Bogor', '16750', '085717364016', '0218256025', 'xandermand.xander@gmail.com', '12974891279', '27429172489', '2020-06-24', '2021-06-27', NULL, '4', '2', '2021-06-27 12:30:19', 'admin', '2021-06-27 12:30:19', ''),
('210630040849', 'TEAM GEMEZ WHY119', 'Bogor', '1993-08-12', 'PRIA', 'ISLAM', 'BELUM KAWIN', 'S1', 'Indonesia', '3201231827879', 'Malang', '17654', '99127977', '28716487687', 'team.gmez@gmail.com', '1214214124', '1212412', '2020-01-12', '0000-00-00', '2', '8', '2', '2021-06-30 04:10:06', 'AINA SOPHIA', '2021-06-30 04:10:06', 'AINA SOPHIA');

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
  `id_kunjungan` varchar(255) NOT NULL,
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
  `is_close` enum('CLOSE','OPEN') DEFAULT NULL,
  `is_bayar` enum('YES','NO') DEFAULT NULL,
  `is_batal` enum('YES','NO') DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kunjungan`
--

INSERT INTO `tb_kunjungan` (`id_kunjungan`, `id_company`, `tgl_transaksi`, `id_kapal`, `id_pelabuhan`, `voyage`, `tgl_berangkat`, `tgl_tiba`, `no_acc`, `id_currency`, `rate`, `debet`, `kredit`, `is_close`, `is_bayar`, `is_batal`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
('TR210506582534', '2', '2021-06-25', 'KPL210706012218', 'PLB210706392206', '1110', '2021-06-25', '2021-06-29', '1001.01', NULL, NULL, NULL, NULL, 'OPEN', 'NO', 'NO', '2021-06-25 05:58:55', 'admin', '2021-06-25 05:58:55', 'admin'),
('TR210806462317', '2', '2021-06-23', 'KPL210706012218', 'PLB210706392206', '1102', '2021-06-23', '2021-06-26', '1001.01', NULL, NULL, NULL, NULL, 'OPEN', 'NO', 'NO', '2021-06-23 10:12:27', 'admin', '2021-06-23 10:12:27', 'admin'),
('TR211006122335', '2', '2021-06-23', 'KPL210706072239', 'PLB210706392214', '1231', '2021-06-24', '2021-06-28', '1001.01', NULL, NULL, NULL, NULL, 'OPEN', 'NO', 'NO', '2021-06-23 10:12:50', 'admin', '2021-06-23 10:12:50', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_level_user`
--

CREATE TABLE `tb_level_user` (
  `id_level` int(5) NOT NULL,
  `level` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_level_user`
--

INSERT INTO `tb_level_user` (`id_level`, `level`) VALUES
(1, 'IT Admin'),
(2, 'Read Only'),
(3, 'Add, Modif');

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
-- Struktur dari tabel `tb_non_operational`
--

CREATE TABLE `tb_non_operational` (
  `no_bukti` varchar(255) NOT NULL,
  `status` enum('R','P') DEFAULT NULL,
  `id_department` varchar(255) DEFAULT NULL,
  `no_ppu` varchar(255) DEFAULT NULL,
  `id_principal` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `terbilang` varchar(255) DEFAULT NULL,
  `ket_1` varchar(255) DEFAULT NULL,
  `ket_2` varchar(255) DEFAULT NULL,
  `ket_3` varchar(255) DEFAULT NULL,
  `requested_by` varchar(255) DEFAULT NULL,
  `approved_by` varchar(255) DEFAULT NULL,
  `acknowledge_by` varchar(255) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_non_operational`
--

INSERT INTO `tb_non_operational` (`no_bukti`, `status`, `id_department`, `no_ppu`, `id_principal`, `jumlah`, `terbilang`, `ket_1`, `ket_2`, `ket_3`, `requested_by`, `approved_by`, `acknowledge_by`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
('21063004054098', 'P', '2', 'FIN/P/21/06/0001', '280608335930', '32000000', 'Tiga Puluh Dua Juta Rupiah', 'tes 1', 'tes 2 ', 'tes 3', 'TEAM GEMEZ WHY119', NULL, NULL, '2021-06-30 04:40:34', 'TEAM GEMEZ WHY119', '2021-06-30 04:40:34', 'TEAM GEMEZ WHY119'),
('21063004283651', 'R', '2', 'FIN/R/21/06/0001', '280608335930', '50000000', 'Lima Puluh Juta Rupiah', 'Keterangan Satu', 'Keterangan 2', 'Keterangan Tiga', 'TEAM GEMEZ WHY119', NULL, NULL, '2021-06-30 04:37:02', 'TEAM GEMEZ WHY119', '2021-06-30 04:37:02', 'TEAM GEMEZ WHY119');

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
  `saldo_min` bigint(20) DEFAULT NULL,
  `is_budget` enum('YES','NO') DEFAULT NULL,
  `is_disb` enum('YES','NO') DEFAULT NULL,
  `id_company` varchar(254) DEFAULT NULL,
  `init_kas_bank` varchar(255) DEFAULT NULL,
  `no_rek` varchar(255) DEFAULT NULL,
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

INSERT INTO `tb_perkiraan` (`no_acc`, `nama_acc`, `acc_induk`, `level`, `jenis_perkiraan`, `is_jurnal`, `jenis_jurnal`, `laporan_gl`, `saldo_min`, `is_budget`, `is_disb`, `id_company`, `init_kas_bank`, `no_rek`, `id_bank`, `id_currency`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
('1', 'AKTIVA', '', '1', 'AKTIVA', 'NO', 'KAS', 'TES', NULL, '', NULL, '2', 'KAS-TES', NULL, '7', '2', '2021-06-20 13:14:38', 'nurman', '2021-06-20 13:14:38', 'nurman'),
('10', 'HUTANG JANGKA PENDEK', '1', '2', '', 'YES', '', '', NULL, '', NULL, '- Pilih Cabang -', '', NULL, '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:31:22', 'nurman', '2021-06-20 15:31:22', 'nurman'),
('100', 'KAS & SETARA KAS', '10', '3', '', 'YES', '', '', NULL, '', NULL, '- Pilih Cabang -', '', NULL, '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:31:41', 'nurman', '2021-06-20 15:31:41', 'nurman'),
('1000.00', 'KAS', '100', '4', '', 'YES', '', '', NULL, '', NULL, '- Pilih Cabang -', '', NULL, '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:32:07', 'nurman', '2021-06-20 15:32:07', 'nurman'),
('1000.01', 'KAS BESAR RUPIAH', '1000.00', '5', '', 'YES', '', '', NULL, '', NULL, '- Pilih Cabang -', '', NULL, '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:32:28', 'nurman', '2021-06-20 15:32:28', 'nurman'),
('1001.01', 'KAS BESAR RUPIAH SEMARANG', '1000.01', '6', 'AKTIVA', 'YES', '', '', 1500000, '', NULL, '- Pilih Cabang -', '', NULL, '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:48:58', 'nurman', '2021-06-20 15:48:58', 'nurman'),
('1001.02', 'KAS BESAR', '1000.01', '6', 'PASSIVA', 'YES', '', '', 2000000, '', NULL, '- Pilih Cabang -', '', NULL, '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:50:06', 'nurman', '2021-06-20 15:50:06', 'nurman'),
('1001.03', 'TES', '1000.01', '6', 'BIAYA', 'YES', '', '', NULL, '', NULL, '- Pilih Cabang -', '', NULL, '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:51:12', 'nurman', '2021-06-20 15:51:12', 'nurman'),
('1001.04', 'TES 2', '1000.01', '6', 'AKTIVA', 'YES', '', '', NULL, '', NULL, '- Pilih Cabang -', '', NULL, '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:51:42', 'nurman', '2021-06-20 15:51:42', 'nurman'),
('1000.01', 'Bank Mandiri Tebet', '1000.01', '6', 'AKTIVA', 'YES', 'KAS', 'TES', NULL, '', NULL, '2', 'MDR TEBET', '123 12312 123112', '7', '1', '2021-06-24 12:00:50', 'admin', '2021-06-24 12:00:50', 'admin'),
('1001.01', 'TES LAGI', '1000.01', '6', 'AKTIVA', 'NO', 'BANK', NULL, 800000000, 'NO', NULL, '2', 'MDR - TEBET', '321214142131', '7', NULL, '2021-06-28 12:30:20', 'admin', '2021-06-28 12:30:20', 'admin'),
('1001.05', 'TES LAGI 2', '1000.01', '6', 'PASSIVA', 'NO', 'KAS', NULL, NULL, '', NULL, '2', 'KAS 111', NULL, NULL, '2', '2021-06-28 12:34:11', 'admin', '2021-06-28 12:34:11', 'admin');

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
  `no_rek` varchar(255) DEFAULT NULL,
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

INSERT INTO `tb_perkiraan_bunglon` (`no_acc_bunglon`, `no_acc`, `nama_acc`, `acc_induk`, `level`, `jenis_perkiraan`, `is_jurnal`, `jenis_jurnal`, `laporan_gl`, `saldo_min`, `is_budget`, `is_disb`, `id_company`, `init_kas_bank`, `no_rek`, `id_bank`, `id_currency`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
('6001.01', '1001.01', 'KAS BESAR RUPIAH SEMARANG', '1000.01', '6', 'PASSIVABY', 'YES', '', '', 1500000, '', NULL, '- Pilih Cabang -', '', NULL, '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:48:58', 'nurman', '2021-06-20 15:48:58', 'nurman'),
('5001.02', '1001.02', 'KAS BESAR', '1000.01', '6', 'AKTIVABY', 'YES', '', '', 2000000, '', NULL, '- Pilih Cabang -', '', NULL, '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:50:06', 'nurman', '2021-06-20 15:50:06', 'nurman'),
('6001.04', '1001.04', 'TES 2', '1000.01', '6', 'PASSIVABY', 'YES', '', '', NULL, '', NULL, '- Pilih Cabang -', '', NULL, '- Pilih Bank -', '- Pilih Currency -', '2021-06-20 15:51:42', 'nurman', '2021-06-20 15:51:42', 'nurman'),
('6000.01', '1000.01', 'Bank Mandiri Tebet', '1000.01', '6', 'PASSIVABY', 'YES', 'KAS', 'TES', NULL, '', NULL, '2', 'MDR TEBET', '123 12312 123112', '7', '1', '2021-06-24 12:00:50', 'admin', '2021-06-24 12:00:50', 'admin'),
('6001.01', '1001.01', 'TES LAGI', '1000.01', '6', 'PASSIVABY', 'NO', 'BANK', NULL, 800000000, 'NO', NULL, '2', 'MDR - TEBET', '321214142131', '7', NULL, '2021-06-28 12:30:20', 'admin', '2021-06-28 12:30:20', 'admin'),
('5001.05', '1001.05', 'TES LAGI 2', '1000.01', '6', 'PASSIVA', 'NO', 'KAS', NULL, NULL, '', NULL, '2', 'KAS 111', NULL, NULL, '2', '2021-06-28 12:34:11', 'admin', '2021-06-28 12:34:11', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_position`
--

CREATE TABLE `tb_position` (
  `id_position` int(5) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `init` varchar(255) DEFAULT NULL,
  `id_company` varchar(255) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_position`
--

INSERT INTO `tb_position` (`id_position`, `position`, `init`, `id_company`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
(4, 'DIREKTUR', 'DIR', '2', '2021-06-15 09:36:03', 'nurman', '2021-06-15 09:36:03', 'nurman'),
(7, 'DIREKTUR UTAMA', 'DIRUT', '2', '2021-06-29 07:10:23', 'AINA SOPHIA', '2021-06-29 07:10:23', 'AINA SOPHIA'),
(8, 'STAFF UMUM', 'STA', '2', '2021-06-29 07:11:13', 'AINA SOPHIA', '2021-06-29 07:11:13', 'AINA SOPHIA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_principal`
--

CREATE TABLE `tb_principal` (
  `id_principal` varchar(254) NOT NULL,
  `nama_principal` varchar(254) DEFAULT NULL,
  `inisial_nama` varchar(254) DEFAULT NULL,
  `is_dk_note` enum('Y','N') DEFAULT NULL,
  `alamat` varchar(254) DEFAULT NULL,
  `alamat_kedua` varchar(254) DEFAULT NULL,
  `kode_pos` varchar(254) DEFAULT NULL,
  `iso_code` varchar(254) DEFAULT NULL,
  `kode_area_telp_satu` varchar(254) DEFAULT NULL,
  `telepon_satu` varchar(254) DEFAULT NULL,
  `kode_area_telp_dua` varchar(254) DEFAULT NULL,
  `telepon_dua` varchar(254) DEFAULT NULL,
  `kode_area_fax` varchar(254) DEFAULT NULL,
  `fax` varchar(254) DEFAULT NULL,
  `contact_person` varchar(254) DEFAULT NULL,
  `no_acc` varchar(254) DEFAULT NULL,
  `created_time` date DEFAULT NULL,
  `created_by` varchar(254) DEFAULT NULL,
  `updated_time` date DEFAULT NULL,
  `updated_by` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_principal`
--

INSERT INTO `tb_principal` (`id_principal`, `nama_principal`, `inisial_nama`, `is_dk_note`, `alamat`, `alamat_kedua`, `kode_pos`, `iso_code`, `kode_area_telp_satu`, `telepon_satu`, `kode_area_telp_dua`, `telepon_dua`, `kode_area_fax`, `fax`, `contact_person`, `no_acc`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
('280608335930', 'GLOBAL MARINE SERVIS', 'GHS', 'N', 'GMS BUILDING, 9-9 IRIFUNE 3 CHOME, ', 'TOKYO, 100-', '104042', 'JP / JPN', '+81', '12891279', '+81', '8491712', '+81', '2749817', 'KOTARO FUMA', '1001.03', '2021-06-28', 'admin', '2021-06-28', 'admin');

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
  `id_position` varchar(255) DEFAULT NULL,
  `id_company` varchar(255) DEFAULT NULL,
  `id_employee` varchar(255) DEFAULT NULL,
  `id_level` int(5) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `updated_by` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `is_active`, `id_department`, `id_position`, `id_company`, `id_employee`, `id_level`, `created_time`, `created_by`, `updated_time`, `updated_by`) VALUES
('210613154321', 'IT', '202cb962ac59075b964b07152d234b70', '1', '1', NULL, '1', '0', 1, '2021-06-13 15:44:11', NULL, '2021-06-13 15:44:17', NULL),
('210614124944', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL),
('2806210514191', 'AINA SOPHIA', 'e10adc3949ba59abbe56e057f20f883e', '1', '2', '4', '2', '210627030527', 3, '2021-06-28 17:19:20', 'IT', '2021-06-28 17:19:20', ''),
('300621043610100', 'TEAM GEMEZ WHY119', 'e10adc3949ba59abbe56e057f20f883e', '1', '2', '8', '2', '210630040849', 3, '2021-06-30 04:10:36', 'IT', '2021-06-30 04:10:36', '');

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
-- Indeks untuk tabel `tb_country`
--
ALTER TABLE `tb_country`
  ADD PRIMARY KEY (`iso_code`);

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
-- Indeks untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_employee`);

--
-- Indeks untuk tabel `tb_kas_bank`
--
ALTER TABLE `tb_kas_bank`
  ADD PRIMARY KEY (`id_kas_bank`);

--
-- Indeks untuk tabel `tb_kunjungan`
--
ALTER TABLE `tb_kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`) USING BTREE;

--
-- Indeks untuk tabel `tb_level_user`
--
ALTER TABLE `tb_level_user`
  ADD PRIMARY KEY (`id_level`);

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
-- Indeks untuk tabel `tb_non_operational`
--
ALTER TABLE `tb_non_operational`
  ADD PRIMARY KEY (`no_bukti`);

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
-- Indeks untuk tabel `tb_principal`
--
ALTER TABLE `tb_principal`
  ADD PRIMARY KEY (`id_principal`);

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
  MODIFY `id_currency` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_department`
--
ALTER TABLE `tb_department`
  MODIFY `id_department` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT untuk tabel `tb_level_user`
--
ALTER TABLE `tb_level_user`
  MODIFY `id_level` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_modul`
--
ALTER TABLE `tb_modul`
  MODIFY `id_modul` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_position`
--
ALTER TABLE `tb_position`
  MODIFY `id_position` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
