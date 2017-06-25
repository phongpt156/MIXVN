-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 25, 2017 lúc 06:10 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mixvn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `sub_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `sub_id`, `created_at`, `updated_at`) VALUES
(1, 'top', 'gHponAwWRP', 0, NULL, NULL),
(2, 'bottom', '6QLT322fsn', 0, NULL, NULL),
(3, 'áo khoác', 'IpI0PZ0jX2', 0, NULL, NULL),
(4, 'đầm', 'iOXfX1rRim', 0, NULL, NULL),
(5, 'giày', '6Q1nA1mJUV', 0, NULL, NULL),
(6, 'phụ kiện', 'iitmXYurBs', 0, NULL, NULL),
(7, 'túi xách & ví', 'kjVMu9wgxr', 0, NULL, NULL),
(8, 'bo', 'efT0M5jbva', 0, NULL, NULL),
(9, 'ví & túi', 'DlcSdDIINw', 0, NULL, NULL),
(10, 'áo phông', 'VisGJUNpvg', 1, NULL, NULL),
(11, 'áo sơ mi', 'RH1KPnfBtq', 1, NULL, NULL),
(12, 'áo tanktop', 'd0FyKEButm', 1, NULL, NULL),
(13, 'áo croptop', 'XnZgPduuyj', 1, NULL, NULL),
(14, 'áo kiểu', 'FtSQXcimhg', 1, NULL, NULL),
(15, 'áo hở vai', 'bEXNxVMWkm', 1, NULL, NULL),
(16, 'áo sweater', 'Zw5c9tUO1O', 1, NULL, NULL),
(17, 'áo len', 'kCDw3MnfEF', 1, NULL, NULL),
(18, 'áo polo', 'JM90t0IGws', 1, NULL, NULL),
(19, 'áo 3 lỗ', '4G9hn1oqdl', 1, NULL, NULL),
(20, 'quần dài', 'YfKFqbiVWc', 2, NULL, NULL),
(21, 'quần sort', 'ZJW8Seqxx7', 2, NULL, NULL),
(22, 'legging', 'puVKRq4Fgz', 2, NULL, NULL),
(23, 'quần nỉ', 'FxZRmrDvcg', 2, NULL, NULL),
(24, 'chân váy', 'KcoLdbfldW', 2, NULL, NULL),
(25, 'quần âu', 'yjdhd7EeVm', 2, NULL, NULL),
(26, 'quần jean', 'p58o5L8WeJ', 2, NULL, NULL),
(27, 'áo denim', 'H7FddflSqB', 3, NULL, NULL),
(28, 'áo hoodies', 'ipUs4S0jZd', 3, NULL, NULL),
(29, 'áo dạ', '1t5BNZpzhW', 3, NULL, NULL),
(30, 'áo cardigan', 'UeyVkxA8CZ', 3, NULL, NULL),
(31, 'áo phao', 'GSiTrTMdP8', 3, NULL, NULL),
(32, 'áo khoác khác', 'ph6S0gRXYL', 3, NULL, NULL),
(33, 'áo vest', 'X3EKu5ruOv', 3, NULL, NULL),
(34, 'áo da', '70wcs96Au9', 3, NULL, NULL),
(35, 'áo măngto/ áo dạ', 'RbcPIUWMb3', 3, NULL, NULL),
(36, 'ghile', 'V1wlLpSoOy', 3, NULL, NULL),
(37, 'đầm xuông', 'etKXRsr9vV', 4, NULL, NULL),
(38, 'đầm xòe', 'ZBoitdRc2O', 4, NULL, NULL),
(39, 'đầm cut', 'g1Ceh8gQyZ', 4, NULL, NULL),
(40, 'đầm midi', 'GMP5btRsOw', 4, NULL, NULL),
(41, 'đầm maxi', 'r210P2CGOS', 4, NULL, NULL),
(42, 'comple', 'TOvhGC5tcf', 8, NULL, NULL),
(43, 'suit', 'YEPw4uRmAs', 8, NULL, NULL),
(44, 'giày thể thao', 'vospwxU2Cb', 5, NULL, NULL),
(45, 'boot', 'uHGJHOtzfz', 5, NULL, NULL),
(46, 'giày sneaker', 'uXX1i7h0yE', 5, NULL, NULL),
(47, 'giày slip-ons', 'RoB4MBGmxG', 5, NULL, NULL),
(48, 'giày cao gót', '4CNW4J3cjV', 5, NULL, NULL),
(49, 'dép xăng đan', 'sgviH9eQfk', 5, NULL, NULL),
(50, 'giày tây', '9oRyRt42s9', 5, NULL, NULL),
(51, 'giày lười', 'B7tTWhVD3w', 5, NULL, NULL),
(52, 'thắt lưng', 'ceaFmZJs7p', 6, NULL, NULL),
(53, 'kính mắt', 'X2AGIUpZcw', 6, NULL, NULL),
(54, 'mũ', 'Mm1r1pgcbW', 6, NULL, NULL),
(55, 'khăn', 'tv9FcsxVq6', 6, NULL, NULL),
(56, 'tất', 'MU8k3vpeLK', 6, NULL, NULL),
(57, 'đồng hồ', 'gO76jDlQsG', 6, NULL, NULL),
(58, 'thắt lưng', 'Z0X5bAsbM8', 6, NULL, NULL),
(59, 'clutches', 'HKwdy2k5HB', 7, NULL, NULL),
(60, 'túi đeo vai', 'i5YNrjWSuF', 7, NULL, NULL),
(61, 'ví tiền', 'bZBZHltXPE', 7, NULL, NULL),
(62, 'balo', '4AtmNqk8lo', 7, NULL, NULL),
(63, 'túi đeo chéo', 'QpO5s2hBTS', 9, NULL, NULL),
(64, 'cặp xách tay', 'VAM2hk2MhX', 9, NULL, NULL),
(65, 'vali', 'wvldNAYVvy', 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cate_gender_xref`
--

CREATE TABLE `cate_gender_xref` (
  `cate_id` int(11) NOT NULL,
  `gender_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cate_gender_xref`
--

INSERT INTO `cate_gender_xref` (`cate_id`, `gender_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 2),
(8, 1),
(9, 1),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(17, 2),
(18, 1),
(19, 1),
(20, 1),
(20, 2),
(21, 1),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 1),
(26, 1),
(27, 1),
(27, 2),
(28, 1),
(28, 2),
(29, 2),
(30, 1),
(30, 2),
(31, 2),
(32, 2),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 1),
(43, 1),
(44, 1),
(44, 2),
(45, 1),
(45, 2),
(46, 1),
(46, 2),
(47, 2),
(48, 2),
(49, 2),
(50, 1),
(51, 1),
(52, 2),
(53, 1),
(53, 2),
(54, 2),
(55, 2),
(56, 2),
(57, 1),
(57, 2),
(58, 1),
(59, 2),
(60, 2),
(61, 2),
(62, 1),
(62, 2),
(63, 1),
(64, 1),
(65, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `collection`
--

CREATE TABLE `collection` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `collection`
--

INSERT INTO `collection` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Top 10 cách mặc bomber', '2011-06-15 23:52:26', NULL),
(2, 'Mùa đông không lạnh', '2013-09-27 09:53:39', NULL),
(3, 'Mùa đông không lạnh', '2008-09-25 08:30:47', NULL),
(4, 'Mùa đông không lạnh', '2003-11-17 23:06:09', NULL),
(5, 'Mùa đông không lạnh', '2009-05-13 15:10:34', NULL),
(6, 'Mùa đông không lạnh', '1996-01-14 04:03:00', NULL),
(7, 'Mùa đông không lạnh', '1974-01-14 09:05:23', NULL),
(8, 'Mùa đông không lạnh', '2010-04-25 08:42:06', NULL),
(9, 'Mùa đông không lạnh', '2013-08-08 03:21:35', NULL),
(10, 'Mùa đông không lạnh', '1999-03-28 03:24:06', NULL),
(11, 'Mùa đông không lạnh', '2009-08-13 23:48:20', NULL),
(12, 'Mùa đông không lạnh', '2016-05-25 17:39:07', NULL),
(13, 'Mùa đông không lạnh', '2007-12-23 15:06:13', NULL),
(14, 'Mùa đông không lạnh', '2015-08-11 02:17:15', NULL),
(15, 'Mùa đông không lạnh', '1973-10-19 12:15:17', NULL),
(16, 'Mùa đông không lạnh', '1999-04-26 03:11:09', NULL),
(17, 'Mùa đông không lạnh', '2015-03-16 01:12:56', NULL),
(18, 'Mùa đông không lạnh', '1982-07-11 16:24:27', NULL),
(19, 'Mùa đông không lạnh', '1990-09-13 09:01:15', NULL),
(20, 'Mùa đông không lạnh', '2007-01-24 10:36:52', NULL),
(21, 'Mùa đông không lạnh', '2005-12-20 07:23:59', NULL),
(22, 'Mùa đông không lạnh', '2015-03-05 20:11:35', NULL),
(23, 'Mùa đông không lạnh', '1974-10-04 01:01:01', NULL),
(24, 'Mùa đông không lạnh', '1999-09-23 00:47:55', NULL),
(25, 'Mùa đông không lạnh', '2009-12-30 22:19:58', NULL),
(26, 'Mùa đông không lạnh', '2012-10-23 12:58:46', NULL),
(27, 'Mùa đông không lạnh', '1973-11-12 19:04:01', NULL),
(28, 'Mùa đông không lạnh', '1998-11-17 08:40:42', NULL),
(29, 'Mùa đông không lạnh', '1982-10-05 14:53:06', NULL),
(30, 'Mùa đông không lạnh', '2014-07-02 16:57:57', NULL),
(31, 'Mùa đông không lạnh', '1974-05-07 04:46:15', NULL),
(32, 'Mùa đông không lạnh', '1994-12-24 20:14:22', NULL),
(33, 'Mùa đông không lạnh', '2005-05-06 17:12:50', NULL),
(34, 'Mùa đông không lạnh', '1990-03-27 09:34:26', NULL),
(35, 'Mùa đông không lạnh', '2015-10-23 02:10:31', NULL),
(36, 'Mùa đông không lạnh', '1996-12-08 10:18:06', NULL),
(37, 'Mùa đông không lạnh', '2006-02-19 05:26:55', NULL),
(38, 'Mùa đông không lạnh', '1991-12-04 18:25:30', NULL),
(39, 'Mùa đông không lạnh', '1977-01-15 07:58:11', NULL),
(40, 'Mùa đông không lạnh', '1986-04-19 22:14:30', NULL),
(41, 'Mùa đông không lạnh', '1983-09-12 01:07:59', NULL),
(42, 'Mùa đông không lạnh', '1990-04-11 19:31:13', NULL),
(43, 'Mùa đông không lạnh', '2005-12-07 18:46:13', NULL),
(44, 'Mùa đông không lạnh', '2015-12-09 10:06:46', NULL),
(45, 'Mùa đông không lạnh', '1984-11-26 08:16:00', NULL),
(46, 'Mùa đông không lạnh', '1996-02-13 18:00:02', NULL),
(47, 'Mùa đông không lạnh', '2007-12-12 16:18:53', NULL),
(48, 'Mùa đông không lạnh', '2006-12-06 21:15:31', NULL),
(49, 'Mùa đông không lạnh', '1994-09-16 19:57:49', NULL),
(50, 'Mùa đông không lạnh', '1999-12-07 12:53:41', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `collection_image`
--

CREATE TABLE `collection_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `alt` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `collection_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `collection_image`
--

INSERT INTO `collection_image` (`id`, `alt`, `name`, `description`, `collection_id`, `created_at`, `updated_at`) VALUES
(1, 'sunt', 'http://lorempixel.com/240/80/?67416', 'Hatter. \'Does the reason to France-- Then followed him as usual. \'Come, let\'s try Geography. London is it?\' said the Gryphon, the chimney, and Alice waited in the King, looking at everything I\'ve.', 27, NULL, NULL),
(2, 'dolore', 'http://lorempixel.com/240/80/?36197', 'She drew herself \'That\'s the right words,\' said the song, \'I\'d rather proud of eating and began:-- \'You are you?\' And the King and called out of making her little wider. \'Come, it\'s got up and said,.', 45, NULL, NULL),
(3, 'et', 'http://lorempixel.com/240/80/?17915', 'They all I don\'t know what you say you\'re mad?\' \'To begin lessons: you\'d like to see what a RED rose-tree, and looked down to nine o\'clock it had been all the Lizard, who was surprised to my gloves.', 3, NULL, NULL),
(4, 'ducimus', 'http://lorempixel.com/240/80/?47857', 'VERY turn-up nose, you to the way of Hearts, carrying the sense, and was peeping anxiously looking for this moment he went on. \'We had grown up,\' she couldn\'t see the darkness as well look for.', 46, NULL, NULL),
(5, 'perspiciatis', 'http://lorempixel.com/240/80/?53625', 'TO BE TRUE--\" that\'s not so kind,\' Alice joined the other: the song. \'What are THESE?\' said the country is, what?\' said the Gryphon said, \'So you to law: I goes in her hair has he?\' said Alice.', 4, NULL, NULL),
(6, 'sapiente', 'http://lorempixel.com/240/80/?69897', 'Mouse, who had happened. \'How cheerfully he wore his business!\' \'Ah, my dear! I to ask any of THAT in knocking,\' the youth, \'and then,\' thought they drew a very absurd, but he dipped it to be?\' it.', 22, NULL, NULL),
(7, 'et', 'http://lorempixel.com/240/80/?89488', 'The adventures from one foot to write one--but I\'m a good deal on better.\' \'I\'d rather finish his note-book, cackled out again, but I shall have to grow at one of all the conversation with her in a.', 49, NULL, NULL),
(8, 'quae', 'http://lorempixel.com/240/80/?26236', 'Alice replied in she spoke--fancy CURTSEYING as you to be the court. \'What do next, when she was so often, you know.\' It was lying under the Rabbit was of boots every golden key in the King; \'and.', 43, NULL, NULL),
(9, 'perferendis', 'http://lorempixel.com/240/80/?73502', 'I needn\'t be full of axes,\' said the Rabbit came skimming out, but she listened, or Longitude either, if she walked on to be jury,\" Said he can have been so often, of having a regular rule: you.', 43, NULL, NULL),
(10, 'voluptatem', 'http://lorempixel.com/240/80/?26987', 'Trims his note-book hastily. \'Consider your Majesty,\' said the time and a melancholy voice. \'Would you wouldn\'t squeeze so.\' said \'The twinkling of the rest waited for tastes! Sing her head! Off--\'.', 4, NULL, NULL),
(11, 'nemo', 'http://lorempixel.com/240/80/?75286', 'CHAPTER X. The Knave was sneezing by the neck of that Alice had a voice of things--everything that into the branches, and Alice felt very humbly; \'I heard something worth while in the back. However,.', 3, NULL, NULL),
(12, 'pariatur', 'http://lorempixel.com/240/80/?22454', 'Lizard, Bill, I hate cats always grinned; in chorus, \'Yes, please your evidence,\' said Alice, in this same as the watch to by the other, trying to lie down yet, please your Majesty?\' he wasn\'t one?\'.', 38, NULL, NULL),
(13, 'ut', 'http://lorempixel.com/240/80/?94469', 'Just at the Queen turned a somersault in hand, and asking, \'But what a teacup instead of half an oyster!\' \'I haven\'t been in a general conclusion, that was not said to find her neck of.', 19, NULL, NULL),
(14, 'vero', 'http://lorempixel.com/240/80/?68024', 'King. \'It isn\'t,\' said nothing. \'Perhaps not,\' said the March Hare said \"What for?\"\' \'She can\'t show it may be trampled under a poor Alice, who had a very carefully, remarking, \'I can\'t think! And.', 28, NULL, NULL),
(15, 'et', 'http://lorempixel.com/240/80/?37891', 'BEE,\" but none of the wig, (look at all; however, they repeated impatiently: \'it would be raving mad--at least idea what they\'re all comfortable, and then he was the Caterpillar. \'Well, there could.', 36, NULL, NULL),
(16, 'exercitationem', 'http://lorempixel.com/240/80/?88490', 'There could bear: she quite agree to say,\' said Alice. \'You know the first witness,\' said the bread-and-butter getting up now,\' thought to be no use in reply. \'Idiot!\' said Alice, thinking while all.', 2, NULL, NULL),
(17, 'quasi', 'http://lorempixel.com/240/80/?56055', 'Stigand, the window, and found herself down a very earnestly, \'Now, Dinah, and ran till she put my youth,\' said the whole she had no reason they\'re not,\' the dish of the stick, running in a.', 46, NULL, NULL),
(18, 'tenetur', 'http://lorempixel.com/240/80/?54628', 'The Queen\'s ears--\' the jurors had fluttered down on hearing this; \'for fear of the March Hare, who was hardly room to explain it yet,\' said Alice got in the moment to set off at once.\' And she.', 6, NULL, NULL),
(19, 'perspiciatis', 'http://lorempixel.com/240/80/?19018', 'Mouse\'s tail; \'but that\'s the Rabbit angrily. \'Here! you join the Mouse, turning into his fancy, that: then dipped suddenly a trembling voice, \'--and just been a piteous tone. And she\'s such a.', 39, NULL, NULL),
(20, 'eligendi', 'http://lorempixel.com/240/80/?90203', 'I can be no time! Off with Edgar Atheling to pieces of expressing yourself.\' The Hatter\'s remark seemed to your name, child?\' \'My name of what a great interest in a day about her to look through the.', 33, NULL, NULL),
(21, 'consequuntur', 'http://lorempixel.com/240/80/?52035', 'King, looking down and the same little thing grunted in a White Rabbit noticed before, \'Sure then I\'m a helpless sort of onions.\' Seven flung down on tiptoe, put his friends had fallen into a little.', 32, NULL, NULL),
(22, 'consequatur', 'http://lorempixel.com/240/80/?84174', 'Duchess sang this, she set to the roof off.\' After these three were three gardeners at the other bit. * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * \'Come, there\'s no.', 8, NULL, NULL),
(23, 'aut', 'http://lorempixel.com/240/80/?99471', 'Bill! I never even waiting for Alice, and feet high. CHAPTER XII. Alice\'s first verse,\' the world! Oh, my dear, what with an opportunity of the Gryphon: and uncomfortable. The executioner\'s argument.', 30, NULL, NULL),
(24, 'cupiditate', 'http://lorempixel.com/240/80/?43839', 'I\'m doubtful about as if I say--that\'s the whole head unless there is such a moment she could not make out of anything to speak again. The Knave of conversation. While the patriotic archbishop.', 6, NULL, NULL),
(25, 'accusamus', 'http://lorempixel.com/240/80/?24627', 'I could have grown most of the Caterpillar decidedly, and pulled out of trees, and much as it seems,\' Alice looked puzzled.) \'He won\'t you know.\' \'Not yet, before her face, and said the soldiers had.', 2, NULL, NULL),
(26, 'vel', 'http://lorempixel.com/240/80/?18039', 'Duchess. \'I suppose they got to have ordered\'; and was coming. \'There\'s a little thing a minute or three gardeners, oblong and there was very little thing!\' It was some surprise that they got up.', 24, NULL, NULL),
(27, 'fuga', 'http://lorempixel.com/240/80/?92756', 'Alice! when they used to rise like to your age, it got to wink with a teacup instead of the shriek and stupid), whether the court, she was indeed: she found she began fancying the little pattering.', 1, NULL, NULL),
(28, 'ad', 'http://lorempixel.com/240/80/?41482', 'Pig!\' She said to invent something!\' \'I--I\'m a few minutes to get in?\' \'There isn\'t directed to?\' said the Eaglet bent down that they were,\' said Alice. \'Of course,\' the Mock Turtle had just in the.', 25, NULL, NULL),
(29, 'voluptas', 'http://lorempixel.com/240/80/?63339', 'But she still and the same age as hard against the cook was a bit,\' she said the cat.) \'I can explain it,\' said the Dormouse again, and had found it would be beheaded, and the table, but they.', 40, NULL, NULL),
(30, 'sed', 'http://lorempixel.com/240/80/?18150', 'Puss,\' she would NOT a candle is such a large letters. It did you out, and, after watching it must be beheaded!\' said Alice. The King say anything near the Pigeon. \'I know what am I will prosecute.', 39, NULL, NULL),
(31, 'nihil', 'http://lorempixel.com/240/80/?56776', 'Queen: so kind,\' Alice went stamping about, trying to Alice: \'besides, that\'s all the Queen, pointing to Alice thought poor Alice, and, with her to stop and he shall do you fair warning,\' shouted.', 31, NULL, NULL),
(32, 'excepturi', 'http://lorempixel.com/240/80/?32176', 'Queens, and began ordering off that!\' \'I won\'t!\' said Alice: \'she\'s so that you\'re sure it would become of the same size: to go back to tell what I don\'t know why do you thinking while she set to.', 18, NULL, NULL),
(33, 'deserunt', 'http://lorempixel.com/240/80/?58039', 'Even the name like ears and as if I believe.\' \'Boots and waited in a sleepy and get it unfolded the garden: the Rabbit noticed that Alice indignantly. \'Ah! then they\'re a very long as she set the.', 35, NULL, NULL),
(34, 'dicta', 'http://lorempixel.com/240/80/?65282', 'Classics master, though. He came in at any rate I\'ll try the Mouse, do that Dormouse! Turn that she was a serpent, that\'s the things that she had disappeared. \'Never mind!\' said the world! Oh, I.', 17, NULL, NULL),
(35, 'aut', 'http://lorempixel.com/240/80/?89893', 'Lobster Quadrille, that would be said. The Hatter shook his pocket, and began, in the world she tried to herself, for this moment, I wonder how to school every now for to talk about two creatures.', 4, NULL, NULL),
(36, 'ab', 'http://lorempixel.com/240/80/?11974', 'I\'m somebody else\'s hand,\' said the same size for this time there was rather late, and that it altogether; but it except the young lady to her reach the Queen had caught it, and was sneezing all.', 41, NULL, NULL),
(37, 'qui', 'http://lorempixel.com/240/80/?36364', 'I eat her unfortunate guests to eat some of the week before. \'Oh, I can go after all, and round and away,\' but thought this time?\' she did you know--\' (pointing with his note-book, cackled out his.', 37, NULL, NULL),
(38, 'et', 'http://lorempixel.com/240/80/?53366', 'She had fallen into the centre of course,\' the Knave did you were nearly getting on?\' said Alice; and whispered in bed!\' On various pretexts they are!\' said the open her spectacles, and tremulous.', 15, NULL, NULL),
(39, 'non', 'http://lorempixel.com/240/80/?64161', 'A MILE HIGH TO BE TRUE--\" that\'s it,\' said the Queen furiously, throwing an end! \'I know what I\'m not join the list of the King. The Mouse looked along in fact she said the hookah into that lovely.', 9, NULL, NULL),
(40, 'voluptas', 'http://lorempixel.com/240/80/?65836', 'Duchess: \'and most curious to pinch it purring, not wish people began a minute or else seemed quite relieved to speak, and frowning like a sort of little chin. However, \'jury-men\' would all round..', 46, NULL, NULL),
(41, 'est', 'http://lorempixel.com/240/80/?69638', 'I--\' \'Oh, don\'t think how many little sister was all came running a trumpet in a book of lullaby to the Queen, \'and he hasn\'t got behind them didn\'t sign it,\' said poor little fishes in a.', 6, NULL, NULL),
(42, 'incidunt', 'http://lorempixel.com/240/80/?48365', 'Mock Turtle, suddenly spread out among the rest of the guests, mostly Kings and must go on one old thing!\' said \'What did not open place, and condemn you might bite,\' Alice said; but thought poor.', 22, NULL, NULL),
(43, 'consequatur', 'http://lorempixel.com/240/80/?53496', 'Gryphon. \'They were obliged to see it was,\' he spoke, \'we went on in the Queen said--\' \'Get to get in a minute there was close behind her. \'Yes!\' shouted the King, \'that it\'s getting!\' She said.', 5, NULL, NULL),
(44, 'saepe', 'http://lorempixel.com/240/80/?87180', 'But, when the Cat. \'I\'d nearly forgotten that it was talking. \'How are around, His voice she had unrolled the Pigeon the way--\' \'THAT generally gave one in the while, till I\'ve had you know much,\'.', 29, NULL, NULL),
(45, 'aperiam', 'http://lorempixel.com/240/80/?24902', 'And the Cat went on: \'But what they had just as he with an old conger-eel, that was trickling down yet, please your head through that it up the March Hare,) \'--it was only yesterday things being.', 38, NULL, NULL),
(46, 'odio', 'http://lorempixel.com/240/80/?55028', 'Hatter. Alice began looking thoughtfully at last, more than that, in a poor man,\' the King and just as she was a little chin. However, \'jury-men\' would cost them were Elsie, Lacie, and the Gryphon;.', 18, NULL, NULL),
(47, 'amet', 'http://lorempixel.com/240/80/?45618', 'Alice. \'Come, let\'s hear you! You see, Miss, we\'re doing here?\' \'That I got used up.\' \'What\'s your head-- Do you getting quite dry would be a soothing tone: \'tell her lap as she sat down his.', 7, NULL, NULL),
(48, 'at', 'http://lorempixel.com/240/80/?48251', 'King said the second time that I\'m I, and--oh dear, how the Queen, and a queer things at once.\' However, she said the hand, it a serpent, that\'s why. Pig!\' She had followed him as well go nearer is.', 47, NULL, NULL),
(49, 'eum', 'http://lorempixel.com/240/80/?94290', 'Bill,\' she was Bill, I know your finger for YOU, and the Footman went on the same height to leave the Dormouse, not open them free, Exactly as she went to grow to ME.\' \'You!\' said Alice. \'And be no.', 19, NULL, NULL),
(50, 'qui', 'http://lorempixel.com/240/80/?96284', 'A bright idea what \"it\" means well as that! No, it\'ll sit here,\' the King. \'Then it was talking together: she spoke. \'I hope it\'ll sit up on one foot as he went on. \'And what was nine feet high..', 41, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `collection_product_xref`
--

CREATE TABLE `collection_product_xref` (
  `collection_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `collection_product_xref`
--

INSERT INTO `collection_product_xref` (`collection_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feature`
--

CREATE TABLE `feature` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feature`
--

INSERT INTO `feature` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Màu sắc', NULL, NULL),
(2, 'Chất liệu', NULL, NULL),
(3, 'Họa tiết', NULL, NULL),
(4, 'Size', '2017-05-22 17:00:00', '2017-06-22 17:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feature_default_value`
--

CREATE TABLE `feature_default_value` (
  `id` int(10) UNSIGNED NOT NULL,
  `vn_value` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `other_value` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `feature_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feature_default_value`
--

INSERT INTO `feature_default_value` (`id`, `vn_value`, `other_value`, `feature_id`, `created_at`, `updated_at`) VALUES
(1, 'Đen', '#000000', 1, NULL, NULL),
(2, 'Trắng', '#ffffff', 1, NULL, NULL),
(3, 'Đỏ', '#e22c2a', 1, NULL, NULL),
(4, 'Cam', '#f2ab46', 1, NULL, NULL),
(5, 'Vàng', '#e9e455', 1, NULL, NULL),
(6, 'Xanh lục', '#4ab87f', 1, NULL, NULL),
(7, 'Xanh lam', '#52b3d9', 1, NULL, NULL),
(8, 'Ghi', '#7a7b7c', 1, NULL, NULL),
(9, 'Tím', '#854b95', 1, NULL, NULL),
(10, 'Nâu', '#482b21', 1, NULL, NULL),
(11, 'Hồng', '#da94b9', 1, NULL, NULL),
(12, 'Coton', '', 2, NULL, NULL),
(13, 'Da bóng', '', 2, NULL, NULL),
(14, 'Da lộn', '', 2, NULL, NULL),
(15, 'Kaki', '', 2, NULL, NULL),
(16, 'Len', '', 2, NULL, NULL),
(17, 'Lụa', '', 2, NULL, NULL),
(18, 'Vải lanh', '', 2, NULL, NULL),
(19, 'Sợi tổng hợp', '', 2, NULL, NULL),
(20, 'Nỉ', '', 2, NULL, NULL),
(21, 'caro', '', 3, NULL, NULL),
(22, 'kẻ sọc', '', 3, NULL, NULL),
(23, 'chấm bi', '', 3, NULL, NULL),
(24, 'hình lớn', '', 3, NULL, NULL),
(25, 'trơn', '', 3, NULL, NULL),
(26, 'khác', '', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gender`
--

CREATE TABLE `gender` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gender`
--

INSERT INTO `gender` (`id`, `name`) VALUES
(1, 'nam'),
(2, 'nữ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_user_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_02_20_112331_create_supplier_table', 1),
(4, '2017_02_20_112339_create_category_table', 1),
(5, '2017_02_20_112355_create_collection_table', 1),
(6, '2017_02_20_112418_create_collection_image_table', 1),
(7, '2017_02_20_112433_create_product_image_table', 1),
(8, '2017_02_20_112457_create_feature_table', 1),
(9, '2017_02_20_112510_create_product_feature_value_table', 1),
(10, '2017_02_20_112518_create_product_table', 1),
(11, '2017_02_20_114358_create_product_liker_table', 1),
(12, '2017_02_20_114424_create_collection_product_xref_table', 1),
(13, '2017_02_25_032501_create_gender_table', 1),
(14, '2017_02_25_032551_create_cate_gender_xref_table', 1),
(15, '2017_02_25_153619_create_feature_defalut_value_table', 1),
(17, '2017_06_10_134843_create_product_group_table', 2),
(18, '2017_06_10_135030_create_product_group_image_table', 2),
(19, '2017_06_10_140702_create_product_group_product_xref_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(12,3) NOT NULL,
  `discount` decimal(12,3) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `like` int(11) NOT NULL DEFAULT '0',
  `buy` int(11) NOT NULL DEFAULT '0',
  `follow` int(11) NOT NULL DEFAULT '0',
  `cate_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `discount`, `description`, `like`, `buy`, `follow`, `cate_id`, `supplier_id`, `created_at`, `updated_at`) VALUES
(3, 'áo len', '100.000', '6462.000', 'ut', 1275, 0, 0, 1, 1, '1976-04-19 14:58:46', NULL),
(4, 'áo len', '780.000', '4971.000', 'voluptas', 1277, 0, 0, 1, 2, '2010-10-14 14:08:15', NULL),
(5, 'áo khoác xanh', '250.000', '4465.000', 'inventore', 1008, 0, 0, 1, 3, '1978-12-14 23:19:42', NULL),
(6, 'áo khoác xanh', '1000.000', '7732.000', 'sed', 1009, 0, 0, 1, 4, '2007-01-01 13:52:26', NULL),
(7, 'cardigan xám', '350.000', '1976.000', 'sit', 945, 0, 0, 1, 1, '1991-08-17 18:46:20', NULL),
(8, 'cardigan xám', '450.000', '3015.000', 'minima', 945, 0, 0, 1, 2, '1970-05-06 02:34:51', NULL),
(9, 'babydoll trắng', '210.000', '7263.000', 'ab', 900, 0, 0, 1, 3, '1985-07-11 04:00:51', NULL),
(10, 'babydoll trắng', '600.000', '707.000', 'neque', 1001, 0, 0, 1, 4, '2015-01-14 07:41:08', NULL),
(11, 'áo len', '100.000', '1201.000', 'odio', 1275, 0, 0, 1, 1, '1973-11-11 08:32:23', NULL),
(12, 'áo len', '780.000', '8749.000', 'doloremque', 1275, 0, 0, 1, 2, '2004-05-02 17:21:54', NULL),
(13, 'áo khoác xanh', '250.000', '7999.000', 'quam', 1008, 0, 0, 1, 3, '2002-09-13 17:36:34', NULL),
(14, 'áo khoác xanh', '1000.000', '1247.000', 'consequatur', 1008, 0, 0, 1, 4, '1999-05-16 20:28:58', NULL),
(15, 'cardigan xám', '350.000', '7409.000', 'facilis', 945, 0, 0, 1, 1, '2000-03-02 06:27:29', NULL),
(16, 'cardigan xám', '450.000', '7589.000', 'voluptas', 945, 0, 0, 1, 2, '1986-02-25 03:47:00', NULL),
(17, 'babydoll trắng', '210.000', '3430.000', 'ad', 901, 0, 0, 1, 3, '1993-12-28 06:14:27', NULL),
(18, 'babydoll trắng', '600.000', '6112.000', 'est', 901, 0, 0, 1, 4, '2005-06-06 10:35:07', NULL),
(19, 'áo len', '100.000', '2963.000', 'sit', 1277, 0, 0, 1, 1, '2015-01-04 12:43:37', NULL),
(20, 'áo len', '780.000', '1788.000', 'eos', 1277, 0, 0, 1, 2, '2011-03-19 00:36:12', NULL),
(21, 'áo khoác xanh', '250.000', '7637.000', 'culpa', 1008, 0, 0, 1, 3, '1971-07-25 22:03:24', NULL),
(22, 'áo khoác xanh', '1000.000', '4533.000', 'sapiente', 1008, 0, 0, 1, 4, '2001-04-11 01:39:41', NULL),
(23, 'cardigan xám', '350.000', '7137.000', 'sit', 946, 0, 0, 1, 1, '2009-06-13 07:17:28', NULL),
(24, 'cardigan xám', '450.000', '7608.000', 'fugit', 945, 0, 0, 1, 2, '1974-10-20 05:35:35', NULL),
(25, 'babydoll trắng', '210.000', '8344.000', 'sunt', 900, 0, 0, 1, 3, '1991-03-21 20:15:10', NULL),
(26, 'babydoll trắng', '600.000', '7237.000', 'aliquam', 901, 0, 0, 1, 4, '2002-02-01 04:04:45', NULL),
(27, 'áo len', '100.000', '7963.000', 'omnis', 1275, 0, 0, 1, 1, '1995-03-09 17:27:58', NULL),
(28, 'áo len', '780.000', '6011.000', 'tempore', 1275, 0, 0, 1, 2, '1979-11-15 15:44:28', NULL),
(29, 'áo khoác xanh', '250.000', '962.000', 'officiis', 1008, 0, 0, 1, 3, '1971-07-26 23:12:47', NULL),
(30, 'áo khoác xanh', '1000.000', '6919.000', 'ut', 1008, 0, 0, 1, 4, '1973-07-07 14:21:08', NULL),
(31, 'cardigan xám', '350.000', '3176.000', 'beatae', 945, 0, 0, 1, 1, '1978-10-15 07:01:38', NULL),
(32, 'cardigan xám', '450.000', '5740.000', 'rerum', 945, 0, 0, 1, 2, '1978-05-09 15:01:14', NULL),
(33, 'babydoll trắng', '210.000', '1303.000', 'necessitatibus', 900, 0, 0, 1, 3, '1971-08-18 01:29:52', NULL),
(34, 'babydoll trắng', '600.000', '8046.000', 'molestiae', 901, 0, 0, 1, 4, '1973-09-10 13:02:12', NULL),
(35, 'áo len', '100.000', '7040.000', 'et', 1275, 0, 0, 1, 1, '1983-08-25 08:28:18', NULL),
(36, 'áo len', '780.000', '1220.000', 'corrupti', 1275, 0, 0, 1, 2, '1973-05-29 07:22:07', NULL),
(37, 'áo khoác xanh', '250.000', '8928.000', 'accusamus', 1008, 0, 0, 1, 3, '1975-03-02 22:21:21', NULL),
(38, 'áo khoác xanh', '1000.000', '2391.000', 'ut', 1008, 0, 0, 1, 4, '1989-06-11 16:16:21', NULL),
(39, 'cardigan xám', '350.000', '5726.000', 'numquam', 945, 0, 0, 1, 1, '1984-04-27 20:03:07', NULL),
(40, 'cardigan xám', '450.000', '2420.000', 'quae', 945, 0, 0, 1, 2, '1970-02-08 12:35:25', NULL),
(41, 'babydoll trắng', '210.000', '7882.000', 'at', 901, 0, 0, 1, 3, '1985-09-04 13:18:03', NULL),
(42, 'babydoll trắng', '600.000', '677.000', 'minus', 901, 0, 0, 1, 4, '2009-01-01 13:38:49', NULL),
(43, 'áo len', '100.000', '5501.000', 'iusto', 1275, 0, 0, 1, 1, '1984-06-20 01:19:32', NULL),
(44, 'áo len', '780.000', '6900.000', 'inventore', 1275, 0, 0, 1, 2, '1974-09-23 11:43:03', NULL),
(45, 'áo khoác xanh', '250.000', '4401.000', 'et', 1008, 0, 0, 1, 3, '1981-11-15 02:59:18', NULL),
(46, 'áo khoác xanh', '1000.000', '2109.000', 'in', 1008, 0, 0, 1, 4, '1978-05-29 17:44:46', NULL),
(47, 'cardigan xám', '350.000', '2328.000', 'facere', 945, 0, 0, 1, 1, '2000-07-26 15:13:57', NULL),
(48, 'cardigan xám', '450.000', '1719.000', 'ut', 945, 0, 0, 1, 2, '1972-07-05 19:01:44', NULL),
(1, 'babydoll trắng', '210.000', '2519.000', 'quia', 901, 0, 0, 1, 3, '1999-02-26 19:21:05', NULL),
(2, 'babydoll trắng', '600.000', '2182.000', 'qui', 900, 0, 0, 1, 4, '1982-07-04 12:41:15', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_feature_value`
--

CREATE TABLE `product_feature_value` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `feature_id` int(11) NOT NULL,
  `vn_value` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `other_value` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_feature_value`
--

INSERT INTO `product_feature_value` (`id`, `product_id`, `feature_id`, `vn_value`, `other_value`, `created_at`, `updated_at`) VALUES
(1, 10, 1, 'Đen', '', NULL, NULL),
(2, 10, 1, 'Ghi', '', NULL, NULL),
(3, 10, 1, 'Trắng', '', NULL, NULL),
(4, 10, 2, 'Da bóng', '', NULL, NULL),
(5, 10, 4, 'S', '', NULL, NULL),
(6, 10, 4, 'M', '', NULL, NULL),
(7, 10, 4, 'L', '', NULL, NULL),
(8, 10, 4, 'XL', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_group`
--

CREATE TABLE `product_group` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_group`
--

INSERT INTO `product_group` (`id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL),
(2, NULL, NULL),
(3, NULL, NULL),
(4, NULL, NULL),
(5, NULL, NULL),
(6, NULL, NULL),
(7, NULL, NULL),
(8, NULL, NULL),
(9, NULL, NULL),
(10, NULL, NULL),
(11, NULL, NULL),
(12, NULL, NULL),
(13, NULL, NULL),
(14, NULL, NULL),
(15, NULL, NULL),
(16, NULL, NULL),
(17, NULL, NULL),
(18, NULL, NULL),
(19, NULL, NULL),
(20, NULL, NULL),
(21, NULL, NULL),
(22, NULL, NULL),
(23, NULL, NULL),
(24, NULL, NULL),
(25, NULL, NULL),
(26, NULL, NULL),
(27, NULL, NULL),
(28, NULL, NULL),
(29, NULL, NULL),
(30, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_group_image`
--

CREATE TABLE `product_group_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `alt` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `product_group_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_group_image`
--

INSERT INTO `product_group_image` (`id`, `alt`, `name`, `description`, `product_group_id`, `created_at`, `updated_at`) VALUES
(1, 'dolor', 'https://s25.postimg.org/h10oyh8jz/13934712_286958348337750_4408410489384742748_n.jpg', '', 1, NULL, NULL),
(2, 'dolor', 'https://s25.postimg.org/ekyvkmqhb/13716159_275031406197111_7035146252420728267_n.jpg', '', 2, NULL, NULL),
(3, 'nihil', 'https://s25.postimg.org/t6pw8vn9r/14102172_307878916245693_6618904277816406228_n.jpg', '', 3, NULL, NULL),
(4, 'voluptatum', 'https://s25.postimg.org/febhd8wi7/14322677_307878919579026_955540443279259041_n.jpg', '', 4, NULL, NULL),
(5, 'est', 'https://s25.postimg.org/nl3h4tmkv/14502774_318794515154133_932404362356097937_n.jpg', '', 5, NULL, NULL),
(6, 'sit', 'https://s25.postimg.org/h8obuzjin/14560248_1132925673458935_9098525999831628532_o.jpg', '', 6, NULL, NULL),
(7, 'id', 'https://s25.postimg.org/dqcbylimn/14568088_318792995154285_8952049342807404707_n.jpg', '', 7, NULL, NULL),
(8, 'veritatis', 'https://s25.postimg.org/u2mdobwy7/14632835_324030197963898_714233772078094380_n.jpg', '', 8, NULL, NULL),
(9, 'quo', 'https://s25.postimg.org/hci5b8ozz/14650049_321245861575665_6322952677813590894_n.jpg', '', 9, NULL, NULL),
(10, 'rerum', 'https://s25.postimg.org/h10oyh8jz/13934712_286958348337750_4408410489384742748_n.jpg', '', 10, NULL, NULL),
(11, 'porro', 'https://s25.postimg.org/n22z9akjz/14680573_321245414909043_4309655749737517510_n.jpg', '', 11, NULL, NULL),
(12, 'tempora', 'https://s25.postimg.org/7umzoxspb/14680603_324030891297162_1803545856455354556_n.jpg', '', 12, NULL, NULL),
(13, 'qui', 'https://s25.postimg.org/5rckh9swf/14718597_324030887963829_3688880695657557909_n.jpg', '', 13, NULL, NULL),
(14, 'nisi', 'https://s25.postimg.org/nl3h4tmkv/14502774_318794515154133_932404362356097937_n.jpg', '', 14, NULL, NULL),
(15, 'dolores', 'https://s25.postimg.org/kyx5fda4v/16864326_1362813090460868_2680383665932087544_n.jpg', '', 15, NULL, NULL),
(16, 'facere', 'https://s25.postimg.org/l6ksbvl3j/16998910_1367446359997541_8943195744858744789_n.jpg', '', 16, NULL, NULL),
(17, 'fugiat', 'https://s25.postimg.org/792m6kn0v/16939692_1367447593330751_4659085534766732136_n.jpg', '', 17, NULL, NULL),
(18, 'quia', 'https://s25.postimg.org/k2w2m6b2n/16904754_1278630035555164_8177954186277015911_o.jpg', '', 18, NULL, NULL),
(19, 'eos', 'https://s25.postimg.org/792m6kn0v/16939692_1367447593330751_4659085534766732136_n.jpg', '', 19, NULL, NULL),
(20, 'fuga', 'https://s25.postimg.org/x9lilp6rz/17038884_1282878081797026_1107411368201609258_o.jpg', '', 20, NULL, NULL),
(21, 'nulla', 'https://s25.postimg.org/5arcuu55b/17097789_1282878288463672_8181170594729949446_o.jpg', '', 21, NULL, NULL),
(22, 'fugiat', 'https://s25.postimg.org/h10oyh8jz/13934712_286958348337750_4408410489384742748_n.jpg', '', 22, NULL, NULL),
(23, 'occaecati', 'https://s25.postimg.org/ui6u8txn3/16832176_1362811533794357_1796074166008209795_n.jpg', '', 23, NULL, NULL),
(24, 'voluptatem', 'https://s25.postimg.org/kyx5fda4v/16864326_1362813090460868_2680383665932087544_n.jpg', '', 24, NULL, NULL),
(25, 'dolores', 'https://s25.postimg.org/6gzy7ditr/16865080_1362813767127467_1536784017175420835_n.jpg', '', 25, NULL, NULL),
(26, 'nam', 'https://s25.postimg.org/792m6kn0v/16939692_1367447593330751_4659085534766732136_n.jpg', '', 26, NULL, NULL),
(27, 'id', 'https://s25.postimg.org/8dwoby9hr/16998767_1367448709997306_468277077348772326_n.jpg', '', 27, NULL, NULL),
(28, 'et', 'https://s25.postimg.org/l6ksbvl3j/16998910_1367446359997541_8943195744858744789_n.jpg', '', 28, NULL, NULL),
(29, 'dolor', 'https://s25.postimg.org/6rc24gmtr/17103412_1372799686128875_4990942242257132647_n.jpg', '', 29, NULL, NULL),
(30, 'in', 'https://s25.postimg.org/87nkmlpqn/17103414_1372799346128909_7381553202152535642_n.jpg', '', 30, NULL, NULL),
(31, 'dignissimos', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', '', 31, NULL, NULL),
(32, 'voluptas', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', '', 32, NULL, NULL),
(33, 'et', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', '', 33, NULL, NULL),
(34, 'et', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', '', 34, NULL, NULL),
(35, 'voluptatum', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', '', 35, NULL, NULL),
(36, 'quis', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', '', 36, NULL, NULL),
(37, 'qui', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', '', 37, NULL, NULL),
(38, 'quae', 'https://s25.postimg.org/x9lilp6rz/17038884_1282878081797026_1107411368201609258_o.jpg', '', 38, NULL, NULL),
(39, 'excepturi', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', '', 39, NULL, NULL),
(40, 'voluptatem', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', '', 40, NULL, NULL),
(41, 'exercitationem', 'https://s25.postimg.org/5arcuu55b/17097789_1282878288463672_8181170594729949446_o.jpg', '', 41, NULL, NULL),
(42, 'vitae', 'https://s25.postimg.org/n22z9akjz/14680573_321245414909043_4309655749737517510_n.jpg', '', 42, NULL, NULL),
(43, 'nihil', 'https://s25.postimg.org/kyx5fda4v/16864326_1362813090460868_2680383665932087544_n.jpg', '', 43, NULL, NULL),
(44, 'id', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', '', 44, NULL, NULL),
(45, 'repellendus', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', '', 45, NULL, NULL),
(46, 'omnis', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', '', 46, NULL, NULL),
(47, 'voluptatem', 'https://s25.postimg.org/t6pw8vn9r/14102172_307878916245693_6618904277816406228_n.jpg', '', 47, NULL, NULL),
(48, 'nisi', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', '', 48, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_group_product_xref`
--

CREATE TABLE `product_group_product_xref` (
  `product_group_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `num_search` int(11) NOT NULL DEFAULT '0',
  `num_like` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_group_product_xref`
--

INSERT INTO `product_group_product_xref` (`product_group_id`, `product_id`, `num_search`, `num_like`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, NULL, NULL),
(2, 7, 0, 0, NULL, NULL),
(2, 8, 0, 0, NULL, NULL),
(3, 9, 1, 0, NULL, NULL),
(3, 10, 0, 0, NULL, NULL),
(3, 11, 0, 0, NULL, NULL),
(3, 12, 0, 0, NULL, NULL),
(4, 13, 1, 0, NULL, NULL),
(4, 14, 0, 0, NULL, NULL),
(4, 15, 0, 0, NULL, NULL),
(4, 16, 0, 0, NULL, NULL),
(5, 17, 1, 0, NULL, NULL),
(5, 18, 0, 0, NULL, NULL),
(5, 19, 0, 0, NULL, NULL),
(5, 20, 0, 0, NULL, NULL),
(6, 21, 1, 0, NULL, NULL),
(6, 22, 3, 0, NULL, NULL),
(6, 23, 0, 0, NULL, NULL),
(6, 24, 2, 0, NULL, NULL),
(7, 2, 0, 0, NULL, NULL),
(7, 26, 0, 0, NULL, NULL),
(7, 27, 1, 0, NULL, NULL),
(7, 28, 1, 0, NULL, NULL),
(8, 29, 0, 0, NULL, NULL),
(8, 30, 0, 0, NULL, NULL),
(8, 31, 0, 0, NULL, NULL),
(8, 32, 1, 0, NULL, NULL),
(9, 33, 0, 0, NULL, NULL),
(10, 37, 0, 0, NULL, NULL),
(11, 41, 1, 0, NULL, NULL),
(12, 42, 1, 0, NULL, NULL),
(13, 43, 1, 0, NULL, NULL),
(14, 44, 0, 0, NULL, NULL),
(15, 45, 0, 0, NULL, NULL),
(16, 46, 0, 0, NULL, NULL),
(17, 47, 0, 0, NULL, NULL),
(18, 48, 0, 0, NULL, NULL),
(19, 40, 1, 0, NULL, NULL),
(20, 39, 0, 0, NULL, NULL),
(21, 38, 0, 0, NULL, NULL),
(22, 36, 1, 0, NULL, NULL),
(23, 35, 0, 0, NULL, NULL),
(24, 34, 0, 0, NULL, NULL),
(26, 2, 0, 0, NULL, NULL),
(27, 3, 0, 0, NULL, NULL),
(28, 4, 0, 0, NULL, NULL),
(29, 5, 1, 0, NULL, NULL),
(30, 6, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_image`
--

CREATE TABLE `product_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `alt` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_image`
--

INSERT INTO `product_image` (`id`, `alt`, `name`, `description`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'dolor', 'https://s25.postimg.org/h10oyh8jz/13934712_286958348337750_4408410489384742748_n.jpg', NULL, 1, NULL, NULL),
(2, 'dolor', 'https://s25.postimg.org/ekyvkmqhb/13716159_275031406197111_7035146252420728267_n.jpg', NULL, 2, NULL, NULL),
(3, 'nihil', 'https://s25.postimg.org/t6pw8vn9r/14102172_307878916245693_6618904277816406228_n.jpg', NULL, 3, NULL, NULL),
(4, 'voluptatum', 'https://s25.postimg.org/febhd8wi7/14322677_307878919579026_955540443279259041_n.jpg', NULL, 4, NULL, NULL),
(5, 'est', 'https://s25.postimg.org/nl3h4tmkv/14502774_318794515154133_932404362356097937_n.jpg', NULL, 5, NULL, NULL),
(6, 'sit', 'https://s25.postimg.org/h8obuzjin/14560248_1132925673458935_9098525999831628532_o.jpg', NULL, 6, NULL, NULL),
(7, 'id', 'https://s25.postimg.org/dqcbylimn/14568088_318792995154285_8952049342807404707_n.jpg', NULL, 7, NULL, NULL),
(8, 'veritatis', 'https://s25.postimg.org/u2mdobwy7/14632835_324030197963898_714233772078094380_n.jpg', NULL, 8, NULL, NULL),
(9, 'quo', 'https://s25.postimg.org/hci5b8ozz/14650049_321245861575665_6322952677813590894_n.jpg', NULL, 9, NULL, NULL),
(10, 'rerum', 'https://s25.postimg.org/h10oyh8jz/13934712_286958348337750_4408410489384742748_n.jpg', NULL, 10, NULL, NULL),
(11, 'porro', 'https://s25.postimg.org/n22z9akjz/14680573_321245414909043_4309655749737517510_n.jpg', NULL, 11, NULL, NULL),
(12, 'tempora', 'https://s25.postimg.org/7umzoxspb/14680603_324030891297162_1803545856455354556_n.jpg', NULL, 12, NULL, NULL),
(13, 'qui', 'https://s25.postimg.org/5rckh9swf/14718597_324030887963829_3688880695657557909_n.jpg', NULL, 13, NULL, NULL),
(14, 'nisi', 'https://s25.postimg.org/nl3h4tmkv/14502774_318794515154133_932404362356097937_n.jpg', NULL, 14, NULL, NULL),
(15, 'dolores', 'https://s25.postimg.org/kyx5fda4v/16864326_1362813090460868_2680383665932087544_n.jpg', NULL, 15, NULL, NULL),
(16, 'facere', 'https://s25.postimg.org/l6ksbvl3j/16998910_1367446359997541_8943195744858744789_n.jpg', NULL, 16, NULL, NULL),
(17, 'fugiat', 'https://s25.postimg.org/792m6kn0v/16939692_1367447593330751_4659085534766732136_n.jpg', NULL, 17, NULL, NULL),
(18, 'quia', 'https://s25.postimg.org/k2w2m6b2n/16904754_1278630035555164_8177954186277015911_o.jpg', NULL, 18, NULL, NULL),
(19, 'eos', 'https://s25.postimg.org/792m6kn0v/16939692_1367447593330751_4659085534766732136_n.jpg', NULL, 19, NULL, NULL),
(20, 'fuga', 'https://s25.postimg.org/x9lilp6rz/17038884_1282878081797026_1107411368201609258_o.jpg', NULL, 20, NULL, NULL),
(21, 'nulla', 'https://s25.postimg.org/5arcuu55b/17097789_1282878288463672_8181170594729949446_o.jpg', NULL, 21, NULL, NULL),
(22, 'fugiat', 'https://s25.postimg.org/h10oyh8jz/13934712_286958348337750_4408410489384742748_n.jpg', NULL, 22, NULL, NULL),
(23, 'occaecati', 'https://s25.postimg.org/ui6u8txn3/16832176_1362811533794357_1796074166008209795_n.jpg', NULL, 23, NULL, NULL),
(24, 'voluptatem', 'https://s25.postimg.org/kyx5fda4v/16864326_1362813090460868_2680383665932087544_n.jpg', NULL, 24, NULL, NULL),
(25, 'dolores', 'https://s25.postimg.org/6gzy7ditr/16865080_1362813767127467_1536784017175420835_n.jpg', NULL, 25, NULL, NULL),
(26, 'nam', 'https://s25.postimg.org/792m6kn0v/16939692_1367447593330751_4659085534766732136_n.jpg', NULL, 26, NULL, NULL),
(27, 'id', 'https://s25.postimg.org/8dwoby9hr/16998767_1367448709997306_468277077348772326_n.jpg', NULL, 27, NULL, NULL),
(28, 'et', 'https://s25.postimg.org/l6ksbvl3j/16998910_1367446359997541_8943195744858744789_n.jpg', NULL, 28, NULL, NULL),
(29, 'dolor', 'https://s25.postimg.org/6rc24gmtr/17103412_1372799686128875_4990942242257132647_n.jpg', NULL, 29, NULL, NULL),
(30, 'in', 'https://s25.postimg.org/87nkmlpqn/17103414_1372799346128909_7381553202152535642_n.jpg', NULL, 30, NULL, NULL),
(31, 'dignissimos', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', NULL, 31, NULL, NULL),
(32, 'voluptas', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', NULL, 32, NULL, NULL),
(33, 'et', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', NULL, 33, NULL, NULL),
(34, 'et', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', NULL, 34, NULL, NULL),
(35, 'voluptatum', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', NULL, 35, NULL, NULL),
(36, 'quis', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', NULL, 36, NULL, NULL),
(37, 'qui', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', NULL, 37, NULL, NULL),
(38, 'quae', 'https://s25.postimg.org/x9lilp6rz/17038884_1282878081797026_1107411368201609258_o.jpg', NULL, 38, NULL, NULL),
(39, 'excepturi', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', NULL, 39, NULL, NULL),
(40, 'voluptatem', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', NULL, 40, NULL, NULL),
(41, 'exercitationem', 'https://s25.postimg.org/5arcuu55b/17097789_1282878288463672_8181170594729949446_o.jpg', NULL, 41, NULL, NULL),
(42, 'vitae', 'https://s25.postimg.org/n22z9akjz/14680573_321245414909043_4309655749737517510_n.jpg', NULL, 42, NULL, NULL),
(43, 'nihil', 'https://s25.postimg.org/kyx5fda4v/16864326_1362813090460868_2680383665932087544_n.jpg', NULL, 43, NULL, NULL),
(44, 'id', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', NULL, 44, NULL, NULL),
(45, 'repellendus', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', NULL, 45, NULL, NULL),
(46, 'omnis', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', NULL, 46, NULL, NULL),
(47, 'voluptatem', 'https://s25.postimg.org/t6pw8vn9r/14102172_307878916245693_6618904277816406228_n.jpg', NULL, 47, NULL, NULL),
(48, 'nisi', 'https://s2.postimg.org/cw4sz0vd5/anh1.jpg', NULL, 48, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_liker`
--

CREATE TABLE `product_liker` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_liker`
--

INSERT INTO `product_liker` (`user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(2, 1, NULL, NULL),
(2, 2, NULL, NULL),
(3, 10, NULL, NULL),
(3, 19, NULL, NULL),
(3, 20, NULL, NULL),
(2, 26, NULL, NULL),
(2, 19, NULL, NULL),
(2, 20, NULL, NULL),
(2, 4, NULL, NULL),
(2, 23, NULL, NULL),
(2, 42, NULL, NULL),
(2, 6, NULL, NULL),
(2, 18, NULL, NULL),
(2, 41, NULL, NULL),
(2, 34, NULL, NULL),
(2, 17, NULL, NULL),
(2, 10, NULL, NULL),
(6, 1, NULL, NULL),
(6, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supplier`
--

CREATE TABLE `supplier` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `open_time` time DEFAULT NULL,
  `close_time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `address`, `phone_number`, `open_time`, `close_time`, `created_at`, `updated_at`) VALUES
(1, 'Nut Closet', '84293 Marisa Keys\nAustynborough, SC 38077-9386', NULL, NULL, NULL, NULL, NULL),
(2, 'Cloud Cuckoo', '2841 Deion Roads\nLake Scottyton, RI 47504-9040', NULL, NULL, NULL, NULL, NULL),
(3, 'Tổ cú vintage', '12996 Borer Union\nSalvatorehaven, RI 50288-8141', NULL, NULL, NULL, NULL, NULL),
(4, 'Magenta', '380 Phố Huế - Hai Bà Trưng - Hà Nội', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook_id` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `avatar_original` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `facebook_id`, `facebook_link`, `phone_number`, `name`, `email`, `gender`, `avatar`, `avatar_original`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, '', '1', NULL, NULL, '', '', '', '$2y$10$9cv4R6NTHkCjNIKD505FM.43uJ2KaT6x5nJvdiFL59cX/UwIIGPZ2', 'VLZmLP9aa7SnMCdtL8ELbjN05rkukNNiM1Fe0Kk4BrgSKtkdy6zVmwiK8bpk', NULL, NULL),
(2, NULL, '', '01265785096', NULL, NULL, '', '', '', '$2y$10$M6V/SbYn1Jfemml0STSuxObJ7NxEoqSmXteYPATNP3OnMEXtyEvCq', 'WCXWrhp2Fl6EImCHwbfoI8vfUBYf287Nm6htYKMLVLBLJjlec0mruXisjjiD', NULL, NULL),
(3, NULL, '', '01627843619', NULL, NULL, '', '', '', '$2y$10$6ewAtU0B/TLhBuC3qZSJd.7uRj4cKPiv0F6u9.OlNmU3MoNx1JBKy', NULL, NULL, NULL),
(6, '1819097038331369', 'https://www.facebook.com/app_scoped_user_id/1819097038331369/', '', 'Thanh Phong', NULL, 'male', 'https://graph.facebook.com/v2.9/1819097038331369/picture?type=normal', 'https://graph.facebook.com/v2.9/1819097038331369/picture?width=1920', '', 'Z1wlEzNX9CLIL4tKZRCDWRgBvlK14Jun9s5duqlxwdl2JJNgAeB6vdjhCl0a', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cate_gender_xref`
--
ALTER TABLE `cate_gender_xref`
  ADD PRIMARY KEY (`cate_id`,`gender_id`);

--
-- Chỉ mục cho bảng `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `collection_image`
--
ALTER TABLE `collection_image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `collection_product_xref`
--
ALTER TABLE `collection_product_xref`
  ADD PRIMARY KEY (`collection_id`,`product_id`);

--
-- Chỉ mục cho bảng `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feature_default_value`
--
ALTER TABLE `feature_default_value`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_feature_value`
--
ALTER TABLE `product_feature_value`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_group`
--
ALTER TABLE `product_group`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_group_image`
--
ALTER TABLE `product_group_image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_group_product_xref`
--
ALTER TABLE `product_group_product_xref`
  ADD PRIMARY KEY (`product_group_id`,`product_id`);

--
-- Chỉ mục cho bảng `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_liker`
--
ALTER TABLE `product_liker`
  ADD PRIMARY KEY (`user_id`,`product_id`);

--
-- Chỉ mục cho bảng `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_phone_number_unique` (`phone_number`),
  ADD UNIQUE KEY `user_facebook_id_unique` (`facebook_id`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT cho bảng `collection`
--
ALTER TABLE `collection`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT cho bảng `collection_image`
--
ALTER TABLE `collection_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT cho bảng `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `feature_default_value`
--
ALTER TABLE `feature_default_value`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT cho bảng `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT cho bảng `product_feature_value`
--
ALTER TABLE `product_feature_value`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `product_group`
--
ALTER TABLE `product_group`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT cho bảng `product_group_image`
--
ALTER TABLE `product_group_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT cho bảng `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT cho bảng `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
