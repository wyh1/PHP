-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019 年 05 月 20 日 08:02
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `php`
--

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(8) NOT NULL AUTO_INCREMENT COMMENT '自增用户ID',
  `username` varchar(27) NOT NULL COMMENT '用户登录名',
  `password` varchar(27) NOT NULL COMMENT '用户登陆密码',
  `name` varchar(27) DEFAULT NULL COMMENT '用户名',
  `gender` varchar(2) DEFAULT NULL COMMENT '性别',
  `age` int(5) NOT NULL COMMENT '年龄',
  `hobby` varchar(27) DEFAULT NULL COMMENT '爱好',
  `tel` int(27) DEFAULT NULL COMMENT '电话',
  `email` varchar(27) DEFAULT NULL COMMENT '邮箱',
  `adress` varchar(42) DEFAULT NULL COMMENT '地址',
  `photo` varchar(50) DEFAULT NULL COMMENT '头像路径',
  `registertime` datetime DEFAULT NULL COMMENT '注册时间',
  `lastlogintime` datetime DEFAULT NULL COMMENT '最后登录时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `id_2` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `gender`, `age`, `hobby`, `tel`, `email`, `adress`, `photo`, `registertime`, `lastlogintime`) VALUES
(1, 'zhangsan', '123456', '张三', '男', 22, '学习', 2147483647, '2342@qq.com', '河南 郑州', 'u=3069868546,1123119367&fm=26&gp=0.jpg', '2019-04-26 00:00:00', '2019-05-06 06:24:36'),
(2, 'lisi', '12345', '李四', '男', 19, '读书', 163514641, '112315@163.com', '河南 周口', 'u=3474975580,2823181349&fm=26&gp=0.jpg', '2019-04-25 13:00:00', '0000-00-00 00:00:00'),
(3, 'wangwu', '12345678', '王舞', '女', 18, '读书', 2147483647, 'abc121@163.com', '中国 地球', 'u=20257734,3634410442&fm=26&gp=0.jpg', '2019-04-27 00:00:00', '0000-00-00 00:00:00'),
(4, 'xiaomei', '123456789', '小美', '女', 19, '睡觉', 2147483647, 'asd@qq.com', '北京', 'u=2458342876,4255091842&fm=26&gp=0.jpg', NULL, '2019-04-27 00:00:00'),
(6, 'xiaoli', '123456789', '小丽', '女', 24, '看书', 2147483647, 'xiaolid@qq.com', '上海', 'u=3474975580,2823181349&fm=26&gp=0.jpg', NULL, '0000-00-00 00:00:00'),
(7, 'xiaolis', '123456', '小丽', '女', 15, '看书', 2147483647, 'xiaolid@qq.com', '陕西', 'u=3474975580,2823181349&fm=26&gp=0.jpg', '2019-04-27 01:32:17', '2019-04-27 11:30:28'),
(8, 'xiaoliss', '123456', '小丽', '女', 32, '看书', 2147483647, 'xiaolid@qq.com', '北京', 'u=20257734,3634410442&fm=26&gp=0.jpg', '2019-04-27 08:53:49', '2019-04-27 11:29:51'),
(9, 'xiaolisss', '123456', '小丽', '女', 64, '睡觉', 2147483647, 'xiaolid@qq.com', '陕西', 'u=2458342876,4255091842&fm=26&gp=0.jpg', '2019-04-27 08:57:05', '0000-00-00 00:00:00'),
(10, 'xiaolisss1', '123456', '小丽', '女', 45, '看书', 2147483647, 'xiaolid@qq.com', '陕西', 'u=3069868546,1123119367&fm=26&gp=0.jpg', '2019-04-27 08:58:20', '0000-00-00 00:00:00'),
(11, 'xiaomei4', '123456', '小美', '女', 45, '睡觉', 2147483647, 'asd@qq.com', '北京', 'u=2458342876,4255091842&fm=26&gp=0.jpg', '2019-04-27 09:00:39', '2019-04-27 11:24:11'),
(17, 'zyy', 'zy121400', '张三土', '男', 19, '看书', 2147483647, 'asd@qq.com', '北京', '3c2973d90334dab2fb07549ab4aefc91.jpg', '2019-04-28 02:27:08', '2019-04-28 02:27:37'),
(18, 'xiaomeisssss', '123456', '小丽', '女', 60, '打篮球', 2147483647, 'xiaolid@qq.com', '北京', 'd776ed80029e994afc24e87797ff1e7d.jpg', '2019-05-01 08:25:42', NULL),
(16, 'xiaomei7', '123456', '小美', '女', 19, '看书', 2147483647, 'asd@qq.com', '陕西', '017fbd9edab5fd5507f404bb38a10002.jpg', '2019-04-27 09:46:10', NULL),
(19, 'xiaomeissssss', '123456789', '小美', '女', 19, '跳rap打篮球', 2147483647, 'asd@qq.com', '北京', 'd3d0071e90a2f561ef96a93511d760c3.jpg', '2019-05-03 06:21:51', NULL),
(20, 'susu', '321654', '苏苏', '女', 15, '唱', 2147483647, 'asd@qq.com', '北京', 'b6cf8d31d5feb6f17286dd0bd2658360.jpg', '2019-05-03 10:27:17', NULL),
(21, 'susu1', 'asd123', '苏苏', '女', 14, '跳rap', 2147483647, 'asd@qq.com', '上海', 'a4b7db2c4ea85de75cb101c135a4b259.jpg', '2019-05-03 10:28:03', NULL),
(22, 'susu2', '321654asd', '苏苏', '女', 13, '跳rap', 2147483647, 'asd@qq.com', '陕西', 'ee46c58ecaf6b9a174948f8f2b161f62.png', '2019-05-03 10:28:44', NULL),
(23, 'qit8123', '321654987', '主流', '男', 13, '唱跳rap打篮球', 2147483647, 'asd@qq.com', '陕西', '7c4cbacf244bc982c5e1d3a98482de97.gif', '2019-05-03 10:29:14', NULL),
(24, 'yanshiyuan', '123456', '演示员', '男', 48, '唱跳rap打篮球', 2147483647, 'asd@qq.com', '上海', '13a758b1ce6111034cac9cb8b2f3463a.jpg', '2019-05-06 06:11:50', '2019-05-06 06:13:44'),
(25, 'ceshiyuan', '1234567', '测试员', '男', 33, '唱跳rap打篮球', 2147483647, 'asd@qq.com', '北京', '63193bc58290e088f2214026a52e72fd.png', '2019-05-08 02:52:18', '2019-05-08 02:56:39');

-- --------------------------------------------------------

--
-- 表的结构 `userdemo`
--

CREATE TABLE IF NOT EXISTS `userdemo` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `sex` varchar(4) DEFAULT NULL,
  `age` int(5) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `adress` varchar(60) DEFAULT NULL,
  `tel` int(20) DEFAULT NULL,
  `habby` varchar(30) DEFAULT NULL,
  `photo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `userdemo`
--

INSERT INTO `userdemo` (`id`, `username`, `password`, `sex`, `age`, `email`, `adress`, `tel`, `habby`, `photo`) VALUES
(1, 'root', '13456', '男', 12, '4353@qq.com', '12387', 123453, '吃饭', 'u=2791693996,4077237910&fm=26&');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
