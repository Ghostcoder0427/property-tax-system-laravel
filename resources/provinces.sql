-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2024 at 06:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `8_rja_express`
--

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_id` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `code`, `name`, `region_id`, `province_id`) VALUES
(1, '012800000', 'Ilocos Norte', '01', '0128'),
(2, '012900000', 'Ilocos Sur', '01', '0129'),
(3, '013300000', 'La Union', '01', '0133'),
(4, '015500000', 'Pangasinan', '01', '0155'),
(5, '020900000', 'Batanes', '02', '0209'),
(6, '021500000', 'Cagayan', '02', '0215'),
(7, '023100000', 'Isabela', '02', '0231'),
(8, '025000000', 'Nueva Vizcaya', '02', '0250'),
(9, '025700000', 'Quirino', '02', '0257'),
(10, '030800000', 'Bataan', '03', '0308'),
(11, '031400000', 'Bulacan', '03', '0314'),
(12, '034900000', 'Nueva Ecija', '03', '0349'),
(13, '035400000', 'Pampanga', '03', '0354'),
(14, '036900000', 'Tarlac', '03', '0369'),
(15, '037100000', 'Zambales', '03', '0371'),
(16, '037700000', 'Aurora', '03', '0377'),
(17, '041000000', 'Batangas', '04', '0410'),
(18, '042100000', 'Cavite', '04', '0421'),
(19, '043400000', 'Laguna', '04', '0434'),
(20, '045600000', 'Quezon', '04', '0456'),
(21, '045800000', 'Rizal', '04', '0458'),
(22, '174000000', 'Marinduque', '17', '1740'),
(23, '175100000', 'Occidental Mindoro', '17', '1751'),
(24, '175200000', 'Oriental Mindoro', '17', '1752'),
(25, '175300000', 'Palawan', '17', '1753'),
(26, '175900000', 'Romblon', '17', '1759'),
(27, '050500000', 'Albay', '05', '0505'),
(28, '051600000', 'Camarines Norte', '05', '0516'),
(29, '051700000', 'Camarines Sur', '05', '0517'),
(30, '052000000', 'Catanduanes', '05', '0520'),
(31, '054100000', 'Masbate', '05', '0541'),
(32, '056200000', 'Sorsogon', '05', '0562'),
(33, '060400000', 'Aklan', '06', '0604'),
(34, '060600000', 'Antique', '06', '0606'),
(35, '061900000', 'Capiz', '06', '0619'),
(36, '063000000', 'Iloilo', '06', '0630'),
(37, '064500000', 'Negros Occidental', '06', '0645'),
(38, '067900000', 'Guimaras', '06', '0679'),
(39, '071200000', 'Bohol', '07', '0712'),
(40, '072200000', 'Cebu', '07', '0722'),
(41, '074600000', 'Negros Oriental', '07', '0746'),
(42, '076100000', 'Siquijor', '07', '0761'),
(43, '082600000', 'Eastern Samar', '08', '0826'),
(44, '083700000', 'Leyte', '08', '0837'),
(45, '084800000', 'Northern Samar', '08', '0848'),
(46, '086000000', 'Samar', '08', '0860'),
(47, '086400000', 'Southern Leyte', '08', '0864'),
(48, '087800000', 'Biliran', '08', '0878'),
(49, '097200000', 'Zamboanga del Norte', '09', '0972'),
(50, '097300000', 'Zamboanga del Sur', '09', '0973'),
(51, '098300000', 'Zamboanga Sibugay', '09', '0983'),
(52, '099700000', 'City of Isabela (Not a Province)', '09', '0997'),
(53, '101300000', 'Bukidnon', '10', '1013'),
(54, '101800000', 'Camiguin', '10', '1018'),
(55, '103500000', 'Lanao del Norte', '10', '1035'),
(56, '104200000', 'Misamis Occidental', '10', '1042'),
(57, '104300000', 'Misamis Oriental', '10', '1043'),
(58, '112300000', 'Davao del Norte', '11', '1123'),
(59, '112400000', 'Davao del Sur', '11', '1124'),
(60, '112500000', 'Davao Oriental', '11', '1125'),
(61, '118200000', 'Davao de Oro', '11', '1182'),
(62, '118600000', 'Davao Occidental', '11', '1186'),
(63, '124700000', 'Cotabato', '12', '1247'),
(64, '126300000', 'South Cotabato', '12', '1263'),
(65, '126500000', 'Sultan Kudarat', '12', '1265'),
(66, '128000000', 'Sarangani', '12', '1280'),
(67, '129800000', 'City of Cotabato (Not a Province)', '12', '1298'),
(68, '133900000', 'NCR, City of Manila, First District (Not a Province)', '13', '1339'),
(69, '137400000', 'NCR, Second District (Not a Province)', '13', '1374'),
(70, '137500000', 'NCR, Third District (Not a Province)', '13', '1375'),
(71, '137600000', 'NCR, Fourth District (Not a Province)', '13', '1376'),
(72, '140100000', 'Abra', '14', '1401'),
(73, '141100000', 'Benguet', '14', '1411'),
(74, '142700000', 'Ifugao', '14', '1427'),
(75, '143200000', 'Kalinga', '14', '1432'),
(76, '144400000', 'Mountain Province', '14', '1444'),
(77, '148100000', 'Apayao', '14', '1481'),
(78, '150700000', 'Basilan', '15', '1507'),
(79, '153600000', 'Lanao del Sur', '15', '1536'),
(80, '153800000', 'Maguindanao', '15', '1538'),
(81, '156600000', 'Sulu', '15', '1566'),
(82, '157000000', 'Tawi-Tawi', '15', '1570'),
(83, '160200000', 'Agusan del Norte', '16', '1602'),
(84, '160300000', 'Agusan del Sur', '16', '1603'),
(85, '166700000', 'Surigao del Norte', '16', '1667'),
(86, '166800000', 'Surigao del Sur', '16', '1668'),
(87, '168500000', 'Dinagat Islands', '16', '1685');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `provinces_code_unique` (`code`),
  ADD KEY `provinces_region_id_index` (`region_id`),
  ADD KEY `provinces_province_id_index` (`province_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
