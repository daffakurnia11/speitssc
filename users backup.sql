-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2021 at 11:12 PM
-- Server version: 10.3.31-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `speitssc_2021`
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profile_id`, `name`, `username`, `password`, `email`, `role`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Daffa Kurnia Fatah', 'daffakurnia11', '$2y$10$bgbeGAVYlP7ntcsjsNQ11u0c5Sbjk8K6ZCPcwaEzSF6g6qlzckV1K', NULL, 'Dev', NULL, '2021-08-29 23:40:00', '2021-08-29 23:40:00'),
(3, NULL, 'Nauval Nurahmad', 'nauvaln', '$2y$10$1VJEIvfxnoRu15pdZjJRteb7d5S4YIpcAueQd051.WznVmIeCeFwi', NULL, 'Admin', NULL, '2021-08-29 23:46:25', '2021-08-29 23:46:25'),
(4, NULL, 'George Billy Nanlohy', 'georgeb', '$2y$10$S51ynL2iyoCufpOccW2uh.D0vSrEExs61DYcVJpuP7pKBDLh.45Aq', NULL, 'Admin', NULL, '2021-08-29 23:51:03', '2021-08-29 23:51:03'),
(5, NULL, 'Dafa Bayu Putranto', 'Putranto', '$2y$10$0GIGMng6AMutLP./r6iVP.1GZIHDFQkGSNXgJlaoI20mHwtp0Erra', NULL, 'Dev', NULL, '2021-08-29 23:58:02', '2021-08-29 23:58:02'),
(6, NULL, 'Sesilia Jeanne Arrungan', 'sesiliajeanne', '$2y$10$nGzGRGCKGfg7FTWup7avWOUaUbTGUXpTgylBKRbYPlHsiPtJRjqi.', NULL, 'Admin', NULL, '2021-08-30 00:16:54', '2021-08-30 00:16:54'),
(11, NULL, 'Fian Awamiry Maulana', 'afanfian', '$2y$10$1blf/Mre5ddguygxu6XXfeoi0usz6XI0CR20Z2hG4L4Lhz5/xwWaa', NULL, 'Dev', NULL, '2021-08-31 12:49:08', '2021-08-31 12:49:08'),
(10, NULL, 'Nicodemus Sintong Oloan Siahaan', 'nicodemussintong', '$2y$10$ERqFoalO54KqYik/3Ce1duX4YAo4IBByYI25p30nwhH.NDAXBOwtC', NULL, 'Admin', NULL, '2021-08-31 05:09:01', '2021-08-31 05:09:01'),
(12, NULL, 'Anugrah Cahya K', 'anugrahck', '$2y$10$ykKzU9Jm29748sCopr43FOAPdlVP337lz0gLtTEtpTbKPXL1OedLy', NULL, 'Dev', NULL, '2021-08-31 12:49:21', '2021-08-31 12:49:21'),
(13, NULL, 'Argya A. Maghfirridho', 'argyax', '$2y$10$HaT4VjvyKVKwYLonu4o0eebgGqKqS9EejliPQurbCI4o38OxmPOBW', NULL, 'Dev', NULL, '2021-08-31 12:51:42', '2021-08-31 12:51:42'),
(17, NULL, 'Organization', 'orgspeitssc', '$2y$10$0sppIWyu1lx9HPDbS14InusKp7xc.3LB94dxSRSbBZvJXFp7TA2gS', NULL, 'Admin', NULL, '2021-09-01 14:59:25', '2021-09-01 14:59:25'),
(19, NULL, 'Michael Yoshiya Bangun', 'mikeykusuma', '$2y$10$yJ1RXK5ljMQosqem/NUJpu.gmpXLpm/N6yZSCf3JaYqfhg4GmwIdq', NULL, 'Admin', NULL, '2021-09-03 07:07:13', '2021-09-03 07:07:13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
