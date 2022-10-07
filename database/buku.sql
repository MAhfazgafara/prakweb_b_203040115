-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 05:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_2022_b_203040115`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `judul_buku` varchar(50) DEFAULT NULL,
  `tahun_terbit` varchar(50) NOT NULL,
  `penerbit_buku` varchar(25) NOT NULL,
  `penulis_buku` varchar(50) DEFAULT NULL,
  `gambar_buku` varchar(50) NOT NULL,
  `harga_buku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`judul_buku`, `tahun_terbit`, `penerbit_buku`, `penulis_buku`, `gambar_buku`, `harga_buku`) VALUES
('Dikta & Hukum', '31 Mei 2021', 'ASOKA AKSARA X LOVEABLE', 'DHIA`AN FARAH', 'dikta_dan_hukum.png', 'Rp 95.000'),
('Laut Bercerita', '3 Agustus 2022', 'Gramedia Pustaka Utama', 'Leila S. Chudori', 'Laut_Bercerita.png', 'Rp 190.000'),
('Pelukis di Atas Awan (An Artist of the Floating Wo', '27 September 2022', 'Gramedia Pustaka Utama', 'Kazuo Ishiguro', 'PelukisDiAtasAwan.png', 'Rp 92.000'),
('Pulang', '1 Januari 2021', 'Sabak Grip Nusantara', 'Tere Liye', 'Pulang.png', 'Rp 89.000'),
('Sebuah Seni untuk Bersikap Bodo Amat', '9 Maret 2022', 'Gramedia Widiasarana Indo', 'Mark Manson', 'Sebuah_seni.png', 'Rp 118.000'),
('Suaramu Jalan Pulang yang Kukenali', '20 Januari 2020', 'Gramedia Pustaka Utama', 'Adimas Immanuel', 'SuaramuJalanYangKuKenali.png', 'Rp 92.000'),
('You Do You: Discovering Life through Experiments &', '23 Desember 2020', 'Gramedia Pustaka Utama', 'Fellexandro Ruby', 'You_do_you.png', 'Rp 128.000'),
('Heartbreak Motel', '8 April 2022', 'Gramedia Pustaka Utama', 'Ika Natassa', 'heartbreak_motel.png', 'Rp 99.000'),
('Filosofi Teras Edisi Baru-Filsafat Yunani-Romawi K', '5 Januari 2022', 'Penerbit Buku Kompas', 'Henry Manampiring', 'filosofi_teras.png', 'Rp 98.000'),
('Kado Terbaik', '8 Apr 2022', 'Gramedia Widiasarana Indo', 'J.S. Khairen', 'KadoTerbaik.png', 'Rp 89.000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
