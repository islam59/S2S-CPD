-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2018 at 12:58 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aliit24_s2s`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_about_training`
--

CREATE TABLE `tb_about_training` (
  `id` int(11) NOT NULL,
  `employability_training` text NOT NULL,
  `vocational_training` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_about_training`
--

INSERT INTO `tb_about_training` (`id`, `employability_training`, `vocational_training`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... ', 'Vocational Training &mdash; Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... Employability Training; details about employability training... ', 0, '0000-00-00 00:00:00', '2018-05-13 03:54:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_authority`
--

CREATE TABLE `tb_authority` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `liability` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `profile_one` varchar(255) NOT NULL,
  `profile_two` varchar(255) NOT NULL,
  `profile_three` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `status` int(11) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_authority`
--

INSERT INTO `tb_authority` (`id`, `user_name`, `user_type`, `liability`, `email`, `phone`, `profile_one`, `profile_two`, `profile_three`, `details`, `status`, `profile_picture`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 'Masuma Bari', 'Executive Director', '', 'masuma@email.com', '+999 99 8887778', 'asdf', 'sadf', 'sdf', 'n/a', 0, 'ed.jpg', '2018-05-19 19:45:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Nazma Akter', 'Program Controller', '', '', '', '', '', '', '', 0, 'pc.jpg', '2018-05-10 19:31:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Islam Hossain', 'Instructor (Web Design)', '', 'islamhossainwork@gmail.com', '+880 1914 441334', 'something.com', 'n/a', 'n/a', 'No More About My Self!', 0, 'IslamHossain150x200.png', '2018-05-30 14:09:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Al-Maksud', 'Instructor (BPO)', '', '', '', '', '', '', '', 0, '02.jpg', '2018-05-13 04:20:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Delwar Hossen', 'Instructor (Web Design)', '', '', '', '', '', '', '', 0, '03.jpg', '2018-05-13 04:21:37', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Tasmin Akhter', 'Instructor (Graphics)', '', '', '', '', '', '', '', 0, '04.jpg', '2018-05-13 04:11:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Ontora Akter', 'Instructor (Customar Care)', '', '', '', '', '', '', '', 0, '05.png', '2018-05-10 19:43:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Rakib Hasan', 'Employee Support Officer', '', '', '', '', '', '', '', 0, '06.jpg', '2018-05-13 04:22:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Musabbir', 'Monitoring Officer', '', '', '', '', '', '', '', 0, '05.png', '2018-05-10 19:43:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Kobita Akter', 'Community Mobilizer', 'CLUB 1', '', '', '', '', '', '', 0, '05.png', '2018-05-30 16:23:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Md. Ripon', 'Community Mobilizer', 'CLUB 2', '', '', '', '', '', '', 0, '05.png', '2018-05-30 16:24:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Winee Shaha', 'Community Mobilizer', 'CLUB 3', '', '', '', '', '', '', 0, '05.png', '2018-05-30 16:24:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Robiul Islam', 'Community Mobilizer', 'CLUB 4', '', '', '', '', '', '', 0, '05.png', '2018-05-30 16:24:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Ashraf Uddin', 'Community Mobilizer', 'CLUB 5', '', '', '', '', '', '', 0, '05.png', '2018-05-30 16:24:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_batch`
--

CREATE TABLE `tb_batch` (
  `id` int(11) NOT NULL,
  `batch_no` varchar(255) NOT NULL,
  `batch_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_batch`
--

INSERT INTO `tb_batch` (`id`, `batch_no`, `batch_name`, `status`) VALUES
(1, '01', '1<sup>st</sup> Batch &mdash; April-2018', 0),
(2, '02', '2<sup>nd</sup> Batch &mdash; July-2018', 0),
(3, '03', '3<sup>rd</sup> Batch &mdash; Oct-2018', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallerycontent`
--

CREATE TABLE `tb_gallerycontent` (
  `id` int(11) NOT NULL,
  `club` varchar(255) NOT NULL,
  `gallerytitle` varchar(255) NOT NULL,
  `gallerycontent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gallerycontent`
--

INSERT INTO `tb_gallerycontent` (`id`, `club`, `gallerytitle`, `gallerycontent`) VALUES
(1, 'club1', 'Youth Club &mdash; 1', '												23/8, Juhuri Moholla, Shyamoli, Dhaka &mdash; 1208. 00\r\n												<br/>\r\n												<strong>Kobita Akter (CM)</strong>\r\n												<br/>\r\n												+880 XXXX XXXXXX'),
(2, 'club2', 'Youth Club &mdash; 2', '34/P, Krishi Market, Mohammadpur, Dhaka &mdash; 1206\r\n												<br/>\r\n												<strong>Ripon Ahmed (CM)</strong>\r\n												<br/>\r\n												+880 XXXX XXXXXX'),
(3, 'club3', 'Youth Club &mdash; 3', '89/C, Adabor-11, Shyamoli, Dhaka &mdash; 1208.\r\n												<br/>\r\n												<strong>Ashraf Khan (CM)</strong>\r\n												<br/>\r\n												+880 XXXX XXXXXX'),
(4, 'club4', 'Youth Club &mdash; 4', '23/8, Juhuri Moholla, Shyamoli, Dhaka &mdash; 1208.\r\n												<br/>\r\n												<strong>Winee Shaha (CM)</strong>\r\n												<br/>\r\n												+880 XXXX XXXXXX'),
(5, 'club5', 'Youth Club &mdash; 5', '23/8, Juhuri Moholla, Shyamoli, Dhaka &mdash; 1208.\r\n												<br/>\r\n												<strong>Robiul Islam (CM)</strong>\r\n												<br/>\r\n												+880 XXXX XXXXXX');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galleryimages`
--

CREATE TABLE `tb_galleryimages` (
  `id` int(11) NOT NULL,
  `galleryimagetitle` varchar(255) NOT NULL,
  `galleryimages` varchar(255) NOT NULL,
  `galleryimagefor` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_galleryimages`
--

INSERT INTO `tb_galleryimages` (`id`, `galleryimagetitle`, `galleryimages`, `galleryimagefor`, `status`) VALUES
(1, '', '01.jpg', 'web design', 1),
(2, '', '02.jpg', 'web design', 1),
(3, '', '03.jpg', 'graphics design', 1),
(5, '', '04.jpg', 'bpo', 1),
(6, '', '05.jpg', 'customar care', 1),
(7, '', '06.jpg', 'club1', 1),
(8, '', '07.jpg', 'club2', 1),
(9, '', '08.jpg', 'club3', 1),
(11, '', '10.jpg', 'club5', 1),
(12, '', '101.jpg', 'web design', 1),
(13, '', '102.jpg', 'web design', 1),
(16, '', '105.jpg', 'bpo', 1),
(17, '', '106.jpg', 'customar care', 1),
(18, '', '107.jpg', 'club1', 1),
(19, '', '108.jpg', 'club2', 1),
(20, '', '109.jpg', 'club3', 1),
(21, '', '110.jpg', 'club4', 1),
(22, '', '111.jpg', 'club5', 1),
(23, '', 'work_6.jpg', 'web design', 1),
(24, '', 'A.jpg', 'Web Design', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_intro`
--

CREATE TABLE `tb_intro` (
  `id` int(11) NOT NULL,
  `introtitle` varchar(255) NOT NULL,
  `introcontent` text NOT NULL,
  `introfor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_intro`
--

INSERT INTO `tb_intro` (`id`, `introtitle`, `introcontent`, `introfor`) VALUES
(1, 'S2S &mdash; Skills To Succeed !', 'S2S &mdash; Skills to Succed Project is the project for vulnarable childrens, Boys & Girls (16 to 24 yrs. Youth). The Project donated by <a href="http://freehtml5.co/">ACCENTURE US</a> and Powered By <a href="">Save The Childrens</a>.The <a href="#">CPD- Community Participation & Developement</a> team performs to develop the trainee also.\r\n2018', 'HomePage'),
(2, 'About The S2S ', 'S2S Trainings &mdash; The duration of the training is 6 months & Two different section of this training''s. One is (a) Employability Training ( 3 Months) &mdash; Location: Youth Club & (b) Vocational Training (3 Months) &mdash; Location: Computer LAM; ', 'AboutPage'),
(3, '<a href="">S2S</a> &mdash; Trainers & Managements !', '', 'TrainersPage'),
(4, 'Contact with Us', 'For any type of your query about <a href="">S2S &mdash; Training</a> You can send SMS to authority. Authority must will contact with you within 24 &mdash; hours. ', 'TrainingsPage');

-- --------------------------------------------------------

--
-- Table structure for table `tb_local_message`
--

CREATE TABLE `tb_local_message` (
  `id` int(11) NOT NULL,
  `message_sender` varchar(255) NOT NULL,
  `message_subject` varchar(255) NOT NULL,
  `message_body` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_local_message`
--

INSERT INTO `tb_local_message` (`id`, `message_sender`, `message_subject`, `message_body`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'test@email.com', 'testing email subject', 'this is a testing email... ', 0, '2018-05-13 17:59:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'asdfasdf', 'sdfadsf', ' asdfasdf', 0, '2018-05-13 18:01:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'asdfdasf', 'sdfasdfasdf', ' sfasdfasdf', 0, '2018-05-13 18:20:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siteinfo`
--

CREATE TABLE `tb_siteinfo` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `author` text NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `footer` text NOT NULL,
  `companymap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siteinfo`
--

INSERT INTO `tb_siteinfo` (`id`, `title`, `icon`, `logo`, `description`, `keywords`, `author`, `companyname`, `address`, `phone`, `website`, `footer`, `companymap`) VALUES
(1, 'S2S &mdash; Skills To Succeed !', 'favicon.ico', 'logo.png', 'cpd, s2s, save the childrens, s2s project, web design, graphics design, BPO freelancing, Customer Care Training. ', 'cpd, s2s, save the childrens, s2s project, web design, graphics design, BPO freelancing, Customer Care Training. ', 'Name: Islam Hossain, Email: islamhossainwork@gmail.com, Phone: +880 1710001337. ', 'Community Participation & Development (CPD)', '1/F, North Adabor, Dhaka — 1207', '+880 1906 042497', 'https://www.cpd-s2s.com.', '<small>(c) 2018 <a href="https://www.s2s.com">S2S</a>. All Rights Reserved. <br>\r\nDesigned by: <a href="http://www.aliit24.com/">Islam Hossain</a> &amp; Powered By &mdash; CPD <a href="http://aliit24.com/" target="_blank">Trainers</a> </small> S2S Project\r\n', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3617.91719529276!2d90.35746893175894!3d23.772599903100446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0a36d4d3a99%3A0x6d1d33dbeda6901f!2sCommunity+Participation+%26+Development+(CPD)!5e0!3m2!1sen!2sbd!4v1525199841567" width="100%" height="270px" frameborder="1" style="border:1px solid #d63a06;" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_student_profile`
--

CREATE TABLE `tb_student_profile` (
  `id` int(11) NOT NULL,
  `batch_id` varchar(255) NOT NULL,
  `author_id` varchar(255) NOT NULL,
  `house_road_no` varchar(255) NOT NULL,
  `slum_name` varchar(255) NOT NULL,
  `block_line_name` varchar(255) NOT NULL,
  `area_name` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `thana` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `city_corporation` varchar(255) NOT NULL,
  `youth_name` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `educational_status` varchar(255) NOT NULL,
  `grade_completed` varchar(255) NOT NULL,
  `grade_continuing` varchar(255) NOT NULL,
  `working_status` varchar(255) NOT NULL,
  `work_type` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `disability_type` varchar(255) NOT NULL,
  `mothers_name` varchar(255) NOT NULL,
  `fathers_name` varchar(255) NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `mothers_occupation` varchar(255) NOT NULL,
  `fathers_occupation` varchar(255) NOT NULL,
  `youth_contact_number` varchar(255) NOT NULL,
  `father_contact_number` varchar(255) NOT NULL,
  `mother_contact_number` varchar(255) NOT NULL,
  `parmanent_village_name` varchar(255) NOT NULL,
  `parmanent_post_office` varchar(255) NOT NULL,
  `parmanent_thana` varchar(255) NOT NULL,
  `parmanent_district` varchar(255) NOT NULL,
  `parmanent_division` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `admission_status` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_student_profile`
--

INSERT INTO `tb_student_profile` (`id`, `batch_id`, `author_id`, `house_road_no`, `slum_name`, `block_line_name`, `area_name`, `landmark`, `thana`, `ward`, `city_corporation`, `youth_name`, `birthdate`, `sex`, `educational_status`, `grade_completed`, `grade_continuing`, `working_status`, `work_type`, `salary`, `company_address`, `disability_type`, `mothers_name`, `fathers_name`, `guardian_name`, `mothers_occupation`, `fathers_occupation`, `youth_contact_number`, `father_contact_number`, `mother_contact_number`, `parmanent_village_name`, `parmanent_post_office`, `parmanent_thana`, `parmanent_district`, `parmanent_division`, `profile_picture`, `admission_status`, `status`) VALUES
(3, '1', '10', '1/F, ROAD 2', 'SHOMPA MARKET', 'QUEENS''S COLLEGE', 'ADABOR', 'ADABOR THANA', 'ADABOR', '02', 'Dhaka — North City Corporation', 'MR. ABDUR RAHMAN', '2018-05-01', 'Male', 'Never Enrolled', '', '', 'No', '', '', '', 'None', 'MD MOSTAFIZUR RAHMAN', 'MST HAFIZA KHATUN', 'OBAIDULLAH KHAN FORAZI', '7. House Wife', '2. Business', '01237894523', '01236985478', '01247893698', 'KHAN PARA', 'PORBOTA', 'KURIGRAM', 'KURIGRAM', 'Rangpur', '', 'CLUB 1', 1),
(4, '1', '10', '1/F, ROAD 2', 'SHOMPA MARKET', 'QUEENS''S COLLEGE', 'ADABOR', 'ADABOR THANA', 'ADABOR', '02', 'Dhaka — South City Corporation', 'MR. ABDUR RAHMAN012', '2018-05-22', 'Male', 'Never Enrolled', '', '', 'No', '', '', '', 'Visual', 'MD MOSTAFIZUR RAHMAN012', 'MST HAFIZA KHATUN012', 'OBAIDULLAH KHAN FORAZI00', '3. Day Laborer', '4. Driver', '01237894523', '01236985478', '01247893698', 'KHAN PARA00', 'PORBOTA00', 'KURIGRAM00', 'KURIGRAM00', 'Rajshahi', '', 'CLUB 1', 1),
(5, '3', '13', '1/F, ROAD 20', 'SHOMPA MARKET0', 'QUEENS''S COLLEGE0', 'ADABOR0', 'ADABOR THANA0', 'ADABOR0', '020', 'Dhaka — South City Corporation', 'MR. ABDUR RAHMAN00', '2018-05-16', 'Male', 'Never Enrolled', '', '', 'No', '', '', '', 'None', 'MD MOSTAFIZUR RAHMAN00', 'MST HAFIZA KHATUN00', 'OBAIDULLAH KHAN FORAZI000', '5. Workshop', '2. Business', '0123789452300', '0123698547800', '0124789369800', 'KHAN PARA00', 'PORBOTA00000', 'KURIGRAM000', 'KURIGRAM00000', 'Khulna', '', 'CLUB 4', 0),
(6, '1', '12', 'sd', 'sdfsdf', 'sdfasdf', 'sdfasd', 'sdfasdf', 'sdfadsf', 'sdfdsf', 'Dhaka — North City Corporation', 'sadfasd', '2018-05-01', 'Male', 'Never Enrolled', '', '', 'No', '', '', '', 'Physical', 'asdfas', 'MST HAFIZA KHATUNasdfasd', 'sadfdsf', '3. Day Laborer', '3. Day Laborer', 'asdfadsf', 'asdfasdfasdfs', 'asdfasd', 'sdfasdf', 'sadfasdf', 'asdfdsf', 'asdfdsf', 'Chattogram', '', 'CLUB 3', 0),
(7, '2', '10', 'house 34/3, road 8', 'adabor', 'shekhertake', 'shyamoli', 'shyamoli', 'ADABOR', '8', 'Dhaka — North City Corporation', 'abdur rahman', '2014-01-31', 'Male', 'Never Enrolled', '', '', 'No', '', '', '', 'None', 'MASUMA BARI', 'ABDUR RAHMAN MOLLA', 'CPD', '7. House Wife', '4. Driver', '898 8989 898989', '980 9898 888888', '898 7665 898989', 'KASEM PUR', 'KARAGAR', 'JEL KHANA', 'FASI', 'Rajshahi', '', 'CLUB 1', 0),
(8, '3', '10', '1/F, ROAD 2', 'SHOMPA MARKET', 'QUEENS''S COLLEGE', 'ADABOR', 'ADABOR THANA', 'ADABOR', '02', 'Dhaka — North City Corporation', 'MR. ABDUR RAHMAN 3', '1988-12-02', 'Female', 'Dropout', 'HSC', '', 'No', '', '', '', 'None', 'MD MOSTAFIZUR RAHMAN012', 'MST HAFIZA KHATUN', 'OBAIDULLAH KHAN FORAZI', '3. Day Laborer', '2. Business', '01237894523', '01236985478', '01247893698', 'KHAN PARA00', 'asdfdasf', 'asdfdsaf', 'asdfdsaf', 'Chattogram', '', 'CLUB 1', 0),
(9, '3', '13', '1/F, ROAD 2', 'SHOMPA MARKET', 'QUEENS''S COLLEGE', 'ADABOR', 'ADABOR THANA', 'ADABOR', '02', 'Dhaka — South City Corporation', 'MR. ABDUR RAHMAN', '2014-11-30', 'Female', 'Never Enrolled', '', '', 'No', '', '', '', 'None', 'MD MOSTAFIZUR RAHMAN', 'MST HAFIZA KHATUN', 'OBAIDULLAH KHAN FORAZI', '2. Business', '2. Business', '01237894523', '01236985478', '01247893698', 'KHAN PARA', 'asdfdasf', 'asdfdsaf', 'KURIGRAM00', 'Chattogram', '', 'CLUB 4', 0),
(10, '1', '13', '1/F, ROAD 2', 'SHOMPA MARKET', 'QUEENS''S COLLEGE', 'ADABOR', 'ADABOR THANA', 'ADABOR', '02', 'Dhaka — South City Corporation', 'MR. ABDUR RAHMAN', '2003-11-30', 'Male', 'Never Enrolled', '', '', 'No', '', '', '', 'None', 'MD MOSTAFIZUR RAHMAN', 'MST HAFIZA KHATUN', 'OBAIDULLAH KHAN FORAZI', '2. Business', '2. Business', '01237894523', '01236985478', '01247893698', 'KHAN PARA00', 'asdfdasf', 'asdfdsaf', 'KURIGRAM', 'Dhaka', '', 'CLUB 4', 0),
(11, '1', '12', '1/F, ROAD 2', 'SHOMPA MARKET', 'QUEENS''S COLLEGE', 'ADABOR', 'ADABOR THANA', 'ADABOR', '02', 'Dhaka — South City Corporation', 'MR. ABDUR RAHMAN', '2006-11-30', 'Male', 'Never Enrolled', '', '', 'No', '', 'sadf', '', 'None', 'MD MOSTAFIZUR RAHMAN', 'MST HAFIZA KHATUN', 'OBAIDULLAH KHAN FORAZI', '2. Business', '2. Business', '01237894523', '01236985478', '01247893698', 'KHAN PARA00', 'asdfdasf', 'KURIGRAM00', 'KURIGRAM00000', 'Chattogram', '', 'CLUB 3', 0),
(12, '2', '11', '1/F, ROAD 2', 'SHOMPA MARKET', 'QUEENS''S COLLEGE', 'ADABOR', 'ADABOR THANA', 'ADABOR', '02', 'Dhaka — South City Corporation', 'MR. ABDUR RAHMAN', '2012-11-30', 'Male', 'Never Enrolled', '', '', 'No', '', '', '', 'None', 'MD MOSTAFIZUR RAHMAN', 'MST HAFIZA KHATUN', 'OBAIDULLAH KHAN FORAZI', '2. Business', '2. Business', '01237894523', '01236985478', '01247893698', 'KHAN PARA00', 'PORBOTA00', 'KURIGRAM', 'KURIGRAM00', 'Chattogram', '', 'CLUB 2', 0),
(13, '2', '11', '1/F, ROAD 2', 'SHOMPA MARKET', 'QUEENS''S COLLEGE', 'ADABOR', 'ADABOR THANA', 'ADABOR', '02', 'Dhaka — South City Corporation', 'MR. ABDUR RAHMAN', '2017-11-30', 'Male', 'Never Enrolled', '', '', 'Yes', '', '', '', 'None', 'MD MOSTAFIZUR RAHMAN', 'MST HAFIZA KHATUN', 'OBAIDULLAH KHAN FORAZI', '2. Business', '2. Business', '01237894523', '01236985478', '01247893698', 'KHAN PARA00', 'asdfdasf', 'asdfdsaf', 'KURIGRAM00', 'Rajshahi', '', 'CLUB 2', 0),
(14, '1', '10', '1/F, ROAD 2', 'SHOMPA MARKET', 'QUEENS''S COLLEGE0', 'ADABOR', 'ADABOR THANA', 'ADABOR', '02', 'Dhaka — South City Corporation', 'MR. ABDUR RAHMAN012', '2017-11-30', 'Male', 'Never Enrolled', 'HSC', 'sadf', 'No', '', '', '', 'None', 'MD MOSTAFIZUR RAHMAN', 'MST HAFIZA KHATUN', 'OBAIDULLAH KHAN FORAZI', '2. Business', '2. Business', '01237894523', '01236985478', '01247893698', 'KHAN PARA00', 'asdfdasf', 'asdfdsaf', 'KURIGRAM00', 'Chattogram', '', 'CLUB 1', 0),
(15, '1', '11', '1/F, ROAD 2', 'SHOMPA MARKET', 'QUEENS''S COLLEGE', 'ADABOR', 'ADABOR THANA', 'ADABOR', '02', 'Dhaka — South City Corporation', 'MR. ABDUR RAHMAN', '2017-11-30', 'Male', 'Never Enrolled', 'HSC', 'sadf', 'No', '', '', '', 'None', 'MD MOSTAFIZUR RAHMAN012', 'MST HAFIZA KHATUN', 'OBAIDULLAH KHAN FORAZI', '2. Business', '2. Business', '01237894523', '01236985478', '01247893698', 'KHAN PARA00', 'asdfdasf', 'asdfdsaf', 'KURIGRAM00', 'Chattogram', '', 'CLUB 2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `email`, `password`, `profile_id`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'IslamHossain', 'something@email.com', '202cb962ac59075b964b07152d234b70', '3', 'Instructor', 1, '2018-05-19 19:49:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_about_training`
--
ALTER TABLE `tb_about_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_authority`
--
ALTER TABLE `tb_authority`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_batch`
--
ALTER TABLE `tb_batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gallerycontent`
--
ALTER TABLE `tb_gallerycontent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_galleryimages`
--
ALTER TABLE `tb_galleryimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_intro`
--
ALTER TABLE `tb_intro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_local_message`
--
ALTER TABLE `tb_local_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_siteinfo`
--
ALTER TABLE `tb_siteinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_student_profile`
--
ALTER TABLE `tb_student_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_about_training`
--
ALTER TABLE `tb_about_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_authority`
--
ALTER TABLE `tb_authority`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_batch`
--
ALTER TABLE `tb_batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_gallerycontent`
--
ALTER TABLE `tb_gallerycontent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_galleryimages`
--
ALTER TABLE `tb_galleryimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tb_intro`
--
ALTER TABLE `tb_intro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_local_message`
--
ALTER TABLE `tb_local_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_siteinfo`
--
ALTER TABLE `tb_siteinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_student_profile`
--
ALTER TABLE `tb_student_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
