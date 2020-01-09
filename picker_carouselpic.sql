-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `s1080407`
--

-- --------------------------------------------------------

--
-- 資料表結構 `picker_carouselpic`
--

CREATE TABLE `picker_carouselpic` (
  `UUID` int(10) UNSIGNED NOT NULL COMMENT '流水號',
  `Sort` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圖片順序',
  `Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圖片名稱',
  `isShow` int(1) NOT NULL DEFAULT 1 COMMENT '是否顯示',
  `Credate` datetime NOT NULL COMMENT '新增時間',
  `Upddate` datetime NOT NULL COMMENT '修改時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `picker_carouselpic`
--

INSERT INTO `picker_carouselpic` (`UUID`, `Sort`, `Name`, `isShow`, `Credate`, `Upddate`) VALUES
(23, '4', '1578577557_carousel1950-2.jpg', 0, '2020-01-09 21:45:57', '2020-01-10 01:17:23'),
(24, '3', '1578577571_carousel1950-3.jpg', 0, '2020-01-09 21:46:11', '2020-01-10 01:17:23'),
(29, '6', '1578587096_carousel1950-1.jpg', 1, '2020-01-10 00:24:56', '2020-01-10 01:17:38'),
(30, '5', '1578587104_carousel1950-2.jpg', 1, '2020-01-10 00:25:04', '2020-01-10 01:17:38'),
(31, '7', '1578587112_carousel1950-6.jpg', 1, '2020-01-10 00:25:12', '2020-01-10 01:17:36'),
(32, '8', '1578587118_carousel1950-4.jpg', 1, '2020-01-10 00:25:18', '2020-01-10 01:17:36');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `picker_carouselpic`
--
ALTER TABLE `picker_carouselpic`
  ADD PRIMARY KEY (`UUID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `picker_carouselpic`
--
ALTER TABLE `picker_carouselpic`
  MODIFY `UUID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
