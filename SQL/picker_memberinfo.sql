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
-- 資料表結構 `picker_memberinfo`
--

CREATE TABLE `picker_memberinfo` (
  `Id` int(5) UNSIGNED NOT NULL COMMENT '會員編號',
  `Name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '會員名稱(Woman:女,Men:男)',
  `Gender` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '性別',
  `Birth` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '生日',
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '信箱',
  `ACC` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `PWD` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密碼',
  `Type` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '會員類型(0:一般會員,1:PK會員)',
  `isDelete` int(1) DEFAULT 0 COMMENT '是否刪除',
  `Credate` datetime DEFAULT NULL COMMENT '新增時間',
  `Upddate` datetime DEFAULT NULL COMMENT '修改時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `picker_memberinfo`
--

INSERT INTO `picker_memberinfo` (`Id`, `Name`, `Gender`, `Birth`, `Email`, `ACC`, `PWD`, `Type`, `isDelete`, `Credate`, `Upddate`) VALUES
(1, '江盈蓉', 'WOMEN', '1994/03/15', 'wjyr0315@gmail.com', 'reira', '1234', '0', 0, NULL, NULL),
(2, '江盈蓉', 'WOMEN', '1994/03/15', 'wjyr0315@gmail.com', 'reira2', '1234', '1', 0, NULL, NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `picker_memberinfo`
--
ALTER TABLE `picker_memberinfo`
  ADD PRIMARY KEY (`Id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `picker_memberinfo`
--
ALTER TABLE `picker_memberinfo`
  MODIFY `Id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '會員編號', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
