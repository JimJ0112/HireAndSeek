-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 08:30 PM
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
  `FileMailingAddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`email`, `firstname`, `lastname`, `middlename`, `Birthdate`, `gender`, `userpassword`, `contact`, `address`, `description`, `userlanguage`, `occupation`, `education`, `skills`, `snapshotPath`, `idimage1type`, `idimage1Path`, `idimage2type`, `idimage2Path`, `AccountType`, `AccountLevel`, `filesdirectory`, `TransactionsTableName`, `InboxTableName`, `customUsername`, `FileMailingAddress`) VALUES
('dulitoji@mailinator.com', 'Eliana', 'Kidd', 'Totam quia consequat', '18-Mar-2016', 'male', 'Pa$$w0rd!', 'Quia nisi similique ', 'Ratione dolorem amet', 'In corrupti eius cu', 'Sed iusto error fugi', 'Vel earum perferendi', 'Veniam sit amet no', 'Ducimus beatae ipsu', 'UserRegisterFiles/dulitoji@mailinator.comEliana/dulitoji@mailinator.comEliana.png', 'School ID', 'UserRegisterFiles/dulitoji@mailinator.comEliana/ID1ElianaKidd.png', 'Driving License', 'UserRegisterFiles/dulitoji@mailinator.comEliana/ID2ElianaKidd.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/dulitoji@mailinator.comEliana', 'dulitojiElianaTransactions', 'dulitojiElianaInbox', 'gavuby', ''),
('jawi@mailinator.com', 'Malcolm', 'Casey', 'Inventore et asperio', '15-Jun-2003', 'female', 'Pa$$w0rd!', 'Vero fuga Fuga Con', 'Odio sunt eu deserun', 'In elit quibusdam q', 'Dolores sed nostrum ', 'Voluptate in provide', 'Quisquam dolorem per', 'Duis cupidatat expli', 'UserRegisterFiles/jawi@mailinator.comMalcolm/jawi@mailinator.comMalcolm.png', 'Driving License', 'UserRegisterFiles/jawi@mailinator.comMalcolm/ID1MalcolmCasey.png', 'National ID', 'UserRegisterFiles/jawi@mailinator.comMalcolm/ID2MalcolmCasey.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/jawi@mailinator.comMalcolm', 'jawiMalcolmTransactions', 'jawiMalcolmInbox', 'caxixosal', ''),
('jimmanrique12@gmail.com', 'JL', 'Manrique', 'Ipsum nesciunt magn', '24-Jan-2016', 'male', '1234', 'Tempore est accusa', 'Perspiciatis volupt', 'Alias quis illum vo', 'Quibusdam tempore o', 'Quidem in sed duis v', 'Atque aut laudantium', 'Illum velit odio ni', 'UserRegisterFiles/jimmanrique12@gmail.comJL/jimmanrique12@gmail.comJL.png', 'National ID', 'UserRegisterFiles/jimmanrique12@gmail.comJL/ID1JLManrique.png', 'School ID', 'UserRegisterFiles/jimmanrique12@gmail.comJL/ID2JLManrique.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/jimmanrique12@gmail.comJL', '', '', 'hikyjo', 'jimmanrique12@gmail.com'),
('luqutaw@mailinator.com', 'Nevada', 'Church', 'Provident nostrud e', '21-Apr-2018', 'male', '1234', 'Eaque est quas enim ', 'Dignissimos molestia', 'Eveniet tenetur ex ', 'Aliquam et non lauda', '', '', '', 'UserRegisterFiles/luqutaw@mailinator.comNevada/luqutaw@mailinator.comNevada.png', 'School ID', 'UserRegisterFiles/luqutaw@mailinator.comNevada/ID1NevadaChurch.png', 'National ID', 'UserRegisterFiles/luqutaw@mailinator.comNevada/ID2NevadaChurch.png', 'Customer', 'Level 1', 'UserRegisterFiles/luqutaw@mailinator.comNevada', 'luqutawNevadaTransactions', 'luqutawNevadaInbox', 'mekotudyj', ''),
('pacyt@mailinator.com', 'Keaton', 'Curry', 'Dolorem omnis nostru', '13-Nov-1981', 'female', 'Pa$$w0rd!', 'Nihil duis aliquid s', 'Deserunt molestiae o', 'Sunt aperiam minim ', 'Voluptates in quis r', 'Exercitation atque f', 'Quas consequuntur et', 'Rerum delectus temp', 'UserRegisterFiles/pacyt@mailinator.comKeaton/pacyt@mailinator.comKeaton.png', 'National ID', 'UserRegisterFiles/pacyt@mailinator.comKeaton/ID1KeatonCurry.png', 'School ID', 'UserRegisterFiles/pacyt@mailinator.comKeaton/ID2KeatonCurry.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/pacyt@mailinator.comKeaton', 'pacytKeatonTransactions', 'pacytKeatonInbox', '', ''),
('puba@mailinator.com', 'Lane', 'Hampton', 'Ullamco dolor eiusmo', '12-Dec-2019', 'female', 'Pa$$w0rd!', 'Dolorum ullamco omni', 'Nulla odio obcaecati', 'Eiusmod et quae sunt', 'Officiis qui dolor v', 'Quibusdam rem Nam pl', 'Incididunt similique', 'Ea ut et optio cumq', 'UserRegisterFiles/puba@mailinator.comLane/puba@mailinator.comLane.png', 'Driving License', 'UserRegisterFiles/puba@mailinator.comLane/ID1LaneHampton.png', 'School ID', 'UserRegisterFiles/puba@mailinator.comLane/ID2LaneHampton.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/puba@mailinator.comLane', 'pubaLaneTransactions', 'pubaLaneInbox', 'humyqylax', ''),
('r.ruegas123@gmail.com', 'Razel John', 'Ruegas', 'Dumlao', 'June 19, 2001', 'male', '12345', '09614410403', 'Dinalupihan', 'Pogi', 'English', '', '', '', 'UserRegisterFiles/r.ruegas123@gmail.comRazel John/r.ruegas123@gmail.comRazel John.png', 'National ID', 'UserRegisterFiles/r.ruegas123@gmail.comRazel John/ID1Razel JohnRuegas.png', 'Driving License', 'UserRegisterFiles/r.ruegas123@gmail.comRazel John/ID2Razel JohnRuegas.png', 'Customer', 'Level 1', 'UserRegisterFiles/r.ruegas123@gmail.comRazel John', '', '', 'Astozel', 'r.ruegas123@gmail.com'),
('sucitimut@mailinator.com', 'Baker', 'Christensen', 'Et voluptas ut digni', '20-Apr-1993', 'female', 'Pa$$w0rd!', 'Nisi do delectus al', 'Eos explicabo Qui v', 'Enim fugiat est fug', 'Voluptatem laudantiu', 'Totam expedita esse', 'Maiores eius volupta', 'Autem minima et sunt', 'UserRegisterFiles/sucitimut@mailinator.comBaker/sucitimut@mailinator.comBaker.png', 'School ID', 'UserRegisterFiles/sucitimut@mailinator.comBaker/ID1BakerChristensen.png', 'National ID', 'UserRegisterFiles/sucitimut@mailinator.comBaker/ID2BakerChristensen.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/sucitimut@mailinator.comBaker', 'sucitimutBakerTransactions', 'sucitimutBakerInbox', '', ''),
('tuxetygup@mailinator.com', 'Yasir', 'Anderson', 'Velit aut nostrum di', '13-Oct-1971', 'female', 'Pa$$w0rd!', 'Debitis dolor volupt', 'Sequi culpa ut est ', 'Earum enim aliquip v', 'Cupiditate quia pari', 'Aut pariatur In acc', 'Natus neque lorem ei', 'Anim ipsum molestia', 'UserRegisterFiles/tuxetygup@mailinator.comYasir/tuxetygup@mailinator.comYasir.png', 'Driving License', 'UserRegisterFiles/tuxetygup@mailinator.comYasir/ID1YasirAnderson.png', 'School ID', 'UserRegisterFiles/tuxetygup@mailinator.comYasir/ID2YasirAnderson.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/tuxetygup@mailinator.comYasir', 'tuxetygupYasirTransactions', 'tuxetygupYasirInbox', '', ''),
('zuzy@mailinator.com', 'Randall', 'Schroeder', 'Eos rerum pariatur', '06-Mar-2019', 'male', 'Pa$$w0rd!', 'Non occaecat ab dolo', 'Velit voluptatem el', 'Quo eligendi volupta', 'Nostrum provident s', 'Cillum similique fac', 'Ex et dolore dolore ', 'Necessitatibus nobis', 'UserRegisterFiles/zuzy@mailinator.comRandall/zuzy@mailinator.comRandall.png', 'Driving License', 'UserRegisterFiles/zuzy@mailinator.comRandall/ID1RandallSchroeder.png', 'Driving License', 'UserRegisterFiles/zuzy@mailinator.comRandall/ID2RandallSchroeder.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/zuzy@mailinator.comRandall', '', '', 'gowypox', '');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `MessageID` int(11) NOT NULL,
  `SenderEmail` varchar(1000) DEFAULT NULL,
  `RecieverEmail` varchar(1000) DEFAULT NULL,
  `MessageDate` varchar(500) DEFAULT NULL,
  `MessageTime` varchar(500) DEFAULT NULL,
  `Subject` varchar(2000) DEFAULT NULL,
  `MessageBody` varchar(6000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`MessageID`, `SenderEmail`, `RecieverEmail`, `MessageDate`, `MessageTime`, `Subject`, `MessageBody`) VALUES
(1, 'dulitoji@mailinator.com', 'Aut quia ut laborios', '1 / 25 / 2022', '17 : 25', 'Doloribus est volupt', 'Debitis eius iure no'),
(2, 'dulitoji@mailinator.com', 'Dolore non quaerat a', '1 / 25 / 2022', '17 : 26', 'Nisi veritatis possi', 'Animi quis tempor a'),
(3, 'dulitoji@mailinator.com', 'Lyra', '1 / 26 / 2022', '5 : 48', 'Love', ' Iloveyouuuu '),
(4, 'jimmanrique12@gmail.com', 'Perspiciatis pariat', '1 / 27 / 2022', '3 : 17', 'Do reiciendis invent', 'Quidem fuga Tempor '),
(5, 'jimmanrique12@gmail.com', 'jimmanrique12@gmail.com', '1 / 27 / 2022', '3 : 22', 'test', 'testing.. testing.. texting '),
(6, 'jimmanrique12@gmail.com', 'jimmanrique12@gmail.com', '1 / 27 / 2022', '7 : 10', 'testing ulit', 'testing testing texting\r\n '),
(7, 'luqutaw@mailinator.com', 'jimmanrique12@gmail.com', '1 / 27 / 2022', '12 : 12', 'testing', ' sdfdsfasg ht'),
(8, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '1 / 27 / 2022', '16 : 37', 'Hi!', ' hello'),
(9, 'jimmanrique12@gmail.com', 'r.ruegas123@gmail.com', '1 / 27 / 2022', '16 : 42', 'Hi', 'Testing testing testing '),
(10, 'r.ruegas123@gmail.com', 'jimmanrique12@gmail.com', '1 / 27 / 2022', '16 : 42', 'Yo', 'Gumanaaaa '),
(11, 'jimmanrique12@gmail.com', 'r.ruegas123@gmail.com', '1 / 27 / 2022', '16 : 42', 'angas', ' HAHAHAHAHAHAHAHA gagi nagana, angas pala');

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
(8, 'Robert Vinson', 'pacyt@mailinator.com', 'pacyt@mailinator.comKeatonInbox', 'Level 1', '', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com', 'Blanditiis qui ut am', 'Facere animi ut quo', '92', 'Id rerum quae delen', '135', 'Autem voluptatem At', '688', '1', '0', '1', '0', '0', '0.8', 'Robert Vinson.pacyt@mailinator.com.Comments', 'Graphics and Design', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com/Banner1Robert Vinson.png', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com/Banner2Robert Vinson.png', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com/Banner3Robert Vinson.png'),
(9, 'Robert Vinson', 'pacyt@mailinator.com', 'pacyt@mailinator.comKeatonInbox', 'Level 1', '', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com', 'Blanditiis qui ut am', 'Facere animi ut quo', '92', 'Id rerum quae delen', '135', 'Autem voluptatem At', '688', '0', '2', '2', '0', '2', '3.4', 'Robert Vinson.pacyt@mailinator.com.Comments', 'Graphics and Design', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com/Banner1Robert Vinson.png', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com/Banner2Robert Vinson.png', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com/Banner3Robert Vinson.png'),
(10, 'Shana Sheppard', 'dulitoji@mailinator.com', 'dulitojiElianaInbox', 'Level 1', '', 'ServicesFiles/Shana Sheppard.dulitoji@mailinator.com', 'Velit rerum aut laud', 'Sint ad officiis do', '6943', 'Sed modi nisi conseq', '18933', 'Vitae amet odit eum', '7632', '0', '0', '1', '0', '0', '0', 'Shana Sheppard.dulitoji@mailinator.com.Comments', 'Music and Audio', 'ServicesFiles/Shana Sheppard.dulitoji@mailinator.com/Banner1Shana Sheppard.png', 'ServicesFiles/Shana Sheppard.dulitoji@mailinator.com/Banner2Shana Sheppard.png', 'ServicesFiles/Shana Sheppard.dulitoji@mailinator.com/Banner3Shana Sheppard.png'),
(11, 'Delilah Vargas', 'dulitoji@mailinator.com', 'dulitojiElianaInbox', 'Level 1', '', 'ServicesFiles/Delilah Vargas.dulitoji@mailinator.com', 'Ad hic ratione repre', 'Quisquam non culpa i', '988', 'Nesciunt rerum recu', '780', 'Maiores iure veritat', '51', '0', '0', '0', '0', '0', '0', 'Delilah Vargas.dulitoji@mailinator.com.Comments', 'Music and Audio', 'ServicesFiles/Delilah Vargas.dulitoji@mailinator.com/Banner1Delilah Vargas.png', 'ServicesFiles/Delilah Vargas.dulitoji@mailinator.com/Banner2Delilah Vargas.png', 'ServicesFiles/Delilah Vargas.dulitoji@mailinator.com/Banner3Delilah Vargas.png'),
(12, 'Tobias Cantrell', 'jimmanrique12@gmail.com', '', 'Level 1', '', 'ServicesFiles/Tobias Cantrell.jimmanrique12@gmail.com', 'Quasi architecto qui', 'Rem quam dolorem omn', '506', 'Aliquip nulla odio d', '877', 'Neque minus molestia', '456', '6', '0', '0', '0', '0', '1.2', 'Tobias Cantrell.jimmanrique12@gmail.com.Comments', 'Music and Audio', 'ServicesFiles/Tobias Cantrell.jimmanrique12@gmail.com/Banner1Tobias Cantrell.png', 'ServicesFiles/Tobias Cantrell.jimmanrique12@gmail.com/Banner2Tobias Cantrell.png', 'ServicesFiles/Tobias Cantrell.jimmanrique12@gmail.com/Banner3Tobias Cantrell.png');

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
  `customUsername` varchar(255) DEFAULT NULL,
  `FileMailingAddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signupverification`
--

INSERT INTO `signupverification` (`id`, `firstname`, `lastname`, `middlename`, `Birthdate`, `gender`, `email`, `userpassword`, `contact`, `address`, `description`, `userlanguage`, `occupation`, `education`, `skills`, `snapshotPath`, `idimage1type`, `idimage1Path`, `idimage2type`, `idimage2Path`, `AccountType`, `SignupStatus`, `filesdirectory`, `customUsername`, `FileMailingAddress`) VALUES
(1, 'Keaton', 'Curry', 'Dolorem omnis nostru', '13-Nov-1981', 'female', 'pacyt@mailinator.com', 'Pa$$w0rd!', 'Nihil duis aliquid s', 'Deserunt molestiae o', 'Sunt aperiam minim ', 'Voluptates in quis r', 'Exercitation atque f', 'Quas consequuntur et', 'Rerum delectus temp', 'UserRegisterFiles/pacyt@mailinator.comKeaton/pacyt@mailinator.comKeaton.png', 'National ID', 'UserRegisterFiles/pacyt@mailinator.comKeaton/ID1KeatonCurry.png', 'School ID', 'UserRegisterFiles/pacyt@mailinator.comKeaton/ID2KeatonCurry.png', 'Freelancer', 'Approved', 'UserRegisterFiles/pacyt@mailinator.comKeaton', '', ''),
(3, 'Baker', 'Christensen', 'Et voluptas ut digni', '20-Apr-1993', 'female', 'sucitimut@mailinator.com', 'Pa$$w0rd!', 'Nisi do delectus al', 'Eos explicabo Qui v', 'Enim fugiat est fug', 'Voluptatem laudantiu', 'Totam expedita esse', 'Maiores eius volupta', 'Autem minima et sunt', 'UserRegisterFiles/sucitimut@mailinator.comBaker/sucitimut@mailinator.comBaker.png', 'School ID', 'UserRegisterFiles/sucitimut@mailinator.comBaker/ID1BakerChristensen.png', 'National ID', 'UserRegisterFiles/sucitimut@mailinator.comBaker/ID2BakerChristensen.png', 'Freelancer', 'Approved', 'UserRegisterFiles/sucitimut@mailinator.comBaker', '', ''),
(4, 'Yasir', 'Anderson', 'Velit aut nostrum di', '13-Oct-1971', 'female', 'tuxetygup@mailinator.com', 'Pa$$w0rd!', 'Debitis dolor volupt', 'Sequi culpa ut est ', 'Earum enim aliquip v', 'Cupiditate quia pari', 'Aut pariatur In acc', 'Natus neque lorem ei', 'Anim ipsum molestia', 'UserRegisterFiles/tuxetygup@mailinator.comYasir/tuxetygup@mailinator.comYasir.png', 'Driving License', 'UserRegisterFiles/tuxetygup@mailinator.comYasir/ID1YasirAnderson.png', 'School ID', 'UserRegisterFiles/tuxetygup@mailinator.comYasir/ID2YasirAnderson.png', 'Freelancer', 'Approved', 'UserRegisterFiles/tuxetygup@mailinator.comYasir', '', ''),
(5, 'Claire', 'Anderson', 'Modi aliqua Fugit ', '06-Oct-1995', 'female', 'mevoxemevy@mailinator.com', 'Pa$$w0rd!', 'Sint dolor doloribus', 'Quia cillum inventor', 'Reiciendis porro pra', 'Quo in incidunt non', 'Adipisicing quidem s', 'Sit delectus odio q', 'Aperiam ut dolores s', 'UserRegisterFiles/mevoxemevy@mailinator.comClaire/mevoxemevy@mailinator.comClaire.png', 'Driving License', 'UserRegisterFiles/mevoxemevy@mailinator.comClaire/ID1ClaireAnderson.png', 'National ID', 'UserRegisterFiles/mevoxemevy@mailinator.comClaire/ID2ClaireAnderson.png', 'Freelancer', 'Declined', 'UserRegisterFiles/mevoxemevy@mailinator.comClaire', 'qiqidy', ''),
(6, 'Nevada', 'Church', 'Provident nostrud e', '21-Apr-2018', 'male', 'luqutaw@mailinator.com', 'Pa$$w0rd!', 'Eaque est quas enim ', 'Dignissimos molestia', 'Eveniet tenetur ex ', 'Aliquam et non lauda', NULL, NULL, NULL, 'UserRegisterFiles/luqutaw@mailinator.comNevada/luqutaw@mailinator.comNevada.png', 'School ID', 'UserRegisterFiles/luqutaw@mailinator.comNevada/ID1NevadaChurch.png', 'National ID', 'UserRegisterFiles/luqutaw@mailinator.comNevada/ID2NevadaChurch.png', 'Customer', 'Approved', 'UserRegisterFiles/luqutaw@mailinator.comNevada', 'mekotudyj', ''),
(7, 'Eliana', 'Kidd', 'Totam quia consequat', '18-Mar-2016', 'male', 'dulitoji@mailinator.com', 'Pa$$w0rd!', 'Quia nisi similique ', 'Ratione dolorem amet', 'In corrupti eius cu', 'Sed iusto error fugi', 'Vel earum perferendi', 'Veniam sit amet no', 'Ducimus beatae ipsu', 'UserRegisterFiles/dulitoji@mailinator.comEliana/dulitoji@mailinator.comEliana.png', 'School ID', 'UserRegisterFiles/dulitoji@mailinator.comEliana/ID1ElianaKidd.png', 'Driving License', 'UserRegisterFiles/dulitoji@mailinator.comEliana/ID2ElianaKidd.png', 'Freelancer', 'Approved', 'UserRegisterFiles/dulitoji@mailinator.comEliana', 'gavuby', ''),
(8, 'Lane', 'Hampton', 'Ullamco dolor eiusmo', '12-Dec-2019', 'female', 'puba@mailinator.com', 'Pa$$w0rd!', 'Dolorum ullamco omni', 'Nulla odio obcaecati', 'Eiusmod et quae sunt', 'Officiis qui dolor v', 'Quibusdam rem Nam pl', 'Incididunt similique', 'Ea ut et optio cumq', 'UserRegisterFiles/puba@mailinator.comLane/puba@mailinator.comLane.png', 'Driving License', 'UserRegisterFiles/puba@mailinator.comLane/ID1LaneHampton.png', 'School ID', 'UserRegisterFiles/puba@mailinator.comLane/ID2LaneHampton.png', 'Freelancer', 'Approved', 'UserRegisterFiles/puba@mailinator.comLane', 'humyqylax', ''),
(9, 'Malcolm', 'Casey', 'Inventore et asperio', '15-Jun-2003', 'female', 'jawi@mailinator.com', 'Pa$$w0rd!', 'Vero fuga Fuga Con', 'Odio sunt eu deserun', 'In elit quibusdam q', 'Dolores sed nostrum ', 'Voluptate in provide', 'Quisquam dolorem per', 'Duis cupidatat expli', 'UserRegisterFiles/jawi@mailinator.comMalcolm/jawi@mailinator.comMalcolm.png', 'Driving License', 'UserRegisterFiles/jawi@mailinator.comMalcolm/ID1MalcolmCasey.png', 'National ID', 'UserRegisterFiles/jawi@mailinator.comMalcolm/ID2MalcolmCasey.png', 'Freelancer', 'Approved', 'UserRegisterFiles/jawi@mailinator.comMalcolm', 'caxixosal', ''),
(10, 'JL', 'Manrique', 'Ipsum nesciunt magn', '24-Jan-2016', 'male', 'jimmanrique12@gmail.com', '1234', 'Tempore est accusa', 'Perspiciatis volupt', 'Alias quis illum vo', 'Quibusdam tempore o', 'Quidem in sed duis v', 'Atque aut laudantium', 'Illum velit odio ni', 'UserRegisterFiles/jimmanrique12@gmail.comJL/jimmanrique12@gmail.comJL.png', 'National ID', 'UserRegisterFiles/jimmanrique12@gmail.comJL/ID1JLManrique.png', 'School ID', 'UserRegisterFiles/jimmanrique12@gmail.comJL/ID2JLManrique.png', 'Freelancer', 'Approved', 'UserRegisterFiles/jimmanrique12@gmail.comJL', 'hikyjo', ''),
(11, 'Randall', 'Schroeder', 'Eos rerum pariatur', '06-Mar-2019', 'male', 'zuzy@mailinator.com', 'Pa$$w0rd!', 'Non occaecat ab dolo', 'Velit voluptatem el', 'Quo eligendi volupta', 'Nostrum provident s', 'Cillum similique fac', 'Ex et dolore dolore ', 'Necessitatibus nobis', 'UserRegisterFiles/zuzy@mailinator.comRandall/zuzy@mailinator.comRandall.png', 'Driving License', 'UserRegisterFiles/zuzy@mailinator.comRandall/ID1RandallSchroeder.png', 'Driving License', 'UserRegisterFiles/zuzy@mailinator.comRandall/ID2RandallSchroeder.png', 'Freelancer', 'Approved', 'UserRegisterFiles/zuzy@mailinator.comRandall', 'gowypox', ''),
(12, '123', '123', '123', '123', 'male', '123', '123', '123', '123', '123', '123', '123', '123', '123', 'UserRegisterFiles/123123/123123.png', 'National ID', 'UserRegisterFiles/123123/ID1123123.png', 'Driving License', 'UserRegisterFiles/123123/ID2123123.png', 'Freelancer', 'Declined', 'UserRegisterFiles/123123', 'asda', '123'),
(13, 'dgfdgd', 'dgfdfgd', 'dfgdfgdg', 'dgfdfgd', 'male', 'gfdgd', 'dgffdg', 'dgdfg', 'dgdfgd', 'dgdfgd', 'dfgdg', 'dgdfgd', 'dgdfg', 'dgdfgd', 'UserRegisterFiles/gfdgddgfdgd/gfdgddgfdgd.png', 'National ID', 'UserRegisterFiles/gfdgddgfdgd/ID1dgfdgddgfdfgd.png', 'National ID', 'UserRegisterFiles/gfdgddgfdgd/ID2dgfdgddgfdfgd.png', 'Freelancer', 'Declined', 'UserRegisterFiles/gfdgddgfdgd', 'dfgfdg', 'dgdfgd'),
(14, 'vbn', 'vbn', 'vbn', 'vbn', 'male', 'vbnn', '123', 'vbn', 'vbn', 'vbn', 'vbn', NULL, NULL, NULL, 'UserRegisterFiles/vbnnvbn/vbnnvbn.png', 'National ID', 'UserRegisterFiles/vbnnvbn/ID1vbnvbn.png', 'National ID', 'UserRegisterFiles/vbnnvbn/ID2vbnvbn.png', 'Customer', 'Declined', 'UserRegisterFiles/vbnnvbn', 'vbnn', 'vbn'),
(15, 'Razel John', 'Ruegas', 'Dumlao', 'June 19, 2001', 'male', 'r.ruegas123@gmail.com', '12345', '09614410403', 'Dinalupihan', 'Pogi', 'English', NULL, NULL, NULL, 'UserRegisterFiles/r.ruegas123@gmail.comRazel John/r.ruegas123@gmail.comRazel John.png', 'National ID', 'UserRegisterFiles/r.ruegas123@gmail.comRazel John/ID1Razel JohnRuegas.png', 'Driving License', 'UserRegisterFiles/r.ruegas123@gmail.comRazel John/ID2Razel JohnRuegas.png', 'Customer', 'Approved', 'UserRegisterFiles/r.ruegas123@gmail.comRazel John', 'Astozel', 'r.ruegas123@gmail.com');

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
  `AgreementContract` varchar(255) DEFAULT NULL,
  `FileMailingAddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactionrecords`
--

INSERT INTO `transactionrecords` (`transactionID`, `OwnerEmail`, `ClientEmail`, `ServiceID`, `ServiceTitle`, `Category`, `clientNotes`, `transactionstartDate`, `transactionFinishedDate`, `availedPlan`, `Price`, `TransactionStatus`, `FilesDirectory`, `AgreementContract`, `FileMailingAddress`) VALUES
(1, 'pacyt@mailinator.com', 'luqutaw@mailinator.com', '9', 'Robert Vinson', 'Graphics and Design', 'ewan kahit ano?', '1/1/2022', '1/1/2022', 'Basic Plan', 'Php 92.00', 'Pending', NULL, 'Agree', ''),
(2, 'pacyt@mailinator.com', 'luqutaw@mailinator.com', '9', 'Robert Vinson', 'Graphics and Design', 'dfgdsgsdg', '1/1/2022', '1/12/2022', 'Premium Plan', 'Php 688.00', 'Pending', NULL, 'Agree', ''),
(3, 'pacyt@mailinator.com', 'luqutaw@mailinator.com', '9', 'Robert Vinson', 'Graphics and Design', 'hfghfdf', '1/1/2022', '1/12/2022', 'Standard Plan', 'Php 135.00', 'Pending', NULL, 'Agree', ''),
(4, 'pacyt@mailinator.com', 'dulitoji@mailinator.com', '9', 'Robert Vinson', 'Graphics and Design', 'SAFSDA', '1/1/2022', '1/12/2022', 'Basic Plan', 'Php 92.00', 'Pending', NULL, 'Agree', ''),
(5, 'dulitoji@mailinator.com', 'dulitoji@mailinator.com', '10', 'Shana Sheppard', 'Music and Audio', 'Possimus quae nemo ', '1/1/2022', '06-Mar-1985', 'Standard Plan', 'Php 18933.00', 'Pending', NULL, 'Agree', ''),
(6, 'jimmanrique12@gmail.com', 'jimmanrique12@gmail.com', '12', 'Tobias Cantrell', 'Music and Audio', 'sadsad', '1/3/2022', '1/26/2022', 'Standard Plan', 'Php 877.00', 'Delivered', NULL, 'Agree', ''),
(7, 'pacyt@mailinator.com', 'jimmanrique12@gmail.com', '8', 'Robert Vinson', 'Graphics and Design', 'sdaadada', '1/3/2022', '1/12/2022', 'Basic Plan', 'Php 92.00', 'Pending', NULL, 'Agree', ''),
(8, 'jimmanrique12@gmail.com', 'jimmanrique12@gmail.com', '12', 'Tobias Cantrell', 'Music and Audio', 'ASDASDA', '1/3/2022', '1/1/2022', 'Standard Plan', 'Php 877.00', 'Delivered', NULL, 'Agree', 'jimmanrique12@gmail.com'),
(9, 'jimmanrique12@gmail.com', 'jimmanrique12@gmail.com', '12', 'Tobias Cantrell', 'Music and Audio', 'ewan kahit ano?', '1/3/2022', '1/1/2022', 'Premium Plan', 'Php 456.00', 'Canceled', NULL, 'Agree', 'jimmanrique12@gmail.com'),
(10, 'jimmanrique12@gmail.com', 'jimmanrique12@gmail.com', '12', 'Tobias Cantrell', 'Music and Audio', 'Ipsum aliqua Conseq', '1/3/2022', '14-Apr-2000', 'Basic Plan', 'Php 506.00', 'Pending', NULL, 'Agree', 'Cupiditate nemo arch'),
(11, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'Tobias Cantrell', 'Music and Audio', 'dfgdsgsdg', '1/3/2022', '1/1/2022', 'Premium Plan', 'Php 456.00', 'Canceled', NULL, 'Agree', 'grgafsdfefsc'),
(12, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'Tobias Cantrell', 'Music and Audio', 'sadsadasd', '1/3/2022', '1/12/2022', 'Standard Plan', 'Php 877.00', 'Delivered', NULL, 'Agree', 'wqqwdqwdwq'),
(13, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'Tobias Cantrell', 'Music and Audio', 'asdsada', '1/3/2022', '1/12/2022', 'Standard Plan', 'Php 877.00', 'Delivered', NULL, 'Agree', 'sdfsaf f'),
(14, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'Tobias Cantrell', 'Music and Audio', 'ewan kahit ano?', '1/3/2022', '1/1/2022', 'Premium Plan', 'Php 456.00', 'Delivered', NULL, 'Agree', 'luqutaw@mailinator.com'),
(15, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'Tobias Cantrell', 'Music and Audio', 'Voluptatem voluptate', '1/4/2022', '24-Nov-2018', 'Basic Plan', 'Php 506.00', 'Delivered', NULL, 'Agree', 'Perferendis nemo ali'),
(16, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'Tobias Cantrell', 'Music and Audio', 'Vero temporibus perf', '1/4/2022', '02-May-1997', 'Premium Plan', 'Php 456.00', 'Pending', NULL, 'Agree', 'Dolores qui in et la'),
(17, 'jimmanrique12@gmail.com', 'r.ruegas123@gmail.com', '12', 'Tobias Cantrell', 'Music and Audio', 'Bangis', '1/4/2022', '', 'Standard Plan', 'Php 877.00', 'Delivered', NULL, 'Agree', 'r.ruegas123@gmail.com'),
(18, 'jimmanrique12@gmail.com', 'r.ruegas123@gmail.com', '12', 'Tobias Cantrell', 'Music and Audio', '', '1/4/2022', '', 'Basic Plan', 'Php 506.00', 'Canceled', NULL, '', 'r.ruegas123@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`MessageID`);

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
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `MessageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `servicesinfo`
--
ALTER TABLE `servicesinfo`
  MODIFY `ServiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `signupverification`
--
ALTER TABLE `signupverification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transactionrecords`
--
ALTER TABLE `transactionrecords`
  MODIFY `transactionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
