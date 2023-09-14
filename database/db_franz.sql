-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 03:50 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_franz`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `auth_id` int(11) NOT NULL,
  `decode_key` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`auth_id`, `decode_key`) VALUES
(1, '6c32c93b9bc41124b998d9777f51b83f46ad8866');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `meta` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `school` text NOT NULL,
  `started` text NOT NULL,
  `ended` text NOT NULL,
  `degree` text NOT NULL,
  `description` text NOT NULL,
  `priority` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `expDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `photo` text NOT NULL,
  `photo1` text NOT NULL,
  `photo2` text NOT NULL,
  `photo3` text NOT NULL,
  `type` text NOT NULL,
  `url` text NOT NULL,
  `date` date NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `user_id`, `name`, `description`, `photo`, `photo1`, `photo2`, `photo3`, `type`, `url`, `date`, `status_id`) VALUES
(1, 1, 'websys', 'asdasdsad', 'sdasdsa', '', '', '', 'web-based', 'facebook.com', '2023-05-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `skillname` varchar(255) NOT NULL,
  `percentage` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
(1, 'Active'),
(2, 'Inactive'),
(3, 'Archive');

-- --------------------------------------------------------

--
-- Table structure for table `system_setting`
--

CREATE TABLE `system_setting` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `meta` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_setting`
--

INSERT INTO `system_setting` (`id`, `user_id`, `meta`, `meta_value`) VALUES
(1, 1, 'name', 'Portfolio'),
(2, 1, 'address', 'Gata'),
(3, 1, 'number', '09457664949'),
(4, 1, 'email', 'francismanlangit13@gmail.com'),
(5, 1, 'welcome_message', 'test message'),
(6, 1, 'description', 'test description'),
(7, 1, 'keywords', 'portfolio'),
(8, 1, 'author', 'Portfolio Inc'),
(9, 1, 'system_logo', 'logo.png'),
(10, 1, 'facebook', 'facebook.com'),
(11, 1, 'instagram', 'instagram.com'),
(12, 1, 'twitter', 'twitter.com'),
(13, 1, 'github', 'github.com'),
(14, 1, 'fullname', 'Francis Carlo Manlangit'),
(15, 1, 'resume', 'resume.pdf'),
(16, 1, 'about_first', 'My name is Francis Carlo A. Manlangit, and I am a passionate individual with diverse interests. I have a knack for editing photos and videos, using my creativity and technical skills to bring out the best in visual content. Whether it\'s enhancing images or crafting compelling videos, I find joy in transforming raw footage into stunning pieces of art.\r\n'),
(17, 1, 'about_second', 'In addition to my proficiency in multimedia editing, I also have a keen interest in electronics. I enjoy tinkering with various electronic components, exploring circuits, and building innovative gadgets. This fascination with electronics allows me to combine my technical knowledge with my creative mindset, resulting in unique and functional creations.'),
(18, 1, 'about_third', 'To fuel my endeavors and maintain my productivity, I am an avid coffee enthusiast. The aroma and taste of a well-brewed cup of coffee invigorate my senses and provides the necessary energy to tackle challenges head-on. From experimenting with different brewing methods to exploring various coffee flavors, I find delight in the artistry of coffee-making.'),
(19, 1, 'about_fourth', 'Overall, I am driven by curiosity and a passion for creativity. Through my love for editing, electronics, swimming, and coffee, I constantly seek opportunities to express myself, learn new skills, and find inspiration in the world around me.');

-- --------------------------------------------------------

--
-- Table structure for table `system_statistics`
--

CREATE TABLE `system_statistics` (
  `system_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_statistics`
--

INSERT INTO `system_statistics` (`system_id`, `type`, `date`) VALUES
(1, 'Resume', '2023-08-19 22:42:32'),
(2, 'Email', '2023-06-06 22:42:54'),
(3, 'Email', '2023-08-19 22:43:49'),
(4, 'Email', '2023-08-19 22:44:53'),
(5, 'Click', '2023-08-19 22:52:25'),
(6, 'Phone', '2023-08-19 22:55:11'),
(7, 'Phone', '2023-08-19 22:55:23'),
(8, 'Email', '2023-08-19 22:59:34'),
(9, 'Phone', '2023-08-19 23:00:00'),
(10, 'Visit', '2023-08-20 00:00:00'),
(11, 'Visit', '2023-08-20 08:49:07'),
(12, 'Visit', '2023-08-20 19:02:26'),
(13, 'Resume', '2023-08-20 19:06:12'),
(14, 'Visit', '2023-08-20 23:48:37'),
(15, 'Visit', '2023-08-20 23:49:09'),
(16, 'Visit', '2023-08-20 23:49:57'),
(17, 'Email', '2023-08-20 23:50:37'),
(18, 'Visit', '2023-08-20 23:54:55'),
(19, 'Email', '2023-08-20 23:55:12'),
(20, 'Phone', '2023-08-21 00:01:11'),
(21, 'Phone', '2023-08-21 00:01:31'),
(22, 'Phone', '2023-08-21 00:01:41'),
(23, 'Phone', '2023-08-21 00:01:55'),
(24, 'Email', '2023-08-21 00:02:03'),
(25, 'Email', '2023-08-21 00:02:25'),
(26, 'Resume', '2023-08-21 00:03:01'),
(27, 'Resume', '2023-08-21 00:03:19'),
(28, 'Visit', '2023-08-21 00:03:51'),
(29, 'Visit', '2023-08-21 10:11:06'),
(30, 'Visit', '2023-08-22 00:18:38'),
(31, 'Visit', '2023-09-09 12:32:13'),
(32, 'Visit', '2023-09-09 17:34:21'),
(33, 'Visit', '2023-09-11 00:08:21'),
(34, 'Visit', '2023-09-12 08:47:03'),
(35, 'Visit', '2023-09-12 09:18:22'),
(36, 'Visit', '2023-09-12 09:19:44'),
(37, 'Visit', '2023-09-12 09:20:05'),
(38, 'Visit', '2023-09-13 17:28:14'),
(39, 'Visit', '2023-09-13 17:33:16'),
(40, 'Visit', '2023-09-14 08:59:27'),
(41, 'Visit', '2023-09-14 09:21:48'),
(42, 'Visit', '2023-09-14 09:31:18');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `photo` text NOT NULL,
  `position` text NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `suffix` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `user_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `mname`, `lname`, `suffix`, `email`, `password`, `user_type_id`) VALUES
(1, 'Francis Carlo', 'Abcede', 'Manlangit', '', 'franzcarl13@yahoo.com', '0192023a7bbd73250516f069df18b500', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` text NOT NULL,
  `log` text NOT NULL,
  `logdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`log_id`, `user_id`, `type`, `log`, `logdate`) VALUES
(2, 1, 'Login', 'success using email and password', '2023-07-20 16:10:50'),
(3, 1, 'Login', 'success using email and password', '2023-08-18 16:11:29'),
(5, 1, 'Login', 'success using email and password', '2023-08-19 18:53:33'),
(7, 1, 'Login', 'success using email and password', '2023-08-19 20:45:42'),
(8, 1, 'Login', 'success using email and password', '2023-08-19 21:09:52'),
(9, 1, 'Login', 'success using email and password', '2023-08-19 21:17:07'),
(10, 1, 'Login', 'success using email and password', '2023-08-19 23:01:16'),
(16, 1, 'Login', 'success using email and password', '2023-08-19 23:07:31'),
(17, 1, 'Login', 'success using email and password', '2023-08-19 23:09:29'),
(18, 1, 'Login', 'success using email and password', '2023-08-19 23:11:16'),
(19, 1, 'Login', 'success using email and password', '2023-08-19 23:11:44'),
(20, 1, 'Login', 'success using email and password', '2023-08-19 23:13:00'),
(21, 1, 'Login', 'success using email and password', '2023-08-19 23:15:16'),
(22, 1, 'Login', 'success using email and password', '2023-08-19 23:16:37'),
(23, 1, 'Login', 'success using email and password', '2023-08-19 23:21:57'),
(24, 1, 'Login', 'success using email and password', '2023-08-20 00:26:41'),
(25, 1, 'Login', 'success using email and password', '2023-08-20 00:38:54'),
(26, 1, 'Login', 'success using email and password', '2023-08-20 00:41:59'),
(27, 1, 'Login', 'success using email and password', '2023-08-20 00:44:28'),
(28, 1, 'Login', 'success using email and password', '2023-08-20 00:59:11'),
(29, 1, 'Login', 'success using email and password', '2023-08-20 01:02:35'),
(30, 1, 'Login', 'success using email and password', '2023-08-20 01:18:26'),
(31, 1, 'Login', 'success using email and password', '2023-08-20 01:21:16'),
(32, 1, 'Login', 'success using email and password', '2023-08-20 08:54:36'),
(33, 1, 'Login', 'success using email and password', '2023-08-20 10:04:45'),
(34, 1, 'Login', 'success using email and password', '2023-08-20 19:04:47'),
(35, 1, 'Login', 'success using email and password', '2023-08-20 20:51:37'),
(36, 1, 'Login', 'success using email and password', '2023-08-20 23:51:04'),
(37, 1, 'Login', 'success using email and password', '2023-08-21 00:05:24'),
(38, 1, 'Login', 'success using email and password', '2023-08-21 10:18:56'),
(39, 1, 'Login', 'success using email and password', '2023-08-21 16:34:16'),
(40, 1, 'Login', 'success using email and password', '2023-08-21 18:32:12'),
(41, 1, 'Login', 'success using email and password', '2023-08-22 00:13:38'),
(42, 1, 'Login', 'success using email and password', '2023-08-22 00:18:17'),
(44, 1, 'Login', 'success using email and password', '2023-09-09 12:31:42'),
(45, 1, 'Login', 'success using email and password', '2023-09-09 16:45:54'),
(47, 1, 'Login', 'success using email and password', '2023-09-09 16:47:17'),
(48, 1, 'Login', 'success using email and password', '2023-09-09 16:48:45'),
(49, 1, 'Login', 'success using email and password', '2023-09-09 17:01:18'),
(50, 1, 'Login', 'success using email and password', '2023-09-09 17:26:45'),
(51, 1, 'Login', 'success using email and password', '2023-09-11 00:10:06');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company` text NOT NULL,
  `position` text NOT NULL,
  `started` text NOT NULL,
  `ended` text NOT NULL,
  `description` text NOT NULL,
  `priority` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`auth_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `password_reset_temp`
--
ALTER TABLE `password_reset_temp`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `system_setting`
--
ALTER TABLE `system_setting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `system_statistics`
--
ALTER TABLE `system_statistics`
  ADD PRIMARY KEY (`system_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `auth_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `system_setting`
--
ALTER TABLE `system_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `system_statistics`
--
ALTER TABLE `system_statistics`
  MODIFY `system_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `education_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`);

--
-- Constraints for table `password_reset_temp`
--
ALTER TABLE `password_reset_temp`
  ADD CONSTRAINT `password_reset_temp_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`);

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `system_setting`
--
ALTER TABLE `system_setting`
  ADD CONSTRAINT `system_setting_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `testimonials_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`);

--
-- Constraints for table `user_log`
--
ALTER TABLE `user_log`
  ADD CONSTRAINT `user_log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `work`
--
ALTER TABLE `work`
  ADD CONSTRAINT `work_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `work_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
