-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 08, 2019 at 12:57 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingID` int(11) NOT NULL,
  `userID` varchar(11) NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL,
  `hari` int(5) NOT NULL,
  `roomName` varchar(50) NOT NULL,
  `roomDesc` varchar(255) NOT NULL,
  `roomID` int(11) NOT NULL,
  `totalPrice` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingID`, `userID`, `checkIn`, `checkOut`, `hari`, `roomName`, `roomDesc`, `roomID`, `totalPrice`) VALUES
(55, '3', '2019-12-08', '2019-12-10', 2, 'Triple Room', '1 Full bed and 1 Single bed<br>\r\n210sqft <br> \r\nMax: 3 guests\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 6, '360.00'),
(56, '3', '2019-12-20', '2019-12-21', 1, 'King Room', '1 King bed<br>\r\n170sqft <br> \r\nMax: 2 guests\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 9, '129.00'),
(57, '3', '2019-12-06', '2019-12-08', 2, 'Quad Room', '2 Queen beds<br>\r\n\r\n\r\n\r\n220sqft <br> \r\n\r\n\r\n\r\nMax: 4 guests\r\n\r\n', 14, '800.00'),
(58, '3', '2020-02-08', '2020-02-09', 1, 'Quad Room', '2 Full beds<br>\r\n\r\n220sqft <br> \r\n\r\nMax: 4 guests', 11, '415.00'),
(59, '1', '2019-12-08', '2019-12-15', 7, 'Double Room', '2 Single beds<br>\r\n170sqft <br> \r\nMax: 2 guests\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 3, '910.00'),
(60, '25', '2019-12-19', '2019-12-20', 1, 'Queen Room', '1 Queen bed<br>\r\n200sqft <br> \r\nMax: 2 guests\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 8, '134.00'),
(61, '25', '2019-12-28', '2019-12-29', 1, 'King Room', '1 King bed<br>\r\n200sqft <br> \r\nMax: 2 guests', 10, '139.00');

-- --------------------------------------------------------

--
-- Table structure for table `hotelroom`
--

CREATE TABLE `hotelroom` (
  `roomID` int(11) NOT NULL,
  `roomName` varchar(50) NOT NULL,
  `roomDesc` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(50) NOT NULL,
  `roomPerson` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotelroom`
--

INSERT INTO `hotelroom` (`roomID`, `roomName`, `roomDesc`, `price`, `image`, `roomPerson`) VALUES
(1, 'Single Room', '1 Single bed<br>\r\n150sqft <br> \r\nMax: 1 guest\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '75.00', 'pics/singleRoom.jpg', 1),
(2, 'Double Room', '1 Full bed<br>\r\n160sqft <br> \r\nMax: 2 guests\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '120.00', 'pics/doubleRoom.jpg', 1),
(3, 'Double Room', '2 Single beds<br>\r\n170sqft <br> \r\nMax: 2 guests\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '130.00', 'pics/doubleRoom2.jpg', 2),
(4, 'Triple Room', '3 Single beds<br>\r\n210sqft <br> \r\nMax: 3 guests\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '180.00', 'pics/tripleRoom.jpg', 3),
(5, 'Triple Room', '3 Single beds<br>\r\n185sqft <br> \r\nMax: 3 guests\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '164.00', 'pics/tripleRoom2.jpg', 2),
(6, 'Triple Room', '1 Full bed and 1 Single bed<br>\r\n210sqft <br> \r\nMax: 3 guests\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '180.00', 'pics/tripleRoom3.jpg', 1),
(7, 'Queen Room', '1 Queen bed<br>\r\n170sqft <br> \r\nMax: 2 guests\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '124.00', 'pics/queenRoom.jpg', 2),
(8, 'Queen Room', '1 Queen bed<br>\r\n200sqft <br> \r\nMax: 2 guests\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '134.00', 'pics/queenRoom2.jpg', 1),
(9, 'King Room', '1 King bed<br>\r\n170sqft <br> \r\nMax: 2 guests\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '129.00', 'pics/kingRoom.jpg', 2),
(10, 'King Room', '1 King bed<br>\r\n200sqft <br> \r\nMax: 2 guests', '139.00', 'pics/kingRoom2.jpg', 1),
(11, 'Quad Room', '2 Full beds<br>\r\n\r\n220sqft <br> \r\n\r\nMax: 4 guests', '415.00', 'pics/quadRoom2.jpg', 2),
(12, 'Quad Room', '1 Full bed and 2 single beds<br>\r\n220sqft <br> \r\nMax: 4 guests', '420.00', 'pics/quadRoom4.jpg', 3),
(13, 'Quad Room', '1 Full bed and 2 single beds<br>\r\n220sqft <br> \r\nMax: 4 guests<br> (L-Shaped room)', '420.00', 'pics/quadRoom1.jpg', 4),
(14, 'Quad Room', '2 Queen beds<br>\r\n\r\n\r\n\r\n220sqft <br> \r\n\r\n\r\n\r\nMax: 4 guests\r\n\r\n', '400.00', 'pics/quadRoom3.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `phoneNum` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffID`, `username`, `password`, `fName`, `lName`, `phoneNum`) VALUES
(1, 'admin', 'admin', 'Danish', 'Hamdani', '0197376693');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `fName`, `lName`, `phone`, `username`, `password`, `gender`, `email`) VALUES
(3, 'Ashraf', 'Johari', '0192873562', 'Jo', '123456', 'male', 'bonjovi120@yahoo.com'),
(23, 'Syarif', 'Kamil', '0123456789', 'Syarep', '1234', 'male', 'syarep666@gmail.com'),
(24, 'Aniq', 'Nazari', '0192727221', 'Aniq', '666666', 'Male', 'aniq@gmail.com'),
(25, 'Jefri', 'Luqman', '0123152794', 'Jefri', '1234', 'Male', 'jefri@yahoo.com'),
(26, 'Misssss', 'Huzaifah', '0129321821', 'MissHuzaifah', '1234', 'Female', 'misshuzaifah99@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingID`);

--
-- Indexes for table `hotelroom`
--
ALTER TABLE `hotelroom`
  ADD PRIMARY KEY (`roomID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `hotelroom`
--
ALTER TABLE `hotelroom`
  MODIFY `roomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
