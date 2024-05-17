-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2024 at 05:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accvo`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodation`
--

CREATE TABLE `accomodation` (
  `id_accomodation` int(11) NOT NULL,
  `accomodation_value` decimal(6,2) NOT NULL,
  `type` varchar(50) NOT NULL,
  `appliances_quality` varchar(50) NOT NULL,
  `electricity` varchar(20) NOT NULL,
  `electricity_bill` decimal(6,2) NOT NULL,
  `water_service` varchar(20) NOT NULL,
  `water_bill` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id_activity` int(11) NOT NULL,
  `title_activity` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `url_image_activity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `aide`
--

CREATE TABLE `aide` (
  `id_aide` int(11) NOT NULL,
  `type_aide` varchar(50) NOT NULL,
  `value_aide` decimal(6,2) NOT NULL,
  `frequency_aide` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id_announcement` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_annoncement` date NOT NULL,
  `url_image` varchar(100) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id_donation` int(20) NOT NULL,
  `date` datetime(6) NOT NULL,
  `id_admin` int(20) NOT NULL,
  `don_value` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id_donor` int(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_admin` int(20) NOT NULL,
  `adress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `father`
--

CREATE TABLE `father` (
  `id_father` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `death_date` date NOT NULL,
  `job` varchar(100) NOT NULL,
  `employer` varchar(50) NOT NULL,
  `social_insurence` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kafil`
--

CREATE TABLE `kafil` (
  `id_kafil` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `CIN` varchar(10) NOT NULL,
  `phone` int(20) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_accomodation` int(11) NOT NULL,
  `id_aide` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `CIN` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_place` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `education_level` varchar(250) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `centres_of_interest` varchar(250) NOT NULL,
  `activities_to_engage_in` varchar(250) NOT NULL,
  `objectives_to_engage` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `image_membre_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orphan`
--

CREATE TABLE `orphan` (
  `id_orphan` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `CIN` varchar(20) NOT NULL,
  `Health_status` varchar(100) NOT NULL,
  `health_problems` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_widow` int(11) NOT NULL,
  `id_kafil` int(11) NOT NULL,
  `id_father` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `url_image_project` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `title_project` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `widow`
--

CREATE TABLE `widow` (
  `id_widow` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `education_level` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `job` varchar(60) NOT NULL,
  `salery` decimal(6,2) NOT NULL,
  `CIN` varchar(10) NOT NULL,
  `RAMEED_card` varchar(50) NOT NULL,
  `validity` varchar(50) NOT NULL,
  `funds_type` varchar(10) NOT NULL,
  `funds_value` decimal(6,2) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_accomodation` int(11) NOT NULL,
  `id_aide` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodation`
--
ALTER TABLE `accomodation`
  ADD PRIMARY KEY (`id_accomodation`);

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id_activity`),
  ADD KEY `fk_activité_admin` (`id_admin`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `aide`
--
ALTER TABLE `aide`
  ADD PRIMARY KEY (`id_aide`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id_announcement`),
  ADD KEY `fk_annonce_admin` (`id_admin`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id_donation`),
  ADD KEY `fk_donation_admin` (`id_admin`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id_donor`),
  ADD KEY `fk_donateur_admin` (`id_admin`);

--
-- Indexes for table `father`
--
ALTER TABLE `father`
  ADD PRIMARY KEY (`id_father`);

--
-- Indexes for table `kafil`
--
ALTER TABLE `kafil`
  ADD PRIMARY KEY (`id_kafil`),
  ADD KEY `fk_kafil_admin` (`id_admin`),
  ADD KEY `fk_kafil_aide` (`id_aide`),
  ADD KEY `fk_kafil_accomodation` (`id_accomodation`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`),
  ADD KEY `fk_member_admin` (`id_admin`);

--
-- Indexes for table `orphan`
--
ALTER TABLE `orphan`
  ADD PRIMARY KEY (`id_orphan`),
  ADD KEY `fk_orphan_admin` (`id_admin`),
  ADD KEY `fk_orphan_kafil` (`id_kafil`),
  ADD KEY `fk_orphan_widow` (`id_widow`),
  ADD KEY `fk_orphan_father` (`id_father`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`),
  ADD KEY `fk_project_admin` (`id_admin`);

--
-- Indexes for table `widow`
--
ALTER TABLE `widow`
  ADD PRIMARY KEY (`id_widow`),
  ADD KEY `fk_veuve_accomodation` (`id_accomodation`),
  ADD KEY `fk_widow_admin` (`id_admin`),
  ADD KEY `fk_widow_aide` (`id_aide`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accomodation`
--
ALTER TABLE `accomodation`
  MODIFY `id_accomodation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id_activity` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aide`
--
ALTER TABLE `aide`
  MODIFY `id_aide` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id_announcement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id_donation` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id_donor` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `father`
--
ALTER TABLE `father`
  MODIFY `id_father` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kafil`
--
ALTER TABLE `kafil`
  MODIFY `id_kafil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orphan`
--
ALTER TABLE `orphan`
  MODIFY `id_orphan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `widow`
--
ALTER TABLE `widow`
  MODIFY `id_widow` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `fk_activité_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `fk_annonce_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `fk_donation_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `fk_donateur_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `kafil`
--
ALTER TABLE `kafil`
  ADD CONSTRAINT `fk_kafil_accomodation` FOREIGN KEY (`id_accomodation`) REFERENCES `accomodation` (`id_accomodation`),
  ADD CONSTRAINT `fk_kafil_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `fk_kafil_aide` FOREIGN KEY (`id_aide`) REFERENCES `aide` (`id_aide`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `fk_member_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `orphan`
--
ALTER TABLE `orphan`
  ADD CONSTRAINT `fk_orphan_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `fk_orphan_father` FOREIGN KEY (`id_father`) REFERENCES `father` (`id_father`),
  ADD CONSTRAINT `fk_orphan_kafil` FOREIGN KEY (`id_kafil`) REFERENCES `kafil` (`id_kafil`),
  ADD CONSTRAINT `fk_orphan_widow` FOREIGN KEY (`id_widow`) REFERENCES `widow` (`id_widow`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `fk_project_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `widow`
--
ALTER TABLE `widow`
  ADD CONSTRAINT `fk_veuve_accomodation` FOREIGN KEY (`id_accomodation`) REFERENCES `accomodation` (`id_accomodation`),
  ADD CONSTRAINT `fk_widow_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `fk_widow_aide` FOREIGN KEY (`id_aide`) REFERENCES `aide` (`id_aide`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
