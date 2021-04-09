-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2021 at 07:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solusvacci`
--

-- --------------------------------------------------------

--
-- Table structure for table `HEALTH_WORKER`
--

CREATE TABLE `HEALTH_WORKER` (
  `HW_ID` int(11) NOT NULL,
  `HW_IDNUM` varchar(13) DEFAULT NULL,
  `HW_FNAME` varchar(255) DEFAULT NULL,
  `HW_LNAME` varchar(255) DEFAULT NULL,
  `HW_GENDER` varchar(20) DEFAULT NULL,
  `HW_EMAIL` varchar(255) DEFAULT NULL,
  `HW_PHONE` varchar(10) DEFAULT NULL,
  `HW_WORKING_PROV` varchar(255) DEFAULT NULL,
  `HW_WORKING_CITY` varchar(255) DEFAULT NULL,
  `HW_PROV` varchar(255) DEFAULT NULL,
  `HW_CITY` varchar(255) DEFAULT NULL,
  `HW_ZIP` varchar(255) DEFAULT NULL,
  `HW_PASSWORD` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `HEALTH_WORKER`
--

INSERT INTO `HEALTH_WORKER` (`HW_ID`, `HW_IDNUM`, `HW_FNAME`, `HW_LNAME`, `HW_GENDER`, `HW_EMAIL`, `HW_PHONE`, `HW_WORKING_PROV`, `HW_WORKING_CITY`, `HW_PROV`, `HW_CITY`, `HW_ZIP`, `HW_PASSWORD`) VALUES
(6, '7802026045086', 'Ben', 'Smith', 'Male', 'bensmith@gmail.com', '0767786041', 'Mpumalanga', 'Barberton', 'Mpumalanga', 'Witbank', '1012', '$2y$10$65To6fkzuPxJ5SR2au3pr.uiTpP74eQQuHx95BsFhK/3C4.N2g3vS'),
(7, '7703116054081', 'Lucas', 'Nkosi', 'Male', 'lucasnkosi@gmail.com', '0826021548', 'Mpumalanga', 'White River', 'Guateng', 'Sandton', '001', '$2y$10$VqLToFdxADg7UxRI1itWx.s8vbJ8ueNplwEjlkTTQ0/xO6FEJDe4.'),
(8, '8812286048087', 'Lerato', 'Mothlolo', 'Female', 'leratomothlolo@gmail.com', '0714446050', 'Mpumalanga', 'Witbank', 'Limpopo', 'Polokwane', '0003', '$2y$10$dn0gAZpazQUZ1uX7m/6ZFeu4cvGalm34nOVXuQTO/nzJb/ZPy1hIa'),
(9, '8901026041087', 'Mark', 'Luther', 'Male', 'marklut@gmail.com', '0747516048', 'Mpumalanga', 'Nelspruit', 'Mpumalanga', 'Nelspruit', '0101', '$2y$10$dL.C6CTxb88au.qPpR28AOVoIHwagvIBmbJnkiPFDI0lXBCtf49oe');

-- --------------------------------------------------------

--
-- Table structure for table `MEDICAL_RECORD`
--

CREATE TABLE `MEDICAL_RECORD` (
  `MR_ID` int(11) NOT NULL,
  `PATIENT_ID` int(11) DEFAULT NULL,
  `MR_CHESTPAIN` varchar(255) DEFAULT NULL,
  `MR_HIV` varchar(255) DEFAULT NULL,
  `MR_SOB` varchar(255) DEFAULT NULL,
  `MR_CHRONIC` varchar(255) DEFAULT NULL,
  `MR_HBP` varchar(255) DEFAULT NULL,
  `MR_HIGHCHO` varchar(255) DEFAULT NULL,
  `MR_RESP` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `MEDICAL_RECORD`
--

INSERT INTO `MEDICAL_RECORD` (`MR_ID`, `PATIENT_ID`, `MR_CHESTPAIN`, `MR_HIV`, `MR_SOB`, `MR_CHRONIC`, `MR_HBP`, `MR_HIGHCHO`, `MR_RESP`) VALUES
(18, 1, 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
(19, 2, 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
(20, 3, 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
(21, 4, 'No', 'No', 'Yes', 'No', 'Yes', 'No', 'No'),
(22, 5, 'No', 'No', 'No', 'Yes', 'No', 'No', 'No'),
(23, 6, 'No', 'No', 'No', 'No', 'No', 'Yes', 'No'),
(24, 8, 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
(25, 11, 'No', 'No', 'No', 'No', 'No', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `PATIENT`
--

CREATE TABLE `PATIENT` (
  `PATIENT_ID` int(11) NOT NULL,
  `PAT_IDNUM` varchar(13) DEFAULT NULL,
  `PAT_FNAME` varchar(255) DEFAULT NULL,
  `PAT_LNAME` varchar(255) DEFAULT NULL,
  `PAT_GENDER` varchar(20) DEFAULT NULL,
  `PAT_EMAIL` varchar(255) DEFAULT NULL,
  `PAT_PHONE` varchar(10) DEFAULT NULL,
  `PAT_PROV` varchar(255) DEFAULT NULL,
  `PAT_STREET` varchar(255) DEFAULT NULL,
  `PAT_CITY` varchar(255) DEFAULT NULL,
  `PAT_ZIP` varchar(10) DEFAULT NULL,
  `PAT_DISABILITY` varchar(255) DEFAULT NULL,
  `PAT_ESSENTIAL` varchar(20) DEFAULT NULL,
  `PAT_STATUS` varchar(255) DEFAULT NULL,
  `PAT_VACCINATED` varchar(255) DEFAULT NULL,
  `PAT_PASSWORD` varchar(255) DEFAULT NULL,
  `NOT_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PATIENT`
--

INSERT INTO `PATIENT` (`PATIENT_ID`, `PAT_IDNUM`, `PAT_FNAME`, `PAT_LNAME`, `PAT_GENDER`, `PAT_EMAIL`, `PAT_PHONE`, `PAT_PROV`, `PAT_STREET`, `PAT_CITY`, `PAT_ZIP`, `PAT_DISABILITY`, `PAT_ESSENTIAL`, `PAT_STATUS`, `PAT_VACCINATED`, `PAT_PASSWORD`, `NOT_ID`) VALUES
(1, '9703236548027', 'Tony', 'Stalk', 'Male', 'tonystalk@gmail.com', '0737542293', 'Mpumalanga', '12 Maple street', 'Witbank', '2271', 'No', 'None', 'Approve', 'YES', '$2y$10$ky008IDvlw3MPj5JZ9Hf/eI6pmJwueE6uoBMfSxKtER/zdam1BP9O', NULL),
(2, '9804256043089', 'Ntokozo', 'Mabaso', 'Male', 'ntokozomb@gmail.com', '0826001547', 'Mpumalanga', '23 Long Street', 'Witbank', '0011', 'No', 'None', 'Approve', 'YES', '$2y$10$RSt9FtMOc3.4CM.HXdeh1eX9ybmEZKCMBXjwmReYhACuOPygnJNv2', NULL),
(3, '7306276008027', 'Mack', 'Makhanya', 'Male', 'mackMK@gmail.com', '0796651515', 'Mpumalanga', '1 Kerk Street', 'Witbank', '1173', 'No', 'Police', 'None', '', '$2y$10$aQ7h8gwijsBZxIxuWxya0.M8x.7ZJ5KCuE1ptZfYDgMhna6HEvmyS', NULL),
(4, '9109216203089', 'John', 'Smith', 'Male', 'johnsmith@gmail.com', '0724515789', 'Mpumalanga', '34 Hill Street', 'Witbank', '0001', 'No', 'Soldier', 'Approve', 'YES', '$2y$10$BB4cQeg67dcJx0mAFYc96OI1lt6R2JBM/4I4ujsac.vqLaG/KyOLK', NULL),
(5, '9211236500027', 'Kenny', 'Olivier', 'Male', 'kennyolivier@gmail.com', '0737751985', 'Mpumalanga', '43 Seby Street', 'Witbank', '0115', 'No', 'Doctor', 'None', '', '$2y$10$mksquPOifJTWChPAZomJO.gIdHDzE0r7L2.Qj8GywX8843ZDU4dB2', NULL),
(6, '9904116113089', 'Otto', 'Kansi', 'Male', 'ottokansi@gmail.com', '0826649944', 'Mpumalanga', '17 Mandela Street', 'Witbank', '1015', 'No', 'None', 'Approve', 'YES', '$2y$10$NSeH37kBIbz6s10AqF2O2.NMNLxFtsn/TLAKDWVX5UfMoSdGUfkoO', NULL),
(8, '7702236043089', 'Shane', 'Kane', 'Male', 'shanekane123@gmail.com', '0797756010', 'Mpumalanga', '12 Loraine Street', 'Witbank', '1010', 'No', ' ', 'None', ' ', '$2y$10$hgVBLwxKhBG3xsG1jF2s4eqHHViMdX0h/CmsU/PiXTTolIIZj58DW', NULL),
(9, '7611025042083', 'Kenny', 'Masango', 'Male', 'kennymasango@gmail.com', '0794457020', 'Mpumalanga', '23 Loraine Street', 'Witbank', '1010', 'No', ' ', 'None', ' ', '$2y$10$1xpaAg2CgKkrmujmjreI8OIw8ca7WSrluq0qNitBVF7oa6DhTNnhW', NULL),
(10, '9802125256084', 'Angela', 'Grobler', 'Male', 'angelaGB@gmail.com', '0734556020', 'Mpumalanga', '55 Maple Street', 'Witbank', '1010', 'No', ' ', 'None', ' ', '$2y$10$oSyOqFp7RBb3VqEh7.tz4uJCtBgGRUjQL557QtTL38ZtlAzjg9pwC', NULL),
(11, '9902126043087', 'Mcebo', 'Buthelezi', 'Male', 'mceboB@gmail.com', '0797846030', 'Mpumalanga', '56 Palm Street', 'Secunda', '2256', 'No', ' ', 'Approve', 'YES', '$2y$10$I21kgz.2pGTTOK2XB/UbsejezDWvP0QXlnDVrExTnQrqslnHWHlPO', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `REPORT`
--

CREATE TABLE `REPORT` (
  `REPORT_ID` int(11) NOT NULL,
  `HW_ID` int(11) DEFAULT NULL,
  `RE_DATE` datetime DEFAULT NULL,
  `RE_PROVE` varchar(255) DEFAULT NULL,
  `RE_CITY` varchar(255) DEFAULT NULL,
  `RE_VACCINATED` int(11) DEFAULT NULL,
  `RE_NOT_VACCINATED` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `REPORT`
--

INSERT INTO `REPORT` (`REPORT_ID`, `HW_ID`, `RE_DATE`, `RE_PROVE`, `RE_CITY`, `RE_VACCINATED`, `RE_NOT_VACCINATED`) VALUES
(1, 2, '2021-01-18 00:00:00', 'Guateng', 'Midrand', 104, 50),
(2, 5, '2021-01-18 00:00:00', 'Mpumalanga', 'Bethal', 33, 110),
(3, 3, '2021-01-18 00:00:00', 'Limpopo', 'Bela-Bela', 114, 12),
(4, 1, '2021-01-18 00:00:00', 'Mpumalanga', 'Middelburg', 11, 41),
(5, 4, '2021-01-18 00:00:00', 'Mpumalanga', 'Belfast', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `SYSTEM_ADMIN`
--

CREATE TABLE `SYSTEM_ADMIN` (
  `SYS_ID` int(11) NOT NULL,
  `SYS_USERNAME` varchar(255) DEFAULT NULL,
  `SYS_PASSWORD` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `SYSTEM_ADMIN`
--

INSERT INTO `SYSTEM_ADMIN` (`SYS_ID`, `SYS_USERNAME`, `SYS_PASSWORD`) VALUES
(1, 'Admin', '$2y$10$ky008IDvlw3MPj5JZ9Hf/eI6pmJwueE6uoBMfSxKtER/zdam1BP9O'),
(2, 'Admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `VACCI_APP`
--

CREATE TABLE `VACCI_APP` (
  `APP_ID` int(11) NOT NULL,
  `PATIENT_ID` int(11) DEFAULT NULL,
  `APP_DATE` varchar(255) DEFAULT NULL,
  `APP_PROV` varchar(255) DEFAULT NULL,
  `APP_CITY` varchar(255) DEFAULT NULL,
  `APP_VACCICODE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `VACCI_APP`
--

INSERT INTO `VACCI_APP` (`APP_ID`, `PATIENT_ID`, `APP_DATE`, `APP_PROV`, `APP_CITY`, `APP_VACCICODE`) VALUES
(13, 1, 'Wed, 17 Mar 21 18:37:41 +0100', 'Mpumalanga', 'Witbank', '9703236548027'),
(14, 2, 'Wed, 17 Mar 21 18:39:04 +0100', 'Mpumalanga', 'Witbank', '9804256043089'),
(15, 3, 'Wed, 17 Mar 21 18:40:37 +0100', 'Mpumalanga', 'Witbank', '7306276008027'),
(16, 4, 'Wed, 17 Mar 21 18:42:02 +0100', 'Mpumalanga', 'Witbank', '9109216203089'),
(17, 5, 'Wed, 17 Mar 21 18:42:42 +0100', 'Mpumalanga', 'Witbank', '9211236500027'),
(18, 6, 'Wed, 17 Mar 21 18:43:42 +0100', 'Mpumalanga', 'Witbank', '9904116113089'),
(19, 8, 'Sat, 27 Mar 21 12:31:42 +0100', 'Mpumalanga', 'Witbank', '7702236043089'),
(20, 11, 'Wed, 31 Mar 21 13:42:01 +0200', 'Mpumalanga', 'Witbank', '9902126043087');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `HEALTH_WORKER`
--
ALTER TABLE `HEALTH_WORKER`
  ADD PRIMARY KEY (`HW_ID`);

--
-- Indexes for table `MEDICAL_RECORD`
--
ALTER TABLE `MEDICAL_RECORD`
  ADD PRIMARY KEY (`MR_ID`);

--
-- Indexes for table `PATIENT`
--
ALTER TABLE `PATIENT`
  ADD PRIMARY KEY (`PATIENT_ID`);

--
-- Indexes for table `REPORT`
--
ALTER TABLE `REPORT`
  ADD PRIMARY KEY (`REPORT_ID`);

--
-- Indexes for table `SYSTEM_ADMIN`
--
ALTER TABLE `SYSTEM_ADMIN`
  ADD PRIMARY KEY (`SYS_ID`);

--
-- Indexes for table `VACCI_APP`
--
ALTER TABLE `VACCI_APP`
  ADD PRIMARY KEY (`APP_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `HEALTH_WORKER`
--
ALTER TABLE `HEALTH_WORKER`
  MODIFY `HW_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `MEDICAL_RECORD`
--
ALTER TABLE `MEDICAL_RECORD`
  MODIFY `MR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `PATIENT`
--
ALTER TABLE `PATIENT`
  MODIFY `PATIENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `REPORT`
--
ALTER TABLE `REPORT`
  MODIFY `REPORT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `SYSTEM_ADMIN`
--
ALTER TABLE `SYSTEM_ADMIN`
  MODIFY `SYS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `VACCI_APP`
--
ALTER TABLE `VACCI_APP`
  MODIFY `APP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
