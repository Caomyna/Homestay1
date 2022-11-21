SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Cơ sở dữ liệu: `homestay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `id_book` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `homestay_id` int(11) DEFAULT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `arrival_date` datetime DEFAULT NULL,
  `leave_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `homestay`
--

CREATE TABLE `homestay` (
  `id_homestay` int(11) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `homestay_name` varchar(50) NOT NULL,
  `images` varchar(355) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descript` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `location`
--

CREATE TABLE `location` (
  `id_location` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `location`
--

INSERT INTO `location` (`id_location`, `name`) VALUES
(1, 'Đà Lạt'),
(2, 'Đà Nẵng'),
(3, 'Hội An'),
(4, 'Huế'),
(5, 'Hà Nội'),
(6, 'Hà Giang'),
(7, 'Khánh Hòa'),
(8, 'Ninh Bình'),
(9, 'Nha Trang'),
(10, 'Mộc Châu'),
(11, 'Vũng Tàu '),
(12, 'Sa Pa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `users` (`id_users`, `fullname`, `password`, `email`, `phone_number`, `role`) VALUES
(1, 'myna', '11111', 'caomyna2003@gmail.com', '123456', 0),
(2, 'my', '123456', 'caomyna03@gmail.com', '0123456789', 0),
(4, 'cao', '111', 'caomyna2003@gmail.com', '11111', 0),
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', NULL, 1),
(8, 'nana', '202cb962ac59075b964b07152d234b70', 'nhungcthFX07911@funix.edu.vn', '0123456789', 0);


ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_book`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `homestay_id` (`homestay_id`);

ALTER TABLE `homestay`
  ADD PRIMARY KEY (`id_homestay`),
  ADD KEY `location_id` (`location_id`);

ALTER TABLE `location`
  ADD PRIMARY KEY (`id_location`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

ALTER TABLE `booking`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `homestay`
  MODIFY `id_homestay` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `location`
  MODIFY `id_location` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;


ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;


ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id_users`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`homestay_id`) REFERENCES `homestay` (`id_homestay`);


ALTER TABLE `homestay`
  ADD CONSTRAINT `homestay_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `location` (`id_location`);
COMMIT;


