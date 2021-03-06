-- 新增輪播圖圖片

CREATE TABLE `s1080407`.`picker_carouselpic` ( `UUID` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號' ,  `Sort` VARCHAR(50) NOT NULL COMMENT '圖片順序' ,  `Name` VARCHAR(50) NOT NULL COMMENT '圖片名稱' ,  `isShow` INT(1) NOT NULL DEFAULT '1' COMMENT '是否顯示' ,  `Credate` DATETIME NOT NULL COMMENT '新增時間' ,  `Upddate` DATETIME NOT NULL COMMENT '修改時間' ,    PRIMARY KEY  (`UUID`)) ENGINE = InnoDB;

-- 商品
CREATE TABLE `s1080407`.`picker_prod` ( `Id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '商品編號' ,  `Name` VARCHAR(50) NOT NULL COMMENT '商品名稱' ,  `CateId` INT(5) NOT NULL COMMENT '分類編號' ,  `MainPic` VARCHAR(500) NOT NULL COMMENT '商品圖片' ,  `CostPrice` INT(10) NOT NULL COMMENT '成本' ,  `Price` INT(10) NOT NULL COMMENT '售價' ,  `Nprice` INT(10) NOT NULL COMMENT '一般會員價' ,  `PkPrice` INT(10) NOT NULL COMMENT '批客價' ,  `ShortDesc` VARCHAR(500) NOT NULL COMMENT '簡短敘述' ,  `ProdDesc` TEXT NOT NULL COMMENT '商品敘述' ,  `isMainSale` INT(1) NOT NULL COMMENT '是否為強檔商品' ,  `isDelete` INT(1) NULL DEFAULT '0' COMMENT '是否刪除' ,  `Credate` DATETIME NULL COMMENT '新增時間' ,  `Upddate` DATETIME NULL COMMENT '修改時間' ,    PRIMARY KEY  (`Id`)) ENGINE = InnoDB COMMENT = '商品';
ALTER TABLE `picker_prod` ADD `Spec` TEXT NOT NULL AFTER `MainPic`;
-- 分類
CREATE TABLE `s1080407`.`picker_cate` ( `Id` INT(3) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '分類編號' ,  `Floor` INT(3) NOT NULL COMMENT '分類階層(0:父 1:子)' ,  `Name` VARCHAR(100) NOT NULL COMMENT '分類名稱' ,  `ParentId` INT(3) NOT NULL COMMENT '父階層編號' ,  `Sort` INT(4) NULL COMMENT '順序' ,  `isDelete` INT(1) NULL DEFAULT '0' COMMENT '是否刪除' ,  `Credate` DATETIME NOT NULL COMMENT '新增時間' ,  `Upddate` DATETIME NOT NULL COMMENT '修改時間' ,    PRIMARY KEY  (`Id`)) ENGINE = InnoDB;
-- 會員
CREATE TABLE `s1080407`.`picker_member` ( `UUID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號' ,  `ACC` VARCHAR(50) NOT NULL COMMENT '帳號' ,  `PWD` VARCHAR(50) NOT NULL COMMENT '密碼' ,  `MemberId` INT(5) NOT NULL COMMENT '會員編號' ,  `MemberType` INT(2) NOT NULL COMMENT '會員型態' ,  `isDelete` INT(1) NOT NULL DEFAULT '0' COMMENT '是否刪除' ,  `Credate` DATETIME NULL COMMENT '新增時間' ,  `Upddate` DATETIME NULL COMMENT '修改時間' ,    PRIMARY KEY  (`UUID`)) ENGINE = InnoDB COMMENT = '會員帳號';
-- 會員資訊
CREATE TABLE `s1080407`.`picker_memberinfo` ( `Id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '會員編號' ,  `Name` VARCHAR(20) NOT NULL COMMENT '會員名稱(Woman:女,Men:男)' ,  `Gender` VARCHAR(15) NOT NULL COMMENT '性別' ,  `Birth` VARCHAR(15) NOT NULL COMMENT '生日' ,  `Email` VARCHAR(50) NOT NULL COMMENT '信箱' ,  `ACC` VARCHAR(50) NOT NULL COMMENT '帳號' ,  `PWD` VARCHAR(50) NOT NULL COMMENT '密碼' ,  `Type` VARCHAR(2) NOT NULL DEFAULT '0' COMMENT '會員類型(0:一般會員,1:PK會員)' ,  `isDelete` INT(1) NULL DEFAULT '0' COMMENT '是否刪除' ,  `Credate` DATETIME NULL COMMENT '新增時間' ,  `Upddate` DATETIME NULL COMMENT '修改時間' ,    PRIMARY KEY  (`Id`)) ENGINE = InnoDB;


ALTER TABLE `picker_memberinfo` CHANGE `Id` `Id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '會員編號', CHANGE `Name` `Name` VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT '會員名稱(Woman:女,Men:男)', CHANGE `Gender` `Gender` VARCHAR(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT '性別', CHANGE `Birth` `Birth` VARCHAR(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT '生日', CHANGE `Email` `Email` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT '信箱';
-- 訂單
CREATE TABLE `s1080407`.`picker_orderinfo` ( `Id` INT(50) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '訂單編號' ,  `MemberId` INT(5) NOT NULL COMMENT '會員編號' ,  `MemberType` INT(2) NOT NULL COMMENT '會員類型' ,  `OdrDetail` TEXT NOT NULL COMMENT '訂單明細' ,  `DealPrice` INT(10) NOT NULL COMMENT '交易金額' ,  `Status` VARCHAR(50) NULL DEFAULT '0' COMMENT '交易狀態' ,  `Credate` DATETIME NOT NULL COMMENT '新增時間' ,  `Upddate` DATETIME NOT NULL COMMENT '修改時間' ,    PRIMARY KEY  (`Id`)) ENGINE = InnoDB COMMENT = '訂單明細';

-- 訂單寄送
CREATE TABLE `s1080407`.`picker_trans` ( `OrderId` INT(50) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '訂單編號' ,  `MemberId` INT(5) NOT NULL COMMENT '會員編號' ,  `Recipient` VARCHAR(50) NULL COMMENT '收件人' ,  `Re_Addr` VARCHAR(50) NULL COMMENT '收件人地址' ,  `Re_Phone` VARCHAR(20) NULL COMMENT '收件人電話' ,  `Credate` DATETIME NOT NULL COMMENT '新增時間' ,  `Upddate` DATETIME NOT NULL COMMENT '修改時間' ,    PRIMARY KEY  (`OrderId`)) ENGINE = InnoDB COMMENT = '訂單寄送資訊';

ALTER TABLE `picker_trans` ADD `UUID` INT(10) NOT NULL FIRST;
ALTER TABLE `picker_trans` CHANGE `OrderId` `OrderId` INT(50) NOT NULL COMMENT '訂單編號';
ALTER TABLE `picker_trans` DROP PRIMARY KEY, ADD PRIMARY KEY(`UUID`);
ALTER TABLE `picker_trans` CHANGE `UUID` `UUID` INT(10) NOT NULL AUTO_INCREMENT;

以上上傳完
-- ------------------------------------------
