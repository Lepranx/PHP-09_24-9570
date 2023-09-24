/* 创建数据库 */
CREATE SCHEMA `schoolks` DEFAULT CHARACTER SET utf8mb4 ;

/* 创建表 */
CREATE TABLE `schoolks`.`studentks` (
  `xh` VARCHAR(20) NULL COMMENT '学号',
  `xm` VARCHAR(20) NULL COMMENT '姓名',
  `cj` INT NULL COMMENT '成绩'
);