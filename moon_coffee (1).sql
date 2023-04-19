-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 19, 2023 lúc 04:05 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `moon coffee`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ingredient`
--

CREATE TABLE IF NOT EXISTS `moon_coffee`.`ingredient` (
  `Product_p_id` int(255) NOT NULL,
  `i_name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `i_quantity` int(100) NOT NULL,
  `i_unit` enum('g','ml') COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE IF NOT EXISTS `moon_coffee`. `product` (
  `p_id` int(100) NOT NULL COMMENT 'id sản phẩm',
  `p_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL COMMENT 'tên sản phẩm ',
  `p_price` int(255) NOT NULL COMMENT 'giá sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_price`) VALUES
(1, 'Cafe đen', 30000),
(2, 'Café sữa', 30000),
(3, 'Coffe latte', 30000),
(4, 'Coffe americano', 30000),
(5, 'White coffee', 30000),
(6, 'Coffee capuchino', 30000),
(7, 'Trà dưa lưới hoàng kim', 30000),
(8, 'Trà đào', 30000),
(9, 'Trà vải', 30000),
(10, 'Trà cherry oolong', 30000),
(11, 'Trà đào cam sả', 30000),
(12, 'Hồng trà sữa', 30000),
(13, 'Trà sữa gạo Hàn Quốc', 30000),
(14, 'Trà bá tước', 30000),
(15, 'Trà tắc xí muội', 30000),
(16, 'Trà xanh latte', 30000),
(17, 'Trà lipton chanh mật ong', 30000),
(18, 'Chocolate coconut', 30000),
(19, 'Sữa chua hoa anh đào', 30000),
(20, 'Choco milk', 30000),
(21, 'Cam ép', 30000),
(22, 'Soda trà xanh', 30000),
(23, 'Soda chanh dây', 30000),
(24, 'Soda bạc bà', 30000),
(25, 'Soda số đỏ', 30000),
(26, 'Soda đào hoa', 30000),
(27, 'Soda Vận hên', 30000),
(28, 'Soda mặn mà', 30000),
(29, 'Soda phiêu bồng', 30000),
(30, 'Lime juice', 30000),
(31, 'Choco smoothie', 30000),
(32, 'Greentea smoothie', 30000),
(33, 'Capu smoothie', 30000),
(34, 'Mocha smoothie', 30000),
(35, 'Blueberry  yogurt smoothie', 30000),
(36, 'Mango  yogurt smoothie', 30000),
(37, 'Coffe đá xay caramel', 30000),
(38, 'Yogurt natural', 30000),
(39, 'Golden yogurt ', 30000);


--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT COMMENT 'id sản phẩm', AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
