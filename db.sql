-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 10:50 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `correct` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`) VALUES
(1, 1, 'kunle', '1'),
(2, 1, 'Koal', '0'),
(3, 1, 'tola', '0'),
(4, 1, 'isi', '0'),
(5, 2, 'mr php', '1'),
(6, 2, 'miss php', '0'),
(7, 2, 'mrs', '0'),
(8, 2, 'okay', '0');

-- --------------------------------------------------------

--
-- Table structure for table `iscategories`
--

CREATE TABLE `iscategories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iscategories`
--

INSERT INTO `iscategories` (`id`, `category_name`) VALUES
(1, 'Do you think you know football?');

-- --------------------------------------------------------

--
-- Table structure for table `isquestions`
--

CREATE TABLE `isquestions` (
  `id` int(11) NOT NULL,
  `question_name` text NOT NULL,
  `answer1` varchar(250) NOT NULL,
  `answer2` varchar(250) NOT NULL,
  `answer3` varchar(250) NOT NULL,
  `answer4` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `category_id` int(11) NOT NULL,
  `q_status` varchar(50) DEFAULT NULL,
  `stagesid` varchar(11) NOT NULL,
  `qtypeid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isquestions`
--

INSERT INTO `isquestions` (`id`, `question_name`, `answer1`, `answer2`, `answer3`, `answer4`, `answer`, `category_id`, `q_status`, `stagesid`, `qtypeid`) VALUES
(1, 'Where did India play its 1st one day international match?', 'Lords', 'Headingley', 'Taunton', 'The Oval', '2', 1, 'Enebled', '5', '1'),
(2, 'Who was the 1st ODI captain for India?\r\n', 'Ajit Wadekar ', 'Bishen Singh Bedi', 'Nawab Pataudi', 'Vinoo Mankad ', '1', 1, 'Disabled', '5', '1'),
(3, 'Who has made the Fastest Test century in Test Cricket ?\r\n\r\n\r\n\r\n', 'Sachin Tendulkar', ' Sahid Afridi', ' Virender Sehwag', 'Vivian Richards', '4', 1, 'Disabled', '5', '1'),
(4, 'Which Bowler had the Best figures in a Test Match ?\r\n\r\n\r\n\r\n\r\n', 'Muttiah Muralitharan', 'Bob Massie', 'Jim Laker', 'George Lohmann', '3', 1, 'Disabled', '4', '1'),
(5, 'Which team has the Largest successful run chase record in ODIs ?\r\n\r\n\r\n\r\n\r\n', 'England', 'South Africa', 'Australia', 'India', '2', 1, 'Disabled', '4', '1'),
(6, 'What does HTML stand for?', 'Hyper Text Markup Language', 'Hyperlinks and Text Markup Language', 'Home Tool Markup Language', 'Highly Text Markup Language', '1', 1, 'Enabled', '3', '1'),
(7, 'Who is making the Web standards?', 'Microsoft', 'Google', 'The World Wide Web Consortium', 'Mozilla', '3', 1, 'Disabled', '2', '1'),
(8, 'What is the correct HTML for creating a hyperlink?\r\n\r\n	\r\n	\r\n	\r\n	', '&lt;a name=&quot;http://oninurudeen.net&quot;&gt;Smart Tutorials&lt;/a&gt;', '&lt;a&gt;http://oninurudeen.net&lt;/a&gt;', '&lt;a url=&quot;http://oninurudeen.net&quot;&gt;Smart Tutorials&lt;/a&gt;', '&lt;a href=&quot;http://oninurudeen.net&quot;&gt;Smart Tutorials&lt;/a&gt;', '4', 1, 'Disabled', '1', '1'),
(9, 'What is the HTML element to bold a text?', '&lt;b&gt;', '&lt;bold&gt;', '&lt;wide&gt;', '&lt;big&gt;', '1', 1, 'Disabled', '5', '2'),
(10, 'What is the HTML tag for a link?', '&lt;link&gt;', '&lt;ref&gt;', '&lt;a&gt;', '&lt;hper&gt;', '3', 1, 'Disabled', '5', '2'),
(11, 'What does CSS stand for?', 'Creative Style Sheets', 'Colorful Style Sheets', 'Computer Style Sheets', 'Cascading Style Sheets', '4', 1, 'Disabled', '5', '2'),
(12, 'Where in an HTML document is the correct place to refer to an external style sheet?\r\n\r\n	\r\n	\r\n	\r\n	', 'In the &lt;body&gt; section ', 'At the end of the document', 'At the top of the document', 'In the &lt;head&gt; section ', '4', 1, 'Disabled', '4', '2'),
(13, 'Which HTML tag is used to define an internal style sheet?\r\n\r\n	\r\n	\r\n	', '&lt;script&gt;', '&lt;css&gt;', '&lt;style&gt;', '&lt;link&gt;', '3', 1, 'Disabled', '4', '2'),
(14, 'Which is the correct CSS syntax?', 'body:color=black;', '{body;color:black;}', 'body {color: black;}', '{body:color=black;}', '3', 1, 'Disabled', '3', '2'),
(15, 'Which property is used to change the background color?\r\n\r\n	\r\n	\r\n	', 'background-color', 'color', 'bgcolor', 'bg-color', '1', 1, 'Disabled', '2', '2'),
(16, 'What does PHP stand for?', ' PHP: Hypertext Preprocessor', 'Personal Hypertext Processor', 'Personal Home Page', 'Private Home Page', '1', 1, 'Disabled', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `isscores`
--

CREATE TABLE `isscores` (
  `id` int(11) NOT NULL,
  `acct_name` varchar(50) NOT NULL,
  `acct_number` varchar(50) NOT NULL,
  `score_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `stage_id` int(11) NOT NULL,
  `qtype_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isscores`
--

INSERT INTO `isscores` (`id`, `acct_name`, `acct_number`, `score_id`, `cat_id`, `stage_id`, `qtype_id`) VALUES
(163, 'Mr What', '0900000111', 0, 1, 5, 1),
(164, 'Mr What', '0900000111', 0, 1, 4, 1),
(165, 'Mr What', '0900000111', 1, 1, 3, 2),
(166, 'Mr What', '0900000111', 0, 1, 2, 1),
(167, 'Mr What', '0900000111', 0, 1, 1, 1),
(168, 'Mr Kilode', '08021363015', 0, 1, 5, 1),
(169, 'Mr Kilode', '08021363015', 0, 1, 4, 1),
(170, 'Mr Knows', '08021363015', 0, 1, 5, 2),
(171, 'Mr Knows', '08021363015', 1, 1, 4, 2),
(172, 'Mr Knows', '08021363015', 1, 1, 3, 2),
(173, 'Mr Knows', '08021363015', 1, 1, 2, 2),
(174, 'Mr Knows', '08021363015', 1, 1, 1, 2),
(175, 'Mr Quiz', '08021363015', 0, 1, 5, 1),
(176, 'Mr Quiz', '08021363015', 0, 1, 4, 1),
(177, 'Mr Quiz', '08021363015', 0, 0, 0, 0),
(178, 'Mr Quiz', '08021363015', 1, 1, 3, 1),
(179, 'Kins', '08021363015', 0, 1, 5, 1),
(180, 'Kins', '08021363015', 0, 1, 4, 1),
(181, 'Pelumi', '08021363015', 0, 1, 5, 1),
(182, 'Mr Keys', '08021363015', 0, 1, 5, 1),
(183, 'Mr Keys', '08021363015', 0, 1, 4, 1),
(184, 'Mr Keys', '08021363015', 1, 1, 3, 2),
(185, 'Mr Keys', '08021363015', 1, 1, 2, 1),
(186, 'Mr Keys', '08021363015', 1, 1, 1, 1),
(187, 'Mr K', '08021363015', 0, 1, 5, 1),
(188, 'Mr K', '08021363015', 0, 1, 4, 1),
(189, 'Mr K', '08021363015', 0, 1, 3, 1),
(190, 'Mr K', '08021363015', 0, 1, 2, 1),
(191, 'Mr K', '08021363015', 0, 1, 1, 1),
(192, 'New', '08021363015', 0, 1, 5, 1),
(193, 'New', '08021363015', 0, 1, 4, 1),
(194, 'New', '08021363015', 0, 1, 3, 1),
(195, 'Kate', '08021363015', 0, 1, 5, 1),
(196, 'Kate', '08021363015', 1, 1, 4, 2),
(197, 'Kate', '08021363015', 1, 1, 2, 2),
(198, 'Kate', '08021363015', 0, 1, 3, 1),
(199, 'Volume', '08021363015', 0, 1, 5, 1),
(200, 'Volume', '08021363015', 0, 1, 4, 1),
(201, 'Volume', '08021363015', 1, 1, 3, 1),
(202, 'Volume', '08021363015', 1, 1, 2, 1),
(203, 'Volume', '08021363015', 1, 1, 1, 1),
(204, 'Oni Shola', '08021363015', 1, 1, 5, 2),
(205, 'Oni Shola', '08021363015', 1, 1, 4, 2),
(206, 'Mr Shola', '08021363015', 0, 1, 5, 1),
(207, 'Mr Shola', '08021363015', 1, 1, 4, 1),
(208, 'Mr Shola', '08021363015', 1, 1, 3, 1),
(209, 'Mr Shola', '08021363015', 1, 1, 2, 1),
(210, 'Mr Shola', '08021363015', 1, 1, 1, 1),
(211, 'Oni222', '', 1, 1, 5, 1),
(212, 'Oni222', '', 2, 1, 4, 1),
(213, 'Oni222', '', 1, 1, 3, 1),
(214, 'Oni222', '', 1, 1, 2, 1),
(215, 'Oni222', '', 1, 1, 1, 1),
(216, 'kollytin', '', 0, 1, 5, 2),
(217, 'kollytin', '', 1, 1, 4, 2),
(218, 'kollytin', '', 0, 1, 3, 2),
(219, 'kollytin', '', 0, 1, 2, 2),
(220, 'kollytin', '', 1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `isstage`
--

CREATE TABLE `isstage` (
  `qst_id` int(11) NOT NULL,
  `stage_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isstage`
--

INSERT INTO `isstage` (`qst_id`, `stage_name`) VALUES
(1, 'Final'),
(2, 'Semi Final'),
(3, 'Quater Final'),
(4, 'Second Round'),
(5, 'Preliminary');

-- --------------------------------------------------------

--
-- Table structure for table `istype`
--

CREATE TABLE `istype` (
  `id` int(11) NOT NULL,
  `qtype_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `istype`
--

INSERT INTO `istype` (`id`, `qtype_name`) VALUES
(1, 'Simple Questions'),
(2, 'Hard Questions');

-- --------------------------------------------------------

--
-- Table structure for table `isusers`
--

CREATE TABLE `isusers` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_phone` varchar(25) NOT NULL,
  `score` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `qstage_id` int(11) NOT NULL,
  `qtype_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isusers`
--

INSERT INTO `isusers` (`id`, `user_name`, `user_phone`, `score`, `category_id`, `qstage_id`, `qtype_id`) VALUES
(281, 'Mr What', '0900000111', 0, 1, 5, 1),
(282, 'Mr What', '0900000111', 0, 1, 5, 1),
(283, 'Mr What', '0900000111', 0, 1, 4, 1),
(284, 'Mr What', '0900000111', 0, 1, 3, 2),
(285, 'Mr What', '0900000111', 0, 1, 2, 1),
(286, 'Mr What', '0900000111', 0, 1, 1, 1),
(287, 'Mr Kilode', '08021363015', 0, 1, 5, 1),
(288, 'Mr Kilode', '08021363015', 0, 1, 5, 1),
(289, 'Mr Kilode', '08021363015', 0, 1, 4, 1),
(290, 'Mr Knows', '08021363015', 0, 1, 5, 2),
(292, 'Mr Knows', '08021363015', 0, 1, 4, 2),
(293, 'Mr Knows', '08021363015', 1, 1, 3, 2),
(294, 'Mr Knows', '08021363015', 1, 1, 2, 2),
(295, 'Mr Knows', '08021363015', 1, 1, 1, 2),
(296, 'Mr Quiz', '08021363015', 0, 1, 5, 1),
(297, 'Mr Quiz', '08021363015', 0, 1, 5, 1),
(298, 'Mr Quiz', '08021363015', 0, 1, 4, 1),
(299, 'Mr Quiz', '08021363015', 0, 0, 0, 0),
(300, 'Mr Quiz', '08021363015', 1, 1, 3, 1),
(301, 'Kins', '08021363015', 0, 1, 5, 1),
(302, 'Kins', '08021363015', 0, 1, 5, 1),
(303, 'Kins', '08021363015', 0, 1, 4, 1),
(304, 'Pelumi', '08021363015', 0, 1, 5, 1),
(305, 'Pelumi', '08021363015', 0, 1, 5, 1),
(306, 'Mr Keys', '08021363015', 0, 1, 5, 1),
(307, 'Mr Keys', '08021363015', 0, 1, 5, 1),
(308, 'Mr Keys', '08021363015', 0, 1, 4, 1),
(309, 'Mr Keys', '08021363015', 1, 1, 3, 2),
(310, 'Mr Keys', '08021363015', 1, 1, 2, 1),
(311, 'Mr Keys', '08021363015', 1, 1, 1, 1),
(312, 'Mr K', '08021363015', 0, 1, 5, 1),
(313, 'Mr K', '08021363015', 0, 1, 5, 1),
(314, 'Mr K', '08021363015', 0, 1, 4, 1),
(315, 'Mr K', '08021363015', 0, 1, 3, 1),
(316, 'Mr K', '08021363015', 0, 1, 2, 1),
(317, 'Mr K', '08021363015', 0, 1, 1, 1),
(318, 'New', '08021363015', 0, 1, 5, 1),
(319, 'New', '08021363015', 0, 1, 5, 1),
(320, 'New', '08021363015', 0, 1, 4, 1),
(321, 'New', '08021363015', 0, 1, 3, 1),
(322, 'Oni', '08021363015', 0, 1, 5, 1),
(323, 'Oni', '08021363015', 0, 1, 5, 1),
(324, 'Oni', '08021363015', 0, 1, 4, 1),
(325, 'Oni', '08021363015', 0, 1, 3, 2),
(326, 'Oni', '08021363015', 0, 1, 2, 1),
(327, 'Oni', '08021363015', 0, 1, 1, 1),
(328, 'Kate', '08021363015', 0, 1, 5, 1),
(329, 'Kate', '08021363015', 0, 1, 5, 1),
(330, 'Kate', '08021363015', 1, 1, 4, 2),
(331, 'Kate', '08021363015', 1, 1, 2, 2),
(332, 'Kate', '08021363015', 0, 1, 3, 1),
(333, 'Kate', '08021363015', 0, 1, 1, 1),
(334, 'Kolly', '08021363015', 0, 1, 5, 1),
(335, 'Kolly', '08021363015', 0, 1, 5, 1),
(336, 'Volume', '08021363015', 0, 1, 5, 1),
(337, 'Volume', '08021363015', 0, 1, 5, 1),
(338, 'Volume', '08021363015', 0, 1, 4, 1),
(339, 'Volume', '08021363015', 1, 1, 3, 1),
(340, 'Volume', '08021363015', 1, 1, 2, 1),
(341, 'Volume', '08021363015', 1, 1, 1, 1),
(343, 'Oni Shola', '08021363015', 1, 1, 5, 2),
(344, 'Oni Shola', '08021363015', 1, 1, 4, 2),
(345, 'Mr Shola', '08021363015', 0, 1, 5, 1),
(346, 'Mr Shola', '08021363015', 0, 1, 5, 1),
(347, 'Mr Shola', '08021363015', 1, 1, 4, 1),
(348, 'Mr Shola', '08021363015', 1, 1, 3, 1),
(349, 'Mr Shola', '08021363015', 1, 1, 2, 1),
(350, 'Mr Shola', '08021363015', 1, 1, 1, 1),
(351, 'Oni222', '08021363015', 0, 1, 5, 1),
(353, 'Oni222', '08021363015', 2, 1, 4, 1),
(354, 'Oni222', '08021363015', 1, 1, 3, 1),
(355, 'Oni222', '08021363015', 1, 1, 2, 1),
(356, 'Oni222', '08021363015', 1, 1, 1, 1),
(357, 'kollytin', '09083680305', 0, 1, 5, 2),
(358, 'kollytin', '09083680305', 0, 1, 5, 2),
(359, 'kollytin', '09083680305', 1, 1, 4, 2),
(360, 'kollytin', '09083680305', 0, 1, 3, 2),
(361, 'kollytin', '09083680305', 0, 1, 2, 2),
(362, 'kollytin', '09083680305', 1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_id`, `question`, `type`) VALUES
(1, 1, 'What is my name', 'mc'),
(2, 2, 'who is php', 'mc');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_takers`
--

CREATE TABLE `quiz_takers` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `percentage` varchar(24) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_takers`
--

INSERT INTO `quiz_takers` (`id`, `username`, `percentage`, `date_time`) VALUES
(1, 'Ardian Haxha', '50', '2014-04-22 14:23:29'),
(2, 'Mahatma Gandi', '25', '2014-04-22 14:32:14'),
(3, 'Besfort Gjakovari', '0', '2014-04-22 14:40:30'),
(4, 'Ardian Haxha', '50', '2014-04-22 15:00:27'),
(5, 'sad', '0', '2014-04-22 15:38:20'),
(6, 'adsad', '0', '2014-04-22 20:37:18'),
(7, 'Oni', '0', '2020-06-04 09:16:03'),
(8, 'firstname', '25', '2020-06-04 09:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `theadmin`
--

CREATE TABLE `theadmin` (
  `id` int(11) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `User_Password` varchar(50) NOT NULL,
  `User_Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theadmin`
--

INSERT INTO `theadmin` (`id`, `User_Name`, `User_Password`, `User_Email`) VALUES
(1, 'Oni Nurudeen Adekunle', '5f4dcc3b5aa765d61d8327deb882cf99', 'email@email.com'),
(2, 'seetv', '1a1dc91c907325c69271ddf0c944bc72', 'seetv@seetv.com');

-- --------------------------------------------------------

--
-- Table structure for table `thequestions`
--

CREATE TABLE `thequestions` (
  `qid` int(11) NOT NULL,
  `qno` int(11) NOT NULL,
  `question` text NOT NULL,
  `ans1` text NOT NULL,
  `ans2` text NOT NULL,
  `ans3` text NOT NULL,
  `ans4` text NOT NULL,
  `correct_answer` varchar(1) NOT NULL,
  `q_status` varchar(50) NOT NULL,
  `qcategory` int(11) NOT NULL,
  `qtype` int(11) NOT NULL,
  `qstages` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thequestions`
--

INSERT INTO `thequestions` (`qid`, `qno`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `correct_answer`, `q_status`, `qcategory`, `qtype`, `qstages`) VALUES
(9, 5, 'What is a correct way to add a comment in PHP?', '&lt;!--&hellip;--&gt;', '/*&hellip;*/', '*\\..\\*', '&lt;comment&gt;&hellip;&lt;/comment&gt;', 'b', 'Enabled', 1, 1, 5),
(8, 3, 'The PHP syntax is most similar to:', 'Perl and C', 'VBscript', 'Javascript', 'none of these', 'a', 'Enabled', 1, 1, 5),
(7, 2, 'How do you write \"Hello World\" in PHP?', 'echo \"Hello World\";', 'Document.Write(\"Hello World\");', '\"Hello World\";', 'none of these', 'a', 'Enabled', 1, 1, 5),
(6, 1, 'What does PHP stand for?', 'Personal Hypertext Processor\r\n', 'Private Home Page', 'Personal Home Page', 'PHP: Hypertext Preprocessor', 'd', 'Disabled', 1, 1, 4),
(5, 4, 'How do you get information from a form that is submitted using the &quot;get&quot; method?', '$_GET[];', 'Request.Form;', 'Request.QueryString;', 'none of these', 'a', 'Enabled', 1, 1, 4),
(10, 6, 'When using the POST method, variables are displayed in the URL:', 'True', 'False', 'Can\'t say', 'none of these', 'b', 'Enabled', 1, 1, 3),
(11, 7, ' Which of the following function is used to get the size of a file?', 'fopen()', 'fread()', 'fsize()', 'filesize()', 'd', 'Enabled', 1, 1, 2),
(12, 8, 'Which of the following is used to delete a cookie?', 'setcookie()', '$_COOKIE variable', 'isset() function', 'none of the above', 'a', 'Enabled', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `theusers`
--

CREATE TABLE `theusers` (
  `id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `played_on` varchar(225) NOT NULL,
  `score` int(11) NOT NULL DEFAULT '0',
  `stages` int(11) NOT NULL,
  `qname` varchar(100) NOT NULL,
  `qnumber` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theusers`
--

INSERT INTO `theusers` (`id`, `email`, `played_on`, `score`, `stages`, `qname`, `qnumber`) VALUES
(68, 'admin@gmail.com', '2017-07-31 05:01:43', 0, 0, '', ''),
(108, 'seetv@gmail.com', '2020-06-08 11:39:18', 0, 0, '', '08131180951'),
(109, 'oni@gmail.com', '2020-06-08 11:44:23', 0, 0, '', '08131180951'),
(118, 'oni@gmail.com', '2020-06-08 12:22:38', 0, 1, 'Oni', '09022291000'),
(117, 'hi@gmail.com', '2020-06-08 12:14:19', 0, 0, '', '08021289001'),
(116, 'oni@gmail.com', '2020-06-08 12:13:05', 0, 0, '', '08021289001'),
(112, 'onitwo@gmail.com', '2020-06-08 11:52:42', 0, 0, '', '08131180951'),
(113, 'onitwo@gmail.com', '2020-06-08 11:54:12', 0, 0, '', '08021363015'),
(114, 'taye@gmail.com', '2020-06-08 11:56:20', 0, 0, '', '08021363015'),
(115, 'kolly@gmail.com', '2020-06-08 12:01:49', 0, 0, '', '08021289001'),
(110, 'oni@gmail.com', '2020-06-08 14:58:35', 0, 0, '', '08021363015'),
(111, 'ibro@gmail.com', '2020-06-08 11:48:00', 0, 0, '', '08021363015'),
(107, 'hamzah@gmail.com', '2020-06-08 11:45:55', 0, 0, '', '08021363015'),
(119, 'help@gmail.com', '2020-06-08 15:08:25', 0, 0, '', '08021363015'),
(120, 'help2@gmail.com', '2020-06-08 15:24:45', 0, 0, '', '08021363015'),
(121, 'kk@gmail.com', '2020-06-08 15:47:07', 0, 0, '', '08021363015'),
(122, 'seun@gmail.com', '2020-06-08 15:49:05', 0, 0, '', '08021363015'),
(123, 'aims@gmail.com', '2020-06-08 15:54:20', 0, 0, '', '08021363015'),
(124, 'ok@gmail.com', '2020-06-08 21:37:16', 0, 0, '', '08021363015');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iscategories`
--
ALTER TABLE `iscategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isquestions`
--
ALTER TABLE `isquestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isscores`
--
ALTER TABLE `isscores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isstage`
--
ALTER TABLE `isstage`
  ADD PRIMARY KEY (`qst_id`);

--
-- Indexes for table `istype`
--
ALTER TABLE `istype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isusers`
--
ALTER TABLE `isusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_takers`
--
ALTER TABLE `quiz_takers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theadmin`
--
ALTER TABLE `theadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thequestions`
--
ALTER TABLE `thequestions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `theusers`
--
ALTER TABLE `theusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `iscategories`
--
ALTER TABLE `iscategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `isquestions`
--
ALTER TABLE `isquestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `isscores`
--
ALTER TABLE `isscores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;
--
-- AUTO_INCREMENT for table `isstage`
--
ALTER TABLE `isstage`
  MODIFY `qst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `istype`
--
ALTER TABLE `istype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `isusers`
--
ALTER TABLE `isusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=363;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `quiz_takers`
--
ALTER TABLE `quiz_takers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `theadmin`
--
ALTER TABLE `theadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `thequestions`
--
ALTER TABLE `thequestions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `theusers`
--
ALTER TABLE `theusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
