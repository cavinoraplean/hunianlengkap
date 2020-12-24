-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2019 pada 15.06
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hunianlengkap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cicil`
--

CREATE TABLE `tb_cicil` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kota` varchar(20) NOT NULL,
  `nama_prmhn` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  `type_rumah` varchar(11) NOT NULL,
  `uang` bigint(20) NOT NULL,
  `cicilan_terbayar` int(11) NOT NULL,
  `sisa_cicilan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_cicil`
--

INSERT INTO `tb_cicil` (`id`, `tanggal`, `kota`, `nama_prmhn`, `alamat`, `nama`, `type_rumah`, `uang`, `cicilan_terbayar`, `sisa_cicilan`) VALUES
(16, '2019-10-23', 'Cibubur', 'CitraGran Cibubur', 'Jl. Alternatif Cibubur KM. 4 Cibubur', 'Rusedie', 'Iritona', 200000000, 800000000, 400000000),
(17, '2019-10-23', 'Jakarta', 'Cluster AeroMansion', 'Soho Blok D.02 No. 10-11, Aeroworld 8, CitraGarden City, Jakarta Barat', 'Ryandhon', 'Cressida', 200000000, 1166666666, 833333333),
(18, '2019-10-23', 'Cibubur', 'CitraGran Cibubur', 'Jl. Alternatif Cibubur KM. 4 Cibubur', 'Kevin', 'Calla', 200000000, 540000000, 540000000),
(19, '2019-10-23', 'Cibubur', 'CitraGran Cibubur', 'Jl. Alternatif Cibubur KM. 4 Cibubur', 'Pragantha', 'Clarkia', 400000000, 480000000, 240000000),
(21, '2019-10-24', 'Jakarta', 'Cluster AeroMansion', 'Soho Blok D.02 No. 10-11, Aeroworld 8, CitraGarden City, Jakarta Barat', 'Cavin', 'Cardea', 300000000, 1187500000, 712500000),
(22, '2019-10-24', 'Jambi', 'Citra Bukit Raya', 'Jl. Raya Boulevard blok A.23 No.1 , Jambi, Indonesia', 'William', 'Cemara', 170000000, 312500000, 357500000),
(23, '2019-10-24', 'Jambi', 'Citra Bukit Raya', 'Jl. Raya Boulevard blok A.23 No.1 , Jambi, Indonesia', 'Ido', 'Pinus', 210000000, 312500000, 397500000),
(24, '2019-10-25', 'Kota Batu', 'D\'Jagad Land Batu', 'Jalan Oro-Oro Ombo Kec. Batu, Kota Batu, Jawa Timur 65316', 'Budi', 'Type 50', 140000000, 250000000, 50000000),
(25, '2019-10-25', 'Kota Batu', 'D\'Jagad Land Batu', 'Jalan Oro-Oro Ombo Kec. Batu, Kota Batu, Jawa Timur 65316', 'Oliver', 'Type 62,5', 305000000, 250000000, 50000000),
(26, '2019-10-25', 'Kota Batu', 'D\'Jagad Land Batu', 'Jalan Oro-Oro Ombo Kec. Batu, Kota Batu, Jawa Timur 65316', 'Agung', 'Type 67', 115000000, 400000000, 200000000),
(27, '2019-10-26', 'Kota Batu', 'D\'Jagad Land Batu', 'Jalan Oro-Oro Ombo Kec. Batu, Kota Batu, Jawa Timur 65316', 'Abimanyu', 'Type 87', 260000000, 630000000, 90000000),
(32, '2019-10-27', 'Malang', 'Citra Garden City', 'Jalan CitraGarden City Boulevard, Kelurahan Buring, Kecamatan Kedungkandang, Malang', 'Markus', 'Cartenz', 300000000, 700000000, 500000000),
(33, '2019-10-27', 'Malang', 'Citra Garden City', 'Jalan CitraGarden City Boulevard, Kelurahan Buring, Kecamatan Kedungkandang, Malang', 'Triawan', 'Elbrus', 350000000, 700000000, 500000000),
(34, '2019-10-27', 'Malang', 'Citra Garden City', 'Jalan CitraGarden City Boulevard, Kelurahan Buring, Kecamatan Kedungkandang, Malang', 'Dina', 'Elbrus Upsl', 330000000, 537500000, 722500000),
(35, '2019-10-27', 'Malang', 'Citra Garden City', 'Jalan CitraGarden City Boulevard, Kelurahan Buring, Kecamatan Kedungkandang, Malang', 'Bayu', 'Everest', 200000000, 1280000000, 160000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perumahan`
--

CREATE TABLE `tb_perumahan` (
  `id` int(11) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_perumahan`
--

INSERT INTO `tb_perumahan` (`id`, `kota`, `alamat`, `type`, `url`, `nama`) VALUES
(6, 'Kota Batu', 'Jalan Oro-Oro Ombo Kec. Batu, Kota Batu, Jawa Timur 65316', 'Type 50, Type 62.5, Type 67, Type 87', 'https://www.djagadland.com/djagadlandbatu', 'D\'Jagad Land Batu'),
(7, 'Malang', 'Jalan CitraGarden City Boulevard,\r\nKelurahan Buring, Kecamatan Kedungkandang,\r\nMalang', 'Cartenz, Elbrus, Elbrus Upslope, Everest, Everest ', 'https://citragardencitymalang.com/campaign-the-pea', 'Citra Garden City'),
(8, 'Tanggerang', 'Jalan Alam Sutera, Kota Tangerang', 'Naia+, Lotus+, Nara, Lily+,  Spruce', 'www.alam-sutera.com', 'Cluster Sutera Victoria'),
(9, 'Tanggerang', 'Jl. Sutera Victoria 7A no 7, Tanggerang', 'Type Lily', 'www.alam-sutera.com', 'Cluster Sutera Victoria'),
(10, 'Tanggerang', 'Jl. Sutera Utama, Alam Sutera, Tanggerang', 'Naia, Nara', 'www.alam-sutera.com', 'Cluster Sutera Victoria'),
(11, 'Jambi', 'Jl. Raya Boulevard blok A.23 No.1 , Jambi, Indonesia', 'Cemara, Pinus, Tanjung, Flamboyan, Mahoni, Gandari', 'https://citrarayacity.co.id/citra-bukit-raya/', 'Citra Bukit Raya'),
(12, 'Sidoarjo', 'Jalan Sawo, Dusun Sawo, Desa Sukodono, Kecamatan Sukodono, Sidoarjo.', 'Type 38, Type 48, Type 54, Type 63, Type 82 ', 'https://surya-harmoni.com/', 'Surya Harmoni'),
(13, 'Cibubur', 'Jl. Alternatif Cibubur KM. 4 Cibubur', 'Clarkia, Calla, Tritona', 'https://www.citragran.com', 'CitraGran Cibubur'),
(14, 'Jakarta', 'Soho Blok D.02 No. 10-11, Aeroworld 8, CitraGarden City, Jakarta Barat', 'Cressida, Cardea, Carmenta, Hestia, Vesta', 'https://citragardencity.com/cluster-aeromansion-ci', 'Cluster AeroMansion'),
(15, 'Banten', 'Jl. Citra Maja Raya Boulevard\r\nBlok C.02/ No.1 Sektor 1.1\r\nMaja, Banten', 'Aspen, Cedar, Hazel', 'https://citramaja.com/cluster-greenville-citra-maj', 'Citra Maja Raya'),
(16, 'Tanggerang', 'Jl. CitraRaya Boulevard Tangerang 15710', 'Fresia, Lavanda, Viola', 'https://citraraya.com/cluster-certara-park-di-citr', 'Citra Raya Tanggerang'),
(18, 'Bogor', ' Jalan Cilebut Raya No. 25, Cilebut – Bogor', 'Safir, Ruby, Emerald', 'http://permatabogor.co.id/', 'Permata Bogor Residence'),
(19, 'Depok', 'perumahan cluster di Jl. Raya Parung No. 27, Bojongsari Lama, Depok', 'Type 48/51, Type 51/105, Type 72/120', 'https://www.hcitysawangan.com/', 'City Sawangan'),
(20, 'Semarang', 'Ruko, Jl. Kompol R Soekanto No.5, Sambiroto, Kec. Tembalang, Kota Semarang, Jawa Tengah 50271', 'Red Terracotta, D\'Boulevard,  Greenstone, Riversid', 'https://www.citragrand-semarang.com/', 'Citragrand Semarang'),
(21, 'Yogyakarta', 'JL. Magelang, KM 5,8, Yogyakarta', 'Type 42, Type 55', 'http://sumberbaruland.com/pondok-permai-giwangan.h', 'Pondok Permai Giwangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id` int(11) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `nama_prmhn` varchar(25) NOT NULL,
  `alamat_prmhn` text NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tugas` varchar(30) NOT NULL,
  `no_tlp` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_petugas`
--

INSERT INTO `tb_petugas` (`id`, `kota`, `nama_prmhn`, `alamat_prmhn`, `nama`, `tugas`, `no_tlp`, `alamat`) VALUES
(1, 'Kota Batu', 'D\'Jagad Land Batu', 'Jalan Oro-Oro Ombo Kec. Batu, Kota Batu, Jawa Timur 65316', 'Pak Ari', 'Keamanan', '081354987456', 'Jalan Soekarno-Hatta Komplek Griya Santa'),
(2, 'Malang', 'Citra Garden City', 'Jalan CitraGarden City Boulevard, Kelurahan Buring, Kecamatan Kedungkandang, Malang', 'Pak Sunandar', 'Kebersihan', '081353556843', 'Jalan Bendungan Riam Kanan Gg. 3 '),
(3, 'Malang', 'Citra Garden City', 'Jalan CitraGarden City Boulevard, Kelurahan Buring, Kecamatan Kedungkandang, Malang', 'Pak William', 'Keamanan', '085264869395', 'Jl. Veteran Gg. V'),
(5, 'Jakarta', 'Cluster AeroMansion', 'Soho Blok D.02 No. 10-11, Aeroworld 8, CitraGarden City, Jakarta Barat', 'Pak Sandi', 'Keamanan', '081256546785', 'JL. Tebet Raya No. 84, Tebet, Jakarta Selatan'),
(6, 'Jakarta', 'Cluster AeroMansion', 'Soho Blok D.02 No. 10-11, Aeroworld 8, CitraGarden City, Jakarta Barat', 'Pak Zikri', 'Jl. Kebon Jeruk Raya No. 44 (d', '081245435678', 'Jl. Kebon Jeruk Raya No. 44 (depan SMPN 75) Jakarta Barat.'),
(7, 'Jakarta', 'Cluster AeroMansion', 'Soho Blok D.02 No. 10-11, Aeroworld 8, CitraGarden City, Jakarta Barat', 'Pak Ahmad', 'Kebersihan', '081354556785', 'Jl. Daan Mogot No. 20 Grogol Kel. Wijaya Kusuma'),
(8, 'Kota Batu', 'D\'Jagad Land Batu', 'Jalan Oro-Oro Ombo Kec. Batu, Kota Batu, Jawa Timur 65316', 'Pak Bambang', 'Keamanan', '089624565428', 'JL GONDOREJO NO 1044 RT. 2 RW. 11 ORO ORO OMBO BATU'),
(9, 'Kota Batu', 'D\'Jagad Land Batu', 'Jalan Oro-Oro Ombo Kec. Batu, Kota Batu, Jawa Timur 65316', 'Pak Mandala', 'Kebersihan', '085245478953', 'JALAN PRONOYUDO DADAPREJO JUNREJO KOTA BATU'),
(10, 'Sidoarjo', 'Surya Harmoni', 'Jalan Sawo, Dusun Sawo, Desa Sukodono, Kecamatan Sukodono, Sidoarjo.', 'Pak Hadi', 'Keamanan', '089643456789', 'Jl. Margoutomo RT 003 RW 001 Desa Sawohan Kecamatan Buduran Kabupaten Sidoarjo Jawa Timur'),
(11, 'Sidoarjo', 'Surya Harmoni', 'Jalan Sawo, Dusun Sawo, Desa Sukodono, Kecamatan Sukodono, Sidoarjo.', 'Pak Samsyir', 'Keamanan', '081356743890', 'Jalan Kahuripan Nirwana Village CA VIII No. 38 Sidoarjo 61226 Jawa Timur'),
(12, 'Sidoarjo', 'Surya Harmoni', 'Jalan Sawo, Dusun Sawo, Desa Sukodono, Kecamatan Sukodono, Sidoarjo.', 'Pak Bachtiar', 'Kebersihan', '085735783928', 'Jl. Bebekan Masjid 1-2, Sepanjang Sidoarjo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_promo`
--

CREATE TABLE `tb_promo` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kota` varchar(20) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `type` varchar(30) NOT NULL,
  `fasilitas` text NOT NULL,
  `harga` varchar(30) NOT NULL,
  `promo` varchar(11) NOT NULL,
  `persyaratan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_promo`
--

INSERT INTO `tb_promo` (`id`, `tanggal`, `kota`, `nama`, `alamat`, `type`, `fasilitas`, `harga`, `promo`, `persyaratan`) VALUES
(12, '2020-01-31', 'Cibubur', 'CitraGran Cibubur', 'Jl. Alternatif Cibubur KM. 4 Cibubur', 'Clarkia', '2 Kamar Tidur, 2 Kamar Mandi, 1 Carport', '1120000000', '920000000', 'Fotocopy KTP, Fotocopy KK'),
(13, '2020-01-31', 'Cibubur', 'CitraGran Cibubur', 'Jl. Alternatif Cibubur KM. 4 Cibubur', 'Calla', '3 Kamar Tidur, 2 Kamar Mandi, 1 Carport', '1280000000', '980000000', 'Fotocopy KTP, Fotocopy KK'),
(14, '2020-01-31', 'Cibubur', 'CitraGran Cibubur', 'Jl. Alternatif Cibubur KM. 4 Cibubur', 'Tritona', '3 Kamar Tidur, 2 Kamar Mandi, 2 Carport', '1400000000', '1200000000', 'Fotocopy KTP, Fotocopy KK'),
(15, '2019-11-30', 'Kota Batu', 'D\'Jagad Land Batu', 'Jalan Oro-Oro Ombo Kec. Batu, Kota Batu, Jawa Timur 65316', 'Type 87', '3 Kamar Tidur, 2 Kamar Mandi, Private Pool, Rooftop, View Pegunungan', '980000000', '799999999', 'Fotocopy KTP, Fotocopy KK'),
(16, '2019-11-30', 'Kota Batu', 'D\'Jagad Land Batu', 'Jalan Oro-Oro Ombo Kec. Batu, Kota Batu, Jawa Timur 65316', 'Type 67', '2 Kamar Tidur, 2 Kamar Mandi, Private Pool, Rooftop, View Pegunungan', '715000000', '600000000', 'Fotocopy KTP, Fotocopy KK'),
(17, '2019-11-30', 'Kota Batu', 'D\'Jagad Land Batu', 'Jalan Oro-Oro Ombo Kec. Batu, Kota Batu, Jawa Timur 65316', 'Type 62,5', '3 Kamar Tidur, 2 Kamar Mandi, Private Pool, Rooftop, View Pegunungan', '605000000', '500000000', 'Fotocopy KTP, Fotocopy KK'),
(18, '2019-11-30', 'Kota Batu', 'D\'Jagad Land Batu', 'Jalan Oro-Oro Ombo Kec. Batu, Kota Batu, Jawa Timur 65316', 'Type 50', '2 Kamar Tidur, 1 Kamar Mandi, Private Pool, Rooftop, View Pegunungan', '440000000', '300000000', 'Fotocopy KTP, Fotocopy KK'),
(19, '2019-12-31', 'Malang', 'Citra Garden City', 'Jalan CitraGarden City Boulevard, Kelurahan Buring, Kecamatan Kedungkandang, Malang', 'Cartenz', '3 Kamar Tidur, 3 Kamar Mandi, CCTV, Eco Park, Pool, Fitness Center', '1500000000', '1250000000', 'Fotocopy KTP, Fotocopy KK'),
(20, '2019-12-31', 'Malang', 'Citra Garden City', 'Jalan CitraGarden City Boulevard, Kelurahan Buring, Kecamatan Kedungkandang, Malang', 'Elbrus', '3+1 Kamar Tidur, 3+1 Kamar Mandi, CCTV, Eco Park, Pool, Fitness Center', '1550000000', '1300000000', 'Fotocopy KTP, Fotocopy KK'),
(21, '2019-12-31', 'Malang', 'Citra Garden City', 'Jalan CitraGarden City Boulevard, Kelurahan Buring, Kecamatan Kedungkandang, Malang', 'Elbrus Upslope', '3+1 Kamar Tidur, 3+1 Kamar Mandi, CCTV, Eco Park, Pool, Fitness Center', '1590000000', '1399999999', 'Fotocopy KTP, Fotocopy KK'),
(22, '2019-12-31', 'Malang', 'Citra Garden City', 'Jalan CitraGarden City Boulevard, Kelurahan Buring, Kecamatan Kedungkandang, Malang', 'Everest', '3+1 Kamar Tidur, 3+1 Kamar Mandi, CCTV, Eco Park, Pool, Fitness Center', '1640000000', '1499999999', 'Fotocopy KTP, Fotocopy KK'),
(23, '2019-12-31', 'Malang', 'Citra Garden City', 'Jalan CitraGarden City Boulevard, Kelurahan Buring, Kecamatan Kedungkandang, Malang', 'Everest Uplsope', '3+1 Kamar Tidur, 3+1 Kamar Mandi, CCTV, Eco Park, Pool, Fitness Center', '1690000000', '1599999999', 'Fotocopy KTP, Fotocopy KK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rumah`
--

CREATE TABLE `tb_rumah` (
  `id` int(11) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `nama` varchar(25) NOT NULL DEFAULT 'Belum Ditulis',
  `alamat` text NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Fasilitas` text NOT NULL,
  `Harga` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rumah`
--

INSERT INTO `tb_rumah` (`id`, `kota`, `nama`, `alamat`, `Type`, `Fasilitas`, `Harga`) VALUES
(20, 'Kota Batu', 'D\'Jagad Land Batu', 'Jalan Oro-Oro Ombo Kec. Batu, Kota Batu, Jawa Timur 65316', 'Type 50', '2 Kamar Tidur, 1 Kamar Mandi, Private Pool, Rooftop, View Pegunungan', 440000000),
(21, 'Kota Batu', 'D\'Jagad Land Batu', 'Jalan Oro-Oro Ombo Kec. Batu, Kota Batu, Jawa Timur 65316', 'Type 62.5 ', '3 Kamar Tidur, 2 Kamar Mandi, Private Pool, Rooftop, View Pegunungan', 605000000),
(22, 'Kota Batu', 'D\'Jagad Land Batu', 'Jalan Oro-Oro Ombo Kec. Batu, Kota Batu, Jawa Timur 65316', 'Type 67', '2 Kamar Tidur, 2 Kamar Mandi, Private Pool, Rooftop, View Pegunungan', 715000000),
(23, 'Kota Batu', 'D\'Jagad Land Batu', 'Jalan Oro-Oro Ombo Kec. Batu, Kota Batu, Jawa Timur 65316', 'Type 87', '3 Kamar Tidur, 2 Kamar Mandi, Private Pool, Rooftop, View Pegunungan', 980000000),
(24, 'Kota Batu', 'D\'Jagad Land Batu', 'Jalan Oro-Oro Ombo Kec. Batu, Kota Batu, Jawa Timur 65316', 'Type 87', '3 Kamar Tidur, 2 Kamar Mandi, Private Pool, Rooftop, View Pegunungan', 1010000000),
(25, 'Malang', 'Citra Garden City', 'Jalan CitraGarden City Boulevard, Kelurahan Buring, Kecamatan Kedungkandang, Malang', 'Cartensz', 'Kamar Tidur 3, Kamar Mandi 3, CCTV, Eco Park, Pool, Fitness Center', 1500000000),
(26, 'Malang', 'Citra Garden City', 'Jalan CitraGarden City Boulevard, Kelurahan Buring, Kecamatan Kedungkandang, Malang', 'Elbrus', '3+1 Kamar Tidur, 3+1 Kamar Mandi, CCTV, Eco Park, Pool, Fitness Center', 1550000000),
(27, 'Malang', 'Citra Garden City', 'Jalan CitraGarden City Boulevard, Kelurahan Buring, Kecamatan Kedungkandang, Malang', 'Elbrus Upslope', '3+1 Kamar Tidur, 3+1 Kamar Mandi, CCTV, Eco Park, Pool, Fitness Center', 1590000000),
(28, 'Malang', 'Citra Garden City', 'Jalan CitraGarden City Boulevard, Kelurahan Buring, Kecamatan Kedungkandang, Malang', 'Everest', '3+1 Kamar Tidur, 3+1 Kamar Mandi, CCTV, Eco Park, Pool, Fitness Center', 1640000000),
(29, 'Malang', 'Citra Garden City', 'Jalan CitraGarden City Boulevard, Kelurahan Buring, Kecamatan Kedungkandang, Malang', 'Everest Upslope', '3+1 Kamar Tidur, 3+1 Kamar Mandi, CCTV, Eco Park, Pool, Fitness Center', 1690000000),
(30, 'Tanggerang', 'Cluster Sutera Victoria', 'Jalan Alam Sutera, Kota Tangerang', 'Naia+', '4+1 Kamar Tidur, 3+1 Kamar Mandi, 2 Lantai, Water Heater, Kitchen Set, CCTV, Basketball Field, Swimming Pool', 2850000000),
(31, 'Tanggerang', 'Cluster Sutera Victoria', 'Jalan Alam Sutera, Kota Tangerang', 'Lotus+', '4+1 Kamar Tidur, 3+1 Kamar Mandi, 2 Lantai, Water Heater, Kitchen Set, CCTV, Basketball Field, Swimming Pool', 2700000000),
(32, 'Tanggerang', 'Cluster Sutera Victoria', 'Jalan Alam Sutera, Kota Tangerang', 'Nara', '4+1 Kamar Tidur, 3+1 Kamar Mandi, 2 Lantai, Water Heater, Kitchen Set, CCTV, Basketball Field, Swimming Pool', 2950000000),
(33, 'Tanggerang', 'Cluster Sutera Victoria', 'Jl. Sutera Victoria 7A no 7, Tanggerang', 'Lily+', '4+1 Kamar Tidur, 3+1 Kamar Mandi, 2 Lantai, Water Heater, Kitchen Set, CCTV, Basketball Field, Swimming Pool', 2600000000),
(34, 'Tanggerang', 'Cluster Sutera Victoria', 'Jl. Sutera Victoria 7A no 7, Tanggerang', 'Spruce', '4+1 Kamar Tidur, 3+1 Kamar Mandi, 2 Lantai, Water Heater, Kitchen Set, CCTV, Basketball Field, Swimming Pool', 2650000000),
(35, 'Tanggerang', 'Cluster Sutera Victoria', 'Jl. Sutera Utama, Alam Sutera, Tanggerang', 'Naia', '4+1 Kamar Tidur, 3+1 Kamar Mandi, AC, Kitchen Set, Water Heater, CCTV, Jogging Track, Bicycle Lane', 3800000000),
(36, 'Tanggerang', 'Cluster Sutera Victoria', 'Jl. Sutera Utama, Alam Sutera, Tanggerang', 'Nara', '4+1 Kamar Tidur, 3+1 Kamar Mandi, AC, Kitchen Set, Water Heater, CCTV, Jogging Track, Bicycle Lane', 4100000000),
(37, 'Jambi', 'Citra Bukit Raya', 'Jl. Raya Boulevard blok A.23 No.1 , Jambi, Indonesia', 'Cemara', '1 Kamar Tidur, 1 Kamar Mandi, Bicycle Track, Swimming Pool, Golf Course', 670000000),
(38, 'Jambi', 'Citra Bukit Raya', 'Jl. Raya Boulevard blok A.23 No.1 , Jambi, Indonesia', 'Pinus', '2 Kamar Tidur, 2 Kamar Mandi, Bicycle Track, Swimming Pool, Golf Course', 710000000),
(39, 'Jambi', 'Citra Bukit Raya', 'Jl. Raya Boulevard blok A.23 No.1 , Jambi, Indonesia', 'Tanjung', '2 Kamar Tidur, 2 Kamar Mandi, Bicycle Track, Swimming Pool, Golf Course', 710000000),
(40, 'Jambi', 'Citra Bukit Raya', 'Jl. Raya Boulevard blok A.23 No.1 , Jambi, Indonesia', 'Flamboyan', '2 Kamar Tidur, 2 Kamar Mandi, Bicycle Track, Swimming Pool, Golf Course', 760000000),
(41, 'Jambi', 'Citra Bukit Raya', 'Jl. Raya Boulevard blok A.23 No.1 , Jambi, Indonesia', 'Mahoni', '2 Kamar Tidur, 2 Kamar Mandi, Bicycle Track, Swimming Pool, Golf Course', 800000000),
(42, 'Jambi', 'Citra Garden City', 'Jl. Raya Boulevard blok A.23 No.1 , Jambi, Indonesia', 'Gandaria', '2 Kamar Tidur, 2 Kamar Mandi, Bicycle Track, Swimming Pool, Golf Course', 780000000),
(43, 'Jambi', 'Citra Bukit Raya', 'Jl. Raya Boulevard blok A.23 No.1 , Jambi, Indonesia', 'Delima', '2 Kamar Tidur, 2 Kamar Mandi, Bicycle Track, Swimming Pool, Golf Course', 800000000),
(44, 'Jambi', 'Citra Bukit Raya', 'Jl. Raya Boulevard blok A.23 No.1 , Jambi, Indonesia', 'Kenari', '1 Kamar Tidur, 1 Kamar Mandi, Bicycle Track, Swimming Pool, Golf Course', 685000000),
(45, 'Malang', 'Citra Garden City', 'Jalan CitraGarden City Boulevard, Kelurahan Buring, Kecamatan Kedungkandang, Malang', 'Jati', '2 Kamar Tidur, 2 Kamar Mandi, Bicycle Track, Swimming Pool, Golf Course', 695000000),
(47, 'Sidoarjo', 'Surya Harmoni', 'Jalan Sawo, Dusun Sawo, Desa Sukodono, Kecamatan Sukodono, Sidoarjo.', 'Type 38', '2 Kamar Tidur, 1 Kamar Mandi, Carport Rabat Beton', 458000000),
(48, 'Sidoarjo', 'Surya Harmoni', 'Jalan Sawo, Dusun Sawo, Desa Sukodono, Kecamatan Sukodono, Sidoarjo.', 'Type 48', '2 Kamar Tidur, 1 Kamar Mandi, Carport Rabat Beton', 500000000),
(49, 'Sidoarjo', 'Surya Harmoni', 'Jalan Sawo, Dusun Sawo, Desa Sukodono, Kecamatan Sukodono, Sidoarjo.', 'Type 54', '3 Kamar Tidur, 1 Kamar Mandi, Garasi Carport+Keramik  ', 573000000),
(50, 'Sidoarjo', 'Surya Harmoni', 'Jalan Sawo, Dusun Sawo, Desa Sukodono, Kecamatan Sukodono, Sidoarjo.', 'Type 65', '3 Kamar Tidur, 1 Kamar Mandi, Garasi Carport+Keramik', 597000000),
(51, 'Sidoarjo', 'Surya Harmoni', 'Jalan Sawo, Dusun Sawo, Desa Sukodono, Kecamatan Sukodono, Sidoarjo.', 'Type 82', '3 Kamar Tidur, 2 Kamar Mandi, Garasi Caport+Keramik', 779000000),
(52, 'Cibubur', 'CitraGran Cibubur', 'Jl. Alternatif Cibubur KM. 4 Cibubur', 'Clarkia', '2 Kamar Tidur, 2 Kamar Mandi, 1 Carport', 1120000000),
(53, 'Cibubur', 'CitraGran Cibubur', 'Jl. Alternatif Cibubur KM. 4 Cibubur', 'Calla', '3 Kamar Tidur, 2 Kamar Mandi, 1 Carport', 1280000000),
(54, 'Cibubur', 'CitraGran Cibubur', 'Jl. Alternatif Cibubur KM. 4 Cibubur', 'Iritona', '3 Kamar Tidur, 2 Kamar Mandi, 2 Carport', 1400000000),
(55, 'Jakarta', 'Cluster AeroMansion', 'Soho Blok D.02 No. 10-11, Aeroworld 8, CitraGarden City, Jakarta Barat', 'Cressida', '2 Kamar Tidur, 2 Kamar Mandi, Sport Club', 2200000000),
(56, 'Jakarta', 'Cluster AeroMansion', 'Soho Blok D.02 No. 10-11, Aeroworld 8, CitraGarden City, Jakarta Barat', 'Cardea', '2 Kamar Tidur, 2 Kamar Mandi, Sport Club', 2200000000),
(58, 'Banten', 'Citra Maja Raya', 'Jl. Citra Maja Raya Boulevard Blok C.02/ No.1 Sektor 1.1 Maja, Banten', 'Cedar', '2 Kamar Tidur, 1 Kamar Mandi, Sport Club', 372000000),
(59, 'Banten', 'Citra Maja Raya', 'Jl. Citra Maja Raya Boulevard Blok C.02/ No.1 Sektor 1.1 Maja, Banten', 'Hazel', '2 Kamar Tidur, 1 Kamar Mandi, Sport Club', 372000000),
(60, 'Banten', 'Citra Maja Raya', 'Jl. Citra Maja Raya Boulevard Blok C.02/ No.1 Sektor 1.1 Maja, Banten', 'Aspen', '2 Kamar Tidur, 1 Kamar Mandi, Sport Club', 372000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nomor_tlp` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `status`, `nomor_tlp`, `username`, `password`) VALUES
(1, 'Rusedie', 'PNS', '081352564987', 'rusedie', '1234'),
(4, 'Agan', 'Kontraktor', '085248754246', 'agan', '12345'),
(5, 'Kevin', 'Financial Analyst', '081355252376', 'kevin', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_cicil`
--
ALTER TABLE `tb_cicil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kota` (`kota`);

--
-- Indeks untuk tabel `tb_perumahan`
--
ALTER TABLE `tb_perumahan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kota` (`kota`);

--
-- Indeks untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kota` (`kota`);

--
-- Indeks untuk tabel `tb_promo`
--
ALTER TABLE `tb_promo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kota` (`kota`);

--
-- Indeks untuk tabel `tb_rumah`
--
ALTER TABLE `tb_rumah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kota` (`kota`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_cicil`
--
ALTER TABLE `tb_cicil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tb_perumahan`
--
ALTER TABLE `tb_perumahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_promo`
--
ALTER TABLE `tb_promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_rumah`
--
ALTER TABLE `tb_rumah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_cicil`
--
ALTER TABLE `tb_cicil`
  ADD CONSTRAINT `tb_cicil_ibfk_1` FOREIGN KEY (`kota`) REFERENCES `tb_perumahan` (`kota`);

--
-- Ketidakleluasaan untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD CONSTRAINT `tb_petugas_ibfk_1` FOREIGN KEY (`kota`) REFERENCES `tb_perumahan` (`kota`);

--
-- Ketidakleluasaan untuk tabel `tb_promo`
--
ALTER TABLE `tb_promo`
  ADD CONSTRAINT `tb_promo_ibfk_1` FOREIGN KEY (`kota`) REFERENCES `tb_perumahan` (`kota`);

--
-- Ketidakleluasaan untuk tabel `tb_rumah`
--
ALTER TABLE `tb_rumah`
  ADD CONSTRAINT `tb_rumah_ibfk_1` FOREIGN KEY (`kota`) REFERENCES `tb_perumahan` (`kota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
