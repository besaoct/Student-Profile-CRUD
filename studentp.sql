SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `studentp`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `eno` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `eno`, `branch`, `email`, `phone`, `address`, `pass`, `cpass`, `admin`) VALUES
(1, 'Shafin Ahmed', 'CTIS014', 'Btech', 'xx@gmail.com', '6001932077', 'Guwahati,Assam', '$2y$10$2/5XvpuWzaeI0wkcx5vcve2eHpMvKLG7BO6OpJoIJRH16TkdL5VbG', '$2y$10$62QtI4/P83.IxXnEOEuJWeWKozmnAObn4VchexNyHWGi9qpNHc.jS', 'active'),
(3, 'User', 'CTIS014', 'Btech', 'masud.ahmed.adtu@gmail.com', '6001932077', 'Guwahati,Assam', '$2y$10$umuG9i.wrl9aSs.4pwpBd./f/F133OzCL3aRCOfiNpLwv1dLEBv12', '$2y$10$u2cnlcIwYOrhBQOLAr/c9.UXlivi8PQEXqLcHCW.uMc/xypyZEqPC', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

