-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2019 at 10:34 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `type` enum('Admin','User') NOT NULL DEFAULT 'User',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `type`) VALUES
(1, 'mya', '$2y$10$aIbLRbByIp15cRtKyBC6peuukwT4SdxCBjoiuOdHjYPNUQfnoVg6G', '2019-04-26 21:48:50', 'Admin'),
(2, 'lee', '$2y$10$qVXR76vh0lMIjUjh28pM4.OzbxMyoIVvf3oRp/p5JjNcknktnDzOe', '2019-04-26 22:03:55', 'Admin'),
(3, 'jane', '$2y$10$u34vT/EMfgCbvVp6aW62U.XiaHvTmhpnQYq5XM24HfH44GoY0TCji', '2019-04-26 22:09:18', 'Admin'),
(4, 'john', '$2y$10$QVv24YQNGRdjidEVEci/EO31lWl2Ze1Jd92cqBTwoaIyrLjqgAfJ2', '2019-04-27 02:40:00', 'Admin'),
(5, 'jon', '$2y$10$Atw7U1S9eh9BrclRMrF8I.w4/RmcLC5cd/tmqwefWl4glo49Q43/G', '2019-04-27 02:40:22', 'User'),
(6, 'leelee', '$2y$10$8Ml559cCFfaVrme65Ll2Zez64fiiG/DtOCHFcjILsm4Bx2lwSR4BC', '2019-04-27 02:48:01', 'User');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
