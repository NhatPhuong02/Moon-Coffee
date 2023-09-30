-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 09, 2023 lúc 09:14 PM
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
(24, 98, 3, 5, 'g'),
(25, 99, 4, 20, 'g'),
(26, 99, 20, 20, 'g'),
(27, 99, 21, 60, 'g'),
(51, 106, 26, 30, 'g'),
(52, 106, 11, 8, 'g'),
(53, 106, 20, 40, 'g'),
(121, 134, 19, 106, 'g'),
(122, 134, 20, 50, 'g'),
(123, 134, 21, 50, 'g'),
(171, 145, 30, 10, 'g'),
(172, 145, 20, 20, 'g'),
(173, 145, 21, 50, 'g'),
(174, 145, 6, 5, 'g'),
(175, 145, 22, 20, 'g'),
(184, 153, 33, 40, 'g'),
(185, 153, 9, 60, 'g'),
(186, 153, 58, 40, 'g'),
(204, 160, 24, 2, 'g'),
(245, 169, 63, 50, 'g'),
(246, 169, 20, 10, 'g'),
(247, 169, 11, 4, 'g'),
(248, 169, 26, 20, 'g'),
(249, 171, 9, 60, 'g'),
(250, 171, 12, 5, 'g'),
(251, 171, 64, 20, 'g'),
(261, 174, 33, 20, 'g'),
(262, 174, 9, 20, 'g'),
(263, 174, 65, 100, 'g'),
(264, 174, 51, 10, 'g'),
(265, 175, 66, 100, 'g'),
(266, 175, 9, 30, 'g'),
(267, 175, 65, 100, 'g'),
(268, 176, 9, 20, 'g'),
(269, 176, 68, 100, 'g'),
(270, 176, 67, 20, 'g'),
(271, 176, 65, 100, 'g'),
(272, 177, 9, 20, 'g'),
(273, 177, 69, 30, 'g'),
(274, 177, 65, 100, 'g'),
(275, 178, 33, 30, 'g'),
(276, 178, 9, 30, 'g'),
(277, 178, 45, 20, 'g'),
(278, 178, 61, 8, 'g'),
(279, 178, 65, 100, 'g'),
(280, 179, 44, 20, 'g'),
(281, 179, 9, 20, 'g'),
(282, 179, 45, 30, 'g'),
(283, 179, 65, 100, 'g'),
(287, 181, 21, 100, 'g'),
(288, 181, 26, 30, 'g'),
(289, 181, 70, 20, 'g'),
(296, 183, 30, 10, 'g'),
(297, 183, 53, 10, 'g'),
(298, 183, 21, 90, 'g'),
(299, 183, 20, 40, 'g'),
(317, 187, 30, 10, 'g'),
(318, 187, 53, 10, 'g'),
(319, 187, 21, 70, 'g'),
(320, 187, 20, 40, 'g'),
(321, 187, 29, 10, 'g'),
(327, 189, 3, 5, 'g'),
(328, 189, 21, 100, 'g'),
(336, 191, 30, 10, 'g'),
(337, 191, 53, 10, 'g'),
(338, 191, 3, 5, 'g'),
(339, 191, 20, 30, 'g'),
(340, 191, 21, 70, 'g'),
(341, 191, 29, 10, 'g'),
(342, 191, 57, 20, 'g'),
(343, 192, 3, 5, 'g'),
(344, 192, 21, 100, 'g'),
(345, 193, 53, 10, 'g'),
(346, 193, 4, 20, 'g'),
(347, 193, 20, 50, 'g'),
(348, 193, 21, 30, 'g'),
(349, 193, 29, 10, 'g'),
(350, 194, 33, 20, 'g'),
(351, 194, 20, 40, 'g'),
(352, 194, 21, 40, 'g'),
(353, 194, 19, 106, 'g'),
(354, 194, 54, 20, 'g'),
(360, 196, 71, 5, 'g'),
(361, 196, 53, 10, 'g'),
(362, 196, 29, 10, 'g'),
(363, 196, 20, 40, 'g'),
(364, 196, 21, 70, 'g'),
(365, 197, 33, 20, 'g'),
(366, 197, 20, 40, 'g'),
(367, 197, 19, 106, 'g'),
(368, 197, 21, 40, 'g'),
(369, 197, 41, 20, 'g'),
(370, 198, 3, 5, 'g'),
(371, 198, 21, 70, 'g'),
(372, 198, 20, 40, 'g'),
(373, 198, 30, 10, 'g'),
(374, 198, 29, 10, 'g'),
(375, 198, 53, 10, 'g'),
(376, 199, 71, 5, 'g'),
(377, 199, 9, 30, 'g'),
(378, 199, 65, 100, 'g'),
(379, 200, 59, 5, 'g'),
(380, 200, 27, 20, 'g'),
(381, 200, 72, 110, 'g'),
(382, 201, 9, 20, 'g'),
(383, 201, 33, 20, 'g'),
(384, 201, 42, 30, 'g'),
(385, 201, 49, 2, 'g'),
(386, 201, 47, 5, 'g'),
(387, 202, 33, 20, 'g'),
(388, 202, 9, 20, 'g'),
(389, 202, 27, 20, 'g'),
(390, 202, 23, 20, 'g'),
(391, 202, 12, 5, 'g'),
(392, 202, 54, 20, 'g'),
(393, 203, 61, 8, 'g'),
(394, 203, 9, 20, 'g'),
(395, 203, 11, 4, 'g'),
(396, 203, 48, 20, 'g'),
(397, 203, 62, 20, 'g'),
(398, 204, 61, 8, 'g'),
(399, 204, 9, 20, 'g'),
(400, 204, 62, 20, 'g'),
(401, 204, 58, 20, 'g'),
(402, 204, 48, 20, 'g'),
(403, 204, 11, 4, 'g'),
(404, 205, 33, 20, 'g'),
(405, 205, 9, 20, 'g'),
(406, 205, 47, 10, 'g'),
(407, 205, 12, 5, 'g'),
(408, 205, 18, 20, 'g'),
(409, 205, 46, 20, 'g'),
(410, 206, 53, 10, 'g'),
(411, 206, 71, 5, 'g'),
(412, 206, 20, 40, 'g'),
(413, 206, 21, 70, 'g'),
(414, 207, 9, 20, 'g'),
(415, 207, 65, 100, 'g'),
(416, 207, 50, 5, 'g'),
(417, 207, 33, 20, 'g'),
(418, 208, 29, 20, 'g'),
(419, 208, 44, 10, 'g'),
(420, 208, 51, 10, 'g'),
(421, 208, 43, 10, 'g'),
(422, 208, 42, 20, 'g'),
(424, 178, 11, 1, 'g'),
(425, 178, 10, 2, 'g');

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
(3, 'Cà phê hạt', 1000, 'g', 150000),
(4, 'Cà phê phin', 500, 'g', 75000),
(5, 'Cam', 400, 'ml', 20000),
(6, 'Cơm dừa sấy', 150, 'g', 24000),
(9, 'Đường nước', 1200, 'ml', 22000),
(10, 'Gas whipping', 307, 'g', 85000),
(11, 'Hồng trà wonderfull', 500, 'g', 90000),
(12, 'Lục trà wonderfull', 500, 'g', 110000),
(13, 'Ly nhựa', 50, 'g', 50000),
(18, 'Sinh tố berrino vải', 1000, 'g', 105000),
(19, 'Sữa chua', 5088, 'g', 260000),
(20, 'Sữa đặc', 1284, 'g', 65000),
(21, 'Sữa tươi', 1000, 'ml', 30000),
(22, 'Syrup monin coconut', 700, 'ml', 215000),
(23, 'Syrup monin dưa hấu', 700, 'ml', 215000),
(24, 'Trà ahrmad bá tước', 30, 'g', 50000),
(25, 'Trà đào cosy', 30, 'g', 26000),
(26, 'Trân châu đen', 2000, 'g', 85000),
(27, 'Trân châu trắng', 2000, 'g', 80000),
(29, 'Whipping cream', 1000, 'g', 69500),
(30, 'Bột Cacao', 500, 'g', 65000),
(33, 'Chanh', 336, 'ml', 22000),
(41, 'Mứt chunky xoài', 1000, 'g', 162000),
(42, 'Mứt chunky cherry', 1000, 'g', 195000),
(43, 'Blue Curacao', 730, 'g', 57000),
(44, 'Syrup  lựu', 750, 'g', 185000),
(45, 'Lon tép bưởi', 850, 'g', 90000),
(46, 'suryp Vải', 700, 'g', 182000),
(47, 'Vải lon', 565, 'g', 32000),
(48, 'syrup đào', 700, 'g', 182000),
(49, 'Trà oolong', 50, 'g', 39000),
(50, 'Hoa tím', 200, 'g', 75000),
(51, 'Syrup bạc hà', 700, 'g', 147000),
(53, 'Bột kem sữa', 450, 'g', 45000),
(54, 'Mứt chunky dưa lưới', 1000, 'g', 182000),
(55, 'Mứt chunky Việt Quốc', 1000, 'g', 215000),
(56, 'Trà nestea atiso đỏ', 140, 'g', 40000),
(57, 'syrup caramel', 700, 'g', 215000),
(58, 'Syrup chanh', 700, 'g', 215000),
(59, 'Bột Hoa anh đào', 500, 'g', 195000),
(61, 'Đào lon', 850, 'g', 65000),
(62, 'Sinh Tố Berrino đào', 1000, 'g', 105000),
(63, 'Sữa gạo', 500, 'g', 36000),
(64, 'xí muội', 500, 'g', 55000),
(65, 'Soda', 320, 'g', 7000),
(66, 'Chanh dây', 100, 'g', 3800),
(67, 'Mật ong', 600, 'g', 65000),
(68, 'Quýt', 200, 'g', 8000),
(69, 'Chanh muối', 1000, 'g', 29000),
(70, 'Siro đường đen', 2500, 'g', 180000),
(71, 'Bột matcha', 500, 'g', 77000),
(72, 'Sữa chua uống', 110, 'ml', 5000);

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
(98, 'Coffe Americano', 30000),
(99, 'White Coffee', 30000),
(106, 'Hồng Trà Sữa', 40000),
(134, 'Yogurt Natural', 30000),
(145, 'Chocolate Coconut', 40000),
(153, 'Lime Juice', 40000),
(160, 'Trá Bá Tước', 30000),
(169, 'Trà Sữa Gạo Hàn Quốc', 45000),
(171, 'Trà Tắc Xí Muội', 30000),
(174, 'Soda Bạc Hà', 40000),
(175, 'Soda Chanh Dây', 40000),
(176, 'Soda đào Hoa', 40000),
(177, 'Soda Mặn Mà', 40000),
(178, 'Soda Phiêu Bồng', 40000),
(179, 'Soda Số đỏ', 40000),
(181, 'Sữa Tươi Trân Châu đường Nâu', 40000),
(183, 'Chocomilk', 40000),
(187, 'Choco Smoothie', 45000),
(189, 'Coffee Capuchino', 30000),
(191, 'Coffee đá Xay Caramel', 45000),
(192, 'Coffe Latte', 30000),
(193, 'Capu Smoothie', 45000),
(194, 'Golden Melon Yogurt Smoothie', 45000),
(196, 'Greentea Smoothie', 45000),
(197, 'Mango Yogurt Smoothie', 45000),
(198, 'Mocha Smoothie', 45000),
(199, 'Soda Trà Xanh', 40000),
(200, 'Sữa Chua Hoa Anh đào', 45000),
(201, 'Trà Cherry Oolong', 45000),
(202, 'Trà Dưa Lưới Hoàng Kim', 45000),
(203, 'Trà đào', 40000),
(204, 'Trà đào Cam Sả', 40000),
(205, 'Trà Vải', 40000),
(206, 'Trà Xanh Latte', 40000),
(207, 'Soda Galaxy ADE', 40000),
(208, 'Fancy Berry Moon', 50000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `u_id` int(100) NOT NULL,
  `u_firstname` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `u_lastname` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `u_email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `u_password` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `u_role` enum('admin','staff') COLLATE utf8_vietnamese_ci NOT NULL,
  `u_gender` enum('man','woman','other') COLLATE utf8_vietnamese_ci NOT NULL,
  `u_phone` int(10) DEFAULT NULL,
  `u_address` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`u_id`, `u_firstname`, `u_lastname`, `u_email`, `u_password`, `u_role`, `u_gender`, `u_phone`, `u_address`) VALUES
(1, 'Phi', 'Nguyễn', 'aimabietdau1@gmail.com', '00000000', 'admin', 'man', NULL, '25 Nguyễn Thị Huỳnh Phường 11 Quận Phú Nhuận'),
(2, 'Phương', 'Nguyễn', 'phuongnhat443@gmail.com', '11111111', 'staff', 'man', 0, 'B04 khu chung cư bộ công an cũ khu phố 4 phường An Khánh thành phố Thủ Đức TPHCM');

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
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `i_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=427;

--
-- AUTO_INCREMENT cho bảng `ingredient_defaut`
--
ALTER TABLE `ingredient_defaut`
  MODIFY `id_id` int(100) NOT NULL AUTO_INCREMENT COMMENT 'Gốc Id', AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT COMMENT 'id sản phẩm', AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
