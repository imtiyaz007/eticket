-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2016 at 06:20 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `location_ifo`
--

CREATE TABLE `location_ifo` (
  `id` int(11) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `train_no` varchar(100) NOT NULL,
  `fare` int(20) NOT NULL,
  `ttime` varchar(30) NOT NULL,
  `km` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location_ifo`
--

INSERT INTO `location_ifo` (`id`, `source`, `destination`, `train_no`, `fare`, `ttime`, `km`) VALUES
(5, 'Yesvantpur Jn (YPR)', 'Solapur', '22134', 380, '20:50:00', 1100),
(6, 'Solapur', 'Yesvantpur Jn (YPR)', '22133', 380, '10:56:00', 1100),
(7, 'Gauhati', 'Howrah', '423167', 700, '9:44:00', 2000),
(8, 'Yesvantpur Jn (YPR)', 'Solapur', '12627', 340, '11:30:45', 1100),
(9, 'Yesvantpur Jn (YPR)', 'Howrah', '12246', 700, '10:10:00', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `source` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gn` varchar(100) NOT NULL,
  `no_psngr` int(11) NOT NULL,
  `fare` int(20) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `source`, `destination`, `date`, `name`, `age`, `gn`, `no_psngr`, `fare`, `tid`, `status`) VALUES
(12, 'Yesvantpur Jn (YPR)', 'Solapur', '11/23/2016', 'pervez', '23', 'Male', 2, 680, '', 0),
(13, 'Yesvantpur Jn (YPR)', 'Solapur', '11/23/2016', 'sk', '23', 'Male', 2, 680, '', 0),
(14, 'Yesvantpur Jn (YPR)', 'Solapur', '11/23/2016', 'sk', '23', 'Male', 2, 680, '', 0),
(15, 'Yesvantpur Jn (YPR)', 'Solapur', '11/23/2016', 'sk', '23', 'Male', 2, 680, '1616896800', 0),
(16, 'Yesvantpur Jn (YPR)', 'Solapur', '11/23/2016', 'sk', '23', 'Male', 2, 680, '7949583035', 1),
(17, 'Yesvantpur Jn (YPR)', 'Solapur', '11/23/2016', 'sk', '23', 'Male', 2, 680, '4370263634', 1),
(18, 'Yesvantpur Jn (YPR)', 'Solapur', '11/24/2016', 'sk paul', '24', 'Female', 2, 760, '8642569367', 0),
(19, 'Yesvantpur Jn (YPR)', 'Solapur', '11/25/2016', 'Sharmitha', '23', 'Female', 3, 1140, '0146002505', 1),
(20, 'Gauhati', 'Howrah', '11/25/2016', 'pratap', '23', 'Male', 2, 1400, '8201629755', 0),
(21, 'Yesvantpur Jn (YPR)', 'Solapur', '12/05/2016', 'sk imtiyaz', '23', 'Male', 2, 680, '5629102137', 1),
(22, 'Yesvantpur Jn (YPR)', 'Solapur', '11/30/2016', 'imu', '24', 'Male', 2, 680, '3724339365', 0),
(23, 'Yesvantpur Jn (YPR)', 'Solapur', '12/05/2016', 'sk', '23', 'Male', 2, 680, '2313689294', 0),
(24, 'Yesvantpur Jn (YPR)', 'Howrah', '12/05/2016', 'sk imtiyaz', '23', 'Male', 2, 1400, '4919425586', 1);

-- --------------------------------------------------------

--
-- Table structure for table `train_info`
--

CREATE TABLE `train_info` (
  `id` int(11) NOT NULL,
  `train_no` varchar(20) NOT NULL,
  `train_name` varchar(100) NOT NULL,
  `mon` varchar(12) NOT NULL,
  `tue` varchar(12) NOT NULL,
  `wed` varchar(12) NOT NULL,
  `thu` varchar(12) NOT NULL,
  `fri` varchar(12) NOT NULL,
  `sat` varchar(12) NOT NULL,
  `sun` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_info`
--

INSERT INTO `train_info` (`id`, `train_no`, `train_name`, `mon`, `tue`, `wed`, `thu`, `fri`, `sat`, `sun`) VALUES
(4, '12246', 'Duronto Express', 'Mon', '0', 'Wed', '0', '0', 'Sat', 'Sun'),
(5, '12245', 'Duronto Express', 'Mon', '0', 'Wed', '0', '0', 'Sat', 'Sun'),
(6, '22133', 'Solapur - Yesvantpur SF Express', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'),
(7, '22134', 'Solapur - Yesvantpur SF Express', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'),
(8, '423167', 'ghuwahati express', 'Mon', '0', 'Wed', '0', 'Fri', '0', 'Sun'),
(9, '12627', 'KARNATAKA EXP', 'Mon', '0', 'Wed', '0', '0', 'Sat', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `mno` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `dob`, `address`, `mno`, `email`, `gn`) VALUES
(5, 'imtiyaz', '123456', '1998-06-17', 'burdwan golapbag', '9867534825', 'imu@gmail.com', ''),
(6, 'ali', '123456', '1994-02-02', 'burdwan golapbag', '9868456893', 'ali@gmail.com', ''),
(7, 'parvez', '987654', '1993-10-07', 'sai', '9035432037', 'parvezarya124@gmail.com', ''),
(8, 'admin', '123456', '10/08/1992', 'burdwan', '8553835933', 'admin@admin.com', 'M'),
(10, 'sharmistha Paul', '12345', '2009-02-12', 'sai boys hostel, 8th cross 11th main , AGB layout, chikkasandra', '1289765436', 'sharmi@gmail.com', ''),
(11, 'Sharmistha PAUL', '123456789', '1992-02-20', 'snehalaya', '7407251789', 's@yahoo.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location_ifo`
--
ALTER TABLE `location_ifo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `train_info`
--
ALTER TABLE `train_info`
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
-- AUTO_INCREMENT for table `location_ifo`
--
ALTER TABLE `location_ifo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `train_info`
--
ALTER TABLE `train_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
