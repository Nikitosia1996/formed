-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 29 2023 г., 10:10
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `database`
--

-- --------------------------------------------------------

--
-- Структура таблицы `archive_akusherstvo`
--

CREATE TABLE `archive_akusherstvo` (
  `id_akt` int NOT NULL,
  `num_akt` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `date_prik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Дамп данных таблицы `archive_akusherstvo`
--

INSERT INTO `archive_akusherstvo` (`id_akt`, `num_akt`, `name`, `date_prik`, `type`, `file`, `url`) VALUES
(1, 1675, 'О реализации пилотного проекта «Скрининг новорожденных г. Минска на первичный иммунодефицит»	', '30.11.2022', 'Приказ МЗ РБ', '/protected/akuserstvo-i-ginekologia/прмз№1675_2022.pdf', '/index.php?akusherstvo-i-ginekologiya'),
(2, 1380, 'Об изменении приказа Министерства здравоохранения Республики Беларусь от 30 августа 2022 №1124', '12.10.2022', 'Приказ МЗ РБ', '/protected/akuserstvo-i-ginekologia/прмз№1380_2022.pdf', '/index.php?akusherstvo-i-ginekologiya'),
(3, 1361, 'Об организации Республиканского центра катамнестического наблюдения недоношенных детей', '06.10.2022', 'Приказ МЗ РБ', '/protected/akuserstvo-i-ginekologia/прмз№1361_2022.pdf', '/index.php?akusherstvo-i-ginekologiya'),
(4, 1201, 'О порядке медицинского наблюдения в амбулаторных условиях', '12.09.2022', 'Приказ МЗ РБ', '/protected/akuserstvo-i-ginekologia/прмз№1201_2022.pdf', '/index.php?akusherstvo-i-ginekologiya'),
(5, 706, 'О проведении прегравидарной подготовки', '27.05.2022', 'Приказ МЗ РБ', '/protected/akuserstvo-i-ginekologia/прмз№706_2022.pdf', '/index.php?akusherstvo-i-ginekologiya'),
(6, 705, 'О порядке проведения ультразвуковой трансвагинальной цервикометрии', '27.05.2022', 'Приказ МЗ РБ', '/protected/akuserstvo-i-ginekologia/прмз№705_2022.pdf', '/index.php?akusherstvo-i-ginekologiya'),
(7, 555, 'О проведении прегравидарной подготовки', '26.04.2022', 'Приказ МЗ РБ', '/protected/akuserstvo-i-ginekologia/прмз№555_2022.pdf', '/index.php?akusherstvo-i-ginekologiya'),
(8, 419, 'О проведении прегравидарной подготовки', '31.03.2022', 'Приказ МЗ РБ', '/protected/akuserstvo-i-ginekologia/прмз№419_2022.pdf', '/index.php?akusherstvo-i-ginekologiya'),
(9, 396, 'О проведении прегравидарной подготовки', '25.03.2022', 'Приказ МЗ РБ', '/protected/akuserstvo-i-ginekologia/прмз№396_2022.pdf', '/index.php?akusherstvo-i-ginekologiya'),
(10, 261, 'О проведении прегравидарной подготовки', '28.02.2022', 'Приказ МЗ РБ', '/protected/akuserstvo-i-ginekologia/прмз№261_2022.pdf', '/index.php?akusherstvo-i-ginekologiya'),
(11, 223, 'О хирургической помощи беременным и новорожденным', '22.02.2022', 'Приказ МЗ РБ', '/protected/akuserstvo-i-ginekologia/прмз№223_2022.pdf', '/index.php?akusherstvo-i-ginekologiya'),
(12, 99, 'О создании банка донорских половых клеток', '27.01.2022', 'Приказ МЗ РБ', '/protected/akuserstvo-i-ginekologia/прмз№99_2022.pdf', '/index.php?akusherstvo-i-ginekologiya'),
(13, 1257, 'О проведении вакцинации против  инфекции  COVID-19 женщин во время беременности и в период грудного вскармливания', '27.05.2022', 'Приказ МЗ РБ', '/protected/akuserstvo-i-ginekologia/прмз№1257_2021.pdf', '/index.php?archive_akusherstvo'),
(14, 443, 'Об изменении приказа Министерства здравоохранения Республики Беларусь от 6 апреля 2020 № 387', '26.04.2022', 'Приказ МЗ РБ', '/protected/akuserstvo-i-ginekologia/прмз№443_2021.pdf', '/index.php?archive_akusherstvo'),
(15, 488, 'Об изменении порядка госпитализации беременных,  рожениц, родильниц, новорожденных детей Минской области с инфекцией  COVID-19', '31.03.2022', 'Приказ МЗ РБ', '/protected/akuserstvo-i-ginekologia/прмз№488_2021.pdf', '/index.php?archive_akusherstvo'),
(16, 986, 'О республиканской комиссии по вопросам бесплатного предоставления одной попытки экстракорпорального оплодотворения', '25.03.2022', 'Приказ МЗ РБ', '/protected/akuserstvo-i-ginekologia/прмз№986_2020.pdf', '/index.php?archive_akusherstvo'),
(17, 387, 'Об утверждении инструкции «Об организации медицинской помощи беременным, роженицам и родильницам с вероятной или подтвержденной инфекцией COVID- 19» и дополнительных противоэпидемических мерах', '28.02.2022', 'Приказ МЗ РБ', '/protected/akuserstvo-i-ginekologia/прмз№387_2020.pdf', '/index.php?archive_akusherstvo'),
(18, 28, 'Об утверждении клинического протокола «Профилактика геморрагической болезни у новорожденных детей»', '28.02.2022', 'Постановление МЗ РБ', '/protected/akuserstvo-i-ginekologia/пмз№28_2020.zip', '/index.php?archive_akusherstvo'),
(19, 21, 'О мерах по совершенствованию контроля качества ультразвуковых исследований плода', '28.02.2022', 'Приказ МЗ РБ', '/protected/akuserstvo-i-ginekologia/прмз№21_2020.pdf', '/index.php?archive_akusherstvo'),
(20, 96, 'Об утверждении клинического протокола («Диагностика и лечение пациентов с сифилитической инфекцией)', '28.02.2022', 'Постановление МЗ РБ', '/protected/akuserstvo-i-ginekologia/пмз№96_2019.pdf', '/index.php?archive_akusherstvo');

-- --------------------------------------------------------

--
-- Структура таблицы `archive_anesteziologiya-reanimatologiya`
--

CREATE TABLE `archive_anesteziologiya-reanimatologiya` (
  `id_akt` int NOT NULL,
  `num_akt` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Дамп данных таблицы `archive_anesteziologiya-reanimatologiya`
--

INSERT INTO `archive_anesteziologiya-reanimatologiya` (`id_akt`, `num_akt`, `name`, `date_prik`, `type`, `file`, `url`) VALUES
(1, 1201, 'О порядке медицинского наблюдения в амбулаторных условиях', '12.09.2022', 'Приказ МЗ РБ', '/protected/anesteziologiya-reanimatologiya/прмз№1201_2022.pdf', 'http://sbadmin/index.php?archive_anesteziologiya-reanimatologiya'),
(2, 254, 'О подготовке и организации проведения IX Съезда врачей анестезиологов-реаниматологов Республики Беларусь «Актуальные проблемы и современные технологии в анестезиологии и интенсивной терапии»', '05.03.2020', 'Приказ МЗ РБ', '/protected/anesteziologiya-reanimatologiya/прмз№254_2020.pdf', 'http://sbadmin/index.php?archive_anesteziologiya-reanimatologiya');

-- --------------------------------------------------------

--
-- Структура таблицы `archive_anesteziologiya-reanimatologiya_deyatelnost-s-narkot`
--

CREATE TABLE `archive_anesteziologiya-reanimatologiya_deyatelnost-s-narkot` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_common-question`
--

CREATE TABLE `archive_common-question` (
  `id_akt` int NOT NULL,
  `num_akt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_common-question_osnovnyye-zakony-rb`
--

CREATE TABLE `archive_common-question_osnovnyye-zakony-rb` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_common-question_rezhim-sanpin`
--

CREATE TABLE `archive_common-question_rezhim-sanpin` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_common-question_tarify-normy-normativy`
--

CREATE TABLE `archive_common-question_tarify-normy-normativy` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_id-luchevaya-diagnostika`
--

CREATE TABLE `archive_id-luchevaya-diagnostika` (
  `id_akt` int NOT NULL,
  `num_akt` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_id-uzi-ed-fd`
--

CREATE TABLE `archive_id-uzi-ed-fd` (
  `id_akt` int NOT NULL,
  `num_akt` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_khirurgiya`
--

CREATE TABLE `archive_khirurgiya` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_khirurgiya_oftalmologiya`
--

CREATE TABLE `archive_khirurgiya_oftalmologiya` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_khirurgiya_onkologiya-mammologiya`
--

CREATE TABLE `archive_khirurgiya_onkologiya-mammologiya` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_khirurgiya_ortopediya-travmatologiya`
--

CREATE TABLE `archive_khirurgiya_ortopediya-travmatologiya` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_khirurgiya_otorinolaringologiya-surdologiya`
--

CREATE TABLE `archive_khirurgiya_otorinolaringologiya-surdologiya` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_khirurgiya_patologoanatomicheskaya-sluzhba`
--

CREATE TABLE `archive_khirurgiya_patologoanatomicheskaya-sluzhba` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_khirurgiya_proktologiya-koloproktologiya`
--

CREATE TABLE `archive_khirurgiya_proktologiya-koloproktologiya` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_khirurgiya_urologiya-andrologiya`
--

CREATE TABLE `archive_khirurgiya_urologiya-andrologiya` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_khirurgiya_zabor-organov-transplantatsiya`
--

CREATE TABLE `archive_khirurgiya_zabor-organov-transplantatsiya` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_laboratornaya-diagnostik`
--

CREATE TABLE `archive_laboratornaya-diagnostik` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_pediatriya`
--

CREATE TABLE `archive_pediatriya` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_stomatologiya`
--

CREATE TABLE `archive_stomatologiya` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_terapiya`
--

CREATE TABLE `archive_terapiya` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_terapiya_allergologiya-immunologiya`
--

CREATE TABLE `archive_terapiya_allergologiya-immunologiya` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_terapiya_dermatologiya-venerologiya-kosmetologiya`
--

CREATE TABLE `archive_terapiya_dermatologiya-venerologiya-kosmetologiya` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_terapiya_endokrinologiya`
--

CREATE TABLE `archive_terapiya_endokrinologiya` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_terapiya_fizioterapiya-massazh-lfk-reabilitatsiya`
--

CREATE TABLE `archive_terapiya_fizioterapiya-massazh-lfk-reabilitatsiya` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_terapiya_gastroenterologiya`
--

CREATE TABLE `archive_terapiya_gastroenterologiya` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_terapiya_kardiologiya`
--

CREATE TABLE `archive_terapiya_kardiologiya` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_terapiya_nevrologiya`
--

CREATE TABLE `archive_terapiya_nevrologiya` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_terapiya_psikhoterapiya-narkologiya-psikhiatriya`
--

CREATE TABLE `archive_terapiya_psikhoterapiya-narkologiya-psikhiatriya` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_terapiya_revmatologiya`
--

CREATE TABLE `archive_terapiya_revmatologiya` (
  `id_akt` int NOT NULL,
  `num_akt` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `date_prik` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id_category` int NOT NULL,
  `name_category` varchar(200) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'archive_common-question'),
(2, 'archive_akusherstvo'),
(3, 'archive_anesteziologiya-reanimatologiya'),
(4, 'archive_instrumentalnaya-diagnostika'),
(5, 'archive_laboratornaya-diagnostik'),
(6, 'archive_pediatriya'),
(7, 'archive_stomatologiya'),
(8, 'archive_terapiya'),
(9, 'archive_khirurgiya');

-- --------------------------------------------------------

--
-- Структура таблицы `container`
--

CREATE TABLE `container` (
  `id_container` int NOT NULL,
  `id_user` int NOT NULL,
  `id_document` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `documents`
--

CREATE TABLE `documents` (
  `id` int NOT NULL,
  `id_type` int NOT NULL,
  `id_form` int NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `documents_type`
--

CREATE TABLE `documents_type` (
  `id_type` int NOT NULL,
  `typename` varchar(200) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Дамп данных таблицы `documents_type`
--

INSERT INTO `documents_type` (`id_type`, `typename`) VALUES
(1, 'Информация об используемой медицинской техники'),
(2, 'Копия штатного расписания'),
(3, 'Доверенность');

-- --------------------------------------------------------

--
-- Структура таблицы `forms_statements`
--

CREATE TABLE `forms_statements` (
  `id_form` int NOT NULL,
  `person` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `adress` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `unp` int NOT NULL,
  `last_name` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `first_name` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `middle_name` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `position` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `initiator` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `number_telephone` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `mail` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `department` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `date` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `time` varchar(200) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id_role` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id_role`, `name`) VALUES
(1, 'admin'),
(2, 'akusherstvo'),
(3, 'guest');

-- --------------------------------------------------------

--
-- Структура таблицы `subcategories`
--

CREATE TABLE `subcategories` (
  `id_subcategory` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `id_categ` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Дамп данных таблицы `subcategories`
--

INSERT INTO `subcategories` (`id_subcategory`, `name`, `id_categ`) VALUES
(1, 'archive_akusherstvo', 2),
(2, 'archive_anesteziologiya-reanimatologiya', 3),
(3, 'archive_anesteziologiya-reanimatologiya_deyatelnost-s-narkot', 3),
(4, 'archive_common-question', 1),
(5, 'archive_common-question_osnovnyye-zakony-rb', 1),
(6, 'archive_common-question_rezhim-sanpin', 1),
(7, 'archive_common-question_tarify-normy-normativy', 1),
(8, 'archive_luchevaya-diagnostika', 4),
(9, 'archive_uzi-ed-fd', 4),
(10, 'archive_laboratornaya-diagnostik', 5),
(11, 'archive_pediatriya', 6),
(12, 'archive_stomatologiya', 7),
(13, 'archive_terapiya', 8),
(14, 'archive_terapiya_allergologiya-immunologiya', 8),
(15, 'archive_terapiya_dermatologiya-venerologiya-kosmetologiya', 8),
(16, 'archive_terapiya_endokrinologiya', 8),
(17, 'archive_terapiya_fizioterapiya-massazh-lfk-reabilitatsiya', 8),
(18, 'archive_terapiya_gastroenterologiya', 8),
(19, 'archive_terapiya_kardiologiya', 8),
(20, 'archive_terapiya_nevrologiya', 8),
(21, 'archive_terapiya_psikhoterapiya-narkologiya-psikhiatriya', 8),
(22, 'archive_terapiya_revmatologiya', 8),
(23, 'archive_khirurgiya', 9),
(24, 'archive_khirurgiya_oftalmologiya', 9),
(25, 'archive_khirurgiya_onkologiya-mammologiya', 9),
(26, 'archive_khirurgiya_ortopediya-travmatologiya', 9),
(27, 'archive_khirurgiya_otorinolaringologiya-surdologiya', 9),
(28, 'archive_khirurgiya_patologoanatomicheskaya-sluzhba', 9),
(29, 'archive_khirurgiya_proktologiya-koloproktologiya', 9),
(30, 'archive_khirurgiya_urologiya-andrologiya', 9),
(31, 'archive_khirurgiya_zabor-organov-transplantatsiya', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `user` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `login` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `id_role` int NOT NULL,
  `online` int DEFAULT NULL,
  `last_act` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `user`, `login`, `password`, `id_role`, `online`, `last_act`) VALUES
(1, 'Админ', 'admin@admin.by', '18c6d818ae35a3e8279b5330eda01498', 1, 1679647619, 1679647619),
(2, 'vlad', 'vlad@mail.ru', '96ce6de245514b774a4f8c87e52fa90b', 1, 0, 1679930855),
(3, '36gp', '36gp@mail.ru', 'ba258829bb23dce283867bb2f8b78d7f', 2, 0, 1680006891),
(4, 'richard', 'richard@mail.ru', 'bc956474c3bf9fbade3c9a1063dd4e5e', 1, 1680073822, 1680073822);

-- --------------------------------------------------------

--
-- Структура таблицы `view_categ_user`
--

CREATE TABLE `view_categ_user` (
  `id_v_categ_user` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `id_categ` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Дамп данных таблицы `view_categ_user`
--

INSERT INTO `view_categ_user` (`id_v_categ_user`, `id_user`, `id_categ`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 3, 1),
(11, 3, 2),
(12, 4, 1),
(13, 4, 2),
(14, NULL, NULL),
(15, 4, 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `archive_akusherstvo`
--
ALTER TABLE `archive_akusherstvo`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_anesteziologiya-reanimatologiya`
--
ALTER TABLE `archive_anesteziologiya-reanimatologiya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_anesteziologiya-reanimatologiya_deyatelnost-s-narkot`
--
ALTER TABLE `archive_anesteziologiya-reanimatologiya_deyatelnost-s-narkot`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_common-question`
--
ALTER TABLE `archive_common-question`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_common-question_osnovnyye-zakony-rb`
--
ALTER TABLE `archive_common-question_osnovnyye-zakony-rb`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_common-question_rezhim-sanpin`
--
ALTER TABLE `archive_common-question_rezhim-sanpin`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_common-question_tarify-normy-normativy`
--
ALTER TABLE `archive_common-question_tarify-normy-normativy`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_id-luchevaya-diagnostika`
--
ALTER TABLE `archive_id-luchevaya-diagnostika`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_id-uzi-ed-fd`
--
ALTER TABLE `archive_id-uzi-ed-fd`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_khirurgiya`
--
ALTER TABLE `archive_khirurgiya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_khirurgiya_oftalmologiya`
--
ALTER TABLE `archive_khirurgiya_oftalmologiya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_khirurgiya_onkologiya-mammologiya`
--
ALTER TABLE `archive_khirurgiya_onkologiya-mammologiya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_khirurgiya_ortopediya-travmatologiya`
--
ALTER TABLE `archive_khirurgiya_ortopediya-travmatologiya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_khirurgiya_otorinolaringologiya-surdologiya`
--
ALTER TABLE `archive_khirurgiya_otorinolaringologiya-surdologiya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_khirurgiya_patologoanatomicheskaya-sluzhba`
--
ALTER TABLE `archive_khirurgiya_patologoanatomicheskaya-sluzhba`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_khirurgiya_proktologiya-koloproktologiya`
--
ALTER TABLE `archive_khirurgiya_proktologiya-koloproktologiya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_khirurgiya_urologiya-andrologiya`
--
ALTER TABLE `archive_khirurgiya_urologiya-andrologiya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_khirurgiya_zabor-organov-transplantatsiya`
--
ALTER TABLE `archive_khirurgiya_zabor-organov-transplantatsiya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_laboratornaya-diagnostik`
--
ALTER TABLE `archive_laboratornaya-diagnostik`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_pediatriya`
--
ALTER TABLE `archive_pediatriya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_stomatologiya`
--
ALTER TABLE `archive_stomatologiya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_terapiya`
--
ALTER TABLE `archive_terapiya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_terapiya_allergologiya-immunologiya`
--
ALTER TABLE `archive_terapiya_allergologiya-immunologiya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_terapiya_dermatologiya-venerologiya-kosmetologiya`
--
ALTER TABLE `archive_terapiya_dermatologiya-venerologiya-kosmetologiya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_terapiya_endokrinologiya`
--
ALTER TABLE `archive_terapiya_endokrinologiya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_terapiya_fizioterapiya-massazh-lfk-reabilitatsiya`
--
ALTER TABLE `archive_terapiya_fizioterapiya-massazh-lfk-reabilitatsiya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_terapiya_gastroenterologiya`
--
ALTER TABLE `archive_terapiya_gastroenterologiya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_terapiya_kardiologiya`
--
ALTER TABLE `archive_terapiya_kardiologiya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_terapiya_nevrologiya`
--
ALTER TABLE `archive_terapiya_nevrologiya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_terapiya_psikhoterapiya-narkologiya-psikhiatriya`
--
ALTER TABLE `archive_terapiya_psikhoterapiya-narkologiya-psikhiatriya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `archive_terapiya_revmatologiya`
--
ALTER TABLE `archive_terapiya_revmatologiya`
  ADD PRIMARY KEY (`id_akt`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Индексы таблицы `container`
--
ALTER TABLE `container`
  ADD PRIMARY KEY (`id_container`),
  ADD KEY `id_document` (`id_document`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `id_form` (`id_form`);

--
-- Индексы таблицы `documents_type`
--
ALTER TABLE `documents_type`
  ADD PRIMARY KEY (`id_type`);

--
-- Индексы таблицы `forms_statements`
--
ALTER TABLE `forms_statements`
  ADD PRIMARY KEY (`id_form`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Индексы таблицы `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id_subcategory`),
  ADD KEY `id_categ` (`id_categ`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- Индексы таблицы `view_categ_user`
--
ALTER TABLE `view_categ_user`
  ADD PRIMARY KEY (`id_v_categ_user`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_categ` (`id_categ`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `archive_akusherstvo`
--
ALTER TABLE `archive_akusherstvo`
  MODIFY `id_akt` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `archive_anesteziologiya-reanimatologiya`
--
ALTER TABLE `archive_anesteziologiya-reanimatologiya`
  MODIFY `id_akt` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `archive_common-question`
--
ALTER TABLE `archive_common-question`
  MODIFY `id_akt` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `archive_id-luchevaya-diagnostika`
--
ALTER TABLE `archive_id-luchevaya-diagnostika`
  MODIFY `id_akt` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `archive_id-uzi-ed-fd`
--
ALTER TABLE `archive_id-uzi-ed-fd`
  MODIFY `id_akt` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `container`
--
ALTER TABLE `container`
  MODIFY `id_container` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `documents_type`
--
ALTER TABLE `documents_type`
  MODIFY `id_type` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `forms_statements`
--
ALTER TABLE `forms_statements`
  MODIFY `id_form` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id_subcategory` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `view_categ_user`
--
ALTER TABLE `view_categ_user`
  MODIFY `id_v_categ_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `container`
--
ALTER TABLE `container`
  ADD CONSTRAINT `container_ibfk_1` FOREIGN KEY (`id_document`) REFERENCES `documents` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `container_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `documents_type` (`id_type`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `documents_ibfk_2` FOREIGN KEY (`id_form`) REFERENCES `forms_statements` (`id_form`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`id_categ`) REFERENCES `category` (`id_category`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `view_categ_user`
--
ALTER TABLE `view_categ_user`
  ADD CONSTRAINT `view_categ_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `view_categ_user_ibfk_2` FOREIGN KEY (`id_categ`) REFERENCES `category` (`id_category`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
