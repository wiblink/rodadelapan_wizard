-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 21, 2024 at 03:30 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiwizard`
--

-- --------------------------------------------------------

--
-- Table structure for table `costumer`
--

CREATE TABLE `costumer` (
  `idcustomer` int NOT NULL,
  `username` varchar(64) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `salutat` varchar(5) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `f_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `m_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `l_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `fullname` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `address` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `m_phone` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `flight_number` varchar(9) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `company` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `user_input` varchar(64) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `user_edit` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_input` date NOT NULL,
  `tgl_edit` date DEFAULT NULL,
  `id_wilayah` int NOT NULL DEFAULT '1',
  `reservation_trx` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `costumer`
--

INSERT INTO `costumer` (`idcustomer`, `username`, `salutat`, `f_name`, `m_name`, `l_name`, `fullname`, `email`, `address`, `m_phone`, `flight_number`, `company`, `user_input`, `user_edit`, `tgl_input`, `tgl_edit`, `id_wilayah`, `reservation_trx`) VALUES
(1, '3wqft735ex', '', 'tom', '', 'cruize', '', 'tes@sd.com', 'sawangan', '+363456464', 'GA-3453', '', NULL, NULL, '2023-12-02', NULL, 1, 'wpFFfvmFamF'),
(2, 'bimwm0joxm', '', 'tom', '', 'cruize', '', 'tes@sd.com', 'sawangan', '+363456464', 'GA-3453', '', NULL, NULL, '2023-12-02', NULL, 1, 'EGsdpFFruBp'),
(3, 'zcedt60bea', '', 'tom', '', 'cruize', '', 'tes@sd.com', 'sawangan', '+363456464', 'GA-3453', '', NULL, NULL, '2023-12-02', NULL, 1, 'CfwCDehCDEv'),
(4, 'z107heyr0i', '', 'tom', '', 'cruize', '', 'tes@sd.com', 'sawangan', '+363456464', 'GA-3453', '', NULL, NULL, '2023-12-02', NULL, 1, 'DpmhzFuttnv'),
(5, 'cmo1ut4xra', '', 'tom', '', 'cruize', '', 'tes@sd.com', 'sawangan', '+363456464', 'GA-3453', '', NULL, NULL, '2023-12-02', NULL, 1, 'sncErfhvumb'),
(6, '0x22vv0o6p', '', 'tom', '', 'cruize', '', 'tes@sd.com', 'sawangan', '+363456464', 'GA-3453', '', NULL, NULL, '2023-12-02', NULL, 1, 'mGitArjvmnA'),
(7, 'o1xp1j3nn6', '', 'tom', '', 'cruize', '', 'tes@sd.com', 'sawangan', '+363456464', 'GA-3453', '', NULL, NULL, '2023-12-02', NULL, 1, 'fgeoAjAzGhe'),
(8, 'w31hfbprmc', '', 'tom', '', 'cruize', '', 'tes@sd.com', 'sawangan', '+363456464', 'GA-3453', '', NULL, NULL, '2023-12-02', NULL, 1, 'jtFFmFFvxce'),
(9, 'vm6dgu434z', '', 'tom', '', 'cruize', '', 'tes@sd.com', 'sawangan', '+363456464', 'GA-3453', '', NULL, NULL, '2023-12-02', NULL, 1, 'tCqAeiGbfDc'),
(10, 'kppwq7dowe', '', 'tom', '', 'cruize', '', 'tes@sd.com', 'sawangan', '+363456464', 'GA-3453', '', NULL, NULL, '2023-12-02', NULL, 1, 'ojtspuwurFm'),
(11, 'va32o3coes', '', 'tom', '', 'cruize', '', 'wibi.wb@gmail.com', 'sawangan', '+363456464', 'GA-3453', '', NULL, NULL, '2023-12-04', NULL, 1, 'xkoAxqfDkpn'),
(12, 'hb4jwoz3x1', '', 'tom', '', 'cruize', '', 'wibi.wb@gmail.com', 'sawangan', '+363456464', 'GA-3453', '', NULL, NULL, '2023-12-04', NULL, 1, 'xkoAxqfDkpn'),
(13, 'wdj30ytk7k', '', 'tes', 'lagi', 'lokalhos', '', 'wibi.wb@gmail.com', 'sawangan', '+363456464', 'GA-3453', '', NULL, NULL, '2023-12-04', NULL, 1, 'wdxmzbbwHdG'),
(14, 'hy352gpcom', '', 'tom', '', 'cruize', '', 'wibi.wb@gmail.com', 'sawangan', '+363456464', 'GA-3453', '', NULL, NULL, '2023-12-05', NULL, 1, 'GnGDwAEAqfa'),
(15, 'hp31ko2tt6', '', 'tom', '', 'cruize', '', 'tes@sd.com', 'sawangan', '+363456464', 'GA-3453', '', NULL, NULL, '2023-12-19', NULL, 1, 'ErfzvhbdGDw'),
(16, 'n1jqngtvj2', 'Mrs', 'tom', '', 'cruize', '', 'tes@sd.com', 'sawangan', '+363456464', 'GA-3453', '', NULL, NULL, '2024-01-21', NULL, 1, 'qsGHBjgfGgu'),
(17, 'cqfzog671g', '', 'tom', '', 'cruize', '', 'tes@sd.com', 'sawangan', '+363456464', 'GA-3453', '', NULL, NULL, '2024-01-21', NULL, 1, 'kmbtmmzfcov'),
(18, '126m4e0dah', '', 'tom', '', 'cruize', '', 'tes@sd.com', 'sawangan', '+363456464', 'GA-3453', '', NULL, NULL, '2024-01-21', NULL, 1, 'mubBcvnDibx'),
(19, 's3u0nejzfy', '', 'tom', '', 'cruize', '', 'tes@sd.com', 'sawangan', '+363456464', 'GA-3453', '', NULL, NULL, '2024-01-21', NULL, 1, 'GsAvaFtysCF');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int NOT NULL,
  `reservation_trx` varchar(50) DEFAULT NULL,
  `enter_pickup` varchar(50) DEFAULT NULL,
  `retur` varchar(50) DEFAULT NULL,
  `enter_day` varchar(15) DEFAULT NULL,
  `return_day` varchar(15) DEFAULT NULL,
  `splitdatestart` varchar(15) DEFAULT NULL,
  `splitdateend` varchar(15) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `car_id` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `day` varchar(2) DEFAULT '0',
  `pricecar` varchar(20) DEFAULT '0',
  `reservation_row` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `reservation_number` varchar(40) DEFAULT NULL,
  `s_req` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_country` varchar(5) DEFAULT NULL,
  `datetime_pick` varchar(17) DEFAULT NULL,
  `datetime_return` varchar(17) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `reservation_trx`, `enter_pickup`, `retur`, `enter_day`, `return_day`, `splitdatestart`, `splitdateend`, `price`, `car_id`, `day`, `pricecar`, `reservation_row`, `reservation_number`, `s_req`, `id_country`, `datetime_pick`, `datetime_return`, `created`) VALUES
(1, 'wpFFfvmFamF', 'jakarta', 'semarang', '12:00', '12:00', '2023-12-02', '2023-12-08', '3750000', 'avanza', '0', NULL, 'RA-0000001', '1058-3549-ID-1', 'ok', 'ID', '2023-12-02 12:0', '2023-12-08 12:0', '2023-12-02 16:25:35'),
(2, 'EGsdpFFruBp', 'jakarta', 'semarang', '12:00', '12:00', '2023-12-02', '2023-12-13', '9075000', 'innova', '0', NULL, 'RA-0000002', '6934-5705-ID-2', '', 'ID', '2023-12-02 12:0', '2023-12-13 12:0', '2023-12-02 16:28:15'),
(3, 'CfwCDehCDEv', 'jakarta', 'semarang', '12:00', '12:00', '2023-12-02', '2023-12-08', '4950000', 'innova', '0', '825000', 'RA-0000003', '1225-1099-ID-3', '', 'ID', '2023-12-02 12:0', '2023-12-08 12:0', '2023-12-02 16:31:30'),
(4, 'DpmhzFuttnv', 'jakarta', 'semarang', '12:00', '12:00', '2023-12-02', '2023-12-08', '3750000', 'avanza', '0', '625000', 'RA-0000004', '5975-1386-ID-4', '', 'ID', '2023-12-02 12:0', '2023-12-08 12:0', '2023-12-02 16:32:10'),
(5, 'sncErfhvumb', 'jakarta', 'semarang', '12:00', '12:00', '2023-12-02', '2023-12-08', '4950000', 'innova', '6', '825000', 'RA-0000005', '7527-1757-ID-5', '', 'ID', '2023-12-02 12:0', '2023-12-08 12:0', '2023-12-02 16:37:28'),
(6, 'mGitArjvmnA', 'jakarta', 'semarang', '12:00', '12:00', '2023-12-02', '2023-12-09', '4375000', 'avanza', '7', '625000', 'RA-0000006', '9359-6666-ID-6', 'okkkk', 'ID', '2023-12-02 12:0', '2023-12-09 12:0', '2023-12-02 16:38:15'),
(7, 'fgeoAjAzGhe', 'jakarta', 'semarang', '12:00', '12:00', '2023-12-03', '2023-12-09', '4950000', 'innova', '6', '825000', 'RA-0000007', '7475-5601-ID-7', '', 'ID', '2023-12-03 12:0', '2023-12-09 12:0', '2023-12-02 17:05:40'),
(8, 'jtFFmFFvxce', 'jakarta', 'semarang', '12:00', '12:00', '2023-12-03', '2023-12-09', '3750000', 'avanza', '6', '625000', 'RA-0000008', '8421-1192-ID-8', '', 'ID', '2023-12-03 12:0', '2023-12-09 12:0', '2023-12-02 17:06:24'),
(9, 'tCqAeiGbfDc', 'jakarta', 'semarang', '12:00', '12:00', '2023-12-03', '2023-12-09', '4950000', 'innova', '6', '825000', 'RA-0000009', '1581-8181-ID-9', '', 'ID', '2023-12-03 12:0', '2023-12-09 12:0', '2023-12-02 17:15:28'),
(10, 'ojtspuwurFm', 'jakarta', 'semarang', '12:00', '12:00', '2023-12-03', '2023-12-09', '4950000', 'innova', '6', '825000', 'RA-0000010', '1118-1169-ID-10', '', 'ID', '2023-12-03 12:0', '2023-12-09 12:0', '2023-12-02 17:48:32'),
(11, 'xkoAxqfDkpn', 'jakarta', 'semarang', '12:00', '12:00', '2023-12-04', '2023-12-20', '13200000', 'innova', '16', '825000', 'RA-0000011', '1349-1669-ID-11', '', 'ID', '2023-12-04 12:0', '2023-12-20 12:0', '2023-12-04 03:58:18'),
(12, 'xkoAxqfDkpn', 'jakarta', 'semarang', '12:00', '12:00', '2023-12-04', '2023-12-20', '13200000', 'innova', '16', '825000', 'RA-0000012', '8356-1221-ID-12', '', 'ID', '2023-12-04 12:0', '2023-12-20 12:0', '2023-12-04 03:58:22'),
(13, 'wdxmzbbwHdG', 'jakarta', 'semarang', '12:00', '12:00', '2023-12-04', '2023-12-19', '12375000', 'innova', '15', '825000', 'RA-0000013', '5755-8421-ID-13', '', 'ID', '2023-12-04 12:0', '2023-12-19 12:0', '2023-12-04 04:00:01'),
(14, 'GnGDwAEAqfa', 'jakarta', 'semarang', '12:00', '12:00', '2023-12-05', '2023-12-13', '6600000', 'innova', '8', '825000', 'RA-0000014', '1006-1404-ID-14', '', 'ID', '2023-12-05 12:0', '2023-12-13 12:0', '2023-12-05 06:24:51'),
(15, 'ErfzvhbdGDw', 'DPS', 'DPS', '12:00', '12:00', '2023-12-19', '2023-12-19', '0', 'innova', '0', '825000', 'RA-0000015', '3215-2094-ID-15', '', 'ID', '2023-12-19 12:0', '2023-12-19 12:0', '2023-12-19 06:44:27'),
(16, 'vdiGaomvCwy', 'SUB', 'JOG', '07:00', '18:00', '2024-01-22', '2024-01-25', '3300000', 'innova', '4', '825000', 'RA-0000016', '1429-2652-ID-16', 'okeeee', 'ID', '2024-01-22 07:0', '2024-01-25 18:0', '2024-01-21 08:13:54'),
(17, 'vdiGaomvCwy', 'SUB', 'JOG', '07:00', '18:00', '2024-01-22', '2024-01-25', '3300000', 'innova', '4', '825000', 'RA-0000017', '9589-1611-ID-17', 'okeeee', 'ID', '2024-01-22 07:0', '2024-01-25 18:0', '2024-01-21 08:14:08'),
(18, 'qsGHBjgfGgu', 'DPS', 'JOG', '12:00', '19:30', '2024-01-23', '2024-01-25', '2475000', 'innova', '3', '825000', 'RA-0000018', '7408-8211-ID-18', '', 'ID', '2024-01-23 12:0', '2024-01-25 19:3', '2024-01-21 08:19:02'),
(19, 'kmbtmmzfcov', 'JK2', 'JOG', '12:00', '20:30', '2024-01-22', '2024-01-24', '1875000', 'avanza', '3', '625000', 'RA-0000019', '5181-2117-ID-19', '', 'ID', '2024-01-22 12:0', '2024-01-24 20:3', '2024-01-21 09:01:09'),
(20, 'mubBcvnDibx', 'CGK', 'DPS', '12:30', '22:30', '2024-01-22', '2024-01-24', '1875000', 'avanza', '3', '625000', 'RA-0000020', '1200-1338-ID-20', '', 'ID', '2024-01-22 12:30', '2024-01-24 22:30', '2024-01-21 09:11:13'),
(21, 'GsAvaFtysCF', 'SUB', 'DPS', '12:00', '23:30', '2024-01-22', '2024-01-24', '1875000', 'avanza', '3', '625000', 'RA-0000021', '2093-4105-ID-21', NULL, 'ID', '2024-01-22 12:00', '2024-01-24 23:30', '2024-01-21 09:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `photo`) VALUES
(1, 'ardianta', 'ardianta_pargo@yahoo.co.id', '$2y$10$HIEq2w.8Et9RsJmY4TMKye4aVCxOd9xJTOtG4vyOEmo.GIBxaPQHK', 'Ardianta Pargo', 'default.svg'),
(3, 'petanikode', 'info@petanikode.com', '$2y$10$uXa.Hz9rr8gkv4ztaqf6FO84iW64gXHbeyEOy1tIQ5wmqMjTk0yQa', 'Petani Kode', 'default.svg'),
(4, 'wiblink', 'wiblink@yahoo.com', '$2y$10$lymRKzygLGBcUYdjhZGkme7.h6zlKXYaqAEZlxrFzHcywEMXJNFZC', 'tes', 'default.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`idcustomer`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costumer`
--
ALTER TABLE `costumer`
  MODIFY `idcustomer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
