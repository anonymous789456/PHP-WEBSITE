-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 02:51 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `messagein`
--

CREATE TABLE `messagein` (
  `Id` int(11) NOT NULL,
  `SendTime` datetime DEFAULT NULL,
  `ReceiveTime` datetime DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `SMSC` varchar(80) DEFAULT NULL,
  `MessageText` text,
  `MessageType` varchar(80) DEFAULT NULL,
  `MessageParts` int(11) DEFAULT NULL,
  `MessagePDU` text,
  `Gateway` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messagein`
--

INSERT INTO `messagein` (`Id`, `SendTime`, `ReceiveTime`, `MessageFrom`, `MessageTo`, `SMSC`, `MessageText`, `MessageType`, `MessageParts`, `MessagePDU`, `Gateway`, `UserId`) VALUES
(1, '2017-11-02 05:19:29', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FB0302,870906890101C651018715060350524F585932000187070603534D415254204D4D530001C65201872F060350524F5859325F3100018720060331302E3130322E36312E343600018721068501872206034E4150475052535F320001C6530187230603383038300001010101C600015501873606037734000187070603534D4152', NULL, NULL, NULL, NULL, NULL),
(2, '2017-11-02 05:19:34', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FB0303,54204D4D5300018739060350524F585932000187340603687474703A2F2F31302E3130322E36312E3233383A383030322F00010101', NULL, NULL, NULL, NULL, NULL),
(3, '2017-11-02 05:19:14', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FA0201,6C062F1F2DB69180923646443032463643313042394231363544354242413143304143413232424334343239453236423600030B6A00C54503312E310001C6560187070603534D41525420494E5445524E4554000101C65501871106034E4150475052535F330001871006AB0187070603534D41525420494E5445524E455400', NULL, NULL, NULL, NULL, NULL),
(4, '2017-11-02 05:19:19', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FA0202,0187140187080603696E7465726E65740001870906890101C600015501873606037732000187070603534D41525420494E5445524E45540001872206034E4150475052535F330001C65901873A0603687474703A2F2F6D2E736D6172742E636F6D2E7068000187070603484F4D450001871C01010101', NULL, NULL, NULL, NULL, NULL),
(5, '2017-11-02 05:19:24', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FB0301,6D062F1F2DB69180923432373832413042464145313131463335303137323744303141433530304134373930423843334500030B6A00C54503312E310001C6560187070603534D415254204D4D53000101C65501871106034E4150475052535F320001871006AB0187070603534D415254204D4D530001870806036D6D730001', NULL, NULL, NULL, NULL, NULL),
(6, '2017-11-02 05:19:29', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FB0302,870906890101C651018715060350524F585932000187070603534D415254204D4D530001C65201872F060350524F5859325F3100018720060331302E3130322E36312E343600018721068501872206034E4150475052535F320001C6530187230603383038300001010101C600015501873606037734000187070603534D4152', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messagelog`
--

CREATE TABLE `messagelog` (
  `Id` int(11) NOT NULL,
  `SendTime` datetime DEFAULT NULL,
  `ReceiveTime` datetime DEFAULT NULL,
  `StatusCode` int(11) DEFAULT NULL,
  `StatusText` varchar(80) DEFAULT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageText` text,
  `MessageType` varchar(80) DEFAULT NULL,
  `MessageId` varchar(80) DEFAULT NULL,
  `ErrorCode` varchar(80) DEFAULT NULL,
  `ErrorText` varchar(80) DEFAULT NULL,
  `Gateway` varchar(80) DEFAULT NULL,
  `MessageParts` int(11) DEFAULT NULL,
  `MessagePDU` text,
  `Connector` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL,
  `UserInfo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messagelog`
--

INSERT INTO `messagelog` (`Id`, `SendTime`, `ReceiveTime`, `StatusCode`, `StatusText`, `MessageTo`, `MessageFrom`, `MessageText`, `MessageType`, `MessageId`, `ErrorCode`, `ErrorText`, `Gateway`, `MessageParts`, `MessagePDU`, `Connector`, `UserId`, `UserInfo`) VALUES
(1, '2018-01-27 20:38:08', NULL, 300, NULL, '09305235027', 'Hello Poh', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2018-01-27 20:39:06', NULL, 300, NULL, '09305235027', 'Hello Poh', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2018-01-27 20:49:14', NULL, 300, NULL, '09305235027', 'hi poh', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '2018-01-27 20:50:56', NULL, 300, NULL, '09508767867', 'hi poh', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '2018-02-09 17:52:26', NULL, 300, NULL, '09486457414', 'Test to send', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '2018-02-09 17:54:27', NULL, 300, NULL, '09486457414', 'Test to send', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '2018-02-09 17:55:11', NULL, 300, NULL, '09486457414', 'Test to send', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '2018-02-09 17:59:11', NULL, 300, NULL, '09486457414', 'Test to send', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '2018-02-09 18:00:12', NULL, 200, NULL, '+639486457414', 'yes', NULL, NULL, '1:+639486457414:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '2018-02-09 18:01:12', NULL, 200, NULL, '+639486457414', 'Test to send', NULL, NULL, '1:+639486457414:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '2018-02-09 18:02:58', NULL, 200, NULL, '+639486457414', 'FROM JANNO : Confirmed', NULL, NULL, '1:+639486457414:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '2018-02-09 18:05:22', NULL, 200, NULL, '+639486457414', 'FROM Bachelor of Science and Entrepreneurs : Your order has been .Confirmed', NULL, NULL, '1:+639486457414:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '2018-02-09 18:08:14', NULL, 200, NULL, '+639486457414', 'FROM Bachelor of Science and Entrepreneurs : Your order has been .Confirmed', NULL, NULL, '1:+639486457414:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '2018-02-09 18:21:41', NULL, 200, NULL, '+639486457414', 'FROM Bachelor of Science and Entrepreneurs : Your order has been .Confirmed', NULL, NULL, '1:+639486457414:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '2018-04-01 22:17:34', NULL, 300, NULL, '09123586545', 'Your code is .6048', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, '2018-04-01 22:18:20', NULL, 300, NULL, '09123586545', 'Your code is .9305', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '2018-04-01 22:20:15', NULL, 300, NULL, '09123586545', 'Your code is .2924', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '2018-04-01 22:42:36', NULL, 300, NULL, '09123586545', 'Your code is .6938', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '2018-04-02 00:40:53', NULL, 300, NULL, '9956112920', 'Your code is .7290', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, '2018-04-02 00:42:14', NULL, 300, NULL, '9956112920', 'Your code is .4506', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, '2018-04-02 00:43:46', NULL, 300, NULL, '9956112920', 'Your code is .4506', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '2018-04-02 00:45:56', NULL, 300, NULL, '09956112920', 'Your code is .6988', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, '2018-04-02 00:47:17', NULL, 300, NULL, '09956112920', 'Your code is .4380', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, '2018-04-02 00:48:53', NULL, 200, NULL, '639956112920', 'Your code is .5936', NULL, NULL, '1:639956112920:129', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, '2018-04-02 00:50:29', NULL, 200, NULL, '639956112920', 'Your code is .5349', NULL, NULL, '1:639956112920:130', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, '2018-04-02 00:53:32', NULL, 200, NULL, '639956112920', 'Your code is', NULL, NULL, '1:639956112920:131', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, '2018-04-02 00:54:43', NULL, 200, NULL, '639956112920', 'Your code is 3407', NULL, NULL, '1:639956112920:132', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messageout`
--

CREATE TABLE `messageout` (
  `Id` int(11) NOT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageText` text,
  `MessageType` varchar(80) DEFAULT NULL,
  `Gateway` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL,
  `UserInfo` text,
  `Priority` int(11) DEFAULT NULL,
  `Scheduled` datetime DEFAULT NULL,
  `ValidityPeriod` int(11) DEFAULT NULL,
  `IsSent` tinyint(1) NOT NULL DEFAULT '0',
  `IsRead` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblautonumber`
--

CREATE TABLE `tblautonumber` (
  `ID` int(11) NOT NULL,
  `AUTOSTART` varchar(11) NOT NULL,
  `AUTOINC` int(11) NOT NULL,
  `AUTOEND` int(11) NOT NULL,
  `AUTOKEY` varchar(12) NOT NULL,
  `AUTONUM` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblautonumber`
--

INSERT INTO `tblautonumber` (`ID`, `AUTOSTART`, `AUTOINC`, `AUTOEND`, `AUTOKEY`, `AUTONUM`) VALUES
(1, '2017', 1, 92, 'PROID', 10),
(2, '0', 1, 110, 'ordernumber', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `CATEGID` int(11) NOT NULL,
  `CATEGORIES` varchar(255) NOT NULL,
  `USERID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`CATEGID`, `CATEGORIES`, `USERID`) VALUES
(20, 'Paintings', 0),
(21, 'Sculptures', 0),
(22, 'Glass Paintings', 0),
(23, 'Portraits', 0),
(24, 'Drawings', 0),
(25, 'Architectures', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE `tblcustomer` (
  `CUSTOMERID` int(11) NOT NULL,
  `FNAME` varchar(30) NOT NULL,
  `LNAME` varchar(30) NOT NULL,
  `MNAME` varchar(30) NOT NULL,
  `CUSHOMENUM` varchar(90) NOT NULL,
  `STREETADD` text NOT NULL,
  `BRGYADD` text NOT NULL,
  `CITYADD` text NOT NULL,
  `PROVINCE` varchar(80) NOT NULL,
  `COUNTRY` varchar(30) NOT NULL,
  `DBIRTH` date NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `EMAILADD` varchar(40) NOT NULL,
  `ZIPCODE` int(6) NOT NULL,
  `CUSUNAME` varchar(20) NOT NULL,
  `CUSPASS` varchar(90) NOT NULL,
  `CUSPHOTO` varchar(255) NOT NULL,
  `TERMS` tinyint(4) NOT NULL,
  `DATEJOIN` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`CUSTOMERID`, `FNAME`, `LNAME`, `MNAME`, `CUSHOMENUM`, `STREETADD`, `BRGYADD`, `CITYADD`, `PROVINCE`, `COUNTRY`, `DBIRTH`, `GENDER`, `PHONE`, `EMAILADD`, `ZIPCODE`, `CUSUNAME`, `CUSPASS`, `CUSPHOTO`, `TERMS`, `DATEJOIN`) VALUES
(1, 'janobe', 'Palacios', '', '321', 'Coloso Street', 'brgy. 1', 'Kabankalan City', 'Negros Occidental', 'Philippines', '0000-00-00', 'Male', '+639956112920', '', 6111, 'kenjie@yahoo.com', '1dd4efc811372cd1efe855981a8863d10ddde1ca', 'customer_image/a1157016c5d8272126380b27a59e2e7e.jpg', 1, '2015-11-26'),
(18, 'loner', 'perez', '', '', 'riverside', 'bebe matua', 'masantol', 'pampanga', '', '0000-00-00', 'Male', '09192252269', '', 0, 'loner17', '7a9ec141588dddfe750df5f3d18ca8ccbe857ebb', 'customer_image/cahn.png', 1, '2022-06-01'),
(19, 'melvin', 'reyes', '', '', 'purok2', 'cupang', 'arayat', 'pampanga', '', '0000-00-00', 'Male', '09192252269', '', 0, 'melvin', '2b282a0767b6990ac5edd12f34fdf76d70440789', 'customer_image/Melvs.png', 1, '2022-06-01'),
(20, 'melvin', 'reyes', '', '', 'purok2', 'cupang', 'arayat', 'Pampapanga', '', '0000-00-00', 'Male', '09192252269', '', 0, 'melvinreyes', '2b282a0767b6990ac5edd12f34fdf76d70440789', '', 1, '2022-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `ORDERID` int(11) NOT NULL,
  `PROID` int(11) NOT NULL,
  `ORDEREDQTY` int(11) NOT NULL,
  `ORDEREDPRICE` double NOT NULL,
  `ORDEREDNUM` int(11) NOT NULL,
  `USERID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`ORDERID`, `PROID`, `ORDEREDQTY`, `ORDEREDPRICE`, `ORDEREDNUM`, `USERID`) VALUES
(1, 201737, 4, 476, 93, 0),
(2, 201740, 3, 447, 93, 0),
(3, 201738, 1, 199, 94, 0),
(4, 201770, 1, 450, 95, 0),
(5, 201770, 1, 450, 96, 0),
(6, 201770, 1, 450, 97, 0),
(7, 201758, 1, 2500, 97, 0),
(8, 201770, 1, 450, 98, 0),
(9, 201775, 1, 5500, 99, 0),
(10, 201758, 1, 2500, 100, 0),
(11, 201758, 1, 2500, 101, 0),
(12, 201779, 1, 5500, 102, 0),
(13, 201780, 1, 6600, 103, 0),
(14, 201775, 1, 550, 104, 0),
(15, 201775, 1, 450, 105, 0),
(16, 201775, 1, 550, 106, 0),
(17, 201775, 1, 450, 107, 0),
(18, 201758, 1, 2500, 107, 0),
(19, 201775, 1, 450, 108, 0),
(20, 201779, 1, 5500, 109, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `PROID` int(11) NOT NULL,
  `PRODESC` varchar(255) DEFAULT NULL,
  `INGREDIENTS` varchar(255) NOT NULL,
  `PROQTY` int(11) DEFAULT NULL,
  `ORIGINALPRICE` double NOT NULL,
  `PROPRICE` double DEFAULT NULL,
  `CATEGID` int(11) DEFAULT NULL,
  `IMAGES` varchar(255) DEFAULT NULL,
  `PROSTATS` varchar(30) DEFAULT NULL,
  `OWNERNAME` varchar(90) NOT NULL,
  `OWNERPHONE` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`PROID`, `PRODESC`, `INGREDIENTS`, `PROQTY`, `ORIGINALPRICE`, `PROPRICE`, `CATEGID`, `IMAGES`, `PROSTATS`, `OWNERNAME`, `OWNERPHONE`) VALUES
(201756, 'Title: Wooden Eagle\r\nHeight: 58.42cm | Width: 38.1cm\r\nMaterial used: Mahogany, bar and painting for vanish                                                                                                              ', '', 1, 0, 2500, 21, 'uploaded_photos/Bald eagle.png', 'Available', 'Arnel Kalaw Catacutan', '09289553761'),
(201757, 'Title: Black Goldern Dragon\r\nHeight: 38.59cm | Width: 45.02cm\r\nMaterial used: Iron, black paint and gold paint                                            ', '', 1, 0, 4300, 21, 'uploaded_photos/Dragon Display.jpg', 'Available', 'Arvene Ugnay', '09734683385'),
(201758, 'Title: Monkey D Luffy\r\nHeight: 38.26cm | Width: 23.87cm\r\nMaterial used: Marker, acrylic enamel and acrylics marked                                                                                                                                ', '', 1, 0, 2500, 22, 'uploaded_photos/glass1.jpg', 'Available', 'Jeremy Torres', '09543669323'),
(201759, 'Glass paint of naruto main characters(Naruto, Sasuke, Sakura, Kakashi).', '', 1, 0, 2500, 0, 'uploaded_photos/glass2.jpg', 'Available', 'Jeremy Torres', '09543669323'),
(201761, 'Title: Naruto\'s main characters\r\nHeight: 38.26ccm | Width: 23.87cm\r\nMaterial used: Marker, acrylic enamel and acrylics marked                                            ', '', 1, 0, 2500, 22, 'uploaded_photos/glass2.jpg', 'Available', 'Jeremy Torres', '09543669323'),
(201762, 'Title: Billie Eilish\r\nHeight: 34.23cm | Width: 22.87cm\r\nMaterial used: Graphite pencils, Ink, Charcoal, artists pencils and carrÃ© sticks                                           ', '', 1, 0, 3500, 23, 'uploaded_photos/port-billie.jpg', 'Available', 'Jeremy Torres', '09543669323'),
(201763, 'Title: Kyrie Irving\r\nHeight: 34.23cm | Width: 22.87cm\r\nMaterial used: Graphite pencils, charcoal, chalk, artists pencils and colored pencils                                                                                        ', '', 1, 0, 4200, 23, 'uploaded_photos/port-irving.jpg', 'Available', 'Jeremy Torres', '09543669323'),
(201764, 'Title: Kobe Bryant\r\nHeight: 34.23cm | Width: 22.87cm\r\nMaterial used: Graphite pencils, charcoal, chalk, artists pencils and colored pencils                                                                                                              ', '', 1, 0, 4500, 23, 'uploaded_photos/port-kobe.jpg', 'Available', 'Jeremy Torres', '09543669323'),
(201765, 'Title: Kobe Bryant\r\nHeight: 34.23cm | Width: 22.87cm\r\nMaterial used: Graphite pencils, charcoal, chalk, artists pencils and colored pencils                                                                                                                    ', '', 1, 0, 4200, 23, 'uploaded_photos/port-kobe2.jpg', 'Available', 'Jeremy Torres', '09543669323'),
(201766, 'Title: Lalisa Monoban\r\nHeight: 34.23cm | Width: 22.87cm\r\nMaterial used: Graphite pencils, charcoal, chalk, artists pencils and colored pencils                                                                                        ', '', 1, 0, 4000, 23, 'uploaded_photos/port-lalisa.jpg', 'Available', 'Jeremy Torres', '09543669323'),
(201767, 'Title: Lebron James\r\nHeight: 34.23cm | Width: 22.87cm\r\nMaterial used: Graphite pencils, charcoal, chalk, artists pencils and colored pencils                                                                                        ', '', 1, 0, 4500, 23, 'uploaded_photos/port-leb.jpg', 'Available', 'Jeremy Torres', '09543669323'),
(201771, 'Title: Pathenon Athens\r\nHeight: 21.59cm | Width: 33.02cm\r\nMaterial used: Pen, painting palette and colored pencils                                                                  ', '', 1, 0, 700, 25, 'uploaded_photos/IMG_20210119_231324.jpg', 'Available', 'Maxine Rose Manansala', '09159315176'),
(201772, 'Title: Man\'s Bestfriend\r\nHeight: 32.23cm | Width: 22.87cm\r\nMaterial used: Graphite pencils, charcoal, chalk, artists pencils and colored pencils                                                                                                               ', '', 1, 0, 1350, 23, 'uploaded_photos/IMG_20210120_232449.jpg', 'Available', 'Maxine Rose Manansala', '09159315176'),
(201773, 'Title: Royale Palace\r\nHeight: 31.59cm | Width: 20.02cm\r\nMaterial used: Pen, artist pen shade and charcoal                       ', '', 1, 0, 400, 24, 'uploaded_photos/IMG_20210226_000910.jpg', 'Available', 'Maxine Rose Manansala', '09159315176'),
(201774, 'Title: The Flavian Amphitheatre\r\nHeight: 30.13cm | Width: 21.32cm\r\nMaterial used: Pen, painting palette and oil pastel                      ', '', 1, 0, 920, 25, 'uploaded_photos/IMG_20210228_092310.jpg', 'Available', 'Maxine Rose Manansala', '09159315176'),
(201775, 'Title: Wine Grapes\r\nHeight: 19.89cm | Width: 31.12cm\r\nMaterial used: Pen, painting palette, colored pencils and pen shade                                                                                                                                      ', '', 1, 0, 450, 20, 'uploaded_photos/IMG_20210513_124306.jpg', 'Available', 'Maxine Rose Manansala', '09159315176'),
(201776, 'Title: King Lebron portrait\r\nHeight: 32.49cm | Width: 22.05cm\r\nMaterial used: Charcoal stick, white chalk and contÃ© crayons                                                                  ', '', 1, 0, 1500, 24, 'uploaded_photos/IMG_20220429_210700.jpg', 'Available', 'Maxine Rose Manansala', '09159315176'),
(201777, 'Title: Old native Filipina\r\nHeight: 32.23cm | Width: 22.87cm\r\nMaterial used: Graphite pencils, charcoal, chalk, artists pencils and colored pencils                                                                                                            ', '', 1, 0, 1300, 23, 'uploaded_photos/IMG_20220429_210735.jpg', 'Available', 'Maxine Rose Manansala', '09159315176'),
(201778, 'Title: Dome of the Rock\r\nHeight: 21.59cm | Width: 33.02cm\r\nMaterial used: Pen, oil pastel, markers and crayons                      ', '', 1, 0, 350, 25, 'uploaded_photos/MANANSALA, MAXINE (PLT.)_4(3).jpg', 'Available', 'Maxine Rose Manansala', '09159315176'),
(201779, 'Title: Lebron the King\r\nHeight: 48.69cm | Width: 34.12cm\r\nMaterial used: Pen, painting palette, oil pastel, charcoal and colored pencils                                                                                        ', '', 1, 0, 5500, 20, 'uploaded_photos/king.jpg', 'Available', 'Michael Mariano', '09289522943'),
(201780, 'Title: Michael Jordan the Legend\r\nHeight: 48.69cm | Width: 34.12cm\r\nMaterial used: Pen, painting palette, oil pastel, charcoal and colored pencils                                                                                        ', '', 1, 0, 6600, 20, 'uploaded_photos/legend.jpg', 'Available', 'Michael Mariano', '09289522943'),
(201781, 'Title: High Rise Building\r\nHeight: 33.69cm | Width: 20.12cm\r\nMaterial used: Pen, oil pastel and colored pencils                                                                                                              ', '', 1, 0, 300, 25, 'uploaded_photos/build.jpg', 'Available', 'Gerlie Manansala CariÃ±o', '09236907896'),
(201786, 'Title: Nature feels\r\nHeight: 30.13cm| Width: 20.12\r\nMaterial used: Pen, oil pastel, shading pen and colored pencils\r\n                  ', '', 1, 0, 500, 0, 'uploaded_photos/1652848514866.jpg', 'Available', 'GwnTnnyson', '09051289631'),
(201787, 'Title: Deadly Woman\r\nHeight: 31.12cm| Width: 20.55cm\r\nMaterial used: Pen, painting palette and oil pastel\r\n                                        ', '', 1, 0, 580, 20, 'uploaded_photos/1652848514882.jpg', 'Available', 'Gwen F. Digneneng', '09051289631'),
(201788, 'Title: Nature Feels\r\nHeight: 32.33cm | Width: 21.45cm\r\nMaterial used: Pen, oil pastel, markers and crayons\r\n                                        ', '', 1, 0, 420, 20, 'uploaded_photos/1652848514866.jpg', 'Available', 'Gwen F. Digneneng', '09051289631'),
(201789, 'Title: 3 themes of a Day\r\nHeight: 24.76cm | Width: 35.65cm\r\nMaterial used: Pen, painting palette, colored pencils and pen shade\r\n                                                              ', '', 1, 0, 850, 20, 'uploaded_photos/1652848514897.jpg', 'Available', 'Gwen F. Digneneng', '09051289631'),
(201790, 'Title: Tiger Spirit\r\nHeight: 22.44cm | Width: 34.12cm\r\nMaterial used: Pen, artist pen shade, ink and graphite\r\n                                                              ', '', 1, 0, 1080, 24, 'uploaded_photos/1652849179700.jpg', 'Available', 'Gwen F. Digneneng', '09051289631'),
(201791, 'Title: Great Mosque of Kairouan\r\nHeight: 17.45cm | Width: 28.22cm\r\nMaterial used: Pen, color pencil, crayon, pen shade and oil pastel\r\n                                        ', '', 1, 0, 250, 25, 'uploaded_photos/IMG_20220516_181900.jpg', 'Available', 'Patricia Anne Angeles', '09973367801');

-- --------------------------------------------------------

--
-- Table structure for table `tblpromopro`
--

CREATE TABLE `tblpromopro` (
  `PROMOID` int(11) NOT NULL,
  `PROID` int(11) NOT NULL,
  `PRODISCOUNT` double NOT NULL,
  `PRODISPRICE` double NOT NULL,
  `PROBANNER` tinyint(4) NOT NULL,
  `PRONEW` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpromopro`
--

INSERT INTO `tblpromopro` (`PROMOID`, `PROID`, `PRODISCOUNT`, `PRODISPRICE`, `PROBANNER`, `PRONEW`) VALUES
(20, 201756, 0, 4500, 0, 0),
(21, 201757, 0, 5300, 0, 0),
(22, 201758, 0, 2500, 0, 0),
(23, 201759, 0, 2500, 0, 0),
(25, 201761, 0, 2500, 0, 0),
(26, 201762, 0, 5500, 0, 0),
(27, 201763, 0, 5000, 0, 0),
(28, 201764, 0, 6500, 0, 0),
(29, 201765, 0, 6000, 0, 0),
(30, 201766, 0, 5300, 0, 0),
(31, 201767, 0, 6500, 0, 0),
(35, 201771, 0, 1200, 0, 0),
(36, 201772, 0, 600, 0, 0),
(37, 201773, 0, 400, 0, 0),
(38, 201774, 0, 900, 0, 0),
(39, 201775, 0, 550, 0, 0),
(40, 201776, 0, 1500, 0, 0),
(41, 201777, 0, 1300, 0, 0),
(42, 201778, 0, 350, 0, 0),
(43, 201779, 0, 5500, 0, 0),
(44, 201780, 0, 6600, 0, 0),
(45, 201781, 0, 300, 0, 0),
(46, 201782, 0, 400, 0, 0),
(47, 201783, 0, 350, 0, 0),
(48, 201784, 0, 32, 0, 0),
(50, 201786, 0, 500, 0, 0),
(51, 201787, 0, 580, 0, 0),
(52, 201788, 0, 420, 0, 0),
(53, 201789, 0, 850, 0, 0),
(54, 201790, 0, 1080, 0, 0),
(55, 201791, 0, 250, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblsetting`
--

CREATE TABLE `tblsetting` (
  `SETTINGID` int(11) NOT NULL,
  `PLACE` text NOT NULL,
  `BRGY` varchar(90) NOT NULL,
  `DELPRICE` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblstockin`
--

CREATE TABLE `tblstockin` (
  `STOCKINID` int(11) NOT NULL,
  `STOCKDATE` datetime DEFAULT NULL,
  `PROID` int(11) DEFAULT NULL,
  `STOCKQTY` int(11) DEFAULT NULL,
  `STOCKPRICE` double DEFAULT NULL,
  `USERID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblsummary`
--

CREATE TABLE `tblsummary` (
  `SUMMARYID` int(11) NOT NULL,
  `ORDEREDDATE` datetime NOT NULL,
  `CUSTOMERID` int(11) NOT NULL,
  `ORDEREDNUM` int(11) NOT NULL,
  `DELFEE` double NOT NULL,
  `PAYMENT` double NOT NULL,
  `PAYMENTMETHOD` varchar(30) NOT NULL,
  `ORDEREDSTATS` varchar(30) NOT NULL,
  `ORDEREDREMARKS` varchar(125) NOT NULL,
  `CLAIMEDADTE` datetime NOT NULL,
  `HVIEW` tinyint(4) NOT NULL,
  `USERID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsummary`
--

INSERT INTO `tblsummary` (`SUMMARYID`, `ORDEREDDATE`, `CUSTOMERID`, `ORDEREDNUM`, `DELFEE`, `PAYMENT`, `PAYMENTMETHOD`, `ORDEREDSTATS`, `ORDEREDREMARKS`, `CLAIMEDADTE`, `HVIEW`, `USERID`) VALUES
(1, '2019-08-21 06:24:24', 9, 93, 0, 0, 'Cash on Delivery', 'Cancelled', 'Your order has been cancelled due to lack of communication and incomplete information.', '0000-00-00 00:00:00', 0, 0),
(3, '2019-08-21 06:27:09', 9, 94, 70, 269, 'Cash on Delivery', 'Confirmed', 'Your order has been confirmed.', '2019-08-21 00:00:00', 1, 0),
(4, '2022-05-17 02:53:18', 11, 95, 0, 450, 'Cash on Delivery', 'Cancelled', 'Your order has been cancelled due to lack of communication and incomplete information.', '0000-00-00 00:00:00', 0, 0),
(5, '2022-05-17 03:04:03', 11, 96, 0, 450, 'Cash on Delivery', 'Confirmed', 'Your order has been confirmed.', '2022-05-17 00:00:00', 0, 0),
(6, '2022-05-17 05:58:12', 14, 97, 0, 2950, 'Cash on Delivery', 'Confirmed', 'Your order has been confirmed.', '2022-05-17 00:00:00', 0, 0),
(7, '2022-05-19 02:45:04', 17, 98, 0, 450, 'Cash on Delivery', 'Pending', 'Your order is on process.', '0000-00-00 00:00:00', 0, 0),
(8, '2022-05-27 03:49:21', 13, 99, 0, 5500, 'Cash on Delivery', 'Pending', 'Your order is on process.', '0000-00-00 00:00:00', 1, 0),
(9, '2022-06-01 02:11:19', 13, 100, 0, 2500, 'Cash on Delivery', 'Pending', 'Your order is on process.', '0000-00-00 00:00:00', 1, 0),
(10, '2022-06-01 02:25:33', 18, 101, 0, 2500, 'Cash on Delivery', 'Confirmed', 'Your order has been confirmed.', '2022-06-01 00:00:00', 1, 0),
(11, '2022-06-01 04:09:45', 19, 102, 0, 5500, 'Cash on Delivery', 'Confirmed', 'Your order has been confirmed.', '2022-06-01 00:00:00', 1, 0),
(12, '2022-06-01 04:13:43', 19, 103, 0, 6600, 'Cash on Delivery', 'Confirmed', 'Your order has been confirmed.', '2022-06-01 00:00:00', 1, 0),
(13, '2022-06-02 12:22:52', 19, 104, 0, 550, 'Cash on Delivery', 'Cancelled', 'Your order has been cancelled due to lack of communication and incomplete information.', '0000-00-00 00:00:00', 1, 0),
(14, '2022-06-02 12:38:54', 19, 105, 0, 450, 'Cash on Delivery', 'Confirmed', 'Your order has been confirmed.', '2022-06-02 00:00:00', 1, 0),
(15, '2022-06-02 12:52:51', 19, 106, 0, 550, 'Cash on Delivery', 'Cancelled', 'Your order has been cancelled due to lack of communication and incomplete information.', '0000-00-00 00:00:00', 1, 0),
(16, '2022-06-02 12:54:10', 18, 107, 0, 2950, 'Cash on Delivery', 'Confirmed', 'Your order has been confirmed.', '2022-06-02 00:00:00', 1, 0),
(17, '2022-06-07 02:24:20', 19, 108, 0, 450, 'Cash on Delivery', 'Confirmed', 'Your order has been confirmed.', '2022-06-07 00:00:00', 1, 0),
(18, '2022-06-07 04:53:37', 20, 109, 0, 5500, 'Cash on Delivery', 'Pending', 'Your order is on process.', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccount`
--

CREATE TABLE `tbluseraccount` (
  `USERID` int(11) NOT NULL,
  `U_NAME` varchar(122) NOT NULL,
  `U_USERNAME` varchar(122) NOT NULL,
  `U_PASS` varchar(122) NOT NULL,
  `U_ROLE` varchar(30) NOT NULL,
  `USERIMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluseraccount`
--

INSERT INTO `tbluseraccount` (`USERID`, `U_NAME`, `U_USERNAME`, `U_PASS`, `U_ROLE`, `USERIMAGE`) VALUES
(128, 'Christian C. Perez', 'christian', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'photos/Picsart_22-04-03_22-45-46-814.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messagein`
--
ALTER TABLE `messagein`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `messagelog`
--
ALTER TABLE `messagelog`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDX_MessageId` (`MessageId`,`SendTime`);

--
-- Indexes for table `messageout`
--
ALTER TABLE `messageout`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDX_IsRead` (`IsRead`);

--
-- Indexes for table `tblautonumber`
--
ALTER TABLE `tblautonumber`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`CATEGID`);

--
-- Indexes for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD PRIMARY KEY (`CUSTOMERID`);

--
-- Indexes for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD PRIMARY KEY (`ORDERID`),
  ADD KEY `USERID` (`USERID`),
  ADD KEY `PROID` (`PROID`),
  ADD KEY `ORDEREDNUM` (`ORDEREDNUM`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`PROID`),
  ADD KEY `CATEGID` (`CATEGID`);

--
-- Indexes for table `tblpromopro`
--
ALTER TABLE `tblpromopro`
  ADD PRIMARY KEY (`PROMOID`),
  ADD UNIQUE KEY `PROID` (`PROID`);

--
-- Indexes for table `tblsetting`
--
ALTER TABLE `tblsetting`
  ADD PRIMARY KEY (`SETTINGID`);

--
-- Indexes for table `tblstockin`
--
ALTER TABLE `tblstockin`
  ADD PRIMARY KEY (`STOCKINID`),
  ADD KEY `PROID` (`PROID`,`USERID`),
  ADD KEY `USERID` (`USERID`);

--
-- Indexes for table `tblsummary`
--
ALTER TABLE `tblsummary`
  ADD PRIMARY KEY (`SUMMARYID`),
  ADD UNIQUE KEY `ORDEREDNUM` (`ORDEREDNUM`),
  ADD KEY `CUSTOMERID` (`CUSTOMERID`),
  ADD KEY `USERID` (`USERID`);

--
-- Indexes for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  ADD PRIMARY KEY (`USERID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messagein`
--
ALTER TABLE `messagein`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messagelog`
--
ALTER TABLE `messagelog`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `messageout`
--
ALTER TABLE `messageout`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblautonumber`
--
ALTER TABLE `tblautonumber`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `CATEGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  MODIFY `CUSTOMERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tblorder`
--
ALTER TABLE `tblorder`
  MODIFY `ORDERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tblpromopro`
--
ALTER TABLE `tblpromopro`
  MODIFY `PROMOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tblsetting`
--
ALTER TABLE `tblsetting`
  MODIFY `SETTINGID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblstockin`
--
ALTER TABLE `tblstockin`
  MODIFY `STOCKINID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblsummary`
--
ALTER TABLE `tblsummary`
  MODIFY `SUMMARYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  MODIFY `USERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
