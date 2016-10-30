-- phpMyAdmin SQL Dump
-- version 2.11.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2011 at 06:11 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `theatremanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `AccountNo` bigint(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `IntialDeposit` bigint(25) NOT NULL,
  PRIMARY KEY  (`AccountNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`AccountNo`, `Name`, `Address`, `IntialDeposit`) VALUES
(98765431, 'Rajeev', 'Trivandrum', 2100);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bankaccount`
--

CREATE TABLE `bankaccount` (
  `accountno` int(11) NOT NULL auto_increment,
  `creditcardno` bigint(16) NOT NULL,
  `name` varchar(15) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `expirydate` date NOT NULL,
  `amount` bigint(11) NOT NULL,
  `userid` int(5) NOT NULL,
  PRIMARY KEY  (`accountno`),
  UNIQUE KEY `creditcardno` (`creditcardno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2147483648 ;

--
-- Dumping data for table `bankaccount`
--

INSERT INTO `bankaccount` (`accountno`, `creditcardno`, `name`, `contactno`, `expirydate`, `amount`, `userid`) VALUES
(123, 8520, 'haritha', 2147483647, '0000-00-00', 19500, 12),
(5555, 1111111111111111, 'AbuAlex', 12345, '2020-12-30', 75, 5),
(7777, 2222222222222222, 'Robin', 123456, '2020-12-30', 968391, 7),
(9999, 9999999999999999, 'Vyshak', 6578, '2010-11-30', 98800, 6),
(12345, 33333333333333333, 'Ashwin', 2147483647, '0000-00-00', 19100, 9),
(123415, 148, 'anu', 2147483647, '0000-00-00', 19100, 11),
(2147483647, 9999, 'vyshak', 2147483647, '0000-00-00', 19850, 10);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Id` int(25) NOT NULL auto_increment,
  `Emailid` varchar(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `comments` varchar(50) NOT NULL,
  `Date` datetime NOT NULL,
  `showid` int(25) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`Id`, `Emailid`, `Name`, `comments`, `Date`, `showid`) VALUES
(1, 'rakesh@ymail.com', 'Rakesh', 'Nice Film.. Better Seating Arrangements..', '2011-01-25 11:59:01', 18),
(2, 'smsumimol6@gmail.com', 'Sumila', 'Please add details about this film manmadhan ambu.', '2011-01-25 12:12:20', 17),
(3, 'rejy@yahoo.com', 'Rejy', 'Very good film after few years.. nice arrangements', '2011-01-25 12:12:55', 14),
(4, 'reshmi_1985@ymail.com', 'Reshmi', 'Nice arrangements..', '2011-01-25 12:13:48', 19),
(11, 'rahul@ymail.com', 'Rahul', 'dgf', '2011-01-25 14:21:02', 19),
(12, 'kanila.90@gmail.com', 'Anila', 'Not Good..', '2011-01-28 13:02:37', 15),
(14, 'foxi@gmail.com', 'foxi', 'good to entertain', '2011-02-12 16:31:46', 19);

-- --------------------------------------------------------

--
-- Table structure for table `ecoupon`
--

CREATE TABLE `ecoupon` (
  `Id` int(45) NOT NULL auto_increment,
  `Couponid` varchar(45) NOT NULL,
  `Amount` int(45) NOT NULL,
  `Balanceamount` int(45) NOT NULL,
  `Userid` int(45) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `ecoupon`
--

INSERT INTO `ecoupon` (`Id`, `Couponid`, `Amount`, `Balanceamount`, `Userid`) VALUES
(1, 'c0001', 400, 250, 2),
(3, 'c0003', 1200, 50, 2),
(4, 'c0004', 400, 200, 2),
(5, 'c0005', 800, 600, 2),
(6, 'c0006', 1200, 1200, 2),
(7, 'c0007', 400, 400, 2),
(8, 'c0008', 400, 400, 2),
(9, 'c0009', 800, 800, 2),
(10, 'c00010', 1200, 1200, 2),
(11, 'c00011', 400, 400, 2),
(12, 'c00012', 800, 800, 2),
(13, 'c00013', 1200, 1200, 2),
(14, 'c00014', 800, 800, 2),
(15, 'c00015', 800, 800, 2),
(16, 'c00016', 1200, 1000, 1),
(17, 'c00017', 400, 400, 2),
(18, 'c00018', 800, 800, 2),
(19, 'c00019', 1200, 1200, 2),
(20, 'c00020', 400, 400, 2),
(21, 'c00021', 800, 800, 2),
(22, 'c00022', 1200, 1200, 2),
(23, 'c00023', 400, 100, 7),
(24, 'c00024', 800, 800, 7),
(25, 'c00025', 1200, 1200, 7),
(26, 'c00026', 800, 800, 11),
(27, 'c00027', 400, 250, 12),
(28, 'c00028', 800, 800, 9);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Fid` bigint(35) NOT NULL auto_increment,
  `Feedback` varchar(150) NOT NULL,
  `NAME` varchar(35) NOT NULL,
  `EID` varchar(30) NOT NULL,
  `PNO` bigint(25) NOT NULL,
  PRIMARY KEY  (`Fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Fid`, `Feedback`, `NAME`, `EID`, `PNO`) VALUES
(1, 'not bad..\r\nmore better than other sites..\r\nmake improvement..', 'rakesh', 'rakeshrg@ymail.com', 375487656),
(3, 'not bad', 'Vinayak', 'vinayak@yahoo.com', 9876544567),
(4, 'nice website. but flash functions are to be added', 'sam', 'sam@ymail.com', 9447344127);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `GID` bigint(25) NOT NULL auto_increment,
  `PHOTO` varchar(100) NOT NULL,
  PRIMARY KEY  (`GID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`GID`, `PHOTO`) VALUES
(1, 'uploaded/gullivers-travels.jpg'),
(5, 'uploaded/ananya-new-stills03.jpg'),
(6, 'uploaded/kamal_hassan_latest_photos_stills_01.jpg'),
(7, 'uploaded/thilakan news22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `QID` bigint(25) NOT NULL auto_increment,
  `QUERY` varchar(150) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `EID` varchar(30) NOT NULL,
  `PNO` bigint(25) NOT NULL,
  PRIMARY KEY  (`QID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`QID`, `QUERY`, `NAME`, `EID`, `PNO`) VALUES
(3, 'hai, nice ..', 'alex', 'rakeshrg@ymail.com', 9876544567);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `regid` bigint(25) NOT NULL auto_increment,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(15) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `District` varchar(20) NOT NULL,
  `pincode` int(10) NOT NULL,
  `profession_occupation` varchar(25) NOT NULL,
  `DateofBirth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Landnumber` bigint(15) NOT NULL,
  `Mobilenumber` bigint(20) NOT NULL,
  `Alternatemobilenumber` bigint(20) NOT NULL,
  `Question` varchar(45) NOT NULL,
  `Answer` varchar(45) NOT NULL,
  `status` int(30) NOT NULL,
  PRIMARY KEY  (`regid`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`regid`, `FirstName`, `LastName`, `Email`, `password`, `city`, `state`, `District`, `pincode`, `profession_occupation`, `DateofBirth`, `Gender`, `Landnumber`, `Mobilenumber`, `Alternatemobilenumber`, `Question`, `Answer`, `status`) VALUES
(1, 'Rakesh', 'R.G', 'rakeshrg163@gmail.com', 'rakesh', 'Trivandrum', 'Kerala', 'Trivandrum', 686765, 'IT prof', '1988-10-01', 'Male', 4702844722, 9446903182, 9446987652, '', '', 0),
(2, 'Rejy', 'Sugathan', 'rejysugathan@gmail.com', 'rejy22', 'Parippally', 'Kerala', 'Kollam', 6913021, 'Programmer', '1988-09-11', 'Female', 4742576320, 9633718750, 9895724180, '', '', 0),
(3, 'Sumila', 'C', 'sumila@gmail.com', 'sumila', 'Trivandrum', 'Kerala', 'Trivandrum', 691301, 'IT prof.', '0000-00-00', 'Female', 4702844721, 9539532141, 9446903189, '', '', 0),
(6, 'Vaysak', 'M.V', 'vmv@gmail.com', 'vmv89', 'tvm', 'Kerala', 'Trivandrum', 454445, 'Govt. Employee', '0000-00-00', 'Male', 458769315, 98564789654, 32569874123, 'What is your name?', 'rockey', 1),
(7, 'ROBIN', 'BABU', 'rbdream89@gmail.com', '6619', 'tvm', 'Kerala', 'Kollam', 691310, 'Govt. Employee', '1989-03-31', 'Male', 4752318306, 9745405188, 9995757667, 'What is your name?', 'robin', 0),
(9, 'Ashwin', 'Alex', 'ashwinabu@gmail.com', 'november1990', 'Anchal', 'Kerala', 'Trivandrum', 695123, 'Govt. Employee', '1990-11-09', 'Male', 4712275034, 9878787878771, 9787878787711, 'What is your name?', 'Ashwin', 0),
(10, 'vyshak', 'mv', 'vyshakmv@yahoo.com', 'asdfg', 'kollam', 'Kerala', 'Kollam', 691545, 'IT prof.', '1990-06-08', 'Male', 4742470378, 9400523980, 9961818575, 'What is your name?', 'vmv', 0),
(11, 'anu', 'raj', 'anuraj@gmail.com', '456', 'kollam', 'Kerala', 'Kollam', 691546, 'Govt. Employee', '1990-07-06', 'Male', 474247123, 9947840877, 98745632, 'What is your name?', 'anu', 0),
(12, 'haritha', 'pv', 'haritha@hotmail.com', '789', 'valakom', 'Kerala', 'Trivandrum', 691548, 'Govt. Employee', '1976-04-07', 'Female', 2470378, 9400963214, 944735216, 'What is your pet name?', 'rony', 0);

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `theatreid` bigint(20) NOT NULL auto_increment,
  `theatrename` varchar(20) NOT NULL,
  `theatredetails` varchar(70) NOT NULL,
  PRIMARY KEY  (`theatreid`),
  UNIQUE KEY `theatrename` (`theatrename`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`theatreid`, `theatrename`, `theatredetails`) VALUES
(1, 'Anjali', 'centralized AC....'),
(2, 'Aswathy', 'At trivandrum.Near Overbrigde'),
(3, 'Athira', 'hai good1'),
(4, 'Athulya', 'sdyhfgho\r\ngjkbnl\r\nbjnnm\r\nbnkn');

-- --------------------------------------------------------

--
-- Table structure for table `theatre_shows`
--

CREATE TABLE `theatre_shows` (
  `showid` bigint(25) NOT NULL auto_increment,
  `Date` date NOT NULL,
  `Theatre_name` varchar(35) NOT NULL,
  `Shows` varchar(25) NOT NULL,
  `showtime` time NOT NULL,
  `Film_name` varchar(50) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Film_Description` text NOT NULL,
  `enddate` date NOT NULL,
  PRIMARY KEY  (`showid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `theatre_shows`
--

INSERT INTO `theatre_shows` (`showid`, `Date`, `Theatre_name`, `Shows`, `showtime`, `Film_name`, `Photo`, `Film_Description`, `enddate`) VALUES
(19, '2011-03-28', 'ASWATHY', 'NoonShow', '11:15:00', 'Gullivers Travels', 'uploaded/gullivers_travels4_opening_weekend.png', 'Time to bring out the child in you\r\nAdapted from the classic satire by Jonathan Swift, “Gulliver’s Travels” has Jack Black playing Lemuel Gulliver, a goofy and boastful mail room clerk, with no ambition. Black charms in this character with the help of his “School of Rock” like comic energy. Amanda Peet, plays his love interest, (Darcy Silverman) the travel editor. To impress Darcy, Gulliver takes on an assignment involving the Bermuda triangle, that gets him sucked into a whirlpool and washed ashore on Lilliput, an island inhibited by little people. He manages to win the heart of this little kingdom by protecting their land from their little enemies. He also manages to help Horatio, a commoner, to woo the Lilliputian princess (Emily Blunt). Jason Segal, of the “How I Met Your Mother” fame adds a nice touch as Horatio. But Gulliver’s happy new adventure becomes interesting when the general of the Lilliputian army (Chris O’ Dowd) gets jealous of all the attention Gulliver is getting and wages a war against his own people. Meanwhile Darcy gets sucked into the same whirlpool and ends up prisoner in Lilliput. Will this ordinary mail room clerk manage to save Lilliput and his girl? Well, you just have to find out yourself.', '2011-05-30'),
(29, '2011-03-24', 'ANJALI', 'NoonShow', '11:15:00', 'Manmadhan Ambu', 'uploaded/manmadhan_ambu1_movie_posters_wallpapers.jpg', 'Actors: Kamal Haasan, R.Madhavan, Trisha and Sangeetha\r\n\r\nDirection: K.S.Ravi Kumar\r\n\r\nProduction: Udhayanidhi Stalin\r\n\r\nWriter: Kamal Haasan\r\n\r\nMusic: Devi Sri Prasad\r\n\r\nCinematographer: Manush Nandan\r\n\r\nEditor: Shaan Mohammed\r\n\r\nDistributor: Red Giant Movies\r\nManmadhan Ambu Story\r\n\r\nThe movie is based on romantic comedy with Kamal Haasan, R.Madhavan,Trisha playing the main lead. The close sources say that there is a close similarity between Hollywood super hit film ‘Titanic’ and this movie. According to some reports there was a buzz that it is a full length comedy entertainer but no tragedy like in Titanic.\r\n\r\n', '2011-05-30'),
(30, '2011-04-03', 'ATHIRA', 'Noon Show', '11:15:00', 'Marykkundoru Kunjaadu', 'uploaded/marykku1.jpg', 'Movie\r\nMarykkundoru Kunjaadu\r\nDirector\r\nShafi\r\nMusic\r\nBerny Ignatius\r\nCast\r\nDileep, Biju Menon, Bhavana\r\n\r\n  Prepare to laugh your guts out as director Shafi offers some genuinely funny moments in Marykkundoru Kunjaadu. There are scenes, dialogues and mannerisms that reminds of some of Dileeps earlier films but it has all been intelligently developed into a nice script by Benny P Nayarambalam. \r\nSolomon (Dileep) is a lazy and timid young man, living in a sleepy village and his dream is to become a film director. He has been nicknamed Kunjaadu (lamb) by the villagers and is in love with Mary (Bhavana), the daughter of a wealthy landlord named Ittyachan (Innocent). \r\n', '2011-05-30'),
(31, '2011-04-02', 'ATHULYA', 'NoonShow', '11:15:00', 'Isi Life Mein', 'uploaded/ailm4.jpg', 'Isi Life Mein cast & crew, other details, & top review of Isi Life Mein \r\nDirector: \r\nVidhi Kasliwal\r\nProducer: \r\nKamal Kumar Barjatya, Ajit Kumar Barjatya, Rajkumar Barjatya\r\nMusic: \r\nMeet Bros.\r\nMain Cast: \r\nAkshay Oberoi, Sandeepa Dhar, Mohnish Behl, Aditya Raj Kapoor...  more\r\nGenre:\r\nRomance\r\nBanner:\r\nRajshri Productions\r\nWebsite:\r\nhttp://isilifemein.com\r\n\r\n', '2011-05-30'),
(32, '2011-03-24', 'ANJALI', 'Matinee', '02:30:00', 'Manmadhan Ambu', 'uploaded/Manmadhan-Ambu2Audio-Poster.jpg', 'Actors: Kamal Haasan, R.Madhavan, Trisha and Sangeetha\r\n\r\nDirection: K.S.Ravi Kumar\r\n\r\nProduction: Udhayanidhi Stalin\r\n\r\nWriter: Kamal Haasan\r\n\r\nMusic: Devi Sri Prasad\r\n\r\nCinematographer: Manush Nandan\r\n\r\nEditor: Shaan Mohammed\r\n\r\nDistributor: Red Giant Movies\r\nManmadhan Ambu Story\r\n\r\nThe movie is based on romantic comedy with Kamal Haasan, R.Madhavan,Trisha playing the main lead. The close sources say that there is a close similarity between Hollywood super hit film ‘Titanic’ and this movie. According to some reports there was a buzz that it is a full length comedy entertainer but no tragedy like in Titanic.\r\n\r\n', '2011-05-30'),
(33, '2011-04-03', 'ATHIRA', 'Matinee', '02:30:00', 'Marykkundoru Kunjaadu', 'uploaded/marykkundorukunjadu-2.jpg', 'Movie\r\nMarykkundoru Kunjaadu\r\nDirector\r\nShafi\r\nMusic\r\nBerny Ignatius\r\nCast\r\nDileep, Biju Menon, Bhavana\r\n\r\n  Prepare to laugh your guts out as director Shafi offers some genuinely funny moments in Marykkundoru Kunjaadu. There are scenes, dialogues and mannerisms that reminds of some of Dileeps earlier films but it has all been intelligently developed into a nice script by Benny P Nayarambalam. \r\nSolomon (Dileep) is a lazy and timid young man, living in a sleepy village and his dream is to become a film director. He has been nicknamed Kunjaadu (lamb) by the villagers and is in love with Mary (Bhavana), the daughter of a wealthy landlord named Ittyachan (Innocent). \r\n', '2011-05-30'),
(34, '2011-04-02', 'ATHULYA', 'Matinee', '02:30:00', 'Isi Life Mein', 'uploaded/ailm.jpg', 'Isi Life Mein cast & crew, other details, & top review of Isi Life Mein \r\nDirector: \r\nVidhi Kasliwal\r\nProducer: \r\nKamal Kumar Barjatya, Ajit Kumar Barjatya, Rajkumar Barjatya\r\nMusic: \r\nMeet Bros.\r\nMain Cast: \r\nAkshay Oberoi, Sandeepa Dhar, Mohnish Behl, Aditya Raj Kapoor...  more\r\nGenre:\r\nRomance\r\nBanner:\r\nRajshri Productions\r\nWebsite:\r\nhttp://isilifemein.com\r\n\r\n', '2011-05-30'),
(35, '2011-03-28', 'ASWATHY', 'Matinee', '02:30:00', 'Gullivers Travels', 'uploaded/gullivers_travels2_ver6.jpg', 'Time to bring out the child in you\r\nAdapted from the classic satire by Jonathan Swift, “Gulliver’s Travels” has Jack Black playing Lemuel Gulliver, a goofy and boastful mail room clerk, with no ambition. Black charms in this character with the help of his “School of Rock” like comic energy. Amanda Peet, plays his love interest, (Darcy Silverman) the travel editor. To impress Darcy, Gulliver takes on an assignment involving the Bermuda triangle, that gets him sucked into a whirlpool and washed ashore on Lilliput, an island inhibited by little people. He manages to win the heart of this little kingdom by protecting their land from their little enemies. He also manages to help Horatio, a commoner, to woo the Lilliputian princess (Emily Blunt). Jason Segal, of the “How I Met Your Mother” fame adds a nice touch as Horatio. But Gulliver’s happy new adventure becomes interesting when the general of the Lilliputian army (Chris O’ Dowd) gets jealous of all the attention Gulliver is getting and wages a war against his own people. Meanwhile Darcy gets sucked into the same whirlpool and ends up prisoner in Lilliput. Will this ordinary mail room clerk manage to save Lilliput and his girl? Well, you just have to find out yourself.', '2011-05-30'),
(36, '2011-03-24', 'ANJALI', 'First Show', '06:15:00', 'Manmadhan Ambu', 'uploaded/manmadhan-ambu4.jpg', 'Actors: Kamal Haasan, R.Madhavan, Trisha and Sangeetha\r\n\r\nDirection: K.S.Ravi Kumar\r\n\r\nProduction: Udhayanidhi Stalin\r\n\r\nWriter: Kamal Haasan\r\n\r\nMusic: Devi Sri Prasad\r\n\r\nCinematographer: Manush Nandan\r\n\r\nEditor: Shaan Mohammed\r\n\r\nDistributor: Red Giant Movies\r\nManmadhan Ambu Story\r\n\r\nThe movie is based on romantic comedy with Kamal Haasan, R.Madhavan,Trisha playing the main lead. The close sources say that there is a close similarity between Hollywood super hit film ‘Titanic’ and this movie. According to some reports there was a buzz that it is a full length comedy entertainer but no tragedy like in Titanic.\r\n\r\n', '2011-05-30'),
(37, '2011-03-28', 'ASWATHY', 'First Show', '06:15:00', 'Gullivers Travels', 'uploaded/gulliver5.jpg', 'Time to bring out the child in you\r\nAdapted from the classic satire by Jonathan Swift, “Gulliver’s Travels” has Jack Black playing Lemuel Gulliver, a goofy and boastful mail room clerk, with no ambition. Black charms in this character with the help of his “School of Rock” like comic energy. Amanda Peet, plays his love interest, (Darcy Silverman) the travel editor. To impress Darcy, Gulliver takes on an assignment involving the Bermuda triangle, that gets him sucked into a whirlpool and washed ashore on Lilliput, an island inhibited by little people. He manages to win the heart of this little kingdom by protecting their land from their little enemies. He also manages to help Horatio, a commoner, to woo the Lilliputian princess (Emily Blunt). Jason Segal, of the “How I Met Your Mother” fame adds a nice touch as Horatio. But Gulliver’s happy new adventure becomes interesting when the general of the Lilliputian army (Chris O’ Dowd) gets jealous of all the attention Gulliver is getting and wages a war against his own people. Meanwhile Darcy gets sucked into the same whirlpool and ends up prisoner in Lilliput. Will this ordinary mail room clerk manage to save Lilliput and his girl? Well, you just have to find out yourself.', '2011-05-30'),
(38, '2011-04-03', 'ATHIRA', 'First Show', '06:15:00', 'Marykkundoru Kunjaadu', 'uploaded/MarykkundoruKunjadu5.jpg', 'Movie\r\nMarykkundoru Kunjaadu\r\nDirector\r\nShafi\r\nMusic\r\nBerny Ignatius\r\nCast\r\nDileep, Biju Menon, Bhavana\r\n\r\n  Prepare to laugh your guts out as director Shafi offers some genuinely funny moments in Marykkundoru Kunjaadu. There are scenes, dialogues and mannerisms that reminds of some of Dileeps earlier films but it has all been intelligently developed into a nice script by Benny P Nayarambalam. \r\nSolomon (Dileep) is a lazy and timid young man, living in a sleepy village and his dream is to become a film director. He has been nicknamed Kunjaadu (lamb) by the villagers and is in love with Mary (Bhavana), the daughter of a wealthy landlord named Ittyachan (Innocent). \r\n', '2011-05-30'),
(39, '2011-04-02', 'ATHULYA', 'First Show', '06:15:00', 'Isi Life Mein', 'uploaded/ailm1.jpg', 'Isi Life Mein cast & crew, other details, & top review of Isi Life Mein \r\nDirector: \r\nVidhi Kasliwal\r\nProducer: \r\nKamal Kumar Barjatya, Ajit Kumar Barjatya, Rajkumar Barjatya\r\nMusic: \r\nMeet Bros.\r\nMain Cast: \r\nAkshay Oberoi, Sandeepa Dhar, Mohnish Behl, Aditya Raj Kapoor...  more\r\nGenre:\r\nRomance\r\nBanner:\r\nRajshri Productions\r\nWebsite:\r\nhttp://isilifemein.com\r\n\r\n', '2011-05-30'),
(40, '2011-03-24', 'ANJALI', 'Second Show', '09:30:00', 'Manmadhan Ambu', 'uploaded/Manmadhan-Ambu5.jpg', 'Actors: Kamal Haasan, R.Madhavan, Trisha and Sangeetha\r\n\r\nDirection: K.S.Ravi Kumar\r\n\r\nProduction: Udhayanidhi Stalin\r\n\r\nWriter: Kamal Haasan\r\n\r\nMusic: Devi Sri Prasad\r\n\r\nCinematographer: Manush Nandan\r\n\r\nEditor: Shaan Mohammed\r\n\r\nDistributor: Red Giant Movies\r\nManmadhan Ambu Story\r\n\r\nThe movie is based on romantic comedy with Kamal Haasan, R.Madhavan,Trisha playing the main lead. The close sources say that there is a close similarity between Hollywood super hit film ‘Titanic’ and this movie. According to some reports there was a buzz that it is a full length comedy entertainer but no tragedy like in Titanic.\r\n\r\n', '2011-05-30'),
(41, '2011-03-28', 'ASWATHY', 'Second Show', '09:30:00', 'Gullivers Travels', 'uploaded/Gullivers-Travels1-2010.jpg', 'Time to bring out the child in you\r\nAdapted from the classic satire by Jonathan Swift, “Gulliver’s Travels” has Jack Black playing Lemuel Gulliver, a goofy and boastful mail room clerk, with no ambition. Black charms in this character with the help of his “School of Rock” like comic energy. Amanda Peet, plays his love interest, (Darcy Silverman) the travel editor. To impress Darcy, Gulliver takes on an assignment involving the Bermuda triangle, that gets him sucked into a whirlpool and washed ashore on Lilliput, an island inhibited by little people. He manages to win the heart of this little kingdom by protecting their land from their little enemies. He also manages to help Horatio, a commoner, to woo the Lilliputian princess (Emily Blunt). Jason Segal, of the “How I Met Your Mother” fame adds a nice touch as Horatio. But Gulliver’s happy new adventure becomes interesting when the general of the Lilliputian army (Chris O’ Dowd) gets jealous of all the attention Gulliver is getting and wages a war against his own people. Meanwhile Darcy gets sucked into the same whirlpool and ends up prisoner in Lilliput. Will this ordinary mail room clerk manage to save Lilliput and his girl? Well, you just have to find out yourself.', '2011-05-30'),
(42, '2011-04-03', 'ATHIRA', 'Second Show', '09:30:00', 'Marykkundoru Kunjaadu', 'uploaded/marykku3.jpg', 'Movie\r\nMarykkundoru Kunjaadu\r\nDirector\r\nShafi\r\nMusic\r\nBerny Ignatius\r\nCast\r\nDileep, Biju Menon, Bhavana\r\n\r\n  Prepare to laugh your guts out as director Shafi offers some genuinely funny moments in Marykkundoru Kunjaadu. There are scenes, dialogues and mannerisms that reminds of some of Dileeps earlier films but it has all been intelligently developed into a nice script by Benny P Nayarambalam. \r\nSolomon (Dileep) is a lazy and timid young man, living in a sleepy village and his dream is to become a film director. He has been nicknamed Kunjaadu (lamb) by the villagers and is in love with Mary (Bhavana), the daughter of a wealthy landlord named Ittyachan (Innocent). \r\n', '2011-05-30'),
(43, '2011-04-02', 'ATHULYA', 'Second Show', '09:30:00', 'Isi Life Mein', 'uploaded/ailm21.jpg', 'Isi Life Mein cast & crew, other details, & top review of Isi Life Mein \r\nDirector: \r\nVidhi Kasliwal\r\nProducer: \r\nKamal Kumar Barjatya, Ajit Kumar Barjatya, Rajkumar Barjatya\r\nMusic: \r\nMeet Bros.\r\nMain Cast: \r\nAkshay Oberoi, Sandeepa Dhar, Mohnish Behl, Aditya Raj Kapoor...  more\r\nGenre:\r\nRomance\r\nBanner:\r\nRajshri Productions\r\nWebsite:\r\nhttp://isilifemein.com\r\n\r\n', '2011-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticketid` int(5) NOT NULL auto_increment,
  `seats` varchar(75) NOT NULL,
  `amount` float NOT NULL,
  `theatreid` int(5) NOT NULL,
  `showid` int(5) NOT NULL,
  `date` date NOT NULL,
  `bookingdate` date NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY  (`ticketid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ticketid`, `seats`, `amount`, `theatreid`, `showid`, `date`, `bookingdate`, `userid`) VALUES
(17, 'a31,a30', 100, 2, 19, '2011-03-26', '2011-03-21', 2),
(18, 'e28,e27,e26,e25', 200, 4, 31, '2011-03-21', '2011-03-21', 2),
(19, 'j6,j5', 100, 3, 30, '2011-03-28', '2011-03-21', 1),
(20, 'j6,j5', 100, 3, 30, '2011-03-28', '2011-03-21', 1),
(21, 'a11,a10,a9', 150, 4, 31, '2011-03-24', '2011-03-21', 2),
(22, '', 0, 4, 31, '2011-03-25', '2011-03-21', 2),
(23, 'a2,a1', 100, 3, 30, '2011-06-09', '2011-03-23', 2),
(24, 'c3,c2,c1', 150, 3, 30, '2011-06-09', '2011-03-23', 2),
(25, 'a2,a1', 100, 3, 30, '2011-06-10', '2011-03-23', 2),
(26, 'd4,d3,d2,d1', 200, 3, 30, '2011-06-09', '2011-03-24', 2),
(27, 'a11,a10,a9', 150, 4, 31, '2011-06-09', '2011-03-24', 2),
(28, 'a2,a1', 100, 3, 30, '2011-03-25', '2011-03-24', 2),
(29, '', 0, 3, 30, '2011-03-24', '2011-03-24', 2),
(30, 'k4,k3,k2,k1', 200, 3, 33, '2011-03-24', '2011-03-24', 2),
(31, 'k4,k3,k2,k1', 200, 3, 33, '2011-03-25', '2011-03-24', 2),
(32, 'a40,a39', 100, 2, 19, '2011-03-28', '2011-03-28', 2),
(33, 'a40,a39', 100, 2, 19, '2011-03-28', '2011-03-28', 2),
(34, 'h2,h1', 100, 3, 33, '2011-03-29', '2011-03-28', 7),
(35, 'g4,g3,g2,g1', 200, 3, 33, '2011-03-29', '2011-03-28', 7),
(36, 'e2,e1', 100, 3, 30, '2011-03-28', '2011-03-28', 7),
(37, 'h13,h12,h11,h10,h9,h8', 300, 1, 29, '2011-03-28', '2011-03-28', 7),
(38, 'a60', 50, 2, 19, '2011-03-28', '2011-03-28', 2),
(39, 'a64,a24', 100, 2, 19, '2011-03-28', '2011-03-28', 7),
(40, 'a5,a4,a3', 150, 2, 19, '2011-04-01', '2011-03-29', 10),
(41, 'a2,a1', 100, 3, 30, '2011-03-31', '2011-03-29', 11),
(42, 'c17,c16', 100, 1, 29, '2011-04-01', '2011-03-29', 12),
(43, 'a5,a4,a3', 150, 2, 37, '2011-04-03', '2011-03-29', 12),
(44, 'b2,b1', 100, 3, 30, '2011-04-12', '2011-04-11', 9);
