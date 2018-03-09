-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 03:40 AM
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
-- Database: `ppms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `hematology`
--

CREATE TABLE `hematology` (
  `hema_ID` int(5) NOT NULL,
  `sched_ID` int(5) NOT NULL,
  `patient_ID` int(5) NOT NULL,
  `hema_date` date NOT NULL,
  `hema_hemoglobin` int(10) NOT NULL,
  `hema_hematocrit` int(10) NOT NULL,
  `hema_rbcCount` int(10) NOT NULL,
  `hema_wbcCount` int(10) NOT NULL,
  `hema_plateletCount` int(10) NOT NULL,
  `hema_neutropils` int(10) NOT NULL,
  `hema_eosinophils` int(10) NOT NULL,
  `hema_basophils` int(10) NOT NULL,
  `hema_totalDiffCount` int(10) NOT NULL,
  `hema_monocytes` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hematology`
--

INSERT INTO `hematology` (`hema_ID`, `sched_ID`, `patient_ID`, `hema_date`, `hema_hemoglobin`, `hema_hematocrit`, `hema_rbcCount`, `hema_wbcCount`, `hema_plateletCount`, `hema_neutropils`, `hema_eosinophils`, `hema_basophils`, `hema_totalDiffCount`, `hema_monocytes`) VALUES
(1, 39, 30, '2018-02-16', 169, 169, 169, 169, 169, 169, 169, 169, 169, 169),
(2, 42, 21, '2018-02-16', 123, 180, 180, 180, 180, 180, 180, 180, 180, 180);

-- --------------------------------------------------------

--
-- Table structure for table `pathology`
--

CREATE TABLE `pathology` (
  `pathology_ID` int(5) NOT NULL,
  `sched_ID` int(5) NOT NULL,
  `patient_ID` int(5) NOT NULL,
  `pathology_date` date NOT NULL,
  `pathology_lca` varchar(11) NOT NULL,
  `pathology_plap` varchar(11) NOT NULL,
  `pathology_cytokeratin` varchar(11) NOT NULL,
  `pathology_nse` varchar(11) NOT NULL,
  `pathology_vimetin` varchar(11) NOT NULL,
  `pathology_chromogranin` varchar(11) NOT NULL,
  `pathology_hmb45` varchar(11) NOT NULL,
  `pathology_notes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pathology`
--

INSERT INTO `pathology` (`pathology_ID`, `sched_ID`, `patient_ID`, `pathology_date`, `pathology_lca`, `pathology_plap`, `pathology_cytokeratin`, `pathology_nse`, `pathology_vimetin`, `pathology_chromogranin`, `pathology_hmb45`, `pathology_notes`) VALUES
(43, 42, 21, '2018-02-16', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', 'sasda');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_ID` int(5) NOT NULL,
  `patient_firstName` varchar(15) NOT NULL,
  `patient_lastName` varchar(15) NOT NULL,
  `patient_address` varchar(30) NOT NULL,
  `patient_contactNumber` varchar(15) NOT NULL,
  `patient_bloodType` varchar(5) NOT NULL,
  `patient_Age` int(5) NOT NULL,
  `patient_Name` varchar(30) NOT NULL,
  `patient_time` varchar(15) NOT NULL,
  `patient_LMP` date NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_ID`, `patient_firstName`, `patient_lastName`, `patient_address`, `patient_contactNumber`, `patient_bloodType`, `patient_Age`, `patient_Name`, `patient_time`, `patient_LMP`, `month`, `year`) VALUES
(9, 'Grace', 'Nessia', 'Prk. Kasilingan', '2147483647', 'O+', 40, 'Grace Nessia', '', '2017-10-15', 'Oct', '2017'),
(12, 'Miriam', 'Gayoba', 'hinigaran city', '2147483647', 'AB+', 30, 'Miriam Gayoba', '', '2018-01-04', 'Jan', '2018'),
(18, 'josepha', 'doromal', 'bacolod', '15551212', 'O+', 27, 'joseph doromal', '', '2018-02-04', 'Feb', '2018'),
(21, 'honey', 'villa', 'talisay', '991275352', 'B-', 20, 'honey villa', '', '2018-02-05', 'Feb', '2018'),
(22, 'Nina', 'Garcia', 'Hinigaran', '09123457890', 'A+', 22, 'Nina Garcia', '', '2017-12-04', 'Feb', '2018'),
(23, 'Nina Lynn', 'Sarrosa', 'Bacolod City', '09451597562', 'A+', 32, 'Nina Lynn Sarrosa', '', '2017-11-06', 'Jan', '2018'),
(24, 'Smergin', 'Sombilla', 'Handumanan', '09101234567', 'A+', 35, 'Smergin Sombilla', '', '2017-10-08', 'Jan', '2017'),
(25, 'anita', 'delapaz', 'silay', '0999382712', 'B+', 23, 'anita delapaz', '1:00 am', '2017-11-06', 'Nov', '2017'),
(26, 'vincenta', 'suyo', 'bago city', '0999387232', 'O-', 18, 'vincenta suyo', '1:00 am', '2017-11-20', 'Nov', '2017'),
(27, 'Myra Jill', 'Pabion', 'Brgy. Bato', '09167901591', 'A+', 0, 'Myra Jill Pabion', '1:00 am', '2018-01-01', 'Jan', '2018'),
(28, 'Myra Mae', 'Gayoba', 'Hinigaran', '09123457800', 'A+', 20, 'Myra Mae Gayoba', '1:00 am', '2018-01-09', 'Jan', '2018'),
(29, 'Maria Marie', 'Garcia', 'Bacolod', '0999223123', 'B+', 32, 'Maria Marie Garcia', '1:00 am', '2018-02-01', 'Feb', '2018'),
(30, 'Kathleen', 'Dinsay', 'Bacolod City', '09101234567', 'A+', 25, 'Kathleen Dinsay', '1:00 am', '2018-02-01', 'Feb', '2018'),
(31, 'Angelica', 'Jaranilla', 'Bacolod City', '09123456789', 'B+', 30, 'Angelica Jaranilla', '1:00 am', '2018-02-02', 'Feb', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `patientcheckup`
--

CREATE TABLE `patientcheckup` (
  `pc_ID` int(5) NOT NULL,
  `patient_ID` int(5) NOT NULL,
  `sched_ID` int(5) NOT NULL,
  `pc_weight` int(5) NOT NULL,
  `pc_date` date NOT NULL,
  `pc_diagnosis` varchar(255) NOT NULL,
  `pc_bloodPressure` varchar(10) NOT NULL,
  `pc_problems` varchar(255) NOT NULL,
  `pc_month` varchar(10) NOT NULL,
  `pc_year` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientcheckup`
--

INSERT INTO `patientcheckup` (`pc_ID`, `patient_ID`, `sched_ID`, `pc_weight`, `pc_date`, `pc_diagnosis`, `pc_bloodPressure`, `pc_problems`, `pc_month`, `pc_year`) VALUES
(25, 9, 30, 50, '2018-02-12', 'Chronic Villus,Gestational Diabetes', '120/140', 'None', 'Feb', '2018'),
(26, 18, 32, 50, '2018-02-12', 'Chronic Villus,Gestational Diabetes', '120/90', 'None', 'Feb', '2018'),
(27, 31, 33, 45, '2018-02-12', 'Chronic Villus', '120/80', 'Chronic', 'Feb', '2018'),
(28, 12, 37, 56, '2018-02-15', 'Tay-Sachs Disease', '190/120', 'tay-sachs', 'Feb', '2018'),
(29, 21, 0, 1, '2018-02-17', 'Chronic Villus', '123/211', 'asd', 'Feb', '2018'),
(30, 30, 47, 123, '2018-02-18', 'Chronic Villus', '123/23', 'asd', 'Feb', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `presc_ID` int(5) NOT NULL,
  `pc_ID` int(5) NOT NULL,
  `patient_ID` int(5) NOT NULL,
  `presc_medicines` varchar(30) NOT NULL,
  `presc_dosage` varchar(15) NOT NULL,
  `presc_frequency` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`presc_ID`, `pc_ID`, `patient_ID`, `presc_medicines`, `presc_dosage`, `presc_frequency`) VALUES
(6, 27, 31, 'Decolgen', '250', '2'),
(7, 28, 12, 'Decolgen', '24', '2'),
(8, 28, 12, 'Tempra', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `sched_ID` int(11) NOT NULL,
  `patient_ID` int(11) NOT NULL,
  `sched_Date` date NOT NULL,
  `sched_Time` time NOT NULL,
  `sched_status` varchar(10) NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sched_ID`, `patient_ID`, `sched_Date`, `sched_Time`, `sched_status`, `month`, `year`) VALUES
(30, 9, '2018-02-12', '01:02:00', '', 'Feb', '2018'),
(31, 12, '2018-02-12', '01:05:00', '', 'Feb', '2018'),
(32, 18, '2018-02-12', '01:05:00', '', 'Feb', '2018'),
(33, 31, '2018-02-12', '09:00:00', '', 'Feb', '2018'),
(34, 27, '2018-02-12', '08:00:00', '', 'Feb', '2018'),
(35, 9, '2018-02-13', '12:00:00', '', 'Feb', '2018'),
(36, 30, '2018-02-14', '07:00:00', '', 'Feb', '2018'),
(37, 12, '2018-02-15', '01:00:00', '', 'Feb', '2018'),
(38, 31, '2018-02-16', '12:00:00', '', 'Feb', '2018'),
(39, 30, '2018-02-17', '05:00:00', '', 'Feb', '2018'),
(40, 27, '2018-02-17', '11:00:00', '', 'Feb', '2018'),
(41, 26, '2018-02-24', '03:00:00', '', 'Feb', '2018'),
(42, 21, '2018-02-17', '05:00:00', '', 'Feb', '2018'),
(43, 21, '2018-02-20', '12:00:00', '', 'Feb', '2018'),
(44, 18, '2018-02-22', '12:00:00', '', 'Feb', '2018'),
(45, 9, '2018-02-24', '12:00:00', '', 'Feb', '2018'),
(46, 12, '2018-02-19', '02:00:00', '', 'Feb', '2018'),
(47, 30, '2018-02-19', '12:55:00', '', 'Feb', '2018'),
(48, 21, '2018-03-06', '06:00:00', '', 'Mar', '2018'),
(49, 26, '2018-03-06', '06:00:00', '', 'Mar', '2018'),
(50, 29, '2018-02-28', '12:02:00', '', 'Feb', '2018'),
(51, 26, '2018-02-23', '12:00:00', '', 'Feb', '2018'),
(53, 28, '2018-02-21', '04:00:00', '', 'Feb', '2018'),
(54, 26, '2018-02-22', '12:35:00', '', 'Feb', '2018'),
(55, 26, '2018-02-20', '12:00:00', '', 'Feb', '2018'),
(57, 31, '2018-02-18', '12:00:00', '', 'Feb', '2018'),
(58, 18, '2018-03-06', '01:00:00', '', 'Feb', '2018'),
(59, 29, '2018-02-24', '11:55:00', '', 'Feb', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_ID` int(5) NOT NULL,
  `staff_fname` varchar(15) NOT NULL,
  `staff_lname` varchar(15) NOT NULL,
  `staff_contactNumber` int(12) NOT NULL,
  `staff_address` varchar(30) NOT NULL,
  `staff_gender` varchar(10) NOT NULL,
  `staff_bdate` date NOT NULL,
  `staff_position` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_ID`, `staff_fname`, `staff_lname`, `staff_contactNumber`, `staff_address`, `staff_gender`, `staff_bdate`, `staff_position`) VALUES
(9, 'Sam          ', 'Smith     ', 123123, 'Bago City', 'Male', '2018-02-17', 'Secretary');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `trans_id` int(11) NOT NULL,
  `trans_type` varchar(15) NOT NULL,
  `trans_date` date NOT NULL,
  `trans_patientid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`trans_id`, `trans_type`, `trans_date`, `trans_patientid`) VALUES
(2, 'Schedule', '2001-02-15', 25),
(3, 'Schedule', '2018-02-16', 28),
(4, 'Schedule', '2018-02-16', 26),
(5, 'Pathology', '2018-02-16', 21),
(6, 'Hematology', '2018-02-16', 21),
(7, 'Ultrasound', '2018-02-16', 30),
(8, 'Urinalysis', '2018-02-16', 30),
(9, 'X-Ray', '2018-02-16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ultrasound`
--

CREATE TABLE `ultrasound` (
  `ultra_id` int(5) NOT NULL,
  `sched_ID` int(5) NOT NULL,
  `patient_ID` int(5) NOT NULL,
  `ultra_date` date NOT NULL,
  `ultra_reason` varchar(255) NOT NULL,
  `ultra_fetusQty` int(11) NOT NULL,
  `ultra_biparietalDiameter` int(11) NOT NULL,
  `ultra_occiDiameter` int(11) NOT NULL,
  `ultra_abdominal` int(11) NOT NULL,
  `ultra_fetalHeart` int(11) NOT NULL,
  `ultra_distalFemoral` int(11) NOT NULL,
  `ultra_femoralLenght` int(11) NOT NULL,
  `ultra_headCircumference` int(11) NOT NULL,
  `ultra_headCircumferenceWeek` int(11) NOT NULL,
  `ultra_estimatedFetal` int(11) NOT NULL,
  `ultra_hadlock` int(11) NOT NULL,
  `ultra_warsof` int(11) NOT NULL,
  `ultra_amonioticFluid1` int(11) NOT NULL,
  `ultra_amonioticFluid2` int(11) NOT NULL,
  `ultra_amonioticFluid3` int(11) NOT NULL,
  `ultra_amonioticFluid4` int(11) NOT NULL,
  `ultra_cervical` int(11) NOT NULL,
  `ultra_cervicalDesc` varchar(255) NOT NULL,
  `ultra_fetalTone` int(11) NOT NULL,
  `ultra_fetalMovement` int(11) NOT NULL,
  `ultra_fetalBreathing` int(11) NOT NULL,
  `ultra_biophysicalProfile` int(11) NOT NULL,
  `ultra_other` varchar(255) NOT NULL,
  `ultra_remark` varchar(255) NOT NULL,
  `ultra_genweeks` int(11) NOT NULL,
  `comp_miscarriage` smallint(6) NOT NULL,
  `comp_premature` smallint(6) NOT NULL,
  `comp_preclampsia` smallint(6) NOT NULL,
  `comp_chromosal` smallint(6) NOT NULL,
  `comp_oligohydra` smallint(6) NOT NULL,
  `comp_ectopic` smallint(6) NOT NULL,
  `comp_placenta` smallint(6) NOT NULL,
  `year` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ultrasound`
--

INSERT INTO `ultrasound` (`ultra_id`, `sched_ID`, `patient_ID`, `ultra_date`, `ultra_reason`, `ultra_fetusQty`, `ultra_biparietalDiameter`, `ultra_occiDiameter`, `ultra_abdominal`, `ultra_fetalHeart`, `ultra_distalFemoral`, `ultra_femoralLenght`, `ultra_headCircumference`, `ultra_headCircumferenceWeek`, `ultra_estimatedFetal`, `ultra_hadlock`, `ultra_warsof`, `ultra_amonioticFluid1`, `ultra_amonioticFluid2`, `ultra_amonioticFluid3`, `ultra_amonioticFluid4`, `ultra_cervical`, `ultra_cervicalDesc`, `ultra_fetalTone`, `ultra_fetalMovement`, `ultra_fetalBreathing`, `ultra_biophysicalProfile`, `ultra_other`, `ultra_remark`, `ultra_genweeks`, `comp_miscarriage`, `comp_premature`, `comp_preclampsia`, `comp_chromosal`, `comp_oligohydra`, `comp_ectopic`, `comp_placenta`, `year`) VALUES
(3, 37, 12, '2018-02-15', '1', 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, '1', 0, 1, 11, 1, '1', '1', 6, 1, 0, 0, 0, 0, 0, 0, '2018'),
(4, 38, 31, '2018-02-15', 'sample', 2, 23, 23, 23, 23, 23, 23, 23, 0, 23, 12, 12, 12, 12, 12, 23, 23, '23', 23, 123, 123, 10, 'sample', 'sample', 2, 0, 1, 0, 0, 0, 0, 0, '2018'),
(5, 38, 31, '2018-02-16', 'sample', 1, 123, 123, 123, 312, 123, 123, 123, 0, 123, 123, 123, 0, 0, 0, 0, 123, '123', 123, 123, 123, 9, '123', '123', 2, 0, 0, 1, 0, 0, 1, 0, '2018'),
(6, 39, 30, '2018-02-16', 'sample', 2, 12, 123, 123, 123, 123, 123, 132, 0, 123, 12, 12, 123, 123, 123, 123, 123, '123', 123, 123, 123, 3, '123', '123', 2, 0, 0, 0, 0, 0, 1, 0, '2018'),
(8, 39, 30, '2018-02-16', 'asd', 1, 123, 123, 123, 123, 123, 123, 123, 0, 123, 123, 123, 123, 123, 123, 123, 123, '123', 123, 123, 123, 1, '123', '123', 2, 1, 0, 0, 0, 0, 0, 0, '2018');

-- --------------------------------------------------------

--
-- Table structure for table `urinalysis`
--

CREATE TABLE `urinalysis` (
  `uri_ID` int(11) NOT NULL,
  `sched_ID` int(5) NOT NULL,
  `patient_ID` int(5) NOT NULL,
  `uri_date` date NOT NULL,
  `uri_color` varchar(11) NOT NULL,
  `uri_transparency` varchar(11) NOT NULL,
  `uri_pH` int(11) NOT NULL,
  `uri_specificGravity` int(11) NOT NULL,
  `uri_sugar` int(11) NOT NULL,
  `uri_protein` int(11) NOT NULL,
  `uri_MICtransparency` varchar(11) NOT NULL,
  `uri_MICpH` int(11) NOT NULL,
  `uri_MICspecificGravity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urinalysis`
--

INSERT INTO `urinalysis` (`uri_ID`, `sched_ID`, `patient_ID`, `uri_date`, `uri_color`, `uri_transparency`, `uri_pH`, `uri_specificGravity`, `uri_sugar`, `uri_protein`, `uri_MICtransparency`, `uri_MICpH`, `uri_MICspecificGravity`) VALUES
(2, 39, 30, '2018-02-16', 'Blue', 'Blue', 23, 23, 23, 12, 'Red', 23, 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_ID` int(5) NOT NULL,
  `staff_ID` int(5) NOT NULL,
  `user_userName` varchar(15) NOT NULL,
  `user_password` varchar(15) NOT NULL,
  `user_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `staff_ID`, `user_userName`, `user_password`, `user_type`) VALUES
(4, 3, 'doctor', 'doctor', 'doctor'),
(5, 0, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `xray`
--

CREATE TABLE `xray` (
  `xray_ID` int(5) NOT NULL,
  `sched_ID` int(5) NOT NULL,
  `patient_ID` int(5) NOT NULL,
  `xray_date` date NOT NULL,
  `xray_impression` varchar(255) NOT NULL,
  `xray_remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xray`
--

INSERT INTO `xray` (`xray_ID`, `sched_ID`, `patient_ID`, `xray_date`, `xray_impression`, `xray_remark`) VALUES
(1, 42, 0, '2018-02-16', 'asd', 'asd'),
(2, 42, 0, '2018-02-16', 'asd', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hematology`
--
ALTER TABLE `hematology`
  ADD PRIMARY KEY (`hema_ID`);

--
-- Indexes for table `pathology`
--
ALTER TABLE `pathology`
  ADD PRIMARY KEY (`pathology_ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_ID`);

--
-- Indexes for table `patientcheckup`
--
ALTER TABLE `patientcheckup`
  ADD PRIMARY KEY (`pc_ID`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`presc_ID`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sched_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_ID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `ultrasound`
--
ALTER TABLE `ultrasound`
  ADD PRIMARY KEY (`ultra_id`);

--
-- Indexes for table `urinalysis`
--
ALTER TABLE `urinalysis`
  ADD PRIMARY KEY (`uri_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `xray`
--
ALTER TABLE `xray`
  ADD PRIMARY KEY (`xray_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hematology`
--
ALTER TABLE `hematology`
  MODIFY `hema_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pathology`
--
ALTER TABLE `pathology`
  MODIFY `pathology_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `patientcheckup`
--
ALTER TABLE `patientcheckup`
  MODIFY `pc_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `presc_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `sched_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ultrasound`
--
ALTER TABLE `ultrasound`
  MODIFY `ultra_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `urinalysis`
--
ALTER TABLE `urinalysis`
  MODIFY `uri_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `xray`
--
ALTER TABLE `xray`
  MODIFY `xray_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
