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
-- Dumping data for table `shortlinks`
--

INSERT INTO `shortlinks` (`id`, `user_id`, `name`, `short`, `original`, `visited`, `created_at`, `updated_at`) VALUES
(10, 10, 'Competition Development 2021/2022', 'CompDev2122', 'https://drive.google.com/drive/folders/1EkUP5bFe-jEAtetITCl5iaBCDNsnmmiQ?usp=sharing', 28, '2021-08-31 17:52:41', '2021-09-04 04:22:59'),
(2, 3, 'Terms for Member', 'TermsforMember', 'https://drive.google.com/drive/folders/1eUNxx80MVrTB2ceJQnhQ7xxMdr0HAUTj?usp=sharing', 17, '2021-08-30 23:08:54', '2021-09-04 12:44:19'),
(4, 10, 'Official Delegates of SPE ITS SC 2021/2022', 'CallforDelegates', 'https://forms.gle/kKyzrd82xwhKq6wB8', 39, '2021-08-31 06:05:07', '2021-09-04 04:22:40'),
(5, 1, 'Drive of Web Dev', 'KhususWebDev', 'https://drive.google.com/drive/folders/1EAtQQrKO8-fXJtOPptFchYv1EIUoTt8n?usp=sharing', 1, '2021-08-31 06:12:38', '2021-08-31 14:40:23'),
(6, 1, 'Announcement Staff SPE ITS SC 2021/2022', 'SPEStaffAnnouncement', 'https://drive.google.com/drive/u/6/folders/1BaDSJk1HW_8RTG5w63yjUjOWfAp3P1ID', 437, '2021-08-31 09:35:19', '2021-09-04 12:23:47'),
(8, 10, 'Competition Invitation Letters', 'InvitationLetters', 'https://drive.google.com/drive/folders/1ILh7r3n6IvFXNtIiffP5BSSBFHZ-KcQ0?usp=sharing', 31, '2021-08-31 11:35:09', '2021-09-04 04:22:44'),
(9, 3, 'Soft Skill 21/22', 'SoftSkills21-22', 'https://drive.google.com/drive/folders/1nS2Fs_lkthxB9zZZ0XKL1XtdcHLVD_rT?usp=sharing', 23, '2021-08-31 14:30:43', '2021-09-04 08:21:05'),
(12, 19, 'Alumni Database', 'alumnidatabase', 'https://drive.google.com/drive/folders/1FhQfzz5io3oT9Pq1s3n7mrcUAXMpCmnn?usp=sharing', 3, '2021-09-03 07:12:51', '2021-09-03 07:29:17'),
(13, 19, 'External Affairs 21/22 Google Drive', 'drive_ea', 'https://drive.google.com/drive/folders/1FvtfKosaqLeLpPl34R84iyUv4lvyJj-I?usp=sharing', 2, '2021-09-03 07:30:59', '2021-09-04 04:34:24'),
(14, 19, 'EA First Meeting', 'eafirstmeeting', 'https://us02web.zoom.us/j/85307671466', 15, '2021-09-03 12:20:39', '2021-09-04 12:34:45'),
(15, 17, 'SPE Member International for BoC', 'memberinternationalboc', 'https://forms.gle/AWrQE3sS9X1Hcbu38', 5, '2021-09-04 04:40:10', '2021-09-04 07:27:20'),
(16, 19, 'EA Notion', 'notionea', 'https://www.notion.so/External-Affairs-SPE-ITS-SC-21-22-872a6e67a6d34af29f2dbe0325a6479d', 2, '2021-09-04 08:46:02', '2021-09-04 09:02:44');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
