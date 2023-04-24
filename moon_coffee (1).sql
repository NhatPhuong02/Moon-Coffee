-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 24, 2023 lúc 02:15 PM
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
-- Cơ sở dữ liệu: `moon_coffee`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ingredient`
--

CREATE TABLE `ingredient` (
  `i_id` int(100) NOT NULL,
  `Product_p_id` int(255) NOT NULL,
  `Ingredient_defaut_id_id` int(100) NOT NULL,
  `i_quantity` int(100) NOT NULL,
  `i_unit` enum('g','ml') COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `ingredient`
--

INSERT INTO `ingredient` (`i_id`, `Product_p_id`, `Ingredient_defaut_id_id`, `i_quantity`, `i_unit`) VALUES
(18, 95, 4, 20, 'g'),
(19, 95, 9, 10, 'g'),
(20, 96, 20, 10, 'g'),
(21, 96, 4, 20, 'g'),
(22, 97, 3, 5, 'g'),
(23, 97, 21, 105, 'g'),
(24, 98, 3, 5, 'g'),
(25, 99, 4, 20, 'g'),
(26, 99, 20, 20, 'g'),
(27, 99, 21, 60, 'g'),
(28, 100, 3, 5, 'g'),
(29, 100, 21, 105, 'g'),
(30, 101, 27, 30, 'g'),
(31, 101, 12, 5, 'g'),
(32, 101, 15, 30, 'g'),
(33, 101, 23, 20, 'g'),
(34, 101, 9, 20, 'g'),
(35, 102, 9, 20, 'g'),
(36, 102, 7, 20, 'g'),
(37, 102, 11, 5, 'g'),
(38, 103, 9, 20, 'g'),
(39, 103, 18, 30, 'g'),
(40, 103, 28, 10, 'g'),
(41, 103, 12, 5, 'g'),
(42, 103, 31, 5, 'g'),
(43, 104, 9, 20, 'g'),
(44, 104, 14, 30, 'g'),
(45, 104, 25, 5, 'g'),
(46, 104, 23, 20, 'g'),
(47, 105, 9, 20, 'g'),
(48, 105, 7, 20, 'g'),
(49, 105, 11, 5, 'g'),
(50, 106, 1, 10, 'g'),
(51, 106, 26, 30, 'g'),
(52, 106, 11, 8, 'g'),
(53, 106, 20, 40, 'g'),
(57, 107, 20, 10, 'g'),
(58, 107, 26, 30, 'g'),
(59, 107, 11, 4, 'g'),
(60, 109, 24, 5, 'g'),
(61, 110, 9, 40, 'g'),
(62, 111, 21, 100, 'g'),
(63, 111, 20, 40, 'g'),
(64, 111, 2, 5, 'g'),
(65, 111, 1, 10, 'g'),
(66, 112, 9, 20, 'g'),
(67, 112, 6, 5, 'g'),
(68, 113, 20, 20, 'g'),
(69, 113, 22, 20, 'g'),
(70, 114, 27, 30, 'g'),
(71, 115, 21, 100, 'g'),
(72, 115, 20, 40, 'g'),
(73, 115, 1, 10, 'g'),
(74, 116, 9, 20, 'g'),
(75, 116, 5, 200, 'g'),
(76, 117, 9, 10, 'g'),
(77, 118, 9, 10, 'g'),
(78, 119, 9, 10, 'g'),
(79, 120, 9, 10, 'g'),
(81, 122, 9, 10, 'g'),
(82, 122, 7, 20, 'g'),
(83, 123, 9, 10, 'g'),
(84, 124, 9, 10, 'g'),
(85, 125, 9, 10, 'g'),
(86, 126, 9, 60, 'g'),
(87, 127, 21, 90, 'g'),
(88, 127, 20, 50, 'g'),
(89, 127, 10, 10, 'g'),
(90, 127, 29, 30, 'g'),
(91, 127, 1, 10, 'g'),
(92, 128, 20, 50, 'g'),
(93, 128, 21, 90, 'g'),
(94, 128, 2, 5, 'g'),
(95, 128, 10, 10, 'g'),
(96, 128, 29, 30, 'g'),
(97, 128, 1, 10, 'g'),
(98, 129, 20, 50, 'g'),
(99, 129, 21, 90, 'g'),
(100, 129, 10, 10, 'g'),
(101, 129, 29, 30, 'g'),
(102, 129, 1, 10, 'g'),
(103, 130, 20, 50, 'g'),
(104, 130, 21, 90, 'g'),
(105, 130, 10, 10, 'g'),
(106, 130, 29, 30, 'g'),
(107, 130, 1, 10, 'g'),
(108, 131, 20, 50, 'g'),
(109, 131, 21, 50, 'g'),
(110, 131, 19, 106, 'g'),
(111, 131, 16, 30, 'g'),
(112, 132, 19, 106, 'g'),
(113, 132, 20, 50, 'g'),
(114, 132, 21, 50, 'g'),
(115, 132, 17, 30, 'g'),
(116, 133, 20, 50, 'g'),
(117, 133, 21, 90, 'g'),
(118, 133, 10, 10, 'g'),
(119, 133, 29, 30, 'g'),
(120, 133, 1, 10, 'g'),
(121, 134, 19, 106, 'g'),
(122, 134, 20, 50, 'g'),
(123, 134, 21, 50, 'g'),
(124, 135, 19, 106, 'g'),
(125, 135, 20, 50, 'g'),
(126, 135, 21, 50, 'g'),
(127, 135, 15, 30, 'g'),
(128, 135, 17, 30, 'g');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ingredient_defaut`
--

CREATE TABLE `ingredient_defaut` (
  `id_id` int(100) NOT NULL COMMENT 'Gốc Id',
  `id_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL COMMENT 'Gốc tên',
  `id_import_quantity` int(255) DEFAULT NULL COMMENT 'Gốc số lượng nhập',
  `id_unit` enum('g','ml') DEFAULT NULL COMMENT 'Gốc đơn vị',
  `id_import_price` int(255) DEFAULT NULL COMMENT 'Gốc giá nhập'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ingredient_defaut`
--

INSERT INTO `ingredient_defaut` (`id_id`, `id_name`, `id_import_quantity`, `id_unit`, `id_import_price`) VALUES
(1, 'Bột kem sữa', 450, 'g', 90000),
(2, 'Bột matcha cozy', 200, 'g', 109000),
(3, 'Cà phê hạt', 1000, 'g', 180000),
(4, 'Cà phê phin', 500, 'g', 75000),
(5, 'Cam', 4, 'g', 20000),
(6, 'Cơm dừa sấy', 150, 'g', 24000),
(7, 'Đào ngâm', 32, 'g', 65000),
(8, 'Đường', 1000, 'g', 22000),
(9, 'Đường nước', 1200, 'ml', 22000),
(10, 'Gas whipping', 50, 'g', 85000),
(11, 'Hồng trà wonderfull', 500, 'g', 90000),
(12, 'Lục trà wonderfull', 500, 'g', 110000),
(13, 'Ly nhựa', 50, 'g', 25000),
(14, 'Mứt trái cây cherry', 1000, 'g', 195000),
(15, 'Mứt trái cây dưa lưới', 1000, 'g', 182000),
(16, 'Mứt trái cây việt quốc', 1000, 'g', 215000),
(17, 'Mứt trái cây xoài', 1000, 'g', 195000),
(18, 'Sinh tố berrino vải', 1000, 'g', 105000),
(19, 'Sữa chua', 5088, 'g', 260000),
(20, 'Sữa đặc', 1284, 'g', 58000),
(21, 'Sữa tươi', 1000, 'ml', 35000),
(22, 'Syrup monin coconut', 700, 'ml', 215000),
(23, 'Syrup monin dưa hấu', 700, 'ml', 215000),
(24, 'Trà ahrmad bá tước', 3, 'g', 50000),
(25, 'Trà đào cosy', 30, 'g', 26000),
(26, 'Trân châu đen', 2000, 'g', 85000),
(27, 'Trân châu trắng', 2000, 'g', 80000),
(28, 'Vải lon', 825, 'g', 65000),
(29, 'Whipping cream', 1000, 'g', 69500),
(30, 'Bột cacao', 500, 'g', 65000),
(31, 'Trà OLong', 300, 'g', 1000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `p_id` int(100) NOT NULL COMMENT 'id sản phẩm',
  `p_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL COMMENT 'tên sản phẩm ',
  `p_price` int(255) NOT NULL COMMENT 'giá sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_price`) VALUES
(95, 'Coffee đen', 30000),
(96, 'Coffee Sữa', 30000),
(97, 'Coffee Latte', 30000),
(98, 'Coffe Americano', 30000),
(99, 'White Coffee', 30000),
(100, 'Coffee Capuchino', 30000),
(101, 'Trà Dưa Lưới Hoàng Kim', 40000),
(102, 'Trà đào', 30000),
(103, 'Trà Vải ', 30000),
(104, 'Trà Cherry Oolong', 40000),
(105, 'Trà đào Cam Sả', 30000),
(106, 'Hồng Trà Sữa', 40000),
(107, 'Trà Sữa Gạo Hàn Quốc', 40000),
(108, 'Trà Sữa Gạo Hàn Quốc', 40000),
(109, 'Trà Bá Tước', 30000),
(110, 'Trà Tắc Xí Muội', 30000),
(111, 'Trà Xanh Latte', 40000),
(112, 'Trà Lipton Chanh Mật Ong', 30000),
(113, 'Chocolate Coconut', 35000),
(114, 'Sữa Chua Hoa Anh đào', 40000),
(115, 'Choco Milk', 40000),
(116, 'Cam ép', 40000),
(117, 'Soda Trà Xanh', 40000),
(118, 'Soda Chanh Dây', 40000),
(119, 'Soda Bạc Bà', 40000),
(120, 'Soda Số đỏ', 40000),
(122, 'Soda đào Hoa', 40000),
(123, 'Soda Vận Hên', 40000),
(124, 'Soda Mặn Mà', 40000),
(125, 'Soda Phiêu Bồng', 40000),
(126, 'Lime Juice', 45000),
(127, 'Choco Smoothie', 45000),
(128, 'Greentea Smoothie', 45000),
(129, 'Capu Smoothie', 45000),
(130, 'Mocha Smoothie', 45000),
(131, 'Blueberry  Yogurt Smoothie', 45000),
(132, 'Mango  Yogurt Smoothie', 45000),
(133, 'Coffe đá Xay Caramel', 45000),
(134, 'Yogurt Natural', 30000),
(135, 'Golden Yogurt ', 40000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`i_id`),
  ADD KEY `Product_p_id` (`Product_p_id`),
  ADD KEY `Ingredient_defaut_id_id` (`Ingredient_defaut_id_id`);

--
-- Chỉ mục cho bảng `ingredient_defaut`
--
ALTER TABLE `ingredient_defaut`
  ADD PRIMARY KEY (`id_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `i_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT cho bảng `ingredient_defaut`
--
ALTER TABLE `ingredient_defaut`
  MODIFY `id_id` int(100) NOT NULL AUTO_INCREMENT COMMENT 'Gốc Id', AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT COMMENT 'id sản phẩm', AUTO_INCREMENT=136;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ingredient`
--
ALTER TABLE `ingredient`
  ADD CONSTRAINT `ingredient_ibfk_1` FOREIGN KEY (`Product_p_id`) REFERENCES `product` (`p_id`),
  ADD CONSTRAINT `ingredient_ibfk_2` FOREIGN KEY (`Ingredient_defaut_id_id`) REFERENCES `ingredient_defaut` (`id_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
