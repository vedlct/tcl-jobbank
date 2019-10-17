-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2019 at 12:57 PM
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
-- Database: `tcljob`
--

-- --------------------------------------------------------

--
-- Table structure for table `aggrement`
--

CREATE TABLE `aggrement` (
  `aggrementId` int(11) NOT NULL,
  `fkaggrementQusId` int(11) NOT NULL,
  `fkuserId` int(11) NOT NULL,
  `ans` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agreementqus`
--

CREATE TABLE `agreementqus` (
  `agreementQusId` int(11) NOT NULL,
  `qus` varchar(1000) DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agreementqus`
--

INSERT INTO `agreementqus` (`agreementQusId`, `qus`, `serial`, `status`) VALUES
(26, 'Do you have any crime record?', 1, 1),
(27, 'Do you manage conflict well?', 2, 1),
(28, 'Have you ever committed or conspired to commit a human trafficking offense in Bangladesh or outside of the country?', 3, 1),
(29, 'Are you or have you ever been a drug user or addict?', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `boardId` int(11) NOT NULL,
  `boardName` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`boardId`, `boardName`, `status`) VALUES
(1, 'Dhaka Board', 1),
(2, 'Rajshahi Board', 1),
(3, 'Public University', 1),
(4, 'Private University', 1),
(5, 'Renex Maria Rozario Anita Margaret Rozario nayon S', 0),
(6, 'Khulna Board', 1),
(7, 'Comilla Board', 1),
(8, 'Chattogram Board', 1),
(9, 'Barishal Board', 1),
(10, 'Sylhet Board', 1);

-- --------------------------------------------------------

--
-- Table structure for table `computerskill`
--

CREATE TABLE `computerskill` (
  `id` int(11) NOT NULL,
  `computerSkillName` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL COMMENT '0=inactive,=Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computerskill`
--

INSERT INTO `computerskill` (`id`, `computerSkillName`, `status`) VALUES
(1, 'Outlook', 1),
(2, 'MS Office', 1),
(3, 'MS Office Excel', 0),
(4, 'HTML', 1),
(5, 'Basic Computer', 1),
(6, 'Other', 0),
(7, 'dfsd', 0),
(8, 'dfsd', 0),
(9, 'czxcc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `countryId` int(11) NOT NULL,
  `shortname` varchar(25) DEFAULT NULL,
  `countryName` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`countryId`, `shortname`, `countryName`) VALUES
(1, '', 'Bangladesh'),
(2, '', 'UK'),
(3, 'AF', 'Afghanistan'),
(4, 'AL', 'Albania'),
(5, 'DZ', 'Algeria'),
(6, 'DS', 'American Samoa'),
(7, 'AD', 'Andorra'),
(8, 'AO', 'Angola'),
(9, 'AI', 'Anguilla'),
(10, 'AQ', 'Antarctica'),
(11, 'AG', 'Antigua and Barbuda'),
(12, 'AR', 'Argentina'),
(13, 'AM', 'Armenia'),
(14, 'AW', 'Aruba'),
(15, 'AU', 'Australia'),
(16, 'AT', 'Austria'),
(17, 'AZ', 'Azerbaijan'),
(18, 'BS', 'Bahamas'),
(19, 'BH', 'Bahrain'),
(20, 'BD', 'Bangladesh'),
(21, 'BB', 'Barbados'),
(22, 'BY', 'Belarus'),
(23, 'BE', 'Belgium'),
(24, 'BZ', 'Belize'),
(25, 'BJ', 'Benin'),
(26, 'BM', 'Bermuda'),
(27, 'BT', 'Bhutan'),
(28, 'BO', 'Bolivia'),
(29, 'BA', 'Bosnia and Herzegovina'),
(30, 'BW', 'Botswana'),
(31, 'BV', 'Bouvet Island'),
(32, 'BR', 'Brazil'),
(33, 'IO', 'British Indian Ocean Terr'),
(34, 'BN', 'Brunei Darussalam'),
(35, 'BG', 'Bulgaria'),
(36, 'BF', 'Burkina Faso'),
(37, 'BI', 'Burundi'),
(38, 'KH', 'Cambodia'),
(39, 'CM', 'Cameroon'),
(40, 'CA', 'Canada'),
(41, 'CV', 'Cape Verde'),
(42, 'KY', 'Cayman Islands'),
(43, 'CF', 'Central African Republic'),
(44, 'TD', 'Chad'),
(45, 'CL', 'Chile'),
(46, 'CN', 'China'),
(47, 'CX', 'Christmas Island'),
(48, 'CC', 'Cocos (Keeling) Islands'),
(49, 'CO', 'Colombia'),
(50, 'KM', 'Comoros'),
(51, 'CG', 'Congo'),
(52, 'CK', 'Cook Islands'),
(53, 'CR', 'Costa Rica'),
(54, 'HR', 'Croatia (Hrvatska)'),
(55, 'CU', 'Cuba'),
(56, 'CY', 'Cyprus'),
(57, 'CZ', 'Czech Republic'),
(58, 'DK', 'Denmark'),
(59, 'DJ', 'Djibouti'),
(60, 'DM', 'Dominica'),
(61, 'DO', 'Dominican Republic'),
(62, 'TP', 'East Timor'),
(63, 'EC', 'Ecuador'),
(64, 'EG', 'Egypt'),
(65, 'SV', 'El Salvador'),
(66, 'GQ', 'Equatorial Guinea'),
(67, 'ER', 'Eritrea'),
(68, 'EE', 'Estonia'),
(69, 'ET', 'Ethiopia'),
(70, 'FK', 'Falkland Islands (Malvina'),
(71, 'FO', 'Faroe Islands'),
(72, 'FJ', 'Fiji'),
(73, 'FI', 'Finland'),
(74, 'FR', 'France'),
(75, 'FX', 'France, Metropolitan'),
(76, 'GF', 'French Guiana'),
(77, 'PF', 'French Polynesia'),
(78, 'TF', 'French Southern Territori'),
(79, 'GA', 'Gabon'),
(80, 'GM', 'Gambia'),
(81, 'GE', 'Georgia'),
(82, 'DE', 'Germany'),
(83, 'GH', 'Ghana'),
(84, 'GI', 'Gibraltar'),
(85, 'GK', 'Guernsey'),
(86, 'GR', 'Greece'),
(87, 'GL', 'Greenland'),
(88, 'GD', 'Grenada'),
(89, 'GP', 'Guadeloupe'),
(90, 'GU', 'Guam'),
(91, 'GT', 'Guatemala'),
(92, 'GN', 'Guinea'),
(93, 'GW', 'Guinea-Bissau'),
(94, 'GY', 'Guyana'),
(95, 'HT', 'Haiti'),
(96, 'HM', 'Heard and Mc Donald Islan'),
(97, 'HN', 'Honduras'),
(98, 'HK', 'Hong Kong'),
(99, 'HU', 'Hungary'),
(100, 'IS', 'Iceland'),
(101, 'IN', 'India'),
(102, 'IM', 'Isle of Man'),
(103, 'ID', 'Indonesia'),
(104, 'IR', 'Iran (Islamic Republic of'),
(105, 'IQ', 'Iraq'),
(106, 'IE', 'Ireland'),
(107, 'IL', 'Israel'),
(108, 'IT', 'Italy'),
(109, 'CI', 'Ivory Coast'),
(110, 'JE', 'Jersey'),
(111, 'JM', 'Jamaica'),
(112, 'JP', 'Japan'),
(113, 'JO', 'Jordan'),
(114, 'KZ', 'Kazakhstan'),
(115, 'KE', 'Kenya'),
(116, 'KI', 'Kiribati'),
(117, 'KP', 'Korea, Democratic People\''),
(118, 'KR', 'Korea, Republic of'),
(119, 'XK', 'Kosovo'),
(120, 'KW', 'Kuwait'),
(121, 'KG', 'Kyrgyzstan'),
(122, 'LA', 'Lao People\'s Democratic R'),
(123, 'LV', 'Latvia'),
(124, 'LB', 'Lebanon'),
(125, 'LS', 'Lesotho'),
(126, 'LR', 'Liberia'),
(127, 'LY', 'Libyan Arab Jamahiriya'),
(128, 'LI', 'Liechtenstein'),
(129, 'LT', 'Lithuania'),
(130, 'LU', 'Luxembourg'),
(131, 'MO', 'Macau'),
(132, 'MK', 'Macedonia'),
(133, 'MG', 'Madagascar'),
(134, 'MW', 'Malawi'),
(135, 'MY', 'Malaysia'),
(136, 'MV', 'Maldives'),
(137, 'ML', 'Mali'),
(138, 'MT', 'Malta'),
(139, 'MH', 'Marshall Islands'),
(140, 'MQ', 'Martinique'),
(141, 'MR', 'Mauritania'),
(142, 'MU', 'Mauritius'),
(143, 'TY', 'Mayotte'),
(144, 'MX', 'Mexico'),
(145, 'FM', 'Micronesia, Federated Sta'),
(146, 'MD', 'Moldova, Republic of'),
(147, 'MC', 'Monaco'),
(148, 'MN', 'Mongolia'),
(149, 'ME', 'Montenegro'),
(150, 'MS', 'Montserrat'),
(151, 'MA', 'Morocco'),
(152, 'MZ', 'Mozambique'),
(153, 'MM', 'Myanmar'),
(154, 'NA', 'Namibia'),
(155, 'NR', 'Nauru'),
(156, 'NP', 'Nepal'),
(157, 'NL', 'Netherlands'),
(158, 'AN', 'Netherlands Antilles'),
(159, 'NC', 'New Caledonia'),
(160, 'NZ', 'New Zealand'),
(161, 'NI', 'Nicaragua'),
(162, 'NE', 'Niger'),
(163, 'NG', 'Nigeria'),
(164, 'NU', 'Niue'),
(165, 'NF', 'Norfolk Island'),
(166, 'MP', 'Northern Mariana Islands'),
(167, 'NO', 'Norway'),
(168, 'OM', 'Oman'),
(169, 'PK', 'Pakistan'),
(170, 'PW', 'Palau'),
(171, 'PS', 'Palestine'),
(172, 'PA', 'Panama'),
(173, 'PG', 'Papua New Guinea'),
(174, 'PY', 'Paraguay'),
(175, 'PE', 'Peru'),
(176, 'PH', 'Philippines'),
(177, 'PN', 'Pitcairn'),
(178, 'PL', 'Poland'),
(179, 'PT', 'Portugal'),
(180, 'PR', 'Puerto Rico'),
(181, 'QA', 'Qatar'),
(182, 'RE', 'Reunion'),
(183, 'RO', 'Romania'),
(184, 'RU', 'Russian Federation'),
(185, 'RW', 'Rwanda'),
(186, 'KN', 'Saint Kitts and Nevis'),
(187, 'LC', 'Saint Lucia'),
(188, 'VC', 'Saint Vincent and the Gre'),
(189, 'WS', 'Samoa'),
(190, 'SM', 'San Marino'),
(191, 'ST', 'Sao Tome and Principe'),
(192, 'SA', 'Saudi Arabia'),
(193, 'SN', 'Senegal'),
(194, 'RS', 'Serbia'),
(195, 'SC', 'Seychelles'),
(196, 'SL', 'Sierra Leone'),
(197, 'SG', 'Singapore'),
(198, 'SK', 'Slovakia'),
(199, 'SI', 'Slovenia'),
(200, 'SB', 'Solomon Islands'),
(201, 'SO', 'Somalia'),
(202, 'ZA', 'South Africa'),
(203, 'GS', 'South Georgia South Sandw'),
(204, 'SS', 'South Sudan'),
(205, 'ES', 'Spain'),
(206, 'LK', 'Sri Lanka'),
(207, 'SH', 'St. Helena'),
(208, 'PM', 'St. Pierre and Miquelon'),
(209, 'SD', 'Sudan'),
(210, 'SR', 'Suriname'),
(211, 'SJ', 'Svalbard and Jan Mayen Is'),
(212, 'SZ', 'Swaziland'),
(213, 'SE', 'Sweden'),
(214, 'CH', 'Switzerland'),
(215, 'SY', 'Syrian Arab Republic'),
(216, 'TW', 'Taiwan'),
(217, 'TJ', 'Tajikistan'),
(218, 'TZ', 'Tanzania, United Republic'),
(219, 'TH', 'Thailand'),
(220, 'TG', 'Togo'),
(221, 'TK', 'Tokelau'),
(222, 'TO', 'Tonga'),
(223, 'TT', 'Trinidad and Tobago'),
(224, 'TN', 'Tunisia'),
(225, 'TR', 'Turkey'),
(226, 'TM', 'Turkmenistan'),
(227, 'TC', 'Turks and Caicos Islands'),
(228, 'TV', 'Tuvalu'),
(229, 'UG', 'Uganda'),
(230, 'UA', 'Ukraine'),
(231, 'AE', 'United Arab Emirates'),
(232, 'GB', 'United Kingdom'),
(233, 'US', 'United States'),
(234, 'UM', 'United States minor outly'),
(235, 'UY', 'Uruguay'),
(236, 'UZ', 'Uzbekistan'),
(237, 'VU', 'Vanuatu'),
(238, 'VA', 'Vatican City State'),
(239, 'VE', 'Venezuela'),
(240, 'VN', 'Vietnam'),
(241, 'VG', 'Virgin Islands (British)'),
(242, 'VI', 'Virgin Islands (U.S.)'),
(243, 'WF', 'Wallis and Futuna Islands'),
(244, 'EH', 'Western Sahara'),
(245, 'YE', 'Yemen'),
(246, 'ZR', 'Zaire'),
(247, 'ZM', 'Zambia'),
(248, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `degreeId` int(11) NOT NULL,
  `degreeName` varchar(255) DEFAULT NULL,
  `educationLevelId` int(11) NOT NULL,
  `status` tinyint(3) DEFAULT NULL COMMENT '0=Inactive ,1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`degreeId`, `degreeName`, `educationLevelId`, `status`) VALUES
(1, 'Bachelor of Science (BSc)', 3, 1),
(2, 'Bachelor of Arts (BA)', 3, 1),
(3, 'SSC', 1, 1),
(4, 'Arts', 8, 0),
(5, 'HSC', 2, 1),
(6, 'Bachelor of Commerce (B Com)', 3, 1),
(7, 'Bachelor of Commerce (Pass)', 3, 1),
(8, 'Master of Arts (MA)', 4, 1),
(9, 'Master of Science (MSc)', 4, 1),
(10, 'Bachelor of Business Administration (BBA)', 3, 1),
(11, 'Master of  Commerce (M Com)', 4, 1),
(12, 'A Level', 2, 1),
(13, 'Alim (Madrasah)', 2, 1),
(14, 'HSC (Vocational)', 2, 1),
(15, 'Others', 2, 1),
(16, 'test3', 2, 0),
(17, 'Dakhil (Madrasah)', 1, 1),
(18, 'Master of Business Administration (MBA)', 4, 1),
(19, 'Dakhil', 9, 0),
(20, 'SSC (Vocational)', 1, 1),
(21, 'Bachelor of Medicine and Bachelor of Surgery (MBBS)', 3, 1),
(22, 'Bachelor of Dental Surgery (BDS)', 3, 1),
(23, 'commerce', 2, 0),
(24, 'Business Studies', 1, 0),
(25, 'Business Studies', 2, 0),
(26, 'Others', 1, 0),
(27, 'Arts', 1, 0),
(28, 'Bachelor of Architecture (B. Arch)', 3, 1),
(29, 'O Level', 1, 1),
(30, 'Bachelor of Pharmacy (B. Pharm)', 3, 1),
(31, 'Bachelor of Education (B. Ed)', 3, 1),
(32, 'Bachelor of Physical Education (BPEd)', 3, 1),
(33, 'Bachelor of Law (LLB)', 3, 1),
(34, 'Dector of Veterinary Medicine (DVM)', 3, 1),
(35, 'Bachelor of Social Science (BSS)', 3, 1),
(36, 'Bachelor of Fine Arts (B.F.A)', 3, 1),
(37, 'Bachelor of Business Studies (BBS)', 3, 1),
(38, 'Bachelor of Computer Application (BCA)', 3, 1),
(39, 'Fazil (Madrasah)', 3, 1),
(40, 'Bachelor in Engineering (BEngg)', 3, 1),
(41, 'Others', 3, 0),
(42, 'Primary School Certificate (PSC)', 14, 1),
(43, 'Ebtedayee', 14, 1),
(44, '5 pass', 14, 1),
(45, 'Others', 14, 0),
(46, 'Junior School Certificate (JSC)', 15, 1),
(47, 'JDC (Madrasah)', 15, 1),
(48, '8 Pass', 15, 1),
(49, 'Others', 15, 0),
(50, 'Diploma in Engineering', 6, 1),
(51, 'Diploma in Medical Technology', 6, 1),
(52, 'Diploma in Nursing', 6, 1),
(53, 'Diploma in Commerce', 6, 1),
(54, 'Diploma in Business Studies', 6, 1),
(55, 'Post Graduate Diploma (PGD)', 6, 1),
(56, 'Diploma in Pathology', 6, 1),
(57, 'Diploma (Vocational)', 6, 1),
(58, 'Diploma in Hotel Management', 6, 1),
(59, 'Others', 6, 0),
(60, 'Bechelor of Tourism and Hospitality Management', 3, 1),
(61, 'Bachelor of Science in Computer and Information technology', 3, 1),
(62, 'Bachelor of Science in Computer and Engineering', 3, 1),
(63, 'Master of Architecture (M. Arch)', 4, 1),
(64, 'Master of Pharmacy (M. Pharm)', 4, 1),
(65, 'Master of Education (M. Ed)', 4, 1),
(66, 'Master of Law (LLM)', 4, 1),
(67, 'Master of Social Science (MSS)', 4, 1),
(68, 'Master of Fine Arts (M.F.A)', 4, 1),
(69, 'Master of Philosophy (M. Phil)', 4, 1),
(70, 'Master of Business Management (MBM)', 4, 1),
(71, 'Master of Development Studies (MDS)', 4, 1),
(72, 'Master of Business Studies (MBS)', 4, 1),
(73, 'Masters in Computer Application (MCA)', 4, 1),
(74, 'Executive Master of Business Administration (EMBA)', 4, 1),
(75, 'Fellowship of the College of Physicians and Surgeons (FCPS)', 4, 1),
(76, 'Kamil (Madrasah)', 4, 1),
(77, 'Masters in Engineering (MEngg)', 4, 1),
(78, 'Masters in Bank Management (MBM)', 4, 1),
(79, 'Masters in Information System Security (MISS)', 4, 1),
(80, 'Master of information and Communication Technology (MICT)', 4, 1),
(81, 'Others', 4, 0),
(82, 'PHD', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designationId` int(11) NOT NULL,
  `designationName` varchar(50) NOT NULL,
  `status` tinyint(3) DEFAULT NULL COMMENT '0=Inactive ,1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designationId`, `designationName`, `status`) VALUES
(1, 'Designation-1', 0),
(2, 'Designation 2', 0),
(3, 'test', 0),
(4, 'test123', 0),
(5, 'test Designation', 0),
(6, 'Senior HR Officer', 1),
(7, 'Assistant HR Officer', 1),
(8, 'Senior Secretary of RD CHT', 1),
(9, 'ICT Manager', 1),
(10, 'Manager-HR', 1);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `educationId` int(11) NOT NULL,
  `fkdegreeId` int(11) NOT NULL,
  `institutionName` varchar(255) DEFAULT NULL,
  `fkMajorId` int(11) DEFAULT NULL,
  `passingYear` year(4) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `resultSystem` tinyint(2) NOT NULL COMMENT '1=grade,2=division,3=class,4=others',
  `result` varchar(20) DEFAULT NULL,
  `resultOutOf` varchar(20) DEFAULT NULL,
  `educationcol` varchar(45) DEFAULT NULL,
  `fkcountryId` int(11) NOT NULL,
  `fkemployeeId` int(11) NOT NULL,
  `fkboardId` int(11) DEFAULT NULL,
  `universityType` tinyint(3) DEFAULT NULL COMMENT '1=Private,2=Public',
  `resultSystemName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`educationId`, `fkdegreeId`, `institutionName`, `fkMajorId`, `passingYear`, `status`, `resultSystem`, `result`, `resultOutOf`, `educationcol`, `fkcountryId`, `fkemployeeId`, `fkboardId`, `universityType`, `resultSystemName`) VALUES
(1, 61, 'nm', NULL, 2009, '2', 1, '5', '5', NULL, 1, 1, NULL, 1, NULL),
(2, 3, 'nm', 1, 2010, '2', 1, '5', '5', NULL, 1, 1, 9, NULL, NULL),
(3, 74, 'nm', 2, 2014, '2', 1, '5', '5', NULL, 3, 1, NULL, 1, NULL),
(4, 5, 'jhgpuigu', 3, 2010, '2', 1, '5', '5', NULL, 5, 1, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `educationlevel`
--

CREATE TABLE `educationlevel` (
  `educationLevelId` int(11) NOT NULL,
  `educationLevelName` varchar(128) DEFAULT NULL,
  `eduLvlUnder` tinyint(2) DEFAULT NULL COMMENT '1=Board ,2=University',
  `status` tinyint(3) DEFAULT NULL COMMENT '0=Inactive ,1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educationlevel`
--

INSERT INTO `educationlevel` (`educationLevelId`, `educationLevelName`, `eduLvlUnder`, `status`) VALUES
(1, 'Secondary', 1, 1),
(2, 'Higher Secondary', 1, 1),
(3, 'Bachelor/ Honors', 2, 1),
(4, 'Masters', 2, 1),
(5, 'PhD (Doctor of Philosophy)', 2, 1),
(6, 'Diploma', 1, 1),
(7, 'asd', NULL, NULL),
(8, 'new test', 2, 0),
(9, 'Arabic', 1, 0),
(10, 'O level', 1, 0),
(11, 'A level', 1, NULL),
(12, 'Dhakhil', 1, NULL),
(13, 'Bachelor Administration(BA)', 2, NULL),
(14, 'PSC/5 Pass', 1, 1),
(15, 'JSC/JDC/8 Pass', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `educationmajor`
--

CREATE TABLE `educationmajor` (
  `educationMajorId` int(11) NOT NULL,
  `educationMajorName` varchar(255) DEFAULT NULL,
  `fkDegreeId` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL COMMENT '0=Inactive ,1=Active',
  `type` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educationmajor`
--

INSERT INTO `educationmajor` (`educationMajorId`, `educationMajorName`, `fkDegreeId`, `status`, `type`) VALUES
(1, 'dafvd', 3, 1, NULL),
(2, 'dafvd', 74, 1, NULL),
(3, 'dafvd', 5, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `email_id` int(11) NOT NULL,
  `emailfor` enum('interview','panellisted','notselected','acknowledgement') COLLATE utf8_unicode_ci DEFAULT NULL,
  `emailbody` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`email_id`, `emailfor`, `emailbody`) VALUES
(1, 'interview', '<p><span style=\"font-size:12pt\"><span style=\"font-size:11.0pt\"><span style=\"color:black\">With reference to your application for the post of </span></span><span style=\"font-size:11.0pt\"><span style=\"color:black\">Accounts Officer<strong> </strong>for Emergency Response Program under Caritas Chittagong Region,</span></span><span style=\"font-size:11.0pt\"><span style=\"color:black\"> we would like to invite you for an written test (8.30 a.m. &ndash; 10.30 a.m.), computer test (10.30 a.m. &ndash; 11.00 a.m.) and personal interview (11.15 a.m. &ndash; onward) to be held on the 31&nbsp;October 2019&nbsp;(Tuesday) at Caritas Central Office, 2, Outer Circular Road, Shantibagh, Dhaka-1217.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-size:11.0pt\"><span style=\"color:black\">Please take note of the following information for attending the interview:&nbsp; </span></span></span></p>\r\n\r\n<table cellspacing=\"0\" class=\"Table\" style=\"border-collapse:collapse; border:undefined; margin-left:5.4pt\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:22.5pt\">\r\n			<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-size:11.0pt\"><span style=\"color:black\">1.</span></span></span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:450.9pt\">\r\n			<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-size:11.0pt\"><span style=\"color:black\">That you are requested to be present for the interview on time.</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:22.5pt\">\r\n			<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-size:11.0pt\"><span style=\"color:black\">2.</span></span></span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:450.9pt\">\r\n			<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-size:11.0pt\"><span style=\"color:black\">That no TA/DA will be provided for attending the above interview.</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:22.5pt\">\r\n			<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-size:11.0pt\"><span style=\"color:black\">3.</span></span></span></p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:450.9pt\">\r\n			<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-size:11.0pt\"><span style=\"color:black\">That you are to bring original copies of all certificates during interview.</span></span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-size:11.0pt\"><span style=\"color:black\">With best regards, </span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:10pt\"><strong><span style=\"font-size:11.0pt\"><span style=\"color:black\">Sebastian Rozario</span></span></strong></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:10pt\"><strong><span style=\"font-size:11.0pt\"><span style=\"color:black\">Assistant Executive Director (Finance and Admin.)</span></span></strong></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><strong><span style=\"font-size:11.0pt\"><span style=\"color:black\">Caritas Bangladesh</span></span></strong></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-size:11.0pt\"><span style=\"color:black\">CC: ED/ AED (P)</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-size:11.0pt\"><span style=\"color:black\">&nbsp;&nbsp;&nbsp; : Convener, Selection Committee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Please follow up.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-size:11.0pt\"><span style=\"color:black\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></p>'),
(2, 'panellisted', '<p>dsgdgdfg</p>\r\n\r\n<p>dfgfdhf</p>'),
(3, 'notselected', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>'),
(4, 'acknowledgement', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>&nbsp;dfgfdgfdgdfgdfgdffdgfg</strong></p>\r\n\r\n<p><strong>dfghfdgdfhasfsdgdfgdfgdfghfdhfdhfdhdfhfddfh</strong></p>');

-- --------------------------------------------------------

--
-- Table structure for table `empcomputerskill`
--

CREATE TABLE `empcomputerskill` (
  `id` int(11) NOT NULL,
  `fk_empId` int(11) NOT NULL,
  `computerSkillId` int(11) NOT NULL,
  `SkillAchievement` tinyint(2) NOT NULL COMMENT '1=General,2=Advance'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empcomputerskill`
--

INSERT INTO `empcomputerskill` (`id`, `fk_empId`, `computerSkillId`, `SkillAchievement`) VALUES
(1, 1, 2, 1),
(2, 1, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeId` int(11) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `fathersName` varchar(50) DEFAULT NULL,
  `mothersName` varchar(50) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `gender` varchar(3) DEFAULT NULL,
  `employeecol1` varchar(45) DEFAULT NULL,
  `fkreligionId` int(11) NOT NULL,
  `ethnicityId` int(11) NOT NULL,
  `disability` varchar(2) DEFAULT NULL COMMENT 'Y=yes, N= no',
  `fknationalityId` int(11) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `homeNumber` varchar(20) DEFAULT NULL,
  `officeNumber` varchar(20) DEFAULT NULL,
  `personalMobile` varchar(20) DEFAULT NULL,
  `alternativePhoneNo` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nationalId` varchar(25) DEFAULT NULL,
  `birthID` varchar(25) DEFAULT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `alternativeEmail` varchar(255) DEFAULT NULL,
  `presentAddress` mediumtext,
  `parmanentAddress` mediumtext,
  `image` varchar(255) DEFAULT NULL,
  `sign` varchar(255) DEFAULT NULL,
  `fkzoneId` int(11) DEFAULT NULL,
  `fkuserId` int(11) NOT NULL,
  `cvStatus` int(11) DEFAULT NULL,
  `cvCompletedDate` date DEFAULT NULL,
  `relativeInCB` int(3) DEFAULT '0',
  `hasProfCertificate` tinyint(2) DEFAULT NULL COMMENT '0=no,1=yes',
  `hasTrainingInfo` tinyint(2) DEFAULT NULL COMMENT '0=no,1=yes',
  `bloodGroup` varchar(5) DEFAULT NULL,
  `maritalStatus` varchar(15) DEFAULT NULL,
  `spouse` varchar(100) DEFAULT NULL,
  `passport` varchar(15) DEFAULT NULL,
  `hasJobExp` tinyint(2) DEFAULT NULL COMMENT '0=no,1=yes',
  `hasOtherSkill` tinyint(2) DEFAULT NULL COMMENT '0=no,1=yes',
  `hasWorkedInCB` tinyint(2) DEFAULT NULL COMMENT '0=no,1=yes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeId`, `firstName`, `lastName`, `fathersName`, `mothersName`, `dateOfBirth`, `gender`, `employeecol1`, `fkreligionId`, `ethnicityId`, `disability`, `fknationalityId`, `telephone`, `homeNumber`, `officeNumber`, `personalMobile`, `alternativePhoneNo`, `email`, `nationalId`, `birthID`, `skype`, `alternativeEmail`, `presentAddress`, `parmanentAddress`, `image`, `sign`, `fkzoneId`, `fkuserId`, `cvStatus`, `cvCompletedDate`, `relativeInCB`, `hasProfCertificate`, `hasTrainingInfo`, `bloodGroup`, `maritalStatus`, `spouse`, `passport`, `hasJobExp`, `hasOtherSkill`, `hasWorkedInCB`) VALUES
(1, 'adam', 'Jade', 'm', 'so', '1994-07-05', 'F', NULL, 1, 1, 'Y', 1, '9090909090', NULL, NULL, '9090909090', NULL, 'yyyyyy@gmail.com', NULL, NULL, NULL, 'yyyyyy@gmail.com', 'yu', 'tyhftyujt', NULL, NULL, NULL, 65, 1, '2019-10-11', 1, 1, 1, 'o+', 's', NULL, NULL, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employmenttype`
--

CREATE TABLE `employmenttype` (
  `id` int(11) NOT NULL,
  `typeName` varchar(100) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL COMMENT '0=inactive,1=active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp_language`
--

CREATE TABLE `emp_language` (
  `id` int(11) NOT NULL,
  `fklanguageSkill` int(11) NOT NULL,
  `fkemployeeId` int(11) NOT NULL,
  `fklanguageHead` int(3) NOT NULL,
  `rate` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_language`
--

INSERT INTO `emp_language` (`id`, `fklanguageSkill`, `fkemployeeId`, `fklanguageHead`, `rate`) VALUES
(1, 1, 1, 1, '0'),
(2, 2, 1, 1, '0'),
(3, 3, 1, 1, '0'),
(4, 7, 1, 1, '0'),
(5, 1, 1, 2, '25'),
(6, 2, 1, 2, '17'),
(7, 3, 1, 2, '22'),
(8, 7, 1, 2, '14');

-- --------------------------------------------------------

--
-- Table structure for table `emp_otherskill_achievement`
--

CREATE TABLE `emp_otherskill_achievement` (
  `id` int(11) NOT NULL,
  `otherSkillId` int(11) NOT NULL,
  `fkemployeeId` int(11) NOT NULL,
  `ratiing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp_other_info`
--

CREATE TABLE `emp_other_info` (
  `id` int(11) NOT NULL,
  `extraCurricularActivities` varchar(2500) DEFAULT NULL,
  `interests` varchar(2500) DEFAULT NULL,
  `awardReceived` varchar(2500) DEFAULT NULL,
  `researchPublication` varchar(2500) DEFAULT NULL,
  `fk_empId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_other_info`
--

INSERT INTO `emp_other_info` (`id`, `extraCurricularActivities`, `interests`, `awardReceived`, `researchPublication`, `fk_empId`) VALUES
(1, 'nhhjdjd tgykf', 'gfvhdjnj jedjkyedkj jtyedyjm', 'fhjntyj tgjjjjjjjjjj', 'gtjjjjjj', 1);

-- --------------------------------------------------------

--
-- Table structure for table `emp_ques_obj`
--

CREATE TABLE `emp_ques_obj` (
  `id` int(11) NOT NULL,
  `objective` varchar(2500) DEFAULT NULL,
  `empId` int(11) NOT NULL,
  `currentSalary` varchar(45) DEFAULT NULL,
  `expectedSalary` varchar(45) DEFAULT NULL,
  `readyToJoinAfter` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_ques_obj`
--

INSERT INTO `emp_ques_obj` (`id`, `objective`, `empId`, `currentSalary`, `expectedSalary`, `readyToJoinAfter`) VALUES
(1, 'gyuguih ugyg hgyg suhuge gyoug iuyguyg uiyg iuyg', 1, '20000', '30000', '2019-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `emp_ques_objective_and_info`
--

CREATE TABLE `emp_ques_objective_and_info` (
  `id` int(11) NOT NULL,
  `ques` varchar(255) DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1=Active,0=inActive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_ques_objective_and_info`
--

INSERT INTO `emp_ques_objective_and_info` (`id`, `ques`, `serial`, `status`) VALUES
(1, 'test1', 3, 0),
(2, 'Why are you leaving your present job?', 1, 1),
(3, 'Why are you interested to work in Caritas Bangladesh?', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `emp_ques_objective_and_info_ans`
--

CREATE TABLE `emp_ques_objective_and_info_ans` (
  `id` int(11) NOT NULL,
  `ans` longtext NOT NULL,
  `fkqusId` int(11) NOT NULL,
  `fkemployeeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_ques_objective_and_info_ans`
--

INSERT INTO `emp_ques_objective_and_info_ans` (`id`, `ans`, `fkqusId`, `fkemployeeId`) VALUES
(1, '4t64e', 2, 1),
(2, 'hyryh5ty5thywr', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ethnicity`
--

CREATE TABLE `ethnicity` (
  `ethnicityId` int(11) NOT NULL,
  `ethnicityName` varchar(50) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL COMMENT '0=Inactive ,1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ethnicity`
--

INSERT INTO `ethnicity` (`ethnicityId`, `ethnicityName`, `status`) VALUES
(1, 'Bangali', 1),
(2, 'Adibashi', 1),
(3, 'Others', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

CREATE TABLE `hr` (
  `hrId` int(11) NOT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `fkdesignationId` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `fkuserId` int(11) DEFAULT NULL,
  `fkzoneId` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr`
--

INSERT INTO `hr` (`hrId`, `firstName`, `lastName`, `fkdesignationId`, `email`, `phone`, `address`, `fkuserId`, `fkzoneId`, `gender`, `status`, `created_at`) VALUES
(1, 'adam', 'Rahman', 6, 'hg@gmail.com', '09876543212', '4y64u5\r\nt5ui\r\neuye4iu6', 66, 4, 'M', 1, '2019-10-11 05:48:42'),
(2, 'i', 'Jade', 8, 'h2g@gmail.com', '15432567898', '4y64u5\r\nt5ui\r\neuye4iu6', 67, 5, 'M', 1, '2019-10-11 05:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobId` int(11) NOT NULL,
  `title` mediumtext,
  `position` mediumtext,
  `salary` varchar(45) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `details` longtext,
  `status` tinyint(3) DEFAULT NULL COMMENT '1=posted,2=deavtive,0=deleted',
  `jobstatus` tinyint(3) DEFAULT NULL COMMENT '1=Part time , 2=Full time, 3=Other, 4=Internship, 5=Contractual, 6=Remote Work',
  `postBy` int(11) DEFAULT NULL,
  `postDate` datetime DEFAULT NULL,
  `createBy` int(11) NOT NULL,
  `createDate` datetime DEFAULT NULL,
  `fkzoneId` int(11) NOT NULL,
  `updateBy` int(11) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `pdflink` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobId`, `title`, `position`, `salary`, `deadline`, `details`, `status`, `jobstatus`, `postBy`, `postDate`, `createBy`, `createDate`, `fkzoneId`, `updateBy`, `updateTime`, `pdflink`) VALUES
(5, 'asd', 'sdf', 'asd', '2019-11-09', '<p>asdasdasd</p>', 1, 1, 1, '2019-10-16 12:32:13', 1, '2019-10-16 12:32:13', 4, 1, '2019-10-16 12:32:13', NULL),
(6, 'asd', 'asd', '4343', '2019-11-06', '<h1>asssssssss</h1>', 1, 4, 1, '2019-10-16 12:33:14', 1, '2019-10-16 12:33:14', 5, 1, '2019-10-16 13:20:44', NULL),
(7, 'dg', 'dfdg', 'fg', '2019-11-02', '<h1>dfgfdg</h1>', 2, 2, NULL, NULL, 1, '2019-10-16 12:41:58', 6, 1, '2019-10-16 12:41:58', NULL),
(8, 'asd', 'asd', 'asd', '2019-11-08', '<h2>asdasd</h2>', 1, 2, 1, '2019-10-16 12:56:19', 1, '2019-10-16 12:56:19', 6, 1, '2019-10-16 12:56:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobapply`
--

CREATE TABLE `jobapply` (
  `jobapply` int(11) NOT NULL,
  `applydate` date DEFAULT NULL,
  `fkjobId` int(11) NOT NULL,
  `fkemployeeId` int(11) DEFAULT NULL,
  `status` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending',
  `statuschangeBy` int(11) DEFAULT NULL,
  `currentSalary` int(11) DEFAULT NULL,
  `expectedSalary` int(11) DEFAULT NULL,
  `readyToJoinAfter` varchar(11) DEFAULT NULL,
  `mailTamplateId` int(11) DEFAULT NULL,
  `interviewCallDate` date DEFAULT NULL,
  `interviewCallDateTime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobapply`
--

INSERT INTO `jobapply` (`jobapply`, `applydate`, `fkjobId`, `fkemployeeId`, `status`, `statuschangeBy`, `currentSalary`, `expectedSalary`, `readyToJoinAfter`, `mailTamplateId`, `interviewCallDate`, `interviewCallDateTime`) VALUES
(10, '2019-10-17', 5, 1, 'Viewed', NULL, 6, 456, NULL, NULL, NULL, NULL),
(11, '2019-10-17', 6, 1, 'Viewed', NULL, 10, 20, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobapplyanswer`
--

CREATE TABLE `jobapplyanswer` (
  `jobanswerId` int(11) NOT NULL,
  `jobId` int(20) NOT NULL,
  `jobapplyId` int(20) NOT NULL,
  `answers` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobapplyanswer`
--

INSERT INTO `jobapplyanswer` (`jobanswerId`, `jobId`, `jobapplyId`, `answers`) VALUES
(10, 5, 10, '4=>dfg&%TCL%&8=>dfg&%TCL%&9=>dfg&%TCL%&12=>dfg&%TCL%&14=>12&%TCL%&15=>dgdf&%TCL%&18=>dfgdfgfdg'),
(11, 6, 11, '3=>option-2&%TCL%&4=>123456');

-- --------------------------------------------------------

--
-- Table structure for table `jobexperience`
--

CREATE TABLE `jobexperience` (
  `jobExperienceId` int(11) NOT NULL,
  `degisnation` varchar(100) DEFAULT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `address` mediumtext,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `fkemployeeId` int(11) DEFAULT NULL,
  `fkOrganizationType` int(11) DEFAULT NULL,
  `majorResponsibilities` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `keyAchivement` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `supervisorName` varchar(200) DEFAULT NULL,
  `reservationContactingEmployer` varchar(2) DEFAULT NULL,
  `employmentType` varchar(45) DEFAULT NULL,
  `employmentTypeText` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobexperience`
--

INSERT INTO `jobexperience` (`jobExperienceId`, `degisnation`, `organization`, `address`, `startDate`, `endDate`, `fkemployeeId`, `fkOrganizationType`, `majorResponsibilities`, `keyAchivement`, `supervisorName`, `reservationContactingEmployer`, `employmentType`, `employmentTypeText`) VALUES
(1, 'mn', 'rr', 'rg', '2019-10-21', '2019-10-31', 1, 2, 'frh', 'rfgb', 'forhad uddin', 'Y', 'Full-Time', NULL),
(2, 'rg', 'r', 'rgy', '2019-10-02', '2019-10-14', 1, 2, 'rtg', 'rgt', 'forhad uddin', 'Y', 'Full-Time', NULL),
(3, 'Register', 'weg', '4y64u5\r\nt5ui\r\neuye4iu6', '2019-10-20', '2019-10-29', 1, 3, 'rhyrht', 'rgrg', 'forhad uddin', 'Y', 'Full-Time', NULL),
(4, 'mn', 'weg', 'rgt', '2019-10-31', '2019-11-02', 1, 1, 'grf', 'fhb', 'forhad uddin', 'Y', 'Full-Time', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobquestion`
--

CREATE TABLE `jobquestion` (
  `id` int(11) NOT NULL,
  `jobId` int(10) NOT NULL,
  `questionType` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `setNumber` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customQuestion` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobquestion`
--

INSERT INTO `jobquestion` (`id`, `jobId`, `questionType`, `setNumber`, `customQuestion`) VALUES
(5, 5, 'SET', '1', NULL),
(6, 6, 'SET', '5', NULL),
(7, 7, 'CUSTOM', NULL, '3,8,10,12,15,16,18'),
(8, 8, 'SET', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobsamplequestion`
--

CREATE TABLE `jobsamplequestion` (
  `sampleQuestionId` int(11) NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question_set` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question` mediumtext COLLATE utf8_unicode_ci,
  `answer` mediumtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobsamplequestion`
--

INSERT INTO `jobsamplequestion` (`sampleQuestionId`, `type`, `question_set`, `question`, `answer`) VALUES
(3, 'MCQ', NULL, 'MCQ', 'option-1,option-2'),
(4, 'Long', NULL, 'asfsdfsdf', 'N/A'),
(7, 'Short', NULL, 'asdsadsa', 'N/A'),
(8, 'Short', NULL, 'asfasddfasf', 'N/A'),
(9, 'Short', NULL, 'asdfasfasfasf', 'N/A'),
(10, 'Short', NULL, 'rfewdasfasd', 'N/A'),
(11, 'Short', NULL, '356354635463543', 'N/A'),
(12, 'Long', NULL, 'sdgdfgdfhfdgdf', 'N/A'),
(13, 'Long', NULL, 'asfsfsdfgfdgdfg', 'N/A'),
(14, 'MCQ', NULL, 'lllll', '1,12'),
(15, 'Short', NULL, '999999999999', 'N/A'),
(16, 'MCQ', NULL, '12', '12,13'),
(17, 'Short', NULL, 'asdasdsa', 'N/A'),
(18, 'Long', NULL, 'sssssssssss', 'N/A'),
(19, 'Short', NULL, 'ewrewtet', 'N/A'),
(20, 'Short', NULL, 'serfedsf', 'N/A'),
(21, 'MCQ', NULL, 'sdfsd', 'option-1,option-2'),
(22, 'Long', NULL, '852222', 'N/A'),
(23, 'Short', NULL, 'ssssssssssssssssssssssss', 'N/A'),
(24, 'Short', NULL, 'sdsdsd', 'N/A'),
(25, 'MCQ', NULL, '882', '8,88');

-- --------------------------------------------------------

--
-- Table structure for table `languagehead`
--

CREATE TABLE `languagehead` (
  `id` int(11) NOT NULL,
  `languagename` varchar(56) NOT NULL,
  `status` tinyint(3) DEFAULT NULL COMMENT '0=Inactive ,1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languagehead`
--

INSERT INTO `languagehead` (`id`, `languagename`, `status`) VALUES
(1, 'Bangla', 1),
(2, 'English', 1),
(4, 'French', 0);

-- --------------------------------------------------------

--
-- Table structure for table `languageskill`
--

CREATE TABLE `languageskill` (
  `id` int(11) NOT NULL,
  `languageSkillName` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languageskill`
--

INSERT INTO `languageskill` (`id`, `languageSkillName`) VALUES
(1, 'Reading'),
(2, 'Writing'),
(3, 'Speaking'),
(7, 'Listening ');

-- --------------------------------------------------------

--
-- Table structure for table `mail_tamplate`
--

CREATE TABLE `mail_tamplate` (
  `tamplateId` int(11) NOT NULL,
  `tamplateName` varchar(100) DEFAULT NULL,
  `testDetails` text,
  `testDate` date DEFAULT NULL,
  `testAddress` text,
  `tamplateFooterAndSign` longtext,
  `status` tinyint(3) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail_tamplate`
--

INSERT INTO `mail_tamplate` (`tamplateId`, `tamplateName`, `testDetails`, `testDate`, `testAddress`, `tamplateFooterAndSign`, `status`, `subject`) VALUES
(1, 'Interview Card', NULL, NULL, NULL, 'Sebastian Rozario\nAssistant Executive Director (Finance and Admin.)\nCaritas Bangladesh\n\nCC: ED/ AED (P)\n: Convener, Selection Committee\n: Manager (HR) - Please follow up.', 1, NULL),
(2, 'Not Selected', NULL, NULL, NULL, NULL, 1, NULL),
(3, 'Panel Listed', NULL, NULL, NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `membership_social_network`
--

CREATE TABLE `membership_social_network` (
  `membershipId` int(11) NOT NULL,
  `networkName` varchar(255) DEFAULT NULL,
  `duration` varchar(10) DEFAULT NULL,
  `membershipType` varchar(255) DEFAULT NULL,
  `fkemployeeId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership_social_network`
--

INSERT INTO `membership_social_network` (`membershipId`, `networkName`, `duration`, `membershipType`, `fkemployeeId`) VALUES
(1, 'utltu;lut', '1 year', 'ykrylkyl', 1),
(2, 'iugi', '2year', 'gltgu', 1),
(3, '98yho', '2year', 'tltul;', 1),
(4, 'ujt', '5e', 'ute', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

CREATE TABLE `nationality` (
  `nationalityId` int(11) NOT NULL,
  `nationalityName` varchar(50) DEFAULT NULL,
  `countryName` varchar(50) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL COMMENT '0=Inactive ,1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nationality`
--

INSERT INTO `nationality` (`nationalityId`, `nationalityName`, `countryName`, `status`) VALUES
(1, 'Bangladeshi', 'Bangladesh', 1),
(2, 'Others', 'Others', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organizationtype`
--

CREATE TABLE `organizationtype` (
  `organizationTypeId` int(11) NOT NULL,
  `organizationTypeName` varchar(50) NOT NULL,
  `status` tinyint(3) DEFAULT NULL COMMENT '0=Inactive ,1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizationtype`
--

INSERT INTO `organizationtype` (`organizationTypeId`, `organizationTypeName`, `status`) VALUES
(1, 'NGO/Development Organization', 1),
(2, 'Government', 1),
(3, 'Private Organization', 1),
(4, 'Others', 1);

-- --------------------------------------------------------

--
-- Table structure for table `otherskillsinformation`
--

CREATE TABLE `otherskillsinformation` (
  `id` int(11) NOT NULL,
  `skillName` varchar(255) DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '0=Inactive ,1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otherskillsinformation`
--

INSERT INTO `otherskillsinformation` (`id`, `skillName`, `status`) VALUES
(1, 'Illusator', 1),
(2, 'Web developer', 1),
(3, 'Graphics', 1),
(4, 'Photoshop', 1),
(5, 'Playing Chess', 1),
(6, 'Keramboard', 1),
(7, 'Debate', 1),
(8, 'play', 1),
(9, 'aaA', 1),
(10, 'SDSD', 1),
(11, 'E-Views Software', 1);

-- --------------------------------------------------------

--
-- Table structure for table `previous_work_in_caritasbd`
--

CREATE TABLE `previous_work_in_caritasbd` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `fkemployeeId` int(11) DEFAULT NULL,
  `currentlyRunning` tinyint(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `previous_work_in_caritasbd`
--

INSERT INTO `previous_work_in_caritasbd` (`id`, `designation`, `startDate`, `endDate`, `fkemployeeId`, `currentlyRunning`) VALUES
(1, 'tfrh', '2019-10-21', '2019-10-31', 1, 0),
(2, 'mn', '2018-01-01', '2019-10-01', 1, 0),
(3, 'ykhmhg', '2019-10-28', '2019-10-30', 1, 0),
(4, '547y', '2019-10-08', '2019-10-23', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `professionalqualification`
--

CREATE TABLE `professionalqualification` (
  `professionalQualificationId` int(11) NOT NULL,
  `certificateName` varchar(100) DEFAULT NULL,
  `institutionName` varchar(255) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `result` varchar(10) DEFAULT NULL,
  `fkemployeeId` int(11) NOT NULL,
  `resultSystem` tinyint(2) DEFAULT NULL COMMENT '1=grade,2=division,3=class',
  `resultSystemName` varchar(255) DEFAULT NULL,
  `hour` int(4) DEFAULT NULL,
  `day` int(4) DEFAULT NULL,
  `week` int(4) DEFAULT NULL,
  `month` int(4) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `grade` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professionalqualification`
--

INSERT INTO `professionalqualification` (`professionalQualificationId`, `certificateName`, `institutionName`, `startDate`, `endDate`, `status`, `result`, `fkemployeeId`, `resultSystem`, `resultSystemName`, `hour`, `day`, `week`, `month`, `year`, `grade`) VALUES
(1, 'fgf', 'bangla', '2019-10-16', '2019-10-25', 2, '5', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'rg', 'ygkyrfkl', '2019-10-01', '2019-10-01', 2, '5', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'r', 'rlouti', '2019-10-16', '2019-10-24', 2, '5', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questionset`
--

CREATE TABLE `questionset` (
  `questionSetId` int(11) NOT NULL,
  `setName` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `setQuestion` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questionset`
--

INSERT INTO `questionset` (`questionSetId`, `setName`, `setQuestion`) VALUES
(1, 'test sample', '4,8,9,12,14,15,18'),
(2, 'Test-2', '7,9,12,17,19'),
(4, '4', '1,3,6'),
(5, '5', '3,4');

-- --------------------------------------------------------

--
-- Table structure for table `referee`
--

CREATE TABLE `referee` (
  `refereeId` int(11) NOT NULL,
  `firstName` varchar(90) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `presentposition` varchar(100) DEFAULT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `relation` varchar(45) DEFAULT NULL,
  `fkemployeeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referee`
--

INSERT INTO `referee` (`refereeId`, `firstName`, `lastName`, `presentposition`, `organization`, `email`, `phone`, `relation`, `fkemployeeId`) VALUES
(1, 'mmmm', NULL, 'director', 'njmgmkg', 'yyyyyy@gmail', '9090909090', 'sir', 1),
(2, 'mmmm', NULL, 'director', 'weg', 'hg@gmail.com', '+987654321', 'h', 1),
(3, 'rt6l', NULL, 'ltl;', 'weg', 'hg@gmail.com', '+987654321', 'h', 1),
(4, 'mmmm', NULL, 'director', 'weg', 'hg@gmail.com', '+987654321', 'h', 1);

-- --------------------------------------------------------

--
-- Table structure for table `relativeincb`
--

CREATE TABLE `relativeincb` (
  `relativeId` int(11) NOT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(128) NOT NULL,
  `degisnation` varchar(45) DEFAULT NULL,
  `relation` varchar(100) DEFAULT NULL,
  `fkemployeeId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relativeincb`
--

INSERT INTO `relativeincb` (`relativeId`, `firstName`, `lastName`, `degisnation`, `relation`, `fkemployeeId`) VALUES
(1, 'h,k', 'hk', 'Register', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE `religion` (
  `religionId` int(11) NOT NULL,
  `religionName` varchar(25) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL COMMENT '0=Inactive ,1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`religionId`, `religionName`, `status`) VALUES
(1, 'Islam', 1),
(2, 'Christianity', 1),
(3, 'Hinduism', 1),
(4, 'Buddhism', 1),
(5, 'Others', 1);

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_condition`
--

CREATE TABLE `terms_and_condition` (
  `id` int(11) NOT NULL,
  `page_Header` varchar(500) DEFAULT NULL,
  `page_content` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms_and_condition`
--

INSERT INTO `terms_and_condition` (`id`, `page_Header`, `page_content`) VALUES
(1, 'Terms and Conditons', '<p style=\"text-align:center\"><big><span style=\"color:#3498db\"><strong><u>&nbsp;Terms and Conditions</u></strong></span></big></p>\r\n\r\n<ol style=\"list-style-type:lower-roman\">\r\n	<li><span style=\"font-size:12pt\"><span style=\"color:#000000\"><span style=\"font-size:12.0pt\">I have carefully read and understood the Caritas Code of Ethics and Code of Conduct for Staff, code of conduct as specified in the Sagurding Policy, Data Protection Policy, Child Protection Policy, Information Disclosure Policy, Anti-corruption Policy, Policy on Prevention of Money Laundering and Combating Terrorist Financing, Equal Employment Opportunity Policy &nbsp;and other policies of Caritas and shall comply with the above and other policies as adopted/amended from time to time.&nbsp; </span></span></span><br />\r\n	&nbsp;</li>\r\n</ol>');

-- --------------------------------------------------------

--
-- Table structure for table `traning`
--

CREATE TABLE `traning` (
  `traningId` int(11) NOT NULL,
  `trainingName` varchar(100) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `vanue` varchar(255) DEFAULT NULL,
  `countryId` int(11) DEFAULT NULL,
  `fkemployeeId` int(11) NOT NULL,
  `status` tinyint(3) DEFAULT NULL COMMENT '0=Inactive ,1=Active',
  `hour` int(4) DEFAULT NULL,
  `day` int(4) DEFAULT NULL,
  `week` int(4) DEFAULT NULL,
  `month` int(4) DEFAULT NULL,
  `year` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traning`
--

INSERT INTO `traning` (`traningId`, `trainingName`, `startDate`, `endDate`, `vanue`, `countryId`, `fkemployeeId`, `status`, `hour`, `day`, `week`, `month`, `year`) VALUES
(1, 'htyj', '2019-10-01', '2019-10-04', 'yw5', 1, 1, 2, NULL, NULL, NULL, NULL, NULL),
(2, 'htyj', '2019-10-11', '2019-10-14', 'yw5', 1, 1, 2, 1, 1, NULL, NULL, NULL),
(3, 'tt', '2019-10-13', '2019-10-17', 'yw5', 1, 1, 2, NULL, NULL, NULL, NULL, NULL),
(4, 'wrjkyj', '2019-10-07', '2019-10-31', 'rt', NULL, 1, 2, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_of_employment`
--

CREATE TABLE `type_of_employment` (
  `id` int(11) NOT NULL,
  `employmentTypeName` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_of_employment`
--

INSERT INTO `type_of_employment` (`id`, `employmentTypeName`, `status`) VALUES
(1, 'Full-Time', 1),
(2, 'Volunteer', 1),
(3, 'Contractual', 1),
(4, 'Temporary', 1),
(5, 'Part-time', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `fkuserTypeId` varchar(5) NOT NULL,
  `register` varchar(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remember_token` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `name`, `email`, `password`, `status`, `fkuserTypeId`, `register`, `created_at`, `remember_token`, `token`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$9bvWIarfmTXlMYnLUNyB/.QZfF19xXIYHEw9fEXA9HVHlNcKPlLn2', NULL, 'admin', 'Y', '2019-10-17 12:56:53', 'yXscXqxEcM3rf6rt7jBmQmGYchCSmsEd6gEsDVDyTIYN3Pi22IKMDRvqHY0l', NULL),
(6, 'Sakib Rahman', 'sakibtcl@gmail.com', '$2y$10$z/KBBYCiOUUNgtHhrW.qj.G6oiu75VV5i1atAOwA6ttwOOctZZjd6', NULL, 'user', 'Y', '2019-10-17 05:47:06', 'h1bRN6fTnsPqHXRX1NaIPiW24gpCju5PItCgZQydAWtcqLKDHT5Z0Opc7I7q', NULL),
(65, 'shraboni Jade', 'yyyyyy@gmail.com', '$2y$10$H7p/qRqJexa/5xju3TFIruCfQRKY/hig/NnAgwhOaBqjy0TR60HCG', NULL, 'user', 'Y', '2019-10-17 11:16:43', 'no0FCpBjMcOCUefUTwShWhFoji1k0wzKscMd78BVhv69qkn9y3Z5Lhv1aT3v', 'sPDPfKunNZPj6HIXJt8lZix65Sma9TFlIkXvQZROd3NmpcBwASJHgtwvNPji0DxV'),
(66, 'adam', 'hg@gmail.com', '$2y$10$H7p/qRqJexa/5xju3TFIruCfQRKY/hig/NnAgwhOaBqjy0TR60HCG', NULL, 'admin', 'Y', '2019-10-11 07:09:22', 'wYX0RQpUduJUQKkAlYw4IeZoKDdV051i3Ulk8ByPT9b1JM0qhR6NpF5Uu1BZ', NULL),
(67, 'i', 'h2g@gmail.com', '$2y$10$jE8DoENQ9veFIBOj0Mi9juKnXVGWuPIF6Lxzr1LG1ASeb4BQY2KqW', NULL, 'cbEmp', 'Y', '2019-10-11 06:13:52', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `userTypeId` varchar(5) NOT NULL,
  `userTypeName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`userTypeId`, `userTypeName`) VALUES
('admin', 'Admin'),
('cbEmp', 'Caritasbd Employee'),
('user', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `zoneId` int(11) NOT NULL,
  `zoneName` varchar(50) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL COMMENT '0=Inactive ,1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`zoneId`, `zoneName`, `status`) VALUES
(1, 'mirpurfdsfgsdfgrgdfhfghfgjhkuykhujkhjljkl', 0),
(2, 'baridhara', 0),
(3, 'Dhanmondi', 0),
(4, 'Dhaka Region', 1),
(5, 'Khulna Region', 1),
(6, 'Rajshahi Region', 1),
(7, 'Barishal Region', 1),
(8, 'Sylhet Region', 1),
(9, 'Dinajpur Region', 1),
(10, 'Central Office', 1),
(11, 'Mymensingh', 1),
(12, 'Chattogram', 1),
(13, 'dsfdsfdsfdsfsdf', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aggrement`
--
ALTER TABLE `aggrement`
  ADD PRIMARY KEY (`aggrementId`),
  ADD KEY `fk_aggrement_aggrementQus1_idx` (`fkaggrementQusId`),
  ADD KEY `fk_aggrement_user1_idx` (`fkuserId`);

--
-- Indexes for table `agreementqus`
--
ALTER TABLE `agreementqus`
  ADD PRIMARY KEY (`agreementQusId`),
  ADD UNIQUE KEY `serial_unique` (`agreementQusId`);

--
-- Indexes for table `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`boardId`);

--
-- Indexes for table `computerskill`
--
ALTER TABLE `computerskill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`countryId`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`degreeId`),
  ADD KEY `fk_educationLevel` (`educationLevelId`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designationId`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`educationId`),
  ADD KEY `fk_education_degreeId1_idx` (`fkdegreeId`),
  ADD KEY `fk_education_country1_idx` (`fkcountryId`),
  ADD KEY `fk_education_employee1_idx` (`fkemployeeId`),
  ADD KEY `fk_major` (`fkMajorId`),
  ADD KEY `fk_board` (`fkboardId`);

--
-- Indexes for table `educationlevel`
--
ALTER TABLE `educationlevel`
  ADD PRIMARY KEY (`educationLevelId`);

--
-- Indexes for table `educationmajor`
--
ALTER TABLE `educationmajor`
  ADD PRIMARY KEY (`educationMajorId`),
  ADD KEY `fk_degree` (`fkDegreeId`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `empcomputerskill`
--
ALTER TABLE `empcomputerskill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeId`),
  ADD KEY `fk_employee_religion1_idx` (`fkreligionId`),
  ADD KEY `fk_employee_nationality1_idx` (`fknationalityId`),
  ADD KEY `fk_employee_zone1_idx` (`fkzoneId`),
  ADD KEY `fk_employee_user1_idx` (`fkuserId`),
  ADD KEY `fk_ethnicity` (`ethnicityId`) USING BTREE;

--
-- Indexes for table `employmenttype`
--
ALTER TABLE `employmenttype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_language`
--
ALTER TABLE `emp_language`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkemployeeId_languageskill` (`fkemployeeId`),
  ADD KEY `fklangguage_skill` (`fklanguageSkill`);

--
-- Indexes for table `emp_otherskill_achievement`
--
ALTER TABLE `emp_otherskill_achievement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_other_info`
--
ALTER TABLE `emp_other_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_ques_obj`
--
ALTER TABLE `emp_ques_obj`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_emp_Id` (`empId`);

--
-- Indexes for table `emp_ques_objective_and_info`
--
ALTER TABLE `emp_ques_objective_and_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_ques_objective_and_info_ans`
--
ALTER TABLE `emp_ques_objective_and_info_ans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkqusId` (`fkqusId`,`fkemployeeId`),
  ADD KEY `fk_qus_employee_id` (`fkemployeeId`);

--
-- Indexes for table `ethnicity`
--
ALTER TABLE `ethnicity`
  ADD PRIMARY KEY (`ethnicityId`);

--
-- Indexes for table `hr`
--
ALTER TABLE `hr`
  ADD PRIMARY KEY (`hrId`),
  ADD KEY `fk_HR_user1_idx` (`fkuserId`),
  ADD KEY `fk_HR_zone1_idx` (`fkzoneId`),
  ADD KEY `fk_hr_degisnation1` (`fkdesignationId`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobId`),
  ADD KEY `fk_job_user1_idx` (`postBy`),
  ADD KEY `fk_job_user2_idx` (`createBy`),
  ADD KEY `fk_job_zone1_idx` (`fkzoneId`),
  ADD KEY `fk_job_user3_idx` (`updateBy`);

--
-- Indexes for table `jobapply`
--
ALTER TABLE `jobapply`
  ADD PRIMARY KEY (`jobapply`),
  ADD KEY `fk_jobApply_job1_idx` (`fkjobId`),
  ADD KEY `fk_jobApply_employee1_idx` (`fkemployeeId`),
  ADD KEY `fk_jobApply_user1_idx` (`statuschangeBy`);

--
-- Indexes for table `jobapplyanswer`
--
ALTER TABLE `jobapplyanswer`
  ADD PRIMARY KEY (`jobanswerId`),
  ADD KEY `jobId` (`jobId`),
  ADD KEY `jobapplyId` (`jobapplyId`);

--
-- Indexes for table `jobexperience`
--
ALTER TABLE `jobexperience`
  ADD PRIMARY KEY (`jobExperienceId`),
  ADD KEY `fkemployeeId` (`fkemployeeId`);

--
-- Indexes for table `jobquestion`
--
ALTER TABLE `jobquestion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobId` (`jobId`);

--
-- Indexes for table `jobsamplequestion`
--
ALTER TABLE `jobsamplequestion`
  ADD PRIMARY KEY (`sampleQuestionId`);

--
-- Indexes for table `languagehead`
--
ALTER TABLE `languagehead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languageskill`
--
ALTER TABLE `languageskill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_tamplate`
--
ALTER TABLE `mail_tamplate`
  ADD PRIMARY KEY (`tamplateId`);

--
-- Indexes for table `membership_social_network`
--
ALTER TABLE `membership_social_network`
  ADD PRIMARY KEY (`membershipId`);

--
-- Indexes for table `nationality`
--
ALTER TABLE `nationality`
  ADD PRIMARY KEY (`nationalityId`),
  ADD UNIQUE KEY `nationalityName_UNIQUE` (`nationalityName`);

--
-- Indexes for table `organizationtype`
--
ALTER TABLE `organizationtype`
  ADD PRIMARY KEY (`organizationTypeId`);

--
-- Indexes for table `otherskillsinformation`
--
ALTER TABLE `otherskillsinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `previous_work_in_caritasbd`
--
ALTER TABLE `previous_work_in_caritasbd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professionalqualification`
--
ALTER TABLE `professionalqualification`
  ADD PRIMARY KEY (`professionalQualificationId`),
  ADD KEY `fk_professionalQualification_employee1_idx` (`fkemployeeId`);

--
-- Indexes for table `questionset`
--
ALTER TABLE `questionset`
  ADD PRIMARY KEY (`questionSetId`);

--
-- Indexes for table `referee`
--
ALTER TABLE `referee`
  ADD PRIMARY KEY (`refereeId`),
  ADD KEY `fk_referees_employee1_idx` (`fkemployeeId`);

--
-- Indexes for table `relativeincb`
--
ALTER TABLE `relativeincb`
  ADD PRIMARY KEY (`relativeId`),
  ADD KEY `fk_relativeInCB_employee1_idx` (`fkemployeeId`);

--
-- Indexes for table `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`religionId`);

--
-- Indexes for table `terms_and_condition`
--
ALTER TABLE `terms_and_condition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traning`
--
ALTER TABLE `traning`
  ADD PRIMARY KEY (`traningId`),
  ADD KEY `fk_traning_country1_idx` (`countryId`),
  ADD KEY `fk_traning_employee1_idx` (`fkemployeeId`);

--
-- Indexes for table `type_of_employment`
--
ALTER TABLE `type_of_employment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_user_userType_idx` (`fkuserTypeId`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`userTypeId`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`zoneId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aggrement`
--
ALTER TABLE `aggrement`
  MODIFY `aggrementId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agreementqus`
--
ALTER TABLE `agreementqus`
  MODIFY `agreementQusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `board`
--
ALTER TABLE `board`
  MODIFY `boardId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `computerskill`
--
ALTER TABLE `computerskill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `countryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
  MODIFY `degreeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `educationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `educationlevel`
--
ALTER TABLE `educationlevel`
  MODIFY `educationLevelId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `educationmajor`
--
ALTER TABLE `educationmajor`
  MODIFY `educationMajorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `empcomputerskill`
--
ALTER TABLE `empcomputerskill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employmenttype`
--
ALTER TABLE `employmenttype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_language`
--
ALTER TABLE `emp_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `emp_otherskill_achievement`
--
ALTER TABLE `emp_otherskill_achievement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_other_info`
--
ALTER TABLE `emp_other_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emp_ques_obj`
--
ALTER TABLE `emp_ques_obj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emp_ques_objective_and_info`
--
ALTER TABLE `emp_ques_objective_and_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emp_ques_objective_and_info_ans`
--
ALTER TABLE `emp_ques_objective_and_info_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ethnicity`
--
ALTER TABLE `ethnicity`
  MODIFY `ethnicityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hr`
--
ALTER TABLE `hr`
  MODIFY `hrId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobapply`
--
ALTER TABLE `jobapply`
  MODIFY `jobapply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jobapplyanswer`
--
ALTER TABLE `jobapplyanswer`
  MODIFY `jobanswerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jobexperience`
--
ALTER TABLE `jobexperience`
  MODIFY `jobExperienceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobquestion`
--
ALTER TABLE `jobquestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobsamplequestion`
--
ALTER TABLE `jobsamplequestion`
  MODIFY `sampleQuestionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `languagehead`
--
ALTER TABLE `languagehead`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `languageskill`
--
ALTER TABLE `languageskill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mail_tamplate`
--
ALTER TABLE `mail_tamplate`
  MODIFY `tamplateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `membership_social_network`
--
ALTER TABLE `membership_social_network`
  MODIFY `membershipId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nationality`
--
ALTER TABLE `nationality`
  MODIFY `nationalityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `organizationtype`
--
ALTER TABLE `organizationtype`
  MODIFY `organizationTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `otherskillsinformation`
--
ALTER TABLE `otherskillsinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `previous_work_in_caritasbd`
--
ALTER TABLE `previous_work_in_caritasbd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `professionalqualification`
--
ALTER TABLE `professionalqualification`
  MODIFY `professionalQualificationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questionset`
--
ALTER TABLE `questionset`
  MODIFY `questionSetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `referee`
--
ALTER TABLE `referee`
  MODIFY `refereeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `relativeincb`
--
ALTER TABLE `relativeincb`
  MODIFY `relativeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
  MODIFY `religionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `terms_and_condition`
--
ALTER TABLE `terms_and_condition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `traning`
--
ALTER TABLE `traning`
  MODIFY `traningId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type_of_employment`
--
ALTER TABLE `type_of_employment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `zoneId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aggrement`
--
ALTER TABLE `aggrement`
  ADD CONSTRAINT `fk_aggrement_aggrementQus1` FOREIGN KEY (`fkaggrementQusId`) REFERENCES `agreementqus` (`agreementQusId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_aggrement_user1` FOREIGN KEY (`fkuserId`) REFERENCES `user` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `degree`
--
ALTER TABLE `degree`
  ADD CONSTRAINT `fk_education_level_id` FOREIGN KEY (`educationLevelId`) REFERENCES `educationlevel` (`educationLevelId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `fk_education_board` FOREIGN KEY (`fkboardId`) REFERENCES `board` (`boardId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_education_country1` FOREIGN KEY (`fkcountryId`) REFERENCES `country` (`countryId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_education_degreeId1` FOREIGN KEY (`fkdegreeId`) REFERENCES `degree` (`degreeId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_education_employee1` FOREIGN KEY (`fkemployeeId`) REFERENCES `employee` (`employeeId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_education_major` FOREIGN KEY (`fkMajorId`) REFERENCES `educationmajor` (`educationMajorId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `educationmajor`
--
ALTER TABLE `educationmajor`
  ADD CONSTRAINT `fk_degree_id` FOREIGN KEY (`fkDegreeId`) REFERENCES `degree` (`degreeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk_employee_ethincity` FOREIGN KEY (`ethnicityId`) REFERENCES `ethnicity` (`ethnicityId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_employee_nationality1` FOREIGN KEY (`fknationalityId`) REFERENCES `nationality` (`nationalityId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_employee_religion1` FOREIGN KEY (`fkreligionId`) REFERENCES `religion` (`religionId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_employee_user1` FOREIGN KEY (`fkuserId`) REFERENCES `user` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_employee_zone1` FOREIGN KEY (`fkzoneId`) REFERENCES `zone` (`zoneId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `emp_language`
--
ALTER TABLE `emp_language`
  ADD CONSTRAINT `fkemployeeId_languageskill` FOREIGN KEY (`fkemployeeId`) REFERENCES `employee` (`employeeId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fklangguage_skill` FOREIGN KEY (`fklanguageSkill`) REFERENCES `languageskill` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `emp_ques_obj`
--
ALTER TABLE `emp_ques_obj`
  ADD CONSTRAINT `fkEmpId` FOREIGN KEY (`empId`) REFERENCES `employee` (`employeeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `emp_ques_objective_and_info_ans`
--
ALTER TABLE `emp_ques_objective_and_info_ans`
  ADD CONSTRAINT `fk_qus_ans` FOREIGN KEY (`fkqusId`) REFERENCES `emp_ques_objective_and_info` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_qus_employee_id` FOREIGN KEY (`fkemployeeId`) REFERENCES `employee` (`employeeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hr`
--
ALTER TABLE `hr`
  ADD CONSTRAINT `fk_hr_degisnation1` FOREIGN KEY (`fkdesignationId`) REFERENCES `designation` (`designationId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_hr_user1` FOREIGN KEY (`fkuserId`) REFERENCES `user` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_hr_zone1` FOREIGN KEY (`fkzoneId`) REFERENCES `zone` (`zoneId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `fk_job_user1` FOREIGN KEY (`postBy`) REFERENCES `user` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_user2` FOREIGN KEY (`createBy`) REFERENCES `user` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_user3` FOREIGN KEY (`updateBy`) REFERENCES `user` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_zone1` FOREIGN KEY (`fkzoneId`) REFERENCES `zone` (`zoneId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `jobapply`
--
ALTER TABLE `jobapply`
  ADD CONSTRAINT `fk_jobApply_employee1` FOREIGN KEY (`fkemployeeId`) REFERENCES `employee` (`employeeId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_jobApply_job1` FOREIGN KEY (`fkjobId`) REFERENCES `job` (`jobId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_jobApply_user1` FOREIGN KEY (`statuschangeBy`) REFERENCES `user` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `jobapplyanswer`
--
ALTER TABLE `jobapplyanswer`
  ADD CONSTRAINT `fkJobApplyId` FOREIGN KEY (`jobapplyId`) REFERENCES `jobapply` (`jobapply`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkJobId` FOREIGN KEY (`jobId`) REFERENCES `job` (`jobId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `jobexperience`
--
ALTER TABLE `jobexperience`
  ADD CONSTRAINT `Fkuser` FOREIGN KEY (`fkemployeeId`) REFERENCES `employee` (`employeeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `jobquestion`
--
ALTER TABLE `jobquestion`
  ADD CONSTRAINT `jobquestion_ibfk_1` FOREIGN KEY (`jobId`) REFERENCES `job` (`jobId`);

--
-- Constraints for table `professionalqualification`
--
ALTER TABLE `professionalqualification`
  ADD CONSTRAINT `fk_professionalQualification_employee1` FOREIGN KEY (`fkemployeeId`) REFERENCES `employee` (`employeeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `referee`
--
ALTER TABLE `referee`
  ADD CONSTRAINT `fk_referees_employee1` FOREIGN KEY (`fkemployeeId`) REFERENCES `employee` (`employeeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `relativeincb`
--
ALTER TABLE `relativeincb`
  ADD CONSTRAINT `fk_relativeInCB_employee1` FOREIGN KEY (`fkemployeeId`) REFERENCES `employee` (`employeeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `traning`
--
ALTER TABLE `traning`
  ADD CONSTRAINT `fk_traning_country1` FOREIGN KEY (`countryId`) REFERENCES `country` (`countryId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_traning_employee1` FOREIGN KEY (`fkemployeeId`) REFERENCES `employee` (`employeeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_userType` FOREIGN KEY (`fkuserTypeId`) REFERENCES `usertype` (`userTypeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
