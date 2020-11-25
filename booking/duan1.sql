-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 05:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(100) NOT NULL,
  `name_combo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dinhvu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay` date NOT NULL,
  `gio` datetime NOT NULL,
  `nhanvien` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_combo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `combo`
--

CREATE TABLE `combo` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(100) NOT NULL,
  `noidung` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dm` int(100) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `combo`
--

INSERT INTO `combo` (`id`, `name`, `image`, `price`, `noidung`, `des`, `id_dm`) VALUES
(1, 'thevu111', '', 12222, 'eeeeee', 'eeeeeeee', 1),
(2, '1111', 'h8-15977346987331229687877.jpg', 987, 'sdfsd', '8888', 2),
(29, 'thevu', '1175897499863272484945241294781775349471563o-1597808023242311574476.jpg', 4, '4', '4', 4);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(100) NOT NULL,
  `name_dm` int(100) NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung_dm` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name_dm`, `image`, `noidung_dm`) VALUES
(1, 0, '1174283767748324966154647071253213871751615n-1597583948222478350416.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id_nv` int(100) NOT NULL,
  `name_nv` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id_nv`, `name_nv`) VALUES
(1, 'Nguyễn Thế Vũ');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(50) NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `image`, `trangthai`) VALUES
(10, 'about-hotel-thumb.jpg', 'on'),
(11, 'blog-pic4.jpg', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `name`, `email`, `password`, `trangthai`) VALUES
(1, 'admin', 'admin@gmail.com', '123456', 'admin'),
(2, 'thevu', 'ansghost@yahoo.com', '1', 'Thành viên');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(100) NOT NULL,
  `tieude` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` date NOT NULL,
  `tacgia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `image`, `noidung`, `mota`, `time`, `tacgia`) VALUES
(1, 'lol', 'cS-25.jpg', 'Lăn kim bằng máy (phi kim) và lăn kim bằng tay đều sử dụng cơ chế tạo ra các vết thương giả trên da bằng các đầu .\r\n\r\nkim lăn siêu nhỏ nhằm kích thích da sản sinh Collagen và Elastin. Hỗ trợ điều trị sẹo lõm, trị mụn, tái tạo một làn da .\r\n\r\nmới khỏe mạnh, sáng mịn và đều màu hơn.\r\n\r\nVậy lăn kim bằng máy và lăn kim bằng tay có gì khác nhau và phương pháp nào đem lại hiệu quả cao hơn? Cùng chúng tôi tìm hiểu trong bài viết dưới đây nhé!.\r\n\r\nLăn kim bằng tay là gì?.\r\nLăn kim bằng tay hay còn gọi là lăn kim thủ công là phương pháp sử dụng một cây lăn được thiết kế giống cây lăn sơn nhỏ, trên đầu bánh lăn có khoảng 200 đầu kim nhỏ, sắc bén, làm bằng thép không gỉ.', 'Lăn kim bằng máy (phi kim) và lăn kim bằng tay đều sử dụng cơ chế tạo ra các vết thương giả trên da ', '2020-11-26', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `combo`
--
ALTER TABLE `combo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_dm` (`id_dm`),
  ADD UNIQUE KEY `id_dm_2` (`id_dm`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id_nv`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `combo`
--
ALTER TABLE `combo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id_nv` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
