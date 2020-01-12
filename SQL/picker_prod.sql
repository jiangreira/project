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
-- 資料表結構 `picker_prod`
--

CREATE TABLE `picker_prod` (
  `Id` int(10) UNSIGNED NOT NULL COMMENT '商品編號',
  `Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '商品名稱',
  `CateId` int(5) NOT NULL COMMENT '分類編號',
  `MainPic` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '商品圖片',
  `CostPrice` int(10) DEFAULT NULL COMMENT '成本',
  `Price` int(10) NOT NULL COMMENT '售價',
  `Nprice` int(10) NOT NULL COMMENT '一般會員價',
  `PkPrice` int(10) NOT NULL COMMENT '批客價',
  `ShortDesc` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '簡短敘述',
  `ProdDesc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '商品敘述',
  `isMainSale` int(1) DEFAULT 0 COMMENT '是否為強檔商品',
  `isDelete` int(1) DEFAULT 0 COMMENT '是否刪除',
  `Credate` datetime NOT NULL COMMENT '新增時間',
  `Upddate` datetime NOT NULL COMMENT '修改時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='商品';

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `picker_prod`
--
ALTER TABLE `picker_prod`
  ADD PRIMARY KEY (`Id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `picker_prod`
--
ALTER TABLE `picker_prod`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '商品編號';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
