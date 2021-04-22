-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 10:25 AM
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
-- Database: `practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `summery` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `summery`, `status`) VALUES
(4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, quas quibusdam necessitatibus nesciunt eligendi esse sit non reprehenderit quisquam asperiores maxime blanditiis culpa vitae velit. Numquam!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `phone`, `email`) VALUES
(3, 'khulna jessor high way', '123455678', 'alhelal958@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(10) UNSIGNED NOT NULL,
  `year` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `progress` int(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active 2=deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `year`, `title`, `progress`, `status`) VALUES
(1, 2002, 'TO TO institute', 20, 1),
(2, 1971, 'Fight', 100, 1),
(3, 2002, 'kotha', 87, 1);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `FEATURE_ITEM` int(11) DEFAULT NULL,
  `ACTIVE_PRODUCTS` int(11) DEFAULT NULL,
  `YEAR_EXPERIENCE` int(11) DEFAULT NULL,
  `OUR_CLIENTS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `FEATURE_ITEM`, `ACTIVE_PRODUCTS`, `YEAR_EXPERIENCE`, `OUR_CLIENTS`) VALUES
(3, 22, 12, 1, 212);

-- --------------------------------------------------------

--
-- Table structure for table `hello_message`
--

CREATE TABLE `hello_message` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hello_message`
--

INSERT INTO `hello_message` (`id`, `name`, `message`) VALUES
(2, 'I AM WILL SMITH', 'I AM WILL SMITH, professional web developer with long time experience in this field​.');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `summery` mediumtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `icon`, `summery`, `status`) VALUES
(1, 'Creative Desing', 'fab fa-react', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 1),
(2, 'Ultimate Feature', 'fab fa-free-code-camp', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 1),
(3, 'Ideas', 'fal fa-lightbulb-on', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `showcase`
--

CREATE TABLE `showcase` (
  `id` int(10) UNSIGNED NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `work_name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `main_image` varchar(500) NOT NULL,
  `main_title` varchar(100) NOT NULL,
  `main_summery` mediumtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showcase`
--

INSERT INTO `showcase` (`id`, `thumbnail`, `work_name`, `title`, `main_image`, `main_title`, `main_summery`, `status`) VALUES
(5, '2106138921.jpg', 'Graphics', 'Valo Design', '636047853.jpg', 'Amar graphices er kaj', 'Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software like Aldus PageMaker including versions.', 1),
(6, '1791341324.jpg', 'Audio', 'sundor audio', '803496550.jpg', 'Khub kharap maner audio', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 1),
(7, '2037185947.jpg', 'Audio', 'sundor audio', '1973187717.jpg', 'Khub kharap maner audio', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 1),
(8, '2114368990.jpg', 'video', 'posa video', '1812437802.jpg', 'Video Sob Posa', 'Returns the converted string\r\nReturns the converted string\r\nReturns the converted stringReturns the converted string\r\nReturns the converted string\r\nReturns the converted string\r\nReturns the converted string\r\nReturns the converted string\r\nReturns the converted string\r\nReturns the converted string\r\nReturns the converted string\r\nReturns the converted string', 1);

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `name`, `icon`, `link`, `status`) VALUES
(14, 'Al Helal', 'fab fa-facebook-f', 'facebook.com/al.helal.3939', 'active'),
(16, 'Al Helal', 'fab fa-twitter', 'facebook.com/al.helal.3939', 'active'),
(17, 'Al Helal', 'fab fa-facebook-f', 'facebook.com/al.helal.3939', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT 'default.jpg',
  `review` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `image`, `review`, `name`, `status`) VALUES
(8, '1183852460.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.Lorem', 'Al Helal', 1),
(9, '287756351.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.Lorem', 'Omok Tomok', 1),
(10, '229156562.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.Lorem', 'Omok Tomok', 1),
(11, '1567636934.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.Lorem', 'Omok Tomok', 1),
(12, '1335986372.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.Lorem', 'Omok Tomok', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `role` int(11) NOT NULL DEFAULT 1 COMMENT '1=users 2=admin 3=employee',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active 2=deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `role`, `status`) VALUES
(1, 'Al Helal p[atoari', 'alfhelal958@gmail.com', 'alhelal958@gmail.com', 'default.jpg', 1, 1),
(2, 'Al  hel', 'alhelal958@gmail.com', '$2y$10$40vX6ZA7gp37YjkWLDX5FOXVClPSXsgoaL/1F26urJb7hSKzPueyu', 'default.jpg', 2, 1),
(3, 'Al Helal patopar', 'alhelal58@gmail.com', '$2y$10$8kCRXNdv0R0qYJo1a4GGreX8D1rNjDtGKKkSsRrJeObB4zR1l0Sd6', '3.jpg', 1, 1),
(4, 'Al Helal', 'alhelal958@gmail.comab', '$2y$10$lEhLfHVmoZQEd20PaFvvF.HxLdX3BLbNnvNDiIBaKzRo0UhwCDo2C', '4.jpg', 1, 1),
(5, 'Al Helal ', 'alhelal958@gmail.co', '$2y$10$123RBZkvNSV/7HIdLtig0eTcTNFHw.sUWYriJQocgugGx7aB.HJ0u', '5.jpg', 1, 1),
(6, 'Al Helal', 'Helal123@gmail.com', '$2y$10$i6jcwubDap1EFA/p1Ony/.femWEyZVCsicM.ptjiKQOJixOdKTnxO', '6.jpg', 1, 1),
(7, 'Al Helal', 'hiHello1@gmail.com', '$2y$10$mnYqoAj1X4mQPECeEyvKzeJZEZt8Wke7/QP/XuXvSsXHBCt/Xr/x2', 'default.jpg', 1, 1),
(8, 'Al Helal', 'alhelalpatoari@gmail.com', '$2y$10$aUrg2gZIkNKshdADbCjh7eGpVLxWW0a0Ws47T0ltYdtrPNTJUA3aC', 'default.jpg', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hello_message`
--
ALTER TABLE `hello_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showcase`
--
ALTER TABLE `showcase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hello_message`
--
ALTER TABLE `hello_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `showcase`
--
ALTER TABLE `showcase`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
