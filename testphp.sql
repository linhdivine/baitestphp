-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 11:35 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `usser`
--

CREATE TABLE `usser` (
  `id` tinyint(10) NOT NULL,
  `ma_nv` varchar(25) NOT NULL,
  `ho_ten` text NOT NULL,
  `ngay_sinh` varchar(50) NOT NULL,
  `url_anh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usser`
--

INSERT INTO `usser` (`id`, `ma_nv`, `ho_ten`, `ngay_sinh`, `url_anh`) VALUES
(1, 'ma005', 'hoàng văn a', '15-09-1997', 'nv05.jpg'),
(2, 'ma001', 'nguyễn văn a', '15-09-1984', 'nv01.jpg'),
(3, 'ma002', 'phan văn a', '15-09-1986', 'nv02.jpg'),
(4, 'ma003', 'hồ văn a', '15-09-1990', 'nv03.jpg'),
(5, 'ma004', 'lê văn a', '15-09-1994', 'nv04.jpg'),
(6, 'ma005', 'hoàng văn a', '15-09-1997', 'nv05.jpg'),
(7, 'ma001', 'nguyễn văn a', '15-09-1984', 'nv01.jpg'),
(8, 'ma002', 'phan văn a', '15-09-1986', 'nv02.jpg'),
(9, 'ma003', 'hồ văn a', '15-09-1990', 'nv03.jpg'),
(10, 'ma004', 'lê văn a', '15-09-1994', 'nv04.jpg'),
(11, 'ma005', 'hoàng văn a', '15-09-1997', 'nv05.jpg'),
(12, 'ma006', 'tiêu viêm', '2019-01-16', '21034571_1953595718262531_7012063424736887742_n.jpg'),
(20, 'ma009', 'phan anh tuấn', '2019-01-16', '21034571_1953595718262531_7012063424736887742_n.jpg'),
(21, 'ma010', 'đỗ trung thành', '2019-01-30', 'anonymous_user.png'),
(22, 'ma011', 'nguyễn công minh', '2019-01-16', 'nv03.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usser`
--
ALTER TABLE `usser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usser`
--
ALTER TABLE `usser`
  MODIFY `id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
