-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2019 年 02 月 25 日 09:24
-- 伺服器版本: 5.5.39
-- PHP 版本： 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `lincandb`
--

-- --------------------------------------------------------

--
-- 資料表結構 `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `Name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Order` bigint(20) NOT NULL,
  `State` smallint(6) NOT NULL,
`AutoNo` bigint(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- 資料表的匯出資料 `city`
--

INSERT INTO `city` (`Name`, `Order`, `State`, `AutoNo`) VALUES
('台北市', 0, 0, 1),
('基隆市', 0, 0, 2),
('新北市', 0, 0, 3),
('宜蘭縣', 0, 0, 4),
('新竹市', 0, 0, 5),
('新竹縣', 0, 0, 6),
('桃園縣', 0, 0, 7),
('苗栗縣', 0, 0, 8),
('台中市', 0, 0, 9),
('彰化縣', 0, 0, 10),
('南投縣', 0, 0, 11),
('雲林縣', 0, 0, 12),
('嘉義市', 0, 0, 13),
('嘉義縣', 0, 0, 14),
('台南市', 0, 0, 15),
('高雄市', 0, 0, 16),
('南海諸島', 0, 0, 17),
('澎湖縣', 0, 0, 18),
('屏東縣', 0, 0, 19),
('台東縣', 0, 0, 20),
('花蓮縣', 0, 0, 21),
('金門縣', 0, 0, 22),
('連江縣', 0, 0, 23);

-- --------------------------------------------------------

--
-- 資料表結構 `town`
--

CREATE TABLE IF NOT EXISTS `town` (
  `CNo` bigint(20) NOT NULL,
  `Name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Post` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `State` smallint(6) NOT NULL,
`AutoNo` bigint(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=371 ;

--
-- 資料表的匯出資料 `town`
--

INSERT INTO `town` (`CNo`, `Name`, `Post`, `State`, `AutoNo`) VALUES
(1, '中正區', '100', 0, 1),
(1, '大同區', '103', 0, 2),
(1, '中山區', '104', 0, 3),
(1, '松山區', '105', 0, 4),
(1, '大安區', '106', 0, 5),
(1, '萬華區', '108', 0, 6),
(1, '信義區', '110', 0, 7),
(1, '士林區', '111', 0, 8),
(1, '北投區', '112', 0, 9),
(1, '內湖區', '114', 0, 10),
(1, '南港區', '115', 0, 11),
(1, '文山區', '116', 0, 12),
(2, '仁愛區', '200', 0, 13),
(2, '信義區', '201', 0, 14),
(2, '中正區', '202', 0, 15),
(2, '中山區', '203', 0, 16),
(2, '安樂區', '204', 0, 17),
(2, '暖暖區', '205', 0, 18),
(2, '七堵區', '206', 0, 19),
(3, '萬里區', '207', 0, 20),
(3, '金山區', '208', 0, 21),
(3, '板橋區', '220', 0, 22),
(3, '汐止區', '221', 0, 23),
(3, '深坑區', '222', 0, 24),
(3, '石碇區', '223', 0, 25),
(3, '瑞芳區', '224', 0, 26),
(3, '平溪區', '226', 0, 27),
(3, '雙溪區', '227', 0, 28),
(3, '貢寮區', '228', 0, 29),
(3, '新店區', '231', 0, 30),
(3, '坪林區', '232', 0, 31),
(3, '烏來區', '233', 0, 32),
(3, '永和區', '234', 0, 33),
(3, '中和區', '235', 0, 34),
(3, '土城區', '236', 0, 35),
(3, '三峽區', '237', 0, 36),
(3, '樹林區', '238', 0, 37),
(3, '鶯歌區', '239', 0, 38),
(3, '三重區', '241', 0, 39),
(3, '新莊區', '242', 0, 40),
(3, '泰山區', '243', 0, 41),
(3, '林口區', '244', 0, 42),
(3, '蘆洲區', '247', 0, 43),
(3, '五股區', '248', 0, 44),
(3, '八里區', '249', 0, 45),
(3, '淡水區', '251', 0, 46),
(3, '三芝區', '252', 0, 47),
(3, '石門區', '253', 0, 48),
(4, '宜蘭市', '260', 0, 49),
(4, '頭城鎮', '261', 0, 50),
(4, '礁溪鄉', '262', 0, 51),
(4, '壯圍鄉', '263', 0, 52),
(4, '員山鄉', '264', 0, 53),
(4, '羅東鎮', '265', 0, 54),
(4, '三星鄉', '266', 0, 55),
(4, '大同鄉', '267', 0, 56),
(4, '五結鄉', '268', 0, 57),
(4, '冬山鄉', '269', 0, 58),
(4, '蘇澳鎮', '270', 0, 59),
(4, '南澳鄉', '272', 0, 60),
(4, '釣魚台列嶼', '290', 0, 61),
(5, '新竹市', '300', 0, 62),
(6, '竹北市', '302', 0, 63),
(6, '湖口鄉', '303', 0, 64),
(6, '新豐鄉', '304', 0, 65),
(6, '新埔鎮', '305', 0, 66),
(6, '關西鎮', '306', 0, 67),
(6, '芎林鄉', '307', 0, 68),
(6, '寶山鄉', '308', 0, 69),
(6, '竹東鎮', '310', 0, 70),
(6, '五峰鄉', '311', 0, 71),
(6, '橫山鄉', '312', 0, 72),
(6, '尖石鄉', '313', 0, 73),
(6, '北埔鄉', '314', 0, 74),
(6, '峨眉鄉', '315', 0, 75),
(7, '中壢市', '320', 0, 76),
(7, '平鎮市', '324', 0, 77),
(7, '龍潭鄉', '325', 0, 78),
(7, '楊梅市', '326', 0, 79),
(7, '新屋鄉', '327', 0, 80),
(7, '觀音鄉', '328', 0, 81),
(7, '桃園市', '330', 0, 82),
(7, '龜山鄉', '333', 0, 83),
(7, '八德市', '334', 0, 84),
(7, '大溪鎮', '335', 0, 85),
(7, '復興鄉', '336', 0, 86),
(7, '大園鄉', '337', 0, 87),
(7, '蘆竹鄉', '338', 0, 88),
(8, '竹南鎮', '350', 0, 89),
(8, '頭份鎮', '351', 0, 90),
(8, '三灣鄉', '352', 0, 91),
(8, '南庄鄉', '353', 0, 92),
(8, '獅潭鄉', '354', 0, 93),
(8, '後龍鎮', '356', 0, 94),
(8, '通霄鎮', '357', 0, 95),
(8, '苑裡鎮', '358', 0, 96),
(8, '苗栗市', '360', 0, 97),
(8, '造橋鄉', '361', 0, 98),
(8, '頭屋鄉', '362', 0, 99),
(8, '公館鄉', '363', 0, 100),
(8, '大湖鄉', '364', 0, 101),
(8, '泰安鄉', '365', 0, 102),
(8, '銅鑼鄉', '366', 0, 103),
(8, '三義鄉', '367', 0, 104),
(8, '西湖鄉', '368', 0, 105),
(8, '卓蘭鎮', '369', 0, 106),
(9, '中區', '400', 0, 107),
(9, '東區', '401', 0, 108),
(9, '南區', '402', 0, 109),
(9, '西區', '403', 0, 110),
(9, '北區', '404', 0, 111),
(9, '北屯區', '406', 0, 112),
(9, '西屯區', '407', 0, 113),
(9, '南屯區', '408', 0, 114),
(9, '太平區', '411', 0, 115),
(9, '大里區', '412', 0, 116),
(9, '霧峰區', '413', 0, 117),
(9, '烏日區', '414', 0, 118),
(9, '豐原區', '420', 0, 119),
(9, '后里區', '421', 0, 120),
(9, '石岡區', '422', 0, 121),
(9, '東勢區', '423', 0, 122),
(9, '和平區', '424', 0, 123),
(9, '新社區', '426', 0, 124),
(9, '潭子區', '427', 0, 125),
(9, '大雅區', '428', 0, 126),
(9, '神岡區', '429', 0, 127),
(9, '大肚區', '432', 0, 128),
(9, '沙鹿區', '433', 0, 129),
(9, '龍井區', '434', 0, 130),
(9, '梧棲區', '435', 0, 131),
(9, '清水區', '436', 0, 132),
(9, '大甲區', '437', 0, 133),
(9, '外埔區', '438', 0, 134),
(9, '大安區', '439', 0, 135),
(10, '彰化市', '500', 0, 136),
(10, '芬園鄉', '502', 0, 137),
(10, '花壇鄉', '503', 0, 138),
(10, '秀水鄉', '504', 0, 139),
(10, '鹿港鎮', '505', 0, 140),
(10, '福興鄉', '506', 0, 141),
(10, '線西鄉', '507', 0, 142),
(10, '和美鎮', '508', 0, 143),
(10, '伸港鄉', '509', 0, 144),
(10, '員林鎮', '510', 0, 145),
(10, '社頭鄉', '511', 0, 146),
(10, '永靖鄉', '512', 0, 147),
(10, '埔心鄉', '513', 0, 148),
(10, '溪湖鎮', '514', 0, 149),
(10, '大村鄉', '515', 0, 150),
(10, '埔鹽鄉', '516', 0, 151),
(10, '田中鎮', '520', 0, 152),
(10, '北斗鎮', '521', 0, 153),
(10, '田尾鄉', '522', 0, 154),
(10, '埤頭鄉', '523', 0, 155),
(10, '溪州鄉', '524', 0, 156),
(10, '竹塘鄉', '525', 0, 157),
(10, '二林鎮', '526', 0, 158),
(10, '大城鄉', '527', 0, 159),
(10, '芳苑鄉', '528', 0, 160),
(10, '二水鄉', '530', 0, 161),
(11, '南投市', '540', 0, 162),
(11, '中寮鄉', '541', 0, 163),
(11, '草屯鎮', '542', 0, 164),
(11, '國姓鄉', '544', 0, 165),
(11, '埔里鎮', '545', 0, 166),
(11, '仁愛鄉', '546', 0, 167),
(11, '名間鄉', '551', 0, 168),
(11, '集集鎮', '552', 0, 169),
(11, '水里鄉', '553', 0, 170),
(11, '魚池鄉', '555', 0, 171),
(11, '信義鄉', '556', 0, 172),
(11, '竹山鎮', '557', 0, 173),
(11, '鹿谷鄉', '558', 0, 174),
(12, '斗南鎮', '630', 0, 175),
(12, '大埤鄉', '631', 0, 176),
(12, '虎尾鎮', '632', 0, 177),
(12, '土庫鎮', '633', 0, 178),
(12, '褒忠鄉', '634', 0, 179),
(12, '東勢鄉', '635', 0, 180),
(12, '臺西鄉', '636', 0, 181),
(12, '崙背鄉', '637', 0, 182),
(12, '麥寮鄉', '638', 0, 183),
(12, '斗六市', '640', 0, 184),
(12, '林內鄉', '643', 0, 185),
(12, '古坑鄉', '646', 0, 186),
(12, '莿桐鄉', '647', 0, 187),
(12, '西螺鎮', '648', 0, 188),
(12, '二崙鄉', '649', 0, 189),
(12, '北港鎮', '651', 0, 190),
(12, '水林鄉', '652', 0, 191),
(12, '口湖鄉', '653', 0, 192),
(12, '四湖鄉', '654', 0, 193),
(12, '元長鄉', '655', 0, 194),
(13, '嘉義市', '600', 0, 195),
(14, '番路鄉', '602', 0, 196),
(14, '梅山鄉', '603', 0, 197),
(14, '竹崎鄉', '604', 0, 198),
(14, '阿里山鄉', '605', 0, 199),
(14, '中埔鄉', '606', 0, 200),
(14, '大埔鄉', '607', 0, 201),
(14, '水上鄉', '608', 0, 202),
(14, '鹿草鄉', '611', 0, 203),
(14, '太保市', '612', 0, 204),
(14, '朴子市', '613', 0, 205),
(14, '東石鄉', '614', 0, 206),
(14, '六腳鄉', '615', 0, 207),
(14, '新港鄉', '616', 0, 208),
(14, '民雄鄉', '621', 0, 209),
(14, '大林鎮', '622', 0, 210),
(14, '溪口鄉', '623', 0, 211),
(14, '義竹鄉', '624', 0, 212),
(14, '布袋鎮', '625', 0, 213),
(15, '中西區', '700', 0, 214),
(15, '東區', '701', 0, 215),
(15, '南區', '702', 0, 216),
(15, '北區', '704', 0, 217),
(15, '安平區', '708', 0, 218),
(15, '安南區', '709', 0, 219),
(15, '永康區', '710', 0, 220),
(15, '歸仁區', '711', 0, 221),
(15, '新化區', '712', 0, 222),
(15, '左鎮區', '713', 0, 223),
(15, '玉井區', '714', 0, 224),
(15, '楠西區', '715', 0, 225),
(15, '南化區', '716', 0, 226),
(15, '仁德區', '717', 0, 227),
(15, '關廟區', '718', 0, 228),
(15, '龍崎區', '719', 0, 229),
(15, '官田區', '720', 0, 230),
(15, '麻豆區', '721', 0, 231),
(15, '佳里區', '722', 0, 232),
(15, '西港區', '723', 0, 233),
(15, '七股區', '724', 0, 234),
(15, '將軍區', '725', 0, 235),
(15, '學甲區', '726', 0, 236),
(15, '北門區', '727', 0, 237),
(15, '新營區', '730', 0, 238),
(15, '後壁區', '731', 0, 239),
(15, '白河區', '732', 0, 240),
(15, '東山區', '733', 0, 241),
(15, '六甲區', '734', 0, 242),
(15, '下營區', '735', 0, 243),
(15, '柳營區', '736', 0, 244),
(15, '鹽水區', '737', 0, 245),
(15, '善化區', '741', 0, 246),
(15, '大內區', '742', 0, 247),
(15, '山上區', '743', 0, 248),
(15, '新市區', '744', 0, 249),
(15, '安定區', '745', 0, 250),
(16, '新興區', '800', 0, 251),
(16, '前金區', '801', 0, 252),
(16, '苓雅區', '802', 0, 253),
(16, '鹽埕區', '803', 0, 254),
(16, '鼓山區', '804', 0, 255),
(16, '旗津區', '805', 0, 256),
(16, '前鎮區', '806', 0, 257),
(16, '三民區', '807', 0, 258),
(16, '楠梓區', '811', 0, 259),
(16, '小港區', '812', 0, 260),
(16, '左營區', '813', 0, 261),
(16, '仁武區', '814', 0, 262),
(16, '大社區', '815', 0, 263),
(16, '岡山區', '820', 0, 264),
(16, '路竹區', '821', 0, 265),
(16, '阿蓮區', '822', 0, 266),
(16, '田寮區', '823', 0, 267),
(16, '燕巢區', '824', 0, 268),
(16, '橋頭區', '825', 0, 269),
(16, '梓官區', '826', 0, 270),
(16, '彌陀區', '827', 0, 271),
(16, '永安區', '828', 0, 272),
(16, '湖內區', '829', 0, 273),
(16, '鳳山區', '830', 0, 274),
(16, '大寮區', '831', 0, 275),
(16, '林園區', '832', 0, 276),
(16, '鳥松區', '833', 0, 277),
(16, '大樹區', '840', 0, 278),
(16, '旗山區', '842', 0, 279),
(16, '美濃區', '843', 0, 280),
(16, '六龜區', '844', 0, 281),
(16, '內門區', '845', 0, 282),
(16, '杉林區', '846', 0, 283),
(16, '甲仙區', '847', 0, 284),
(16, '桃源區', '848', 0, 285),
(16, '那瑪夏區', '849', 0, 286),
(16, '茂林區', '851', 0, 287),
(16, '茄萣區', '852', 0, 288),
(17, '東沙', '817', 0, 289),
(17, '南沙', '819', 0, 290),
(18, '馬公市', '880', 0, 291),
(18, '西嶼鄉', '881', 0, 292),
(18, '望安鄉', '882', 0, 293),
(18, '七美鄉', '883', 0, 294),
(18, '白沙鄉', '884', 0, 295),
(18, '湖西鄉', '885', 0, 296),
(19, '屏東市', '900', 0, 297),
(19, '三地門鄉', '901', 0, 298),
(19, '霧臺鄉', '902', 0, 299),
(19, '瑪家鄉', '903', 0, 300),
(19, '九如鄉', '904', 0, 301),
(19, '里港鄉', '905', 0, 302),
(19, '高樹鄉', '906', 0, 303),
(19, '鹽埔鄉', '907', 0, 304),
(19, '長治鄉', '908', 0, 305),
(19, '麟洛鄉', '909', 0, 306),
(19, '竹田鄉', '911', 0, 307),
(19, '內埔鄉', '912', 0, 308),
(19, '萬丹鄉', '913', 0, 309),
(19, '潮州鎮', '920', 0, 310),
(19, '泰武鄉', '921', 0, 311),
(19, '來義鄉', '922', 0, 312),
(19, '萬巒鄉', '923', 0, 313),
(19, '崁頂鄉', '924', 0, 314),
(19, '新埤鄉', '925', 0, 315),
(19, '南州鄉', '926', 0, 316),
(19, '林邊鄉', '927', 0, 317),
(19, '東港鄉', '928', 0, 318),
(19, '琉球鄉', '929', 0, 319),
(19, '佳冬鄉', '931', 0, 320),
(19, '新園鄉', '932', 0, 321),
(19, '枋寮鄉', '940', 0, 322),
(19, '枋山鄉', '941', 0, 323),
(19, '春日鄉', '942', 0, 324),
(19, '獅子鄉', '943', 0, 325),
(19, '車城鄉', '944', 0, 326),
(19, '牡丹鄉', '945', 0, 327),
(19, '恆春鄉', '946', 0, 328),
(19, '滿州鄉', '947', 0, 329),
(20, '臺東市', '950', 0, 330),
(20, '綠島鄉', '951', 0, 331),
(20, '蘭嶼鄉', '952', 0, 332),
(20, '延平鄉', '953', 0, 333),
(20, '卑南鄉', '954', 0, 334),
(20, '鹿野鄉', '955', 0, 335),
(20, '關山鎮', '956', 0, 336),
(20, '海端鄉', '957', 0, 337),
(20, '池上鄉', '958', 0, 338),
(20, '東河鄉', '959', 0, 339),
(20, '成功鎮', '961', 0, 340),
(20, '長濱鄉', '962', 0, 341),
(20, '太麻里鄉', '963', 0, 342),
(20, '金峰鄉', '964', 0, 343),
(20, '大武鄉', '965', 0, 344),
(20, '達仁鄉', '966', 0, 345),
(21, '花蓮市', '970', 0, 346),
(21, '新城鄉', '971', 0, 347),
(21, '秀林鄉', '972', 0, 348),
(21, '吉安鄉', '973', 0, 349),
(21, '壽豐鄉', '974', 0, 350),
(21, '鳳林鎮', '975', 0, 351),
(21, '光復鄉', '976', 0, 352),
(21, '豐濱鄉', '977', 0, 353),
(21, '瑞穗鄉', '978', 0, 354),
(21, '萬榮鄉', '979', 0, 355),
(21, '玉里鎮', '981', 0, 356),
(21, '卓溪鄉', '982', 0, 357),
(21, '富里鄉', '983', 0, 358),
(22, '金沙鎮', '890', 0, 359),
(22, '金湖鎮', '891', 0, 360),
(22, '金寧鄉', '892', 0, 361),
(22, '金城鎮', '893', 0, 362),
(22, '烈嶼鄉', '894', 0, 363),
(22, '烏坵鄉', '896', 0, 364),
(23, '南竿鄉', '209', 0, 365),
(23, '北竿鄉', '210', 0, 366),
(23, '莒光鄉', '211', 0, 367),
(23, '東引鄉', '212', 0, 368);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `city`
--
ALTER TABLE `city`
 ADD PRIMARY KEY (`AutoNo`);

--
-- 資料表索引 `town`
--
ALTER TABLE `town`
 ADD PRIMARY KEY (`AutoNo`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `city`
--
ALTER TABLE `city`
MODIFY `AutoNo` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- 使用資料表 AUTO_INCREMENT `town`
--
ALTER TABLE `town`
MODIFY `AutoNo` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=371;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
