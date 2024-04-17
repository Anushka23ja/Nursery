-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 10:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plant`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nm` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nm`, `pwd`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(10) NOT NULL,
  `position` varchar(50) NOT NULL,
  `qualify` varchar(50) NOT NULL,
  `exp` varchar(50) NOT NULL,
  `job_loc` varchar(50) NOT NULL,
  `job_profile` varchar(50) NOT NULL,
  `dates` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `position`, `qualify`, `exp`, `job_loc`, `job_profile`, `dates`) VALUES
(1, 'Garden Manager', 'Diploma Agriculture', '1 years', 'Kolhapur', 'Train workers', '2023-10-19'),
(2, 'Landscape Manager', 'Bsc Agriculture', '3 year', 'Kolhapur', 'Supervision', '2023-10-21'),
(3, 'Nursery Manager', 'Bsc. Agriculture', '4 years', 'Mumbai', 'Select, train and supervise nursery staff', '2023-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `dealer_id` int(10) NOT NULL,
  `dealer_name` varchar(50) NOT NULL,
  `dealer_add` varchar(50) NOT NULL,
  `dealer_mob` varchar(50) NOT NULL,
  `dealer_email` varchar(50) NOT NULL,
  `dealer_product` varchar(50) NOT NULL,
  `dates` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`dealer_id`, `dealer_name`, `dealer_add`, `dealer_mob`, `dealer_email`, `dealer_product`, `dates`) VALUES
(1, 'Ankita Shinde', 'kolhapur', '7586945263', 'ankita123@gmail.com', 'Indoor Plant and flower', '2023-10-18'),
(2, 'Suresh Patil', 'Mumbai', '8574963241', 'suresh12@gmail.com', 'Flower', '2023-10-20'),
(3, 'Amit Shaha', 'Pune', '9685417852', 'amit23@gmail.com', 'Plant(Herb & Veg)', '2023-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(10) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_add` varchar(50) NOT NULL,
  `emp_mob` varchar(50) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_qualify` varchar(50) NOT NULL,
  `emp_post` varchar(50) NOT NULL,
  `emp_exp` varchar(50) NOT NULL,
  `dates` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_add`, `emp_mob`, `emp_email`, `emp_qualify`, `emp_post`, `emp_exp`, `dates`) VALUES
(1, 'sakshi chechar', 'kolhapur', '7894567897', 'sakshi2@gmail.com', 'Bsc Agriculture', 'Agriculture Officer', '3 years', '2023-10-18'),
(2, 'Renu Bhole', 'kolhapur', '9874561237', 'renu123@gmail.com', 'Bsc Agriculture', 'Garden incharge', '1 years', '2023-10-20'),
(3, 'Rohit Kumar', 'Mumbai', '8576941236', 'rohit45@gmail.com', 'Diploma Agriculture', 'Makerting & Sales', '2 years', '2023-10-25');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_mob` varchar(10) NOT NULL,
  `user_msg` varchar(100) NOT NULL,
  `dates` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `user_name`, `user_email`, `user_mob`, `user_msg`, `dates`) VALUES
(1, 'Renu Bhole', 'renu307@gmail.com', '7896541327', 'Garden Management and Maintenance', '2023-10-21'),
(2, 'Ankita Shinde', 'ankita123@gmail.com', '7586945263', 'Plant Accessories ', '2023-10-20'),
(3, 'Amit Shaha', 'amit23@gmail.com', '9685417852', 'Lawn Care Service', '2023-10-25');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `dates` varchar(50) NOT NULL,
  `rate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `mob`, `msg`, `dates`, `rate`) VALUES
(1, 'Amit Shaha', 'amit23@gmail.com', '9685417852', 'It is possible to provide favorable growth conditions.', '2023-10-21', 'star-4'),
(2, 'Renu Bhole', 'renu307@gmail.com', '7896541327', 'As vegetable seeds are very expensive.', '2023-10-23', 'star-3'),
(3, 'Suresh Patil', 'suresh12@gmail.com', '8574963241', ' online plants store presenting the freshest and finest plants for your nursery..', '2023-10-24', 'star-5');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_des` varchar(50) NOT NULL,
  `product_cost` varchar(50) NOT NULL,
  `product_img` varchar(400) NOT NULL,
  `dates` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_type`, `product_name`, `product_des`, `product_cost`, `product_img`, `dates`) VALUES
(1, 'Flower ', 'Rose and Daisy', 'Weeding Ceremony', '25000', 'daisy and rose.JPG', '2023-10-21'),
(2, 'Plant', 'Herbs and  Vegetables', 'Gardening', '10000', 'herb and veg.jpg', '2023-10-26'),
(3, 'Plant and Flower', 'Indoor Plant', 'Decorative rooms', '15000', 'indoor plant.jpg', '2023-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `address`, `mob`, `email`, `pass`) VALUES
(1, 'Renu Bhole', 'kolhapur', '7896541327', 'renu307@gmail.com', 'renu307'),
(2, 'Amit Shaha', 'Pune', '9685417852', 'amit23@gmail.com', 'amit23'),
(3, 'Suresh Patil', 'Mumbai', '8574963241', 'suresh12@gmail.com', 'suresh12'),
(4, 'Ankita Shinde', 'Kolhapur', '7586945263', 'ankita123@gmail.com', 'ankita123');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `service_dse` varchar(50) NOT NULL,
  `upload` varchar(400) NOT NULL,
  `dates` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_dse`, `upload`, `dates`) VALUES
(1, 'Vertical Gardens', 'A vertical garden is also referred to as a green w', 'vertical.jpg', '2023-10-21'),
(2, 'Artificial Lawns', 'It is a Surface of synthetic fibers made to look l', 'artificial.jpg', '2023-10-23'),
(3, 'Supply of plant', 'Garden shrubs, Fruit and spice plant', 'plant.jpg', '2023-10-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`dealer_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `dealer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
