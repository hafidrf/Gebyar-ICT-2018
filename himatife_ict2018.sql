-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2019 at 11:52 AM
-- Server version: 10.2.24-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himatife_ict2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'ict-admin@ict2018.uin-malang.ac.id', '$2y$12$sQqR9j7Z7Qr2UquVWx12meRuwJRyTjOSjWRY5WJRjXoCxTV/qQdIa');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_lomba`
--

CREATE TABLE `kategori_lomba` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_lomba`
--

INSERT INTO `kategori_lomba` (`id`, `nama_kategori`) VALUES
(1, 'Drone Racing'),
(2, 'Creative Development Competition'),
(3, 'Cinematography');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bukti_transfer` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `user_id`, `bukti_transfer`, `status`) VALUES
(1, 3, 'pembayaran_3_1534856501.png', 0),
(2, 11, 'pembayaran_11_1535543308.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_tim` varchar(255) NOT NULL,
  `anggota_1` varchar(255) DEFAULT NULL,
  `anggota_2` varchar(255) DEFAULT NULL,
  `kategori_id` int(11) NOT NULL,
  `judul_aplikasi` varchar(255) DEFAULT NULL,
  `no_telp` varchar(20) NOT NULL,
  `link_video` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `user_id`, `nama_tim`, `anggota_1`, `anggota_2`, `kategori_id`, `judul_aplikasi`, `no_telp`, `link_video`) VALUES
(24, 24, 'Kawulo Alyd', 'Mochammad Trapiji', 'M Alfi Zahamsyah', 3, 'You see it!', '081231736905', 'https://youtu.be/kMWu2xEk6r0');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `proposal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id`, `user_id`, `proposal`) VALUES
(1, 13, 'proposal_13_1536582604.docx'),
(2, 10, 'proposal_10_1536689478.pdf'),
(3, 8, 'proposal_8_1536980562.docx'),
(4, 9, 'proposal_9_1537020763.pdf'),
(5, 14, 'proposal_14_1539100697.pdf'),
(6, 21, 'proposal_21_1539225560.docx'),
(7, 43, 'proposal_43_1539425424.pdf'),
(8, 44, 'proposal_44_1539425645.pdf'),
(9, 16, 'proposal_16_1539439418.pdf'),
(10, 29, 'proposal_29_1539447397.docx'),
(11, 15, 'proposal_15_1539483405.docx'),
(12, 42, 'proposal_42_1539536484.pdf'),
(13, 33, 'proposal_33_1539539996.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`) VALUES
(16, 'naufalnurfauzi@gmail.com'),
(12, 'iffatulizzah744@gmail.com'),
(11, 'rizkabirthday31@gmail.com'),
(13, 'kevinelmyaziz@gmail.com'),
(9, 'dickybhismawan@gmail.com'),
(14, 'rachmaneryan86@gmail.com'),
(17, 'farraharrazyrazy@gmail.com'),
(18, 'muhammadsyahrulfaizin23@gmail.com'),
(19, 'ekapujirahayulestari@gmail.com'),
(20, 'najwanamira23@gmail.com'),
(21, 'alif.anshory16@gmail.com'),
(22, 'budi12@gmail.com'),
(23, 'budianto@gmail.com'),
(24, 'ariffathoni@yahoo.com'),
(25, '');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `link_video` varchar(255) NOT NULL,
  `proposal` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nama`) VALUES
(31, 'yusrilihzamaulana10@gmail.com', '$2y$10$k2GIubev2zM2S7qRWEvt0uNSCvmFRoOMd/5.B0BZvvKdZqC1fqnjG', 'Yusril ihza maulana'),
(10, 'showup.office@gmail.com', '$2y$10$nmDRcNTCluR8S5Xgf4RYa.krqmdX29Pr/maj1ubUDFGq7JKtN9Q0G', 'Taufan Fadhilah Iskandar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_lomba`
--
ALTER TABLE `kategori_lomba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `id_kategori` (`kategori_id`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_lomba`
--
ALTER TABLE `kategori_lomba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
