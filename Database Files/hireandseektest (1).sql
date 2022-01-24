-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 03:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hireandseektest`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `Birthdate` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `userpassword` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `userlanguage` varchar(255) DEFAULT NULL,
  `occupation` varchar(1000) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `skills` varchar(1000) DEFAULT NULL,
  `snapshotPath` varchar(1000) DEFAULT NULL,
  `idimage1type` varchar(1000) DEFAULT NULL,
  `idimage1Path` varchar(1000) DEFAULT NULL,
  `idimage2type` varchar(1000) DEFAULT NULL,
  `idimage2Path` varchar(1000) DEFAULT NULL,
  `AccountType` varchar(1000) DEFAULT NULL,
  `AccountLevel` varchar(1000) DEFAULT NULL,
  `filesdirectory` varchar(1000) DEFAULT NULL,
  `TransactionsTableName` varchar(1000) DEFAULT NULL,
  `InboxTableName` varchar(1000) DEFAULT NULL,
  `customUsername` varchar(255) DEFAULT NULL,
  `InboxCreated` int(11) NOT NULL,
  `TransactionsCreated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`email`, `firstname`, `lastname`, `middlename`, `Birthdate`, `gender`, `userpassword`, `contact`, `address`, `description`, `userlanguage`, `occupation`, `education`, `skills`, `snapshotPath`, `idimage1type`, `idimage1Path`, `idimage2type`, `idimage2Path`, `AccountType`, `AccountLevel`, `filesdirectory`, `TransactionsTableName`, `InboxTableName`, `customUsername`, `InboxCreated`, `TransactionsCreated`) VALUES
('dulitoji@mailinator.com', 'Eliana', 'Kidd', 'Totam quia consequat', '18-Mar-2016', 'male', 'Pa$$w0rd!', 'Quia nisi similique ', 'Ratione dolorem amet', 'In corrupti eius cu', 'Sed iusto error fugi', 'Vel earum perferendi', 'Veniam sit amet no', 'Ducimus beatae ipsu', 'UserRegisterFiles/dulitoji@mailinator.comEliana/dulitoji@mailinator.comEliana.png', 'School ID', 'UserRegisterFiles/dulitoji@mailinator.comEliana/ID1ElianaKidd.png', 'Driving License', 'UserRegisterFiles/dulitoji@mailinator.comEliana/ID2ElianaKidd.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/dulitoji@mailinator.comEliana', 'dulitojiElianaTransactions', 'dulitojiElianaInbox', 'gavuby', 1, 1),
('jawi@mailinator.com', 'Malcolm', 'Casey', 'Inventore et asperio', '15-Jun-2003', 'female', 'Pa$$w0rd!', 'Vero fuga Fuga Con', 'Odio sunt eu deserun', 'In elit quibusdam q', 'Dolores sed nostrum ', 'Voluptate in provide', 'Quisquam dolorem per', 'Duis cupidatat expli', 'UserRegisterFiles/jawi@mailinator.comMalcolm/jawi@mailinator.comMalcolm.png', 'Driving License', 'UserRegisterFiles/jawi@mailinator.comMalcolm/ID1MalcolmCasey.png', 'National ID', 'UserRegisterFiles/jawi@mailinator.comMalcolm/ID2MalcolmCasey.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/jawi@mailinator.comMalcolm', 'jawiMalcolmTransactions', 'jawiMalcolmInbox', 'caxixosal', 1, 1),
('luqutaw@mailinator.com', 'Nevada', 'Church', 'Provident nostrud e', '21-Apr-2018', 'male', 'Pa$$w0rd!', 'Eaque est quas enim ', 'Dignissimos molestia', 'Eveniet tenetur ex ', 'Aliquam et non lauda', '', '', '', 'UserRegisterFiles/luqutaw@mailinator.comNevada/luqutaw@mailinator.comNevada.png', 'School ID', 'UserRegisterFiles/luqutaw@mailinator.comNevada/ID1NevadaChurch.png', 'National ID', 'UserRegisterFiles/luqutaw@mailinator.comNevada/ID2NevadaChurch.png', 'Customer', 'Level 1', 'UserRegisterFiles/luqutaw@mailinator.comNevada', 'luqutawNevadaTransactions', 'luqutawNevadaInbox', 'mekotudyj', 1, 1),
('pacyt@mailinator.com', 'Keaton', 'Curry', 'Dolorem omnis nostru', '13-Nov-1981', 'female', 'Pa$$w0rd!', 'Nihil duis aliquid s', 'Deserunt molestiae o', 'Sunt aperiam minim ', 'Voluptates in quis r', 'Exercitation atque f', 'Quas consequuntur et', 'Rerum delectus temp', 'UserRegisterFiles/pacyt@mailinator.comKeaton/pacyt@mailinator.comKeaton.png', 'National ID', 'UserRegisterFiles/pacyt@mailinator.comKeaton/ID1KeatonCurry.png', 'School ID', 'UserRegisterFiles/pacyt@mailinator.comKeaton/ID2KeatonCurry.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/pacyt@mailinator.comKeaton', 'pacytKeatonTransactions', 'pacytKeatonInbox', '', 1, 1),
('puba@mailinator.com', 'Lane', 'Hampton', 'Ullamco dolor eiusmo', '12-Dec-2019', 'female', 'Pa$$w0rd!', 'Dolorum ullamco omni', 'Nulla odio obcaecati', 'Eiusmod et quae sunt', 'Officiis qui dolor v', 'Quibusdam rem Nam pl', 'Incididunt similique', 'Ea ut et optio cumq', 'UserRegisterFiles/puba@mailinator.comLane/puba@mailinator.comLane.png', 'Driving License', 'UserRegisterFiles/puba@mailinator.comLane/ID1LaneHampton.png', 'School ID', 'UserRegisterFiles/puba@mailinator.comLane/ID2LaneHampton.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/puba@mailinator.comLane', 'pubaLaneTransactions', 'pubaLaneInbox', 'humyqylax', 1, 1),
('sucitimut@mailinator.com', 'Baker', 'Christensen', 'Et voluptas ut digni', '20-Apr-1993', 'female', 'Pa$$w0rd!', 'Nisi do delectus al', 'Eos explicabo Qui v', 'Enim fugiat est fug', 'Voluptatem laudantiu', 'Totam expedita esse', 'Maiores eius volupta', 'Autem minima et sunt', 'UserRegisterFiles/sucitimut@mailinator.comBaker/sucitimut@mailinator.comBaker.png', 'School ID', 'UserRegisterFiles/sucitimut@mailinator.comBaker/ID1BakerChristensen.png', 'National ID', 'UserRegisterFiles/sucitimut@mailinator.comBaker/ID2BakerChristensen.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/sucitimut@mailinator.comBaker', 'sucitimutBakerTransactions', 'sucitimutBakerInbox', '', 1, 1),
('tuxetygup@mailinator.com', 'Yasir', 'Anderson', 'Velit aut nostrum di', '13-Oct-1971', 'female', 'Pa$$w0rd!', 'Debitis dolor volupt', 'Sequi culpa ut est ', 'Earum enim aliquip v', 'Cupiditate quia pari', 'Aut pariatur In acc', 'Natus neque lorem ei', 'Anim ipsum molestia', 'UserRegisterFiles/tuxetygup@mailinator.comYasir/tuxetygup@mailinator.comYasir.png', 'Driving License', 'UserRegisterFiles/tuxetygup@mailinator.comYasir/ID1YasirAnderson.png', 'School ID', 'UserRegisterFiles/tuxetygup@mailinator.comYasir/ID2YasirAnderson.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/tuxetygup@mailinator.comYasir', 'tuxetygupYasirTransactions', 'tuxetygupYasirInbox', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `servicesinfo`
--

CREATE TABLE `servicesinfo` (
  `ServiceID` int(11) NOT NULL,
  `ServiceTitle` varchar(255) DEFAULT NULL,
  `ServiceOwnerEmail` varchar(255) DEFAULT NULL,
  `ServiceOwnerInbox` varchar(1000) NOT NULL,
  `AccountLevel` varchar(255) NOT NULL,
  `ServiceOwnerUserName` varchar(255) NOT NULL,
  `ServiceFilesPath` varchar(255) DEFAULT NULL,
  `ServiceDescription` varchar(255) DEFAULT NULL,
  `ServiceBasicPlanDescription` varchar(255) DEFAULT NULL,
  `ServiceBasicPlanPrice` varchar(255) DEFAULT NULL,
  `ServiceStandardPlanDescription` varchar(255) DEFAULT NULL,
  `ServiceStandardPlanPrice` varchar(255) DEFAULT NULL,
  `ServicePremiumPlanDescription` varchar(255) DEFAULT NULL,
  `ServicePremiumPlanPrice` varchar(255) DEFAULT NULL,
  `Service5StarRatings` varchar(255) DEFAULT NULL,
  `Service4StarRatings` varchar(255) DEFAULT NULL,
  `Service3StarRatings` varchar(255) DEFAULT NULL,
  `Service2StarRatings` varchar(255) DEFAULT NULL,
  `Service1StarRatings` varchar(255) DEFAULT NULL,
  `ServiceTotalRatings` varchar(255) DEFAULT NULL,
  `ServiceCommentsTABLE` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `Banner1Path` varchar(1000) NOT NULL,
  `Banner2Path` varchar(1000) NOT NULL,
  `Banner3Path` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicesinfo`
--

INSERT INTO `servicesinfo` (`ServiceID`, `ServiceTitle`, `ServiceOwnerEmail`, `ServiceOwnerInbox`, `AccountLevel`, `ServiceOwnerUserName`, `ServiceFilesPath`, `ServiceDescription`, `ServiceBasicPlanDescription`, `ServiceBasicPlanPrice`, `ServiceStandardPlanDescription`, `ServiceStandardPlanPrice`, `ServicePremiumPlanDescription`, `ServicePremiumPlanPrice`, `Service5StarRatings`, `Service4StarRatings`, `Service3StarRatings`, `Service2StarRatings`, `Service1StarRatings`, `ServiceTotalRatings`, `ServiceCommentsTABLE`, `category`, `Banner1Path`, `Banner2Path`, `Banner3Path`) VALUES
(7, 'Kiayada Wood', 'dulitoji@mailinator.com', 'dulitoji@mailinator.comElianaInbox', 'Level 1', '', 'ServicesFiles/Kiayada Wood.dulitoji@mailinator.com', 'Nisi ut eiusmod aute', 'Vel qui enim accusan', '91', 'Facilis doloribus do', '498', 'Ipsum ullamco culpa', '302', '0', '0', '0', '0', '0', '0', 'Kiayada Wood.dulitoji@mailinator.com.Comments', 'Development and IT', 'ServicesFiles/Kiayada Wood.dulitoji@mailinator.com/Banner1Kiayada Wood.png', 'ServicesFiles/Kiayada Wood.dulitoji@mailinator.com/Banner2Kiayada Wood.png', 'ServicesFiles/Kiayada Wood.dulitoji@mailinator.com/Banner3Kiayada Wood.png'),
(8, 'Robert Vinson', 'pacyt@mailinator.com', 'pacyt@mailinator.comKeatonInbox', 'Level 1', '', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com', 'Blanditiis qui ut am', 'Facere animi ut quo', '92', 'Id rerum quae delen', '135', 'Autem voluptatem At', '688', '0', '0', '0', '0', '0', '0', 'Robert Vinson.pacyt@mailinator.com.Comments', 'Graphics and Design', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com/Banner1Robert Vinson.png', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com/Banner2Robert Vinson.png', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com/Banner3Robert Vinson.png'),
(9, 'Robert Vinson', 'pacyt@mailinator.com', 'pacyt@mailinator.comKeatonInbox', 'Level 1', '', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com', 'Blanditiis qui ut am', 'Facere animi ut quo', '92', 'Id rerum quae delen', '135', 'Autem voluptatem At', '688', '0', '0', '0', '0', '0', '0', 'Robert Vinson.pacyt@mailinator.com.Comments', 'Graphics and Design', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com/Banner1Robert Vinson.png', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com/Banner2Robert Vinson.png', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com/Banner3Robert Vinson.png'),
(10, 'Shana Sheppard', 'dulitoji@mailinator.com', 'dulitojiElianaInbox', 'Level 1', '', 'ServicesFiles/Shana Sheppard.dulitoji@mailinator.com', 'Velit rerum aut laud', 'Sint ad officiis do', '6943', 'Sed modi nisi conseq', '18933', 'Vitae amet odit eum', '7632', '0', '0', '0', '0', '0', '0', 'Shana Sheppard.dulitoji@mailinator.com.Comments', 'Music and Audio', 'ServicesFiles/Shana Sheppard.dulitoji@mailinator.com/Banner1Shana Sheppard.png', 'ServicesFiles/Shana Sheppard.dulitoji@mailinator.com/Banner2Shana Sheppard.png', 'ServicesFiles/Shana Sheppard.dulitoji@mailinator.com/Banner3Shana Sheppard.png');

-- --------------------------------------------------------

--
-- Table structure for table `signupverification`
--

CREATE TABLE `signupverification` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `Birthdate` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `userpassword` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `userlanguage` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `snapshotPath` varchar(255) DEFAULT NULL,
  `idimage1type` varchar(255) DEFAULT NULL,
  `idimage1Path` varchar(255) DEFAULT NULL,
  `idimage2type` varchar(255) DEFAULT NULL,
  `idimage2Path` varchar(255) DEFAULT NULL,
  `AccountType` varchar(255) DEFAULT NULL,
  `SignupStatus` varchar(255) DEFAULT NULL,
  `filesdirectory` varchar(8000) DEFAULT NULL,
  `customUsername` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signupverification`
--

INSERT INTO `signupverification` (`id`, `firstname`, `lastname`, `middlename`, `Birthdate`, `gender`, `email`, `userpassword`, `contact`, `address`, `description`, `userlanguage`, `occupation`, `education`, `skills`, `snapshotPath`, `idimage1type`, `idimage1Path`, `idimage2type`, `idimage2Path`, `AccountType`, `SignupStatus`, `filesdirectory`, `customUsername`) VALUES
(1, 'Keaton', 'Curry', 'Dolorem omnis nostru', '13-Nov-1981', 'female', 'pacyt@mailinator.com', 'Pa$$w0rd!', 'Nihil duis aliquid s', 'Deserunt molestiae o', 'Sunt aperiam minim ', 'Voluptates in quis r', 'Exercitation atque f', 'Quas consequuntur et', 'Rerum delectus temp', 'UserRegisterFiles/pacyt@mailinator.comKeaton/pacyt@mailinator.comKeaton.png', 'National ID', 'UserRegisterFiles/pacyt@mailinator.comKeaton/ID1KeatonCurry.png', 'School ID', 'UserRegisterFiles/pacyt@mailinator.comKeaton/ID2KeatonCurry.png', 'Freelancer', 'Approved', 'UserRegisterFiles/pacyt@mailinator.comKeaton', ''),
(3, 'Baker', 'Christensen', 'Et voluptas ut digni', '20-Apr-1993', 'female', 'sucitimut@mailinator.com', 'Pa$$w0rd!', 'Nisi do delectus al', 'Eos explicabo Qui v', 'Enim fugiat est fug', 'Voluptatem laudantiu', 'Totam expedita esse', 'Maiores eius volupta', 'Autem minima et sunt', 'UserRegisterFiles/sucitimut@mailinator.comBaker/sucitimut@mailinator.comBaker.png', 'School ID', 'UserRegisterFiles/sucitimut@mailinator.comBaker/ID1BakerChristensen.png', 'National ID', 'UserRegisterFiles/sucitimut@mailinator.comBaker/ID2BakerChristensen.png', 'Freelancer', 'Approved', 'UserRegisterFiles/sucitimut@mailinator.comBaker', ''),
(4, 'Yasir', 'Anderson', 'Velit aut nostrum di', '13-Oct-1971', 'female', 'tuxetygup@mailinator.com', 'Pa$$w0rd!', 'Debitis dolor volupt', 'Sequi culpa ut est ', 'Earum enim aliquip v', 'Cupiditate quia pari', 'Aut pariatur In acc', 'Natus neque lorem ei', 'Anim ipsum molestia', 'UserRegisterFiles/tuxetygup@mailinator.comYasir/tuxetygup@mailinator.comYasir.png', 'Driving License', 'UserRegisterFiles/tuxetygup@mailinator.comYasir/ID1YasirAnderson.png', 'School ID', 'UserRegisterFiles/tuxetygup@mailinator.comYasir/ID2YasirAnderson.png', 'Freelancer', 'Approved', 'UserRegisterFiles/tuxetygup@mailinator.comYasir', ''),
(5, 'Claire', 'Anderson', 'Modi aliqua Fugit ', '06-Oct-1995', 'female', 'mevoxemevy@mailinator.com', 'Pa$$w0rd!', 'Sint dolor doloribus', 'Quia cillum inventor', 'Reiciendis porro pra', 'Quo in incidunt non', 'Adipisicing quidem s', 'Sit delectus odio q', 'Aperiam ut dolores s', 'UserRegisterFiles/mevoxemevy@mailinator.comClaire/mevoxemevy@mailinator.comClaire.png', 'Driving License', 'UserRegisterFiles/mevoxemevy@mailinator.comClaire/ID1ClaireAnderson.png', 'National ID', 'UserRegisterFiles/mevoxemevy@mailinator.comClaire/ID2ClaireAnderson.png', 'Freelancer', 'Declined', 'UserRegisterFiles/mevoxemevy@mailinator.comClaire', 'qiqidy'),
(6, 'Nevada', 'Church', 'Provident nostrud e', '21-Apr-2018', 'male', 'luqutaw@mailinator.com', 'Pa$$w0rd!', 'Eaque est quas enim ', 'Dignissimos molestia', 'Eveniet tenetur ex ', 'Aliquam et non lauda', NULL, NULL, NULL, 'UserRegisterFiles/luqutaw@mailinator.comNevada/luqutaw@mailinator.comNevada.png', 'School ID', 'UserRegisterFiles/luqutaw@mailinator.comNevada/ID1NevadaChurch.png', 'National ID', 'UserRegisterFiles/luqutaw@mailinator.comNevada/ID2NevadaChurch.png', 'Customer', 'Approved', 'UserRegisterFiles/luqutaw@mailinator.comNevada', 'mekotudyj'),
(7, 'Eliana', 'Kidd', 'Totam quia consequat', '18-Mar-2016', 'male', 'dulitoji@mailinator.com', 'Pa$$w0rd!', 'Quia nisi similique ', 'Ratione dolorem amet', 'In corrupti eius cu', 'Sed iusto error fugi', 'Vel earum perferendi', 'Veniam sit amet no', 'Ducimus beatae ipsu', 'UserRegisterFiles/dulitoji@mailinator.comEliana/dulitoji@mailinator.comEliana.png', 'School ID', 'UserRegisterFiles/dulitoji@mailinator.comEliana/ID1ElianaKidd.png', 'Driving License', 'UserRegisterFiles/dulitoji@mailinator.comEliana/ID2ElianaKidd.png', 'Freelancer', 'Approved', 'UserRegisterFiles/dulitoji@mailinator.comEliana', 'gavuby'),
(8, 'Lane', 'Hampton', 'Ullamco dolor eiusmo', '12-Dec-2019', 'female', 'puba@mailinator.com', 'Pa$$w0rd!', 'Dolorum ullamco omni', 'Nulla odio obcaecati', 'Eiusmod et quae sunt', 'Officiis qui dolor v', 'Quibusdam rem Nam pl', 'Incididunt similique', 'Ea ut et optio cumq', 'UserRegisterFiles/puba@mailinator.comLane/puba@mailinator.comLane.png', 'Driving License', 'UserRegisterFiles/puba@mailinator.comLane/ID1LaneHampton.png', 'School ID', 'UserRegisterFiles/puba@mailinator.comLane/ID2LaneHampton.png', 'Freelancer', 'Approved', 'UserRegisterFiles/puba@mailinator.comLane', 'humyqylax'),
(9, 'Malcolm', 'Casey', 'Inventore et asperio', '15-Jun-2003', 'female', 'jawi@mailinator.com', 'Pa$$w0rd!', 'Vero fuga Fuga Con', 'Odio sunt eu deserun', 'In elit quibusdam q', 'Dolores sed nostrum ', 'Voluptate in provide', 'Quisquam dolorem per', 'Duis cupidatat expli', 'UserRegisterFiles/jawi@mailinator.comMalcolm/jawi@mailinator.comMalcolm.png', 'Driving License', 'UserRegisterFiles/jawi@mailinator.comMalcolm/ID1MalcolmCasey.png', 'National ID', 'UserRegisterFiles/jawi@mailinator.comMalcolm/ID2MalcolmCasey.png', 'Freelancer', 'Approved', 'UserRegisterFiles/jawi@mailinator.comMalcolm', 'caxixosal');

-- --------------------------------------------------------

--
-- Table structure for table `transactionrecords`
--

CREATE TABLE `transactionrecords` (
  `transactionID` int(11) NOT NULL,
  `OwnerEmail` varchar(255) DEFAULT NULL,
  `ClientEmail` varchar(255) DEFAULT NULL,
  `ServiceID` varchar(255) DEFAULT NULL,
  `ServiceTitle` varchar(1000) DEFAULT NULL,
  `Category` varchar(255) NOT NULL,
  `clientNotes` varchar(5000) DEFAULT NULL,
  `transactionstartDate` varchar(255) DEFAULT NULL,
  `transactionFinishedDate` varchar(255) DEFAULT NULL,
  `availedPlan` varchar(255) DEFAULT NULL,
  `Price` varchar(255) DEFAULT NULL,
  `TransactionStatus` varchar(255) DEFAULT NULL,
  `FilesDirectory` varchar(1000) DEFAULT NULL,
  `AgreementContract` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactionrecords`
--

INSERT INTO `transactionrecords` (`transactionID`, `OwnerEmail`, `ClientEmail`, `ServiceID`, `ServiceTitle`, `Category`, `clientNotes`, `transactionstartDate`, `transactionFinishedDate`, `availedPlan`, `Price`, `TransactionStatus`, `FilesDirectory`, `AgreementContract`) VALUES
(1, 'pacyt@mailinator.com', 'luqutaw@mailinator.com', '9', 'Robert Vinson', 'Graphics and Design', 'ewan kahit ano?', '1/1/2022', '1/1/2022', 'Basic Plan', 'Php 92.00', 'Pending', NULL, 'Agree'),
(2, 'pacyt@mailinator.com', 'luqutaw@mailinator.com', '9', 'Robert Vinson', 'Graphics and Design', 'dfgdsgsdg', '1/1/2022', '1/12/2022', 'Premium Plan', 'Php 688.00', 'Pending', NULL, 'Agree'),
(3, 'pacyt@mailinator.com', 'luqutaw@mailinator.com', '9', 'Robert Vinson', 'Graphics and Design', 'hfghfdf', '1/1/2022', '1/12/2022', 'Standard Plan', 'Php 135.00', 'Pending', NULL, 'Agree'),
(4, 'pacyt@mailinator.com', 'dulitoji@mailinator.com', '9', 'Robert Vinson', 'Graphics and Design', 'SAFSDA', '1/1/2022', '1/12/2022', 'Basic Plan', 'Php 92.00', 'Pending', NULL, 'Agree'),
(5, 'dulitoji@mailinator.com', 'dulitoji@mailinator.com', '10', 'Shana Sheppard', 'Music and Audio', 'Possimus quae nemo ', '1/1/2022', '06-Mar-1985', 'Standard Plan', 'Php 18933.00', 'Pending', NULL, 'Agree');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `servicesinfo`
--
ALTER TABLE `servicesinfo`
  ADD PRIMARY KEY (`ServiceID`);

--
-- Indexes for table `signupverification`
--
ALTER TABLE `signupverification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactionrecords`
--
ALTER TABLE `transactionrecords`
  ADD PRIMARY KEY (`transactionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `servicesinfo`
--
ALTER TABLE `servicesinfo`
  MODIFY `ServiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `signupverification`
--
ALTER TABLE `signupverification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transactionrecords`
--
ALTER TABLE `transactionrecords`
  MODIFY `transactionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
