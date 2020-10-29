-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `forestbear`
--

-- --------------------------------------------------------

--
-- 資料表結構 `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `farmer_contract`
--

CREATE TABLE `farmer_contract` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `con_image` int(11) NOT NULL,
  `con_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `farmer_contract`
--

INSERT INTO `farmer_contract` (`id`, `fid`, `name`, `content`, `price`, `con_image`, `con_date`, `created_at`, `updated_at`) VALUES
(1, 1, '王大明', '我就是想買一把菜', 100, 0, '2020-11-05', NULL, NULL),
(2, 2, '林阿美', '我就種個高麗菜', 50, 0, '2020-12-11', NULL, NULL),
(3, 3, '丁一', '紅龍果好吃優', 500, 0, '2020-11-10', NULL, NULL),
(4, 4, '張三', '小白菜做蔬菜蛋餅', 10, 0, '2020-12-11', NULL, NULL),
(5, 5, '李四', '花椰菜補充維生素', 900, 0, '2021-10-11', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `farmer_introduction`
--

CREATE TABLE `farmer_introduction` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fid` int(11) NOT NULL,
  `farm_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `farm_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lid` int(11) NOT NULL,
  `vegid` int(11) NOT NULL,
  `veg_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `farmer_introduction`
--

INSERT INTO `farmer_introduction` (`id`, `fid`, `farm_name`, `farm_content`, `lid`, `vegid`, `veg_filename`, `discount`, `contact_number`, `contact_email`, `contact_address`, `created_at`, `updated_at`) VALUES
(1, 1, '王大明', '就是個王農夫', 2, 2, '', '123456', '0912345678', '111@gmail.com', '住在北極星', NULL, NULL),
(2, 2, '林阿美', '就是個林農夫', 3, 4, '', 'A2b456', '0922345678', '222@gmail.com', '住在每每家', NULL, NULL),
(3, 3, '丁一', '就是個丁農夫', 5, 3, '', 'h2p456', '0933345678', '333@gmail.com', '住在丁丁家', NULL, NULL),
(4, 4, '張三', '就是個張農夫', 5, 6, '', 'b7g8i9', '0944445678', '444@gmail.com', '住在天龍國', NULL, NULL),
(5, 5, '李四', '就想來個李子', 7, 3, '', 'ABC859', '0955555678', '555@gmail.com', '李李仁我鄰居', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `farmer_member_ships`
--

CREATE TABLE `farmer_member_ships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `farmer_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `farmer_member_ships`
--

INSERT INTO `farmer_member_ships` (`id`, `name`, `personal_id`, `email`, `password`, `remember_token`, `farmer_img`, `created_at`, `updated_at`) VALUES
(1, '王大明', 'A123456789', '111@gmail.com', '1111', NULL, '', NULL, NULL),
(2, '林阿美', 'B123456789', '222@gmail.com', '2222', NULL, '', NULL, NULL),
(3, '丁一', 'C123456789', '333@gmail.com', '3333', NULL, '', NULL, NULL),
(4, '張三', 'D123456789', '444@gmail.com', '4444', NULL, '', NULL, NULL),
(5, '李四', 'E123456789', '555@gmail.com', '5555', NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `forestbear`
--

CREATE TABLE `forestbear` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `lid_list`
--

CREATE TABLE `lid_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `lid_list`
--

INSERT INTO `lid_list` (`id`, `location`) VALUES
(1, '基隆市'),
(2, '台北市'),
(3, '新北市'),
(4, '桃園市'),
(5, '新竹市'),
(6, '新竹縣'),
(7, '苗栗縣'),
(8, '彰化縣'),
(9, '新北市'),
(10, '桃園市'),
(11, '新竹市'),
(12, '新竹縣'),
(13, '苗栗縣'),
(14, '彰化縣'),
(15, '南投縣'),
(16, '雲林縣'),
(17, '南投縣'),
(18, '雲林縣'),
(19, '嘉義市'),
(20, '嘉義縣'),
(21, '台南市'),
(22, '高雄市'),
(23, '屏東縣'),
(24, '宜蘭縣'),
(25, '花蓮縣'),
(26, '台東縣'),
(27, '澎湖縣'),
(28, '金門縣'),
(29, '連江縣');

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_10_09_133302_create_sessions_table', 1),
(16, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(19, '2020_10_09_133302_create_sessions_table', 1),
(43, '2014_10_12_000000_create_users_table', 2),
(44, '2014_10_12_100000_create_password_resets_table', 2),
(45, '2019_08_19_000000_create_failed_jobs_table', 2),
(46, '2020_10_25_143212_create_farmer_member_ships_table', 2),
(47, '2020_10_26_023024_create_people_member_ship_table', 2),
(48, '2020_10_26_033313_create_farmer_introduction_table', 2),
(49, '2020_10_26_034427_create_lid_list_table', 2),
(50, '2020_10_26_034949_create_vegid_list_table', 2),
(51, '2020_10_26_035346_create_people_like_table', 2),
(52, '2020_10_26_061252_create_veglist_table', 2),
(53, '2020_10_27_023658_create_veg_price_table', 2),
(54, '2020_10_27_024359_create_farmer_contract_table', 2),
(55, '2020_10_27_024624_create_people_sponsor_table', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `people_like`
--

CREATE TABLE `people_like` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `fid` int(11) DEFAULT NULL,
  `like_fid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `people_like`
--

INSERT INTO `people_like` (`id`, `pid`, `fid`, `like_fid`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 1, NULL, NULL),
(2, NULL, 2, 1, NULL, NULL),
(3, 2, NULL, 1, NULL, NULL),
(4, NULL, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `people_member_ship`
--

CREATE TABLE `people_member_ship` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `people_member_ship`
--

INSERT INTO `people_member_ship` (`id`, `name`, `personal_id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '一一', 'A111111111', 'AAA@gmail.com', 'aaaa', NULL, NULL, NULL),
(2, '二二', 'B222222222', 'BBB@gmail.com', 'BBBB', NULL, NULL, NULL),
(3, '三三', 'A111113333', 'CC@gmail.com', 'cccc', NULL, NULL, NULL),
(4, '四四', 'B222222444', 'DDD@gmail.com', 'DDDD', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `people_sponsor`
--

CREATE TABLE `people_sponsor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `fid` int(11) DEFAULT NULL,
  `con_fid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `people_sponsor`
--

INSERT INTO `people_sponsor` (`id`, `pid`, `fid`, `con_fid`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 2, NULL, NULL),
(2, NULL, 1, 3, NULL, NULL),
(3, 2, NULL, 3, NULL, NULL),
(4, NULL, 2, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `users`
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

-- --------------------------------------------------------

--
-- 資料表結構 `vegid_list`
--

CREATE TABLE `vegid_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vegname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `vegid_list`
--

INSERT INTO `vegid_list` (`id`, `category`, `vegname`, `created_at`, `updated_at`) VALUES
(3, 'C1', '花椰菜', NULL, NULL),
(4, 'C1', '青花菜', NULL, NULL),
(5, 'C1', '胡瓜', NULL, NULL),
(6, 'C1', '苦瓜', NULL, NULL),
(9, 'C1', '絲瓜', NULL, NULL),
(10, 'C1', '茄子', NULL, NULL),
(11, 'C1', '碗豆', NULL, NULL),
(12, 'C1', '毛豆', NULL, NULL),
(13, 'C1', '甜椒', NULL, NULL),
(14, 'C1', '南瓜', NULL, NULL),
(16, 'C2', '甘藍', NULL, NULL),
(17, 'C2', '結球白菜', NULL, NULL),
(18, 'C2', '結球萵苣', NULL, NULL),
(19, 'C2', '菠菜', NULL, NULL),
(20, 'C2', '地瓜葉', NULL, NULL),
(21, 'C2', '小白菜', NULL, NULL),
(22, 'C2', '清江菜', NULL, NULL),
(23, 'C2', '油菜', NULL, NULL),
(24, 'C2', '芥菜', NULL, NULL),
(25, 'C2', '龍鬚菜', NULL, NULL),
(26, 'C2', '茼蒿', NULL, NULL),
(27, 'C2', '莧菜', NULL, NULL),
(28, 'C2', '芹菜', NULL, NULL),
(29, 'C3', '青蔥', NULL, NULL),
(30, 'C3', '紅蘿蔔', NULL, NULL),
(31, 'C3', '蘿蔔', NULL, NULL),
(32, 'C3', '蘆筍', NULL, NULL),
(33, 'C3', '筊白筍', NULL, NULL),
(34, 'C3', '青蔥', NULL, NULL),
(39, 'C3', '芋頭', NULL, NULL),
(40, 'C3', '甘藷', NULL, NULL),
(41, 'C3', '馬鈴薯', NULL, NULL),
(42, 'C3', '韭菜', NULL, NULL),
(43, 'C4', '香菇', NULL, NULL),
(44, 'C4', '金針菇', NULL, NULL),
(45, 'C4', '杏鮑菇', NULL, NULL),
(46, 'C4', '猴頭菇', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `veglist`
--

CREATE TABLE `veglist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `veglist`
--

INSERT INTO `veglist` (`id`, `category`) VALUES
(1, '花果菜類'),
(2, '葉菜類'),
(3, '根莖菜類'),
(4, '菇類'),
(5, '其他');

-- --------------------------------------------------------

--
-- 資料表結構 `veg_price`
--

CREATE TABLE `veg_price` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vegid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `veg_price`
--

INSERT INTO `veg_price` (`id`, `vegid`, `lid`, `price`, `date`, `created_at`, `updated_at`) VALUES
(1, '1', 1, 10, '2020-10-29 00:00:00', NULL, NULL),
(2, '1', 2, 20, '2020-10-30 00:00:00', NULL, NULL),
(3, '1', 1, 10, '2020-10-29 00:00:00', NULL, NULL),
(4, '1', 2, 20, '2020-10-30 00:00:00', NULL, NULL),
(5, '1', 3, 25, '2020-10-31 00:00:00', NULL, NULL),
(6, '1', 4, 50, '2020-10-31 00:00:00', NULL, NULL),
(7, '1', 1, 22, '2020-11-01 00:00:00', NULL, NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- 資料表索引 `farmer_contract`
--
ALTER TABLE `farmer_contract`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `farmer_introduction`
--
ALTER TABLE `farmer_introduction`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `farmer_introduction_fid_unique` (`fid`);

--
-- 資料表索引 `farmer_member_ships`
--
ALTER TABLE `farmer_member_ships`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `farmer_member_ships_personal_id_unique` (`personal_id`),
  ADD UNIQUE KEY `farmer_member_ships_email_unique` (`email`);

--
-- 資料表索引 `lid_list`
--
ALTER TABLE `lid_list`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- 資料表索引 `people_like`
--
ALTER TABLE `people_like`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `people_member_ship`
--
ALTER TABLE `people_member_ship`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `people_member_ship_personal_id_unique` (`personal_id`),
  ADD UNIQUE KEY `people_member_ship_email_unique` (`email`);

--
-- 資料表索引 `people_sponsor`
--
ALTER TABLE `people_sponsor`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- 資料表索引 `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 資料表索引 `vegid_list`
--
ALTER TABLE `vegid_list`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `veglist`
--
ALTER TABLE `veglist`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `veg_price`
--
ALTER TABLE `veg_price`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `farmer_contract`
--
ALTER TABLE `farmer_contract`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `farmer_introduction`
--
ALTER TABLE `farmer_introduction`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `farmer_member_ships`
--
ALTER TABLE `farmer_member_ships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `lid_list`
--
ALTER TABLE `lid_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `people_like`
--
ALTER TABLE `people_like`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `people_member_ship`
--
ALTER TABLE `people_member_ship`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `people_sponsor`
--
ALTER TABLE `people_sponsor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `vegid_list`
--
ALTER TABLE `vegid_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `veglist`
--
ALTER TABLE `veglist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `veg_price`
--
ALTER TABLE `veg_price`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
