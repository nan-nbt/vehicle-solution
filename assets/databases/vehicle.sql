-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Feb 2024 pada 03.43
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternative`
--

CREATE TABLE `alternative` (
  `aid` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alternative`
--

INSERT INTO `alternative` (`aid`, `name`, `description`, `url`) VALUES
('A1', 'Daihatsu Sigra', 'Mobil', 'https://daihatsu.co.id?sigra'),
('A10', 'Daihatsu Xenia', 'Mobil', 'https://daihatsu.co.id?xenia'),
('A11', 'Honda Mobilio', 'Mobil', 'https://www.astra-honda.com?mobilio'),
('A12', 'Mitsubishi Expander', 'Mobil', 'https://www.mitsubishi-motors.co.id?expander'),
('A13', 'Toyota Inova', 'Mobil', 'https://www.toyota.astra.co.id/home?inova'),
('A14', 'Honda City', 'Mobil', 'https://www.astra-honda.com?city'),
('A15', 'Honda HRV', 'Mobil', 'https://www.astra-honda.com?hrv'),
('A16', 'Hyundai Stargezer', 'Mobil', 'https://www.hyundai.com/id/id?stargezer'),
('A17', 'Honda Scoopy', 'Motor', 'https://www.astra-honda.com?scoopy'),
('A18', 'Honda Vario', 'Motor', 'https://www.astra-honda.com?vario'),
('A19', 'Honda PCX', 'Motor', 'https://www.astra-honda.com?pcx'),
('A2', 'Daihatsu Ayla', 'Mobil', 'https://daihatsu.co.id?ayla'),
('A20', 'Honda CBR 150R', 'Motor', 'https://www.astra-honda.com?cbr-150'),
('A21', 'Yamah Aerox 155', 'Motor', 'https://www.yamaha-motor.co.id?aerox'),
('A22', 'Yamaha N-Max', 'Motor', 'https://www.yamaha-motor.co.id?nmax'),
('A23', 'Yamaha R15', 'Motor', 'https://www.yamaha-motor.co.id?r-15'),
('A24', 'Vespa LX', 'Motor', 'https://www.vespa.com/id_ID?lx'),
('A25', 'Vespa Primavella', 'Motor', 'https://www.vespa.com/id_ID?primavella'),
('A3', 'Toyota Agya', 'Mobil', 'https://www.toyota.astra.co.id/home?agya'),
('A4', 'Suzuki Karimun', 'Mobil', 'https://www.suzuki.co.id?karimun'),
('A5', 'Honda Brio', 'Mobil', 'https://www.astra-honda.com?brio'),
('A6', 'Toyota Avanza', 'Mobil', 'https://www.toyota.astra.co.id/home?avanza'),
('A7', 'Toyota Rush', 'Mobil', 'https://www.toyota.astra.co.id/home?rush'),
('A8', 'Suzuki XL 7', 'Mobil', 'https://www.suzuki.co.id?xl-7'),
('A9', 'Hyunday Creta', 'Mobil', 'https://www.hyundai.com/id/id?creta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `criteria`
--

CREATE TABLE `criteria` (
  `cid` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `impact` varchar(10) NOT NULL,
  `weight` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `criteria`
--

INSERT INTO `criteria` (`cid`, `name`, `description`, `impact`, `weight`) VALUES
('C1', 'Harga', 'Price', 'Cost', 20),
('C10', 'Side Stand Awitch', 'Fitur standart motor', 'Benefit', 5),
('C2', 'Fitur Airbags', 'Keamanan', 'Benefit', 5),
('C3', 'Sensor Parkir', 'Keamanan', 'Benefit', 10),
('C4', 'Bahan Bakar', 'Bensin', 'Benefit', 20),
('C5', 'Kapasitas Mesin', 'cc', 'Benefit', 10),
('C6', 'Kapasitas Penumpang ', 'Jumlah Baris', 'Benefit', 10),
('C7', 'Keyless', 'Fitur Kunci', 'Benefit', 5),
('C8', 'Socket Charger', 'Fitur', 'Benefit', 5),
('C9', 'Transmisi', 'Fitur', 'Benefit', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapping`
--

CREATE TABLE `mapping` (
  `mid` varchar(10) NOT NULL,
  `aid` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `weight` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mapping`
--

INSERT INTO `mapping` (`mid`, `aid`, `cid`, `weight`) VALUES
('M1', 'A1', 'C1', 3),
('M10', 'A1', 'C9', 4),
('M100', 'A10', 'C9', 5),
('M101', 'A10', 'C10', 4),
('M102', 'A11', 'C1', 4),
('M103', 'A11', 'C2', 3),
('M104', 'A11', 'C3', 4),
('M105', 'A11', 'C4', 3),
('M106', 'A11', 'C5', 3),
('M107', 'A11', 'C6', 5),
('M108', 'A11', 'C7', 5),
('M109', 'A11', 'C8', 5),
('M11', 'A1', 'C10', 4),
('M110', 'A11', 'C9', 5),
('M111', 'A11', 'C10', 4),
('M112', 'A12', 'C1', 4),
('M113', 'A12', 'C2', 4),
('M114', 'A12', 'C3', 4),
('M115', 'A12', 'C4', 3),
('M116', 'A12', 'C5', 3),
('M117', 'A12', 'C6', 5),
('M118', 'A12', 'C7', 5),
('M119', 'A12', 'C8', 5),
('M12', 'A2', 'C1', 3),
('M120', 'A12', 'C9', 5),
('M121', 'A12', 'C10', 4),
('M122', 'A13', 'C1', 5),
('M123', 'A13', 'C2', 5),
('M124', 'A13', 'C3', 5),
('M125', 'A13', 'C4', 4),
('M126', 'A13', 'C5', 5),
('M127', 'A13', 'C6', 5),
('M128', 'A13', 'C7', 5),
('M129', 'A13', 'C8', 5),
('M13', 'A2', 'C2', 1),
('M130', 'A13', 'C9', 5),
('M131', 'A13', 'C10', 4),
('M132', 'A14', 'C1', 5),
('M133', 'A14', 'C2', 5),
('M134', 'A14', 'C3', 5),
('M135', 'A14', 'C4', 4),
('M136', 'A14', 'C5', 3),
('M137', 'A14', 'C6', 4),
('M138', 'A14', 'C7', 5),
('M139', 'A14', 'C8', 5),
('M14', 'A2', 'C3', 4),
('M140', 'A14', 'C9', 5),
('M141', 'A14', 'C10', 4),
('M142', 'A15', 'C1', 5),
('M143', 'A15', 'C2', 5),
('M144', 'A15', 'C3', 5),
('M145', 'A15', 'C4', 4),
('M146', 'A15', 'C5', 3),
('M147', 'A15', 'C6', 4),
('M148', 'A15', 'C7', 5),
('M149', 'A15', 'C10', 5),
('M15', 'A2', 'C4', 3),
('M150', 'A15', 'C8', 5),
('M151', 'A15', 'C9', 5),
('M152', 'A16', 'C1', 5),
('M153', 'A16', 'C2', 3),
('M154', 'A16', 'C3', 5),
('M155', 'A16', 'C4', 4),
('M156', 'A16', 'C5', 3),
('M157', 'A16', 'C6', 5),
('M158', 'A16', 'C7', 5),
('M159', 'A16', 'C8', 5),
('M16', 'A2', 'C5', 3),
('M160', 'A16', 'C9', 5),
('M161', 'A16', 'C10', 4),
('M162', 'A17', 'C1', 3),
('M163', 'A17', 'C2', 1),
('M164', 'A17', 'C3', 3),
('M165', 'A17', 'C4', 3),
('M166', 'A17', 'C5', 3),
('M167', 'A17', 'C6', 3),
('M168', 'A17', 'C7', 5),
('M169', 'A17', 'C8', 5),
('M17', 'A2', 'C6', 4),
('M170', 'A17', 'C9', 4),
('M171', 'A17', 'C10', 5),
('M172', 'A18', 'C1', 3),
('M173', 'A18', 'C2', 1),
('M174', 'A18', 'C3', 3),
('M175', 'A18', 'C4', 3),
('M176', 'A18', 'C5', 3),
('M177', 'A18', 'C6', 3),
('M178', 'A18', 'C7', 5),
('M179', 'A18', 'C8', 5),
('M18', 'A2', 'C7', 5),
('M180', 'A18', 'C9', 4),
('M181', 'A18', 'C10', 5),
('M182', 'A19', 'C1', 3),
('M183', 'A19', 'C2', 1),
('M184', 'A19', 'C3', 3),
('M185', 'A19', 'C4', 4),
('M186', 'A19', 'C5', 3),
('M187', 'A19', 'C6', 3),
('M188', 'A19', 'C7', 5),
('M189', 'A19', 'C8', 5),
('M19', 'A2', 'C8', 5),
('M190', 'A19', 'C9', 4),
('M191', 'A19', 'C10', 5),
('M192', 'A20', 'C1', 3),
('M193', 'A20', 'C2', 1),
('M194', 'A20', 'C3', 3),
('M195', 'A20', 'C4', 4),
('M196', 'A20', 'C5', 3),
('M197', 'A20', 'C6', 3),
('M198', 'A20', 'C7', 5),
('M199', 'A20', 'C8', 4),
('M2', 'A1', 'C2', 3),
('M20', 'A2', 'C9', 4),
('M200', 'A20', 'C9', 5),
('M201', 'A20', 'C10', 5),
('M202', 'A21', 'C1', 3),
('M203', 'A21', 'C2', 1),
('M204', 'A21', 'C3', 3),
('M205', 'A21', 'C4', 3),
('M206', 'A21', 'C5', 3),
('M207', 'A21', 'C6', 3),
('M208', 'A21', 'C7', 5),
('M209', 'A21', 'C8', 5),
('M21', 'A2', 'C10', 4),
('M210', 'A21', 'C9', 4),
('M211', 'A21', 'C10', 5),
('M212', 'A22', 'C1', 3),
('M213', 'A22', 'C2', 1),
('M214', 'A22', 'C3', 3),
('M215', 'A22', 'C4', 4),
('M216', 'A22', 'C5', 3),
('M217', 'A22', 'C6', 3),
('M218', 'A22', 'C7', 5),
('M219', 'A22', 'C8', 5),
('M22', 'A3', 'C1', 3),
('M220', 'A22', 'C9', 4),
('M221', 'A22', 'C10', 5),
('M222', 'A24', 'C1', 3),
('M223', 'A24', 'C2', 1),
('M224', 'A24', 'C3', 3),
('M225', 'A24', 'C4', 4),
('M226', 'A24', 'C5', 3),
('M227', 'A24', 'C6', 3),
('M228', 'A24', 'C7', 5),
('M229', 'A24', 'C8', 5),
('M23', 'A3', 'C2', 1),
('M230', 'A24', 'C9', 4),
('M231', 'A24', 'C10', 5),
('M232', 'A25', 'C1', 3),
('M233', 'A25', 'C2', 1),
('M234', 'A25', 'C3', 3),
('M235', 'A25', 'C4', 4),
('M236', 'A25', 'C5', 3),
('M237', 'A25', 'C6', 3),
('M238', 'A25', 'C7', 5),
('M239', 'A25', 'C8', 5),
('M24', 'A3', 'C3', 4),
('M240', 'A25', 'C9', 4),
('M241', 'A25', 'C10', 5),
('M242', 'A23', 'C1', 3),
('M243', 'A23', 'C2', 1),
('M244', 'A23', 'C3', 3),
('M245', 'A23', 'C4', 4),
('M246', 'A23', 'C5', 3),
('M247', 'A23', 'C6', 3),
('M248', 'A23', 'C7', 5),
('M249', 'A23', 'C8', 4),
('M25', 'A3', 'C4', 3),
('M250', 'A23', 'C9', 5),
('M251', 'A23', 'C10', 5),
('M26', 'A3', 'C5', 3),
('M27', 'A3', 'C6', 4),
('M28', 'A3', 'C7', 5),
('M29', 'A3', 'C8', 5),
('M3', 'A1', 'C3', 4),
('M30', 'A3', 'C9', 4),
('M31', 'A3', 'C10', 4),
('M32', 'A4', 'C1', 3),
('M33', 'A4', 'C2', 3),
('M34', 'A4', 'C3', 4),
('M35', 'A4', 'C4', 3),
('M36', 'A4', 'C5', 3),
('M37', 'A4', 'C6', 4),
('M38', 'A4', 'C7', 5),
('M39', 'A4', 'C8', 5),
('M4', 'A1', 'C4', 3),
('M40', 'A4', 'C9', 4),
('M41', 'A4', 'C10', 4),
('M42', 'A5', 'C1', 4),
('M43', 'A5', 'C2', 5),
('M44', 'A5', 'C3', 4),
('M45', 'A5', 'C4', 3),
('M46', 'A5', 'C5', 3),
('M47', 'A5', 'C6', 4),
('M48', 'A5', 'C7', 5),
('M49', 'A5', 'C8', 5),
('M5', 'A1', 'C5', 3),
('M50', 'A5', 'C9', 4),
('M51', 'A5', 'C10', 4),
('M52', 'A6', 'C1', 4),
('M53', 'A6', 'C2', 3),
('M54', 'A6', 'C3', 4),
('M55', 'A6', 'C4', 3),
('M56', 'A6', 'C5', 3),
('M57', 'A6', 'C6', 5),
('M58', 'A6', 'C7', 5),
('M59', 'A6', 'C8', 5),
('M60', 'A6', 'C9', 4),
('M61', 'A6', 'C10', 4),
('M62', 'A7', 'C1', 4),
('M63', 'A7', 'C2', 4),
('M64', 'A7', 'C3', 4),
('M65', 'A7', 'C4', 3),
('M66', 'A7', 'C5', 3),
('M67', 'A7', 'C6', 5),
('M68', 'A7', 'C7', 5),
('M69', 'A7', 'C8', 5),
('M7', 'A1', 'C6', 5),
('M70', 'A7', 'C9', 5),
('M71', 'A7', 'C10', 4),
('M72', 'A8', 'C1', 4),
('M73', 'A8', 'C2', 3),
('M74', 'A8', 'C3', 4),
('M75', 'A8', 'C4', 3),
('M76', 'A8', 'C5', 3),
('M77', 'A8', 'C6', 5),
('M78', 'A8', 'C7', 5),
('M79', 'A8', 'C8', 5),
('M8', 'A1', 'C7', 5),
('M80', 'A8', 'C9', 5),
('M81', 'A8', 'C10', 4),
('M82', 'A9', 'C1', 4),
('M83', 'A9', 'C2', 5),
('M84', 'A9', 'C3', 4),
('M85', 'A9', 'C4', 3),
('M86', 'A9', 'C5', 3),
('M87', 'A9', 'C6', 3),
('M88', 'A9', 'C7', 5),
('M89', 'A9', 'C8', 5),
('M9', 'A1', 'C8', 5),
('M90', 'A9', 'C9', 5),
('M91', 'A9', 'C10', 4),
('M92', 'A10', 'C1', 4),
('M93', 'A10', 'C2', 3),
('M94', 'A10', 'C3', 4),
('M95', 'A10', 'C4', 3),
('M96', 'A10', 'C5', 3),
('M97', 'A10', 'C6', 5),
('M98', 'A10', 'C7', 5),
('M99', 'A10', 'C8', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `uid` int(30) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`uid`, `fullname`, `email`, `password`, `level`) VALUES
(8, 'Administrator', 'administrator@vehiclesolution.com', 'admin123', 1),
(9, 'user', 'user@vehiclesolution.com', 'user123', 2),
(13, 'Rangga', 'rangga@gmail.com', '12345', 2),
(14, 'Titania', 'titaniakharista@gmail.com', 'titania123', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `weight`
--

CREATE TABLE `weight` (
  `wid` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `value` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `weight`
--

INSERT INTO `weight` (`wid`, `description`, `value`) VALUES
('W1', 'Buruk', 1),
('W2', 'Sedang', 2),
('W3', 'Cukup', 3),
('W4', 'Baik', 4),
('W5', 'Sangat Baik', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternative`
--
ALTER TABLE `alternative`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `criteria`
--
ALTER TABLE `criteria`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `mapping`
--
ALTER TABLE `mapping`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `aid` (`aid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `weight`
--
ALTER TABLE `weight`
  ADD PRIMARY KEY (`wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
