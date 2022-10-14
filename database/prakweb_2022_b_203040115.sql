-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 02:06 PM
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
  `id` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tahun` date NOT NULL,
  `penerbit` varchar(25) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `tahun`, `penerbit`, `penulis`, `gambar`, `harga`) VALUES
(1, 'Dikta &amp; Hukum c', '0000-00-00', 'ASOKA AKSARA X LOVEABLE', 'DHIA`AN FARAH', 'dikta_dan_hukum.png', 95000),
(2, 'Laut Bercerita', '0000-00-00', 'Gramedia Pustaka Utama', 'Leila S. Chudori', 'Laut_Bercerita.png', 0),
(3, 'Pelukis di Atas Awan \r\n(An Artist of the Floating Wold)', '0000-00-00', 'Gramedia Pustaka Utama', 'Kazuo Ishiguro', 'PelukisDiAtasAwan.png', 0),
(4, 'Pulang', '0000-00-00', 'Sabak Grip Nusantara', 'Tere Liye', 'Pulang.png', 0),
(5, 'Sebuah Seni untuk Bersikap Bodo Amat', '0000-00-00', 'Gramedia Widiasarana Indo', 'Mark Manson', 'Sebuah_seni.png', 0),
(6, 'Suaramu Jalan Pulang yang Kukenali', '0000-00-00', 'Gramedia Pustaka Utama', 'Adimas Immanuel', 'SuaramuJalanYangKuKenali.png', 0),
(7, 'You Do You: Discovering Life through \r\nExperiments & Self Awareness Fellexandro Ruby', '0000-00-00', 'Gramedia Pustaka Utama', 'Fellexandro Ruby', 'You_do_you.png', 0),
(8, 'Heartbreak Motel', '0000-00-00', 'Gramedia Pustaka Utama', 'Ika Natassa', 'heartbreak_motel.png', 0),
(9, 'Filosofi Teras Edisi Baru-Filsafat \r\nYunani-Romawi Kuno', '0000-00-00', 'Penerbit Buku Kompas', 'Henry Manampiring', 'filosofi_teras.png', 0),
(10, 'Kado Terbaik', '0000-00-00', 'Gramedia Widiasarana Indo', 'J.S. Khairen', 'KadoTerbaik.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
