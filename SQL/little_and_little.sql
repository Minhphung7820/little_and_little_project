-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2022 lúc 04:20 AM
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
-- Cơ sở dữ liệu: `little_and_little`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nameEvent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateBegin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateEnd` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `events`
--

INSERT INTO `events` (`id`, `nameEvent`, `slug`, `image`, `dateBegin`, `dateEnd`, `location`, `price`, `content`, `created_at`, `updated_at`) VALUES
(11, 'Biển nhân tạo', 'bien-nhan-tao', 'https://dulichlive.com/sai-gon/wp-content/uploads/sites/9/2020/06/Cong-vien-Dam-Sen-3.png', '2022-10-23 12:22:41', '2022-10-25 12:22:41', 'Đầm sen Park', 50000, '<p>Nơi du kh&aacute;ch tha hồ &ldquo;thử th&aacute;ch&rdquo; l&ograve;ng dũng cảm của bản th&acirc;n với hệ thống tr&ograve; chơi cảm gi&aacute;c mạnh được trang bị m&aacute;y m&oacute;c hiện đại tại khu du lịch Đầm Sen Kh&ocirc;. Du kh&aacute;ch sẽ cảm thấy vừa hồi hộp, vừa lo sợ lại vừa phấn kh&iacute;ch, khi đ&atilde; vượt qua được tr&ograve; chơi th&igrave; cũng giống như vượt qua được &ldquo;giới hạn&rdquo; của bản th&acirc;n trong thời gian qua. Trong đ&oacute; nổi bật hơn cả l&agrave;: v&ograve;ng quay thần tốc, t&agrave;u vượt th&aacute;c, Power Surge,&hellip;</p>\n\n            <p><em>Lưu &yacute;: Tuy nhi&ecirc;n, với những du kh&aacute;ch sức khỏe k&eacute;m, sợ độ cao hoặc c&oacute; bệnh về tim mạch th&igrave; kh&ocirc;ng n&ecirc;n tham gia những tr&ograve; chơi n&agrave;y.</em></p>\n            \n            <p><img alt=\"các trò chơi ở đầm sen khô\" src=\"https://dulich3mien.vn/wp-content/uploads/2022/03/HON-SEN-KHO-02-min.jpg\" style=\"height:779px; width:974px\" /></p>\n            \n            <p>Tại c&ocirc;ng vi&ecirc;n Đầm Sen Kh&ocirc; c&oacute; 5 tr&ograve; chơi tương t&aacute;c c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến nhất được rất nhiều bạn nhỏ, du kh&aacute;ch trẻ y&ecirc;u th&iacute;ch như: Rạp chiếu phim 8D, l&acirc;u đ&agrave;i kỳ th&uacute;, bắn s&uacute;ng Run Raider, đua xe Turbo Racing, 9D Virtual Reality. Du kh&aacute;ch sẽ được trải nghiệm những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay, tựa như bước ch&acirc;n v&agrave; một thế giới mới lạ, đầy kỳ th&uacute; trong tương lai.</p>\n            \n            <p>&nbsp;</p>', '2022-10-23 05:22:41', NULL),
(12, 'Trượt ống nước', 'truot-ong-nuoc', 'https://asiaopentours.net/wp-content/uploads/2018/08/dam-sen-park-1.jpg', '2022-10-23 12:22:41', '2022-10-25 12:22:41', 'Đầm sen Park', 25000, '<p>Nơi du kh&aacute;ch tha hồ &ldquo;thử th&aacute;ch&rdquo; l&ograve;ng dũng cảm của bản th&acirc;n với hệ thống tr&ograve; chơi cảm gi&aacute;c mạnh được trang bị m&aacute;y m&oacute;c hiện đại tại khu du lịch Đầm Sen Kh&ocirc;. Du kh&aacute;ch sẽ cảm thấy vừa hồi hộp, vừa lo sợ lại vừa phấn kh&iacute;ch, khi đ&atilde; vượt qua được tr&ograve; chơi th&igrave; cũng giống như vượt qua được &ldquo;giới hạn&rdquo; của bản th&acirc;n trong thời gian qua. Trong đ&oacute; nổi bật hơn cả l&agrave;: v&ograve;ng quay thần tốc, t&agrave;u vượt th&aacute;c, Power Surge,&hellip;</p>\n\n            <p><em>Lưu &yacute;: Tuy nhi&ecirc;n, với những du kh&aacute;ch sức khỏe k&eacute;m, sợ độ cao hoặc c&oacute; bệnh về tim mạch th&igrave; kh&ocirc;ng n&ecirc;n tham gia những tr&ograve; chơi n&agrave;y.</em></p>\n            \n            <p><img alt=\"các trò chơi ở đầm sen khô\" src=\"https://dulich3mien.vn/wp-content/uploads/2022/03/HON-SEN-KHO-02-min.jpg\" style=\"height:779px; width:974px\" /></p>\n            \n            <p>Tại c&ocirc;ng vi&ecirc;n Đầm Sen Kh&ocirc; c&oacute; 5 tr&ograve; chơi tương t&aacute;c c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến nhất được rất nhiều bạn nhỏ, du kh&aacute;ch trẻ y&ecirc;u th&iacute;ch như: Rạp chiếu phim 8D, l&acirc;u đ&agrave;i kỳ th&uacute;, bắn s&uacute;ng Run Raider, đua xe Turbo Racing, 9D Virtual Reality. Du kh&aacute;ch sẽ được trải nghiệm những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay, tựa như bước ch&acirc;n v&agrave; một thế giới mới lạ, đầy kỳ th&uacute; trong tương lai.</p>\n            \n            <p>&nbsp;</p>', '2022-10-23 05:22:41', NULL),
(13, 'Lâu đài nước', 'lau-dai-nuoc', 'https://www.damsenwaterpark.com.vn/wp-content/uploads/2020/khu-tro-choi/ho%20thieu%20nhi/DSN_Children-pool_01.jpg', '2022-10-23 12:22:41', '2022-10-25 12:22:41', 'Đầm sen Park', 40000, '<p>Nơi du kh&aacute;ch tha hồ &ldquo;thử th&aacute;ch&rdquo; l&ograve;ng dũng cảm của bản th&acirc;n với hệ thống tr&ograve; chơi cảm gi&aacute;c mạnh được trang bị m&aacute;y m&oacute;c hiện đại tại khu du lịch Đầm Sen Kh&ocirc;. Du kh&aacute;ch sẽ cảm thấy vừa hồi hộp, vừa lo sợ lại vừa phấn kh&iacute;ch, khi đ&atilde; vượt qua được tr&ograve; chơi th&igrave; cũng giống như vượt qua được &ldquo;giới hạn&rdquo; của bản th&acirc;n trong thời gian qua. Trong đ&oacute; nổi bật hơn cả l&agrave;: v&ograve;ng quay thần tốc, t&agrave;u vượt th&aacute;c, Power Surge,&hellip;</p>\n\n            <p><em>Lưu &yacute;: Tuy nhi&ecirc;n, với những du kh&aacute;ch sức khỏe k&eacute;m, sợ độ cao hoặc c&oacute; bệnh về tim mạch th&igrave; kh&ocirc;ng n&ecirc;n tham gia những tr&ograve; chơi n&agrave;y.</em></p>\n            \n            <p><img alt=\"các trò chơi ở đầm sen khô\" src=\"https://dulich3mien.vn/wp-content/uploads/2022/03/HON-SEN-KHO-02-min.jpg\" style=\"height:779px; width:974px\" /></p>\n            \n            <p>Tại c&ocirc;ng vi&ecirc;n Đầm Sen Kh&ocirc; c&oacute; 5 tr&ograve; chơi tương t&aacute;c c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến nhất được rất nhiều bạn nhỏ, du kh&aacute;ch trẻ y&ecirc;u th&iacute;ch như: Rạp chiếu phim 8D, l&acirc;u đ&agrave;i kỳ th&uacute;, bắn s&uacute;ng Run Raider, đua xe Turbo Racing, 9D Virtual Reality. Du kh&aacute;ch sẽ được trải nghiệm những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay, tựa như bước ch&acirc;n v&agrave; một thế giới mới lạ, đầy kỳ th&uacute; trong tương lai.</p>\n            \n            <p>&nbsp;</p>', '2022-10-23 05:22:41', NULL),
(14, 'Đu quay tròn', 'du-quay-tron', 'https://taxisanbayre.com/wp-content/uploads/2018/06/thap-xoay-8.jpg', '2022-10-23 12:22:41', '2022-10-25 12:22:41', 'Đầm sen Park', 60000, '<p>Nơi du kh&aacute;ch tha hồ &ldquo;thử th&aacute;ch&rdquo; l&ograve;ng dũng cảm của bản th&acirc;n với hệ thống tr&ograve; chơi cảm gi&aacute;c mạnh được trang bị m&aacute;y m&oacute;c hiện đại tại khu du lịch Đầm Sen Kh&ocirc;. Du kh&aacute;ch sẽ cảm thấy vừa hồi hộp, vừa lo sợ lại vừa phấn kh&iacute;ch, khi đ&atilde; vượt qua được tr&ograve; chơi th&igrave; cũng giống như vượt qua được &ldquo;giới hạn&rdquo; của bản th&acirc;n trong thời gian qua. Trong đ&oacute; nổi bật hơn cả l&agrave;: v&ograve;ng quay thần tốc, t&agrave;u vượt th&aacute;c, Power Surge,&hellip;</p>\n\n            <p><em>Lưu &yacute;: Tuy nhi&ecirc;n, với những du kh&aacute;ch sức khỏe k&eacute;m, sợ độ cao hoặc c&oacute; bệnh về tim mạch th&igrave; kh&ocirc;ng n&ecirc;n tham gia những tr&ograve; chơi n&agrave;y.</em></p>\n            \n            <p><img alt=\"các trò chơi ở đầm sen khô\" src=\"https://dulich3mien.vn/wp-content/uploads/2022/03/HON-SEN-KHO-02-min.jpg\" style=\"height:779px; width:974px\" /></p>\n            \n            <p>Tại c&ocirc;ng vi&ecirc;n Đầm Sen Kh&ocirc; c&oacute; 5 tr&ograve; chơi tương t&aacute;c c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến nhất được rất nhiều bạn nhỏ, du kh&aacute;ch trẻ y&ecirc;u th&iacute;ch như: Rạp chiếu phim 8D, l&acirc;u đ&agrave;i kỳ th&uacute;, bắn s&uacute;ng Run Raider, đua xe Turbo Racing, 9D Virtual Reality. Du kh&aacute;ch sẽ được trải nghiệm những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay, tựa như bước ch&acirc;n v&agrave; một thế giới mới lạ, đầy kỳ th&uacute; trong tương lai.</p>\n            \n            <p>&nbsp;</p>', '2022-10-23 05:22:41', NULL),
(15, 'Tàu lượn siêu tốc', 'tau-luon-sieu-toc', 'https://halotravel.vn/wp-content/uploads/2020/10/Cong-vien-Dam-Sen-3.jpg', '2022-10-23 12:22:41', '2022-10-25 12:22:41', 'Đầm sen Park', 30000, '<p>Nơi du kh&aacute;ch tha hồ &ldquo;thử th&aacute;ch&rdquo; l&ograve;ng dũng cảm của bản th&acirc;n với hệ thống tr&ograve; chơi cảm gi&aacute;c mạnh được trang bị m&aacute;y m&oacute;c hiện đại tại khu du lịch Đầm Sen Kh&ocirc;. Du kh&aacute;ch sẽ cảm thấy vừa hồi hộp, vừa lo sợ lại vừa phấn kh&iacute;ch, khi đ&atilde; vượt qua được tr&ograve; chơi th&igrave; cũng giống như vượt qua được &ldquo;giới hạn&rdquo; của bản th&acirc;n trong thời gian qua. Trong đ&oacute; nổi bật hơn cả l&agrave;: v&ograve;ng quay thần tốc, t&agrave;u vượt th&aacute;c, Power Surge,&hellip;</p>\n\n            <p><em>Lưu &yacute;: Tuy nhi&ecirc;n, với những du kh&aacute;ch sức khỏe k&eacute;m, sợ độ cao hoặc c&oacute; bệnh về tim mạch th&igrave; kh&ocirc;ng n&ecirc;n tham gia những tr&ograve; chơi n&agrave;y.</em></p>\n            \n            <p><img alt=\"các trò chơi ở đầm sen khô\" src=\"https://dulich3mien.vn/wp-content/uploads/2022/03/HON-SEN-KHO-02-min.jpg\" style=\"height:779px; width:974px\" /></p>\n            \n            <p>Tại c&ocirc;ng vi&ecirc;n Đầm Sen Kh&ocirc; c&oacute; 5 tr&ograve; chơi tương t&aacute;c c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến nhất được rất nhiều bạn nhỏ, du kh&aacute;ch trẻ y&ecirc;u th&iacute;ch như: Rạp chiếu phim 8D, l&acirc;u đ&agrave;i kỳ th&uacute;, bắn s&uacute;ng Run Raider, đua xe Turbo Racing, 9D Virtual Reality. Du kh&aacute;ch sẽ được trải nghiệm những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay, tựa như bước ch&acirc;n v&agrave; một thế giới mới lạ, đầy kỳ th&uacute; trong tương lai.</p>\n            \n            <p>&nbsp;</p>', '2022-10-23 05:22:41', NULL),
(16, 'Đu quay khổng lồ', 'du-quay-khong-lo', 'https://congviendamsen.com/wp-content/uploads/2016/11/du-quay-dung-damsen.jpg', '2022-10-23 12:22:41', '2022-10-25 12:22:41', 'Đầm sen Park', 55000, '<p>Nơi du kh&aacute;ch tha hồ &ldquo;thử th&aacute;ch&rdquo; l&ograve;ng dũng cảm của bản th&acirc;n với hệ thống tr&ograve; chơi cảm gi&aacute;c mạnh được trang bị m&aacute;y m&oacute;c hiện đại tại khu du lịch Đầm Sen Kh&ocirc;. Du kh&aacute;ch sẽ cảm thấy vừa hồi hộp, vừa lo sợ lại vừa phấn kh&iacute;ch, khi đ&atilde; vượt qua được tr&ograve; chơi th&igrave; cũng giống như vượt qua được &ldquo;giới hạn&rdquo; của bản th&acirc;n trong thời gian qua. Trong đ&oacute; nổi bật hơn cả l&agrave;: v&ograve;ng quay thần tốc, t&agrave;u vượt th&aacute;c, Power Surge,&hellip;</p>\n\n            <p><em>Lưu &yacute;: Tuy nhi&ecirc;n, với những du kh&aacute;ch sức khỏe k&eacute;m, sợ độ cao hoặc c&oacute; bệnh về tim mạch th&igrave; kh&ocirc;ng n&ecirc;n tham gia những tr&ograve; chơi n&agrave;y.</em></p>\n            \n            <p><img alt=\"các trò chơi ở đầm sen khô\" src=\"https://dulich3mien.vn/wp-content/uploads/2022/03/HON-SEN-KHO-02-min.jpg\" style=\"height:779px; width:974px\" /></p>\n            \n            <p>Tại c&ocirc;ng vi&ecirc;n Đầm Sen Kh&ocirc; c&oacute; 5 tr&ograve; chơi tương t&aacute;c c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến nhất được rất nhiều bạn nhỏ, du kh&aacute;ch trẻ y&ecirc;u th&iacute;ch như: Rạp chiếu phim 8D, l&acirc;u đ&agrave;i kỳ th&uacute;, bắn s&uacute;ng Run Raider, đua xe Turbo Racing, 9D Virtual Reality. Du kh&aacute;ch sẽ được trải nghiệm những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay, tựa như bước ch&acirc;n v&agrave; một thế giới mới lạ, đầy kỳ th&uacute; trong tương lai.</p>\n            \n            <p>&nbsp;</p>', '2022-10-23 05:22:41', NULL),
(17, 'Lái xe điện', 'lai-xe-dien', 'https://angiangtourism.vn/cac-tro-choi-o-dam-sen-kho/imager_3_3806_700.jpg', '2022-10-23 12:22:41', '2022-10-25 12:22:41', 'Đầm sen Park', 60000, '<p>Nơi du kh&aacute;ch tha hồ &ldquo;thử th&aacute;ch&rdquo; l&ograve;ng dũng cảm của bản th&acirc;n với hệ thống tr&ograve; chơi cảm gi&aacute;c mạnh được trang bị m&aacute;y m&oacute;c hiện đại tại khu du lịch Đầm Sen Kh&ocirc;. Du kh&aacute;ch sẽ cảm thấy vừa hồi hộp, vừa lo sợ lại vừa phấn kh&iacute;ch, khi đ&atilde; vượt qua được tr&ograve; chơi th&igrave; cũng giống như vượt qua được &ldquo;giới hạn&rdquo; của bản th&acirc;n trong thời gian qua. Trong đ&oacute; nổi bật hơn cả l&agrave;: v&ograve;ng quay thần tốc, t&agrave;u vượt th&aacute;c, Power Surge,&hellip;</p>\n\n            <p><em>Lưu &yacute;: Tuy nhi&ecirc;n, với những du kh&aacute;ch sức khỏe k&eacute;m, sợ độ cao hoặc c&oacute; bệnh về tim mạch th&igrave; kh&ocirc;ng n&ecirc;n tham gia những tr&ograve; chơi n&agrave;y.</em></p>\n            \n            <p><img alt=\"các trò chơi ở đầm sen khô\" src=\"https://dulich3mien.vn/wp-content/uploads/2022/03/HON-SEN-KHO-02-min.jpg\" style=\"height:779px; width:974px\" /></p>\n            \n            <p>Tại c&ocirc;ng vi&ecirc;n Đầm Sen Kh&ocirc; c&oacute; 5 tr&ograve; chơi tương t&aacute;c c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến nhất được rất nhiều bạn nhỏ, du kh&aacute;ch trẻ y&ecirc;u th&iacute;ch như: Rạp chiếu phim 8D, l&acirc;u đ&agrave;i kỳ th&uacute;, bắn s&uacute;ng Run Raider, đua xe Turbo Racing, 9D Virtual Reality. Du kh&aacute;ch sẽ được trải nghiệm những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay, tựa như bước ch&acirc;n v&agrave; một thế giới mới lạ, đầy kỳ th&uacute; trong tương lai.</p>\n            \n            <p>&nbsp;</p>', '2022-10-23 05:22:41', NULL),
(18, 'Đu thuyền', 'du-thuyen', 'https://i.ytimg.com/vi/Dw-Oc22rRQQ/maxresdefault.jpg', '2022-10-23 12:22:41', '2022-10-25 12:22:41', 'Đầm sen Park', 50000, '<p>Nơi du kh&aacute;ch tha hồ &ldquo;thử th&aacute;ch&rdquo; l&ograve;ng dũng cảm của bản th&acirc;n với hệ thống tr&ograve; chơi cảm gi&aacute;c mạnh được trang bị m&aacute;y m&oacute;c hiện đại tại khu du lịch Đầm Sen Kh&ocirc;. Du kh&aacute;ch sẽ cảm thấy vừa hồi hộp, vừa lo sợ lại vừa phấn kh&iacute;ch, khi đ&atilde; vượt qua được tr&ograve; chơi th&igrave; cũng giống như vượt qua được &ldquo;giới hạn&rdquo; của bản th&acirc;n trong thời gian qua. Trong đ&oacute; nổi bật hơn cả l&agrave;: v&ograve;ng quay thần tốc, t&agrave;u vượt th&aacute;c, Power Surge,&hellip;</p>\n\n            <p><em>Lưu &yacute;: Tuy nhi&ecirc;n, với những du kh&aacute;ch sức khỏe k&eacute;m, sợ độ cao hoặc c&oacute; bệnh về tim mạch th&igrave; kh&ocirc;ng n&ecirc;n tham gia những tr&ograve; chơi n&agrave;y.</em></p>\n            \n            <p><img alt=\"các trò chơi ở đầm sen khô\" src=\"https://dulich3mien.vn/wp-content/uploads/2022/03/HON-SEN-KHO-02-min.jpg\" style=\"height:779px; width:974px\" /></p>\n            \n            <p>Tại c&ocirc;ng vi&ecirc;n Đầm Sen Kh&ocirc; c&oacute; 5 tr&ograve; chơi tương t&aacute;c c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến nhất được rất nhiều bạn nhỏ, du kh&aacute;ch trẻ y&ecirc;u th&iacute;ch như: Rạp chiếu phim 8D, l&acirc;u đ&agrave;i kỳ th&uacute;, bắn s&uacute;ng Run Raider, đua xe Turbo Racing, 9D Virtual Reality. Du kh&aacute;ch sẽ được trải nghiệm những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay, tựa như bước ch&acirc;n v&agrave; một thế giới mới lạ, đầy kỳ th&uacute; trong tương lai.</p>\n            \n            <p>&nbsp;</p>', '2022-10-23 05:22:41', NULL),
(19, 'Đu dây vượt thác', 'du-day-vuot-thac', 'https://www.damsenwaterpark.com.vn/wp-content/uploads/2020/khu-tro-choi/du%20day/du-day-vuot-thac.jpg', '2022-10-23 12:22:41', '2022-10-25 12:22:41', 'Đầm sen Park', 30000, '<p>Nơi du kh&aacute;ch tha hồ &ldquo;thử th&aacute;ch&rdquo; l&ograve;ng dũng cảm của bản th&acirc;n với hệ thống tr&ograve; chơi cảm gi&aacute;c mạnh được trang bị m&aacute;y m&oacute;c hiện đại tại khu du lịch Đầm Sen Kh&ocirc;. Du kh&aacute;ch sẽ cảm thấy vừa hồi hộp, vừa lo sợ lại vừa phấn kh&iacute;ch, khi đ&atilde; vượt qua được tr&ograve; chơi th&igrave; cũng giống như vượt qua được &ldquo;giới hạn&rdquo; của bản th&acirc;n trong thời gian qua. Trong đ&oacute; nổi bật hơn cả l&agrave;: v&ograve;ng quay thần tốc, t&agrave;u vượt th&aacute;c, Power Surge,&hellip;</p>\n\n            <p><em>Lưu &yacute;: Tuy nhi&ecirc;n, với những du kh&aacute;ch sức khỏe k&eacute;m, sợ độ cao hoặc c&oacute; bệnh về tim mạch th&igrave; kh&ocirc;ng n&ecirc;n tham gia những tr&ograve; chơi n&agrave;y.</em></p>\n            \n            <p><img alt=\"các trò chơi ở đầm sen khô\" src=\"https://dulich3mien.vn/wp-content/uploads/2022/03/HON-SEN-KHO-02-min.jpg\" style=\"height:779px; width:974px\" /></p>\n            \n            <p>Tại c&ocirc;ng vi&ecirc;n Đầm Sen Kh&ocirc; c&oacute; 5 tr&ograve; chơi tương t&aacute;c c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến nhất được rất nhiều bạn nhỏ, du kh&aacute;ch trẻ y&ecirc;u th&iacute;ch như: Rạp chiếu phim 8D, l&acirc;u đ&agrave;i kỳ th&uacute;, bắn s&uacute;ng Run Raider, đua xe Turbo Racing, 9D Virtual Reality. Du kh&aacute;ch sẽ được trải nghiệm những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay, tựa như bước ch&acirc;n v&agrave; một thế giới mới lạ, đầy kỳ th&uacute; trong tương lai.</p>\n            \n            <p>&nbsp;</p>', '2022-10-23 05:22:41', NULL),
(20, 'Xem thủy cung', 'xem-thuy-cung', 'https://halotravel.vn/wp-content/uploads/2020/10/thuy_cung_damsen.jpg', '2022-10-23 12:22:41', '2022-10-25 12:22:41', 'Đầm sen Park', 45000, '<p>Nơi du kh&aacute;ch tha hồ &ldquo;thử th&aacute;ch&rdquo; l&ograve;ng dũng cảm của bản th&acirc;n với hệ thống tr&ograve; chơi cảm gi&aacute;c mạnh được trang bị m&aacute;y m&oacute;c hiện đại tại khu du lịch Đầm Sen Kh&ocirc;. Du kh&aacute;ch sẽ cảm thấy vừa hồi hộp, vừa lo sợ lại vừa phấn kh&iacute;ch, khi đ&atilde; vượt qua được tr&ograve; chơi th&igrave; cũng giống như vượt qua được &ldquo;giới hạn&rdquo; của bản th&acirc;n trong thời gian qua. Trong đ&oacute; nổi bật hơn cả l&agrave;: v&ograve;ng quay thần tốc, t&agrave;u vượt th&aacute;c, Power Surge,&hellip;</p>\n\n            <p><em>Lưu &yacute;: Tuy nhi&ecirc;n, với những du kh&aacute;ch sức khỏe k&eacute;m, sợ độ cao hoặc c&oacute; bệnh về tim mạch th&igrave; kh&ocirc;ng n&ecirc;n tham gia những tr&ograve; chơi n&agrave;y.</em></p>\n            \n            <p><img alt=\"các trò chơi ở đầm sen khô\" src=\"https://dulich3mien.vn/wp-content/uploads/2022/03/HON-SEN-KHO-02-min.jpg\" style=\"height:779px; width:974px\" /></p>\n            \n            <p>Tại c&ocirc;ng vi&ecirc;n Đầm Sen Kh&ocirc; c&oacute; 5 tr&ograve; chơi tương t&aacute;c c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến nhất được rất nhiều bạn nhỏ, du kh&aacute;ch trẻ y&ecirc;u th&iacute;ch như: Rạp chiếu phim 8D, l&acirc;u đ&agrave;i kỳ th&uacute;, bắn s&uacute;ng Run Raider, đua xe Turbo Racing, 9D Virtual Reality. Du kh&aacute;ch sẽ được trải nghiệm những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay, tựa như bước ch&acirc;n v&agrave; một thế giới mới lạ, đầy kỳ th&uacute; trong tương lai.</p>\n            \n            <p>&nbsp;</p>', '2022-10-23 05:22:41', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_10_15_150313_create_events_table', 1),
(13, '2022_10_18_033523_create_order_table', 2),
(15, '2022_10_21_040629_create_ticket_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `dateUse` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pay` tinyint(1) NOT NULL DEFAULT 1,
  `numberCard` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nameCard` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateEndCard` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DateTimeout` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `codeCard` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ticket`
--

CREATE TABLE `ticket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idOrder` int(11) NOT NULL,
  `codeTicket` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qrCode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateUse` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `single_price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
