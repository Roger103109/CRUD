-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-06-30 10:02:19
-- 伺服器版本： 10.4.19-MariaDB
-- PHP 版本： 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `billboard`
--

-- --------------------------------------------------------

--
-- 資料表結構 `list`
--

CREATE TABLE `list` (
  `Id` int(11) NOT NULL COMMENT '編號',
  `Content` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '內容',
  `Date` date NOT NULL COMMENT '日期'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `list`
--

INSERT INTO `list` (`Id`, `Content`, `Date`) VALUES
(1, '中央流行疫情指揮中心宣布，國內今天新增3萬8846例COVID-19（2019冠狀病毒疾病）本土病例，確診個案增加中重症291例（中症186例、重症105例），其中118人死亡；境外移入個案新增96例。今天死亡數又回升百例以上，無兒童死亡病例，但新增8例MIS-C兒童，其中包含一名7個月大男嬰成國內最小個案。', '2022-06-29'),
(2, '羅一鈞回應，委員應該都很清楚，在國內跟其他不同國家相關的戴口罩跟防疫的規定，當然他是確診者，我們還是建議他，能夠適度跟其他人隔離開 ，如果「無罩」在旁邊拍照，照片看起來也是相當近距離的話，事實上，周遭一起拍照的人是會有風險的，盡量還是不要有這種行為比較好。', '2022-06-30'),
(3, '原先位於南海海面的熱帶性低氣壓已於今上午增強為今年第3號颱風「芙蓉」（Chaba，泰國提供，花名），預估將往廣東到海南附近前進，颱風主體結構雖不影響台灣，但外圍的水氣及大低壓帶延伸整個南海到巴士海峽，明（7月1日）起低壓帶北抬，台灣位於低壓帶內，未來一週大氣環境較不穩定。', '2022-06-30');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`Id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `list`
--
ALTER TABLE `list`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '編號', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
