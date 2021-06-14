-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2018 at 06:59 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schizionnewatika`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email_admin` varchar(25) NOT NULL,
  `pass_admin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `pass_admin`) VALUES
(1, 'Atika', 'atika@yahoo.com', 'atika');

-- --------------------------------------------------------

--
-- Table structure for table `caregiver`
--

CREATE TABLE `caregiver` (
  `id_cg` int(20) NOT NULL,
  `nama_cg` varchar(100) NOT NULL,
  `umur_cg` int(3) NOT NULL,
  `jk_lp` varchar(1) NOT NULL,
  `iduser_cg` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caregiver`
--

INSERT INTO `caregiver` (`id_cg`, `nama_cg`, `umur_cg`, `jk_lp`, `iduser_cg`) VALUES
(1, 'Bidayatul Masulah', 22, 'p', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cg_answer`
--

CREATE TABLE `cg_answer` (
  `id_ca` int(10) NOT NULL,
  `answer_ca` varchar(500) NOT NULL,
  `idcgquestion_ca` int(10) NOT NULL,
  `idcg_ca` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cg_question`
--

CREATE TABLE `cg_question` (
  `idcg_question` int(10) NOT NULL,
  `deskcg_question` varchar(500) NOT NULL,
  `idkat_question` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cg_question`
--

INSERT INTO `cg_question` (`idcg_question`, `deskcg_question`, `idkat_question`) VALUES
(1, 'Did he/she ever told a story or showed signs that there was a recurring thought in his mind?', 1),
(2, 'Did he/she ever told somethings or showed signs that did not come from him/herself?)', 1),
(3, 'Did he ever told or showed sign that he ever done somethings unconscious that is not considered normal by other so you can find out?', 1),
(4, 'Did he ever told or showed signs that he felt someone was controlling himself in an activity?', 2),
(5, 'Did he ever told or showed signs to you that he felt there is somethings affecting him?', 2),
(6, 'Did he ever told or showed signs that he felt powerless to control himself because there ar vother forces that control him?', 2),
(7, 'Did he ever told or showed signs that he had experience interacting with mystical things?', 2),
(8, 'Did he evere told and showed signs to you that he had heard a whispers continously which other poeple do not think existed?', 3),
(9, 'Did he ever told or showed some signs to you that he have a great belief in somethings that others don''t have?', 4),
(10, 'Did he ever told or showed signs to you that he feel hearing a whispers from somethings unreal?', 5),
(11, 'When in the middle conversation, did he often lost concentration  and even talk about other things?', 6),
(12, 'Did you ever seen him/her in a position or doing strange movements for a long time?', 7),
(13, 'Did he often do negative deeds? Such as apathetic, rarely talk, emotional respons unfair etc', 8),
(14, 'Did he began to experience a change in attitude or behavior as above more than a month?', 9),
(15, 'Did he ever tell or show signs that he is not interested in doing activities that he often did before?', 10),
(16, 'Did he tell or show signs that he feel lost his life purpose?', 10),
(17, 'Did he ever tell or show signs that he want to stop doing all of his activities?', 10),
(18, 'Did he ever told or show signs to you that he avoid to interact with others?', 10);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `tipe_kategori` int(2) NOT NULL,
  `poin_kategori` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `tipe_kategori`, `poin_kategori`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1),
(4, 2, 1),
(5, 2, 1),
(6, 2, 1),
(7, 2, 1),
(8, 3, 1),
(9, 4, 1),
(10, 5, 2),
(11, 6, 2),
(12, 7, 2),
(13, 8, 2),
(14, 9, 3),
(15, 10, 4),
(16, 10, 4),
(17, 10, 4),
(18, 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id_result` int(2) NOT NULL,
  `cga_result` int(2) DEFAULT NULL,
  `idusera_result` int(20) NOT NULL,
  `usera_result` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id_result`, `cga_result`, `idusera_result`, `usera_result`) VALUES
(15, 3, 1, 1),
(16, 3, 6, 1),
(17, 3, 6, 1),
(18, 3, 1, 1),
(19, 3, 1, 1),
(20, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id_treatment` int(1) NOT NULL,
  `hasil_treatment` varchar(1000) NOT NULL,
  `deskripsi_treatment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id_treatment`, `hasil_treatment`, `deskripsi_treatment`) VALUES
(1, 'No Indication of Schizophrenia', 'Your answers suggest that there is Little or No indication that you have symptoms common among people with schizophrenia. However, this quiz is no substitute for a proper diagnosis from a health care professional and we would encourage you to schedule an appointment with your doctor or other mental health professional now.'),
(2, 'Strong Indication of Schizophrenia', 'Your answers suggest a Strong indication that you are experiencing symptoms common among people with schizophrenia. However, this quiz is no substitute for a proper diagnosis from a health care professional and we would encourage you to schedule an appointment with your doctor or other mental health professional now.'),
(3, 'Strong Indication of Schizophrenia', 'Your Caregiver answers suggest a Strong indication that you are experiencing symptoms common among people with schizophrenia. However, this quiz is no substitute for a proper diagnosis from a health care professional and we would encourage you to schedule an appointment with your doctor or other mental health professional now.'),
(4, 'Strong Indication of Schizophrenia', 'Both You and Your Caregiver answers suggest a Strong indication that you are experiencing symptoms common among people with schizophrenia. However, this quiz is no substitute for a proper diagnosis from a health care professional and we would encourage you to schedule an appointment with your doctor or other mental health professional now.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `umur_user` int(3) NOT NULL,
  `jk_user` varchar(1) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `namacg_user` varchar(30) DEFAULT NULL,
  `umurcg_user` int(3) DEFAULT NULL,
  `jkcg_user` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `umur_user`, `jk_user`, `email_user`, `namacg_user`, `umurcg_user`, `jkcg_user`) VALUES
(1, 'Ayu Arista', 20, 'F', 'ayu@yahoo.com', 'bidayatul masulah', 20, 'F'),
(2, 'Atika dwi ', 20, 'P', 'atika@yahoo.com', NULL, NULL, NULL),
(3, 'Himatika Airlanggga', 20, 'f', 'antarixa@yahoo.com', '', 0, ''),
(4, '', 0, 'm', '', '', 0, ''),
(5, 'nian ', 12, 'f', 'nia@gmail.com', 'bida', 22, 'f'),
(6, 'airlangga', 33, 'm', 'airlangga@gmail.com', 'qw', 11, 'm');

-- --------------------------------------------------------

--
-- Table structure for table `user_answer`
--

CREATE TABLE `user_answer` (
  `id_ua` int(10) NOT NULL,
  `answer_ua` varchar(100) NOT NULL,
  `iduser_ua` int(10) NOT NULL,
  `idquestion_ua` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_question`
--

CREATE TABLE `user_question` (
  `id_question` int(10) NOT NULL,
  `desk_question` varchar(500) NOT NULL,
  `id_kategori` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_question`
--

INSERT INTO `user_question` (`id_question`, `desk_question`, `id_kategori`) VALUES
(1, 'Do you have some repetitive thoughts in your mind?', 1),
(2, 'Do you ever think about something that are not sourced from yourself  ?', 1),
(3, 'Do you ever do something things that are not considered normal by community and without you realize it is known by the other  ?', 1),
(4, 'Do you feel there is Someone controlling yourself in an activity?', 2),
(5, 'Do you feel there is something  affecting yourself when you do some activity ? ', 2),
(6, 'Do you feel powerless to control your self because there are other forces that control you?', 2),
(7, 'Do you ever had experience interacting with mystical things?', 2),
(8, 'Do you ever continously heard a whispers that others people do not think existed?', 3),
(9, 'Do you have a great belief in somethings that other don''t have?', 4),
(10, 'Do you ever feel hearing a whispers from somethings unreal?', 5),
(11, 'When in the middle conversation, do you often lose concentration and even talk about other things?', 6),
(12, 'Do you ever been in a position or doing certain movements that others think are strange for a long time?', 7),
(13, 'Do you often behaved negatively ? (Pathetic, rarely talk, emotional respon isn''t fair etc)', 8),
(14, 'Do you feel experiencing various things as above more than a month?', 9),
(15, 'Do you not interested anymore in doing activities that you often did before?', 10),
(16, 'Do you feel lost your life purpose?', 10),
(17, 'Do you feel want to stop doing all of your activities?', 10),
(18, 'Do you avoid to interact with others?', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `caregiver`
--
ALTER TABLE `caregiver`
  ADD PRIMARY KEY (`id_cg`);

--
-- Indexes for table `cg_answer`
--
ALTER TABLE `cg_answer`
  ADD PRIMARY KEY (`id_ca`);

--
-- Indexes for table `cg_question`
--
ALTER TABLE `cg_question`
  ADD PRIMARY KEY (`idcg_question`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id_result`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id_treatment`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD PRIMARY KEY (`id_ua`);

--
-- Indexes for table `user_question`
--
ALTER TABLE `user_question`
  ADD PRIMARY KEY (`id_question`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `caregiver`
--
ALTER TABLE `caregiver`
  MODIFY `id_cg` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cg_answer`
--
ALTER TABLE `cg_answer`
  MODIFY `id_ca` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cg_question`
--
ALTER TABLE `cg_question`
  MODIFY `idcg_question` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id_result` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id_treatment` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_answer`
--
ALTER TABLE `user_answer`
  MODIFY `id_ua` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_question`
--
ALTER TABLE `user_question`
  MODIFY `id_question` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
