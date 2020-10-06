-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2020 lúc 05:44 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `csdl_mau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `views`, `image`, `body`, `published`, `created_at`, `updated_at`) VALUES
(1, 1, '5 Habits that can improve your life', '5-habits-that-can-improve-your-life', 0, 'https://upload.wikimedia.org/wikipedia/commons/9/90/Winter_chill_%284263376940%29.jpg', 'Read every day', 1, '2020-09-18 10:28:27', '2018-02-01 12:14:31'),
(2, 1, 'Second post on LifeBlog', 'second-post-on-lifeblog', 0, 'banner.jpg', 'This is the body of the second post on this site', 1, '2020-09-18 09:55:11', '2018-02-01 06:04:36'),
(5, 2, 'Testt', 'test-test', 0, 'https://media.ex-cdn.com/EXP/media.vntravellive.com/files/editor3/2019/08/01/1248-mien-dat-cua-the-lion-king-160705.jpg', 'asdsadsad', 1, '2020-09-22 06:40:41', '2020-09-22 06:40:41'),
(7, 2, 'Testt', 'test-test-test', 0, 'https://media.ex-cdn.com/EXP/media.vntravellive.com/files/editor3/2019/08/01/1248-mien-dat-cua-the-lion-king-160705.jpg', 'asdsadsad', 1, '2020-09-22 06:40:41', '2020-09-22 06:40:41'),
(8, 2, 'Testt3', 'test-test-test-test', 0, 'https://media.ex-cdn.com/EXP/media.vntravellive.com/files/editor3/2019/08/01/1248-mien-dat-cua-the-lion-king-160705.jpg', 'asdsadsadynãhsa', 1, '2020-09-22 06:40:41', '2020-09-22 06:40:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('Author','Admin') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `role`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Awa', 'Thuy', 'Nguyen Trong', 'info@codewithawa.com', 'Admin', 'mypassword', '2018-01-08 05:52:58', '2018-01-08 05:52:58'),
(2, 'thuongkhung', 'Nam', 'Tran Van', 'thuongkhungvu@gmail.com', 'Author', '904fdd5b053bfd044e222325afbedadb', '2020-09-18 09:58:11', '2020-09-18 09:58:11'),
(3, 'tkv', 'Tuan', 'Phan Hoang', 'thuyngtrong@gmail.com', 'Admin', '$2y$10$zL3EA356Pgujmrh16.W4feH9BLlWSVWyz.E1D6bJ3bRrH5WCFrtTi', '2020-09-25 06:23:40', NULL),
(6, 'testacc', 'Quang', 'Phan Huu', 'thuongkhung2801@gmail.com', 'Author', '$2y$10$tvCZK0wH68CvvbxrgAdtFOG03ZdgzF1WBFX8LbrzJ860J2SKEJcRu', '2020-10-02 10:36:51', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
