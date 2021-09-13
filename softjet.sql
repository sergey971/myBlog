-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Сен 13 2021 г., 16:44
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `softjet`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `intro` text NOT NULL,
  `text` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `pubdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `intro`, `text`, `author`, `pubdate`) VALUES
(39, 'Старт', 'Сегодня мы начинаем', 'Это будет первый пост, и я даже не знаю о чем написать наверное начну с того что этот \"Блог\" моя первая работа и я ей доволен ведь несколько месяцев у меня не чего не было в сети а сейчас действительно что то есть мною созданное))) и это очень круто, было классно разбираться в этом и я уверен что продолжу работу и обучение. Не судите строго о дизайн ведь в первую очередь я был нацелен на код хотя там нужно сделать уборку. Еще много предстоит сделать и изучать и я уверен это будет великолепное путешествие в мир программирования. Всем спасибо)))  ', 'Murin Sergey', '2021-09-10 01:11:32');

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id`, `title`) VALUES
(1, 'Ижевск'),
(2, 'Можга'),
(3, 'Глазов'),
(4, 'Воткинск'),
(5, 'Камбарка');

-- --------------------------------------------------------

--
-- Структура таблицы `history`
--

CREATE TABLE `history` (
  `id` int NOT NULL,
  `title` varchar(256) NOT NULL,
  `intro` text NOT NULL,
  `text` text NOT NULL,
  `author` varchar(76) NOT NULL,
  `pubdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE `image` (
  `id` int NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `image`
--

INSERT INTO `image` (`id`, `photo`) VALUES
(48, '1-min.JPG'),
(49, 'adrian-hartanto-uZFwvWVtL-c-unsplash.jpg'),
(50, 'fon.jpg'),
(51, 'imgonline-com-ua-Resize-RibknGam3bz.jpg'),
(52, 'OmQIMrl-kTo.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `item`
--

CREATE TABLE `item` (
  `id` int NOT NULL,
  `title` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `item`
--

INSERT INTO `item` (`id`, `title`) VALUES
(1, 'Контакты'),
(2, 'Обо мне'),
(3, 'Порфолио'),
(4, 'Жизнь'),
(5, 'Семья'),
(6, 'Фото альбом'),
(7, 'История'),
(8, 'Путешествия');

-- --------------------------------------------------------

--
-- Структура таблицы `picture`
--

CREATE TABLE `picture` (
  `id` int NOT NULL,
  `image` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `picture`
--

INSERT INTO `picture` (`id`, `image`) VALUES
(1, 'user_images/1630389708-php.png');

-- --------------------------------------------------------

--
-- Структура таблицы `street`
--

CREATE TABLE `street` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `id_city` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `street`
--

INSERT INTO `street` (`id`, `title`, `id_city`) VALUES
(1, 'Ул. Ленина', 1),
(2, 'Ул. Воровского', 1),
(3, 'Ул. Петрова', 1),
(4, 'Ул. Кирова', 1),
(5, 'Ул. Горбунова', 2),
(6, 'Ул. Быстрых', 2),
(7, 'Ул. Можгинская', 2),
(8, 'Ул. Наговицына', 2),
(9, 'Ул. Береговая', 3),
(10, 'Ул. Западная', 3),
(11, 'Ул. Вторая', 3),
(12, 'Ул. Восточная', 3),
(13, 'Ул. Заречная', 3),
(14, 'Ул. 1 Мая', 4),
(15, 'Ул. Борьбы', 4),
(16, 'Ул. Азина', 4),
(17, 'Ул. Верхняя', 4),
(18, 'Ул. Гоголя', 4),
(19, 'Ул. Лесной переулок', 5),
(20, 'Ул. Ленина', 5),
(21, 'Ул. Пушкина', 5),
(22, 'Ул. Лермонтова', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `travel`
--

CREATE TABLE `travel` (
  `id` int NOT NULL,
  `title` varchar(256) NOT NULL,
  `intro` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `text` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `pubdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `travel`
--

INSERT INTO `travel` (`id`, `title`, `intro`, `text`, `author`, `pubdate`) VALUES
(4, 'Первое путешествие', 'Сочи было круто)))', 'было все очень круто', 'Murin Sergey', '2021-09-13 15:22:50');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(22, 'Murin Sergey', 'murin336417');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `street`
--
ALTER TABLE `street`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `travel`
--
ALTER TABLE `travel`
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
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `history`
--
ALTER TABLE `history`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `image`
--
ALTER TABLE `image`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT для таблицы `item`
--
ALTER TABLE `item`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `street`
--
ALTER TABLE `street`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `travel`
--
ALTER TABLE `travel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
