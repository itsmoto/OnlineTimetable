-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2017 at 04:07 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlinetimetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessed_timetable`
--

CREATE TABLE IF NOT EXISTS `accessed_timetable` (
`id` int(11) NOT NULL,
  `levelofstudy` varchar(30) NOT NULL,
  `yearofstudy` varchar(30) NOT NULL,
  `program` varchar(30) NOT NULL,
  `ref` varchar(100) NOT NULL,
  `token` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessed_timetable`
--

INSERT INTO `accessed_timetable` (`id`, `levelofstudy`, `yearofstudy`, `program`, `ref`, `token`) VALUES
(2, 'certificate', '1', 'ictb', 'e22960f25f', '94829437b7'),
(3, 'certificate', '1', 'ictb', '9ad910f21d', 'eadfaf4f96'),
(4, 'certificate', '1', 'BHSM', '2dfcb86f82', 'b15510bd93'),
(5, 'certificate', '1', 'BHSM', 'a0ebcd5eaa', '44b6fee34a'),
(6, 'certificate', '1', 'BHSM', '36397c2f43', '41992012ba'),
(7, 'certificate', '1', 'Bsc.', '7d6c260525', '01f3702af6'),
(8, 'certificate', '1', 'Bsc.', 'cb7bbbf333', 'cf6e5eb244'),
(9, 'certificate', '1', 'Bsc. BHSM', '63db916234', 'abfa3e05be'),
(10, 'certificate', '1', 'Bsc. BHSM', '21121f287e', 'f53998e4ab'),
(11, 'certificate', '1', 'ictb', 'd09e655470', 'a2bb285d25'),
(12, 'certificate', '1', 'ictb', 'b52ba266b7', 'e28bcd66af'),
(13, 'certificate', '1', 'ictb', 'a33a58eddf', 'f638161cd9'),
(14, 'certificate', '1', 'ictb', 'd1028339e7', '1d83a2b8a2'),
(15, 'certificate', '1', 'ictb', '821bdfa710', '88c694fbc7'),
(16, 'certificate', '1', 'ictb', 'b16f20bf2f', 'e996880e46'),
(17, 'certificate', '1', 'ictb', '66478fd5b7', 'c46576922a'),
(18, 'certificate', '1', 'ictb', '75d64de542', '153c8ac8e0'),
(19, 'certificate', '1', 'ictb', '4d198c58fd', '1e5c59b416'),
(20, 'certificate', '1', 'ictb', '0684f89451', '43378c6f4a'),
(21, 'certificate', '1', 'ictb', '0430e36803', 'd292c77aa6'),
(22, 'certificate', '1', 'ictb', 'd6765d1b83', '3e4b0365a7'),
(23, 'certificate', '1', 'ictb', '07f7d5ede5', 'fd0729bdbe'),
(24, 'certificate', '1', 'ictb', '29fb6f1115', '5a72cb75a9'),
(25, 'undergraduate', '3', 'ICTM', '4f341587e1', 'c64859751e'),
(26, 'undergraduate', '3', 'ICTM', 'a8429421e4', '38e8554376'),
(27, 'undergraduate', '2', 'ICTM', '766701b9b0', 'fce3320f2f'),
(28, 'undergraduate', '3', 'ICTM', '0ff5b23861', '3b852a2a68'),
(29, 'undergraduate', '3', 'ICTM', 'ea47e9bc6e', 'a815d8e771'),
(30, 'certificate', '1', 'ictb', '06fbb70511', 'd0c931b00c'),
(31, 'certificate', '1', 'ictb', 'e731106949', '0a2242b73c'),
(32, 'certificate', '1', 'ictb', 'a238feba50', '613d8e3a2f'),
(33, 'certificate', '1', 'ictb', '66d9d13fc5', '3a588888d5'),
(34, 'certificate', '1', 'ictb', 'f20b911726', '4a94d83409'),
(35, 'certificate', '1', 'ictb', 'bcc01a7c0c', '0c849a2656'),
(36, 'certificate', '1', 'ictb', '93e3a5eb08', 'daf194185f'),
(37, 'undergraduate', '2', 'ICTM', '836e3c5f22', 'ed3dc4fa4b'),
(38, 'certificate', '1', 'ictb', 'dc34b91a4f', '0c558793ea'),
(39, 'certificate', '1', 'ictb', '71836158dc', '8d22b65856');

-- --------------------------------------------------------

--
-- Table structure for table `activetime`
--

CREATE TABLE IF NOT EXISTS `activetime` (
`id` int(11) NOT NULL,
  `yearofstudy` int(10) NOT NULL,
  `program` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `venue` varchar(30) NOT NULL,
  `lecturer` varchar(30) NOT NULL,
  `days` int(11) NOT NULL,
  `time` varchar(30) NOT NULL,
  `year_of_timetable` varchar(30) NOT NULL,
  `drafts` varchar(30) NOT NULL,
  `level_of_study` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=606 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activetime`
--

INSERT INTO `activetime` (`id`, `yearofstudy`, `program`, `course`, `venue`, `lecturer`, `days`, `time`, `year_of_timetable`, `drafts`, `level_of_study`) VALUES
(381, 1, 'ictb', 'ICT 74', 'B208', 'KILIMA', 101, '0700-0900', '2015/2016', 'firstdraft', 'certificate'),
(382, 1, 'ictb', '', '', '', 102, '0900-1100', '2015/2016', 'firstdraft', 'certificate'),
(383, 1, 'ictb', '', '', '', 103, '1100-1300', '2015/2016', 'firstdraft', 'certificate'),
(384, 1, 'ictb', '', '', '', 104, '1500-1700', '2015/2016', 'firstdraft', 'certificate'),
(385, 1, 'ictb', 'ICT 64', 'NAH', 'NJOVU', 105, '1700-1900', '2015/2016', 'firstdraft', 'certificate'),
(386, 1, 'ictb', '', '', '', 106, '0700-0900', '2015/2016', 'firstdraft', 'certificate'),
(387, 1, 'ictb', '', '', '', 107, '0900-1100', '2015/2016', 'firstdraft', 'certificate'),
(388, 1, 'ictb', 'ACC 74', 'C210', 'MSUYA', 108, '1100-1300', '2015/2016', 'firstdraft', 'certificate'),
(389, 1, 'ictb', '', '', '', 109, '1500-1700', '2015/2016', 'firstdraft', 'certificate'),
(390, 1, 'ictb', '', '', '', 110, '1700-1900', '2015/2016', 'firstdraft', 'certificate'),
(391, 1, 'ictb', '', '', '', 111, '0700-0900', '2015/2016', 'firstdraft', 'certificate'),
(392, 1, 'ictb', '', '', '', 112, '0900-1100', '2015/2016', 'firstdraft', 'certificate'),
(393, 1, 'ictb', 'ACC 64', 'OC', 'LOKI', 113, '1100-1300', '2015/2016', 'firstdraft', 'certificate'),
(394, 1, 'ictb', '', '', '', 114, '1500-1700', '2015/2016', 'firstdraft', 'certificate'),
(395, 1, 'ictb', '', '', '', 115, '1700-1900', '2015/2016', 'firstdraft', 'certificate'),
(396, 1, 'ictb', '', '', '', 116, '0700-0900', '2015/2016', 'firstdraft', 'certificate'),
(397, 1, 'ictb', '', '', '', 117, '0900-1100', '2015/2016', 'firstdraft', 'certificate'),
(398, 1, 'ictb', 'ICT 84', 'LT3', 'KISANJORA', 118, '1100-1300', '2015/2016', 'firstdraft', 'certificate'),
(399, 1, 'ictb', '', '', '', 119, '1500-1700', '2015/2016', 'firstdraft', 'certificate'),
(400, 1, 'ictb', '', '', '', 120, '1700-1900', '2015/2016', 'firstdraft', 'certificate'),
(401, 1, 'ictb', '', '', '', 121, '0700-0900', '2015/2016', 'firstdraft', 'certificate'),
(402, 1, 'ictb', 'ICT 79', 'B208', 'WAMBURA', 122, '0900-1100', '2015/2016', 'firstdraft', 'certificate'),
(403, 1, 'ictb', '', '', '', 123, '1100-1300', '2015/2016', 'firstdraft', 'certificate'),
(404, 1, 'ictb', '', '', '', 124, '1500-1700', '2015/2016', 'firstdraft', 'certificate'),
(405, 1, 'ictb', 'ICT125', 'B122', 'MBIGILI', 125, '1700-1900', '2015/2016', 'firstdraft', 'certificate'),
(481, 2, 'ICTM', 'ICT202', 'LT1', 'KILIMA', 101, '0700-0900', '2015/2016', 'firstdraft', 'undergraduate'),
(482, 2, 'ICTM', '', '', '', 102, '0900-1100', '2015/2016', 'firstdraft', 'undergraduate'),
(483, 2, 'ICTM', '', '', '', 103, '1100-1300', '2015/2016', 'firstdraft', 'undergraduate'),
(484, 2, 'ICTM', '', '', '', 104, '1500-1700', '2015/2016', 'firstdraft', 'undergraduate'),
(485, 2, 'ICTM', '', '', '', 105, '1700-1900', '2015/2016', 'firstdraft', 'undergraduate'),
(486, 2, 'ICTM', '', '', '', 106, '0700-0900', '2015/2016', 'firstdraft', 'undergraduate'),
(487, 2, 'ICTM', '', '', '', 107, '0900-1100', '2015/2016', 'firstdraft', 'undergraduate'),
(488, 2, 'ICTM', '', '', '', 108, '1100-1300', '2015/2016', 'firstdraft', 'undergraduate'),
(489, 2, 'ICTM', '', '', '', 109, '1500-1700', '2015/2016', 'firstdraft', 'undergraduate'),
(490, 2, 'ICTM', '', '', '', 110, '1700-1900', '2015/2016', 'firstdraft', 'undergraduate'),
(491, 2, 'ICTM', '', '', '', 111, '0700-0900', '2015/2016', 'firstdraft', 'undergraduate'),
(492, 2, 'ICTM', '', '', '', 112, '0900-1100', '2015/2016', 'firstdraft', 'undergraduate'),
(493, 2, 'ICTM', '', '', '', 113, '1100-1300', '2015/2016', 'firstdraft', 'undergraduate'),
(494, 2, 'ICTM', '', '', '', 114, '1500-1700', '2015/2016', 'firstdraft', 'undergraduate'),
(495, 2, 'ICTM', '', '', '', 115, '1700-1900', '2015/2016', 'firstdraft', 'undergraduate'),
(496, 2, 'ICTM', '', '', '', 116, '0700-0900', '2015/2016', 'firstdraft', 'undergraduate'),
(497, 2, 'ICTM', '', '', '', 117, '0900-1100', '2015/2016', 'firstdraft', 'undergraduate'),
(498, 2, 'ICTM', '', '', '', 118, '1100-1300', '2015/2016', 'firstdraft', 'undergraduate'),
(499, 2, 'ICTM', '', '', '', 119, '1500-1700', '2015/2016', 'firstdraft', 'undergraduate'),
(500, 2, 'ICTM', '', '', '', 120, '1700-1900', '2015/2016', 'firstdraft', 'undergraduate'),
(501, 2, 'ICTM', '', '', '', 121, '0700-0900', '2015/2016', 'firstdraft', 'undergraduate'),
(502, 2, 'ICTM', '', '', '', 122, '0900-1100', '2015/2016', 'firstdraft', 'undergraduate'),
(503, 2, 'ICTM', '', '', '', 123, '1100-1300', '2015/2016', 'firstdraft', 'undergraduate'),
(504, 2, 'ICTM', '', '', '', 124, '1500-1700', '2015/2016', 'firstdraft', 'undergraduate'),
(505, 2, 'ICTM', '', '', '', 125, '1700-1900', '2015/2016', 'firstdraft', 'undergraduate'),
(531, 1, 'BHSM', 'ICT202', 'LT1', 'KILIMA', 101, '0700-0900', '2017/2018', 'firstdraft', 'certificate'),
(532, 1, 'BHSM', '', '', '', 102, '0900-1100', '2017/2018', 'firstdraft', 'certificate'),
(533, 1, 'BHSM', '', '', '', 103, '1100-1300', '2017/2018', 'firstdraft', 'certificate'),
(534, 1, 'BHSM', '', '', '', 104, '1500-1700', '2017/2018', 'firstdraft', 'certificate'),
(535, 1, 'BHSM', '', '', '', 105, '1700-1900', '2017/2018', 'firstdraft', 'certificate'),
(536, 1, 'BHSM', '', '', '', 106, '0700-0900', '2017/2018', 'firstdraft', 'certificate'),
(537, 1, 'BHSM', '', '', '', 107, '0900-1100', '2017/2018', 'firstdraft', 'certificate'),
(538, 1, 'BHSM', '', '', '', 108, '1100-1300', '2017/2018', 'firstdraft', 'certificate'),
(539, 1, 'BHSM', '', '', '', 109, '1500-1700', '2017/2018', 'firstdraft', 'certificate'),
(540, 1, 'BHSM', '', '', '', 110, '1700-1900', '2017/2018', 'firstdraft', 'certificate'),
(541, 1, 'BHSM', '', '', '', 111, '0700-0900', '2017/2018', 'firstdraft', 'certificate'),
(542, 1, 'BHSM', '', '', '', 112, '0900-1100', '2017/2018', 'firstdraft', 'certificate'),
(543, 1, 'BHSM', '', '', '', 113, '1100-1300', '2017/2018', 'firstdraft', 'certificate'),
(544, 1, 'BHSM', '', '', '', 114, '1500-1700', '2017/2018', 'firstdraft', 'certificate'),
(545, 1, 'BHSM', '', '', '', 115, '1700-1900', '2017/2018', 'firstdraft', 'certificate'),
(546, 1, 'BHSM', '', '', '', 116, '0700-0900', '2017/2018', 'firstdraft', 'certificate'),
(547, 1, 'BHSM', '', '', '', 117, '0900-1100', '2017/2018', 'firstdraft', 'certificate'),
(548, 1, 'BHSM', '', '', '', 118, '1100-1300', '2017/2018', 'firstdraft', 'certificate'),
(549, 1, 'BHSM', '', '', '', 119, '1500-1700', '2017/2018', 'firstdraft', 'certificate'),
(550, 1, 'BHSM', '', '', '', 120, '1700-1900', '2017/2018', 'firstdraft', 'certificate'),
(551, 1, 'BHSM', '', '', '', 121, '0700-0900', '2017/2018', 'firstdraft', 'certificate'),
(552, 1, 'BHSM', '', '', '', 122, '0900-1100', '2017/2018', 'firstdraft', 'certificate'),
(553, 1, 'BHSM', '', '', '', 123, '1100-1300', '2017/2018', 'firstdraft', 'certificate'),
(554, 1, 'BHSM', '', '', '', 124, '1500-1700', '2017/2018', 'firstdraft', 'certificate'),
(555, 1, 'BHSM', '', '', '', 125, '1700-1900', '2017/2018', 'firstdraft', 'certificate'),
(556, 3, 'ICTM', '', '', '', 101, '0700-0900', '2016/2017', 'seconddraft', 'undergraduate'),
(557, 3, 'ICTM', '', '', '', 102, '0900-1100', '2016/2017', 'seconddraft', 'undergraduate'),
(558, 3, 'ICTM', '', '', '', 103, '1100-1300', '2016/2017', 'seconddraft', 'undergraduate'),
(559, 3, 'ICTM', '', '', '', 104, '1500-1700', '2016/2017', 'seconddraft', 'undergraduate'),
(560, 3, 'ICTM', '', '', '', 105, '1700-1900', '2016/2017', 'seconddraft', 'undergraduate'),
(561, 3, 'ICTM', '', '', '', 106, '0700-0900', '2016/2017', 'seconddraft', 'undergraduate'),
(562, 3, 'ICTM', '', '', '', 107, '0900-1100', '2016/2017', 'seconddraft', 'undergraduate'),
(563, 3, 'ICTM', '', '', '', 108, '1100-1300', '2016/2017', 'seconddraft', 'undergraduate'),
(564, 3, 'ICTM', '', '', '', 109, '1500-1700', '2016/2017', 'seconddraft', 'undergraduate'),
(565, 3, 'ICTM', '', '', '', 110, '1700-1900', '2016/2017', 'seconddraft', 'undergraduate'),
(566, 3, 'ICTM', '', '', '', 111, '0700-0900', '2016/2017', 'seconddraft', 'undergraduate'),
(567, 3, 'ICTM', '', '', '', 112, '0900-1100', '2016/2017', 'seconddraft', 'undergraduate'),
(568, 3, 'ICTM', '', '', '', 113, '1100-1300', '2016/2017', 'seconddraft', 'undergraduate'),
(569, 3, 'ICTM', '', '', '', 114, '1500-1700', '2016/2017', 'seconddraft', 'undergraduate'),
(570, 3, 'ICTM', '', '', '', 115, '1700-1900', '2016/2017', 'seconddraft', 'undergraduate'),
(571, 3, 'ICTM', '', '', '', 116, '0700-0900', '2016/2017', 'seconddraft', 'undergraduate'),
(572, 3, 'ICTM', '', '', '', 117, '0900-1100', '2016/2017', 'seconddraft', 'undergraduate'),
(573, 3, 'ICTM', '', '', '', 118, '1100-1300', '2016/2017', 'seconddraft', 'undergraduate'),
(574, 3, 'ICTM', '', '', '', 119, '1500-1700', '2016/2017', 'seconddraft', 'undergraduate'),
(575, 3, 'ICTM', '', '', '', 120, '1700-1900', '2016/2017', 'seconddraft', 'undergraduate'),
(576, 3, 'ICTM', '', '', '', 121, '0700-0900', '2016/2017', 'seconddraft', 'undergraduate'),
(577, 3, 'ICTM', '', '', '', 122, '0900-1100', '2016/2017', 'seconddraft', 'undergraduate'),
(578, 3, 'ICTM', '', '', '', 123, '1100-1300', '2016/2017', 'seconddraft', 'undergraduate'),
(579, 3, 'ICTM', '', '', '', 124, '1500-1700', '2016/2017', 'seconddraft', 'undergraduate'),
(580, 3, 'ICTM', '', '', '', 125, '1700-1900', '2016/2017', 'seconddraft', 'undergraduate'),
(581, 2, 'ICTM', '', '', '', 101, '0700-0900', '2016/2017', 'seconddraft', 'undergraduate'),
(582, 2, 'ICTM', '', '', '', 102, '0900-1100', '2016/2017', 'seconddraft', 'undergraduate'),
(583, 2, 'ICTM', '', '', '', 103, '1100-1300', '2016/2017', 'seconddraft', 'undergraduate'),
(584, 2, 'ICTM', '', '', '', 104, '1500-1700', '2016/2017', 'seconddraft', 'undergraduate'),
(585, 2, 'ICTM', '', '', '', 105, '1700-1900', '2016/2017', 'seconddraft', 'undergraduate'),
(586, 2, 'ICTM', '', '', '', 106, '0700-0900', '2016/2017', 'seconddraft', 'undergraduate'),
(587, 2, 'ICTM', '', '', '', 107, '0900-1100', '2016/2017', 'seconddraft', 'undergraduate'),
(588, 2, 'ICTM', '', '', '', 108, '1100-1300', '2016/2017', 'seconddraft', 'undergraduate'),
(589, 2, 'ICTM', '', '', '', 109, '1500-1700', '2016/2017', 'seconddraft', 'undergraduate'),
(590, 2, 'ICTM', '', '', '', 110, '1700-1900', '2016/2017', 'seconddraft', 'undergraduate'),
(591, 2, 'ICTM', '', '', '', 111, '0700-0900', '2016/2017', 'seconddraft', 'undergraduate'),
(592, 2, 'ICTM', '', '', '', 112, '0900-1100', '2016/2017', 'seconddraft', 'undergraduate'),
(593, 2, 'ICTM', '', '', '', 113, '1100-1300', '2016/2017', 'seconddraft', 'undergraduate'),
(594, 2, 'ICTM', '', '', '', 114, '1500-1700', '2016/2017', 'seconddraft', 'undergraduate'),
(595, 2, 'ICTM', '', '', '', 115, '1700-1900', '2016/2017', 'seconddraft', 'undergraduate'),
(596, 2, 'ICTM', '', '', '', 116, '0700-0900', '2016/2017', 'seconddraft', 'undergraduate'),
(597, 2, 'ICTM', '', '', '', 117, '0900-1100', '2016/2017', 'seconddraft', 'undergraduate'),
(598, 2, 'ICTM', '', '', '', 118, '1100-1300', '2016/2017', 'seconddraft', 'undergraduate'),
(599, 2, 'ICTM', '', '', '', 119, '1500-1700', '2016/2017', 'seconddraft', 'undergraduate'),
(600, 2, 'ICTM', '', '', '', 120, '1700-1900', '2016/2017', 'seconddraft', 'undergraduate'),
(601, 2, 'ICTM', '', '', '', 121, '0700-0900', '2016/2017', 'seconddraft', 'undergraduate'),
(602, 2, 'ICTM', '', '', '', 122, '0900-1100', '2016/2017', 'seconddraft', 'undergraduate'),
(603, 2, 'ICTM', '', '', '', 123, '1100-1300', '2016/2017', 'seconddraft', 'undergraduate'),
(604, 2, 'ICTM', '', '', '', 124, '1500-1700', '2016/2017', 'seconddraft', 'undergraduate'),
(605, 2, 'ICTM', '', '', '', 125, '1700-1900', '2016/2017', 'seconddraft', 'undergraduate');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass_hash` varchar(300) NOT NULL,
  `role_id` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `pass_hash`, `role_id`) VALUES
(1, 'kazimoto', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
(2, 'toby', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2),
(5, 'Baba', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(6, 'mika1', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2),
(7, 'Mesha', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `name_of_timetable`
--

CREATE TABLE IF NOT EXISTS `name_of_timetable` (
`id` int(11) NOT NULL,
  `year_of_timetable` varchar(30) NOT NULL,
  `drafts` varchar(30) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `name_of_timetable`
--

INSERT INTO `name_of_timetable` (`id`, `year_of_timetable`, `drafts`, `status`) VALUES
(15, '2015/2016', 'firstdraft', 1),
(21, '2017/2018', 'firstdraft', 0),
(22, '2016/2017', 'seconddraft', 0);

-- --------------------------------------------------------

--
-- Table structure for table `program_and_course`
--

CREATE TABLE IF NOT EXISTS `program_and_course` (
`id` int(11) NOT NULL,
  `level_of_study` varchar(30) NOT NULL,
  `program` varchar(30) NOT NULL,
  `year_of_timetable` varchar(30) NOT NULL,
  `drafts` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=528 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_and_course`
--

INSERT INTO `program_and_course` (`id`, `level_of_study`, `program`, `year_of_timetable`, `drafts`) VALUES
(359, 'certificate', 'ictb', '2015/2016', 'firstdraft'),
(374, 'diploma', 'plm', '2015/2016', 'firstdraft'),
(389, 'undergraduate', 'ICTM', '2015/2016', 'firstdraft'),
(404, 'postgraduate', 'BBA', '2015/2016', 'firstdraft'),
(524, 'certificate', 'BHSM', '2017/2018', 'firstdraft'),
(525, 'undergraduate', 'ICTM', '2016/2017', 'seconddraft'),
(526, 'undergraduate', 'ICTB', '2016/2017', 'seconddraft'),
(527, 'undergraduate', 'ITS', '2016/2017', 'seconddraft');

-- --------------------------------------------------------

--
-- Table structure for table `show_hide_admin`
--

CREATE TABLE IF NOT EXISTS `show_hide_admin` (
`id` int(11) NOT NULL,
  `show_hide` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `show_hide_admin`
--

INSERT INTO `show_hide_admin` (`id`, `show_hide`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
`visitor_id` int(11) NOT NULL,
  `visiting_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `visitor_ip` varchar(60) NOT NULL,
  `visitor_os` varchar(32) NOT NULL,
  `visitor_browser` varchar(32) NOT NULL,
  `visitor_token` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`visitor_id`, `visiting_time`, `visitor_ip`, `visitor_os`, `visitor_browser`, `visitor_token`) VALUES
(2, '2016-11-04 18:07:39', '::1', 'Windows', 'Google Chrome 54.0.2840.', '363baea9cb'),
(3, '2016-11-04 18:09:27', '::1', 'Windows', 'Google Chrome 54.0.2840.', '363baea9cb'),
(4, '2016-11-04 18:21:39', '::1', 'Windows', 'Firefox 50.0', '363baea9cb'),
(5, '2016-11-04 18:39:30', '::1', 'Windows', 'Google Chrome 54.0.2840.', '363baea9cb'),
(6, '2017-01-07 14:20:01', '127.0.0.1', 'Windows', 'Firefox 51.0', '4b84b15bff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessed_timetable`
--
ALTER TABLE `accessed_timetable`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activetime`
--
ALTER TABLE `activetime`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `name_of_timetable`
--
ALTER TABLE `name_of_timetable`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_and_course`
--
ALTER TABLE `program_and_course`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `show_hide_admin`
--
ALTER TABLE `show_hide_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
 ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessed_timetable`
--
ALTER TABLE `accessed_timetable`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `activetime`
--
ALTER TABLE `activetime`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=606;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `name_of_timetable`
--
ALTER TABLE `name_of_timetable`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `program_and_course`
--
ALTER TABLE `program_and_course`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=528;
--
-- AUTO_INCREMENT for table `show_hide_admin`
--
ALTER TABLE `show_hide_admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
