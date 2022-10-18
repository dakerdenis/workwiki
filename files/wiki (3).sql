-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 17 2022 г., 09:52
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wiki`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `category_access` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_access`) VALUES
(31, 'Office', '1'),
(32, 'Helpdesk', '1'),
(33, 'Server', '1'),
(34, 'InsureAz', '1'),
(35, 'Claim', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `filesize` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `filetype` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `file_sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`id`, `name`, `filesize`, `filetype`, `file_sub_id`) VALUES
(1, 'wiki.sql', '18.75 KB', 'application/octet-stream', 16),
(8, 'callcenter.docx', '16.95 KB', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 19),
(9, 'sub_category.sql', '9.85 KB', 'application/octet-stream', 18),
(12, 'sub_category.sql', '9.85 KB', 'application/octet-stream', 25),
(13, 'wiki.sql', '18.75 KB', 'application/octet-stream', 25),
(14, 'callcenter (1).docx', '16.95 KB', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 25),
(15, 'category (1).sql', '1.75 KB', 'application/octet-stream', 25),
(16, 'sub_category (2).sql', '9.85 KB', 'application/octet-stream', 29);

-- --------------------------------------------------------

--
-- Структура таблицы `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sub_id` int(11) NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `key_words` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `file_desc` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `sub_id`, `content`, `image`, `key_words`, `file_desc`) VALUES
(16, 'Список работников ', 31, '<p>&nbsp;</p>\r\n<p>ed it to make a type specimen book. It has survived not only five centj/kj/kl;/\"\"\"uries, but asfasfalso tu;i;jo;\"\"\"\"\"\"he leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipasdasdassum passages, and more rece/.iuьнгь/uo?UI9o?ntly with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n<p>tj/kj/kl;/\"\"\"uries, but also tu;i;jo;\"\"\"\"\"\"he leap into electronic typasdasdesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipasdasdassum passages, and more rece/.iuьнгь/uo?UI9o?ntly with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n<p>ed it to make a type specimen book. It has survived not only five centj/kj/kl;/\"\"\"uries, but also tu;i;jo;\"\"\"\"\"\"he leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipasdasdassum passages, and more rece/.iuьнгь/uo?UI9o?ntly with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n<p>ed it to make a type specimen book. It has survived not only five centj/kj/kl;/\"\"\"uries, but also tu;i;jo;\"\"\"\"\"\"he leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipasdasdassum passages, and more rece/.iuьнгь/uo?UI9o?ntly with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '', 'workerss', ''),
(18, 'Список компьютеров', 31, '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', 'wiki.sql', 'компьютеры, asdasda', '18.75 KB,wiki.sql'),
(19, 'Printers', 31, '<p style=\"text-align: center;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum etsfsdfsdffffffffffffff Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Loremdfdsf ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', '', 'printers, настройка принтеров,принтеры,принтера,printe', ''),
(20, 'Helpdesck remarks', 32, '<p><strong>Накопи́тель на жёстких магни́тных ди́сках,</strong>&nbsp;или&nbsp;<strong>НЖМД</strong>&nbsp;(<a title=\"Английский язык\" href=\"https://ru.wikipedia.org/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA\">англ.</a>&nbsp;<span lang=\"en\">hard (magnetic) disk drive, HDD, HMDD</span>),&nbsp;<strong>жёсткий диск</strong>,&nbsp;<em>разг.</em>&nbsp;<strong>винчестер</strong>&nbsp;&mdash;&nbsp;<a title=\"Запоминающее устройство\" href=\"https://ru.wikipedia.org/wiki/%D0%97%D0%B0%D0%BF%D0%BE%D0%BC%D0%B8%D0%BD%D0%B0%D1%8E%D1%89%D0%B5%D0%B5_%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B9%D1%81%D1%82%D0%B2%D0%BE\">запоминающее устройство</a>&nbsp;(устройство хранения информации,&nbsp;<a class=\"mw-redirect\" title=\"Накопитель данных\" href=\"https://ru.wikipedia.org/wiki/%D0%9D%D0%B0%D0%BA%D0%BE%D0%BF%D0%B8%D1%82%D0%B5%D0%BB%D1%8C_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85\">накопитель</a>)&nbsp;<a title=\"Произвольный доступ\" href=\"https://ru.wikipedia.org/wiki/%D0%9F%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D0%B4%D0%BE%D1%81%D1%82%D1%83%D0%BF\">произвольного доступа</a>, основанное на принципе магнитной записи. Является основным&nbsp;<a title=\"Компьютерная память\" href=\"https://ru.wikipedia.org/wiki/%D0%9A%D0%BE%D0%BC%D0%BF%D1%8C%D1%8E%D1%82%D0%B5%D1%80%D0%BD%D0%B0%D1%8F_%D0%BF%D0%B0%D0%BC%D1%8F%D1%82%D1%8C\">накопителем данных в большинстве компьютеров</a>.</p>\r\n<p>В отличие от гибкого диска (<a title=\"Дискета\" href=\"https://ru.wikipedia.org/wiki/%D0%94%D0%B8%D1%81%D0%BA%D0%B5%D1%82%D0%B0\">дискеты</a>), информация в НЖМД записывается на жёсткие (<a title=\"Алюминий\" href=\"https://ru.wikipedia.org/wiki/%D0%90%D0%BB%D1%8E%D0%BC%D0%B8%D0%BD%D0%B8%D0%B9\">алюминиевые</a>&nbsp;или&nbsp;<a title=\"Стекло\" href=\"https://ru.wikipedia.org/wiki/%D0%A1%D1%82%D0%B5%D0%BA%D0%BB%D0%BE\">стеклянные</a>)&nbsp;<span data-interwiki-lang=\"en\" data-interwiki-article=\"Hard disk drive platter\"><a class=\"new\" title=\"Пластина жёсткого диска (страница отсутствует)\" href=\"https://ru.wikipedia.org/w/index.php?title=%D0%9F%D0%BB%D0%B0%D1%81%D1%82%D0%B8%D0%BD%D0%B0_%D0%B6%D1%91%D1%81%D1%82%D0%BA%D0%BE%D0%B3%D0%BE_%D0%B4%D0%B8%D1%81%D0%BA%D0%B0&amp;action=edit&amp;redlink=1\">пластины</a></span><span class=\"noprint\"><sup><a class=\"extiw\" title=\"en:Hard disk drive platter\" href=\"https://en.wikipedia.org/wiki/Hard_disk_drive_platter\"><span title=\"Hard disk drive platter &mdash; версия статьи &laquo;Пластина жёсткого диска&raquo; на английском языке\">[en]</span></a></sup></span>, покрытые слоем&nbsp;<a title=\"Ферромагнетики\" href=\"https://ru.wikipedia.org/wiki/%D0%A4%D0%B5%D1%80%D1%80%D0%BE%D0%BC%D0%B0%D0%B3%D0%BD%D0%B5%D1%82%D0%B8%D0%BA%D0%B8\">ферромагнитного</a>&nbsp;материала, чаще всего&nbsp;<a title=\"Оксид хрома(IV)\" href=\"https://ru.wikipedia.org/wiki/%D0%9E%D0%BA%D1%81%D0%B8%D0%B4_%D1%85%D1%80%D0%BE%D0%BC%D0%B0(IV)\">диоксида хрома</a>&nbsp;&mdash; магнитные диски. В НЖМД используется одна или несколько пластин на одной&nbsp;<a title=\"Ось (техника)\" href=\"https://ru.wikipedia.org/wiki/%D0%9E%D1%81%D1%8C_(%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B0)\">оси</a>.&nbsp;<a title=\"Магнитная головка\" href=\"https://ru.wikipedia.org/wiki/%D0%9C%D0%B0%D0%B3%D0%BD%D0%B8%D1%82%D0%BD%D0%B0%D1%8F_%D0%B3%D0%BE%D0%BB%D0%BE%D0%B2%D0%BA%D0%B0\">Считывающие головки</a>&nbsp;в рабочем режиме не касаются поверхности пластин благодаря прослойке набегающего потока воздуха, образующейся у поверхности при быстром вращении. Расстояние между головкой и диском составляет несколько&nbsp;<a title=\"Нанометр\" href=\"https://ru.wikipedia.org/wiki/%D0%9D%D0%B0%D0%BD%D0%BE%D0%BC%D0%B5%D1%82%D1%80\">нанометров</a>&nbsp;(в современных дисках около 10 нм<sup id=\"cite_ref-1\" class=\"reference\"><a href=\"https://ru.wikipedia.org/wiki/%D0%96%D1%91%D1%81%D1%82%D0%BA%D0%B8%D0%B9_%D0%B4%D0%B8%D1%81%D0%BA#cite_note-1\">[1]</a></sup>), а отсутствие механического контакта обеспечивает долгий срок службы устройства. При отсутствии вращения дисков головки находятся у шпинделя или за пределами диска в безопасной (&laquo;парковочной&raquo;) зоне, где исключён их нештатный контакт с поверхностью дисков.</p>\r\n<p>Также, в отличие от гибкого диска, носитель информации обычно совмещают с накопителем, приводом и блоком электроники. Такие жёсткие диски часто используются в качестве несъёмного носителя информации.</p>\r\n<p>Со второй половины 2000-х годов получили распространение более производительные&nbsp;<a title=\"Твердотельный накопитель\" href=\"https://ru.wikipedia.org/wiki/%D0%A2%D0%B2%D0%B5%D1%80%D0%B4%D0%BE%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D0%BD%D0%B0%D0%BA%D0%BE%D0%BF%D0%B8%D1%82%D0%B5%D0%BB%D1%8C\">твердотельные накопители</a>, вытесняющие дисковые накопители из ряда применений несмотря на более высокую стоимость единицы хранения; жёсткие диски при этом, по состоянию на середину 2010-х годов, получили широкое распространение как недорогие и высокоёмкие устройства хранения как в потребительском сегменте, так и корпоративном.</p>', '', 'printer, helpdesk', ''),
(23, 'Server settings', 33, '<p>erherherhwdwqfqw</p>', '', 'server, server setup', ''),
(24, 'insureAz', 34, '<p>asfasfasfg g rg regerb erb er</p>', '', 'insure,insureaz,salker', ''),
(25, 'Claim files', 35, '<p>asfasf asfasf</p>\r\n<p><strong>asfasfasfasfasfasffasfas&nbsp;</strong></p>\r\n<div>\r\n<div>$sub_id = $_GET[\'sub_cat_id\'];\r\n<div>\r\n<div>$sub_id = $_GET[\'sub_cat_id\'];\r\n<div>\r\n<div>$sub_id = $_GET[\'sub_cat_id\'];\r\n<div>\r\n<div>$sub_id = $_GET[\'sub_cat_id\'];\r\n<div>\r\n<div>$sub_id = $_GET[\'sub_cat_id\'];\r\n<div>\r\n<div>$sub_id = $_GET[\'sub_cat_id\'];</div>\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<p>asfasfasf</p>\r\n<div>\r\n<div>$sub_id = $_GET[\'sub_cat_id\'];\r\n<div>\r\n<div>$sub_id = $_GET[\'sub_cat_id\'];\r\n<div>\r\n<div>$sub_id = $_GET[\'sub_cat_id\'];\r\n<div>\r\n<div>$sub_id = $_GET[\'sub_cat_id\'];\r\n<div>\r\n<div>$sub_id = $_GET[\'sub_cat_id\'];\r\n<div>\r\n<div>$sub_id = $_GET[\'sub_cat_id\'];\r\n<div>\r\n<div>$sub_id = $_GET[\'sub_cat_id\'];</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'wiki.sql', 'claim, claim files', '18.75 KB,wiki.sql'),
(28, 'Hard disk ', 33, '<p><strong>Накопи́тель на жёстких магни́тных ди́сках,</strong>&nbsp;или&nbsp;<strong>НЖМД</strong>&nbsp;(<a title=\"Английский язык\" href=\"https://ru.wikipedia.org/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA\">англ.</a>&nbsp;<span lang=\"en\">hard (magnetic) disk drive, HDD, HMDD</span>),&nbsp;<strong>жёсткий диск</strong>,&nbsp;<em>разг.</em>&nbsp;<strong>винчестер</strong>&nbsp;&mdash;&nbsp;<a title=\"Запоминающее устройство\" href=\"https://ru.wikipedia.org/wiki/%D0%97%D0%B0%D0%BF%D0%BE%D0%BC%D0%B8%D0%BD%D0%B0%D1%8E%D1%89%D0%B5%D0%B5_%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B9%D1%81%D1%82%D0%B2%D0%BE\">запоминающее устройство</a>&nbsp;(устройство хранения информации,&nbsp;<a class=\"mw-redirect\" title=\"Накопитель данных\" href=\"https://ru.wikipedia.org/wiki/%D0%9D%D0%B0%D0%BA%D0%BE%D0%BF%D0%B8%D1%82%D0%B5%D0%BB%D1%8C_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85\">накопитель</a>)&nbsp;<a title=\"Произвольный доступ\" href=\"https://ru.wikipedia.org/wiki/%D0%9F%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D0%B4%D0%BE%D1%81%D1%82%D1%83%D0%BF\">произвольного доступа</a>, основанное на принципе магнитной записи. Является основным&nbsp;<a title=\"Компьютерная память\" href=\"https://ru.wikipedia.org/wiki/%D0%9A%D0%BE%D0%BC%D0%BF%D1%8C%D1%8E%D1%82%D0%B5%D1%80%D0%BD%D0%B0%D1%8F_%D0%BF%D0%B0%D0%BC%D1%8F%D1%82%D1%8C\">накопителем данных в большинстве компьютеров</a>.</p>\r\n<p>В отличие от гибкого диска (<a title=\"Дискета\" href=\"https://ru.wikipedia.org/wiki/%D0%94%D0%B8%D1%81%D0%BA%D0%B5%D1%82%D0%B0\">дискеты</a>), информация в НЖМД записывается на жёсткие (<a title=\"Алюминий\" href=\"https://ru.wikipedia.org/wiki/%D0%90%D0%BB%D1%8E%D0%BC%D0%B8%D0%BD%D0%B8%D0%B9\">алюминиевые</a>&nbsp;или&nbsp;<a title=\"Стекло\" href=\"https://ru.wikipedia.org/wiki/%D0%A1%D1%82%D0%B5%D0%BA%D0%BB%D0%BE\">стеклянные</a>)&nbsp;<span data-interwiki-lang=\"en\" data-interwiki-article=\"Hard disk drive platter\"><a class=\"new\" title=\"Пластина жёсткого диска (страница отсутствует)\" href=\"https://ru.wikipedia.org/w/index.php?title=%D0%9F%D0%BB%D0%B0%D1%81%D1%82%D0%B8%D0%BD%D0%B0_%D0%B6%D1%91%D1%81%D1%82%D0%BA%D0%BE%D0%B3%D0%BE_%D0%B4%D0%B8%D1%81%D0%BA%D0%B0&amp;action=edit&amp;redlink=1\">пластины</a></span><span class=\"noprint\"><sup><a class=\"extiw\" title=\"en:Hard disk drive platter\" href=\"https://en.wikipedia.org/wiki/Hard_disk_drive_platter\"><span title=\"Hard disk drive platter &mdash; версия статьи &laquo;Пластина жёсткого диска&raquo; на английском языке\">[en]</span></a></sup></span>, покрытые слоем&nbsp;<a title=\"Ферромагнетики\" href=\"https://ru.wikipedia.org/wiki/%D0%A4%D0%B5%D1%80%D1%80%D0%BE%D0%BC%D0%B0%D0%B3%D0%BD%D0%B5%D1%82%D0%B8%D0%BA%D0%B8\">ферромагнитного</a>&nbsp;материала, чаще всего&nbsp;<a title=\"Оксид хрома(IV)\" href=\"https://ru.wikipedia.org/wiki/%D0%9E%D0%BA%D1%81%D0%B8%D0%B4_%D1%85%D1%80%D0%BE%D0%BC%D0%B0(IV)\">диоксида хрома</a>&nbsp;&mdash; магнитные диски. В НЖМД используется одна или несколько пластин на одной&nbsp;<a title=\"Ось (техника)\" href=\"https://ru.wikipedia.org/wiki/%D0%9E%D1%81%D1%8C_(%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B0)\">оси</a>.&nbsp;<a title=\"Магнитная головка\" href=\"https://ru.wikipedia.org/wiki/%D0%9C%D0%B0%D0%B3%D0%BD%D0%B8%D1%82%D0%BD%D0%B0%D1%8F_%D0%B3%D0%BE%D0%BB%D0%BE%D0%B2%D0%BA%D0%B0\">Считывающие головки</a>&nbsp;в рабочем режиме не касаются поверхности пластин благодаря прослойке набегающего потока воздуха, образующейся у поверхности при быстром вращении. Расстояние между головкой и диском составляет несколько&nbsp;<a title=\"Нанометр\" href=\"https://ru.wikipedia.org/wiki/%D0%9D%D0%B0%D0%BD%D0%BE%D0%BC%D0%B5%D1%82%D1%80\">нанометров</a>&nbsp;(в современных дисках около 10 нм<sup id=\"cite_ref-1\" class=\"reference\"><a href=\"https://ru.wikipedia.org/wiki/%D0%96%D1%91%D1%81%D1%82%D0%BA%D0%B8%D0%B9_%D0%B4%D0%B8%D1%81%D0%BA#cite_note-1\">[1]</a></sup>), а отсутствие механического контакта обеспечивает долгий срок службы устройства. При отсутствии вращения дисков головки находятся у шпинделя или за пределами диска в безопасной (&laquo;парковочной&raquo;) зоне, где исключён их нештатный контакт с поверхностью дисков.</p>\r\n<p>Также, в отличие от гибкого диска, носитель информации обычно совмещают с накопителем, приводом и блоком электроники. Такие жёсткие диски часто используются в качестве несъёмного носителя информации.</p>\r\n<p>Со второй половины 2000-х годов получили распространение более производительные&nbsp;<a title=\"Твердотельный накопитель\" href=\"https://ru.wikipedia.org/wiki/%D0%A2%D0%B2%D0%B5%D1%80%D0%B4%D0%BE%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D0%BD%D0%B0%D0%BA%D0%BE%D0%BF%D0%B8%D1%82%D0%B5%D0%BB%D1%8C\">твердотельные накопители</a>, вытесняющие дисковые накопители из ряда применений несмотря на более высокую стоимость единицы хранения; жёсткие диски при этом, по состоянию на середину 2010-х годов, получили широкое распространение как недорогие и высокоёмкие устройства хранения как в потребительском сегменте, так и корпоративном.</p>', '', 'Server, server hard disks, hard , hard disk, server', ''),
(29, 'Claim printer', 35, '<div id=\"MULTIUN-V1.EN-RU_4118984\" class=\"example\">\r\n<div class=\"src ltr\"><span class=\"text\" lang=\"en\">In support of this&nbsp;<em>claim</em>&nbsp;element, International Affairs provided a schedule calculating the&nbsp;<em>claim</em>&nbsp;amount and some invoices.</span></div>\r\n<div class=\"trg ltr\"><span class=\"text\">В обоснование данного элемента&nbsp;<a class=\"link_highlighted\" href=\"https://context.reverso.net/%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B4/%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%B8%D0%B9-%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9/%D0%BF%D1%80%D0%B5%D1%82%D0%B5%D0%BD%D0%B7%D0%B8%D0%B8\" rel=\"nofollow\"><em>претензии</em></a>&nbsp;Управление международных операций представило свои расчеты суммы&nbsp;<a class=\"link_highlighted\" href=\"https://context.reverso.net/%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B4/%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%B8%D0%B9-%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9/%D0%BF%D1%80%D0%B5%D1%82%D0%B5%D0%BD%D0%B7%D0%B8%D0%B8\" rel=\"nofollow\"><em>претензии</em></a>&nbsp;и некоторые счета.</span></div>\r\n</div>\r\n<div id=\"MULTIUN-V1.EN-RU_3267179\" class=\"example\">\r\n<div class=\"src ltr\"><span class=\"text\" lang=\"en\">Accordingly, the Panel will address specific issues of evidence for each&nbsp;<em>claim</em>&nbsp;element in the&nbsp;<em>claim</em>&nbsp;analysis section.</span></div>\r\n<div class=\"trg ltr\"><span class=\"text\">Исходя из этого Группа будет решать конкретные вопросы доказанности каждого элемента&nbsp;<a class=\"link_highlighted\" href=\"https://context.reverso.net/%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B4/%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%B8%D0%B9-%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9/%D0%BF%D1%80%D0%B5%D1%82%D0%B5%D0%BD%D0%B7%D0%B8%D0%B8\" rel=\"nofollow\"><em>претензии</em></a>&nbsp;в раздел</span></div>\r\n</div>', '', 'printer, printer setup, printer exe, принтер', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `categories` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `categories`) VALUES
(15, 'file_system_root', '123', 'admin', '31,32,33,34,35,'),
(16, 'user1', '123', 'user', '31,32,34,'),
(17, 'user2', '123', 'user', '31,34,'),
(18, 'user3', '123', 'user', '31,34,'),
(19, 'user4', '123', 'user', '31,34,'),
(24, 'snasirov', '123', 'superadmin', '31,32,33,34,35,'),
(25, 'dakershteyn', '123', 'admin', '31,32,33,34,35,'),
(34, 'user5', '123', 'user', '31,32,33,34,35,');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
