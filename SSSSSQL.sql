-- 新增輪播圖圖片

CREATE TABLE `s1080407`.`picker_carouselpic` ( `UUID` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號' ,  `Sort` VARCHAR(50) NOT NULL COMMENT '圖片順序' ,  `Name` VARCHAR(50) NOT NULL COMMENT '圖片名稱' ,  `isShow` INT(1) NOT NULL DEFAULT '1' COMMENT '是否顯示' ,  `Credate` DATETIME NOT NULL COMMENT '新增時間' ,  `Upddate` DATETIME NOT NULL COMMENT '修改時間' ,    PRIMARY KEY  (`UUID`)) ENGINE = InnoDB;

