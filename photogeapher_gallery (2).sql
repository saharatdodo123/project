-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 11, 2021 at 05:46 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photogeapher_gallery`
--

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(10) NOT NULL,
  `cus_firstname` varchar(30) NOT NULL,
  `cus_lastname` varchar(30) NOT NULL,
  `cus_sex` varchar(6) NOT NULL,
  `cus_email` varchar(50) NOT NULL,
  `cus_password` varchar(30) NOT NULL,
  `cus_phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_firstname`, `cus_lastname`, `cus_sex`, `cus_email`, `cus_password`, `cus_phone`) VALUES
(1, 'Saharat', 'Sansuwan', 'male', 'saharat@gmail.com', '123456', '0800743762'),
(2, 'Wuttipong', 'Program', 'male', 'wuttipong@gmail.com', '123456789', '0877535782'),
(3, 'Thitisak', 'masuk', 'male', 'thitisak@gmail.com', '123456789', '0950032145');

-- --------------------------------------------------------

--
-- Table structure for table `cus_address`
--

CREATE TABLE `cus_address` (
  `cus_id` int(10) NOT NULL,
  `house_number` varchar(10) DEFAULT NULL,
  `canton` varchar(30) DEFAULT NULL,
  `district` varchar(30) NOT NULL,
  `province` varchar(30) NOT NULL,
  `postal_code` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cus_address`
--

INSERT INTO `cus_address` (`cus_id`, `house_number`, `canton`, `district`, `province`, `postal_code`) VALUES
(1, '45/1', 'Nakhon Pathom', 'Mueang', 'Nakhon Pathom', 73000),
(2, '991/1', 'Nong Din Daeng', 'Mueang', 'Nakhon Pathom', 73000),
(3, '885/87', 'Nong Krathum', 'Kamphaeng Saen', 'Nakhon Pathom', 73140);

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `ptg_id` int(10) NOT NULL,
  `ptg_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ptg_firstname` varchar(30) NOT NULL,
  `ptg_lastname` varchar(30) NOT NULL,
  `ptg_nickname` varchar(30) NOT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `ptg_email` varchar(50) NOT NULL,
  `ptg_password` varchar(30) NOT NULL,
  `ptg_phone` varchar(10) NOT NULL,
  `ptg_score` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`ptg_id`, `ptg_img`, `ptg_firstname`, `ptg_lastname`, `ptg_nickname`, `sex`, `ptg_email`, `ptg_password`, `ptg_phone`, `ptg_score`) VALUES
(1, '1111.jpg', 'Saharat', 'Sansuwan', 'Deedo', 'Male', '614259057@webmail.npru.ac.th', '123456', '0800743762', 58),
(2, '2222.jpg', 'Wuttipong', 'Phongam', 'New', 'Male', '614259046@webmail.npru.ac.th', '123456789', '0927312299', 148),
(3, '3333.jpg', 'Thitisak', 'Masuk', 'Tae', 'Male', '614259011@webmail.npru.ac.th', '123456789', '0954865782', 74),
(4, '4444.jpg', 'Phuriphat', 'Rakkhong', 'Pooh', 'Male', '614259023@webmail.npru.ac.th', '123456', '0952268459', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ptg_address`
--

CREATE TABLE `ptg_address` (
  `pg_id` int(10) NOT NULL,
  `house_number` varchar(10) DEFAULT NULL,
  `canton` varchar(30) DEFAULT NULL,
  `district` varchar(30) NOT NULL,
  `province` varchar(30) NOT NULL,
  `postal_code` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ptg_address`
--

INSERT INTO `ptg_address` (`pg_id`, `house_number`, `canton`, `district`, `province`, `postal_code`) VALUES
(1, '45/1', 'Nakhon Pathom', 'Mueang', 'Nakhon Pathom', 73000),
(2, '000/1', 'Nong Din Daeng', 'Mueang', 'Nakhon Pathom', 73000),
(3, '885/87', 'Nong Krathum', 'Kamphaeng Saen', 'Nakhon Pathom', 73140),
(4, '47/2', 'Nong Din Daeng', 'Mueang', 'Nakhon Pathom', 73000);

-- --------------------------------------------------------

--
-- Table structure for table `ptg_electronicdevice`
--

CREATE TABLE `ptg_electronicdevice` (
  `pg_id` int(10) NOT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `camera_lens` varchar(50) DEFAULT NULL,
  `studio_light` varchar(50) DEFAULT NULL,
  `camera_tripod` varchar(50) DEFAULT NULL,
  `memory_card` varchar(50) DEFAULT NULL,
  `battery` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ptg_electronicdevice`
--

INSERT INTO `ptg_electronicdevice` (`pg_id`, `brand`, `camera_lens`, `studio_light`, `camera_tripod`, `memory_card`, `battery`) VALUES
(1, 'Fujifilm GFX50s', 'GF 120 mm F/4 Macro R LM OIS WR', 'Yes', 'Yes', 'Yes', 'Yes'),
(2, 'Sony A9', 'FE 35 mm F1.4 GM', 'Yes', 'Yes', 'Yes', 'Yes'),
(3, 'Olympus OM-D EM1 MarkII', 'M.Zuiko Digital ED 40-150mm F2.8 PRO', 'Yes', 'Yes', 'Yes', 'Yes'),
(4, NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `ptg_imageresult`
--

CREATE TABLE `ptg_imageresult` (
  `img_id` int(10) NOT NULL,
  `pg_id` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name_img` varchar(50) DEFAULT NULL,
  `detail_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ptg_imageresult`
--

INSERT INTO `ptg_imageresult` (`img_id`, `pg_id`, `img`, `name_img`, `detail_img`) VALUES
(1, 1, '11111.jpg', 'งานรับปริญญา', 'อยู่กับเขา อย่าลืมลบแชตเรานะ'),
(2, 1, '11112.jpg', 'งานรับปริญญา', 'ตอนแรกผมนึกว่าแฟนผมสั้น แต่ที่ไหนได้ ผมโสด!'),
(3, 1, '11113.jpg', 'งานรับปริญญา', 'อบอุ่นกว่าพี่ ก็มีแต่ไมโครเวฟแล้วแหละ'),
(4, 1, '11114.jpg', 'งานรับปริญญา', 'ไม่ต้องมีหรอกลักยิ้ม แต่น้องยิ้มพี่ก็รักแล้ว'),
(5, 2, '22221.jpg', 'งานแฟชั่น', 'ถ้าคุยกับใครแล้วเขาหาย แปลว่าคุณควรเรียนหมอนะ'),
(6, 2, '22222.jpg', 'งานแฟชั่น', 'ถ้าใจแข็งเหมือนปากก็คงจะดี'),
(7, 2, '22223.jpg', 'งานแฟชั่น', 'ไม่อยากคุยก็บอก ไม่ต้องโกหกว่าอยากนอน'),
(8, 2, '22224.jpg', 'งานแฟชั่น', 'ถ้าเศรษฐกิจซบเซา หันมาซบเราได้นะ'),
(9, 3, '33331.jpg', 'งานอาร์ต', 'มีแชมพูอะไรบ้างที่สระแล้วผมไม่เหงา'),
(10, 3, '33332.jpg', 'งานอาร์ต', 'ที่ชอบถ่ายรูปหันข้าง เพราะอยากให้เธอหันมามองบ้างทางนี้'),
(11, 3, '33333.jpg', 'งานอาร์ต', 'จะแซ่บได้ยังไง คนนะไม่ใช่พริก'),
(12, 3, '33334.jpg', 'งานอาร์ต', 'จ้องอะไรนักหนา มีปัญหาหรือมีใจ');

-- --------------------------------------------------------

--
-- Table structure for table `ptg_social`
--

CREATE TABLE `ptg_social` (
  `pg_id` int(10) NOT NULL,
  `favorite_job1` varchar(50) DEFAULT NULL,
  `favorite_job2` varchar(50) DEFAULT NULL,
  `favorite_job3` varchar(50) DEFAULT NULL,
  `favorite_job4` varchar(50) DEFAULT NULL,
  `favorite_job5` varchar(50) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `youtube` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ptg_social`
--

INSERT INTO `ptg_social` (`pg_id`, `favorite_job1`, `favorite_job2`, `favorite_job3`, `favorite_job4`, `favorite_job5`, `message`, `website`, `youtube`, `twitter`, `instagram`, `facebook`) VALUES
(1, 'Events', 'Graduation', 'Persona/Fashion', 'Product/Food', 'Wedding/Pre-wedding', 'https://www.facebook.com/messages/t/100008231135362', '-', 'Dom_Channel', 'Dombabeka', 'Domblackwhite', 'Dom Channel'),
(2, 'Wedding/Pre-wedding', 'Product/Food', 'Persona/Fashion', 'Events', 'Architecture', 'https://www.facebook.com/messages/t/100002459657025', '-', '-', '-', '-', '-'),
(3, 'Architecture', 'Persona/Fashion', 'Wedding/Pre-wedding', 'Graduation', 'Events', 'https://www.facebook.com/messages/t/100010309003640', '-', '-', '-', '-', '-'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `cus_address`
--
ALTER TABLE `cus_address`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
  ADD PRIMARY KEY (`ptg_id`);

--
-- Indexes for table `ptg_address`
--
ALTER TABLE `ptg_address`
  ADD PRIMARY KEY (`pg_id`);

--
-- Indexes for table `ptg_electronicdevice`
--
ALTER TABLE `ptg_electronicdevice`
  ADD PRIMARY KEY (`pg_id`);

--
-- Indexes for table `ptg_imageresult`
--
ALTER TABLE `ptg_imageresult`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `ptg_social`
--
ALTER TABLE `ptg_social`
  ADD PRIMARY KEY (`pg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cus_address`
--
ALTER TABLE `cus_address`
  MODIFY `cus_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `photographer`
--
ALTER TABLE `photographer`
  MODIFY `ptg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ptg_address`
--
ALTER TABLE `ptg_address`
  MODIFY `pg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ptg_electronicdevice`
--
ALTER TABLE `ptg_electronicdevice`
  MODIFY `pg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ptg_imageresult`
--
ALTER TABLE `ptg_imageresult`
  MODIFY `img_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ptg_social`
--
ALTER TABLE `ptg_social`
  MODIFY `pg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cus_address`
--
ALTER TABLE `cus_address`
  ADD CONSTRAINT `cus_address_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`);

--
-- Constraints for table `ptg_address`
--
ALTER TABLE `ptg_address`
  ADD CONSTRAINT `ptg_address_ibfk_1` FOREIGN KEY (`pg_id`) REFERENCES `photographer` (`ptg_id`);

--
-- Constraints for table `ptg_electronicdevice`
--
ALTER TABLE `ptg_electronicdevice`
  ADD CONSTRAINT `ptg_electronicdevice_ibfk_1` FOREIGN KEY (`pg_id`) REFERENCES `photographer` (`ptg_id`);

--
-- Constraints for table `ptg_social`
--
ALTER TABLE `ptg_social`
  ADD CONSTRAINT `ptg_social_ibfk_1` FOREIGN KEY (`pg_id`) REFERENCES `photographer` (`ptg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
