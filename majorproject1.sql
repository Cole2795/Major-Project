-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2017 at 10:21 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `majorproject1`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `msg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `name`, `msg`) VALUES
(22, 'nicole', 0),
(33, 'Peter', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) NOT NULL,
  `file_id` varchar(64) NOT NULL,
  `comment` text NOT NULL,
  `com_code` varchar(64) NOT NULL,
  `is_child` tinyint(1) NOT NULL,
  `par_code` varchar(64) NOT NULL,
  `author` varchar(64) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `created`, `modified`, `status`) VALUES
(1, 'haha', '2016-07-21', '2016-07-21 05:27:59', '2016-07-21 05:27:59', 1),
(2, 'Test Event', '2016-07-21', '2016-07-21 06:06:17', '2016-07-21 06:06:17', 1),
(8, 'Hello World!', '2016-07-21', '2016-07-21 06:06:51', '2016-07-21 06:06:51', 1),
(9, 'appointment', '2017-04-03', '2017-04-24 11:06:07', '2017-04-24 11:06:07', 0),
(10, 'hey', '2017-04-24', '2017-04-24 11:12:06', '2017-04-24 11:12:06', 0),
(11, 'car', '2017-04-24', '2017-04-24 11:12:48', '2017-04-24 11:12:48', 0),
(12, '', '0000-00-00', '2017-04-24 11:13:37', '2017-04-24 11:13:37', 0),
(13, 'het', '2017-04-12', '2017-04-24 11:13:46', '2017-04-24 11:13:46', 0),
(14, 'no', '2017-04-24', '2017-04-24 11:24:15', '2017-04-24 11:24:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(3) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `name`) VALUES
(1, 'sean'),
(2, 'ashley');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `text`) VALUES
(6, '1.jpg', 'DANCE '),
(7, 'download.jpg', 'Great game');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `playerID` int(3) NOT NULL,
  `playerName` varchar(23) DEFAULT NULL,
  `playerDOB` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`playerID`, `playerName`, `playerDOB`) VALUES
(267, 'Gary Rogers', '25-Sep-81'),
(268, 'Gabriel Sava', '15-Oct-86'),
(269, 'Paddy Barrett', '22-Jul-93'),
(270, 'Brian Gartland', '04-Nov-86'),
(271, 'Sean Hoare', '15-Mar-94'),
(272, 'Sean Gannon', '11-Jul-91'),
(273, 'Niclas Vemmelund', '02-Oct-92'),
(274, 'Shane Grimes', '09-Mar-87'),
(275, 'Dane Massey', '17-Apr-88'),
(276, 'Patrick McEleney', '26-Sep-92'),
(277, 'Chris Shields', '27-Dec-90'),
(278, 'Anton Reilly', '09-Oct-97'),
(279, 'John Mountney', '22-Feb-93'),
(280, 'Jamie McGrath', '30-Sep-96'),
(281, 'Stephen O\'Donnell', '15-Jan-86'),
(282, 'Robbie Benson', '07-May-92'),
(283, 'George Poynton', '28-Aug-97'),
(284, 'Ciaran O\'Connor', '04-Jul-96'),
(285, 'David McMillan', '14-Dec-88'),
(286, 'Ciaran Kilduff', '29-Sep-88'),
(287, 'Stephen Kenny', '30-Oct-71'),
(288, 'Nicole', '04-May-87'),
(289, 'Greg Murray', '30-Aug-93'),
(290, 'Daniel Byrne', '07-May-93'),
(291, 'Dominic Peppard', '17-Feb-00'),
(292, 'Derek Pender', '02-Oct-84'),
(293, 'Rob Cornwall', '16-Oct-94'),
(294, 'Ian Morris', '27-Feb-87'),
(295, 'Lorcan Fitzgerald', '03-Jan-89'),
(296, 'Warren O\'Hora', '19-Apr-99'),
(297, 'Stephen Best', '15-Mar-97'),
(298, 'Eoghan Morgan', '29-Jan-98'),
(299, 'Fuad Sule', '20-Jan-97'),
(300, 'Jamie Doyle', '30-Oct-93'),
(301, 'Eoin Wearen', '02-Oct-92'),
(302, 'Oscar Brennan', '17-Mar-96'),
(303, 'Dean Casey', '12-Dec-97'),
(304, 'Keith Ward', '12-Oct-90'),
(305, 'Paddy Kavanagh', '29-Dec-85'),
(306, 'Philip Gannon', '11-Oct-96'),
(307, 'Kaleem Simon', '08-Jul-96'),
(308, 'George Poynton', '28-Aug-97'),
(309, 'Dinny Corcoran', '13-Feb-89'),
(310, 'Ismahil Akinade', '11-Feb-94'),
(311, 'Philip Gorman', '07-Aug-81'),
(312, 'Gareth McDonagh', '27-Feb-96'),
(313, 'Lee Steacy', '18-Jan-93'),
(314, 'Peter Cherrie', '01-Oct-83'),
(315, 'Jason Marks', '02-May-89'),
(316, 'Derek Foran', '09-Sep-89'),
(317, 'Hugh Douglas', '22-Jun-93'),
(318, 'Alan Kehoe', '12-Apr-96'),
(319, 'Conor Kenna', '21-Aug-84'),
(320, 'Kevin Lynch', '21-Mar-92'),
(321, 'Tim Clancy', '08-Jun-84'),
(322, 'John Sullivan', '06-Jan-91'),
(323, 'Gary McCabe', '01-Aug-88'),
(324, 'Ryan Brennan', '11-Nov-91'),
(325, 'Dylan Connolly', '22-May-95'),
(326, 'Mark Salmon', '31-Oct-88'),
(327, 'Darragh Noone', '28-Apr-97'),
(328, 'Conor Earley', '28-May-93'),
(329, 'Karl Moore', '09-Nov-88'),
(330, 'Keith Buckley', '17-Jun-92'),
(331, 'Ger Pender', '22-May-94'),
(332, 'Aaron Greene', '02-Jan-90'),
(333, 'Anthony Flood', '31-Dec-84'),
(334, 'Mark McNulty', '13-Oct-80'),
(335, 'Alan Smith', '25-May-93'),
(336, 'Kenny Browne', '07-Aug-86'),
(337, 'John Kavanagh', '19-Jul-94'),
(338, 'Michael McSweeney', '17-Jun-88'),
(339, 'John Dunleavy', '03-Jul-91'),
(340, 'Alan Bennett', '04-Oct-81'),
(341, 'Kevin O\'Connor', '07-May-95'),
(342, 'Jimmy Keohane', '22-Jan-91'),
(343, 'Greg Bolger', '09-Sep-88'),
(344, 'Steven Beattie', '20-Aug-88'),
(345, 'Conor McCormack', '18-May-90'),
(346, 'Colin Healy', '14-Mar-80'),
(347, 'Gear?id Morrissey', '17-Nov-91'),
(348, 'Garry Buckley', '19-Aug-93'),
(349, 'Stephen Dooley', '19-Oct-91'),
(350, 'Achille Campion', '10-Mar-90'),
(351, 'Karl Sheppard', '14-Feb-91'),
(352, 'Connor Ellis', '12-May-97'),
(353, 'Sean Maguire', '01-May-94'),
(354, 'Eric Grimes', '04-Feb-95'),
(355, 'Gerard Doherty', '24-Aug-81'),
(356, 'Dean Jarvis', '01-Jun-92'),
(357, 'Aaron Barry', '24-Nov-92'),
(358, 'Shay Dunlop', '07-Apr-96'),
(359, 'Scott Whiteside', '16-Jun-97'),
(360, 'Ryan McBride', '15-Dec-89'),
(361, 'Maximilian Karner', '03-Jan-90'),
(362, 'Gareth McFadden', '04-Feb-97'),
(363, 'Aaron McEneff', '09-Jul-95'),
(364, 'Conor McDermott', '18-Sep-97'),
(365, 'Harry Monaghan', '24-Mar-93'),
(366, 'Mark Timlin', '07-Nov-94'),
(367, 'Lukas Schubert', '25-Jun-86'),
(368, 'Joshua Daniels', '22-Feb-96'),
(369, 'Dean Brown', '01-Jan-96'),
(370, 'Barry McNamee', '17-Feb-92'),
(371, 'Adrian Delap', '01-Nov-98'),
(372, 'Cathal Farren', '02-Jul-98'),
(373, 'Rory Holden', '23-Aug-97'),
(374, 'Nathan Boyle', '14-Apr-94'),
(375, 'Ronan Curtis', '29-Mar-96'),
(376, 'Rory Patterson', '16-Jul-84'),
(377, 'Patrick Dunican', '16-Apr-96'),
(378, 'Stephen McGuinness', '10-Mar-95'),
(379, 'Stephen Dunne', '12-Sep-95'),
(380, 'Conor Kane', '05-Nov-98'),
(381, 'Eoghan Dempsey', '15-Apr-97'),
(382, 'Colm Deasy', '04-Jan-97'),
(383, 'Ciar?n McGuigan', '08-Dec-89'),
(384, 'Kevin Farragher', '27-Jun-93'),
(385, 'Jamie Hollywood', '30-Jun-97'),
(386, 'Lloyd Buckley', '02-Sep-96'),
(387, 'Jake Hyland', '10-Aug-95'),
(388, 'Killian Brennan', '31-Jan-84'),
(389, 'Sean Brennan', '01-Jan-86'),
(390, 'Sean Thornton', '18-May-83'),
(391, 'Gavin Brennan', '23-Jan-88'),
(392, 'Luke Gallagher', '29-Jul-94'),
(393, 'Adam Wixted', '02-Apr-95'),
(394, 'Richie Purdy', '16-Jun-97'),
(395, 'Mark Doyle', '19-Nov-98'),
(396, 'Marc Griffin', '16-Jun-91'),
(397, 'Thomas Byrne', '26-Jan-99'),
(398, 'Gareth McCaffrey', '26-Jan-96'),
(399, 'Stephen Elliott', '06-Jan-84'),
(400, 'Harry Doherty', '29-Mar-96'),
(401, 'Ciaran Gallagher', '01-Apr-92'),
(402, 'Tommy Lee McCarron', '04-Jan-98'),
(403, 'Josh Mailey', '10-Jan-91'),
(404, 'Packie Mailey', '18-Apr-88'),
(405, 'Keith Cowan', '23-Aug-85'),
(406, 'Thomas McMonagle', '19-Oct-90'),
(407, 'Killian Cantwell', '24-May-95'),
(408, 'Ciaran Coll', '19-Aug-91'),
(409, 'Damien McNulty', '10-Feb-91'),
(410, 'Ryan McConnell', '03-Oct-95'),
(411, 'Adam Hanlon', '03-Jun-92'),
(412, 'Jonny Bonner', '09-Jul-91'),
(413, 'Ethan Boyle', '01-Apr-97'),
(414, 'Sean Houston', '29-Oct-89'),
(415, 'Gareth Harkin', '19-Dec-87'),
(416, 'Caolan McAleer', '19-Aug-93'),
(417, 'Michael Funston', '13-May-85'),
(418, 'Danny Morrissey', '13-Dec-93'),
(419, 'David Scully', '20-Jan-85'),
(420, 'BJ Banda', '01-Jun-98'),
(421, 'Ciaran O\'Connor', '04-Jul-96'),
(422, 'Ruairi Keating', '16-Jul-95'),
(423, 'Conor Winn', '26-Feb-92'),
(424, 'Ciaran Nugent', '27-Oct-91'),
(425, 'Marc Ludden', '28-Feb-90'),
(426, 'Colm Horgan', '02-Jul-94'),
(427, 'Stephen Folan', '14-Jan-92'),
(428, 'Lee Grace', '01-Dec-92'),
(429, 'Alex Byrne', '08-Mar-95'),
(430, 'Paul Sinnott', '24-Jul-86'),
(431, 'Conor  Melody', '15-Mar-97'),
(432, 'David Cawley', '19-Sep-91'),
(433, 'Gary Shanahan', '15-Feb-93'),
(434, 'Gavan Holohan', '15-Dec-91'),
(435, 'Kevin Devaney', '26-Sep-90'),
(436, 'Jesse Devers', '11-Jan-97'),
(437, 'Padraic  Cunningham', '13-Nov-96'),
(438, 'Ronan  Murray', '12-Sep-91'),
(439, 'Vinny Faherty', '13-Jun-87'),
(440, 'Freddy Hall', '08-Mar-85'),
(441, 'Brendan Clarke', '17-Sep-85'),
(442, 'Robbie Williams', '02-Oct-84'),
(443, 'David  O\'Connor', '24-Aug-91'),
(444, 'Shaun Kelly', '09-Mar-89'),
(445, 'Tony Whitehead', '22-Dec-94'),
(446, 'Paudie O\'Connor', '14-Jul-97'),
(447, 'Stephen Kenny', '14-May-93'),
(448, 'Paul O\'Conor', '10-Aug-87'),
(449, 'Chiedozie Ogbene', '01-May-97'),
(450, 'Shane Tracy', '14-Sep-88'),
(451, 'Ian Turner', '19-Apr-89'),
(452, 'Bastien Hery', '23-Mar-92'),
(453, 'Shane Duggan', '11-Mar-89'),
(454, 'Lee-J Lynch', '27-Nov-91'),
(455, 'Chris Mulhall', '09-Feb-88'),
(456, 'Sean  McSweeney', '08-Oct-97'),
(457, 'John O\'Flynn', '11-Jul-82'),
(458, 'Garbhan Coughlan', '24-Jan-93'),
(459, 'Rodrigo Tosi', '06-Jan-83'),
(460, 'Dean Clarke', '29-Mar-93'),
(461, 'Kevin Horgan', '26-Apr-97'),
(462, 'Tomer Chencinski', '01-Dec-94'),
(463, 'Roberto Lopes', '17-Jun-92'),
(464, 'Simon Madden', '01-May-88'),
(465, 'Luke Byrne', '08-Jul-93'),
(466, 'Danny Devine', '08-May-93'),
(467, 'Sean  Heaney', '27-Jan-96'),
(468, 'David Webster', '08-Sep-89'),
(469, 'Brandon Miele', '28-Aug-94'),
(470, 'Luke Kiely', '09-Jun-99'),
(471, 'Darren Meenan', '16-Nov-86'),
(472, 'Paul Corry', '03-Feb-91'),
(473, 'Ronan Finn', '21-Nov-87'),
(474, 'Ryan Connolly', '13-Jan-92'),
(475, 'Trevor Clarke', '26-Mar-98'),
(476, 'Aaron Bolger', ''),
(477, 'David McAllister', '29-Dec-88'),
(478, 'James Doona', '15-Jan-98'),
(479, 'Dean Dillon', '08-Jun-99'),
(480, 'Shane Hanney', '19-Feb-98'),
(481, 'Gary Shaw', '10-May-92'),
(482, 'Conor Davis', '03-Jun-98'),
(483, 'Sean Boyd', '20-Jun-98'),
(484, 'Michael O\'Connor', '31-Jul-98'),
(485, 'Aaron Dobbs', '06-Jan-99'),
(486, 'Sam Bone', ''),
(487, 'Shaun Patton', '22-Aug-95'),
(488, 'M?che?l Schlingermann', '23-Jun-91'),
(489, 'Gary Boylan', '24-Apr-96'),
(490, 'Mick Leahy', '30-Apr-89'),
(491, 'Tobi Adebayo-Rowling', '06-Nov-96'),
(492, 'Regan Donelon', '17-Apr-96'),
(493, 'Kyle McFadden', '20-Apr-95'),
(494, 'Kieran Sadlier', '14-Sep-94'),
(495, 'Craig Roddan', '22-Apr-93'),
(496, 'Chris Kenny', '04-May-90'),
(497, 'Liam  Martin', '23-Jan-94'),
(498, 'John Russell', '18-May-85'),
(499, 'Michael Place', '09-Apr-98'),
(500, 'Jonah Ayunga', '24-May-97'),
(501, 'Gary Armstrong', '28-Jan-96'),
(502, 'Raffaele Cretaro', '15-Oct-81'),
(503, 'Daniel  Kearns', '26-Aug-91'),
(504, 'Matthew Stevens', '12-Feb-98'),
(505, 'Conor O\'Malley', '01-Aug-94'),
(506, 'Barry Murphy', '08-Jun-85'),
(507, 'Pat Jennings', '24-Sep-79'),
(508, 'Gavin Peers', '10-Nov-85'),
(509, 'Lee Desmond', '22-Jan-95'),
(510, 'Ian Bermingham', '08-Jan-89'),
(511, 'Michael  Barker', '16-Aug-93'),
(512, 'Ger O\'Brien', '02-Jul-84'),
(513, 'Darren Dennehy', '21-Sep-88'),
(514, 'Ciaran Kelly', '04-Jul-98'),
(515, 'Shane Elworthy', ''),
(516, 'Conan Byrne', '10-Jul-85'),
(517, 'Graham Kelly', '31-Oct-91'),
(518, 'Keith Treacy', '13-Sep-88'),
(519, 'Patrick Cregg', '21-Feb-86'),
(520, 'Steven Grogan', '21-Jul-97'),
(521, 'Jack Bayly', '18-Jun-96'),
(522, 'Billy Dennehy', '17-Feb-87'),
(523, 'Darragh Markey', '23-May-97'),
(524, 'Alex O\'Hanlon', '20-Sep-96'),
(525, 'Rory  Feely', '03-Jan-97'),
(526, 'Steven Kinsella', '22-Aug-98'),
(527, 'Josh O\'Hanlon', '25-Sep-95'),
(528, 'Kurtis Byrne', '09-Apr-90'),
(529, 'Sam Verdon', '03-Sep-95'),
(530, 'Christy Fagan', '11-May-89'),
(531, 'Graeme Buckley', '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `total_like` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_likes`
--

CREATE TABLE `post_likes` (
  `like_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `like_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(225) NOT NULL,
  `town` varchar(225) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `DOB`, `email`, `country`, `town`, `password`) VALUES
(1, 'cole2795', '1995-04-12', 'campbellnicole25@hotmail.com', 'Ireland', 'Dublin', '413a0fc61069f39f8bec02ce0fc95a49'),
(2, 'speedy27', '2017-04-05', 'campbellnicole25@gmail.com', 'Ireland', 'Louth', '5de1371387453658ce7d957a1aadbb02'),
(3, 'ashley24', '1999-01-23', 'ashley@gmail.com', 'UK', 'Liverpool', 'b0c15532aae95ea91baae73d233d7496'),
(4, 'keith', '0000-00-00', 'keith@gmail.com', '', '', 'e6a1ced05717923f5a4b492b51fcd130'),
(5, 'peter', '0000-00-00', 'peter@gmail.com', '', '', '84739245bcbcf1ceefe84215d503afaf'),
(6, '', '0000-00-00', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(7, 'eileen12', '0000-00-00', 'eileen@gmail.com', '', '', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`playerID`),
  ADD KEY `peopleID` (`playerID`) USING BTREE;

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_likes`
--
ALTER TABLE `post_likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `playerID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=532;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
