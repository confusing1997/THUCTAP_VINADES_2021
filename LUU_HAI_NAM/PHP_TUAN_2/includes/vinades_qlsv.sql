-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 02:07 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinades_qlsv`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sinhvien`
--

CREATE TABLE `tbl_sinhvien` (
  `id` int(11) NOT NULL,
  `ma_sinh_vien` varchar(250) NOT NULL,
  `ten_sinh_vien` varchar(250) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `gioi_tinh` varchar(250) NOT NULL,
  `dia_chi` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sdt` varchar(250) NOT NULL,
  `cmnd` varchar(250) NOT NULL,
  `mo_ta` varchar(250) NOT NULL,
  `anh_dai_dien` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sinhvien`
--

INSERT INTO `tbl_sinhvien` (`id`, `ma_sinh_vien`, `ten_sinh_vien`, `ngay_sinh`, `gioi_tinh`, `dia_chi`, `email`, `sdt`, `cmnd`, `mo_ta`, `anh_dai_dien`) VALUES
(20, '15A10012233', 'Hoàng Xuân Diệu', '1997-12-23', 'Nam', 'Hà Nội', 'hoang@gmail.com', '0971245675', '001098776541', 'Đẹp trai', ''),
(21, '15A101997', 'Nguyễn Huy Tưởng', '1997-01-01', 'Nam', 'Làng Việt Kiều', 'tuongHuy@gmail.com', '0982321231', '008732412', 'Đẹp trai nhất', ''),
(22, '15A100233323', 'Huỳnh Minh Anh', '2000-01-21', 'Nữ', 'Mỹ Đình', 'huongifan@gmail.com', '0976523412', '223424131', 'Xinh xắn', ''),
(24, '11A10010223', 'Huỳnh Thúc Kháng', '1999-08-09', 'Nam', 'Hà Đông', 'huynhthuckhang.it@gmail.com', '0971234567', '012396945', 'Beautiful', '9754-luuhainam.jpg'),
(25, '12A10010223', 'Nguyễn Văn Bảo', '1999-10-06', 'Nam', 'Hà Nội', 'baonguyen@gmail.com', '0987653465', '098765456', 'Handsome', '3188-Real_ava.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_sinhvien`
--
ALTER TABLE `tbl_sinhvien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_sinhvien`
--
ALTER TABLE `tbl_sinhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
