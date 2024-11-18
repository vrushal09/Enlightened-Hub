-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2024 at 03:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enlightened`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_id` int(11) NOT NULL,
  `course_image_url` varchar(500) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_cat` varchar(255) NOT NULL,
  `tutor_name` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `course_image_url`, `course_name`, `course_cat`, `tutor_name`, `language`, `duration`, `release_date`, `video_url`) VALUES
(1, 'https://techmetix.in/wp-content/uploads/2021/08/c-course.jpeg', 'C programming full course for Beginners', 'Programming', 'Mehta Vrushal', 'English', '8 Hours', '2024-07-01', 'https://www.youtube.com/embed/U3aXWizDbQ4'),
(2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMRY3OZQPhR4UDK1BuXxZLPFwnVw4oQqaKIA&s', 'Node.js full course for beginer', 'Programming', 'Poojan Sheth', 'Hindi', '10 Hours', '2024-07-01', 'https://www.youtube.com/embed/8u1o-OmOeGQ'),
(3, 'https://static.skillshare.com/uploads/video/thumbnails/0ab63be061d2a2051fc5a20337d2bc7f/448-252', 'Javascript course for beginer', 'Programming', 'Divyam jain', 'English', '6 Hours', '2024-07-01', 'https://www.youtube.com/embed/B7wHpNUUT4Y'),
(4, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQocNegg4H0mhD3K1hmYRjyRXyIwTvgwmWAWg&s', 'SQL beginer to advance full course', 'Programming', 'Bhoomi Parekh', 'Hindi', '5 Hours', '2024-07-01', 'https://www.youtube.com/embed/UOJZTqA5Loc'),
(5, 'https://couponos.me/wp-content/uploads/Complete-C-Programming-Course-%E2%80%93-Beginner-to-Expert.jpg', 'Programming for Beginners with C#', 'Programming', 'Mainak Jain', 'Hindi', '6 Hours', '2024-07-01', 'https://www.youtube.com/embed/ravLFzIguCM'),
(6, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMIQuRWsyPuWAdjpmGumTyIQwuOmi6-tEEzgHNT8RDtPq3aGbL6fqZXXEQvbEzFK4EMNo&usqp=CAU', 'Digital Marketing full course for Beginners', 'Marketing', 'Devansh Shah', 'English', '9 Hours', '2024-07-01', 'https://www.youtube.com/embed/bixR-KIJKYM'),
(7, 'https://www.creativeitinstitute.com/images/course/course_1663052587.jpg', ' Social Media Marketing full course for Beginners', 'Marketing', 'Agam Mehta', 'Hindi', '6 Hours', '2024-07-01', 'https://www.youtube.com/embed/I2pwcAVonKI'),
(8, 'https://exposureninja.com//wp-content/uploads/2019/07/best-free-online-digital-marketing-courses-02.png', 'Content Marketing full course for Beginners', 'Marketing', 'Aum Shah', 'Hindi', '4 Hours', '2024-07-01', 'https://www.youtube.com/embed/OGX-JdO0d3U'),
(9, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSuXs-dDV2Ii5-D-ylvwmv0Q6C3jJ3010Sdg&s', 'E-mail Marketing full course for Beginners', 'Marketing', 'Vipul Mehta', 'English', '9 Hours', '2024-07-01', 'https://www.youtube.com/embed/mTLMEuDwab8'),
(10, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLanONqjZdqvliI81QUJREHtJ63kWW_Mr7GQ&s', 'Affiliate Marketing full course for Beginners', 'Marketing', 'Rinku Mehta', 'Hindi', '3 Hours', '2024-07-01', 'https://www.youtube.com/embed/mTLMEuDwab8'),
(11, 'https://i.pinimg.com/736x/7f/32/0a/7f320aad80ace1060a8f59165449c438.jpg', 'Graphic Design full course for Beginners', 'Design', 'Moury Mehta', 'English', '8 Hours', '2024-07-01', 'https://www.youtube.com/embed/0BnuvEoyaZ0'),
(12, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJYZWpHi_uNvxVQK2BJJJw-v3uJN_6wpFxFQ&s', 'Web Design full course for Beginners', 'Design', 'Aruna Mehta', 'Hindi', '6 Hours', '2024-07-01', 'https://www.youtube.com/embed/Klp_O3JXgzg'),
(13, 'https://i.ytimg.com/vi/BU_afT-aIn0/maxresdefault.jpg', 'UX UI Design full course for Beginners', 'Design', 'Jay Shah', 'Hindi', '4 Hours', '2024-07-01', 'https://www.youtube.com/embed/fBz_DLDPkSw'),
(14, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGkXELBT_IjXKSe0x0vM3RxTNgrA2oVMJJ4g&s', 'Interior Design full course for Beginners', 'Design', 'Harsh Shah', 'English', '7 Hours', '2024-07-01', 'https://www.youtube.com/embed/RYBo7y4-YeY'),
(15, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOO32GXttx-2tnyD-lWg-cjuDlTliTJGEyCw&s', 'Logo Design full course for Beginners', 'Design', 'Keval Patel', 'Hindi', '4 Hours', '2024-07-01', 'https://www.youtube.com/embed/i35tPCjWflo'),
(16, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGLl3H1drMIcCMiouRHTzLAVoTq0zZPY8rwg&s', 'Acrylic Painting full course for Beginners', 'Painting', 'Vatsal Vora', 'Hindi', '6 Hours', '2024-07-01', 'https://www.youtube.com/embed/HTSMbP2ajTY'),
(17, 'https://d3f1iyfxxz8i1e.cloudfront.net/courses/course_image/c74d2d0eb6ea.jpeg', 'Abstract Painting full course for Beginners', 'Painting', 'Het Shah', 'English', '3 Hours', '2024-07-01', 'https://www.youtube.com/embed/gvx9qejC-YU'),
(18, 'https://i.ytimg.com/vi/vDtdPM2Etrg/maxresdefault.jpg', 'Oil Painting full course for Beginners', 'Painting', 'Jainam Jain', 'Hindi', '7 Hours', '2024-07-01', 'https://www.youtube.com/embed/fgWdMsAXSXg'),
(19, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2R2rnz3IJ26fp7s9WZwXI-9KeypbERbdEoA&s', 'Digital Painting full course for Beginners', 'Painting', 'Vrushal Mehta', 'English', '8 Hours', '2024-07-01', 'https://www.youtube.com/embed/Q6-NhdEPKGk'),
(20, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS77tdRKhzB7TD5CODls6q98PzUecrzR4RNJg&s', 'Fabric Painting full course for Beginners', 'Painting', 'Kavyan Jain', 'Hindi', '3 Hours', '2024-07-01', 'https://www.youtube.com/embed/hOvM_l3O8wo');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `UserId` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `UserEmail` varchar(255) NOT NULL,
  `UserPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`UserId`, `UserName`, `UserEmail`, `UserPassword`) VALUES
(6, 'Rinku Mehta', 'rinkumehta@gmail.com', '123456789'),
(7, 'vrushal', 'mehtavrushalvm@gmail.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
