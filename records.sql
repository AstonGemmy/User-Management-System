-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 11:55 PM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paw_records`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `created_at`, `updated_at`, `first_name`, `last_name`, `middle_name`, `phone_number`, `occupation`, `qualification`, `marital_status`, `address`, `state`, `lga`, `gender`) VALUES
(1, '2020-09-16 17:12:01', '2020-10-01 09:09:40', 'Jenny', 'Inyang', 'Ukeme', '08023314432, 08067192917', 'Civil Servant', 'B.A. Communications Arts', 'Married', '33 Ikot Oku Idio', 'Akwa Ibom', 'Uruan', 'Female'),
(19, NULL, NULL, 'Udeme', 'Udoh', 'Okon', '07014840246', 'Student', 'FSLC WAEC', 'Single', '232 Nwaniba Road Uyo', 'Akwa Ibom', 'Obot Akara', 'Male'),
(3, '2020-09-11 19:52:17', '2020-09-11 19:52:17', 'Ekikere', 'Nnsewo', 'Mfon', '08166882097', 'Marketer', 'B. Ed.', 'Married', '26 Udo Idiong Nka Street', 'Akwa Ibom', 'Uyo', 'Female'),
(4, '2020-09-11 19:54:34', '2020-09-11 19:54:34', 'Margaret', 'Okon', 'Effiong', '07088300222', 'Business', 'Standard 6', 'None', '9 Ikot Effiok Street, Use Offot', 'Akwa Ibom', 'Uyo', 'Female'),
(5, '2020-09-11 19:56:16', '2020-09-11 19:56:16', 'Atim', 'Ikpe', 'Okon', '08142715861', 'None', 'None', 'Widow', 'Ikot Iwu Street', 'Akwa Ibom', 'Uyo', 'Female'),
(6, '2020-09-11 19:58:02', '2020-09-11 19:58:02', 'Emem', 'Edet', 'Gregory', '07033911244', 'Hair Dresser/Make up', 'S.S.C.E', 'Single', '46 Asuquo Ibanga Street, Use Offot', 'Akwa Ibom', 'Uyo', 'Female'),
(7, '2020-09-11 19:59:36', '2020-09-11 19:59:36', 'Emem', 'Amos', 'John', '08167699189', 'Business', 'None', 'Engaged', 'Ikot Iwang, Use Offot', 'Akwa Ibom', 'Uyo', 'Female'),
(8, '2020-09-11 20:01:15', '2020-10-01 09:13:18', 'Blessing', 'Edem', 'Aniekan', '09066750197`', 'Student', 'SSCE', 'Single', '38 Asuquo Ibanga Street, Use Offot', 'Akwa Ibom', 'Ibiono Ibom', 'Female'),
(9, '2020-09-12 16:26:28', '2020-09-12 16:26:28', 'Ekemini', 'Bassey', 'Solomon', '08129035943', 'None', 'SSCE', 'Single', '64 Asuquo Ibanga Street, Use Offot', 'Akwa Ibom', 'Uyo', 'Male'),
(10, '2020-09-12 16:28:02', '2020-09-12 16:28:02', 'Caroline', 'Okon', 'Moses', '07081167545', 'Fashion Business', 'SSCE', 'Single', 'Etim Okon Usanga Street', 'Akwa Ibom', 'Uyo', 'Female'),
(11, '2020-09-12 16:29:43', '2020-09-12 16:29:43', 'Bright', 'Etim', 'Patrick', '09023691411', 'None', 'SSCE', 'Single', '23 NEPA Line Use Offot', 'Akwa Ibom', 'Uyo', 'Female'),
(12, '2020-09-12 16:31:13', '2020-09-12 16:31:13', 'Blessing', 'Asuquo', 'Malachy', '09072298860', 'Student', 'SSCE', 'Single', '4 Udoekong Street', 'Akwa Ibom', 'Uyo', 'Female'),
(13, '2020-09-12 16:32:31', '2020-09-12 16:32:31', 'Faith', 'Asuquo', 'Malachy', '08024636748', 'Student', 'SSCE', 'Single', '4 Udoekong Street', 'Akwa Ibom', 'Uyo', 'Female'),
(14, '2020-09-12 16:33:41', '2020-09-12 16:33:41', 'Emediong', 'Asuquo', 'Malachy', '08029365379', 'Student', 'SSCE', 'Single', '4 Udoekong Street', 'Akwa Ibom', 'Uyo', 'Female'),
(15, '2020-09-12 16:35:00', '2020-09-12 16:35:00', 'Aniekeme', 'Etim', 'Patrick', '08135541914, 08133305938', 'Student', 'SSCE', 'Single', '23 NEPA Line Use Offot', 'Akwa Ibom', 'Uyo', 'Male'),
(17, '2020-09-12 16:38:08', '2020-09-12 16:38:08', 'Uwakmfon', 'Akpan', 'Sunday', '08103561805', 'Student', 'B. Eng Electrical/Electronics Engineering', 'Single', 'Asuquo Ibanga Street, Nwaniba Road', 'Akwa Ibom', 'Uyo', 'Male'),
(43, '2020-10-01 09:26:38', '2020-10-01 09:26:38', 'Wisdom', 'James', 'Sunday', '07083906781', 'Applicant', 'NCE', 'Married', '12 Ubara Street', 'Akwa Ibom', 'Etinan', 'Female'),
(42, '2020-10-01 09:24:53', '2020-10-01 09:24:53', 'Bright', 'Etim', 'Patrick', '09023691411', 'Student', 'SSCE', 'Single', '23 NEPA Line Use Offot', 'Akwa Ibom', 'Uyo', 'Female'),
(41, '2020-10-01 09:23:40', '2020-10-01 09:23:40', 'Aniekeme', 'Inyang', 'Ukeme', '09029587651', 'Student', 'SSCE', 'Single', '33 Ikot Oku Idio', 'Akwa Ibom', 'Uruan', 'Male'),
(40, '2020-10-01 09:18:07', '2020-10-01 09:18:07', 'Itoro', 'Okon', 'Moses', '09072620574', 'Timber Work', 'None', 'Single', 'Nsukara Offot', 'Akwa Ibom', 'Uyo', 'Male'),
(45, NULL, NULL, 'ersdtrf', 'tghdfythf', 'fdgfv', '45667898', 'tghfvygh', 'fgvghv', 'Single', 'gfhvhgb', 'chgvbhn', 'fghvhg', 'Male'),
(46, NULL, NULL, 'hgfygh', 'fghvgh', 'fhgvghvb', '56789', 'fgbvbhjnb', 'fgvbhjn', 'Single', 'gbjhn', 'ghvbhjb', 'ghvbhjnbm', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
