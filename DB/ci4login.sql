-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 02:03 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4login`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'user', 'Regular User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 05:25:12', 1),
(2, '116.206.15.63', 'pcc135@pertamina.com', 3, '2021-02-27 05:48:28', 1),
(3, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 06:11:04', 1),
(4, '116.206.15.8', 'pcc135@pertamina.com', 3, '2021-02-27 06:37:20', 1),
(5, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 06:41:46', 1),
(6, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 06:48:05', 1),
(7, '182.0.238.60', 'pcc135@pertamina.com', 3, '2021-02-27 07:10:52', 1),
(8, '114.142.173.50', 'pcc135@pertamina.com', 3, '2021-02-27 07:50:37', 1),
(9, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 07:53:04', 1),
(10, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 08:28:27', 1),
(11, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 08:48:59', 1),
(12, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 08:59:04', 1),
(13, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 09:21:07', 1),
(14, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 09:46:06', 1),
(15, '116.206.15.2', 'pcc135@pertamina.com', 3, '2021-02-27 09:54:36', 1),
(16, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 10:33:58', 1),
(17, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 13:37:25', 1),
(18, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 16:55:02', 1),
(19, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 16:57:13', 1),
(20, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 17:00:29', 1),
(21, '114.5.214.206', 'pcc135@pertamina.com', 3, '2021-02-27 17:39:06', 1),
(22, '36.78.87.102', 'pcc135@pertamina.com', 3, '2021-02-27 17:49:28', 1),
(23, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 18:01:07', 1),
(24, '36.79.249.165', 'pcc135@pertamina.com', 3, '2021-02-27 18:08:15', 1),
(25, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 18:28:09', 1),
(26, '2404:c0:2c10::431:7c25', 'gunawanzakiahhalim@gmail.com', 1, '2021-02-27 18:59:18', 1),
(27, '114.122.107.245', 'pcc135@pertamina.com', 3, '2021-02-27 19:09:53', 1),
(28, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 19:17:09', 1),
(29, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 19:42:01', 1),
(30, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 20:48:30', 1),
(31, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 20:51:09', 1),
(32, '36.79.249.165', 'pcc135@pertamina.com', 3, '2021-02-27 20:55:41', 1),
(33, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 20:57:27', 1),
(34, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 20:58:14', 1),
(35, '2404:c0:2f10::1b03:e317', 'gunawanzakiahhalim@gmail.com', 1, '2021-02-27 21:48:23', 1),
(36, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 22:04:24', 1),
(37, '2404:c0:2f10::1b03:e317', 'gunawanzakiahhalim@gmail.com', 1, '2021-02-27 22:34:23', 1),
(38, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 23:20:37', 1),
(39, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 23:22:53', 1),
(40, '36.71.232.104', 'pcc135@pertamina.com', 3, '2021-02-27 23:26:24', 1),
(41, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 23:36:13', 1),
(42, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-27 23:54:41', 1),
(43, '114.122.68.141', 'pcc135@pertamina.com', 3, '2021-02-28 00:03:52', 1),
(44, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 00:12:27', 1),
(45, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 01:46:32', 1),
(46, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 01:54:39', 1),
(47, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 02:04:41', 1),
(48, '114.124.147.136', 'pcc135@pertamina.com', 3, '2021-02-28 02:29:12', 1),
(49, '114.5.253.133', 'pcc135@pertamina.com', 3, '2021-02-28 02:55:15', 1),
(50, '182.0.237.26', 'pertamina', NULL, '2021-02-28 03:20:01', 0),
(51, '182.0.237.26', 'pertamina', NULL, '2021-02-28 03:20:04', 0),
(52, '182.0.237.26', 'pcc135@pertamina.com', 3, '2021-02-28 03:20:15', 1),
(53, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 03:50:36', 1),
(54, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 04:04:39', 1),
(55, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 04:27:03', 1),
(56, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 05:45:14', 1),
(57, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 05:45:22', 1),
(58, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 06:02:23', 1),
(59, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 06:04:52', 1),
(60, '182.2.164.123', 'pcc135@pertamina.com', 3, '2021-02-28 06:17:30', 1),
(61, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 06:27:30', 1),
(62, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 06:50:22', 1),
(63, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 07:00:45', 1),
(64, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 07:55:29', 1),
(65, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 09:18:14', 1),
(66, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 09:21:27', 1),
(67, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 10:33:01', 1),
(68, '114.122.73.145', 'pcc135@pertamina.com', 3, '2021-02-28 10:33:24', 1),
(69, '116.206.15.12', 'pcc135@pertamina.com', 3, '2021-02-28 10:50:44', 1),
(70, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 12:02:22', 1),
(71, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 13:31:52', 1),
(72, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 15:33:05', 1),
(73, '139.195.5.211', 'pcc135@pertamina.com', 3, '2021-02-28 16:19:32', 1),
(74, '36.94.105.194', 'vincentiainggridsinaga@gmail.com', 7, '2021-02-28 16:32:32', 1),
(75, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 17:04:40', 1),
(76, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 17:26:09', 1),
(77, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 17:31:10', 1),
(78, '36.71.232.166', 'pcc135@pertamina.com', 3, '2021-02-28 17:43:52', 1),
(79, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 17:46:33', 1),
(80, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 17:55:52', 1),
(81, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 18:24:03', 1),
(82, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 18:47:06', 1),
(83, '36.94.105.194', 'gunawanzakiahhalim@gmail.com', 1, '2021-02-28 19:10:25', 1),
(84, '139.195.5.211', 'pcc135@pertamina.com', 3, '2021-02-28 19:15:22', 1),
(85, '222.124.159.12', 'pcc135@pertamina.com', 3, '2021-02-28 19:43:22', 1),
(86, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 19:59:39', 1),
(87, '36.94.105.194', 'vincentiainggridsinaga@gmail.com', 7, '2021-02-28 20:34:05', 1),
(88, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 20:42:23', 1),
(89, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 21:07:44', 1),
(90, '36.94.105.194', 'gunawanzakiahhalim@gmail.com', 1, '2021-02-28 21:24:43', 1),
(91, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 21:36:20', 1),
(92, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 22:35:04', 1),
(93, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 22:40:35', 1),
(94, '222.124.159.12', 'pcc135@pertamina.com', 3, '2021-02-28 22:47:54', 1),
(95, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 23:04:17', 1),
(96, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 23:10:59', 1),
(97, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-02-28 23:24:30', 1),
(98, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 00:05:22', 1),
(99, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 00:45:07', 1),
(100, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 00:47:22', 1),
(101, '114.122.75.239', 'pcc135@pertamina.com', 3, '2021-03-01 01:03:13', 1),
(102, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 01:07:28', 1),
(103, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 01:29:39', 1),
(104, '114.122.103.32', 'pcc135@pertamina.com', 3, '2021-03-01 01:36:02', 1),
(105, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 01:42:45', 1),
(106, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 02:15:56', 1),
(107, '36.94.105.194', 'gunawanzakiahhalim@gmail.com', 1, '2021-03-01 02:18:39', 1),
(108, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 02:21:41', 1),
(109, '36.71.232.166', 'pcc135@pertamina.com', 3, '2021-03-01 02:25:49', 1),
(110, '182.0.202.162', 'pcc135@pertamina.com', 3, '2021-03-01 02:27:52', 1),
(111, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 03:10:11', 1),
(112, '36.94.105.194', 'gunawanzakiahhalim@gmail.com', 1, '2021-03-01 03:15:55', 1),
(113, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 03:21:13', 1),
(114, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 03:32:29', 1),
(115, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 04:01:19', 1),
(116, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 05:33:08', 1),
(117, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 05:57:34', 1),
(118, '114.122.102.36', 'pcc135@pertamina.com', 3, '2021-03-01 05:58:58', 1),
(119, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 06:09:55', 1),
(120, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 06:53:35', 1),
(121, '116.206.15.10', 'pcc135@pertamina.com', 3, '2021-03-01 07:37:55', 1),
(122, '114.122.69.245', 'gunawanzakiahhalim@gmail.com', 1, '2021-03-01 07:57:34', 1),
(123, '180.245.160.34', 'pcc135@pertamina.com', 3, '2021-03-01 07:59:42', 1),
(124, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 08:29:39', 1),
(125, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 08:31:29', 1),
(126, '114.122.68.209', 'pcc135@pertamina.com', 3, '2021-03-01 10:38:18', 1),
(127, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 12:53:55', 1),
(128, '114.122.75.243', 'pcc135@pertamina.com', 3, '2021-03-01 16:22:32', 1),
(129, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 16:33:06', 1),
(130, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 17:04:55', 1),
(131, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 17:20:23', 1),
(132, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 17:30:15', 1),
(133, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 17:30:31', 1),
(134, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 17:30:50', 1),
(135, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 18:02:15', 1),
(136, '36.94.105.194', 'gunawanzakiahhalim@gmail.com', 1, '2021-03-01 18:46:42', 1),
(137, '36.94.105.194', 'gunawanzakiahhalim@gmail.com', 1, '2021-03-01 18:46:52', 1),
(138, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 19:02:36', 1),
(139, '36.71.232.166', 'pcc135@pertamina.com', 3, '2021-03-01 19:04:45', 1),
(140, '114.122.71.111', 'pcc135@pertamina.com', 3, '2021-03-01 19:05:41', 1),
(141, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 19:30:41', 1),
(142, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 21:52:08', 1),
(143, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 22:06:07', 1),
(144, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 22:10:22', 1),
(145, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 23:21:38', 1),
(146, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-01 23:21:54', 1),
(147, '103.247.196.14', 'pcc135@pertamina.com', 3, '2021-03-02 00:02:54', 1),
(148, '36.71.232.166', 'pcc135@pertamina.com', 3, '2021-03-02 00:08:18', 1),
(149, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 00:36:19', 1),
(150, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 01:34:28', 1),
(151, '114.122.107.87', 'pcc135@pertamina.com', 3, '2021-03-02 01:37:37', 1),
(152, '180.245.160.34', 'pcc135@pertamina.com', 3, '2021-03-02 01:54:48', 1),
(153, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 01:57:48', 1),
(154, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 02:03:47', 1),
(155, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 02:25:49', 1),
(156, '103.143.98.67', 'pcc135@pertamina.com', 3, '2021-03-02 02:27:29', 1),
(157, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 02:32:00', 1),
(158, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 03:09:19', 1),
(159, '36.94.105.194', 'iman.cititranscc@gmail.com', 5, '2021-03-02 04:26:50', 1),
(160, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 05:36:47', 1),
(161, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 05:50:26', 1),
(162, '36.71.232.166', 'pcc135@pertamina.com', 3, '2021-03-02 05:55:27', 1),
(163, '114.122.105.239', 'pcc135@pertamina.com', 3, '2021-03-02 06:06:54', 1),
(164, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 06:12:12', 1),
(165, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 06:48:20', 1),
(166, '36.94.105.194', 'iman.cititranscc@gmail.com', 5, '2021-03-02 07:19:13', 1),
(167, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 07:28:04', 1),
(168, '2404:c0:2d10::1b5a:a3d2', 'gunawanzakiahhalim@gmail.com', 1, '2021-03-02 07:31:30', 1),
(169, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 08:05:10', 1),
(170, '2404:c0:2a10::1b21:2329', 'pcc135@pertamina.com', 3, '2021-03-02 08:31:14', 1),
(171, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 08:50:14', 1),
(172, '36.94.105.194', 'informedia', NULL, '2021-03-02 09:37:24', 0),
(173, '36.94.105.194', 'infomedia', NULL, '2021-03-02 09:37:56', 0),
(174, '36.94.105.194', 'pertamina', NULL, '2021-03-02 09:38:03', 0),
(175, '36.94.105.194', 'pertamina', NULL, '2021-03-02 09:38:20', 0),
(176, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 09:38:33', 1),
(177, '36.94.105.194', 'Pertamina', NULL, '2021-03-02 09:38:38', 0),
(178, '36.94.105.194', 'pertamina', NULL, '2021-03-02 09:38:49', 0),
(179, '36.94.105.194', 'infomedia', NULL, '2021-03-02 09:39:07', 0),
(180, '36.94.105.194', 'infomedia', NULL, '2021-03-02 09:39:18', 0),
(181, '36.94.105.194', 'infomedia', NULL, '2021-03-02 09:39:37', 0),
(182, '36.94.105.194', 'pertamina', NULL, '2021-03-02 09:41:02', 0),
(183, '36.94.105.194', 'infomedia', NULL, '2021-03-02 09:41:20', 0),
(184, '36.94.105.194', 'infomedia', NULL, '2021-03-02 09:41:27', 0),
(185, '36.94.105.194', 'pertamina', NULL, '2021-03-02 09:41:33', 0),
(186, '36.94.105.194', 'pertamina', NULL, '2021-03-02 09:42:35', 0),
(187, '36.94.105.194', 'Pertamina', NULL, '2021-03-02 09:42:46', 0),
(188, '36.94.105.194', 'pertamina', NULL, '2021-03-02 09:49:10', 0),
(189, '36.94.105.194', 'Pertamina', NULL, '2021-03-02 09:49:24', 0),
(190, '36.94.105.194', 'Informedia', NULL, '2021-03-02 09:49:36', 0),
(191, '36.94.105.194', 'infomedia', NULL, '2021-03-02 09:49:44', 0),
(192, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 09:50:43', 1),
(193, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 09:51:15', 1),
(194, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 09:58:02', 1),
(195, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 10:11:44', 1),
(196, '2404:c0:2a10::1b29:b531', 'pcc135@pertamina.com', 3, '2021-03-02 13:59:21', 1),
(197, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 14:23:31', 1),
(198, '36.94.105.194', 'vincentiainggridsinaga@gmail.com', 7, '2021-03-02 16:29:07', 1),
(199, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 16:31:25', 1),
(200, '114.122.75.172', 'pcc135@pertamina.com', 3, '2021-03-02 16:55:42', 1),
(201, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 17:02:02', 1),
(202, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 17:22:22', 1),
(203, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 17:23:31', 1),
(204, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 17:55:37', 1),
(205, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 18:27:21', 1),
(206, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 18:31:24', 1),
(207, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 18:47:38', 1),
(208, '36.94.105.194', 'vincentiainggridsinaga@gmail.com', 7, '2021-03-02 19:48:17', 1),
(209, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 19:57:34', 1),
(210, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 20:34:49', 1),
(211, '103.247.196.15', 'pcc135@pertamina.com', 3, '2021-03-02 20:47:14', 1),
(212, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 20:58:33', 1),
(213, '114.122.70.168', 'pcc135@pertamina.com', 3, '2021-03-02 21:02:14', 1),
(214, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 21:05:50', 1),
(215, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 21:31:30', 1),
(216, '36.94.105.194', 'vincentiainggridsinaga@gmail.com', 7, '2021-03-02 21:55:54', 1),
(217, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 21:57:09', 1),
(218, '36.94.105.194', 'pcc135@pertamina.com', 3, '2021-03-02 22:24:41', 1),
(219, '36.94.105.194', 'gunawanzakiahhalim@gmail.com', 1, '2021-03-02 22:38:09', 1),
(220, '::1', 'gunawanzakiahhalim@gmail.com', 1, '2021-03-03 19:04:00', 1),
(221, '::1', 'guawanzakiahhalim@gmail.com', NULL, '2021-03-04 22:25:53', 0),
(222, '::1', 'guawanzakiahhalim@gmail.com', NULL, '2021-03-04 22:26:00', 0),
(223, '::1', 'guawanzakiahhalim@gmail.com', NULL, '2021-03-04 22:26:08', 0),
(224, '::1', 'gunawanzakiahhalim@gmail.com', 1, '2021-03-04 22:26:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage All Users'),
(2, 'manage-profile', 'Manage user\'s profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `id_menu` varchar(255) NOT NULL,
  `subcategory1` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `judul`, `slug`, `id_menu`, `subcategory1`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Poin sudah berkurang voucher/merchandise belum didapatkan', 'poin-sudah-berkurang-vouchermerchandise-belum-didapatkan', 'Menu_C_P30', 'MyPertamina', '1609836681_ba7bd6b7ff422b126041.jpg', '2020-12-21 20:55:30', '2021-01-14 02:56:05'),
(2, 'Syarat dan Ketentuan RFID', 'syarat-dan-ketentuan-rfid', 'Menu_A_P65', 'Layanan BBM', '1613643960_7bdf20c329bbdc65e256.jpeg', '2021-02-18 04:26:00', '2021-02-18 04:28:26'),
(3, 'Kerjasama Untuk Promosi', 'kerjasama-untuk-promosi', 'Menu_A_P26', 'Layanan BBM', '1614691298_246368abde6a96d5b472.jpg', '2021-03-02 07:21:38', '2021-03-02 07:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `komik`
--

CREATE TABLE `komik` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komik`
--

INSERT INTO `komik` (`id`, `judul`, `slug`, `penulis`, `penerbit`, `sampul`, `created_at`, `updated_at`) VALUES
(1, 'Naruto', 'naruto', 'Masashi Kishimoto', 'Shonen Jump', 'naruto.jpg', NULL, NULL),
(2, 'One Pice', 'one-pice', 'Echiro Odda', 'Gramedia', 'onepiece.jpg', NULL, '2020-12-18 02:26:45'),
(7, 'Hanya Judul yang berubah', 'hanya-judul-yang-berubah', 'dfad', 'fdf', '1608523391_650701b3e95c655a9d9f.jpg', '2020-12-20 20:23:20', '2020-12-20 22:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1606190809, 1),
(2, '2020-12-22-021247', 'App\\Database\\Migrations\\Orang', 'default', 'App', 1608604493, 2),
(3, '2020-12-22-024025', 'App\\Database\\Migrations\\Info', 'default', 'App', 1608605262, 3);

-- --------------------------------------------------------

--
-- Table structure for table `orang`
--

CREATE TABLE `orang` (
  `id` int(1) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orang`
--

INSERT INTO `orang` (`id`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Makara Prasetya', 'Ds. Dahlia No. 705, Administrasi Jakarta Utara 52865, KalUt', '2015-08-13 12:48:51', '2020-12-21 22:48:17'),
(2, 'Yahya Hidayanto', 'Ki. Jayawijaya No. 623, Palopo 68565, BaBel', '1995-05-20 00:13:02', '2020-12-21 22:48:17'),
(3, 'Dwi Gunarto', 'Dk. Agus Salim No. 817, Padangsidempuan 65595, SulBar', '1984-06-01 05:45:23', '2020-12-21 22:48:17'),
(4, 'Kartika Puspa Riyanti', 'Ki. Bara No. 684, Mojokerto 84501, JaBar', '1994-12-24 06:21:21', '2020-12-21 22:48:17'),
(5, 'Ida Hesti Oktaviani S.E.I', 'Ds. Kalimalang No. 728, Administrasi Jakarta Pusat 86949, DKI', '2005-06-14 06:42:01', '2020-12-21 22:48:18'),
(6, 'Kacung Haryanto S.Gz', 'Ds. Ahmad Dahlan No. 29, Pasuruan 23153, Riau', '2001-07-07 11:05:59', '2020-12-21 22:48:18'),
(7, 'Muhammad Wijaya', 'Gg. Cikutra Barat No. 755, Sorong 89142, DIY', '1996-10-26 22:47:30', '2020-12-21 22:48:18'),
(8, 'Aswani Latupono S.H.', 'Kpg. Sumpah Pemuda No. 239, Banjarbaru 51408, Banten', '1983-07-18 21:34:05', '2020-12-21 22:48:18'),
(9, 'Lalita Suryatmi', 'Gg. Bagonwoto  No. 92, Pematangsiantar 28662, NTB', '1979-09-07 11:11:55', '2020-12-21 22:48:18'),
(10, 'Sidiq Tasnim Anggriawan M.TI.', 'Ds. Jayawijaya No. 358, Batam 98868, SulUt', '1993-05-04 16:14:42', '2020-12-21 22:48:18'),
(11, 'Calista Wulandari', 'Ki. Dipatiukur No. 571, Singkawang 92547, KepR', '1976-07-14 20:21:45', '2020-12-21 22:48:18'),
(12, 'Winda Pertiwi', 'Gg. Suharso No. 475, Medan 94872, KepR', '1993-01-05 10:17:46', '2020-12-21 22:48:18'),
(13, 'Nrima Kenari Manullang', 'Jr. Suharso No. 449, Tarakan 22534, KalTim', '1972-03-10 04:43:45', '2020-12-21 22:48:18'),
(14, 'Karimah Puspita', 'Psr. Ki Hajar Dewantara No. 692, Magelang 72089, SulSel', '1997-04-01 19:25:55', '2020-12-21 22:48:18'),
(15, 'Pranata Marpaung', 'Gg. Abdullah No. 822, Gorontalo 37068, Bengkulu', '1994-02-23 17:53:15', '2020-12-21 22:48:18'),
(16, 'Nalar Nasim Uwais S.Ked', 'Psr. Sadang Serang No. 816, Payakumbuh 98656, NTT', '1971-10-05 03:43:18', '2020-12-21 22:48:18'),
(17, 'Kawaca Tarihoran M.Farm', 'Ds. Bayam No. 455, Padang 78991, Bengkulu', '1998-09-29 02:24:21', '2020-12-21 22:48:18'),
(18, 'Saadat Saptono M.M.', 'Gg. Imam Bonjol No. 467, Yogyakarta 52990, SulTeng', '2002-08-16 01:00:16', '2020-12-21 22:48:18'),
(19, 'Bala Wibowo', 'Dk. Wahidin Sudirohusodo No. 770, Palu 71599, MalUt', '1993-07-10 18:44:38', '2020-12-21 22:48:18'),
(20, 'Suci Lailasari', 'Jln. Bhayangkara No. 575, Tebing Tinggi 94644, MalUt', '1976-03-08 11:08:42', '2020-12-21 22:48:18'),
(21, 'Mahmud Manullang', 'Psr. Cut Nyak Dien No. 489, Binjai 14170, SumBar', '2009-11-16 22:45:39', '2020-12-21 22:48:18'),
(22, 'Dacin Garda Gunawan S.Psi', 'Dk. Fajar No. 841, Subulussalam 58992, JaTeng', '2020-03-16 21:16:25', '2020-12-21 22:48:18'),
(23, 'Laras Palastri S.Psi', 'Jln. Babadan No. 89, Sabang 52310, SulBar', '1987-03-29 23:03:04', '2020-12-21 22:48:18'),
(24, 'Luhung Wijaya', 'Ki. Sumpah Pemuda No. 453, Bandar Lampung 23397, NTT', '1991-03-13 16:27:27', '2020-12-21 22:48:18'),
(25, 'Hesti Wijayanti M.Pd', 'Jr. Bakaru No. 33, Kediri 98503, Bali', '2017-11-30 02:30:02', '2020-12-21 22:48:18'),
(26, 'Nurul Mayasari', 'Kpg. Baranang Siang Indah No. 250, Bontang 31083, BaBel', '2004-01-04 10:54:26', '2020-12-21 22:48:18'),
(27, 'Balapati Saefullah', 'Kpg. Pasirkoja No. 901, Metro 93106, KalTeng', '1993-07-17 15:09:52', '2020-12-21 22:48:18'),
(28, 'Yessi Wijayanti S.E.', 'Ds. Banda No. 277, Balikpapan 29310, BaBel', '2009-05-09 12:30:19', '2020-12-21 22:48:18'),
(29, 'Aisyah Widiastuti', 'Dk. Agus Salim No. 714, Parepare 43159, NTT', '1996-01-25 07:23:46', '2020-12-21 22:48:18'),
(30, 'Luluh Najam Sihombing S.Kom', 'Jr. Labu No. 257, Tual 81695, DKI', '2003-07-28 15:29:50', '2020-12-21 22:48:18'),
(31, 'Wira Cahyadi Anggriawan S.Pd', 'Dk. Yoga No. 823, Padangpanjang 41871, SulTeng', '1993-01-05 02:34:01', '2020-12-21 22:48:18'),
(32, 'Putri Nuraini', 'Dk. Abdul. Muis No. 29, Mojokerto 87681, SumUt', '2004-10-22 15:37:44', '2020-12-21 22:48:18'),
(33, 'Olivia Melani S.T.', 'Gg. Kiaracondong No. 391, Bau-Bau 40519, JaTeng', '2005-03-10 15:07:51', '2020-12-21 22:48:18'),
(34, 'Gatot Firmansyah', 'Dk. Ki Hajar Dewantara No. 929, Administrasi Jakarta Timur 37668, NTB', '2000-07-20 06:56:20', '2020-12-21 22:48:19'),
(35, 'Slamet Napitupulu', 'Jln. Pasir Koja No. 827, Batam 13756, SulTra', '1970-08-25 09:55:21', '2020-12-21 22:48:19'),
(36, 'Virman Daruna Najmudin M.TI.', 'Gg. S. Parman No. 73, Medan 82536, Lampung', '1993-03-03 02:09:55', '2020-12-21 22:48:19'),
(37, 'Hartana Narji Sirait', 'Ki. Jagakarsa No. 107, Makassar 44201, SulTra', '2018-08-02 11:36:49', '2020-12-21 22:48:19'),
(38, 'Zaenab Utami', 'Ds. Otto No. 398, Tarakan 16303, KalUt', '1991-06-21 14:56:02', '2020-12-21 22:48:19'),
(39, 'Halim Sakti Narpati S.Pd', 'Psr. Pasirkoja No. 306, Makassar 41148, SulBar', '1975-05-14 15:25:10', '2020-12-21 22:48:19'),
(40, 'Niyaga Maheswara', 'Dk. Teuku Umar No. 988, Cimahi 92758, Banten', '1999-08-16 02:24:24', '2020-12-21 22:48:19'),
(41, 'Gatot Firmansyah', 'Kpg. Diponegoro No. 269, Banjarmasin 56732, KalBar', '1998-05-25 13:55:05', '2020-12-21 22:48:19'),
(42, 'Cakrabuana Okta Uwais', 'Jln. Ronggowarsito No. 299, Bandar Lampung 96468, MalUt', '2016-08-05 22:02:59', '2020-12-21 22:48:19'),
(43, 'Lantar Habibi', 'Gg. Basket No. 769, Sibolga 70934, SulTra', '1973-05-07 02:07:03', '2020-12-21 22:48:19'),
(44, 'Genta Raina Pertiwi S.Sos', 'Gg. Salam No. 657, Sorong 28305, Gorontalo', '2011-05-28 12:14:46', '2020-12-21 22:48:19'),
(45, 'Mustofa Vinsen Jailani', 'Psr. Bagis Utama No. 576, Magelang 64015, Banten', '1989-02-05 11:13:19', '2020-12-21 22:48:19'),
(46, 'Raisa Ratih Oktaviani', 'Psr. Pasirkoja No. 840, Tanjungbalai 32904, Bali', '1992-09-30 16:24:32', '2020-12-21 22:48:19'),
(47, 'Danang Saputra', 'Ds. Casablanca No. 858, Padangsidempuan 90929, NTB', '1977-06-26 10:19:54', '2020-12-21 22:48:19'),
(48, 'Cici Wulandari', 'Gg. Daan No. 561, Gunungsitoli 90529, Papua', '1998-07-26 00:34:27', '2020-12-21 22:48:19'),
(49, 'Dwi Opan Maryadi S.E.', 'Psr. Raya Ujungberung No. 219, Samarinda 16546, DIY', '1974-03-06 20:44:30', '2020-12-21 22:48:19'),
(50, 'Nurul Rahmi Suartini S.IP', 'Jr. Soekarno Hatta No. 990, Pagar Alam 28224, BaBel', '1999-02-12 21:24:57', '2020-12-21 22:48:19'),
(51, 'Lala Hariyah', 'Gg. Bara No. 479, Administrasi Jakarta Pusat 62674, SulTeng', '1996-11-07 21:26:58', '2020-12-21 22:48:19'),
(52, 'Daryani Haryanto', 'Kpg. Kyai Gede No. 943, Bau-Bau 36633, KalTeng', '1976-03-29 23:46:12', '2020-12-21 22:48:19'),
(53, 'Jabal Widodo', 'Dk. R.M. Said No. 627, Gorontalo 32769, SulTra', '2016-02-13 08:22:41', '2020-12-21 22:48:19'),
(54, 'Tiara Yani Puspita M.Kom.', 'Psr. Ikan No. 361, Bima 88915, Jambi', '1972-06-26 11:58:01', '2020-12-21 22:48:19'),
(55, 'Halima Yance Nasyiah', 'Kpg. Basuki No. 924, Tebing Tinggi 32300, Lampung', '2014-01-21 05:05:55', '2020-12-21 22:48:19'),
(56, 'Nardi Luwar Anggriawan', 'Gg. Bagis Utama No. 146, Pagar Alam 67580, SulTra', '1979-04-14 05:29:39', '2020-12-21 22:48:19'),
(57, 'Samiah Laksmiwati', 'Jr. Bagas Pati No. 689, Batam 60449, Gorontalo', '2010-02-06 02:21:10', '2020-12-21 22:48:19'),
(58, 'Dina Susanti M.Ak', 'Jr. Pasteur No. 365, Palu 61835, KalBar', '2008-10-27 00:55:17', '2020-12-21 22:48:19'),
(59, 'Artawan Harjo Megantara', 'Dk. Sutarjo No. 685, Administrasi Jakarta Selatan 16933, Aceh', '2010-03-04 19:13:36', '2020-12-21 22:48:19'),
(60, 'Shania Rahimah', 'Jr. Flores No. 921, Administrasi Jakarta Selatan 81142, SumSel', '2016-05-23 09:07:38', '2020-12-21 22:48:19'),
(61, 'Bahuwarna Wijaya S.Ked', 'Gg. Gremet No. 219, Tanjung Pinang 12075, SulTeng', '1981-10-24 19:47:10', '2020-12-21 22:48:19'),
(62, 'Fitria Ika Nuraini M.Kom.', 'Jr. Sudirman No. 969, Pekalongan 45214, DKI', '2018-07-23 17:28:51', '2020-12-21 22:48:19'),
(63, 'Dian Prastuti M.Pd', 'Psr. Imam Bonjol No. 806, Depok 86760, MalUt', '1986-12-03 03:02:30', '2020-12-21 22:48:19'),
(64, 'Cagak Simbolon', 'Ds. Sukabumi No. 642, Pariaman 56245, Bali', '1971-02-16 22:35:18', '2020-12-21 22:48:19'),
(65, 'Tiara Purwanti', 'Gg. Moch. Yamin No. 574, Singkawang 94331, SulTra', '2020-11-21 14:32:41', '2020-12-21 22:48:19'),
(66, 'Rusman Pangestu', 'Jln. Tubagus Ismail No. 990, Tangerang 94779, JaBar', '1975-09-19 03:54:19', '2020-12-21 22:48:19'),
(67, 'Alambana Maulana M.Pd', 'Dk. Sutarjo No. 454, Probolinggo 94703, KalUt', '2005-01-26 03:41:06', '2020-12-21 22:48:19'),
(68, 'Iriana Sudiati', 'Jr. Bata Putih No. 88, Langsa 36681, SumSel', '2015-01-22 02:03:03', '2020-12-21 22:48:19'),
(69, 'Heryanto Irawan', 'Ds. Merdeka No. 576, Administrasi Jakarta Barat 92378, KalUt', '2003-10-25 21:38:38', '2020-12-21 22:48:19'),
(70, 'Widya Hartati S.E.I', 'Psr. Bahagia No. 889, Batu 10237, Bengkulu', '2008-09-12 12:27:04', '2020-12-21 22:48:20'),
(71, 'Narji Nainggolan', 'Kpg. Haji No. 385, Surabaya 55884, Aceh', '1994-10-08 00:29:39', '2020-12-21 22:48:20'),
(72, 'Eka Firmansyah', 'Ds. Dago No. 458, Kupang 12570, KalBar', '2003-10-07 02:38:49', '2020-12-21 22:48:20'),
(73, 'Salsabila Hastuti', 'Gg. Pahlawan No. 194, Pasuruan 53450, KalSel', '1982-09-26 21:02:24', '2020-12-21 22:48:20'),
(74, 'Zamira Vanya Kuswandari', 'Ki. Bakau Griya Utama No. 991, Subulussalam 23617, JaTim', '1983-12-20 19:01:30', '2020-12-21 22:48:20'),
(75, 'Olivia Zulaika M.M.', 'Jr. Jend. Sudirman No. 761, Lhokseumawe 24102, Gorontalo', '1975-03-23 03:14:42', '2020-12-21 22:48:20'),
(76, 'Samiah Puti Laksmiwati S.E.I', 'Ds. Kyai Mojo No. 104, Sabang 91400, Bali', '2015-03-30 15:45:29', '2020-12-21 22:48:20'),
(77, 'Wulan Pratiwi', 'Ds. Abdul No. 269, Metro 46720, SulBar', '1999-12-16 16:37:06', '2020-12-21 22:48:20'),
(78, 'Cawisono Dipa Siregar M.Farm', 'Gg. Mahakam No. 277, Tidore Kepulauan 82812, SulTra', '1974-11-20 11:57:24', '2020-12-21 22:48:20'),
(79, 'Nyoman Prasetyo', 'Gg. Yogyakarta No. 365, Metro 56500, JaTeng', '1986-03-29 11:14:02', '2020-12-21 22:48:20'),
(80, 'Betania Febi Oktaviani S.T.', 'Jr. Ahmad Dahlan No. 132, Sawahlunto 45357, Riau', '2019-09-18 01:42:03', '2020-12-21 22:48:20'),
(81, 'Kemal Panca Hardiansyah', 'Jln. Cikutra Barat No. 425, Tasikmalaya 36982, KalTim', '2020-08-04 01:48:51', '2020-12-21 22:48:20'),
(82, 'Gada Vino Kurniawan S.E.', 'Kpg. Rajawali Timur No. 84, Palu 10839, SulTra', '1982-07-21 18:02:26', '2020-12-21 22:48:20'),
(83, 'Rahman Galak Pradana', 'Jr. Agus Salim No. 99, Depok 75107, DIY', '2009-08-26 07:23:11', '2020-12-21 22:48:20'),
(84, 'Belinda Pia Hartati', 'Psr. Otista No. 977, Kupang 45819, DKI', '1989-12-22 20:27:23', '2020-12-21 22:48:20'),
(85, 'Widya Yunita Kusmawati', 'Jln. Gedebage Selatan No. 911, Banda Aceh 48402, JaBar', '2005-05-22 05:48:02', '2020-12-21 22:48:20'),
(86, 'Kambali Sitorus', 'Kpg. Gremet No. 728, Pekanbaru 37522, NTB', '1970-12-22 03:33:54', '2020-12-21 22:48:20'),
(87, 'Aswani Darman Mangunsong S.Sos', 'Psr. Basudewo No. 181, Padangpanjang 79281, SulTra', '1986-02-08 15:17:42', '2020-12-21 22:48:20'),
(88, 'Zizi Zulaika', 'Kpg. Sam Ratulangi No. 913, Sibolga 75592, Aceh', '1992-08-25 13:16:14', '2020-12-21 22:48:20'),
(89, 'Malika Susanti', 'Jr. Gading No. 778, Banjarmasin 64489, JaTim', '1976-07-12 16:56:12', '2020-12-21 22:48:20'),
(90, 'Olivia Laksmiwati', 'Gg. Bakhita No. 151, Mojokerto 59624, Maluku', '2005-10-23 12:17:41', '2020-12-21 22:48:20'),
(91, 'Nabila Utami', 'Kpg. Gatot Subroto No. 136, Padangsidempuan 18944, JaTeng', '2015-07-26 21:43:47', '2020-12-21 22:48:20'),
(92, 'Ciaobella Yuni Wulandari', 'Kpg. Bacang No. 38, Bukittinggi 41103, SulTra', '2019-05-09 08:42:36', '2020-12-21 22:48:20'),
(93, 'Yani Rahmawati', 'Kpg. M.T. Haryono No. 685, Bitung 65024, DKI', '1982-06-04 06:42:48', '2020-12-21 22:48:20'),
(94, 'Gina Wijayanti M.Kom.', 'Jr. Padang No. 196, Tanjungbalai 95275, Jambi', '1992-10-10 00:58:54', '2020-12-21 22:48:20'),
(95, 'Kardi Rajasa', 'Ki. Rumah Sakit No. 302, Palangka Raya 41029, SumUt', '2017-10-30 04:00:28', '2020-12-21 22:48:20'),
(96, 'Ayu Belinda Susanti M.Ak', 'Gg. Dr. Junjunan No. 514, Lhokseumawe 27050, Aceh', '1983-10-12 20:05:12', '2020-12-21 22:48:20'),
(97, 'Rusman Wage Latupono S.I.Kom', 'Ki. Ekonomi No. 581, Manado 29921, Gorontalo', '1980-12-15 21:27:26', '2020-12-21 22:48:20'),
(98, 'Silvia Ratna Hartati S.H.', 'Jln. Untung Suropati No. 200, Administrasi Jakarta Barat 65705, Bali', '1997-07-12 16:11:29', '2020-12-21 22:48:20'),
(99, 'Rizki Manullang', 'Gg. Nakula No. 184, Tegal 66681, DIY', '1997-08-28 15:00:39', '2020-12-21 22:48:20'),
(100, 'Sabrina Nabila Winarsih M.Pd', 'Psr. Rajiman No. 915, Yogyakarta 69077, SumBar', '1987-03-14 15:33:48', '2020-12-21 22:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `pansol`
--

CREATE TABLE `pansol` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `id_menu` varchar(100) NOT NULL,
  `sla` varchar(100) NOT NULL,
  `subcategory1` varchar(100) NOT NULL,
  `subcategory2` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pansol`
--

INSERT INTO `pansol` (`id`, `judul`, `slug`, `id_menu`, `sla`, `subcategory1`, `subcategory2`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Antrian Pengisian BBM di SPBU', 'antrian-pengisian-bbm-di-spbu', 'Menu_A_P1', '3x24 Jam', 'Layanan BBM', '', 'active', '2021-01-06 20:50:53', '2021-02-10 02:22:19'),
(2, 'Aturan Pengisian BBM untuk Pelayanan Umum, Usaha Mikro, Pertanian dan Perikanan', 'aturan-pengisian-bbm-untuk-pelayanan-umum-usaha-mikro-pertanian-dan-perikanan', 'Menu_A_P2', '1x24 Jam', 'Layanan BBM', '', 'active', '2021-01-06 21:08:01', '2021-02-10 02:23:19'),
(3, 'BBM Kaleng', 'bbm-kaleng', 'Menu_A_P3', '1x24 Jam', 'Layanan BBM', '', 'active', '2021-01-06 21:34:07', '2021-02-10 02:37:20'),
(4, 'Cara menjadi Mitra/Vendor Pertamina', 'cara-menjadi-mitravendor-pertamina', 'Menu_A_P4', '', 'Layanan BBM', '', 'active', '2021-01-06 21:48:05', '2021-01-06 21:48:05'),
(5, 'Card RFID tidak bisa digunakan untuk pembayaran di SPBU COCO', 'card-rfid-tidak-bisa-digunakan-untuk-pembayaran-di-spbu-coco', 'Menu_A_P5', '', 'Layanan BBM', '', 'active', '2021-01-06 21:51:25', '2021-01-06 21:51:25'),
(6, 'Delivery BBM', 'delivery-bbm', 'Menu_A_P6', '', 'Layanan BBM', '', 'active', '2021-01-06 21:53:41', '2021-01-06 21:53:41'),
(7, 'Delivery BBM - Cancel Order', 'delivery-bbm-cancel-order', 'Menu_A_P7', '', 'Layanan BBM', '', 'active', '2021-01-06 21:56:53', '2021-01-06 21:56:53'),
(8, 'Delivery BBM - Namun Diluar Area', 'delivery-bbm-namun-diluar-area', 'Menu_A_P8', '', 'Layanan BBM', '', 'active', '2021-01-06 22:01:52', '2021-01-06 22:01:52'),
(9, 'Delivery BBM (Program PDS)', 'delivery-bbm-program-pds', 'Menu_A_P9', '', 'Layanan BBM', '', 'active', '2021-01-06 22:06:32', '2021-01-06 22:06:32'),
(10, 'Double payment transaksi via Bank', 'double-payment-transaksi-via-bank', 'Menu_A_P10', '', 'Layanan BBM', '', 'active', '2021-01-06 22:09:05', '2021-01-06 22:09:05'),
(11, 'Fasilitas SPBU (Toilet, Mesin EDC, dll)', 'fasilitas-spbu-toilet-mesin-edc-dll', 'Menu_A_P11', '', 'Layanan BBM', '', 'active', '2021-01-06 22:11:41', '2021-01-06 22:11:41'),
(12, 'Harga BBM di SPBU belum Update', 'harga-bbm-di-spbu-belum-update', 'Menu_A_P12', '', 'Layanan BBM', '', 'active', '2021-01-06 22:15:57', '2021-01-06 22:15:57'),
(13, 'Indikasi Kecurangan SPBU', 'indikasi-kecurangan-spbu', 'Menu_A_P13', '', 'Layanan BBM', '', 'active', '2021-01-06 22:19:08', '2021-01-06 22:19:08'),
(14, 'Informasi Harga BBM', 'informasi-harga-bbm', 'Menu_A_P14', '', 'Layanan BBM', '', 'active', '2021-01-06 22:23:34', '2021-01-06 22:23:34'),
(15, 'Informasi Kebijakan SPBU', 'informasi-kebijakan-spbu', 'Menu_A_P15', '', 'Layanan BBM', '', 'active', '2021-01-06 22:29:29', '2021-01-06 22:29:29'),
(16, 'Informasi pembelian BBM subsidi', 'informasi-pembelian-bbm-subsidi', 'Menu_A_P16', '', 'Layanan BBM', '', 'active', '2021-01-06 22:31:56', '2021-01-06 22:31:56'),
(17, 'Informasi Stok BBM', 'informasi-stok-bbm', 'Menu_H_P2', '12 Jam', 'SPBU & Fuel Product', 'Dealership/Kemitraan', 'active', '2021-01-06 22:35:55', '2021-03-03 20:43:56'),
(18, 'Jam Layanan SPBU', 'jam-layanan-spbu', 'Menu_A_P18', '', 'Layanan BBM', '', 'active', '2021-01-06 22:38:53', '2021-01-06 22:38:53'),
(19, 'Kebijakan Pembayaran di SPBU', 'kebijakan-pembayaran-di-spbu', 'Menu_A_P19', '', 'Layanan BBM', '', 'active', '2021-01-06 22:43:39', '2021-01-06 22:43:39'),
(20, 'Kelangkaan BBM', 'kelangkaan-bbm', 'Menu_A_P20', '', 'Layanan BBM', '', 'active', '2021-01-06 22:45:36', '2021-01-06 22:45:36'),
(21, 'Keluhan Biaya Tambahan Pembelian BBM dengan Kartu Kredit', 'keluhan-biaya-tambahan-pembelian-bbm-dengan-kartu-kredit', 'Menu_A_P21', '', 'Layanan BBM', '', 'active', '2021-01-06 22:50:01', '2021-01-06 22:50:01'),
(22, 'Keluhan kualitas BBM', 'keluhan-kualitas-bbm', 'Menu_A_P22', '', 'Layanan BBM', '', 'active', '2021-01-07 00:16:19', '2021-01-07 00:16:19'),
(23, 'Keluhan Mobil Tangki (MT) Pertamina', 'keluhan-mobil-tangki-mt-pertamina', 'Menu_A_P23', '', 'Layanan BBM', '', 'active', '2021-01-07 00:18:33', '2021-01-07 00:18:33'),
(24, 'Kenaikan Harga BBM', 'kenaikan-harga-bbm', 'Menu_A_P24', '', 'Layanan BBM', '', 'active', '2021-01-07 00:21:04', '2021-01-07 00:21:04'),
(25, 'Kerjasama Pengadaan Voucher BBM', 'kerjasama-pengadaan-voucher-bbm', 'Menu_A_P25', '', 'Layanan BBM', '', 'active', '2021-01-07 00:24:40', '2021-01-07 00:24:40'),
(26, 'Kerjasama Untuk Promosi', 'kerjasama-untuk-promosi', 'Menu_A_P26', '1x24 Jam', 'Layanan BBM', '', 'active', '2021-01-07 00:26:33', '2021-03-02 07:04:10'),
(27, 'Keterlambatan Pengiriman Stock', 'keterlambatan-pengiriman-stock', 'Menu_A_P27', '', 'Layanan BBM', '', 'active', '2021-01-07 00:28:26', '2021-01-07 00:28:26'),
(28, 'Keunggulan Produk BBM Pertamina', 'keunggulan-produk-bbm-pertamina', 'Menu_A_P28', '', 'Layanan BBM', '', 'active', '2021-01-07 00:31:13', '2021-01-07 00:31:13'),
(29, 'Knowledge Petugas SPBU', 'knowledge-petugas-spbu', 'Menu_A_P29', '', 'Layanan BBM', '', 'active', '2021-01-07 00:33:50', '2021-01-07 00:33:50'),
(30, 'Kualitas atau Standar Struk', 'kualitas-atau-standar-struk', 'Menu_A_P30', '', 'Layanan BBM', '', 'active', '2021-01-07 00:37:25', '2021-01-07 00:37:25'),
(31, 'Laporan Stock BBM', 'laporan-stock-bbm', 'Menu_A_P31', '', 'Layanan BBM', '', 'active', '2021-01-07 00:39:19', '2021-01-07 00:39:19'),
(32, 'List SPBU BBM Kemasan/PDS', 'list-spbu-bbm-kemasanpds', 'Menu_A_P32', '', 'Layanan BBM', '', 'active', '2021-01-07 00:43:57', '2021-01-07 00:43:57'),
(33, 'Lokasi SPBU COCO Terdekat', 'lokasi-spbu-coco-terdekat', 'Menu_A_P33', '', 'Layanan BBM', '', 'active', '2021-01-07 00:48:03', '2021-01-07 00:48:03'),
(34, 'Lokasi SPBU dan Jenis Produk yang dijual', 'lokasi-spbu-dan-jenis-produk-yang-dijual', 'Menu_A_P34', '', 'Layanan BBM', '', 'active', '2021-01-07 00:51:15', '2021-01-07 00:51:15'),
(35, 'Lokasi SPBU Terdekat', 'lokasi-spbu-terdekat', 'Menu_A_P35', '', 'Layanan BBM', '', 'active', '2021-01-07 00:53:33', '2021-01-07 00:53:33'),
(36, 'Lokasi SPBU yang menyediakan produk non BBM', 'lokasi-spbu-yang-menyediakan-produk-non-bbm', 'Menu_A_P36', '', 'Layanan BBM', '', 'active', '2021-01-07 00:55:40', '2021-01-07 00:55:40'),
(37, 'Masukan agar Pertamina lebih gencar untuk menggunakan BBM non subsidi', 'masukan-agar-pertamina-lebih-gencar-untuk-menggunakan-bbm-non-subsidi', 'Menu_A_P37', '', 'Layanan BBM', '', 'active', '2021-01-07 01:03:11', '2021-01-07 01:03:11'),
(38, 'Menanyakan Penurunan status SPBU Pasti Pas', 'menanyakan-penurunan-status-spbu-pasti-pas', 'Menu_A_P38', '', 'Layanan BBM', '', 'active', '2021-01-07 01:08:56', '2021-01-07 01:08:56'),
(40, 'MSDS Produk BBM', 'msds-produk-bbm', 'Menu_A_P40', '', 'Layanan BBM', '', 'active', '2021-01-07 01:12:46', '2021-01-07 01:12:46'),
(41, 'Pelayanan Petugas SPBU', 'pelayanan-petugas-spbu', 'Menu_A_P41', '', 'Layanan BBM', '', 'active', '2021-01-07 01:14:31', '2021-01-07 01:14:31'),
(42, 'Pembatasan Pembelian BBM (Non subsidi)', 'pembatasan-pembelian-bbm-non-subsidi', 'Menu_A_P42', '', 'Layanan BBM', '', 'active', '2021-01-07 01:17:15', '2021-01-07 01:17:15'),
(43, 'Pembatasan Pembelian BBM Subsidi', 'pembatasan-pembelian-bbm-subsidi', 'Menu_A_P43', '', 'Layanan BBM', '', 'active', '2021-01-07 01:20:09', '2021-01-07 01:20:09'),
(44, 'Pengaturan Antrian di SPBU', 'pengaturan-antrian-di-spbu', 'Menu_A_P44', '', 'Layanan BBM', '', 'active', '2021-01-07 01:22:11', '2021-01-07 01:22:11'),
(45, 'Penggunaan Kelengkapan operator SPBU', 'penggunaan-kelengkapan-operator-spbu', 'Menu_A_P45', '', 'Layanan BBM', '', 'active', '2021-01-07 01:24:50', '2021-01-07 01:24:50'),
(46, 'Pengiriman Stock', 'pengiriman-stock', 'Menu_A_P46', '', 'Layanan BBM', '', 'active', '2021-01-07 01:26:40', '2021-01-07 01:26:40'),
(47, 'Pengisian BBM Luber', 'pengisian-bbm-luber', 'Menu_A_P47', '', 'Layanan BBM', '', 'active', '2021-01-07 01:28:41', '2021-01-07 01:28:41'),
(48, 'Penyalahgunaan BBM Subsidi', 'penyalahgunaan-bbm-subsidi', 'Menu_A_P48', '', 'Layanan BBM', '', 'active', '2021-01-07 01:33:43', '2021-01-07 01:33:43'),
(49, 'Permintaan data realisasi/penjualan BBM', 'permintaan-data-realisasipenjualan-bbm', 'Menu_A_P49', '', 'Layanan BBM', '', 'active', '2021-01-07 01:35:06', '2021-01-07 01:35:06'),
(50, 'Permohonan RFID', 'permohonan-rfid', 'Menu_A_P50', '', 'Layanan BBM', '', 'active', '2021-01-07 01:36:29', '2021-01-07 01:36:29'),
(51, 'Personil SPBU merokok atau menelepon', 'personil-spbu-merokok-atau-menelepon', 'Menu_A_P51', '', 'Layanan BBM', '', 'active', '2021-01-07 01:38:27', '2021-01-07 01:38:27'),
(52, 'Pertamina Lebih Gencar BBM Non Subsidi', 'pertamina-lebih-gencar-bbm-non-subsidi', 'Menu_A_P52', '', 'Layanan BBM', '', 'active', '2021-01-07 01:40:12', '2021-01-07 01:40:12'),
(53, 'Pertamini', 'pertamini', 'Menu_A_P53', '', 'Layanan BBM', '', 'active', '2021-01-07 01:41:00', '2021-01-07 01:41:00'),
(54, 'Pertashop', 'pertashop', 'Menu_A_P54', '', 'Layanan BBM', '', 'active', '2021-01-07 01:42:15', '2021-01-07 01:42:15'),
(55, 'Petugas Tidak Ramah', 'petugas-tidak-ramah', 'Menu_A_P55', '', 'Layanan BBM', '', 'active', '2021-01-07 01:43:48', '2021-01-07 01:43:48'),
(56, 'Petugas Tidak Teliti', 'petugas-tidak-teliti', 'Menu_A_P56', '', 'Layanan BBM', '', 'active', '2021-01-07 01:46:24', '2021-01-07 01:46:24'),
(57, 'PIC / Alamat / Telepon SPBU', 'pic-alamat-telepon-spbu', 'Menu_A_P57', '', 'Layanan BBM', '', 'active', '2021-01-07 01:48:03', '2021-01-07 01:48:03'),
(58, 'Produk yang diterima tidak sesuai', 'produk-yang-diterima-tidak-sesuai', 'Menu_A_P58', '', 'Layanan BBM', '', 'active', '2021-01-07 01:48:54', '2021-01-07 01:48:54'),
(59, 'Promo di SPBU COCO', 'promo-di-spbu-coco', 'Menu_A_P59', '', 'Layanan BBM', '', 'active', '2021-01-07 01:50:53', '2021-01-07 01:50:53'),
(60, 'Promo SPBU', 'promo-spbu', 'Menu_A_P60', '', 'Layanan BBM', '', 'active', '2021-01-07 01:51:47', '2021-01-07 01:51:47'),
(61, 'Prosedur menjadi mitra (SPBU, APMS atau lembaga penyalur lainnya)', 'prosedur-menjadi-mitra-spbu-apms-atau-lembaga-penyalur-lainnya', 'Menu_A_P61', '', 'Layanan BBM', '', 'active', '2021-01-07 01:54:00', '2021-01-07 01:54:00'),
(62, 'SPBU menyediakan uang kembalian recehan logam', 'spbu-menyediakan-uang-kembalian-recehan-logam', 'Menu_A_P62', '', 'Layanan BBM', '', 'active', '2021-01-07 01:56:12', '2021-01-07 01:56:12'),
(63, 'Spesifikasi Produk BBM', 'spesifikasi-produk-bbm', 'Menu_A_P63', '', 'Layanan BBM', '', 'active', '2021-01-07 01:57:28', '2021-01-07 01:57:28'),
(64, 'Struk Tidak Tersedia', 'struk-tidak-tersedia', 'Menu_A_P64', '', 'Layanan BBM', '', 'active', '2021-01-07 01:58:29', '2021-01-07 01:58:29'),
(65, 'Syarat dan Ketentuan RFID', 'syarat-dan-ketentuan-rfid', 'Menu_A_P65', '', 'Layanan BBM', '', 'active', '2021-01-07 02:02:31', '2021-01-07 02:02:31'),
(66, 'Tagihan Tidak Sesuai Mesin Pengisian', 'tagihan-tidak-sesuai-mesin-pengisian', 'Menu_A_P66', '', 'Layanan BBM', '', 'active', '2021-01-07 02:04:44', '2021-01-07 02:04:44'),
(67, 'Takaran Tidak Sesuai', 'takaran-tidak-sesuai', 'Menu_A_P67', '', 'Layanan BBM', '', 'active', '2021-01-07 02:05:27', '2021-01-07 02:05:27'),
(68, 'Uang Kembalian', 'uang-kembalian', 'Menu_A_P68', '', 'Layanan BBM', '', 'active', '2021-01-07 02:06:40', '2021-01-07 02:06:40'),
(69, 'Agen/Pangkalan LPG Membanting Tabung', 'agenpangkalan-lpg-membanting-tabung', 'Menu_B_P1', '', 'Layanan Domgas', '', 'active', '2021-01-10 19:06:36', '2021-01-10 19:06:36'),
(70, 'Antrian Pembelian', 'antrian-pembelian', 'Menu_B_P2', '', 'Layanan Domgas', '', 'active', '2021-01-10 19:12:18', '2021-01-10 19:12:18'),
(71, 'Belum mendapatkan Paket konversi', 'belum-mendapatkan-paket-konversi', 'Menu_B_P3', '', 'Layanan Domgas', '', 'active', '2021-01-10 19:25:39', '2021-01-10 19:25:39'),
(72, 'Bentuk valve LPG diubah menjadi seperti Produk Blue Gas krn dirasa lebih aman', 'bentuk-valve-lpg-diubah-menjadi-seperti-produk-blue-gas-krn-dirasa-lebih-aman', 'Menu_B_P4', '', 'Layanan Domgas', '', 'active', '2021-01-10 19:32:16', '2021-01-10 19:32:16'),
(73, 'Cara Penanganan Kebocoran LPG', 'cara-penanganan-kebocoran-lpg', 'Menu_B_P5', '', 'Layanan Domgas', '', 'active', '2021-01-10 19:38:30', '2021-01-10 19:38:30'),
(74, 'Dealership/ Stok LPG', 'dealership-stok-lpg', 'Menu_B_P6', '', 'Layanan Domgas', '', 'active', '2021-01-10 19:44:34', '2021-01-10 19:44:34'),
(75, 'Delivery LPG - Cancel Order', 'delivery-lpg-cancel-order', 'Menu_B_P7', '', 'Layanan Domgas', '', 'active', '2021-01-10 19:52:28', '2021-01-10 19:52:28'),
(76, 'Delivery LPG - Namun Diluar Area', 'delivery-lpg-namun-diluar-area', 'Menu_B_P8', '', 'Layanan Domgas', '', 'active', '2021-01-10 19:58:06', '2021-01-10 19:58:06'),
(77, 'Delivery Promo Domestic Gas', 'delivery-promo-domestic-gas', 'Menu_B_P9', '', 'Layanan Domgas', '', 'active', '2021-01-10 20:05:23', '2021-01-10 20:05:23'),
(78, 'Dugaan Lokasi Oplos LPG', 'dugaan-lokasi-oplos-lpg', 'Menu_B_P10', '', 'Layanan Domgas', '', 'active', '2021-01-10 20:11:01', '2021-01-10 20:11:01'),
(79, 'Harga LPG belum terupdate pada barcode', 'harga-lpg-belum-terupdate-pada-barcode', 'Menu_B_P11', '', 'Layanan Domgas', '', 'active', '2021-01-10 20:17:43', '2021-01-10 20:17:43'),
(80, 'Indikasi Kecurangan LPG', 'indikasi-kecurangan-lpg', 'Menu_B_P12', '', 'Layanan Domgas', '', 'active', '2021-01-10 20:27:48', '2021-01-10 20:27:48'),
(81, 'Indikasi penyalahgunaan LPG di SPBU/Bright store', 'indikasi-penyalahgunaan-lpg-di-spbubright-store', 'Menu_B_P13', '', 'Layanan Domgas', '', 'active', '2021-01-10 20:38:04', '2021-01-10 20:38:04'),
(82, 'Kebocoran LPG', 'kebocoran-lpg', 'Menu_B_P14', '', 'Layanan Domgas', '', 'active', '2021-01-10 20:44:55', '2021-01-10 20:44:55'),
(83, 'Kelangkaan Domgas', 'kelangkaan-domgas', 'Menu_B_P15', '', 'Layanan Domgas', '', 'active', '2021-01-10 20:52:20', '2021-01-10 20:52:20'),
(84, 'Kelangkaan LPG', 'kelangkaan-lpg', 'Menu_B_P16', '', 'Layanan Domgas', '', 'active', '2021-01-10 20:56:24', '2021-01-10 20:56:24'),
(85, 'Keluhan Bright Gas dan EASE Gas', 'keluhan-bright-gas-dan-ease-gas', 'Menu_B_P17', '', 'Layanan Domgas', '', 'active', '2021-01-10 21:04:41', '2021-01-10 21:04:41'),
(86, 'Keluhan Delivery LPG', 'keluhan-delivery-lpg', 'Menu_B_P18', '', 'Layanan Domgas', '', 'active', '2021-01-10 21:10:37', '2021-01-10 21:10:37'),
(87, 'Keluhan Harga LPG, Bright Gas, EASE Gas', 'keluhan-harga-lpg-bright-gas-ease-gas', 'Menu_B_P19', '', 'Layanan Domgas', '', 'active', '2021-01-10 21:20:12', '2021-01-10 21:20:12'),
(88, 'Keluhan kualitas LPG di SPBU/Bright store', 'keluhan-kualitas-lpg-di-spbubright-store', 'Menu_B_P20', '', 'Layanan Domgas', '', 'active', '2021-01-10 21:27:59', '2021-01-10 21:27:59'),
(89, 'Keluhan Mobil Tangki LPG', 'keluhan-mobil-tangki-lpg', 'Menu_B_P21', '', 'Layanan Domgas', '', 'active', '2021-01-10 21:33:40', '2021-01-10 21:33:40'),
(90, 'Keluhan Promo LPG', 'keluhan-promo-lpg', 'Menu_B_P22', '', 'Layanan Domgas', '', 'active', '2021-01-10 21:43:56', '2021-01-10 21:43:56'),
(91, 'Keluhan Transaksi menggunakan mesin EDC', 'keluhan-transaksi-menggunakan-mesin-edc', 'Menu_B_P23', '', 'Layanan Domgas', '', 'active', '2021-01-10 21:51:17', '2021-01-10 21:51:17'),
(92, 'Keluhan Vigas dan BBG', 'keluhan-vigas-dan-bbg', 'Menu_B_P24', '', 'Layanan Domgas', '', 'active', '2021-01-10 22:00:13', '2021-01-10 22:00:13'),
(93, 'Kenaikan Harga', 'kenaikan-harga', 'Menu_B_P25', '', 'Layanan Domgas', '', 'active', '2021-01-10 22:05:29', '2021-01-10 22:05:29'),
(94, 'Kenaikan Harga Domgas', 'kenaikan-harga-domgas', 'Menu_B_P26', '', 'Layanan Domgas', '', 'active', '2021-01-10 22:10:51', '2021-01-10 22:10:51'),
(95, 'Kerjasama pengadaan event terkait LPG', 'kerjasama-pengadaan-event-terkait-lpg', 'Menu_B_P27', '', 'Layanan Domgas', '', 'active', '2021-01-10 22:19:27', '2021-01-10 22:19:27'),
(96, 'Kerjasama untuk penjualan LPG', 'kerjasama-untuk-penjualan-lpg', 'Menu_B_P28', '', 'Layanan Domgas', '', 'active', '2021-01-10 22:24:44', '2021-01-10 22:24:44'),
(97, 'Kesulitan Mendapatkan LPG', 'kesulitan-mendapatkan-lpg', 'Menu_B_P29', '', 'Layanan Domgas', '', 'active', '2021-01-10 22:30:53', '2021-01-10 22:30:53'),
(98, 'Ketersediaan LPG di SPBU/Bright Store', 'ketersediaan-lpg-di-spbubright-store', 'Menu_B_P30', '', 'Layanan Domgas', '', 'active', '2021-01-10 22:37:25', '2021-01-10 22:37:25'),
(99, 'Komplain Jaringan Pipa Gas Tanam', 'komplain-jaringan-pipa-gas-tanam', 'Menu_B_P31', '', 'Layanan Domgas', '', 'active', '2021-01-10 22:43:34', '2021-01-10 22:43:34'),
(100, 'Konversi LPG', 'konversi-lpg', 'Menu_B_P32', '', 'Layanan Domgas', '', 'active', '2021-01-10 22:47:10', '2021-01-10 22:47:10'),
(101, 'Kualitas Karet Seal', 'kualitas-karet-seal', 'Menu_B_P33', '', 'Layanan Domgas', '', 'active', '2021-01-11 00:36:04', '2021-01-11 00:36:04'),
(102, 'Laporan Kecelakaan dan Permintaan Santunan', 'laporan-kecelakaan-dan-permintaan-santunan', 'Menu_B_P34', '', 'Layanan Domgas', '', 'active', '2021-01-11 00:39:43', '2021-01-11 00:39:43'),
(103, 'Laporan Stock', 'laporan-stock', 'Menu_B_P35', '', 'Layanan Domgas', '', 'active', '2021-01-11 00:45:26', '2021-01-11 00:45:26'),
(104, 'Laporan Stock dari Agen', 'laporan-stock-dari-agen', 'Menu_B_P36', '', 'Layanan Domgas', '', 'active', '2021-01-11 00:49:36', '2021-01-11 00:49:36'),
(105, 'LPG menyediakan uang kembalian recehan logam', 'lpg-menyediakan-uang-kembalian-recehan-logam', 'Menu_B_P37', '', 'Layanan Domgas', '', 'active', '2021-01-11 00:54:47', '2021-01-11 00:54:47'),
(106, 'LPG tidak melayani penjualan selama 24 jam', 'lpg-tidak-melayani-penjualan-selama-24-jam', 'Menu_B_P38', '', 'Layanan Domgas', '', 'active', '2021-01-11 01:05:43', '2021-01-11 01:05:43'),
(107, 'lsi gas LPG kurang', 'lsi-gas-lpg-kurang', 'Menu_B_P39', '', 'Layanan Domgas', '', 'active', '2021-01-11 01:10:54', '2021-01-11 01:10:54'),
(108, 'Masukan agar Pertamina Retail lebih gencar untuk promosi Pembelian LPG di SPBU/Bright', 'masukan-agar-pertamina-retail-lebih-gencar-untuk-promosi-pembelian-lpg-di-spbubright', 'Menu_B_P40', '', 'Layanan Domgas', '', 'active', '2021-01-11 01:21:23', '2021-01-11 01:21:23'),
(109, 'Menanyakan harga/stock LPG', 'menanyakan-hargastock-lpg', 'Menu_B_P41', '', 'Layanan Domgas', '', 'active', '2021-01-11 01:25:43', '2021-01-11 01:25:43'),
(110, 'Menanyakan paket konversi Vigas + bengkel', 'menanyakan-paket-konversi-vigas-bengkel', 'Menu_B_P42', '', 'Layanan Domgas', '', 'active', '2021-01-11 01:31:34', '2021-01-11 01:31:34'),
(111, 'Menanyakan Prosedur Menjadi Mitra', 'menanyakan-prosedur-menjadi-mitra', 'Menu_B_P43', '', 'Layanan Domgas', '', 'active', '2021-01-11 01:39:09', '2021-01-11 01:39:09'),
(112, 'Mendahulukan Pembayaran Pada Kenalan', 'mendahulukan-pembayaran-pada-kenalan', 'Menu_B_P44', '', 'Layanan Domgas', '', 'active', '2021-01-11 01:46:02', '2021-01-11 01:46:02'),
(113, 'Minta Asistensi Pemasangan LPG', 'minta-asistensi-pemasangan-lpg', 'Menu_B_P45', '', 'Layanan Domgas', '', 'active', '2021-01-11 01:51:55', '2021-01-11 01:51:55'),
(114, 'Paket Konversi Vigas + Bengkel', 'paket-konversi-vigas-bengkel', 'Menu_B_P46', '', 'Layanan Domgas', '', 'active', '2021-01-11 01:56:21', '2021-01-11 01:56:21'),
(115, 'Pelayanan Petugas LPG', 'pelayanan-petugas-lpg', 'Menu_B_P47', '', 'Layanan Domgas', '', 'active', '2021-01-11 02:01:17', '2021-01-11 02:01:17'),
(116, 'Pengaturan antrian konsumen pembelian LPG', 'pengaturan-antrian-konsumen-pembelian-lpg', 'Menu_B_P48', '', 'Layanan Domgas', '', 'active', '2021-01-11 02:10:35', '2021-01-11 02:10:35'),
(117, 'Penggunan seragam lengkap bagi penjaga toko', 'penggunan-seragam-lengkap-bagi-penjaga-toko', 'Menu_B_P49', '', 'Layanan Domgas', '', 'active', '2021-01-11 02:16:14', '2021-01-11 02:16:14'),
(118, 'Penipuan', 'penipuan', 'Menu_B_P50', '', 'Layanan Domgas', '', 'active', '2021-01-11 02:21:31', '2021-01-11 02:21:31'),
(119, 'Perang Harga antar Agen', 'perang-harga-antar-agen', 'Menu_B_P51', '', 'Layanan Domgas', '', 'active', '2021-01-11 02:27:01', '2021-01-11 02:27:01'),
(120, 'Permintaan data LPG di SPBU/Bright store', 'permintaan-data-lpg-di-spbubright-store', 'Menu_B_P52', '', 'Layanan Domgas', '', 'active', '2021-01-11 02:37:16', '2021-01-11 02:37:16'),
(121, 'Permintaan Delivery LPG', 'permintaan-delivery-lpg', 'Menu_B_P53', '', 'Layanan Domgas', '', 'active', '2021-01-11 02:41:56', '2021-01-11 02:41:56'),
(122, 'Personil LPG tidak memberikan senyum, salam, sapa', 'personil-lpg-tidak-memberikan-senyum-salam-sapa', 'Menu_B_P54', '', 'Layanan Domgas', '', 'active', '2021-01-11 02:47:13', '2021-01-11 02:47:13'),
(123, 'Petugas LPG merokok di SPBU', 'petugas-lpg-merokok-di-spbu', 'Menu_B_P55', '', 'Layanan Domgas', '', 'active', '2021-01-11 02:51:26', '2021-01-11 02:51:26'),
(124, 'Petugas Menjual Regulator yang mengaku dari Pertamina', 'petugas-menjual-regulator-yang-mengaku-dari-pertamina', 'Menu_B_P56', '', 'Layanan Domgas', '', 'active', '2021-01-11 02:57:50', '2021-01-11 02:57:50'),
(125, 'PIC/Alamat/Tlp', 'picalamattlp', 'Menu_B_P57', '', 'Layanan Domgas', '', 'active', '2021-01-11 03:05:00', '2021-01-11 03:05:00'),
(126, 'Promo Nasional Domestic Gas', 'promo-nasional-domestic-gas', 'Menu_B_P58', '', 'Layanan Domgas', '', 'active', '2021-01-11 03:10:06', '2021-01-11 03:10:06'),
(127, 'Promo Regional Domestic Gas', 'promo-regional-domestic-gas', 'Menu_B_P59', '', 'Layanan Domgas', '', 'active', '2021-01-11 03:14:33', '2021-01-11 03:14:33'),
(128, 'Prosedur Menjadi Agen / Pangkalan LPG', 'prosedur-menjadi-agen-pangkalan-lpg', 'Menu_B_P60', '', 'Layanan Domgas', '', 'active', '2021-01-11 03:20:40', '2021-01-11 03:20:40'),
(129, 'Prosedur Menjadi Agen LPG', 'prosedur-menjadi-agen-lpg', 'Menu_B_P61', '', 'Layanan Domgas', '', 'active', '2021-01-11 03:24:49', '2021-01-11 03:24:49'),
(130, 'Prosedur Pendirian SPB Vi-Gas', 'prosedur-pendirian-spb-vi-gas', 'Menu_B_P62', '', 'Layanan Domgas', '', 'active', '2021-01-11 03:28:04', '2021-01-11 03:28:04'),
(131, 'Prosedur Pendirian SPPBE', 'prosedur-pendirian-sppbe', 'Menu_B_P63', '', 'Layanan Domgas', '', 'active', '2021-01-11 03:32:29', '2021-01-11 03:32:29'),
(132, 'Takaran LPG', 'takaran-lpg', 'Menu_B_P64', '', 'Layanan Domgas', '', 'active', '2021-01-11 03:36:45', '2021-01-11 03:36:45'),
(133, 'Valve LPG diubah menjadi seperti Blue Gas', 'valve-lpg-diubah-menjadi-seperti-blue-gas', 'Menu_B_P65', '', 'Layanan Domgas', '', 'active', '2021-01-11 03:40:49', '2021-01-11 03:40:49'),
(134, 'Aplikasi MyPertamina tidak dapat diakses', 'aplikasi-mypertamina-tidak-dapat-diakses', 'Menu_C_P1', '', 'MyPertamina', '', 'active', '2021-01-11 18:59:45', '2021-01-11 18:59:45'),
(135, 'Aplikasi tidak bisa dibuka setelah update di iOS', 'aplikasi-tidak-bisa-dibuka-setelah-update-di-ios', 'Menu_C_P2', '', 'MyPertamina', '', 'active', '2021-01-11 19:00:12', '2021-01-11 19:00:12'),
(136, 'Cara Daftar Program BEP', 'cara-daftar-program-bep', 'Menu_C_P3', '', 'MyPertamina', '', 'active', '2021-01-11 19:04:39', '2021-01-11 19:04:39'),
(137, 'Cara Migrasi LinkAja', 'cara-migrasi-linkaja', 'Menu_C_P4', '', 'MyPertamina', '', 'active', '2021-01-11 19:08:54', '2021-01-11 19:08:54'),
(138, 'Cara Top Up Saldo LinkAja', 'cara-top-up-saldo-linkaja', 'Menu_C_P5', '', 'MyPertamina', '', 'active', '2021-01-11 19:12:38', '2021-01-11 19:12:38'),
(139, 'Cara Tukar Point LinkAja', 'cara-tukar-point-linkaja', 'Menu_C_P6', '', 'MyPertamina', '', 'active', '2021-01-11 19:16:22', '2021-01-11 19:16:22'),
(140, 'Cara Upgrade Akun', 'cara-upgrade-akun', 'Menu_C_P7', '', 'MyPertamina', '', 'active', '2021-01-11 19:26:16', '2021-01-11 19:26:16'),
(141, 'Double Payment MyPertamina', 'double-payment-mypertamina', 'Menu_C_P8', '', 'MyPertamina', '', 'active', '2021-01-11 19:30:07', '2021-01-11 19:30:07'),
(142, 'Hadiah Belum Diterima', 'hadiah-belum-diterima', 'Menu_C_P9', '', 'MyPertamina', '', 'active', '2021-01-11 19:36:08', '2021-01-11 19:36:08'),
(143, 'Informasi Penggunaan Layanan Mypertamina', 'informasi-penggunaan-layanan-mypertamina', 'Menu_C_P10', '', 'MyPertamina', '', 'active', '2021-01-11 19:44:23', '2021-01-11 19:44:23'),
(144, 'Informasi SPBU MyPertamina', 'informasi-spbu-mypertamina', 'Menu_C_P11', '', 'MyPertamina', '', 'active', '2021-01-11 19:49:53', '2021-01-11 19:49:53'),
(145, 'Keamanan Transaksi Digital di SPBU', 'keamanan-transaksi-digital-di-spbu', 'Menu_C_P12', '', 'MyPertamina', '', 'active', '2021-01-11 19:59:37', '2021-01-11 19:59:37'),
(146, 'Kendala kode OTP tidak terisi atau salah', 'kendala-kode-otp-tidak-terisi-atau-salah', 'Menu_C_P13', '', 'MyPertamina', '', 'active', '2021-01-11 20:04:08', '2021-01-11 20:04:08'),
(147, 'MyPertamina Cara Registrasi', 'mypertamina-cara-registrasi', 'Menu_C_P14', '', 'MyPertamina', '', 'active', '2021-01-11 20:09:28', '2021-01-11 20:09:28'),
(148, 'MyPertamina Cara Tukar Point', 'mypertamina-cara-tukar-point', 'Menu_C_P15', '', 'MyPertamina', '', 'active', '2021-01-11 20:18:34', '2021-01-11 20:18:34'),
(149, 'MyPertamina Error Message', 'mypertamina-error-message', 'Menu_C_P16', '', 'MyPertamina', '', 'active', '2021-01-11 20:27:10', '2021-01-11 20:27:10'),
(150, 'MyPertamina For Business', 'mypertamina-for-business', 'Menu_C_P17', '', 'MyPertamina', '', 'active', '2021-01-11 20:31:06', '2021-01-11 20:31:06'),
(151, 'MyPertamina Gagal Login', 'mypertamina-gagal-login', 'Menu_C_P18', '', 'MyPertamina', '', 'active', '2021-01-11 20:37:00', '2021-01-11 20:37:00'),
(152, 'MyPertamina Keluhan Tukar Point', 'mypertamina-keluhan-tukar-point', 'Menu_C_P19', '', 'MyPertamina', '', 'active', '2021-01-11 20:41:42', '2021-01-11 20:41:42'),
(153, 'MyPertamina Kendala Mengubah Profile', 'mypertamina-kendala-mengubah-profile', 'Menu_C_P20', '', 'MyPertamina', '', 'active', '2021-01-11 20:49:31', '2021-01-11 20:49:31'),
(154, 'MyPertamina Kendala Transaksi', 'mypertamina-kendala-transaksi', 'Menu_C_P21', '', 'MyPertamina', '', 'active', '2021-01-11 20:54:17', '2021-01-11 20:54:17'),
(155, 'MyPertamina Kendala Transaksi - Riwayat Transaksi Tidak Muncul', 'mypertamina-kendala-transaksi-riwayat-transaksi-tidak-muncul', 'Menu_C_P22', '', 'MyPertamina', '', 'active', '2021-01-11 21:03:12', '2021-01-11 21:03:12'),
(156, 'MyPertamina Lupa Nomor PIN', 'mypertamina-lupa-nomor-pin', 'Menu_C_P23', '', 'MyPertamina', '', 'active', '2021-01-11 21:08:06', '2021-01-11 21:08:06'),
(157, 'MyPertamina OTP Tidak Masuk', 'mypertamina-otp-tidak-masuk', 'Menu_C_P24', '', 'MyPertamina', '', 'active', '2021-01-11 21:13:49', '2021-01-11 21:13:49'),
(158, 'MyPertamina Salah / Lupa PIN', 'mypertamina-salah-lupa-pin', 'Menu_C_P25', '', 'MyPertamina', '', 'active', '2021-01-11 21:19:15', '2021-01-11 21:19:15'),
(159, 'MyPertamina Tidak Mendapatkan Kupon', 'mypertamina-tidak-mendapatkan-kupon', 'Menu_C_P26', '', 'MyPertamina', '', 'active', '2021-01-11 21:23:55', '2021-01-11 21:23:55'),
(160, 'MyPertamina Tidak Mendapatkan Poin', 'mypertamina-tidak-mendapatkan-poin', 'Menu_C_P27', '', 'MyPertamina', '', 'active', '2021-01-11 21:28:53', '2021-01-11 21:28:53'),
(161, 'Penipuan MyPertamina', 'penipuan-mypertamina', 'Menu_C_P28', '', 'MyPertamina', '', 'active', '2021-01-11 21:35:31', '2021-01-11 21:35:31'),
(162, 'Permintaan Blokir Nomor', 'permintaan-blokir-nomor', 'Menu_C_P29', '', 'MyPertamina', '', 'active', '2021-01-11 21:39:46', '2021-01-11 21:39:46'),
(163, 'Poin sudah berkurang voucher/merchandise belum didapatkan', 'poin-sudah-berkurang-vouchermerchandise-belum-didapatkan', 'Menu_C_P30', '', 'MyPertamina', '', 'active', '2021-01-11 21:45:32', '2021-01-11 21:45:32'),
(164, 'Promo MyPertamina (Complaint)', 'promo-mypertamina-complaint', 'Menu_C_P31', '', 'MyPertamina', '', 'active', '2021-01-11 21:58:13', '2021-01-11 21:58:13'),
(165, 'Promo MyPertamina (Information)', 'promo-mypertamina-information', 'Menu_C_P32', '', 'MyPertamina', '', 'active', '2021-01-11 22:02:54', '2021-01-11 22:02:54'),
(166, 'Redeem dengan Voucher Saphire Lounge Blue Sky Voucher', 'redeem-dengan-voucher-saphire-lounge-blue-sky-voucher', 'Menu_C_P33', '', 'MyPertamina', '', 'active', '2021-01-11 22:06:52', '2021-01-11 22:06:52'),
(167, 'Saldo tidak bertambah LinkAja', 'saldo-tidak-bertambah-linkaja', 'Menu_C_P34', '', 'MyPertamina', '', 'active', '2021-01-11 22:12:03', '2021-01-11 22:12:03'),
(168, 'Tahapan Aktivasi LinkAja pada Aplikasi MyPertamina', 'tahapan-aktivasi-linkaja-pada-aplikasi-mypertamina', 'Menu_C_P35', '', 'MyPertamina', '', 'active', '2021-01-11 22:16:01', '2021-01-11 22:16:01'),
(169, 'Tidak bisa menggunakan layanan LinkAja', 'tidak-bisa-menggunakan-layanan-linkaja', 'Menu_C_P36', '', 'MyPertamina', '', 'active', '2021-01-11 22:22:34', '2021-01-11 22:22:34'),
(170, 'Tidak bisa migrasi LinkAja', 'tidak-bisa-migrasi-linkaja', 'Menu_C_P37', '', 'MyPertamina', '', 'active', '2021-01-11 22:27:10', '2021-01-11 22:27:10'),
(171, 'Aplikasi POT aplikasi lama', 'aplikasi-pot-aplikasi-lama', 'Menu_D_P1', '', 'SPBU', '', 'active', '2021-01-12 00:24:14', '2021-01-12 00:24:14'),
(172, 'Cara manambah nomer telpon pada struk EDC', 'cara-manambah-nomer-telpon-pada-struk-edc', 'Menu_D_P2', '', 'SPBU', '', 'active', '2021-01-12 00:39:11', '2021-01-12 00:39:11'),
(173, 'Cara Manualkan Pompa', 'cara-manualkan-pompa', 'Menu_D_P3', '', 'SPBU', '', 'active', '2021-01-12 00:45:41', '2021-01-12 00:45:41'),
(174, 'Cara Restart PC POS', 'cara-restart-pc-pos', 'Menu_D_P4', '', 'SPBU', '', 'active', '2021-01-12 00:51:03', '2021-01-12 00:51:03'),
(175, 'Case EDC tidak connect seperti digambar dan sudah mengikuti manual quick guide masih belum bisa', 'case-edc-tidak-connect-seperti-digambar-dan-sudah-mengikuti-manual-quick-guide-masih-belum-bisa', 'Menu_D_P5', '', 'SPBU', '', 'active', '2021-01-12 00:57:12', '2021-01-12 00:57:12'),
(176, 'Case GSMS selalu loading dan GSMS blank', 'case-gsms-selalu-loading-dan-gsms-blank', 'Menu_D_P6', '', 'SPBU', '', 'active', '2021-01-12 01:05:24', '2021-01-12 01:05:24'),
(177, 'Case Nama PC POS salah, seharusnya 34-15123', 'case-nama-pc-pos-salah-seharusnya-34-15123', 'Menu_D_P7', '', 'SPBU', '', 'active', '2021-01-12 01:11:07', '2021-01-12 01:11:07'),
(178, 'Case Semua Dispenser tidak bisa reset nol', 'case-semua-dispenser-tidak-bisa-reset-nol', 'Menu_D_P8', '', 'SPBU', '', 'active', '2021-01-12 01:18:21', '2021-01-12 01:18:21'),
(179, 'Case Settlement Shift', 'case-settlement-shift', 'Menu_D_P9', '', 'SPBU', '', 'active', '2021-01-12 01:22:52', '2021-01-12 01:22:52'),
(180, 'Case tidak bisa close day / Close shift (1)', 'case-tidak-bisa-close-day-close-shift-1', 'Menu_D_P10', '', 'SPBU', '', 'active', '2021-01-12 01:30:39', '2021-01-12 01:53:52'),
(181, 'Case tidak bisa close day / Close shift (2)', 'case-tidak-bisa-close-day-close-shift-2', 'Menu_D_P11', '', 'SPBU', '', 'active', '2021-01-12 01:40:00', '2021-01-12 01:49:09'),
(182, 'Case tidak bisa close day / Close shift (3)', 'case-tidak-bisa-close-day-close-shift-3', 'Menu_D_P12', '', 'SPBU', '', 'active', '2021-01-12 01:47:24', '2021-01-12 01:49:20'),
(183, 'Case tidak bisa print', 'case-tidak-bisa-print', 'Menu_D_P13', '', 'SPBU', '', 'active', '2021-01-12 02:00:26', '2021-01-12 02:00:26'),
(184, 'Contoh Panduan Singkat Cek History Transaksi di Web Merchant Link Aja', 'contoh-panduan-singkat-cek-history-transaksi-di-web-merchant-link-aja', 'Menu_D_P14', '', 'SPBU', '', 'active', '2021-01-12 02:05:04', '2021-01-12 02:05:04'),
(185, 'EDC Invalid Paramaters', 'edc-invalid-paramaters', 'Menu_D_P15', '', 'SPBU', '', 'active', '2021-01-12 02:10:32', '2021-01-12 02:10:32'),
(186, 'EDC Requesting Payment Cancelled', 'edc-requesting-payment-cancelled', 'Menu_D_P16', '', 'SPBU', '', 'active', '2021-01-12 02:15:21', '2021-01-12 02:15:21'),
(187, 'EDC Tidak Ada Nama SPBU / Nama SPBU Berubah', 'edc-tidak-ada-nama-spbu-nama-spbu-berubah', 'Menu_D_P17', '', 'SPBU', '', 'active', '2021-01-12 02:22:23', '2021-01-12 02:22:23'),
(188, 'EDC tidak berfungsi, keterangan “invalid configuration” sebabnya edc tidak connect ke POS', 'edc-tidak-berfungsi-keterangan-invalid-configuration-sebabnya-edc-tidak-connect-ke-pos', 'Menu_D_P18', '', 'SPBU', '', 'active', '2021-01-12 02:27:31', '2021-01-12 02:27:31'),
(189, 'EDC tidak bisa digunakan, muncul warning seperti gambar', 'edc-tidak-bisa-digunakan-muncul-warning-seperti-gambar', 'Menu_D_P19', '', 'SPBU', '', 'active', '2021-01-12 02:34:56', '2021-01-12 02:34:56'),
(190, 'EDC Upgrade', 'edc-upgrade', 'Menu_D_P20', '', 'SPBU', '', 'active', '2021-01-12 03:45:40', '2021-01-12 03:45:40'),
(191, 'GSMS POS Tidak Bisa Dibuka', 'gsms-pos-tidak-bisa-dibuka', 'Menu_D_P21', '', 'SPBU', '', 'active', '2021-01-12 18:54:02', '2021-01-12 18:54:02'),
(192, 'Kendala2x EDC SPBU Digital Pertamina', 'kendala2x-edc-spbu-digital-pertamina', 'Menu_D_P22', '', 'SPBU', '', 'active', '2021-01-12 18:58:40', '2021-01-12 18:58:40'),
(193, 'Kerusakan EDC', 'kerusakan-edc', 'Menu_D_P23', '', 'SPBU', '', 'active', '2021-01-12 19:02:46', '2021-01-12 19:02:46'),
(194, 'Keterangan EDC tidak bisa cetak struk 2 kali', 'keterangan-edc-tidak-bisa-cetak-struk-2-kali', 'Menu_D_P24', '', 'SPBU', '', 'active', '2021-01-12 19:07:30', '2021-01-12 19:07:30'),
(195, 'Layar tidak bisa respon / Hank / Hang', 'layar-tidak-bisa-respon-hank-hang', 'Menu_D_P25', '', 'SPBU', '', 'active', '2021-01-12 19:11:41', '2021-01-12 19:11:41'),
(196, 'List Aplikasi Pengecekan Awal SPBU Digital Pertamina', 'list-aplikasi-pengecekan-awal-spbu-digital-pertamina', 'Menu_D_P26', '', 'SPBU', '', 'active', '2021-01-12 19:15:55', '2021-01-12 19:15:55'),
(197, 'List Kontak TA Regional di Telegram', 'list-kontak-ta-regional-di-telegram', 'Menu_D_P27', '', 'SPBU', '', 'active', '2021-01-12 19:21:21', '2021-01-12 19:21:21'),
(198, 'Tidak Bisa Menarik serial Number Device', 'tidak-bisa-menarik-serial-number-device', 'Menu_D_P28', '', 'SPBU', '', 'active', '2021-01-12 19:23:43', '2021-01-12 19:23:43'),
(199, 'Troubleshoot Jika DISPENSER Tidak Mau Kembali Ke 0', 'troubleshoot-jika-dispenser-tidak-mau-kembali-ke-0', 'Menu_D_P29', '', 'SPBU', '', 'active', '2021-01-12 19:28:46', '2021-01-12 19:28:46'),
(200, 'Troubleshoot Jika EDC Tidak Connect', 'troubleshoot-jika-edc-tidak-connect', 'Menu_D_P30', '', 'SPBU', '', 'active', '2021-01-12 19:33:36', '2021-01-12 19:33:36'),
(201, 'Aplikasi Power', 'aplikasi-power', 'Menu_E_P1', '', 'Lubricant', '', 'active', '2021-01-12 19:50:28', '2021-01-12 19:50:28'),
(202, 'Aplikasi Power Order', 'aplikasi-power-order', 'Menu_E_P2', '', 'Lubricant', '', 'active', '2021-01-12 19:59:18', '2021-01-12 19:59:18'),
(203, 'Aplikasi Power Petugas Tidak Mengetahui Promo', 'aplikasi-power-petugas-tidak-mengetahui-promo', 'Menu_E_P3', '', 'Lubricant', '', 'active', '2021-01-12 20:03:29', '2021-01-12 20:03:29'),
(204, 'Aplikasi Power Tidak Bisa Login', 'aplikasi-power-tidak-bisa-login', 'Menu_E_P4', '', 'Lubricant', '', 'active', '2021-01-12 20:07:26', '2021-01-12 20:07:26'),
(205, 'Aplikasi Power Tidak Dapat Diakses', 'aplikasi-power-tidak-dapat-diakses', 'Menu_E_P5', '', 'Lubricant', '', 'active', '2021-01-12 20:10:22', '2021-01-12 20:10:22'),
(206, 'Kendala Token Pertagas Tidak Dapat Digunakan', 'kendala-token-pertagas-tidak-dapat-digunakan', 'Menu_F_P1', '', 'Pertagas', '', 'active', '2021-01-12 20:20:55', '2021-01-12 20:20:55'),
(207, 'Pertagas', 'pertagas', 'Menu_F_P2', '', 'Pertagas', '', 'active', '2021-01-12 20:26:15', '2021-01-12 20:26:15'),
(208, 'Kendala Web PDS', 'kendala-web-pds', 'Menu_G_P1', '', 'PDS', '', 'active', '2021-01-12 20:43:41', '2021-01-12 20:43:41'),
(209, 'Case dari Call Center LinkAja/Helpdesk LinkAja', 'case-dari-call-center-linkajahelpdesk-linkaja', 'Menu_Z_P1', '3x24 Jam', 'Lain-Lain', '', 'active', '2021-01-12 20:51:50', '2021-02-27 21:29:42'),
(210, 'Mendahulukan Pengisian Jeriken', 'mendahulukan-pengisian-jeriken', 'Menu_H_P1', '3x24 Jam', 'SPBU & Fuel Product', 'Antrian Pengisian BBM di SPBU', 'active', '2021-03-03 19:53:42', '2021-03-03 20:32:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'gunawanzakiahhalim@gmail.com', 'gunawanzakiahhalim', 'Gunawan Zakiah Halim', 'default.svg', '$2y$10$lUlL/TVjMndNHLIa6QGJrO.Q0Di0dHoQL8mGzJ2Ydhj58UI52KnTi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-11-24 00:42:09', '2020-11-24 00:42:09', NULL),
(2, 'zakiahhalimgunawan@gmail.com', 'zakiahhalimgunawan', 'Zakiah Halim', 'default.svg', '$2y$10$ziHTWGVht3w5VbP2Vr7d4.IQaYMZ5CYLYA8Zr41Mdc/vWmGkFyPzK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-11-24 00:58:33', '2020-11-24 00:58:33', NULL),
(3, 'pcc135@pertamina.com', 'pertamina', NULL, 'default.svg', '$2y$10$XentavNIz34iCAlMQjdru.arpaiB8ltwsleeTN8.TE/WAMb2Y4z9S', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-16 18:55:56', '2020-12-16 18:55:56', NULL),
(4, 'knightleyvincentia@yahoo.com', 'centia', NULL, 'default.svg', '$2y$10$aMlihuRnYllkZtfFBIslI.STYHo5AxUfXSTx.m1MzGcNIAXZwTyma', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-31 20:08:26', '2021-01-31 20:08:26', NULL),
(5, 'iman.cititranscc@gmail.com', 'Iman', NULL, 'default.svg', '$2y$10$o.kebSZVpsX8A6Cb7Z8S4eclG41lpLZHbdnH3s/OEBN6.AFA1lmk2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-02-02 02:12:16', '2021-02-02 02:12:16', NULL),
(6, 'herukustaman135@gmail.com', 'heru', NULL, 'default.svg', '$2y$10$qFnkEF12gARRBsuIbspIo.ZjM51xoWobtGurARDKAumgCyF0TMd2.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-02-05 04:31:32', '2021-02-05 04:31:32', NULL),
(7, 'vincentiainggridsinaga@gmail.com', 'ccc', NULL, 'default.svg', '$2y$10$cnWY/l0Evqehz1HewjfOv.eLNlkQceUKihxmDrmLJ1Uerc1i2Mo1W', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-02-22 19:01:12', '2021-02-22 19:01:12', NULL),
(8, 'herukustama12@gmail.com', 'heru1212', NULL, 'default.svg', '$2y$10$3Z.q3Wm5SetfCP8TsFC/V.PEQ3FMM8taiUl4M0dM0PDQO/AyuyPu2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-02-22 23:37:29', '2021-02-22 23:37:29', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komik`
--
ALTER TABLE `komik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orang`
--
ALTER TABLE `orang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pansol`
--
ALTER TABLE `pansol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komik`
--
ALTER TABLE `komik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orang`
--
ALTER TABLE `orang`
  MODIFY `id` int(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `pansol`
--
ALTER TABLE `pansol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
