-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2017 at 11:27 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dct`
--

-- --------------------------------------------------------

--
-- Table structure for table `dk`
--

CREATE TABLE `dk` (
  `masv` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `malhp` char(6) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `ip` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` char(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dk`
--

INSERT INTO `dk` (`masv`, `malhp`, `ip`, `time`) VALUES
('S02', 'H01215', '::1', '25/10/2015 07:25:02'),
('S02', 'H02215', '::1', '25/10/2015 07:25:02'),
('S02', 'H06215', '::1', '25/10/2015 07:25:02'),
('S02', 'H07215', '::1', '25/10/2015 07:25:02'),
('S02', 'H15215', '::1', '25/10/2015 07:25:02'),
('S03', 'H01215', '::1', '25/10/2015 07:27:04'),
('S03', 'H04215', '::1', '25/10/2015 07:27:04'),
('S03', 'H05215', '::1', '25/10/2015 07:27:04'),
('S03', 'H07215', '::1', '25/10/2015 07:27:04'),
('S03', 'H13215', '::1', '25/10/2015 07:27:04'),
('S03', 'H14215', '::1', '25/10/2015 07:27:04'),
('S03', 'H15215', '::1', '25/10/2015 07:27:04'),
('S04', 'H01215', '::1', '25/10/2015 07:28:01'),
('S04', 'H04215', '::1', '25/10/2015 07:28:01'),
('S04', 'H05215', '::1', '25/10/2015 07:28:01'),
('S04', 'H07215', '::1', '25/10/2015 07:28:01'),
('S04', 'H12215', '::1', '25/10/2015 07:28:01'),
('S04', 'H13215', '::1', '25/10/2015 07:28:01'),
('S04', 'H15215', '::1', '25/10/2015 07:28:01'),
('S12', 'H01215', '::1', '25/10/2015 09:37:05'),
('S12', 'H11215', '::1', '25/10/2015 09:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `gv`
--

CREATE TABLE `gv` (
  `magv` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `hoten` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `matkhau` char(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gv`
--

INSERT INTO `gv` (`magv`, `hoten`, `matkhau`) VALUES
('T01', 'Nguyễn Văn Lành', '1234'),
('T02', 'Hoàng Thị Mỹ Lệ', '1234'),
('T03', 'Ngô Đình Thưởng', '1234'),
('T04', 'Đoàn Duy Bình', '1234'),
('T05', 'Lê Văn Mỹ', '1234'),
('T06', 'Nguyễn Trần Quốc Vinh', '1234'),
('T07', 'Trần Quốc Chiến', '1234'),
('T08', 'Vũ Thị Trà', '1234'),
('T09', 'Nguyễn Thanh Tuấn', '1234'),
('T10', 'Nguyễn Phi Lê', '1234'),
('T11', 'Vương Bích Thủy', '1234'),
('T12', 'Trần Thị Tốt', '1234'),
('T13', 'Võ Thị Mỹ Linh', '1234'),
('T14', 'Nguyễn Văn Hải', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `hp`
--

CREATE TABLE `hp` (
  `mahp` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `tenhp` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tinchi` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hp`
--

INSERT INTO `hp` (`mahp`, `tenhp`, `tinchi`) VALUES
('H01', 'Java cơ bản', 3),
('H02', 'Java nâng cao', 3),
('H03', 'Lập trình trực quan', 3),
('H04', 'Công nghệ XML và Ứng dụng', 3),
('H05', 'Kiến trúc máy tính', 3),
('H06', 'Mạng máy tính', 3),
('H07', 'Cơ sở dữ liệu', 3),
('H08', 'Lý thuyết đồ thị', 3),
('H10', 'Mã hóa', 3),
('H11', 'Toán rời rạc', 3),
('H12', 'Tư tưởng Hồ Chí Minh', 2),
('H13', 'Chủ nghĩa xã hội khoa học', 2),
('H14', 'Anh văn 1', 2),
('H15', 'Anh văn 2', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sv`
--

CREATE TABLE `sv` (
  `masv` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `hoten` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lop` char(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quequan` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `matkhau` char(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phai` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sv`
--

INSERT INTO `sv` (`masv`, `hoten`, `lop`, `quequan`, `matkhau`, `phai`) VALUES
('S01', 'Hoàng Đình Đạt', '15T1', 'Trà My,Quảng Nam', '1234', 1),
('S02', 'Lê Văn Hậu', '15T2', 'Đầm Dơi, Bạc Liêu', '1234', 0),
('S03', 'Lê Thị Hồng Thắn', '15T1', 'Trà My, Quảng Nam', '1234', 1),
('S04', 'Hồ Thanh Lành', '14T2', 'Na rì, Bắc Kạn', '1234', 0),
('S05', 'Lâm Chí Mẫn', '13T2', 'Đồng Văn, Hà Giang', '1234', 1),
('S06', 'Lê Kim Vui', '14T2', 'Trà Bồng, Quảng Ngãi', '1234', 1),
('S07', 'Hồ Tùng Lâm', '16T3', 'Năm Căn, Bạc Liêu', '1234', 1),
('S08', 'Phạm Thị Lên', '15T3', 'Cát Hải, Hải Phòng', '1234', 1),
('S09', 'Phạm Hoài Ân', '16T3', 'Nông Sơn, Quảng Nam', '1234', 0),
('S10', 'Đỗ Công Chính', '17T3', 'Phú Ninh, Quảng Nam', '1234', 1),
('S11', 'Trương Thế Hải', '14T3', 'Quỳ Hợp, Nghệ An', '1234', 1),
('S12', 'Huỳnh Quang Bảo', '15T1', 'Tiên Phước, Quảng Nam', '1234', 1),
('S13', 'Nguyễn Thị Hà', '14T2', 'Rừng Xà Nu', '1234', 1),
('S14', 'Đỗ Phú Nhân', '15T1', 'Đông Giang, Quảng Nam', '1234', 1),
('S15', 'Nguyễn Mai Trung', '15T3', 'Bảo Ninh, Quảng Bình', '1234', 1),
('S16', 'Lương Hữu Đạt', '12T1', 'Ba Đình, Hà Nội', '1234', 1),
('S17', 'Hà Quang Ảnh', '12T2', 'Liên Chiểu, Đà Nẵng', '1234', 1),
('S18', 'Nguyễn Hữu Anh Khoa', '15T1', 'Sơn Hà, Phú Yên', '1234', 1),
('S19', 'Nguyễn Khắc Sơn', '15T2', 'Tiên Yên, Quảng Ninh', '1234', 0),
('S20', 'Nguyễn Thị Thảo', '15T2', 'Tây Sơn Bình Định', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tk`
--

CREATE TABLE `tk` (
  `magv` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `malhp` char(6) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `phong` char(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thu` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tiet` char(5) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tk`
--

INSERT INTO `tk` (`magv`, `malhp`, `phong`, `thu`, `tiet`) VALUES
('T01', 'H01215', 'A5-106', '2', '1-2'),
('T01', 'H02215', 'A5-505', '2', '3-4'),
('T03', 'H04215', 'B3-201', '3', '1-3'),
('T04', 'H05215', 'B3-505', '4', '1-2'),
('T05', 'H06215', 'B3-707', '4', '3-4'),
('T06', 'H07215', 'A5-807', '5', '3-4'),
('T07', 'H07215', 'B3-909', '5', '1-2'),
('T10', 'H12215', 'A5-208', '2', '3-4'),
('T10', 'H13215', 'HT B4', '6', '1-2'),
('T11', 'H11215', 'B3-103', '2', '1-2'),
('T12', 'H14215', 'B3-101', '7', '1-2'),
('T13', 'H12215', 'HT A5', '6', '3-4'),
('T13', 'H15215', 'A5-101', '7', '3-4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dk`
--
ALTER TABLE `dk`
  ADD PRIMARY KEY (`masv`,`malhp`);

--
-- Indexes for table `gv`
--
ALTER TABLE `gv`
  ADD PRIMARY KEY (`magv`);

--
-- Indexes for table `hp`
--
ALTER TABLE `hp`
  ADD PRIMARY KEY (`mahp`);

--
-- Indexes for table `sv`
--
ALTER TABLE `sv`
  ADD PRIMARY KEY (`masv`);

--
-- Indexes for table `tk`
--
ALTER TABLE `tk`
  ADD PRIMARY KEY (`magv`,`malhp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
