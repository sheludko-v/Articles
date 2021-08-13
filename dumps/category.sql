-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 13 2021 г., 09:30
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `stage2_project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `url`, `title`, `description`) VALUES
(1, 'army', 'Армия', 'Армия, война, боевые действия, горячие точки'),
(2, 'business', 'Бизнес', 'Бизнес, предпринимательство, деньги'),
(3, 'dosug', 'Досуг', 'Досуг, развлечения, мероприятия, ночные клубы, концерты, фестивали'),
(4, 'health', 'Здоровье', 'Здоровье, ЗОЖ, народные средства, советы, гомеопатия'),
(5, 'it', 'ИТ', 'Информационные технологии, программирование, робототехника, компьютеры'),
(6, 'medicine', 'Медицина', 'Медицина, болезни, лечение, вакцина, коронавирус '),
(7, 'education', 'Образование', 'Образование, педагогика, университеты, школы'),
(8, 'politics', 'Политика', 'Политика'),
(9, 'nature', 'Природа', 'Природа, флора, фауна'),
(10, 'travels', 'Путешествия', 'Путешествия, туризм, активный отдых'),
(11, 'religion', 'Религия', 'Религия'),
(12, 'media', 'СМИ', 'Средства массовой информации, новости, события'),
(13, 'sport', 'Спорт', 'Спорт, новости спорта'),
(14, 'transport', 'Транспорт', 'Транспорт, автомобили, мотоциклы, общественный транспорт'),
(15, 'show-business', 'Шоу-бизнес', 'Кино, музыка, телевидение, артисты, музыканты, медийные личности'),
(16, 'economy', 'Экономика', 'Экономика');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
