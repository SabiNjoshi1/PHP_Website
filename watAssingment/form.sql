-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 27, 2021 at 01:55 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `wat`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(10) NOT NULL,
  `profile` varchar(250) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `profile`, `firstname`, `lastname`, `email`, `address`, `age`, `gender`) VALUES
(15, '3.jpg', 'Aditya', 'Poddar', 'adityapoddar.2011@gmail.com', 'Kathmandu', '21', 'Male'),
(16, '6.jpg', 'Anjali', 'Subedi', 'anjalisubedi@gmail.com', 'Kathmandu', '20', 'Female'),
(17, '4.jpg', 'Anusha', 'Manandhar', 'anushamanandhar@gmail.com', 'Kathmandu', '20', 'Female'),
(18, '5.jpg', 'Arnabha', 'Manandhar', 'arnabha265@gmail.com', 'Kathmandu', '20', 'Male'),
(19, '1.jpg', 'Ashirbad', 'Adhikari', 'ashirbadadhikari77@gmail.com', 'Kathmandu', '21', 'Male'),
(20, '8.jpg', 'Avipsa', 'Paudel', 'paudelavipsa@gmail.com', 'Kathmandu', '21', 'Female'),
(21, 'fourth.jpg', 'Bikram', 'Bishwokarma', 'bikrambishwokarma305@gmail.com', 'Kathmandu', '21', 'Male'),
(22, '7.png', 'Diya', 'Shrestha', 'diyashrestha2000@gmail.com', 'Kathmandu', '20', 'Female'),
(23, '2.jpg', 'Durgesh', 'Mahato', 'durgeshmahato.dm@gmail.com', 'Kathmandu', '21', 'Male'),
(24, '8.jpg', 'Muna', 'kc', 'munakc@gmail.com', 'Kathmandu', '20', 'Female'),
(25, '3.jpg', 'Narendra', 'Roy', 'iamnarendraroy@gmail.com', 'Kathmandu', '21', 'Male'),
(26, '1.jpg', 'Nishesh', 'Subedi', 'subedinishesh64@gmail.com', 'Kathmandu', '21', 'Male'),
(27, '6.jpg', 'Prabidhi', 'Pyakurel', 'prabidhi11@gmail.com', 'Kathmandu', '21', 'Female'),
(28, '2.jpg', 'Raman', 'Shakya', 'ramanshakya101@gmail.com', 'Lalitpur', '21', 'Male'),
(29, '5.jpg', 'Reejan', 'Katwal', 'chemankatwal111@gmail.com', 'Kathmandu', '21', 'Male'),
(30, '3.jpg', 'Ritesh', 'Danuwar', 'riteshkd997@gmail.com', 'Kathmandu', '21', 'Male'),
(31, 'my_pic.JPG', 'Sabin', 'Joshi', 'sabinjoshi044@gmail.com', 'Lalitpur', '21', 'Male'),
(32, '6.jpg', 'Samiksha', 'Rupakheti', 'samiksharupakheti@gmail.com', 'Kathmadnu', '21', 'Female'),
(33, 'fourth.jpg', 'Shulab', 'Thapa', 'shulabthapa@gmail.com', 'Kathmandu', '21', 'Male'),
(34, '7.png', 'Smriti', 'Shahi', 'smritishahi42@gmail.com', 'Kathmandu', '20', 'Female'),
(35, '1.jpg', 'Sushanat', 'Chapagain', 'sreddevil12@gmail.com', 'Kathmandu', '21', 'Male'),
(36, '2.jpg', 'Umanga', 'Niraoula', 'umanganiraoula@gmail.com', 'Kathmandu', '21', 'Male'),
(37, '5.jpg', 'Mohit', 'Bhandari', 'mohitbhandari6112@gmail.com', 'Kathmandu', '21', 'Male'),
(38, '4.jpg', 'Sanjana', 'Neupane', 'sanjananeupane@gmail.com', 'Kathmandu', '20', 'Female'),
(39, '1.jpg', 'Sanjay', 'Thapa', 'sunzaway7chhetri@gmail.com', 'Lalitpur', '21', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
