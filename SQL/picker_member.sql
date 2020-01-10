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
-- 資料表結構 `picker_member`
--

CREATE TABLE `picker_member` (
  `UUID` int(10) UNSIGNED NOT NULL COMMENT '流水號',
  `ACC` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `PWD` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密碼',
  `MemberId` int(5) NOT NULL COMMENT '會員編號',
  `MemberType` int(2) NOT NULL COMMENT '會員型態',
  `isDelete` int(1) NOT NULL DEFAULT 0 COMMENT '是否刪除',
  `Credate` datetime DEFAULT NULL COMMENT '新增時間',
  `Upddate` datetime DEFAULT NULL COMMENT '修改時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='會員帳號';

--
-- 傾印資料表的資料 `picker_member`
--

INSERT INTO `picker_member` (`UUID`, `ACC`, `PWD`, `MemberId`, `MemberType`, `isDelete`, `Credate`, `Upddate`) VALUES
(1, 'reira', '1234', 1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'reira2', '1234', 2, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `picker_member`
--
ALTER TABLE `picker_member`
  ADD PRIMARY KEY (`UUID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `picker_member`
--
ALTER TABLE `picker_member`
  MODIFY `UUID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
