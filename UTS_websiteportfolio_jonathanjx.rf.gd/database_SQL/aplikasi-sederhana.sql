-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 21, 2021 at 07:28 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi-sederhana`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) DEFAULT NULL,
  `header1` varchar(50) DEFAULT NULL,
  `p1` varchar(200) DEFAULT NULL,
  `p2` varchar(200) DEFAULT NULL,
  `content` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `header1`, `p1`, `p2`, `content`) VALUES
(1, 'ABOUT', 'My name is Jonathan, born in South Tangerang on 24-January-1999. Loves design, a web builder too.', 'This website is the content of all the activities and works that I have ever made, for personal, small companies, and large companies.', 'Let\'s get started!');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) DEFAULT NULL,
  `h1` varchar(50) DEFAULT NULL,
  `h1content1` varchar(50) DEFAULT NULL,
  `h1content2` varchar(50) DEFAULT NULL,
  `h2` varchar(50) DEFAULT NULL,
  `h2link1` varchar(50) DEFAULT NULL,
  `h2link2` varchar(50) DEFAULT NULL,
  `h2link3` varchar(50) DEFAULT NULL,
  `h2link4` varchar(50) DEFAULT NULL,
  `h3` varchar(250) DEFAULT NULL,
  `h3content1` varchar(250) DEFAULT NULL,
  `h3link1` varchar(50) DEFAULT NULL,
  `Copyright1` varchar(50) DEFAULT NULL,
  `Copyright2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `h1`, `h1content1`, `h1content2`, `h2`, `h2link1`, `h2link2`, `h2link3`, `h2link4`, `h3`, `h3content1`, `h3link1`, `Copyright1`, `Copyright2`) VALUES
(1, 'Location', 'Jakarta Barat', 'Taman Anggrek Residence Unit 5/20', 'Around the Web', 'https://web.facebook.com/jonathan.builana/', NULL, NULL, 'https://www.instagram.com/wllmjonathann', 'About Freelancer', 'Commitment to build and serve best for customer, Feel free to see around my portfolio website!', 'Get started', 'Copyright', 'jonathan.jx.com');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `list` varchar(50) DEFAULT NULL,
  `examp` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `list`, `examp`) VALUES
(1, 'Portofolio example 1:', 'port1.jpg'),
(2, 'Portofolio example 2:', 'port2.jpg'),
(3, 'Portofolio example 3:', 'port3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `namadepan` varchar(50) DEFAULT NULL,
  `namabelakang` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `jobdesc` varchar(250) DEFAULT NULL,
  `logo` varchar(150) DEFAULT NULL,
  `profilepict` varchar(150) DEFAULT NULL,
  `portfolio1` varchar(100) DEFAULT NULL,
  `portfolio2` varchar(100) DEFAULT NULL,
  `portfolio3` varchar(100) DEFAULT NULL,
  `portfolio4` varchar(100) DEFAULT NULL,
  `portfolio5` varchar(100) DEFAULT NULL,
  `portfolio6` varchar(100) DEFAULT NULL,
  `navbar1` varchar(50) DEFAULT NULL,
  `navbar2` varchar(50) DEFAULT NULL,
  `navbar3` varchar(50) DEFAULT NULL,
  `navbar4` varchar(50) DEFAULT NULL,
  `navbar5` varchar(50) DEFAULT NULL,
  `navbar6` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel mahasiswa';

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `namadepan`, `namabelakang`, `email`, `image`, `jobdesc`, `logo`, `profilepict`, `portfolio1`, `portfolio2`, `portfolio3`, `portfolio4`, `portfolio5`, `portfolio6`, `navbar1`, `navbar2`, `navbar3`, `navbar4`, `navbar5`, `navbar6`) VALUES
('001', 'Dewi', 'Henria', 'dewihenria@gmail.com', 'item brody.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('002', 'Pinkan', 'Patricia', 'pp008@gmail.com', 'Screenshot_1.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('003', 'Leora', 'Elza', 'ilin@gmail.com', 'Screenshot_2.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('004', 'Vanessa', '-', 'vanessc@gmail.com', 'Screenshot_3.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('005', 'Jonathan', 'Jx', 'jonathan.jx@gmail.com', 'Screenshot_4.png', 'Live Stream Operator - Web Designer - Illustrator', 'JLOGO.png', 'avataaars.svg', 'cabin.png', 'cake.png', 'circus.png', 'game.png', 'safe.png', 'submarine.png', 'Home', 'Portfolio', 'About', 'Contact', 'Gallery', 'Dashboard Admin'),
('006', 'Hurr', 'William', 'huri.enca@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `portdesc` varchar(500) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `type`, `portdesc`, `image`) VALUES
(1, 'Log Cabin', 'Contoh portfolio1, text ini diambil dari database', 'cabin.png'),
(2, 'Tasty Cake', 'Contoh portfolio2, text ini diambil dari database', 'cake.png'),
(3, 'Circus Tent', 'Contoh portfolio3, text ini diambil dari database', 'circus.png'),
(4, 'Controller', 'Contoh portfolio4, text ini diambil dari database', 'game.png'),
(5, 'Locked Safe', 'Contoh portfolio5, text ini diambil dari database', 'safe.png'),
(6, 'Submarine', 'Contoh portfolio6, text ini diambil dari database', 'submarine.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
