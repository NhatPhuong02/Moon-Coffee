-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 21, 2023 lúc 07:52 PM
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
(10, 91, 1, 123, 'g'),
(11, 91, 3, 123, 'g');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ingredient_defaut`
--

CREATE TABLE `ingredient_defaut` (
  `id_id` int(100) NOT NULL COMMENT 'Gốc Id',
  `id_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL COMMENT 'Gốc tên',
  `id_import_quantity` int(255) DEFAULT NULL COMMENT 'Gốc số lượng nhập',
  `id_unit` enum('g','ml') DEFAULT NULL COMMENT 'Gốc đơn vị',
  `id_ import_price` int(255) DEFAULT NULL COMMENT 'Gốc giá nhập'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ingredient_defaut`
--

INSERT INTO `ingredient_defaut` (`id_id`, `id_name`, `id_import_quantity`, `id_unit`, `id_ import_price`) VALUES
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
(26, 'Trân châu tđen', 2000, 'g', 85000),
(27, 'Trân châu trắng', 2000, 'g', 80000),
(28, 'Vải lon', 825, 'g', 65000),
(29, 'Whipping cream', 1000, 'g', 69500),
(30, 'Bột cacao', 500, 'g', 65000);

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
(90, 'Nước ép táo', 123456),
(91, 'trà lài', 123);

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
  MODIFY `i_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `ingredient_defaut`
--
ALTER TABLE `ingredient_defaut`
  MODIFY `id_id` int(100) NOT NULL AUTO_INCREMENT COMMENT 'Gốc Id', AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT COMMENT 'id sản phẩm', AUTO_INCREMENT=92;

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
