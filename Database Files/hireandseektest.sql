-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 02:09 PM
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
('befunucy@mailinator.com', 'Charde', 'Daniel', 'Piper Tillman', '2010-07-05', 'male', 'Pa$$w0rd!', 'Numquam totam sit d', 'Deleniti exercitatio', 'Sed magni enim non s', 'Molestiae ea facilis', 'Aut quasi sint in d', 'Non cupidatat magnam', 'Ullamco ad deserunt ', 'UserRegisterFiles/befunucy@mailinator.comCharde/befunucy@mailinator.comCharde.png', 'National ID', 'UserRegisterFiles/befunucy@mailinator.comCharde/ID1ChardeDaniel.png', 'Driving License', 'UserRegisterFiles/befunucy@mailinator.comCharde/ID2ChardeDaniel.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/befunucy@mailinator.comCharde', '', '', 'wazolylix', 'vigyk@mailinator.com'),
('caroclyra0@gmail.com', 'Lyra', 'Caroc', 'Barbero', '', '', 'LYRAlyra', '09772450961', '#116 Mabini Street', '', '', '', '', '', 'UserRegisterFiles/caroclyra0@gmail.comLyra/caroclyra0@gmail.comLyra.png', 'National ID', 'UserRegisterFiles/caroclyra0@gmail.comLyra/ID1LyraCaroc.png', 'School ID', 'UserRegisterFiles/caroclyra0@gmail.comLyra/ID2LyraCaroc.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/caroclyra0@gmail.comLyra', '', '', 'Lyralyra', 'caroclyra0@gmail.com'),
('dulitoji@mailinator.com', 'Eliana', 'Kidd', 'Totam quia consequat', '18-Mar-2016', 'male', 'Pa$$w0rd!', 'Quia nisi similique ', 'Ratione dolorem amet', 'In corrupti eius cu', 'Sed iusto error fugi', 'Vel earum perferendi', 'Veniam sit amet no', 'Ducimus beatae ipsu', 'UserRegisterFiles/dulitoji@mailinator.comEliana/dulitoji@mailinator.comEliana.png', 'School ID', 'UserRegisterFiles/dulitoji@mailinator.comEliana/ID1ElianaKidd.png', 'Driving License', 'UserRegisterFiles/dulitoji@mailinator.comEliana/ID2ElianaKidd.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/dulitoji@mailinator.comEliana', 'dulitojiElianaTransactions', 'dulitojiElianaInbox', 'gavuby', ''),
('hireandseekdemo@gmail.com', 'Barbara', 'Macias', 'Priscilla Alford', '1979-03-02', 'female', 'Pa$$w0rd!', 'Dolor recusandae No', 'Ut quis laborum Qui', 'Delectus nemo omnis', 'Quaerat sint laborio', 'Vero facilis eum eum', 'Corporis eveniet of', 'Impedit dolor nisi ', 'UserRegisterFiles/hireandseekdemo@gmail.comBarbara/hireandseekdemo@gmail.comBarbara.png', 'National ID', 'UserRegisterFiles/hireandseekdemo@gmail.comBarbara/ID1BarbaraMacias.png', 'PhilHealth ID', 'UserRegisterFiles/hireandseekdemo@gmail.comBarbara/ID2BarbaraMacias.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/hireandseekdemo@gmail.comBarbara', '', '', 'josiki', 'hireandseekdemo@gmail.com'),
('hulizuxe@mailinator.com', 'Lydia', 'Guerra', 'Iure laborum Tempor', '27-Feb-1982', 'female', 'Pa$$w0rd!', 'Eos dolor at veniam', 'Alias est exercitati', 'Omnis praesentium ei', 'Et ad in harum hic s', 'Voluptas voluptatem', 'Proident at consect', 'Commodo nisi neque n', 'UserRegisterFiles/hulizuxe@mailinator.comLydia/hulizuxe@mailinator.comLydia.png', 'National ID', 'UserRegisterFiles/hulizuxe@mailinator.comLydia/ID1LydiaGuerra.png', 'National ID', 'UserRegisterFiles/hulizuxe@mailinator.comLydia/ID2LydiaGuerra.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/hulizuxe@mailinator.comLydia', '', '', 'lizesa', 'refisaxep@mailinator.com'),
('jawi@mailinator.com', 'Malcolm', 'Casey', 'Inventore et asperio', '15-Jun-2003', 'female', 'Pa$$w0rd!', 'Vero fuga Fuga Con', 'Odio sunt eu deserun', 'In elit quibusdam q', 'Dolores sed nostrum ', 'Voluptate in provide', 'Quisquam dolorem per', 'Duis cupidatat expli', 'UserRegisterFiles/jawi@mailinator.comMalcolm/jawi@mailinator.comMalcolm.png', 'Driving License', 'UserRegisterFiles/jawi@mailinator.comMalcolm/ID1MalcolmCasey.png', 'National ID', 'UserRegisterFiles/jawi@mailinator.comMalcolm/ID2MalcolmCasey.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/jawi@mailinator.comMalcolm', 'jawiMalcolmTransactions', 'jawiMalcolmInbox', 'caxixosal', ''),
('jimmanrique12@gmail.com', 'JL', 'Manrique', 'Ipsum nesciunt magn', '24-Jan-2016', 'male', '1234', 'Tempore est accusa', 'Perspiciatis volupt', 'Alias quis illum vo', 'Quibusdam tempore o', 'Quidem in sed duis v', 'Atque aut laudantium', 'Illum velit odio ni', 'UserRegisterFiles/jimmanrique12@gmail.comJL/jimmanrique12@gmail.comJL.png', 'National ID', 'UserRegisterFiles/jimmanrique12@gmail.comJL/ID1JLManrique.png', 'School ID', 'UserRegisterFiles/jimmanrique12@gmail.comJL/ID2JLManrique.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/jimmanrique12@gmail.comJL', '', '', 'hikyjo', 'jimmanrique12@gmail.com'),
('jirode@mailinator.com', 'Damon', 'Reid', 'Ut ullamco non quia ', '06-Apr-2020', 'male', 'Pa$$w0rd!', 'Adipisicing omnis ha', 'Magnam consectetur ', 'Perferendis commodi ', 'Iusto esse blanditii', 'Aspernatur eos dign', 'Ipsa voluptas tempo', 'Deserunt iusto amet', 'UserRegisterFiles/jirode@mailinator.comDamon/jirode@mailinator.comDamon.png', 'Driving License', 'UserRegisterFiles/jirode@mailinator.comDamon/ID1DamonReid.png', 'School ID', 'UserRegisterFiles/jirode@mailinator.comDamon/ID2DamonReid.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/jirode@mailinator.comDamon', '', '', 'miharyfe', 'rixuxysux@mailinator.com'),
('jubum@mailinator.com', 'Chandler', 'Duffy', 'Excepturi laborum nu', '27-Feb-1984', 'female', 'Pa$$w0rd!', 'Irure nulla veniam ', 'Harum porro eos volu', 'Laboris quis qui dol', 'Autem minus quam sit', 'Rerum eius nisi atqu', 'A qui quibusdam pers', 'Aut id mollitia neq', 'UserRegisterFiles/jubum@mailinator.comChandler/jubum@mailinator.comChandler.png', 'Driving License', 'UserRegisterFiles/jubum@mailinator.comChandler/ID1ChandlerDuffy.png', 'Driving License', 'UserRegisterFiles/jubum@mailinator.comChandler/ID2ChandlerDuffy.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/jubum@mailinator.comChandler', '', '', 'xyqozymop', 'vubitixiv@mailinator.com'),
('lockon6stratos@gmail.com', 'Jester John', 'Manrique', 'D.', 'April 5, 2000', 'male', 'Dynames24', '09672592278', 'Mabatang', 'Pogi', 'Filipino', 'Macho Dancer', 'College', 'Handjob', 'UserRegisterFiles/lockon6stratos@gmail.comJester John/lockon6stratos@gmail.comJester John.png', 'School ID', 'UserRegisterFiles/lockon6stratos@gmail.comJester John/ID1Jester JohnManrique.png', 'School ID', 'UserRegisterFiles/lockon6stratos@gmail.comJester John/ID2Jester JohnManrique.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/lockon6stratos@gmail.comJester John', '', '', 'Jestee', 'lockon6stratos@gmail.com'),
('luqutaw@mailinator.com', 'Nevada', 'Church', 'Provident nostrud e', '21-Apr-2018', 'male', '1234', 'Eaque est quas enim ', 'Dignissimos molestia', 'Eveniet tenetur ex ', 'Aliquam et non lauda', '', '', '', 'UserRegisterFiles/luqutaw@mailinator.comNevada/luqutaw@mailinator.comNevada.png', 'School ID', 'UserRegisterFiles/luqutaw@mailinator.comNevada/ID1NevadaChurch.png', 'National ID', 'UserRegisterFiles/luqutaw@mailinator.comNevada/ID2NevadaChurch.png', 'Customer', 'Level 1', 'UserRegisterFiles/luqutaw@mailinator.comNevada', 'luqutawNevadaTransactions', 'luqutawNevadaInbox', 'mekotudyj', ''),
('misofu@mailinator.com', 'Tatyana', 'George', 'September Daniels', '2009-01-14', 'female', 'Pa$$w0rd!', 'Omnis qui reprehende', 'Nihil est omnis dol', 'Adipisci repudiandae', 'Tempora est dolorum', 'Non autem excepteur ', 'Incididunt id volupt', 'Praesentium saepe as', 'UserRegisterFiles/misofu@mailinator.comTatyana/misofu@mailinator.comTatyana.png', 'Driving License', 'UserRegisterFiles/misofu@mailinator.comTatyana/ID1TatyanaGeorge.png', 'National ID', 'UserRegisterFiles/misofu@mailinator.comTatyana/ID2TatyanaGeorge.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/misofu@mailinator.comTatyana', '', '', 'sihumanoky', 'zaryc@mailinator.com'),
('pacyt@mailinator.com', 'Keaton', 'Curry', 'Dolorem omnis nostru', '13-Nov-1981', 'female', 'Pa$$w0rd!', 'Nihil duis aliquid s', 'Deserunt molestiae o', 'Sunt aperiam minim ', 'Voluptates in quis r', 'Exercitation atque f', 'Quas consequuntur et', 'Rerum delectus temp', 'UserRegisterFiles/pacyt@mailinator.comKeaton/pacyt@mailinator.comKeaton.png', 'National ID', 'UserRegisterFiles/pacyt@mailinator.comKeaton/ID1KeatonCurry.png', 'School ID', 'UserRegisterFiles/pacyt@mailinator.comKeaton/ID2KeatonCurry.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/pacyt@mailinator.comKeaton', 'pacytKeatonTransactions', 'pacytKeatonInbox', '', ''),
('puba@mailinator.com', 'Lane', 'Hampton', 'Ullamco dolor eiusmo', '12-Dec-2019', 'female', 'Pa$$w0rd!', 'Dolorum ullamco omni', 'Nulla odio obcaecati', 'Eiusmod et quae sunt', 'Officiis qui dolor v', 'Quibusdam rem Nam pl', 'Incididunt similique', 'Ea ut et optio cumq', 'UserRegisterFiles/puba@mailinator.comLane/puba@mailinator.comLane.png', 'Driving License', 'UserRegisterFiles/puba@mailinator.comLane/ID1LaneHampton.png', 'School ID', 'UserRegisterFiles/puba@mailinator.comLane/ID2LaneHampton.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/puba@mailinator.comLane', 'pubaLaneTransactions', 'pubaLaneInbox', 'humyqylax', ''),
('r.ruegas123@gmail.com', 'Razel John', 'Ruegas', 'Dumlao', 'June 19, 2001', 'male', '12345', '09614410403', 'Dinalupihan', 'Pogi', 'English', '', '', '', 'UserRegisterFiles/r.ruegas123@gmail.comRazel John/r.ruegas123@gmail.comRazel John.png', 'National ID', 'UserRegisterFiles/r.ruegas123@gmail.comRazel John/ID1Razel JohnRuegas.png', 'Driving License', 'UserRegisterFiles/r.ruegas123@gmail.comRazel John/ID2Razel JohnRuegas.png', 'Customer', 'Level 1', 'UserRegisterFiles/r.ruegas123@gmail.comRazel John', '', '', 'Astozel', 'r.ruegas123@gmail.com'),
('rdbperez@bpsu.edu.ph', 'Baroque', 'Sakalam', 'Zhong', '07-16-2001', 'male', 'Jerusalem30', '09021064019', 'Somewhere in Bataan', 'Dili ko alam', 'Tagalog', 'Student', 'Undergraduate', 'Computer', 'UserRegisterFiles/rdbperez@bpsu.edu.phBaroque/rdbperez@bpsu.edu.phBaroque.png', 'School ID', 'UserRegisterFiles/rdbperez@bpsu.edu.phBaroque/ID1BaroqueSakalam.png', 'School ID', 'UserRegisterFiles/rdbperez@bpsu.edu.phBaroque/ID2BaroqueSakalam.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/rdbperez@bpsu.edu.phBaroque', '', '', 'xsade', ''),
('rjdruegas@bpsu.edu.ph', 'Razel John', 'Ruegas', 'Dumlao', 'June 19, 2001', 'male', '12345', '09614410403', 'Dinalupihan', 'Pogi', 'English', 'Student', 'College', 'Programming', 'UserRegisterFiles/rjdruegas@bpsu.edu.phRazel John/rjdruegas@bpsu.edu.phRazel John.png', 'Driving License', 'UserRegisterFiles/rjdruegas@bpsu.edu.phRazel John/ID1Razel JohnRuegas.png', 'National ID', 'UserRegisterFiles/rjdruegas@bpsu.edu.phRazel John/ID2Razel JohnRuegas.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/rjdruegas@bpsu.edu.phRazel John', '', '', 'Pogi', 'rjdruegas@bpsu.edu.ph'),
('sucitimut@mailinator.com', 'Baker', 'Christensen', 'Et voluptas ut digni', '20-Apr-1993', 'female', 'Pa$$w0rd!', 'Nisi do delectus al', 'Eos explicabo Qui v', 'Enim fugiat est fug', 'Voluptatem laudantiu', 'Totam expedita esse', 'Maiores eius volupta', 'Autem minima et sunt', 'UserRegisterFiles/sucitimut@mailinator.comBaker/sucitimut@mailinator.comBaker.png', 'School ID', 'UserRegisterFiles/sucitimut@mailinator.comBaker/ID1BakerChristensen.png', 'National ID', 'UserRegisterFiles/sucitimut@mailinator.comBaker/ID2BakerChristensen.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/sucitimut@mailinator.comBaker', 'sucitimutBakerTransactions', 'sucitimutBakerInbox', '', ''),
('tuxetygup@mailinator.com', 'Yasir', 'Anderson', 'Velit aut nostrum di', '13-Oct-1971', 'female', 'Pa$$w0rd!', 'Debitis dolor volupt', 'Sequi culpa ut est ', 'Earum enim aliquip v', 'Cupiditate quia pari', 'Aut pariatur In acc', 'Natus neque lorem ei', 'Anim ipsum molestia', 'UserRegisterFiles/tuxetygup@mailinator.comYasir/tuxetygup@mailinator.comYasir.png', 'Driving License', 'UserRegisterFiles/tuxetygup@mailinator.comYasir/ID1YasirAnderson.png', 'School ID', 'UserRegisterFiles/tuxetygup@mailinator.comYasir/ID2YasirAnderson.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/tuxetygup@mailinator.comYasir', 'tuxetygupYasirTransactions', 'tuxetygupYasirInbox', '', ''),
('zuzy@mailinator.com', 'Randall', 'Schroeder', 'Eos rerum pariatur', '06-Mar-2019', 'male', 'Pa$$w0rd!', 'Non occaecat ab dolo', 'Velit voluptatem el', 'Quo eligendi volupta', 'Nostrum provident s', 'Cillum similique fac', 'Ex et dolore dolore ', 'Necessitatibus nobis', 'UserRegisterFiles/zuzy@mailinator.comRandall/zuzy@mailinator.comRandall.png', 'Driving License', 'UserRegisterFiles/zuzy@mailinator.comRandall/ID1RandallSchroeder.png', 'Driving License', 'UserRegisterFiles/zuzy@mailinator.comRandall/ID2RandallSchroeder.png', 'Freelancer', 'Level 1', 'UserRegisterFiles/zuzy@mailinator.comRandall', '', '', 'gowypox', '');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userpassword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`userID`, `username`, `userpassword`) VALUES
(0, 'admin1', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `customerrating`
--

CREATE TABLE `customerrating` (
  `RatingID` int(11) NOT NULL,
  `ServiceID` int(11) DEFAULT NULL,
  `AccountEmail` varchar(255) DEFAULT NULL,
  `Rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerrating`
--

INSERT INTO `customerrating` (`RatingID`, `ServiceID`, `AccountEmail`, `Rating`) VALUES
(1, 0, '', 0),
(2, 0, '', 0),
(3, 10, 'luqutaw@mailinator.com', 3),
(4, 12, 'luqutaw@mailinator.com', 2),
(5, 10, 'luqutaw@mailinator.com', 5),
(6, 10, 'luqutaw@mailinator.com', 3),
(7, 11, 'luqutaw@mailinator.com', 2),
(8, 10, 'luqutaw@mailinator.com', 2),
(9, 10, 'luqutaw@mailinator.com', 2),
(10, 7, 'jimmanrique12@gmail.com', 3),
(11, 7, 'jimmanrique12@gmail.com', 3),
(12, 7, 'jimmanrique12@gmail.com', 3),
(13, 7, 'jimmanrique12@gmail.com', 4),
(14, 7, 'jimmanrique12@gmail.com', 3),
(15, 7, 'jimmanrique12@gmail.com', 3),
(16, 7, 'jimmanrique12@gmail.com', 4),
(17, 7, 'jimmanrique12@gmail.com', 4),
(18, 7, 'jimmanrique12@gmail.com', 4),
(19, 7, 'jimmanrique12@gmail.com', 4),
(20, 7, 'jimmanrique12@gmail.com', 4),
(21, 7, 'jimmanrique12@gmail.com', 4),
(22, 7, 'jimmanrique12@gmail.com', 3),
(23, 7, 'jimmanrique12@gmail.com', 2),
(24, 7, 'jimmanrique12@gmail.com', 2),
(25, 7, 'jimmanrique12@gmail.com', 5),
(26, 7, 'jimmanrique12@gmail.com', 3),
(27, 12, 'luqutaw@mailinator.com', 5),
(28, 7, 'jimmanrique12@gmail.com', 5),
(29, 7, 'jimmanrique12@gmail.com', 5),
(30, 16, 'jimmanrique12@gmail.com', 5),
(31, 16, 'jimmanrique12@gmail.com', 5),
(32, 16, 'jimmanrique12@gmail.com', 5),
(33, 16, 'jimmanrique12@gmail.com', 5),
(34, 11, 'luqutaw@mailinator.com', 4),
(35, 7, 'luqutaw@mailinator.com', 2),
(36, 7, 'luqutaw@mailinator.com', 3),
(37, 9, 'luqutaw@mailinator.com', 2),
(38, 16, 'luqutaw@mailinator.com', 4),
(39, 14, 'luqutaw@mailinator.com', 3),
(40, 8, 'luqutaw@mailinator.com', 4),
(41, 17, 'luqutaw@mailinator.com', 1);

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
  `MessageBody` varchar(6000) DEFAULT NULL,
  `MessageStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`MessageID`, `SenderEmail`, `RecieverEmail`, `MessageDate`, `MessageTime`, `Subject`, `MessageBody`, `MessageStatus`) VALUES
(1, 'dulitoji@mailinator.com', 'Aut quia ut laborios', '1 / 25 / 2022', '17 : 25', 'Doloribus est volupt', 'Debitis eius iure no', 'New'),
(2, 'dulitoji@mailinator.com', 'Dolore non quaerat a', '1 / 25 / 2022', '17 : 26', 'Nisi veritatis possi', 'Animi quis tempor a', 'New'),
(3, 'dulitoji@mailinator.com', 'Lyra', '1 / 26 / 2022', '5 : 48', 'Love', ' Iloveyouuuu ', 'New'),
(4, 'jimmanrique12@gmail.com', 'Perspiciatis pariat', '1 / 27 / 2022', '3 : 17', 'Do reiciendis invent', 'Quidem fuga Tempor ', 'New'),
(5, 'jimmanrique12@gmail.com', 'jimmanrique12@gmail.com', '1 / 27 / 2022', '3 : 22', 'test', 'testing.. testing.. texting ', 'Read'),
(6, 'jimmanrique12@gmail.com', 'jimmanrique12@gmail.com', '1 / 27 / 2022', '7 : 10', 'testing ulit', 'testing testing texting\r\n ', 'Read'),
(7, 'luqutaw@mailinator.com', 'jimmanrique12@gmail.com', '1 / 27 / 2022', '12 : 12', 'testing', ' sdfdsfasg ht', 'Read'),
(8, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '1 / 27 / 2022', '16 : 37', 'Hi!', ' hello', 'Read'),
(9, 'jimmanrique12@gmail.com', 'r.ruegas123@gmail.com', '1 / 27 / 2022', '16 : 42', 'Hi', 'Testing testing testing ', 'Read'),
(10, 'r.ruegas123@gmail.com', 'jimmanrique12@gmail.com', '1 / 27 / 2022', '16 : 42', 'Yo', 'Gumanaaaa ', 'Read'),
(11, 'jimmanrique12@gmail.com', 'r.ruegas123@gmail.com', '1 / 27 / 2022', '16 : 42', 'angas', ' HAHAHAHAHAHAHAHA gagi nagana, angas pala', 'New'),
(12, 'jimmanrique12@gmail.com', 'rdbperez@bpsu.edu.ph', '1 / 28 / 2022', '5 : 34', 'Hi, Nakikita mo?', 'testing ng messaging feature', 'Read'),
(14, 'jimmanrique12@gmail.com', 'jimmanrique12@gmail.com', '1 / 29 / 2022', '3 : 27', 'Tobias Cantrell', 'testing this', 'Read'),
(15, 'jimmanrique12@gmail.com', 'jimmanrique12@gmail.com', '1 / 29 / 2022', '4 : 57', 'testing ulit', ' Bagong testing ulit', 'Read'),
(16, 'jimmanrique12@gmail.com', 'jimmanrique12@gmail.com', '1 / 30 / 2022', '4 : 47', 'Delilah Vargas', 'testing', 'Read'),
(17, 'jimmanrique12@gmail.com', 'jimmanrique12@gmail.com', '1 / 30 / 2022', '7 : 40', 'testing ulit', ' dgfdsgsdg', 'Read'),
(18, 'jimmanrique12@gmail.com', 'r.ruegas123@gmail.com', '1 / 30 / 2022', '7 : 40', 'Yo', ' testing ng messages', 'Read'),
(19, 'jimmanrique12@gmail.com', 'jimmanrique12@gmail.com', '1 / 30 / 2022', '8 : 39', 'Delilah Vargas', ' Testing the message feature again ', 'Read'),
(20, 'jimmanrique12@gmail.com', 'r.ruegas123@gmail.com', '1 / 30 / 2022', '10 : 9', 'Hi', ' tingin ko pwede na mag gawa ng buong conversation dito HAHAHA', 'Read'),
(21, 'luqutaw@mailinator.com', 'jimmanrique12@gmail.com', '1 / 30 / 2022', '10 : 14', 'Hi!', ' Hi', 'Read'),
(22, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '1 / 30 / 2022', '10 : 14', 'Hi!', ' Hello', 'Read'),
(23, 'luqutaw@mailinator.com', 'jimmanrique12@gmail.com', '1 / 30 / 2022', '10 : 14', 'Hi!', ' Testing this messaging feature', 'Read'),
(24, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '1 / 30 / 2022', '10 : 14', 'Hi!', ' it is working', 'Read'),
(25, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '1 / 30 / 2022', '10 : 15', 'New Subject', ' Trying new subject, can you reply?', 'Read'),
(26, 'luqutaw@mailinator.com', 'jimmanrique12@gmail.com', '1 / 30 / 2022', '10 : 15', 'New Subject', ' yes, i can', 'Read'),
(27, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '1 / 30 / 2022', '10 : 16', 'New Subject', ' this message will automatically update when received', 'Read'),
(28, 'jimmanrique12@gmail.com', 'jimmanrique12@gmail.com', '1 / 30 / 2022', '10 : 47', 'Kiayada Wood', 'testing messaging from avail service', 'Read'),
(29, 'jimmanrique12@gmail.com', 'dulitoji@mailinator.com', '1 / 30 / 2022', '10 : 56', 'Kiayada Wood', 'testing messaging from avail service', 'Read'),
(30, 'luqutaw@mailinator.com', 'jimmanrique12@gmail.com', '1 / 30 / 2022', '12 : 32', 'I will edit your videos', 'can you lower your price?', 'Read'),
(31, 'luqutaw@mailinator.com', 'jimmanrique12@gmail.com', '1 / 30 / 2022', '12 : 35', 'I will edit your videos', ' Please?', 'Read'),
(32, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '1 / 30 / 2022', '12 : 35', 'I will edit your videos', ' No Way!', 'Read'),
(33, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '1 / 30 / 2022', '12 : 36', 'I will edit your videos', ' 599 is already low', 'Read'),
(34, 'luqutaw@mailinator.com', 'jimmanrique12@gmail.com', '01/30/2022', '1:9', 'I will edit your videos', 'try', 'Read'),
(35, 'luqutaw@mailinator.com', 'jimmanrique12@gmail.com', '', '', 'I will edit your videos', ' jhfgjfgjk', 'Read'),
(36, 'luqutaw@mailinator.com', 'jimmanrique12@gmail.com', '01/30/2022', '1:27', 'I will edit your videos', ' uiouoiu', 'Read'),
(37, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '02/01/2022', '10:27', 'I will edit your videos', ' testing again', 'Read'),
(38, 'luqutaw@mailinator.com', 'jimmanrique12@gmail.com', '02/01/2022', '10:28', 'I will edit your videos', ' dsgsdfgdgsd', 'Read'),
(39, 'luqutaw@mailinator.com', 'jimmanrique12@gmail.com', '02/01/2022', '10:32', 'I will edit your videos', ' ', 'Read'),
(40, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '02/01/2022', '10:35', 'I will edit your videos', ' fdhgty', 'Read'),
(41, 'luqutaw@mailinator.com', 'jimmanrique12@gmail.com', '02/01/2022', '15:16', 'I will edit your videos', ' YO, dimla kita mo?', 'Read'),
(42, 'hireandseekdemo@gmail.com', 'jimmanrique12@gmail.com', '02/01/2022', '21:17', 'testing ulit', ' sdfsafaf', 'Read'),
(43, 'jimmanrique12@gmail.com', 'caroclyra0@gmail.com', '02/01/2022', '22:39', 'Babeee kita mo?', ' Babeeee, kita moooo? ', 'Read'),
(44, 'caroclyra0@gmail.com', 'jimmanrique12@gmail.com', '02/01/2022', '22:38', 'Babeee kita mo?', 'uu babee🤭', 'Read'),
(45, 'jimmanrique12@gmail.com', 'caroclyra0@gmail.com', '02/01/2022', '22:41', 'Babeee kita mo?', ' Halaaaaa hahahahahaha', 'Read'),
(46, 'jimmanrique12@gmail.com', 'caroclyra0@gmail.com', '02/01/2022', '22:42', 'Babeee kita mo?', ' real time lumalabas message sayo babe? di need irefresh?', 'Read'),
(47, 'jimmanrique12@gmail.com', 'caroclyra0@gmail.com', '02/01/2022', '22:42', 'Iloveyou', ' Iloveyousomuch, Babe koooo', 'Read'),
(48, 'caroclyra0@gmail.com', 'jimmanrique12@gmail.com', '02/01/2022', '22:44', 'Iloveyou', ' Iloveyoutooo', 'Read'),
(49, 'jimmanrique12@gmail.com', 'caroclyra0@gmail.com', '02/01/2022', '22:44', '', ' HAHAHA naeexcite ako kasi ginagamit natin gawa koooo', 'Read'),
(50, 'jimmanrique12@gmail.com', 'caroclyra0@gmail.com', '02/01/2022', '22:45', '', ' Iloveyousomuch, Lyra kooooo', 'Read'),
(51, 'caroclyra0@gmail.com', 'jimmanrique12@gmail.com', '02/01/2022', '22:48', 'Iloveyou', ' Iloveyoutooo', 'Read'),
(52, 'caroclyra0@gmail.com', 'jimmanrique12@gmail.com', '02/01/2022', '22:51', 'Iloveyou', ' Iloveyousomuchmoree', 'Read'),
(53, 'luqutaw@mailinator.com', 'jimmanrique12@gmail.com', '02/02/2022', '20:45', 'I will edit your videos', 'testing this shit out', 'Read'),
(54, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '02/02/2022', '20:45', 'I will edit your videos', ' it works, you monster', 'Read'),
(55, 'luqutaw@mailinator.com', 'jimmanrique12@gmail.com', '02/02/2022', '20:52', 'krazy beats for krazy people', 'Testing this shit now noh', 'Read');

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
  `ServiceTotalRatings` double(6,1) DEFAULT NULL,
  `ServiceCommentsTABLE` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `Banner1Path` varchar(1000) NOT NULL,
  `Banner2Path` varchar(1000) NOT NULL,
  `Banner3Path` varchar(1000) NOT NULL,
  `GcashNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicesinfo`
--

INSERT INTO `servicesinfo` (`ServiceID`, `ServiceTitle`, `ServiceOwnerEmail`, `ServiceOwnerInbox`, `AccountLevel`, `ServiceOwnerUserName`, `ServiceFilesPath`, `ServiceDescription`, `ServiceBasicPlanDescription`, `ServiceBasicPlanPrice`, `ServiceStandardPlanDescription`, `ServiceStandardPlanPrice`, `ServicePremiumPlanDescription`, `ServicePremiumPlanPrice`, `Service5StarRatings`, `Service4StarRatings`, `Service3StarRatings`, `Service2StarRatings`, `Service1StarRatings`, `ServiceTotalRatings`, `ServiceCommentsTABLE`, `category`, `Banner1Path`, `Banner2Path`, `Banner3Path`, `GcashNumber`) VALUES
(7, 'Kiayada Wood', 'dulitoji@mailinator.com', 'dulitoji@mailinator.comElianaInbox', 'Level 1', '', 'ServicesFiles/Kiayada Wood.dulitoji@mailinator.com', 'Nisi ut eiusmod aute', 'Vel qui enim accusan', '91', 'Facilis doloribus do', '498', 'Ipsum ullamco culpa', '302', '4', '8', '0', '4', '2', 9.2, 'Kiayada Wood.dulitoji@mailinator.com.Comments', 'Development and IT', 'ServicesFiles/Kiayada Wood.dulitoji@mailinator.com/Banner1Kiayada Wood.png', 'ServicesFiles/Kiayada Wood.dulitoji@mailinator.com/Banner2Kiayada Wood.png', 'ServicesFiles/Kiayada Wood.dulitoji@mailinator.com/Banner3Kiayada Wood.png', '0919293939'),
(8, 'Robert Vinson', 'pacyt@mailinator.com', 'pacyt@mailinator.comKeatonInbox', 'Level 1', '', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com', 'Blanditiis qui ut am', 'Facere animi ut quo', '92', 'Id rerum quae delen', '135', 'Autem voluptatem At', '688', '1', '1', '1', '0', '1', 2.2, 'Robert Vinson.pacyt@mailinator.com.Comments', 'Graphics and Design', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com/Banner1Robert Vinson.png', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com/Banner2Robert Vinson.png', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com/Banner3Robert Vinson.png', '0912932189'),
(9, 'Robert Vinson', 'pacyt@mailinator.com', 'pacyt@mailinator.comKeatonInbox', 'Level 1', '', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com', 'Blanditiis qui ut am', 'Facere animi ut quo', '92', 'Id rerum quae delen', '135', 'Autem voluptatem At', '688', '1', '2', '3', '1', '2', 5.6, 'Robert Vinson.pacyt@mailinator.com.Comments', 'Graphics and Design', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com/Banner1Robert Vinson.png', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com/Banner2Robert Vinson.png', 'ServicesFiles/Robert Vinson.pacyt@mailinator.com/Banner3Robert Vinson.png', '0921321434'),
(10, 'Shana Sheppard', 'dulitoji@mailinator.com', 'dulitojiElianaInbox', 'Level 1', '', 'ServicesFiles/Shana Sheppard.dulitoji@mailinator.com', 'Velit rerum aut laud', 'Sint ad officiis do', '6943', 'Sed modi nisi conseq', '18933', 'Vitae amet odit eum', '7632', '2', '0', '7', '2', '0', 6.2, 'Shana Sheppard.dulitoji@mailinator.com.Comments', 'Music and Audio', 'ServicesFiles/Shana Sheppard.dulitoji@mailinator.com/Banner1Shana Sheppard.png', 'ServicesFiles/Shana Sheppard.dulitoji@mailinator.com/Banner2Shana Sheppard.png', 'ServicesFiles/Shana Sheppard.dulitoji@mailinator.com/Banner3Shana Sheppard.png', '09123786123'),
(11, 'Delilah Vargas', 'dulitoji@mailinator.com', 'dulitojiElianaInbox', 'Level 1', '', 'ServicesFiles/Delilah Vargas.dulitoji@mailinator.com', 'Ad hic ratione repre', 'Quisquam non culpa i', '988', 'Nesciunt rerum recu', '780', 'Maiores iure veritat', '51', '0', '1', '0', '1', '1', 2.2, 'Delilah Vargas.dulitoji@mailinator.com.Comments', 'Music and Audio', 'ServicesFiles/Delilah Vargas.dulitoji@mailinator.com/Banner1Delilah Vargas.png', 'ServicesFiles/Delilah Vargas.dulitoji@mailinator.com/Banner2Delilah Vargas.png', 'ServicesFiles/Delilah Vargas.dulitoji@mailinator.com/Banner3Delilah Vargas.png', '09126387323'),
(12, 'krazy beats for krazy people', 'jimmanrique12@gmail.com', '', 'Level 1', '', 'ServicesFiles/Tobias Cantrell.jimmanrique12@gmail.com', 'imma make you a beat my bro, for just Php 506', 'Rem quam dolorem omn', '506', 'Aliquip nulla odio d', '877', 'Neque minus molestia', '456', '0', '0', '1', '1', '1', 2.4, 'Tobias Cantrell.jimmanrique12@gmail.com.Comments', 'Music and Audio', 'ServicesFiles/Tobias Cantrell.jimmanrique12@gmail.com/Banner1Tobias Cantrell.png', 'ServicesFiles/Tobias Cantrell.jimmanrique12@gmail.com/Banner2Tobias Cantrell.png', 'ServicesFiles/Tobias Cantrell.jimmanrique12@gmail.com/Banner3Tobias Cantrell.png', '09355026284'),
(16, 'krazy videos', 'jimmanrique12@gmail.com', '', 'Level 1', '', 'ServicesFiles/I will edit your videos.jimmanrique12@gmail.com', 'i will edit your videos for affordable price. starts at 599', 'basic cuts and compiling of clips', '599', 'basic cuts with color grading and compiling of clips', '799', 'visual effects, cuts, color grading and compiling of clips', '899', '4', '1', '0', '0', '0', 1.2, 'I will edit your videos.jimmanrique12@gmail.com.Comments', 'Video and Presentation', 'ServicesFiles/I will edit your videos.jimmanrique12@gmail.com/Banner1I will edit your videos.png', 'ServicesFiles/I will edit your videos.jimmanrique12@gmail.com/Banner2I will edit your videos.png', 'ServicesFiles/I will edit your videos.jimmanrique12@gmail.com/Banner3I will edit your videos.png', '09355026284'),
(17, 'Make You a music', 'jimmanrique12@gmail.com', '', 'Level 1', '', 'ServicesFiles/Angelica Sweeney.jimmanrique12@gmail.com', 'yung ungol ungol hehehe', 'light ungol', '145', 'moderate ungol', '750', 'heavy ungol', '558', '0', '0', '0', '0', '1', 1.0, 'Angelica Sweeney.jimmanrique12@gmail.com.Comments', 'Music and Audio', 'ServicesFiles/Angelica Sweeney.jimmanrique12@gmail.com/Banner1Angelica Sweeney.png', 'ServicesFiles/Angelica Sweeney.jimmanrique12@gmail.com/Banner2Angelica Sweeney.png', 'ServicesFiles/Angelica Sweeney.jimmanrique12@gmail.com/Banner3Angelica Sweeney.png', '09355026284');

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
(15, 'Razel John', 'Ruegas', 'Dumlao', 'June 19, 2001', 'male', 'r.ruegas123@gmail.com', '12345', '09614410403', 'Dinalupihan', 'Pogi', 'English', NULL, NULL, NULL, 'UserRegisterFiles/r.ruegas123@gmail.comRazel John/r.ruegas123@gmail.comRazel John.png', 'National ID', 'UserRegisterFiles/r.ruegas123@gmail.comRazel John/ID1Razel JohnRuegas.png', 'Driving License', 'UserRegisterFiles/r.ruegas123@gmail.comRazel John/ID2Razel JohnRuegas.png', 'Customer', 'Approved', 'UserRegisterFiles/r.ruegas123@gmail.comRazel John', 'Astozel', 'r.ruegas123@gmail.com'),
(17, 'Baroque', 'Sakalam', 'Zhong', '07-16-2001', 'male', 'rdbperez@bpsu.edu.ph', 'Jerusalem30', '09021064019', 'Somewhere in Bataan', 'Dili ko alam', 'Tagalog', 'Student', 'Undergraduate', 'Computer', 'UserRegisterFiles/rdbperez@bpsu.edu.phBaroque/rdbperez@bpsu.edu.phBaroque.png', 'School ID', 'UserRegisterFiles/rdbperez@bpsu.edu.phBaroque/ID1BaroqueSakalam.png', 'School ID', 'UserRegisterFiles/rdbperez@bpsu.edu.phBaroque/ID2BaroqueSakalam.png', 'Freelancer', 'Approved', 'UserRegisterFiles/rdbperez@bpsu.edu.phBaroque', 'xsade', ''),
(18, 'Jester John', 'Manrique', 'D.', 'April 5, 2000', 'male', 'lockon6stratos@gmail.com', 'Dynames24', '09672592278', 'Mabatang', 'Pogi', 'Filipino', 'Macho Dancer', 'College', 'Handjob', 'UserRegisterFiles/lockon6stratos@gmail.comJester John/lockon6stratos@gmail.comJester John.png', 'School ID', 'UserRegisterFiles/lockon6stratos@gmail.comJester John/ID1Jester JohnManrique.png', 'School ID', 'UserRegisterFiles/lockon6stratos@gmail.comJester John/ID2Jester JohnManrique.png', 'Freelancer', 'Approved', 'UserRegisterFiles/lockon6stratos@gmail.comJester John', 'Jestee', 'lockon6stratos@gmail.com'),
(19, 'Damon', 'Reid', 'Ut ullamco non quia ', '06-Apr-2020', 'male', 'jirode@mailinator.com', 'Pa$$w0rd!', 'Adipisicing omnis ha', 'Magnam consectetur ', 'Perferendis commodi ', 'Iusto esse blanditii', 'Aspernatur eos dign', 'Ipsa voluptas tempo', 'Deserunt iusto amet', 'UserRegisterFiles/jirode@mailinator.comDamon/jirode@mailinator.comDamon.png', 'Driving License', 'UserRegisterFiles/jirode@mailinator.comDamon/ID1DamonReid.png', 'School ID', 'UserRegisterFiles/jirode@mailinator.comDamon/ID2DamonReid.png', 'Freelancer', 'Approved', 'UserRegisterFiles/jirode@mailinator.comDamon', 'miharyfe', 'rixuxysux@mailinator.com'),
(20, 'Chandler', 'Duffy', 'Excepturi laborum nu', '27-Feb-1984', 'female', 'jubum@mailinator.com', 'Pa$$w0rd!', 'Irure nulla veniam ', 'Harum porro eos volu', 'Laboris quis qui dol', 'Autem minus quam sit', 'Rerum eius nisi atqu', 'A qui quibusdam pers', 'Aut id mollitia neq', 'UserRegisterFiles/jubum@mailinator.comChandler/jubum@mailinator.comChandler.png', 'Driving License', 'UserRegisterFiles/jubum@mailinator.comChandler/ID1ChandlerDuffy.png', 'Driving License', 'UserRegisterFiles/jubum@mailinator.comChandler/ID2ChandlerDuffy.png', 'Freelancer', 'Approved', 'UserRegisterFiles/jubum@mailinator.comChandler', 'xyqozymop', 'vubitixiv@mailinator.com'),
(21, 'Lydia', 'Guerra', 'Iure laborum Tempor', '27-Feb-1982', 'female', 'hulizuxe@mailinator.com', 'Pa$$w0rd!', 'Eos dolor at veniam', 'Alias est exercitati', 'Omnis praesentium ei', 'Et ad in harum hic s', 'Voluptas voluptatem', 'Proident at consect', 'Commodo nisi neque n', 'UserRegisterFiles/hulizuxe@mailinator.comLydia/hulizuxe@mailinator.comLydia.png', 'National ID', 'UserRegisterFiles/hulizuxe@mailinator.comLydia/ID1LydiaGuerra.png', 'National ID', 'UserRegisterFiles/hulizuxe@mailinator.comLydia/ID2LydiaGuerra.png', 'Freelancer', 'Approved', 'UserRegisterFiles/hulizuxe@mailinator.comLydia', 'lizesa', 'refisaxep@mailinator.com'),
(23, 'Maggie', 'Whitley', 'Tempore qui ut earu', '24-Oct-1986', 'female', 'fata@mailinator.com', 'Pa$$w0rd!', 'Esse ratione dolorem', 'Minus est ut dolore', 'Doloribus consectetu', 'Animi in incidunt ', 'Recusandae Aut dolo', 'Aliqua Quidem aperi', 'Commodo praesentium ', 'UserRegisterFiles/fata@mailinator.comMaggie/fata@mailinator.comMaggie.png', 'National ID', 'UserRegisterFiles/fata@mailinator.comMaggie/ID1MaggieWhitley.png', 'School ID', 'UserRegisterFiles/fata@mailinator.comMaggie/ID2MaggieWhitley.png', 'Freelancer', 'Declined', 'UserRegisterFiles/fata@mailinator.comMaggie', 'cybyxaheno', 'majiwo@mailinator.com'),
(24, 'Razel John', 'Ruegas', 'Dumlao', 'June 19, 2001', 'male', 'rjdruegas@bpsu.edu.ph', '12345', '09614410403', 'Dinalupihan', 'Pogi', 'English', 'Student', 'College', 'Programming', 'UserRegisterFiles/rjdruegas@bpsu.edu.phRazel John/rjdruegas@bpsu.edu.phRazel John.png', 'Driving License', 'UserRegisterFiles/rjdruegas@bpsu.edu.phRazel John/ID1Razel JohnRuegas.png', 'National ID', 'UserRegisterFiles/rjdruegas@bpsu.edu.phRazel John/ID2Razel JohnRuegas.png', 'Freelancer', 'Approved', 'UserRegisterFiles/rjdruegas@bpsu.edu.phRazel John', 'Pogi', 'rjdruegas@bpsu.edu.ph'),
(25, 'Charde', 'Daniel', 'Piper Tillman', '2010-07-05', 'male', 'befunucy@mailinator.com', 'Pa$$w0rd!', 'Numquam totam sit d', 'Deleniti exercitatio', 'Sed magni enim non s', 'Molestiae ea facilis', 'Aut quasi sint in d', 'Non cupidatat magnam', 'Ullamco ad deserunt ', 'UserRegisterFiles/befunucy@mailinator.comCharde/befunucy@mailinator.comCharde.png', 'National ID', 'UserRegisterFiles/befunucy@mailinator.comCharde/ID1ChardeDaniel.png', 'Driving License', 'UserRegisterFiles/befunucy@mailinator.comCharde/ID2ChardeDaniel.png', 'Freelancer', 'Approved', 'UserRegisterFiles/befunucy@mailinator.comCharde', 'wazolylix', 'vigyk@mailinator.com'),
(26, 'Hector', 'Hatfield', 'Levi Solomon', '2012-01-12', 'female', 'lysuhahosi@mailinator.com', 'Pa$$w0rd!', 'Ullamco dolor saepe ', 'Minus amet in sunt', 'Omnis nesciunt temp', 'Officiis ad soluta n', 'Est culpa neque sed', 'Laborum Inventore u', 'Cum ea unde commodo ', 'UserRegisterFiles/lysuhahosi@mailinator.comHector/lysuhahosi@mailinator.comHector.png', 'Driving License', 'UserRegisterFiles/lysuhahosi@mailinator.comHector/ID1HectorHatfield.png', 'National ID', 'UserRegisterFiles/lysuhahosi@mailinator.comHector/ID2HectorHatfield.png', 'Freelancer', 'Declined', 'UserRegisterFiles/lysuhahosi@mailinator.comHector', 'xerykahe', 'kypa@mailinator.com'),
(27, 'Tad', 'Wolf', 'Ocean Fleming', '28-Aug-1984', 'female', 'xygypiqy@mailinator.com', 'Pa$$w0rd!', 'Culpa porro tempore', 'Veritatis ratione ut', 'Possimus saepe sit ', 'Enim fugiat aliqua ', NULL, NULL, NULL, 'UserRegisterFiles/xygypiqy@mailinator.comTad/xygypiqy@mailinator.comTad.png', 'National ID', 'UserRegisterFiles/xygypiqy@mailinator.comTad/ID1TadWolf.png', 'Driving License', 'UserRegisterFiles/xygypiqy@mailinator.comTad/ID2TadWolf.png', 'Customer', 'Declined', 'UserRegisterFiles/xygypiqy@mailinator.comTad', 'veryjusyd', 'myvazehi@mailinator.com'),
(28, 'Lamar', 'Townsend', 'Sade Nichols', '24-Aug-1983', 'male', 'laly@mailinator.com', 'Pa$$w0rd!', 'Incididunt dolore be', 'Aliqua Fuga Ullam ', 'Eaque culpa quis lab', 'Non omnis eum ea rep', NULL, NULL, NULL, 'UserRegisterFiles/laly@mailinator.comLamar/laly@mailinator.comLamar.png', 'National ID', 'UserRegisterFiles/laly@mailinator.comLamar/ID1LamarTownsend.png', 'Driving License', 'UserRegisterFiles/laly@mailinator.comLamar/ID2LamarTownsend.png', 'Customer', 'Declined', 'UserRegisterFiles/laly@mailinator.comLamar', 'cahyjityfy', 'muqonocico@mailinator.com'),
(29, 'Tatyana', 'George', 'September Daniels', '2009-01-14', 'female', 'misofu@mailinator.com', 'Pa$$w0rd!', 'Omnis qui reprehende', 'Nihil est omnis dol', 'Adipisci repudiandae', 'Tempora est dolorum', 'Non autem excepteur ', 'Incididunt id volupt', 'Praesentium saepe as', 'UserRegisterFiles/misofu@mailinator.comTatyana/misofu@mailinator.comTatyana.png', 'Driving License', 'UserRegisterFiles/misofu@mailinator.comTatyana/ID1TatyanaGeorge.png', 'National ID', 'UserRegisterFiles/misofu@mailinator.comTatyana/ID2TatyanaGeorge.png', 'Freelancer', 'Approved', 'UserRegisterFiles/misofu@mailinator.comTatyana', 'sihumanoky', 'zaryc@mailinator.com'),
(30, 'Kieran', 'Salazar', 'Marah Buckner', '26-Jun-1971', 'female', 'vonyj@mailinator.com', 'Pa$$w0rd!', 'Nesciunt corporis e', 'Nulla laborum totam ', 'Delectus totam accu', 'Dolore culpa in err', NULL, NULL, NULL, 'UserRegisterFiles/vonyj@mailinator.comKieran/vonyj@mailinator.comKieran.png', 'Driving License', 'UserRegisterFiles/vonyj@mailinator.comKieran/ID1KieranSalazar.png', 'School ID', 'UserRegisterFiles/vonyj@mailinator.comKieran/ID2KieranSalazar.png', 'Customer', '', 'UserRegisterFiles/vonyj@mailinator.comKieran', 'hefygyre', 'newuhywy@mailinator.com'),
(31, 'Barbara', 'Macias', 'Priscilla Alford', '1979-03-02', 'female', 'hireandseekdemo@gmail.com', 'Pa$$w0rd!', 'Dolor recusandae No', 'Ut quis laborum Qui', 'Delectus nemo omnis', 'Quaerat sint laborio', 'Vero facilis eum eum', 'Corporis eveniet of', 'Impedit dolor nisi ', 'UserRegisterFiles/hireandseekdemo@gmail.comBarbara/hireandseekdemo@gmail.comBarbara.png', 'National ID', 'UserRegisterFiles/hireandseekdemo@gmail.comBarbara/ID1BarbaraMacias.png', 'PhilHealth ID', 'UserRegisterFiles/hireandseekdemo@gmail.comBarbara/ID2BarbaraMacias.png', 'Freelancer', 'Approved', 'UserRegisterFiles/hireandseekdemo@gmail.comBarbara', 'josiki', 'hireandseekdemo@gmail.com'),
(32, 'Lyra', 'Caroc', 'Barbero', '', '', 'caroclyra0@gmail.com', 'LYRAlyra', '09772450961', '#116 Mabini Street', '', '', '', '', '', 'UserRegisterFiles/caroclyra0@gmail.comLyra/caroclyra0@gmail.comLyra.png', 'National ID', 'UserRegisterFiles/caroclyra0@gmail.comLyra/ID1LyraCaroc.png', 'School ID', 'UserRegisterFiles/caroclyra0@gmail.comLyra/ID2LyraCaroc.png', 'Freelancer', 'Approved', 'UserRegisterFiles/caroclyra0@gmail.comLyra', 'Lyralyra', 'caroclyra0@gmail.com');

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
  `FileMailingAddress` varchar(255) NOT NULL,
  `Gcash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactionrecords`
--

INSERT INTO `transactionrecords` (`transactionID`, `OwnerEmail`, `ClientEmail`, `ServiceID`, `ServiceTitle`, `Category`, `clientNotes`, `transactionstartDate`, `transactionFinishedDate`, `availedPlan`, `Price`, `TransactionStatus`, `FilesDirectory`, `AgreementContract`, `FileMailingAddress`, `Gcash`) VALUES
(1, 'pacyt@mailinator.com', 'luqutaw@mailinator.com', '9', 'Robert Vinson', 'Graphics and Design', 'ewan kahit ano?', '1/1/2022', '1/1/2022', 'Basic Plan', 'Php 92.00', 'Canceled', NULL, 'Agree', '', ''),
(2, 'pacyt@mailinator.com', 'luqutaw@mailinator.com', '9', 'Robert Vinson', 'Graphics and Design', 'dfgdsgsdg', '1/1/2022', '1/12/2022', 'Premium Plan', 'Php 688.00', 'Canceled', NULL, 'Agree', '', ''),
(3, 'pacyt@mailinator.com', 'luqutaw@mailinator.com', '9', 'Robert Vinson', 'Graphics and Design', 'hfghfdf', '1/1/2022', '1/12/2022', 'Standard Plan', 'Php 135.00', 'Canceled', NULL, 'Agree', '', ''),
(4, 'pacyt@mailinator.com', 'dulitoji@mailinator.com', '9', 'Robert Vinson', 'Graphics and Design', 'SAFSDA', '1/1/2022', '1/12/2022', 'Basic Plan', 'Php 92.00', 'Pending', NULL, 'Agree', '', '0976845675745'),
(5, 'dulitoji@mailinator.com', 'dulitoji@mailinator.com', '10', 'Shana Sheppard', 'Music and Audio', 'Possimus quae nemo ', '1/1/2022', '06-Mar-1985', 'Standard Plan', 'Php 18933.00', 'Pending', NULL, 'Agree', '', '097767456546'),
(6, 'jimmanrique12@gmail.com', 'jimmanrique12@gmail.com', '12', 'Tobias Cantrell', 'Music and Audio', 'sadsad', '1/3/2022', '1/26/2022', 'Standard Plan', 'Php 877.00', 'Delivered', NULL, 'Agree', '', '097687546765'),
(7, 'pacyt@mailinator.com', 'jimmanrique12@gmail.com', '8', 'Robert Vinson', 'Graphics and Design', 'sdaadada', '1/3/2022', '1/12/2022', 'Basic Plan', 'Php 92.00', 'Canceled', NULL, 'Agree', '', '097765757'),
(8, 'jimmanrique12@gmail.com', 'jimmanrique12@gmail.com', '12', 'Tobias Cantrell', 'Music and Audio', 'ASDASDA', '1/3/2022', '1/1/2022', 'Standard Plan', 'Php 877.00', 'Delivered', NULL, 'Agree', 'jimmanrique12@gmail.com', '096774766546'),
(9, 'jimmanrique12@gmail.com', 'jimmanrique12@gmail.com', '12', 'Tobias Cantrell', 'Music and Audio', 'ewan kahit ano?', '1/3/2022', '1/1/2022', 'Premium Plan', 'Php 456.00', 'Canceled', NULL, 'Agree', 'jimmanrique12@gmail.com', '096764536'),
(10, 'jimmanrique12@gmail.com', 'jimmanrique12@gmail.com', '12', 'Tobias Cantrell', 'Music and Audio', 'Ipsum aliqua Conseq', '1/3/2022', '14-Apr-2000', 'Basic Plan', 'Php 506.00', 'Canceled', NULL, 'Agree', 'Cupiditate nemo arch', '097876573456354'),
(11, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'Tobias Cantrell', 'Music and Audio', 'dfgdsgsdg', '1/3/2022', '1/1/2022', 'Premium Plan', 'Php 456.00', 'Canceled', NULL, 'Agree', 'grgafsdfefsc', '09673565463'),
(12, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'Tobias Cantrell', 'Music and Audio', 'sadsadasd', '1/3/2022', '1/12/2022', 'Standard Plan', 'Php 877.00', 'Delivered', NULL, 'Agree', 'wqqwdqwdwq', '096573465464'),
(13, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'Tobias Cantrell', 'Music and Audio', 'asdsada', '1/3/2022', '1/12/2022', 'Standard Plan', 'Php 877.00', 'Delivered', NULL, 'Agree', 'sdfsaf f', '096746645364'),
(14, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'Tobias Cantrell', 'Music and Audio', 'ewan kahit ano?', '1/3/2022', '1/1/2022', 'Premium Plan', 'Php 456.00', 'Delivered', NULL, 'Agree', 'luqutaw@mailinator.com', '096787457643'),
(15, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'Tobias Cantrell', 'Music and Audio', 'Voluptatem voluptate', '1/4/2022', '24-Nov-2018', 'Basic Plan', 'Php 506.00', 'Delivered', NULL, 'Agree', 'Perferendis nemo ali', '097645464'),
(16, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'Tobias Cantrell', 'Music and Audio', 'Vero temporibus perf', '1/4/2022', '02-May-1997', 'Premium Plan', 'Php 456.00', 'Canceled', NULL, 'Agree', 'Dolores qui in et la', '095436256'),
(17, 'jimmanrique12@gmail.com', 'r.ruegas123@gmail.com', '12', 'Tobias Cantrell', 'Music and Audio', 'Bangis', '1/4/2022', '', 'Standard Plan', 'Php 877.00', 'Delivered', NULL, 'Agree', 'r.ruegas123@gmail.com', '095646435'),
(18, 'jimmanrique12@gmail.com', 'r.ruegas123@gmail.com', '12', 'Tobias Cantrell', 'Music and Audio', '', '1/4/2022', '', 'Basic Plan', 'Php 506.00', 'Canceled', NULL, '', 'r.ruegas123@gmail.com', '0956236534'),
(19, 'jimmanrique12@gmail.com', 'r.ruegas123@gmail.com', '12', 'Tobias Cantrell', 'Music and Audio', 'ewan kahit ano?', '1/4/2022', '1/12/2022', 'Basic Plan', 'Php 506.00', 'Delivered', NULL, 'Agree', 'r.ruegas123@gmail.com', '09563645'),
(20, 'jimmanrique12@gmail.com', 'rdbperez@bpsu.edu.ph', '12', 'Tobias Cantrell', 'Music and Audio', 'Hatdog Hatdiggy di dawg', '1/4/2022', '1/4/2022', 'Basic Plan', 'Php 506.00', 'Delivered', NULL, 'Agree', 'rdbperez@bpsu.edu.ph', '09565466'),
(21, 'jimmanrique12@gmail.com', 'jimmanrique12@gmail.com', '12', 'Tobias Cantrell', 'Music and Audio', 'Eiusmod occaecat obc', '1/4/2022', '03-Aug-2017', 'Basic Plan', 'Php 506.00', 'Canceled', NULL, 'Agree', 'Ut quod ullam quaera', '096747456'),
(22, 'jimmanrique12@gmail.com', 'jimmanrique12@gmail.com', '12', 'Tobias Cantrell', 'Music and Audio', 'asdsadsad', '1/4/2022', '2022-01-07', 'Basic Plan', 'Php 506.00', 'Canceled', NULL, 'Agree', 'jimmanrique12@gmail.com', '0956456345'),
(23, 'dulitoji@mailinator.com', 'jimmanrique12@gmail.com', '10', 'Shana Sheppard', 'Music and Audio', '', '1/4/2022', '', 'Basic Plan', 'Php 6943.00', 'Pending', NULL, '', 'jimmanrique12@gmail.com', '09453454543'),
(24, 'dulitoji@mailinator.com', 'jimmanrique12@gmail.com', '10', 'Shana Sheppard', 'Music and Audio', '', '1/5/2022', '', 'Basic Plan', 'Php 6943.00', 'Pending', NULL, '', 'jimmanrique12@gmail.com', '096754564'),
(25, 'dulitoji@mailinator.com', 'jimmanrique12@gmail.com', '10', 'Shana Sheppard', 'Music and Audio', 'make me a music where there are high notes', '1/5/2022', '2022-02-16', 'Basic Plan', 'Php 6943.00', 'Pending', NULL, 'Agree', 'jimmanrique12@gmail.com', '09564356'),
(26, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'Tobias Cantrell', 'Music and Audio', '', '1/5/2022', '', 'Basic Plan', 'Php 506.00', 'Canceled', NULL, '', '', ''),
(27, 'dulitoji@mailinator.com', 'luqutaw@mailinator.com', '7', 'Kiayada Wood', 'Development and IT', '', '1/5/2022', '', 'Basic Plan', 'Php 91.00', 'Canceled', NULL, '', '', ''),
(28, 'dulitoji@mailinator.com', 'luqutaw@mailinator.com', '7', 'Kiayada Wood', 'Development and IT', '', '1/5/2022', '', 'Basic Plan', 'Php 91.00', 'Canceled', NULL, '', '', ''),
(29, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'Tobias Cantrell', 'Music and Audio', '', '1/5/2022', '', 'Basic Plan', 'Php 506.00', 'Canceled', NULL, '', '', ''),
(30, 'pacyt@mailinator.com', 'luqutaw@mailinator.com', '9', 'Robert Vinson', 'Graphics and Design', 'ewan kahit ano?', '1/5/2022', '2022-01-31', 'Basic Plan', 'Php 92.00', 'Pending', NULL, 'Agree', 'luqutaw@mailinator.com', '0921321434'),
(31, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '16', 'I will edit your videos', 'Video and Presentation', '', '1/0/2022', '', 'Basic Plan', 'Php 599.00', 'Canceled', NULL, '', '', '09355026284'),
(32, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '16', 'I will edit your videos', 'Video and Presentation', '', '1/0/2022', '', 'Basic Plan', 'Php 599.00', 'Canceled', NULL, '', '', '09355026284'),
(33, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '16', 'I will edit your videos', 'Video and Presentation', '', '01/30/2022', '', 'Basic Plan', 'Php 599.00', 'Canceled', NULL, '', '', '09355026284'),
(34, 'dulitoji@mailinator.com', 'luqutaw@mailinator.com', '7', 'Kiayada Wood', 'Development and IT', '', '01/30/2022', '', 'Basic Plan', 'Php 91.00', 'Canceled', NULL, '', '', '0919293939'),
(35, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'Tobias Cantrell', 'Music and Audio', 'ewan kahit ano?', '01/31/2022', '2022-02-09', 'Standard Plan', 'Php 877.00', 'Delivered', NULL, 'Agree', 'luqutaw@mailinator.com', '092138768123'),
(36, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'Tobias Cantrell', 'Music and Audio', 'asdsadsad', '01/31/2022', '2022-01-26', 'Basic Plan', 'Php 506.00', 'Canceled', NULL, 'Agree', 'luqutaw@mailinator.com', '092138768123'),
(37, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'Tobias Cantrell', 'Music and Audio', 'ewan kahit ano?', '01/31/2022', '2022-01-13', 'Premium Plan', 'Php 456.00', 'Delivered', NULL, 'Agree', 'luqutaw@mailinator.com', '092138768123'),
(38, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'Tobias Cantrell', 'Music and Audio', 'SAFSDA', '01/31/2022', '2022-01-18', 'Basic Plan', 'Php 506.00', 'Delivered', NULL, 'Agree', 'luqutaw@mailinator.com', '092138768123'),
(39, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'Tobias Cantrell', 'Music and Audio', 'dfgdsgsdg', '01/31/2022', '2022-01-31', 'Standard Plan', 'Php 877.00', 'Delivered', NULL, 'Agree', 'luqutaw@mailinator.com', '092138768123'),
(40, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '16', 'I will edit your videos', 'Video and Presentation', 'please edit the video i will send into your email address. hit me up', '01/31/2022', '2022-02-02', 'Premium Plan', 'Php 899.00', 'Delivered', NULL, 'Agree', 'luqutaw@mailinator.com', '09355026284'),
(41, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'Tobias Cantrell', 'Music and Audio', 'SAFSDA', '02/01/2022', '2022-02-17', 'Premium Plan', 'Php 456.00', 'Pending', NULL, 'Agree', 'luqutaw@mailinator.com', '092138768123'),
(42, '', '', '', '', '', '', '', '', '', '', 'Pending', NULL, '', '', ''),
(43, '', '', '', '', '', '', '', '', '', '', 'Pending', NULL, '', '', ''),
(44, '', '', '', '', '', '', '', '', '', '', 'Pending', NULL, '', '', ''),
(45, '', '', '', '', '', '', '', '', '', '', 'Pending', NULL, '', '', ''),
(46, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '17', 'Make You a music', 'Music and Audio', 'ewan kahit ano?', '02/02/2022', '2022-01-12', 'Standard Plan', 'Php 750.00', 'Pending', NULL, 'Agree', 'luqutaw@mailinator.com', '09355026284'),
(47, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '12', 'krazy beats for krazy people', 'Music and Audio', 'Provident omnis dol', '02/02/2022', '1985-09-16', 'Standard Plan', 'Php 877.00', 'Pending', NULL, 'Agree', 'Ad maiores quam esse', '092138768123'),
(48, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '17', 'Make You a music', 'Music and Audio', 'SAFSDA', '02/02/2022', '2022-02-16', 'Premium Plan', 'Php 558.00', 'Pending', NULL, 'Agree', 'luqutaw@mailinator.com', '09355026284'),
(49, 'pacyt@mailinator.com', 'luqutaw@mailinator.com', '9', 'Robert Vinson', 'Graphics and Design', 'ewan kahit ano?', '02/02/2022', '2022-02-23', 'Basic Plan', 'Php 92.00', 'Pending', NULL, 'Agree', 'luqutaw@mailinator.com', '0921321434'),
(50, 'jimmanrique12@gmail.com', 'luqutaw@mailinator.com', '17', 'Make You a music', 'Music and Audio', 'SAFSDA', '02/02/2022', '2022-02-15', 'Premium Plan', 'Php 558.00', 'Delivered', NULL, 'Agree', 'luqutaw@mailinator.com', '09355026284');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `customerrating`
--
ALTER TABLE `customerrating`
  ADD PRIMARY KEY (`RatingID`);

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
-- AUTO_INCREMENT for table `customerrating`
--
ALTER TABLE `customerrating`
  MODIFY `RatingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `MessageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `servicesinfo`
--
ALTER TABLE `servicesinfo`
  MODIFY `ServiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `signupverification`
--
ALTER TABLE `signupverification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `transactionrecords`
--
ALTER TABLE `transactionrecords`
  MODIFY `transactionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
