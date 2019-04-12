-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 03:38 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std6102041520050`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `branch_no` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postcode` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `branch_no`, `name`, `street`, `city`, `postcode`) VALUES
(1, 'B005', 'test', '22 Deer Rd', 'London', 'SW1 4EH');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `client_no` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `f_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tel_no` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pref_type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `max_rent` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1555098870),
('m130524_201442_init', 1555098877),
('m190124_110200_add_verification_token_column_to_user_table', 1555098877),
('m190412_222844_create_branch', 1555108322),
('m190412_223308_create_staff', 1555108710),
('m190412_223323_create_private_owner', 1555108710),
('m190412_223342_create_property_for_rent', 1555108710),
('m190412_223401_create_registration', 1555108710),
('m190412_223416_create_client', 1555108710),
('m190412_223430_create_viewing', 1555108710);

-- --------------------------------------------------------

--
-- Table structure for table `private_owner`
--

CREATE TABLE `private_owner` (
  `id` int(11) NOT NULL,
  `owner_no` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_for_rent`
--

CREATE TABLE `property_for_rent` (
  `id` int(11) NOT NULL,
  `property_no` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rooms` int(5) DEFAULT NULL,
  `rent` decimal(7,2) DEFAULT NULL,
  `private_owner_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `property_for_rent_id` int(11) NOT NULL,
  `dateJoined` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `staff_no` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `f_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `d_o_b` date DEFAULT NULL,
  `salary` decimal(17,2) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(2, 'nattawat', 'ZfUWxavoEuJ9FLl0A5uT24RkYZ__7VCu', '$2y$13$zlIAz.1ivNLRTmvvPgjLg.63bd2hPPUjjiJiJVLA9acRSYxOr9gWS', NULL, 's6102041520050@email.kmutnb.ac.th', 9, 1555099650, 1555099650, 'F_dLEzx3djoRtY2VlGTZGNoN3JZnOHai_1555099650'),
(3, 'sakuno', '93SC_L7sJGZmeVa-rw0fg_zJZt9kW_A3', '$2y$13$LfKkfdhXcEQnPv6taU3IDOM6TAnn3JcAiANc7ljX14Nbk3JdPenX.', NULL, 'natsugi.sakuno@gmail.com', 10, 1555099740, 1555099740, 'jwDW1fuS-ieHFvPiwp1k_eNaGV77vxjj_1555099740');

-- --------------------------------------------------------

--
-- Table structure for table `viewing`
--

CREATE TABLE `viewing` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `property_for_rent_id` int(11) NOT NULL,
  `view_date` date DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `branch_no` (`branch_no`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `client_no` (`client_no`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `private_owner`
--
ALTER TABLE `private_owner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `owner_no` (`owner_no`);

--
-- Indexes for table `property_for_rent`
--
ALTER TABLE `property_for_rent`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `property_no` (`property_no`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_no` (`staff_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `viewing`
--
ALTER TABLE `viewing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `private_owner`
--
ALTER TABLE `private_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_for_rent`
--
ALTER TABLE `property_for_rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `viewing`
--
ALTER TABLE `viewing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
