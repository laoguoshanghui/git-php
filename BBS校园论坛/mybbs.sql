-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2022-05-22 02:42:13
-- 服务器版本： 5.7.23
-- PHP 版本： 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `mybbs`
--

-- --------------------------------------------------------

--
-- 表的结构 `forums`
--

DROP TABLE IF EXISTS `forums`;
CREATE TABLE IF NOT EXISTS `forums` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `forum_name` varchar(50) NOT NULL,
  `forum_description` varchar(200) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `last_post_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `forums`
--

INSERT INTO `forums` (`id`, `forum_name`, `forum_description`, `subject`, `last_post_time`) VALUES
(4, '123', 'php', '123', ' 2022-05-22 00:13:45');

-- --------------------------------------------------------

--
-- 表的结构 `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `log_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `email`, `log_time`) VALUES
(5, 'admin', '123456', '123456@qq.com', ' 2022-05-22 00:28:40');

-- --------------------------------------------------------

--
-- 表的结构 `tiopic`
--

DROP TABLE IF EXISTS `tiopic`;
CREATE TABLE IF NOT EXISTS `tiopic` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `author` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `last_post_time` datetime NOT NULL,
  `reply_author` varchar(50) DEFAULT NULL,
  `reply` text,
  `reply_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `tiopic`
--

INSERT INTO `tiopic` (`id`, `author`, `title`, `content`, `last_post_time`, `reply_author`, `reply`, `reply_time`) VALUES
(3, 'admin', 'php', '            123456789', ' 2022-05-22 00:35:20', '12', '        121', ' 2022-05-22 00:57:09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
