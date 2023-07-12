-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 05:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group5pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_intermediate`
--

CREATE TABLE `apply_intermediate` (
  `i_id` int(10) NOT NULL,
  `d_id` int(11) NOT NULL,
  `i_fname` varchar(55) NOT NULL,
  `i_lname` varchar(55) NOT NULL,
  `i_marks` int(11) NOT NULL,
  `i_course` varchar(55) NOT NULL,
  `i_email` varchar(100) NOT NULL,
  `i_address` varchar(255) NOT NULL,
  `i_phone` varchar(20) NOT NULL,
  `i_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply_intermediate`
--

INSERT INTO `apply_intermediate` (`i_id`, `d_id`, `i_fname`, `i_lname`, `i_marks`, `i_course`, `i_email`, `i_address`, `i_phone`, `i_photo`) VALUES
(25, 0, 'wwqwrw', 'qrwqwq', 0, '', 'dgff@gmail.com', 'aDADFEDFSDF', '18767676786', 'download (1).png'),
(26, 0, 'wwqwrw', 'qrwqwq', 454, '', 'dgff@gmail.com', 'hvh9890', '18767676786', 'images (2).png'),
(27, 0, 'Muhammad', 'Tayab', 800, '', 'dgff@gmail.com', 'gtjuyk', '23456', 'images (2).png');

-- --------------------------------------------------------

--
-- Table structure for table `app_degree`
--

CREATE TABLE `app_degree` (
  `d_id` int(11) NOT NULL,
  `d_fname` varchar(55) NOT NULL,
  `d_lname` varchar(55) NOT NULL,
  `d_marks` varchar(111) NOT NULL,
  `d_program` varchar(55) NOT NULL,
  `d_degree` varchar(55) NOT NULL,
  `d_address` varchar(255) NOT NULL,
  `d_phone` varchar(20) NOT NULL,
  `d_email` varchar(100) NOT NULL,
  `d_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_degree`
--

INSERT INTO `app_degree` (`d_id`, `d_fname`, `d_lname`, `d_marks`, `d_program`, `d_degree`, `d_address`, `d_phone`, `d_email`, `d_photo`) VALUES
(1, 'sahn', 'ghani', '545', 'Department Of Educational Sciences', '', 'ewaawegawgwgwgw', '44564546', 'shan@gamil.com', 'images (27).jpg'),
(2, 'sahn', 'ghani', '545', 'Department Of Educational Sciences', ' ', 'ewaawegawgwgwgw', '44564546', 'shan@gamil.com', 'images (27).jpg'),
(3, 'sahn', 'ghani', '545', 'Department Of Educational Sciences', '', 'ewaawegawgwgwgw', '44564546', 'shan@gamil.com', 'images (27).jpg'),
(4, 'sahn', 'ghani', '545', 'Department Of Educational Sciences', '', 'ewaawegawgwgwgw', '44564546', 'shan@gamil.com', 'images (27).jpg'),
(5, 'sahn', 'ghani', '545', 'Department Of Educational Sciences', '', 'ewaawegawgwgwgw', '44564546', 'shan@gamil.com', 'images (27).jpg'),
(6, 'sahn', 'ghani', '545', 'Department Of Educational Sciences', '', 'ewaawegawgwgwgw', '44564546', 'shan@gamil.com', 'images (27).jpg'),
(7, 'sahn', 'ghani', '545', 'Department Of Educational Sciences', '', 'ewaawegawgwgwgw', '44564546', 'shan@gamil.com', 'images (27).jpg'),
(8, 'safasf', 'asfadsfsdf', '45645', 'Department Of Computer Science', '', 'eafsefasfgawefweff', '543', 'saasa@gmail.com', '76-760255_silhouette-humour-illustration-cartoon-vector-graphics-funny-cartoon.png'),
(9, 'safasf', 'asfadsfsdf', '45645', 'Department Of Computer Science', '', 'eafsefasfgawefweff', '543', 'saasa@gmail.com', '76-760255_silhouette-humour-illustration-cartoon-vector-graphics-funny-cartoon.png'),
(10, 'tyb', 'ty b', '700', 'Department Of Computer Science', '', 'eafsefasfgawefweff', '56767', 'saasa@gmail.com', '16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_comment`
--

INSERT INTO `blog_comment` (`id`, `name`, `email`, `comment`) VALUES
(30, 'shan', 'sdasfa@gmail.com', 'afasdgdgasagdsag'),
(31, 'shan', 'sdasfa@gmail.com', 'afasdgdgasagdsag'),
(34, 'shan', 'sdasfa@gmail.com', 'asdgadsagdsgdg'),
(35, 'shan', 'sdasfa@gmail.com', 'asdgadsagdsgdg'),
(37, 'asfsaf', 'shan@gmail.com', 'zvvzVDZvXVadfgfasdgfsdg'),
(38, 'asfsaf', 'shan@gmail.com', 'zvvzVDZvXVadfgfasdgfsdg'),
(39, '', '', ''),
(40, 'tyb', 'tyb@gmail.com', 'dgethryjtujtu');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(10) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `subject` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`, `subject`) VALUES
(1, 'shan', 'sassas@gmail.com', 'dsafdfsadgsfgsfg', 'asdassa'),
(2, '', '', '', ''),
(3, 'tyb', 'tyb@gmail.com', 'dgrtyjtuk6iy,kioy,', 'cs');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `id` int(10) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` binary(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipcode` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`id`, `username`, `password`, `email`, `phoneno`, `address`, `zipcode`) VALUES
(1, 'dsfadfdsda', 0x31323334353600000000, 'safadfdsdgad@gmail.com', '123456878987', 'fadfsadsgasgsaasg', '44000'),
(2, 'tyb', 0x31323334350000000000, '2365@gmail.com', '12234567', 'mnfisijrhie788', '1122'),
(5, '', 0x00000000000000000000, 'dgff@gmail.com', '', '', ''),
(6, '', 0x00000000000000000000, 'dgff@gmail.com', '', '', ''),
(7, 'dsfasfsas', 0x31323334353600000000, 'dgff@gmail.com', '123456789', 'shn@gmail.com', '44444');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_intermediate`
--
ALTER TABLE `apply_intermediate`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `app_degree`
--
ALTER TABLE `app_degree`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_intermediate`
--
ALTER TABLE `apply_intermediate`
  MODIFY `i_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `app_degree`
--
ALTER TABLE `app_degree`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
