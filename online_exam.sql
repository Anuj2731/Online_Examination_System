-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 01:21 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `A_id` int(10) NOT NULL,
  `A_email` text NOT NULL,
  `A_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`A_id`, `A_email`, `A_password`) VALUES
(1, 'rj@gmail.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `exam_detail_master`
--

CREATE TABLE `exam_detail_master` (
  `E_id` int(10) NOT NULL,
  `S_id` int(10) NOT NULL,
  `E_enrollmentno` varchar(20) NOT NULL,
  `E_semester` varchar(10) NOT NULL,
  `E_division` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_detail_master`
--

INSERT INTO `exam_detail_master` (`E_id`, `S_id`, `E_enrollmentno`, `E_semester`, `E_division`) VALUES
(1, 1, '1234', '4', 'B'),
(2, 0, '1234', '2', 'B'),
(3, 0, '4444', '5', 'D'),
(4, 2, '18bca04128', '6', 'C'),
(5, 2, '12345', '2', 'C'),
(6, 2, '123456', '3', 'B'),
(7, 12, '2222', '2', 'C'),
(8, 12, 'ddd', '2', 'C'),
(9, 12, 'ddd', '2', 'C'),
(10, 12, 'fdfdf', '2', 'B'),
(11, 12, '12345', '2', 'A'),
(12, 12, '12345', '2', 'A'),
(13, 12, '12345', '2', 'A'),
(14, 12, '1234567', '4', 'A'),
(15, 4, '123123', '2', 'D'),
(16, 12, '12345', '4', 'D'),
(17, 12, '123456', '4', 'D'),
(18, 12, '12345678', '4', 'A'),
(19, 12, '555', '3', 'B'),
(20, 12, '111', '2', 'C'),
(21, 12, '888', '3', 'B'),
(22, 0, '888', '3', 'B'),
(23, 12, '2222', '3', 'B'),
(24, 4, '1', '2', 'B'),
(25, 12, '18BCA04089', '6', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_master`
--

CREATE TABLE `faculty_master` (
  `F_id` int(100) NOT NULL,
  `F_fname` text NOT NULL,
  `F_lname` text NOT NULL,
  `F_email` text NOT NULL,
  `F_phone` int(10) NOT NULL,
  `F_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_master`
--

INSERT INTO `faculty_master` (`F_id`, `F_fname`, `F_lname`, `F_email`, `F_phone`, `F_password`) VALUES
(1, 'jaldeep', 'suthar', 'jr@gmail.com', 1111111111, '6666666666'),
(2, 'jaldeep', 'suthar', 'ravi@gmail.com', 1111111111, '23599911'),
(3, 'jaldeep', 'suthar', 'jaldeepsuthar@gmail.com', 1111111111, '235999111'),
(4, 'ravi', 'suthar', 'ravi999@gmail.com', 1234567890, 'ravi999235');

-- --------------------------------------------------------

--
-- Table structure for table `question_master`
--

CREATE TABLE `question_master` (
  `Q_id` int(10) NOT NULL,
  `F_id` int(10) NOT NULL,
  `Sub_id` varchar(10) NOT NULL,
  `Q_name` varchar(50) NOT NULL,
  `Q_opt1` varchar(50) NOT NULL,
  `Q_opt2` varchar(50) NOT NULL,
  `Q_opt3` varchar(50) NOT NULL,
  `Q_opt4` varchar(50) NOT NULL,
  `Q_ans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_master`
--

INSERT INTO `question_master` (`Q_id`, `F_id`, `Sub_id`, `Q_name`, `Q_opt1`, `Q_opt2`, `Q_opt3`, `Q_opt4`, `Q_ans`) VALUES
(1, 4, '1', '1) Which of the following is the correct identifie', '$var_name', ' VAR_123', 'varname', ' None of the above', ' VAR_123'),
(2, 4, '1', '2) Which of the following is the address operator?', '@', ' #', '&', '%', '&'),
(3, 4, '1', '3)Which of the following is the original creator o', ' Dennis Ritchie', 'Ken Thompson', 'Bjarne Stroustrup', 'Brian Kernighan', ' Bjarne Stroustrup'),
(4, 4, '1', '4)The C++ language is ______ object-oriented langu', 'Pure Object oriented', 'Not Object oriented', 'Semi Object-oriented or Partial Object-oriented', 'None of the above', 'Semi Object-oriented or Partial Object-oriented'),
(5, 4, '1', '5)The term PHP is an acronym for PHP:_____________', ' Hypertext Preprocessor', 'Hypertext multiprocessor', 'Hypertext markup Preprocessor', 'Hypertune Preprocessor', ' Hypertext Preprocessor'),
(6, 4, '1', '6)PHP is a ____________ language?', 'user-side scripting', 'client-side scripting', ' server-side scripting', 'Both B and C', 'server-side scripting'),
(7, 4, '1', '7) Who among this is the founder of php language?', '. Tim Berners-Lee', 'Brendan Eich', 'Guido van Rossum', ' Rasmus Lerdorf', 'Rasmus Lerdorf'),
(8, 4, '1', '8)In which year php was created?', '1993', '1994', ' 1995', '1996', '1994'),
(9, 1, '2', '1) Which of the following is the correct identifie', '$var_name', ' VAR_123', 'varname', ' None of the above', ' VAR_123'),
(10, 1, '2', '2) Which of the following is the address operator?', '@', ' #', '&', '%', '&'),
(11, 1, '2', '3)Which of the following is the original creator o', ' Dennis Ritchie', 'Ken Thompson', 'Bjarne Stroustrup', 'Brian Kernighan', ' Bjarne Stroustrup'),
(12, 1, '2', '4)The C++ language is ______ object-oriented langu', 'Pure Object oriented', 'Not Object oriented', 'Semi Object-oriented or Partial Object-oriented', 'None of the above', 'Semi Object-oriented or Partial Object-oriented'),
(13, 1, '2', '5)The term PHP is an acronym for PHP:_____________', ' Hypertext Preprocessor', 'Hypertext multiprocessor', 'Hypertext markup Preprocessor', 'Hypertune Preprocessor', ' Hypertext Preprocessor'),
(14, 1, '2', '6)PHP is a ____________ language?', 'user-side scripting', 'client-side scripting', ' server-side scripting', 'Both B and C', 'server-side scripting'),
(15, 1, '2', '7) Who among this is the founder of php language?', '. Tim Berners-Lee', 'Brendan Eich', 'Guido van Rossum', ' Rasmus Lerdorf', 'Rasmus Lerdorf'),
(16, 1, '2', '8)In which year php was created?', '1993', '1994', ' 1995', '1996', '1994'),
(17, 1, '3', '1) Which of the following is the correct identifie', '$var_name', ' VAR_123', 'varname', ' None of the above', ' VAR_123'),
(18, 1, '3', '2) Which of the following is the address operator?', '@', ' #', '&', '%', '&'),
(19, 1, '3', '3)Which of the following is the original creator o', ' Dennis Ritchie', 'Ken Thompson', 'Bjarne Stroustrup', 'Brian Kernighan', ' Bjarne Stroustrup'),
(20, 1, '3', '4)The C++ language is ______ object-oriented langu', 'Pure Object oriented', 'Not Object oriented', 'Semi Object-oriented or Partial Object-oriented', 'None of the above', 'Semi Object-oriented or Partial Object-oriented'),
(21, 1, '3', '5)The term PHP is an acronym for PHP:_____________', ' Hypertext Preprocessor', 'Hypertext multiprocessor', 'Hypertext markup Preprocessor', 'Hypertune Preprocessor', ' Hypertext Preprocessor'),
(22, 1, '3', '6)PHP is a ____________ language?', 'user-side scripting', 'client-side scripting', ' server-side scripting', 'Both B and C', 'server-side scripting'),
(23, 1, '3', '7) Who among this is the founder of php language?', '. Tim Berners-Lee', 'Brendan Eich', 'Guido van Rossum', ' Rasmus Lerdorf', 'Rasmus Lerdorf'),
(24, 1, '3', '8)In which year php was created?', '1993', '1994', ' 1995', '1996', '1994'),
(25, 1, '3', '1) Which of the following is the correct identifie', '$var_name', ' VAR_123', 'varname', ' None of the above', ' VAR_123'),
(26, 1, '3', '2) Which of the following is the address operator?', '@', ' #', '&', '%', '&'),
(27, 1, '3', '3)Which of the following is the original creator o', ' Dennis Ritchie', 'Ken Thompson', 'Bjarne Stroustrup', 'Brian Kernighan', ' Bjarne Stroustrup'),
(28, 1, '3', '4)The C++ language is ______ object-oriented langu', 'Pure Object oriented', 'Not Object oriented', 'Semi Object-oriented or Partial Object-oriented', 'None of the above', 'Semi Object-oriented or Partial Object-oriented'),
(29, 1, '3', '5)The term PHP is an acronym for PHP:_____________', ' Hypertext Preprocessor', 'Hypertext multiprocessor', 'Hypertext markup Preprocessor', 'Hypertune Preprocessor', ' Hypertext Preprocessor'),
(30, 1, '3', '6)PHP is a ____________ language?', 'user-side scripting', 'client-side scripting', ' server-side scripting', 'Both B and C', 'server-side scripting'),
(31, 1, '3', '7) Who among this is the founder of php language?', '. Tim Berners-Lee', 'Brendan Eich', 'Guido van Rossum', ' Rasmus Lerdorf', 'Rasmus Lerdorf'),
(32, 1, '3', '8)In which year php was created?', '1993', '1994', ' 1995', '1996', '1994');

-- --------------------------------------------------------

--
-- Table structure for table `result_master`
--

CREATE TABLE `result_master` (
  `R_id` int(10) NOT NULL,
  `S_id` int(10) NOT NULL,
  `E_enrollmentno` varchar(20) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `R_score` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result_master`
--

INSERT INTO `result_master` (`R_id`, `S_id`, `E_enrollmentno`, `sub_name`, `R_score`) VALUES
(1, 11, ' 1 ', 'java', '0'),
(2, 11, ' 18BCA04089 ', 'Java', '7');

-- --------------------------------------------------------

--
-- Table structure for table `student_login_master`
--

CREATE TABLE `student_login_master` (
  `L_id` int(10) NOT NULL,
  `S_id` int(10) NOT NULL,
  `Li_date_time` datetime(6) NOT NULL,
  `Lo_date_time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_login_master`
--

INSERT INTO `student_login_master` (`L_id`, `S_id`, `Li_date_time`, `Lo_date_time`) VALUES
(1, 4, '2021-04-14 14:03:37.000000', '0000-00-00 00:00:00.000000'),
(2, 12, '2021-04-30 14:10:32.000000', '0000-00-00 00:00:00.000000'),
(3, 1, '2021-04-30 14:48:00.000000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `student_master`
--

CREATE TABLE `student_master` (
  `S_id` int(100) NOT NULL,
  `S_fname` text NOT NULL,
  `S_lname` text NOT NULL,
  `S_email` text NOT NULL,
  `S_phone` int(10) NOT NULL,
  `S_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_master`
--

INSERT INTO `student_master` (`S_id`, `S_fname`, `S_lname`, `S_email`, `S_phone`, `S_password`) VALUES
(11, 'malav', 'dave', 'jayrajzala111@gmail.com', 1112121212, '1111111111'),
(12, 'jaldeep', 'suthar', 'jaldeepsuthar999@gmail.com', 2147483647, 'jaldeep999'),
(13, 'malav', 'dave', 'malav123@gmail.com', 1234567890, 'malav1234');

-- --------------------------------------------------------

--
-- Table structure for table `sub_master`
--

CREATE TABLE `sub_master` (
  `Sub_id` int(5) NOT NULL,
  `F_id` int(5) NOT NULL,
  `Sub_code` varchar(20) NOT NULL,
  `Sub_name` varchar(30) NOT NULL,
  `Semester` int(5) NOT NULL,
  `Sub_date` date NOT NULL,
  `Sub_stime` time NOT NULL,
  `Sub_etime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_master`
--

INSERT INTO `sub_master` (`Sub_id`, `F_id`, `Sub_code`, `Sub_name`, `Semester`, `Sub_date`, `Sub_stime`, `Sub_etime`) VALUES
(1, 0, '202', 'java', 4, '2021-04-14', '14:04:00', '14:05:00'),
(2, 0, 'BCA-601', 'Java', 6, '2021-04-30', '15:27:00', '16:28:00'),
(3, 1, 'BCA-602', 'ETT', 6, '2021-04-30', '15:47:00', '16:48:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`A_id`);

--
-- Indexes for table `exam_detail_master`
--
ALTER TABLE `exam_detail_master`
  ADD PRIMARY KEY (`E_id`);

--
-- Indexes for table `faculty_master`
--
ALTER TABLE `faculty_master`
  ADD PRIMARY KEY (`F_id`);

--
-- Indexes for table `question_master`
--
ALTER TABLE `question_master`
  ADD PRIMARY KEY (`Q_id`);

--
-- Indexes for table `result_master`
--
ALTER TABLE `result_master`
  ADD PRIMARY KEY (`R_id`);

--
-- Indexes for table `student_login_master`
--
ALTER TABLE `student_login_master`
  ADD PRIMARY KEY (`L_id`);

--
-- Indexes for table `student_master`
--
ALTER TABLE `student_master`
  ADD PRIMARY KEY (`S_id`);

--
-- Indexes for table `sub_master`
--
ALTER TABLE `sub_master`
  ADD PRIMARY KEY (`Sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_master`
--
ALTER TABLE `admin_master`
  MODIFY `A_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam_detail_master`
--
ALTER TABLE `exam_detail_master`
  MODIFY `E_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `faculty_master`
--
ALTER TABLE `faculty_master`
  MODIFY `F_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `question_master`
--
ALTER TABLE `question_master`
  MODIFY `Q_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `result_master`
--
ALTER TABLE `result_master`
  MODIFY `R_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_login_master`
--
ALTER TABLE `student_login_master`
  MODIFY `L_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_master`
--
ALTER TABLE `student_master`
  MODIFY `S_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sub_master`
--
ALTER TABLE `sub_master`
  MODIFY `Sub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
