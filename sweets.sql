-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 07 2017 г., 17:47
-- Версия сервера: 5.5.48
-- Версия PHP: 7.0.4

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

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
(8, 'Рошен', 'Coco Choco', 10, 2, '2017-07-05 15:54:29', '2017-07-05 15:54:29'),
(9, 'Рошен', 'Fudgenta', 5, 3, '2017-07-06 08:18:09', '2017-07-06 08:18:09'),
(10, 'Рошен', 'Candy Nut', 5, 3, '2017-07-06 08:18:09', '2017-07-06 08:18:09'),
(11, 'Рошен', 'Лещина', 5, 3, '2017-07-06 08:18:09', '2017-07-06 08:18:09'),
(12, 'Рошен', 'Сливки Ленивки', 5, 3, '2017-07-06 08:18:09', '2017-07-06 08:18:09'),
(13, 'Рошен', 'De Lux', 5, 3, '2017-07-06 08:18:09', '2017-07-06 08:18:09'),
(14, 'Рошен', 'Ромашка', 5, 3, '2017-07-06 08:18:09', '2017-07-06 08:18:09'),
(15, 'Рошен', 'Красный мак', 5, 4, '2017-07-06 08:22:29', '2017-07-06 08:22:29'),
(16, 'Рошен', 'Сливки Ленивки', 5, 4, '2017-07-06 08:22:29', '2017-07-06 08:22:29'),
(17, 'Рошен', 'Ромашка', 5, 4, '2017-07-06 08:22:29', '2017-07-06 08:22:29'),
(18, 'Рошен', 'Коровка', 5, 4, '2017-07-06 08:22:29', '2017-07-06 08:22:29'),
(19, 'Рошен', 'Сливки Ленивки', 5, 5, '2017-07-06 08:24:05', '2017-07-06 08:24:05'),
(20, 'Рошен', 'Коровка', 5, 5, '2017-07-06 08:24:05', '2017-07-06 08:24:05'),
(21, 'Рошен', 'Какракум', 5, 5, '2017-07-06 08:24:05', '2017-07-06 08:24:05'),
(22, 'Рошен', 'Птичье молоко', 5, 5, '2017-07-06 08:24:05', '2017-07-06 08:24:05'),
(23, 'Рошен', 'Сливки Ленивки', 5, 6, '2017-07-06 08:34:26', '2017-07-06 08:34:26'),
(24, 'Рошен', 'Ромашка', 10, 6, '2017-07-06 08:34:26', '2017-07-06 08:34:26'),
(25, 'Рошен', 'Де Люкс', 10, 6, '2017-07-06 08:34:26', '2017-07-06 08:34:26'),
(26, 'Рошен', 'Каракум', 10, 6, '2017-07-06 08:34:26', '2017-07-06 08:34:26'),
(27, 'Рошен', 'Красный мак', 5, 7, '2017-07-07 09:33:11', '2017-07-07 09:33:11'),
(28, 'Рошен', 'Каракум', 5, 7, '2017-07-07 09:33:11', '2017-07-07 09:33:11'),
(29, 'Рошен', 'Коровка', 5, 7, '2017-07-07 09:33:11', '2017-07-07 09:33:11'),
(30, 'Рошен', 'Сливки Ленивки', 10, 7, '2017-07-07 09:33:11', '2017-07-07 09:33:11'),
(31, 'Рошен', 'Де Люкс', 10, 7, '2017-07-07 09:33:11', '2017-07-07 09:33:11'),
(32, 'Рошен', 'Гран При', 5, 7, '2017-07-07 09:33:11', '2017-07-07 09:33:11'),
(33, 'Рошен', 'Лещина', 5, 7, '2017-07-07 10:25:05', '2017-07-07 10:25:05');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `description` text,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `img`, `name`, `weight`, `articul`, `candies`, `newprice`, `oldprice`, `category_id`, `updated_at`, `created_at`) VALUES
(1, '1.png', 'Шкатулка с росписью', 1000, '15-600', 30, 78, 85, 1, '2017-07-05 15:51:57', '2017-07-05 15:51:57'),
(2, '2.2.png', 'Паровозик', 1200, '15-700', 20, 65, 73, 1, '2017-07-05 15:54:29', '2017-07-05 15:54:29'),
(3, '', 'Петривка', 1200, '45-800', 30, 120, 125, 1, '2017-07-06 11:31:14', '2017-07-06 08:18:09'),
(4, '7.png', 'Мишка', 600, '10-600', 20, 45, 50, 2, '2017-07-06 08:22:29', '2017-07-06 08:22:29'),
(5, '14.png', 'Петушок', 600, '10-600', 20, 45, 50, 2, '2017-07-06 08:24:05', '2017-07-06 08:24:05'),
(6, '20.png', 'Дед Мороз', 750, '750-11', 35, 56, 60, 2, '2017-07-06 08:34:26', '2017-07-06 08:34:26'),
(7, '8.png', 'Веселых праздников', 1000, '150-60', 45, 86, 92, 1, '2017-07-07 10:24:07', '2017-07-07 09:33:08');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
