-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 24, 2023 lúc 02:00 PM
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

INSERT INTO `ingredient` (`Product_p_id`, `Ingredient_defaut_id_id`, `i_quantity`, `i_unit`) VALUES
(95, 4, 20, 'g'),
(95, 9, 10, 'g'),
(96, 20, 10, 'g'),
(96, 4, 20, 'g'),
(97, 3, 5, 'g'),
(97, 21, 105, 'g'),
(98, 3, 5, 'g'),
(99, 4, 20, 'g'),
(99, 20, 20, 'g'),
(99, 21, 60, 'g'),
(100, 3, 5, 'g'),
(100, 21, 105, 'g'),
(101, 27, 30, 'g'),
(101, 12, 5, 'g'),
(101, 15, 30, 'g'),
(101, 23, 20, 'g'),
(101, 9, 20, 'g'),
(102, 9, 20, 'g'),
(102, 7, 20, 'g'),
(102, 11, 5, 'g'),
(103, 9, 20, 'g'),
(103, 18, 30, 'g'),
(103, 28, 10, 'g'),
(103, 12, 5, 'g'),
(103, 31, 5, 'g'),
(104, 9, 20, 'g'),
(104, 14, 30, 'g'),
(104, 25, 5, 'g'),
(104, 23, 20, 'g'),
(105, 9, 20, 'g'),
(105, 7, 20, 'g'),
(105, 11, 5, 'g'),
(106, 1, 10, 'g'),
(106, 26, 30, 'g'),
(106, 11, 8, 'g'),
(106, 20, 40, 'g'),
(107, 20, 10, 'g'),
(107, 26, 30, 'g'),
(107, 11, 4, 'g'),
(109, 24, 5, 'g'),
(110, 9, 40, 'g'),
(111, 21, 100, 'g'),
(111, 20, 40, 'g'),
(111, 2, 5, 'g'),
(111, 1, 10, 'g'),
(112, 9, 20, 'g'),
(112, 6, 5, 'g'),
(113, 20, 20, 'g'),
(113, 22, 20, 'g'),
(114, 27, 30, 'g'),
(115, 21, 100, 'g'),
(115, 20, 40, 'g'),
(115, 1, 10, 'g'),
(116, 9, 20, 'g'),
(116, 5, 200, 'g'),
(117, 9, 10, 'g'),
(118, 9, 10, 'g'),
(119, 9, 10, 'g'),
(120, 9, 10, 'g'),
(122, 9, 10, 'g'),
(122, 7, 20, 'g'),
(123, 9, 10, 'g'),
(124, 9, 10, 'g'),
(125, 9, 10, 'g'),
(126, 9, 60, 'g'),
(127, 21, 90, 'g'),
(127, 20, 50, 'g'),
(127, 10, 10, 'g'),
(127, 29, 30, 'g'),
(127, 1, 10, 'g'),
(128, 20, 50, 'g'),
(128, 21, 90, 'g'),
(128, 2, 5, 'g'),
(128, 10, 10, 'g'),
(128, 29, 30, 'g'),
(128, 1, 10, 'g'),
(129, 20, 50, 'g'),
(129, 21, 90, 'g'),
(129, 10, 10, 'g'),
(129, 29, 30, 'g'),
(129, 1, 10, 'g'),
(130, 20, 50, 'g'),
(130, 21, 90, 'g'),
(130, 10, 10, 'g'),
(130, 29, 30, 'g'),
(130, 1, 10, 'g'),
(131, 20, 50, 'g'),
(131, 21, 50, 'g'),
(131, 19, 106, 'g'),
(131, 16, 30, 'g'),
(132, 19, 106, 'g'),
(132, 20, 50, 'g'),
(132, 21, 50, 'g'),
(132, 17, 30, 'g'),
(133, 20, 50, 'g'),
(133, 21, 90, 'g'),
(133, 10, 10, 'g'),
(133, 29, 30, 'g'),
(133, 1, 10, 'g'),
(134, 19, 106, 'g'),
(134, 20, 50, 'g'),
(134, 21, 50, 'g'),
(135, 19, 106, 'g'),
(135, 20, 50, 'g'),
(135, 21, 50, 'g'),
(135, 15, 30, 'g'),
(135, 17, 30, 'g');

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

INSERT INTO `ingredient_defaut` (`id_name`, `id_import_quantity`, `id_unit`, `id_import_price`) VALUES
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

INSERT INTO `product` (`p_name`, `p_price`) VALUES
('Coffee đen', 30000),
('Coffee Sữa', 30000),
('Coffee Latte', 30000),
('Coffe Americano', 30000),
('White Coffee', 30000),
('Coffee Capuchino', 30000),
('Trà Dưa Lưới Hoàng Kim', 40000),
('Trà đào', 30000),
('Trà Vải ', 30000),
('Trà Cherry Oolong', 40000),
('Trà đào Cam Sả', 30000),
('Hồng Trà Sữa', 40000),
('Trà Sữa Gạo Hàn Quốc', 40000),
('Trà Sữa Gạo Hàn Quốc', 40000),
('Trà Bá Tước', 30000),
('Trà Tắc Xí Muội', 30000),
('Trà Xanh Latte', 40000),
('Trà Lipton Chanh Mật Ong', 30000),
('Chocolate Coconut', 35000),
('Sữa Chua Hoa Anh đào', 40000),
('Choco Milk', 40000),
('Cam ép', 40000),
('Soda Trà Xanh', 40000),
('Soda Chanh Dây', 40000),
('Soda Bạc Bà', 40000),
('Soda Số đỏ', 40000),
('Soda đào Hoa', 40000),
('Soda Vận Hên', 40000),
('Soda Mặn Mà', 40000),
('Soda Phiêu Bồng', 40000),
('Lime Juice', 45000),
('Choco Smoothie', 45000),
('Greentea Smoothie', 45000),
('Capu Smoothie', 45000),
('Mocha Smoothie', 45000),
('Blueberry  Yogurt Smoothie', 45000),
('Mango  Yogurt Smoothie', 45000),
('Coffe đá Xay Caramel', 45000),
('Yogurt Natural', 30000),
('Golden Yogurt ', 40000);

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
