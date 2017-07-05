-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 06 2017 г., 00:00
-- Версия сервера: 5.7.13
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sweets`
--

-- --------------------------------------------------------

--
-- Структура таблицы `candies`
--

CREATE TABLE IF NOT EXISTS `candies` (
  `id` int(11) NOT NULL,
  `producer` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `candies`
--

INSERT INTO `candies` (`id`, `producer`, `name`, `number`, `product_id`, `updated_at`, `created_at`) VALUES
(1, 'Рошен', 'Шоколапки', 5, 1, '2017-07-05 15:51:57', '2017-07-05 15:51:57'),
(2, 'Рошен', 'Красный мак', 5, 1, '2017-07-05 15:51:57', '2017-07-05 15:51:57'),
(3, 'АВК', 'Гуливер', 5, 1, '2017-07-05 15:51:57', '2017-07-05 15:51:57'),
(4, 'АВК', 'Де Люкс', 10, 1, '2017-07-05 15:51:57', '2017-07-05 15:51:57'),
(5, 'Доминик', 'Конфетта', 5, 1, '2017-07-05 15:51:57', '2017-07-05 15:51:57'),
(6, 'Рошен', 'Красный мак', 5, 2, '2017-07-05 15:54:29', '2017-07-05 15:54:29'),
(7, 'Рошен', 'Шоколапки', 5, 2, '2017-07-05 15:54:29', '2017-07-05 15:54:29'),
(8, 'Рошен', 'Coco Choco', 10, 2, '2017-07-05 15:54:29', '2017-07-05 15:54:29');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `description` text,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `articul` varchar(255) DEFAULT NULL,
  `candies` int(11) DEFAULT NULL,
  `newprice` int(11) DEFAULT NULL,
  `oldprice` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `img`, `name`, `weight`, `articul`, `candies`, `newprice`, `oldprice`, `category_id`, `updated_at`, `created_at`) VALUES
(1, '1.png', 'Шкатулка с росписью', 1000, '15-600', 30, 78, 85, 1, '2017-07-05 15:51:57', '2017-07-05 15:51:57'),
(2, '2.2.png', 'Паровозик', 1200, '15-700', 20, 65, 73, 1, '2017-07-05 15:54:29', '2017-07-05 15:54:29');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `candies`
--
ALTER TABLE `candies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `candies`
--
ALTER TABLE `candies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
