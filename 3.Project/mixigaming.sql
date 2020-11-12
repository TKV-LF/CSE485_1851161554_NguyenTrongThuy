-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2020 lúc 07:19 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mixigaming`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `log`
--

CREATE TABLE `log` (
  `stt` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `log`
--

INSERT INTO `log` (`stt`, `name`, `action`, `time`) VALUES
(7, 'tkv', 'đã xóa video có id = 54', '2020-11-12 14:42:20'),
(8, 'tkv', 'đã xóa video có id = 53', '2020-11-12 14:42:25'),
(9, 'tkv', 'đã xóa video có id = 52', '2020-11-12 14:42:28'),
(10, 'tkv', 'đã xóa video có id = 51', '2020-11-12 14:42:31'),
(11, 'tkv', 'đã xóa video có id = 50', '2020-11-12 14:42:34'),
(12, 'tkv', 'đã xóa video có id = 49', '2020-11-12 14:42:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('Author','Admin') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `role`, `password`, `created_at`) VALUES
(1, 'Awa', 'Thuy', 'Nguyen Trong', 'info@codewithawa.com', 'Admin', 'mypassword', '2018-01-08 05:52:58'),
(2, 'thuongkhung', 'Nam', 'Tran Van', 'thuongkhungvu@gmail.com', 'Author', '904fdd5b053bfd044e222325afbedadb', '2020-09-18 09:58:11'),
(3, 'tkv', 'Tuan', 'Phan Hoang', 'thuyngtrong@gmail.com', 'Admin', '$2y$10$zL3EA356Pgujmrh16.W4feH9BLlWSVWyz.E1D6bJ3bRrH5WCFrtTi', '2020-09-25 06:23:40'),
(6, 'testacc', 'Quang', 'Phan Huu', 'thuongkhung2801@gmail.com', 'Author', '$2y$10$tvCZK0wH68CvvbxrgAdtFOG03ZdgzF1WBFX8LbrzJ860J2SKEJcRu', '2020-10-02 10:36:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `videos`
--

CREATE TABLE `videos` (
  `id` int(10) NOT NULL,
  `video_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryslug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `videos`
--

INSERT INTO `videos` (`id`, `video_type`, `video_id`, `title`, `thumbnail_url`, `slug`, `categoryslug`, `published_at`) VALUES
(1, 'vlog', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Hywo2vnQLOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'MixiVLOG#17: Nhà mới, cuộc sống mới của gia đình Độ Mixi\r\n', 'https://mixigaming.com/wp-content/uploads/2020/08/sddefault-1-324x160.jpg', 'mixivlog17-nha-moi-cuoc-song-moi-cua-gia-dinh-do-mixi', 'vlog', '2020-10-31 10:43:56'),
(3, 'livestream history', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_I6XDC300lg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Livestream ngày 23/7/2020', 'https://mixigaming.com/wp-content/uploads/2020/07/maxresdefault-37-534x462.jpg', 'livestream-ngày-23-7-2020', 'livestream-history', '2020-10-29 10:43:24'),
(4, 'livestream history', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_I6XDC300lg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Livestream ngày 24/7/2020', 'https://mixigaming.com/wp-content/uploads/2020/07/maxresdefault-37-534x462.jpg', 'livestream-ngày-24-7-2020', 'livestream-history', '2020-10-29 10:44:24'),
(5, 'livestream history', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_I6XDC300lg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Livestream ngày 26/7/2020', 'https://mixigaming.com/wp-content/uploads/2020/07/maxresdefault-37-534x462.jpg', 'livestream-ngày-26-7-2020', 'livestream-history', '2020-10-29 10:45:24'),
(6, 'livestream history', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_I6XDC300lg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Livestream ngày 28/7/2020', 'https://mixigaming.com/wp-content/uploads/2020/07/maxresdefault-37-534x462.jpg', 'livestream-ngày-28-7-2020', 'livestream-history', '2020-10-29 10:46:24'),
(8, 'talkshow', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_I6XDC300lg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '(Talkshow) Đàn ông tinh tế là phải biết chặt gà, Các món ăn lạ không phải ai cũng biết', 'https://mixigaming.com/wp-content/uploads/2020/10/maxresdefault-33-485x360.jpg', 'talkshow-đàn-ông-tinh-tế-là-phải-biết-chặt-gà-các-món-ăn-lạ-không-phải-ai-cũng-biết', 'talkshow', '2020-10-29 10:48:24'),
(11, 'reaction', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/A8I6p7jKspM\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '(Talkshow) Độ Mixi trải lòng sau khi Reaction clip Xemesis đi du lịch tại Six Senses Ninh Vân Bay', 'https://mixigaming.com/wp-content/uploads/2020/10/maxresdefault-22-324x160.jpg', 'talkshow-do-mixi-trai-long-sau-khi-reaction-clip-xemesis-di-du-lich-tai-six-senses-ninh-van-bay', 'reaction', '2020-10-31 10:48:24'),
(12, 'pubg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_I6XDC300lg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '(Talkshow) Đàn ông tinh tế là phải biết chặt gà, Các món ăn lạ không phải ai cũng biết', 'https://mixigaming.com/wp-content/uploads/2020/10/maxresdefault-33-485x360.jpg', 'talkshow-đàn-ông-tinh-tế-là-phải-biết-chặt-gà', 'pubg', '2020-10-29 10:48:24'),
(13, 'csgo', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_I6XDC300lg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Livestream ngày 26/7/2020', 'https://mixigaming.com/wp-content/uploads/2020/07/maxresdefault-37-534x462.jpg', 'livestream-ngày-26-7-2020', 'csgo', '2020-10-29 10:45:24'),
(14, 'fifa', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_I6XDC300lg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Livestream ngày 26/7/2020', 'https://mixigaming.com/wp-content/uploads/2020/07/maxresdefault-37-534x462.jpg', 'livestream-ngày-26-7-2020', 'fifa', '2020-10-29 10:45:24'),
(15, 'game khac', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_I6XDC300lg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Livestream ngày 26/7/2020', 'https://mixigaming.com/wp-content/uploads/2020/07/maxresdefault-37-534x462.jpg', 'livestream-ngày-26-7-2020', 'game-khac', '2020-10-29 10:45:24'),
(16, 'talkshow', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_I6XDC300lg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '(Talkshow) Đàn ông tinh tế là phải biết chặt gà, Các món ăn lạ không phải ai cũng biết', 'https://mixigaming.com/wp-content/uploads/2020/10/maxresdefault-33-485x360.jpg', 'talkshow-đàn-ông-tinh-tế-là-phải-biết-chặt-gà-các-món-ăn-lạ-không-phải-ai-cũng-biết', 'talkshow', '2020-10-29 10:48:24'),
(17, 'talkshow', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_I6XDC300lg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '(Talkshow) Đàn ông tinh tế là phải biết chặt gà, Các món ăn lạ không phải ai cũng biết', 'https://mixigaming.com/wp-content/uploads/2020/10/maxresdefault-33-485x360.jpg', 'talkshow-đàn-ông-tinh-tế-là-phải-biết-chặt-gà-các-món-ăn-lạ-không-phải-ai-cũng-biết', 'talkshow', '2020-10-29 10:48:24'),
(18, 'talkshow', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/NGNC5zrWkb4\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '(Talkshow) Tùng Sói lên sóng trước sinh nhật, Reaction Hà Mã tấu mở tâm thư từ Độ Mixi.\r\n', 'https://mixigaming.com/wp-content/uploads/2020/10/maxresdefault-38-324x160.jpg', 'talkshow-tung-soi-len-song-truoc-sinh-nhat-reaction-ha-ma-tau-mo-tam-thu-tu-do-mixi', 'talkshow', '2020-10-30 10:48:24'),
(19, 'talkshow', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/NGNC5zrWkb4\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '(Talkshow) Tùng Sói lên sóng trước sinh nhật, Reaction Hà Mã tấu mở tâm thư từ Độ Mixi.\r\n', 'https://mixigaming.com/wp-content/uploads/2020/10/maxresdefault-38-324x160.jpg', 'talkshow-tung-soi-len-song-truoc-sinh-nhat-reaction-ha-ma-tau-mo-tam-thu-tu-do-mixi', 'talkshow', '2020-10-30 10:48:24'),
(20, 'talkshow', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/NGNC5zrWkb4\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '(Talkshow) Tùng Sói lên sóng trước sinh nhật, Reaction Hà Mã tấu mở tâm thư từ Độ Mixi.\r\n', 'https://mixigaming.com/wp-content/uploads/2020/10/maxresdefault-38-324x160.jpg', 'talkshow-tung-soi-len-song-truoc-sinh-nhat-reaction-ha-ma-tau-mo-tam-thu-tu-do-mixi', 'talkshow', '2020-10-30 10:48:24'),
(21, 'reaction', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/A8I6p7jKspM\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '(Talkshow) Độ Mixi trải lòng sau khi Reaction clip Xemesis đi du lịch tại Six Senses Ninh Vân Bay', 'https://mixigaming.com/wp-content/uploads/2020/10/maxresdefault-22-324x160.jpg', 'talkshow-do-mixi-trai-long-sau-khi-reaction-clip-xemesis-di-du-lich-tai-six-senses-ninh-van-bay', 'reaction', '2020-10-31 10:48:24'),
(22, 'reaction', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/A8I6p7jKspM\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '(Talkshow) Độ Mixi trải lòng sau khi Reaction clip Xemesis đi du lịch tại Six Senses Ninh Vân Bay', 'https://mixigaming.com/wp-content/uploads/2020/10/maxresdefault-22-324x160.jpg', 'talkshow-do-mixi-trai-long-sau-khi-reaction-clip-xemesis-di-du-lich-tai-six-senses-ninh-van-bay', 'reaction', '2020-10-31 10:48:24'),
(23, 'vlog', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Hywo2vnQLOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'MixiVLOG#17: Nhà mới, cuộc sống mới của gia đình Độ Mixi\r\n', 'https://mixigaming.com/wp-content/uploads/2020/08/sddefault-1-324x160.jpg', 'mixivlog17-nha-moi-cuoc-song-moi-cua-gia-dinh-do-mixi', 'vlog', '2020-10-31 10:43:56'),
(24, 'vlog', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Hywo2vnQLOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'MixiVLOG#17: Nhà mới, cuộc sống mới của gia đình Độ Mixi\r\n', 'https://mixigaming.com/wp-content/uploads/2020/08/sddefault-1-324x160.jpg', 'mixivlog17-nha-moi-cuoc-song-moi-cua-gia-dinh-do-mixi', 'vlog', '2020-10-31 10:43:56'),
(25, 'vlog', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Hywo2vnQLOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'MixiVLOG#17: Nhà mới, cuộc sống mới của gia đình Độ Mixi\r\n', 'https://mixigaming.com/wp-content/uploads/2020/08/sddefault-1-324x160.jpg', 'mixivlog17-nha-moi-cuoc-song-moi-cua-gia-dinh-do-mixi', 'vlog', '2020-10-31 10:43:56'),
(26, 'vlog', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Hywo2vnQLOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'MixiVLOG#17: Nhà mới, cuộc sống mới của gia đình Độ Mixi\r\n', 'https://mixigaming.com/wp-content/uploads/2020/08/sddefault-1-324x160.jpg', 'mixivlog17-nha-moi-cuoc-song-moi-cua-gia-dinh-do-mixi', 'vlog', '2020-10-31 10:43:56'),
(27, 'vlog', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Hywo2vnQLOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'MixiVLOG#17: Nhà mới, cuộc sống mới của gia đình Độ Mixi\r\n', 'https://mixigaming.com/wp-content/uploads/2020/08/sddefault-1-324x160.jpg', 'mixivlog17-nha-moi-cuoc-song-moi-cua-gia-dinh-do-mixi', 'vlog', '2020-10-31 10:43:56'),
(28, 'vlog', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Hywo2vnQLOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'MixiVLOG#17: Nhà mới, cuộc sống mới của gia đình Độ Mixi\r\n', 'https://mixigaming.com/wp-content/uploads/2020/08/sddefault-1-324x160.jpg', 'mixivlog17-nha-moi-cuoc-song-moi-cua-gia-dinh-do-mixi', 'vlog', '2020-10-31 10:43:56'),
(29, 'Ma sói', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Hywo2vnQLOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'MixiVLOG#17: Nhà mới, cuộc sống mới của gia đình Độ Mixi\r\n', 'https://mixigaming.com/wp-content/uploads/2020/08/sddefault-1-324x160.jpg', 'mixivlog17-nha-moi-cuoc-song-moi-cua-gia-dinh-do-mixi', 'ma-soi', '2020-10-31 10:43:56'),
(30, 'Ma sói', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Hywo2vnQLOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'MixiVLOG#17: Nhà mới, cuộc sống mới của gia đình Độ Mixi\r\n', 'https://mixigaming.com/wp-content/uploads/2020/08/sddefault-1-324x160.jpg', 'mixivlog17-nha-moi-cuoc-song-moi-cua-gia-dinh-do-mixi', 'ma-soi', '2020-10-31 10:43:56'),
(31, 'Ma sói', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Hywo2vnQLOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'MixiVLOG#17: Nhà mới, cuộc sống mới của gia đình Độ Mixi\r\n', 'https://mixigaming.com/wp-content/uploads/2020/08/sddefault-1-324x160.jpg', 'mixivlog17-nha-moi-cuoc-song-moi-cua-gia-dinh-do-mixi', 'ma-soi', '2020-10-31 10:43:56'),
(32, 'Among Us', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Hywo2vnQLOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'MixiVLOG#17: Nhà mới, cuộc sống mới của gia đình Độ Mixi\r\n', 'https://mixigaming.com/wp-content/uploads/2020/10/maxresdefault-25-324x235.jpg', 'mixivlog17-nha-moi-cuoc-song-moi-cua-gia-dinh-do-mixi', 'among-us', '2020-10-31 10:43:56'),
(33, 'conan', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_I6XDC300lg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '(Talkshow) Đàn ông tinh tế là phải biết chặt gà, Các món ăn lạ không phải ai cũng biết', 'https://mixigaming.com/wp-content/uploads/2020/09/maxresdefault-31-324x235.jpg', 'talkshow-đàn-ông-tinh-tế-là-phải-biết-chặt-gà-các-món-ăn-lạ-không-phải-ai-cũng-biết', 'conan', '2020-10-29 10:48:24'),
(34, 'Among Us', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Hywo2vnQLOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'MixiVLOG#17: Nhà mới, cuộc sống mới của gia đình Độ Mixi\r\n', 'https://mixigaming.com/wp-content/uploads/2020/10/maxresdefault-25-324x235.jpg', 'mixivlog17-nha-moi-cuoc-song-moi-cua-gia-dinh-do-mixi', 'among-us', '2020-10-31 10:43:56'),
(35, 'conan', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_I6XDC300lg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '(Talkshow) Đàn ông tinh tế là phải biết chặt gà, Các món ăn lạ không phải ai cũng biết', 'https://mixigaming.com/wp-content/uploads/2020/09/maxresdefault-31-324x235.jpg', 'talkshow-đàn-ông-tinh-tế-là-phải-biết-chặt-gà-các-món-ăn-lạ-không-phải-ai-cũng-biết', 'conan', '2020-10-29 10:48:24'),
(36, 'conan', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_I6XDC300lg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '(Talkshow) Đàn ông tinh tế là phải biết chặt gà, Các món ăn lạ không phải ai cũng biết', 'https://mixigaming.com/wp-content/uploads/2020/09/maxresdefault-31-324x235.jpg', 'talkshow-đàn-ông-tinh-tế-là-phải-biết-chặt-gà-các-món-ăn-lạ-không-phải-ai-cũng-biết', 'conan', '2020-10-29 10:48:24'),
(42, 'conan', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_I6XDC300lg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '(Talkshow) Đàn ông tinh tế là phải biết chặt gà, Các món ăn lạ không phải ai cũng biết', 'https://mixigaming.com/wp-content/uploads/2020/09/maxresdefault-31-324x235.jpg', 'talkshow-đàn-ông-tinh-tế-là-phải-biết-chặt-gà-các-món-ăn-lạ-không-phải-ai-cũng-biết', 'conan', '2020-10-29 10:48:24'),
(47, 'Ma sói', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Hywo2vnQLOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'MixiVLOG#17: Nhà mới, cuộc sống mới của gia đình Độ Mixi\r\n', 'https://mixigaming.com/wp-content/uploads/2020/08/sddefault-1-324x160.jpg', 'mixivlog17-nha-moi-cuoc-song-moi-cua-gia-dinh-do-mixi', 'ma-soi', '2020-10-31 10:43:56'),
(48, 'Ma sói', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Hywo2vnQLOY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'MixiVLOG#17: Nhà mới, cuộc sống mới của gia đình Độ Mixi\r\n', 'https://mixigaming.com/wp-content/uploads/2020/08/sddefault-1-324x160.jpg', 'mixivlog17-nha-moi-cuoc-song-moi-cua-gia-dinh-do-mixi', 'ma-soi', '2020-10-31 10:43:56');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`stt`),
  ADD KEY `name` (`name`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `User` (`username`);

--
-- Chỉ mục cho bảng `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `log`
--
ALTER TABLE `log`
  MODIFY `stt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `name` FOREIGN KEY (`name`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
