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
-- 資料表結構 `picker_cate`
--

CREATE TABLE `picker_cate` (
  `Id` int(3) UNSIGNED NOT NULL COMMENT '分類編號',
  `Floor` int(3) NOT NULL COMMENT '分類階層(0:父 1:子)',
  `Name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '分類名稱',
  `ParentId` int(3) NOT NULL COMMENT '父階層編號',
  `Sort` int(4) DEFAULT NULL COMMENT '順序',
  `isDelete` int(1) DEFAULT 0 COMMENT '是否刪除',
  `Credate` datetime NOT NULL COMMENT '新增時間',
  `Upddate` datetime NOT NULL COMMENT '修改時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `picker_cate`
--

INSERT INTO `picker_cate` (`Id`, `Floor`, `Name`, `ParentId`, `Sort`, `isDelete`, `Credate`, `Upddate`) VALUES
(1, 0, '連線代購', 0, NULL, 0, '2020-01-09 18:35:21', '2020-01-09 18:35:21'),
(2, 0, '男裝', 0, NULL, 0, '2020-01-09 18:35:48', '2020-01-09 18:35:48'),
(3, 0, '女裝', 0, NULL, 0, '2020-01-09 18:35:55', '2020-01-09 18:35:55'),
(4, 1, '東京連線', 1, NULL, 0, '2020-01-09 18:36:06', '2020-01-09 18:36:06'),
(5, 1, '會被帥暈', 2, NULL, 0, '2020-01-09 18:36:18', '2020-01-09 18:36:18'),
(6, 1, '被帥暈*2', 2, NULL, 0, '2020-01-09 18:36:28', '2020-01-09 18:36:28'),
(7, 1, '歐逆美美的', 3, NULL, 0, '2020-01-09 18:36:38', '2020-01-09 18:36:38');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `picker_cate`
--
ALTER TABLE `picker_cate`
  ADD PRIMARY KEY (`Id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `picker_cate`
--
ALTER TABLE `picker_cate`
  MODIFY `Id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '分類編號', AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
