-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 10:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muay03`
--

-- --------------------------------------------------------

--
-- Table structure for table `muay03`
--

CREATE TABLE `muay03` (
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `postalcode` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `firstname_1` varchar(255) DEFAULT NULL,
  `lastname_1` varchar(255) DEFAULT NULL,
  `address_1` text DEFAULT NULL,
  `district_1` varchar(255) DEFAULT NULL,
  `city_1` varchar(255) DEFAULT NULL,
  `province_1` varchar(255) DEFAULT NULL,
  `number_1` varchar(255) DEFAULT NULL,
  `postalcode_1` varchar(255) DEFAULT NULL,
  `date_1` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `muay03`
--

INSERT INTO `muay03` (`firstname`, `lastname`, `address`, `district`, `city`, `province`, `number`, `postalcode`, `date`, `firstname_1`, `lastname_1`, `address_1`, `district_1`, `city_1`, `province_1`, `number_1`, `postalcode_1`, `date_1`) VALUES
('หมวย', 'หมวย', '', 'เทศบาลตำบลอัมพวา', 'บางคนที', 'กาฬสินธุ์', '26545465', '154544', '2024-12-23', '', '', '', '', '', '', '', '', '0000-00-00'),
('หมวย', 'หมวย', '2165456', 'เทศบาลเมืองสมุทรสงคราม', 'อำเภอเมือง', 'กระบี่', '26545465', '154544', '2024-12-19', '', '', '', '', '', '', '', '', '0000-00-00'),
('หมวย', 'หมวย', '5456151', 'เทศบาลตำบลเหมืองใหม่', 'อัมพวา', 'กาญจนบุรี', '26545465', '215468', '2024-12-12', 'หมวย', 'หมวย', '', 'เทศบาลตำบลบางจะเกร็ง', 'บางคนที', 'ตาก', '564654', '5255', '0000-00-00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
