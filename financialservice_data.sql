-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 03:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `financialservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `bank_acc_no` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `bank_acc_no`, `email`, `fname`, `lname`, `mobile_no`, `password`, `username`) VALUES
(1, 54321654, 'ddsdfv@ll.com', 'UFirst', 'Ulast', '564651', 'test123', 'user123'),
(2, 65465415, 'dsfdsfds@dffdssd.fdgd', 'Afirst', 'Alast', '65445', 'test123', 'agent123'),
(3, 64165464, 'dvdsfgdsf@dsfsdfsdf.dsfdsf', 'Mfirst', 'Mlast', '65414654', 'test123', 'merchant123'),
(4, 1512451245, 'rhjawwad2000@gmail.com', 'Rubaiyet', 'Jawwad', '017197839', 'test1234', 'jawwad'),
(5, 12456987, 'masuk@gmail.com', 'Masuk', 'Rahman', '0171151578', 'test1234', 'masuk'),
(6, 12345878, 'johan@gmail.com', 'shafaiyet', 'Johan', '0178987869', 'test1234', 'johan-user'),
(7, 1245782515, 'nahar@gmail.com', 'Nowreen', 'Nahar', '0175783950', 'test1234', 'nahar-user'),
(8, 45783950, 'hello@gmail.com', 'Nowreen', 'Hello', '017178787', 'test1234', 'hello-agent'),
(9, 12457869, 'fariha@gmail.com', 'Fariha', 'Tahseen', '017158868', 'test1234', 'fariha-user'),
(10, 12968745, 'anindita@gmail.com', 'Anindita', 'Labonno', '016852015', 'test1234', 'anindita-user'),
(11, 12896378, 'silma@gmail.com', 'Silma', 'Zaman', '01657896', 'test1234', 'silma-user'),
(12, 45789632, 'sofia@gmail.com', 'Sofia', 'Amin', '0171875878', 'test1234', 'sofia-user'),
(13, 333698787, 'faiyaz@hotmail.com', 'Faiyaz', 'Khaled', '01457896', 'test1234', 'faiyaz-agent'),
(14, 369874512, 'swattic@gmail.com', 'Swattic', 'Ghose', '01558796', 'test1234', 'swattic-agent'),
(15, 2147483647, 'ronaldo@gmail.com', 'Christiano', 'Ronaldo', '014578969', 'test1234', 'ronaldo-merchant'),
(16, 457896321, 'messi@gmail.com', 'Lionel', 'Messi', '012547896', 'test1234', 'messi-merchant'),
(17, 2598787, 'abrar@gmail.com', 'Abrr', 'Haque', '1245987', 'test1234', 'abrar-user'),
(18, 459875632, 'nusaiba@gmail.com', 'Nusaiba', 'Ahmed', '457896321', 'test1234', 'nusaiba-agent'),
(19, 669874512, 'nafiz@gmail.com', 'Nafiz', 'Hossain', '99874512', 'test1234', 'nafiz-agent'),
(20, 996321788, 'virat@gmail.com', 'Virat', 'kohli', '963214578', 'test1234', 'virat-merchant'),
(21, 2147483647, 'tamim@gmail.com', 'Tamim', 'Iqbal', '9987456321', 'test1234', 'tamim-merchant'),
(22, 225457896, 'rubel@gmail.com', 'Rubel', 'Hossain', '7899954512', 'test1234', 'rubel-merchant'),
(23, 696547896, 'nafisa@gmail.com', 'Nafisa', 'Rahman', '778987458', 'test1234', 'nafisa-user'),
(24, 321457896, 'fahad@gmail.com', 'Fahad', 'Ahmed', '018874578', 'test1234', 'fahad@gmail.com'),
(25, 215545, 'fahad@hotmail.com', 'Fahad', 'Sir', '0178787998', 'test1234', 'fahad-user');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `fname`, `lname`, `mobile_no`, `password`, `username`) VALUES
(1, 'dfdsfdsfdssdf@zdsfsd.dsfds', 'AD', 'sdfsdf', '5454654', 'test123', 'admin123'),
(2, 'runa@gmail.com', 'Runa', 'laila', '45698712', 'test1234', 'runa-admin'),
(3, 'ayub@gmail.com', 'Ayub', 'Bacchu', '4569874512', 'test1234', 'ayub-admin'),
(4, 'azam@gmail.com', 'Azam', 'Khan', '998789632145', 'test1234', 'azam-admin');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `agent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`agent_id`) VALUES
(2),
(5),
(7),
(8),
(13),
(14),
(18),
(19);

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `agent_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`agent_id`, `user_id`, `amount`, `date`) VALUES
(2, 1, 15000, '2020-12-27 21:12:58'),
(2, 1, 1500, '2020-12-27 21:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `manages`
--

CREATE TABLE `manages` (
  `admin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE `merchants` (
  `merchant_id` int(11) NOT NULL,
  `org_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`merchant_id`, `org_name`) VALUES
(3, 'Fafdgfdsg'),
(15, 'Football'),
(16, 'Soccer'),
(20, 'Cricket'),
(21, 'Bat'),
(22, 'Ball');

-- --------------------------------------------------------

--
-- Table structure for table `money_sent`
--

CREATE TABLE `money_sent` (
  `receiver_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `s_name` varchar(150) NOT NULL,
  `s_details` varchar(255) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `s_name`, `s_details`, `merchant_id`, `price`) VALUES
(1, 'Face', 'dsf dsfgdgfdg fdgfd gfdgfd gd gdsf gs fdgh jfgd jhhg ftj gh fgdjh  gfr hf gfgs hgfd h fg hfg jg  fdh gfhfdgh', 3, 1500),
(2, 'Los Mortg', 'dsf sdfdsf dsg fgh g fd gadf gf hs hfg gfd gfd gdfg fdsg fdsg', 3, 1000),
(122154, 'EM KUNT', 'dsfjsf dsfd ghfg hfgh  hdfgtrh gfh gj hth fgh gdh s hsr thg fjh gj kg frdhdg fju hdgj gsrfjh dhgdhdgf hg', 3, 3541);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `merchant_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `date`, `merchant_id`, `service_id`, `user_id`) VALUES
(1, '2020-12-27 21:26:04', 3, 1, 1),
(2, '2020-12-27 21:26:05', 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `balance`) VALUES
(1, 16250),
(4, 50),
(6, 50),
(9, 50),
(10, 50),
(11, 50),
(12, 50),
(17, 50),
(23, 50),
(24, 50),
(25, 50);

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `agent_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD KEY `agent_id` (`agent_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `manages`
--
ALTER TABLE `manages`
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`merchant_id`);

--
-- Indexes for table `money_sent`
--
ALTER TABLE `money_sent`
  ADD KEY `receiver_id` (`receiver_id`),
  ADD KEY `sender_id` (`sender_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD KEY `agent_id` (`agent_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `merchant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122155;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30215;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agents`
--
ALTER TABLE `agents`
  ADD CONSTRAINT `agents_ibfk_1` FOREIGN KEY (`agent_id`) REFERENCES `account` (`account_id`);

--
-- Constraints for table `deposit`
--
ALTER TABLE `deposit`
  ADD CONSTRAINT `deposit_ibfk_1` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`agent_id`),
  ADD CONSTRAINT `deposit_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `manages`
--
ALTER TABLE `manages`
  ADD CONSTRAINT `manages_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `manages_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `account` (`account_id`);

--
-- Constraints for table `merchants`
--
ALTER TABLE `merchants`
  ADD CONSTRAINT `merchants_ibfk_1` FOREIGN KEY (`merchant_id`) REFERENCES `account` (`account_id`);

--
-- Constraints for table `money_sent`
--
ALTER TABLE `money_sent`
  ADD CONSTRAINT `money_sent_ibfk_1` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `money_sent_ibfk_2` FOREIGN KEY (`sender_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`merchant_id`) REFERENCES `merchants` (`merchant_id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`merchant_id`) REFERENCES `merchants` (`merchant_id`),
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`),
  ADD CONSTRAINT `transactions_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `account` (`account_id`);

--
-- Constraints for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD CONSTRAINT `withdraw_ibfk_1` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`agent_id`),
  ADD CONSTRAINT `withdraw_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
